<?php session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];


$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";


$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `customers` (`customerId`, `name`, `email`, `username`, `password`)
VALUES (NULL, '$name', '$email', '$username', '$password');");


if ($stmt->execute());
if ($stmt->rowCount() > 0) {  
    $userId = $pdo->lastInsertId();
    $_SESSION["customerId"] = $customerId;     
    $_SESSION["username"] = $username;     
    $_SESSION["loggedIn"] = true;     
    header('Location: index.php');
}

?>

