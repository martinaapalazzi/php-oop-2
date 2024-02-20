<?php
class Category extends Product {
    public $nameCategory;

    public function __construct($nameCategory)
    {
        $this->nameCategory = $nameCategory;
    }
};

class Product {
    public $title = null;
    public $photo = null;
    public $price = null;
    public $category = null;

    public function __construct (string $title, $photo, $price, Category $category)
    {
        $this->title = $title;
        $this->photo = $photo;
        $this->price = $price;
        $this->setCategory($category);
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        return $this->category = $category;
    }
}