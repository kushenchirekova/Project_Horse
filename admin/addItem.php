<?php

    $conn = mysqli_connect("127.0.0.1","root","","web_horses");
    $image = $_POST['photo'];
    //Stores the filename as it was on the client computer.
    $imagename = $_FILES['photo']['name'];
    //Stores the filetype e.g image/jpeg
    $imagetype = $_FILES['photo']['type'];
    //Stores any error codes from the upload.
    $imageerror = $_FILES['photo']['error'];
    //Stores the tempname as it is given by the host when uploaded.
    $imagetemp = $_FILES['photo']['tmp_name'];
    //The path you wish to upload the image to
    $imagePath = "../images/";
    $uploaded = false;
    if(is_uploaded_file($imagetemp)) {
        if(move_uploaded_file($imagetemp, $imagePath . $imagename)) {
            $uploaded = false;
        }
    }
    $photoUrl = "images/".$imagename;
    $description = mysqli_real_escape_string($conn,$_POST["description"]);
    echo $description;
    $name = $_POST["name"];
    $sql = "INSERT INTO `horses` (`id`, `description`, `photoUrl` ,`name`) VALUES 
    (null, '".$description."', '".$photoUrl."', '".$name."');";
    $result = mysqli_query($conn,$sql);
    $url='panel.php';
    //echo '<META HTTP-EQUIV=REFRESH CONTENT="0.01; '.$url.'">';
    
?>