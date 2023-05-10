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
              <input type="text" id="address-title" class="form-control" name="address-title-column" placeholder="Example “Head Office”" wire:model="address.address_name">
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="address1">Address 1</label>
          <input type="text" id="address1" class="form-control" name="address1-column" placeholder="Enter Address 1" wire:model="address.address_line1">
        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="address2">Address 2</label>
          <input type="text" id="address2" class="form-control" name="address2-column" placeholder="Enter Address 2" wire:model="address.address_line2">
        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="city">City</label>
          <input type="text" id="city" class="form-control" name="city-column" placeholder="Enter City" wire:model="address.city">

        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="state">State</label>
          <input type="text" id="state" class="form-control" name="state-column" placeholder="Enter State" wire:model="address.state">

        </div>

        <div class="col-lg-6 mb-4">
          <label class="form-label" for="zip-code">Zip Code</label>
          <input type="text" id="zip" class="form-control" name="zip-column" placeholder="Enter Zip" wire:model="address.zip">
        </div>
        <div class="col-lg-6 mb-4">
          <label class="form-label" for="phone">Phone</label>
          <input type="text" id="phone" class="form-control" name="phone" placeholder="(000) 000-0000" wire.model="address.phone">
        </div>
        <div class="row">
          <div class="col-lg-12">
            <label class="form-label" for="arrival-notes">Arrival Notes</label>
            <textarea
            class="form-control"
            placeholder="Enter Notes"
            name="arrival-notes"
            id="arrival-notes"
            wire.model="address.notes"
            ></textarea>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="col-12 form-actions">
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
        </div>
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-primary"  wire:click="updateData" data-bs-dismiss="modal">Add</button>
        </div>
      </div>
    </div>
  </div>
