<?php

/* Change the case of a string
Make it all upper case 
str = string 
*/
$string = 'Here, take, a beer.';
echo strtoupper($string) . '<br>';

/* Make all the string in lower case */
echo strtolower($string) . '<br>';

/* First letter upper case for the first word only
uc = upper case
*/
echo ucfirst($string) . '<br>';

// First letter upper case for each words
echo ucwords($string) . '<br>';

// Find the position of a character in a string
echo strpos($string, ',') . '<br>';
echo strpos($string, 'take') . '<br>';
if (strpos($string, '@'))
  echo 'We find it<br>';
else
  echo 'No @ symbol<br>';

// Retrieve only one part of a string (sub-string) 
$string = 'Here, take another beer.';
echo substr($string, 19) . '<br>';
echo substr($string, 11, 7) . '<br>';
echo substr($string, -5) . '<br>';

// Replace all occurence of a string
echo str_replace('another beer', 'a coca-cola', $string) . '<br>';

// Delete a character on the left and right side of a string
echo trim($string, '.');
// Delete on the left side with ltrim($string)
// Delete on the right side with rtrim($string)

// Convert a string into an array using a delimiter
$string = 'Hello Simon I hope you ok';
$array = explode(' ', $string);
var_dump($array);

// Convert an array into a string using a delimiter
$string2 = implode('BLA', $array);
echo $string2;
?>

<br><br><br><br><br><br><br><br><br><br><br><br>