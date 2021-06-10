<?php


namespace Thearyanahmed\DesignPatterns\Factory;

class Paypal implements PaymentProcessorInterface
{
    /**
     * @throws \Exception
     */
    public function generateSessionToken(): string
    {
        $this->aComplexFunctionDuringSessionCreation();

        return 'paypal_' . random_int(1,20) . '_some_other_logic_' . random_int(21,40);
    }

    public function processPayment(string $token): void
    {
        print_r('processing payment with ' . $token);
    }

    private function aComplexFunctionDuringSessionCreation()
    {
        print_r("Doing some complex function when creating session token\n");
    }
}