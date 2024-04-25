<?php 


require_once './PayeezyManager.php';


/*$data = [
    'amount' => 10.00,
    'cc_number' => '5500000000000004',
    'cc_expiry'    => '1219',
    'cardholder_name' => 'El modernisimo v19',
    'cvd_code'    => '123',
    'card_type' => 'mastercard',
    'reference_no' => mt_rand(),
    'transaction_type' => '00',
    'cvd_presence_ind' => 1
];*/

$data = array(
    'amount' => 10.00,
    'fee' => 0.35,
    'card_number' => '5500000000000004',
    'expiry' => '1219',
    'name' => 'Dionisio Corrales',
    'cvv2' => '123',
    'card_type' => 'mastercard',
    'reference' => mt_rand(),
    'reference2' => uniqid(),
    'client_ip' => gethostbyname(gethostname()),
    'client_email' => 'dummy@email.org',
    'address' => [
        'street'    => 'Prado # 26',
        'city'      => 'Santa Clara',
        'state'     => 'VC',
        'country'   => 'CU',
        'postcode'  => '50300'
    ]
);

/*$data = array(
    'amount' => 10,
    'cc_number'=> '4111111111111111',
    'cc_expiry'=> '1017',
    'cardholder_name' => 'david',
    'cc_verification_str1' => '13880SW|33183|Miami|FL|USA',
    'cc_verification_str2' => '708',
    'reference_no' => '45875584543',
    'transaction_type'=>'00',
    'zip_code'=>'33183',
    'client_ip'=>'152.168.1.25',
    'client_email'=>'agorgoy@gmail.com',
    'language'=>'EN',
    'cvd_presence_ind' => 1
);*/



$gateway_id = 'AJ0152-01';
$gateway_password = 'pjqxi60m5q62u7k9mdridho458426sxc';
$keyid = '254789';
$hmackey = 'LFYZW_bxY_TFn5wbMHacP3Mun~iW3YC3';


$success = function($response){ echo "SUCCESS: payment succeeded \n" . $response . "\n"; };
$failure = function($response){ echo "FAILURE: \n" . $response . "\n"; };


$pg = new PayeezyManager($gateway_id, $gateway_password, $hmackey, $keyid, 'https://api.demo.globalgatewaye4.firstdata.com', $success, $failure);
$pg->creditCardPurchase($data);

