<?php
$errors = array(); 

require 'includes/connect.php';

if(isset($_POST['login-submit'])){
    $usr = mysqli_real_escape_string($conn,$_POST['username']); 
    $pas = mysqli_real_escape_string($conn,$_POST['password']); 
    $sql = mysqli_query($conn,"SELECT * FROM admintable  
        WHERE name='$usr' AND 
        password='$pas' 
        LIMIT 1"); 
    if(mysqli_num_rows($sql) == 1){ 
        $row = mysqli_fetch_array($sql); 
        session_start(); 
        $_SESSION['username'] = $row['name']; 
        $_SESSION['logged'] = TRUE;
        header("Location: includes/admin_page.php"); // Modify to go to the page you would like 
        exit; 
    }else{ 
        array_push($errors, "Du har angett fel användarnamn eller lösenord");

    }
}
?>

<div class= "parent">
<div class="box">
		<div class="box wall">
		  <p class="FAQheader">
           ADMIN
            </p>
            <div class="asdf">
            <form action="" method="post">
            <?php include('includes/error/error.php'); ?>
                <input type="text" name="username" placeholder="Användernamn...">
                <input type="password" name="password" placeholder="Lösenord...">
                <button class="sub" type="submit" name="login-submit">Logga in</button>
            </form>
            </div>
		
			
        </div>		
</div>
</div>