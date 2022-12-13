<?php 

  class Food extends Product {

    public $ingredients ;
    public $taste;

    public function __construct($_brand, $_name, $_price, $_image, Category $_category, $_ingredients, $_taste)
    {
     parent::__construct($_brand, $_name, $_price, $_image, $_category);
      $this->ingredients = $_ingredients;
      $this->taste = $_taste;
    }

    public function getIngredients(){
      return join(", ", $this->ingredients);
    }
  }

?>