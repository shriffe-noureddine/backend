<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Form Example</title>
</head>

<body>
  <form action="data.php" method="POST">
    <input type="text" name="firstName" placeholder="Your first name">
    <input type="text" name="email" placeholder="Your email">
    <input type="password" name="password" placeholder="Your password">
    <input type="submit" value="Send">
  </form>
</body>
<?php
/* 
  When the server receives data from a Form,
  he save those data into a superglobale variable.
  
  Those variables are available on every PHP script.

  2 arrays are available :
    $_POST
    $_GET
 

  $_GET, it will send directly data to server using URL
  Example : page.php?firstname=simon

  $_POST, it will send data throught headers and URL will not be modified

  POST doesn't display data.
  It is use when informations are sensitive.
*/ ?>

</html>