<?php
    include('../connect.php');
    
   // error_reporting(E_ERROR | E_PARSE);
   // error_reporting(0);



    $text = $_POST['text'];
     

    if(!$conn){
        die("Could not connect to database: ".mysqli_connect_error());
    }
    else{
            //  query to insert spex data 
        $sql = "INSERT INTO frontpage (`frontpage_text`) VALUES ('$text')";
        mysqli_query($conn, $sql);

        print "Texten är uppdaterad";

    }
        
    
?>