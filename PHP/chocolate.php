
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/upload.css">
    <title>chocolate upload photos</title>
</head>
<body>
        <?php include 'header.php';?>

        <form class="upload" action="upload-photos.php" enctype="multipart/form-data" method="POST">

            <input type="file" name="image">

            <input type="submit" name="submit" value="Upload">

        </form>



</body>
</html>