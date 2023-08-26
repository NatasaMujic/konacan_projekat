<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<?php
include("db_config.php");
session_start();

$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['user_id']) && isset($_GET['id_event'])) {
        $id_event = $_GET['id_event'];

        //fetch event details using id_event
        $query = "SELECT * FROM new_event WHERE id_event = :id_event";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['id_event' => $id_event]);

        $event = $stmt->fetch(PDO::FETCH_ASSOC);

        //check if form fields are set
        if (isset($_POST['eventName'], $_POST['shortText'], $_POST['eventAddress'], $_POST['eventDate'], $_POST['eventCity'], $_POST['eventState'], $_POST['eventAllowComment'])) {
            $newEventName = $_POST['eventName'];
            $newShortText = $_POST['shortText'];
            $newEventAddress = $_POST['eventAddress'];
            $newEventDate = $_POST['eventDate'];
            $newEventCity = $_POST['eventCity'];
            $newEventState = $_POST['eventState'];
            $allowComments = $_POST['eventAllowComment'];

            //update event information
            $updateQuery = "UPDATE new_event SET event_name = :eventName, description = :shortText, address = :eventAddress, date = :eventDate, city = :eventCity, state = :eventState, allow_comments = :eventAllowComment WHERE id_event = :id_event";
            $stmt = $pdo->prepare($updateQuery);
            $stmt->execute([
                'eventName' => $newEventName,
                'shortText' => $newShortText,
                'eventAddress' => $newEventAddress,
                'eventDate' => $newEventDate,
                'eventCity' => $newEventCity,
                'eventState' => $newEventState,
                'eventAllowComment' => $allowComments,
                'id_event' => $id_event
            ]);

            echo "Event information updated successfully! <a href='admin-dashboard.php'>Back to your dashboard</a>";
        } else {
            echo "Missing form data.";
        }
    } else {
        echo "Missing session or parameter.";
    }
}
?>
<form class="form-contact" action="" method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>Update event information</h2>
        <div class="form-row">
            <label for="inputText">Event Name</label>
            <input type="text" class="form-control" id="eventName" name="eventName" placeholder="Event Name" value="<?php echo isset($event['event_name']) ? $event['event_name'] : ''; ?>">
        </div>
        <br>
        <div class="row">
            <div class="form-outline">
                <label for="inputDesc">Description</label>
                <textarea class="form-control" id="shortText" name="shortText" rows="4" placeholder="Less than 500 characters!"><?php echo isset($event['description']) ? $event['description'] : ''; ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="eventAddress" name="eventAddress" placeholder="1234 Main St" value="<?php echo isset($event['address']) ? $event['address'] : ''; ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control"  id="eventDate" name="eventDate" value="<?php echo isset($event['date']) ? $event['date'] : ''; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="eventCity" name="eventCity" value="<?php echo isset($event['city']) ? $event['city'] : ''; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <input type="text" class="form-control" id="eventState" name="eventState" value="<?php echo isset($event['state']) ? $event['state'] : ''; ?>">
            </div>
        </div>
        <div class="form-group  col-md-6">
            <label for="inputAllowComment">Allow comment</label>
            <input type="number" class="form-control"  id="eventAllowComment" name="eventAllowComment" value="<?php echo isset($event['allow_comments']) ? $event['allow_comments'] : ''; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
</body>
</html>
