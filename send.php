<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/phpmailer/phpmailer/src/Exception.php';
require './vendor/phpmailer/phpmailer/src/PHPMailer.php';
require './vendor/phpmailer/phpmailer/src/SMTP.php';

// Initialize a flag to indicate whether the message was sent
$messageSent = false;

try {
    if (isset($_POST["send"])) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kmorota080@gmail.com'; // Your email
        $mail->Password = 'nhbnnnzmginikdve'; // Your gmail app password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('kmorota080@gmail.com','Admin'); // Your email

        $mail->addAddress('raydoriancain@gmail.com');

        $mail->isHTML(true);

        $mail->Subject = 'Contact Us';
        $mail->Body = "Name: " . htmlspecialchars(trim($_POST['name'])) . "<br>" .
                      "Email: " . $_POST["email"];
                      /* "Message: " . htmlspecialchars(trim($_POST['message'])); */
                      
                      

        $mail->send();
        header("Location: contact.php?messageSent=true");
        exit();
    }
} catch (Exception $e) {
    $error_message = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    error_log($error_message, 0); // Log error to file
    echo $error_message;
}
?>