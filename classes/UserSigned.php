<?php

class UserSigned extends User {
    private $sales = 20;


    
    public function __construct($name, $surname, $username, $email, $Address, CreditCard $creditCard, Cart $currentCart) {
        parent::__construct($name, $surname, $username, $email, $Address, $creditCard, $currentCart);
        // percentuale di sconto per user registrato
        $this->sales = 20;
        $this->setSales($this->sales);
    }


    public function setSales($sales) {
        parent::setSales($sales);
    }
      
    
}

    

















  // $this->setSales($this->sales);
        // public function setSales($sales) {
        //     $sub_sales = 100 - $sales;
        //     $this->total = $this->currentCart->subtotal / 100 * $sub_sales;
        //     return $this->total;
        // }
    