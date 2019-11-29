<?php

require_once '../Model/MovieModel.php';

$movies = getMovies();
$title = 'Title of the page';

if (count($movies) == 0)
  include_once 'ErrorView.php';
else
  include_once '../View/MovieView.php';
