<?php

abstract class Pizza
{
  protected $base;
  protected $ingredients;

  public function __construct()
  {
    echo 'Pizza in preparation.<br>';
  }

  public function __toString()
  {
    return 'Base : ' .  $this->base . ' / Ingredients : ' . implode(', ', $this->ingredients);
  }
}

class Cheese extends Pizza
{

  public function __construct()
  {
    parent::__construct();
    $this->base = 'tomato';
    $this->ingredients = ['Mozarella', 'Pecorino', 'Blue Cheese'];
  }
}

class Chorizo extends Pizza
{

  public function __construct()
  {
    parent::__construct();
    $this->base = 'tomato';
    $this->ingredients = ['Olives', 'Chorizo', 'Ham'];
  }
}
