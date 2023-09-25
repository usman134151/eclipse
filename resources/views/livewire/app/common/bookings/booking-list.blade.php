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
                    <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 me-2 gap-2" wire:click="$set('importFile',true)">
												{{-- Updated by Shanila to Add svg icon--}}
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
                                                    Manage Permissions
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
                                                                    if ($bookingType == 'Past') {
                                                                        if ($booking['is_closed'] == 1) {
                                                                            $code = 'Completed Assignment';
                                                                        } elseif ($booking['is_closed'] == 2) {
                                                                            $code = 'Cancelled';
                                                                        }
                                                                    } elseif ($bookingType == "Today's") {
                                                                        if ($booking['checked_in'] > 0) {
                                                                            $code = 'Provider Checked-in';
                                                                        }
                                                                        if ($booking['running_late'] > 0) {
                                                                            $code = 'Provider Running Late';
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
                                                                        <a href="{{ route('tenant.booking-view', ['bookingID' => encrypt($booking['id'])]) }}"
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
                                                                            {{ $statusValues[$booking['status']]['title'] }}
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
                                                                                <a href="{{ route('tenant.booking-edit', ['bookingID' => encrypt($booking->id)]) }}"
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
                                                                            @if (($bookingType == "Today's" || $bookingType == 'Past') && $bookingSection == 'customer')
                                                                                <a href="#"
                                                                                    title="Confirm Completion"
                                                                                    aria-label="Confirm Completion"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon "
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
                                                                            @else
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
                                                                            <div class="dropdown ac-cstm">
                                                                                <a href="javascript:void(0)"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                                    data-bs-toggle="dropdown"
                                                                                    data-bs-auto-close="outside"
                                                                                    aria-label="Action dropdown"
                                                                                    data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                                                    <svg aria-label="More Options"
                                                                                        width="20" height="20"
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
                                                                                            <i class="fa fa-clone"></i>
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
                                                                                    @if ($bookingType == 'Invitations')
                                                                                        <a href="{{ route('tenant.booking-edit', ['bookingID' => encrypt($booking->id)]) }}"
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
                                                                                    @if ($bookingType == 'Unassigned' || $bookingType == 'Invitations' || $bookingType == 'Draft')
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
                attrName == "certifications") {}
              //  Livewire.emit('refreshFilters', attrName, val);
         //   } else {
                Livewire.emit('updateVal', attrName, val);
        //    }
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
    </script>
@endpush
