<?php
include("db_config.php");

session_start();

// first check if the admin is logged in
if (isset($_SESSION['f_name']) && isset($_SESSION['f_name'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //checking if the block/unblock event was sent
        if (isset($_POST['blocked'])) {
            $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            foreach ($_POST['blocked'] as $event_id => $blocked) {
                $updateQuery = "UPDATE new_event SET blocked = :blocked WHERE id_event = :id_event";
                $stmt = $pdo->prepare($updateQuery);
                $stmt->execute([
                    'blocked' => $blocked,
                    'id_event' => $event_id
                ]);
            }

            echo "Event status updated successfully!" . "<a href='admin-dashboard.php'>Back to your admin dashboard!</a>";
        }
    }
}else{
    header("admin-dashboard.php");
    exit();
}







?>
