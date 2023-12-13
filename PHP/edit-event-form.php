<?php
$eventId = $_GET["eventId"];

$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";


$pdo = new PDO($dsn, $dbusername, $dbpassword);


    $stmt = $pdo->prepare("SELECT * FROM `events` WHERE `events`.`eventId` = $eventId;");


$stmt->execute();

$row = $stmt->fetch();

?>


<form class="offers" action="../update-events.php" method="POST">

<div class="offers1">
        <input type="hidden" name="eventId" value="<?= $row["eventId"] ?>">
        <label for="">Location</label>
        <input name="location" type="text" value="<?= $row["location"] ?>">
        <label for="">Date</label>
        <input name="date" type="date" value="<?= $row["date"] ?>">
        <label for="">time</label>
        <input name="time" type="text" value="<?= $row["time"] ?>">
</div>

        <button class="add" type="submit"> Edit </button>

</div>


</form>