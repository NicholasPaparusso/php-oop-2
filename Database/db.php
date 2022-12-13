<?php 
  $foodList =[
    [
      "brand" => 'Cesar',
      "name" => 'Ricette Classiche',
      "price" => 3.50,
      "image" => "https://it.cesar.com/wp-content/themes/Cesar/img/page/prodotti/vaschette/classiche/manzo-pollo.png",
      "type" => 'dog',
      "icon" => 'https://static.vecteezy.com/system/resources/previews/006/059/952/non_2x/dog-icon-isolated-on-white-background-puppy-head-pictogram-free-vector.jpg',
      "taste" => 'manzo e pollo',
      "ingredients" => ['carne e derivati','cereali', 'minerali','sottoprodotti di origine vegetale','estratti proteici vegetali']
    ],

    [
      "brand" => 'Gourmet',
      "name" => 'Mousse Mix',
      "price" => 2.50,
      "image" => "https://www.purina.it/sites/default/files/styles/product_210x210/public/2022-01/GOURMET%20Diamant%20Gatto%20Sfilaccetti%20con%20Tacchino%20Naturale%20%281%29.png?itok=KUb9ZJe3",
      "type" => 'cat',
      "icon" => 'https://static.vecteezy.com/system/resources/previews/006/059/848/non_2x/cat-line-icon-isolated-on-white-background-kitty-sign-free-vector.jpg',
      "taste" => 'pollo',
      "ingredients" => ['carne e derivati','cereali', 'minerali']
    ],
  ];

  $toyList = [
    [
      "brand" => 'Pet Toys',
      "name" => 'Palla in gomma con tirante',
      "price" => 7.50,
      "image" => "https://www.recordit.com/2070-thickbox_default/palla-in-gomma-con-tirante.jpg",
      "type" => 'dog',
      "icon" => 'https://static.vecteezy.com/system/resources/previews/006/059/952/non_2x/dog-icon-isolated-on-white-background-puppy-head-pictogram-free-vector.jpg',
      "material" => 'Gomma',
      "size" => 'Ø 6,5 cm'
    ],
    [
      "brand" => 'Cat&R  ina',
      "name" => 'Topo con elastico',
      "price" => 4.50,
      "image" => "https://www.recordit.com/2509-thickbox_default/giochi-per-gatti-con-elastico-verdi-assortiti-12-pcs-conf.jpg",
      "type" => 'cat',
      "icon" => 'https://static.vecteezy.com/system/resources/previews/006/059/848/non_2x/cat-line-icon-isolated-on-white-background-kitty-sign-free-vector.jpg',
      "material" => 'Cotone',
      "size" => ' 16 x 8 x 8h cm'
    ],
  ];

  $foods = [];
  $toys = [];

  foreach($foodList as $food){
    $foods [] = new Food($food['brand'],$food['name'],$food['price'],$food['image'],new Category($food['type'], $food['icon']) , $food['ingredients'], $food['taste'] );
  };

  foreach($toyList as $toy){
    $toys [] = new Toy($toy['brand'],$toy['name'],$toy['price'],$toy['image'],new Category($toy['type'], $toy['icon']) , $toy['ingredients'], $toy['taste'] );
  }

?>

