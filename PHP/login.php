<?php session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT `customerId`, `username` 
	FROM `customers` 
	WHERE `username` = '$username' AND `password` = '$password';");
$stmt->execute();

if ($row = $stmt->fetch()) {
    $_SESSION["customerId"] = $row['customerId'];
	$_SESSION["username"] = $row['username'];
	$_SESSION["loggedIn"] = true;
    // Check the admin account, if the username is "MAHA" and the password is "MOCHA"
    if ($username === "MAHA" && $password === "MOCHA") {

    } elseif ($username === $username && $password === $password) {

    }else{
        
        ?><p>Error<a href="LogIn.html">Try login again</p><?php
    }
}

    ?>
