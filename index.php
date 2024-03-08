<?php
    require_once __DIR__ . '/models/server.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Pet Shop</title>
</head>
<body>


    <header class="text-center py-3">
        <h1>Pet Shop</h1>
    </header>

    <main>
        <div class="container">
            <div class="row row-gap-4">
                <?php foreach($arrProducts as $product): ?>

                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="<?= $product->poster?>" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title"><?= $product->name?></h4>
                                <p class="card-text"><?= $product->description?></p>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text">Prezzo: <?= $product->getPrice() ?>€</p>
                                    <p class="card-text"><?= $product->getQuantity()?> disponibili</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text">Tipo: <?= $product->getType()?></p>
                                    <?php if(isset($product->calories)): ?>
                                        <p class="card-text"><?= $product->getCalories() ?> kcal</p>
                                    <?php elseif(isset($product->genre)):?>
                                        <p class="card-text">Genere: <?= $product->getGenre() ?></p>
                                    <?php elseif(isset($product->size)):?>
                                        <p class="card-text">Grandezza: <?= $product->sizeInCm($product->getSize()) ?> cm</p>
                                    <?php endif; ?>
                                </div>
                                <p class="card-text">Categoria: <?= $product->category->getCategory()?></p>

                            </div>
                        </div>
                    </div>

                <?php endforeach;?>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>