<php_check_syntax             = true>

<?php   

class Engine
{
   public $type;
   public function __construct($type)
   {
       $this->type = $type;
   }    
   public function settype($type)
   {
       $this->type = $type;
       return $this;
   }
}