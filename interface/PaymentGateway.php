<?php
namespace Payment;

interface PaymentGateway
{
    public function processPayment(float $amount): bool;
}
?>
