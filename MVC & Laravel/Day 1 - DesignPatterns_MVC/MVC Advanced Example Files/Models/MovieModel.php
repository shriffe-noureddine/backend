<?php

// MOVIE MODEL
require_once 'Movie.php';

class MovieDAO {

  private function connectDB()
  {
    return new PDO('mysql:host=localhost;dbname=moviedb;charset=utf8', 'root', 'root');
  }

  public function getMovies()
  {
    // Connect to DB
    $pdo = $this->connectDB();

    // Query the DB
    $movies = $pdo->query('SELECT * FROM movies');

    $listOfMovie = $movies->fetchAll(PDO::FETCH_CLASS, 'Movie');

    return $listOfMovie;
  }

  public function getMovie($id)
  {
    // Connect to DB
    $pdo = $this->connectDB();

    // Query the DB
    $movie = $pdo->prepare('SELECT * FROM movies WHERE id=?');
    $movie->bindParam(1, $id);

    $movie->execute();

    $return = $movie->fetch(PDO::FETCH_CLASS, 'Movie');
  }

}

