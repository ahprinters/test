<?php
// https://www.facebook.com/Faisalahmed2410/videos/9397295430297001?idorvanity=25102351709412336
include "payment.php";

class CreditCardPayment extends Payment
{
    public function process()
    {
        echo "Process credit card payment\n";
    }
}

$payment = new CreditCardPayment();
$payment->process();
$payment->loggedTransaction();

?>
