<?php 
include('../connect.php');

$name = $_POST['name'];
$text = $_POST['text']; // emailtexten




if(!$conn){
    die("Could not connect to database: ".mysqli_connect_error());
}else{

$sql = "INSERT INTO faq (`fname`, `faq_text`) VALUES('$name', '$text')";


mysqli_query($conn, $sql);

print 'Fråga skickad!';
}
?>