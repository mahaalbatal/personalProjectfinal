<?php



$eventId = $_POST["eventId"];

$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";


$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("DELETE FROM `events` WHERE `events`.`eventId` = $eventId;");


if($stmt->execute()){
	?><p>Event <?=$eventId ?> deleted</p><?php
}else{
	?><p>Could not delete the Event</p><?php
}
?>
<a href="events.php">Back to Events</a>