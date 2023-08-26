<?php
require_once 'vendor/autoload.php';
include("db_config.php");
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//send remainder email to the invitee
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventName = $_POST['eventName'];
    $guestName = $_POST['guestName'];
    $guestEmail = $_POST['guestEmail'];
    $message = $_POST['message'];

    // Initialize PHPMailer
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
        $mail->addAddress($guestEmail, $guestName);

        $mail->isHTML(true);
        $mail->Subject = 'Event Reminder: ' . $eventName;
        $mail->Body = $message;

        $mail->send();

        $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //get id_event based on eventName
        $selectEventIdQuery = "SELECT id_event FROM new_event WHERE event_name = :event_name";
        $selectEventIdStatement = $pdo->prepare($selectEventIdQuery);
        $selectEventIdStatement->execute(['event_name' => $eventName]);
        $eventId = $selectEventIdStatement->fetchColumn();

        //insert reminder into the event_reminder table
        $insertQuery = "INSERT INTO event_reminder (id_event, guest_name, guest_email, message) VALUES (:id_event, :guest_name, :guest_email, :message)";
        $insertStatement = $pdo->prepare($insertQuery);
        $insertStatement->execute([
            'id_event' => $eventId,
            'guest_name' => $guestName,
            'guest_email' => $guestEmail,
            'message' => $message
        ]);

        echo 'Reminder email has been sent';
    } catch (Exception $e) {
        echo "Reminder email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'Invalid request';
}
?>