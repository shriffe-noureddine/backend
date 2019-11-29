<!DOCTYPE html>
<html>
<head>
	<title>Directors List</title>
</head>
<body>
	<?php require_once 'navbar.html'; ?>

	<h1>Directors list</h1>
	<hr>

	<?php 

	require_once 'database.php';

	$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
	$db_found = mysqli_select_db($db_handle, DB_NAME);

	if($db_found) {

		$sql_query = 'SELECT * FROM Directors ORDER BY last_name DESC';

		$result_query = mysqli_query($db_handle, $sql_query);

		while ($db_field = mysqli_fetch_assoc($result_query)) {
			echo '<hr>';  
			echo '<img href="' . $db_field['picture'] . '" alt="' . $db_field['last_name'] . '">';
			echo '<p><strong>Name : </strong>' . 
			'<a href="director.php?id=' . $db_field['director_id'] . '">' 
			. $db_field['first_name'] . ' ' . $db_field['last_name'] . '</a></p>';
		}


	} else {
		echo 'DB not found (' . DB_NAME . ')';
	}

	 ?>


</body>
</html>