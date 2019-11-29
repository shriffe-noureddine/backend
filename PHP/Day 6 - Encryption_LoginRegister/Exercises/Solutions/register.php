<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
</head>

<body>
  <?php
  require_once 'menu.html';

  $mail = '';
  $password = '';
  $nickname = '';

  if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $nickname = $_POST['nickname'];
    $sanitizeMail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    $sanitizeMail = filter_var($mail, FILTER_VALIDATE_EMAIL);


    if (empty($mail) || empty($password) || empty($nickname)) {
      // Check if the fields are empty
      echo 'You must fill every fields';
    } elseif (!$sanitizeMail) {
      // Check if the mail is ok
      echo 'You must enter a valid email';
    } else {
      // If everything went fine, save the user in the DB

      require_once 'database.php';

      // Open a connection to the DBMS
      $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

      $securePassword = password_hash($password, PASSWORD_DEFAULT);
      $query = "INSERT INTO users(nickname, mail, password)
      VALUES('$nickname', '$sanitizeMail', '$securePassword')";

      // Send an SQL request to our DB
      $result_query = mysqli_query($connect, $query);

      // Check if the user was successfully registered 
      if ($result_query)
        echo 'Successfully registered. You can now login.';
      else
        echo 'Something went wrong. Try again...';
    }
  }

  ?>

  <h1>Register to the website</h1>
  <br>
  <form action="" method="post">
    <input type="text" name="nickname" value="<?php echo $nickname ?>"><br>
    <input type="text" name="mail" value="<?php echo $mail ?>"><br>
    <input type="password" name="password" value="<?php echo $password ?>"><br>
    <input type="submit" name="submit" value="Register">
  </form>
</body>

</html>