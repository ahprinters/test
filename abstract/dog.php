<?php
// https://www.facebook.com/Faisalahmed2410/videos/9397295430297001?idorvanity=25102351709412336
include "animal.php";

class Dog extends Animal
{
    public function sound()
    {
        echo "Bark\n";
    }
}
$dog = new Dog();
$dog->eat();
$dog->sound();
?>