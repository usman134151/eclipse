<div class="modal-content">

    <div class="modal-header">
      <h2 class="modal-title fs-5" id="addAddressModalLabel">Add Address</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 mb-4">
                <label class="form-label" for="address-title">Address Title</label>
                <input type="text" id="address-title" class="form-control" name="address-title-column" placeholder="Example “Head Office”" required aria-required="true" wire:model.defer="address.address_name">
                @error('address.address_name')
                <span class="d-inline-block invalid-feedback mt-2">
                    {{ $message }}
                </span>
                @enderror
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="address1">Address 1</label>
          <input type="text" class="form-control" id="billing_address" name="address1-column" autocomplete="on" fdprocessedid="141xf8"
          placeholder="Enter Address 1" required aria-required="true" wire:model.defer="address.address_line1">
          @error('address.address_line1')
				<span class="d-inline-block invalid-feedback mt-2">
					{{ $message }}
					</span>
					@enderror
        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="address2">Address 2</label>
          <input type="text" id="address2" class="form-control" name="address2-column" placeholder="Enter Address 2" wire:model="address.address_line2">
        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="city">City</label>
          <input type="text" id="city" class="form-control" name="city-column" placeholder="Enter City" required aria-required="true" wire:model.defer="address.city">
          @error('address.city')
				<span class="d-inline-block invalid-feedback mt-2">
					{{ $message }}
					</span>
					@enderror

        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="state">State</label>
          <input type="text" id="state" class="form-control" name="state-column" placeholder="Enter State" required aria-required="true" wire:model.defer="address.state">
          @error('address.state')
          <span class="d-inline-block invalid-feedback mt-2">
              {{ $message }}
              </span>
              @enderror
        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="country">Country</label>
          
          <select wire:model="address.country"  class="form-control" name="country-column" id="country"><option value="">Select Country</option>
           @foreach($countries as $country)
             <option value="{{$country['name']}}">{{$country['name']}}</option>
           @endforeach
        </select>
        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="zip-code">Zip Code</label>
          <input type="text" id="zipcode" class="form-control" name="zip-column" placeholder="Enter Zip" required aria-required="true"  wire:model.defer="address.zip">
          @error('address.zip')
          <span class="d-inline-block invalid-feedback mt-2">
              {{ $message }}
              </span>
              @enderror
        </div>
        <div class="col-lg-6 mb-4">
        <label class="form-label" for="address-phone">Phone</label>
              <input type="text" id="address-phone" class="form-control" name="address-phone-column" placeholder="" wire:model="address.phone">
         </div>
        @if($address['address_type']==1)
        <div class="row">
          <div class="col-lg-12">
            <label class="form-label" for="arrival-notes">Arrival Notes</label>
            <textarea
            class="form-control"
            placeholder="Enter Notes"
            name="arrival-notes"
            id="arrival-notes"
            wire:model="address.notes"
            ></textarea>
          </div>
        </div>
        @endif
      </div>

      
    </div>
    <div class="modal-footer">
      <div class="col-12 form-actions">
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
        </div> 
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-primary" wire:click="updateData"  >Add</button>
        </div>
      </div>
    </div>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> --}}

      {{-- <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAANwmAq3UQc8j5GkJgzF9AglzF7XLfPxI&libraries=places&language=en-AU"></script> --}}

{{-- </script> --}}
    
    </div>

