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
                        </section>
                        
                        <section class="image-container-items">
                                <img src="../images/IMG-20220608-WA0041.jpg"  alt="Image2">
                        </section>
                        
                        <section class="image-container-items">
                                <img src="../images/IMG-20220607-WA0145.jpg"  alt="Image3">
                        </section>

                        <section class="image-container-items">
                                <img src="../images/IMG-20220607-WA0090.jpg"  alt="Image4">
                        </section>

                </main>

        </form>



</body>
</html>