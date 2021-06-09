<?php


namespace Thearyanahmed\DesignPatterns\AbstractFactory;


use Thearyanahmed\DesignPatterns\Factory\LocalPaymentProcessorFactory;
use Thearyanahmed\DesignPatterns\Factory\InternationalPaymentProcessorFactory;

class FactoryManager
{
    /**
     * @param string $type
     * @return AbstractPaymentProcessorFactory
     * @throws \Exception
     */
    public static function getPaymentProcessorFactory(string $type) : AbstractPaymentProcessorFactory
    {
        if($type === 'international') {
            return new InternationalPaymentProcessorFactory();
        }

        if($type === 'local') {
            return new LocalPaymentProcessorFactory();
        }

        throw new \Exception('unsupported type');
    }
}