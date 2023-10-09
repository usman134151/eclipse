<div class="js-ps-container-check-out">
    <!-- BEGIN: Step 1 -->
    <div class="js-checkout-step-1-content">
        @if (isset($checkout['actual_start_timestamp']))
            <label class="form-label mb-0">Check-in Time
                {{ $checkout['actual_start_timestamp'] ? date_format(date_create($checkout['actual_start_timestamp']), 'h:i A') : '' }}</label>
            <hr>
        @endif
        <div class="between-segment-spacing">
            <div class="d-flex justify-content-between gap-3 align-items-center mb-3">
                <div>
                    <label class="form-label mb-0">Check-out</label>

                    <div class="text-sm">
                        {{ isset($checkout['actual_end_timestamp']) ? date_format(date_create($checkout['actual_end_timestamp']), 'm/d/Y h:i A') : '' }}
                    </div>
                </div>
                {{-- <div>
                    <div class="form-check form-switch mb-0">
                        <input class="form-check-input" type="checkbox" role="switch" id="checkOut"
                            wire:click="setCheckout" wire:model="checkout.status"
                            aria-label="Check-out Permission Toggle button">
                        <label class="form-check-label" for="checkOut">No</label>
                        <label class="form-check-label" for="checkOut">Yes</label>
                    </div>
                </div> --}}
            </div>
        </div>
        <hr>

    </div>
    <!-- BEGIN: Step 1 -->
    <div class="{{ $step == 1 ? '' : 'hidden' }}">
        <div class="between-segment-spacing">
            <div class="row">
                <div class="col-lg-11 inner-section-segment-spacing">
                    <h3 class="text-primary">Step 1:</h3>
                    <div class="border-bottom border-dark border-start-0 border-end-0 border-top-0 py-3">
                        <div class="row">
                            <div class="col-lg-2 align-self-center">
                                <label class="form-label-sm fw-semibold mb-lg-0">Start Date:</label>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <div class="text-sm">
                                    {{ date_format(date_create($assignment->booking_start_at), 'd F Y') }}

                                </div>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <label class="form-label-sm fw-semibold mb-lg-0">Actual Start Date:</label>
                            </div>
                            <div class="col-lg-4 align-self-center">
                                @if (isset($this->checkout['actual_start_timestamp']))
                                    <div class="text-sm">
                                        {{ $checkout['actual_start_timestamp'] ? date_format(date_create($checkout['actual_start_timestamp']), 'd F Y') : '' }}</label>
                                    </div>
                                @else
                                    <div class="position-relative">
                                        <svg aria-label="Date" class="icon-date md cursor-pointer" width="20"
                                            height="20" viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#datefield-icon">
                                            </use>
                                        </svg>
                                        <input class="form-control form-control-md js-single-date"
                                            wire:model="checkout.actual_start_date" id="actual_start_date"
                                            placeholder="MM/DD/YYYY" name="actual_start_date" aria-label="Select Date">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-dark border-start-0 border-end-0 border-top-0 py-3">
                        <div class="row">
                            <div class="col-lg-2 align-self-center">
                                <label class="form-label-sm fw-semibold mb-lg-0">End Date:</label>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <div class="text-sm">
                                    {{ date_format(date_create($assignment->booking_end_at), 'd F Y') }}

                                </div>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <label class="form-label-sm fw-semibold mb-lg-0">Actual End Date:</label>
                            </div>
                            <div class="col-lg-4 align-self-center">
                                <div class="position-relative">
                                    <svg aria-label="Date" class="icon-date md cursor-pointer" width="20"
                                        height="20" viewBox="0 0 20 20">
                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                        </use>
                                    </svg>
                                    <input class="form-control form-control-md js-single-date"
                                        wire:model="checkout.actual_end_date" placeholder="MM/DD/YYYY"
                                        name="actual_end_date" aria-label="Select Date" id="actual_end_date">
                                    @error('checkout.actual_end_date')
                                        <span class="d-inline-block invalid-feedback mt-2">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-dark border-start-0 border-end-0 border-top-0 py-3">
                        <div class="row">
                            <div class="col-lg-2 align-self-center">
                                <label class="form-label-sm fw-semibold mb-lg-0">Start Time:</label>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <div class="text-sm">
                                    {{ date_format(date_create($assignment->booking_start_at), 'h:i A') }}
                                </div>
                            </div>
                            <div class="col-lg-3 align-self-center">
                                <label class="form-label-sm fw-semibold mb-lg-0">Actual Start Time:</label>
                            </div>
                            <div class="col-lg-4 align-self-center">
                                @if (isset($this->checkout['actual_start_timestamp']))
                                    <div class="text-sm">
                                        {{ $checkout['actual_start_timestamp'] ? date_format(date_create($checkout['actual_start_timestamp']), 'h:i A') : '' }}</label>
                                    </div>
                                @else
                                    <div class="d-flex gap-2">
                                        <div class="time d-flex align-items-center gap-2">
                                            <div>
                                                <input class="form-control form-control-sm text-center hours"
                                                    id="actual_start_hour" aria-label="Start Time"
                                                    name="actual_start_hour" placeholder="00" type="text"
                                                    tabindex="" wire:model.defer="checkout.actual_start_hour"
                                                    maxlength="2">
                                            </div>
                                            <svg width="5" height="19" viewBox="0 0 5 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                    fill="black" />
                                            </svg>
                                            <div>
                                                <input class="form-control form-control-sm text-center  mins"
                                                    aria-label="Start Minutes" id="actual_start_min"
                                                    name="actual_start_min" placeholder="00" type="text"
                                                    tabindex="" wire:model.defer="checkout.actual_start_min"
                                                    maxlength="2">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        @error('checkout.actual_start_hour')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                        @error('checkout.actual_start_min')
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
                                    {{ date_format(date_create($assignment->booking_end_at), 'h:i A') }}

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
                                                placeholder="00" type="text" tabindex=""
                                                wire:model.defer="checkout.actual_end_hour" maxlength="2">
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
                                                placeholder="00" type="text" tabindex=""
                                                wire:model.defer="checkout.actual_end_min" maxlength="2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        @error('checkout.actual_end_hour')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                        @error('checkout.actual_end_min')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="checkout_confirmation_upload_type"
                            wire:model="checkout.confirmation_upload_type" id="print_sign" value="print_and_sign">
                        <label class="form-check-label" for="print_sign">
                            Print & Sign
                        </label>
                        <div
                            class="py-4  {{ $checkout['confirmation_upload_type'] == 'print_and_sign' ? '' : 'hidden' }}">
                            <div class="d-flex gap-5 align-items-center mb-4">
                                <div class="d-flex align-items-center gap-3">
                                    1 <button type="" class="btn btn-sm rounded btn-outline-dark">Download
                                        Timesheet</button>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <label for="upload_timesheet">
                                        2 <div type="" class="btn btn-sm rounded btn-outline-dark">Upload
                                            Timesheet</div></label>
                                    <input style=" opacity: 0; z-index: -1; position: absolute;" id="upload_timesheet"
                                        wire:model="upload_timesheet" type="file">


                                </div>

                            </div>
                            @error('upload_timesheet')
                                <span class="d-inline-block invalid-feedback mt-2">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="text-muted" wire:loading wire:target='upload_timesheet'>
                                Uploading...
                            </div>
                            @if ($upload_timesheet != null)

                                @if ($this->isImage($upload_timesheet))
                                    <div class="text-center" style="width:190px;height:250px">

                                        <img alt="Timesheet Upload" style="width:100%;height:100%"
                                            src="{{ '/tenant' . tenant('id') . '/app/livewire-tmp/' . $upload_timesheet->getFilename() }}">
                                    </div>
                                @else
                                    <div class="">
                                        {{ $upload_timesheet->getClientOriginalName() }}
                                    </div>
                                @endif
                            @elseif(isset($checkout['uploaded_timesheet']) && $checkout['uploaded_timesheet'])
                                @if ($this->isImage($checkout['uploaded_timesheet'], true))
                                    <div class="text-center" style="width:190px;height:250px">

                                        <img alt="Timesheet Upload" style="width:100%;height:100%"
                                            src="{{ $checkout['uploaded_timesheet'] }}">
                                    </div>
                                @else
                                    <div class="">
                                        {{ basename($checkout['uploaded_timesheet']) }}
                                    </div>
                                @endif

                            @endif
                        </div>
                    </div>
                    <div
                        class="form-check {{ isset($checkout_details['enable_digital_signature']) && $checkout_details['enable_digital_signature'] == true ? '' : 'hidden' }}">
                        <input class="form-check-input" type="radio" name="checkout_confirmation_upload_type"
                            wire:model="checkout.confirmation_upload_type" id="digital_signature"
                            aria-label="Digital Signature" value="digital_signature">
                        <label class="form-check-label" for="digital_signature">
                            Digital Signature
                        </label>
                        <div
                            class="py-4 {{ $checkout['confirmation_upload_type'] == 'digital_signature' ? '' : 'hidden' }}">
                            <div class="mb-4">
                                <label class="form-label d-block">Select who sign from customer</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="requester"
                                        wire:model="checkout.digital_signature.customer_type"
                                        name="Print&SignDigitalSignature" id="Print&SignDigitalSignature2"
                                        aria-label="Requester">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <small>
                                            Requester
                                        </small>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" aria-label="Supervisor"
                                        value="supervisor" wire:model="checkout.digital_signature.customer_type"
                                        name="Print&SignDigitalSignature" id="Print&SignDigitalSignature2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <small>
                                            Supervisor
                                        </small>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" aria-label="Service Consumer"
                                        value="consumer" wire:model="checkout.digital_signature.customer_type"
                                        name="Print&SignDigitalSignature" id="Print&SignDigitalSignature2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <small>
                                            Service Consumer
                                        </small>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" aria-label="Other" value="other"
                                        wire:model="checkout.digital_signature.customer_type"
                                        name="Print&SignDigitalSignature" id="Print&SignDigitalSignature2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <small>
                                            Other
                                        </small>
                                    </label>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-lg-6">
                                    <label class="form-label" for="signer-name">Signer’s Name</label>
                                    <input type="" name="" class="form-control"
                                        wire:model="checkout.digital_signature.signer_name" placeholder="Enter Name"
                                        id="signer-name">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label" for="position">Position</label>
                                    <input type="" name="" class="form-control"
                                        wire:model="checkout.digital_signature.signer_position"
                                        placeholder="Enter Position" id="position">
                                </div>
                            </div>
                            <div class="d-flex gap-5 align-items-center mb-4">
                                <div class="d-flex align-items-center gap-3">
                                    <label for="upload_signature">
                                        <div class="btn btn-sm rounded btn-outline-dark">Upload
                                            Signature</div>
                                    </label>
                                    <input style=" opacity: 0; z-index: -1; position: absolute;" id="upload_signature"
                                        wire:model="upload_signature" type="file">


                                </div>

                                <div class="d-flex align-items-center gap-3">

                                    <button type="" class="btn btn-sm rounded btn-outline-dark">Create
                                        Signature
                                        <span>
                                            <small> (coming soon)</small>

                                        </span>

                                    </button>
                                </div>
                            </div>
                            @error('upload_signature')
                                <span class="d-inline-block invalid-feedback mt-2">
                                    {{ $message }}
                                </span>
                            @enderror
                            <div class="text-muted" wire:loading wire:target='upload_signature'>
                                Uploading...
                            </div>
                            @if ($upload_signature != null)

                                @if ($this->isImage($upload_signature))
                                    <div class="text-center" style="width:190px;height:250px">

                                        <img alt="Signature Upload" style="width:100%;height:100%"
                                            src="{{ '/tenant' . tenant('id') . '/app/livewire-tmp/' . $upload_signature->getFilename() }}">

                                    </div>
                                @else
                                    <div class="">
                                        {{ $upload_signature->getClientOriginalName() }}
                                    </div>
                                @endif
                            @elseif(isset($checkout['digital_signature']['customer_signature']) && $checkout['digital_signature']['customer_signature'])
                                @if ($this->isImage($checkout['digital_signature']['customer_signature'], true))
                                    <div class="text-center" style="width:190px;height:250px">

                                        <img alt="Timesheet Upload" style="width:100%;height:100%"
                                            src="{{ $checkout['digital_signature']['customer_signature'] }}">
                                    </div>
                                @else
                                    <div class="">
                                        {{ basename($checkout['digital_signature']['customer_signature']) }}
                                    </div>
                                @endif

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-4">
            <div class="form-actions d-flex gap-3 justify-content-center ">
                <button type="button" class="btn btn-outline-dark rounded"
                    x-on:click="offcanvasOpenCheckOut = !offcanvasOpenCheckOut"
                    wire:loading.attr="disabled">Back</button>
                <button type="submit" class="btn btn-primary rounded" wire:loading.attr="disabled"
                    wire:click="saveStepOne">Next</button>
            </div>
        </div>
    </div>
    <!-- END: Step 1 -->
    <!-- BEGIN: Step 2 -->
    @if (isset($this->checkout_details['customize_form']) &&
            $this->checkout_details['customize_form'] == true &&
            isset($this->checkout_details['customize_form_id']))
        <div class="{{ $step == 2 ? '' : 'hidden' }}">
            <form wire:submit.prevent="saveStepTwo">
                <div class="mb-4">
                    <div class="row inner-section-segment-spacing">
                        <div class="col-lg-12">
                            <h3 class="text-primary">Step 2:</h3>
                            @livewire('app.common.forms.custom-form-display', ['showForm' => true, 'formId' => $this->checkout_details['customize_form_id'], 'bookingId' => $assignment->id, 'lastForm' => false, 'formType' => 3, 'service_id' => $booking_service->services, 'added_by_id' => $provider_id])
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-4">
                    <div class="form-actions d-flex gap-3 justify-content-center mt-5">
                        <button type="button" class="btn btn-primary rounded" wire:click="setStep(1)">Back</button>
                        <button type="button" x-on:click="offcanvasOpenCheckOut = !offcanvasOpenCheckOut"
                            class="btn btn-outline-dark rounded">Cancel</button>
                        <button type="submit" class="btn btn-primary rounded js-checkout-go-step-3">Next</button>
                    </div>
                </div>
            </form>
        </div>
    @endif

    <!-- END: Step 2 -->
    <!-- BEGIN: Step 3 -->
    <div class="{{ $step == 3 ? '' : 'hidden' }}">
        <div class="between-section-segment-spacing">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-primary">Step
                        {{ isset($this->checkout_details['customize_form']) &&
                        $this->checkout_details['customize_form'] == true &&
                        isset($this->checkout_details['customize_form_id'])
                            ? '3'
                            : '2' }}

                        :</h3>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label-sm" for="entry-notes">Entry Notes</label>
                            <textarea wire:model.defer="checkout.entry_notes" class="form-control" rows="5" cols="5"
                                id="entry-notes"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" class="btn btn-sm btn-outline-dark rounded">Add Reimbursement</a>
                        </div>
                    </div>
                    <small>(coming soon)</small>
                </div>
            </div>
            <hr>
        </div>

        <div class="mb-4">
            <div class="form-actions d-flex gap-3 justify-content-center mt-5">
                @if (isset($this->checkout_details['customize_form']) &&
                        $this->checkout_details['customize_form'] == true &&
                        isset($this->checkout_details['customize_form_id']))
                    <button type="submit" class="btn btn-primary rounded" wire:click="setStep(2)">Back</button>
                @else
                    <button type="submit" class="btn btn-primary rounded" wire:click="setStep(1)">Back</button>
                @endif
                <button x-on:click="offcanvasOpenCheckOut = !offcanvasOpenCheckOut" type="button"
                    class="btn btn-outline-dark rounded">Cancel</button>
                <button type="submit" wire:click="saveStepThree"
                    class="btn btn-primary rounded js-checkout-go-step-4">Next</button>
            </div>
        </div>
    </div>
    <!-- END: Step 3 -->
    <!-- BEGIN: Step 4 -->
    <div class="{{ $step == 4 ? '' : 'hidden' }}">
        <form wire:submit.prevent='save'>
        @csrf
        <div class="mb-4">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-primary">Step
                        {{ isset($this->checkout_details['customize_form']) &&
                        $this->checkout_details['customize_form'] == true &&
                        isset($this->checkout_details['customize_form_id'])
                            ? '4'
                            : '3' }}

                        :</h3>
                    @if (isset($checkout_details['statuses']) && $checkout_details['statuses'] == true)
                        <div class="mb-4">
                            <label class="form-label d-block">Check-Out Status</label>
                            @if (isset($checkout_details['status_types']) &&
                                    isset($checkout_details['status_types']['completed']) &&
                                    $checkout_details['status_types']['completed'] == true)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="booking_status"
                                        wire:model='checkout.checkout_status' value="complete" id="complete">
                                    <label class="form-check-label" for="complete">
                                        <small>
                                            Complete
                                        </small>
                                    </label>
                                </div>
                            @endif
                            @if (isset($checkout_details['status_types']) &&
                                    isset($checkout_details['status_types']['noshow']) &&
                                    $checkout_details['status_types']['noshow'] == true)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="booking_status"
                                        wire:model='checkout.checkout_status' id="no-show" value="noshow">
                                    <label class="form-check-label" for="no-show">
                                        <small>
                                            No Show
                                        </small>
                                    </label>
                                </div>
                            @endif
                            @if (isset($checkout_details['status_types']) &&
                                    isset($checkout_details['status_types']['cancelled']) &&
                                    $checkout_details['status_types']['cancelled'] == true)
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="booking_status"
                                        wire:model='checkout.checkout_status' id="cancelled" value="cancelled">
                                    <label class="form-check-label" for="cancelled">
                                        <small>
                                            Cancelled
                                        </small>
                                    </label>
                                </div>
                            @endif

                        </div>
                    @endif
                    <div class="d-lg-flex gap-5 align-items-center mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <label class="form-label mb-lg-0">Company:</label>
                            <div> {{ $assignment->customer ? $assignment->customer->company->name : 'N/A' }}
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <label class="form-label mb-lg-0">Consumer:</label>
                            <div>{{ $assignment->customer ? $assignment->customer->name : 'N/A' }}</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="text-sm">Share your experience working with This consumer</div>
                        <hr>
                        <label class="form-label d-block mb-0">Rating
                        </label>
                        @if (isset($checkout['rating']))
                            @for ($i = 0; $i < $checkout['rating']; $i++)
                                <i class="fa fa-star fa-2x text-warning"
                                    wire:click="setRating({{ $i + 1 }})"></i>
                            @endfor
                            @for ($i = $checkout['rating']; $i < 5; $i++)
                                <i class="fa fa-star-o fa-2x text-warning"
                                    wire:click="setRating({{ $i + 1 }})"></i>
                            @endfor
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label-sm" for="EntryNotes">Feedback Notes
                            </label>
                            <textarea class="form-control" rows="5" wire:model.defer="checkout.feedback_comments" cols="5"
                                id="EntryNotes"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" required
                                    wire:model="checkout.provider_agreement_confirmation"
                                    id="provider_agreement_confirmation">
                                <label class="form-check-label" for="provider_agreement_confirmation">
                                    I agree that the information I have provided is complete, accurate, and
                                    truthful. I
                                    understand that I am responsible for ensuring the information I provide is
                                    correct.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="mb-4">
            <div class="form-actions d-flex gap-3 justify-content-center mt-5">
                <button type="button" class="btn btn-primary rounded" wire:click="setStep(3)">Back</button>
                <button x-on:click="offcanvasOpenCheckOut = !offcanvasOpenCheckOut" type="button"
                    class="btn btn-outline-dark rounded">Cancel</button>
                <button type="submit" class="btn btn-primary rounded"
                    x-on:close-check-out.window="offcanvasOpenCheckOut = !offcanvasOpenCheckOut">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <!-- END: Step 4 -->
</div>
