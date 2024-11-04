<?php
class Product
{
    private $name;
    

    public function __construct($name, $price, $weight)
        {
            $this->name = $name;
        
        }
        public function getName()
        {
            return $this->name;
        }
}



