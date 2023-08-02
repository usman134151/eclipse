<div class="row mb-4">
    <div class="col-lg-12">
        <div class="row mb-4">
         
              <div class="col-lg-12">
                <div class="d-lg-flex gap-3 align-items-center mb-3">
                          <div class="col-md-4 col-12">
                              <div>
                                <label class="form-label" for="select-date">
                                  Select Date & Time
                                </label>
                                <div class="position-relative">
                                  <input type="" name="scheduled_date" class="form-control js-single-date" placeholder="MM/DD/YYYY" id="scheduled_date" wire:model.defer="timeslot.scheduled_date">
                                  <svg aria-label="Date" class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
                                                          </svg>
                                    @error('timeslot.scheduled_date')
                                    <span class="d-inline-block invalid-feedback mt-2">
                                      {{ $message }}
                                    </span>
                                  @enderror
                                </div>
                              </div>
                          </div>

                      <div class="col-md-6 col-12 items-center">
                        <div >
                              <label class="form-label" for="select-date">
                                Choose Time
                              </label>
                            <div class="d-flex gap-3">
                                <div class="d-flex flex-column justify-content-between">
                                    <label class="form-label-sm" for="set_start_time">Start Time</label>
                                    <div class="d-flex gap-2">
                                      <div class="time d-flex align-items-center gap-2">
                                            <div>
                                              <input class="form-control form-control-sm text-center hours" id="Days" aria-label="Start Time" name="start_hour" placeholder="" type="" tabindex="" wire:key="duration-0" wire:model.defer="timeslot.from_time_hour" maxlength="2"></div>
                                              <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                              </svg>
                                              <div>
                                                  <input class="form-control form-control-sm text-center  mins" aria-label="Start Minutes" id="Days" name="DisplayToProviders" placeholder="" type="" tabindex="" wire:key="duration-0" wire:model.defer="timeslot.from_time_min" maxlength="2"></div>
                                              </div>
                                            </div>

                                      {{-- </div> --}}
                                    {{-- </div> --}}
                                </div>
                                
                                <div class="d-flex flex-column justify-content-between">
                                    <label class="form-label-sm" for="set_start_time">End Time</label>
                                        <div class="d-flex gap-2">
                                          <div class="time d-flex align-items-center gap-2">
                                              <div>
                                                  <input class="form-control form-control-sm text-center hours" id="hours" aria-label="End Time" name="end_hour" placeholder="" type="" tabindex="" wire:key="duration-0" wire:model.defer="timeslot.to_time_hour" maxlength="2"></div>
                                                  <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                                  </svg>
                                                  <div>
                                                    <input class="form-control form-control-sm text-center  mins" aria-label="End Minutes" id="end_min" name="end_min" placeholder="" type="" tabindex="" wire:key="duration-0" wire:model.defer="timeslot.to_time_min" maxlength="2"></div>
                                                  </div>
                                              </div>
                                            </div>
                                        </div>
                                </div>
                                
                              <div class="d-inline-block invalid-feedback mt-2 " > {{ $errors->first('timeValidation') }}</div>

                          </div>
                      </div>
                </div>
                {{-- <button class="btn btn-primary btn-sm rounded">Submit</button> --}}
              </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <label class="form-label" for="notes">
                    Note
                </label>
                <textarea class="form-control" rows="4"  wire:model.defer="timeslot.notes" id="notes"></textarea>
            </div>
            <div>
                <p>No Bookings Assigned from 11/02/2022 to 11/02/2022</p>
            </div>
        </div>
      <div class="col-12 justify-content-center form-actions d-flex gap-3">
          <button type="button" class="btn btn-outline-dark rounded" x-on:click="specificDateAvailability = !specificDateAvailability">
              Cancel
          </button>
          {{--  --}}
          <button type="submit" class="btn btn-primary rounded" wire:click.prevent="$emit('saveSpecificSlot')" x-on:close-specific-panel.window="specificDateAvailability = !specificDateAvailability">
              Save
          </button>
      </div>

    </div>

</div>