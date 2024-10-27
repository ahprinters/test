<?php
interface PaymentGetway
{
    public function processPayment(float $amount):bool;
    public function loggedTransaction();
}

?>