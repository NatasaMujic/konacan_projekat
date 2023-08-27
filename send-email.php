<?php


require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$uploadDirectory = __DIR__ . '/send-email-files/';

$filenameee = $_FILES['file']['name'];
$fileName = $_FILES['file']['tmp_name'];
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$usermessage = $_POST['message'] ?? '';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mujicnatasa99@gmail.com';
    $mail->Password = 'qdhyrxyrebzezafb';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('mujicnatasa99@gmail.com', 'Global World Events');
    $mail->addAddress('gugisinaulica@gmail.com', 'Ana');

    $mail->isHTML(true);
    $mail->Subject = 'Contact form';
    $mail->Body = "
        Name: $name<br>
        Email: $email<br>
        Message: $usermessage<br>
    ";

    if (file_exists($uploadDirectory . '/' . $filenameee)) {
        $mail->addAttachment($uploadDirectory . '/' . $filenameee, $filenameee);
    } else {
        echo "Attachment file not found.";
    }

    $mail->send();
    echo "<script> alert('Mail sent successfully!');</script>";
} catch (Exception $e) {
    echo "Error sending mail: " . $mail->ErrorInfo;
}