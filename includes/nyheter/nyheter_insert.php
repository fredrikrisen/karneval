<?php

require '../connect.php';

if(isset($_POST['nyheter-submit'])){
    $titel = mysqli_real_escape_string($conn,$_POST['titel']); 
    $nyhet = mysqli_real_escape_string($conn,$_POST['nyhet']);
    $imagename=$_FILES["image"]; 
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $timestamp = date("Y-m-d H:i:s");
 
    $sql = "INSERT INTO aside_posts VALUES(DEFAULT, '$titel', '$nyhet', '$image', '$timestamp')";

    if(mysqli_query($conn, $sql)) {
        header("Location: ../nyheter.php?success"); 
        exit;     }
    else{
        header("Location: ../nyheter.php?bajs");
        print '<p>' . mysqli_error($sql) . '</p>'; 
        exit; 
}
}
?>