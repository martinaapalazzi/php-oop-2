<?php
require_once __DIR__. ('/productClass.php');

class Sleepingbags extends Product {
    public $type;
    public $size;

    public function __construct($title, $photo, $price, $type, $size)
    {
        parent::__construct($title, $photo, $price, $type, $size);
        $this->type = $type;
        $this->size = $size;
    }
}