<?php
$subscriptionId = $_GET['ChecksubscriptionId'];

$authorise = base64_encode('AZFXgp4g8JDBHByhdPyMRPxng6TeueVvrPu9bgrcJtxyM8Rnn4Hi7Xn_FaadUFwAs3Mryx_s7WkBgBVV:ENB7wK6cwGSNdSm08CAU-g2_C-GZ_ZVKj4cIEK6IgyHsry0drr45HW6mpmTC7n9Ckz8HVGOE12BZb33p');

$headers = [
'Content-Type: application/json',
'Authorization: Basic '.$authorise
];

// Initialize Curl 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v1/billing/subscriptions/$subscriptionId"); // set live website where data from
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); // default
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); // default
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$content = curl_exec($curl);

$val= json_decode($content);
$status = $val->status;

echo $status;

?>