<div class="  row">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="between-section-segment-spacing">
        @if (count($booking->booking_services))

            {{-- <div class="row"> --}}
            {{--  changes to move display to bottom right in pane -- Maarooshaa Asim --}}
            <div class="d-inline-flex p-2 row"
                style="position: fixed;bottom: 24px;right: 44px;text-align: right;z-index:-10000">
                <div class="col-12 justify-content-start ">
                    <label for="amount" class="bg-muted">
                        Total Assignment Charges

                        <strong class="">
                            {{ numberFormat($booking_total_amount) }}

                        </strong>
                    </label>
                </div>
                <div class="col-12 w-20 d-flex justify-content-end mt-1">
                    <input type="number" name="amount" class="form-control form-control-sm " style="width:20%"
                        placeholder="$00:00" wire:model.lazy="override_amount" id="total-service-payment">
                    <button type="button" wire:click="overrideBookingAmount"
                        class=" self_end btn btn-sm mx-1 btn-outline-dark rounded  align-end">Override</button>
                </div>
            </div>
            {{-- </div> --}}
            @foreach ($booking->booking_services as $bookingService)
                <!-- Hoverable rows start -->
                <div class="mt-3">
                    <div class="row" id="table-hover-row">
                        <div class="col-12">
                            <div class=" row">
                                <div class="col-12">
                                    <h2 class="pl-2 pt-3">
                                        {{ $bookingService->service->name }} </h2>
                                </div>
                                <div class="col-4  d-inline-flex">
                                    <div class="">
                                        <p>Duration :</p>
                                        <p>Business Hours :</p>
                                        <p>After Business Hours :</p>

                                    </div>
                                    <div class="mx-5" wire:ignore>
                                        <p>{{ $bookingService['service_details'] ? $bookingService['service_details']['total_duration']['hours'] : '0' }}
                                            Hours,
                                            {{ $bookingService['service_details'] ? $bookingService['service_details']['total_duration']['mins'] : '0' }}
                                            mins </p>
                                        <p>{{ $bookingService['service_details'] ? floor($bookingService['service_details']['business_hour_duration'] / 60) : '0' }}
                                            Hours,
                                            {{ $bookingService['service_details'] ? fmod($bookingService['service_details']['business_hour_duration'] / 60, 1) * 60 : '0' }}
                                            mins </p>

                                        <p>{{ $bookingService['service_details'] ? floor($bookingService['service_details']['after_hour_duration'] / 60) : '0' }}
                                            Hours,
                                            {{ $bookingService['service_details'] ? fmod($bookingService['service_details']['after_hour_duration'] / 60, 1) * 60 : '0' }}
                                            mins </p>
                                    </div>
                                </div>
                                <div class="col-4  d-inline-flex">
                                    <div class="">
                                        <p> Start Time :</p>
                                        <p> End Time :</p>

                                    </div>
                                    <div class="mx-5" wire:ignore>
                                        <p>{{ $bookingService['start_time'] ? formatDateTime($bookingService['start_time']) : 'N/A' }}
                                        </p>
                                        <p>{{ $bookingService['end_time'] ? formatDateTime($bookingService['end_time']) : 'N/A' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-4 d-inline-flex justify-content-end">
                                    <div class="flex align-self-end">
                                        <label class="form-label-sm" for="service_charges">
                                            Service Charges</label>
                                        <input type="number" name="" class="form-control form-control-sm"
                                            placeholder="$00:00"
                                            wire:model.lazy="service_charges.{{ $bookingService->id }}.charges"
                                            id="service_charges">

                                    </div>
                                    <div class="flex  align-self-end">
                                        <button type="button"
                                            wire:click="overrideServiceCharges({{ $bookingService->id }})"
                                            class="self_end btn btn-sm mx-1 btn-outline-dark rounded ">Override</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
                                    <thead>
                                        <tr role="row">
                                            <th scope="col">Provider</th>
                                            <th scope="col">Pay Duration & Rates</th>
                                            <th scope="col">Final Payment</th>
                                            <th scope="col">Billable Duration<br>
                                                <small>(coming soon)</small>
                                            </th>
                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($providers[$bookingService->id]) && count($providers[$bookingService->id]))
                                            @foreach ($providers[$bookingService->id] as $provider)
                                                <tr role="row" class="">

                                                    <td class="align-middle border-end-2 " style="min-width:250px">
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <div>
                                                                <img width="50" height="50"
                                                                    src="{{ $provider['profile_pic'] ? $provider['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                                    class="rounded-circle" alt="Provider Profile Image">
                                                            </div>
                                                            <div class="pt-2">
                                                                <div class="font-family-secondary leading-none">
                                                                    {{ $provider['name'] }}
                                                                </div>
                                                                <a target="_blank"
                                                                    href="{{ route('tenant.provider-profile', ['providerID' => $provider['provider_id']]) }}"
                                                                    class="font-family-secondary"><small>
                                                                        {{ $provider['email'] }}</small></a>
                                                            </div>
                                                        </div>
                                                        <hr>

                                                        <div class="d-inline-flex my-2">
                                                            <p class="pe-5">Check In</p>
                                                            <div class="">
                                                                <div class="d-flex gap-2">
                                                                    <div class="time d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <input
                                                                                class="form-control form-control-sm text-center hours"
                                                                                id="actual_start_hour"
                                                                                aria-label="Start Time"
                                                                                name="actual_start_hour" type="text"
                                                                                tabindex=""
                                                                                wire:model.defer="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.actual_start_hour"
                                                                                maxlength="2">
                                                                        </div>
                                                                        <svg width="5" height="19"
                                                                            viewBox="0 0 5 19" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                        <div>
                                                                            <input
                                                                                class="form-control form-control-sm text-center  mins"
                                                                                aria-label="Start Minutes"
                                                                                id="actual_start_min"
                                                                                name="actual_start_min" type="text"
                                                                                tabindex=""
                                                                                wire:model.defer="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.actual_start_min"
                                                                                maxlength="2">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('closeOut.' . $bookingService->id . '.' .
                                                                    $provider['provider_id'] . '.actual_start_hour')
                                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                                        Hour field is required to be between 0 and 24.
                                                                    </span>
                                                                @enderror
                                                                @error('closeOut.' . $bookingService->id . '.' .
                                                                    $provider['provider_id'] . '.actual_start_min')
                                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                                        Minute field is required to be between 0 and 59.
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="d-inline-flex my-2">
                                                            <p class="inline-block pe-5">Check Out</p>
                                                            <div class="">
                                                                <div class="d-flex gap-2">
                                                                    <div class="time d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <input
                                                                                class="form-control form-control-sm text-center hours"
                                                                                id="actual_start_hour"
                                                                                aria-label="Start Time"
                                                                                name="actual_start_hour"
                                                                                type="text" tabindex=""
                                                                                wire:model.defer="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.actual_end_hour"
                                                                                maxlength="2">
                                                                        </div>
                                                                        <svg width="5" height="19"
                                                                            viewBox="0 0 5 19" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                        <div>
                                                                            <input
                                                                                class="form-control form-control-sm text-center  mins"
                                                                                aria-label="Start Minutes"
                                                                                id="actual_start_min"
                                                                                name="actual_start_min" type="text"
                                                                                tabindex=""
                                                                                wire:model.defer="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.actual_end_min"
                                                                                maxlength="2">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('closeOut.' . $bookingService->id . '.' .
                                                                    $provider['provider_id'] . '.actual_end_hour')
                                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                                        Hour field is required to be between 0 and 24.
                                                                    </span>
                                                                @enderror

                                                                @error('closeOut.' . $bookingService->id . '.' .
                                                                    $provider['provider_id'] . '.actual_end_min')
                                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                                        Minute field is required to be between 0 and 59.
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="d-inline-flex my-2">
                                                            <p class="pe-5">Duration</p>
                                                            <div class="">
                                                                <div class="d-flex gap-2">
                                                                    <div class="time d-flex align-items-center gap-2">
                                                                        <div>
                                                                            <input
                                                                                class="form-control form-control-sm text-center hours"
                                                                                id="actual_start_hour"
                                                                                aria-label="Start Time"
                                                                                name="actual_start_hour"
                                                                                type="text" tabindex=""
                                                                                wire:model.defer="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.actual_duration_hour"
                                                                                maxlength="2">
                                                                        </div>
                                                                        <svg width="5" height="19"
                                                                            viewBox="0 0 5 19" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                        <div>
                                                                            <input
                                                                                class="form-control form-control-sm text-center  mins"
                                                                                aria-label="Start Minutes"
                                                                                id="actual_start_min"
                                                                                name="actual_start_min" type="text"
                                                                                tabindex=""
                                                                                wire:model.defer="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.actual_duration_min"
                                                                                maxlength="2">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @error('closeOut.' . $bookingService->id . '.' .
                                                                    $provider['provider_id'] . '.actual_duration_hour')
                                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                                        Hour field is required to be between 0 and 24.
                                                                    </span>
                                                                @enderror

                                                                @error('closeOut.' . $bookingService->id . '.' .
                                                                    $provider['provider_id'] . '.actual_duration_min')
                                                                    <span class="d-inline-block invalid-feedback mt-2">
                                                                        Minute field is required to be between 0 and 59.
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                    </td>
                                                    <td class="align-middle border-end-2">
                                                        <div class="d-grid grid-cols-1 gap-3 mb-3">
                                                            @if (!$provider['service_payment_details']['day_rate'] && !$provider['service_payment_details']['fixed_rate'])
                                                                <div class="row">
                                                                    <div class="  mt-1">
                                                                        <div class="col col-12">
                                                                            <div class="col-12 mt-1">
                                                                                <label class="form-label-sm"><strong>
                                                                                        Business
                                                                                        Hours </strong></label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-3 mt-1">
                                                                                    <label
                                                                                        class="form-label-sm">Duration:</label>
                                                                                </div>
                                                                                <div class="col-7">
                                                                                    <div class="input-group">
                                                                                        <input type=""
                                                                                            wire:blur="updateTotal({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                                            wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.b_hours_duration"
                                                                                            class="form-control form-control-sm text-center"
                                                                                            placeholder="0"
                                                                                            aria-label="Hours">

                                                                                        <div
                                                                                            class="input-group-text p-0">
                                                                                            <select
                                                                                                class="form-select form-select-sm"
                                                                                                aria-label="Days"
                                                                                                disabled>
                                                                                                <option>
                                                                                                    {{ $durationLabel[$bookingService->id] }}
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                        @error('closeOut.' .
                                                                                            $bookingService->id . '.' .
                                                                                            $provider['provider_id'] .
                                                                                            '.service_payment_details.b_hours_duration')
                                                                                            <span
                                                                                                class="d-inline invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col col-12 mt-2">
                                                                            <div class="d-flex ">
                                                                                <div class="row">

                                                                                    <div class="col-5 mt-1"
                                                                                        style="margin-right: -15px;">
                                                                                        <label for="average-rate"
                                                                                            class="form-label-sm">Average
                                                                                            Rate:
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="col-6 "
                                                                                        style=" width:47%;">
                                                                                        <div class="input-group ">
                                                                                            <input type=""
                                                                                                id="average-rate"
                                                                                                name="average-rate"
                                                                                                class="form-control form-control-sm  w-25%"
                                                                                                placeholder="$00:00"
                                                                                                wire:blur="updateTotal({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                                                wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.b_hours_rate">
                                                                                            @error('closeOut.' .
                                                                                                $bookingService->id . '.' .
                                                                                                $provider['provider_id'] .
                                                                                                '.service_payment_details.b_hours_rate')
                                                                                                <span
                                                                                                    class="d-inline invalid-feedback">
                                                                                                    {{ $message }}
                                                                                                </span>
                                                                                            @enderror

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="  mt-1">
                                                                        <div class="col col-12">
                                                                            <div class="col-12">
                                                                                <label class="form-label-sm"><strong>
                                                                                        After
                                                                                        Hours</strong></label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-3 mt-1">
                                                                                    <label
                                                                                        class="form-label-sm">Duration:</label>
                                                                                </div>
                                                                                <div class="col-7">
                                                                                    <div class="input-group">
                                                                                        <input type=""
                                                                                            name=""
                                                                                            wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.a_hours_duration"
                                                                                            class="form-control form-control-sm text-center"
                                                                                            wire:blur="updateTotal({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                                            placeholder="0"
                                                                                            aria-label="Hours">

                                                                                        <div
                                                                                            class="input-group-text p-0">
                                                                                            <select
                                                                                                class="form-select form-select-sm"
                                                                                                aria-label="Days"
                                                                                                disabled>
                                                                                                <option>
                                                                                                    {{ $durationLabel[$bookingService->id] }}
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                        @error('closeOut.' .
                                                                                            $bookingService->id . '.' .
                                                                                            $provider['provider_id'] .
                                                                                            '.service_payment_details.a_hours_duration')
                                                                                            <span
                                                                                                class="d-inline invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col col-12 mt-2">
                                                                            <div class="d-flex ">
                                                                                <div class="row">

                                                                                    <div class="col-5 mt-1"
                                                                                        style="margin-right: -15px;">
                                                                                        <label for="average-rate"
                                                                                            class="form-label-sm">Average
                                                                                            Rate:</label>
                                                                                    </div>
                                                                                    <div class="col-6 "
                                                                                        style=" width:47%;">
                                                                                        <div class="input-group ">
                                                                                            <input type=""
                                                                                                id="average-rate"
                                                                                                name="average-rate"
                                                                                                class="form-control form-control-sm  w-25%"
                                                                                                placeholder="$00:00"
                                                                                                wire:blur="updateTotal({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                                                wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.a_hours_rate">
                                                                                            @error('closeOut.' .
                                                                                                $bookingService->id . '.' .
                                                                                                $provider['provider_id'] .
                                                                                                '.service_payment_details.a_hours_rate')
                                                                                                <span
                                                                                                    class="d-inline invalid-feedback">
                                                                                                    {{ $message }}
                                                                                                </span>
                                                                                            @enderror

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            @elseif($provider['service_payment_details']['day_rate'])
                                                                <div class="row">
                                                                    <div class="  mt-1">
                                                                        <div class="col col-12">
                                                                            <div class="col-12">
                                                                                <label class="form-label-sm"><strong>
                                                                                        Day Rate</strong></label>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-3 mt-1">
                                                                                    <label
                                                                                        class="form-label-sm">Duration:</label>
                                                                                </div>
                                                                                <div class="col-7">
                                                                                    <div class="input-group">
                                                                                        <input type=""
                                                                                            name=""
                                                                                            wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.total_duration"
                                                                                            wire:blur="updateTotal({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                                            class="form-control form-control-sm text-center"
                                                                                            placeholder="0"
                                                                                            aria-label="Days">

                                                                                        <div
                                                                                            class="input-group-text p-0">
                                                                                            <select
                                                                                                class="form-select form-select-sm"
                                                                                                aria-label="Days"
                                                                                                disabled>
                                                                                                <option>
                                                                                                    {{ $durationLabel[$bookingService->id] }}
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                        @error('closeOut.' .
                                                                                            $bookingService->id . '.' .
                                                                                            $provider['provider_id'] .
                                                                                            '.service_payment_details.total_duration')
                                                                                            <span
                                                                                                class="d-inline invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col col-12 mt-2">
                                                                            <div class="d-flex ">
                                                                                <div class="row">

                                                                                    <div class="col-5 mt-1"
                                                                                        style="margin-right: -15px;">
                                                                                        <label for="average-rate"
                                                                                            class="form-label-sm">Average
                                                                                            Rate:</label>
                                                                                    </div>
                                                                                    <div class="col-6 "
                                                                                        style=" width:47%;">
                                                                                        <div class="input-group ">
                                                                                            <input type=""
                                                                                                id="average-rate"
                                                                                                name="average-rate"
                                                                                                class="form-control form-control-sm  w-25%"
                                                                                                placeholder="$00:00"
                                                                                                wire:blur="updateTotal({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                                                wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.rate">
                                                                                            @error('closeOut.' .
                                                                                                $bookingService->id . '.' .
                                                                                                $provider['provider_id'] .
                                                                                                'service_payment_details.rate')
                                                                                                <span
                                                                                                    class="d-inline invalid-feedback">
                                                                                                    {{ $message }}
                                                                                                </span>
                                                                                            @enderror

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="row">
                                                                    <div class="  mt-1">



                                                                        <div class="col col-12 mt-2">
                                                                            <div class="d-flex ">
                                                                                <div class="row">

                                                                                    <div class="col-5 mt-1"
                                                                                        style="margin-right: -15px;">
                                                                                        <label for="average-rate"
                                                                                            class="form-label-sm">Fixed
                                                                                            Rate:</label>
                                                                                    </div>
                                                                                    <div class="col-6 "
                                                                                        style=" width:47%;">
                                                                                        <div class="input-group ">
                                                                                            <input type=""
                                                                                                id="average-rate"
                                                                                                name="average-rate"
                                                                                                class="form-control form-control-sm  w-25%"
                                                                                                placeholder="$00:00"
                                                                                                wire:blur="updateTotal({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                                                wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.rate">
                                                                                            @error('closeOut.' .
                                                                                                $bookingService->id . '.' .
                                                                                                $provider['provider_id'] .
                                                                                                '.service_payment_details.rate')
                                                                                                <span
                                                                                                    class="d-inline invalid-feedback">
                                                                                                    {{ $message }}
                                                                                                </span>
                                                                                            @enderror

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            @endif
                                                            <hr>
                                                            <div class="row mb-1">
                                                                <div class="  mt-1">
                                                                    <div class="col col-12">
                                                                        <div class="col-12">
                                                                            <label class="form-label-sm"><strong>
                                                                                    Expedition
                                                                                    Charges</strong></label>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-3 mt-1">
                                                                                <label
                                                                                    class="form-label-sm">Duration:</label>
                                                                            </div>
                                                                            <div class="col-7">
                                                                                <div class="input-group">
                                                                                    <input type=""
                                                                                        name=""
                                                                                        wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.expedited_duration"
                                                                                        class="form-control form-control-sm text-center"
                                                                                        placeholder="0"
                                                                                        aria-label="Hours">

                                                                                    <div class="input-group-text p-0">
                                                                                        <select
                                                                                            class="form-select form-select-sm"
                                                                                            aria-label="Hours"
                                                                                            disabled>
                                                                                            <option>hour(s)</option>
                                                                                        </select>
                                                                                    </div>

                                                                                    @error('closeOut.' .
                                                                                        $bookingService->id . '.' .
                                                                                        $provider['provider_id'] .
                                                                                        '.service_payment_details.expedited_duration')
                                                                                        <span
                                                                                            class="d-inline invalid-feedback">
                                                                                            {{ $message }}
                                                                                        </span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col col-12 mt-2">
                                                                        <div class="d-flex ">
                                                                            <div class="row">

                                                                                <div class="col-5 mt-1"
                                                                                    style="margin-right: -15px;">
                                                                                    <label for="average-rate"
                                                                                        class="form-label-sm">Average
                                                                                        Rate:</label>
                                                                                </div>
                                                                                <div class="col-6 "
                                                                                    style=" width:47%;">
                                                                                    <div class="input-group ">
                                                                                        <input type=""
                                                                                            id="average-rate"
                                                                                            name="average-rate"
                                                                                            class="form-control form-control-sm  w-25%"
                                                                                            placeholder="$00:00"
                                                                                            wire:blur="updateTotal({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                                            wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.expedited_rate">
                                                                                        @error('closeOut.' .
                                                                                            $bookingService->id . '.' .
                                                                                            $provider['provider_id'] .
                                                                                            '.service_payment_details.expedited_rate')
                                                                                            <span
                                                                                                class="d-inline invalid-feedback">
                                                                                                {{ $message }}
                                                                                            </span>
                                                                                        @enderror

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            @if (count($provider['service_payment_details']['specialization_charges']))
                                                                <hr>

                                                                <div class="row">
                                                                    <div class="  mt-1">
                                                                        <div class="col col-12">
                                                                            <label class="form-label-sm"><strong>
                                                                                    Specialization
                                                                                    Charges</strong></label>
                                                                        </div>

                                                                        @foreach ($provider['service_payment_details']['specialization_charges'] as $key => $specialization)
                                                                            <div class="col col-12 mt-2">
                                                                                <div class="d-flex ">
                                                                                    <div class="row">

                                                                                        <div class="col-5 mt-1"
                                                                                            style="margin-right: -15px;">
                                                                                            <label for="average-rate"
                                                                                                class="form-label-sm">

                                                                                                {{ isset($specialization['label']) ? $specialization['label'] : '' }}
                                                                                                :</label>
                                                                                        </div>
                                                                                        <div class="col-6 mt-2"
                                                                                            style=" width:47%;">
                                                                                            <div class="input-group ">
                                                                                                <input type=""
                                                                                                    id="average-rate"
                                                                                                    name="average-rate"
                                                                                                    class="form-control form-control-sm  w-25%"
                                                                                                    placeholder="$00:00"
                                                                                                    wire:blur="updateTotal({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                                                    wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.service_payment_details.specialization_charges.{{ $key }}.provider_charges">
                                                                                                @error('closeOut.' .
                                                                                                    $bookingService->id .
                                                                                                    '.' .
                                                                                                    $provider['provider_id']
                                                                                                    .
                                                                                                    '.service_payment_details.specialization_charges.'
                                                                                                    . $key .
                                                                                                    'provider_charges')
                                                                                                    <span
                                                                                                        class="d-inline invalid-feedback">
                                                                                                        {{ $message }}
                                                                                                    </span>
                                                                                                @enderror

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach


                                                                    </div>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </td>

                                                    <td class="align-middle border-end-2">
                                                        <div class="">
                                                            <input type="number" name=""
                                                                class="form-control form-control-sm"
                                                                placeholder="$00:00"
                                                                wire:model.lazy="closeOut.{{ $bookingService->id }}.{{ $provider['provider_id'] }}.total_amount"
                                                                id="total-service-payment">
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center border-end-2">1 hours, 2 mins
                                                    </td>
                                                    <td class="align-middle text-center ">
                                                        <div class="d-inline-flex actions">
                                                            @if ($closeOut[$bookingService->id][$provider['provider_id']]['timeExtention'])
                                                                <a href="#" title="Accept Assignment"
                                                                    aria-label="Accept Assignment"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                                                    <svg width="30" height="30"
                                                                        viewBox="0 0 30 30" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_12641_124163)">
                                                                            <circle cx="15" cy="15"
                                                                                r="15" transform="rotate(90 15 15)"
                                                                                fill="url(#paint0_linear_12641_124163)" />
                                                                        </g>
                                                                        <path
                                                                            d="M8.07227 14.3478C8.09495 14.0839 8.20476 13.8502 8.36643 13.6374C8.93531 12.8874 10.2103 12.5436 11.1025 13.097C11.6278 13.4228 12.049 13.8423 12.3997 14.3384C12.691 14.7507 12.9542 15.1835 13.2376 15.6188C13.4352 15.3372 13.6347 15.0477 13.8392 14.7619C15.5966 12.307 17.5258 10.0023 19.7635 7.97094C21.1364 6.7248 22.7116 5.79911 24.4064 5.06712C24.6991 4.94038 24.9436 4.98971 25.1949 5.24427C25.0797 5.35192 24.9652 5.4585 24.8517 5.56615C23.3716 6.96855 21.9234 8.40336 20.6089 9.96346C19.8564 10.856 19.159 11.795 18.4414 12.7168C16.9961 14.5725 15.9145 16.6604 14.6864 18.6547C14.2122 19.4249 13.7427 20.1979 13.2678 20.9674C13.0791 21.2734 12.8307 21.2691 12.6413 20.9566C12.0271 19.9419 11.5428 18.8639 11.0852 17.7715C10.7028 16.8599 10.2736 15.9702 9.72814 15.1417C9.45846 14.732 9.14054 14.3946 8.6181 14.35C8.44204 14.3352 8.26237 14.3478 8.07227 14.3478Z"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M21.3628 11.1761L19.9229 12.6207C20.3388 13.5417 20.5696 14.5646 20.5696 15.6415C20.5696 19.6975 17.2931 22.9851 13.2508 22.9851C9.2085 22.9851 5.93204 19.6975 5.93204 15.6415C5.93204 11.5855 9.2085 8.29789 13.2508 8.29789C14.2615 8.29789 15.2235 8.50384 16.0984 8.87505L17.5487 7.41973C16.2648 6.74247 14.8019 6.35938 13.2508 6.35938C8.14167 6.35938 4 10.5151 4 15.6415C4 20.7679 8.14167 24.9233 13.2508 24.9233C18.3599 24.9233 22.5016 20.7676 22.5016 15.6411C22.5016 14.0231 22.0886 12.5008 21.3628 11.1761Z"
                                                                            fill="black" />
                                                                        <defs>
                                                                            <linearGradient
                                                                                id="paint0_linear_12641_124163"
                                                                                x1="33" y1="4.5"
                                                                                x2="15" y2="16"
                                                                                gradientUnits="userSpaceOnUse">
                                                                                <stop offset="0.530822"
                                                                                    stop-color="#D3D3D3" />
                                                                                <stop offset="0.950249"
                                                                                    stop-color="white" />
                                                                            </linearGradient>
                                                                            <clipPath id="clip0_12641_124163">
                                                                                <rect width="30" height="30"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                                <a href="#" title="Reject Assignment"
                                                                    aria-label="Reject Assignment"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                                                    <svg width="30" height="30"
                                                                        viewBox="0 0 30 30" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <g clip-path="url(#clip0_12641_124172)">
                                                                            <circle cx="15" cy="15"
                                                                                r="15" transform="rotate(90 15 15)"
                                                                                fill="url(#paint0_linear_12641_124172)" />
                                                                        </g>
                                                                        <path
                                                                            d="M24.5093 12.7477C25.7445 18.1218 22.4359 23.4915 17.12 24.739C11.8038 25.9865 6.4934 22.6423 5.25855 17.2692C4.0237 11.8962 7.33083 6.52731 12.6471 5.27869C15.343 4.64597 18.4555 5.0592 20.6115 6.84162L19.0975 8.37805C18.879 8.23582 18.6542 8.1048 18.4228 7.98535C18.1911 7.8659 17.9545 7.7584 17.7125 7.66284C17.4701 7.56765 17.224 7.48441 16.9735 7.41386C16.7233 7.34331 16.4699 7.28582 16.2139 7.24103C15.9579 7.19624 15.7001 7.16451 15.4407 7.14584C15.1818 7.12681 14.9221 7.12158 14.6624 7.12904C14.4028 7.13651 14.1438 7.15741 13.886 7.19101C13.6285 7.22498 13.3729 7.27164 13.1198 7.33174C8.92453 8.31645 6.31453 12.5521 7.28896 16.7922C8.2634 21.0323 12.4535 23.6714 16.6491 22.6859C20.8448 21.7005 23.4533 17.4667 22.48 13.2247C22.329 12.5655 21.8853 11.4524 21.5908 10.8794L23.0401 9.36351C23.3872 9.8764 23.6843 10.4173 23.9312 10.9862C24.1784 11.555 24.3708 12.1426 24.5093 12.7477ZM17.04 14.7123L25 6.57584C24.9438 6.5191 24.885 6.46498 24.8233 6.41421C24.762 6.36307 24.6981 6.31529 24.632 6.27087C24.5659 6.22608 24.4975 6.18502 24.4274 6.14731C24.3572 6.10924 24.2856 6.07527 24.2118 6.04429C24.1383 6.01368 24.0638 5.9868 23.9874 5.96366C23.9113 5.94052 23.8342 5.9211 23.7563 5.9058C23.6781 5.89012 23.5995 5.87855 23.5205 5.87109C23.4412 5.86325 23.3619 5.85951 23.2822 5.85989C23.2028 5.85989 23.1235 5.86437 23.0445 5.87221C22.9652 5.88042 22.8866 5.89274 22.8087 5.90841C22.7308 5.92446 22.6537 5.94425 22.5777 5.96814C22.502 5.99166 22.4271 6.0189 22.354 6.05026C22.2805 6.08124 22.2089 6.11596 22.1388 6.15403C22.069 6.19248 22.001 6.23392 21.9353 6.27908C21.8692 6.32388 21.8056 6.37203 21.7446 6.42354C21.6833 6.47505 21.6249 6.52918 21.5687 6.58629L15.3199 12.9821L13.3093 10.9496C13.2531 10.8928 13.194 10.8387 13.1327 10.7876C13.0709 10.7368 13.007 10.6887 12.9409 10.6442C12.8744 10.5994 12.8061 10.558 12.736 10.5203C12.6658 10.4822 12.5938 10.4479 12.5204 10.4169C12.4465 10.3863 12.3716 10.3591 12.2956 10.3359C12.2192 10.3124 12.1421 10.293 12.0638 10.2773C11.986 10.2616 11.907 10.2497 11.828 10.2418C11.7487 10.234 11.669 10.2299 11.5893 10.2299C11.5099 10.2299 11.4302 10.234 11.3509 10.2418C11.2719 10.2497 11.193 10.2616 11.1151 10.2773C11.0369 10.293 10.9597 10.3124 10.8833 10.3359C10.8073 10.3591 10.7324 10.3863 10.6585 10.4169C10.5851 10.4479 10.5131 10.4822 10.4429 10.5203C10.3728 10.558 10.3045 10.5994 10.238 10.6442C10.1719 10.6887 10.108 10.7368 10.0463 10.7876C9.98492 10.8387 9.92578 10.8928 9.86959 10.9496L13.6013 14.7223L9.86959 18.5556C9.92578 18.6123 9.98455 18.6664 10.0459 18.7172C10.1076 18.7683 10.1715 18.8161 10.2376 18.8609C10.3037 18.9053 10.3717 18.9468 10.4418 18.9845C10.5124 19.0222 10.584 19.0565 10.6574 19.0871C10.7313 19.1177 10.8058 19.1446 10.8822 19.1681C10.9583 19.1913 11.0354 19.2107 11.1133 19.226C11.1915 19.2417 11.2701 19.2532 11.3491 19.2607C11.4284 19.2685 11.5077 19.2723 11.5871 19.2719C11.6668 19.2719 11.7461 19.2678 11.8251 19.2596C11.9044 19.2514 11.983 19.2394 12.0609 19.2234C12.1387 19.2073 12.2159 19.1875 12.2919 19.164C12.3679 19.1405 12.4425 19.1129 12.516 19.0819C12.5894 19.0509 12.661 19.0162 12.7308 18.9778C12.801 18.9397 12.8689 18.8982 12.9347 18.8531C13.0008 18.8083 13.0643 18.7598 13.1253 18.7086C13.1866 18.6571 13.245 18.603 13.3012 18.5459L15.3313 16.4708L17.3771 18.5391C17.4333 18.5959 17.4925 18.65 17.5538 18.7008C17.6155 18.7519 17.679 18.7997 17.7455 18.8445C17.8116 18.8889 17.88 18.9303 17.9501 18.968C18.0203 19.0061 18.0923 19.0405 18.1657 19.0711C18.2392 19.1017 18.3141 19.1289 18.3901 19.1521C18.4665 19.1752 18.5437 19.1946 18.6215 19.2103C18.6998 19.226 18.7784 19.2376 18.8577 19.245C18.9367 19.2529 19.0164 19.2566 19.0957 19.2566C19.1754 19.2562 19.2547 19.2521 19.3341 19.2443C19.4131 19.2361 19.4917 19.2241 19.5695 19.2081C19.6478 19.1924 19.7249 19.1726 19.8009 19.1487C19.8769 19.1252 19.9515 19.0979 20.025 19.067C20.0984 19.036 20.1704 19.0013 20.2402 18.9632C20.3104 18.9247 20.3783 18.8833 20.4444 18.8385C20.5102 18.7934 20.5741 18.7452 20.6354 18.6941C20.6968 18.6425 20.7552 18.5884 20.8113 18.5313L17.04 14.7123Z"
                                                                            fill="black" />
                                                                        <defs>
                                                                            <linearGradient
                                                                                id="paint0_linear_12641_124172"
                                                                                x1="33" y1="4.5"
                                                                                x2="15" y2="16"
                                                                                gradientUnits="userSpaceOnUse">
                                                                                <stop offset="0.530822"
                                                                                    stop-color="#D3D3D3" />
                                                                                <stop offset="0.950249"
                                                                                    stop-color="white" />
                                                                            </linearGradient>
                                                                            <clipPath id="clip0_12641_124172">
                                                                                <rect width="30" height="30"
                                                                                    fill="white" />
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </a>
                                                            @endif
                                                            <a href="#" title="Reset to Assignment Duration"
                                                                aria-label="Reset to Assignment Duration"
                                                                wire:click="resetVals({{ $bookingService->id }},{{ $provider['provider_id'] }})"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Reset" class="fill-stroke"
                                                                    width="22" height="20" viewBox="0 0 22 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colSpan="6" class="text-center">
                                                    <small>
                                                        No Providers assigned to this service.
                                                    </small>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hoverable rows end -->
            @endforeach
        @else
            <small>No services associated</small>
        @endif
    </div>

</div>
