<?php

require_once '../Models/MovieModel.php';

class MovieController
{

	private $model;

	public function __construct()
	{
		$this->model = new MovieModel();
	}

	public function movieList()
	{
		$movies = $this->model->getMovies();
		include_once '../Views/MovieView.php';
	}

	public function movieDetail($id)
	{
		$movie = $this->model->getMovie($id);
		include_once '../Views/MovieDetailView.php';
	}
}
