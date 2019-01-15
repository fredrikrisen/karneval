<!--boka Spex-->

<div class="category-box" id="spex_box" style="float: left">
<h3 class="cat_header">
Spexet
</h3>
<p class="Ticketp" style="width: 90%">
I årets uppsättning stiftas bekantskap med Imaginalskogen och en naken gammal John Bauersk vän, Näcken! Kanske kommer även en och annan buske uppenbara sig…
</p>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="forwardSpex()">Boka biljetter</button>
<p class="Ticketp" style="width: 90%"><?php include('spexet_antal_biljetter.php') ?>
</p>
</div>

<!--biljetter Spex-->

<div class="category-box" id="spex_biljetter" style="float: left; height: 492px">
<h3 class="cat_header">
Spexet
</h3>
<p class="Ticketp" style="width: 90%">
Välj antalet biljetter du vill reservera och tryck sedan boka. En person kan reservera 5 biljetter.
</p>
    <input type="text" id="spex_fname" placeholder="Förnamn*"></input>
    <input type="text" id="spex_lname" placeholder="Efternamn*"></input>
    <input type="text" id="spex_email" placeholder="Email*"></input>
<p class="Ticketp" style="width: 25%">Välj antalet biljetter:</p>
<select id="spex_antal">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>

</select>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="backSpex()">Tillbaka</button>
<button style="width: 20%" class="btn_modal" id="btn_book_spex" type="button">Boka</button>
<p class="Ticketp" id="spex_error" style="width: 70%">
</p>
</div>


<!--boka Opera-->

<div class="category-box" id="opera_box" style="float: right">
<h3 class="cat_header">
Operan
</h3>
<p class="Ticketp" style="width: 90%">
Tradition är viktigt, inte minst inom opera! I denna moderna skildring sätts en familjs gemenskap på spel när deras traditionsenliga tacokväll går i stöpet. Följ med deras fredagskväll för att rädda helgen!
</p>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="forwardOpera()">Boka biljetter</button>
<p class="Ticketp" style="width: 80%">Antal biljetter kvar: 200
</p>
</div>

<!--biljetter Opera-->

<div class="category-box" id="opera_biljetter" style="float: right; height: 492px; display:none">
<h3 class="cat_header">
Operan
</h3>
<p class="Ticketp" style="width: 90%">
Välj antalet biljetter du vill reservera och tryck sedan boka. En person kan reservera 5 biljetter.
</p>
    <input type="text" id="opera_fname" placeholder="Förnamn*"></input>
    <input type="text" id="opera_lname" placeholder="Efternamn*"></input>
    <input type="text" id="opera_email" placeholder="Email*"></input>
<p class="Ticketp" style="width: 25%">Välj antalet biljetter:</p>
<select id="opera_antal">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>

</select>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="backOpera()">Tillbaka</button>
<button style="width: 20%" class="btn_modal" type="button" id="btn_book_opera">Boka biljetter</button>
<p class="Ticketp" id="opera_error" style="width: 40%">
</p>
</div>

<!--boka cirkus-->

<div class="category-box" id="cirkus_box" style="float: left">
<h3 class="cat_header">
Cirkusen
</h3>
<p class="Ticketp" style="width: 90%">
En studentikos - och mycket generös - tolkning av konceptet Cirkus, där storheten i framträdandena inte grundar sig så mycket i talang, som i avsaknaden av den samma. En cirkusparodi du sent lär glömma!
</p>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="forwardCirkus()">Boka biljetter</button>
<p class="Ticketp" style="width: 90%">Antal biljetter kvar: 200
</p>
</div>

<!--biljetter cirkus-->
<div class="category-box" id="cirkus_biljetter" style="float: left; height: 492px; display:none">
<h3 class="cat_header">
Cirkusen
</h3>
<p class="Ticketp" style="width: 90%">
Välj antalet biljetter du vill reservera och tryck sedan boka. En person kan reservera 5 biljetter.
</p>
    <input type="text" id="cirkus_fname" placeholder="Förnamn*"></input>
    <input type="text" id="cirkus_lname" placeholder="Efternamn*"></input>
    <input type="text" id="cirkus_email" placeholder="Email*"></input>
<p class="Ticketp" style="width: 25%">Välj antalet biljetter:</p>
<select id="cirkus_antal">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>

</select>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="backCirkus()">Tillbaka</button>
<button style="width: 20%" class="btn_modal" id="btn_book_cirkus" type="button">Boka biljetter</button>
<p class="Ticketp" id="cirkus_error" style="width: 40%">
</p>
</div>







<!--boka Barnevalen-->

<div class="category-box" id="barneval_box" style="float: right">
<h3 class="cat_header">
Barnevalen
</h3>
<p class="Ticketp" style="width: 90%">
Farmors dator har fått virus! Hon och hennes supersmarta barnbarn reser in i datorn och hjälper musen, minneskortet m.fl att bli av med det elaka viruset.
</p>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="forwardBarneval()">Boka biljetter</button>
<p class="Ticketp" style="width: 90%">Antal biljetter kvar: 200
</p>
</div>


<!--biljetter barneval-->

<div class="category-box" id="barneval_biljetter" style="float: right; height: 492px; display:none">
<h3 class="cat_header">
Barnevalen
</h3>
<p class="Ticketp" style="width: 90%">
Välj antalet biljetter du vill reservera och tryck sedan boka. En person kan reservera 5 biljetter.
</p>
    <input type="text" id="barneval_fname" placeholder="Förnamn*"></input>
    <input type="text" id="barneval_lname" placeholder="Efternamn*"></input>
    <input type="text" id="barneval_email" placeholder="Email*"></input>
<p class="Ticketp" style="width: 25%">Välj antalet biljetter:</p>
<select id="barneval_antal">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>

</select>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="backBarneval()">Tillbaka</button>
<button style="width: 20%" class="btn_modal" id="btn_book_barneval" type="button" >Boka biljetter</button>
<p class="Ticketp" id="barneval_error" style="width: 40%">
</p>
</div>

<!--SHOWEN  BILJETTBOX, MÅSTE LIGGA INNAN KABAREN-->

<div class="category-box" id="showen_biljetter" style="float: right; height: 492px; display:none">
<h3 class="cat_header">
Showen
</h3>
<p class="Ticketp" style="width: 90%">
Välj antalet biljetter du vill reservera och tryck sedan boka. En person kan reservera 5 biljetter.
</p>
    <input type="text" id="show_fname" placeholder="Förnamn*"></input>
    <input type="text" id="show_lname" placeholder="Efternamn*"></input>
    <input type="text" id="show_email" placeholder="Email*"></input>
<p class="Ticketp" style="width: 25%">Välj antalet biljetter:</p>
<select id="show_antal">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>

</select>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="backShowen()">Tillbaka</button>
<button style="width: 20%" class="btn_modal" id="btn_book_show" type="button" >Boka biljetter</button>
<p class="Ticketp" id="show_error" style="width: 40%">
</p>
</div>


<!--kabaren-->



<div class="category-box" id="kabaren_box" style="float: left">
<h3 class="cat_header">
Kabarén
</h3>
<p class="Ticketp" style="width: 90%">
Välkomna till den bisarra världen i Kabarén, ett av stornöjena på Karnevalen! Här hittar ni en sagolik kombination av show och burlebuskis - ungefär som en ICA Basic version av Dantes nio nivåer av helvetet. Så ladda upp med karnevölen, lämna jantelagen hemma och njut av Kabarén!
</p>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="forwardKabaren()">Boka biljetter</button>
<p class="Ticketp" style="width: 90%">Antal biljetter kvar: 200
</p>
</div>


<div class="category-box" id="kabaren_biljetter" style="float: left; height: 492px; display:none">
<h3 class="cat_header">
Kabarén
</h3>
<p class="Ticketp" style="width: 90%">
Välj antalet biljetter du vill reservera och tryck sedan boka. En person kan reservera 5 biljetter.
</p>
    <input type="text" id="kabaren_fname" placeholder="Förnamn*"></input>
    <input type="text" id="kabaren_lname" placeholder="Efternamn*"></input>
    <input type="text" id="kabaren_email" placeholder="Email*"></input>
<p class="Ticketp" style="width: 25%">Välj antalet biljetter:</p>
<select id="kabaren_antal">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>

</select>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="backKabaren()">Tillbaka</button>
<button style="width: 20%" class="btn_modal" id="btn_book_kabaren" type="button">Boka biljetter</button>
<p class="Ticketp" style="width: 40%">
</p>
</div>



<!--showen-->


<div class="category-box" id="showen_box" style="float: right">
<h3 class="cat_header">
Showen
</h3>
<p class="Ticketp" style="width: 90%">
I Showen kittlas alla era sinnen i en musikal som tar er in i det undermedvetna. I Tegnérs matsalar dukas en trerätters middag upp som ni avnjuter under en föreställning ni sent ska glömma.
</p>
<button style="width: 20%" class="btn_modal" id="btn_modal" type="button" onclick="forwardShowen()">Boka biljetter</button>
<p class="Ticketp" style="width: 90% float: right">Antal biljetter kvar: 200
</p>
</div>



<script type="text/javascript">
function forwardSpex() {
  document.getElementById("spex_box").style.display = "none";
  document.getElementById("spex_biljetter").style.display = "block";
  document.getElementById("cirkus_box").style.display = "none";

}
function backSpex() {
  document.getElementById("spex_box").style.display = "block";
  document.getElementById("spex_biljetter").style.display = "none";
  document.getElementById("cirkus_box").style.display = "block";

}
function forwardOpera() {
  document.getElementById("barneval_box").style.display = "none";
  document.getElementById("opera_biljetter").style.display = "block";
  document.getElementById("opera_box").style.display = "none";
  document.getElementById("showen_biljetter").style.display = "none";
  document.getElementById("showen_box").style.display = "block";
  document.getElementById("barneval_biljetter").style.display = "none";

}
function backOpera() {
  document.getElementById("barneval_box").style.display = "block";
  document.getElementById("opera_biljetter").style.display = "none";
  document.getElementById("opera_box").style.display = "block";

}
function forwardCirkus() {
  document.getElementById("kabaren_box").style.display = "none";
  document.getElementById("cirkus_biljetter").style.display = "block";
  document.getElementById("cirkus_box").style.display = "none";

}
function backCirkus() {
  document.getElementById("kabaren_box").style.display = "block";
  document.getElementById("cirkus_biljetter").style.display = "none";
  document.getElementById("cirkus_box").style.display = "block";

}
function forwardBarneval() {
  document.getElementById("showen_box").style.display = "none";
  document.getElementById("barneval_biljetter").style.display = "block";
  document.getElementById("barneval_box").style.display = "none";

}
function backBarneval() {
  document.getElementById("barneval_box").style.display = "block";
  document.getElementById("barneval_biljetter").style.display = "none";
  document.getElementById("showen_box").style.display = "block";

}
function forwardKabaren() {
  document.getElementById("cirkus_box").style.display = "none";
  document.getElementById("kabaren_biljetter").style.display = "block";
  document.getElementById("kabaren_box").style.display = "none";

}
function backKabaren() {
  document.getElementById("cirkus_box").style.display = "block";
  document.getElementById("kabaren_biljetter").style.display = "none";
  document.getElementById("kabaren_box").style.display = "block";

}
function forwardShowen() {
  document.getElementById("barneval_box").style.display = "none";
  document.getElementById("showen_biljetter").style.display = "block";
  document.getElementById("showen_box").style.display = "none";
  document.getElementById("opera_biljetter").style.display = "none";
  document.getElementById("opera_box").style.display = "block";

}
function backShowen() {
  document.getElementById("barneval_box").style.display = "block";
  document.getElementById("showen_biljetter").style.display = "none";
  document.getElementById("showen_box").style.display = "block";

}

    
  $(document).on('click', '#btn_book_spex', function(){  
        var fname=document.getElementById("spex_fname").value;
        var lname=document.getElementById("spex_lname").value;
        var email=document.getElementById("spex_email").value;
        var numberOfTickets =document.getElementById("spex_antal").value;
        var ticketType="Spexet";

      if(fname!="" && lname!="" && email!="" && numberOfTickets!="") {
        $.ajax({
    type: "POST",
    url: "includes/booking/reservera_biljetter.php",
    data: {fname:fname, lname:lname, email:email, numberOfTickets:numberOfTickets, ticketType:ticketType},
    success: function(data) {

        $("#spex_error").text(data);


    }
}) 
      }else{
        $("#spex_error").text("Alla fälten måste fyllas i");

      }
        

       });

$(document).on('click', '#btn_book_opera', function(){  
        var fname=document.getElementById("opera_fname").value;
        var lname=document.getElementById("opera_lname").value;
        var email=document.getElementById("opera_email").value;
        var numberOfTickets =document.getElementById("opera_antal").value;
        var ticketType="Operan";
        console.log("hej");

      if(fname!="" && lname!="" && email!="" && numberOfTickets!="") {
        $.ajax({
    type: "POST",
    url: "includes/booking/reservera_biljetter.php",
    data: {fname:fname, lname:lname, email:email, numberOfTickets:numberOfTickets, ticketType:ticketType},
    success: function(data) {

        $("#opera_error").text(data);


    }
}) 
      }else{
        $("#opera_error").text("Alla fälten måste fyllas i");

      }
        

       });

$(document).on('click', '#btn_book_cirkus', function(){  
        var fname=document.getElementById("cirkus_fname").value;
        var lname=document.getElementById("cirkus_lname").value;
        var email=document.getElementById("cirkus_email").value;
        var numberOfTickets =document.getElementById("cirkus_antal").value;
        var ticketType="Cirkusen";
        console.log("hej");

      if(fname!="" && lname!="" && email!="" && numberOfTickets!="") {
        $.ajax({
    type: "POST",
    url: "includes/booking/reservera_biljetter.php",
    data: {fname:fname, lname:lname, email:email, numberOfTickets:numberOfTickets, ticketType:ticketType},
    success: function(data) {

        $("#cirkus_error").text(data);


    }
}) 
      }else{
        $("#cirkus_error").text("Alla fälten måste fyllas i");

      }
        

       });

$(document).on('click', '#btn_book_barneval', function(){  
        var fname=document.getElementById("barneval_fname").value;
        var lname=document.getElementById("barneval_lname").value;
        var email=document.getElementById("barneval_email").value;
        var numberOfTickets =document.getElementById("barneval_antal").value;
        var ticketType="Barnevalen";
        console.log("hej");

      if(fname!="" && lname!="" && email!="" && numberOfTickets!="") {
        $.ajax({
    type: "POST",
    url: "includes/booking/reservera_biljetter.php",
    data: {fname:fname, lname:lname, email:email, numberOfTickets:numberOfTickets, ticketType:ticketType},
    success: function(data) {

        $("#barneval_error").text(data);


    }
}) 
      }else{
        $("#barneval_error").text("Alla fälten måste fyllas i");

      }
        

       });
$(document).on('click', '#btn_book_show', function(){  
        var fname=document.getElementById("show_fname").value;
        var lname=document.getElementById("show_lname").value;
        var email=document.getElementById("show_email").value;
        var numberOfTickets =document.getElementById("show_antal").value;
        var ticketType="Showen";
        console.log("hej");

      if(fname!="" && lname!="" && email!="" && numberOfTickets!="") {
        $.ajax({
    type: "POST",
    url: "includes/booking/reservera_biljetter.php",
    data: {fname:fname, lname:lname, email:email, numberOfTickets:numberOfTickets, ticketType:ticketType},
    success: function(data) {

        $("#show_error").text(data);


    }
}) 
      }else{
        $("#show_error").text("Alla fälten måste fyllas i");

      }
        

});
$(document).on('click', '#btn_book_kabaren', function(){  
        var fname=document.getElementById("kabaren_fname").value;
        var lname=document.getElementById("kabaren_lname").value;
        var email=document.getElementById("kabaren_email").value;
        var numberOfTickets =document.getElementById("kabaren_antal").value;
        var ticketType="Kabaren";
        console.log("hej");

      if(fname!="" && lname!="" && email!="" && numberOfTickets!="") {
        $.ajax({
    type: "POST",
    url: "includes/booking/reservera_biljetter.php",
    data: {fname:fname, lname:lname, email:email, numberOfTickets:numberOfTickets, ticketType:ticketType},
    success: function(data) {

        $("#kabaren_error").text(data);


    }
}) 
      }else{
        $("#kabaren_error").text("Alla fälten måste fyllas i");

      }
        

});
</script>