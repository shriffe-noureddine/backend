<?php

/*
  Hydrating your objects
  
  Hydrating an object is taking datas that exists
  in memory (database, file...) and then populating
  an object with those datas.

*/

class User
{
  private $_id;
  private $_name;
  private $_mail;
}
// SELECT * FROM users WHERE id = 5
