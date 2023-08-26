<?php
include("db_config.php");
session_start();

$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST["pass"];
    $confirmedPassword = $_POST["pass1"];

    if ($newPassword === $confirmedPassword) {

        $userID = $_SESSION["user_id"];

        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $updateQuery = "UPDATE registered_user SET password = :password WHERE user_id = :user_id";
        $stmt = $pdo->prepare($updateQuery);
        $stmt->bindParam(":password", $hashedNewPassword);
        $stmt->bindParam(":user_id", $userID);

        if ($stmt->execute()) {
            echo "<script> alert('Password updated successfully.'); window.location.href = 'login.php';</script>";
        } else {
            echo "Error updating password: " . $stmt->errorInfo()[2];
        }
    } else {
        echo "Passwords do not match.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="libraries/jquery.min.js"></script>

    <style>
        body{
            font-family: 'Montserrat', sans-serif;
            background-color: #50c792;
            padding-top: 7%;
        }
        .form-signup{
            margin: 0 auto;
            max-width: 400px;
            background-color: white;
            padding: 40px;
            border: 2px solid lightgray;
            box-shadow: 10px 10px lightgray;
        }
        .logo img{
            width: 80px;
            height: 80px;
        }

    </style>
</head>
<body>
<div class="container">
    <form class="form-signup text-center" method="post">
        <div class="logo">
            <img src="colorfull_logo.png">
        </div>
        <h4>Create a new password</h4>
        <div class="form-group">
            <input type="password" class="form-control" id="pass" name="pass" placeholder="New password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Confirm password">
        </div>
        <input type="submit" class="btn btn-block" style="background-color: #50c792; color: white;" id="submit" name="submit" value="Submit">
    </form>
</div>
</body>
</html>
