<?php
$subscriptionId = $_GET['subscriptionId'];

// echo $subscriptionId;

// 'Content-Type'=> 'application/json',
// 'Authorization'=> 'Bearer access_token$sandbox$8d2hvnqhn4nzvmyp$f2e0f7f4f54c78d7a3798cae8e6e6073'
$authorise = base64_encode('AZFXgp4g8JDBHByhdPyMRPxng6TeueVvrPu9bgrcJtxyM8Rnn4Hi7Xn_FaadUFwAs3Mryx_s7WkBgBVV:ENB7wK6cwGSNdSm08CAU-g2_C-GZ_ZVKj4cIEK6IgyHsry0drr45HW6mpmTC7n9Ckz8HVGOE12BZb33p');
$data = [
    'reason'=>'Not Satisfied with Service'
];
$headers = [
'Content-Type: application/json',
'Authorization: Basic '.$authorise
];

// Initialize Curl 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api-m.sandbox.paypal.com/v1/billing/subscriptions/".$subscriptionId."/cancel"); // set live website where data from
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE); // default
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE); // default
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$content = curl_exec($curl);


// echo $content;

if($content == ""){
    echo "Success ". $content ."<br/> <a href='index.html'>Back to home page</a>";
}
else{
    echo "Failed: ". $content;
}
?>

