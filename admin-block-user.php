<?php
include("db_config.php");

session_start();

// first check if the admin is logged in
if (isset($_SESSION['f_name']) && isset($_SESSION['f_name'])) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //checking if the block/unblock event was sent
        if (isset($_POST['block_user'])) {
            $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            foreach ($_POST['block_user'] as $user_id => $block_user) {
                $updateQuery = "UPDATE registered_user SET block_user = :block_user WHERE user_id=:user_id";
                $stmt = $pdo->prepare($updateQuery);
                $stmt->execute([
                    'block_user' => $block_user,
                    'user_id' => $user_id
                ]);
            }

            echo "Register status updated successfully!" . "<a href='admin-dashboard.php'>Back to your admin dashboard!</a>";
        }
    }
}else{
    header("admin-dashboard.php");
    exit();
}