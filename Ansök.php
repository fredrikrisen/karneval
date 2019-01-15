<!DOCTYPE html>
<html>
<?php
    include('includes/headUnderpage.php');
    ?>
  <body>
  <?php
    include('includes/header.php');
    ?>
    
    <?php
    include('includes/nav.php');
    ?>

<?php
$errors = array(); 

require 'includes/connect.php';


if(isset($_POST['apply'])){

        $pnr = $_POST['pnr'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $sektion = $_POST['sektion'];
        $result = mysqli_query($conn, "SELECT * FROM student WHERE pnr='$pnr'");
        $row = mysqli_fetch_array($result);

        if($pnr == $row['pnr'])
        {
        array_push($errors, "Detta personnummer är redan använt");
        }
        else if($result != FALSE){
        $sql=mysqli_query($conn, "INSERT INTO student (pnr, fname, lname, email, wish, current_position) VALUES ('$pnr', '$fname', '$lname', '$email', '$sektion', 'applicant');");
        array_push($errors, "Vad roligt att du ansöker som karnevalist! Vi hör av oss så fort vi har behandlat din ansökan!!");

        }else
        {
         
          array_push($errors, "Något gick fel!");       }
    }
      ?>

<div class= "parent">
<div class="box">
		<div class="box wall">
          <main>
		  <p class="FAQheader">
           ANSÖK ATT BLI KARNEVALIST!
            </p>
            
            <div class="asdf">
                
		<form action="" method="POST" onsubmit="return ValidateForm()" name="vform">
    <?php include('includes/error/error.php'); ?>

    <label for="fname" class="formText">Personnummer*</label>
    <input type="text" id="fname" name="pnr" placeholder="Ditt personnummer" required>
    <div id="fname_error" class="val_error"></div>

    <label for="fname" class="formText">Förnamn*</label>
    <input type="text" id="fname" name="firstname" placeholder="Ditt namn.." required>
    <div id="fname_error" class="val_error"></div>
     
    <label for="lname" class="formText">Efternamn*</label>
    <input type="text" id="lname" name="lastname" placeholder="Ditt efternamn.." required>
    <div id="lname_error" class="val_error"></div>

	  <label for="lname" class="formText" >Email*</label>
    <input type="text" id="email" name="email" placeholder="Email.." required>
    <div id="email_error" class="val_error"></div>

    <label for="Sektion" class="formText" >Sektion*</label>
    <select id="Sektion" name="sektion">
      <option value="Biljonsen">Biljonsen</option>
      <option value="Dansen">Dansen</option>
      <option value="Tåget">Tåget</option>
	  <option value="Administriet">Administriet</option>
    </select>
  
    <input id="submitbutton" type="submit" value="Ansök" name="apply">
    
  </form>
</div>
			
          </main>
        </div>		
</div>
</div>

</div>
<?php
    include('includes/footer.php');
    ?>



</body>
</html>