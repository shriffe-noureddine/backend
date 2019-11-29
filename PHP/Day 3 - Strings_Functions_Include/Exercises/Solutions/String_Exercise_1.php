<?php

/*

	1. Create an HTML form with a text field in a PHP script. The form will point to the same page.

	2. Create a `submit` button that sends the string input, and displays in a <div> this string in uppercase.

	3. Create a second `submit` button, which displays the string entered in lowercase

	4. Similarly, a submit to add a capital letter to each word
	
	5. And again a submit to add a capital letter, but only at the beginning of the chain.

	6. Now create a submit that will display the string only up to the '.' (point) not included
	  - Use the `explode` function for that.
	  - Now use the `strpos` and` substr` function to produce the same result.

	Bonus: Finally, create a submit that displays the first two words of the string entered, separated by a hyphen ("-")
  	If there are not enough words, display the message "Enter at least two words"
*/

if (isset($_POST["someText"])) {
	$message = $_POST['someText'];

	if (isset($_POST['allUpp'])) {
		echo strtoupper($message);
	} else if (isset($_POST['allLow'])) {
		echo strtolower($message);
	} else if (isset($_POST['allCap'])) {
		echo ucwords($message);
	} else if (isset($_POST['oneCap'])) {
		echo ucfirst($message);
	} else if (isset($_POST['noDot'])) {
		$array = explode('.', $message);
		echo $array[0];
	} else if (isset($_POST['noDot2'])) {
		echo substr($message, 0, strpos($message, '.'));
	} else if (isset($_POST['bonus'])) {
		$array = explode(' ', $message);
		if (count($array) >= 2)
			echo $array[0] . '-' . $array[1];
		else
			echo 'You need at least two words';
	}
}

?>
<form action="" method="POST">
	<input type="text" name="someText" placeholder="some text">
	<input type="submit" name="allUpp" value="all uppercase">
	<input type="submit" name="allLow" value="all lowercase">
	<input type="submit" name="oneCap" value="One capital">
	<input type="submit" name="allCap" value="all first capital">
	<input type="submit" name="noDot" value="no dots here">
	<input type="submit" name="noDot2" value="no dots here">
	<input type="submit" name="bonus" value="bonus">
</form>