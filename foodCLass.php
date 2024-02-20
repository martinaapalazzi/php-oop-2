<?php
require_once __DIR__. ('/productClass.php');

class Food extends Product {
    public $diets;

    public function __construct($title, $photo, $price, Category $category, $diets)
    {
        parent::__construct($title, $photo, $price, $category);
        $this->diets = $diets;
    }
}