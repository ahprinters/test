<php_check_syntax             = true>

<?php   

class Engine
{
   public $type;
   public $power;
   public $volume;  

   public function __construct($type, $power, $volume)
   {
       $this->type = $type;
       $this->power = $power;
       $this->volume = $volume;     
   }
}