<div x-data="{ rescheduleBooking: false, addDocuments: false }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @if ($booking)
        <div class="content-body">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $component == 'booking-details' ? 'active' : '' }}"
                                id="booking-details-tab" data-bs-toggle="tab" data-bs-target="#booking-details"
                                type="button" role="tab" aria-controls="booking-details" aria-selected="true">
                                {{-- Updated by Shanila to Add svg icon --}}
                                <svg aria-label="Booking Details" width="31" height="29" viewBox="0 0 31 29">
                                    <use xlink:href="/css/common-icons.svg#tablet"></use>
                                </svg>
                                {{-- End of update by Shanila --}}
                                <span>Booking Details </span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $component == 'assigned-providers' ? 'active' : '' }}"
                                id="assigned-providers-tab" data-bs-toggle="tab" data-bs-target="#assigned-providers"
                                type="button" role="tab" aria-controls="assigned-providers" aria-selected="false">

                                {{-- Updated by Shanila to Add svg icon --}}
                                <svg aria-label="Assigned Providers" width="25" height="28" viewBox="0 0 25 28">
                                    <use xlink:href="/css/common-icons.svg#gray-user"></use>
                                </svg>
                                {{-- End of update by Shanila --}}
                                <span>Booking Providers</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $component == 'attachments' ? 'active' : '' }}"
                                id="attachments-tab" data-bs-toggle="tab" data-bs-target="#attachments" type="button"
                                role="tab" aria-controls="attachments" aria-selected="false">
                                {{-- Updated by Shanila to Add svg icon --}}
                                <svg aria-label="Attachments" width="35" height="30" viewBox="0 0 35 30">
                                    <use xlink:href="/css/common-icons.svg#gray-drive"></use>
                                </svg>
                                {{-- End of update by Shanila --}}
                                <span>Attachments</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $component == 'payment-details' ? 'active' : '' }}"
                                id="payment-details-tab" data-bs-toggle="tab" data-bs-target="#payment-details"
                                type="button" role="tab" aria-controls="payment-details" aria-selected="false">
                                {{-- Updated by Shanila to Add svg icon --}}
                                <svg aria-label="Payment Details" width="27" height="31" viewBox="0 0 27 31">
                                    <use xlink:href="/css/common-icons.svg#gray-payment"></use>
                                </svg>
                                {{-- End of update by Shanila --}}
                                <span>Payment Details</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $component == 'assignment-log' ? 'active' : '' }}"
                                id="assignment-log-tab" data-bs-toggle="tab" data-bs-target="#assignment-log"
                                type="button" role="tab" aria-controls="assignment-log" aria-selected="false">
                                {{-- Updated by Shanila to Add svg icon --}}
                                <svg aria-label="Assignment Log" width="28" height="31" viewBox="0 0 28 31">
                                    <use xlink:href="/css/common-icons.svg#gray-journal"></use>
                                </svg>
                                {{-- End of update by Shanila --}}
                                <span>Assignment Log</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade {{ $component == 'booking-details' ? 'active show' : '' }}"
                            id="booking-details" role="tabpanel" aria-labelledby="booking-details-tab" tabindex="0">

                            @if (session()->get('isCustomer') == null && session()->get('isProvider') == null)
                                <div class="p-4 border border-dark rounded bg-lighter between-section-segment-spacing">
                                    <div class="row">
                                        <div class="col-lg col-12 mb-4">
                                            <div class="mb-4">
                                                <label class="form-label text-primary">Booking Title</label>
                                                <div class="font-family-tertiary value">
                                                    {{ $booking['booking_title'] ? $booking['booking_title'] : 'N/A' }}
                                                </div>
                                            </div>
                                            <small>(coming soon)</small>

                                            <div>
                                                <label class="form-label text-primary">Days Pending</label>
                                                <div class="font-family-tertiary value">05 Days</div>
                                            </div>
                                        </div>
                                        <div class="col-lg col-12 mb-4">
                                            <small>(coming soon)</small>

                                            <div class="mb-4">
                                                <label class="form-label text-primary">Days Until Service</label>
                                                <div class="font-family-tertiary value">10 Days</div>
                                            </div>

                                            <div class="d-flex gap-3 align-items-center">
                                                <label class="col-form-label text-primary mb-lg-0"
                                                    for="status-column">
                                                    Status:
                                                </label>

                                                <div>
                                                    <select class="form-select form-select-sm" id="status"
                                                        name="status" wire:model.defer="status">
                                                        <option value="pending">Pending</option>
                                                        <option value='assigned'>Assigned</option>
                                                        <option value='unassigned'>Un-assigned</option>

                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg col-12 mb-4">
                                            <div class="mb-4">
                                                <label class="form-label text-primary">Total Provider Count</label>
                                                <div class="d-flex flex-column gap-1">
                                                    <div class="font-family-tertiary value">
                                                        Total Assigned: {{ number_format($data['assigned_providers']) }}
                                                    </div>
                                                    <div class="font-family-tertiary value">
                                                        Total Requested: {{ number_format($data['total_providers']) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg col-12 mb-4">
                                            <div class="mb-4">
                                                <small>(coming soon)</small>
                                                <label class="form-label text-primary">Pending Details
                                                </label>
                                                <div class="d-flex flex-column gap-1">

                                                    <div class="font-family-tertiary value">
                                                        Requests from Users
                                                    </div>
                                                    <div class="font-family-tertiary value">
                                                        Attachments Missing
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg col-12 mb-4">
                                            <div class="row mb-3">
                                                <div class="col-lg-5">
                                                    <label class="form-label-sm">
                                                        Broadcast
                                                    </label>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-check form-switch form-switch-column">
                                                        <input class="form-check-input" type="checkbox"
                                                            role="switch" id="AutoNotifyBroadcast"
                                                            aria-label="Auto-notify Toggle">
                                                        <label class="form-check-label" for="AutoNotifyBroadcast">
                                                            Manual-assign
                                                        </label>
                                                        <label class="form-check-label" for="AutoNotifyBroadcast">
                                                            Auto-notify
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <label class="form-label-sm">
                                                        Assign
                                                    </label>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-check form-switch form-switch-column">
                                                        <input class="form-check-input" type="checkbox"
                                                            role="switch" id="AutoNotifyAssign" checked
                                                            aria-label="Auto-notify Toggle">
                                                        <label class="form-check-label" for="AutoNotifyAssign">
                                                            Manual-assign
                                                        </label>
                                                        <label class="form-check-label" for="AutoNotifyAssign">
                                                            Auto-notify
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="d-flex flex-lg-row flex-column gap-3 justify-content-center">
                                                <a href="#" class="btn btn-has-icon btn-primary rounded"
                                                    data-bs-toggle="modal" data-bs-target="#ProviderMessageModal">
                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                    <svg aria-label="Message Providers" width="18" height="18"
                                                        viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/common-icons.svg#message-icon"></use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    Message Providers
                                                </a>
                                                <a href="#" class="btn btn-has-icon btn-primary rounded"
                                                    data-bs-toggle="modal" data-bs-target="#adminStaffModal">
                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                    <svg aria-label="View Assigned Admin-staff" width="18"
                                                        height="18" viewBox="0 0 18 18" fill="none">
                                                        <use xlink:href="/css/common-icons.svg#invite-icon"></use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    View Assigned Admin-staff
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <div>
                                <div class="row between-section-segment-spacing">
                                    <div class="col-lg-12">
                                        <div class="d-flex flex-lg-row flex-column gap-3 justify-content-center">
                                            <a href="#" class="btn btn-has-icon btn-primary rounded">
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="Message Requester" width="18" height="18"
                                                    viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#message-icon"></use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                Message Coordinator
                                            </a>
                                            @if (
                                                !$isCustomer ||
                                                    ($isCustomer &&
                                                        (Auth::id() == $booking['customer_id'] ||
                                                            Auth::id() == $booking['supervisor'] ||
                                                            session()->get('companyAdmin'))))
                                                <a href="#" class="btn btn-has-icon btn-outline-dark rounded">
                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                    <svg aria-label="Duplicate" width="19" height="19"
                                                        viewBox="0 0 19 19">
                                                        <use xlink:href="/css/common-icons.svg#duplicate"></use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    Duplicate
                                                </a>
                                                <a href="#" class="btn btn-has-icon btn-primary rounded"
                                                    @click="rescheduleBooking = true">
                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                    <svg aria-label="Reschedule" width="20" height="20"
                                                        viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon-white">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    Reschedule
                                                </a>
                                                <a href="{{ route('tenant.booking-edit', ['bookingID' => encrypt($booking['id'])]) }}"
                                                    class="btn btn-has-icon btn-primary rounded">
                                                    {{-- Updated by Shanila to Add
                                            svg icon --}}
                                                    <svg aria-label="Edit" width="20" height="20"
                                                        viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#pencil-white">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila
                                            --}}
                                                    Edit
                                                </a>
                                                <a href="#" class="btn btn-has-icon btn-primary rounded">
                                                    {{-- Updated by Shanila to Add
                                            svg icon --}}
                                                    <svg aria-label="Cancel" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <use xlink:href="/css/common-icons.svg#cancel-icon">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila
                                            --}}
                                                    Cancel
                                                </a>
                                            @endif
                                            @if (session()->get('isCustomer') == null)
                                                <a href="" class="btn btn-has-icon btn-primary rounded"
                                                    data-bs-toggle="modal" data-bs-target="#reviewFeedbackModal"
                                                    wire:click="$emit('openAllFeedBackModal', '{{ $booking_id }}')">


                                                    <svg aria-label="Review Feedback" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <use xlink:href="/css/common-icons.svg#review-feedback">
                                                        </use>
                                                    </svg>
                                                    Review Feedback
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row between-section-segment-spacing">
                                    <div class="col-lg-12">
                                        <div class="d-lg-flex justify-content-between align-items-center header-row">
                                            <h2 class="mb-lg-0">Requester Detail </h2>
                                            <div class="d-flex flex-md-row flex-column gap-3">
                                                <div>
                                                    <small>(coming soon)</small>
                                                    <button
                                                        class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100"
                                                        type="button" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <span>
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Export" width="23" height="26"
                                                                viewBox="0 0 23 26">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#document-dropdown">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </span>
                                                    </button>
                                                </div>
                                                <div class="d-flex gap-2 align-items-center">
                                                    <input type="" name="" class="form-control"
                                                        placeholder="Enter Email" aria-label="Enter Email">
                                                    <button class="btn btn-primary px-4 rounded">
                                                        Send
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Assignment No:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            {{ $booking['booking_number'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Booking Title:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            {{ $booking['booking_title'] ? $booking['booking_title'] : 'N/A' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Start Time:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            {{ $booking['booking_start_at'] ? date_format(date_create($booking['booking_start_at']), 'm/d/Y h:i A') : '' }}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">End Time:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            {{ $booking['booking_end_at'] ? date_format(date_create($booking['booking_end_at']), 'm/d/Y h:i A') : '' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Duration:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            {{ $booking['duration_hours'] }} Hours
                                                            {{ $booking['duration_minute'] }} Minutes
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Frequency:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            @if ($booking['frequency_id'] == 1)
                                                                One Time
                                                            @elseif($booking['frequency_id'] == 2)
                                                                Daily
                                                            @elseif($booking['frequency_id'] == 3)
                                                                Weekly
                                                            @elseif($booking['frequency_id'] == 4)
                                                                Monthly
                                                            @elseif($booking['frequency_id'] == 5)
                                                                Week Daily
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Industry:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            {{ $booking['industry'] ? $booking['industry']['name'] : 'N/A' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Company:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            {{ $booking['company'] ? $booking['company']['name'] : 'N/A' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Requester:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            <a
                                                                href="#">{{ $booking->customer ? $booking->customer->name : 'N/A' }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Supervisor:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            <a
                                                                href="#">{{ $booking->booking_supervisor ? $booking->booking_supervisor->name : 'N/A' }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">
                                                            Billing Manager:
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            <a
                                                                href="#">{{ $booking->billing_manager ? $booking->billing_manager->name : 'N/A' }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">
                                                            Point of contact:
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            {{ $booking['contact_point'] ? $booking['contact_point'] : 'N/A' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label class="col-form-label">Phone Number:</label>
                                                    </div>
                                                    <div class="col-lg-7 align-self-center">
                                                        <div class="font-family-tertiary">
                                                            {{ $booking['phone'] ? $booking['phone'] : 'N/A' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Requester Detail -->
                                @foreach ($booking_services as $index => $service)
                                    <!-- Service 1 -->
                                    <div class="row between-section-segment-spacing">
                                        <div class="col-lg-12">
                                            <div class="d-lg-flex justify-content-between align-items-center">
                                                <h2 class="">Service {{ $index + 1 }}</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <label class="col-form-label">Accommodation:</label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">
                                                                {{ $service['accommodation_name'] }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <label class="col-form-label">Service:</label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">
                                                                {{ $service['service_name'] }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <label class="col-form-label">Specialization:</label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">
                                                                {{ $service['specialization'] ? implode(', ', $service['specialization']) : 'N/A' }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <label class="col-form-label">Service Type:</label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">
                                                                @if ($service['service_types'] == 1)
                                                                    In-Person
                                                                @elseif($service['service_types'] == 2)
                                                                    Virtual
                                                                @elseif($service['service_types'] == 4)
                                                                    Phone
                                                                @elseif($service['service_types'] == 5)
                                                                    Teleconference
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <label class="col-form-label">
                                                                Number of Providers:
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">
                                                                {{ $service['provider_count'] }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <label class="col-form-label">
                                                                Service Consumer:
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">
                                                                <a target="_blank"
                                                                    href="{{ $service['service_consumer_user'] ? route('tenant.customer-profile', ['customerID' => encrypt($service['service_consumer_user']['id'])]) : '' }}">{{ $service['service_consumer_user'] ? $service['service_consumer_user']['name'] : 'N/A' }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <label class="col-form-label">
                                                                Participants:
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">
                                                                @if (isset($service['participants']))
                                                                    @foreach ($service['participants'] as $key => $user)
                                                                        <a target="_blank"
                                                                            href="{{ route('tenant.customer-profile', ['customerID' => encrypt($user['id'])]) }}">{{ $user['name'] }}</a>
                                                                        @if ($key != count($service['participants']) - 1)
                                                                            ,
                                                                        @endif
                                                                    @endforeach
                                                                @else
                                                                    N/A
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Service 1 -->
                                    @if ($service['service_types'] == 1)
                                        <!-- In-Person Meeting Detail -->
                                        <div class="row between-section-segment-spacing has-map">
                                            <div class="col-lg-12">
                                                <div class="d-lg-flex justify-content-between align-items-center">
                                                    <h2 class="">Service {{ $index + 1 }} Meeting Detail</h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label class="col-form-label">Location:</label>
                                                            </div>

                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="d-flex gap-2">
                                                                    <div class="font-family-tertiary">
                                                                        @if ($booking->physicalAddress)
                                                                            {{ $booking->physicalAddress->address_name }}:{{ $booking->physicalAddress->address_line1 . ', ' . $booking->physicalAddress->address_line2 }}
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </div>
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg aria-label="Edit" width="20"
                                                                            height="20" viewBox="0 0 20 20">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#pencil">
                                                                            </use>
                                                                        </svg>

                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label class="col-form-label">City:</label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="font-family-tertiary">
                                                                    @if ($booking->physicalAddress)
                                                                        {{ $booking->physicalAddress->city }}
                                                                    @else
                                                                        N/A
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label class="col-form-label">State:</label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="font-family-tertiary">
                                                                    @if ($booking->physicalAddress)
                                                                        {{ $booking->physicalAddress->state }}
                                                                    @else
                                                                        N/A
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label class="col-form-label">Zip Code:</label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="font-family-tertiary">
                                                                    @if ($booking->physicalAddress)
                                                                        {{ $booking->physicalAddress->zip }}
                                                                    @else
                                                                        N/A
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label class="col-form-label">Arrival Notes:</label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="font-family-tertiary">
                                                                    @if ($booking->physicalAddress)
                                                                        {{ $booking->physicalAddress->notes }}
                                                                    @else
                                                                        N/A
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- pb=!1m14!1m8!1m3!1d96779.59535015929!2d-74.00126600000002!3d40.710039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1676478925644!5m2!1sen!2sus" --}}

                                                {{-- <!-- Map --><div style="height:100%; width: 100%;" wire:ignore> 
                                                <div id="map-canvas"></div>
                                                </div> --}}
                                                {{-- {{ str_replace(' ', '+', $booking->physicalAddress->address_line1 . ' ' . $booking->physicalAddress->address_line2 . ' ' . $booking->physicalAddress->city . ' ' . $booking->physicalAddress->state . ' ' . $booking->physicalAddress->country) }} --}}
                                                <iframe {{-- src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96779.59535015929!2d-74.00126600000002!3d40.710039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1676478925644!5m2!1sen!2sus" --}}
                                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96779.59535015929!2d-74.00126600000002!3d40.710039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1676478925644!5m2!1sen!2sus"
                                                    width="304" height="228" style="border:0;"
                                                    allowfullscreen="" loading="lazy"
                                                    referrerpolicy="no-referrer-when-downgrade" class="map">
                                                </iframe>



                                            </div>
                                        </div>
                                        <!-- /In-Person Meeting Detail -->
                                    @else
                                        <!-- Phone / Teleconference / Virtual Meeting Detail -->
                                        <div class="row between-section-segment-spacing">
                                            <div class="col-lg-12">
                                                <div class="d-lg-flex justify-content-between align-items-center">
                                                    <h2 class="">Service {{ $index + 1 }} Meeting Detail</h2>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-8 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <label class="col-form-label">Meeting Name:</label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="font-family-tertiary">
                                                                        @if (isset($service['meeting_details']))
                                                                            {{ $service['meeting_details']['meeting_name'] ? $service['meeting_details']['meeting_name'] : 'N/A' }}
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </div>
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#MeetingLinksModal">
                                                                        {{-- Updated by Shanila to Add
                                                            svg icon --}}
                                                                        <svg aria-label="Edit" width="20"
                                                                            height="20" viewBox="0 0 20 20">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#pencil">
                                                                            </use>
                                                                        </svg>
                                                                        {{-- End of update by Shanila
                                                            --}}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <label class="col-form-label">Meeting Link:</label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="font-family-tertiary text-primary">
                                                                        @if (isset($service['meeting_details']))
                                                                            N/A
                                                                        @else
                                                                            {{ $service['meeting_link'] ? $service['meeting_link'] : 'N/A' }}
                                                                        @endif


                                                                    </div>
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {{-- Updated by Shanila to Add
                                                            svg icon --}}
                                                                        <svg aria-label="Edit" width="20"
                                                                            height="20" viewBox="0 0 20 20">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#pencil">
                                                                            </use>
                                                                        </svg>
                                                                        {{-- End of update by Shanila
                                                            --}}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <label class="col-form-label">
                                                                    Meeting Phone Number:
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="font-family-tertiary">
                                                                    @if (isset($service['meeting_details']))
                                                                        {{ $service['meeting_details']['phone_number'] ? $service['meeting_details']['phone_number'] : 'N/A' }}
                                                                    @else
                                                                        {{ $service['meeting_phone'] ? $service['meeting_phone'] : 'N/A' }}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <label class="col-form-label">
                                                                    Meeting Passcode:
                                                                </label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="font-family-tertiary">
                                                                    @if (isset($service['meeting_details']))
                                                                        {{ $service['meeting_details']['access_code'] ? $service['meeting_details']['access_code'] : 'N/A' }}
                                                                    @else
                                                                        {{ $service['meeting_passcode'] ? $service['meeting_passcode'] : 'N/A' }}
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <label class="col-form-label">Status:</label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="font-family-tertiary">Active</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 mb-3">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <label class="col-form-label">Created:</label>
                                                            </div>
                                                            <div class="col-lg-7 align-self-center">
                                                                <div class="font-family-tertiary">
                                                                    {{ date_format(date_create($service['created_at']), 'd/m/Y h:i A') }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Phone / Teleconference / Virtual Meeting Detail -->
                                    @endif
                                @endforeach
                                <!-- Booking Forms Detail -->

                                @if (count($serviceDetails))
                                    <!-- Service Form Detail -->
                                    <div class="row between-section-segment-spacing">
                                        <div class="d-lg-flex justify-content-between align-items-center">
                                            <h2 class="">Booking Forms</h2>
                                        </div>

                                        @foreach ($serviceDetails as $key => $form)
                                            <div class="col-lg-12">

                                                <div class="d-lg-flex  justify-content-between align-items-center">
                                                    <h3 class="bg-muted rounded p-1">
                                                        {{ $form[0]['request_form_name'] ? $form[0]['request_form_name'] : 'Form ' }}
                                                    </h3>
                                                </div>
                                                @foreach ($form as $i => $field)
                                                    <div class="row">
                                                        <div class="col-lg-8 mb-3">

                                                            <div class="row">
                                                                <div class="col-lg-5">
                                                                    <label
                                                                        class="col-form-label">{{ $field['field_name'] ? $field['field_name'] : 'N/A' }}:
                                                                    </label>
                                                                </div>
                                                                <div class="col-lg-7 align-self-center">
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <div class="font-family-tertiary">
                                                                            {{ $field['data_value'] ? $field['data_value'] : 'N/A' }}
                                                                        </div>
                                                                        <a href="#"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                            <svg aria-label="Edit" width="20"
                                                                                height="20" viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#pencil">
                                                                                </use>
                                                                            </svg>

                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach

                                    </div>
                                @endif

                                <!-- /Booking Forms Detail -->
                                <!-- Notes -->
                                <div class="row between-section-segment-spacing">
                                    <div class="col-lg-12">
                                        <h2 class="mb-lg-4">Notes</h2>
                                        <div class="row mb-4">
                                            <div class="col-lg-6 mb-4"
                                                @if ($isCustomer) hidden @endif">
                                                <!-- Provider Notes -->
                                                <div class="">
                                                    <label class="form-label">
                                                        Provider Notes
                                                    </label>
                                                    <textarea class="form-control" rows="4" cols="4" wire:model.defer="booking.provider_notes">
													
												</textarea>
                                                </div>
                                                <!-- /Provider Notes -->
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <!-- Customer Notes -->
                                                <div class="">
                                                    <label class="form-label">
                                                        Customer Notes
                                                    </label>
                                                    <textarea class="form-control" rows="4" cols="4" wire:model.defer="booking.customer_notes">
													
												</textarea>
                                                </div>
                                                <!-- /Customer Notes -->
                                            </div>
                                            <div
                                                class="col-lg-6 mb-4  @if ($isCustomer) hidden @endif">
                                                <!-- Private Notes -->
                                                <div class="">
                                                    <label class="form-label">
                                                        Private Notes
                                                    </label>
                                                    <textarea class="form-control" rows="4" cols="4" wire:model.defer="booking.private_notes">
													
												</textarea>
                                                </div>
                                                <!-- /Private Notes -->
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <!-- Tags -->
                                                <div class="" @if ($isCustomer) hidden @endif">

                                                    <label class="form-label">
                                                        Tags
                                                    </label>
                                                    <select x-cloak="" id="select">
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                        <option value="3">Option 3</option>
                                                        <option value="4">Option 4</option>
                                                        <option value="5">Option 5</option>
                                                    </select>
                                                    <small>(coming soon)</small>

                                                    <!-- Error needed to be fixed, commented out for now
                                                <div x-data="dropdown()" x-init="loadOptions()"
                                                    class="form-control multi-select-dropdown mb-2">
                                                    <input name="values" type="hidden" x-bind:value="selectedValues()"
                                                        value="">
                                                    <div class="inline-block position-relative w-100">
                                                        <div
                                                            class="d-flex flex-column align-items-center position-relative">
                                                            <div x-on:click="open" class="w-100">
                                                                <div class="d-flex justify-content-between">
                                                                    <div class="d-flex flex-auto flex-wrap gap-2">
                                                                        <template x-for="(option,index) in selected"
                                                                            :key="options[option].value">
                                                                            <div
                                                                                class="d-flex justify-content-center align-items-center py-1 px-1 bg-white rounded border">
                                                                                <div class="text-xs font-normal leading-none max-w-full flex-initial x-model="
                                                                                    options[option]=""
                                                                                    x-text="options[option].text"></div>
                                                                                <div
                                                                                    class="d-flex flex-auto flex-row-reverse">
                                                                                    <div class="btn btn-hs-icon p-0"
                                                                                        x-on:click.stop="remove(index,option)">
                                                                                        <svg class="fill-current h-4 w-4 "
                                                                                            role="button"
                                                                                            viewBox="0 0 20 20">
                                                                                            <path
                                                                                                d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0 c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183 l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15 C14.817,13.62,14.817,14.38,14.348,14.849z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </template>
                                                                        <div x-show="selected.length == 0"
                                                                            class="flex-1">
                                                                            <input placeholder="Select a option"
                                                                                class="form-control border-0 p-0"
                                                                                x-bind:value="selectedValues()">
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="svelte-1l8159u d-flex align-items-center">
                                                                        <button type="button" x-show="isOpen() === true"
                                                                            x-on:click="open"
                                                                            class="btn btn-hs-icon p-0"
                                                                            style="display: none;">
                                                                            <svg class="fill-current h-4 w-4"
                                                                                viewBox="0 0 20 20">
                                                                                <path
                                                                                    d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83 c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z ">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                        <button type="button"
                                                                            x-show="isOpen() === false" @click="close"
                                                                            class="btn btn-hs-icon p-0">
                                                                            <svg version="1.1"
                                                                                class="fill-current h-4 w-4"
                                                                                viewBox="0 0 20 20">
                                                                                <path
                                                                                    d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83 c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25 L17.418,6.109z">
                                                                                </path>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-100 px-0">
                                                                <div x-show.transition.origin.top="isOpen()"
                                                                    class="position-absolute shadow top-100 bg-white z-40 w-100 left-0 rounded max-h-select"
                                                                    x-on:click.away="close" style="display: none;">
                                                                    <div
                                                                        class="d-flex flex-column w-100 overflow-y-auto options-container">
                                                                        <template x-for="(option,index) in options"
                                                                            :key="option" class="overflow-auto">
                                                                            <div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100"
                                                                                @click="select(index,$event)">
                                                                                <div
                                                                                    class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                                                    <div
                                                                                        class="w-100 d-flex justify-content-between align-items-center">
                                                                                        <div class="mx-2 leading-6"
                                                                                            x-model="option"
                                                                                            x-text="option.text"></div>
                                                                                        <div x-show="option.selected">
                                                                                            <svg class="svg-icon"
                                                                                                viewBox="0 0 20 20">
                                                                                                <path fill="none"
                                                                                                    d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z">
                                                                                                </path>
                                                                                            </svg>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </template>
                                                                        <div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100"
                                                                            @click="select(index,$event)">
                                                                            <div
                                                                                class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                                                <div
                                                                                    class="w-100 d-flex justify-content-between align-items-center">
                                                                                    <div class="mx-2 leading-6"
                                                                                        x-model="option"
                                                                                        x-text="option.text">
                                                                                        Option 1
                                                                                    </div>
                                                                                    <div x-show="option.selected"
                                                                                        style="display: none;">
                                                                                        <svg class="svg-icon"
                                                                                            viewBox="0 0 20 20">
                                                                                            <path fill="none"
                                                                                                d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100"
                                                                            @click="select(index,$event)">
                                                                            <div
                                                                                class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                                                <div
                                                                                    class="w-100 d-flex justify-content-between align-items-center">
                                                                                    <div class="mx-2 leading-6"
                                                                                        x-model="option"
                                                                                        x-text="option.text">
                                                                                        Option 2
                                                                                    </div>
                                                                                    <div x-show="option.selected"
                                                                                        style="display: none;">
                                                                                        <svg class="svg-icon"
                                                                                            viewBox="0 0 20 20">
                                                                                            <path fill="none"
                                                                                                d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100"
                                                                            @click="select(index,$event)">
                                                                            <div
                                                                                class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                                                <div
                                                                                    class="w-100 d-flex justify-content-between align-items-center">
                                                                                    <div class="mx-2 leading-6"
                                                                                        x-model="option"
                                                                                        x-text="option.text">
                                                                                        Option 3
                                                                                    </div>
                                                                                    <div x-show="option.selected"
                                                                                        style="display: none;">
                                                                                        <svg class="svg-icon"
                                                                                            viewBox="0 0 20 20">
                                                                                            <path fill="none"
                                                                                                d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100"
                                                                            @click="select(index,$event)">
                                                                            <div
                                                                                class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                                                <div
                                                                                    class="w-100 d-flex justify-content-between align-items-center">
                                                                                    <div class="mx-2 leading-6"
                                                                                        x-model="option"
                                                                                        x-text="option.text">
                                                                                        Option 4
                                                                                    </div>
                                                                                    <div x-show="option.selected"
                                                                                        style="display: none;">
                                                                                        <svg class="svg-icon"
                                                                                            viewBox="0 0 20 20">
                                                                                            <path fill="none"
                                                                                                d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100"
                                                                            @click="select(index,$event)">
                                                                            <div
                                                                                class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                                                <div
                                                                                    class="w-100 d-flex justify-content-between align-items-center">
                                                                                    <div class="mx-2 leading-6"
                                                                                        x-model="option"
                                                                                        x-text="option.text">
                                                                                        Option 5
                                                                                    </div>
                                                                                    <div x-show="option.selected"
                                                                                        style="display: none;">
                                                                                        <svg class="svg-icon"
                                                                                            viewBox="0 0 20 20">
                                                                                            <path fill="none"
                                                                                                d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                                                    <div class="d-lg-flex flex-wrap gap-3 mb-3">
                                                        <div class="tag">@admin_company</div>
                                                        <div class="tag">@booking_start_at</div>
                                                        <div class="tag">@consumer</div>
                                                        <div class="tag">@booking_end_at</div>
                                                        <div class="tag">@booking_duration</div>
                                                    </div>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="Requester"
                                                                name="" type="checkbox" tabindex="">
                                                            <label class="form-check-label" for="Requester">
                                                                Requester
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="ServiceConsumers"
                                                                name="" type="checkbox" tabindex="">
                                                            <label class="form-check-label" for="ServiceConsumers">
                                                                Service Consumer(s)
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" id="Participants"
                                                                name="" type="checkbox" tabindex="">
                                                            <label class="form-check-label" for="Participants">
                                                                Participant(s)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Tags -->
                                            </div>
                                            <div class="col-lg-12">
                                                <a href="#" class="btn btn-primary rounded"
                                                    wire:click="updateNotes">Save Notes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Notes -->
                            </div>
                            <!-- <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                            <button type="" class="btn btn-outline-dark rounded"
                                wire:click.prevent="showList">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary rounded"
                                x-on:click="$wire.switch('assigned-providers')">
                                Next
                            </button>
                        </div>-->
                        </div>
                        <!-- END: booking-details-tab -->
                        <div class="tab-pane fade {{ $component == 'assigned-providers' ? 'active show' : '' }}"
                            id="assigned-providers" role="tabpanel" aria-labelledby="assigned-providers-tab"
                            tabindex="0">
                            @foreach ($booking_services as $index => $service)
                                @livewire('app.common.bookings.assignedproviders', ['index' => $index + 1, 'service_id' => $service['service_id'], 'booking_id' => $booking_id], key(time()))
                            @endforeach

                        </div>
                        <!-- END: assigned-providers-tab -->
                        <div class="tab-pane fade {{ $component == 'attachments' ? 'active show' : '' }}"
                            id="attachments" role="tabpanel" aria-labelledby="attachments-tab" tabindex="0">
                            <div class="col-12">
                                <h2>Attachments</h2>
                                @livewire('app.common.bookings.booking-attachments', ['booking_id' => $booking_id])
                            </div>

                            <div class="col-12">
                                @foreach ($booking_services as $index => $service)
                                    <div class="d-flex justify-content-between gap-2">
                                        <h2>Check-In and Close-Out for Service - {{ $service['service_name'] }}</h2>
                                        @if ($isCustomer)
                                            <a href="#"
                                              wire:click="$emit('openConfirmCompletionModal','{{$service['id']}}')"
                                                                                    data-bs-toggle="modal" 
                                                                                    data-bs-target="#confirmCompletion"
                                                                                
                                                class="btn btn-has-icon btn-primary rounded justify-content-end">

                                                <svg width="30" height="30" viewBox="0 0 30 30"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/customer.svg#confirm-completion-icon">
                                                    </use>
                                                </svg>
                                                Close Out
                                            </a>
                                    </div>
                                @endif
                                @livewire('app.common.bookings.provider-completed-booking-services', ['service_id' => $service['service_id'], 'booking_id' => $booking_id], key(time()))
    @endforeach

</div>
<!-- <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                            <button type="" class="btn btn-outline-dark rounded"
                                x-on:click="$wire.switch('assigned-providers')">Back</button>
                            <button type="" class="btn btn-primary rounded"
                                x-on:click="$wire.switch('payment-details')">Next</button>
                        </div>-->
</div><!-- END: attachments-tab -->
<div class="tab-pane fade {{ $component == 'payment-details' ? 'active show' : '' }}" id="payment-details"
    role="tabpanel" aria-labelledby="payment-details-tab" tabindex="0">
    <div class="row inner-section-segment-spacing">
        <h2>Payment Detail</h2>
    </div>
    <div class="row between-section-segment-spacing">
        <div class="col-lg-6">
            <div class="d-lg-flex flex-lg-column gap-3">
                <div class="row">
                    <div class="col-md-9">
                        <label class="form-label mb-md-0">Total Service Rate:</label>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="font-family-tertiary">
                            {{ formatPayment($data['service_charges']) }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr class="border-separate-sm">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-9">
                        <label class="form-label mb-md-0">Total Specialization Charges:</label>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="font-family-tertiary">
                            {{ formatPayment($data['specialization_total']) }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr class="border-separate-sm">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-9">
                        <label class="form-label mb-md-0">Total Additional Charges:</label>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="font-family-tertiary">
                            {{ formatPayment($data['service_additional_charges']) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <hr class="border-separate-sm">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <label class="form-label mb-md-0">Service Total:</label>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="font-family-tertiary">
                            {{ formatPayment($data['service_total']) }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr class="border-separate-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <label class="form-label mb-md-0">Service Billed:</label>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="font-family-tertiary">
                            {{ formatPayment($data['service_billed']) }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr class="border-separate-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <label class="form-label mb-md-0">Discount:</label>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="font-family-tertiary">
                            @if (!is_null($booking['payment']) && !is_null($booking['payment']['coupon_discount_amount']))
                                {{ formatPayment($booking['payment']['discounted_amount']) }}
                            @else
                                $00.00
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr class="border-separate-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <label class="form-label mb-md-0">Net Total:</label>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="font-family-tertiary">
                            @if (!is_null($booking['payment']))
                                {{ formatPayment($booking['payment']['total_amount']) }}
                            @else
                                N/A
                            @endif
                        </div>
                    </div>
                </div>
                @if (
                    !$isCustomer ||
                        (($isCustomer && (Auth::id() == $booking['billing_manager_id'] || Auth::id() == $booking['supervisor'])) ||
                            ($isCustomer && session()->get('companyAdmin'))))
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="border-separate-sm">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <label class="form-label mb-md-0">Cancel/Modify/Reschedule Fees
                                (list):</label>
                        </div>
                        <div class="col-md-3 align-self-center">
                            <div class="font-family-tertiary">$00.00</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr class="border-separate-sm">
                        </div>
                    </div>
                    <div class="row @if ($isCustomer) hidden @endif">
                        <div class="col-md-9">
                            <label class="form-label mb-md-0">Provider Rate Sum:</label>
                        </div>
                        <div class="col-md-3 align-self-center">
                            <div class="font-family-tertiary">$00.00</div>
                        </div>
                    </div>
                    <div class="row @if ($isCustomer) hidden @endif">
                        <div class="col-md-12">
                            <hr class="border-separate-sm">
                        </div>
                    </div>
                    <div class="row @if ($isCustomer) hidden @endif">
                        <div class="col-md-9">
                            <label class="form-label mb-md-0">Additional Provider
                                Payments:</label>
                        </div>
                        <div class="col-md-3 align-self-center">
                            <div class="font-family-tertiary">$00.00</div>
                        </div>
                    </div>
                    <div class="row @if ($isCustomer) hidden @endif">
                        <div class="col-md-12">
                            <hr class="border-separate-sm">
                        </div>
                    </div>
                    <div class="row @if ($isCustomer) hidden @endif">
                        <div class="col-md-9">
                            <label class="form-label mb-md-0">Profit Margin:</label>
                        </div>
                        <div class="col-md-3 align-self-center">
                            <div class="font-family-tertiary">$00.00</div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-lg-6  @if ($isCustomer) hidden @endif"">
            <!-- Billing Notes -->
            <div class="between-section-segment-spacing">
                <label class="form-label" for="billing-notes">
                    Billing Notes
                </label>
                <textarea class="form-control" rows="4" cols="4" id="billing-notes"
                    wire:model.defer="booking.billing_notes"></textarea>
            </div><!-- /Billing Notes -->
            <!-- Payment Notes -->
            <div class="mb-4">
                <label class="form-label" for="payment-notes">
                    Payment Notes
                </label>
                <textarea class="form-control" rows="4" cols="4" id="payment-notes"
                    wire:model.defer="booking.payment_notes"></textarea>
            </div><!-- /Payment Notes -->
            <div class="col-lg-12">
                <a href="#" class="btn btn-primary rounded" wire:click="updateNotes"
                    wire:model="updateNotes">Save Notes</a>
            </div>
        </div>
    </div>
    <!--  <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                            <button type="" class="btn btn-outline-dark rounded"
                                x-on:click="$wire.switch('attachments')">Back</button>
                            <button type="" class="btn btn-primary rounded"
                                x-on:click="$wire.switch('assignment-log')">Next</button>
                        </div>-->
</div><!-- END: payment-details-tab -->
<div class="tab-pane fade {{ $component == 'assignment-log' ? 'active show' : '' }}" id="assignment-log"
    role="tabpanel" aria-labelledby="assignment-log-tab" tabindex="0">
    <livewire:app.common.bookings.assignment-logs :booking_id="$booking_id" />
    <!--  <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                            <button type="" class="btn btn-outline-dark rounded"
                                x-on:click="$wire.switch('payment-details')">Back</button>
                            <button type="" class="btn btn-primary rounded"
                                wire:click.prevent="showList">Exit</button>
                        </div>-->
</div><!-- END: assignment-log-tab -->
</div>
<!-- END: Assignment Booking Form -->
</div>
</div>
</div>
{{-- Updated by Sohail Asghar to comment out duplicate modals code --}}
<!-- Modal - Provider Message -->
{{-- <div class="modal fade" id="ProviderMessageModal" tabindex="-1" aria-labelledby="ProviderMessageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="ProviderMessageModalLabel">Provider Message</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor
                        sit amet</p>
                    <div class="d-flex gap-3 justify-content-center mb-5">
                        <a href="#" class="btn btn-sm btn-outline-dark">Deny</a>
                        <a href="#" class="btn btn-sm btn-primary">Approve</a>
                    </div>
                    <div class="d-flex gap-3 justify-content-center mb-3">
                        <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">Cancel</a>
                        <a href="#" class="btn rounded btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
<!-- /Modal - Provider Message -->
<!-- Modal - Provider Message -->
{{-- <div class="modal fade" id="ProviderMessageModal" tabindex="-1" aria-labelledby="ProviderMessageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="ProviderMessageModalLabel">Provider Message</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor
                        sit amet</p>
                    <div class="d-flex gap-3 justify-content-center mb-5">
                        <a href="#" class="btn btn-sm btn-outline-dark">Deny</a>
                        <a href="#" class="btn btn-sm btn-primary">Approve</a>
                    </div>
                    <div class="d-flex gap-3 justify-content-center mb-3">
                        <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">Cancel</a>
                        <a href="#" class="btn rounded btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
<!-- /Modal - Provider Message -->
<!-- Modal - Meeting Links -->
{{-- <div class="modal fade" id="MeetingLinksModal" tabindex="-1" aria-labelledby="MeetingLinksModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="MeetingLinksModalLabel">Meeting Links</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h3>Meeting name</h3>
                    <ul class="list-unstyled mb-5 d-flex flex-column gap-3">
                        <li>
                            Sign Language Meeting
                        </li>
                        <li>
                            French Language Meeting
                        </li>
                        <li class="text-primary selected">
                            Language Translation Meeting
                        </li>
                        <li>
                            Sign Language Meeting
                        </li>
                        <li>
                            Sign Language Meeting
                        </li>
                        <li>
                            Sign Language Meeting
                        </li>
                    </ul>
                    <div class="d-flex gap-3 justify-content-center mb-3">
                        <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">Cancel</a>
                        <a href="#" class="btn rounded btn-primary">Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@include('panels.booking-details.reschedule-booking')
@include('panels.common.add-documents', ['booking_id' => $booking_id])
@include('panels.booking-details.provider-saved-forms')


{{-- @include('panels.booking-details.assign-providers') --}}
@endif
 

</div>
@push('scripts')
    <script>
        Livewire.on('openFeedBackModal', (type) => {
            $('#reviewFeedbackModal').modal('show');
        });
        Livewire.on('closeFeedbackModal', () => {
            $('#reviewFeedbackModal').modal('hide');

        });
    </script>
@endpush
{{-- @if ($booking->physicalAddress)
    @push('scripts')
        <script>
            var geocoder;
            var map;

            function initialize() {
                geocoder = new google.maps.Geocoder();
                var latlng = new google.maps.LatLng(50.804400, -1.147250);
                var mapOptions = {
                    zoom: 6,
                    center: latlng
                }
                map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                console.log('initialize');
            }

            function codeAddress(address) {
                var address = address;
                console.log(address);
                geocoder.geocode({
                    'address': address
                }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {

                        console.log('returned', results[0].geometry.location.lat());

                        map.setCenter(results[0].geometry.location);

                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);
                    }
                });
            }


            initialize();
            var address =
                "{{ $booking->physicalAddress->address_line1 . ', ' . $booking->physicalAddress->address_line2 . ', ' . $booking->physicalAddress->city . ', ' . $booking->physicalAddress->state . ', ' . $booking->physicalAddress->country }}";
            codeAddress(address);
        </script>
    @endpush
@endif --}}
