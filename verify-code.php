<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="libraries/jquery.min.js"></script>

    <!--ajax code for verification -->
    <script>
        $(document).ready(function() {
            //handler for verification of identification number
            $("#verify-form").submit(function(e) {
                e.preventDefault();

                var verificationCode = $("#verificationCode").val();

                $.ajax({
                    type: "POST",
                    url: "verify-code-process.php",
                    data: { verificationCode: verificationCode },
                    success: function(response) {
                        if (response === "success") {
                            $("#verification-result").text("Verification successful! You can reset your password now.");
                            window.location.href = "change-password.php";
                        } else {
                            $("#verification-result").text("Verification code is incorrect.");
                        }
                    },
                    error: function(error) {
                        alert("Error verifying verification code.");
                    }
                });
            });
        });
    </script>
</head>
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
<body>
<div class="container">
    <form class="form-signup text-center" id="verify-form" method="post">
        <div class="logo">
            <img src="colorfull_logo.png">
        </div>
        <h4>Enter the verification code sent to your email</h4>
        <div class="form-group">
            <input type="text" class="form-control" id="verificationCode" name="verificationCode" placeholder="Verification Code">
        </div>
        <input type="submit" class="btn btn-block" style="background-color: #50c792; color: white;" id="verify" name="verify" value="Verify">
        <hr>
        <a href="login.php">Back to login page</a>
        <div id="verification-result"></div>

    </form>
</div>
</body>
</html>