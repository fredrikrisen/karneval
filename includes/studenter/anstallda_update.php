<?php

include('../connect.php');

$pnr = $_POST['pnr'];
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$sektion = $_POST['sektion'];

if(!$conn){
    die("Could not connect to database: ".mysqli_connect_error());
}
else{
            //  query to update data 
    $sql = "UPDATE student SET fname='$firstName' , lname='$lastName' , email = '$email', current_position = '$sektion' WHERE pnr='$pnr'";
    mysqli_query($conn, $sql);
}
      
?>