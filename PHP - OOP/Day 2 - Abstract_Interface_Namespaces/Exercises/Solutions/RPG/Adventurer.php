<?php

abstract class Adventurer
{
  private $_name;
  private $_atk; // Attack points
  private $_def; // Defense points
  private $_health; // Life points
  private $_warCry;
  private $_speed;
  private $_power;
  private $_inventory = array(); // From class Equipment

  public function __construct($name)
  {
    $this->_name = $name;
    $this->_atk = 10;
    $this->_def = 5;
    $this->_health = 100;
    $this->_speed = 5;
    $this->_warCry = "Attaaaaaack";
    $this->_power = true;
  }

  public function displayEquipment()
  {
    echo $this->_equipment;
  }

  public function addEquip($equipment)
  {
    $this->_inventory[] = $equipment;
  }

  public function delEquip()
  {
    $this->_equipment = null;
  }

  public function getHealth()
  {
    return $this->_health;
  }

  public function setHealth($newHealth)
  {
    $this->_health = $newHealth;
  }

  abstract function attack($opponent);
  abstract function usePower();
}
