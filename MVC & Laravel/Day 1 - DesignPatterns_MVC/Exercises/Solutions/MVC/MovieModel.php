<?php

// MOVIE MODEL

function connectDB()
{
  return new PDO('mysql:host=localhost;dbname=moviedb;charset=utf8', 'root', '');
}

function getMovies()
{
  // Connect to DB
  $pdo = connectDB();

  // Query the DB
  $movies = $pdo->query('SELECT * FROM movies');

  $listOfMovie = array();
  while ($row =  $movies->fetch(PDO::FETCH_ASSOC)) {
    // hidrate your class here
    $newMovie = new Movie($row);
    $listOfMovie[] = $newMovie;
  }

  return $listOfMovie;
}

function getMovie($id)
{
  // Connect to DB
  $pdo = connectDB();

  // Query the DB
  $movie = $pdo->query('SELECT * FROM movies WHERE movie_id = ' . $id);

  return $movie->fetch(PDO::FETCH_ASSOC);
}

function leaveComment($content, $id)
{
  $pdo = connectDB();

  // Query the DB
  $movies = $pdo->prepare('INSERT INTO comments (description, movie_id) VALUES (?,?)');
  $movies->bindParam(1, $content);
  $movies->bindParam(2, $id);

  if ($movies->execute()) {
    return 'successful';
  } else {
    return 'error';
  }
}

function getComments($id)
{
  $pdo = connectDB();

  // Query the DB
  $comments = $pdo->prepare('SELECT * FROM comments WHERE movie_id=?');
  $comments->bindParam(1, $id);

  $comments->execute();
  return $comments->fetchAll(PDO::FETCH_ASSOC);
}
