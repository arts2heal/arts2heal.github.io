<?php

require('stripe-php-5.1.1/init.php');

\Stripe\Stripe::setApiKey('sk_live_ulzOCinOx7mdHkxQfeJzi3MH');

if ((!isset($_POST['stripeToken'])) || (!isset($_POST['amount'])))
   exit;   
$token = $_POST['stripeToken'];
$amount = $_POST['amount'];

$charge = \Stripe\Charge::create(array(
  "amount" => $amount,
  "currency" => "gbp",
  "description" => "Donation",
  "source" => $token,
));
