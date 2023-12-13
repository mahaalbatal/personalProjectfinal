<?php


$location = $_POST["location"];
$date = $_POST["date"];
$time = $_POST["time"];


$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";


$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("INSERT INTO `events` (`eventId`, `location`, `date`, `time`)
VALUES (NULL, '$location', '$date', '$time');");


if ($stmt->execute()) { ?>
<h1>Added Successfully</h1>
<button><a href="events.php">Back</a></button>
<?php }  
?>

