<?php
include_once __DIR__ . '/classes/User.php';
include_once __DIR__ . '/classes/UserSigned.php';
include_once __DIR__ . '/classes/CreditCard.php';



$credits_mario = new CreditCard('Mario', 'Rossi', '2026-05');
$mario = new User('Mario', 'Rossi', 'Mario88', 'mario@gmail.com', 'via indirizzo 43', $credits_mario);
var_dump($mario);


$credits_giovanni = new CreditCard('Giovanni', 'Rossi', '2023-08');
$giovanni = new UserSigned('Giovanni', 'Rossi', 'giovanni12', 'giov@gmail.com', 'via indirizzo 23', $credits_giovanni );
var_dump($giovanni);

