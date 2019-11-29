  <?php

  if (!empty($_POST)) {
    $firstName = $_POST['firstName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $filteredMail = filter_var($email, FILTER_VALIDATE_EMAIL);
    var_dump($filteredMail);

    if (trim($firstName) == 'Simon' && strlen($password) > 6) {
      echo 'Welcome, Simon';
    } else {
      echo 'You\'re not allow to view this page';
    }
  }
  ?>