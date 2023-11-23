<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5 text-center" id="confirmCompletion">Close Out Confirmation</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">

            <div class="col-lg-12 inner-section-segment-spacing">
                <div class="border-bottom border-dark border-start-0 border-end-0 border-top-0 py-3">
                    <div class="row">
                        <div class="col-lg-2 align-self-center">
                            <label class="form-label-sm fw-semibold mb-lg-0">Start Date:</label>
                        </div>
                        <div class="col-lg-3 align-self-center">
                            <div class="text-sm">
                                {{ date_format(date_create($booking_service->start_time), 'd F Y') }}

                            </div>
                        </div>
                        <div class="col-lg-3 align-self-center">
                            <label class="form-label-sm fw-semibold mb-lg-0">Actual Start Date:</label>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            {{-- @if (isset($this->checkout['actual_start_timestamp']))
                                    <div class="text-sm">
                                        {{ $checkout['actual_start_timestamp'] ? date_format(date_create($checkout['actual_start_timestamp']), 'd F Y') : '' }}</label>
                                    </div>
                                @else --}}
                            <div class="position-relative">
                                <svg aria-label="Date" class="icon-date md cursor-pointer" width="20" height="20"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <use xlink:href="/css/common-icons.svg#datefield-icon">
                                    </use>
                                </svg>
                                <input class="form-control form-control-md js-single-date"
                                    wire:model="checkout.customer_actual_start_date" id="actual_start_date"
                                    placeholder="MM/DD/YYYY" name="actual_start_date" aria-label="Select Date">
                                     
                            </div>
                            
                            {{-- @endif --}}
                        </div>

                    </div>
                    
                </div>
                 @error('checkout.customer_actual_start_date')
                                    <span class="d-inline-block invalid-feedback mt-2">
                                        {{ $message }}
                                    </span>
                                @enderror
                <div class="border-bottom border-dark border-start-0 border-end-0 border-top-0 py-3">
                    <div class="row">
                        <div class="col-lg-2 align-self-center">
                            <label class="form-label-sm fw-semibold mb-lg-0">End Date:</label>
                        </div>
                        <div class="col-lg-3 align-self-center">
                            <div class="text-sm">
                                {{ date_format(date_create($booking_service->end_time), 'd F Y') }}

                            </div>
                        </div>
                        <div class="col-lg-3 align-self-center">
                            <label class="form-label-sm fw-semibold mb-lg-0">Actual End Date:</label>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <div class="position-relative">
                                <svg aria-label="Date" class="icon-date md cursor-pointer" width="20" height="20"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <use xlink:href="/css/common-icons.svg#datefield-icon">
                                    </use>
                                </svg>
                                <input class="form-control form-control-md js-single-date"
                                    wire:model="checkout.customer_actual_end_date" placeholder="MM/DD/YYYY"
                                    name="actual_end_date" aria-label="Select Date" id="actual_end_date">
                                
                            </div>
                        </div>
                    </div>
                </div>
                @error('checkout.customer_actual_end_date')
                                    <span class="d-inline-block invalid-feedback mt-2">
                                        {{ $message }}
                                    </span>
                                @enderror
                <div class="border-bottom border-dark border-start-0 border-end-0 border-top-0 py-3">
                    <div class="row">
                        <div class="col-lg-2 align-self-center">
                            <label class="form-label-sm fw-semibold mb-lg-0">Start Time:</label>
                        </div>
                        <div class="col-lg-3 align-self-center">
                            <div class="text-sm">
                                {{ date_format(date_create($booking_service->start_time), 'h:i A') }}
                            </div>
                        </div>
                        <div class="col-lg-3 align-self-center">
                            <label class="form-label-sm fw-semibold mb-lg-0">Actual Start Time:</label>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            {{-- @if (isset($this->checkout['actual_start_timestamp']))
                                    <div class="text-sm">
                                        {{ $checkout['actual_start_timestamp'] ? date_format(date_create($checkout['actual_start_timestamp']), 'h:i A') : '' }}</label>
                                    </div>
                                @else --}}
                            <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                    <div>
                                        <input class="form-control form-control-sm text-center hours"
                                            id="actual_start_hour" aria-label="Start Time" name="actual_start_hour"
                                            placeholder="00" type="number" tabindex=""
                                            wire:model.defer="checkout.customer_actual_start_hour" maxlength="2">
                                    </div>
                                    <svg width="5" height="19" viewBox="0 0 5 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                            fill="black" />
                                    </svg>
                                    <div>
                                        <input class="form-control form-control-sm text-center  mins"
                                            aria-label="Start Minutes" id="actual_start_min" name="actual_start_min"
                                            placeholder="00" type="number" tabindex=""
                                            wire:model.defer="checkout.customer_actual_start_min" maxlength="2">
                                    </div>
                                </div>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    @error('checkout.customer_actual_start_hour')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                    @error('checkout.customer_actual_start_min')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="border-bottom border-dark border-start-0 border-end-0 border-top-0 py-3">
                    <div class="row">
                        <div class="col-lg-2 align-self-center">
                            <label class="form-label-sm fw-semibold mb-lg-0">End Time:</label>
                        </div>
                        <div class="col-lg-3 align-self-center">
                            <div class="text-sm">
                                {{ date_format(date_create($booking_service->end_time), 'h:i A') }}

                            </div>
                        </div>
                        <div class="col-lg-3 align-self-center">
                            <label class="form-label-sm fw-semibold mb-lg-0">Actual End Time:</label>
                        </div>
                        <div class="col-lg-4 align-self-center">
                            <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                    <div>
                                        <input class="form-control form-control-sm text-center hours"
                                            id="actual_end_hour" aria-label="Start Time" name="actual_end_hour"
                                            placeholder="00" type="number" tabindex=""
                                            wire:model.defer="checkout.customer_actual_end_hour" maxlength="2">
                                    </div>
                                    <svg width="5" height="19" viewBox="0 0 5 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                            fill="black" />
                                    </svg>
                                    <div>
                                        <input class="form-control form-control-sm text-center  mins"
                                            aria-label="Start Minutes" id="actual_end_min" name="actual_end_min"
                                            placeholder="00" type="number" tabindex=""
                                            wire:model.defer="checkout.customer_actual_end_min" maxlength="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    @error('checkout.customer_actual_end_hour')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                    @error('checkout.customer_actual_end_min')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-lg-0  gap-2">
                <div class="d-flex justify-between">
                    <div class="col-8 ">
                        @if (isset($service_details['statuses']) && $service_details['statuses'])
                            <label class="form-label">Mark Booking as:</label>
                        @endif

                    </div>
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
                            <div class="btn btn-primary rounded btn-xs">Click to Sign</div>
                        </label>
                        <input style=" opacity: 0; z-index: -1; position: absolute;" id="upload_signature"
                            wire:model="upload_signature" type="file">
                    </div>
                    <div class="d-flex justify-content-end me-5">

                        @error('upload_signature')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="text-muted" wire:loading wire:target='upload_signature'>
                            Uploading...
                        </div>
                        @if ($upload_signature)
                            <div class="text-muted"> <small>
                                    {{ $upload_signature->getClientOriginalName() }} </small>
                            </div>
                        @endif
                    </div>
                @endif
                @if (isset($service_details['statuses']) && $service_details['statuses'])
                    <div class="mb-2 d-flex gap-2 ">
                        @if (isset($service_details['status_types']) &&
                                isset($service_details['status_types']['completed']) &&
                                $service_details['status_types']['completed'] == true)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="booking-status"
                                    id="booking-status" wire:model.lazy="checkout.customer_status" value="completed">
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
                                    id="booking-status" wire:model.lazy="checkout.customer_status" value="noshow">
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
                                    id="booking-status" wire:model.lazy="checkout.customer_status" value="cancelled">
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
                    <textarea wire:model.lazy="checkout.customer_notes" class="form-control" rows="3" placeholder="" name="notesColumn"
                        id="notes-column"></textarea>
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
                    @foreach ($providers as $i => $provider)
                        <tr role="row" class="odd">

                            <td wire:ignore class="w-50">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="{{ $provider->profile_pic ? $provider->profile_pic : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                            class="img-fluid rounded-circle" alt="Image of Team Profile">
                                    </div>
                                    <div class="col-md-10">
                                        <h6 class="fw-semibold">
                                            {{ $provider->name }}
                                        </h6>
                                        <small>{{ $provider->email }}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <div class="uploaded-data d-flex">
                                            <div class="font-family-secondary d-flex">
                                                @if (isset($feedback[$provider->provider_id]['rating']))
                                                    @for ($i = 0; $i < $feedback[$provider->provider_id]['rating']; $i++)
                                                        <svg aria-label="rating" width="18" height="16"
                                                            viewBox="0 0 18 16"
                                                            wire:click="setRating({{ $provider->provider_id }},{{ $i + 1 }})">
                                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                                            </use>
                                                        </svg>
                                                    @endfor
                                                    @for ($i = $feedback[$provider->provider_id]['rating']; $i < 5; $i++)
                                                        <svg aria-label="rating" width="17" height="16"
                                                            viewBox="0 0 17 16"
                                                            wire:click="setRating({{ $provider->provider_id }},{{ $i + 1 }})">
                                                            <use xlink:href="/css/common-icons.svg#star">
                                                            </use>
                                                        </svg>
                                                    @endfor
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="w-100">
                                <textarea class="form-control" name="" id="" cols="30" rows="1"
                                    wire:model.lazy="feedback.{{ $provider->provider_id }}.feedback_comments" placeholder="Enter Feedback"></textarea>
                            </td>

                        </tr>
                    @endforeach
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
                <button type="button" class="btn rounded w-100 btn-primary" wire:click="save">Submit</button>
            </div>
        </div>
    </div>
</div>
