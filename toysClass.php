<?php
require_once __DIR__. ('/productClass.php');

class Toys extends Product {
    public $material;

    public function __construct($title, $photo, $price, Category $category, $description, $material)
    {
        parent::__construct($title, $photo, $price, $category, $description);
        $this->material = $material;
    }
}