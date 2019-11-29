<?php

  // 1. IF Syntax : 

  if(condition) {
    ...
  } elseif(condition2) {
    ...
  } else {
    ...
  }

  // Shortest syntax, only if you have ONE instruction :
  if(condition)
    echo 'Hello';
  else
    echo 'Bye bye';

  // 2. Compare Operators
  $var1 = 2;
  $var2 = '2';

  // Contains the same value
  if($var1 == $var2)
  
  // Contains the same value AND have same type
  if($var1 === $var2)

  // Not equal / It's not the same value
  if($var1 != $var2)

  // It's different or not the same type
  if($var1 !== $var2)

  // Greater / Lower than
  if($var1 < $var2)
  if($var1 <= $var2)
  if($var1 > $var2)
  if($var1 >= $var2)

  // 3. Logical Operators
  
  // AND &&
  if($var1 == 2 && $var2 == 3)
  if($var1 == 2 AND $var2 == 3)

  // OR ||
  if($var1 == 2 || $var2 == 3)
  if($var1 == 2 OR $var2 == 3)

  // XOR
  if($var1 == 2 XOR $var2 == 3)

  // NOT Operator
  $var1 = false;
  if(!$var1)

  // 4. Switch

  $movie = 'Jurassic Park';

  switch($movie) {
    case 'Star Wars':
      echo 'You like SciFi movie';
      break;
    case 'Jurassic Park':
      echo 'Mmmh you like animals';
      break;
    default: 
      echo 'Dunno the movie';
      break;
  }

  // Break make you exit a block of code.

?>