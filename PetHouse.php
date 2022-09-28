<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/PhysicalProduct.php';
class PetHouse extends PhysicalProduct{
    public $animalType;
    public $outdoor;

    function __construct($name, $poster, $description, $brand, $price, $weight, $volume, $animalType, $outdoor)
    {
        parent::__construct($name, $poster, $description, $brand, $price, $weight, $volume);
        $this->animalType = $animalType;
        $this->outdoor = $outdoor;
    }
}

?>