<?php

// Check if form was submitted
if (isset($_POST['submit'])) {

  // Validations for each input.
  require_once 'contact_helper.php';
  $errors = validationForm();

  // Only if everything is fine (validations ok)
  if (count($errors) > 0) {
    // Display errors
    echo implode('<br>', $errors);
  } else {
    // Validations ok, so I can send mail
    sendContactMail();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Page</title>
</head>

<body>

  <h1>Contact Form</h1>

  <form action="" method="post">
    <input type="text" name="name" placeholder="name"><br>
    <input type="email" name="mail" placeholder="mail"><br>
    <input type="text" name="subject" placeholder="subject"><br>
    <textarea name="message" rows="4" cols="50">Message...</textarea><br>
    <input type="submit" name="submit" value="SEND MAIL">
  </form>
</body>

</html>