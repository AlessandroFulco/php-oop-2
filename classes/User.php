<?php

class User
{

    // attributes
    private $name;
    private $surname;
    private $username;
    private $email;
    private $Address;

    private CreditCard $credits;

    private Cart $currentCart;

    private $total;

    
    
    public function __construct($name, $surname, $username, $email, $Address, CreditCard $creditCard, Cart $currentCart) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
        $this->email = $email;
        $this->Address = $Address;
        $this->credits = $creditCard;
        $this->currentCart = $currentCart;
        $this->total = $currentCart->subtotal;
        $this->setSales(0);
    }


    public function setSales($sales) {
        $currentSale = 100 - $sales;
        $this->total = $this->currentCart->subtotal / 100 * $currentSale;
        return $this->total;
    }
}