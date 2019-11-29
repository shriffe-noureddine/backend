<?php session_start();
var_dump($_COOKIE); echo '<hr>';
var_dump($_SESSION); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Log In</title>
</head>

<body>
  <?php
  require_once 'menu.html';

  if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $sanitizeMail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $sanitizeMail = filter_var($mail, FILTER_VALIDATE_EMAIL);


    if (empty($mail) || empty($password)) {
      // Check if the fields are empty
      echo 'You must fill every fields';
    } elseif (!$sanitizeMail) {
      // Check if the mail is ok
      echo 'You must enter a valid email';
    } else {
      // If everything went fine, I need to check if the user exists in my DB

      require_once 'database.php';

      // Open a connection to the DBMS
      $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

      $query = "SELECT * 
      FROM users
      WHERE mail = '$sanitizeMail'";

      // Send an SQL request to our DB
      $result_query = mysqli_query($connect, $query);
      $res = mysqli_fetch_assoc($result_query);
      //var_dump($res);

      // Check if the user exists in the DB
      if (!is_null($res) && !empty($res)) {
        // Check if the passwords matches
        if (password_verify($password, $res['password'])) {
          echo "Successfully login!";
          $_SESSION['mail'] = $sanitizeMail;
          $_SESSION['nickname'] = $res['nickname'];
        }
        else
          echo 'Password not ok';
      } else {
        echo "No user found with these email.";
      }

    }
  }

  ?>

  <h1>Log In to the website</h1>
  <form action="" method="post">
    <input type="mail" name="mail" placeholder="mail"><br>
    <input type="password" name="password" placeholder="password"><br>
    <input type="submit" name="submit" value="LOGIN">
  </form>
</body>

</html>