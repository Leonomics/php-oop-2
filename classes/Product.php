<?php

class Product{
    public $name;
    public $price;
    public $poster;
    public $description;
    public $brand;

    function __construct($name, $poster, $description, $brand, $price )
    {
        $this->name = $name;
        $this->poster = $poster;
        $this->description = $description;
        $this->brand = $brand;
        $this->price = $price;
    }
}