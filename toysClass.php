<?php
require_once __DIR__. ('/productClass.php');

class Toys extends Product {
    public $material;

    public function __construct($title, $photo, $price, $material)
    {
        parent::__construct($title, $photo, $price, $material);
        $this->material = $material;
    }
}