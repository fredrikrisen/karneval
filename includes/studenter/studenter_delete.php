<?php

include('../connect.php');

$pnr = $_POST['pnr'];

if(!$conn){
    die("Could not connect to database: ".mysqli_connect_error());
}
else{
    $sql = "DELETE FROM student WHERE pnr='$pnr'";
    mysqli_query($conn, $sql);
}

?>