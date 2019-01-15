<!DOCTYPE html>
<html>
    <?php
    include('head_includes.php');
    ?>
<body>  

<?php 
    if(isset($_SESSION['username'])) {
    
        include('admin_nav.php');
        include('nyheter/framsida_form.php');

        
}
    else{
        echo '<p>Logga in</p>';
        }
?>
</body>
</html>