<?php 
include('connect.php');

?>


<?php
            $result = mysqli_query($conn,"SELECT * FROM frontpage ORDER BY ID DESC LIMIT 1");
            


          	while($row = mysqli_fetch_array($result)) {
	          print  $row['frontpage_text'];
            if(empty($row['frontpage_text'])) {
            print 'Ingen data funnen';
            }
    }
    ?>