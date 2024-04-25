<?php 

require_once './PayeezyManager.php';


$data = [
    'amount' => 10.00,
    'number' => '4111111111111111',
    'expiry'    => '12/2019',
    'cc_name' => 'Pepe',
    'cc_surname' => 'El Cojo',
    'cvv2'    => '123',
    'card_type' => 'visa',
    'reference_no' => 1234
]; 


$gateway_id = 'AJ0152-01';
$gateway_password = 'nlvjtow954mj9ipd1ly78s508e5ak399';
$keyid = '254789';
$hmackey = '5u3nwJ1Kwax6mHMlrLf3x_w4tSKg5C7W';


$success = function(){ echo "ok"; };
$failure = function(){ echo "failure"; };


$pg = new PayeezyManager($gateway_id, $gateway_password, $hmackey, $keyid, 'https://api.demo.globalgatewaye4.firstdata.com', $success, $failure);
if(!$pg->creditCardPurchase($data))
    echo $pg->getLastError();

