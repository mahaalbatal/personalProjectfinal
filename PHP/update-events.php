<?php


$eventId = $_POST["eventId"];
$location = $_POST["location"];
$date = $_POST["date"];
$time = $_POST["time"];


$dsn = "mysql:host=localhost;sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `events` SET `location` = '$location', `date` = '$date', `time` = '$time' WHERE `events`.`eventId` = $eventId;")

//execute
if($stmt->execute()){
	?><p>Event <?=$eventId ?> Updated</p><?php
}else{
	?><p>Could not UPDATE the Event</p><?php
}
?>
<a href="events.php">view all Events</a>
