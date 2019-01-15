<div class= "parent">
<div class="box">
		<div class="box wall">
		  <p class="FAQheader">
           Hantera nyheter
            </p>
            <div class="asdf">
            
                
                <label for="fname" class="formText">Utför ändringar av texten här</label>
                <textarea style="width: 100%; height: 300px; border: 2px solid #ffccdad5; border-radius: 4px; resize: none;" id="frontpage_text" type="text" name="nyhet"><?php include('get_framsida.php');?></textarea>
                
                <button class="sub" type="submit" id="update_frontpage" name="nyheter-submit">Uppdatera text</button>
                <p class="Ticketp" id="feedback"></p>
                <p class="Ticketp" style="float: right;" id="charNum"></p>
            </div>
        </div>
        
    </div>
</div>
<script>
$(document).on('click', '#update_frontpage', function(){  
        var text=document.getElementById("frontpage_text").value;
        
if(text.length < 600){

      if(text!="") {
        $.ajax({
    type: "POST",
    url: "nyheter/framsida_update.php",
    data: {text},
    success: function(data) {

        $("#feedback").text(data);


    }
}) 
      }else{
        $("#feedback").text("Alla fälten måste fyllas i");

      }
    }else{
        $("#feedback").text("Du har överskridit antalet tecken");

    }
        

       });
       $(document).ready(function(){
    var text = document.getElementById("frontpage_text").value.length;
    var total = 600 - text;
    $('#charNum').text(total + ' tecken kvar');
    console.log(text);


});

$('#frontpage_text').keyup(function () {
  var max = 600;
  var len = $(this).val().length;
  if (len >= max) {
    $('#charNum').text(' du har överskridit antal tecken');
  } else {
    var char = max - len;
    $('#charNum').text(char + ' tecken kvar');
  }
});

</script>