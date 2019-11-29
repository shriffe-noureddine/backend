<?php

if (isset($_POST['submitBtn'])) {
  if (file_exists('users.txt')) {
    $file_handle = fopen('users.txt', 'r');
    $users = array();

    while (!feof($file_handle)) {
      // Get the current line with all user informations
      $currentLine = fgets($file_handle);
      // Make it an array to separate mail and password
      $currentUser = explode(';', $currentLine);

      // Get a pair key/value for the mail
      $pos = strpos($currentUser[0], '=');
      $mailKey = substr($currentUser[0], 0, $pos);
      $mailValue = substr($currentUser[0], $pos + 1);
      // Get a pair key/value for the password
      $pos = strpos($currentUser[1], '=');
      $passKey = substr($currentUser[1], 0, $pos);
      $passValue = substr($currentUser[1], $pos + 1);
      // Create an array for THIS specific user
      $user[$mailKey] = trim($mailValue);
      $user[$passKey] = trim($passValue);
      // Add this array to the array which contains all the users
      $users[] = $user;
    }

    $message = "User doesn't exists";
    foreach ($users as $user) {
      if (
        ($user['mail'] == trim($_POST['email']))
        && ($user['password'] == trim($_POST['password']))
      ) {
        $message = "User successfully login";
        break;
      }
    }

    echo $message;

    fclose($file_handle);
  } else
    echo "Something wrong with the users file";
}
