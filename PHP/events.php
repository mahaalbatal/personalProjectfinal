<?php

    $dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
    $dbusername = "root";  
    $dbpassword = "";
    
    //connect
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    
    //prepare
    $stmt = $pdo->prepare("SELECT * FROM `events`;");
    
    //execute
    $stmt->execute();
    
    //process results
    include("header.php");
    ?><button><a href='insert-events-form.php'>Add Event</a></button><?php
    ?><ul><?php
    while($row = $stmt->fetch()) {     
        ?><li><?=$row["eventId"] ?> <?=$row["location"] ?> <?=$row["date"] ?> <?=$row["time"] ?>
        <button><a href="edit-event-form.php/?eventId=<?=$row["eventId"]?>">Edit Event</a></button>
        <button><a href="delete-confirmation.php/?eventId=<?=$row["eventId"]?>">Delete Event</a></button>
        </li><?php
    }
    ?></ul><?php

    ?>
