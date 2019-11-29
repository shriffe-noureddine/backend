<?php
require_once 'Movie.php';
require_once 'MovieModel.php';

// MOVIE CONTROLLER
if (isset($_POST['submit'])) {
  $commentContent = $_POST['comment'];
  leaveComment($commentContent, $_GET['id']);
}

if (isset($_GET['id'])) {
  $movie = getMovie($_GET['id']);
  $allComments = getComments($_GET['id']);
  include_once 'MovieDetailView.php';
} else {
  $movies = getMovies();
  include_once 'MovieView.php';
}
