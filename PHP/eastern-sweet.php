<?php
session_start();
    if ($_SESSION["role"]=="admin" || $_SESSION["role"]=="customer"){ ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="../CSS/style.css">
            <title>Eastern Sweet</title>
        </head>
        <body>
                <?php include 'header.php';?>

                <section class="image-container">
            
                        <img src="../images/IMG-20211006-WA0247.jpg" alt="Image1">
                
                
                        <img src="../images/IMG-20211006-WA0208.jpg"  alt="Image2">
                
                
                        <img src="../images/IMG-20211023-WA0023.jpg"  alt="Image3">


                        <img src="../images/IMG-20211023-WA0167.jpg"  alt="Image4">

                </section>

                        
        
        </body>
        </html>
<?php } else{
    echo("you are not customer or admin");
}
?>

