<div class="">
    <div class="row between-section-segment-spacing">
        <div class="accordion" id="accordionAssignment">
            <div class="accordion-item">
                <h2 class="accordion-header" id="AssignmentNo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseAssignmentNo" aria-expanded="true"
                        aria-controls="collapseAssignmentNo">
                        Assignment No: <span class="text-sm"> {{ $assignment->booking_number }}</span>
                    </button>
                </h2>
                <div id="collapseAssignmentNo" class="accordion-collapse collapse show" aria-labelledby="AssignmentNo"
                    data-bs-parent="#accordionAssignment">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-lg-3 py-2 fw-semibold text-sm">
                                Customer & Company:
                            </div>
                            <div class="col-lg-7 py-2 text-sm">
                                {{ $assignment->customer ? $assignment->customer->name : 'N/A' }},
                                {{ $assignment->customer ? $assignment->customer->company->name : 'N/A' }}
                            </div>
                            <div class="col-lg-3 py-2 fw-semibold text-sm">
                                Service:
                            </div>
                            <div class="col-lg-7 py-2 text-sm">
                                {{ $booking_service ? $booking_service->service->name : '' }}

                            </div>
                            <div class="col-lg-3 py-2 fw-semibold text-sm">
                                Time & Date:
                            </div>
                            <div class="col-lg-7 py-2 text-sm">
                                {{ date_format(date_create($assignment->booking_start_at), 'h:i A - d F Y') }}
                            </div>
                            <div class="col-lg-3 py-2 fw-semibold text-sm">
                                Service Location:
                            </div>
                            <div class="col-lg-7 py-2 text-sm text-primary">
                                <a class="" target="_blank"
                                    href="https://www.google.com/maps/search/?api=1&query={{ $assignment->physicalAddress ? str_replace(' ', '+', $assignment->physicalAddress->address_line1 . ' ' . $assignment->physicalAddress->address_line2 . ' ' . $assignment->physicalAddress->city . ' ' . $assignment->physicalAddress->state . ' ' . $assignment->physicalAddress->country) : '' }}">

                                    {{ $assignment->physicalAddress ? $assignment->physicalAddress->address_line1 . ', ' . $assignment->physicalAddress->address_line2 : 'N/A' }}
                                </a>
                            </div>
                            <div class="col-lg-3 py-2 fw-semibold text-sm">
                                City, Province:
                            </div>
                            <div class="col-lg-7 py-2 text-sm">
                                {{ $assignment->physicalAddress ? $assignment->physicalAddress->city . ', ' . $assignment->physicalAddress->state : 'N/A' }}
                            </div>
                            <div class="col-lg-3 py-2 fw-semibold text-sm">
                                Country
                            </div>
                            <div class="col-lg-7 py-2 text-sm">
                                {{ $assignment->physicalAddress ? $assignment->physicalAddress->country : 'N/A' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="save">
        <div class="between-section-segment-spacing">
            <div class="d-flex justify-content-between gap-3 align-items-center mb-3">
                <div>
                    <label class="form-label mb-0">Check-in</label>
                    <div class="text-sm">
                        {{ date_format(date_create($assignment->booking_start_at), 'm/d/Y h:iA ') }}
                    </div>
                </div>
                <div>
                    {{-- <div class="form-check form-switch mb-0">
                        <input wire:model.defer="checkIn" class="form-check-input" type="checkbox" role="switch"
                            id="checkin" aria-label="Check-in permission toggle">
                        <label class="form-check-label" for="checkin">No</label>
                        <label class="form-check-label" for="checkin">Yes</label>
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="border-bottom border-dark border-start-0 border-end-0 border-top-0 py-2">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="form-label-sm fw-semibold mb-lg-0">Start Date:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                                <div class="text-sm">
                                    {{ date_format(date_create($assignment->booking_start_at), 'd F Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-dark border-start-0 border-end-0 border-top-0 py-2">
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="form-label-sm fw-semibold mb-lg-0">Start Time:</label>
                            </div>
                            <div class="col-lg-2 align-self-center">
                                <div class="text-sm">
                                    {{ date_format(date_create($assignment->booking_start_at), 'h:i A') }}
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <label class="form-label-sm fw-semibold mb-lg-0">Actual Start Time:</label>
                            </div>
                            <div class="col-lg-4 align-self-center">
                                <div class="d-flex gap-2">
                                    <div class="time d-flex align-items-center gap-2">
                                        <div>
                                            <input required class="form-control form-control-sm text-center hours"
                                                {{ (($this->booking_provider->check_in_status == 1|| $this->booking_provider->check_in_status == 3) && !$isAdmin) ? 'disabled' : '' }}
                                                id="hour" aria-label="Start Time" name="hour" placeholder="00"
                                                type="" tabindex="" wire:model.defer="hours" maxlength="2">
                                        </div>
                                        <svg width="5" height="19" viewBox="0 0 5 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                fill="black" />
                                        </svg>
                                        <div>
                                            <input required class="form-control form-control-sm text-center  mins"
                                                {{ (($this->booking_provider->check_in_status == 1|| $this->booking_provider->check_in_status == 3)&& !$isAdmin) ? 'disabled' : '' }}
                                                aria-label="Start Minutes" id="mins" name="DisplayToProviders"
                                                placeholder="00" type="" tabindex="" wire:model.defer="mins"
                                                maxlength="2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        @error('hours')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                        @error('mins')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 ">
            @if ($form_id)
                <div>
                    {{-- <h3 class="text-primary">Check-In Form <small>(coming soon)</small> </h3> --}}
                    <div class="row">
                        @livewire('app.common.forms.custom-form-display', ['showForm' => true, 'formId' => $form_id, 'bookingId' => $assignment->id, 'lastForm' => false,  'bookingId' => $assignment->id,  'formType' => 2, 'service_id' => $booking_service->services,  'added_by_id' => $provider_id])

                    </div>
                </div>
            @endif
            <div
                class="row {{ isset($checkin_details['enable_digital_signature']) && $checkin_details['enable_digital_signature'] ? '' : 'hidden' }}">
                <div class="col-lg-4 mb-4">
                    <div class="mb-2 d-flex align-items-center gap-2">
                        <div>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.8997 18.7202C10.4288 18.63 10.0284 18.3612 9.67629 18.0857C9.48917 17.9394 9.31907 17.7938 9.15815 17.6944C9.04894 17.6264 8.95096 17.5634 8.8523 17.6526C8.39403 18.0595 7.89494 17.9697 7.38837 17.7737C7.20125 17.7016 7.01311 17.6169 6.82804 17.572C6.70726 17.5427 6.58751 17.5291 6.47388 17.5822C6.36263 17.6346 6.26261 17.7424 6.16089 17.9142C6.01664 18.1571 5.83905 18.2973 5.64989 18.3653C5.3767 18.4647 5.05826 18.4187 4.72826 18.2238C4.38975 18.0251 4.0264 17.6512 3.68891 17.2055C3.3453 17.4587 2.9891 17.7227 2.62949 18.0074C2.48014 18.1255 2.26377 18.1003 2.14503 17.952C2.0263 17.8033 2.05147 17.5876 2.20083 17.4692C2.5737 17.1739 2.94385 16.9021 3.29903 16.6401C2.87547 15.9713 2.54036 15.2418 2.42367 14.7142C2.20899 13.747 2.38148 12.8896 2.74414 12.2374C3.28542 11.2641 4.25434 10.7575 5.05418 10.9239C5.60906 11.0389 6.11768 11.4618 6.36671 12.3191C6.78517 13.7606 6.39937 14.7489 5.59954 15.6208C5.22633 16.0267 4.75547 16.4067 4.23325 16.8004C4.40267 17.0222 4.57924 17.2222 4.75343 17.3835C4.88271 17.5029 5.01097 17.6002 5.13515 17.6628C5.22769 17.7101 5.31376 17.7424 5.39371 17.7247C5.46277 17.7091 5.51448 17.6502 5.56586 17.5634C5.78155 17.1991 6.02106 17.014 6.25955 16.9259C6.60758 16.7973 6.97637 16.8779 7.34618 17.0191C7.52717 17.0882 7.70885 17.1698 7.88746 17.2181C8.06097 17.2651 8.23345 17.2797 8.39097 17.1395C8.83018 16.748 9.29151 16.9143 9.81509 17.3205C10.024 17.4828 10.2512 17.6798 10.5078 17.8346C10.5561 17.8639 10.6054 17.8911 10.6568 17.9162L10.0189 14.5383C9.97261 14.2923 10.0168 14.0378 10.1451 13.8235L11.26 11.9455C10.9807 11.5509 10.8871 11.0348 11.0521 10.5418L11.1287 10.3125C11.3212 9.74097 11.8118 9.35279 12.3711 9.26263L12.6263 7.95112H1.03424C0.462347 7.95112 0 8.41278 0 8.98128V18.942C0 19.5115 0.463368 19.9721 1.03424 19.9721H18.9658C19.5377 19.9721 20 19.5105 20 18.942V8.98128C20 8.41176 19.5366 7.95112 18.9658 7.95112H18.1795L16.8007 10.7555C17.1769 11.1627 17.3253 11.755 17.1361 12.316L17.0592 12.5463C16.8976 13.0277 16.5224 13.3795 16.0746 13.5323L15.8276 15.7192C15.7991 15.9702 15.6793 16.2016 15.4912 16.3703L12.5412 19.01C12.3088 19.2182 11.9632 19.2444 11.7016 19.073C11.6488 19.0393 11.6026 18.9985 11.5628 18.9525C11.5039 18.9641 11.442 18.9682 11.3787 18.9641C11.1885 18.9525 11.0174 18.8603 10.8997 18.7202ZM17.113 3.89394e-05H17.0793C15.8885 -0.00642501 14.7893 0.792391 14.4865 2.01069C14.4855 2.01613 14.4835 2.02225 14.4825 2.02736L12.9355 9.98286L12.9059 9.97231C12.8188 9.94305 12.7304 9.92842 12.6433 9.92638H12.6212C12.2524 9.9274 11.9084 10.1598 11.7846 10.5282L11.7077 10.7575C11.5668 11.1739 11.7574 11.622 12.1367 11.819L10.7398 14.1709C10.6979 14.243 10.682 14.328 10.6979 14.4097L11.4294 18.2782L12.6283 14.7142C12.3469 14.4692 12.2248 14.0715 12.351 13.6976C12.4844 13.302 12.8545 13.0509 13.2516 13.0499H13.2631C13.3611 13.0509 13.4598 13.0665 13.5564 13.0992C14.0545 13.2656 14.3236 13.8034 14.1576 14.2998C14.0273 14.689 13.667 14.938 13.2781 14.9476L12.084 18.4983L15.0329 15.8573C15.0962 15.8018 15.136 15.7243 15.1455 15.6406L15.4524 12.9199L15.4714 12.9223C15.5038 12.9264 15.5354 12.9274 15.5681 12.9274H15.5868C15.9505 12.9199 16.2859 12.6886 16.4087 12.3256L16.4856 12.0962C16.6411 11.6346 16.391 11.1355 15.9273 10.9804L15.9253 10.9793L19.5019 3.70018C19.505 3.69507 19.507 3.68963 19.5091 3.68453C20.1187 2.26414 19.3808 0.627048 17.9097 0.136123C17.6447 0.05005 17.3766 0.00514213 17.113 3.89394e-05ZM3.84541 16.2363C4.13016 16.0216 4.39825 15.809 4.64218 15.5946C5.56484 14.7792 6.11156 13.9123 5.70466 12.5116C5.58899 12.1139 5.4063 11.8452 5.17291 11.7016C4.96164 11.5706 4.71465 11.5519 4.4697 11.6159C3.58379 11.8442 2.75877 13.0437 3.09626 14.5675C3.19799 15.0241 3.4841 15.6532 3.84541 16.2363Z"
                                    />
                            </svg>
                        </div>
                        <div class="align-self-end fw-semibold leading-none">Provider Signature</div>
                    </div>

                    <div class="btn btn-primary rounded">
                        <label for="provider_signature">Click to Sign

                        </label>
                    </div>
                    <input style=" opacity: 0; z-index: -1; position: absolute;" id="provider_signature"
                        {{ (($this->booking_provider->check_in_status == 1|| $this->booking_provider->check_in_status == 3)&& !$isAdmin) ? 'disabled' : '' }}
                        wire:model="provider_signature" type="file">
                    <div class="text-muted" wire:loading wire:target='provider_signature'>
                        Uploading...
                    </div>

                    <div class="text-muted my-1 mx-2">
                        @if ($provider_signature)
                            {{ $provider_signature->getClientOriginalName() }}
                        @endif
                        @if ($files['provider_signature'])
                            {{ basename($files['provider_signature']) }}
                        @endif
                    </div>
                    @error('provider_signature')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="mb-2 d-flex align-items-center gap-2">
                        <div>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.8997 18.7202C10.4288 18.63 10.0284 18.3612 9.67629 18.0857C9.48917 17.9394 9.31907 17.7938 9.15815 17.6944C9.04894 17.6264 8.95096 17.5634 8.8523 17.6526C8.39403 18.0595 7.89494 17.9697 7.38837 17.7737C7.20125 17.7016 7.01311 17.6169 6.82804 17.572C6.70726 17.5427 6.58751 17.5291 6.47388 17.5822C6.36263 17.6346 6.26261 17.7424 6.16089 17.9142C6.01664 18.1571 5.83905 18.2973 5.64989 18.3653C5.3767 18.4647 5.05826 18.4187 4.72826 18.2238C4.38975 18.0251 4.0264 17.6512 3.68891 17.2055C3.3453 17.4587 2.9891 17.7227 2.62949 18.0074C2.48014 18.1255 2.26377 18.1003 2.14503 17.952C2.0263 17.8033 2.05147 17.5876 2.20083 17.4692C2.5737 17.1739 2.94385 16.9021 3.29903 16.6401C2.87547 15.9713 2.54036 15.2418 2.42367 14.7142C2.20899 13.747 2.38148 12.8896 2.74414 12.2374C3.28542 11.2641 4.25434 10.7575 5.05418 10.9239C5.60906 11.0389 6.11768 11.4618 6.36671 12.3191C6.78517 13.7606 6.39937 14.7489 5.59954 15.6208C5.22633 16.0267 4.75547 16.4067 4.23325 16.8004C4.40267 17.0222 4.57924 17.2222 4.75343 17.3835C4.88271 17.5029 5.01097 17.6002 5.13515 17.6628C5.22769 17.7101 5.31376 17.7424 5.39371 17.7247C5.46277 17.7091 5.51448 17.6502 5.56586 17.5634C5.78155 17.1991 6.02106 17.014 6.25955 16.9259C6.60758 16.7973 6.97637 16.8779 7.34618 17.0191C7.52717 17.0882 7.70885 17.1698 7.88746 17.2181C8.06097 17.2651 8.23345 17.2797 8.39097 17.1395C8.83018 16.748 9.29151 16.9143 9.81509 17.3205C10.024 17.4828 10.2512 17.6798 10.5078 17.8346C10.5561 17.8639 10.6054 17.8911 10.6568 17.9162L10.0189 14.5383C9.97261 14.2923 10.0168 14.0378 10.1451 13.8235L11.26 11.9455C10.9807 11.5509 10.8871 11.0348 11.0521 10.5418L11.1287 10.3125C11.3212 9.74097 11.8118 9.35279 12.3711 9.26263L12.6263 7.95112H1.03424C0.462347 7.95112 0 8.41278 0 8.98128V18.942C0 19.5115 0.463368 19.9721 1.03424 19.9721H18.9658C19.5377 19.9721 20 19.5105 20 18.942V8.98128C20 8.41176 19.5366 7.95112 18.9658 7.95112H18.1795L16.8007 10.7555C17.1769 11.1627 17.3253 11.755 17.1361 12.316L17.0592 12.5463C16.8976 13.0277 16.5224 13.3795 16.0746 13.5323L15.8276 15.7192C15.7991 15.9702 15.6793 16.2016 15.4912 16.3703L12.5412 19.01C12.3088 19.2182 11.9632 19.2444 11.7016 19.073C11.6488 19.0393 11.6026 18.9985 11.5628 18.9525C11.5039 18.9641 11.442 18.9682 11.3787 18.9641C11.1885 18.9525 11.0174 18.8603 10.8997 18.7202ZM17.113 3.89394e-05H17.0793C15.8885 -0.00642501 14.7893 0.792391 14.4865 2.01069C14.4855 2.01613 14.4835 2.02225 14.4825 2.02736L12.9355 9.98286L12.9059 9.97231C12.8188 9.94305 12.7304 9.92842 12.6433 9.92638H12.6212C12.2524 9.9274 11.9084 10.1598 11.7846 10.5282L11.7077 10.7575C11.5668 11.1739 11.7574 11.622 12.1367 11.819L10.7398 14.1709C10.6979 14.243 10.682 14.328 10.6979 14.4097L11.4294 18.2782L12.6283 14.7142C12.3469 14.4692 12.2248 14.0715 12.351 13.6976C12.4844 13.302 12.8545 13.0509 13.2516 13.0499H13.2631C13.3611 13.0509 13.4598 13.0665 13.5564 13.0992C14.0545 13.2656 14.3236 13.8034 14.1576 14.2998C14.0273 14.689 13.667 14.938 13.2781 14.9476L12.084 18.4983L15.0329 15.8573C15.0962 15.8018 15.136 15.7243 15.1455 15.6406L15.4524 12.9199L15.4714 12.9223C15.5038 12.9264 15.5354 12.9274 15.5681 12.9274H15.5868C15.9505 12.9199 16.2859 12.6886 16.4087 12.3256L16.4856 12.0962C16.6411 11.6346 16.391 11.1355 15.9273 10.9804L15.9253 10.9793L19.5019 3.70018C19.505 3.69507 19.507 3.68963 19.5091 3.68453C20.1187 2.26414 19.3808 0.627048 17.9097 0.136123C17.6447 0.05005 17.3766 0.00514213 17.113 3.89394e-05ZM3.84541 16.2363C4.13016 16.0216 4.39825 15.809 4.64218 15.5946C5.56484 14.7792 6.11156 13.9123 5.70466 12.5116C5.58899 12.1139 5.4063 11.8452 5.17291 11.7016C4.96164 11.5706 4.71465 11.5519 4.4697 11.6159C3.58379 11.8442 2.75877 13.0437 3.09626 14.5675C3.19799 15.0241 3.4841 15.6532 3.84541 16.2363Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div class="align-self-end fw-semibold leading-none">Customer Signature</div>
                    </div>
                    <div class="btn btn-primary rounded">
                        <label for="customer_signature">Click to Sign

                        </label>
                    </div>
                    <input style=" opacity: 0; z-index: -1; position: absolute;" id="customer_signature"
                        {{ (($this->booking_provider->check_in_status == 1|| $this->booking_provider->check_in_status == 3)&& !$isAdmin) ? 'disabled' : '' }} class=""
                        wire:model="customer_signature" type="file">
                    <div class="text-muted" wire:loading wire:target='customer_signature'>
                        Uploading...
                    </div>
                    <div class="text-muted my-1 mx-2">
                        @if ($customer_signature)
                            {{ $customer_signature->getClientOriginalName() }}
                        @endif
                        @if ($files['customer_signature'])
                            {{ basename($files['customer_signature']) }}
                        @endif
                    </div>
                    @error('customer_signature')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <hr>
            <div class="between-section-segment-spacing">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_9222_203708)" />
                    <path d="M7.35297 15.7661L12.451 21.119L22.6471 9.64844" stroke="white" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <defs>
                        <linearGradient id="paint0_linear_9222_203708" x1="15" y1="0" x2="27.0359"
                            y2="0" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#213969" />
                            <stop offset="1" stop-color="#204387" />
                        </linearGradient>
                    </defs>
                </svg>
                <label class="form-label-sm mb-0 text-primary">Verified Location
                    <small>(coming soon)</small>
                </label>
            </div>
            <div class="form-actions d-flex gap-3 justify-content-center mt-5">
                @if ((($this->booking_provider->check_in_status == 1|| $this->booking_provider->check_in_status == 3)&& !$isAdmin))
                    <button type="button" class="btn btn-outline-dark rounded"
                        x-on:click="offcanvasOpenCheckIn = !offcanvasOpenCheckIn">Close</button>
                @else
                    <button type="button" class="btn btn-outline-dark rounded"
                        x-on:click="offcanvasOpenCheckIn = !offcanvasOpenCheckIn">Back</button>
                    <button type="submit" class="btn btn-primary rounded" wire:loading.attr="disabled"
                        x-on:close-check-in-panel.window="offcanvasOpenCheckIn = !offcanvasOpenCheckIn">Submit</button>
                @endif
            </div>
        </div>
    </form>
</div>
