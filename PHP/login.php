<?php session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT `customerId`, `username`, `role` 
	FROM `customers` 
	WHERE `username` = '$username' AND `password` = '$password';");
$stmt->execute();

if ($row = $stmt->fetch()) {

    if ($username === $username && $password === $password) {
// if ($username === $username && $password === $password && $row['role'] === 'admin') {
    // if ($row['role'] === 'admin') {

    $_SESSION["customerId"] = $row['customerId'];
	$_SESSION["username"] = $row['username'];
    $_SESSION["role"] = $row['role'];
	$_SESSION["loggedIn"] = true;

    header('location:index.php');

    // if ($row['role'] === 'customer') {
    //     $_SESSION["customerId"] = $row['customerId'];
    //     $_SESSION["username"] = $row['username'];
    //     $_SESSION["loggedIn"] = true;
    
    //     header('location:test.php');


    // } 
} 
    
}else{
        
    header('location:../incorrect-up.html');
}
    ?>
