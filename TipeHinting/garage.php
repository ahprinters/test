<?php
include 'car.php';

class Garage
{
    public function parkCar(Car $car): void
    {       
        echo "Car parked: " . $car->getModel() . "\n";
    }
}

$myCar = new Car("Tesla Model5");
$garage = new Garage();
$garage->parkCar($myCar);