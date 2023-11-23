<?php

$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];


$dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `customers` (`customerId`, `name`, `email`, `username`, `password`)
VALUES (NULL, '$name', '$email', '$username', '$password');");

//execute
if ($stmt->execute()) { ?>
<h1>Added Successfully</h1>
<a href="../LogIn.html">Log In></a>
<button type="button"><a href="../LogIn.html"></a>Log In</button>
<?php }  
?>

