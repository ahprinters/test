<?php
namespace PaymentSystem;

interface RefundGateway {
    public function processRefund(float $amount): bool;
}
?>
