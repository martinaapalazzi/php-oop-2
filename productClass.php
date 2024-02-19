<?php

class Product {
    public $title;
    public $photo;
    public $price;

    public function __construct ($title, $photo, $price)
    {
        $this->title = $title;
        $this->photo = $photo;
        $this->price = $price;
    }
}