<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configure PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Gmail SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'owner@etechinnovations.com'; // Your Gmail address
    $mail->Password = 'lwlw zoxw poql vynm'; // Your Gmail password (consider using environment variables)
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set email sender and recipient
    $mail->setFrom('owner@etechinnovations.com', 'Eric ');
    $mail->addAddress('owner@etechinnovations.com', 'Eric S'); // Recipient's email address

    // Set email content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email.';
    $mail->AltBody = 'This is a test email.';

    // Send the email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
