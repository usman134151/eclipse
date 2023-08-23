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
<h3>Map</h3>
		<!-- Filters -->

    <div class="col-sm">
    <button class="btn btn-secondary btn-sm reset-button" wire:click="resetDate">Reset</button>
    </div>
		<div class="row mb-4">
		  <div class="col-lg-3 mb-4 mb-lg-0 position-relative align-self-end">
			<!-- Begin : it will be replaced with livewire module-->
			<svg aria-label="Date" class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
            </svg>
            <input type="" class="form-control form-control-md form-control-date js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date" id="selecteddate">
			<!-- End : it will be replaced with livewire module -->

			<!-- End : it will be replaced with livewire module -->
		  </div>
      <div class="col-lg mb-4 mb-lg-0">
            <label class="form-label" for="supervisor">Address</label>
            <select class="form-select select2 address">
            @if(!empty($selectedAddress))
            <option>{{$selectedAddress}}</option>
            @else
            <option value="0">Address</option>
            @endif
            @foreach($addressList as $address)
                    <option value="{{$address->full_address }}">{{$address->full_address}}</option>   
                @endforeach
            </select>
        </div>
      <div class="col-lg mb-4 mb-lg-0">
            <label class="form-label" for="supervisor">Bookings</label>
            <select class="form-select select2 booking" id="BookingID" name="BookingID"  wire:click="ChangeFilter($event.target.value,'Booking')">
            @if(!empty($selectedBooking))
            <option>{{$selectedBooking}}</option>
            @else
            <option value="0">Select Booking</option>
            @endif
              
                @foreach($bookingList as $list)
                    <option value="{{$list->id}}">{{$list->booking_number}}</option>   
                @endforeach
            </select>
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
		<div id="map"  wire:ignore></div>

</div>

<script type="text/javascript"> 

       
               document.addEventListener('livewire:load', function () {
               
                var locations = @json($locations);
               
                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 3,
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
            document.addEventListener('livewire:map', function (e) {
              
              var locations = e.detail.locations;
              var center;

              if (locations.length === 0) {
                  center = { lat: 37.7749, lng: -122.4194 };
              } else {
                  center = { lat: 0, lng: 0 };
              }

            
               var map = new google.maps.Map(document.getElementById("map"), {
                   zoom: 2,
                   center:center, // Set a default center
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

                $('.booking').on('change', function (e) {
                   //@this.(e.target.value,'Booking');
                    @this.call('updateVal','Booking', e.target.value); // Trigger the Livewire method
                });
                $('.address').on('change', function (e) {
                   //@this.(e.target.value,'Booking');
                    @this.call('updateVal','Address', e.target.value); // Trigger the Livewire method
                });
              $('.js-single-date').on('apply.daterangepicker', function(ev, picker) {
                        const inputId = $(this).attr('id');
                        const inputValue = $(this).val();
                        // Call the Livewire method to update the value
                        @this.call('updateVal', inputId, inputValue);
                    });
            }
        </script> 


