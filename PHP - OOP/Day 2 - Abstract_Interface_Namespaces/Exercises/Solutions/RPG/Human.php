<?php

class Human extends Adventurer
{
  public function attack($opponent)
  {
    $atkTotal = $this->_atk;

    if (count($this->_inventory) == 0)
      $atkTotal += 5;

    $opponent->setHealth($opponent->getHealth() - $atkTotal);
  }

  public function usePower()
  {
    if ($this->_power) {
      $this->_health += 20;
      $this->_power = false;
    }
  }
}
