<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5 text-center" id="confirmCompletion">Confirm Completion</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">

            <div class="col-lg-0  gap-2">
                <div class="d-flex justify-between">
                    @if (isset($service_details['statuses']) && $service_details['statuses'])
                        <div class="col-8 ">
                            <label class="form-label">Mark Booking as:</label>
                        </div>
                    @endif
                    @if (isset($service_details['enable_digital_signature']) && $service_details['enable_digital_signature'])
                        <div class="col-4 d-flex gap-1">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/customer.svg#customer-signature"></use>
                            </svg>
                            <h6>Customer Signature</h6>
                        </div>
                    @endif
                </div>
                @if (isset($service_details['enable_digital_signature']) && $service_details['enable_digital_signature'])
                    <div class="d-flex justify-content-end me-5">
                    <label for="upload_signature">
                        <div class="btn btn-primary rounded btn-xs">Click to Sign</div> </label>
                         <input style=" opacity: 0; z-index: -1; position: absolute;" id="upload_signature"
                                        wire:model="upload_signature" type="file">
                    </div>
                @endif
                @if (isset($service_details['statuses']) && $service_details['statuses'])
                    <div class="mb-2 d-flex gap-2 ">
                        @if (isset($service_details['status_types']) &&
                                isset($service_details['status_types']['completed']) &&
                                $service_details['status_types']['completed'] == true)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="booking-status" id="booking-status"
                                    wire:model.lazy="status" value="completed">
                                <label class="form-check-label" for="completed">
                                    Completed
                                </label>
                            </div>
                        @endif
                        @if (isset($service_details['status_types']) &&
                                isset($service_details['status_types']['noshow']) &&
                                $service_details['status_types']['noshow'] == true)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="booking-status"
                                    id="booking-status" wire:model.lazy="status" value="noshow" >
                                <label class="form-check-label" for="no-show">
                                    No Show
                                </label>
                            </div>
                        @endif
                        @if (isset($service_details['status_types']) &&
                                isset($service_details['status_types']['cancelled']) &&
                                $service_details['status_types']['cancelled'] == true)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="booking-status"
                                    id="booking-status" wire:model.lazy="status" value="cancelled">
                                <label class="form-check-label" for="cancellation">
                                    Cancellation
                                </label>
                            </div>
                        @endif
                    </div>
                @endif
                <div class="col-lg-8">
                    <label class="form-label" for="notes-column">
                        Notes
                        <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/provider.svg#fill-question"></use>
                        </svg>
                    </label>
                    <textarea class="form-control" rows="3" placeholder="" name="notesColumn" id="notes-column"></textarea>
                </div>
            </div>


        </div>
        <div class="table-responsive">
            <table id="remittances" class="table table-hover" aria-label="Remittance">
                <thead>
                    <tr role="row">

                        <th scope="col">Provider</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Feedback</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $status = ['1', '2', '3'];
                        $statusCode = ['bg-success', 'bg-gray', 'bg-warning'];
                    @endphp
                    @for ($i = 1; $i <= 5; $i++)
                        <tr role="row"
                            class="{{ $i % 2 == 0 ? 'even' : 'odd' }} {{ $statusCode[array_rand($status)] }}">
                        <tr role="row" class="odd">

                            <td>
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                            class="img-fluid rounded-circle" alt="Image of Team Profile">
                                    </div>
                                    <div class="col-md-10">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <div class="uploaded-data d-flex">
                                            <div class="font-family-secondary d-flex">
                                                <svg aria-label="rating" width="18" height="16"
                                                    viewBox="0 0 18 16">
                                                    <use xlink:href="/css/common-icons.svg#filled-star">
                                                    </use>
                                                </svg>
                                                <svg aria-label="rating" width="18" height="16"
                                                    viewBox="0 0 18 16">
                                                    <use xlink:href="/css/common-icons.svg#filled-star">
                                                    </use>
                                                </svg>
                                                <svg aria-label="rating" width="18" height="16"
                                                    viewBox="0 0 18 16">
                                                    <use xlink:href="/css/common-icons.svg#filled-star">
                                                    </use>
                                                </svg>
                                                <svg aria-label="rating" width="17" height="16"
                                                    viewBox="0 0 17 16">
                                                    <use xlink:href="/css/common-icons.svg#star">
                                                    </use>
                                                </svg>
                                                <svg aria-label="rating" width="17" height="16"
                                                    viewBox="0 0 17 16">
                                                    <use xlink:href="/css/common-icons.svg#star">
                                                    </use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <textarea class="form-control" name="" id="" cols="30" rows="1"
                                    placeholder="Enter Feedback"></textarea>
                            </td>

                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row justify-content-center w-100 mb-2">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark"
                    data-bs-dismiss="modal">Cancel</button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-primary" data-bs-dismiss="modal">Submit</button>
            </div>
        </div>
    </div>
</div>
