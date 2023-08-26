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

<style>
    *{
        font-family: 'Merienda', cursive;
    }
    #header3{
        background-color:  #f8c870;
        background-image: url("food/food.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
    }
    .thumbnail a{
        background-color: lavender;
        padding: 8px;
        text-decoration: none;
        margin: 6px;

    }
    .thumbnail a:hover{
        background-color: white;
        color: black;
        border: 1px solid black;
    }
    .login-button{
        background-color: white;
        color: black;
        padding: 10px;
        border-radius: 3px;
        border: 1px solid black;
        text-decoration: none;
    }
    /* RESPONSIVE DESIGN FOR NAVIGATION BAR */
    @media (max-width: 991px) {
        .navbar {
            flex-direction: column;
            align-items: center;
        }
        .login-button{
            padding: 3px;
        }
    }

    @media (max-width: 768px) {
        li {
            margin-right: 15px;
        }

        .login-button{
            padding: 3px;
        }
    }

    @media (max-width: 480px) {
        .navbar {
            padding: 10px;
        }
        li {
            padding: 10px;
            font-size: 16px;
            margin-right: 15px;
        }
        .login-button{
            padding: 3px;
        }
    }

</style>
</html>
<body>
<div id="header3" class="container vh-100">

    <div id="navbar" class="navbar">
        <div class="logo">
            <img src="colorfull_logo.png">
        </div>
        <ul>
            <a href="index.php" style="text-decoration: none; color: white;"><li>NEWS</li></a>
            <a href="music.php" style="text-decoration: none; color: white;"><li>MUSIC</li></a>
            <a href="art.php" style="text-decoration: none; color: white;"><li>ART</li></a>
            <a href="camping.php" style="text-decoration: none; color: white;"><li>CAMPING</li></a>
            <a href="drinks.php" style="text-decoration: none; color: white;"><li>FOOD/DRINKS</li></a>
            <li><a href="login.php" class="login-button">LOG IN</a></li>
        </ul>
    </div>
</div>


<div class="container">
    <div id="main">

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="food/pizza.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Pizzafest</h2>
                    <p id="text">Join zillions of people on this fine night of September when the village of Naples gear up to make and consume
                        more than 100,000 pizzas of every kind, ranging from 50-odd historic versions including classics Napoletana,
                        Margherita, and Marinara!</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>June, 2023</p>
                        <h4>Location</h4>
                        <p>Naples, Italy</p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="food/oktoberfest.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Oktoberfest</h2>
                    <p id="text">Come, be part of the world’s greatest celebration of beer with million other beer lovers who flock to Germany every year
                        for Oktoberfest. From the finest of brews for you to chug, spill, and bathe in, to culinary delights like bratwurst,
                        pretzels, and roasted meats, you’ll be spoilt for choice. </p>
                    <br>
                    <divclass="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p>17 Sep, 2023 – 3 Oct, 2023</p>
                    <h4>Location</h4>
                    <p>Germany</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4 text-center">
        <br><br><br>
        <div class="thumbnail">
            <img src="food/bacon.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>Bacon Festival</h2>
                <p id="text">Yes, you heard it right! There is a festival in the world that is solely dedicated to bacon.
                    The world goes gaga over bacon, so you have no excuse to not visit one of the best food festivals around the world.
                    The meat-loving population of the world can go crazy hogging on dishes like bacon gelato, bacon salad, bacon ramen and bacon tater tots.</p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p>TBA</p>
                    <h4>Location</h4>
                    <p>Sacramento, California</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>


<div class="container">

    <div class="col-md-4  col-sm-12 text-center">
        <br><br><br>
        <div class="thumbnail">
            <img src="food/chocolate.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>Salon Du Chocolat</h2>
                <p id="text">Are you a fan of chocolates and fashions alike? Then you must head to taste some high-quality chocolates produced in
                    Ecuador and attend the Salon du Chocolat festival in Quito. The festival lets you relish the taste of the finest of chocolates,
                    and watch a fashion show with models wearing dresses made of…any guesses what?</p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p> Yet to be announced</p>
                    <h4>Location</h4>
                    <p>Quito, Ecuador</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4 col-sm-12  text-center">
        <br><br><br>
        <div class="thumbnail">
            <img src="food/dumplings.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>Dumpling Festival</h2>
                <p id="text">Does your mouth starts to water when you think of steamy and juicy dumplings? If yes, then this festival is just for you.
                    Savour the taste of zongzi dumplings – glutinous rice with different fillings wrapped in bamboo,
                    lotus or banana leaves – on the fifth day of the fifth Chinese lunar month. </p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p>3 June, 2023</p>
                    <h4>Location</h4>
                    <p>Hong Kong</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-12 text-center">
        <br><br><br>
        <div class="thumbnail">
            <img src="food/cherry.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>National Cherry Festival</h2>
                <p id="text">Take a flight to the town’s Cherry Capital Airport, stay at the Cherry Tree Inn, be part of the Cherry Bomb Lacrosse
                    Tournament, cheer for the girls’ rollerblade team called the Toxic Cherries, witness the Cherry Parade, and crown a
                    Cherry Queen. With so much ‘cherry-ness’ to enjoy, there’s no reason why not to visit this international food festival.
                </p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p>20 Mar, 2023 – 17 Apr, 2023</p>
                    <h4>Location</h4>
                    <p>Traverse City, Michigan</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>

</div>
<div id="container">
<div class="footer">
    <div class="text_links">
        <h3>USEFUL LINKS</h3>
        <div class="useful-links">
            <a href="index.php">NEWS</a>
            <a href="#">MUSIC</a>
            <a href="#">ART</a>
            <a href="#">CAMPING</a>
            <a href="#">FOOD/DRINKS</a>
            <a href="login.php">LOG IN</a>
            <a href="register.php">REGISTER</a>
        </div>
    </div>

    <div class="text_info">
        <h3>HAVE ANY QUESTIONS?</h3>
        <p>Feel free to contact us!</p>
        <form style="display: block; font-family: 'Montserrat', sans-serif;">
            <input type="text" name="name" placeholder="Name">
            <input tye="email" name="email" placeholder="Email">
            <br><br>
            <textarea rows="3" cols="20" placeholder="Your message"></textarea>
            <input type="button" name="btn" value="Submit" style="background-color: #000; color: white; padding: 6px; border-radius: 3px;">
        </form>
    </div>
</div>
</div>
</body>
<?php
