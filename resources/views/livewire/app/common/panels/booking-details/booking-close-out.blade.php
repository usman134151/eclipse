<div class="  row">
    <div class="between-section-segment-spacing">
        @if (count($booking->booking_services))

            <div class="row">
                <div class="d-inline-flex col-12 bg-muted rounded p-2">
                    <div class="col-6">
                        <h3>
                            Total Assignment Charges
                        </h3>
                        {{ numberFormat($booking_total_amount) }}
                    </div>
                    <div class="col-6 w-20 justify-content-end">
                        <input type="number" name="" class="form-control form-control-sm" placeholder="$00:00"
                            wire:model.lazy="override_amount" id="total-service-payment">
                        <button type="button" wire:click="overrideBookingAmount"
                            class="btn btn-primary rounded my-1 align-end">Override</button>
                    </div>
                </div>
            </div>
            @foreach ($booking->booking_services as $booking_service)
                <!-- Hoverable rows start -->
                <div class="mt-3">
                    <div class="row" id="table-hover-row">
                        <div class="col-12">
                            <div class=" row">
                                <div class="col-12">
                                    <h2 class="pl-2 pt-3">
                                        {{ $booking_service->service->name }} </h2>
                                </div>
                                <div class="col-6  d-inline-flex">
                                    <div class="">
                                        <p>Duration :</p>
                                        <p>Business Hours :</p>
                                        <p>After Business Hours :</p>

                                    </div>
                                    <div class="mx-5">
                                        <p>{{ $booking_service->service_calculations ? $booking_service->service_calculations['total_duration']['hours'] : '0' }}
                                            Hours,
                                            {{ $booking_service->service_calculations ? $booking_service->service_calculations['total_duration']['mins'] : '0' }}
                                            mins </p>
                                        <p>{{ $booking_service->service_calculations ? floor($booking_service->service_calculations['business_hour_duration'] / 60) : '0' }}
                                            Hours,
                                            {{ $booking_service->service_calculations ? fmod($booking_service->service_calculations['business_hour_duration'] / 60,1)*60 : '0' }}
                                            mins </p>

                                        <p>{{ $booking_service->service_calculations ? floor($booking_service->service_calculations['after_hour_duration'] / 60) : '0' }}
                                            Hours,
                                            {{ $booking_service->service_calculations ? fmod($booking_service->service_calculations['after_hour_duration'] / 60,1)*60 : '0' }}
                                            mins </p>
                                    </div>
                                </div>
                                <div class="col-6 d-inline-flex justify-content-end">
                                    <div class="flex align-self-end">
                                        <label class="form-label-sm" for="service_charges">
                                            Service Charges</label>
                                        <input type="number" name="" class="form-control form-control-sm"
                                            placeholder="$00:00"
                                            wire:model.lazy="service_charges.{{ $booking_service->id }}.charges"
                                            id="service_charges">

                                    </div>
                                    <div class="flex  align-self-end">
                                        <button type="button"
                                            wire:click="overrideServiceCharges({{ $booking_service->id }})"
                                            class="self_end btn btn-sm mx-1 btn-outline-dark rounded ">Override</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
                                    <thead>
                                        <tr role="row">
                                            {{-- <th scope="col" class="text-center">
                                        <input class="form-check-input" type="checkbox" value=""
                                            aria-label="Select All Teams">
                                    </th> --}}
                                            <th scope="col">Provider</th>
                                            <th scope="col">Check-In</th>
                                            <th scope="col">Check-Out</th>
                                            <th scope="col">Total Service Payment</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($providers[$booking_service->id]) && count($providers[$booking_service->id]))
                                            @foreach ($providers[$booking_service->id] as $provider)
                                                <tr role="row" class="odd">

                                                    <td class="align-middle " style="min-width:350px">
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
                                                    </td>
                                                    <td class="align-middle">

                                                        <div class="d-flex gap-2">
                                                            <div class="time d-flex align-items-center gap-2">
                                                                <div>
                                                                    <input
                                                                        class="form-control form-control-sm text-center hours"
                                                                        id="actual_start_hour" aria-label="Start Time"
                                                                        name="actual_start_hour" type="text"
                                                                        tabindex=""
                                                                        wire:model.defer="close_out.{{ $booking_service->id }}.{{ $provider['provider_id'] }}.actual_start_hour"
                                                                        maxlength="2">
                                                                </div>
                                                                <svg width="5" height="19" viewBox="0 0 5 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                                        fill="black" />
                                                                </svg>
                                                                <div>
                                                                    <input
                                                                        class="form-control form-control-sm text-center  mins"
                                                                        aria-label="Start Minutes" id="actual_start_min"
                                                                        name="actual_start_min" type="text"
                                                                        tabindex=""
                                                                        wire:model.defer="close_out.{{ $booking_service->id }}.{{ $provider['provider_id'] }}.actual_start_min"
                                                                        maxlength="2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('close_out.' . $booking_service->id . '.' .
                                                            $provider['provider_id'] . '.actual_start_hour')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                Hour field is required to be between 0 and 24.
                                                            </span>
                                                        @enderror
                                                        @error('close_out.' . $booking_service->id . '.' .
                                                            $provider['provider_id'] . '.actual_start_min')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                Minute field is required to be between 0 and 59.
                                                            </span>
                                                        @enderror
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="d-flex gap-2">
                                                            <div class="time d-flex align-items-center gap-2">
                                                                <div>
                                                                    <input
                                                                        class="form-control form-control-sm text-center hours"
                                                                        id="actual_start_hour" aria-label="Start Time"
                                                                        name="actual_start_hour" type="text"
                                                                        tabindex=""
                                                                        wire:model.defer="close_out.{{ $booking_service->id }}.{{ $provider['provider_id'] }}.actual_end_hour"
                                                                        maxlength="2">
                                                                </div>
                                                                <svg width="5" height="19" viewBox="0 0 5 19"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                                        fill="black" />
                                                                </svg>
                                                                <div>
                                                                    <input
                                                                        class="form-control form-control-sm text-center  mins"
                                                                        aria-label="Start Minutes"
                                                                        id="actual_start_min" name="actual_start_min"
                                                                        type="text" tabindex=""
                                                                        wire:model.defer="close_out.{{ $booking_service->id }}.{{ $provider['provider_id'] }}.actual_end_min"
                                                                        maxlength="2">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @error('close_out.' . $booking_service->id . '.' .
                                                            $provider['provider_id'] . '.actual_end_hour')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                Hour field is required to be between 0 and 24.
                                                            </span>
                                                        @enderror

                                                        @error('close_out.' . $booking_service->id . '.' .
                                                            $provider['provider_id'] . '.actual_end_min')
                                                            <span class="d-inline-block invalid-feedback mt-2">
                                                                Minute field is required to be between 0 and 59.
                                                            </span>
                                                        @enderror

                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="">
                                                            <input type="number" name=""
                                                                class="form-control form-control-sm"
                                                                placeholder="$00:00"
                                                                wire:model.lazy="close_out.{{ $booking_service->id }}.{{ $provider['provider_id'] }}.total_amount"
                                                                id="total-service-payment">
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colSpan="4" class="text-center">
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
