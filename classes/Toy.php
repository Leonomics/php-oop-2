<?php

include_once __DIR__ . '/PhysicalProduct.php';
class Toy extends PhysicalProduct{
    public $duration;

    function __construct($duration)
    {
        $this->duration = $duration;
    }
}
?>
