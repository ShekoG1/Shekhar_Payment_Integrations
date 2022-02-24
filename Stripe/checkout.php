<?php
session_start();
require_once('stripe-php/init.php');

// echo $product;

//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//API key
\Stripe\Stripe::setApiKey('sk_test_51K3apgCBcBlX1SKLjVWRq5nlvCoptMxKL1Z8Xl6ANFCXprg479xstZQ9DuZfd9EPGwte9NZJIrIHQDPuBhMA1bTj008bvxlXFT');

$stripe = new \Stripe\StripeClient(
    'sk_test_51K3apgCBcBlX1SKLjVWRq5nlvCoptMxKL1Z8Xl6ANFCXprg479xstZQ9DuZfd9EPGwte9NZJIrIHQDPuBhMA1bTj008bvxlXFT'
  );

        // //START Create Customer
        // $customer = $stripe->customers->create([
        //     'name' => 'john Dow',
        //     'email' => 'johndoe@gmail.com',
        // ]);
        // //Make customer accessable
        // $_SESSION['customerName'] = $customer->name;
        // $_SESSION['customerEmail'] = $customer->email;
        // //END Create Customer

    // //Check payment method    
    // if($product == "price_1K3dtzCBcBlX1SKLoPAB4wxn"){
    // $mode = "payment";
    // echo $mode;
    // }
    // else if($product == "price_1K3edvCBcBlX1SKLeQQx2YhK"){
    // $mode = "subscription";
    // echo $mode;
    // }else{
    // //Throw error here!
    // echo "This is an error!";
    // }

//Load Checkout
//create checkout session
$YOUR_DOMAIN = 'myDom.html';
$success = 'http://localhost/Projects/Test%20Projects/StripeTests/ThisisStripe/ResponsePages/success.php';
$cancel = 'http://localhost/Projects/Test%20Projects/StripeTests/ThisisStripe/ResponsePages/cancell.php';

//Apply payment method
$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    'price' => 'price_1K3edvCBcBlX1SKLeQQx2YhK',
    'quantity' => 1,
  ]],
  'mode' => "subscription",
  'success_url' => $success ,
  'cancel_url' => $cancel,
]);
$_SESSION['subscription'] = json_encode($checkout_session->id);

//More Headers
header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
?>