<!DOCTYPE html>
<html>
<head>
	<title>Movie DB</title>
</head>
<body>
	<?php require_once 'navbar.html'; ?>

	<h1>Welcome to the freakin movie website</h1>

	<?php 

	require_once 'database.php';

	$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
	$db_found = mysqli_select_db($db_handle, DB_NAME);

	if($db_found) {

		$sql_query = 'SELECT * FROM movies ORDER BY release_year DESC LIMIT 3';

		$result_query = mysqli_query($db_handle, $sql_query);

		while ($db_field = mysqli_fetch_assoc($result_query)) {
			echo '<hr>'; 
			//echo $db_field['movie_id'] . '<br>'; 
			echo '<p><strong>Title : </strong>' . $db_field['title']. '</p>'; 
			echo '<p><strong>Year of release : </strong>' . $db_field['release_year'] . '</p>'; 
			echo '<p><strong>Number of views : </strong>' . $db_field['views']. '</p>';
		}


	} else {
		echo 'DB not found (' . DB_NAME . ')';
	}

	 ?>


</body>
</html>