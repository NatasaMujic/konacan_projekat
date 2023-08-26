<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Invitee dashboard</title>
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
        /*initially hiding all contents*/
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
        .updateBlock{
            background-color: darkblue;
            color:white;
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
                    <span class="title">ADMIN DASHBOARD</span>

                </a>
            </li>

            <li>
                <a href="#" class="link" data-target="content2">
                    <span class="title">Events</span>
                </a>
            </li>

            <li>
                <a href="#" class="link" data-target="content3">
                    <span class="title">Event control</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" data-target="content4">
                    <span class="title">Registered users</span>
                </a>
            </li>

        </ul>
    </div>

</div>
<div id="content1" class="content">

    <?php
  session_start();
    //php for creating admin
    include("db_config.php");

    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (isset($_SESSION['f_name']) && isset($_SESSION['id'])) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // checking if all necessary data are entered
            if (isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
                $firstName = $_POST["first_name"];
                $lastName = $_POST["last_name"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                if (empty($firstName) || empty($lastName) || empty($email) || empty($password)) {
                    echo "All fields required!";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "Email is not valid!";
                } else {
                    // Check if user already exists in the database
                    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = :email");
                    $stmt->execute(['email' => $email]);
                    $existingUser = $stmt->fetch();

                    if ($existingUser) {
                        echo "User with this email already exists!";
                    } else {
                        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                        // adding activation code
                        $activationCode = md5(uniqid(rand(), true));

                        // enter user data together with activation code
                        $stmt = $pdo->prepare("INSERT INTO admin (f_name, l_name, username, password) VALUES (:firstName, :lastName, :email, :hashedPassword)");
                        $stmt->execute([
                            'firstName' => $firstName,
                            'lastName' => $lastName,
                            'email' => $email,
                            'hashedPassword' => $hashedPassword
                        ]);


                        $adminId = $pdo->lastInsertId();
                        $_SESSION['f_name'] = $firstName;
                        $_SESSION['id'] = $adminId;

                        // showing data on registration dashboard
                        echo "<div style='display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;'>";
                        echo "<h1 style='text-align: center;'>Welcome " . $firstName . "</h1>";
                        echo "<div style='text-align: center;'>";
                        echo "<p>Your data:</p>";
                        echo "<p>Name: " . $firstName . " <br>Last Name: " . $lastName . "  <br>Email: " . $email . "<br>Password: " . $password . "</p>";
                        echo "</div>";
                    }
                }
            } else {
                echo "Some data is not correct!";
            }
        }
    }else {
        echo "You don't have permission to access this page.";
    }
    ?>
</div>

<div id="content2" class="content">
    <div class="yourEvents">

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (isset($_SESSION['f_name'])) {
        echo "Welcome " . $_SESSION['f_name'] . " again!";
    } else {
      echo "Login failed";
    }
    ?>


    <?php
     //show all registered user's events
    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql code for taking necessary columns from new_event table
    $query = "SELECT id_event, event_name, description, date, address, city, state, allow_comments, user_id FROM new_event";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    // fetching all results into an array
    $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // showing data into table
    echo '<h2>List of events</h2>';
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
        echo '<tr>';
        echo '<td>' . $event['event_name'] . '</td>';
        echo '<td>' . $event['description'] . '</td>';
        echo '<td>' . $event['date'] . '</td>';
        echo '<td>' . $event['address'] . ', ' . $event['city'] . ', ' . $event['state'] . '</td>';
        echo '<td>' . $event['allow_comments'] . '</td>';
        echo '<td><a href="admin-update-event.php?id_event=' . $event['id_event'] . '" class="updateLink">Update</a></td>';
        echo '<td><a href="admin-delete-event.php?id_event=' .  $event['id_event'] .' " class="deleteLink">Delete</a></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
    echo '</div>';
    echo '<br><br>';
    ?>

        <form class="form-contact" action="admin-send-email.php" method="post" enctype="multipart/form-data">
            <h2>Notification of event deletion</h2>

            <div class="form-group">
                <input type="text" class="form-control" name="fname" placeholder="User Name"> <br>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="r_email" placeholder="User Email"> <br>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="r_message" placeholder="Message"> <br>
            </div>

            <input type="submit" class="btn btn-info" value="Submit">
        </form>
        <br><br><br>
    </div>
</div>
    <div id="content3" class="content">
        <div class="yourEvents">
            <?php

            //show all registered user's events
            $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // sql code for taking necessary columns from registered_user table
            $query2 = "SELECT e.id_event, e.event_name, r.first_name, r.email, e.address, e.date, e.blocked
                       FROM new_event AS e
                       JOIN invitation AS i ON e.id_event = i.id_event
                       JOIN registered_user AS r ON e.user_id = r.user_id";
            $stmt = $pdo->prepare($query2);
            $stmt->execute();

            // fetching all results into an array
            $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // showing data into table
            echo '<form method="POST" action="admin-block-unblock.php">';
            echo '<h2>Event Control</h2>';
            echo '<div class="details">';
            echo '<div class="recentEvents">';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<td>Event id</td>';
            echo '<td>Event name</td>';
            echo '<td>User name</td>';
            echo '<td>User email</td>';
            echo '<td>Event Location</td>';
            echo '<td>Event Date</td>';
            echo '<td>Block/unblock</td>';


            echo '</tr>';
            echo '</thead>';

            echo '<tbody>';
            foreach ($events as $event) {
                echo '<tr>';
                echo '<td>' . $event['id_event'] . '</td>';
                echo '<td>' . $event['event_name'] . '</td>';
                echo '<td>' . $event['first_name'] . '</td>';
                echo '<td>' . $event['email'].'</td>';
                echo '<td>' . $event['address'] . '</td>';
                echo '<td>' . $event['date'] . '</td>';
                echo '<td>' . '<input type="number" min="0" max="1" name="blocked[' . $event['id_event'] . ']" value="' . $event['blocked'] . '">' .'<input type="submit" value="Submit" class="updateBlock">'. '</td>';

                echo '</tr>';
            }
            echo '</tbody>';
            echo '</table>';

            echo '</div>';
            echo '</div>';
            echo '</form>';
            ?>
        </div>
    </div>

    <div id="content4" class="content">
        <div class="yourEvents">
  <?php

  //show all registered user's
  $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql code for taking necessary columns from registered_user table
  $query1 = "SELECT user_id, first_name, last_name, organization_name, email, block_user FROM registered_user";
  $stmt = $pdo->prepare($query1);
  $stmt->execute();

  // fetching all results into an array
  $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // showing data into table
  echo '<form method="POST" action="admin-block-user.php">';
  echo '<h2>List of registered users</h2>';
  echo '<div class="details">';
  echo '<div class="recentEvents">';
  echo '<table>';
  echo '<thead>';
  echo '<tr>';
  echo '<td>User id</td>';
  echo '<td>First name</td>';
  echo '<td>Last name</td>';
  echo '<td>Org. name</td>';
  echo '<td>Email</td>';
  echo '<td>Block/unblock user</td>';

  echo '</tr>';
  echo '</thead>';

  echo '<tbody>';
  foreach ($events as $event) {
      echo '<tr>';
      echo '<td>' . $event['user_id'] . '</td>';
      echo '<td>' . $event['first_name'] . '</td>';
      echo '<td>' . $event['last_name'] . '</td>';
      echo '<td>' . $event['organization_name'].'</td>';
      echo '<td>' . $event['email'] . '</td>';
      echo '<td>' . '<input type="number" min="0" max="1" name="block_user[' . $event['user_id'] . ']" value="' . $event['block_user'] . '">' .'<input type="submit" value="Submit" class="updateBlock">'. '</td>';

      echo '</tr>';
  }
  echo '</tbody>';
  echo '</table>';
  echo '</div>';
  echo '</div>';
  echo '</form>';
  ?>
            <br><br><br>
            <a href='logout.php' style='text-decoration: none; background-color: #f8c870; padding: 10px; color: #000; border-radius: 5px;'>Logout</a>
            <br><br><br>
        </div>


    </div>

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





