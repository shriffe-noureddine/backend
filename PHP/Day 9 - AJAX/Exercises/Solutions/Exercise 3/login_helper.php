<?php

// Only access if we receive informations
if (!empty($_POST)) {
  $mail = $_POST['mail'];
  $password = $_POST['password'];
  $sanitizeMail = filter_var($mail, FILTER_SANITIZE_EMAIL);
  $sanitizeMail = filter_var($mail, FILTER_VALIDATE_EMAIL);

  if (empty($mail) || empty($password)) {
    // Check if the fields are empty
    echo '<div class="red">You must fill every fields</div>';
  } elseif (!$sanitizeMail) {
    // Check if the mail is ok
    echo '<div class="red">You must enter a valid email</div>';
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
        echo '<div class="green">Successfully login!</div>';
        $_SESSION['mail'] = $sanitizeMail;
        $_SESSION['nickname'] = $res['nickname'];

        if (isset($_POST['checkbox'])) {
          setcookie('mail', $sanitizeMail, time() + 86400 * 30);
        }
      } else
        echo '<div class="red">Password not ok</div>';
    } else {
      echo '<div class="red">No user found with these email.</div>';
    }
  }
}
