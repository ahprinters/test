<?php
class Calculator
{
    public function add(int $a, $b): int
    {
        return $a + $b;
    }
}
$calculator = new Calculator();
echo $calculator->add(10, 20);