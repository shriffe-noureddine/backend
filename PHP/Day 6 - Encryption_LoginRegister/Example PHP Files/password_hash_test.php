<?php

    $passFromDb = '$2y$10$aOXmtMIh5wBLtPR57Si9jOLaamihtGCUNCOyNkHNemvcDKlA4VHna';
    // 123captain

    if(isset($_POST['hash'])) {
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        echo $pass;
    }

    if(isset($_POST['login'])) {
        if(password_verify($_POST['pass-test'], $passFromDb)) {
            // Le mot de passe est juste
            echo 'Mot de passe correct';
        } else {
            // Faux
            echo 'Mot de passe incorrect';
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<form action="#" method="post">
    <input type="text" name="pass">
    <input type="submit" name="hash" value="Hash du mot de passe" />
</form>

<form action="#" method="post">
    <input type="text" name="pass-test">
    <input type="submit" name="login" value="Connexion">
</form>
</body>
</html>
