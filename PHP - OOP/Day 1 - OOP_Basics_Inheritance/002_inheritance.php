<?php

/* It's possible to extends the classes (like a parent/child relationship). 
For example I have a Car class 
extending Vehicle Class 
*/

// The parent
class Vehicle
{ /* code */ }

class Car extends Vehicle
{ /* code */ }

$myVehicle = new Vehicle();
$myCar = new Car();

/*
All the attributes and method 
from the parent will be shared to the child
*/
class Vehicle
{
  private $color = "red";

  public function getColor()
  {
    return $this->color;
  }
}

class Car extends Vehicle
{ }

$myVehicle = new Vehicle();
var_dump($myVehicle);
// I can use getColor from parent (it's public) :
$myCar = new Car();
$myCar->getColor();
var_dump($myCar);

/*
If I want to use the property directly
in my child class, I need to put this property
as protected.

public : accessible from anywhere
private : only accessible within my class
protected : only accessible within my class and all it's sub-classes
*/
class Vehicle
{
  protected $color = "red";

  public function getColor()
  {
    return $this->color;
  }
}

class Car extends Vehicle
{
  // Construct
  public function __construct()
  {
    $this->color = "blue";
  }
}

$myVehicle = new Vehicle();
var_dump($myVehicle);
$myCar = new Car();
var_dump($myCar);

/*
  I can call parent's methods with the keyword 'parent'
  For example, here I call the construct parent inside the child construct
*/
class Vehicle
{
  protected $color;

  // Construct
  public function __construct()
  {
    $this->color = "red";
  }

  public function getColor()
  {
    return $this->color;
  }
}

// The child
class Car extends Vehicle
{
  private $wheelsBrand;

  // Construct
  public function __construct()
  {
    parent::__construct();
    $this->wheelsBrand = "Michelin";
  }

  public function getColor()
  {
    return $this->color;
  }
}

$myVehicle = new Vehicle();
var_dump($myVehicle);

$myCar = new Car();
var_dump($myCar);
