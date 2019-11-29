<?php

class Elf extends Adventurer
{
  public function attack($opponent)
  {
    $atkTotal = $this->_atk;
    // Check if it have a sword
    foreach ($this->_inventory as $equipment) {
      if ($equipment->getType() == SWORD)
        $atkTotal += 2;
    }

    $opponent->setHealth($opponent->getHealth() - $atkTotal);
  }

  public function usePower()
  {
    if ($this->_power) {
      $this->_speed += 3;
      $this->_power = false;
    }
  }
}
