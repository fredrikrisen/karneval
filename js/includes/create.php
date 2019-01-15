<?php

include('connect.php');

$sql = "CREATE TABLE frontpage(
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    frontpage_text TEXT NOT NULL
)";
/*
$sql = "CREATE TABLE tickets(
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    ticketType VARCHAR(255) NOT NULL,
    numberOfTickets VARCHAR(255) NOT NULL
)";
*/
/*$sql = "CREATE TABLE aside_posts(
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    posts_text TEXT NOT NULL,
    bild longblob,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";*/

/*$sql = "CREATE TABLE admintable(
    name VARCHAR(30) PRIMARY KEY NOT NULL,
    password VARCHAR(30) NOT NULL
)";*/
/*
$sql = "CREATE TABLE student(
    pnr VARCHAR(50) NOT NULL PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    wish VARCHAR(50) NOT NULL,
    current_position VARCHAR(50) NOT NULL
)";
*/

if(mysqli_query($conn, $sql)) {
    print "Table created successfully!";
}
else{
    print "Error: " . mysqli_error($conn);
}

?>