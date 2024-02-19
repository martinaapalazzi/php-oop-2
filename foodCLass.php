<?php
require_once __DIR__. ('/productClass.php');

class Food extends Product {
    public $diets;

    public function __construct($title, $photo, $price, $diets)
    {
        parent::__construct($title, $photo, $price, $diets);
        $this->diets = $diets;
    }
}