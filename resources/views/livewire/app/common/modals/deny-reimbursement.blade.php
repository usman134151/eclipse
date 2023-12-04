<div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title fs-5" id="denyReimbursementLabel">Deny Reimbursement</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="row mb-4 mt-4">
            <div class="col-lg-6 fw-semibold">
                Provider:
            </div>
            <div class="col-lg-6">
                {{$rmb ? $rmb->provider->name : 'N/A'}}
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-lg-6 fw-semibold">
                Assignment No:
            </div>
            <div class="col-lg-6">
                {{$rmb && $rmb->booking ? $rmb->booking->booking_number :' N/A'}}
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-lg-6 fw-semibold">
                Reason for Reimbursement:
            </div>
            <div class="col-lg-6">
                {{$rmb ? $rmb->reason : 'N/A'}}
            </div>
          </div>

          <div class="row mb-4">
            <div class="col-lg-6 fw-semibold">
                Reimbursement Amount:
            </div>
            <div class="col-lg-6">
                {{$rmb ? numberFormat($rmb->amount) :'N/A'}}
            </div>
          </div>

          {{-- <div class="row mb-4">
            <div class="col-lg-6 fw-semibold">
                Receipt for Reimbursement:
            </div>
            <div class="col-lg-6">
                $120
            </div>
          </div> --}}

          <div class="row mb-3">
            <div class="col-lg-8">
                <label class="form-label" for="reason-for-deny">
                    Reason For Deny
                </label>
                <textarea wire:model.defer="admin_response" class="form-control" rows="3" cols="5" placeholder="Enter Text Here" id="reason-for-deny"></textarea>
            </div>
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
          <button type="button" class="btn rounded w-100 btn-primary" wire:click="saveResponse">Deny</button>
        </div>
      </div>
    </div>
  </div>