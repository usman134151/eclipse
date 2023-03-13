<div>
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="col-6 col-lg-auto px-lg-1 px-1 mb-2 mb-lg-0">
              <select class="form-select form-select-sm rounded bg-secondary text-white rounded" aria-label="Advance Filter" id="show_status">
                <option>Advance Filter</option>
              </select>
            </div>
            <div class="col-6 col-lg-auto px-lg-1 px-1 mb-2 mb-lg-0">
              <button type="button" class="btn btn-xs w-100 btn-outline-dark rounded">Clear all</button>
            </div>
          </div>

        </div>
        <!-- /Filters -->
		@livewire('app.common.calendar')
		{{-- <div>
		  <img src="/html-prototype/images/temp/img-placeholder-calendar.png" class="w-100" alt="Dashboard Calender"/>
		</div> --}}
	  </div>
	  <div class="tab-pane fade" id="assignments-tab-pane" role="tabpanel" aria-labelledby="assignments-tab" tabindex="0">
		@livewire('app.common.bookings.booking-list')
	  </div>
	  <div class="tab-pane fade" id="availability-tab-pane" role="tabpanel" aria-labelledby="availability-tab" tabindex="0">
		@livewire('app.common.availibility')
	  </div>
	  <div class="tab-pane fade" id="map-tab-pane" role="tabpanel" aria-labelledby="map-tab" tabindex="0">
		@livewire('app.common.map')
	  </div>
	  <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab" tabindex="0">
		@livewire('app.common.notifications')
	  </div>
	  <div class="tab-pane fade" id="navigator-tab-pane" role="tabpanel" aria-labelledby="navigator-tab" tabindex="0">
		@livewire('app.common.navigator')
	  </div>
	</div>
</div>
