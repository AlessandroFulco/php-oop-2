<?php
class Cart {

    public $products;
    public $subtotal;
    

    public function __construct($products, $subtotal) {
        $this->products = $products;
        $this->subtotal = $subtotal;
    }

}