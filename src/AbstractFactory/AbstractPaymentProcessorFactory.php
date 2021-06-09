<?php


namespace Thearyanahmed\DesignPatterns\AbstractFactory;

use Thearyanahmed\DesignPatterns\Factory\PaymentProcessorInterface;

abstract class AbstractPaymentProcessorFactory
{
    abstract public function getPaymentProcessor(string $paymentGateway) : PaymentProcessorInterface;
}