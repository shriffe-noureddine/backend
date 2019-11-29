<?php

var_dump($movie);
echo '<hr>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Detail page</title>
</head>

<body>
	<h3>Put some comments</h3>
	<form method="post">
		<textarea name="comment" cols="50" rows="10">Waiting for comment...</textarea>
		<input type="submit" name="submit" value="record">
	</form>
	<?php
	foreach ($allComments as $comment) {
		echo $comment['description'] . '<br><hr>';
	}
	?>
</body>

</html>