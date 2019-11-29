<?php

/*
Animals are represented by : breed, family, color.
*/
class Animal
{
  // Declare properties
  private $breed;
  private $family;
  private $color;

  // Constructor
  public function __construct($breed, $family, $color)
  {
    $this->breed = $breed;
    $this->family = $family;
    $this->color = $color;
  }

  // Getters
  public function getBreed()
  {
    return $this->breed;
  }

  public function getFamily()
  {
    return $this->family;
  }

  public function getColor()
  {
    return $this->color;
  }

  // Setters
  public function setBreed($newBreed)
  {
    $this->breed = $newBreed;
  }

  public function setFamily($family)
  {
    $this->family = $family;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }
}
