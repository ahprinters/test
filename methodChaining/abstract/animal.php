<?php
abstract class Animal
{
    abstract public function sound();

    public function eat()
    {
        echo "This animal is eating.\n";
    }
}

// You cannot instantiate an abstract class directly
// $animal = new Animal(); // This line will cause an error

// Example of a concrete class extending the abstract class
class Dog extends Animal
{
    public function sound()
    {
        echo "Bark\n";
    }
}

// Create an instance of the Dog class
$dog = new Dog();
$dog->eat();
$dog->sound();
?>
