<div x-data="{ rescheduleBooking: false, assignProvider: false, providerSavedForms: false, offcanvasOpenCheckOut: false, step: 1 }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @if ($showBookingDetails)
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">
                            Assignment Details
                        </h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Go to Dashboard" width="22" height="23"
                                            viewBox="0 0 22 23">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}} </a>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                        Assignments
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Assignment Details
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @livewire('app.common.bookings.booking-details', ['booking_id' => $booking_id])
        @include('panels.provider.check-out')
    @elseif($importFile)
        @livewire('app.common.import.bookings')
    @else
        <div>

            {{-- BEGIN: Content --}}
            @if ($bookingSection != 'customer' && $showHeader)
                <div class="content-header row">
                    <div class="content-header-left col-md-12 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h1 class="content-header-title float-start mb-0">
                                    @if ($bookingType == 'Invitations')
                                        Assignment Invitations
                                    @else
                                        {{ $bookingType }} Assignments
                                    @endif
                                </h1>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">
                                                <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/sprite.svg#home"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="javascript:void(0)">
                                                Assignments
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            {{ $bookingType }} Assignments
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-lg-flex justify-content-end mb-4">

                    <button wire:click.prevent="downloadExportFile(true)" type="button"
                        class="d-inline-flex align-items-center btn btn-primary rounded px-3 me-2 gap-2 ">
                        {{-- Updated by Shanila to Add svg icon --}}
                        <svg aria-label="Download Import File" width="20" height="20" viewBox="0 0 20 20">
                            <use xlink:href="/css/common-icons.svg#import-file"></use>
                        </svg>
                        {{-- End of update by Shanila --}}
                        <span>Download Import File</span>
                    </button>
                    <button type="button"
                        class="d-inline-flex align-items-center btn btn-primary rounded px-3 me-2 gap-2"
                        wire:click="$set('importFile',true)">
                        {{-- Updated by Shanila to Add svg icon --}}
                        <svg aria-label="Import Customer" width="20" height="20" viewBox="0 0 20 20">
                            <use xlink:href="/css/common-icons.svg#import-file"></use>
                        </svg>
                        {{-- End of update by Shanila --}}
                        <span>Import Bookings</span>
                    </button>
                    <a href="/admin/booknow/create" class="btn btn-primary rounded btn-sm">
                        Create Assignment
                    </a>
                </div>
            @endif
            <div class="content-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @if ($bookingSection != 'customer')
                            @endif
                            <div>
                                <div class="" wire:ignore>
                                    <x-advancefilters type="" :filterProviders="$filterProviders" :hideProvider="false" />
                                </div>
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-2">

                                    <div
                                        class="d-inline-flex flex-column flex-md-row align-items-center gap-lg-4 gap-1 mb-2 mb-md-0">

                                        <div>
                                            <div class="form-check form-switch mb-0">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Manage Permissions Toggle" id="ManagePermissions">
                                                <label class="form-check-label" for="ManagePermissions">
                                                    Manage Permissions <small>(coming soon)</small>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-inline-flex align-items-center gap-4">
                                        <div class="d-inline-flex align-items-end gap-4">
                                            <div class="d-inline-flex align-items-center gap-4">
                                                <div class="d-lg-flex justify-content-end mb-4">
                                                    <div class="dropdown">
                                                        <button wire:click.prevent="downloadExportFile()"
                                                            class="btn btn-outline-primary dropdown-toggle"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Export Button" width="23"
                                                                height="26" viewBox="0 0 23 26">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#document-dropdown">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </button>
                                                        {{-- <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Hoverable rows Start --}}
                                <div class="row" id="table-hover-row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table id="unassigned_data" class="table table-fs-md table-hover"
                                                    aria-label="Today's Assignments Table">
                                                    <thead>
                                                        <tr role="row">
                                                            <th scope="col" class="text-center">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" aria-label="Select All Bookings">
                                                            </th>
                                                            <th scope="col">Booking ID</th>
                                                            <th scope="col">Accommodation</th>
                                                            <th scope="col">Address</th>
                                                            <th scope="col">Company</th>
                                                            <th scope="col">Billing</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col" class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (count($booking_assignments))
                                                            @foreach ($booking_assignments as $i => $booking)
                                                                @php
                                                                    $code = 'none';
                                                                    if ($bookingType == 'Past' || $bookingType == "Today's") {
                                                                        if ($booking['is_closed'] == 1) {
                                                                            $code = 'Completed Assignment';
                                                                        } elseif ($booking['is_closed'] == 2) {
                                                                            $code = 'Cancelled';
                                                                        } else {
                                                                            if ($booking['checked_in'] > 0) {
                                                                                $code = 'Provider Checked-in';
                                                                            }
                                                                            if ($booking['running_late'] > 0) {
                                                                                $code = 'Provider Running Late';
                                                                            }
                                                                        }
                                                                    } else {
                                                                        if ($booking['status'] == 2) {
                                                                            $code = 'Fully assigned';
                                                                        } elseif ($booking['status'] == 1) {
                                                                            $code = 'Unassigned';
                                                                        }
                                                                    }
                                                                    $cssClass = str_replace([' ', '/'], '_', strtolower($code));
                                                                @endphp
                                                                <tr role="row"
                                                                    class="{{ $i % 2 == 0 ? 'even' : 'odd' }} ">
                                                                    <td class="text-center {{ $cssClass }}"
                                                                        style="background-color:{{ $colorCodes[$code] }}">
                                                                        <input class="form-check-input"
                                                                            wire:model.defer="selectedBookingIds"
                                                                            type="checkbox"
                                                                            value="{{ $booking['id'] }}"
                                                                            name="selected_booking_ids"
                                                                            aria-label="Select Booking">
                                                                    </td>
                                                                    <td class="{{ $cssClass }}"
                                                                        style="background-color:{{ $colorCodes[$code] }};">
                                                                        <a href="{{ $isCustomer ? route('tenant.customer-booking-view', ['bookingID' => encrypt($booking['id'])]) : route('tenant.booking-view', ['bookingID' => encrypt($booking['id'])]) }}"
                                                                            class="{{ $cssClass }}">{{ $booking['booking_number'] ? $booking['booking_number'] : '' }}
                                                                            <div>
                                                                                <div
                                                                                    class="time-date {{ $cssClass }}">
                                                                                    {{ date_format(date_create($booking['booking_start_at']), 'm/d/Y') }}
                                                                                </div>
                                                                                <div
                                                                                    class="time-date {{ $cssClass }}">
                                                                                    {{ $booking['booking_start_at'] ? date_format(date_create($booking['booking_start_at']), 'h:i A') : '' }}
                                                                                    to
                                                                                    {{ $booking['booking_end_at'] ? date_format(date_create($booking['booking_end_at']), 'h:i A') : '' }}
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="{{ $cssClass }}"
                                                                        style="background-color:{{ $colorCodes[$code] }};">
                                                                        <div>
                                                                            {{ isset($booking->accommodation_name) ? $booking->accommodation_name : '' }}
                                                                        </div>
                                                                        {{-- <div>Shelby Sign Language</div> --}}
                                                                        <div>Service:
                                                                            {{ isset($booking->service_name) ? $booking->service_name : 'N/A' }}
                                                                        </div>
                                                                    </td>
                                                                    <td class="{{ $cssClass }}"
                                                                        style="background-color:{{ $colorCodes[$code] }};">
                                                                        @if ($booking->service_type)
                                                                            <div
                                                                                class="badge bg-warning mb-1 {{ $cssClass }}">

                                                                                {{ $serviceTypes[$booking->service_type]['title'] }}

                                                                            </div>
                                                                            @if ($booking->service_type == 1)
                                                                                <div>
                                                                                    @if ($booking->physicalAddress)
                                                                                        <a target="_blank"
                                                                                            href="https://www.google.com/maps/search/?api=1&query={{ str_replace(' ', '+', $booking->physicalAddress->address_line1 . ' ' . $booking->physicalAddress->address_line2 . ', ' . $booking->physicalAddress->city . ' ' . $booking->physicalAddress->state . ' ' . $booking->physicalAddress->country) }}">
                                                                                            {{ $booking->physicalAddress->address_line1 . ', ' . $booking->physicalAddress->address_line2 . ', ' . $booking->physicalAddress->city . ', ' . $booking->physicalAddress->country }}
                                                                                        </a>
                                                                                    @else
                                                                                        N/A
                                                                                    @endif
                                                                                </div>
                                                                            @elseif ($booking->service_type == 2 || $booking->service_type == 5)
                                                                                <div>
                                                                                    @if ($booking['meeting_link'])
                                                                                        {{ $booking['meeting_link'] }}
                                                                                    @else
                                                                                        N/A
                                                                                    @endif
                                                                                </div>
                                                                            @elseif ($booking->service_type == 4)
                                                                                <div>
                                                                                    @if ($booking['meeting_phone'])
                                                                                        {{ $booking['meeting_phone'] }}
                                                                                    @else
                                                                                        N/A
                                                                                    @endif
                                                                                </div>
                                                                            @endif
                                                                        @endif
                                                                    </td>
                                                                    <td class="{{ $cssClass }}"
                                                                        style="background-color:{{ $colorCodes[$code] }};">
                                                                        <div>
                                                                            {{ $booking['company'] ? $booking['company']['name'] : '' }}
                                                                        </div>
                                                                        <div>No. of Providers:
                                                                            {{ $booking['provider_count'] }}
                                                                        </div>
                                                                    </td>
                                                                    <td class="{{ $cssClass }}"
                                                                        style="background-color:{{ $colorCodes[$code] }};">
                                                                        @if (!is_null($booking['payment']))
                                                                            {{ formatPayment($booking['payment']['total_amount']) }}
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </td>
                                                                    <td class="{{ $cssClass }}"
                                                                        style="background-color:{{ $colorCodes[$code] }};">
                                                                        <div class="d-flex align-items-center gap-1">
                                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                                            <svg aria-label="{{ $statusValues[$booking['status']]['title'] }}"
                                                                                class="fill-warning" width="12"
                                                                                height="12" viewBox="0 0 512 512">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#yellow-dot">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                            @if ($code != 'none')
                                                                                {{ str_replace('Provider ', '', $code) }}
                                                                            @else
                                                                                {{ $statusValues[$booking['status']]['title'] }}
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                    <td class="{{ $cssClass }}"
                                                                        style="background-color:{{ $colorCodes[$code] }};">
                                                                        <div class="d-flex actions">
                                                                            @if ($bookingType == 'Invitations')
                                                                                <a href="javascript:void(0)"
                                                                                    aria-label="View Response"
                                                                                    title="View Response"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon text-center {{ $cssClass }}"
                                                                                    style="color:#000000;"
                                                                                    wire:click="openAssignProvidersPanel({{ $booking->id }},{{ $booking->service_id }}, 3)"
                                                                                    @click="assignProvider = true">
                                                                                    <i
                                                                                        class="fa fa-envelope-open-o"></i>

                                                                                </a>
                                                                            @else
                                                                                <a href="{{ $isCustomer ? route('tenant.customer-booking-edit', ['bookingID' => encrypt($booking->id)]) : route('tenant.booking-edit', ['bookingID' => encrypt($booking->id)]) }}"
                                                                                    title="Edit"
                                                                                    aria-label="Edit Booking"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon {{ $cssClass }}">
                                                                                    <svg aria-label="Edit"
                                                                                        class="fill" width="20"
                                                                                        height="28"
                                                                                        viewBox="0 0 20 28"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/sprite.svg#edit-icon">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            @endif
                                                                            @if ($bookingType == 'Draft')
                                                                                <a href="#"
                                                                                    title="Delete Booking"
                                                                                    aria-label="Delete Booking"
                                                                                    wire:click="deleteRecord({{ $booking['id'] }})"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    <svg aria-label="Delete Service"
                                                                                        width="21" height="21"
                                                                                        viewBox="0 0 21 21"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/sprite.svg#delete-icon">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            @endif
                                                                            @if (
                                                                                ($bookingType == "Today's" || $bookingType == 'Past') &&
                                                                                    $bookingSection == 'customer' &&
                                                                                    $booking['display_customer_check_out'] &&
                                                                                    $booking['is_closed'] == false)
                                                                                <a href="#"
                                                                                    title="Confirm Completion"
                                                                                    aria-label="Confirm Completion"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon "
                                                                                    wire:click="$emit('openConfirmCompletionModal','{{ $booking['booking_service_id'] }}')"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#confirmCompletion">
                                                                                    <svg width="30" height="30"
                                                                                        viewBox="0 0 30 30"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/customer.svg#confirm-completion-icon">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            @elseif ($bookingType == 'Pending Approval' && $bookingSection != 'customer')
                                                                                <a href="#"
                                                                                    wire:click="rejectAssignment('{{ $booking->id }}')"
                                                                                    title="Reject Assignment"
                                                                                    aria-label="Reject Assignment"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                                                                    <svg width="30" height="30"
                                                                                        viewBox="0 0 30 30"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g
                                                                                            clip-path="url(#clip0_12641_124172)">
                                                                                            <circle cx="15"
                                                                                                cy="15"
                                                                                                r="15"
                                                                                                transform="rotate(90 15 15)"
                                                                                                fill="url(#paint0_linear_12641_124172)" />
                                                                                        </g>
                                                                                        <path
                                                                                            d="M24.5093 12.7477C25.7445 18.1218 22.4359 23.4915 17.12 24.739C11.8038 25.9865 6.4934 22.6423 5.25855 17.2692C4.0237 11.8962 7.33083 6.52731 12.6471 5.27869C15.343 4.64597 18.4555 5.0592 20.6115 6.84162L19.0975 8.37805C18.879 8.23582 18.6542 8.1048 18.4228 7.98535C18.1911 7.8659 17.9545 7.7584 17.7125 7.66284C17.4701 7.56765 17.224 7.48441 16.9735 7.41386C16.7233 7.34331 16.4699 7.28582 16.2139 7.24103C15.9579 7.19624 15.7001 7.16451 15.4407 7.14584C15.1818 7.12681 14.9221 7.12158 14.6624 7.12904C14.4028 7.13651 14.1438 7.15741 13.886 7.19101C13.6285 7.22498 13.3729 7.27164 13.1198 7.33174C8.92453 8.31645 6.31453 12.5521 7.28896 16.7922C8.2634 21.0323 12.4535 23.6714 16.6491 22.6859C20.8448 21.7005 23.4533 17.4667 22.48 13.2247C22.329 12.5655 21.8853 11.4524 21.5908 10.8794L23.0401 9.36351C23.3872 9.8764 23.6843 10.4173 23.9312 10.9862C24.1784 11.555 24.3708 12.1426 24.5093 12.7477ZM17.04 14.7123L25 6.57584C24.9438 6.5191 24.885 6.46498 24.8233 6.41421C24.762 6.36307 24.6981 6.31529 24.632 6.27087C24.5659 6.22608 24.4975 6.18502 24.4274 6.14731C24.3572 6.10924 24.2856 6.07527 24.2118 6.04429C24.1383 6.01368 24.0638 5.9868 23.9874 5.96366C23.9113 5.94052 23.8342 5.9211 23.7563 5.9058C23.6781 5.89012 23.5995 5.87855 23.5205 5.87109C23.4412 5.86325 23.3619 5.85951 23.2822 5.85989C23.2028 5.85989 23.1235 5.86437 23.0445 5.87221C22.9652 5.88042 22.8866 5.89274 22.8087 5.90841C22.7308 5.92446 22.6537 5.94425 22.5777 5.96814C22.502 5.99166 22.4271 6.0189 22.354 6.05026C22.2805 6.08124 22.2089 6.11596 22.1388 6.15403C22.069 6.19248 22.001 6.23392 21.9353 6.27908C21.8692 6.32388 21.8056 6.37203 21.7446 6.42354C21.6833 6.47505 21.6249 6.52918 21.5687 6.58629L15.3199 12.9821L13.3093 10.9496C13.2531 10.8928 13.194 10.8387 13.1327 10.7876C13.0709 10.7368 13.007 10.6887 12.9409 10.6442C12.8744 10.5994 12.8061 10.558 12.736 10.5203C12.6658 10.4822 12.5938 10.4479 12.5204 10.4169C12.4465 10.3863 12.3716 10.3591 12.2956 10.3359C12.2192 10.3124 12.1421 10.293 12.0638 10.2773C11.986 10.2616 11.907 10.2497 11.828 10.2418C11.7487 10.234 11.669 10.2299 11.5893 10.2299C11.5099 10.2299 11.4302 10.234 11.3509 10.2418C11.2719 10.2497 11.193 10.2616 11.1151 10.2773C11.0369 10.293 10.9597 10.3124 10.8833 10.3359C10.8073 10.3591 10.7324 10.3863 10.6585 10.4169C10.5851 10.4479 10.5131 10.4822 10.4429 10.5203C10.3728 10.558 10.3045 10.5994 10.238 10.6442C10.1719 10.6887 10.108 10.7368 10.0463 10.7876C9.98492 10.8387 9.92578 10.8928 9.86959 10.9496L13.6013 14.7223L9.86959 18.5556C9.92578 18.6123 9.98455 18.6664 10.0459 18.7172C10.1076 18.7683 10.1715 18.8161 10.2376 18.8609C10.3037 18.9053 10.3717 18.9468 10.4418 18.9845C10.5124 19.0222 10.584 19.0565 10.6574 19.0871C10.7313 19.1177 10.8058 19.1446 10.8822 19.1681C10.9583 19.1913 11.0354 19.2107 11.1133 19.226C11.1915 19.2417 11.2701 19.2532 11.3491 19.2607C11.4284 19.2685 11.5077 19.2723 11.5871 19.2719C11.6668 19.2719 11.7461 19.2678 11.8251 19.2596C11.9044 19.2514 11.983 19.2394 12.0609 19.2234C12.1387 19.2073 12.2159 19.1875 12.2919 19.164C12.3679 19.1405 12.4425 19.1129 12.516 19.0819C12.5894 19.0509 12.661 19.0162 12.7308 18.9778C12.801 18.9397 12.8689 18.8982 12.9347 18.8531C13.0008 18.8083 13.0643 18.7598 13.1253 18.7086C13.1866 18.6571 13.245 18.603 13.3012 18.5459L15.3313 16.4708L17.3771 18.5391C17.4333 18.5959 17.4925 18.65 17.5538 18.7008C17.6155 18.7519 17.679 18.7997 17.7455 18.8445C17.8116 18.8889 17.88 18.9303 17.9501 18.968C18.0203 19.0061 18.0923 19.0405 18.1657 19.0711C18.2392 19.1017 18.3141 19.1289 18.3901 19.1521C18.4665 19.1752 18.5437 19.1946 18.6215 19.2103C18.6998 19.226 18.7784 19.2376 18.8577 19.245C18.9367 19.2529 19.0164 19.2566 19.0957 19.2566C19.1754 19.2562 19.2547 19.2521 19.3341 19.2443C19.4131 19.2361 19.4917 19.2241 19.5695 19.2081C19.6478 19.1924 19.7249 19.1726 19.8009 19.1487C19.8769 19.1252 19.9515 19.0979 20.025 19.067C20.0984 19.036 20.1704 19.0013 20.2402 18.9632C20.3104 18.9247 20.3783 18.8833 20.4444 18.8385C20.5102 18.7934 20.5741 18.7452 20.6354 18.6941C20.6968 18.6425 20.7552 18.5884 20.8113 18.5313L17.04 14.7123Z"
                                                                                            fill="black" />
                                                                                        <defs>
                                                                                            <linearGradient
                                                                                                id="paint0_linear_12641_124172"
                                                                                                x1="33"
                                                                                                y1="4.5"
                                                                                                x2="15"
                                                                                                y2="16"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop offset="0.530822"
                                                                                                    stop-color="#D3D3D3" />
                                                                                                <stop offset="0.950249"
                                                                                                    stop-color="white" />
                                                                                            </linearGradient>
                                                                                            <clipPath
                                                                                                id="clip0_12641_124172">
                                                                                                <rect width="30"
                                                                                                    height="30"
                                                                                                    fill="white" />
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                </a>
                                                                                <a href="#"
                                                                                    title="Accept Assignment"
                                                                                    aria-label="Accept Assignment"
                                                                                    wire:click="acceptAssignment('{{ $booking->id }}')"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                                                                    <svg width="30" height="30"
                                                                                        viewBox="0 0 30 30"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <g
                                                                                            clip-path="url(#clip0_12641_124163)">
                                                                                            <circle cx="15"
                                                                                                cy="15"
                                                                                                r="15"
                                                                                                transform="rotate(90 15 15)"
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
                                                                                                x1="33"
                                                                                                y1="4.5"
                                                                                                x2="15"
                                                                                                y2="16"
                                                                                                gradientUnits="userSpaceOnUse">
                                                                                                <stop offset="0.530822"
                                                                                                    stop-color="#D3D3D3" />
                                                                                                <stop offset="0.950249"
                                                                                                    stop-color="white" />
                                                                                            </linearGradient>
                                                                                            <clipPath
                                                                                                id="clip0_12641_124163">
                                                                                                <rect width="30"
                                                                                                    height="30"
                                                                                                    fill="white" />
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                </a>
                                                                            @elseif($bookingSection != 'customer')
                                                                                <a href="#"
                                                                                    title="Assign Provider"
                                                                                    aria-label="Assign Provider"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                                    wire:click="openAssignProvidersPanel({{ $booking->id }},{{ $booking->service_id }})"
                                                                                    @click="assignProvider = true"><svg
                                                                                        aria-label="Assign Provider"
                                                                                        width="20" height="20"
                                                                                        viewBox="0 0 20 20"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/sprite.svg#assign-provider">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            @endif
                                                                            @if ($bookingType != 'Pending Approval' && $bookingSection != 'customer')
                                                                                <div class="dropdown ac-cstm">
                                                                                    <a href="javascript:void(0)"
                                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                                        data-bs-toggle="dropdown"
                                                                                        data-bs-auto-close="outside"
                                                                                        aria-label="Action dropdown"
                                                                                        data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                                                        <svg aria-label="More Options"
                                                                                            width="20"
                                                                                            height="20"
                                                                                            viewBox="0 0 20 20">
                                                                                            <use
                                                                                                xlink:href="/css/common-icons.svg#dropdown">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- End of update by Shanila --}}
                                                                                    </a>
                                                                                    <div
                                                                                        class="tablediv dropdown-menu fadeIn">
                                                                                        @if ($bookingType != 'Invitations')
                                                                                            <a title="Duplicate"
                                                                                                aria-label="Duplicate"
                                                                                                href=""
                                                                                                class="dropdown-item">
                                                                                                <i
                                                                                                    class="fa fa-clone"></i>
                                                                                                Duplicate
                                                                                            </a>
                                                                                            <a href="javascript:void(0)"
                                                                                                aria-label="Reschedule"
                                                                                                title="Reschedule"
                                                                                                class="dropdown-item"
                                                                                                @click="rescheduleBooking = true">
                                                                                                <i
                                                                                                    class="fa fa-calendar"></i>
                                                                                                Reschedule
                                                                                            </a>
                                                                                            @if (!$isCustomer)
                                                                                                <a title="Manage Assigned Providers"
                                                                                                    aria-label="Manage Assigned Providers"
                                                                                                    class="dropdown-item"
                                                                                                    wire:click="openAssignProvidersPanel({{ $booking->id }},{{ $booking->service_id }})"
                                                                                                    @click="assignProvider = true"
                                                                                                    href="javascript:void(0)">
                                                                                                    <i
                                                                                                        class="fa fa-user-plus"></i>
                                                                                                    {{ $bookingType == 'Unassigned' ? 'Assign Providers' : 'Manage Assigned Providers ' }}
                                                                                                </a>
                                                                                            @endif
                                                                                        @endif
                                                                                        @if ($bookingType == 'Invitations')
                                                                                            <a href="{{ $isCustomer ? route('tenant.customer-booking-edit', ['bookingID' => encrypt($booking->id)]) : route('tenant.booking-edit', ['bookingID' => encrypt($booking->id)]) }}"
                                                                                                title="Edit"
                                                                                                aria-label="Edit Booking"
                                                                                                style="color:#fff"
                                                                                                class="dropdown-item">
                                                                                                <svg aria-label="Assign Provider"
                                                                                                    class="fill"
                                                                                                    width="20"
                                                                                                    height="28"
                                                                                                    viewBox="0 0 20 28"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <use
                                                                                                        xlink:href="/css/sprite.svg#edit-icon">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                Edit
                                                                                            </a>
                                                                                        @endif
                                                                                        @if (($bookingType == 'Unassigned' || $bookingType == 'Invitations' || $bookingType == 'Draft') && !$isCustomer)
                                                                                            <a href="javascript:void(0)"
                                                                                                aria-label="Invite Providers"
                                                                                                title="Invite Providers"
                                                                                                class="dropdown-item"
                                                                                                wire:click="openAssignProvidersPanel({{ $booking->id }},{{ $booking->service_id }}, 2)"
                                                                                                @click="assignProvider = true">
                                                                                                <i
                                                                                                    class="fa fa-envelope-o"></i>
                                                                                                Invite Providers
                                                                                            </a>
                                                                                        @endif
                                                                                        @if ($bookingType != 'Invitations')
                                                                                            <a title="Message Customer"
                                                                                                aria-label="Message Customer"
                                                                                                class="dropdown-item"
                                                                                                href="">
                                                                                                <i
                                                                                                    class="fa fa-comment"></i>
                                                                                                Message Customer
                                                                                            </a>
                                                                                            <a title="Message Provider Team"
                                                                                                aria-label="Message Provider Team"
                                                                                                class="dropdown-item"
                                                                                                href="">
                                                                                                <i
                                                                                                    class="fa fa-comment"></i>
                                                                                                Message Provider Team
                                                                                            </a>
                                                                                            <a href="javascript:void(0)"
                                                                                                title="Cancel"
                                                                                                aria-label="Cancel"
                                                                                                class="dropdown-item">
                                                                                                <svg width="17"
                                                                                                    height="18"
                                                                                                    viewBox="0 0 17 18"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125"
                                                                                                        stroke="black"
                                                                                                        stroke-width="1.5"
                                                                                                        stroke-linecap="round"
                                                                                                        stroke-linejoin="round">
                                                                                                    </path>
                                                                                                </svg>
                                                                                                Cancel
                                                                                            </a>
                                                                                        @endif

                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td colSpan=8>
                                                                    <div class="text-center">
                                                                        <small>No Bookings available</small>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>



                                    {{-- Hoverable rows End --}}
                                    <div class="d-flex flex-column flex-md-row justify-content-between">

                                        <div class="col-auto overflow-auto my-sm-2 my-md-0 ms-sm-0">
                                            <div class="d-flex flex-lg-row align-items-center">
                                                <label class="w-auto">
                                                    <select wire:model="limit" class="form-select form-select-sm"
                                                        id="limit">
                                                        <option>10</option>
                                                        <option>25</option>
                                                        <option>50</option>
                                                        <option>100</option>
                                                    </select>
                                                </label>
                                                <small class="ms-2 text-muted">
                                                    Records per page
                                                </small>
                                            </div>
                                        </div>

                                        {{ $booking_assignments->links('livewire.app.common.bookings.booking-nav') }}

                                    </div>
                                    {{-- icon legend bar start --}}
                                    <div class="d-flex actions gap-3 justify-content-md-end mb-2">
                                        <div class="d-flex gap-2 align-items-center">
                                            <a href="#" title="Edit" aria-label="Edit Booking"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg aria-label="Assign Provider" class="fill" width="20"
                                                    height="28" viewBox="0 0 20 28" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                </svg>
                                            </a>
                                            <span class="text-sm">
                                                Edit
                                            </span>
                                        </div>
                                        <div class="d-flex gap-2 align-items-center">
                                            <a href="#" title="Assign Provider" aria-label="Assign Provider"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg aria-label="Assign Provider" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/sprite.svg#assign-provider"></use>
                                                </svg>
                                            </a>
                                            <span class="text-sm">
                                                Assign Provider
                                            </span>
                                        </div>
                                    </div>
                                    {{-- icon legend bar end --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

    @include('panels.booking-details.reschedule-booking')
    @include('modals.common.confirm-completion')
    @include('modals.admin-staff')
    @include('modals.assign-provider-team')
    @include('modals.meeting-links')
    @include('modals.provider-message')
    @include('modals.common.review-feedback')
    @include('modals.common.available-timeslot')
    @include('panels.booking-details.assign-providers')
    @include('modals.unassign')



</div>
{{-- End: Content --}}
@push('scripts')
    <script>
        function updateVal(attrName, val) {
            console.log('called');
            if (attrName == "Service_filter" ||
                attrName == "specialization_search_filter" ||
                attrName == "setup_value_label" ||
                attrName == "tags_selected" ||
                attrName == "providers_selected" ||
                attrName == "preferred_provider_ids" ||
                attrName == "gender" ||
                attrName == "ethnicity" || attrName == "distance_filter" || attrName == "accommodation_filter" ||
                attrName == "certifications") {
                Livewire.emit('refreshFilters', attrName, val);
            } else {
                Livewire.emit('updateVal', attrName, val);
            }
        }
        document.addEventListener('refreshSelects2', function(event) {
            $('.select2').select2();
            $('.select2').off('change').on('change', function(e) {
                let attrName = $(this).attr('id');
                updateVal(attrName, $(this).select2("val"));
            });
        });

        function refreshSelectsEvent() {
            $('.select2').select2();
            $('.select2').off('change').on('change', function(e) {
                let attrName = $(this).attr('id');
                updateVal(attrName, $(this).select2("val"));
            });
        }

        Livewire.on('closeUnassignModel', () => {
            $('#UnassignModal').modal('hide');

        });

        Livewire.on('closeConfirmCompletionModal', () => {
            $('#confirmCompletion').modal('hide');

        });
    </script>
@endpush
