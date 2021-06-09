<?php


namespace Thearyanahmed\DesignPatterns\Factory;

use Thearyanahmed\DesignPatterns\AbstractFactory\AbstractPaymentProcessorFactory;

class InternationalPaymentProcessorFactory extends AbstractPaymentProcessorFactory
{
    /**
     * @param string $paymentGateway
     * @return PaymentProcessorInterface
     * @throws \Exception
     */
    public function getPaymentProcessor(string $paymentGateway) : PaymentProcessorInterface
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