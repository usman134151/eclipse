<div >
    
      <div class="row between-section-segment-spacing"> 
        <div class="d-flex justify-content-between mb-4">
          <div class="d-inline-flex align-items-center gap-4">
              <div class="mb-4 mb-lg-0">
                <button @click="defaultAvailability = true" wire:click="getProviderSchedule"  class="btn btn-outline-primary rounded">Change Default Availability</button>
              </div>
              <div class="mb-4 mb-lg-0">
                  <button @click="specificDateAvailability = true" wire:click="$emit('clear')" class="btn btn-primary rounded">Change Availability For Specific Date</button>
              </div>
              <div class="mb-4 mb-lg-0">
                  <button @click="timeOffSlots = true" wire:click="$emit('clear')" class="btn btn-primary rounded">Submit Time Off</button>
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
      
          @livewire('app.common.calendar',['model_id'=>$provider_id,'model_type'=>3,'providerProfile'=>true])
      
      </div>
    
</div>
