<?php

include_once __DIR__ . '/Product.php';

class PhysicalProduct extends Product{
    public $weight;
    public $volume;

    function __construct($param)
    {
        $this->weight = $param['weight'];
        $this->volume = $param['volume'];
    }
}