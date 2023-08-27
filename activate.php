<?php

include("db_config.php");

$host = 'localhost';
$db_name = 'vb';
$username = 'vb';
$password = 'xcnnXuz0NqjuL8I';

$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["code"])) {
    $encodedActivationCode = $_GET["code"];

    //decoding the activation code
    $activationCode =urldecode($encodedActivationCode);

    //check if there is a user with the correct activation code
    $stmt = $pdo->prepare("SELECT user_id FROM registered_user WHERE activation_code = :activationCode AND is_active = 0");
    $stmt->execute(['activationCode' => $activationCode]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $user = $user['user_id'];

    if (!empty($user)) {
        // activate account
        $stmt = $pdo->prepare("UPDATE registered_user SET is_active = 1, activation_code = NULL WHERE user_id = :userId");
        $stmt->execute(['userId' => $user]);

        echo "Your account has been successfully activated. You can now log in: <a href='https://vb.stud.vts.su.ac.rs/login.php?code'>Log in</a>";
    } else {
        echo "Invalid activation code or account is already activated. Debug info: " . print_r($stmt->errorInfo(), true);
    }
} else {
    echo "Invalid request.";
}