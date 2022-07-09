<?php
class Cart {
    public $products;
    public $subtotal;
    

    public function __construct($products) {
        $this->products = $products;
        $this->getPrice($this->products);
    }


    public function getPrice($products){
        
        foreach ($products as $key => $value) {
            $this->subtotal += $products[$key]->price;
        }
        return $this->subtotal;
    }

}