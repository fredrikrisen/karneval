<div class= "parent">
<div class="box">
		<div class="box wall">
		  <p class="FAQheader">
           Hantera nyheter
            </p>
            <div class="asdf">
            <form action="nyheter/nyheter_insert.php" enctype="multipart/form-data" method="post">
                <label for="fname" class="formText">Titel</label>
                <input type="text" name="titel" placeholder="Ge nyheten en titel...">
                <label for="fname" class="formText">Text</label>
                <textarea id="nyhet" type="text" name="nyhet" placeholder="Skriv nyheten här..."></textarea>
                <label for="fname" class="formText">Lägg till en bild</label>
                <input name="image" type="file">
                <button class="sub" type="submit" name="nyheter-submit">Lägg till nyhet</button>
            </form> 
        </div>
        <div>
        <?php

            require('../includes/connect.php');

            echo '<table>';
            echo '<tr>';
            echo '<th>Nyhet</th>';
            echo '<th>Datum</th>'; 
            echo '<th>Åtgärd</th>';
            echo '</tr>';

            if(isset($_POST['delete'])){
                $id = $_POST['delete_rec_id'];  
                $query = "DELETE FROM aside_posts WHERE id=$id"; 
                $result = mysqli_query($conn, $query);
            }

            $result = mysqli_query($conn,"SELECT * FROM aside_posts");

            


            while($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            echo '<tr>';
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['created_at'] . '</td>'; 
            echo  '<td>';
            ?>
            <form id="delete" method="post" action="">
        <input type="hidden" name="delete_rec_id" value="<?php print $id;?>"/> 
        <input type="submit" name="delete" value="Ta bort/Delete"/>    

        </form>
        <?php
            echo '</td>';   
            echo  '</tr>';
            
            }
            ?>
        </div>
		</div>		
</div>
</div>