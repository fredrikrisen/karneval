<!DOCTYPE html>
<html>
    <?php
    include('head_includes.php');
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>  

<?php 
    if(isset($_SESSION['username'])) {
    
        include('admin_nav.php');
        include('studenter/ansokningar_form.php');

        
}
    else{
        echo '<p>Logga in</p>';
        }
?>
</body>
</html>