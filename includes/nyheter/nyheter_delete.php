<?php

require 'connect.php';

if(isset($_POST['delete'])){
    $id = $_POST['delete_rec_id'];  
    $query = "DELETE FROM aside_posts WHERE id=$id"; 
    $result = mysql_query($query);
 

    if(mysqli_query($conn, $sql)) {
        header("Location: nyheter.php?success"); 
        exit;     }
    else{
        header("Location: nyheter.php?error"); 
        exit; 


}
}
?>