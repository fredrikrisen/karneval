<?php

require 'connect.php';

$sql = "DROP TABLE tickets;";


if(mysqli_query($conn, $sql)) {
    print "Table deleted successfully!";
}
else{
    print "Error: " . mysqli_error($conn);
}


?>