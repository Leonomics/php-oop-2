<?php

include __DIR__ . "/../Product.php";
include __DIR__ . "/../PhysicalProduct.php";
include __DIR__ . "/../Food.php";
include __DIR__ . "/db/products.php";


$order = [
    "item1" => $crocchetteGatti,
    "item2" => $crocchetteGatti,
    "item3" => $dogHouse,
];

var_dump($order);

//$products = [
    //$crocchette = new Food("dog", false),
//];