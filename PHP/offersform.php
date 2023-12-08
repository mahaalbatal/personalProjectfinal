<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <title>Offers</title>
</head>
<body>


<?php include 'header.php';


if ($_SESSION['role'] == "admin"){

        ?> <form id="offers" class="offers" action="insertoffers.php" method="POST">

                <div class="offers1">
                        <label for="">Start from</label>
                        <input name="start" type="date">
                        <label for="">End</label>
                        <input name="end" type="date">
                </div>
                <div class="offers2">
                        <textarea name="offer" class="textarea" rows="5" placeholder="write your offer here"></textarea>
                        <button class="add" type="submit"> Add </button>
                
                </div>
                

                </form> <?php } ?>

                        <button id="loadoffers" class="oldoffers" type="submit" >Load Offers</button>

                        <!-- <button id="loadoffers" class="oldoffers" type="submit"> load old offers </button> -->

                        <section id="offersloading"></section>
                
                        <script type="text/javascript" src="../JS/ajax.js"></script>
</body>

</html>
<!-- <a href="index.html"></a> -->