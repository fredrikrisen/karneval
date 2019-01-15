<!DOCTYPE html>
<?php
    include('includes/headUnderpage.php');
    include('includes/connect.php');
    ?>
  <body>
  <?php
    include('includes/header.php');
    ?>
    
    <?php
    include('includes/nav.php');
    ?>

<div class= "parent">
<div class="box">
		<div class="box wall" style="overflow:auto; padding: 5px">
          <main>
		  <p class="FAQheader">
           Reservera biljetter
            </p>
            <?php
            include('includes/booking/kategorier.php');
            ?>
            </p>
		
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