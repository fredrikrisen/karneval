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
           Tåget
            </p>
		  
            <p class="FAQp">
                    Karnevalståget är det största och absolut äldsta nöjet i Lundakarnevalen, 
                    ett flera km långt tåg fyllt med fest, glädje och humor! Tåget rullar norrut från Lundagård kl 13 
                    under lördag och söndag, 19-20 maj. 
                    Med sina 20 vagnar plus mellanekipage kommer det ta drygt två timmar för den att göra sitt varv moturs genom Lund!
            </p>
			 <p class="FAQh">
            </p>
			 <p class="FAQp">
                    Karnevalståget rullar nu för första gången på en ny bana. 
                    Karnevalståget är nämligen inte som andra tåg, vi är rälsaverta! Så på grund av arbetet med spårvagnen
                     kommer vi i år från Allhelgonakyrkan ta
                     Bredgatan och s:t Petri Kyrkogata ner till Clemenstorget, istället för att gå längs s:t Laurentiigatan.
            </p>
            <p class="FAQp">
                
                    Karta över tågvägen
                </p>
                <div style="height: 400px; width: 90%; margin-left: 5%;" id="map"></div>        


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
		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 15,
				center: {
					lat: 55.7055283,
					lng: 13.1925465
				},
				styles: [{
						featureType: 'poi',
						elementType: 'labels.text',
						stylers: [{
							visibility: 'off'
						}]
					},
					{
						featureType: 'poi.business',
						stylers: [{
							visibility: 'off'
						}]
					},
					{
						featureType: 'road',
						elementType: 'labels.icon',
						stylers: [{
							visibility: 'off'
						}]
					},
					{
						featureType: 'transit',
						stylers: [{
							visibility: 'off'
						}]
					}
				]
			});


			//Define and draw plyline
			var flightPlanCoordinates = [{
					lat: 55.703609,
					lng: 13.194185
				},
				{
					lat: 55.703639,
					lng: 13.195355
				},
				{
					lat: 55.703029,
					lng: 13.196524
				},
				{
					lat: 55.702025,
					lng: 13.196857
				},
				{
					lat: 55.701983,
					lng: 13.195119
				},
				{
					lat: 55.702333,
					lng: 13.192812
				},
				{
					lat: 55.703851,
					lng: 13.192640
				},
				{
					lat: 55.704214,
					lng: 13.187823
				},
				{
					lat: 55.706807,
					lng: 13.187587
				},
				{
					lat: 55.706799,
					lng: 13.188423
				},
				{
					lat: 55.706190,
					lng: 13.192569
				},
				{
					lat: 55.709179,
					lng: 13.192825
				},
				{
					lat: 55.709022,
					lng: 13.193770
				},
				{
					lat: 55.707910,
					lng: 13.196409
				},
				{
					lat: 55.707614,
					lng: 13.196387
				},
				{
					lat: 55.707426,
					lng: 13.196570
				},
				{
					lat: 55.704894,
					lng: 13.194853
				},
				{
					lat: 55.703630,
					lng: 13.194252
				},
			];

			var parade = new google.maps.Polyline({
				path: flightPlanCoordinates,
				geodesic: true,
				strokeColor: '#FBBCCC',
				strokeOpacity: 1,
				strokeWeight: 6
			});

			//Define and draw area
			var triangleCoords = [{
					lat: 55.707400,
					lng: 13.195879
				},
				{
					lat: 55.707327,
					lng: 13.196351
				},
				{
					lat: 55.706117,
					lng: 13.195643
				},
				{
					lat: 55.706086,
					lng: 13.195753
				},
				{
					lat: 55.705754,
					lng: 13.195539
				},
				{
					lat: 55.705612,
					lng: 13.196193
				},
				{
					lat: 55.704885,
					lng: 13.195903
				},
				{
					lat: 55.704365,
					lng: 13.195480
				},
				{
					lat: 55.704305,
					lng: 13.195343
				},
				{
					lat: 55.703647,
					lng: 13.194924
				},
				{
					lat: 55.703623,
					lng: 13.194122
				},
				{
					lat: 55.703818,
					lng: 13.192894
				},
				{
					lat: 55.704004,
					lng: 13.192985
				},
				{
					lat: 55.703797,
					lng: 13.194045
				},
				{
					lat: 55.703943,
					lng: 13.194388
				},
				{
					lat: 55.704203,
					lng: 13.194246
				},
				{
					lat: 55.704502,
					lng: 13.192713
				},
				{
					lat: 55.705987,
					lng: 13.192663
				},
				{
					lat: 55.706096,
					lng: 13.193028
				},
				{
					lat: 55.706111,
					lng: 13.193840
				},
				{
					lat: 55.706794,
					lng: 13.193931
				},
				{
					lat: 55.706767,
					lng: 13.194328
				},
				{
					lat: 55.706571,
					lng: 13.195266
				},
			];

			var area = new google.maps.Polygon({
				paths: triangleCoords,
				strokeColor: '#8A4797',
				strokeOpacity: 0.6,
				strokeWeight: 1,
				fillColor: '#8A4797',
				fillOpacity: 0.35
			});

			area.setMap(map);
			parade.setMap(map);

		}
	</script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO0wLh6w1kRqfRUgDmu5Sil_R03pepSNs&callback=initMap">
	</script>
</html>