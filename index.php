<?php
require_once __DIR__.('/productClass.php');
require __DIR__.('/foodCLass.php');
require __DIR__.('/toysClass.php');
require __DIR__.('/sleepingbagsClass.php');

$productChickeNuggets = new Food ('Chicken nuggets', 'img/percorso/nuggets', '5£', new Category('Food'), 'Meat');
var_dump($productChickeNuggets);

echo '<div> Title: '.$productChickeNuggets->title.'</div>'.
'<br>'.
'<div> Photo: '.$productChickeNuggets->photo.'</div>'.
'<br>'.
'<div>Price: '.$productChickeNuggets->price.'</div>'.
'<br>'.
'<div> Category: '.$productChickeNuggets->getCategory()->nameCategory.'</div>';

$productBall = new Toys ('Ball', 'img/percorso/ball', '8£', new Category('Toys'), 'Plastic');
var_dump($productBall);

echo '<div> Title: '.$productBall->title.'</div>'.
'<br>'.
'<div> Photo: '.$productBall->photo.'</div>'.
'<br>'.
'<div>Price: '.$productBall->price.'</div>'.
'<br>'.
'<div> Category: '.$productBall->getCategory()->nameCategory.'</div>';

$productDogBed = new Sleepingbags ('Dog bed', 'img/percorso/dogbed', '25£', new Category('Pets beds'), 'Square', 'Small');
var_dump($productDogBed);

echo '<div> Title: '.$productDogBed->title.'</div>'.
'<br>'.
'<div> Photo: '.$productDogBed->photo.'</div>'.
'<br>'.
'<div>Price: '.$productDogBed->price.'</div>'.
'<br>'.
'<div> Category: '.$productDogBed->getCategory()->nameCategory.'</div>';



