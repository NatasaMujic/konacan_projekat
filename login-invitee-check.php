<?php
include("db_config.php");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["login"])){
    if (isset($_POST["email"])) {
        $_SESSION["email"] = $_POST["email"];

        $email = $_POST["email"];

        $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the email exists in the invitation table
        $stmt = $pdo->prepare("SELECT * FROM invitation WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $invitedUser = $stmt->fetch();

        if ($invitedUser) {
            // Store the user's email in session
            $_SESSION['email'] = $email;
            header('Location: invitee.php');
            exit();
        } else {
            echo "You are not invited to any events.";
        }
    }
}
