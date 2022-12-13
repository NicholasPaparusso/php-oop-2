<?php 

class Toy extends Product {

  public $material ;
  public $size;

  public function __construct($_brand, $_name, $_price, $_image, $_category, $_material, $_size)
  {
   parent::__construct($_brand, $_name, $_price, $_image, $_category);
    $this->material = $_material;
    $this->size = $_size;
  }
}

?>