<?php
include("db_config.php");
session_start();
$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //check if all necessary data are entered
    if (isset($_POST["adminEmail"]) && isset($_POST["adminPassword"])) {
        $email = $_POST["adminEmail"];
        $password = $_POST["adminPassword"];

        //check the registration of the user
        $stmt = $pdo->prepare("SELECT * FROM admin WHERE username= :adminEmail");
        $stmt->execute(['adminEmail' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            //the registration success

            $_SESSION['id'] = $user['id'];
            $_SESSION['f_name'] = $user['f_name'];

            header("Location: admin-dashboard.php");
            exit();
        } else {
            //if registration failed for some reason
            $errorMessage = "Email or password are incorrect!";
            echo $errorMessage;
        }
    } else {
        $errorMessage = "Email and password are required!";
        echo $errorMessage;
    }
}
?>