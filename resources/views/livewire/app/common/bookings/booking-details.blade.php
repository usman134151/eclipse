<div x-data="{ rescheduleBooking: false, addDocuments: false, assignProvider: false }">
    @if($booking)
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
                            <span>Assigned Providers</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'attachments' ? 'active' : '' }}" id="attachments-tab"
                            data-bs-toggle="tab" data-bs-target="#attachments" type="button" role="tab"
                            aria-controls="attachments" aria-selected="false">
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
                            id="assignment-log-tab" data-bs-toggle="tab" data-bs-target="#assignment-log" type="button"
                            role="tab" aria-controls="assignment-log" aria-selected="false">
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
                        <div class="p-4 border border-dark rounded bg-lighter between-section-segment-spacing">
                            <div class="row">
                                <div class="col-lg col-12 mb-4">
                                    <div class="mb-4">
                                        <label class="form-label text-primary">Booking Title</label>
                                        <div class="font-family-tertiary value">
                                            {{ $booking['booking_title'] ? $booking['booking_title'] : 'N/A' }}
                                        </div>
                                    </div>
                                    <div>
                                        <label class="form-label text-primary">Days Pending</label>
                                        <div class="font-family-tertiary value">05 Days</div>
                                    </div>
                                </div>
                                <div class="col-lg col-12 mb-4">
                                    <div class="mb-4">
                                        <label class="form-label text-primary">Days Until Service</label>
                                        <div class="font-family-tertiary value">10 Days</div>
                                    </div>
                                    <div class="d-flex gap-3 align-items-center">
                                        <label class="col-form-label text-primary mb-lg-0" for="status-column">
                                            Status:
                                        </label>
                                        <div>
                                            <select class="form-select form-select-sm" id="status-column">
                                                <option>Pending</option>
                                                <option>Assigned</option>
                                                <option>Un-assigned</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg col-12 mb-4">
                                    <div class="mb-4">
                                        <label class="form-label text-primary">Providers</label>
                                        <div class="d-flex flex-column gap-1">
                                            <div class="font-family-tertiary value">
                                                Total Assigned: 03
                                            </div>
                                            <div class="font-family-tertiary value">
                                                Total Requested: 07
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg col-12 mb-4">
                                    <div class="mb-4">
                                        <label class="form-label text-primary">Pending Details</label>
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
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="AutoNotifyBroadcast" aria-label="Auto-notify Toggle">
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
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="AutoNotifyAssign" checked aria-label="Auto-notify Toggle">
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
                                            data-bs-toggle="modal" data-bs-target="#AssignproviderTeamModal">
                                            {{-- Updated by Shanila to Add svg icon --}}
                                            <svg aria-label=" Manage Providers" width="18" height="18"
                                                viewBox="0 0 18 18">
                                                <use xlink:href="/css/common-icons.svg#manage-icon"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            Manage Providers
                                        </a>
                                        <a href="#" class="btn btn-has-icon btn-primary rounded"
                                            data-bs-toggle="modal" data-bs-target="#AssignproviderTeamModal">
                                            {{-- Updated by Shanila to Add svg icon --}}
                                            <svg aria-label="Invite Providers" width="18" height="18"
                                                viewBox="0 0 18 18" fill="none">
                                                <use xlink:href="/css/common-icons.svg#invite-icon"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            Invite Providers
                                        </a>
                                        <a href="#" class="btn btn-has-icon btn-primary rounded"
                                            data-bs-toggle="modal" data-bs-target="#adminStaffModal">
                                            {{-- Updated by Shanila to Add svg icon --}}
                                            <svg aria-label="View Assigned Admin-staff" width="18" height="18"
                                                viewBox="0 0 18 18" fill="none">
                                                <use xlink:href="/css/common-icons.svg#invite-icon"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            View Assigned Admin-staff
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                            Message Requester
                                        </a>
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
                                                <use xlink:href="/css/common-icons.svg#datefield-icon-white"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            Reschedule
                                        </a>
                                        <a href="#" class="btn btn-has-icon btn-primary rounded"
                                            data-bs-toggle="modal" data-bs-target="#UnassignModal">
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
                                        <a href="#" class="btn btn-has-icon btn-primary rounded"
                                            data-bs-toggle="modal" data-bs-target="#reviewFeedbackModal">
                                            {{-- Updated by Shanila to Add
                                            svg icon --}}
                                            <svg aria-label="Review Feedback" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none">
                                                <use xlink:href="/css/common-icons.svg#review-feedback">
                                                </use>
                                            </svg>
                                            {{-- End of update by Shanila
                                            --}}
                                            Review Feedback
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row between-section-segment-spacing">
                                <div class="col-lg-12">
                                    <div class="d-lg-flex justify-content-between align-items-center header-row">
                                        <h2 class="mb-lg-0">Requester Detail </h2>
                                        <div class="d-flex flex-md-row flex-column gap-3">
                                            <div>
                                                <button
                                                    class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span>
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label="Export" width="23" height="26"
                                                            viewBox="0 0 23 26">
                                                            <use xlink:href="/css/common-icons.svg#document-dropdown">
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
                                                    <div class="font-family-tertiary">{{ $booking['booking_number'] }}
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
                                                        {{ $booking['booking_start_at'] ? date_format(date_create($booking['booking_start_at']), 'd/m/Y h:i A') : '' }}

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
                                                        {{ $booking['booking_end_at'] ? date_format(date_create($booking['booking_end_at']), 'd/m/Y h:i A') : '' }}
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
                                                        <a href="#">{{ $booking['contact_point'] ? $booking['contact_point'] : 'N/A' }}</a>
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
                            @foreach ($booking['services'] as $index => $service)
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
                                                        <div class="font-family-tertiary">Legal</div>
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
                                                        <div class="font-family-tertiary">{{$service['provider_count']}}</div>
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
                                                            <a href="#">Thomas Charles</a> , <a
                                                                href="#">Richard Payne</a> ,
                                                            <a href="#">Jennifer Summers</a> , <a
                                                                href="#">Lori Wells</a>
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
                                                            <a href="#">Thomas Charles</a> , <a
                                                                href="#">Richard Payne</a> ,
                                                            <a href="#">Jennifer Summers</a> , <a
                                                                href="#">Lori Wells</a>
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
                                                <h2 class="">Service {{$index+1}} Meeting Detail</h2>
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
                                                                    Mrs Smith 98 Shirley Street Appartment No. 45
                                                                    PIMPAMA QLD
                                                                    4209 AUSTRALIA
                                                                </div>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add
                                                            svg icon --}}
                                                                    <svg aria-label="Edit" width="20"
                                                                        height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila
                                                            --}}
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
                                                            <div class="font-family-tertiary">City Name</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="col-form-label">State:</label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">State Name</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="col-form-label">Zip Code:</label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">129839</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-10 mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label class="col-form-label">Arrival Notes::</label>
                                                        </div>
                                                        <div class="col-lg-7 align-self-center">
                                                            <div class="font-family-tertiary">Active</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Map -->
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96779.59535015929!2d-74.00126600000002!3d40.710039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1676478925644!5m2!1sen!2sus"
                                                width="304" height="228" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                                class="map"></iframe>
                                            <!-- /Map -->
                                        </div>
                                    </div>
                                    <!-- /In-Person Meeting Detail -->
                                @else
                                    <!-- Phone / Teleconference / Virtual Meeting Detail -->
                                    <div class="row between-section-segment-spacing">
                                        <div class="col-lg-12">
                                            <div class="d-lg-flex justify-content-between align-items-center">
                                                <h2 class="">Service {{$index+1}} Meeting Detail</h2>
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
                                                                    {{-- {{isset($service['meeting_name'])? $service['meeting_name'] : 'N/A'}} --}}
                                                                </div>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#MeetingLinksModal">
                                                                    {{-- Updated by Shanila to Add
                                                            svg icon --}}
                                                                    <svg aria-label="Edit" width="20"
                                                                        height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
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
                                                                    {{$service['meeting_link']? $service['meeting_link'] : 'N/A'}}

                                                                    {{-- https://meet.google.com/xxxxxxxx --}}
                                                                </div>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add
                                                            svg icon --}}
                                                                    <svg aria-label="Edit" width="20"
                                                                        height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
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
                                                                {{$service['meeting_phone']}}
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
                                                            <div class="font-family-tertiary">{{$service['meeting_passcode']}}</div>
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
                                                                {{date_format(date_create($service['created_at']), "d/m/Y h:i A")}}
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
                            <!-- Service Form Detail -->
                            <div class="row between-section-segment-spacing">
                                <div class="col-lg-12">
                                    <div class="d-lg-flex justify-content-between align-items-center">
                                        <h2 class="">Service Form Detail (Needs to be updated)</h2>
                                    </div>
                                    <div class="row">
                                    @foreach($serviceDetails as $index => $serviceDetail)
                                        <div class="col-lg-8 mb-3">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <label class="col-form-label">{{ $serviceDetail['field_name'] ? $serviceDetail['field_name'] : 'N/A' }}:
                                                    </label>
                                                </div>
                                                <div class="col-lg-7 align-self-center">
                                                    <div class="d-flex align-items-center gap-2">
                                                        <div class="font-family-tertiary">{{ $serviceDetail['data_value'] ? $serviceDetail['data_value'] : 'N/A' }}</div>
                                                        <a href="#"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add
                                                            svg icon --}}
                                                            <svg aria-label="Edit" width="20" height="20"
                                                                viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#pencil">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila
                                                            --}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- /Service Form Detail -->
                            <!-- Industry Form Detail -->
                            <div class="row between-section-segment-spacing">
                                <div class="col-lg-12">
                                    <div class="d-lg-flex justify-content-between align-items-center">
                                        <h2 class="">Industry Form Detail (needs to be updated)</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 mb-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">
                                                                Req_info:
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <a href="#">View Uploaded Document</a>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <img src="/tenant-resources/images/img-placeholder-document.jpg"
                                                                alt="img-placeholder-document" class="w-100">
                                                            <p class="font-family-secondary">
                                                                <small>File Name</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /Industry Form Detail -->
                            <!-- Notes -->
                            <div class="row between-section-segment-spacing">
                                <div class="col-lg-12">
                                    <h2 class="mb-lg-4">Notes</h2>
                                    <div class="row mb-4">
                                        <div class="col-lg-6 mb-4">
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
                                        <div class="col-lg-6 mb-4">
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
                                            <div class="">
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
                                                        <input class="form-check-input" id="Requester" name=""
                                                            type="checkbox" tabindex="">
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
                                            <a href="#" class="btn btn-primary rounded" wire:click="updateNotes">Save Notes</a>
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
                        @foreach($booking->services as $index=> $service)
                            @livewire('app.common.bookings.assignedproviders', ['index'=>$index+1,'service_id'=>$service->id,'booking_id' => $booking_id])
                        @endforeach  
                    </div><!-- END: assigned-providers-tab -->
                    <div class="tab-pane fade {{ $component == 'attachments' ? 'active show' : '' }}"
                        id="attachments" role="tabpanel" aria-labelledby="attachments-tab" tabindex="0">
                        <h2>Attachments</h2>
                        @livewire('app.common.bookings.booking-attachments', ['booking_id' => $booking_id])
                       <!-- <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                            <button type="" class="btn btn-outline-dark rounded"
                                x-on:click="$wire.switch('assigned-providers')">Back</button>
                            <button type="" class="btn btn-primary rounded"
                                x-on:click="$wire.switch('payment-details')">Next</button>
                        </div>-->
                    </div><!-- END: attachments-tab -->
                    <div class="tab-pane fade {{ $component == 'payment-details' ? 'active show' : '' }}"
                        id="payment-details" role="tabpanel" aria-labelledby="payment-details-tab"
                        tabindex="0">
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
                                            <div class="font-family-tertiary">$00.00</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <hr class="border-separate-sm">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label class="form-label mb-md-0">Override:</label>
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
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label class="form-label mb-md-0">Total Additional Charges:</label>
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
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label class="form-label mb-md-0">Service Total:</label>
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
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label class="form-label mb-md-0">Discount:</label>
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
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label class="form-label mb-md-0">Net Total:</label>
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
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label class="form-label mb-md-0">Provider Rate Sum:</label>
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
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label class="form-label mb-md-0">Additional Provider Payments:</label>
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
                                    <div class="row">
                                        <div class="col-md-9">
                                            <label class="form-label mb-md-0">Profit Margin:</label>
                                        </div>
                                        <div class="col-md-3 align-self-center">
                                            <div class="font-family-tertiary">$00.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Billing Notes -->
                                <div class="between-section-segment-spacing">
                                    <label class="form-label" for="billing-notes">
                                        Billing Notes
                                    </label>
                                    <textarea class="form-control" rows="4" cols="4" id="billing-notes" wire:model.defer="booking.billing_notes"></textarea>
                                </div><!-- /Billing Notes -->
                                <!-- Payment Notes -->
                                <div class="mb-4">
                                    <label class="form-label" for="payment-notes">
                                        Payment Notes
                                    </label>
                                    <textarea class="form-control" rows="4" cols="4" id="payment-notes" wire:model.defer="booking.payment_notes"></textarea>
                                </div><!-- /Payment Notes -->
                                <div class="col-lg-12">
                                            <a href="#" class="btn btn-primary rounded" wire:click="updateNotes" wire:model="updateNotes">Save Notes</a>
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
                    <div class="tab-pane fade {{ $component == 'assignment-log' ? 'active show' : '' }}"
                        id="assignment-log" role="tabpanel" aria-labelledby="assignment-log-tab" tabindex="0">
                        <livewire:app.common.bookings.assignment-logs :booking_id="$booking_id"/>
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
    <!-- /Modal - Meeting Links -->
    <!-- Modal - Unassign -->
    {{-- <div class="modal fade" id="UnassignModal" tabindex="-1" aria-labelledby="UnassignModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="UnassignModalLabel">Unassign</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label class="form-label">Reason for Unassign</label>
                        <textarea class="form-control" rows="5" cols="5"></textarea>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label" for="dateunassign">
                                Date
                            </label>
                            <div class="position-relative">
                                <input type="" name="" class="form-control" placeholder="Select Date" id="dateunassign">
                                <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex">
                                <div class="d-flex flex-column justify-content-between">
                                    <label class="form-label" for="set_start_time">Time</label>
                                    <div class="d-flex gap-2 pt-2">
                                        <div class="time d-flex align-items-center gap-2">
                                            <div class="hours">12</div>
                                            <svg width="5" height="19" viewBox="0 0 5 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                    fill="black" />
                                            </svg>
                                            <div class="mins">59</div>
                                        </div>
                                        <div class="form-check form-switch form-switch-column mb-0">
                                            <input checked class="form-check-input" type="checkbox" role="switch"
                                                id="pm">
                                            <label class="form-check-label" for="pm">PM</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-3 justify-content-center mb-3">
                        <a href="#" class="btn rounded btn-outline-dark" data-bs-dismiss="modal">Keep Provider</a>
                        <a href="#" class="btn rounded btn-primary">Yes, Unassign Provider</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /Modal - Unassign -->
    {{-- End of update by Sohail Asghar --}}
    @include('panels.booking-details.reschedule-booking')
    @include('panels.common.add-documents', ['booking_id' => $booking_id])
    @include('panels.booking-details.assign-providers')
@endif
</div>
