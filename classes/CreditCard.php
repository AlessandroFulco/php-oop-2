<?php

class CreditCard {

    private $name;
    private $surname;
    private $year;
    private $able_to_buy;

    public function __construct($name, $surname, $year){
        $this->name = $name;
        $this->surname = $surname;
        $this->year = $year;
        $this->cardVerify($this->year);
    }

    public function cardVerify($year) {
        $dateNow_stamp = strtotime(date('y-m-d'));
        $dateCard_stamp = strtotime($this->year);

        if($dateCard_stamp >= $dateNow_stamp){
            $this->able_to_buy = true;
            echo $this->name . ' Puoi comprare';
            
        } else {
            $this->able_to_buy = false; 
            echo '<br>' . $this->name . ' Non puoi comprare la tua carta è scaduta ';
        }
        return $this->able_to_buy;
    }
    

}