<?php

class Orc extends Adventurer
{

  public function __construct($name)
  {
    parent::__construct($name);
    $this->_warCry = "wwouogrouroulou mlll !!";
  }

  public function attack($opponent)
  {
    // Check if it's an elf
    if (get_class($opponent) == 'Elf') {
      // Remove 50 life points
      $opponent->setHealth($opponent->getHealth() - 50);
    } else {
      $opponent->setHealth($opponent->getHealth() - $this->_atk);
    }
  }

  public function usePower()
  {
    if ($this->_power) {
      $this->_atk -= 10;
      $this->_def += 20;
      $this->_power = false;
    }
  }
}
