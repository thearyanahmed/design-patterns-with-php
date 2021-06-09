<?php


namespace Thearyanahmed\DesignPatterns\Factory;

class Paypal implements PaymentProcessorInterface
{
    /**
     * @throws \Exception
     */
    public function generateSessionToken(): string
    {
        // as you see, this is a different logic than stripe's
        return 'paypal_' . random_int(1,20) . '_some_other_logic_' . random_int(21,40);
    }

    public function processPayment(string $token): void
    {
        print_r('processing payment with ' . $token);
    }
}