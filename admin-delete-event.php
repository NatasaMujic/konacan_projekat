<?php

include("db_config.php");
session_start();
if (isset($_GET['id_event'])) {
    $id_event = $_GET['id_event'];

    // creating PDO object
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL query to delete the event
    $deleteQuery = "DELETE FROM new_event WHERE id_event = :id_event";
    $stmt = $pdo->prepare($deleteQuery);
    $stmt->execute(['id_event' => $id_event]);

    header('Location: admin-dashboard.php');
    exit();
} else {
    echo "Missing parameter.";
}
