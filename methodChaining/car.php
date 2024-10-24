<?php
class Engine {
    public $type;

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
