<?php

require 'connect.php';

$sql = "TRUNCATE TABLE tickets;";


if(mysqli_query($conn, $sql)) {
    print "Table deleted successfully!";
}
else{
    print "Error: " . mysqli_error($conn);
}


?>