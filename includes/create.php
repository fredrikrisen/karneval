<?php

include('connect.php');

$sql = "CREATE TABLE faq(
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    faq_text TEXT NOT NULL,
    created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn, $sql)) {
    print "Table created successfully!";
}
else{
    print "Error: " . mysqli_error($conn);
}

?>