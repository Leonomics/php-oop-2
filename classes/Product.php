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
        $this->setBrand($brand);
        $this-> price = $price;
    }
    function setBrand($brand){
        if (is_string($brand)){
            $this-> brand = $brand;
        }else{
            throw new Exception('brand is not a string');
        }
    }
}