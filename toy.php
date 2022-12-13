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
      <h2>Toys</h2>
      <?php foreach($toys as $toy) : ?>
      <div class="col-3">

       <div class="np-card">

        <div class="image-container">
          <img src="<?php echo $toy->image ?>" alt="<?php echo $toy->name ?>">
        </div>

        <div class="info-container p-3">
          <img class="icon" src="<?php echo $toy->category->icon ?>" alt="">
          <h4 class="product-brand">Marca: <?php echo $toy->brand ?></h4>
          <h5 class="product-name">Articolo: <?php echo $toy->name ?></h5>
          <span class="price">Costo: &euro;<?php echo number_format("$toy->price",2,',','.')?></span>
          <p class="ingredients"> Materiale: <?php echo $toy->material?></p>
          <p>Misura: <?php echo $toy->size ?></p>
        </div>

       </div>
      </div>
      <?php endforeach ; ?>
    </div>

  </div>
</main>
 <?php  include_once __DIR__ . '/Views/Layout/footer.php'; ?>