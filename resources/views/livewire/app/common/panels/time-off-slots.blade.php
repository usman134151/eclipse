<div class="row mb-4">
    <div class="col-lg-12">
        <div class="row mb-4">
         
              <div class="col-lg-12">
                <div class="d-lg-flex gap-3 align-items-center mb-3">
                          <div class="col-md-4 col-12">
                              <div>
                                <label class="form-label" for="select-date">
                                  Select Start Date 
                                </label>
                                <div class="position-relative">
                                  <input type="" name="scheduled_date" class="form-control js-single-date" placeholder="MM/DD/YYYY" id="from_date" wire:model.defer="slot.from_date">
                                  <svg aria-label="Date" class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
                                                          </svg>
                                    @error('slot.from_date')
                                    <span class="d-inline-block invalid-feedback mt-2">
                                      {{ $message }}
                                    </span>
                                  @enderror
                                </div>
                              </div>
                          </div>

                      <div class="col-md-4 col-12">
                              <div>
                                <label class="form-label" for="select-date">
                                  Select End Date 
                                </label>
                                <div class="position-relative">
                                  <input type="" name="scheduled_date" class="form-control js-single-date" placeholder="MM/DD/YYYY" id="to_date" wire:model.defer="slot.to_date">
                                  <svg aria-label="Date" class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
                                                          </svg>
                                    @error('slot.to_date')
                                    <span class="d-inline-block invalid-feedback mt-2">
                                      {{ $message }}
                                    </span>
                                  @enderror
                                </div>
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
                <textarea class="form-control" rows="4"  wire:model.defer="slot.notes" id="notes"></textarea>
            </div>
            {{-- <div>
                <p>No Bookings Assigned from 11/02/2022 to 11/02/2022</p>
            </div> --}}
        </div>
      <div class="col-12 justify-content-center form-actions d-flex gap-3">
          <button type="button" class="btn btn-outline-dark rounded" x-on:click="timeOffSlots = !timeOffSlots">
              Cancel
          </button>
          {{--  --}}
          <button type="submit" class="btn btn-primary rounded" wire:click.prevent="$emit('saveTimeOff')" x-on:close-timeoff-panel.window="timeOffSlots = !timeOffSlots">
              Save
          </button>
      </div>

    </div>

</div>