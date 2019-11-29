<?php

// Declare a function
function helloWorld()
{
  echo 'Hello, World';
}

// Function with arguments
function greetings($message = 'Hey Bro')
{
  echo 'You\'re message : ' . $message;
}

// Call to the function
helloWorld();
echo '<br>';
greetings('Hello !');
echo '<br>';
greetings();

// Return value
$x = 5;
function multiply($y)
{
  global $x;
  return ($x * $y);
}

echo multiply(10);

// Scope
function displayMessage($message, &$x)
{
  $x += 10;
  return $message . ' : ' . $x;
}
echo '<br>';

$myNumber = 5;
echo '<br>' . ' BEFORE -- My number outside the function : ' . $myNumber;
echo displayMessage('My number inside the function', $myNumber);
echo '<br>' . 'AFTER -- My number outside the function : ' . $myNumber;
