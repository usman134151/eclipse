<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">
						Dashboard
					</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="/" title="Go to Dashboard" aria-label="Go to Dashboard">
									<svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23">
										<use xlink:href="/css/common-icons.svg#home"></use>
									</svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">
									Dashboard
								</a>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row mb-5">
	<ul class="d-grid 2xl:grid-cols-6 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 list-unstyled mb-5" id="myTab" role="tablist">
	  <li class="" role="presentation">
		<a class="dashborad-block active" id="calendar-tab" data-bs-toggle="tab" data-bs-target="#calendar-tab-pane" type="button" role="tab" aria-controls="calendar-tab-pane" aria-selected="true">
		  <div class="text-center block-text">Calendar</div>
		  <div class="text-center block-icon">
			<svg class="fill" width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use xlink:href="/css/customer.svg#calendar-icon"></use>
            </svg>
		  </div>
		  <div>
			<div class="text-center block-number">22</div>
		  </div>
		</a>
	  </li>
	  <li class="" role="presentation">
		<a class="dashborad-block" id="assignments-tab" data-bs-toggle="tab" data-bs-target="#assignments-tab-pane" type="button" role="tab" aria-controls="assignments-tab-pane" aria-selected="false" wire:click="selectTab(2)">
		  <div class="text-center block-text">Assignments</div>
		  <div class="text-center block-icon">
			<svg class="fill" width="54" height="61" viewBox="0 0 54 61" fill="none" xmlns="http://www.w3.org/2000/svg">
              <use xlink:href="/css/customer.svg#scheduled-services-icon"></use>
            </svg>
		  </div>
		  <div>
			<div class="text-center block-number">150</div>
		  </div>
		</a>
	  </li>
	  <li class="" role="presentation">
		<a class="dashborad-block" id="availability-tab" data-bs-toggle="tab" data-bs-target="#availability-tab-pane" type="button" role="tab" aria-controls="availability-tab-pane" aria-selected="false">
		  <div class="text-center block-text">Availability</div>
		  <div class="text-center block-icon">
			<svg class="fill icon-availability" height="" viewBox="0 0 1440 809.999993" fill="none" xmlns="http://www.w3.org/2000/svg">
	         <use xlink:href="/css/customer.svg#submit-service-icon"></use>
		</svg>
		</div>
		  <div>
			<div class="text-center block-number">10</div>
		  </div>
		</a>
	  </li>
	  <li class="" role="presentation">
		<a class="dashborad-block" id="map-tab" data-bs-toggle="tab" data-bs-target="#map-tab-pane" type="button" role="tab" aria-controls="map-tab-pane" aria-selected="false">
		  <div class="text-center block-text">Map</div>
		  <div class="text-center block-icon">
			<svg class="stroke" width="54" height="61" viewBox="0 0 60 68" fill="none" xmlns="http://www.w3.org/2000/svg">
             <use xlink:href="/css/customer.svg#notification-icon"></use>
            </svg>
		  </div>
		  <div>
			<div class="text-center block-number">15</div>
		  </div>
		</a>
	  </li>
	  <li class="" role="presentation">
		<a class="dashborad-block" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab" aria-controls="notifications-tab-pane" aria-selected="false">
		  <div class="text-center block-text">Notifications</div>
		  <div class="text-center block-icon">
			<svg class="fill" width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
             <use xlink:href="/css/customer.svg#myprofile"></use>
            </svg>
		  </div>
		  <div>
			<div class="text-center block-number">50</div>
		  </div>
		</a>
	  </li>
	  <li class="" role="presentation">
		<a class="dashborad-block" id="navigator-tab" data-bs-toggle="tab" data-bs-target="#navigator-tab-pane" type="button" role="tab" aria-controls="navigator-tab-pane" aria-selected="false">
		  <div class="text-center block-text">Navigator</div>
		  <div class="text-center block-icon">
			<svg class="stroke" width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
				<use xlink:href="/css/common-icons.svg#navigator"></use>
			   </svg>
		  </div>
		  <div>
			<div class="text-center block-number">10</div>
		  </div>
		</a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="calendar-tab-pane" role="tabpanel" aria-labelledby="calendar-tab" tabindex="0">
		<h3>Calendar</h3>
		<!-- Filters 
        <div class="d-flex justify-content-start gap-4 mb-4">
          <div class="row g-0">
            <div class="position-relative col-12 col-lg-auto px-lg-1 mb-2 mb-lg-0">
              Begin : it will be replaced with livewire module
              <svg class="icon-date sm cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
              </svg>
              <div class="col-12 col-lg-auto">
              <input type="" class="form-control form-control-sm js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
               End : it will be replaced with livewire module 
              </div>
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
        /Filters -->
		@if($tabNumber==1)
		<x-advancefilters/>
		@livewire('app.common.calendar')
		@endif
	  </div>
	  <div class="tab-pane fade" id="assignments-tab-pane" role="tabpanel" aria-labelledby="assignments-tab" tabindex="0">
			<h2 class="text-dark">Assignment List</h2>
			
			<!-- BEGIN: Filters -->
      <div class="d-flex flex-lg-row flex-column justify-content-start gap-4 mb-5">
        <div class="row g-0">
          <div class="position-relative col-12 col-lg-auto px-lg-1 mb-2 mb-lg-0">
            <!-- Begin : it will be replaced with livewire module-->
            
			<svg class="icon-date sm cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
            </svg>
            <div class="col-12 col-lg-auto">
            <input type="" class="form-control form-control-sm js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
            <!-- End : it will be replaced with livewire module -->
            </div>
          </div>
        </div>
        <div class="row g-0">
          <div class="mb-2 mb-lg-0 col-lg-auto col-12 px-1">
            <button type="button" class="btn btn-xs w-100 btn-inactive rounded">Today</button>
          </div>
          <div class="mb-2 mb-lg-0 col-lg-auto col-6 px-1">
            <button type="button" class="btn btn-xs w-100 btn-inactive rounded">Upcoming</button>
          </div>
          <div class="mb-2 mb-lg-0 col-lg-auto col-6 px-1">
            <button type="button" class="btn btn-xs w-100 btn-inactive active rounded">Unassigned</button>
          </div>
          <div class="mb-2 mb-lg-0 col-lg-auto col-6 px-1">
            <button type="button" class="btn btn-xs w-100 btn-inactive rounded">Previous</button>
          </div>
          <div class="mb-2 mb-lg-0 col-lg-auto col-6 px-1">
            <button type="button" class="btn btn-xs w-100 btn-inactive rounded">Cancelled</button>
          </div>
        </div>
      
      </div>
	 
      <!-- END: Filters -->

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
<style>
.tab-content>.active {
    display: contents !important;
}

</style>
<script>
	function updateVal(attrName,val){
	
		Livewire.emit('updateVal', attrName, val);

	}
</script>