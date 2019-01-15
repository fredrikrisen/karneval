<?php

include('connect.php');

/*$sql = "CREATE TABLE test2(
    name VARCHAR(30) PRIMARY KEY
)";*/

//$sql = "INSERT INTO admintable (name, password) VALUES('admin', 'fredriktim')";

$sql = "INSERT INTO tickets (`fname`, `lname`, `email`, `ticketType`, `numberOfTickets`) VALUES('ffff', 'fffff', 'email@email', 'spexet', '4')";


if(mysqli_query($conn, $sql)) {
    print "Inserted successfully!";
}
else{
    print "Error: " . mysqli_error($conn);
}

?>