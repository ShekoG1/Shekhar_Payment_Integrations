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

        //START Create Customer
        $customer = $stripe->customers->create([
            'name' => 'john Doe',
            'email' => 'johndoe@gmail.com',
        ]);

        echo $customer;
?>