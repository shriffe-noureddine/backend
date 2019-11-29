<?php

session_start();

$cart = array(
  1 => array(
    "name" => "MobyDick",
    "price" => 10
  ),
  4 => array(
    "name" => "Jaws",
    "price" => 20
  )
);

$_SESSION["cart"] = $cart;

var_dump($_SESSION["cart"]);

echo '<hr>';

var_dump($_COOKIE);
