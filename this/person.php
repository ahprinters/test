<php_check_syntax

<?php

class Person
{
    public $name;
    public $age;
    public $email;

    public function __construct($name, $age, $email)    
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;  
    }
    public function setName() {
      return $this->name. " ". $this->age. " ". $this->email;
    
    }   
    public function getName() {
        echo "Hello $this->name". $this->setName();
    }   
}
$person = new Person("sabbir", 22, "sabbir@.com");
$person->getName();
?>