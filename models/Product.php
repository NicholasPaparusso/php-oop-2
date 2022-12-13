<?php 
  class Product{
    public $brand ;
    public $name ;
    public $price ;
    public $image ;
    public $category;
    /**
     * @param String $brand
     * @param String $name
     * @param Int $price
     * @param String $image
     * @param Category $category
     */
    public function __construct($_brand, $_name, $_price, $_image, Category $_category)
    {
      $this->brand  = $_brand ;
      $this->name  = $_name ;
      $this->price  = $_price ;
      $this->image  = $_image ;
      $this->category  =  $_category;
    }
  }
?>