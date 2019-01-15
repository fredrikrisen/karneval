<?php
  include('connect.php');
?>
<div class="box aside" style="overflow:auto;">
          <aside>
          <?php
            $result = mysqli_query($conn,"SELECT * FROM aside_posts ORDER BY ID DESC LIMIT 2");
            


          	while($row = mysqli_fetch_array($result)) {
            echo  '<h2 class="news">' . $row['title'] . '</h2>';
            if(!empty($row['bild'])) {
              echo '<img class=slides src="data:image/png;base64,'.base64_encode( $row['bild'] ).'" style="  width: 55%;"/>';
              }
	          echo  '<p class="aside-text">' . $row['posts_text'] . '</p>';
            echo  '<p class="aside-text">' . $row['created_at'] . '</p>';
            
    }
    ?>
          </aside>
        </div>