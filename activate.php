<?php

include("db_config.php");

$host = 'localhost';
$db_name = 'event';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["code"])) {
    $encodedActivationCode = $_GET["code"];

    //decoding the activation code
    $activationCode = base64_decode(urldecode($encodedActivationCode));

    //check if there is a user with the correct activation code
    $stmt = $pdo->prepare("SELECT * FROM registered_user WHERE activation_code = :activationCode AND is_active = 0");
    $stmt->execute(['activationCode' => $activationCode]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // activate account
        $stmt = $pdo->prepare("UPDATE registered_user SET is_active = 1, activation_code = NULL WHERE user_id = :userId");
        $stmt->execute(['userId' => $user['user_id']]);

        echo "Your account has been successfully activated. You can now log in: <a href='http://localhost:80/web_programming_project/login.php?code'>Log in</a>";
    } else {
        echo "Invalid activation code or account is already activated. Debug info: " . print_r($stmt->errorInfo(), true);
    }
} else {
    echo "Invalid request.";
}