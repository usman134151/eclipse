<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="returnAssignmentModal">Return Assignment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col">
                Are you sure you want to return this assignment?
            </div>
        </div>
    </div>
    <div class="modal-footer justify-items-center">
        <button type="button" class="btn btn-primary" wire:click="unassign" x-on:click="assignmentDetails=false">
            Yes
        </button>
        <button type="button" class="btn border-2 btn-outline-secondary btn-secondary" data-bs-dismiss="modal">
            No
        </button>
    </div>
</div>
</div>