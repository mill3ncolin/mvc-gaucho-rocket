<?php
/*
require_once ("vendor/phpmailer/phpmailer/src/PHPMailer.php");
require_once ("vendor/phpmailer/phpmailer/src/Exception.php");
require_once ("vendor/phpmailer/phpmailer/src/SMTP.php");
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
procesarTurno
date_default_timezone_set('America/Argentina/Buenos_aires');
 */
 
use PHPMailer\PHPMailer\PHPMailer;

class Email{
 
 
    public function enviarEmail($email, $body,$asunto){
  
   
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->SMTPDebug  = 2;
$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;

$mail->SMTPOptions = array(     'ssl' => array(         'verify_peer' => false,         'verify_peer_name' => false,         'allow_self_signed' => true     ) );

$mail->Username   = "automizacionesgio.com.ar@gmail.com";
$mail->Password   = "nzylrovqhdxxykzx";
$mail->SetFrom('systemenergymgauchorocket@gmail.com', 'Sistema Gaucho Rocket S.A');
$mail->AddAddress("$email", '');
$mail->isHTML(true);                                  
$mail->Subject = "$asunto";

$mail->Body ="$body";
 
	if(!$mail->Send()) {
echo "Error: " . $mail->ErrorInfo;
} else {
echo "Enviado!";
}
    }
 
}