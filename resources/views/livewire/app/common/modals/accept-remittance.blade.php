<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="acceptModal">Accept Invoice</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
            onclick="closeModal()"></button>
    </div>
    <div class="modal-body">
        <div><label class="form-label">Notes</label></div>

        <textarea wire:model="admin_response" class="form-control" placeholder="Enter Text Here" name="" id="" cols="30" rows="5"></textarea>
    </div>
    <div class="modal-footer">
            <button data-bs-dismiss="modal" type="button" class="btn btn-secondary">Cancel</button>
            <button type="button" data-bs-dismiss="modal" wire:click="accept" class="btn btn-primary">Accept</button>
    </div>
</div>