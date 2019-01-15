<div class= "parent">
<div class="box">
		<div class="box wall">
		  <p class="FAQheader">
           Skicka mail
            </p>
            <div class="asdf">
                <label for="fname" class="formText">Skriv texten i ditt mail här:</label>
                <textarea style="width: 100%; height: 200px; border: 2px solid #ffccdad5; border-radius: 4px; resize: none;" id="mail_text" type="text" name="nyhet"></textarea>
                <select id="mail_sektion" style="width: 100%;">
                <label for="fname" class="formText">Välj sektion för mailutskick*</label>
                <option value="Biljonsen">Biljonsen</option>
                <option value="Dansen">Dansen</option>
                <option value="TÅget">Tåget</option>
                <option value="Administriet">Administriet</option>
                </select>
                <button class="sub" id="btn_mail" name="nyheter-submit">Skicka</button>
                <p class="Ticketp" id="feedback"></p>
            </div>
        </div>    
    </div>
</div>
<script type="text/javascript">
$(document).on('click', '#btn_mail', function(){  
        var sektion=document.getElementById("mail_sektion").value;
        var text=document.getElementById("mail_text").value;
        console.log("hej");

      if(text!="") {
        $.ajax({
        type: "POST",
        url: "mail/mail_send.php",
        data: {sektion, text},
        success: function(data) {

        $("#feedback").text(data);


    }
}) 
      }else{
        $("#feedback").text("Du måste skriva något att skicka");

      }
        

       });
</script>