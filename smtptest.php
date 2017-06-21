<?php include_once("analyticstracking.php") ?>
<?php
    require("class.phpmailer.php");

    $mail = new PHPMailer();

    $mail->IsSMTP();  // telling the class to use SMTP
    $mail->SMTPAuth   = true; // SMTP authentication
    $mail->Host       = "smtp.gmail.com"; // SMTP server
    $mail->Port       = 465; // SMTP Port
    $mail->Username   = "amitarmittal@gmail.com"; // SMTP account username
    $mail->Password   = "anshulrmmittal";        // SMTP account password

    $mail->SetFrom('amitarmittal@gmail.com', 'Amit Mittal'); // FROM
    $mail->AddReplyTo('amitarmittal@gmail.com', 'Amit Mittal'); // Reply TO

    $mail->AddAddress('amitarmittal@gmail.com', 'Amit Mittal'); // recipient email

    $mail->Subject    = "First SMTP Message"; // email subject
    $mail->Body       = "Hi! \n\n This is my first e-mail sent through Google SMTP using PHPMailer.";

    if(!$mail->Send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
	//mail('amitarmittal@gmail.com','Sample mail','Sample content','From: amitarmittal@gmail.com');
	// the message
	/*$msg = "First line of text\nSecond line of text";

	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

	// send email
	if (mail("amitarmittal@gmail.com","My subject",$msg)) 
	{ 
		echo 'Sent';
	} 
	else 
	{ 
		echo 'Error while sending email';
	}*/
?>
