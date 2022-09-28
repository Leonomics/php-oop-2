<?php

include_once __DIR__ . '/Product.php';

class PhysicalProduct extends Product{
    public $weight;
    public $volume;

    function __construct($name, $poster, $description, $brand, $price, $weight, $volume)
    {
        parent::__construct($name, $poster, $description, $brand, $price);
        $this->weight = $weight;
        $this->volume = $volume;
    }
}