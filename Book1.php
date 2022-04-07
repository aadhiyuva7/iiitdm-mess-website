// Using Awesome https://github.com/PHPMailer/PHPMailer
<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'postmaster@sandboxf5b5213673844f838741507be88f5923.mailgun.org';   // SMTP username
$mail->Password = '39cfe974a5a72400c46a0f64ecd5850b-38029a9d-b8c9f2bf';                           // SMTP password
$mail->SMTPSecure = 'bhargav060702@gmail.com';                            // Enable encryption, only 'tls' is accepted

$mail->From = '119me0023@iiitk.ac.in';
$mail->FromName = 'Bhargav';
$mail->addAddress('119me0023@iiitk.ac.in');                 // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters

$mail->Subject = 'Hello';
$mail->Body    = 'Testing some Mailgun awesomness';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
