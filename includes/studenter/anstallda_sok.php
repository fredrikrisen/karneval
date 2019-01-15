<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div>
<p>Fyll i fältet nedan för att söka efter anställda</p>
<input style="background: url('../Pictures/LogoMakr_0Jn4aA.png') background-position:5px 5px" type="text" name="search_text" id="search_text" placeholder="Skriv in här vad ni söker efter..." class="form_controll"/>
</div>
<div id="result"></div>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"studenter/anstallda_list.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>