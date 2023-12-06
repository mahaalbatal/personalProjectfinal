<?php session_start();

// $username = $_POST["username"];
// $password = $_POST["password"];

// $dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
// $dbusername = "root";  
// $dbpassword = "";

// $pdo = new PDO($dsn, $dbusername, $dbpassword);
// $stmt = $pdo->prepare("SELECT `customerId`, `username` 
// 	FROM `customers` 
// 	WHERE `username` = '$username' AND `password` = '$password';");
// $stmt->execute();

// if ($row = $stmt->fetch()) {
    // $_SESSION["customerId"] = $row['customerId'];
	// $_SESSION["username"] = $row['username'];
	// $_SESSION["loggedIn"] = true;

    if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] != true){
        ?><p>You are NOT logged in. This is secret info</p>
        <a href="../login.html">Login here</a><?php
        exit();
    }else{

    // $dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
    // $dbusername = "root";  
    // $dbpassword = "";
    
    // //connect
    // $pdo = new PDO($dsn, $dbusername, $dbpassword);
    
    // //prepare
    // $stmt = $pdo->prepare("SELECT * FROM `offers`;");
    
    // //execute
    // $stmt->execute();
    
    // //process results
    // $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	// echo(json_encode($results)); 
    

    // if ($username === $username && $password === $password) { ?>

        <?php include("header.php");?>
        <?php include("../offersform.html");?>


    <?php
    }
    ?>