<?php


$eventId = $_POST["eventId"];
$location = $_POST["location"];
$date = $_POST["date"];
$time = $_POST["time"];


$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";


$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("UPDATE `events` SET `location` = '$location', `date` = '$date', `time` = '$time' 
WHERE `events`.`eventId` = $eventId;");


if($stmt->execute()){
	?><p>Event <?=$eventId ?> Updated</p><?php
}else{
	?><p>Could not UPDATE the Event</p><?php
}
?>
<a href="events.php">Back</a>
