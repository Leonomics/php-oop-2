<?php

include __DIR__ . "/../Product.php";
include __DIR__ . "/../PhysicalProduct.php";
include __DIR__ . "/../Food.php";

$crocchetteGatti = new Food("crocchette per cani", null, "pacco di crocchette per cani", "Royal Canin", 20, 1, 5, "dog", false);
$crocchetteCani = new Food("crocchette per gatti", null, "pacco di crocchette per gatti", "Royal Canin", 20, 1, 5, "cat", false);
$dogHouse = new Food("cuccia per cani", null, "cuccia per cani da esterni", "Doghouse inc.", 100, 15 , 50, "dog", true);


//$products = [
    //$crocchette = new Food("dog", false),
//];
