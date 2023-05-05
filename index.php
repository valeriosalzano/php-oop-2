<?php
require_once __DIR__ . "/Data/db.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <title>php-oop-2</title>
</head>

<body class="bg-black text-white">
  <header class="py-5 text-center">
    <h1 class="display-1 fw-semibold text-uppercase">php-oop-2</h1>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php
      foreach ($products as $product) { ?>

        <div class="col">
          <div class="card h-100 p-1 p-md-2 p-lg-3 text-bg-dark">
            <img src="<?php echo $product->img_path ?>" class="card-img-to" alt="<?php echo "immagine $product->title " ?>">
            <div class="card-body">
              <h5 class="card-title fw-semibold fs-3 my-3"><?php echo $product->title ?></h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-bg-dark">
                  <strong>Prezzo</strong>: &euro; <?php echo $product->price ?>
                </li>
                <?php if($product instanceof ProductToy){ ?>
                <li class="list-group-item text-bg-dark">
                  <strong>Tipologia</strong>: <?php echo $product->type ?>
                </li>
                <?php } else if($product instanceof ProductFood){ ?>
                <li class="list-group-item text-bg-dark">
                  <strong>Peso</strong>: <?php echo $product->weight ?> kg
                </li>
                <?php } else if($product instanceof ProductHouse){ ?>
                <li class="list-group-item text-bg-dark">
                  <strong>Dimensioni</strong>: <?php echo $product->size ?>
                </li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>

      <?php } ?>
    </div>
  </main>

</body>

</html>