<?php
require_once __DIR__.('/productClass.php');
require __DIR__.('/foodCLass.php');
require __DIR__.('/toysClass.php');
require __DIR__.('/sleepingbagsClass.php');

$dogsCategory = new Category('Dogs');
$catsCategory = new Category('Cats');

$allProductsArray = [];

$productChickeNuggets = new Food ('Chicken nuggets', 'img/chicken-nugget-dog.png', '5£', $dogsCategory, 'Meat');
$allProductsArray[] = $productChickeNuggets;


$productBall = new Toys ('Ball', 'img/cat-ball.png', '8£', $catsCategory, 'Plastic');
$allProductsArray[] = $productBall;


$productDogBed = new Sleepingbags ('Dog bed', 'img/dog-bed.png', '25£', $dogsCategory, 'Square', 'Small');
$allProductsArray[] = $productDogBed;

/*
$productChickeNuggets = new Food ('Chicken nuggets', 'img/percorso/nuggets', '5£', new Category('Dogs'), 'Meat');
//var_dump($productChickeNuggets);

echo '<h2> Card 1 </h2>'.
'<div> Title: '.$productChickeNuggets->title.'</div>'.
'<br>'.
'<div> Photo: '.$productChickeNuggets->photo.'</div>'.
'<br>'.
'<div>Price: '.$productChickeNuggets->price.'</div>'.
'<br>'.
'<div> Category: '.$productChickeNuggets->getCategory()->nameCategory.'</div>'.
'<br>';

$productBall = new Toys ('Ball', 'img/percorso/ball', '8£', new Category('Cats'), 'Plastic');
//var_dump($productBall);

echo '<h2> Card 2 </h2>'.
'<div> Title: '.$productBall->title.'</div>'.
'<br>'.
'<div> Photo: '.$productBall->photo.'</div>'.
'<br>'.
'<div>Price: '.$productBall->price.'</div>'.
'<br>'.
'<div> Category: '.$productBall->getCategory()->nameCategory.'</div>'.
'<br>';

$productDogBed = new Sleepingbags ('Dog bed', 'img/percorso/dogbed', '25£', new Category('Dogs'), 'Square', 'Small');
//var_dump($productDogBed);

echo '<h2> Card 3 </h2>'.
'<div> Title: '.$productDogBed->title.'</div>'.
'<br>'.
'<div> Photo: '.$productDogBed->photo.'</div>'.
'<br>'.
'<div>Price: '.$productDogBed->price.'</div>'.
'<br>'.
'<div> Category: '.$productDogBed->getCategory()->nameCategory.'</div>'.
'<br>';
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                        Prodotti
                    </h2>
                </div>
                <div class="card me-3" style="width: 18rem;">
                    <img src="<?php echo $productChickeNuggets->photo; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                echo $productChickeNuggets->title;
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                echo '<div>Price: '.$productChickeNuggets->price.'</div>';
                            ?>
                        </p>
                        <a href="#" class="btn btn-primary">
                            Go somewhere
                        </a>
                    </div>
                </div>
                <div class="card me-3" style="width: 18rem;">
                    <img src="<?php echo $productBall->photo; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                echo $productBall->title;
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                echo '<div>Price: '.$productBall->price.'</div>';
                            ?>
                        </p>
                        <a href="#" class="btn btn-primary">
                            Go somewhere
                        </a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $productDogBed->photo; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                echo $productDogBed->title;
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                echo '<div>Price: '.$productDogBed->price.'</div>';
                            ?>
                        </p>
                        <a href="#" class="btn btn-primary">
                            Go somewhere
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>
</html>