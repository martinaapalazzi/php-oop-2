<?php
require_once __DIR__.('/productClass.php');
require __DIR__.('/foodCLass.php');
require __DIR__.('/toysClass.php');
require __DIR__.('/sleepingbagsClass.php');

$dogsCategory = new Category('Dogs');
$catsCategory = new Category('Cats');

$allProductsArray = [];

try {
    $productChickeNuggets = new Food ('Chicken nuggets', 'img/chicken-nugget-dog.png', 5.51, $dogsCategory, 'Tasty chicken nuggets.', 'Meat');
    $allProductsArray[] = $productChickeNuggets;
}
catch (Exception $e) {
    echo '<h4 style="color: red;">Valore quantità prodotto generico non valido!</h4>';
}

try {
    $productBall = new Toys ('Ball', 'img/cat-ball.png', 8.59, $catsCategory, 'Lovely ball to play with.', 'Plastic');
    $allProductsArray[] = $productBall;
}

catch (Exception $e) {
    echo '<h4 style="color: red;">Valore quantità prodotto generico non valido!</h4>';
}

try {
    $productDogBed = new Sleepingbags ('Dog bed', 'img/dog-bed.png', 25.99, new Category('Dog'), 'Confy and fluffy dog bed.', 'Square', 'Small');
    $allProductsArray[] = $productDogBed;
}


catch (Exception $e) {
    echo '<h4 style="color: red;">Valore quantità prodotto generico non valido!</h4>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP OOP Shop</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        PHP OOP Shop
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        Prodotti:
                    </h2>
                </div>
                <?php
                    foreach ($allProductsArray as $singleProduct) {
                ?>
                    <div class="card me-3" style="width: 18rem;">
                        <div class="photo-product-container pt-4">
                            <img src="<?php echo $singleProduct->photo; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php
                                    echo $singleProduct->title;
                                ?>
                            </h5>
                            <p class="card-text">
                                <div>
                                    <?php
                                        echo '<div>Price: £'.$singleProduct->price.'</div>';
                                    ?>
                                </div>
                                <div>
                                    <?php
                                        echo '<div> Category: '.$singleProduct->getCategory()->nameCategory.'</div>';
                                    ?>
                                </div>
                                <?php
                                    if (get_class($singleProduct) == 'Food') {
                                ?>
                                <div>
                                    <?php
                                        echo '<div> Diet: '.$singleProduct->diets.'</div>';
                                    ?>
                                </div>
                                <?php 
                                    }
                                    else if (get_class($singleProduct) == 'Toys') {
                                ?>
                                <div>
                                    <?php
                                        echo '<div> Material: '.$singleProduct->material.'</div>';
                                    ?>
                                </div>
                                <?php
                                    }
                                    else if (get_class($singleProduct) == 'Sleepingbags') {
                                ?>
                                <div>
                                    <?php
                                        echo '<div> Type: '.$singleProduct->type.'</div>';
                                        echo '<div> Size: '.$singleProduct->size.'</div>';
                                    ?>
                                </div>
                                <?php
                                    }
                                ?>
                                <div>
                                    <?php
                                        echo '<div> Description: '.$singleProduct->description.'</div>';
                                    ?>
                                </div>
                            </p>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>

    </main>
</body>
</html>