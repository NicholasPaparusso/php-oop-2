<!-- 
  esercizio di oggi:
nome repo: php-oop-2
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
- L’e-commerce vende **prodotti** per animali.
- I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
Allego lo schema fatto in classe (da considerarsi a titolo indicativo ma potete personalizzare come credete)
buon lavoro!
 -->

 <?php 
 require_once __DIR__ . '/Database/db.php';
 require_once __DIR__ . '/models/Product.php';
 require_once __DIR__ . '/models/Category.php.php';
 require_once __DIR__ . '/models/Food.php';
 require_once __DIR__ . '/models/Kennel.php';
 require_once __DIR__ . '/models/Toy.php';
 include_once __DIR__ . '/Views/Layout/head.php';
 include_once __DIR__ . '/Views/Layout/header.php';
 include_once __DIR__ . '/Views/Layout/footer.php';
 include_once __DIR__ . '/Views/Partials/product.php';
 ?>