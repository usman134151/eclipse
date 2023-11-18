<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="approveReturnAssignmentModalLabel">
            Approve Return Assignment Request
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-4">
            <h3 ">Reason for Returning Assignment: </h3>
            <p class="mt-2">{{$bookingProvider ? $bookingProvider->provider_response : ''}}</p>

        </div>
        <div class="d-flex gap-3 justify-content-center mb-3">
            <a href="#" class="btn rounded btn-outline-dark"  wire:click="save">
                Keep Provider
            </a>
            <a href="#" class="btn rounded btn-primary" wire:click="save(1)">Yes, Unassign Provider</a>
        </div>
    </div>
</div>
