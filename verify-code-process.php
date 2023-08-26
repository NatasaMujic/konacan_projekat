<?php
//on this page, the verification code sent from the verify-code.php page is processed and checked

session_start();

include("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $verificationCode = $_POST["verificationCode"];

    if (isset($_SESSION["verificationCode"]) && $_SESSION["verificationCode"] == $verificationCode) {
        unset($_SESSION["verificationCode"]);
        echo "success";
        exit();
    } else {
        echo "error";
    }
}
?>
