<?php

include('../connect.php');

$pnr = $_POST['pnr'];
$wish = $_POST['wish'];


if(!$conn){
    die("Could not connect to database: ".mysqli_connect_error());
}
else{
    $sql = "UPDATE student SET wish='hired', current_position='$wish' where pnr='$pnr'";
    mysqli_query($conn, $sql);
}

?>