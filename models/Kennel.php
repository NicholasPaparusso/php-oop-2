<?php 

class Kennel extends Product {

  public $size ;
  public $material;
  public $supportedWeigth;

  public function __construct($_brand, $_name, $_price, $_image, Category $_category, $_size , $_material, $_supportedWeigth, )
  {
   parent::__construct($_brand, $_name, $_price, $_image, $_category);
    $this->size =$_size ;
    $this->material = $_material;
    $this->supportedWeigth = $_supportedWeigth;
  }
}

?>