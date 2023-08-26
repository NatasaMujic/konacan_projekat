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
            margin: 0;
            padding: 0;
            font-family: 'Merienda', cursive;
        }
        body{
            position: relative;
        }
        #header{
            background-size: cover;
            height: 100vh;
            width: 100%;
        }
        .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }
        .navbar{
            color: white;
            padding: 20px;
            position: fixed;
            width: 100%;
            display: flex;
            justify-content: space-between;
            z-index: 1;
        }
        .navbar ul{
            margin-top: 15px;
            padding: 0;
            list-style: none;
        }
        li{
            display: inline;
            padding: 20px;
            font-size: 18px;
            font-weight: bold;
            color: white;
            margin-right: 30px;
        }

        .headerColor li{
            color: #ea48ac;
        }

        .logo img{
          width: 80px;
            height: 80px;
        }
        .login-button{
            background-color: white;
            color: black;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid black;
            text-decoration: none;
        }

       @keyframes ani2{
           100%{
               opacity: 1;
           }
       }
       @keyframes ani1{
           100%{
               transform: scale(1.55);
           }
       }
       .load{
           animation: slide 1s;
       }
       .bg{
           background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
           width: 100%;
           height: 100vh;
           animation: slide 30s infinite;

       }
       .content{
           height: 100vh;
           width: 100%
           background-color: black;
       }

        .wrapper-text{
            left: 30%;
            top: 10%;
            animation: ani2 0.5s ease-out forwards;
            transform: translate(-50%,-50%);
            position: absolute;
            letter-spacing: 5px;
            text-align: center;
            text-size: 40px;

        }
       @keyframes slide{
           0%{
               background-image: url('header_pic.jpg');
           }
           20%{
               background-image: url('maskenbal.jpg');
           }
           40%{
               background-image: url('theatre.jpg');
           }
           60%{
               background-image: url('balet.jpg');
           }
           80%{
               background-image: url('food.jpg');
           }
           100%{
               background-image: url('camping.jpg');
           }
       }
      #titles{
          font-family: 'Permanent Marker', cursive;
          position: relative;
          color: black;
      }
      #text{
          font-family: 'Montserrat', sans-serif;
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
      #section{
          margin-top: 40px;
          background-color: #f8c870;
          width: 90%;
          height: fit-content;
          border-top-right-radius: 150px;
          border-bottom-right-radius: 150px;
          text-align: center;
          padding: 20px;
      }
      #section .p1{
          font-family: 'Permanent Marker', cursive;
          font-size: 40px;
      }
      #section .p2{
          font-family: 'Montserrat', sans-serif;
          font-size: 30px;
      }
      #section_1{
          display: flex;
          text-align: left;

      }
        .section-first, .section-second{
            font-family: 'Montserrat', sans-serif;
        }
        .section-first-p, .section-second-p{
            font-family: 'Montserrat', sans-serif;
        }
        .button-effects a{
            text-decoration: none;
            color: black;
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            font-size: 15px;
        }
        .button-effects a:hover{
            background-color: #f8c870;
            border: 2px solid white;
            color: white;
        }
        #znj{
            color: white;
        }

        #section_main2{
            margin-top: 40px;
            background-color: #ade8d3;
            width: 90%;
            height: fit-content;
            border-top-right-radius: 150px;
            border-bottom-right-radius: 150px;
            text-align: center;
            padding: 20px;
        }
        #section_main2 .p1{
            font-family: 'Permanent Marker', cursive;
            font-size: 40px;
        }
        #section_main2 .p2{
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
        }
        .button-effects1 a{
            text-decoration: none;
            color: black;
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            font-size: 15px;
        }
        .button-effects1 a:hover{
            background-color: #ade8d3;
            border: 2px solid white;
            color: white;
        }
        .detail{
            font-family: 'Montserrat', sans-serif;
        }
        .footer{
            font-family: 'Montserrat', sans-serif;
            background-image: url('footer_pic.png');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 100%;
            padding: 30px;
            display: flex;
            justify-content: space-between;
        }
        .text_links{
            font-family: 'Montserrat', sans-serif;
            background-color: rgba(250,250,250,70%);
            width: fit-content;
            padding: 5px;
        }
        .useful-links a{
            font-family: 'Montserrat', sans-serif;
            color: #000;
            display: block;
            text-decoration: none;
        }
        .text_info{
            font-family: 'Montserrat', sans-serif;
            background-color: rgba(250,250,250,70%);
            width: 30%;
            padding: 5px;
            display: block;
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
            #section_1{
                flex-direction: column;

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
            #section_1{
                flex-direction: column;

            }
        }
    </style>
</head>



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
            <li><a href="login.php" class="login-button">LOG IN</a></li>
        </ul>
    </div>

        <div class="bg">
            <div class="load">
            </div>
            <div class="content">
            <div class="wrapper-text">

            </div>

            </div>


        </div>

    </div>


    <div class="container-fluid">
        <div id="main">

            <?php
            include("db_functions.php");

            $top_events = listTopEvents($con);
            foreach ($top_events as $event) {
                ?>

                <div class="col-md-4 text-center">
                    <br><br><br>
                    <h1 id="titles"><?php echo $event->event_name; ?></h1>
                    <br><br><br>
                    <div class="thumbnail">
                        <img src="./new_event_pictures/<?php echo "$event->image"; ?>" alt="event img" style="width:100%">
                        <div class="caption">
                            <p id="text"><?php echo $event->description; ?></p>
                            <br>
                            <div class="detail">
                                <h3>When and where</h3>
                                <h4>Date</h4>
                                <p><?php echo $event->date; ?></p>
                                <h4>Location</h4>
                                <p><?php echo $event->address . " " . $event->city . ", " . $event->state ?></p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div id="main1">

        <div id="section">
            <p class="p1">NOT REGISTERED YET?</p>
            <br><br>
            <p class="p2">A handful of features for event organizers</p>
            <hr>
        <div id="section_1">
            <div class="section-first">
            <h3>Email communication</h3>
                <p class="section-first-p">Send unlimited messages to attendees registered for your events and be sure,
                    that the messages will reach their destination. We ensure high email deliverability
                    by using mail servers with the highest reputation.</p>
            </div>

            <div class="section-second">
                <h3>Use full automation</h3>
                <p class="section-second-p">Save your time with fully automated processes of registration and payment.
                    Use advanced automation for sending payment reminders, auto cancelation messages, or links to your virtual events.</p>
            </div>
        </div>
    <br><br><br>
            <div id="section_1">
                <div class="section-first">
                    <h3>Event list widget</h3>
                    <p class="section-first-p">The widget displays the list of your active events. This feature is especially useful
                        for event organizers who have a rich offer of trainings or other recurrent events. The widget can display
                        all or selected events. No coding skills needed.</p>
                </div>

                <div class="section-second">
                    <h3>Event registration form widget</h3>
                    <p class="section-second-p">The widget displays a single event registration form with different types of tickets.
                        The widget can be placed anywhere on the event organizer website – on the main page, in a blog post,
                        or a modal window. No coding skills needed.</p>
                </div>
            </div>
            <br><br><br><br>
            <div class="button-effects">
               <a href="register.php">REGISTER</a>
            </div>
        </div>
    </div>

    <div class="container text-center" style="100vh">
        <br><br><br><br>
        <p class="p1" style="font-family: 'Permanent Marker', cursive; font-size: 40px;">SOFTWARE DESIGNED FOR YOUR NEEDS</p>
        <br><br>
        <p class="p2" style="font-family: 'Montserrat', sans-serif; font-size: 30px;">Who is our event registration software designed for?</p>
        <div class="col-md-1" id="znj">
            <p>Lorem ispum dolor sit amet consectetur adipiscing</p>
        </div>
        <div class="col-md-5 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="bussines.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>EVENT ORGANIZERS</h2>
                    <p id="text">Global is designed to handle any registration job, big or small. It is the perfect online event registration platform for handling training courses, workshops or seminars. Once your event is created it can be replicated and easily modified for any future events. Avoid redundant activities, use the experience of hundreds of training companies involved in developing the system.
                    </p>
                    <br><br>
                </div>
            </div>
        </div>

        <div class="col-md-5 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="conference.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>CONFERENCE ORGANIZERS</h2>
                    <p id="text">Need to organize a congress or conference? Let Konfeo do all the work for you. This is a breakthrough event management system: with a few simple clicks you can quickly and easily create and publish registration forms, manage groups of attendees or tickets, enable online payments or send e-tickets. Every step of organizing a conference is covered. See for yourself how easy it is.</p>
                    <br><br>
                </div>
            </div>
        </div>

    </div>

    <div id="container">
    <div id="main2">

        <div id="section_main2">
            <p class="p1">BECOME A QUEST</p>
            <br><br>
            <p class="p2">Choose the desired event and become our guest!</p>
            <hr>
            <div id="section_1">
                <div class="section-first">
                    <h3>Invitations</h3>
                    <p class="section-first-p">As our guest, you will receive invitations via email every time a new event is released.
                        In the invitations, you can choose whether you are coming, not coming or maybe coming.
                    </p>
                </div>

                <div class="section-second">
                    <h3>Comments</h3>
                    <p class="section-second-p">You can comment on any event you've been to or plan to go to and that way leave
                        your opinion to help us improve our software.
                        You have the right to leave only one comment for each individual event you attended.</p>
                </div>
            </div>
            <br><br><br>
            <div id="section_1">
                <div class="section-first">
                    <h3>Wish list</h3>
                    <p class="section-first-p" style="width: 550px;">Wishlist addon can
                        be used to create bookmarks, likes,
                        or simply as a wishlist of events.
                        This conveniently allows logged-in users to
                        remember events they are interested in.
                        Additionally, customize your events with
                        a different icons and words to meet your needs.</p>
                </div>

                <div class="section-second">
                    <h3>Registration</h3>
                    <p class="section-second-p">As a guest, you can also become our registered user.
                        All you need is to register for free and then you can organize your
                        own events and invite other people.</p>
                </div>
            </div>
            <br><br><br><br>
            <div class="button-effects1">
                <a href="login-invitee.php">CHECK YOUR INVITES</a>
            </div>
        </div>
    </div>
</div>


    <div class="container text-center" style="margin-top: 50px; margin-bottom: 100px;">
        <h1 id="titles">See the list of current events</h1>
        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="space.jpg" alt="space" style="width:100%">
                <div class="caption">
                    <h2>SPACE ADVENTURE EXHIBITION</h2>
                    <p id="text">Over  80 space exhibits (to include a piece of real moon!) make us travel in outer space without leaving our planet.
                        Several unique simulators will allow us to fly to the moon, feel absence of gravity or put our foot on the silver globe.
                    </p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>June 24, 15pm - June 27, 20pm</p>
                        <h4>Location</h4>
                        <p> 3504 Grand Avenue, Winter Park Florida</p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="alice.jpg" alt="alice" style="width:100%">
                <div class="caption">
                    <h2>CONCERT Alice in WonderBand</h2>
                    <p id="text">Alice in WonderBand
                        music and theater group passionate about body music and body percussion.
                        We perform world music from the Balkans.
                        Music album RikaTaka, New Balkan Rhythm is
                        No 7 in World Music Charts Europe December 2022 and
                        No 10 of Balkan World Music Chart.</p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>June 17, 18pm - June 17, 20pm</p>
                        <h4>Location</h4>
                        <p> 3311 Sycamore Road, White Mountain Alaska </p>
                        <br>
                        <a href="reservation.php">RESERVATION</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <br><br><br>
            <div class="thumbnail">
                <img src="street-food.jpg" alt="disney" style="width:100%">
                <div class="caption">
                    <h2>STREET FOOD FESTIVAL</h2>
                    <p id="text">Beograd će od 27. do 29. maja,
                        poput Njujorka, Tokija, Džakarte, Kopenhagena
                        ili Sidneja, postati pozornica svetskih kuhinja
                        na otvorenom, na kojoj će se predstaviti
                        kulinarski virtuozi beogradske craft food scene.
                        Tokom tri festivalska dana, na licu mesta pripremaće se sveži, zdravi i kvalitetni specijaliteti iz palete gotovo svih svetskih kuhinja, a posetioci će imati prilike da se otisnu na pravi mali gastroput oko sveta! </p>
                    <br>
                    <div class="detail">
                        <h3>When and where</h3>
                        <h4>Date and Time</h4>
                        <p>May 27 - June 29</p>
                        <h4>Location</h4>
                        <p> Belgrade, Serbia </p>
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


<script>
    //changing the background and text color of navbar by scrolling
    function changeHeader(){
        var navbar=document.getElementById('navbar');
        var scrollValue=window.scrollY;
        if(scrollValue < 150){
            navbar.classList.remove('headerColor');
        }else{
            navbar.classList.add('headerColor');
        }
    }
    window.addEventListener('scroll',changeHeader);

</script>
</body>
</html>
<?php

