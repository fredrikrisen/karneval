<html>
<body>
<?php
    include('head_includes.php');
    ?>



<?php 
    if(isset($_SESSION['username'])) {
    
        include('admin_nav.php');
        include('mail/mail_form.php');

        
}
    else{
        echo '<p>Logga in</p>';
        }
?>
</body>
</html>