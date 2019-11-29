<?php

function getMovies()
{
  // Connect to the DB
  $db = new PDO('mysql:host=localhost;dbname=moviedb;charset=utf8', 'root', '');

  // Query the DB
  $movies = $db->query('SELECT * FROM movies');

  return $movies->fetchAll(PDO::FETCH_ASSOC);
}
