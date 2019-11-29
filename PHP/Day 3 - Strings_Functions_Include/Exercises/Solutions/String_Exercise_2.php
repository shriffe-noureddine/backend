<?php

/*
	 EXERCISE 1 :

		Write a PHP script that checks if an email address contains the @ symbol.
		If yes, display: "Valid email, symbol found at X". Otherwise display "Invalid email".

		To do your tests, you can create a "can" variable of the type $mail = "simon@gmail.com";
	*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

$mail = "simon@gmail.com";
$posSymbol = strpos($mail, '@');
if ($posSymbol)
	echo 'Valid email, symbol found at ' . $posSymbol;
else
	echo  'Invalid email';

/*
	 EXERCISE 2 :

		Write a PHP script that removes all slashes from this string:
		$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
	 */

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";
$movies = trim(str_replace('/', ' ', $movies));
echo $movies;

/*
	 EXERCISE 3 :

		Write a PHP script that replaces the word "random" with the word "beautiful" in this sentence:

		$sentence = "This is a random sentence";
	 */

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

$sentence = "This is a random sentence";
echo str_replace('random', 'beautiful', $sentence);
/*
	 EXERCISE 4 :

		Write a PHP script that displays the last word of a sentence using 2 functions:
			explode () and count ()
		
		You can use the previous sentence to test : $sentence = "This is a random sentence";
	 */

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

$sentence = "This is a random sentence";
$wordsArray = explode(' ', $sentence);
echo $wordsArray[count($wordsArray) - 1];
