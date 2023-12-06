<?php

    $dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
    $dbusername = "root";  
    $dbpassword = "";
    
    //connect
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    
    //prepare
    $stmt = $pdo->prepare("SELECT * FROM `offers`;");
    
    //execute
    $stmt->execute();
    
    //process results
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo(json_encode($results)); 
    ?>
