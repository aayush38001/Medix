<?php include_once("analyticstracking.php") ?>
<?php
date_default_timezone_set('Etc/UTC');
require './PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 
$mail->Host       = "smtp.gmail.com";      // SMTP server
$mail->Port       = 587;                   // SMTP port
$mail->Username   = "amitarmittal@gmail.com";  // username
$mail->Password   = "anshulrmittal";         // password

$mail->SetFrom('amitarmittal@gmail.com', 'Amit Mittal');
$mail->Subject    = "SMTP";
$mail->Body ='Replay If Working';

$address = "amitarmittal@gmail.com";
$mail->AddAddress($address, "Test");

if(!$mail->Send()) 
{
  echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
  echo "Message sent! to " . $address;
}