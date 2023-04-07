{{-- Add Address Modal- Start --}}
<div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
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
                  <input type="text" id="address-title" class="form-control" name="address-title-column" placeholder="Example “Head Office”">
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <label class="form-label" for="address1">Address 1</label>
              <input type="text" id="address1" class="form-control" name="address1-column" placeholder="Enter Address 1">
            </div>
            <div class="col-lg-6 mb-4">
              <label class="form-label" for="address2">Address 2</label>
              <input type="text" id="address2" class="form-control" name="address2-column" placeholder="Enter Address 2">
            </div>
            <div class="col-lg-6 mb-4">
              <label class="form-label" for="city">City</label>
              <select class="form-select">
                <option>Select City</option>
              </select>
            </div>
            <div class="col-lg-6 mb-4">
              <label class="form-label" for="state-province">State / Province</label>
              <select class="form-select">
                <option>Select State / Province</option>
              </select>
            </div>
            <div class="col-lg-6 mb-4">
              <label class="form-label" for="country">Country</label>
               {{-- updated by shanila to add dropdown --}}
              {!! App\Helpers\SetupHelper::createDropDown('Country', 'id',
              'name', '', '', 'name', false, 'country',
              '','country') !!}
               {{--ended updated by shanila --}}
            </div>
            <div class="col-lg-6 mb-4">
              <label class="form-label" for="zip-code">Zip Code</label>
              <input type="text" id="zip-code" class="form-control" name="zip-code-column" placeholder="Enter Zip Code">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="row justify-content-center w-100">
            <div class="col-lg-3">
              <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
            </div>
            <div class="col-lg-3">
              <button type="button" class="btn rounded w-100 btn-primary">Add</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Add Address Modal - End --}}
