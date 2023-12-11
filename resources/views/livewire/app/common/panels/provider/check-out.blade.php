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
                                            height="20" viewBox="0 0 20 20" fill="currentColor">
                                            <use xlink:href="/css/common-icons.svg#datefield-icon">
                                            </use>
                                        </svg>
                                        <input class="form-control form-control-md js-single-date"
                                            {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                        height="20" viewBox="0 0 20 20" fill="currentColor">
                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                        </use>
                                    </svg>
                                    <input class="form-control form-control-md js-single-date"
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                    {{-- START : update to change time fields to dropdown - Maarooshaa --}}

                                    <div class="d-flex">
                                        <div class="d-flex flex-column">
                                            <div class="d-md-flex d-lg-inline">
                                                <div class="time d-flex align-items-center gap-1  hours"
                                                    style="margin-top:2px;">
                                                    <select class="form-select form-select-sm "
                                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
                                                        id="actual_start_hour" aria-label="Start Time"
                                                        name="actual_start_hour" tabindex=""
                                                        wire:model.defer="checkout.actual_start_hour">
                                                        @for ($i = 0; $i < 24; $i++)
                                                            <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                                {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                                        @endfor

                                                    </select>

                                                    <svg aria-label="colon" width="20" height="19"
                                                        viewBox="0 0 5 19">
                                                        <use xlink:href="/css/common-icons.svg#date-colon">
                                                        </use>
                                                    </svg>

                                                    <select class="form-select form-select-sm"
                                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
                                                        aria-label="Start Minutes" id="actual_start_min"
                                                        name="actual_start_min" tabindex=""
                                                        wire:model.defer="checkout.actual_start_min">
                                                        @for ($i = 0; $i < 59; $i++)
                                                            <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                                {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                                        @endfor

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- END: update to change time fields to dropdown - Maarooshaa --}}

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

                        @error('timestamps.start')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{-- {{ $message }} --}}
                                The start time can not be greater than now. 
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
                                {{-- START : update to change time fields to dropdown - Maarooshaa --}}

                                <div class="d-flex">
                                    <div class="d-flex flex-column">
                                        <div class="d-md-flex d-lg-inline">
                                            <div class="time d-flex align-items-center gap-1  hours"
                                                style="margin-top:2px;">
                                                <select class="form-select form-select-sm " id="hour"
                                                    aria-label="End Time"
                                                    {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
                                                    id="actual_end_hour" aria-label="Start Time"
                                                    name="actual_end_hour"
                                                    wire:model.defer="checkout.actual_end_hour">
                                                    @for ($i = 0; $i < 24; $i++)
                                                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                            {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                                    @endfor

                                                </select>

                                                <svg aria-label="colon" width="20" height="19"
                                                    viewBox="0 0 5 19">
                                                    <use xlink:href="/css/common-icons.svg#date-colon">
                                                    </use>
                                                </svg>

                                                <select class="form-select form-select-sm"
                                                    {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
                                                    aria-label="Start Minutes" id="actual_end_min"
                                                    name="actual_end_min" wire:model.defer="checkout.actual_end_min">
                                                    @for ($i = 0; $i < 59; $i++)
                                                        <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                            {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                                    @endfor

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- END : update to change time fields to dropdown - Maarooshaa --}}


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
                        @error('timestamps.end')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{-- {{ $message }} --}}
                                The end time can not be greater than now.
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="checkout_confirmation_upload_type"
                            {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                            {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
                                        wire:model="checkout.digital_signature.customer_type"
                                        name="Print&SignDigitalSignature" id="Print&SignDigitalSignature2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <small>
                                            Other
                                        </small>
                                    </label>
                                </div>
                            </div>

                            <div
                                class="row mb-4 {{ isset($checkout['digital_signature']) && $checkout['digital_signature']['customer_type'] == 'other' ? '' : 'hidden' }}">
                                <div class="col-lg-6">
                                    <label class="form-label" for="signer-name">Signer’s Name</label>
                                    <input type="" name="" class="form-control"
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
                                        wire:model="checkout.digital_signature.signer_name" placeholder="Enter Name"
                                        id="signer-name">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label" for="position">Position</label>
                                    <input type="" name="" class="form-control"
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }} id="entry-notes"></textarea>
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
                                            {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                            {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                            {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                                    <span wire:click="setRating({{ $i + 1 }})">
                                        <i class="fa fa-star fa-2x text-warning rating"></i>
                                    </span>
                                @endfor
                                @for ($i = $checkout['rating']; $i < 5; $i++)
                                    <span wire:click="setRating({{ $i + 1 }})">
                                        <i class="far fa-star fa-2x text-warning rating"></i>
                                    </span>
                                @endfor
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <label class="form-label-sm" for="EntryNotes">Feedback Notes
                                </label>
                                <textarea class="form-control" rows="5" wire:model.defer="checkout.feedback_comments" cols="5"
                                    {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }} id="EntryNotes"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" required
                                        {{ $this->booking_provider->check_in_status == 3 && !$isAdmin ? 'disabled' : '' }}
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
                    @if ($this->booking_provider->check_in_status == 3 && !$isAdmin)
                        <button x-on:click="offcanvasOpenCheckOut = !offcanvasOpenCheckOut" type="button"
                            class="btn btn-outline-dark rounded">Close</button>
                    @else
                        <button type="button" class="btn btn-primary rounded" wire:click="setStep(3)">Back</button>
                        <button x-on:click="offcanvasOpenCheckOut = !offcanvasOpenCheckOut" type="button"
                            class="btn btn-outline-dark rounded">Cancel</button>
                        <button type="submit" class="btn btn-primary rounded"
                            x-on:close-check-out.window="offcanvasOpenCheckOut = !offcanvasOpenCheckOut;assignmentDetails=false">Submit</button>
                    @endif
                </div>
            </div>
        </form>
    </div>
    <!-- END: Step 4 -->
</div>
