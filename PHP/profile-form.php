<?php
session_start();


    // $customerId = $_GET["customerId"];

    // $dsn = "mysql:host=localhost;dbname=sanbites;charset=utf8mb4";
    // $dbusername = "root";  
    // $dbpassword = "";
    

//     $pdo = new PDO($dsn, $dbusername, $dbpassword);
    

//     $stmt = $pdo->prepare("SELECT * FROM `customers` WHERE `customers`.`customerId` = $customerId;");
    

//     $stmt->execute();

//     $row = $stmt->fetch();

// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>profile</title>
</head>
<body>
        <?php include 'header.php';?>

    <form class="offers" action="update-profile.php" enctype="multipart/form-data" method="POST">

    <div class="offers1">
            <input type="hidden" name="customerId" value="<?= $row["customerId"] ?>">
            <label for="">Name</label>
            <input name="name" type="text" value="<?= $row["name"] ?>">
            <label for="">Email</label>
            <input name="email" type="text" value="<?= $row["email"] ?>">
            <label for="">Username</label>
            <input name="username" type="text" value="<?= $row["username"] ?>">
            <label for="">Password</label>
            <input name="password" type="text" value="<?= $row["password"] ?>">
    </div>
    <!-- <div class="offers2">
            <textarea name="offer" class="textarea" rows="5" placeholder="write your offer here"></textarea> -->
            Upload Image: <input type="file" name="userphoto">
            <button class="add" type="submit"> Submit </button>
        
        

    </div>


    </form>




</body>
</html>