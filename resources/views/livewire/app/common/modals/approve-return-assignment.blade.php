<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="UnassignModalLabel">
            Approve Return Assignment Request
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-4">
            <h3 class="form-label">Reason for Returning Assignment: </h3>
            <p>reason displayed</p>

            {{-- <textarea class="form-control" rows="5" cols="5" wire:model.defer="data.unassign_reason"></textarea> --}}
        </div>
        <div class="d-flex gap-3 justify-content-center mb-3">
            <a href="#" class="btn rounded btn-outline-dark"  wire:click="save">
                Keep Provider
            </a>
            <a href="#" class="btn rounded btn-primary" wire:click="save">Yes, Unassign Provider</a>
        </div>
    </div>
</div>
