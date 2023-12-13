<?php

$start = $_POST["start"];
$end = $_POST["end"];
$offer = $_POST["offer"];



$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";


$pdo = new PDO($dsn, $dbusername, $dbpassword);


$stmt = $pdo->prepare("INSERT INTO `offers` (`offerId`, `start`, `end`, `offer`)
VALUES (NULL, '$start', '$end', '$offer');");


if ($stmt->execute()) { ?>
<h1>Added Successfully</h1>
<?php }  
?>