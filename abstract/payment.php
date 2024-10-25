<?php
// https://www.facebook.com/Faisalahmed2410/videos/9397295430297001?idorvanity=25102351709412336
abstract class Payment
{
    abstract public function process(); 

    public function loggedTransaction()
    {
        echo "Logged transaction\n";
    }
   
}   
?>