<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<form class="form-contact" action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>Update guest information</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="new_name" placeholder="Guest Name"> <br>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="new_email" placeholder="Guest Email"> <br>
        </div>
        <input type="submit" class="btn btn-info" value="Update">
    </div>
</form>
</body>
<?php

include("db_config.php");
session_start();

$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newName = $_POST['new_name'];
    $newEmail = $_POST['new_email'];

    // check if all necessary data are entered
    if (isset($_POST["new_name"]) && isset($_POST["new_email"])) {

        if (!empty($newName) && !empty($newEmail)) {
            // check if the user is logged in
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                // get the info from the URL parameters (URL part on UPDATE link from register_dashboard.php)
                if (isset($_GET['id_event']) && isset($_GET['email'])) {
                    $id_event = $_GET['id_event'];
                    $email = $_GET['email'];

                    // update info in the database
                    $updateQuery = "UPDATE invitation SET first_name = :newName, email = :newEmail WHERE id_event = :id_event AND email = :email";
                    $stmt = $pdo->prepare($updateQuery);
                    $stmt->execute([
                        'newName' => $newName,
                        'newEmail' => $newEmail,
                        'id_event' => $id_event,
                        'email' => $email
                    ]);

                    echo "Guest information updated successfully!" . "<a href='register_dashboard.php'>Back to your dashboard</a>";
                } else {
                    echo "Missing parameters.";
                }
            } else {
                echo "User is not logged in.";
            }
        } else {
            echo "All fields are required!";
        }
    } else {
        echo "Some data is not correct!";
    }
}
?>
