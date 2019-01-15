<?php

include('../connect.php');
$output = '';
if(isset($_POST["query"]))
{
    //query för sökning
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT * FROM student WHERE pnr LIKE '%".$search."%' AND current_position NOT LIKE 'applicant'
 OR fname LIKE '%".$search."%' AND current_position NOT LIKE 'applicant'
 OR lname LIKE '%".$search."%' AND current_position NOT LIKE 'applicant'
 OR email LIKE '%".$search."%' AND current_position NOT LIKE 'applicant'
 OR current_position LIKE '%".$search."%' 
 AND current_position NOT LIKE 'applicant'";
}
else
{
 $query = "
  SELECT * FROM student WHERE wish = 'hired' ORDER BY pnr
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div>
   <table>
    <tr>
     <th>Personnummer</th>
     <th>Förnamn</th>
     <th>Efternamn</th>
     <th>Email</th>
     <th>Nuvarande tjänst</th>
     <th>Åtgärd</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
    <tr id="'.$row['pnr'].'">
    <td data-pnr="'.$row["pnr"].'" data-target="pnr">'.$row["pnr"].'</td>
    <td data-target="fname">'.$row["fname"].'</td>
    <td data-target="lname">'.$row["lname"].'</td>
    <td data-target="email">'.$row["email"].'</td>
    <td data-target="current_position">'.$row["current_position"].'</td>
    <td>
    <button name="btn_delete" id="btn_delete" data-id3="'.$row["pnr"].'">Sparka anställd</button>
    </td>
    <td>
    <button class="btn_modal" id="btn_modal" data-email="'.$row["email"].'" data-lname="'.$row["lname"].'" data-fname="'.$row["fname"].'" data-id1="'.$row["pnr"].'" type="button" data-toggle="modal" data-target="#myModal">Redigera anställd</button>
    </td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Inga träffar för sökningen';
}
include('anstallda_modal.php')
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
var pnr = "";
$(document).ready(function() {
$(document).on('click', '#btn_delete', function(){  
        var pnr=$(this).data("id3");  

        $.ajax({
            type: "POST",
            url: "studenter/studenter_delete.php",
            data: {pnr},
            dataType: "text",
            success: function(data) {
                $("#show").load("studenter/load_anstallda.php")

            }
        })

    });
    $(document).on('click', '#btn_modal', function(){  
        pnr=$(this).data("id1");
        document.getElementById('fname').value=$(this).data("fname");
        document.getElementById('lname').value=$(this).data("lname");
        document.getElementById('email').value=$(this).data("email");



 
    });
    $(document).ready(function() {
    $(document).on('click', '#btn_update', function(){  
        var fname=document.getElementById("fname").value;
        var lname=document.getElementById("lname").value;
        var email=document.getElementById("email").value;
        var sektion=document.getElementById("sektion").value;


    $.ajax({
    type: "POST",
    url: "studenter/anstallda_update.php",
    data: {pnr, fname, lname, email, sektion},
    dataType: "text",
    success: function(data) {
        $("#show").load("studenter/load_anstallda.php")

    }
})    });
});
     
});
</script>