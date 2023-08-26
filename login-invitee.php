<?php
include("db_config.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Montserrat', sans-serif;
            background-color: #f8c870;
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

    <form class="form-signup text-center"  id="login-form" method="post" action="login-invitee-check.php">
        <div class="logo">
            <img src="colorfull_logo.png">
        </div>
        <h2>LOG IN</h2>

        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
        </div>

        <input type="submit" class="btn btn-warning btn-block" id="login" name="login" value="Submit">
        <hr>
    </form>
</div>


</body>
</html>

<?php
