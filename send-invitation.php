<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("db_config.php");

$host = 'localhost';
$db_name = 'event';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successfuly!";


} catch(PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


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

        // making an activation code
        $activationCode = md5(uniqid(rand(), true));
        //catch the event_id from register_dashboard.php page
        $selectedEventId = $_POST['selectedEvent'];




        // making an activation code
        $activationCode = md5(uniqid(rand(), true));

        // user data from form
        $firstName = $_POST["name"];
        $lastName = $_POST["lname"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $wishlist=$_POST["wishlist"];

        $mail->setFrom('mujicnatasa99@gmail.com', 'Global World Events');
        $mail->addAddress($email, $firstName);


        $mail->isHTML(true);
        $mail->Subject = 'Invitation for Event';
        $mail->Body = "Hello $firstName, you are invited to our event! $message. This is our wishlist: $wishlist";

        //here we take the selectedEvent value from the form
        $eventId = $_POST["selectedEvent"];


        if ($mail->send()) {
            //insert the invitation data into the database
            $insertInvitation = $pdo->prepare("INSERT INTO invitation (first_name, last_name, email, comment, wish_list, attendance, id_event) VALUES (:first_name, :last_name, :email, :comment, :wishlist,  :attendance, :id_event)");
            $insertInvitation->execute([
                'first_name' => $firstName,
                'last_name' => $lastName,
                'email' => $email,
                'comment' => $message,
                'wishlist' => $wishlist,
                'attendance' => 0,
                'id_event' => $eventId
            ]);

            echo "<script> alert('Invitation sent successfully!');</script>";
        } else {
            echo "Error sending invitation: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo "Error sending invitation: " . $mail->ErrorInfo;
    }
}
?>
