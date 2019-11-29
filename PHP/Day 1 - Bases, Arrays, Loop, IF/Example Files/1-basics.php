<?php

// This is a PHP code
// echo 'Hello';

/*
    We can write comments
    on multiple line
  */

// 1. Simple Variables
$firstName = 'Simon';
$populationInLuxembourg = 5;
$height = 2.5;
$isThisTrue = false;

// 2. Array

// Empty array
$movies = array();

$movies = array(
  'NightCrawler',
  'Star Wars',
  'Bright'
);

$movies = [
  0 => 'NightCrawler',
  1 => 'Star Wars',
  2 => 'Bright'
];

// Retrieve a value
echo $movies[1];

// Update a value
$movies[1] = 'Jurassic Park';

// Insert a new value at the end
$movies[3] = 'Jurassic Park';
$movies[] = 'Jurassic Park';


// You can count the number of elements
$length = count($movies);
// You can sort an array
sort($movies);

// 3 . Associative array
$movies = [
  'NightCrawler' => 'Thriller',
  'Star Wars' => 'SciFi Movie',
  'Bright' => 'Fantasy Movie'
];

// Will print Thriller
echo $movies['NightCrawler'];

// 4 . Arithmetic Operators

$result = 2 + 5;
$result = 2 - 5;
$result = 2 * 5;
$result = 2 / 5;

// Short way :
$result = $result + 10;
$result += 10;

// Same for every operators
$result -= 5;
$result *= 3;
$result /= 4;

// In the case of adding/substracting 1
// Incremeting or Decrementing
$result = $result + 1;
$result += 1;
$result++;

$result--;

// 5. Know the type of data
$firstName = 'Simon';
$lastName = 'Bertrand';
$year_of_birth = 1990;
$height = 1.80;

// gettype() function returns the type of the variable you put as argument
echo '<br>';
echo '$firstName is of type : ' . gettype($firstName) . '<br>';
echo '$lastName is of type : ' . gettype($lastName) . '<br>';
echo '$year_of_birth is of type : ' . gettype($year_of_birth) . '<br>';
echo '$height is of type : ' . gettype($height) . '<br>';

// 6. Debug
$movies = array(
  'NightCrawler',
  'Star Wars',
  'Bright'
);

// I need a way to display the content of my array (and some infos)
// print_r and var_dump give you informations about a variable
echo '<pre>';
print_r($movies);
echo '</pre>';

var_dump($movies);

// die() function that stops the PHP script

die();

// You can send argument to die()
// This will be the last thing to be written by PHP
die('This is going to stop');
echo 'Im here, but u will never see me';

// 7 . Concatenation

$word = 'Steve';

// It will print 'Hello, how are you Steve ?'
echo 'Hello, how are you ' . $word . ' ?';

// We need to build a string along the way
$message = 'Hello';

$message = $message . ', world';
$message .= ', world';

// 8. Quotes

// There is 2 kind of quotes in PHP
$string1 = 'Its just a sentence. There is nothing to see';
$string2 = "Another sentence";

// Using variable with Quotes
$color = 'red';

// This will print 'It happens that my face goes red'
echo 'It happens that my face goes ' . $color;
echo "It happens that my face goes $color";

// This will print 'It happens that my face goes $color'
echo 'It happens that my face goes $color';

// I can mix quotes using concatenation
echo 'Hello' . ", world";

// I cannot do this :
// echo 'Hello";

// 9. Escaping 

// Sometimes, you need to escape Characters
$str = 'It\'s easy';
