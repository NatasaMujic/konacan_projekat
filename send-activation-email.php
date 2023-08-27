<?php
require_once 'vendor/autoload.php';
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
   // $activationCode =uniqid(rand(), true);

//user data from form
    $email = $_POST["email"];
    $firstName = $_POST["firstname"];
// activation code encoding
    //$encodedActivationCode = urlencode($activationCode);

    include("db_config.php");

    $host = 'localhost';
    $db_name = 'vb';
    $username = 'vb';
    $password = 'xcnnXuz0NqjuL8I';

    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT activation_code FROM registered_user WHERE email = :email");
    $stmt->execute(['email' => $email]);

    $code = $stmt->fetch(PDO::FETCH_ASSOC);
    $code = $code['activation_code'];

// sending an activation code from this email address to address entered into form
    $mail->setFrom('mujicnatasa99@gmail.com', 'Global World Events');
    $mail->addAddress($email, $firstName);

    $mail->isHTML(true);
    $mail->Subject = 'Account Activation';

// using an encoding code into link
    $mail->Body = "Click the following link to activate your account: <a href='https://vb.stud.vts.su.ac.rs/activate.php?code=" . urlencode($code) .  "'>Activate</a>";

    $mail->send();
    echo "<script> alert('Account created! Please check your email to activate your account.');</script>";
} catch (Exception $e) {
    echo "Error sending activation email: " . $mail->ErrorInfo;
}
