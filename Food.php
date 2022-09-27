<?php

include_once __DIR__ . '/Product.php';

class Food extends PhysicalProduct{
    public $animalType;
    public $vegan = true;

    function __construct($param)
    {
        $this->animalType = $param['animalType'];
        $this->vegan = $param['vegan'];
    }
}
?>