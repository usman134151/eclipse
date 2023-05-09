<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="reviewFeedbackLabel">
            Feedback
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
            <ol class="list-group list-group-flush fw-medium">
                @for ($i = 1; $i <= 5; $i++)
                <li class="list-group-item">
                    <div class="d-flex">
                        <span>{{ $i . "." }}</span>
                        <p class="mb-0">
                            &nbsp;
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                    </div>
                    <div class="fw-normal text-end mb-2">
                        Thomas Charles 01/02/1023 09:54 PM
                    </div>
                </li>
                @endfor
            </ol>
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