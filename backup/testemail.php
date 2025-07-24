<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.googlemail.com';         // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                         // Enable SMTP authentication
$mail->Username = "noreply_ar@nipponpaint.co.in";                 // SMTP username
$mail->Password = "#Edcrty9*";                           // SMTP password
$mail->SMTPSecure = "tls";                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = "587";
$mail->setFrom("noreply_ar@nipponpaint.co.in","Testing");
$mail->addAddress('sm.sharma8882@gmail.com');
$mail->isHTML(true);
$mail->Subject = "test Mail";
$mail->Body = "this is a Test Mail";
$send = $mail->Send();


if ($send) {

	echo "send";
}
else{
	echo "not send";
}
$mail->smtpClose();



?>