<?php

/* PDO - PHP Data Object

  PDO is an abstraction layer to query the database.
  PDO take care of more than 12 different type of 
  databases.
  
  We don't use an array or parameters to connect 
  to the database.
  Instead we use a DSN (Data Source Name)

  The DSN summarise the parameters for the connection.

  */

// Connect to the DB :
$dsnConnection = 'mysql:host=localhost;dbname=moviedb';
$pdo = new PDO($dsnConnection, 'root', '');

// Execute queries :
$deleteQuery = 'DELETE FROM movies WHERE movie_id=2';
var_dump($pdo->exec($deleteQuery));
// exec() only return the number of lines 
// that is affected

// query() will return a rowset (results set)
// return a PDOStatement
$selectQuery = 'SELECT * FROM movies';
$results = $pdo->query($selectQuery);
var_dump($results);

/* For now, results have been retrieved
but we need to use the fetch() method 
to use/display them
*/

/*$fightClub = $results->fetch(PDO::FETCH_ASSOC);
var_dump($fightClub);
$night = $results->fetch(PDO::FETCH_ASSOC);
var_dump($night);*/

/*
  fetch() will get the first element returned by mysql
  We need to tell him how to fetch (associative array)

  */

while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
  echo $row['title'];
}

/*
  Prepared Statements
*/
$mail = $_POST['mail'];
$password = $_POST['password'];
// Withouth prepared
$query = 'SELECT * 
FROM users 
WHERE mail=' . $mail .
  'AND password=' . $password;

// Prepared
$preparedQuery = 'SELECT * 
  FROM users 
  WHERE mail=? AND password=?';

$prep = $pdo->prepare($preparedQuery);

// Associate value to placeholders
$prep->bindValue(1, $mail, PDO::PARAM_STR);
$prep->bindValue(2, $password);

// Compile and execute the query
// Return row sets
$prep->execute();

/*
  Pros of prepared statements :
    - Safety !
    - Better perfomance
  
    It's also usefull when we want to insert
    multiple records.
    Insteand of doing multiple INSERT, we will prepare
    the query et use it in a loop for example ...
*/
// Withouth prepared :
$title = 'star wars';
$pdo->exec('INSERT INTO movies(title) 
VALUES(' . $title . ')');

$title = 'jurrasic park';
$pdo->exec('INSERT INTO movies(title) 
VALUES(' . $title . ')');

$title = 'night crawler';
$pdo->exec('INSERT INTO movies(title) 
VALUES(' . $title . ')');

// Prepared statements
$prep = $pdo->prepare('INSERT INTO movies(title) 
VALUES(?)');

$prep->bindParam(1, $title);

// Insert a movie
$title = 'star wars';
$prep->execute();
// Insert a movie
$title = 'jurassic park';
$prep->execute();
// Insert a movie
$title = 'night crawler';
$prep->execute();
