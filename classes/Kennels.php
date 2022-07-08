<?php

class Kennels {
    use Products;

    public $matirials;
    public $height;
    public $width;
    public $depth;


    public function __construct($name, $price, $matirials, $height, $width, $depth) {
        $this->name = $name;
        $this->price = $price;
        $this->matirials = $matirials;
        $this->height = $height;
        $this->width = $width;
        $this->depth = $depth;
    }

}
