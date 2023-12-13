<?php
$tmp_location = $_FILES["image"]["tmp_name"];
    
    $uploadFolder = "../uploads/";
    $upload_location = $uploadFolder . basename($_FILES["image"]["name"]);
    
    if (move_uploaded_file($tmp_location, $upload_location)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "File upload problem.\n";
    }
    
    echo 'Here is some more debugging info:';
    print_r($_FILES);
    ?>