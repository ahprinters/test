<?php
 include("shape.php");

 class Circle extends Shape {
     public function draw() {
         echo "Drawing a circle\n";
     }
 }
 
 $c1 = new Circle();
 $c1->draw();
 
?>