<?php

// Function to validate each inputs of the form
function validationForm()
{
  // To save errors
  $errors = array();

  // Check if name is not empty
  $name = $_POST['name'];
  if (empty($name))
    $errors[] = 'Name is mandatory';

  // Check if mail is not empty
  $mail = $_POST['mail'];
  if (empty($mail))
    $errors[] = 'Name is mandatory';

  // Check if mail is valid
  $sanitizeMail = filter_var($mail, FILTER_SANITIZE_EMAIL);
  $sanitizeMail = filter_var($mail, FILTER_VALIDATE_EMAIL);

  if (!$sanitizeMail)
    $errors[] = 'You must enter a valid email';

  // Get subject or default value
  $subject = "Contact Form";
  if (!empty($_POST['subject']))
    $subject = $_POST['subject'];

  // Check if message is empty
  $message = $_POST['message'];
  if (empty($message))
    $errors[] = 'Message is mandatory';

  return $errors;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Function to send mail
function sendContactMail()
{

  require_once 'PHPMailer/Exception.php';
  require_once 'PHPMailer/PHPMailer.php';
  require_once 'PHPMailer/SMTP.php';

  $sanitizeMail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
  $sanitizeMail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);

  try {
    $mail = new PHPMailer();
    // Config
    $mail->isSMTP(true);    // On utilise le protocole SMTP
    $mail->Host = 'smtp-mail.outlook.com';   // On utilise le serveur OVH
    $mail->SMTPAuth = true;
    $mail->Username = 'simon-bertrand@live.fr';    // Vos identifiants OVH
    $mail->Password = '******';
    $mail->SMTPSecure = 'tls';  // On active l'encryptage TLS.
    $mail->Port = 587;  // Le port sur lequel se connecter

    // Info du mail
    $mail->setFrom('simon-bertrand@live.fr', 'John');  // L'adresse mail de l'envoyeur (vous) et le nom (optionnel)
    $mail->addAddress($sanitizeMail);    // Le(s) destinataire(s)

    $mail->isHTML(true);    // On utilise du HTML
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];

    if ($mail->send()) {
      echo "Email successfully sent";
    } else
      echo "Something went wrong";
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
