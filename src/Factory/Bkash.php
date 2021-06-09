<?php


namespace Thearyanahmed\DesignPatterns\Factory;


class Bkash implements PaymentProcessorInterface
{
    public function generateSessionToken(): string
    {
        return 'bkash_payment_' . mt_rand(1000,100000);
    }

    public function processPayment(string $token): void
    {
        print_r('processing bkash payment with ' . $token);
    }
}