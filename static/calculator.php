<?php
class Calculator {
    public static $PI = 3.1416;

    public static function add($a, $b) {
        return $a + $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }

    public function testing() {
        echo "hello, We are testing";
    }

    public static function areaOfCircle($radius) {
        return self::$PI * $radius * $radius;
    }

    public static function describeCircle($radius) {
        $area = self::areaOfCircle($radius);
        return "A Circle with radius $radius has an area of $area";
    }
}

// echo Calculator::add(10, 20); // Outputs: 30
// PHP_EOL;
// echo Calculator::multiply(10, 20); // Outputs: 200
// $p1 = new Calculator();
// $p1->testing();
// echo Calculator::areaOfCircle(10);
echo Calculator::describeCircle(10);



?>