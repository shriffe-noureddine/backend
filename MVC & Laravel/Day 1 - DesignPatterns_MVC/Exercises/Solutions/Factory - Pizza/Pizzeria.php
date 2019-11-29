<?php

require_once 'Pizza.php';

class Pizzeria
{

  public static function orderPizza($type)
  {
    $pizza = null;

    switch ($type) {
      case 'cheese':
        $pizza = new Cheese();
        break;
      case 'chorizo':
        $pizza = new Chorizo();
        break;
      default:
        throw new InvalidArgumentException('Pizza not on the menu');
    }
    
    echo $pizza . '<br>';
    echo 'Pizza is ready !<br>';
    return $pizza;
  }

}
