<div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title fs-5" id="reimbursementReviewLabel">Reimbursement Review</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row justify-content-center">
        <div class="col-lg-2"></div>
        <div class="col-lg-10 mt-3">
           {{-- <div class="row mb-4">
            <div class="col-lg-4">
                <button class="btn btn-primary">Approve</button>
              </div>
              <div class="col-lg-4">
                <button class="btn btn-outline-primary w-75">Deny</button>
              </div>
           </div> --}}
          <div class="row mb-3">
            <div class="col-lg-8">
                <textarea wire:model="admin_response" class="form-control" rows="5" cols="5" placeholder="Enter Text Here"></textarea>
            </div>
          </div>
          {{-- <div class="form-check">
            <input class="form-check-input" type="checkbox" value=""
                id="chargeTocustomer">
            <label class="form-check-label" for="chargeTocustomer" checked>
                Charge to Customer
            </label>
        </div> --}}
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="col-12 form-actions">
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
        </div>
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-primary" wire:click="acceptReimbursement">Accept</button>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value=""
                id="excludeNotification">
            <label class="form-check-label" for="excludeNotification" checked>
                Exclude Notification
            </label>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>