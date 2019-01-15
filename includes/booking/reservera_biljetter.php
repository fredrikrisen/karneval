<?php
    include('../connect.php');
    
   // error_reporting(E_ERROR | E_PARSE);
    error_reporting(0);



    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $ticketType = $_POST['ticketType'];
    $numberOfTickets = $_POST['numberOfTickets'];


    $query = "SELECT SUM(numberOfTickets) as result FROM tickets WHERE fname='$firstName' AND lname='$lastName' AND ticketType ='$ticketType'";


    $result = mysqli_query($conn, $query);


    $row = mysqli_fetch_array($result);
    $sum = $row['result'];
    $total = $sum + $numberOfTickets;
    
    if($total < 6) {
    

    if(!$conn){
        die("Could not connect to database: ".mysqli_connect_error());
    }
    else{
            //  query to insert spex data 
        $sql = "INSERT INTO tickets (`fname`, `lname`, `email`, `ticketType`, `numberOfTickets`) VALUES ('$firstName', '$lastName', '$email', '$ticketType', '$numberOfTickets');";
        mysqli_query($conn, $sql);

        print "Du har nu bokat ".$numberOfTickets." biljetter till ".$ticketType.". Du hämtar ut dessa vid AF-borgen. Glöm inte att ta med giltig legitimation";

    }}else{
        print "Antingen har du redan bokat 5 biljetter eller har du redan bokat biljetter och antalet du NU valt överskrider maxgränsen på 5 biljetter per person";
    }
    
        
    
?>