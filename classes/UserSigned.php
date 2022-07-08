<?php

class UserSigned extends User {
    private int $sales = 20;

    

    public function __construct($name, $surname, $username, $email, $Address, CreditCard $creditCard) {
        parent::__construct($name, $surname, $username, $email, $Address, $creditCard);
        // percentuale di sconto per user registrato
        $this->sales = 20;
    }
    

}

    