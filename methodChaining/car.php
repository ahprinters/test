<?php

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

    // Method to set the engine property
    public function setEngine($engine) {
        // Assign the provided value to the engine property
        $this->engine = $engine;
        // Return the current object to allow method chaining
        return $this;
    }
}

class Engine {
    public $type;

    // Constructor
    public function __construct($type) {
        $this->type = $type;
    }

    public function setType($type) {
        $this->type = $type;
    }
}

class Car {
    public $brand;
    public $model;
    public $engine;

    public function __construct($brand, $model, $engine) {
        $this->brand = $brand;
        $this->model = $model;
        $this->engine = $engine;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
        return $this;
    }

    public function setModel($model) {
        $this->model = $model;
        return $this;
    }

    public function displayCarInfo() {
        echo "Car: $this->brand $this->model with engine type: " . $this->engine->type . "\n";
    }
}

// Creating an Engine object
$engine = new Engine("V8");

// Creating a Car object
$car = new Car("Ford", "Mustang", $engine);

// Setting new brand and model
$car->setBrand("Chevrolet")->setModel("Camaro")->engine->setType("V6");

// Displaying car information
$car->displayCarInfo();

// Displaying engine type and car model
echo "Engine Type: " . $car->engine->type . "\n";
echo "Car Model: " . $car->model . "\n";

?>
