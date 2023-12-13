<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
        <title>Add Event</title>
</head>
<body>
        <?php include 'header.php';?>

        <form class="offers" action="insert-event.php" method="POST">

        <div class="offers1">
                
                <label for="">Location</label>
                <input name="location" type="text">
                <label for="">Date</label>
                <input name="date" type="date">
                <label for="">time</label>
                <input name="time" type="text">
        </div>
        <!-- <div class="offers2">
                <textarea name="offer" class="textarea" rows="5" placeholder="write your offer here"></textarea> -->
                <button class="add" type="submit"> Add </button>
        
        <!-- </div> -->
        
        
        </form>
</body>
</html>