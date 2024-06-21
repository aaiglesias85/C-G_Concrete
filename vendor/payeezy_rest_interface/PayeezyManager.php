<?php
/**
 * File: PayeezyManager.php.
 * Author: Yosvel Reyes Fonfria <yosvel.fonfria@gmail.com>
 * Created At: 6/15/15 9:15 PM
 *
 */

require_once __DIR__ . '/../paypal_rest_interface/Logger.php';

class PayeezyManager
{

    const TXN_PURCHASE                          = '00';
    const TXN_PRE_AUTHORISATION                 = '01';
    const TXN_PRE_AUTHORISATION_COMPLETION      = '02';
    const TXN_FORCED_POST                       = '03';
    const TXN_REFUND                            = '04';
    const TXN_PRE_AUTHORISATION_ONLY            = '05';
    const TXN_PAYPAL_ORDER                      = '07';
    const TXN_VOID                              = '13';

    const TXN_TAGGED_PRE_AUTHORISATION_COMPLETION   = '32';

    const TXN_TAGGED_VOID                       = '33';
    const TXN_TAGGED_REFUND                     = '34';
    const TXN_CASHOUT                           = '83';
    const TXN_ACTIVATION                        = '85';
    const TXN_BALANCE_INQUIRY                   = '86';
    const TXN_RELOAD                            = '88';
    const TXN_DEACTIVATION                      = '89';

    const API                                   = '/transaction/v19';

    const CVD_NOT_SUPPORTED                     = 0;
    const CVD_USER_PROVIDED                     = 1;
    const CVD_VALUE_ILLEGIBLE                   = 2;
    const CVD_DATA_NOT_AVAILABLE                = 9;


    private $gatewayId;
    private $gatewayPwd;
    private $hmacKey;
    private $hmacKeyId;
    private $successCallback;
    private $failureCallback;
    private $lastError;


    public function __construct($gatewayId, $gatewayPwd, $hmacKey, $hmacKeyId, $gatewayUri, $successCallback, $failureCallback)
    {
        $this->gatewayId    = $gatewayId;
        $this->gatewayPwd   = $gatewayPwd;
        $this->hmacKey      = $hmacKey;
        $this->hmacKeyId    = $hmacKeyId;
        $this->gatewayUri   = $gatewayUri;

        assert(is_callable($successCallback));
        assert(is_callable($failureCallback));

        $this->successCallback = $successCallback;
        $this->failureCallback = $failureCallback;

    }

    /**
     * Execute a payment request against Payeezy TM Gateway (Bank Of America)
     * @param array $paymentData    the payment data expect this structure array('amount' => '', 'fee' => '', 'card_number' => '', 'expiry', 'name' => '', 'cvv2' => '', 'card_type' => '', 'reference' => '', 'reference2' => '', 'client_ip' => '', 'client_email' => '','address' => null)
     * @param int   $fee
     * @return bool|mixed
     */
    public function creditCardPurchase(array $paymentData)
    {
        $data = array();

        $this->validate(array('amount', 'fee', 'card_number', 'expiry', 'name', 'cvv2', 'card_type', 'reference'), $paymentData);

        //normalization process...
        $data['amount']     = floatval($paymentData['amount']) + floatval($paymentData['fee']);
        $data['cc_number']  = $paymentData['card_number'];
        $expiry             = explode("/", $paymentData['expiry']);

        if(count($expiry) > 1)
        {
            $e = $expiry[0];
            if(strlen($expiry[1]) > 2)
                $e .= substr($expiry[1], -2, 2);
            else
                $e .= $expiry[1];
        }
        else
            $e = $expiry;


        $data['cc_expiry']              = $e;
        $data['cardholder_name']        = $paymentData['name'];
        $data['cc_verification_str2']   = $paymentData['cvv2'];
        $data['card_type']              = $paymentData['card_type'];
        $data['reference_no']           = $paymentData['reference'];

        //optional fields....
        if(isset($paymentData['address']) && is_array($paymentData['address']))
            $data['address'] = $this->addrNormalize($paymentData['address']);

        if(isset($paymentData['client_ip']))
            $data['client_ip'] = $paymentData['client_ip'];

        if(isset($paymentData['client_email']))
            $data['client_email'] = $paymentData['client_email'];

        if(isset($paymentData['reference2']))
            $data['customer_ref'] = $paymentData['reference2'];


        //completeness...
        $data['gateway_id']         = $this->gatewayId;
        $data['password']           = $this->gatewayPwd;
        $data['transaction_type']   = self::TXN_PURCHASE;
        $data['cvd_presence_ind'] = self::CVD_USER_PROVIDED;

        Logger::write("Data ejecutada: " . var_export($data, true));

        $data = json_encode($data);
        Logger::write("Data Encoded: " . $data);
        Logger::write("Error Data Encoded: " . var_export(json_last_error(), true));

        return $this->executePayment($data);
    }

    public function creditCardPurchasePreAuth(array $paymentData)
    {
        $data = array();

        $this->validate(array('amount', 'fee', 'card_number', 'expiry', 'name', 'cvv2', 'card_type', 'reference'), $paymentData);

        //normalization process...
        $data['amount'] = floatval($paymentData['amount']) + floatval($paymentData['fee']);
        $data['cc_number'] = $paymentData['card_number'];
        $expiry = explode("/", $paymentData['expiry']);

        if (count($expiry) > 1) {
            $e = $expiry[0];
            if (strlen($expiry[1]) > 2)
                $e .= substr($expiry[1], -2, 2);
            else
                $e .= $expiry[1];
        } else
            $e = $expiry;


        $data['cc_expiry'] = $e;
        $data['cardholder_name'] = $paymentData['name'];
        $data['cc_verification_str2'] = $paymentData['cvv2'];
        $data['card_type'] = $paymentData['card_type'];
        $data['reference_no'] = $paymentData['reference'];

        //optional fields....
        if (isset($paymentData['address']) && is_array($paymentData['address']))
            $data['address'] = $this->addrNormalize($paymentData['address']);

        if (isset($paymentData['client_ip']))
            $data['client_ip'] = $paymentData['client_ip'];

        if (isset($paymentData['client_email']))
            $data['client_email'] = $paymentData['client_email'];

        if (isset($paymentData['reference2']))
            $data['customer_ref'] = $paymentData['reference2'];


        //completeness...
        $data['gateway_id'] = $this->gatewayId;
        $data['password'] = $this->gatewayPwd;
        $data['transaction_type'] = self::TXN_PRE_AUTHORISATION;
        $data['cvd_presence_ind']   = self::CVD_USER_PROVIDED;

        Logger::write("Data ejecutada: ".var_export($data, true));

        $result = $this->executePayment(json_encode($data));

        $resultado = array();

        if (false !== $result) {
            $resultado['success'] = true;
            $resultado['reference_no'] = $data['reference_no'];
            $resultado['customer_ref'] = $data['customer_ref'];
        } else {
            $resultado['success'] = false;
        }
        return $resultado;
    }

    public function creditCardPurchaseAuthComplete(array $paymentData)
    {
        $data = array();

        $this->validate(array('amount', 'fee', 'card_number', 'expiry', 'name', 'cvv2', 'card_type', 'reference'), $paymentData);

        //normalization process...
        $data['amount'] = floatval($paymentData['amount']) + floatval($paymentData['fee']);
        $data['cc_number'] = $paymentData['card_number'];
        $expiry = explode("/", $paymentData['expiry']);

        if (count($expiry) > 1) {
            $e = $expiry[0];
            if (strlen($expiry[1]) > 2)
                $e .= substr($expiry[1], -2, 2);
            else
                $e .= $expiry[1];
        } else
            $e = $expiry;


        $data['cc_expiry'] = $e;
        $data['cardholder_name'] = $paymentData['name'];
        $data['cc_verification_str2'] = $paymentData['cvv2'];
        $data['card_type'] = $paymentData['card_type'];
        $data['reference_no'] = $paymentData['reference'];

        //optional fields....
        if (isset($paymentData['address']) && is_array($paymentData['address']))
            $data['address'] = $this->addrNormalize($paymentData['address']);

        if (isset($paymentData['client_ip']))
            $data['client_ip'] = $paymentData['client_ip'];

        if (isset($paymentData['client_email']))
            $data['client_email'] = $paymentData['client_email'];

        if (isset($paymentData['reference2']))
            $data['customer_ref'] = $paymentData['reference2'];


        //completeness...
        $data['gateway_id'] = $this->gatewayId;
        $data['password'] = $this->gatewayPwd;
        $data['transaction_type'] = self::TXN_PRE_AUTHORISATION_COMPLETION;
        $data['cvd_presence_ind']   = self::CVD_USER_PROVIDED;

        $data['authorization_num'] = $paymentData['authorization_num'];

        Logger::write("Data ejecutada: ".var_export($data, true));

        return $this->executePayment(json_encode($data));

    }

    public function creditCardPurchaseVoid(array $paymentData)
    {
        $data = array();

        $this->validate(array('amount', 'fee', 'card_number', 'expiry', 'name', 'cvv2', 'card_type', 'reference'), $paymentData);

        //normalization process...
        $data['amount'] = floatval($paymentData['amount']) + floatval($paymentData['fee']);
        $data['cc_number'] = $paymentData['card_number'];
        $expiry = explode("/", $paymentData['expiry']);

        if (count($expiry) > 1) {
            $e = $expiry[0];
            if (strlen($expiry[1]) > 2)
                $e .= substr($expiry[1], -2, 2);
            else
                $e .= $expiry[1];
        } else
            $e = $expiry;


        $data['cc_expiry'] = $e;
        $data['cardholder_name'] = $paymentData['name'];
        $data['cc_verification_str2'] = $paymentData['cvv2'];
        $data['card_type'] = $paymentData['card_type'];
        $data['reference_no'] = $paymentData['reference'];

        //optional fields....
        if (isset($paymentData['address']) && is_array($paymentData['address']))
            $data['address'] = $this->addrNormalize($paymentData['address']);

        if (isset($paymentData['client_ip']))
            $data['client_ip'] = $paymentData['client_ip'];

        if (isset($paymentData['client_email']))
            $data['client_email'] = $paymentData['client_email'];

        if (isset($paymentData['reference2']))
            $data['customer_ref'] = $paymentData['reference2'];


        //completeness...
        $data['gateway_id'] = $this->gatewayId;
        $data['password'] = $this->gatewayPwd;
        $data['transaction_type'] = self::TXN_VOID;
        $data['cvd_presence_ind']   = self::CVD_USER_PROVIDED;

        $data['authorization_num'] = $paymentData['authorization_num'];

        Logger::write("Data ejecutada: ".var_export($data, true));

        return $this->executePayment(json_encode($data));

    }

    private function addrNormalize(array $address)
    {
        $this->validate(array('street', 'city', 'state', 'country', 'postcode'), $address);

        $normalized = array(
            'address1'  =>  $address['street'],
            'city'      =>  $address['city'],
            'zip'       =>  $address['postcode'],
            'country_code' => $address['country']
        );

        /*$normalized['cc_verification_str1'] = sprintf(
            "%s|%s|%s|%s|%s",
            ,
            $address['postcode'],
            $address['city'],
            $address['state'],
            $address['country']
        );

        $normalized['zip_code'] = $address['postcode'];*/

        return $normalized;

    }

    private function validate(array $needle, array $data)
    {
        $missedKeys = array();
        foreach($needle as $key)
        {
            if(!array_key_exists($key, $data))
            {
                $missedKeys[] = $key;
            }
        }

        if(count($missedKeys) > 0)
            throw new \Exception('the following keys are missing on data: ', implode(", ", $missedKeys));
    }

    private function executePayment($transaction)
    {

        assert(is_string($transaction));

        //generate the hmac hash
        $date = gmstrftime("%Y-%m-%dT%H:%M:%S") . "Z";
        $hashContent = sha1($transaction);
        $hashRequest = "POST\napplication/json\n" . $hashContent . "\n" . $date . "\n" . self::API;
        $hmacHash = base64_encode(hash_hmac('sha1', $hashRequest, $this->hmacKey, true));

        $headers = [
            'Content-Type: application/json',
            'Accept: application/json',
            'Content-Length: '. strlen($transaction),
            'X-GGe4-Content-SHA1: ' . sha1($transaction),
            'X-GGe4-Date: ' . $date,
            'Authorization: ' . 'GGE4_API ' . $this->hmacKeyId . ":" . $hmacHash,
        ];

        $options = [
            CURLOPT_FRESH_CONNECT   => true,
            CURLOPT_FORBID_REUSE    => true,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_VERBOSE         => false,
            CURLOPT_HEADER          => false,
            CURLOPT_SSL_VERIFYPEER  => false,
            CURLOPT_POST            => true,
            CURLOPT_HTTPHEADER      => $headers,
            CURLOPT_POSTFIELDS      => $transaction,
            CURLOPT_URL             => $this->gatewayUri . self::API
        ];

        $result = false;
        $this->lastError = 'Unable to process payment, try later (connection with Bank Of America can not be established right now)';

        $h = curl_init();

        if($h)
        {
            curl_setopt_array($h, $options);

            //drop these debug lines from here....
            ob_start();
            echo date('Y-m-d H:i:s') . ": ------------- Request Content --------------------\n";
            print_r($options);

            $response = curl_exec($h);
            echo "\n\n";
            echo date('Y-m-d H:i:s') . ": ------------- Response ---------------------------\n";
            echo $response . "\n\n";
            $text = ob_get_contents();
            ob_end_clean();
            Logger::write($text);

            if($response)
            {

                $httpCode = curl_getinfo($h, CURLINFO_HTTP_CODE);

                if(2 == intval($httpCode/100))
                {
                    $received = json_decode($response, true);

                    if((boolean)$received['transaction_approved'])
                    {
                        $result = call_user_func($this->successCallback, $received);
                    }
                    else{
                        //it's a payment gateway error.
                        $this->decodeError($received);
                    }
                }
                else{
                    //there was an http error
                    $this->lastError = $response;
                    $result = call_user_func($this->failureCallback, $this->lastError);
                }
            }
            else
            {
                //it is a curl error execution error...
                $this->lastError = curl_error($h);
                $result =  call_user_func($this->failureCallback, $this->lastError);
            }

            curl_close($h);
        }

        return $result;
    }

    /**
     * Decode response errors received from payeezy api calls
     * @param $data the raw json encoded string received from api call
     */
    private function decodeError($data)
    {

        if((boolean)$data['transaction_error'])
        {
            $this->lastError = 'error en la transacción: ' . $data['exact_message'];
        }
        elseif(isset($data['error_number'])){
            $this->lastError = 'error en la transacción' . $data['error_description'];
        }
        else{
            $this->lastError = 'error en la transacción: ' . $data['bank_message'];
        }

    }

    public function getLastError()
    {
        return $this->lastError;
    }
}