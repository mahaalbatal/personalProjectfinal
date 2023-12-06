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
<h1>Delete Confirmation</h1>
<p>Are you sure you want to delete this Event?</p>
<div>
	<p>Location: <?= $row["location"] ?></p>
	<p>Date: <?= $row["date"] ?></p>
	<p>Time: <?= $row["time"] ?></p>

</div>

<button><a href="../events.php">No</a></button>
<form action="../delete-events.php" method="POST">
	<input type="hidden" name="eventId" value="<?= $row["eventId"] ?>">
	<input type="submit" value="Yes">
</form>