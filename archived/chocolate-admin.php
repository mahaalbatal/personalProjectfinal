<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <title>chocolate</title>
</head>
<body>
        <?php include 'header.php';?>

        <form class="upload" action="upload-photos.php" enctype="multipart/form-data" method="POST">
        
                <main class="image-container">
                        <section class="image-container-items">
                                <img src="../images/IMG-20220609-WA0065.jpg" alt="Image1">
                                <?php if ($_SESSION['role'] == "admin"){
                                        ?> <input type="file" name="image">
                                        <input type="submit" name="submit" value="Upload"> <?php } ?>
                        </section>
                        
                        <section class="image-container-items">
                                <img src="../images/IMG-20220608-WA0041.jpg"  alt="Image2">
                                <?php if ($_SESSION['role'] == "admin"){
                                        ?> <input type="file" name="image2">
                                        <input type="submit" name="submit" value="Upload"> <?php } ?>
                        </section>
                        
                        <section class="image-container-items">
                                <img src="../images/IMG-20220607-WA0145.jpg"  alt="Image3">

                                <?php if ($_SESSION['role'] == "admin"){
                                        ?> <input type="file" name="image3">
                                        <input type="submit" name="submit" value="Upload"> <?php } ?>
                        </section>

                        <section class="image-container-items">
                                <img src="../images/IMG-20220607-WA0090.jpg"  alt="Image4">
                                <?php if ($_SESSION['role'] == "admin"){
                                        ?> <input type="file" name="image4">
                                        <input type="submit" name="submit" value="Upload"> <?php } ?>
                        </section>

                </main>

        </form>



</body>
</html>