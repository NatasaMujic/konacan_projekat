<?php
include("db_config.php");
session_start();

$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_SESSION['user_id'])) {
    //remove the user_id check since it's not present in the table
    // $user_id = $_SESSION['user_id'];

    if (isset($_GET['id_event']) && isset($_GET['email'])) {
        $id_event = $_GET['id_event'];
        $email = $_GET['email'];

        //delete guest based on event_id and email
        $deleteQuery = "DELETE FROM invitation WHERE id_event = :id_event AND email = :email";
        $stmt = $pdo->prepare($deleteQuery);
        $stmt->execute([
            'id_event' => $id_event,
            'email' => $email
        ]);

        echo "Guest deleted successfully!". "<a href='register_dashboard.php'>Back to your dashboard</a>";
    } else {
        echo "Missing parameters.";
    }
} else {
    echo "User is not logged in.";
}