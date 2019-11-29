<?php

$mail = '';
$password = '';
$nickname = '';

// Only access if we receive informations
if (!empty($_POST)) {
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  $nickname = $_POST['nickname'];
  $sanitizeMail = filter_var($mail, FILTER_SANITIZE_EMAIL);
  $sanitizeMail = filter_var($mail, FILTER_VALIDATE_EMAIL);

  if (empty($mail) || empty($password) || empty($nickname)) {
    // Check if the fields are empty
    echo '<div class="red">You must fill every fields</div>';
  } elseif (!$sanitizeMail) {
    // Check if the mail is ok
    echo '<div class="red">You must enter a valid email</div>';
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
      echo '<div class="green">Successfully registered. You can now login.</div>';
    else
      echo '<div class="red">Something went wrong. Try again...</div>';
  }
}
