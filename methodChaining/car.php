<?php
include 'engine.php';

// Define the Car class
class Car {
    // Properties of the Car class
    public $brand;
    public $model;
    public $engine;

    // Constructor method to initialize the properties
    public function __construct($brand, $model, $engine)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->engine = $engine;
    }

    // Method to display car details
    public function displayDetails()
    {
        return "Brand: " . $this->brand . ", Model: " . $this->model;
    }
}

// Instantiate the Engine class and set its properties
$engine = new Engine(1, 1, 1);
$car = new Car("Toyota", "Camry", $engine);
echo "Engine Type: " . $car->engine->type . " " . $car->displayDetails();
?>
