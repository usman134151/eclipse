<div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="objectionModal">Objection</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
    </div>
    <div class="modal-body">
      <div><label class="form-label">Reason For Objection</label></div>

    <textarea wire:model="admin_response" class="form-control" placeholder="Enter Text Here" name="" id="" cols="30" rows="5"></textarea>
  </div>
    <div class="modal-footer justify-items-center">
      <button type="button"  data-bs-dismiss="modal" class="btn btn-secondary">Cancel</button>
      <button type="button"  data-bs-dismiss="modal" wire:click="reject" class="btn btn-primary">Object</button>
    </div>
  </div>
</div>