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
</body>
</html>
<?php
include("db_config.php");
session_start();
if (isset($_GET['id_event'])) {
    $id_event = $_GET['id_event'];

    //creating PDO object
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to delete the event
    $deleteQuery = "DELETE FROM invitation WHERE id_event = :id_event; ";
    $deleteQuery2 = "DELETE FROM new_event WHERE id_event = :id_event;";
    $stmt = $pdo->prepare($deleteQuery . $deleteQuery2);
    $stmt->execute(['id_event' => $id_event]);

    header('Location: register_dashboard.php');
    exit();
} else {
    echo "Missing parameter.";
}
?>
