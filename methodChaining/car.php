<?php
include 'engine.php';
// Define the Car class
class Car {
    // Public properties that can be accessed from outside the class
    public $brand;
    public $model;
    public $engine;

    // Constructor method to initialize the properties when a new object is created
    public function __construct($brand, $model, $engine) {
        // Assign the provided values to the properties
        $this->brand = $brand;
        $this->model = $model;
        $this->engine = $engine;
    }

    // Method to set the brand property
    public function setBrand($brand) {
        // Assign the provided value to the brand property
        $this->brand = $brand;
        // Return the current object to allow method chaining
        return $this;
    }

    // Method to set the model property
    public function setModel($model) {
        // Assign the provided value to the model property
        $this->model = $model;
        // Return the current object to allow method chaining
        return $this;
    }

    // Method to display the details of the car
    public function displayCarInfo() {
        echo "Car: $this->brand $this->model with engine type" . $this->engine->type . "\n";
    }

}

$car = new Car("Ford", "Mustang", new Engine("V8", 500, 2.0));
$car->setBrand("Chevrolet")->setModel("Camaro")->engine->settype("V8")->displayCarInfo;
?>
