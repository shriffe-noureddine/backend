<?php


/*-- Exercise 1 :
Write a function 'isOrder' that :
- Take one array of integer as argument
- Checks if the elements of the arrays are ordered in ascending order.
*/

function isOrdered($array)
{
  for ($i = 0; $i < count($array) - 1; $i++) {
    // if current one is greater than next one, it is not order
    if ($array[$i] > $array[$i + 1])
      return false;
  }

  return true;
}

/*
-- Exercise 2 :

Write a function 'orderArray' that :
- Take one array of integer as argument
- Return an array which was ordered
*/
$array = [25, 1, 65, 7, 5, 12];


function orderArray($array)
{
  $temp = 0;

  while (!isOrdered($array)) {
    for ($i = 0; $i < count($array) - 1; $i++) {
      if ($array[$i] > $array[$i + 1]) {
        $temp = $array[$i];
        $array[$i] = $array[$i + 1];
        $array[$i + 1] = $temp;
      }
    }
  }

  return $array;
}

/*
-- Exercise 3 :

Write a function that :
- Take one float $x as argument
- Get the integer part of a positive number ($x)
- Return this integer part

Example :
integerPart(5.26) // return 5
integerPart(10.76) // return 10
*/

function integerPart($x)
{
  $y = 0;

  while ($y < $x)
    $y++;

  return $y - 1;
}



/*
-- Exercise 4 :

We have an array of integers, positive, between 1 and $nbElements (nbElements is the number of elements, you can use this variable).

Write a function call 'FizzBuzz'.
For each number 'n' of the list, we want the following operations:
. if the number is divisible by 3 : display 'Fizz'
. if the number is divisible by 5 : display 'Buzz'
. if the number is divisible by 3 AND by 5 : display 'FizzBuzz'
. else : display the number 'n'
*/

function FizzBuzz($array) {

  foreach($array as $value) {
    if(($value % 3 == 0) && ($value % 5 == 0))
      echo 'FizzBuzz';
    elseif ($value % 3 == 0)
      echo 'Fizz';
    elseif ($value % 5 == 0)
      echo 'Buzz';
    else
      echo $value;
    }
  }

}