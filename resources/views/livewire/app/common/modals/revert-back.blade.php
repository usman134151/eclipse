<div class="modal-content">
    <div class="modal-body">
        <div>
            <label class="form-label">
                REVERT BACK 
            </label>
            <p>Are you sure you want to revert the status of this remittance?</p>
            <div class="d-flex justify-content-center gap-2">
                <button type="button" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">
                    Cancel
                </button>
                <button type="button" class="btn rounded btn-primary" wire:click="{{$type==2 ? 'confirmedRevertRemittance' :'revert'}}">
                    Yes Revert Invoice
                </button>
            </div>
        </div>
    </div>
</div>