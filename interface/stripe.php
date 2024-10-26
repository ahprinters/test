<?php

namespace PaymentSystem;

use Payment\PaymentGateway;
use Refund\RefundGateway;

class Stripe implements PaymentGateway, RefundGateway
{
    public function processPayment(float $amount): bool
    {
        echo "Processing a payment of $amount via Stripe."; 
        return true;
    }

    public function processRefund(float $amount): bool
    {
        echo "Refunding a payment of $amount via Stripe."; 
        return true;
    }
}

// Create an instance of the Stripe class
$s1 = new Stripe();
$s1->processPayment(100.50);
echo PHP_EOL;
$s1->processRefund(50.50);
?>
