<?php
$errors = array(); 

require 'connect.php';


if(isset($_POST['update-password-submit'])){

        $password = $_POST['current_password'];
        $newpassword = $_POST['password1'];
        $confirmnewpassword = $_POST['password2'];
        $result = mysqli_query($conn, "SELECT `password` FROM admintable WHERE name='admin'");
        $row = mysqli_fetch_array($result);

        if($password!= $row['password'])
        {
        array_push($errors, "Du har angett fel lösenord för användaren");
        }
        else if($newpassword=$confirmnewpassword){
        $sql=mysqli_query($conn, "UPDATE admintable SET `password`='$newpassword' where name='admin'");
        array_push($errors, "Grattis! Du har bytt lösenord");
        
        }else
        {
         
          array_push($errors, "Dina två lösenord matchar ej med varandra");       }
    }
      ?>
      
<div class= "parent">
<div class="box">
		<div class="box wall">
		  <p class="FAQheader">
           Byt lösenord
            </p>
            
            <div class="asdf">
            <form action="" method="post">
            <?php include('error/error.php'); ?>
                <input type="password" name="current_password" placeholder="Nuvarande lösenord...">
                <input type="password" name="password1" placeholder="Lösenord...">
                <input type="password" name="password2" placeholder="Lösenord igen...">
                <button class="sub" type="submit" name="update-password-submit">Byt lösenord</button>
            </form>
            </div>
            

			
        </div>		
</div>
</div>