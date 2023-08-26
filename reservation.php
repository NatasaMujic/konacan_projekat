<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600&family=Merienda:wght@300;400;600;700&family=Press+Start+2P&family=Quicksand:wght@300;400;500;600&family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Web event system</title>
<style> .logo img{
        width: 80px;
        height: 80px;
    }
    .logo{
        padding: 30px;
    }
</style>
</html>

<div class="container">
<form class="registerForm">
    <div class="logo">
        <img src="colorfull_logo.png">
    </div>
    <div class="form-group">
        <label for="name">First Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name*">
    </div>
    <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" placeholder="Last Name*">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com*">
    </div>
    <div class="form-group">
        <label for="eventsList">Choose event</label>
        <select class="form-control" id="eventsList">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Additional question</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>

</body>
<?php
