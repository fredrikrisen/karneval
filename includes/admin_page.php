<!DOCTYPE html>
<html>
    <?php
    require('head_includes.php');
    ?>
<body>
  

<?php 
    if(isset($_SESSION['username'])) {
    
        include('admin_nav.php');
        include('welcome.php');
    }
    else{
        echo '<p>Logga in</p>';
        }
?>
</body>
</html>