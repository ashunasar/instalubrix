<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12">
            <!-- Autocomplete location search input --> 
			<div class="form-group">
				<label>Location:</label>
				<input type="text" class="form-control pac-target-input" id="search_input" placeholder="Type address..." autocomplete="off">
				<input type="hidden" id="latitude_input" value="">
				<input type="hidden" id="longitude_input" value="">
			</div>
			
			<!-- Display latitude and longitude -->
			<div class="latlong-view">
				<p><b>Latitude:</b> <span id="latitude_view"></span></p>
				<p><b>Longitude:</b> <span id="longitude_view"></span></p>
			</div>
    	</div>
  	</div>
  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;libraries=places&amp;key=AIzaSyDpW-i7ItGweNpFwt63tLZhjStM_cBoSLg"></script>
  	<script>
var searchInput = 'search_input';

$(document).ready(function () {
	var autocomplete;
	autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
		types: ['geocode'],
		/*componentRestrictions: {
			country: "USA"
		}*/
	});
	
	google.maps.event.addListener(autocomplete, 'place_changed', function () {
		var near_place = autocomplete.getPlace();
		document.getElementById('latitude_input').value = near_place.geometry.location.lat();
		document.getElementById('longitude_input').value = near_place.geometry.location.lng();
		
		document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
		document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
	});
});

$(document).on('change', '#'+searchInput, function () {
	document.getElementById('latitude_input').value = '';
	document.getElementById('longitude_input').value = '';
	
	document.getElementById('latitude_view').innerHTML = '';
	document.getElementById('longitude_view').innerHTML = '';
});
</script>
</body>
</html>