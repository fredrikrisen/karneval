<div class= "parent">
<div class="box">
		<div class="box wall">
		  <p class="FAQheader">
           Hantera ansökningar
            </p>
            
        <div>
        <form name="hej" method="POST">
        <select name="selectedValue" style="width: 49%">
        <option value="">Välj ett alternativ</option>   
        <option value="anstallning">Hantera ansökningar</option>
        <option value="search">Sök anställda</option>
</select>
<input type="submit" name="select" value="Kör" style="width: 49%"/>    
</form>

<script type="text/javascript">
</script>

<?php
if(isset($_POST['select'])){

switch($_POST['selectedValue']){
case 'anstallning':
    include('studenter/load_ansokningar.php');
break;
case 'search':
include('studenter/load_anstallda.php');
break;
default:
echo '<p class="middle-text">Här kan du hantera ansökningar, anställda och mycket mer. Välj det ni vill göra från menyn och tryck sedan KÖR</p>';
}       
}
?>
        </div>
		</div>		
</div>
</div>