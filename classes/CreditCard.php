<?php

class CreditCard {

    private $name;
    private $surname;
    private $year;

    public function __construct($name, $surname, $year){
        $this->name = $name;
        $this->surname = $surname;
        $this->year = $year;
    }
    

}