<?php
// https://www.facebook.com/Faisalahmed2410/videos/9397295430297001?idorvanity=25102351709412336
include "payment.php";
class PayPalPayment extends Payment
{
    public function process()
    {
        echo "Process PayPal payment\n";
    }

}
$payment = new PayPalPayment();
$payment->process();
$payment->loggedTransaction();
?>