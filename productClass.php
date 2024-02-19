<?php
class Category extends Product {
    public $nameCategory;

    public function __construct($nameCategory)
    {
        $this->nameCategory = $nameCategory;
    }
};
class Product {
    public $title;
    public $photo;
    public $price;
    public $category;

    public function __construct (string $title, $photo, $price, Category $category )
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