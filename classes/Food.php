<?php
class Food {
    use Products;

    private $scadenza;

    public function __construct($name, $price, $scadenza) {
        $this->name = $name;
        $this->price = $price;
        $this->scadenza = $scadenza;
    }

}