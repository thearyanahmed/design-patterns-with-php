<?php

use Thearyanahmed\DesignPatterns\Factory\PaymentProcessorFactory;

require_once './vendor/autoload.php';

$paymentGateway = 'paypal'; // supported: paypal, stripe

try {
    $gateway = PaymentProcessorFactory::getPaymentProcessor($paymentGateway);

    $token = $gateway->generateSessionToken();

    print_r("We got token " .  $token . " \n");

    print_r("Trying to make the payment...\n");

    $gateway->processPayment($token);

    print_r("\n");

} catch (Exception $e) {
    print_r("Sorry something went wrong. " . $e->getMessage() . "\n");
}

print_r("Quiting\n");
exit(1);