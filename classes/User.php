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
    
    
    public function __construct($name, $surname, $username, $email, $Address, CreditCard $creditCard) {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
        $this->email = $email;
        $this->Address = $Address;
        $this->credits = $creditCard;
    }
}