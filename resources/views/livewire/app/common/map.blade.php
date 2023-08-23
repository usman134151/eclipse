<div>
<style>
    #map {
        height: 500px;
    }
    .marker-label {
        color: black;
        padding: 8px;
        border-radius: 5px;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }
</style>
<h3>Mapl</h3>
		<!-- Filters -->
		<div class="row mb-4">
		  <div class="col-lg-3 mb-4 mb-lg-0 position-relative align-self-end">
			<!-- Begin : it will be replaced with livewire module-->
			<svg aria-label="Date" class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
            </svg>
			<input type="" class="form-control form-control-md form-control-date js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
			<!-- End : it will be replaced with livewire module -->
		  </div>
		  <div class="col-lg mb-4 mb-lg-0">
			<label class="form-label-sm" for="address">Address</label>
			<input type="" name="" class="form-control form-control-md" placeholder="Search" id="address">
		  </div>
		  <div class="col-lg mb-4 mb-lg-0">
			<label class="form-label-sm" for="booking_no">Booking No</label>
			<input type="" name="" class="form-control form-control-md" placeholder="Search" id="booking_no">
		  </div>
		  <div class="col-lg mb-4 mb-lg-0">
			<div class="d-flex flex-column -mt-5">
			  <div class="form-check">
				<input class="form-check-input" type="radio" name="MapView" id="LiveView">
				<label class="form-check-label" for="LiveView">
				  Live View
				</label>
			  </div>
			  <div class="form-check">
				<input class="form-check-input" type="radio" name="MapView" id="TodayView">
				<label class="form-check-label" for="TodayView">
				  Today View
				</label>
			  </div>
			  <div class="form-check mb-0">
				<input class="form-check-input" type="radio" name="MapView" id="TomorrowView">
				<label class="form-check-label" for="TomorrowView">
				  Tomorrow View
				</label>
			  </div>
			</div>
		  </div>
		</div>
		<!-- /Filters -->
		<div id="map"></div>

</div>

@push('scripts')
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            document.addEventListener("livewire:load", function() {
                var locations = @json($locations);
                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom:3,
                    center: { lat: 37.7749, lng: -122.4194 }, // Set a default center
                 
                });

                var geocoder = new google.maps.Geocoder();

                for (var i = 0; i < locations.length; i++) {
                    if (locations[i].lat && locations[i].long) {
                        createMarkerWithDetail(map, locations[i]);
                    } else {
                        geocodeAndCreateMarker(geocoder, map, locations[i]);
                    }
                }

            });

            function createMarkerWithDetail(map, location) {
                var latLng = new google.maps.LatLng(location.lat, location.long);

                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map,
                    label: {
                        text: location.title,
                        fontWeight: 'bold',
                        fontSize: '14px',
                        color: '#0000FF',
                    }
                });
               
              //  var content = '<div class="marker-label"><strong>' + location.address + '</strong><br>' + location.detail +
                 //   '</div>';
                var infoWindow = new google.maps.InfoWindow({
                    content: content
                });
               
               
            }
		
            function geocodeAndCreateMarker(geocoder, map, location) {
                geocoder.geocode({
                    address: location.address
                }, function(results, status) {
                    if (status === "OK") {
                        var marker = new google.maps.Marker({
                            position: results[0].geometry.location,
                            map: map,
                            label: {
                                text: location.title,
                                fontWeight: 'bold',
                                fontSize: '14px',
                                color: 'black', // Text color
                            }
                        });
                        

                       // var content = '<a href="https://www.google.com/maps/place/'+location.address+'">View on Google Maps</a>';
					   var content = '<div class="marker-label"><p><strong>Assignment Number: ' + location.title + '</strong></p><p>' + location.service + '</p><p>Address: ' + location.address + '</p><a href="https://www.google.com/maps/place/' + encodeURIComponent(location.address)+'" target="_blank">Get Directions</a>&nbsp;&nbsp;&nbsp; <a  style="float:right;"href="#">Booking Details</a></div>';


                        var infoWindow = new google.maps.InfoWindow({
                            content: content
                        });
                        marker.addListener("click", function() {
                            infoWindow.open(map, marker);
                        });
                       
                    } else {
                        console.error("Geocode was not successful for the following reason: " + status);
                    }
                 

                });
            }
        </script>
        <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key=AIzaSyAANwmAq3UQc8j5GkJgzF9AglzF7XLfPxI&libraries"></script>
    @endpush


