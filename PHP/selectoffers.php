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
    ?><ul><?php
    while($row = $stmt->fetch()) {     
        ?><li><?=$row["offerId"] ?> <?=$row["start"] ?> <?=$row["end"] ?> <?=$row["offer"] ?> 
        <a href="editoffers.php/?offerId=<?=$row["offerId"]?>">Edit</a> 
        <a href="deleteoffers-confirmation.php/?offerId=<?=$row["offerId"]?>">Delete</a>
    
        </li><?php
    }
    ?></ul><?php

    ?>
