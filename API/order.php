<?php

include __DIR__ . "/../db/products.php";
include __DIR__ . "/../classes/Cart.php";

$cart = new Cart($order);
$cart ->setTotalPrice($order);
// includere classe Cart
// passare al costruttore array $order
// invocare metodo setTotalPrice
// stampare totale ordine

// var_dump($order[0]->price);
// exit;

$res = [
    'success' => true,
    'response' => [
        'products' => $cart->order,
        'totalPrice' => $cart->totalPrice,
    ]
];

header('Content-Type: application/json');

echo json_encode($res);



