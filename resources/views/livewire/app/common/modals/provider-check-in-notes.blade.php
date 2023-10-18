<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="providerCheckInNotesModal">
            Notes
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
                {{$notes}}
        </div>
    </div>
    <div class="modal-footer">
        <div class="row justify-content-center w-100">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>