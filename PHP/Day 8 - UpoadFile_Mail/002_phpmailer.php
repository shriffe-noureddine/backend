<?php
    //ini_set("display_errors", 1);

/*
*   Télécharger le repo : https://github.com/PHPMailer/PHPMailer
*   Ne garder que le dossier src/ où se trouve les 5 fichiers PHP
*   Inclure ces fichiers dans votre projet, à la racine, où vous voulez...
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

try {


$mail = new PHPMailer();
// Config
$mail->isSMTP(true);    // On utilise le protocole SMTP
$mail->Host = 'smtp-mail.outlook.com';   // On utilise le serveur OVH
$mail->SMTPAuth = true;
$mail->Username = 'simon-bertrand@live.fr';    // Vos identifiants OVH
$mail->Password = 'mypassword';
$mail->SMTPSecure = 'tls';  // On active l'encryptage TLS.
$mail->Port = 587;  // Le port sur lequel se connecter

// Info du mail
$mail->setFrom('simon-bertrand@live.fr', 'John');  // L'adresse mail de l'envoyeur (vous) et le nom (optionnel)
$mail->addAddress('simon-bertrand@live.fr');    // Le(s) destinataire(s)

$mail->isHTML(true);    // On utilise du HTML
$mail->Subject = "Testing PHP Mail";
$mail->Body = "<h1>Test envoi de mail en PHP</h1>";

if($mail->send()) {
    echo "ok";
} else 
    echo "notttttt ok";
}
catch(Exception $e) {
    echo $e->getMessage();
}
?>