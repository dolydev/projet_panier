<?php
require_once('./class/carte.php');

$cart = new Cart(0,100);


$cart->discount(5);

var_dump($cart->getTotalPrice());

?>