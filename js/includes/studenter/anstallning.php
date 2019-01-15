<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<?php

    

            require('../includes/connect.php');

            echo '<table>';
            echo '<tr>';
            echo '<th>Personnummer</th>';
            echo '<th>Namn</th>'; 
            echo '<th>Efternamn</th>';
            echo '<th>Email</th>';
            echo '<th>Önskad Sektion</th>';
            echo '</tr>';

            /*if(isset($_POST['delete'])){
                $id = $_POST['delete_rec_id'];  
                $query = "DELETE FROM student WHERE id=$id"; 
                $result = mysqli_query($conn, $query);
            }*/ 
            if(isset($_POST['hire'])){
                $id = $_POST['hire_rec_id'];
                $sektion = $_POST['hire_sektion'];   
                $query = "UPDATE student SET wish='hired', current_position='$sektion' where pnr='$id'"; 
                $result = mysqli_query($conn, $query);
                
            }

            $result = mysqli_query($conn,"SELECT * FROM student where wish NOT LIKE 'hired'");

            


            while($row = mysqli_fetch_array($result)) {

            

            $pnr = $row['pnr'];
            $sektion = $row['wish'];
            echo '<tr>';
            echo '<td>' . $row['pnr'] . '</td>';
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>'; 
            echo '<td>' . $row['email'] . '</td>'; 
            echo '<td>' . $row['wish'] . '</td>';
            echo  '<td>';
            echo  '<td>';
            ?>
            <form id="hire" method="post" action="">
            <input type="hidden" name="hire_rec_id" value="<?php print $pnr;?>"/>
            <input type="hidden" name="hire_sektion" value="<?php print $sektion;?>"/> 
            <input type="submit" name="hire" value="Anställ"/>    

            </form>
            <?php
            echo '</td>';
            echo  '<td>';  ?>
            <form id="delete" method="post" onsubmit="return formSubmit();">
            <input type="hidden" name="delete_rec_id" value="<?php print $pnr;?>"/> 
            <input type="submit" name="delete" value="Ta bort ansökan"/>
            <p id="success"></p>    
        </form>
        <script>
          function formSubmit() {
              $.ajax({
                  type: 'POST',
                  url: 'studenter/studenter_delete.php',
                  data:$('#delete').serialize(),
                  success: function(response) {
                      $('#success').html(response);
                  }
              });
              var form = document.getElementById('success').reset();
              return true;
          }
        </script>
        <?php
            echo '</td>';   
            echo  '</tr>';
            
            }
            ?>