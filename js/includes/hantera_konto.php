<!DOCTYPE html>
<html>
    <?php
    require('head_includes.php');
    ?>
    

<body>
  

<?php 
    if(isset($_SESSION['username'])) {
    
        include('admin_nav.php');
        include('konto/hantera_konto_form.php');

        
}
    else{
        echo '<p>Logga in</p>';
        }
?>
</body>
</html>