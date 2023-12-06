<?php

//Update the article
$customerId  = $_POST["customerId "];
$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$dsn = "mysql:host=localhost;sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `customers` SET `name` = '$name', `email` = '$email', `username` = '$username', `password` = '$password' 
WHERE `customers`.`customerId` = $customerId;")

//execute
if($stmt->execute()){
	?><p>your profile has been updated</p><?php
}else{
	?><p>Could not UPDATE the profile</p><?php
}
?>
<!-- <a href="select-articles.php">view all articles</a> -->