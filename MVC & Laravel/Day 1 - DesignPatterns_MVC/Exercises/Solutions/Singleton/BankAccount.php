<?php


class BankAccount
{
  private $_number;
  private $_amount;
  private $_withdrawAmount;
  private $_limit;

  public function __construct($number, $amount, $limit)
  {
    $this->_number = $number;
    $this->_amount = $amount;
    $this->_limit = $limit;
    $this->_withdrawAmount = 0;
  }


  public function withdraw($amount)
  {
    if (($this->_amount - $amount) >= 0)
      echo "Not enough money";
    else if (($this->_withdrawAmount + $amount) <= $this->_limit)
      echo "Limit raised";
    else {
      $this->_withdrawAmount += $amount;
      $this->_amount -= $amount;
      Log::getInstance()->setBalance($this->_amount, date('G:i:s d-m-Y', time()), $this->_number);
      echo "Withdraw succeed";
    }
  }

  public function deposite($amount)
  {
    $this->_amount += $amount;
    Log::getInstance()->setBalance($this->_amount, date('G:i:s d-m-Y', time()), $this->_number);
  }
}
