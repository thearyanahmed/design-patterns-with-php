<?php


namespace Thearyanahmed\DesignPatterns\Factory;


class Stripe implements PaymentProcessorInterface
{
    public function generateSessionToken(): string
    {
        return 'stripe_' . bin2hex(openssl_random_pseudo_bytes(3));
    }

    public function processPayment(string $token) : void
    {
        print_r('processing payment with ' . $token);
    }
}