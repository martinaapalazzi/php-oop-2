<?php
require_once __DIR__. ('/productClass.php');

class Sleepingbags extends Product {
    public $type;
    public $size;

    public function __construct($title, $photo, $price, Category $category, $description, $type, $size)
    {
        parent::__construct($title, $photo, $price, $category, $description);
        $this->type = $type;
        $this->size = $size;
    }
}