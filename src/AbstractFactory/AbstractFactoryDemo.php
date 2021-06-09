<?php


namespace Thearyanahmed\DesignPatterns\AbstractFactory;


use Thearyanahmed\DesignPatterns\DemonstratableInterface;

use Exception;

class AbstractFactoryDemo implements DemonstratableInterface
{
    public static function run()
    {
        try {
            print_r("abstract factory demo");

            $processor = FactoryManager::getPaymentProcessorFactory('local'); // supported: international, local

            $paymentGateway = 'bkash'; // supported: international -> paypal, stripe, local -> bkash

            $gateway = $processor->getPaymentProcessor($paymentGateway);

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