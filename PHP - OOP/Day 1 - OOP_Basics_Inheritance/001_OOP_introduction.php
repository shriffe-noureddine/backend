<?php

/*

  Pros of OOP:
  - Reusability
  - Roles separation

  A class is what defines an object.
  A class will group all the properties and methods of our object.

  A class is not an object !!!!
  A class is the definition, the blueprint.
  The object is the realization of this definition.
  
  Warning, you can't re-declare a class : different names !

  Declare a class :

*/

// Best practice : The name of the class should start with a Capital letter
class Car
{ }
// Create an object : Instance of class.
$myCar = new Car();
// I can create as much objects as I want
$ferrari = new Car();

/*
  Classes have 'internal variables', called 'properties'
  They have also 'internal functions', called 'methods'
*/
class Car2
{
  // Declare properties
  public $color = 'Red';
  public $brand;
  public $category;

  // Declare methods
  public function makeSound()
  {
    echo 'Vroom Vroom !';
  }
}

$bmw = new Car2();
$bmw->color = 'yellow';
//echo $bmw->color;

$ferrari = new Car2();
//$ferrari->makeSound();

/*
  - The constructor -
  It's a method that allow you to initialize certain properties when creating your object.
*/

class Car3
{
  public $color;
  public $brand;
  public $category;

  public function __construct($color, $brand, $category)
  {
    $this->color = $color;
    $this->brand = $brand;
    $this->category = $category;
  }
}
$ferrari = new Car3('Red', 'Ferrari', 'Sport');
$bmw = new Car3('Grey', 'Bmw', 'Sport');
//var_dump($ferrari);

/*
  Scope :
  'public' keyword specify that the property or method will be accessible from anywhere

  'private' specify that the property or method will only be accessible within the class.


  Encapsulation : 
  - Reduce complexity of dev
  - Protect the state of an object. Access to variables is done via methods. This makes the class flexible and easy to manage.
  - The code of an object is easily editable without breaking the code.

*/

class Car4
{
  private $color;
  public $brand;
  private $category;

  public function __construct($color, $brand, $category)
  {
    $this->color = $color;
    $this->brand = $brand;
    $this->category = $category;
  }

  // Setter
  public function setColor($color)
  {
    // You can perfom checks and validation
    $this->color = $color;
  }

  // Getter
  public function getColor()
  {
    return $this->color;
  }

  public function getColorUpperCase()
  {
    return strtoupper($this->getColor());
  }
}

$ferrari = new Car4('Red', 'Ferrari', 'Sport');
$ferrari->setColor('Yellow');
//var_dump($ferrari);

/*
  ToString Method :
*/

class Car5
{
  private $color;
  private $brand;
  private $category;

  public function __construct($color, $brand, $category)
  {
    $this->color = $color;
    $this->brand = $brand;
    $this->category = $category;
  }

  public function __toString()
  {
    return 'Color : ' . $this->color
      . '<br>Brand : ' . $this->brand;
  }
}

$ferrari = new Car5('Red', 'Ferrari', 'Sport');
// When you echo an object, it will look for the toString() method
echo $ferrari;


/*

  Static

  Static methods or properties can be used without the need to instantiate the class.
  Directly access them by using the class name.

*/

class Car6
{
  private $color;
  private $brand;
  private $category;

  public function __construct($color, $brand, $category)
  {
    $this->color = $color;
    $this->brand = $brand;
    $this->category = $category;
  }

  public function __toString()
  {
    return 'Color : ' . $this->color
      . '<br>Brand : ' . $this->brand;
  }

  public static function getNumberWheels()
  {
    return 4;
  }
}

echo Car6::getNumberWheels();
