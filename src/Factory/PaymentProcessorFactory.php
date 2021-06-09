<?php


namespace Thearyanahmed\DesignPatterns\Factory;

class PaymentProcessorFactory
{
    /**
     * @param string $paymentGateway
     * @return PaymentProcessorInterface
     * @throws \Exception
     */
    public static function getPaymentProcessor(string $paymentGateway) : PaymentProcessorInterface
    {
        if($paymentGateway === 'paypal') {
            return new Paypal();
        }

        if($paymentGateway === 'stripe') {
            return new Stripe();
        }

        throw new \Exception('Unsupported payment gateway');
    }
}