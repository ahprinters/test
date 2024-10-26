<?php
namespace Refund;

interface RefundGateway
{
    public function processRefund(float $amount): bool;
}
?>
