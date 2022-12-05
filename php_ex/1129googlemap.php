﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--Begin jquery cdn-->
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <!--End jquery cdn-->
  

  
  
  <script>
  	
	$(document).ready(function () {
    
	});
	  	
  </script>
  
  <title>Document</title>
</head>
<body>
 
 
  <div id="map" style="width: 100%; height: 400px;"></div>



	<script>
	   window.initMap = function () {
	   		var mulzoo = { lat: 35.24377972172462, lng: 129.08768768998323 }
			  const map = new google.maps.Map(document.getElementById("map"), {
			    center: mulzoo,
			    zoom: 17,
	  	  });
	  	  
			  var mainMarker = new google.maps.Marker({
			  position: mulzoo,
			  map: map,
			  label: "물주",
	      icon: {
	        url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
	        labelOrigin: new google.maps.Point(15,-10),
	        anchor: new google.maps.Point(10,32)
	      }
			});
		 };
	</script> 

	<!--key= 뒤에 있는 ? 자리에 본인의 google api key를 붙여 넣기 해야 아래 예제를 실행할 수 있다.-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDw3KoVMUwZom-lMgkHnZTMS7yjBxVrCCk&callback=initMap"></script>
<style></style>
</body>

</html>