<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php require('../connect.php');


echo '<table>';
            echo '<tr>';
            echo '<th>Personnummer</th>';
            echo '<th>Namn</th>'; 
            echo '<th>Efternamn</th>';
            echo '<th>Email</th>';
            echo '<th>Önskad Sektion</th>';
            echo '</tr>';

    $result = mysqli_query($conn,"SELECT * FROM student where wish NOT LIKE 'hired'");

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $pnr = $row['pnr'];
            echo '<tr>';
            echo '<td id="pnr" data-id1="'.$row["pnr"].'">' . $row['pnr'] . '</td>';
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>'; 
            echo '<td>' . $row['email'] . '</td>'; 
            echo '<td>' . $row['wish'] . '</td>';
            echo  '<td>';
            echo '<button name="btn_hire" id="btn_hire" data-id1="'.$row["pnr"].'" data-id2="'.$row["wish"].'">Anställ</button>';
            echo '</td>';
            echo  '<td>';
            echo '<button name="btn_delete" id="btn_delete" data-id3="'.$row["pnr"].'">Ta bort ansökan</button>';
            echo '</td>';
        }
        echo  '</tr>';
    }?>

<script type="text/javascript">
$(document).ready(function() {
    $(document).on('click', '#btn_delete', function(){  
        var pnr=$(this).data("id3");  


        $.ajax({
            type: "POST",
            url: "studenter/studenter_delete.php",
            data: {pnr},
            dataType: "text",
            success: function(data) {
            $("#show").load("studenter/load_ansokningar.php")

            }
        })

    });
    $(document).on('click', '#btn_hire', function(){  
        var pnr=$(this).data("id1");  
        var wish=$(this).data("id2");  


        $.ajax({
            type: "POST",
            url: "studenter/studenter_hire.php",
            data: {pnr, wish},
            dataType: "text",
            success: function(data) {
                $("#show").load("studenter/load_ansokningar.php")
            }
        })

    });
});

      
</script>