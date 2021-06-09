<?php


namespace Thearyanahmed\DesignPatterns\Factory;


use Thearyanahmed\DesignPatterns\AbstractFactory\AbstractPaymentProcessorFactory;

class LocalPaymentProcessorFactory extends AbstractPaymentProcessorFactory
{
    /**
     * @param string $paymentGateway
     * @return PaymentProcessorInterface
     * @throws \Exception
     */
    public function getPaymentProcessor(string $paymentGateway) : PaymentProcessorInterface
    {
        if($paymentGateway === 'bkash') {
            return new Bkash();
        }

        throw new \Exception('Unsupported payment gateway');
    }
}