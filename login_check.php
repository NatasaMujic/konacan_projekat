<?php
include("db_config.php");

$host = 'localhost';
$db_name = 'vb';
$username = 'vb';
$password = 'xcnnXuz0NqjuL8I';
$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //check if all necessary data are
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        //check the registration of the user
        $stmt = $pdo->prepare("SELECT * FROM registered_user WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();


            if ($user && password_verify($password, $user['password'])) {
                //check if the registered user's account is blocked

                if ($user['block_user'] == 0) {

                    //the registration success
                session_start();
                $_SESSION['user_id'] = $user['user_id'];

                $_SESSION['email'] = $email;

                //session for recognizing the expecting registered user
                $_SESSION['firstName'] = $user['first_name'];

                header("Location: register_dashboard.php");
                exit();
            } else{
                    echo "<script>alert('Access denied for this account. For more information, contact the admin.');</script>";
                    header("login.php");
                    exit();
                }
            } else {
                //if registration failed for some reason
                $errorMessage = "Email or password are incorrect!";
                echo "<script>alert('$errorMessage');</script>";


            }
    } else {
        $errorMessage = "Email and password are required!";
        echo "<script>alert('$errorMessage');</script>";
    }
}
?>
