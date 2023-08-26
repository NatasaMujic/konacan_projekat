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

        /* RESPONSIVE DESIGN */
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
                height: auto;
                background: darkblue;
                transition: 0.5s;
                overflow: hidden;
                left: 0;
                top: -100%;
                z-index: 9999;
            }
            .navigation.active {
                top: 0;
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
                height: auto;
                background: darkblue;
                transition: 0.5s;
                overflow: hidden;
                left: 0;
                top: -100%;
                z-index: 9999;
            }
            .navigation.active {
                top: 0;
            }
        }


    </style>
</head>
<body>
<?php
session_start();
include("db_config.php");

if (!isset($_SESSION['email'])) {
header('Location: login-invitee.php');
exit();
}

$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["attendance"])) {
    $email = $_SESSION['email'];
    $attendance = $_POST["attendance"];

    //update the attendance status in the invitation table
    $stmt = $pdo->prepare("UPDATE invitation SET attendance = :attendance WHERE email = :email");
    $stmt->execute(['attendance' => $attendance, 'email' => $email]);
}

//fetch invitations and related event names
$stmt = $pdo->prepare("SELECT i.id_invitation, e.event_name, i.comment, i.attendance FROM invitation i INNER JOIN new_event e ON i.id_event = e.id_event WHERE i.email = :email");
$stmt->execute(['email' => $_SESSION['email']]);
$invitations = $stmt->fetchAll();
?>
<div class="container-fluid">
    <div class="navigation">
        <ul>
            <li>
                <a href="#" class="link" data-target="content1">
                    <span class="title">GUEST</span>

                </a>
            </li>

            <li>
                <a href="#" class="link" data-target="content2">
                    <span class="title">Your invites</span>
                </a>
            </li>

            <li>
                <a href="#" class="link" data-target="content3">
                    <span class="title">Events</span>
                </a>
            </li>
            <li>
                <a href="#" class="link" data-target="content4">
                    <span class="title">Wish list</span>
                </a>
            </li>
        </ul>
    </div>

</div>
<div id="content1" class="content">
    <div class="yourEvents">

    </div>
</div>

<div id="content2" class="content">
    <div class="yourEvents">
        <h1>Welcome to your Invitee Dashboard</h1>
        <p>Your email: <?php echo $_SESSION['email']; ?></p>
        <div class="details">
            <div class="recentEvents">
                <table>
                    <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Comment</th>
                        <th>Attendance</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($invitations as $invitation): ?>
                        <tr>
                            <td><?php echo $invitation['event_name']; ?></td>
                            <td><?php echo $invitation['comment']; ?></td>
                            <td>
                                <?php if ($invitation['attendance']): ?>
                                    <?php echo $invitation['attendance']; ?>
                                <?php else: ?>
                                    <form method="post">
                                        <select name="attendance">
                                            <option value="coming">Coming</option>
                                            <option value="not coming">Not Coming</option>
                                            <option value="maybe coming">Maybe Coming</option>
                                        </select>
                                        <input type="submit" value="Submit">
                                    </form>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="content3" class="content">
    <div class="yourEvents">
    <h2>Leave only one comment for each event</h2>

        <div class="details">
            <div class="recentEvents">
                <table>
                    <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Comment</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include("db_config.php");

                    $pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


                    //fetch invitations and related event names
                    $stmt = $pdo->prepare("SELECT i.id_invitation, e.event_name, e.date, i.guest_comment, e.allow_comments FROM invitation i INNER JOIN new_event e ON i.id_event = e.id_event WHERE i.email = :email");
                    $stmt->execute(['email' => $_SESSION['email']]);
                    $invitations = $stmt->fetchAll();

                    foreach ($invitations as $invitation):
                        $event_name = $invitation['event_name'];
                        $comment = $invitation['guest_comment'];
                        $event_date = strtotime($invitation['date']);
                        $allow_comments=$invitation['allow_comments'];
                        $id_invitation = $invitation['id_invitation'];


                        //check if the event expired
                        if (time() > $event_date && $allow_comments == 1 && empty($comment)):
                            ?>
                            <tr>
                                <td><?php echo $event_name; ?></td>
                                <td>
                                    <form method="post">
                                        <!--hidden field (<input type="hidden">) into the form that will contain the id_invitation value to identify the invitation being commented on-->
                                        <input type="hidden" name="id_invitation" value="<?php echo $invitation['id_invitation']; ?>">
                                        <textarea name="comment" rows="3" cols="40"></textarea>
                                </td>
                                <td>
                                    <button type="submit" name="submitComment" class="btn btn-primary">Send</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        endif;
                    endforeach;
                    //enter the event comment into database
                    if (isset($_POST['submitComment'])) {
                        $invitation = $_POST['id_invitation'];
                        $comment = $_POST['comment'];
                        try {
                            $stmt = $pdo->prepare("UPDATE invitation SET guest_comment = :comment WHERE id_invitation = :id_invitation");
                            $stmt->execute(['comment' => $comment, 'id_invitation' => $invitation]);

                            // provide feedback to the user that their comment was submitted successfully
                            echo "<script> alert('Your comment has been submitted.'); </script>";
                        } catch (PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                    }

                    ?>
                    </tbody>
                </table>

            </div>
        </div>

</div>
</div>

<div id="content4" class="content">
    <div class="yourEvents">
        <h2>Your answers to the wish list</h2>
        <div class="details">
            <div class="recentEvents">
                <table>
                    <thead>
                    <?php

                    //fetch invitations and related event names
                    $stmt = $pdo->prepare("SELECT i.id_invitation, e.event_name, i.wish_list FROM invitation i INNER JOIN new_event e ON i.id_event = e.id_event WHERE i.email = :email");
                    $stmt->execute(['email' => $_SESSION['email']]);
                    $invitations = $stmt->fetchAll();

                    ?>
                    <tr>
                        <th>Event Name</th>
                        <th>Wish list</th>
                        <th>Your answer</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($invitations as $invitation): ?>
                        <tr>
                            <td><?php echo $invitation['event_name']; ?></td>
                            <td><?php echo $invitation['wish_list']; ?></td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="id_invitation" value="<?php echo $invitation['id_invitation']; ?>">
                                    <textarea name="answer" rows="3" cols="40"></textarea>

                            </td>
                            <td>

                                <button type="submit" name="submitAnswer" class="btn btn-primary">Send</button>
                            </form>
                            </td>
                        </tr>
                    <?php
                        //enter the wish list answer into database
                        if (isset($_POST['submitAnswer'])) {
                            $invitation = $_POST['id_invitation'];
                            $answer = $_POST['answer'];
                            try {
                                $stmt = $pdo->prepare("UPDATE invitation SET wish_list_answer = :answer WHERE id_invitation = :id_invitation");
                                $stmt->execute(['answer' => $answer, 'id_invitation' => $invitation]);

                                //provide feedback to the user that their answer was submitted successfully
                                echo "Your answer has been submitted.";
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                        }
                    endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
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
