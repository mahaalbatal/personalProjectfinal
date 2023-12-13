<?php

    $dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
    $dbusername = "root";  
    $dbpassword = "";
    

    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    

    $stmt = $pdo->prepare("SELECT * FROM `offers`;");
    

    $stmt->execute();
    

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo(json_encode($results)); 
    ?>
