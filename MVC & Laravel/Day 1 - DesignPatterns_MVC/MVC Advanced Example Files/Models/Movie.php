<?php
class Movie
{
  private $_id;
  private $_title;
  private $_release_year;
  private $_views;
  private $_directorID;
  private $_poster;

  public function __set($name, $value) {
    $name = '_' . $name;
    $this->$name = $value;
  }
}
