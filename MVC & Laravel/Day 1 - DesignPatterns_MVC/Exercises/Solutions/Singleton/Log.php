<?php
class Log
{
  private static $instance;

  public static function getInstance()
  {
    // return self::$instance;
    if (self::$instance === null) {
      self::$instance = new self();
    }
    
    return self::$instance;
    
  }
  private function __construct()
  { }
  // __clone clones an instance of a class
  private function __clone()
  { }

  public function setBalance($balance, $time, $id)
  {
    $fp = fopen('bank-log.txt', 'a');
    fwrite($fp, "$time $id $balance \n");
    fclose($fp);
  }
}
