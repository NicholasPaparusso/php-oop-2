<?php 
 require_once __DIR__ . '/models/Product.php';
 require_once __DIR__ . '/models/Category.php';
 require_once __DIR__ . '/models/Food.php';
 require_once __DIR__ . '/models/Kennel.php';
 require_once __DIR__ . '/models/Toy.php';
 require_once __DIR__ . '/Database/db.php';
 ?>

 <?php  include_once __DIR__ . '/Views/Layout/head.php'; ?>
 <?php  include_once __DIR__ . '/Views/Layout/header.php'; ?>

<main>
  <div class="container-fluid p-5">
    <div class="row">
      <h2>Foods</h2>
      <?php foreach($foods as $food) : ?>
      <div class="col-3">

       <div class="np-card">

        <div class="image-container">
          <img src="<?php echo $food->image ?>" alt="<?php echo $food->name ?>">
        </div>

        <div class="info-container p-3">
          <img class="icon" src="<?php echo $food->category->icon ?>" alt="">
          <h4 class="product-brand">Marca: <?php echo $food->brand ?></h4>
          <h5 class="product-name">Articolo: <?php echo $food->name ?></h5>
          <span class="price">Costo: &euro;<?php echo number_format("$food->price",2,',','.')?></span>
          <p class="ingredients"> Ingredienti: <?php echo $food->getIngredients()?></p>
          <p>Gusto: <?php echo $food->taste ?></p>
        </div>

       </div>
      </div>
      <?php endforeach ; ?>
    </div>
  </div>
</main>
 <?php  include_once __DIR__ . '/Views/Layout/footer.php'; ?>