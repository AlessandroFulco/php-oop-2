<?php

// class
include_once __DIR__ . '/classes/User.php';
include_once __DIR__ . '/classes/UserSigned.php';
include_once __DIR__ . '/classes/CreditCard.php';
include_once __DIR__ . '/classes/Products.php';
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Pesticides.php';
include_once __DIR__ . '/classes/Kennels.php';
include_once __DIR__ . '/classes/Cart.php';




// Food products
$crocchette_brit = new Food('Crocchette Brit 12kg + 2kg ', 59.99, '2023-12-12');
// var_dump($crocchette_brit);

$crocchette_forza10 = new Food('Crocchette Forza10 14kg + 1kg ', 40.09, '2023-12-12');
// var_dump($crocchette_forza10);

$crocchette_purizon = new Food('Crocchette Purizon 1kg ', 4.99, '2023-12-12');
// var_dump($crocchette_purizon);


// Pesticides products
$pesticida_Advantix = new Pesticides('Advantix', 24.99, '2023-12-12', 'antipulci');
// var_dump($pesticida_Advantix);
$pesticida_Exspot = new Pesticides('Exspot', 27.99, '2023-12-12', 'antibiotico');
// var_dump($pesticida_Exspot);


// Kennels products
$house_sun = new Kennels('Casetta Tenda da sole', 106.99, 'wood', '82cm', '91cm', '71cm');
// var_dump($house_sun);
$house_dogVilla = new Kennels('Cuccia Ferplast DogVilla', 152.99, 'plastic', '79cm', '111cm', '84cm');
// var_dump($house_dogVilla);
$house_spike = new Kennels('Cuccia Spike Classic', 181.99, 'wood', '109cm', '97cm', '115cm');
// var_dump($house_spike);





$carrello = [$house_sun, $house_dogVilla];
$marioCart = new Cart($carrello);
$credits_mario = new CreditCard('Mario', 'Rossi', '2026-05-13');
$mario = new User('Mario', 'Rossi', 'Mario88', 'mario@gmail.com', 'via indirizzo 43', $credits_mario, $marioCart);
// var_dump($marioCart);
// var_dump($mario);






$carrello = [$house_sun, $house_dogVilla];
$giovanniCart = new Cart($carrello);
$credits_giovanni = new CreditCard('Giovanni', 'Rossi', '2021-08-22');
$giovanni = new UserSigned('Giovanni', 'Rossi', 'giovanni12', 'giov@gmail.com', 'via indirizzo 23', $credits_giovanni, $giovanniCart);
// var_dump($giovanniCart);
// var_dump($giovanni);


