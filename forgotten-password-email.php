<?php
 include("db_config.php");
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="libraries/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        //handler for sending the identification number to the user's email
        $("#verify-form").submit(function(e) {
            e.preventDefault();

            var email = $("#email").val();

            $.ajax({
                type: "POST",
                url: "send-verification-code.php",
                data: { email: email },
                success: function(response) {
                    alert("Verification code sent! Check your email.");
                    //redirect the user to the next page where they enter the verification code
                    window.location.href = "verify-code.php";
                },
                error: function(error) {
                    alert("Error sending verification code.");
                }
            });
        });

    });
</script>
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
<form class="form-signup text-center"  id="verify-form" method="post">
    <div class="logo">
        <img src="colorfull_logo.png">
    </div>
    <h4>We'll send the identification number to your email</h4>

    <div class="form-group">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
    </div>

    <input type="submit" class="btn btn-block" style="background-color: #50c792; color: white;" id="login" name="login" value="Send">
    <hr>
    <a href="login.php">Back to login page</a>
</form>
</body>
</html>