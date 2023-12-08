<?php
session_start();

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

    ?> <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/style.css"> 
        <title>Events</title>
    </head>
    <body> 

    <?php include("header.php"); ?>

        <main class="events-body"> <?php

        

    if ($_SESSION['role'] == "admin"){
            ?><button class="add"><a href='insert-events-form.php'>Add Event</a></button><?php }
            ?><ul><?php

    while($row = $stmt->fetch()) {     
            ?><li><?=$row["eventId"] ?> <?=$row["location"] ?> <?=$row["date"] ?> <?=$row["time"] ?>
            <?php 
        
    if ($_SESSION['role'] == "admin"){
            ?><button class="edit"><a href="edit-event-form.php/?eventId=<?=$row["eventId"]?>">Edit Event</a></button>
            <button class="delete"><a href="delete-confirmation.php/?eventId=<?=$row["eventId"]?>">Delete Event</a></button> <?php } ?>
            </li><?php
    }
    ?></ul>
        </main>

    

    </body>
    </html>


