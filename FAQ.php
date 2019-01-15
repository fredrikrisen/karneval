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
<div class= "parent">
<div class="box">
		<div class="box wall">
          <main>
		  <p class="FAQheader">
           FAQ
            </p>
		   <p class="FAQh">
           Vad är lundakarnevalen?
            </p>
            <p class="FAQp">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Ut sagittis commodo iaculis. Nunc
              gravida nulla arcu, eget consectetur diam egestas nec. Aliquam
            </p>
			 <p class="FAQh">
             Varför är det den bästa karnevalen i världen?
            </p>
			 <p class="FAQp">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Ut sagittis commodo iaculis. Nunc
              gravida nulla arcu, eget consectetur diam egestas nec. Aliquam
            </p>
			<p class="FAQh">
             Varför är allting rosa på denna hemsidan?
            </p>
			 <p class="FAQp">
              Lorem ipsum dolor sit amet,
              consectetur adipiscing elit. Ut sagittis commodo iaculis. Nunc
              gravida nulla arcu, eget consectetur diam egestas nec. Aliquam
            </p>
            <p class="FAQh">
            Skriv en egen fråga
            </p>
          <div style="height: 500px; width: 40%; margin-left: 8px; float: left;">
                <label class="formText">Namn*</label>
                <input type="text" id="faq_fname" style="width: 100%;"></input>
                <label class="formText">Skriv din fråga här: </label>
                <textarea style="width: 99%; height: 200px; border: 2px solid #ffccdad5; border-radius: 4px; resize: none;" id="faq_text" type="text" name="nyhet"></textarea>
                
                <button class="sub" id="btn_faq" name="nyheter-submit">Fråga</button>
                <p class="Ticketp" id="feedback" style="width: 30%"></p>
          </div>
          <div id="faq_q" style="height: 480px; width: 50%; margin-right: 8px; float: right; overflow:auto; background-color: #ffc2d2">
          <?php
            include('includes/connect.php');

            $result = mysqli_query($conn,"SELECT * FROM faq ORDER BY ID DESC LIMIT 10");
            


          	while($row = mysqli_fetch_array($result)) {
            print  '<p class="Ticketp">Namn: ' . $row['fname'] . '</p>';
            print  '<p class="Ticketp">Fråga: ' . $row['faq_text'] . '</p>';
            print  '<p class="Ticketp">Tidpunkt: ' . $row['created_at'] . '</p>';
            print '<br/>';
            if(empty($row['faq_text'])) {
            print 'Ingen data funnen';
            }
    }
    ?>
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
<script>
$(document).on('click', '#btn_faq', function(){  
        var name=document.getElementById("faq_fname").value;
        var text=document.getElementById("faq_text").value;
        console.log("hej");

      if(text!="" && name!="") {
        $.ajax({
        type: "POST",
        url: "includes/faq/faq_send.php",
        data: {name, text},
        success: function(data) {

        $("#feedback").text(data);
        $("#faq_q").load("# #faq_q>*");
        



    }
}) 
      }else{
        $("#feedback").text("Var vänlig fyll i samtliga fält");

      }
        

       });
       </script>
</html>