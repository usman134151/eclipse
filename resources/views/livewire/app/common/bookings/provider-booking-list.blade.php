<div x-data="{ addDocuments: false, offcanvasOpenCheckIn: false, offcanvasOpenCheckOut: false, assignmentDetails: false, addReimbursement: false, step: 1 }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            @if ($showHeader)
                <div class="mt-3" wire:ignore>
                    <x-advancefilters type="" :filterProviders="$filterProviders" :hideProvider="true" :setupValues="$setupValues" />
                </div>
            @endif
            <div class="row mb-5">
                <div class="col-lg-12">

                    <div>
                        <!-- Hoverable rows start -->
                        <div class="row" id="table-hover-row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="" class="table table-fs-md table-hover" aria-label="">
                                        <thead>
                                            <tr role="row">
                                                <th scope="col" class="text-center">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        aria-label="Select All Assignments">
                                                </th>
                                                <th scope="col">Service Date</th>
                                                <th scope="col">Assignments Details</th>
                                                <th scope="col">Industry</th>
                                                <th scope="col">Accommodation</th>
                                                <th scope="col">Location</th>
                                                <th>No. of provider</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($booking_assignments))


                                                @foreach ($booking_assignments as $i => $booking)
                                                    @php
                                                        $code = 'none';
                                                        if ($bookingType == 'Past' || $bookingType == "Today's" || $bookingType == 'Active') {
                                                            if ($booking['is_closed'] == 1) {
                                                                $code = 'Completed Assignment';
                                                            } elseif ($booking['is_closed'] == 2) {
                                                                $code = 'Completed Assignment';
                                                            } else {
                                                                if ($booking['check_in_status'] == 1) {
                                                                    $code = 'Provider Checked-in';
                                                                }
                                                                if ($booking['check_in_status'] == 2) {
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
                                                    <tr role="row" class="{{ $i % 2 == 0 ? 'even' : 'odd' }}"
                                                        {{-- @if ($bookingType != 'Unassigned' && $bookingType != 'Invitations') class="{{ $booking['class'] }}" @else class="even" @endif --}}>
                                                        <td class="text-center {{ $cssClass }}"
                                                            style="background-color:{{ $colorCodes[$code] }}">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" aria-label="Select Assignment">
                                                        </td>
                                                        <td class="{{ $cssClass }}"
                                                            @click="assignmentDetails = true"
                                                            wire:click="setAssignmentDetails({{ $booking['id'] }},'{{ $booking['booking_number'] }}')"
                                                            style="background-color:{{ $colorCodes[$code] }}">

                                                            <div>
                                                                <div class="time-date">
                                                                    {{ date_format(date_create($booking['booking_start_at']), 'm/d/Y') }}
                                                                </div>
                                                                <div class="time-date">
                                                                    {{ $booking['booking_start_at'] ? date_format(date_create($booking['booking_start_at']), 'h:i A') : '' }}
                                                                    to
                                                                    {{ $booking['booking_end_at'] ? date_format(date_create($booking['booking_end_at']), 'h:i A') : '' }}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="{{ $cssClass }}"
                                                            style="background-color:{{ $colorCodes[$code] }}"
                                                            @click="assignmentDetails = true"
                                                            wire:click="setAssignmentDetails({{ $booking['id'] }},'{{ $booking['booking_number'] }}')">
                                                            <a
                                                                href="#">{{ $booking['booking_number'] ? $booking['booking_number'] : '' }}</a>
                                                            <div>
                                                                @if ($booking->service_type)
                                                                    {{ $serviceTypes[$booking->service_type]['title'] }}
                                                                @endif
                                                                Assignment
                                                            </div>
                                                        </td>
                                                        <td class="{{ $cssClass }}"
                                                            style="background-color:{{ $colorCodes[$code] }}">
                                                            <div>
                                                                {{ $booking->industry ? $booking->industry->name : 'N/A' }}
                                                            </div>
                                                        </td>
                                                        <td class="{{ $cssClass }}"
                                                            style="background-color:{{ $colorCodes[$code] }}">
                                                            <div>
                                                                {{ isset($booking->accommodation_name) ? $booking->accommodation_name : '' }}

                                                            </div>
                                                            {{-- <div>Shelby Sign Language</div> --}}
                                                            <div>Service:
                                                                {{ isset($booking->service_name) ? $booking->service_name : 'N/A' }}
                                                            </div>
                                                        </td>
                                                        <td class="{{ $cssClass }}"
                                                            style="background-color:{{ $colorCodes[$code] }}">
                                                            <div>
                                                                @if ($booking->service_type == 1)
                                                                    @if ($booking->physicalAddress)
                                                                        <a target="_blank"
                                                                            href="https://www.google.com/maps/search/?api=1&query={{ str_replace(' ', '+', $booking->physicalAddress->address_line1 . ' ' . $booking->physicalAddress->address_line2 . ', ' . $booking->physicalAddress->city . ' ' . $booking->physicalAddress->state . ' ' . $booking->physicalAddress->country) }}">
                                                                            {{ $booking->physicalAddress->address_name . ': ' . $booking->physicalAddress->address_line1 . ', ' . $booking->physicalAddress->address_line2 . ', ' . $booking->physicalAddress->city . ', ' . $booking->physicalAddress->state }}
                                                                        </a>
                                                                    @else
                                                                        N/A
                                                                    @endif
                                                                @else
                                                                    N/A
                                                                @endif
                                                            </div>
                                                        </td>
                                                        <td class="{{ $cssClass }}"
                                                            style="background-color:{{ $colorCodes[$code] }}">
                                                            {{ $booking['provider_count'] }}</td>
                                                        <td class="{{ $cssClass }}"
                                                            style="background-color:{{ $colorCodes[$code] }}">
                                                            @if ($bookingType != 'Unassigned' && $bookingType != 'Invitations')
                                                                @if ($booking['status'] > 2)
                                                                    Cancelled
                                                                @elseif ($booking['check_in_status'] == 0)
                                                                    On Time
                                                                @elseif($booking['check_in_status'] == 1)
                                                                    Checked In
                                                                @elseif($booking['check_in_status'] == 2)
                                                                    Running Late
                                                                @elseif($booking['check_in_status'] == 3)
                                                                    Checked Out
                                                                @endif
                                                            @else
                                                                Unassigned
                                                            @endif

                                                        </td>
                                                        <td class="{{ $cssClass }}"
                                                            style="background-color:{{ $colorCodes[$code] }}">
                                                            <div class="d-flex actions">
                                                                @if ($bookingType != 'Unassigned' && $bookingType != 'Invitations' && $bookingType != 'Cancelled')
                                                                    {{-- location and meeting link display --}}
                                                                    @if ($booking->service_type && $bookingType != 'Past')
                                                                        @if ($booking->service_type == 1)
                                                                            {{-- In - Person --}}
                                                                            <div
                                                                                class="d-flex gap-2 align-items-center">
                                                                                @if ($booking->physicalAddress)
                                                                                    <a target="_blank"
                                                                                        href="https://www.google.com/maps/search/?api=1&query={{ str_replace(' ', '+', $booking->physicalAddress->address_line1 . ' ' . $booking->physicalAddress->address_line2 . ', ' . $booking->physicalAddress->city . ' ' . $booking->physicalAddress->state . ' ' . $booking->physicalAddress->country) }}"
                                                                                        title="View" aria-label="View"
                                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                        <svg aria-label="In-Person"
                                                                                            width="16"
                                                                                            height="20"
                                                                                            viewBox="0 0 16 20"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z"
                                                                                                fill="black" />
                                                                                        </svg>
                                                                                    </a>
                                                                                @endif

                                                                            </div>
                                                                        @else
                                                                            {{-- Virtual --}}
                                                                            <div
                                                                                class="d-flex gap-2 align-items-center">
                                                                                <a href="{{ $booking['meeting_link'] ? $booking['meeting_link'] : '#' }}"
                                                                                    title="Meeting Link"
                                                                                    aria-label="Meeting Link"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    <svg aria-label="Virtual"
                                                                                        width="22" height="15"
                                                                                        viewBox="0 0 22 15"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <mask id="mask0_9380_60671"
                                                                                            style="mask-type:luminance"
                                                                                            maskUnits="userSpaceOnUse"
                                                                                            x="0" y="0" width="22"
                                                                                            height="15">
                                                                                            <path
                                                                                                d="M0 0H21.4884V15H0V0Z"
                                                                                                fill="white" />
                                                                                        </mask>
                                                                                        <g
                                                                                            mask="url(#mask0_9380_60671)">
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M0 3.21439C0 1.43932 1.44295 0 3.22311 0H13.4302C15.2104 0 16.6533 1.43932 16.6533 3.21439V3.70858L19.9775 2.23547C20.31 2.08794 20.6944 2.11846 20.9993 2.31613C21.3041 2.51381 21.4884 2.85174 21.4884 3.21439V11.786C21.4884 12.1486 21.3041 12.4866 20.9993 12.6842C20.6944 12.8819 20.31 12.9121 19.9775 12.7649L16.6533 11.2918V11.786C16.6533 13.561 15.2104 15 13.4302 15H3.22311C1.44295 15 0 13.561 0 11.786V3.21439ZM3.22311 2.14281C2.62972 2.14281 2.14898 2.62282 2.14898 3.21439V11.786C2.14898 12.3775 2.62972 12.8572 3.22311 12.8572H13.4302C14.0236 12.8572 14.5047 12.3775 14.5047 11.786V10.4673C14.5047 9.30414 15.7049 8.52616 16.7707 8.99855L19.3394 10.137V4.86301L16.7707 6.00145C15.7049 6.47384 14.5047 5.69586 14.5047 4.53307V3.21439C14.5047 2.62282 14.0236 2.14281 13.4302 2.14281H3.22311Z"
                                                                                                fill="black" />
                                                                                        </g>
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M4.29755 3.21094H8.59515V5.35374H4.29755V3.21094Z"
                                                                                            fill="black" />
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        @endif
                                                                    @endif



                                                                    {{-- running late --}}
                                                                    @if (
                                                                        $booking['display_running_late'] &&
                                                                            $booking['check_in_status'] == 0 &&
                                                                            ($bookingType == "Today's" || $bookingType == 'Upcoming'))
                                                                        <a href="javascript:void(0)"
                                                                            title="Running Late"
                                                                            aria-label="Running Late"
                                                                            wire:click="$emit('openRunningLateModal',{{ $booking['id'] }}, {{ $booking['service_id'] }})"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                            data-bs-toggle="modal">
                                                                            <svg aria-label="Running Late"
                                                                                width="23" height="22"
                                                                                viewBox="0 0 23 22" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/provider.svg#running-late">
                                                                                </use>
                                                                            </svg>
                                                                        </a>
                                                                    @endif
                                                                    {{-- checkin --}}
                                                                    @if (
                                                                        $booking['display_check_in'] &&
                                                                            ($bookingType == "Today's" || $bookingType == 'Active') &&
                                                                            ($booking['check_in_status'] == 0 || $booking['check_in_status'] == 2))
                                                                        <a href="javascript:void(0)"
                                                                            @click="offcanvasOpenCheckIn = true"
                                                                            wire:click="showCheckInPanel('{{ $booking['id'] }}','{{ $booking['booking_service_id'] }}','{{ $booking['booking_number'] }}')"
                                                                            title="Check In" aria-label="Check In"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                            <svg aria-label="Check In" width="22"
                                                                                height="22" viewBox="0 0 22 22"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/provider.svg#check-in">
                                                                                </use>
                                                                            </svg>
                                                                        </a>
                                                                    @endif
                                                                    {{-- check out --}}
                                                                    @if (
                                                                        $booking['display_check_out'] &&
                                                                            (!$booking['display_check_in'] || $booking['check_in_status'] == 1 || $booking['check_in_status'] == 3))
                                                                        <a href="#"
                                                                            @click="offcanvasOpenCheckOut = true"
                                                                            wire:click="$emit('showCheckOutPanel','{{ $booking['id'] }}','{{ $booking['booking_service_id'] }}','{{ $booking['booking_number'] }}')"
                                                                            title="Check Out" aria-label="Check Out"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                            <svg aria-label="Check Out" width="23"
                                                                                height="21" viewBox="0 0 23 21"
                                                                                fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/provider.svg#check-out">
                                                                                </use>
                                                                            </svg>

                                                                        </a>
                                                                    @endif
                                                                @elseif($bookingType == 'Unassigned')
                                                                    <a href="#" title="Submit Availability"
                                                                        aria-label="Submit Availability"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                        wire:click="$emit('openSubmitAvailabilityModal','{{ $booking['id'] }}')"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#submitAvailability">
                                                                        <svg aria-label="Submit Availability"
                                                                            width="18" height="20"
                                                                            viewBox="0 0 18 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <use
                                                                                xlink:href="/css/provider.svg#calendar">
                                                                            </use>
                                                                        </svg>
                                                                    </a>

                                                                    @if ($booking['avail_status'] == 1)
                                                                        Available
                                                                    @elseif($booking['avail_status'] == 2)
                                                                        Not Available
                                                                    @endif
                                                                @elseif($bookingType == 'Invitations')
                                                                    <div class="d-flex align-items-center">
                                                                        <a href="#" title="Confirm Invitation"
                                                                            aria-label="Confirm Invitation"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                            wire:click="$emit('openProviderInvitationResponseModal','{{ $booking['id'] }}','{{ $booking['invitation_id'] }}')"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#confirmInvitation">
                                                                            <svg aria-label="Confirm Invitation"
                                                                                width="19" height="19"
                                                                                viewBox="0 0 19 19" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/provider.svg#confirm-invitation">
                                                                                </use>
                                                                            </svg>
                                                                        </a>
                                                                        @if ($booking['invite_status'] == 1)
                                                                            Accepted
                                                                        @elseif($booking['invite_status'] == 2)
                                                                            Declined
                                                                        @endif
                                                                    </div>
                                                                @endif
                                                                <a href="#" title="View Assignment"
                                                                    aria-label="View Assignment"
                                                                    @click="assignmentDetails = true"
                                                                    wire:click="setAssignmentDetails({{ $booking['id'] }},'{{ $booking['booking_number'] }}')"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    <svg aria-label="View Assignment" aria-label=""
                                                                        width="20" height="20"
                                                                        viewBox="0 0 20 20" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M14.2857 17.1462C15.0747 17.1462 15.7143 16.5066 15.7143 15.7176C15.7143 14.9287 15.0747 14.2891 14.2857 14.2891C13.4967 14.2891 12.8571 14.9287 12.8571 15.7176C12.8571 16.5066 13.4967 17.1462 14.2857 17.1462Z"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M19.8407 15.341C19.3994 14.2167 18.6378 13.2465 17.6503 12.5509C16.6629 11.8552 15.493 11.4646 14.2857 11.4275C13.0784 11.4646 11.9085 11.8552 10.9211 12.5509C9.93363 13.2465 9.17204 14.2167 8.7307 15.341L8.57141 15.7132L8.7307 16.0853C9.17204 17.2097 9.93363 18.1798 10.9211 18.8755C11.9085 19.5711 13.0784 19.9618 14.2857 19.9989C15.493 19.9618 16.6629 19.5711 17.6503 18.8755C18.6378 18.1798 19.3994 17.2097 19.8407 16.0853L20 15.7132L19.8407 15.341ZM14.2857 18.5703C13.7206 18.5703 13.1682 18.4027 12.6984 18.0888C12.2285 17.7748 11.8623 17.3286 11.646 16.8066C11.4298 16.2845 11.3732 15.71 11.4835 15.1558C11.5937 14.6015 11.8658 14.0924 12.2654 13.6929C12.665 13.2933 13.1741 13.0212 13.7283 12.9109C14.2825 12.8007 14.857 12.8573 15.3791 13.0735C15.9012 13.2898 16.3474 13.656 16.6613 14.1258C16.9753 14.5957 17.1428 15.1481 17.1428 15.7132C17.1419 16.4706 16.8406 17.1968 16.305 17.7324C15.7693 18.268 15.0432 18.5694 14.2857 18.5703ZM3.57141 10.7132H7.14284V12.1417H3.57141V10.7132ZM3.57141 7.14174H12.1428V8.57031H3.57141V7.14174ZM3.57141 3.57031H12.1428V4.99888H3.57141V3.57031Z"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z"
                                                                            fill="black" />
                                                                    </svg>
                                                                </a>
                                                                {{-- @if ($bookingType == "Today's")
                                                                    <div class="dropdown ac-cstm">
                                                                        <a aria-label="Action Dropdown"
                                                                            href="javascript:void(0)"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            <svg aria-label="More Options"
                                                                                width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu fadeIn">
                                                                                    <a title="Unassign"
                                                                                        aria-label="Unassign"
                                                                                        href="#" data-bs-toggle="modal" data-bs-target="#UnassignModal"
                                                                                        class="dropdown-item">
                                                                                        <i class="fa fa-clone"></i>
                                                                                        Unassign 
                                                                                    </a>
                                                                            </div>
                                                                    </div>
                                                                @endif --}}
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colSpan=9>
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
                        <!-- Hoverable rows end -->
                        <div class="d-flex flex-column flex-md-row justify-content-between">

                            <div class="col-auto overflow-auto my-sm-2 my-md-0 ms-sm-0">
                                <div class="d-flex flex-lg-row align-items-center">
                                    <label class="w-auto">
                                        <select wire:model="limit" class="form-select form-select-sm" id="limit">
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
                        <!-- Icon Help -->
                        <div class="d-flex actions gap-3 justify-content-end mb-3">
                            <div class="d-flex gap-2 align-items-center">
                                <a href="#" title="View" aria-label="View"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="In-Person" width="16" height="20" viewBox="0 0 16 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <span class="text-sm">
                                    In-Person
                                </span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <a href="#" title="Accept" aria-label="Accept"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Virtual" width="22" height="15" viewBox="0 0 22 15"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_9380_60671" style="mask-type:luminance"
                                            maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="15">
                                            <path d="M0 0H21.4884V15H0V0Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_9380_60671)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 3.21439C0 1.43932 1.44295 0 3.22311 0H13.4302C15.2104 0 16.6533 1.43932 16.6533 3.21439V3.70858L19.9775 2.23547C20.31 2.08794 20.6944 2.11846 20.9993 2.31613C21.3041 2.51381 21.4884 2.85174 21.4884 3.21439V11.786C21.4884 12.1486 21.3041 12.4866 20.9993 12.6842C20.6944 12.8819 20.31 12.9121 19.9775 12.7649L16.6533 11.2918V11.786C16.6533 13.561 15.2104 15 13.4302 15H3.22311C1.44295 15 0 13.561 0 11.786V3.21439ZM3.22311 2.14281C2.62972 2.14281 2.14898 2.62282 2.14898 3.21439V11.786C2.14898 12.3775 2.62972 12.8572 3.22311 12.8572H13.4302C14.0236 12.8572 14.5047 12.3775 14.5047 11.786V10.4673C14.5047 9.30414 15.7049 8.52616 16.7707 8.99855L19.3394 10.137V4.86301L16.7707 6.00145C15.7049 6.47384 14.5047 5.69586 14.5047 4.53307V3.21439C14.5047 2.62282 14.0236 2.14281 13.4302 2.14281H3.22311Z"
                                                fill="black" />
                                        </g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M4.29755 3.21094H8.59515V5.35374H4.29755V3.21094Z" fill="black" />
                                    </svg>
                                </a>
                                <span class="text-sm">
                                    Virtual
                                </span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <a href="#" title="Objection" aria-label="Objection"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Check-In" width="22" height="22" viewBox="0 0 22 22"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.8581 1.05497C20.8034 1.01832 20.7434 1 20.6776 1H5.83919C5.79644 1 5.75539 1.00814 5.71569 1.02477C5.67633 1.04105 5.64138 1.06447 5.61118 1.09466C5.58099 1.1252 5.55758 1.16015 5.54129 1.19984C5.525 1.23954 5.51686 1.2806 5.51686 1.32369V7.79607H6.16186V1.64737H19.0035L12.4938 4.25893C12.4639 4.2708 12.4364 4.28709 12.411 4.30745C12.3859 4.32746 12.3642 4.35121 12.3462 4.37802C12.3282 4.40482 12.3143 4.43366 12.3048 4.46488C12.2953 4.49575 12.2905 4.52731 12.2905 4.55988V19.4464H6.16186V14.2685H5.51686V19.7701C5.51686 19.8129 5.525 19.8543 5.54129 19.894C5.55758 19.9337 5.58099 19.9686 5.61118 19.9988C5.64138 20.0294 5.67633 20.0528 5.71569 20.069C5.75539 20.0853 5.79644 20.0938 5.83919 20.0938H12.2905V20.7409C12.2905 20.7948 12.3031 20.8454 12.3282 20.8929C12.3533 20.9407 12.3883 20.9794 12.4327 21.0096C12.4873 21.0462 12.5474 21.0645 12.6132 21.0645C12.6546 21.0652 12.6943 21.0578 12.7326 21.0418L20.797 17.8056C20.8269 17.7937 20.8543 17.7774 20.8798 17.7571C20.9049 17.7371 20.9266 17.7133 20.9446 17.6865C20.9626 17.6597 20.9765 17.6309 20.986 17.5997C20.9955 17.5688 21.0002 17.5372 21.0002 17.5047V1.32369C21.0002 1.26974 20.9877 1.21918 20.9626 1.17168C20.9375 1.12384 20.9025 1.08516 20.8581 1.05497ZM20.3549 17.2848L12.9359 20.2621V4.77974L20.3549 1.80243V17.2848Z"
                                            fill="black" stroke="black" stroke-width="1.2"></path>
                                        <path
                                            d="M15.2147 12.0039C15.2785 12.0039 15.3413 11.9978 15.4037 11.9853C15.4661 11.9731 15.5265 11.9547 15.5852 11.9303C15.6439 11.9059 15.6996 11.876 15.7525 11.8404C15.8054 11.8051 15.8543 11.7647 15.8991 11.7196C15.9442 11.6745 15.9842 11.6256 16.0195 11.5727C16.0548 11.5198 16.0847 11.4638 16.1088 11.4048C16.1332 11.3457 16.1515 11.2853 16.1641 11.2225C16.1763 11.1601 16.1827 11.097 16.1827 11.0332C16.1827 10.9694 16.1763 10.9063 16.1641 10.8439C16.1515 10.7811 16.1332 10.7207 16.1088 10.6617C16.0847 10.6027 16.0548 10.5467 16.0195 10.4937C15.9842 10.4408 15.9442 10.392 15.8991 10.3468C15.8543 10.3017 15.8054 10.2613 15.7525 10.226C15.6996 10.1904 15.6439 10.1606 15.5852 10.1361C15.5265 10.1117 15.4661 10.0934 15.4037 10.0812C15.3413 10.0686 15.2785 10.0625 15.2147 10.0625C15.1513 10.0625 15.0885 10.0686 15.0261 10.0812C14.9636 10.0934 14.9032 10.1117 14.8445 10.1361C14.7858 10.1606 14.7302 10.1904 14.6773 10.226C14.6243 10.2613 14.5755 10.3017 14.5307 10.3468C14.4856 10.392 14.4455 10.4408 14.4102 10.4937C14.375 10.5467 14.3451 10.6027 14.3207 10.6617C14.2966 10.7207 14.2783 10.7811 14.2657 10.8439C14.2535 10.9063 14.247 10.9694 14.247 11.0332C14.247 11.097 14.2535 11.1601 14.2657 11.2225C14.2783 11.2853 14.2966 11.3457 14.3207 11.4048C14.3451 11.4638 14.375 11.5198 14.4102 11.5727C14.4455 11.6256 14.4856 11.6745 14.5307 11.7196C14.5755 11.7647 14.6243 11.8051 14.6773 11.8404C14.7302 11.876 14.7858 11.9059 14.8445 11.9303C14.9032 11.9547 14.9636 11.9731 15.0261 11.9853C15.0885 11.9978 15.1513 12.0039 15.2147 12.0039ZM15.2147 10.7095C15.2575 10.7095 15.2989 10.7177 15.3382 10.7343C15.3779 10.7506 15.4129 10.774 15.4431 10.8045C15.4733 10.8347 15.4963 10.8697 15.513 10.9094C15.5292 10.9491 15.5374 10.9905 15.5374 11.0332C15.5374 11.076 15.5292 11.1174 15.513 11.1571C15.4963 11.1968 15.4733 11.2317 15.4431 11.2619C15.4129 11.2924 15.3779 11.3159 15.3382 11.3321C15.2989 11.3488 15.2575 11.3569 15.2147 11.3569C15.172 11.3569 15.1309 11.3488 15.0916 11.3321C15.0519 11.3159 15.0169 11.2924 14.9867 11.2619C14.9565 11.2317 14.9331 11.1968 14.9168 11.1571C14.9005 11.1174 14.8924 11.076 14.8924 11.0332C14.8924 10.9905 14.9005 10.9491 14.9168 10.9094C14.9331 10.8697 14.9565 10.8347 14.9867 10.8045C15.0169 10.774 15.0519 10.7506 15.0916 10.7343C15.1309 10.7177 15.172 10.7095 15.2147 10.7095Z"
                                            fill="black"></path>
                                        <path
                                            d="M1.32233 12.6427H7.12868V13.2901C7.12868 13.3328 7.13683 13.3742 7.15311 13.4139C7.16974 13.4536 7.19281 13.4886 7.22335 13.5188C7.25354 13.5493 7.28815 13.5724 7.32785 13.589C7.36721 13.6053 7.4086 13.6134 7.45135 13.6134C7.50903 13.6131 7.56298 13.5978 7.61252 13.5683L11.4835 11.3028C11.5076 11.2886 11.5293 11.2713 11.549 11.2513C11.5687 11.2313 11.5853 11.2092 11.5992 11.1848C11.6128 11.1603 11.6233 11.1346 11.6308 11.1074C11.6379 11.0803 11.6413 11.0528 11.6413 11.0246C11.6413 10.9965 11.6379 10.969 11.6308 10.9418C11.6233 10.9147 11.6128 10.8889 11.5992 10.8645C11.5853 10.84 11.5687 10.818 11.549 10.798C11.5293 10.778 11.5076 10.7607 11.4835 10.7464L7.61252 8.48093C7.58809 8.46668 7.5623 8.45616 7.53516 8.4487C7.50768 8.44123 7.47985 8.4375 7.45169 8.4375C7.42353 8.4375 7.39571 8.44123 7.36856 8.44836C7.34108 8.45582 7.31529 8.46634 7.29087 8.48059C7.26644 8.4945 7.24404 8.51147 7.22402 8.53148C7.20401 8.5515 7.18704 8.57356 7.17279 8.59799C7.15854 8.62275 7.14768 8.64854 7.14022 8.67568C7.13275 8.70317 7.12902 8.73099 7.12868 8.75915V9.40653H1.32233C1.27958 9.40653 1.23852 9.41467 1.19883 9.43129C1.15947 9.44758 1.12452 9.47099 1.09432 9.50119C1.06413 9.53173 1.04072 9.56667 1.02443 9.60637C1.00814 9.64607 1 9.68712 1 9.73021V12.319C1 12.3621 1.00814 12.4032 1.02443 12.4429C1.04072 12.4826 1.06413 12.5175 1.09432 12.5481C1.12452 12.5783 1.15947 12.6017 1.19883 12.618C1.23852 12.6346 1.27958 12.6427 1.32233 12.6427ZM1.645 10.0539H7.45135C7.4941 10.0539 7.53516 10.0454 7.57486 10.0291C7.61421 10.0128 7.64916 9.98943 7.67936 9.9589C7.70956 9.9287 7.73297 9.89375 7.74925 9.85406C7.76554 9.81436 7.77368 9.77296 7.77402 9.73021V9.32238L10.677 11.0246L7.77402 12.7269V12.319C7.77368 12.2763 7.76554 12.2349 7.74925 12.1952C7.73297 12.1555 7.70956 12.1205 7.67936 12.0903C7.64916 12.0598 7.61421 12.0364 7.57486 12.0201C7.53516 12.0038 7.4941 11.9953 7.45135 11.9953H1.645V10.0539Z"
                                            fill="black" stroke="black" stroke-width="0.7"></path>
                                    </svg>
                                </a>
                                <span class="text-sm">
                                    Check-In
                                </span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <a href="#" title="Objection" aria-label="Objection"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Check-Out" width="23" height="21" viewBox="0 0 23 21"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.8647 1.05218C21.8129 1.01739 21.7555 1 21.6927 1H7.56064C7.52005 1 7.48076 1.00773 7.44307 1.02351C7.40539 1.03897 7.37221 1.0612 7.34354 1.08987C7.31456 1.11885 7.29233 1.15203 7.27687 1.18972C7.26109 1.2274 7.25336 1.26638 7.25336 1.30728V7.45163H7.86792V1.61456H20.0983L13.8986 4.09376C13.8699 4.10503 13.8438 4.12049 13.8197 4.13982C13.7958 4.15882 13.7752 4.18137 13.7578 4.20681C13.7407 4.23226 13.7275 4.25964 13.7185 4.28927C13.7095 4.31858 13.705 4.34854 13.705 4.37946V18.5115H7.86792V13.596H7.25336V18.8188C7.25336 18.8594 7.26109 18.8987 7.27687 18.9364C7.29233 18.9741 7.31456 19.0072 7.34354 19.0359C7.37221 19.0649 7.40539 19.0871 7.44307 19.1026C7.48076 19.118 7.52005 19.1261 7.56064 19.1261H13.705V19.7403C13.705 19.7916 13.7169 19.8395 13.7407 19.8846C13.7649 19.9301 13.7978 19.9668 13.8403 19.9954C13.8921 20.0302 13.9495 20.0476 14.0123 20.0476C14.0516 20.0483 14.0896 20.0412 14.126 20.026L21.8064 16.9539C21.8351 16.9426 21.8612 16.9271 21.8853 16.9078C21.9092 16.8888 21.9298 16.8663 21.9472 16.8408C21.9642 16.8154 21.9774 16.788 21.9865 16.7584C21.9955 16.729 22 16.6991 22 16.6682V1.30728C22 1.25607 21.9881 1.20808 21.9642 1.16298C21.9404 1.11757 21.9072 1.08085 21.8647 1.05218ZM21.3854 16.4594L14.3196 19.2859V4.58818L21.3854 1.76176V16.4594Z"
                                            fill="black" stroke="black" stroke-width="1.2"></path>
                                        <path
                                            d="M15.8557 11.4446C15.9162 11.4446 15.9761 11.4388 16.0354 11.4269C16.0947 11.4153 16.1523 11.3979 16.2084 11.3747C16.2641 11.3515 16.3172 11.3232 16.3678 11.2894C16.418 11.2559 16.4644 11.2175 16.5073 11.1747C16.5501 11.1319 16.5884 11.0855 16.6219 11.0352C16.6554 10.985 16.6841 10.9318 16.707 10.8758C16.7302 10.8197 16.7479 10.7624 16.7595 10.7028C16.7714 10.6436 16.7772 10.5836 16.7772 10.5231C16.7772 10.4625 16.7714 10.4026 16.7595 10.3434C16.7479 10.2838 16.7302 10.2264 16.707 10.1704C16.6841 10.1143 16.6554 10.0612 16.6219 10.0109C16.5884 9.9607 16.5501 9.91432 16.5073 9.87148C16.4644 9.82864 16.418 9.79031 16.3678 9.75681C16.3172 9.72299 16.2641 9.69465 16.2084 9.67146C16.1523 9.64827 16.0947 9.63087 16.0354 9.61928C15.9761 9.60736 15.9162 9.60156 15.8557 9.60156C15.7951 9.60156 15.7352 9.60736 15.6759 9.61928C15.6163 9.63087 15.5587 9.64827 15.503 9.67146C15.4469 9.69465 15.3938 9.72299 15.3435 9.75681C15.2933 9.79031 15.2466 9.82864 15.204 9.87148C15.1612 9.91432 15.1229 9.9607 15.0894 10.0109C15.0556 10.0612 15.0272 10.1143 15.004 10.1704C14.9808 10.2264 14.9634 10.2838 14.9515 10.3434C14.9399 10.4026 14.9338 10.4625 14.9338 10.5231C14.9338 10.5836 14.9399 10.6436 14.9515 10.7028C14.9634 10.7624 14.9808 10.8197 15.004 10.8758C15.0272 10.9318 15.0556 10.985 15.0894 11.0352C15.1229 11.0855 15.1612 11.1319 15.204 11.1747C15.2466 11.2175 15.2933 11.2559 15.3435 11.2894C15.3938 11.3232 15.4469 11.3515 15.503 11.3747C15.5587 11.3979 15.6163 11.4153 15.6759 11.4269C15.7352 11.4388 15.7951 11.4446 15.8557 11.4446ZM15.8557 10.2158C15.8962 10.2158 15.9355 10.2235 15.9732 10.2393C16.0109 10.2548 16.0441 10.277 16.0727 10.306C16.1017 10.3347 16.124 10.3678 16.1394 10.4055C16.1549 10.4432 16.1629 10.4825 16.1629 10.5231C16.1629 10.5637 16.1549 10.603 16.1394 10.6407C16.124 10.6783 16.1017 10.7115 16.0727 10.7402C16.0441 10.7692 16.0109 10.7914 15.9732 10.8069C15.9355 10.8226 15.8962 10.8304 15.8557 10.8304C15.8147 10.8304 15.7758 10.8226 15.7381 10.8069C15.7004 10.7914 15.6672 10.7692 15.6382 10.7402C15.6096 10.7115 15.5873 10.6783 15.5719 10.6407C15.5561 10.603 15.5484 10.5637 15.5484 10.5231C15.5484 10.4825 15.5561 10.4432 15.5719 10.4055C15.5873 10.3678 15.6096 10.3347 15.6382 10.306C15.6672 10.277 15.7004 10.2548 15.7381 10.2393C15.7758 10.2235 15.8147 10.2158 15.8557 10.2158Z"
                                            fill="black"></path>
                                        <path
                                            d="M1.15362 10.7904L4.84036 12.9411C4.88771 12.9691 4.93893 12.9836 4.99368 12.9839C5.03459 12.9839 5.07389 12.9762 5.11125 12.9607C5.14894 12.945 5.18211 12.923 5.2111 12.8941C5.23977 12.8654 5.26199 12.8322 5.27777 12.7945C5.29324 12.7568 5.30097 12.7176 5.30097 12.677V12.0624H10.8311C10.8717 12.0624 10.911 12.0547 10.9486 12.0389C10.9863 12.0234 11.0195 12.0012 11.0482 11.9725C11.0772 11.9435 11.0994 11.9104 11.1148 11.8727C11.1303 11.835 11.1384 11.796 11.1384 11.7551V9.29751C11.1384 9.2566 11.1303 9.21763 11.1148 9.17994C11.0994 9.14226 11.0772 9.10908 11.0482 9.08009C11.0195 9.05142 10.9863 9.0292 10.9486 9.01374C10.911 8.99796 10.8717 8.99023 10.8311 8.99023H5.30097V8.37566C5.30097 8.34893 5.29742 8.32252 5.29001 8.29643C5.28293 8.27066 5.27262 8.24618 5.25909 8.22267C5.24556 8.19947 5.22946 8.17854 5.21013 8.15953C5.19113 8.14053 5.16987 8.12443 5.14668 8.11122C5.12317 8.09769 5.09869 8.08771 5.0726 8.08062C5.04683 8.07386 5.02042 8.07031 4.99336 8.07031C4.96663 8.07031 4.94022 8.07386 4.91413 8.08094C4.88804 8.08803 4.86356 8.09801 4.84036 8.11154L1.15362 10.2622C1.13076 10.2757 1.10982 10.2921 1.09114 10.3112C1.07246 10.3302 1.05667 10.3511 1.04347 10.3743C1.03026 10.3975 1.02028 10.422 1.01351 10.4477C1.00643 10.4735 1.0032 10.4996 1.0032 10.5263C1.0032 10.553 1.00643 10.5791 1.01351 10.6049C1.02028 10.6307 1.03026 10.6552 1.04347 10.6783C1.05667 10.7015 1.07246 10.7225 1.09114 10.7415C1.10982 10.7605 1.13076 10.7769 1.15362 10.7904ZM4.68672 8.91035V9.29751C4.68672 9.33809 4.69445 9.37739 4.70991 9.41507C4.7257 9.45276 4.74792 9.48594 4.77659 9.5146C4.80526 9.54359 4.83875 9.56582 4.87612 9.58128C4.9138 9.59674 4.9531 9.60479 4.99368 9.60479H10.5238V11.4478H4.99368C4.9531 11.4478 4.9138 11.4559 4.87612 11.4714C4.83875 11.4868 4.80526 11.509 4.77659 11.538C4.74792 11.5667 4.7257 11.5999 4.70991 11.6376C4.69445 11.6752 4.68672 11.7145 4.68672 11.7551V12.1423L1.92151 10.5263L4.68672 8.91035Z"
                                            fill="black" stroke="black" stroke-width="0.7"></path>
                                    </svg>
                                </a>
                                <span class="text-sm">
                                    Check-Out
                                </span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <a href="#" title="Running Late" aria-label="Running Late"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Running Late" width="23" height="22" viewBox="0 0 23 22"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.69705 6.53125H2.39162V7.22194H1.69705V6.53125Z" fill="black"
                                            stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M11.7457 3.40163V2.71094H10.3569V3.74698C10.3569 3.85199 10.3089 3.95101 10.2268 4.01656L9.13547 4.88486C9.39342 5.03568 9.68978 5.12801 10.0098 5.12801C10.9669 5.12801 11.7457 4.3538 11.7457 3.40163Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M4.23674 9.97939C4.48483 9.97939 4.71529 9.85711 4.85273 9.65166L6.55479 7.11266V5.83594C6.2394 5.83594 5.94973 5.99416 5.78058 6.25846L5.60896 6.52663H3.083V7.21732H5.16706L4.06231 8.9437H1V9.63439H3.80012C3.85122 9.83103 4.02319 9.97939 4.23674 9.97939Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M2.04451 13.0859H1.69705V15.102C2.01914 14.9956 2.27991 14.7436 2.39162 14.4113V13.4313C2.39162 13.241 2.23586 13.0859 2.04451 13.0859Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M6.61563 10.3325H9.11093L10.062 8.1248C10.1047 8.02577 10.1914 7.95212 10.2967 7.92605C10.4018 7.89962 10.5131 7.92393 10.598 7.99124L11.0914 8.38381L11.4973 7.44221L10.4691 6.41921C10.2971 6.70183 9.99791 6.87979 9.66173 6.87979C9.34387 6.87979 9.04821 6.72227 8.87236 6.45903L8.45936 5.84375H7.25664V6.87979H7.60374C7.72109 6.87979 7.82998 6.93829 7.89412 7.03625C7.95861 7.13386 7.96882 7.25685 7.9216 7.36327L6.61563 10.3325Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M9.87577 6.03772L9.98007 5.83051C9.69816 5.82593 9.42858 5.77272 9.17767 5.67969L9.43598 6.06485C9.53712 6.21674 9.79472 6.20017 9.87577 6.03772Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M9.66848 3.59679V2.38103C9.66848 2.19074 9.82353 2.03604 10.0156 2.03604H11.6042C11.3357 1.4271 10.7257 1 10.0156 1C9.05848 1 8.27969 1.77456 8.27969 2.72638V3.41707C8.27969 3.79766 8.40796 4.14653 8.61834 4.43197L9.66848 3.59679Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M11.782 18.2533H11.844C11.8214 18.1984 11.8027 18.1416 11.782 18.0859V18.2533Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M9.21655 11.0078H6.29979L5.47941 12.8727C5.42444 12.9985 5.29934 13.0795 5.16155 13.0795H3.07855V14.4609H7.0303L7.97577 12.5798C8.02264 12.4868 8.10968 12.4195 8.21188 12.3973C8.31478 12.3751 8.42155 12.4001 8.50366 12.465L10.2396 13.846C10.2829 13.8805 10.3174 13.9253 10.34 13.9757L11.4222 16.3977C11.419 16.3272 11.4109 16.2581 11.4109 16.1873C11.4109 15.3631 11.5984 14.5832 11.9251 13.8802L11.468 12.6073L9.21655 11.0078Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M16.9628 12.7578C15.0486 12.7578 13.491 14.3069 13.491 16.2109C13.491 18.1149 15.0486 19.664 16.9628 19.664C18.8774 19.664 20.4346 18.1149 20.4346 16.2109C20.4346 14.3069 18.8774 12.7578 16.9628 12.7578ZM18.52 17.5426L17.2965 16.8125C17.1972 16.8678 17.0844 16.9016 16.9628 16.9016C16.5801 16.9016 16.2686 16.5919 16.2686 16.2109C16.2686 15.9565 16.4092 15.7362 16.6157 15.6164V13.4485H17.3099V15.6168C17.5168 15.7366 17.6574 15.9568 17.6574 16.2113C17.6574 16.2152 17.6563 16.2183 17.6563 16.2222L18.8777 16.9513L18.52 17.5426Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M16.9658 11.3281C14.2855 11.3281 12.1052 13.4964 12.1052 16.1623C12.1052 18.8278 14.2855 20.9964 16.9658 20.9964C19.6461 20.9964 21.8264 18.8278 21.8264 16.1623C21.8264 13.4964 19.6461 11.3281 16.9658 11.3281ZM16.9658 20.3057C14.6685 20.3057 12.7998 18.4472 12.7998 16.1623C12.7998 13.8773 14.6685 12.0188 16.9658 12.0188C19.2631 12.0188 21.1322 13.8773 21.1322 16.1623C21.1322 18.4472 19.2631 20.3057 16.9658 20.3057Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path
                                            d="M12.914 9.22145L15.3801 8.40354C15.5073 8.36125 15.5929 8.2432 15.5929 8.10929C15.5929 7.74632 15.2257 7.46688 14.8705 7.56766L12.5637 8.22311C12.4439 8.25765 12.3121 8.22417 12.223 8.13537L12.0302 7.94367L11.6581 8.80703L11.9678 9.053C12.2297 9.26162 12.5965 9.32646 12.914 9.22145Z"
                                            fill="black" stroke="black" stroke-width="0.35" />
                                        <path d="M14.5477 5.14844H18.7137V5.83913H14.5477V5.14844Z" fill="black"
                                            stroke="black" stroke-width="0.35" />
                                        <path d="M17.6805 7.22656H19.7635V7.9169H17.6805V7.22656Z" fill="black"
                                            stroke="black" stroke-width="0.35" />
                                    </svg>
                                </a>
                                <span class="text-sm">
                                    Running Late
                                </span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <a href="#" title="Objection" aria-label="Objection"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="View Assignment" aria-label="" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.2857 17.1462C15.0747 17.1462 15.7143 16.5066 15.7143 15.7176C15.7143 14.9287 15.0747 14.2891 14.2857 14.2891C13.4967 14.2891 12.8571 14.9287 12.8571 15.7176C12.8571 16.5066 13.4967 17.1462 14.2857 17.1462Z"
                                            fill="black" />
                                        <path
                                            d="M19.8407 15.341C19.3994 14.2167 18.6378 13.2465 17.6503 12.5509C16.6629 11.8552 15.493 11.4646 14.2857 11.4275C13.0784 11.4646 11.9085 11.8552 10.9211 12.5509C9.93363 13.2465 9.17204 14.2167 8.7307 15.341L8.57141 15.7132L8.7307 16.0853C9.17204 17.2097 9.93363 18.1798 10.9211 18.8755C11.9085 19.5711 13.0784 19.9618 14.2857 19.9989C15.493 19.9618 16.6629 19.5711 17.6503 18.8755C18.6378 18.1798 19.3994 17.2097 19.8407 16.0853L20 15.7132L19.8407 15.341ZM14.2857 18.5703C13.7206 18.5703 13.1682 18.4027 12.6984 18.0888C12.2285 17.7748 11.8623 17.3286 11.646 16.8066C11.4298 16.2845 11.3732 15.71 11.4835 15.1558C11.5937 14.6015 11.8658 14.0924 12.2654 13.6929C12.665 13.2933 13.1741 13.0212 13.7283 12.9109C14.2825 12.8007 14.857 12.8573 15.3791 13.0735C15.9012 13.2898 16.3474 13.656 16.6613 14.1258C16.9753 14.5957 17.1428 15.1481 17.1428 15.7132C17.1419 16.4706 16.8406 17.1968 16.305 17.7324C15.7693 18.268 15.0432 18.5694 14.2857 18.5703ZM3.57141 10.7132H7.14284V12.1417H3.57141V10.7132ZM3.57141 7.14174H12.1428V8.57031H3.57141V7.14174ZM3.57141 3.57031H12.1428V4.99888H3.57141V3.57031Z"
                                            fill="black" />
                                        <path
                                            d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <span class="text-sm">
                                    View Assignment
                                </span>
                            </div>
                        </div>
                        <!-- /Icon Help -->
                    </div>
                    <!-- /Today's Assignment -->
                </div>
            </div>
        </div>
    </div>

    @include('panels.provider.check-in')
    @include('panels.provider.check-out')
    @include('panels.common.assignment-details')
    @include('panels.common.add-documents', ['booking_id' => $booking_id])
    @include('panels.common.add-reimbursement')

    {{-- @include('panels.provider.add-reimbursement') --}}
    @include('modals.common.assignment-invitation')
    @include('modals.common.confirm-invitation')
    @include('modals.common.running-late')
    @include('modals.return-assignment')


</div>
@push('scripts')
    <script>
        function updateVal(attrName, val) {

            Livewire.emit('updateVal', attrName, val);

        }

        Livewire.on('openRunningLateModal', (type) => {
            $('#runningLateModal').modal('show');
        });
        Livewire.on('closeRunningLateModal', () => {
            $('#runningLateModal').modal('hide');

        });
        Livewire.on('closeRunningLateModal', () => {
            $('#runningLateModal').modal('hide');

        });

        Livewire.on('closeReturnAssignmentModal', () => {
            $('#returnAssignmentModal').modal('hide');

        });

        Livewire.on('closeAssignmentInvitationModal', () => {
            $('#submitAvailability').modal('hide');

        });
    </script>
@endpush
