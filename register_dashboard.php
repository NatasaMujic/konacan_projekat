<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Register dashboard</title>
    <style>
        *{
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
      body{
          min-height: 100vh;
          overflow-x: hidden;
      }
        .content {
            display: none;
        }

      .yourEvents{
          position: relative;
          width: 70%;
          float:right;
          margin-top: 40px;
          margin-right: 40px;
      }


        .container-fluid {
            padding-right: 0;
            padding-left: 0;
        }

             .recentEvents{
                 display: grid;
                 grid-gap: 30px;
                 margin-top: 10px;
                 min-height: 500px;
                 padding: 20px;
                 box-shadow: 0 7px 25px rgba(0,0,0,0.8);
                 border-radius: 20px;

             }
             .recentEvents table thead{
                 font-size: 20px;
                 font-weight: 600;
             }
             .recentEvents table tr{
                 border-bottom: 1px solid rgba(0,0,0,0.1);
             }

        <!-- RESPONSIVE DESIGN FOR NAVIGATION BAR-->
        @media (max-width: 991px) {
            .yourEvents table {
                width: 100%;
            }
            .yourEvents th,
            .yourEvents td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }

            .navigation {
                position: fixed;
                width: 100%;
                height: auto;
                background: darkblue;
                transition: 0.5s;
                overflow: hidden;
                left: 0;
                top: 0;
            }
            .navigation.active {
                height: 100%;
            }
            .navigation ul li {
                display: none;
            }
            .navigation.active ul li {
                display: block;
            }
        }

        @media (max-width: 768px) {
                .yourEvents table {
                    width: 100%;
                }
                .yourEvents th,
                .yourEvents td {
                    display: block;
                    width: 100%;
                    box-sizing: border-box;
                }

            .navigation {
                position: fixed;
                width: 100%;
                height: 100%;
                background: darkblue;
                transition: 0.5s;
                overflow: hidden;
                left: 0;
                top: -100%;
            }
            .navigation.active {
                top: 0;
            }
            .navigation.active ul li {
                display: block;
            }
        }

        @media (max-width: 480px) {
                .yourEvents table {
                    width: 100%;
                }
                .yourEvents th,
                .yourEvents td {
                    display: block;
                    width: 100%;
                    box-sizing: border-box;
                }

            .navigation {
                position: fixed;
                width: 100%;
                height: 100%;
                background: darkblue;
                transition: 0.5s;
                overflow: hidden;
                left: 0;
                top: -100%;
            }
            .navigation.active {
                top: 0;
            }
            .navigation.active ul li {
                display: block;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="navigation">
        <ul>
            <li>
                <a href="#" class="link" data-target="content1">
                    <span class="title">REGISTERED USER</span>
                </a>
            </li>

            <li>
                <a href="#" class="link" data-target="content2">
                    <span class="title">Your events</span>
                </a>
            </li>

            <li>
                <a href="#" class="link" data-target="content3">
                    <span class="title">Invitations</span>
                </a>
            </li>

            <li>
                <a href="#" class="link" data-target="content4">
                    <span class="title">Event archive</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" data-target="content456">
                    <span class="title">Wish list</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" data-target="content4567">
                    <span class="title">Event reminder</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" data-target="content5">
                    <span class="title">Settings</span>
                </a>
            </li>

        </ul>
    </div>

</div>


    <div id="content2" class="content">
        <div class="yourEvents">
        <?php
        if (isset($_SESSION['firstName'])) {
            $username = $_SESSION['firstName'];
            echo "Welcome $username again!";
        } else {
            // redirection on the login page if the user is not logged
           // header("Location: register_dashboard.php");
            //exit();
        }
        ?>

        <h2>Create your event</h2>
        <br>
        <form class="forma" method="post" action=""  enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputText">Event Name</label>
                    <input type="text" class="form-control" id="eventName" name="eventName" placeholder="Event Name">
                </div>
                <div class="form-group col-md-6">
                <label class="form-label" for="customFile">Choose image for your event</label>
                <input type="file" class="form-control"  id="image" name="image" />
                </div>
            </div>
            <div form="row">
                <div class="form-outline">
                    <label class="form-label" for="textAreaExample2">Short Event Description</label>
                    <textarea class="form-control" id="shortText" name="shortText" rows="4" placeholder="Less than 500 characters!"></textarea>
                </div>
            </div>
            <div form="row">
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="eventAddress" name="eventAddress" placeholder="1234 Main St">
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="eventCity" name="eventCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" id="eventState" name="eventState">

                </div>
                <div class="form-group col-md-2">
                    <label for="inputDate">Date</label>
                    <input type="date" class="form-control"  id="eventDate" name="eventDate">
                </div>

            </div>
            <div class="form-row">
            <div class="form-group  col-md-6">
                <label for="inputAllowComment">Allow comment (1-allowed, 0-not allowed)</label>
                <input type="number" class="form-control"  id="eventAllowComment" name="eventAllowComment">
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        <br><br>
            <?php
            //show the list with registration user's events
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                // creating PDO object
                $host = 'localhost';
                $db_name = 'event';
                $username = 'root';
                $password = '';

                $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // sql code for taking necessary columns from new_event table
                $query = "SELECT id_event, event_name, description, date, address, city, state, allow_comments, blocked FROM new_event WHERE user_id = :user_id";
                $stmt = $pdo->prepare($query);
                $stmt->execute(['user_id' => $user_id]);

                // fetching all results into an array
                $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // showing data into table
                echo '<h2>List of your events</h2>';
                echo '<div class="details">';
                echo '<div class="recentEvents">';
                echo '<table>';
                echo '<thead>';
                echo '<tr>';
                echo '<td>Event Name</td>';
                echo '<td>Description</td>';
                echo '<td>Date and Time</td>';
                echo '<td>Location</td>';
                echo '<td>Allow comments</td>';
                echo '<td>Options</td>';
                echo '</tr>';
                echo '</thead>';

                echo '<tbody>';
                foreach ($events as $event) {
                    //if event is not blocked by admin
                        if ($event['blocked'] == 0) {
                            echo '<tr>';
                            echo '<td>' . $event['event_name'] . '</td>';
                            echo '<td>' . $event['description'] . '</td>';
                            echo '<td>' . $event['date'] . '</td>';
                            echo '<td>' . $event['address'] . ', ' . $event['city'] . ', ' . $event['state'] . '</td>';
                            echo '<td>' . $event['allow_comments'] . '</td>';
                            echo '<td><a href="update-event.php?id_event=' . $event['id_event'] . '" class="updateLink">Update</a></td>';
                            echo '<td><a href="delete-event.php?id_event=' . $event['id_event'] . ' " class="deleteLink">Delete</a></td>';
                            echo '</tr>';
                        }
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
                echo '</div>';
            } else {
                header('Location: login.php');
                exit();
            }
            ?>

</div>
    </div>

    <div id="content3" class="content">
        <div class="yourEvents">
            <form class="form-contact" action="send-invitation.php" method="post" enctype="multipart/form-data">
                <h2>Create invitations for your guests</h2>

                <!-- Select list for user's events -->
                <div class="form-group">
                    <label for="event">Select Event:</label>
                    <select class="form-control" name="selectedEvent" id="selectedEvent">
                        <?php
                        include("db_config.php");

                        //check the date of event
                        if (isset($_SESSION['user_id'])) {
                            $user_id = $_SESSION['user_id'];

                            //create PDO object
                            $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            //fetch events of the logged-in user
                            $query = "SELECT id_event, event_name, date, blocked FROM new_event WHERE user_id = :user_id";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute(['user_id' => $user_id]);

                            //show event expiration message and event options
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                $event_name = $row['event_name'];
                                $event_date = strtotime($row['date']);

                                //check if the event has expired
                                if (time() > $event_date) {
                                    echo '<p>' . $event_name . ' has expired, notify invitees to leave only one comment.</p>';
                                }

                                //showing options for events
                                if ($row['blocked'] == 0) {
                                    echo '<option value="' . $row['id_event'] . '">' . $row['event_name'] . '</option>';
                                }
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Guest Name"> <br>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lname" placeholder="Last Name"> <br>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Guest Email"> <br>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="message" placeholder="Message"> <br>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="wishlist" placeholder="Wishlist"></textarea> <br>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="file"> <br>
                </div>

                <input type="submit" class="btn btn-info" value="Submit">
            </form>
            <?php
            //list with invited guests on events

            include("db_config.php");


            $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // we're checking if the user is logged in
            if (isset($_SESSION['user_id'])) {
                $user_id = $_SESSION['user_id'];

                //download all user invitations from database for their events
                $query = "SELECT e.id_event, e.event_name, i.first_name, i.email, i.attendance, e.blocked FROM new_event AS e
              JOIN invitation AS i ON e.id_event = i.id_event
              WHERE e.user_id = :user_id";

                $stmt = $pdo->prepare($query);
                $stmt->execute(['user_id' => $user_id]);

                // show the data in the table
                echo '<br><br><br>';
                echo '<h2>List of Invitations</h2>';
                echo '<div class="details">';
                echo '<div class="recentEvents">';
                echo '<table>';
                echo '<thead>';
                echo '<tr>';
                echo '<td>Event Name</td>';
                echo '<td>Invitee Name</td>';
                echo '<td>Invitee Email</td>';
                echo '<td>Attendance</td>';
                echo '<td></td>';
                echo '<td>Modification</td>';
                echo '</tr>';
                echo '</thead>';

                echo '<tbody>';
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        if ($row['blocked'] == 0) {

                            echo '<tr>';
                            echo '<td>' . $row['event_name'] . '</td>';
                            echo '<td>' . $row['first_name'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['attendance'] . '</td>';
                            echo '<td>' . '</td>';
                            //sending id and email info from table to page: update-guest-info.php
                            echo '<td><a href="update-guest-info.php?id_event=' . $row['id_event'] . '&email=' . $row['email'] . '" class="updateLink">Update</a>' . '<a href="delete-guest.php?id_event=' . $row['id_event'] . '&email=' . $row['email'] . '" class="deleteLink">Delete</a>' . '</td>';
                            echo '</tr>';
                        }
                }
                echo '</tbody>';
                echo '</table>';
                echo '</div>';
                echo '</div>';
            } else {
                echo 'User is not logged in.';
            }
            ?>


                    <script>
                        //add an event listener to the select element
                        document.getElementById('event').addEventListener('change', function() {
                            // Get the selected value
                            var selectedValue = this.value;
                            //set the selected value to the hidden input field
                            document.getElementById('selectedEvent').value = selectedValue;
                        });
                    </script>
                </form>
            <script>
                // add an event listener to the select element
                document.getElementById('event').addEventListener('change', function() {
                    // Get the selected value
                    var selectedValue = this.value;
                    // set the selected value to the hidden input field
                    document.getElementById('selectedEvent').value = selectedValue;
                });
            </script>
        </div>

    </div>
<div id="content4" class="content">
    <div class="yourEvents">
    <?php
    //a list with an archive of events that also shows the comments of the guests
include("db_config.php");


$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// we're checking if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    //download all user invitations from database for their events
    $query1 = "SELECT e.id_event, e.event_name, i.first_name, i.email, i.guest_comment, e.blocked FROM new_event AS e
              JOIN invitation AS i ON e.id_event = i.id_event
              WHERE e.user_id = :user_id";

    $stmt = $pdo->prepare($query1);
    $stmt->execute(['user_id' => $user_id]);

    // show the data in the table
    echo '<h2>Archive of events</h2>';
    echo '<div class="details">';
    echo '<div class="recentEvents">';
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<td>Event Name</td>';
    echo '<td>Guest Name</td>';
    echo '<td>Guest Email</td>';
    echo '<td>Guest comment</td>';
    echo '</tr>';
    echo '</thead>';

    echo '<tbody>';
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if ($row['blocked'] == 0) {

            echo '<tr>';
            echo '<td>' . $row['event_name'] . '</td>';
            echo '<td>' . $row['first_name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['guest_comment'] . '</td>';
            echo '<td>' . '</td>';
            echo '</tr>';
        }
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
}else{
    echo 'User is not logged in.';
}
    ?>
    </div>
</div>

<div id="content456" class="content">
    <div class="yourEvents">

    <?php
    //a list of responses to the wish list
    include("db_config.php");


    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //download all wish lists answers from database
        $query2 = "SELECT e.id_event, e.event_name, i.first_name,i.wish_list,  i.wish_list_answer, e.blocked FROM new_event AS e
              JOIN invitation AS i ON e.id_event = i.id_event
              WHERE e.user_id = :user_id";

        $stmt = $pdo->prepare($query2);
        $stmt->execute(['user_id' => $user_id]);

        // show the data in the table
        echo '<h2>A list of responses to the wish lists</h2>';
        echo '<div class="details">';
        echo '<div class="recentEvents">';
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<td>Event Name</td>';
        echo '<td>Guest Name</td>';
        echo '<td>Wish list</td>';
        echo '<td>Guest answer</td>';
        echo '</tr>';
        echo '</thead>';

        echo '<tbody>';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($row['blocked'] == 0) {
                echo '<tr>';
                echo '<td>' . $row['event_name'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
                echo '<td>' . $row['wish_list'] . '</td>';
                echo '<td>' . $row['wish_list_answer'] . '</td>';
                echo '<td>' . '</td>';
                echo '</tr>';
            }
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        echo '</div>';

    ?>
    </div>
</div>

<div id="content4567" class="content">
    <div class="yourEvents">

        <?php
        //list with invited guests on events

        include("db_config.php");

        $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // we're checking if the user is logged in
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            //download upcoming events that will happen in the next 3 days
            $query = "SELECT e.id_event, e.event_name, i.first_name, i.email, e.date, e.blocked
              FROM new_event AS e
              JOIN invitation AS i ON e.id_event = i.id_event
              WHERE e.user_id = :user_id
              AND e.date <= DATE_ADD(CURDATE(), INTERVAL 3 DAY)
              ORDER BY e.date ASC";

            $stmt = $pdo->prepare($query);
            $stmt->execute(['user_id' => $user_id]);

            // show the data in the table
            echo '<h2>List of upcoming events</h2>';
            echo '<div class="details">';
            echo '<div class="recentEvents">';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<td>Event Name</td>';
            echo '<td>Invitee Name</td>';
            echo '<td>Invitee Email</td>';
            echo '<td>Date</td>';
            echo '</tr>';
            echo '</thead>';

            echo '<tbody>';
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $eventDate = new DateTime($row['date']);
                $currentDate = new DateTime();

                echo '<tr>';

                //if the event is within 3 days, make the text red
                    if ($row['blocked'] == 0) {

                        if ($eventDate <= $currentDate->modify('+3 days')) {
                            echo '<td style="color: red;">' . $row['event_name'] . '</td>';
                            echo '<td style="color: red;">' . $row['first_name'] . '</td>';
                            echo '<td style="color: red;">' . $row['email'] . '</td>';
                            echo '<td style="color: red;">' . $row['date'] . '</td>';
                        } else {
                            echo '<td>' . $row['event_name'] . '</td>';
                            echo '<td>' . $row['first_name'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['date'] . '</td>';
                        }
                    }
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            echo '</div>';
        } else {
            echo 'User is not logged in.';
        }
        ?>

        <br><br><br>
        <form class="form-contact" action="send-reminder-email.php" method="post" enctype="multipart/form-data">
            <h2>Create event reminder for an invitee</h2>

            <div class="form-group">
                <input type="text" class="form-control" name="eventName" placeholder="Event Name"> <br>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="guestName" placeholder="Guest Name"> <br>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="guestEmail" placeholder="Guest Email"> <br>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="message" placeholder="Message"> <br>
            </div>

            <input type="submit" class="btn btn-info" value="Submit">
        </form>
        <br><br>
    </div>
</div>

<div id="content5" class="content">
    <div class="yourEvents">
        <h2>Update your account data</h2>
        <form class="form-signup text-center" id="registerForm" method="post" action="register_dashboard.php">

            <input type="text" class="form-control" id="firstname1" name="firstname1" placeholder="First Name">
            <br>
            <input type="text" class="form-control" id="lastname1" name="lastname1" placeholder="Last Name">
            <br>
            <input type="text" class="form-control" id="orgname1" name="orgname1" placeholder="Organization name (not necessary)">
            <br>
            <input type="email" class="form-control" id="email1" name="email1" placeholder="Email Address">
            <br>
            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
            <br>
            <input type="password" class="form-control" id="password21" name="confirm_password1" placeholder="Confirm password">
            <br>
            <button type="submit" style='text-decoration: none; background-color: #389aab; padding: 10px; color: #fff; border-radius: 5px; border: 0;'>Update</button>
        </form>
        <?php
        //php for update registered user's account information
        include("db_config.php");

        $host = 'localhost';
        $db_name = 'event';
        $username = 'root';
        $password = '';

        $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        include("db_config.php");

        if (isset($_POST["firstname1"]) && isset($_POST["lastname1"]) && isset($_POST["email1"]) && isset($_POST["password1"]) && isset($_POST["confirm_password1"])) {
            $firstName = $_POST["firstname1"];
            $lastName = $_POST["lastname1"];
            $orgName = $_POST["orgname1"];
            $email = $_POST["email1"];
            $password = $_POST["password1"];
            $confirmPassword = $_POST["confirm_password1"];

            if (empty($firstName) || empty($lastName) || empty($email)) {
                echo "All fields required!";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email is not valid!";
            } elseif ($password !== $confirmPassword) {
                echo "Passwords do not match!";
            } else {
                // update user data
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                $stmt = $pdo->prepare("UPDATE registered_user SET first_name = :firstName, last_name = :lastName, organization_name = :orgName, email = :email, password = :hashedPassword WHERE first_name = :username");
                $stmt->execute([
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'orgName' => $orgName,
                    'email' => $email,
                    'hashedPassword' => $hashedPassword,
                    'username' => $_SESSION["firstName"]
                ]);

                echo "<script> alert('Data are successfully updated!'); </script>";
            }
        }
        ?>
        <br><br>
        <a href='logout.php' style='text-decoration: none; background-color: #f8c870; padding: 10px; color: #000; border-radius: 5px;'>Logout</a>
    </div>
</div>

</div>
<div id="content1" class="content">
    <h1>Welcome registered user!</h1>

<?php
//php for creating registered user
include("db_config.php");

$host = 'localhost';
$db_name = 'event';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // checking if all necessary data are entered
    if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])) {
        $firstName = $_POST["firstname"];
        $lastName = $_POST["lastname"];
        $orgName = $_POST["orgname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];

        if (empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)) {
            echo "All fields required!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email is not valid!";
        } elseif ($password !== $confirmPassword) {
            echo "Passwords do not match!";
        } else {
            // Check if user already exists in the database
            $stmt = $pdo->prepare("SELECT * FROM registered_user WHERE email = :email");
            $stmt->execute(['email' => $email]);
            $existingUser = $stmt->fetch();

            if ($existingUser) {
                echo "User with this email already exists!";
            } else {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                // adding activation code
                $activationCode = md5(uniqid(rand(), true));

                // enter user data together with activation code
                $stmt = $pdo->prepare("INSERT INTO registered_user (first_name, last_name, organization_name, email, password, activation_code) VALUES (:firstName, :lastName, :orgName, :email, :hashedPassword, :activationCode)");
                $stmt->execute([
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'orgName' => $orgName,
                    'email' => $email,
                    'hashedPassword' => $hashedPassword,
                    'activationCode' => $activationCode,
                ]);

                // sending activation email
                include("send-activation-email.php");

                // get ID of registered user for making events
                $registeredUserId = $pdo->lastInsertId();
                $_SESSION['firstname'] = $firstName;
                $_SESSION['user_id'] = $registeredUserId;

                // showing data on registration dashboard
                echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;'>";
                echo "<h1 style='text-align: center;'>Welcome " . $firstName . "</h1>";
                echo "<div style='text-align: center;'>";
                echo "<p>Your data:</p>";
                echo "<p>Name: " . $firstName . " <br>Last Name: " . $lastName . "<br>Organization Name: " . $orgName . "<br>Email: " . $email . "<br>Password: " . $password . "</p>";
                echo "</div>";
            }
        }
    } else {
        echo "Some data is not correct!";
    }
}
?>
</div>
<?php
//php for creating events and entry data into database

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["eventName"]) && isset($_FILES["image"]) && isset($_POST["shortText"]) && isset($_POST["eventAddress"]) && isset($_POST["eventCity"]) && isset($_POST["eventState"]) && isset($_POST["eventDate"]) && isset($_POST["eventAllowComment"])) {

        $eventName = $_POST["eventName"];
        $image = $_FILES["image"]["name"];
        $image_tmp = $_FILES["image"]["tmp_name"];
        $shortText = $_POST["shortText"];
        $eventAddress = $_POST["eventAddress"];
        $eventCity = $_POST["eventCity"];
        $eventState = $_POST["eventState"];
        $eventDate = $_POST["eventDate"];
        $eventAllowComment = $_POST["eventAllowComment"];

        if (empty($eventName) || empty($image) || empty($shortText) || empty($eventAddress) || empty($eventCity) || empty($eventState)) {
            echo "All fields required!";
        } else {

            // creating PDO object
            $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                move_uploaded_file($image_tmp, "C:/wamp64/www/web_programming_project/new_event_pictures/" . $image);
            } else {
                echo "Image upload failed.";
            }

            // check if the user is logged in
            if (!isset($_SESSION['user_id'])) {
                echo "User ID not found in session.";
            } else {
                $registeredUserId = $_SESSION['user_id'];

                $stmt = $pdo->prepare("INSERT INTO new_event (event_name, image, description, address, city, state, date, allow_comments, user_id) VALUES (:eventName, :image, :shortText, :eventAddress, :eventCity, :eventState, :eventDate, :eventAllowComment, :user_id)");

                $stmt->execute([
                    'eventName' => $eventName,
                    'image' => $image_tmp,
                    'shortText' => $shortText,
                    'eventAddress' => $eventAddress,
                    'eventCity' => $eventCity,
                    'eventState' => $eventState,
                    'eventDate' => $eventDate,
                    'eventAllowComment' => $eventAllowComment,
                    'user_id' => $registeredUserId
                ]);


                echo "Event successfully created!";
            }
        }
    } else {
        echo "Some data is not correct!";
    }
} else {
    echo "Invalid request method!";
}
?>
<!--JavaScript for dashboard links-->
<script>

  var links = document.getElementsByClassName('link');
  for (var i = 0; i < links.length; i++) {
  links[i].addEventListener('click', function(event) {
  event.preventDefault();

  var target = this.getAttribute('data-target');
  var contents = document.getElementsByClassName('content');


  for (var j = 0; j < contents.length; j++) {
    contents[j].style.display = 'none';
  }

  document.getElementById(target).style.display = 'block';
  });
}


</script>
</body>
</html>
<?php
