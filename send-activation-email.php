<?php
require_once 'vendor/autoload.php';
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mujicnatasa99@gmail.com';
    $mail->Password = 'qdhyrxyrebzezafb';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // making an activation code
    $activationCode = md5(uniqid(rand(), true));

//user data from form
    $email = $_POST["email"];
    $firstName = $_POST["firstname"];
// activation code encoding
    $encodedActivationCode = urlencode($activationCode);

// sending an activation code from this email address to address entered into form
    $mail->setFrom('mujicnatasa99@gmail.com', 'Global World Events');
    $mail->addAddress($email, $firstName);

    $mail->isHTML(true);
    $mail->Subject = 'Account Activation';

// using an encoding code into link
    $mail->Body = "Click the following link to activate your account: <a href='http://localhost:80/web_programming_project/activate.php?code=" . urlencode($encodedActivationCode) .  "'>Activate</a>";

    $mail->send();
    echo "<script> alert('Account created! Please check your email to activate your account.');</script>";
} catch (Exception $e) {
    echo "Error sending activation email: " . $mail->ErrorInfo;
}
