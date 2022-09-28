<?php

include __DIR__ . '/../db/products.php';
// inizializzare classe Cart
// inizializzare $order (array di prodotti) e $total_price
// implementare costruttore che valorizza $this->order
// implementare metodo setTotalPrice che cicla array $order e calcola prezzo totale in $this->total_price

class Cart{
    public $order;
    public $totalPrice;

    function __construct($order, $totalPrice)
    {
        $this->order = $order;
        $this->totalPrice = $totalPrice;
    }

    public function setTotalPrice($order){
        $sum = 0;
        foreach($order as $orderItem){
            $sum+=$orderItem->price;
        }
        $this->totalPrice += $sum;
    }
}