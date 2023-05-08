<?php

require_once __DIR__ . "/Data/db.php";
require_once __DIR__ . "/Models/UserSubscribed.php";

session_start();

if (!isset($_SESSION['user'])) {
  $user = new User;
} else {
  $user = new UserSubscribed($_SESSION['user']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <title>php-oop-2</title>
</head>

<body class="bg-black text-white">
  <header class="py-5 text-center">
    <h1 class="display-1 fw-semibold text-uppercase">php-oop-2</h1>
  </header>

  <main class="container">
    <!-- user bar -->
    <div class="row py-3 justify-content-between mb-3">

      <div class="col-auto">
        <?php if ($user instanceof User) { ?>
          <div class="input-group w-auto">
            <a href="subscribe.php"><button class="btn btn-outline-secondary" type="button" id="button-addon1">Registrati</button></a>
          </div>
          <div class="form-text text-light">Iscriviti per uno sconto del 20% sugli acquisti.</div>
        <?php } else { ?>
          <div class="form-text text-light">Per te uno sconto del 20% sui nostri prodotti.</div>
        <?php } ?>
      </div>

      <button class="btn btn-outline-secondary col-3 mb-3" type="button"> Vai al pagamento <i class="fa-solid fa-cart-shopping"></i></button>
    </div>
    <!-- products cards -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
      <?php
      foreach ($products as $product) { ?>

        <div class="col">
          <div class="card h-100 p-1 p-md-2 p-lg-3 text-bg-dark position-relative">
            <!-- icons -->
            <span class="position-absolute top-0 end-0 p-2 fs-5">
              <?php foreach ($product->categories as $category) { ?>
                <i class="<?php echo $category->icon ?> text-bg-dark rounded-circle border p-2"></i>
              <?php } ?>
            </span>
            <?php if (is_subclass_of($product,'Product')) { ?>
              <span class="position-absolute top-0 start-0 p-2 fs-5">
                <i class="<?php echo $product->icon ?> text-bg-dark rounded-circle border p-2 "></i>
              </span>
            <?php } ?>

            <!-- product image_path check -->
            <?php if ($product->img_path != '') { ?>
              <img src="<?php echo $product->img_path ?>" class="card-img-to" alt="<?php echo "immagine $product->title " ?>">
            <?php } else { ?>
              <img src="https://picsum.photos/500/400" class="card-img-to" alt="<?php echo "immagine $product->title " ?>">
            <?php } ?>

            <!-- card infos -->
            <div class="card-body pb-5">
              <h5 class="card-title fw-semibold fs-3 my-3"><?php echo $product->title ?></h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-bg-dark">
                  <strong>Prezzo</strong>:
                  <?php if ($user instanceof UserSubscribed) { ?>
                    <small class='text-decoration-line-through me-1'> <?php echo $product->getPrice() ?></small>
                  <?php echo $product->getPrice() * (1 - $user->getDiscount() / 100);
                  } else {
                    echo $product->getPrice();
                  } ?>
                  &euro;
                </li>
                <!-- list will be different for every Product subclass -->
                <?php if ($product instanceof ProductToy) { ?>
                  <li class="list-group-item text-bg-dark">
                    <strong>Tipologia</strong>: <?php echo $product->type ?>
                  </li>
                <?php } else if ($product instanceof ProductFood) { ?>
                  <li class="list-group-item text-bg-dark">
                    <strong>Peso</strong>: <?php echo $product->weight ?> kg
                  </li>
                <?php } else if ($product instanceof ProductHouse) { ?>
                  <li class="list-group-item text-bg-dark">
                    <strong>Dimensioni</strong>: <?php echo $product->size ?>
                  </li>
                <?php } ?>
              </ul>
              <button type="button" class="btn btn-secondary position-absolute bottom-0 start-50 translate-middle-x mb-2">Aggiungi <i class="fa-solid fa-cart-shopping"></i></button>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>
  </main>

</body>

</html>