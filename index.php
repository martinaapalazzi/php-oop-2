<?php
require_once __DIR__.('/productClass.php');
//require __DIR__.('/categoryClass.php');
require __DIR__.('/foodCLass.php');
require __DIR__.('/toysClass.php');
require __DIR__.('/sleepingbagsClass.php');

$productOne = new Product('Pollo', 'img/percorso', '5£');

var_dump($productOne);

$productOneCategory = new Category('Crocchette', 'img/percorso', '5£', 'Dog');
var_dump($productOneCategory);


