<div>
<h3>Map</h3>
		<!-- Filters -->
		<div class="row mb-4">
		  <div class="col-lg-3 mb-4 mb-lg-0 position-relative align-self-end">
			<!-- Begin : it will be replaced with livewire module-->
			<svg class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
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
		<!-- Map -->
		  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96779.59535015929!2d-74.00126600000002!3d40.710039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1676478925644!5m2!1sen!2sus" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
		<!-- /Map -->

</div>
