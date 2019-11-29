<?php

/*
	ROUTEUR - FRONT CONTROLLER 
	It will handle every request from the user.
	Depending on the request it will call the right controller.

	http://myproject/index.php?rqt=movies&id=5
*/

if (isset($_GET['rqt']) && !empty($_GET)) {

	// Only valid request
	if ($_GET['rqt'] == 'movies') {
		//movies controller
		require_once './Controllers/MovieController.php';
		$movieCtrler = new MovieController();
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			$movieCtrler->movieDetail($id);
		} else {
			$movieCtrler->movieList();
		}
	}
}
