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
}

// echo Calculator::add(10, 20); // Outputs: 30
// PHP_EOL;
// echo Calculator::multiply(10, 20); // Outputs: 200
$p1 = new Calculator();
$p1->testing(); 
?> 
