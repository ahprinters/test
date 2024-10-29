<?php
include "shape.php";
class Rectangle
{
    public function draw()
    {
        echo "Drawing a rectangle\n";
    }
}   

$r1 = new Rectangle();
$r1->draw();
