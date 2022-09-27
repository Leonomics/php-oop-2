<?php

class Product{
    public $name;
    public $price;
    public $poster;
    public $description;
    public $brand;

    function __construct($param)
    {
        $this->name = $param['name'];
        $this->poster = $param['poster'];
        $this->description = $param['description'];
        $this->weight = $param['weight'];
        $this->volume = $param['volume'];
        $this->brand = $param['brand'];
        $this->price = $param['price'];
    }
}