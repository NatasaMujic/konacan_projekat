<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'event';
try {
    $con = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}



function getGuestsByAttendance($attendance, $con): void
{
    $sql = "SELECT attendance, first_name, last_name, email FROM invitation WHERE attendance=:attendance";
    $query = $con->prepare($sql);
    $query->bindParam(':attendance', $attendance, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        foreach ($results as $result) {
            echo "<style> li{ display:inline-block; padding:10px }</style>";
            echo "<div><ul>";
            echo "<li>" . $result->first_name . "</li>";
            echo "<li>" . $result->last_name . "</li>";
            echo "<li>" . $result->email . "</li>";
            echo "</ul></div>";
        }
    }
}
?>

<h1>Confirmed guests: </h1>
<?php getGuestsByAttendance("confirmed",$con); ?>
<h1>Unconfirmed guests: </h1>
<?php getGuestsByAttendance("unconfirmed",$con); ?>
<h1>Denied guests: </h1>
<?php getGuestsByAttendance("denied",$con); ?>
<hr>


<?php
function changeCommentStatus($event_id, $status, $con): void
{
    $sql = "UPDATE new_event SET allow_comments=:status WHERE id_event=:id;";
    $query = $con->prepare($sql);
    $query->bindParam(':id', $event_id, PDO::PARAM_INT);
    $query->bindParam(':status', $status, PDO::PARAM_INT);
    $query->execute();
}

function listAllComments($event_id, $con): void
{
    $sql = "SELECT first_name, last_name, comment FROM invitation WHERE id_event=:id AND comment IS NOT NULL;";
    $query = $con->prepare($sql);
    $query->bindParam(':id', $event_id, PDO::PARAM_INT);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        foreach ($results as $result) {
            echo "<div>";
            echo "<b>" . $result->first_name;
            echo " " . $result->last_name . "</b>";
            echo "</div>";
            echo "<p>" . $result->comment . "</p>";
        }
    }
}
?>

<h1>Comments: </h1>
<?php listAllComments(1,$con); ?>
<hr>

<?php
function addInvitation($event_id, $fname, $lname, $email, $con): void
{
    $sql = "INSERT INTO invitation (`first_name`,`last_name`,`email`,`id_event`) VALUES (:fname,:lname,:email,:id);";
    $query = $con->prepare($sql);
    $query->bindParam(':id', $event_id, PDO::PARAM_INT);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':lname', $lname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
}

function deleteInvitation($invitation_id, $con): void
{
    $sql = "DELETE FROM invitation WHERE id_invitation=:id;";
    $query = $con->prepare($sql);
    $query->bindParam(':id', $invitation_id, PDO::PARAM_INT);
    $query->execute();
}

function updateInvitation($invitation_id, $fname, $lname, $email, $con): void
{
    $sql = "UPDATE invitation SET first_name=:fname, last_name=:lname, email=:email WHERE id_invitation=:id;";
    $query = $con->prepare($sql);
    $query->bindParam(':id', $invitation_id, PDO::PARAM_INT);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':lname', $lname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
}










#admin

    function listAllEvents($con): void
    {
        $sql = "SELECT ne.event_name, ne.image, ne.description, u.organization_name, ne.address, ne.city, ne.state, ne.date, ne.allow_comments, ne.blocked FROM new_event ne INNER JOIN registered_user u ON u.id = ne.user_id;";
        $query = $con->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
                echo "<style> li{ display:inline-block; padding:10px }</style>";
                echo "<div>";
                echo "<h1>" . $result->event_name . "</h1>";
                echo "<div><ul>";
                echo "<li>" . $result->image . "</li>";
                echo "<li>" . $result->description . "</li>";
                echo "<li>" . $result->organization_name . "</li>";
                echo "<li>" . $result->address . "</li>";
                echo "<li>" . $result->city . "</li>";
                echo "<li>" . $result->state . "</li>";
                echo "<li>" . $result->date . "</li>";
                if($result->allow_comments===1)
                    echo "<li>comments enabled</li>";
                else echo "<li>comments disabled</li>";
                if($result->blocked===1)
                    echo "<li>blocked</li>";
                echo "</ul></div>";
                echo "</div>";
            }
        }
    }

