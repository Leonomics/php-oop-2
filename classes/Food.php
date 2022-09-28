<?php

// include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/PhysicalProduct.php';
include_once __DIR__ . '/PromoFlyer.php';

class Food extends PhysicalProduct{
    public $animalType;
    public $vegan;
    use PromoFlyer;

    function __construct( $name, $poster, $description, $brand, $price, $weight, $volume, $animalType, $vegan)
    {
        parent::__construct($name, $poster, $description, $brand, $price, $weight, $volume);
        $this->animalType = $animalType;
        $this->vegan = $vegan;
    }
}
?>