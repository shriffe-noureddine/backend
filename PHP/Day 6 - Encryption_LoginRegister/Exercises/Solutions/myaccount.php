<?php
session_start();
var_dump($_COOKIE); echo '<hr>';
var_dump($_SESSION); ?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Account</title>
</head>

<body>
  <?php

  require_once 'menu.html';

  if (isset($_SESSION['mail'])) {
    echo "Welcome, " . $_SESSION['mail'];
  } else {
    echo "Please log in first.<br>";
    echo "<a href='login.php'>Login</a>";
  }

  ?>
</body>

</html>