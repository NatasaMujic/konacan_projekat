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
         .container-fluid4{
             background-image: url("grid.png");
             background-size: contain;
         }
         .container-fluid4{
             flex-direction: row;
             padding: 0;
             margin-right: 40px;
             font-size: 15px;
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
         .container-fluid4{
             background-image: url("grid.png");
             background-size: contain;

         }
         .container-fluid4{
             flex-direction: row;
             padding: 0;
             margin-right: 40px;
             font-size: 15px;
         }

     }
    </style>
</head>

<body>
<div id="header" class="container-fluid vh-100">

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
<div class="container-fluid1">

<div class="container">
    <div id="main">

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="tomorrowland.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Tomorrowland Music Festival</h2>
                    <p id="text">Tomorrowland is an annual electronic dance music festival that is known for its extravagant stage design,
                        immersive atmosphere, and world-class lineup of DJs and producers.</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>July 14, 11pm - July 15, 7pm CEST</p>
                        <h4>Location</h4>
                        <p> 1456 Venera Street, Boom Belgium </p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="coachella.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Coachella Music Festival</h2>
                    <p id="text">The festival was first held in 1999 and has since become one of the largest and most popular music festivals in the world.
                        It is known for its diverse lineup of music genres, art installations, and celebrity sightings. </p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>June 20, 11pm - June 15, 6am</p>
                        <h4>Location</h4>
                        <p> Coachella Valley of Southern California, United States </p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="rolling-loud.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Rolling Loud Music Festival</h2>
                    <p id="text">Rolling Loud is a music festival has since grown into one of the largest hip-hop music festivals in the world,
                        with events held in cities across the United States and internationally. The festival was founded by Tariq Cherif and Matt Zingler, and it is known for its impressive lineup of rap and hip-hop performers, as well as its energetic and passionate audience.</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>August 18, 18pm - August 28, 20pm</p>
                        <h4>Location</h4>
                        <p> 2345 Sycamore Road, Miami Florida </p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<div class="container-fluid2">
<div class="container">

    <div class="col-md-4 text-center">
        <br><br><br>
        <div class="thumbnail">
            <img src="alpes-bachata.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>ALPES BACHATA CONGRESS - ABC</h2>
                <p id="text">We are pleased to announce you the 2nd edition of the great ALPES BACHATA CONGRESS in ANNECY, also called "The Little Venice of the Alps" in France.
                    Amazing LINE UP, International DJ's, more than 30 hours of workshops, shows, Parties, Demos!</p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p>September 1, 18pm - September 3, 20pm</p>
                    <h4>Location</h4>
                    <p>Impérial Palace Allée de l'Impérial 74000 - ANNECY , France</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4 text-center">
        <br><br><br>
        <div class="thumbnail">
            <img src="ballet-barcelona.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>Ballet Clásico Adultos</h2>
                <p id="text">If classical dance and jazz dance attract you, it is never too late to start and/or resume these disciplines.
                    I offer several levels of ballet and jazz dance classes for adults, so you can take my classes whether you have always practiced dance or if it is the first time.</p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p>Monday 6 of February at 00:00 to Monday 24 of July at 00:00</p>
                    <h4>Location</h4>
                    <p> Body Ballet Carolina de Pedro C/Zamora, 68 08018 - Barcelona Barcelona</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 text-center">
        <br><br><br>
        <div class="thumbnail">
            <img src="dancefull-inner.jpg" alt="disney" style="width:100%">
            <div class="caption">
                <h2>Danceful Goddess Retreat</h2>
                <p id="text">Join our retreat at the healing venue of Indigo Dream, nestled atop picturesque hills.This 6-night/7-day getaway is a transformative experience designed for dancers, performers and teachers who want to tap into their inner power and unleash their divine feminine energy</p>
                <br>
                <div class="detail">
                    <h3>When and where</h3>
                    <h4>Date and Time</h4>
                    <p>Monday 10 of July at 09:00 to Sunday 16 of July at 20:00</p>
                    <h4>Location</h4>
                    <p>Indigo Dream Hills Agia Anna 7649 - Psevdas Larnaca</p>
                    <br>
                    <a href="reservation.php">RESERVATION</a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<div class="container-fluid3">
    <div class="container">

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="nexus.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Nexus Underground</h2>
                    <p id="text">In the world of Nexus, an odd phenomenon has caused 10% of the population to change at a young age; developing super enhanced abilities or powers beyond their dreams. This 10% can be split into two, as it seems that they appear to be soul bound to another person.</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>July 16 · 10pm - July 17 · 5am CEST</p>
                        <h4>Location</h4>
                        <p> Sekirana Bar 3 Maršala Birjuzova Beograd</p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="balkan-rhytm.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>New Balkan Rhythm festival</h2>
                    <p id="text">New Balkan Rhythm festival: workshops of body music and world music from Anna Llombart, Elena Hristova, Max Pollak, Ben Schuetz and AWb.</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>August 25 · 9:30am - August 27 · 2pm CEST</p>
                        <h4>Location</h4>
                        <p> Eco Centre Radulovački 5 Mitropolita Stratimirovića 21205 Sremski Karlovci</p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="salsa.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>Transilvania Salsa Fest</h2>
                    <p id="text">BAILArte Dance School invites you to the 12th Transilvania Salsa Festival.
                        This feisty event gathers hungry dancers, instructors, performers and all kind of salsa freaks to a bloody great and unforgettable weekend,
                        4 days of surreal salsa experience mixed up with endless parties spiced up by some of the best DJ's</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>16-20 Nov 2023</p>
                        <h4>Location</h4>
                        <p> Cluj-Napoca, Romania</p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid4">
    <div class="container">

            <div class="row align-items-center justify-content-center" id="jamaica">
                <h1 style="font-family: 'Permanent Marker', cursive; color: #ffffff;">DON'T MISS!</h1>

                <div class="col-md-6">

                    <h2>A Joyous Jamaican Journey</h2>
                    <p id="text">Join us as we tell the story of Reggae music and the Windrush Generation and hear how this music took the world by
                        storm. Narrated by comedian John Simmit and featuring ska, rock steady, calypso, gospel, lovers rock, dancehall
                        and Reggae played live by the JA Reggae Band. Get ready to enjoy the music of Desmond Dekker.</p>
                </div>
                <div class="col-md-6">
                    <img src="jamaica-music.jpg" alt="disney" style="width:300px; height: 200px;">
                </div>
            </div>

    </div>
</div>





</body>
</html>
<?php
