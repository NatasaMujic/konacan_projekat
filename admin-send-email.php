<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("db_config.php");

    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once 'vendor/autoload.php';
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
        $firstName = $_POST["fname"];
        $email = $_POST["r_email"];
        $message = $_POST["r_message"];


        $mail->setFrom('mujicnatasa99@gmail.com', 'Global World Events');
        $mail->addAddress($email, $firstName);


        $mail->isHTML(true);
        $mail->Subject = 'Notification of event deletion';
        $mail->Body = "Hello $firstName, we would like to inform you that your event has been deleted . $message.";



        if ($mail->send()) {

            echo "<script> alert('Information sent successfully!');</script>";
        } else {
            echo "Error sending email: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Error sending mail: " . $mail->ErrorInfo;
    }
}
?>