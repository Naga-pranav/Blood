<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->SMTPDebug = 4; 
  $mail->SMTPAuth = true;
  $mail->isSMTP();

  $mail->Host = 'smtp.gmail.com';
  $mail->Mailer = 'smtp';
  $mail->Username = 'lifelinesupervisor22@gmail.com';
  $mail->Password = 'anuspzvxwxydzeco';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  $mail->setFrom('lifelinesupervisor22@gmail.com');
  $mail->addAddress($_POST["email"]);
  $mail->isHTML(true);
  $mail->Subject = $_POST["subject"];
  $mail->Body = $_POST["message"];
  $mail->send();

  echo
  "<script>
  alert('Sent Successfully');
  document.location.href = 'mail.php';
  </script>";
}
?>