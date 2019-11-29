<!DOCTYPE html>
<html>
<head>
	<title>My First Ajax Call</title>
</head>
<body>
	<div id="resultForm">...</div>
	<form method="POST">
		<input type="submit" name="submit" value="Click me">
	</form>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
$(function(){
	$('input[type="submit"]').click(function(e){
		e.preventDefault();
		$.ajax({
			url: 'addMovie.php',
			type: 'post',
			data: {
				param1: 'simon',
				param2: 'bertrand'
			},
			success: function(result) {
				console.log(result);
				$('#resultForm').html('<div class="green">'+result+'</div>');
			},
			error: function(err){
				// If ajax error happens
			}
		});
	});
});
</script>
</body>
</html>