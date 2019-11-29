<?php

class Client
{
  private $_name;
  private $_sex;
  private $_address;
  // Bank account OBJECT
  private $_account;

  public function __construct($name, $sex, $address, $account)
  {
    $this->_name = $name;
    $this->_sex = $sex;
    $this->_address = $address;
    $this->_account = $account;
  }

  public function withdraw($amount)
  {
    $this->_account->withdraw($amount);
  }

  public function deposite($amount)
  {
    $this->_account->deposite($amount);
  }
}
