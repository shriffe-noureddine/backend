<?php

class CustomException extends Exception
{
  private $date;

  // Override the exception
  public function __construct($message, $code = 0)
  {
    // Custom code
    $this->date = date('Y-m-d');
    // Parent construct
    parent::__construct($message, $code);
  }

  public function customFunction()
  {
    echo "Custom function for this custom exception";
  }
}
