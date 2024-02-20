<?php
require_once __DIR__.('/traits/hasDescription.php');
class Category //extends Product 
{
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

    use HasDescription;

    public function __construct (string $title, $photo, $price, Category $category, $description)
    {
        $this->title = $title;
        $this->photo = $photo;
        if (is_numeric($price)) {
            $this->price = $price;
        }
        else {
            throw new Exception('Value is not valid, it is NOT a number');
        }
        $this->setCategory($category);
        $this->description = $description;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        return $this->category = $category;
    }
}