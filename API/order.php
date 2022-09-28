<?php

include __DIR__ . "/../db/products.php";
include __DIR__ . "/../classes/Cart.php";

$cart = new Cart($order);
// includere classe Cart
// passare al costruttore array $order
// invocare metodo setTotalPrice
// stampare totale ordine

$res = [
    'success' => true,
    'response' => $products,
];

header('Content-Type: application/json');

echo json_encode($res);

var_dump($order);
