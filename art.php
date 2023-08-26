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

        #header1{
            background-color:  #f8c870;
            background-image: url("art/art.jpg");
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
<div id="header1" class="container-fluid vh-100">

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
            <li><a href="login.php" class="login-button" style="background-color: white; color: black; padding: 10px; border-radius: 3px; border: 1px solid black; text-decoration: none;">LOG IN</a></li>
        </ul>
    </div>


</div>

    <div class="container">
        <div id="main">

            <div class="col-md-4 text-center">
                <br><br><br>
                <div class="thumbnail">
                    <img src="art/art-basel.jpg" alt="disney" style="width:100%">
                    <div class="caption">
                        <h2>Art Basel Miami Beach</h2>
                        <p id="text">Art Basel takes place in four locations each year: Basel, Switzerland; Hong Kong; Paris;
                            and Miami Beach—and the Miami Beach show is one of our all-time favorite domestic art fairs.
                            The event is dedicated to highlighting modern and contemporary works from both leading and emerging
                            artists represented by esteemed galleries across five continents.</p>
                        <br>
                        <div class="detail">
                            <h3>When and where</h3>
                            <h4>Date and Time</h4>
                            <p>December, 1-3, 2022</p>
                            <h4>Location</h4>
                            <p> Faena Hotel Miami Beach, Switzerland </p>
                            <br>
                            <a href="reservation.php">RESERVATION</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <br><br><br>
                <div class="thumbnail">
                    <img src="art/antiques.jpg" alt="disney" style="width:100%">
                    <div class="caption">
                        <h2>TEFAF</h2>
                        <p id="text">The European Fine Art Foundation (TEFAF) is a must-see for art and design enthusiasts every year,
                            as the fair features the best in fine art, antiques, and design. For those looking to enjoy a stateside experience,
                            TEFAF comes to New York City each May with a focus on contemporary and modern art. </p>
                        <br>
                        <div class="detail">
                            <h3>When and where</h3>
                            <h4>Date and Time</h4>
                            <p> June 25-30, 2022</p>
                            <h4>Location</h4>
                            <p>  Kruisherenhotel Maastricht, Netherlands </p>
                            <br>
                            <a href="reservation.php">RESERVATION</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 text-center">
                <br><br><br>
                <div class="thumbnail">
                    <img src="art/arco-madrid.jpg" alt="disney" style="width:100%">
                    <div class="caption">
                        <h2>ARCOmadrid</h2>
                        <p id="text">ARCOmadrid has become one of Europe’s preeminent contemporary art fairs since it first launched in 1982,
                            and now it takes place each winter. Visitors to ARCOmadrid will be able to explore works from artists living
                            in Central and South America, Europe, the Middle East, and Southeast Asia.</p>
                        <br>
                        <div class="detail">
                            <h3>When and where</h3>
                            <h4>Date and Time</h4>
                            <p>February 22-26, 2023</p>
                            <h4>Location</h4>
                            <p>  Mandarin Oriental, Ritz Madrid  </p>
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
                <img src="art/masterpiece-london.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Masterpiece London</h2>
                    <p id="text">Another bucket list fair for lovers of both art and design is Masterpiece London.
                        This art show takes place each summer and has been showcasing the best in art, jewelry,
                        furniture, and design from antiquity to today since its first edition in 2010. </p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>June 30-July 6, 2022</p>
                        <h4>Location</h4>
                        <p> Masterpiece nearby Egerton House Hotel, London</p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4 col-sm-12  text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="art/la-bienalle.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>La Biennale Paris</h2>
                    <p id="text">La Biennale Paris is one of two top art fairs located in the City of Lights that every art lover should see in their lifetime. It first opened in 1956 as a French antiques fair and has since evolved to include art, jewelry,
                        and other decorative elements for the home.</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>Opened</p>
                        <h4>Location</h4>
                        <p>La Biennale, Paris</p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="art/frieze-london.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Frieze Art Fair</h2>
                    <p id="text">Frieze’s programming focuses on contemporary art, while Frieze Masters, which coincides with London’s fair,
                        ranges from ancient to modern works. The London event is our top pick for getting the most insightful experience,
                        but we’re also excited about Frieze’s first fair in Seoul this September.</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>September 2-5, October 6-9</p>
                        <h4>Location</h4>
                        <p>Frieze London and Frieze Masters, London</p>
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
            <a href="music.php">MUSIC</a>
            <a href="art.php">ART</a>
            <a href="camping.php">CAMPING</a>
            <a href="drinks.php">FOOD/DRINKS</a>
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
