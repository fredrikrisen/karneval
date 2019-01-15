<?php

require '../connect.php';

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
        header("Location: ../admin_page.php"); // Modify to go to the page you would like 
        exit; 
    }else{ 
        header("Location: ../../admin.php?bajs"); 
        exit; 
    }
}else{    //If the form button wasn't submitted go to the index page, or login page 
    header("Location: ../../admin.php?error");     
    exit; 
}