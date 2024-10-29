<?php
namespace PaymentSystem;

include_once __DIR__ . '/PaymentGateway.php';
include_once __DIR__ . '/RefundGateway.php';

class Stripe implements PaymentGateway, RefundGateway {
    public function processPayment(float $amount): bool {
        echo "Processing a payment of $amount via Stripe.";
        return true;
    }

    public function processRefund(float $amount): bool {
        echo "Processing a refund of $amount via Stripe.";
        return true;
    }
}

$stripe = new Stripe();
$stripe->processPayment(100.50);
?>
