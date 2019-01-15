<?php
include('connect.php');

echo '<P>';


//$result = mysqli_query($conn,"SELECT * FROM admintable");
/*$result = mysqli_query($conn,"SELECT * FROM admintable  
WHERE name='$usr' AND 
password='$pas'");*/

//$result = mysqli_query($conn,"SELECT SUM(numberOfTickets) as result FROM tickets WHERE fname='Fredrik' AND lname='Risén'");


	//while($row = mysqli_fetch_array($result)) {
	//echo $row['result']. '<P>';
	/*echo $row['id']. '<P>';
	echo $row['fname']. '<P>';
	echo $row['lname']. '<P>';
	echo $row['email']. '<P>';
	echo $row['ticketType']. '<P>';
	echo $row['numberOfTickets']. '<P>';*/

	//echo $row['id']. '<P>';
	//echo $row['title']. '<P>';
	//echo $row['posts_text']. '<P>';
	//echo $row['created_at']. '<P>';
	//echo $row['bild'] '<P>';
	//echo '<img src="data:image/png;base64,'.base64_encode( $row['bild'] ).'"/>';

	//  }
	  //$sql = mysqli_query($conn,"SELECT * FROM tickets");

/*
	while($row = mysqli_fetch_array($sql)) {
	
	echo $row['id']. '<P>';
	echo $row['fname']. '<P>';
	echo $row['lname']. '<P>';
	echo $row['email']. '<P>';
	echo $row['ticketType']. '<P>';
	echo $row['numberOfTickets']. '<P>';
	print '<br/>';
	}
*/
	$sql = mysqli_query($conn,"SELECT * FROM frontpage");


	while($row = mysqli_fetch_array($sql)) {
	
	echo $row['id']. '<P>'
	echo $row['frontpage_text']. '<P>';
	
	}
?>