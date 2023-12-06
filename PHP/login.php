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

if ($username === $username && $password === $password) {
    header('location:index.php');?>
    
<?php

    }else{
        
        header('location:../incorrect-up.html');
    }
}

    ?>
