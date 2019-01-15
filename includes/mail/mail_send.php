<?php 

include('../connect.php');
$sektion = $_POST['sektion'];
$msg = $_POST['text']; // emailtexten



if(!$conn){
    die("Could not connect to database: ".mysqli_connect_error());
}else{

$query = "SELECT email FROM student WHERE current_position='$sektion'";

$mail = array();

$result = mysqli_query($conn, $query);


while($row = mysqli_fetch_array($result))
{
    $mail[] = $row['email'];}
    $to = implode(", ", $mail);


if($mail =! NULL){
    



// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($to,"Lundakarnevalen",$msg, "admin@lundakarnevalen.se");

print 'Du har nu skickat mail till: ';
print $to;

}else {
    print 'Finns inga karnevalister att skicka mail till';
}
}
?>