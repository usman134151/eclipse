<div>

    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="accordion mb-4" id="accordionFilters" wire:ignore>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFilters">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters">
                    <svg class="mr-2" width="30" height="34" viewBox="0 0 30 34" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.7495 16.8727V31.6456C18.8245 32.208 18.637 32.808 18.2058 33.2016C18.0324 33.3754 17.8264 33.5133 17.5996 33.6074C17.3728 33.7015 17.1296 33.7499 16.8841 33.7499C16.6386 33.7499 16.3955 33.7015 16.1687 33.6074C15.9419 33.5133 15.7359 33.3754 15.5624 33.2016L11.7942 29.4334C11.5897 29.2335 11.4343 28.9891 11.3399 28.7191C11.2456 28.4492 11.215 28.1611 11.2505 27.8774V16.8727H11.1943L0.395772 3.03708C0.0913296 2.64625 -0.0460409 2.15081 0.0136773 1.65901C0.0733955 1.16722 0.325347 0.71905 0.714478 0.412443C1.07068 0.149979 1.46437 0 1.87682 0H28.1232C28.5356 0 28.9293 0.149979 29.2855 0.412443C29.6747 0.71905 29.9266 1.16722 29.9863 1.65901C30.046 2.15081 29.9087 2.64625 29.6042 3.03708L18.8057 16.8727H18.7495Z"
                            fill="url(#paint0_linear_8696_11548)" />
                        <defs>
                            <linearGradient id="paint0_linear_8696_11548" x1="15" y1="0" x2="27.0359"
                                y2="0" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#213969" />
                                <stop offset="1" stop-color="#204387" />
                            </linearGradient>
                        </defs>
                    </svg>
                    Filters
                </button>
            </h2>
            <div id="collapseFilters" class="accordion-collapse collapse" aria-labelledby="headingFilters"
                data-bs-parent="#accordionFilters">
                <div wire:ignore class="accordion-body">
                    <x-advanceproviderfilters type="assignProvider" :providers="$providers" :tags="$tags"
                        :setupValues="$setupValues" />
                </div>
            </div>
        </div>
    </div><!-- END: Filters -->
    <!-- BEGIN: Filter Table -->
    @if ($limit && ($panelType == 1 || $panelType == 3))
        <div style="position: fixed;bottom: 18px;right: 44px;text-align: right;z-index:-10000">
            <span> Click Save to save changes </span>
        </div>
        <div style="position: fixed;bottom: 24px;right: 44px;text-align: right;z-index:-10000">
            <span> Required Providers : {{ $limit }} </span> |
            <span class="d-inline-block  mt-2" style="{{ count($assignedProviders) <= $limit ? '' : 'color:#b02a37' }}">
                Assigned Providers : {{ count($assignedProviders) }} </span>

            <span class="d-inline-block invalid-feedback mt-2">
                @if (count($assignedProviders) > $limit)
                    Max Limit exceeded - Please unassign
                    provider
                @endif
            </span>

        </div>
    @endif
    @if ($showError)
        <span class="d-inline-block invalid-feedback my-1">No providers are selected.</span>
    @endif

    <div class="d-lg-flex justify-content-between align-items-end mb-3">
        <div>
            <a href="#" class="btn btn-primary rounded">Providers</a>
            <a href="#" class="btn btn-outline-dark rounded">Teams</a>
        </div>
        <div>
            <label class="form-label">Sort Results By</label>
            <select class="form-select">
                <option>Tags Match</option>
            </select>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-fs-md" aria-label="">
            <thead>
                <tr>
                    @if ($panelType == 2)
                        <th scope="col"></th>
                    @endif
                    <th scope="col" class="text-center">Provider</th>
                    @if ($panelType == 1)
                        <th class="text-center" scope="col" width="20%"> TAGS
                            <!-- SERVICE PAYMENT -->

                        </th>
                        <th scope="col" class="text-center" width="20%">
                            DEFAULT PAY
                            <!-- ADDITIONAL PAYMENT -->
                        </th>
                        <th scope="col" class="text-center">ACTIONS</th>
                    @endif
                    @if ($panelType == 3)
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    @endif
                </tr>
            </thead>
            <tbody class="selected-provider">

                @if (count($providers))
                    @php
                        $assignedProvidersCollection = new \Illuminate\Support\Collection($assignedProviders);
                    @endphp
                    @foreach ($providers as $index => $provider)
                      @if(isset($providersPayment[$index]))
                        <tr>
                            @if ($panelType == 2)
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <div class="form-check mb-3 col-md-3">
                                            <div class="">
                                                <input class="form-check-input" id="{{ $provider->id }}"
                                                    value="{{ $provider->id }}" wire:model.defer="assignedProviders"
                                                    type="checkbox">
                                            </div>
                                        </div>

                                    </div>

                                </td>
                            @endif
                            <td class="border-end-2">
                                <div class="d-flex gap-2 align-items-center">
                                    <div wire:ignore>
                                        @if ($provider->profile_pic)
                                            <img width="50" height="50" src="{{ $provider->profile_pic }}"
                                                style="max-width:100%;" class="rounded-circle" alt="Image">
                                        @else
                                            <img width="50" height="50"
                                                src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                                class="rounded-circle" alt="Image">
                                        @endif
                                    </div>
                                    <div class="pt-2">
                                        <div class="font-family-secondary leading-none">{{ $provider->name }}</div>
                                        <a href="#"
                                            class="font-family-secondary text-sm"><small>{{ $provider->email }}</small></a>
                                        <div class="text-sm">{{ $provider->city ? $provider->city . ', ' : '' }}
                                            {{ $provider->state ? $provider->state . ', ' : '' }}
                                            {{ $provider->country ? $provider->country . ', ' : '' }}</div>
                                        <div></div>
                                    </div>
                                </div>
                                <!-- TAGS -->
                                {{-- <div class=" position-relative mb-3">
                                        <div class="" id="servicePanel-{{ $provider->id }}"
                                            style="width: 300px; max-height:60px; overflow-y:hidden;">
                                            @foreach ($provider->services as $key => $service)
                                    <a href="#">{{ $service->name }}</a>
                                                                                                                        @if ($key != $provider->services->count() - 1)
                                    <span>,</span>
                                    @endif
                                    @endforeach
                                        </div>  --}}

                                {{-- <!-- </div> --> --}}


                                @if (isset($provider->notes) && $provider->notes != null && $panelType == 3)
                                    <div class=" mt-3"
                                        style="{{ $panelType == 1 || $panelType == 3 ? 'width:300px' : '' }}">
                                        <strong>
                                            @if ($provider->invitation_response($booking_id) == 1)
                                                Available
                                            @elseif($provider->invitation_response($booking_id) == 2)
                                                Unavailable
                                            @endif :
                                        </strong>
                                        {{ $provider->notes }}
                                    </div>
                                @endif
                                {{--                                 
                                <!-- <div class="d-inline-flex mb-2">
                                     <h6 class="mt-1">Standard Rates</h6>
                                 </div>
                                 <div class="col-12  mb-1">
                                     <div class="d-inline-flex">
                                        
                                             <div>
                                                 <svg aria-label="In-Person" width="25" height="24"
                                                     viewBox="0 0 25 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                     <use xlink:href="/css/provider.svg#">
                                                     </use>
                                                 </svg>
                                             </div>
                                             <div class="mx-3 fw-semibold">{{ $serviceTypes[$bookingService->service_types]['title'] }}:
                                             </div>

                                         <div class="mx-3">
                                             {{ isset($custom_rates[$provider['id']]['standard']['price']) ? numberFormat($custom_rates[$provider['id']]['standard']['price']) : 'N/A' }}
                                         </div>
                                     </div>
                                 </div> -->

                                <!-- <hr>
                                <div class="row">
                                    <div class="d-inline-flex mb-2">
                                        <h6>Expedited Hours </h6>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="d-inline-flex">

                                            @if (isset($custom_rates[$provider['id']]['standard']['emergency']) && !is_null($custom_rates[$provider['id']]['standard']['emergency']) && is_array($custom_rates[$provider['id']]['standard']['emergency']))
                                                <div class="row">

                                                    @foreach ($custom_rates[$provider['id']]['standard']['emergency'] as $index => $param)
                                                     
                                                        <div class="col-7"><span class="fw-semibold">Hours
                                                                Notice:
                                                            </span><span
                                                                class="mx-1">{{ $param[0]['hour'] ? $param[0]['hour'] : 'N/A' }}</span>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="d-inline-flex">
                                                                <span class="fw-semibold">Rate:
                                                                </span><span class="mx-1">
                                                                    @if ($param[0]['price'])
                                                                        @if ($param[0]['price_type'] == "$")
                                                                            {{ formatPayment($param[0]['price']) }}
                                                                        @else
                                                                            {{ $param[0]['price'] }}
                                                                        @endif
                                                                    @else
                                                                        N/A
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                N/A
                                            @endif
                                        </div>
                                    </div>
                                    @if (isset($custom_rates[$provider['id']]['specialization']))
                                        <div class="row">
                                            <hr>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="d-inline-flex mb-3">
                                                <h6>Specialization Rates</h6>
                                            </div>
                                            @foreach ($custom_rates[$provider['id']]['specialization'] as $row)
                                                <div class="d-inline-flex">
                                                    <div class="bg-muted p-1 col-12  mb-2">
                                                        {{ $row['s_name'] ?? 'N/A' }}
                                                        <span
                                                            class="mx-1">{{ isset($row['price']) ? numberFormat($row['price']) : 'N/A' }}</span>

                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                    @endif


                                </div> --> --}}

                            </td>

                            @if ($panelType == 3 && $provider->invitation_response($booking_id) == 0)
                                <td colSpan=4> Pending</td>
                            @elseif($panelType == 3 && $provider->invitation_response($booking_id) == 3)
                                <td colSpan=4>Rejected by Admin</td>
                            @endif
                            @if ($panelType == 1 || ($panelType == 3 && $provider->invitation_response($booking_id) == 1))
                                <td wire:ignore class="border-end-2" style="min-width:340px">
                                    <div class="d-grid grid-cols-1 gap-3 mb-3">

                                        <!-- TAGS -->
                                        <div class=" position-relative mb-3">
                                            <div class="" id="servicePanel-{{ $provider->id }}">
                                                @if ($provider['tags'] && is_array($provider['tags']))
                                                    @foreach ($provider['tags'] as $key => $tag)
                                                        <button type="button"
                                                            class="{{ in_array($tag, $bookingTags) ? 'bg-success text-white ' : 'bg-muted' }}  btn-outline-dark rounded m-1">
                                                            <p>{{ $tag }} </p>
                                                        </button>
                                                    @endforeach
                                                @endif
                                                @if ($bookingTags && count($bookingTags))
                                                    @foreach ($provider['tags'] ? array_diff($bookingTags, $provider['tags']) : $bookingTags as $key => $tag)
                                                        <button type="button" style="background:red"
                                                            class="text-white btn-outline-dark rounded m-1">
                                                            <p>{{ $tag }} </p>
                                                        </button>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <!-- TAGS END -->



                                </td>
                                <td class="border-end-2">
                                    <div class="text-center mt-4" wire:ignore>
                                        {{ numberFormat($providersPayment[$index]['total_amount']) }}
                                    </div>
                                </td>
                                <td>
                                    <div class="d-inline-flex">


                                        <div class="mx-3 mt-4">
                                            <button class="btn btn-sm btn-outline-dark rounded mb-2"
                                                wire:click="{{ $assignedProvidersCollection->contains('provider_id', $provider->id) ? 'remove' : 'add' }}({{ $provider->id }},{{ $index }})">{{ $assignedProvidersCollection->contains('provider_id', $provider->id) ? 'Unassign' : 'Assign' }}</button>
                                            {{-- <!--  <div class="form-check">
                                                 <input class="form-check-input" id="assignPartialCoverage"
                                                     name="" type="checkbox" tabindex="">
                                                 <label class="form-check-label text-nowrap"
                                                     for="assignPartialCoverage" for="partial-coverage" disabled><small>Assign
                                                         Partial Coverage</small></label>
                                             </div>
                                             <a disabled href="#" class="btn btn-sm btn-primary rounded text-nowrap"
                                                 data-bs-toggle="modal" data-bs-target="#availableTimeslotModal">
                                                 Select Booking Range
                                             </a>
                                         </div> <small>Coming Soon</small> --> --}}
                                        </div>



                                        <div class="accordion mb-4" id="accordionDetails">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingDetails{{ $index }}">
                                                    <button
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon custom-dropdown-btn collapsed"
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseDetails{{ $index }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapseDetails{{ $index }}">
                                                        <svg class="mr-2" width="15" height="19"
                                                            viewBox="0 0 15 19" fill="curentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />

                                                        </svg>
                                                    </button>
                                                </h2>

                                            </div>
                                        </div><!-- END: Filters -->


                                </td>
                        <tr>
                            <td colspan="4" class="custom-collapse">
                                <!-- Use colspan to span across all columns in the row -->
                                <div id="collapseDetails{{ $index }}" class="accordion-collapse collapse "
                                    aria-labelledby="headingDetails{{ $index }}"
                                    data-bs-parent="#accordionDetails" wire:ignore>
                                    <div class="accordion-body">
                                        <table class="table table-fs-md" aria-label="">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width="33%">SERVICE PAYMENT</th>
                                                    <th class="text-center" width="33%">ADDITIONAL PAYMENT </th>
                                                    <th class="text-center" width="33%">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border-start border-end">
                                                        @if (is_array($providersPayment) &&
                                                                isset($providersPayment[$index]) &&
                                                                !$providersPayment[$index]['service_payment_details']['day_rate'] &&
                                                                !$providersPayment[$index]['service_payment_details']['fixed_rate']
                                                        )
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
                                                                                        name="{{ $index }}_service_payment_details_b_hours_duration"
                                                                                        wire:blur="updateTotal({{ $index }})"
                                                                                        wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.b_hours_duration"
                                                                                        wire:blur="updateTotal({{ $index }})"
                                                                                        class="form-control form-control-sm text-center"
                                                                                        placeholder="0"
                                                                                        aria-label="Hours">

                                                                                    <div class="input-group-text p-0">
                                                                                        <select
                                                                                            class="form-select form-select-sm"
                                                                                            aria-label="Days" disabled>
                                                                                            <option>
                                                                                                {{ $durationLabel }}
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    @error('providersPayment.' . $index
                                                                                        .
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
                                                                                            wire:blur="updateTotal({{ $index }})"
                                                                                            wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.b_hours_rate">
                                                                                        @error('providersPayment.' .
                                                                                            $index .
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

                                                            <div class="row">
                                                                <div class="  mt-1">
                                                                    <div class="col col-12">
                                                                        <div class="col-12">
                                                                            <label class="form-label-sm"
                                                                                style="margin: 20px 0;"><strong> After
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
                                                                                        wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.a_hours_duration"
                                                                                        class="form-control form-control-sm text-center"
                                                                                        wire:blur="updateTotal({{ $index }})"
                                                                                        placeholder="0"
                                                                                        aria-label="Hours">

                                                                                    <div class="input-group-text p-0">
                                                                                        <select
                                                                                            class="form-select form-select-sm"
                                                                                            aria-label="Days" disabled>
                                                                                            <option>
                                                                                                {{ $durationLabel }}
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    @error('providersPayment.' . $index
                                                                                        .
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
                                                                                            wire:blur="updateTotal({{ $index }})"
                                                                                            wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.a_hours_rate">
                                                                                        @error('providersPayment.' .
                                                                                            $index .
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
                                                        @elseif(is_array($providersPayment) &&
                                                                isset($providersPayment[$index]) &&
                                                                $providersPayment[$index]['service_payment_details']['day_rate']
                                                        )
                                                            <div class="row">
                                                                <div class="  mt-1">
                                                                    <div class="col col-12">
                                                                        <div class="col-12">
                                                                            <label class="form-label-sm"><strong> Day
                                                                                    Rate</strong></label>
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
                                                                                        wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.total_duration"
                                                                                        wire:blur="updateTotal({{ $index }})"
                                                                                        class="form-control form-control-sm text-center"
                                                                                        placeholder="0"
                                                                                       >

                                                                                    <div class="input-group-text p-0">
                                                                                        <select
                                                                                            class="form-select form-select-sm"
                                                                                            aria-label="Days" disabled>
                                                                                            <option>
                                                                                                {{ $durationLabel }}
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                    @error('providersPayment.' . $index
                                                                                        .
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
                                                                                            wire:blur="updateTotal({{ $index }})"
                                                                                            wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.rate">
                                                                                        @error('providersPayment.' .
                                                                                            $index .
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
                                                                                            wire:blur="updateTotal({{ $index }})"
                                                                                            wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.rate">
                                                                                        @error('providersPayment.' .
                                                                                            $index .
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
                                                        {{-- @if ($expedited_hours) --}}

                                                        <div class="row">
                                                            <div class="  mt-1">
                                                                <div class="col col-12">
                                                                    <div class="col-12">
                                                                        <label class="form-label-sm"
                                                                            style="margin: 20px 0;"><strong> Expedition
                                                                                Charges</strong></label>
                                                                    </div>


                                                                    <div class="col col-12 mt-2">
                                                                        <div class="d-flex ">
                                                                            <div class="row">

                                                                                <div class="col-5 mt-1"
                                                                                    style="margin-right: -15px;">
                                                                                    <label for="average-rate"
                                                                                        class="form-label-sm">Charges:</label>
                                                                                </div>
                                                                                <div class="col-6 "
                                                                                    style=" width:47%;">
                                                                                    <div class="input-group ">
                                                                                        <input type=""
                                                                                            id="average-rate"
                                                                                            name="average-rate"
                                                                                            class="form-control form-control-sm  w-25%"
                                                                                            placeholder="$00:00"
                                                                                            wire:blur="updateTotal({{ $index }})"
                                                                                            wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.expedited_rate">
                                                                                        @error('providersPayment.' .
                                                                                            $index .
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
                                                            {{-- @endif --}}
                                                            @if (count($booking_specializations))
                                                                <div class="row">
                                                                    <div class="  mt-1">

                                                                        <div class="col col-12">
                                                                            <label class="form-label-sm"
                                                                                style="margin: 20px 0;"><strong>
                                                                                    Specialization
                                                                                    Charges</strong></label>
                                                                        </div>

                                                                        @foreach ($booking_specializations as $key => $specialization)
                                                                            <div class="col col-12 mt-2">
                                                                                <div class="d-flex ">
                                                                                    <div class="row">

                                                                                        <div class="col-5 mt-1"
                                                                                            style="margin-right: -15px;">
                                                                                            <label for="average-rate"
                                                                                                class="form-label-sm">{{ $specialization['label'] }}
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
                                                                                                    wire:blur="updateTotal({{ $index }})"
                                                                                                    wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.specialization_charges.{{ $key }}.provider_charges">
                                                                                                @error('providersPayment.'
                                                                                                    . $index .
                                                                                                    'service_payment_details.specialization_charges.'
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
                                                                        {{-- <div class="col col-12">
                                                                            <div class="">
                                                                                <div class="row mt-2">

                                                                                    <div class="col-6 mt-1" style="margin-right: -15px;">
                                                                                        <label for="average-rate" class="form-label-sm">Specialization
                                                                                            Rate:</label>
                                                                                    </div>
                                                                                    <div class="col-6 mt-2" style=" width:47%;">
                                                                                        <div class="input-group ">
                                                                                            <input type="" id="average-rate" name="average-rate"
                                                                                                class="form-control form-control-sm  w-25%" placeholder="$00:00"
                                                                                                wire:blur="updateTotal({{ $index }})"
                                                                                                wire:model.lazy="providersPayment.{{ $index }}.service_payment_details.specialization_rate">
                                                                                            @error('providersPayment.' . $index . '.service_payment_details.specialization_rate')
                                                                                                <span class="d-inline invalid-feedback">
                                                                                                    {{ $message }}
                                                                                                </span>
                                                                                            @enderror

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div> --}}


                                                                    </div>
                                                                </div>
                                                            @endif

                                                        </div>


                                                    </td>
                                                    <td class="border-start border-end">

                                                        @if (isset($providersPayment[$index]) && isset($providersPayment[$index]['additional_payments']))
                                                            <div class="row">
                                                                <div class="mt-3 mb-3">
                                                                    {{-- <div class="d-inline-flex mb-2"> --}}
                                                                    <div class="row col-12">

                                                                        <div class="col-2 mt-1">
                                                                            <label class="form-label-sm">Label:</label>
                                                                        </div>
                                                                        <div class="col-8">
                                                                            <div class="input-group">
                                                                                <input type="text" name=""
                                                                                    class="form-control form-control-sm"
                                                                                    placeholder="Payment Label"
                                                                                    aria-label="Payment Label"
                                                                                    wire:model.defer="providersPayment.{{ $index }}.additional_payments.additional_label_provider">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- </div> --}}

                                                                    {{-- <div> --}}
                                                                    <div class="row col-12">
                                                                        <div class="mt-3 mb-3">
                                                                            {{-- <div class="d-inline-flex mb-3"> --}}
                                                                            <div class="row col-12">

                                                                                <div class="col-6 mt-1">
                                                                                    <label
                                                                                        class="form-label-sm text-nowrap">Additional
                                                                                        Payment:
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-4 ms-3">
                                                                                    <div class="input-group">
                                                                                        <input type="number"
                                                                                            name=""
                                                                                            class="form-control form-control-sm"
                                                                                            placeholder="00:00"
                                                                                            aria-label="Additional Payment"
                                                                                            wire:model.defer="providersPayment.{{ $index }}.additional_payments.additional_charge_provider"
                                                                                            wire:blur="updateTotal({{ $index }})">

                                                                                    </div>
                                                                                </div>
                                                                                {{-- </div> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-3 col-12">

                                                                        {{-- <!--  <div>
                                                                            <label class="form-label-sm">Label</label>
                                                                            <input type="" name="" class="form-control form-control-sm"
                                                                                placeholder="Payment Label" aria-label="Payment Label">
                                                                        </div>
                                                                        <div>
                                                                            <label class="form-label-sm text-nowrap"
                                                                                for="additional=payment">Additional
                                                                                Payment</label>
                                                                            <div class="d-flex justify-content-between align-items-center gap-2 mb-2">
                                                                                <input type="" name=""
                                                                                    class="form-control form-control-sm" placeholder="$00:00"
                                                                                    aria-label="Additional Payment">
                                                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                                                                        fill="#888575" />
                                                                                </svg>
                                                                            </div>
                                                                            <div class="form-check mb-0">
                                                                                <input class="form-check-input" id="ChargetoCustomer" name=""
                                                                                    type="checkbox" tabindex="">
                                                                                <label class="form-check-label text-nowrap"
                                                                                    for="ChargetoCustomer"><small>Charge to
                                                                                        Customer</small></label>
                                                                            </div> --> --}}
                                                                    </div>
                                                                    {{-- </div> 
                                                                    <!--  <div class="mb-2">
                                                                                    <button class="btn btn-xs btn-has-icon btn-primary rounded">
                                                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                                d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                                                                fill="white" />
                                                                                        </svg>
                                                                                        Add New
                                                                                    </button>
                                                                                </div> -->
                                                                                                                
                                                                                    <div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                                                                                tabindex="">
                                                                                            <label class="form-check-label" for="ChargetoCustomer"><small>Reimburse Mileage</small><br/><small>Coming Soon</small></label>
                                                                                        </div>
                                                                                        <div class="form-check">
                                                                                            <input class="form-check-input" id="ReimburseTravelTime" name="" type="checkbox"
                                                                                                tabindex="">
                                                                                            <label class="form-check-label" for="ReimburseTravelTime"><small>Reimburse
                                                                                                    Mileage</small><br /><small>Coming Soon</small></label>
                                                                                        </div>
                                                                                    </div>
                                                                                --}}
                                                                    <div class="d-flex ">
                                                                        <div class="form-check mb-3 col-md-5 me-4">
                                                                            <div class="">
                                                                                <input class="form-check-input"
                                                                                    id="reimburse-mileage"
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" disabled>
                                                                                <label
                                                                                    class="form-check-label text-nowrap"
                                                                                    for="reimburse-mileage"><small>Reimburse
                                                                                        Mileage</small></label>
                                                                                <div>
                                                                                    <input type=""
                                                                                        name="" disabled
                                                                                        class="form-control form-control-sm text-center"
                                                                                        placeholder="10 km"
                                                                                        aria-label="Distance">
                                                                                </div>
                                                                                <small>Coming Soon</small>
                                                                            </div>


                                                                        </div>


                                                                        <div class="form-check mb-3 col-md-5">
                                                                            <div>
                                                                                <input class="form-check-input"
                                                                                    id="reimburse-travel-time"
                                                                                    name="" type="checkbox"
                                                                                    tabindex="" disabled>
                                                                                <label
                                                                                    class="form-check-label text-nowrap"
                                                                                    for="reimburse-travel-time"><small>Reimburse
                                                                                        Travel
                                                                                        Time</small></label>
                                                                            </div>
                                                                            <div class="d-inline-flex">
                                                                                <input type="" name=""
                                                                                    disabled
                                                                                    class="form-control form-control-sm text-center rounded-0"
                                                                                    placeholder="1 hr"
                                                                                    aria-label="Reimburse Travel Time">
                                                                                <input type="" name=""
                                                                                    disabled
                                                                                    class="form-control form-control-sm text-center rounded-0"
                                                                                    placeholder="32 m"
                                                                                    aria-label="Reimburse Travel Time">

                                                                            </div>
                                                                            <br /><small>Coming Soon</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                    </div>


                            </td>
                            <td class="border-start border-end">
                                <div class="d-inline-flex">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <label class="form-label-md" for="total-service-payment">Total Service
                                                Payment</label>
                                            <input type="number" name=""
                                                class="form-control form-control-sm "
                                                style="background-color: lightgrey; width:70%;" placeholder="$00:00"
                                                wire:blur="overrideTotal({{ $index }})"
                                                wire:model.lazy="providersPayment.{{ $index }}.total_amount"
                                                id="total-service-payment">
                                        </div>
                                        {{-- <!--  <div class="">
                                                 <label class="form-label-sm">Total Booking Payment</label>
                                                 {{ $totalAmount }}
                                             </div> --> --}}
                                    </div>
                            </td>
                        </tr>
            </tbody>
            <!-- Add your table body and other elements here -->
        </table>
        {{-- 
    </div>
</div> --}}
        </td>

        </tr>
         @endif
        @endif
        @if ($panelType == 3 && $provider->invitation_response($booking_id) == 2)
            <td colSpan=4> Declined</td>
        @endif
        </tr>
        @endforeach
    @else
        <tr>
            <td colSpan='{{ $panelType == 2 ? '2' : '4' }}' class="text-center">
                <small>No Providers Available</small>
            </td>
        </tr>
        @endif
        </tbody>
        </table>
    </div>
    <!-- END: Filter Table -->


</div>
