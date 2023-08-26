<!DOCTYPE html>
<html lang="en">
<head>
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
        #header2{
            background-color:  #f8c870;
            background-image: url("camping/camping.jpg");
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
            #header{
                background-size: auto;
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
</head>
<body>
<div id="header2" class="container-fluid vh-100">

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
            <li><a href="login.php" class="login-button"  style="background-color: white; color: black; padding: 10px; border-radius: 3px; border: 1px solid black; text-decoration: none;">LOG IN</a></li>
        </ul>
    </div>


</div>

<div class="container">
    <div id="main">

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="camping/summer-camp.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2> Summer Camp</h2>
                    <p id="text">When it is camp season, the camp often hosts more than thrice the population of the city.
                        The campgrounds can get cramped, so knowing a few tricks to choose the best festival tent will be helpful.
                        Well, this part’s true for basically any festival or busy campground. Campgrounds are located within a forest
                        and have plenty of activities.</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>June 3 - July 3 , 2023</p>
                        <h4>Location</h4>
                        <p>Chillicothe, Ohio </p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="camping/edc-camping.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>EDC Las Vegas Camping</h2>
                    <p id="text">Camping in Las Vegas. The camping option was added only a few years ago to the EDC and turned out to be a huge hit!
                        Electric Daisy Carnival at Vegas is as crazy and fast-paced as you could imagine it to be.
                        The list of performances and activities is practically endless and the fun and enjoyment go on from dusk to dawn.</p>
                    <br>
                  <divclass="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p> August 25-30, 2022</p>
                        <h4>Location</h4>
                        <p> Las Vegas </p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="camping/forest.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Electric Forest</h2>
                    <p id="text">Electric Forest is swashbuckling, mind-blowing, and all the other adjectives and adverbs you can think of.
                        The festival is hosted on the massive JJ Ranch in Rothbury, Michigan. Thousands of attendees show up and
                        the list of performers is huge. This year’s a bit more special as the tenth celebration of the festival.</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>June 25-28</p>
                       <h4>Location</h4>
                        <p> JJ Ranch in Rothbury, Michigan</p>
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
            <img src="camping/sonic-room.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>Sonic Bloom</h2>
                <p id="text">Sonic Bloom is held at the Hummingbird Ranch in Southern Colorado. The festival focuses on creativity and its lineup
                    is carefully chosen to match the theme and goals of the festival. While music is central to the festival,
                    you’ll also find plenty of arts and creative activities going on.  </p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p> June 18-21</p>
                    <h4>Location</h4>
                    <p>Hummingbird Ranch, Southern Colorado</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4 col-sm-12  text-center">
        <br><br><br>
        <div class="thumbnail">
            <img src="camping/sziged.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>Sziget</h2>
                <p id="text">Sziget is perhaps one of the largest festivals in Europe. Hosted in Budapest, the festival has its routes
                    in political upheaval. However, now, the massive music festival attracts people from all over the world.
                    Sziget lasts almost a week and can easily see more than half a million people in attendance. </p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p>August 5-11</p>
                    <h4>Location</h4>
                    <p>Hungary, Budapest</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-12 text-center">
        <br><br><br>
        <div class="thumbnail">
            <img src="camping/donauinselfest.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>Donauinselfest</h2>
                <p id="text">In terms of the sheer number of attendees, Donauinselfest is very likely the largest festival in the world.
                    Millions of people from all over the world show up to enjoy this open and free festival. For the three days that it runs,
                    Donauinselfest attracts more than three million people.
                </p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p>June 26-29</p>
                    <h4>Location</h4>
                    <p>Vienna</p>
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
</html>
<?php
