<?php


namespace Thearyanahmed\DesignPatterns\Factory;

use Exception;
use Thearyanahmed\DesignPatterns\DemonstratableInterface;

class FactoryDemo implements DemonstratableInterface
{
    public static function run()
    {
        $paymentGateway = 'stripe'; // supported: paypal, stripe

        try {
            $gateway = (new InternationalPaymentProcessorFactory)->getPaymentProcessor($paymentGateway);

            $token = $gateway->generateSessionToken();

            print_r("We got token " .  $token . " \n");

            print_r("Trying to make the payment...\n");

            $gateway->processPayment($token);

            print_r("\n");

        } catch (Exception $e) {
            print_r("Sorry something went wrong. " . $e->getMessage() . "\n");
        }
    }
}