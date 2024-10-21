<?php

// Define a class named Person
class Person
{
    // Declare public properties for the class
    public $name;
    public $age;
    public $email;

    // Constructor method to initialize the properties
    public function __construct($name, $age, $email)    
    {
        // Assign the provided values to the class properties
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;  
    }

    // Method to concatenate and return the name, age, and email
    public function setName() {
        return $this->name . " " . $this->age . " " . $this->email;
    }   

    // Method to print a greeting message along with the concatenated string from setName()
    public function getName() {
        echo "Hello $this->name " . $this->setName();
    }   
}

// Create a new instance of the Person class
$person = new Person("sabbir", 22, "sabbir@.com");

// Call the getName() method on the $person object
$person->getName();

?>