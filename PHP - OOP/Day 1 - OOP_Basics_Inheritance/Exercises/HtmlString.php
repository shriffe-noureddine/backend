<?php

class HtmlString
{
  private $string;

  // Constructor
  public function __construct($string)
  {
    $this->setString($string);
  }

  // Setters & Getters
  public function setString($string)
  {
    $this->string = $string;
  }

  public function getString()
  {
    return $this->string;
  }

  // Style Methods
  public function getBoldString()
  {
    return '<strong>' . $this->getString() . '</strong>';
  }

  public function getItalicString()
  {
    return '<i>' . $this->getString() . '</i>';
  }

  public function getItalicBoldString()
  {
    return '<strong>' . $this->getItalicString() . '</strong>';
  }
}


// Test class working
$markup = new HtmlString('My strinnnnng');
echo $markup->getBoldString();
