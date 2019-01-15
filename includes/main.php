<?php
  include('connect.php');
?>
<div class="box middle" id="content">
          <main>
            <p class="FAQheader">VÄLKOMMEN</p>
            
            <?php
            $result = mysqli_query($conn,"SELECT * FROM frontpage ORDER BY ID DESC LIMIT 1");
            


          	while($row = mysqli_fetch_array($result)) {
	          print  '<p class="middle-text">' . $row['frontpage_text'] . '</p>';
            if(empty($row['frontpage_text'])) {
            print 'Ingen data funnen';
            }
    }
    ?>
          
          </main>
</div>