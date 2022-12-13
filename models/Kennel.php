<?php 

class Kennel extends Product {

  public $ingredients ;
  public $taste;

  public function __construct($_brand, $_name, $_price, $_image, $_category)
  {
   parent::__construct($_brand, $_name, $_price, $_image, $_category);
    
  }
}

?>