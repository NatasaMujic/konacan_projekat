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
            background-color: #ade8d3;
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
    <form class="form-signup text-center" id="registerForm" method="post" action="admin-dashboard.php">
        <div class="logo">
            <img src="colorfull_logo.png">
        </div>
        <h2>Admin register form</h2>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <span id="nameError"></span>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                </div>
                <div class="col-md-6">
                    <span id="lastNameError"></span>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                </div>

            </div>
        </div>
        <div class="form-group">
            <span id="emailError"></span>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
        </div>
        <div class="form-group">
            <span id="passwordError"></span>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <input type="submit" class="btn btn-success btn-block" name="btn" value="Submit">
    </form>
</div>
</body>
</html>
<?php
