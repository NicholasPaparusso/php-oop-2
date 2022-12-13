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

    <div class="row">
      <h2>Kennels</h2>
      <?php foreach($kennels as $kennel) : ?>
      <div class="col-3">

       <div class="np-card">

        <div class="image-container">
          <img src="<?php echo $kennel->image ?>" alt="<?php echo $kennel->name ?>">
        </div>

        <div class="info-container p-3">
          <img class="icon" src="<?php echo $kennel->category->icon ?>" alt="">
          <h4 class="product-brand">Marca: <?php echo $kennel->brand ?></h4>
          <h5 class="product-name">Articolo: <?php echo $kennel->name ?></h5>
          <span class="price">Costo: &euro;<?php echo number_format("$kennel->price",2,',','.')?></span>
          <p class="ingredients"> Materiale: <?php echo $kennel->material?></p>
          <p>Dimensioni: <?php echo $kennel->size ?></p>
          <p>Peso supportato: <?php echo $kennel->supportedWeight ?></p>
        </div>

       </div>
      </div>
      <?php endforeach ; ?>
    </div>
    </div>
  </div>
</main>