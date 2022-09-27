<?php

include_once __DIR__ . '/Product.php';

class Food extends PhysicalProduct{
    public $animalType;
    public $outdoor;

    function __construct($param)
    {
        $this->animalType = $param['animalType'];
        $this->outdoor = $param['outdoor'];
    }
}

?>