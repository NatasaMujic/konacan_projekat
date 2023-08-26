<?php

include("db_config.php");
session_start();

require_once 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    //generate a random six-digit number
    $verificationCode = rand(100000, 999999);

    //save the generated number in the session for later checking
    $_SESSION["verificationCode"] = $verificationCode;

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mujicnatasa99@gmail.com';
        $mail->Password = 'qdhyrxyrebzezafb';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // user data from form
        $firstName = $_POST["firstname"];

        // sending an activation code from this email address to address entered into form
        $mail->setFrom('mujicnatasa99@gmail.com', 'Global World Events');
        $mail->addAddress($email, $firstName);

        $mail->isHTML(true);
        $mail->Subject = 'Account Identification';

        //include the verification code in the email body
        $mail->Body = "Your verification code: $verificationCode";

        $mail->send();
    } catch (Exception $e) {
        echo "Error sending identification email: " . $mail->ErrorInfo;
    }
}
?>