<?php

include('config.php');

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

if($image) 
    move_uploaded_file($tmp, "upload/$image");

    try{
        $sql = "INSERT INTO images (name) VALUES ('$image') ";
        mysqli_query($conn, $sql);
    }

    catch(Exception $e)
    {
        echo $e;
    }

header("location: show.php");


?>