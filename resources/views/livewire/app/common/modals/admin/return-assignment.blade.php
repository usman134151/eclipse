<div class="modal-content">
    <div class="modal-header">
        <h1 class="modal-title fs-5" id="returnAssignmentModal">Return Assignment {{$bookingService ? $bookingService->id : 'N/A'}}</h1>
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
        <button type="button" class="btn btn-primary">
            Yes
        </button>
        <button type="button" class="btn border-2 btn-outline-secondary btn-secondary" data-bs-dismiss="modal">
            No
        </button>
    </div>
</div>
</div>