<?php
include"paymentGateway.php";
class Stripe extends PaymentGateway
{
    public function getPaymentUrl()
    {
        return "https://stripe.com";
    }
}
?>