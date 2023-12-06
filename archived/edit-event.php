<?php



$eventId = $_GET["eventId"];

$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `events` 
	WHERE `events`.`eventId` = $eventId;");

//execute
$stmt->execute();

//process results
$row = $stmt->fetch();

?>



<form action="update-events.php" method="POST">

<input type="hidden" name="eventId" value="<?= $row["eventId"] ?>">

<label for="location">Location:</label>
<input type="text" name="location" value="<?= $row["location"] ?>">
<br><br>

<label for="date">Date:</label>
<input type="text" name="date" value="<?= $row["date"] ?>">
<br><br>

<label for="time">Time:</label>
<textarea name="time"><?= $row["time"] ?></textarea>
<br><br>

<button type="submit">Edit</button>
</form>