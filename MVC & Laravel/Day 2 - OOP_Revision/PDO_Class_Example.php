<?php

/*
To create a single object from the query results you have two options. You can use the either a familiar fetch() method:
*/

class User {
	private $name;
}

$stmt = $pdo->query('SELECT name FROM users LIMIT 1');
$stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
$user = $stmt->fetch();

// OR

class User {};
$user = $pdo->query('SELECT name FROM users LIMIT 1');
$user->fetch(PDO::FETCH_CLASS, 'User');


/*
Fetching an array of objects
*/
class User {};
$user = $pdo->query('SELECT name FROM users');
$user->fetchAll(PDO::FETCH_CLASS, 'User');