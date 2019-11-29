<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';


function multiply($x, $y)
{
	return ($x * $y);
}
$firstNumb = "";
$secondNumb = "";
if (isset($_POST["submit"])) {
	$firstNumb = $_POST["firstNumb"];
	$secondNumb = $_POST["secondNumb"];
	if (!empty($firstNumb) && !empty($secondNumb)) {
		echo multiply($firstNumb, $secondNumb);
	} else
		echo "Please, fill both value";
}
?>

<form action="" method="POST">
	<input type="number" name="firstNumb">
	<input type="number" name="secondNumb">
	<input type="submit" name="submit" value="SEND">
</form>

<?php
/*
-- Exercise 1 :
	
	1.1
	Write a PHP script which multiply two numbers
	Example : 2*4 = 8

	1.2
	Write a function which :
	    - Take 2 numbers in parameters
	    - Returns the result of the multiplication of the two numbers
	    
	1.3
	Create a form that:
	- Allows to enter 2 numbers
	- Get the result of the multiplication of these 2 numbers
		(use the function created in 1.2)
	- Warning, it is necessary to manage the case where 
	the user does not enter the two numbers.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
- Exercise 2

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    The first number is larger (if the first number is larger than the second number)
    The first number is smaller (if the first number is smaller than the second number)
    The two numbers are identical (if the two numbers are equal)

*/


function biggestNumber($x, $y)
{
	if ($x > $y)
		echo "The first number is larger";
	elseif ($x < $y)
		echo "The first number is smaller";
	else
		echo "The two numbers are identical";
}

biggestNumber(5, 10);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';
/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Create an array of John's expenses.
	    - Calculates the sum of John's expenses over the year

	3.2
	Write a function that will:
	- Take an expense array as input
	- Calculate the sum of the expenses of the table
	- return this sum

*/

$expenses = [20, 5, 89, 5, 33];

function expenses($expenses)
{
	$sum = 0;
	foreach ($expenses as $value)
		$sum += $value;

	return $sum;
}

echo expenses($expenses);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';
/*
-- Exercice 4
Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"
*/
$word = "xanax";
echo isPalindrome($word) ? "$word is a palindrome" : "$word is not a palindrome";

function isPalindrome($word)
{
	$length = strlen($word);
	for ($i = 0; $i < $length / 2; $i++) {
		if ($word[$i] != $word[$length - 1 - $i])
			return false;
	}
	return true;
}



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';
/*
-- Exercice 5

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

function isPrime($number)
{
	// starts from 2 because prime number are number greater than 1
	for ($i = 2; $i < $number; $i++) {
		if ($number % $i == 0)
			return false;
	}
	return true;
}

$x = 5;
echo isPrime($x) ? "$x is a prime number" : "$x is not a prime number";

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*

-- Exercice 6
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/
function htmlImages($src) {
	echo "<img src='$src'>";
}

htmlImages('http://merlin.vogue.fr/uploads/images/201747/31/skate_board_long_boucleries_modernes__5021257_00_front_1_300_0_1920_1920_q40_jpg_6832.jpg');

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';
/*
-- Exercice 7

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

function multiply2($x=1, $y=1) {
	return ($x*$y);
}

echo multiply2(10, 2) . '<br>';
echo multiply2(4);

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 8 </p>';

/*
-- Exercice 8 :
	Write a PHP function that return the reverse(mirror) of an array.
*/

$myArray = [20, 8, 3, 10, 1];
$myReverseArray = reverseArray($myArray);

echo '-- Original array --';
var_dump($myArray);
echo '-- Reverse array --';
var_dump($myReverseArray);

function reverseArray($array)
{
	$size = count($array);
	for ($i = 0; $i < $size / 2; $i++) {
		$temp = $array[$size-1 -$i];
		$array[$size-1 -$i] = $array[$i];
		$array[$i] = $temp;
	}

	return $array;
}


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 9</p>';
/*	
-- Exercise 9
Ecrire une fonction countWords($text) qui :
    - prend une chaine de caractère en argument ($text)
    - calcule le nombre de mots dans la chaine de caractère $text
    - retourne le résultat
Indice : il faut utiliser une fonction qui permet de découper une phrase en mots (déjà vu en cours)

Write a function 'countWords($text)' that:
    - takes a string of characters in argument ($text)
    - calculate the number of words in the $text string
    - return the result
Hint: use a function that allows you to split a sentence into words (already seen in class)

*/

function countWords($text) {
	$words = explode(" ", $text);
	return count($words);
}

$myString = "Helllooooo broooo how are you?";
echo 'String contains ' . countWords($myString) . ' words'; 

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 10 </p>';

/*
-- Exercice 10 :
Repeat the previous exercise and write a countEachWords($test) function that:
    - takes a string of characters in argument ($text)
    - for each word present in $text, calculate how many times this word appears
    - return the result as an associative array

For example : "this is a random sentence, it is totally random".
Expected result :
    array( "this" -> 1, 
            "is" -> 2,
            "a" -> 1,
            "random" -> 2
            ....... );
*/

function countEachWords($text) {
	$words = explode(" ", $text);
	$eachWords = array();

	foreach ($words as $word) {
		if(isset($eachWords[$word]))
			$eachWords[$word] += 1;
		else
			$eachWords[$word] = 1;
	}

	return $eachWords;
}

$myString = "this is a random sentence random sentence this";
$numberOfWords = countEachWords($myString);
echo '<pre>';
var_dump($numberOfWords);
echo '</pre>';
?>