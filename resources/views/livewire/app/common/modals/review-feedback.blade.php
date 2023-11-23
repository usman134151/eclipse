<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="reviewFeedbackLabel">
            Feedback
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row justify-content-center">
            @if (count($feedback))
                <ol class="list-group list-group-flush fw-medium">
                    @foreach ($feedback as $i => $fb)
                        <li class="list-group-item">
                            <div class="d-flex">
                                <span>{{ $i + 1 . '.' }}</span>
                                <p class="mb-0">
                                    &nbsp;
                                    {{ $fb['comments'] }} </p>
                            </div>
                            <div class="fw-normal  my-2 row">
                                <span class="col-6 text-start" >
                                    @if (isset($fb['rating']))
                                        @for ($i = 0; $i < $fb['rating']; $i++)
                                            <i class="fa fa-star fa-2x text-warning"></i>
                                        @endfor
                                        @for ($i = $fb['rating']; $i < 5; $i++)
                                            <i class="fa fa-star fa-2x text-warning"></i>
                                        @endfor
                                    @endif
                                </span>
                                <span class="col-6 text-end">

                                    {{ $fb['from']['name'] }}
                                    {{ date_format(date_create($fb['updated_at']), 'm/d/Y h:i A') }}
                                </span>

                            </div>
                        </li>
                    @endforeach
                </ol>
            @else
                <small class="text-center">No feedback available</small>
            @endif
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
