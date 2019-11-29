<?php

/* EXCEPTIONS
Exceptions must be handle by the dev.
Exceptions are handled in a Object Oriented way.

When an exception is thrown, an 'Exception'
object is created.
An Exception Object contains some details.
It have some methods : getMessage(), getCode(), toString....

Syntax : 
  throw new Exception("This is an exception");

'throw' allow to trigger an exception
'new' create an instance of an exception

Handle exceptions with Try...Catch
*/

try {
  echo 'Everything is fine<br>';
  $msg = "This is an exception example";
  throw new Exception($msg);
  echo 'Everything is still fine<br>';
} catch (Exception $e) {
  //var_dump($e);
  echo $e->getMessage();
}


function calcul($x, $y)
{
  return $x * $y;
}

try {
  echo calcul(2);
} catch (ArgumentCountError $e) {
  echo "BOOOOOM";
}

echo '<hr>';
/*require_once 'CustomException.php';
throw new CustomException("My Custom Exception Class");*/

echo '<hr>';

/* How to handle multiple Exceptions type *

Example :
I have a script that wait for a number.
Divide 25 by this number.
Script only accept positive numbers
*/
class DivideByZeroException extends Exception
{ };
class DivideByNegativeException extends Exception
{ };

function test($x)
{
  if ($x == 0)
    throw new DivideByZeroException();
  else if ($x < 0)
    throw new DivideByNegativeException();

  return 25 / $x;
}

try {
  echo test(-25);
} catch (DivideByZeroException $e) {
  echo "DIVIDE BY ZERO EXCEPTION !";
} catch (DivideByNegativeException $e) {
  echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION !";
} catch (Exception $e) {
  echo "UNKNOWN EXCEPTION !";
}
