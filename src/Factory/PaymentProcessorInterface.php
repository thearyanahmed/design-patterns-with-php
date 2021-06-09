<?php 

namespace Thearyanahmed\DesignPatterns\Factory;

interface PaymentProcessorInterface {
	public function generateSessionToken() : string;

    /**
     * @param string $token
     * @return void
     */
    public function processPayment(string $token): void;
}