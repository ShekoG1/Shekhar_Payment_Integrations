<?php
session_start();
require_once('stripe-php/init.php');

// echo $product;

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//get id from index page
$id = $_GET['customerId'];
// echo $id;
$stripe = new \Stripe\StripeClient(
    'sk_test_51K3apgCBcBlX1SKLjVWRq5nlvCoptMxKL1Z8Xl6ANFCXprg479xstZQ9DuZfd9EPGwte9NZJIrIHQDPuBhMA1bTj008bvxlXFT'
  );

//CHECK ID OF SUBSCRIPTION
$stripe_customer = $stripe->customers->retrieve(
    $id, 
    [ 'expand' => ['subscriptions']]);
$subscriptionId = $stripe_customer->subscriptions->data[0]->id;

 echo $subscriptionId;

//CANCELL SUBSCRIPTION
$cancelled = $stripe->subscriptions->cancel(
    $subscriptionId,[]);

echo $cancelled;

?>
