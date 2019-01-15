<!DOCTYPE html>
<html>
<?php
    require "includes/headUnderpage.php";
?>
<body>

<?php require "includes/login/login.php";
?>
    <main>
        <?php 
            if(isset($_SESSION['username'])) {
                header("Location: includes/admin_page.php"); // Modify to go to the page you would like if logged in.
                exit;
            }else{
                echo '<p>Du är utloggad</p>';
            }
        ?>
        
        
    </main>


</body>
</html>