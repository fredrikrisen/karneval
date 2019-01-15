<?php 
    include('includes/connect.php');


$query = "SELECT SUM(numberOfTickets) as result FROM tickets WHERE ticketType ='Showen'";


    $result = mysqli_query($conn, $query);


    $row = mysqli_fetch_array($result);
    $sum = $row['result'];

    $total = 200 - $sum;

    print 'Antal biljetter kvar: ' . $total;

?>