<?php 
require('../connect.php');

$result = mysqli_query($conn,"SELECT * FROM student where wish NOT LIKE 'hired'");

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo $row['pnr'];
        }
    }
?>