<?php
session_start();
// Get nickname and mail from the session (actual/old data)
// Normally you need to add a check to see if the user is really login or not
$nickName = $_SESSION['nickname'];
$oldMail = $_SESSION['mail'];

// Button was clicked
if (isset($_POST['submit'])) {
  // Get the new datas
  $mail = $_POST['mail'];
  $nickname = $_POST['nickname'];
  $sanitizeMail = filter_var($mail, FILTER_SANITIZE_EMAIL);
  $sanitizeMail = filter_var($mail, FILTER_VALIDATE_EMAIL);

  if (empty($mail) || empty($nickname)) {
    // Check if the fields are empty
    echo 'You must fill every fields';
  } elseif (!$sanitizeMail) {
    // Check if the mail is ok
    echo 'You must enter a valid email';
  } else {
    // If everything went fine, try to upload file
    require_once 'uploadFile.php';
    $fileName = uploadUserFile();

    // If the file was not uploaded
    if (!$fileName) {
      echo 'Something went wrong during file upload';
    } else {
      $query = "UPDATE users
      SET mail = '$sanitizeMail', 
      nickname = '$nickname',
      picture = '$fileName'
      WHERE mail = '$oldMail'";

      //Then UPDATE the user in the DB
      require_once 'database.php';

      // Open a connection to the DBMS
      $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

      // Send an SQL request to our DB
      $result_query = mysqli_query($connect, $query);

      // Check if the user was successfully registered 
      if ($result_query)
        echo 'Successfully updated.';
      else
        echo 'Something went wrong. Try again...';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Account</title>
</head>

<body>
  <h1>Edit Profile</h1>
  <form enctype="multipart/form-data" action="" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
    Select file : <input name="my-file" type="file" /><br>
    <input type="text" name="nickname" placeholder="nickname" value="<?php echo $nickName ?>"><br>

    <input type="text" name="mail" placeholder="mail" value="<?php echo $oldMail; ?>"><br>

    <input type="submit" name="submit" value="EDIT PROFILE">
  </form>
</body>

</html>