<div >
    
    {{-- <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="content-header-title float-start mb-0">Manage Availability</h1>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                      <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
                        <use xlink:href="/css/common-icons.svg#home"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="javascript:void(0)">
                        Manage Availability
                    </a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="card">
        <div class="card-body">
    <div class="row inner-section-segment-spacing">
        <p>Here you can set your default or custom availability to ensure you only receive service requests for dates and times that match your set availability.</p>
      </div>--}}
      <div class="row between-section-segment-spacing"> 
        <div class="d-flex justify-content-between mb-4">
          <div class="d-inline-flex align-items-center gap-4">
              <div class="mb-4 mb-lg-0">
                <button @click="defaultAvailability = true" wire:click="getProviderSchedule"  class="btn btn-outline-primary rounded">Change Default Availability</button>
              </div>
              <div class="mb-4 mb-lg-0">
                  <button @click="specificDateAvailability = true" wire:click="$emit('clear')" class="btn btn-primary rounded">Change Availability For Specific Date</button>
              </div>

              <div class="d-flex justify-content-between ms-5">
                  <div class="d-inline-flex">
                      <div>
                          <label class="form-label text-sm" for="service-data-limit">
                              Service Distance Limit
                          </label>
                          <a href="#" class="mx-3">
                              KM <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
                                <use xlink:href="/css/common-icons.svg#pencil"></use>
                              </svg>
                            </a>
                          <input class="form-control form-control-md" type="" id="service-data-limit" placeholder="search here">
                      </div>
                      <div>
                          <button class="btn btn-primary btn-xs rounded mx-3 mt-4">add</button>
                      </div>
                  </div>
              </div>
          </div>
        
        </div>
      
        <div>
          @livewire('app.common.calendar')
        </div>
      
      </div>
    {{-- </div>
    </div> --}}
      {{-- @include('panels.common.default-availability') --}}
      {{-- @include('panels.common.specific-date-availibility') --}}
      
</div>
