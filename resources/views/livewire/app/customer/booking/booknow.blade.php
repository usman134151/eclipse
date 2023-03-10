<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>
<div class="content-body">
    <div class="card">
        <div class="card-body">
            <!-- BEGIN: Assignment Booking Form -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $component == 'requester-info' ? 'active' : '' }}"
                        id="requester-info-tab" data-bs-toggle="tab"
                        data-bs-target="#requester-info" type="button" role="tab"
                        aria-controls="requester-info" aria-selected="true"><span
                            class="number">1</span> Requester Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $component == 'request-details' ? 'active' : '' }}"
                        id="request-details-tab" data-bs-toggle="tab"
                        data-bs-target="#request-details" type="button" role="tab"
                        aria-controls="request-details" aria-selected="false"><span
                            class="number">2</span> Request Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $component == 'payment-info' ? 'active' : '' }}"
                        id="payment-info-tab" data-bs-toggle="tab" data-bs-target="#payment-info"
                        type="button" role="tab" aria-controls="payment-info"
                        aria-selected="false"><span class="number">3</span> Payment Info</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link {{ $component == 'booking-summary' ? 'active' : '' }}"
                        id="booking-summary-tab" data-bs-toggle="tab"
                        data-bs-target="#booking-summary" type="button" role="tab"
                        aria-controls="booking-summary" aria-selected="false"><span
                            class="number">4</span> Booking Summary</button>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade {{ $component == 'requester-info' ? 'active show' : '' }}"
                    id="requester-info" role="tabpanel" aria-labelledby="requester-info-tab"
                    tabindex="0">
                    <h2>Requester Information</h2>
                    <div class="mb-4">
                        <label class="form-label form-label-highlighted">Permitted Scheduling
                            Frequencies <i class="fa fa-question-circle text-muted"
                                aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top"
                                title=""></i></label>
                        <div class="d-flex gap-3 flex-column flex-lg-row">
                            <div class="form-check form-check-highlighted">
                                <input class="form-check-input" id="oneTimeRequest"
                                    name="PermittedSchedulingFrequencies" type="radio" tabindex=""
                                    checked />
                                <label class="form-check-label" for="oneTimeRequest">One-Time
                                    Request</label>
                            </div>
                            <div class="form-check form-check-highlighted">
                                <input class="form-check-input" id="Daily"
                                    name="PermittedSchedulingFrequencies" type="radio"
                                    tabindex="" />
                                <label class="form-check-label" for="Daily">Daily</label>
                            </div>
                            <div class="form-check form-check-highlighted">
                                <input class="form-check-input" id="Weekly"
                                    name="PermittedSchedulingFrequencies" type="radio"
                                    tabindex="" />
                                <label class="form-check-label" for="Weekly">Weekly</label>
                            </div>
                            <div class="form-check form-check-highlighted">
                                <input class="form-check-input" id="WeekDaily"
                                    name="PermittedSchedulingFrequencies" type="radio"
                                    tabindex="" />
                                <label class="form-check-label" for="WeekDaily">WeekDaily</label>
                            </div>
                            <div class="form-check form-check-highlighted">
                                <input class="form-check-input" id="Monthly"
                                    name="PermittedSchedulingFrequencies" type="radio"
                                    tabindex="" />
                                <label class="form-check-label" for="Monthly">Monthly</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 mb-4 ps-lg-5">
                            <label class="form-label">Department <span
                                    class="mandatory">*</span></label>
                            <input type="" class="form-control" placeholder="Select Department">
                        </div>
                        <div class="col-lg-6 mb-4 pe-lg-5">
                            <label class="form-label">Industry <span
                                    class="mandatory">*</span></label>
                            <input type="" class="form-control" placeholder="Select Industry">
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="d-lg-flex align-items-center mb-4 gap-3">
                                <div class="form-check form-switch form-switch-column mb-lg-0">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="" checked>
                                </div>
                                <h3 class="mb-lg-0">Choose a different point of contact</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 pe-lg-5">
                                    <label class="form-label">Point of Contact <span
                                            class="mandatory">*</span></label>
                                    <input type="" class="form-control" placeholder="">
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <label class="form-label">Phone Number<span
                                            class="mandatory">*</span></label>
                                    <input type="" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="d-lg-flex align-items-center mb-4 gap-3">
                                <div class="form-check form-switch form-switch-column mb-lg-0">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="" checked>
                                </div>
                                <h3 class="mb-lg-0">Add Supervisor & Billing Manager</h3>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 pe-lg-5">
                                    <label class="form-label">Supervisor <span
                                            class="mandatory">*</span></label>
                                    <select class="form-select">
                                        <option>Select Supervisor</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 ps-lg-5">
                                    <label class="form-label">Billing Manager</label>
                                    <select class="form-select">
                                        <option>Select Billing Manager</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- Service Information -->
                        <div class="col-lg-12 mb-4">
                            <h2>Service Information</h2>
                            <div class="row">
                                <div class="col-lg-6 pe-lg-5 mb-4">
                                    <label class="form-label">Booking Title</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Booking Title">
                                </div>
                            </div>

                            <!-- Services Duplicate Block -->
                            <div class="duplicate-block mb-3">
                                <h2>Services 1</h2>
                                <div class="row">
                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                        <label class="form-label">Accommodation <span
                                                class="mandatory">*</span></label>
                                        <select class="form-select">
                                            <option>Select Accommodation</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-4 ps-lg-5">
                                        <label class="form-label">Service <span
                                                class="mandatory">*</span> <i
                                                class="fa fa-question-circle text-muted"
                                                aria-hidden="true" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title=""></i></label>
                                        <select class="form-select">
                                            <option>Select Service</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                        <label class="form-label">Service Type <span
                                                class="mandatory">*</span></label>
                                        <div class="d-grid grid-cols-3">
                                            <div class="form-check">
                                                <input class="form-check-input" id="inPerson"
                                                    name="" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="inPerson">In-Person</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="Virtual" name=""
                                                    type="radio" tabindex="" />
                                                <label class="form-check-label" for="Virtual">
                                                    Virtual</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="Phone" name=""
                                                    type="radio" tabindex="" />
                                                <label class="form-check-label" for="Phone">
                                                    Phone</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="Teleconference"
                                                    name="" type="radio" tabindex="" />
                                                <label class="form-check-label"
                                                    for="Teleconference"> Teleconference</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4 ps-lg-5">
                                        <label class="form-label">Specializations</label>
                                        <div class="">
                                            <div class="form-check">
                                                <input class="form-check-input" id="BlogWriting"
                                                    name="Specializations" type="checkbox"
                                                    tabindex="" />
                                                <label class="form-check-label"
                                                    for="BlogWriting">Blog Writing</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input"
                                                    id="DeafBlindTactileInterpreting"
                                                    name="Specializations" type="checkbox"
                                                    tabindex="" />
                                                <label class="form-check-label"
                                                    for="DeafBlindTactileInterpreting">Deaf-Blind
                                                    Tactile Interpreting</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                        <label class="form-label">Number of Providers <span
                                                class="mandatory">*</span></label>
                                        <input type="" class="form-control"
                                            placeholder="Enter Number of Providers">
                                    </div>
                                    <div class="col-lg-6 mb-4 ps-lg-5">
                                        <div class="row">
                                            <div class="col-lg-5 mb-4">
                                                <div class="d-flex gap-3">
                                                    <label class="form-label-sm">
                                                        Broadcast
                                                    </label>
                                                    <div
                                                        class="form-check form-switch form-switch-column">
                                                        <input class="form-check-input"
                                                            type="checkbox" role="switch"
                                                            id="AutoNotifyBroadcast" checked>
                                                        <label class="form-check-label"
                                                            for="AutoNotifyBroadcast">Auto-notify</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 mb-4">
                                                <div class="d-flex gap-3">
                                                    <label class="form-label-sm">
                                                        Assign
                                                    </label>
                                                    <div
                                                        class="form-check form-switch form-switch-column">
                                                        <input class="form-check-input"
                                                            type="checkbox" role="switch"
                                                            id="AutoNotifyAssign" checked>
                                                        <label class="form-check-label"
                                                            for="AutoNotifyAssign">Manual-assign</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-4">
                                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                                            <div
                                                class="form-check form-switch form-switch-column mb-lg-0">
                                                <input class="form-check-input" type="checkbox"
                                                    role="switch" id="" checked>
                                            </div>
                                            <h2 class="mb-lg-0">Add Consumers & Participants</h2>
                                        </div>

                                        <h2>Services 2</h2>
                                        <div class="row">
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label">Accommodation <span
                                                        class="mandatory">*</span></label>
                                                <select class="form-select">
                                                    <option>Select Accommodation</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <label class="form-label">Service <span
                                                        class="mandatory">*</span> <i
                                                        class="fa fa-question-circle text-muted"
                                                        aria-hidden="true" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title=""></i></label>
                                                <select class="form-select">
                                                    <option>Select Service</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label">Service Type <span
                                                        class="mandatory">*</span></label>
                                                <div class="d-grid grid-cols-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input"
                                                            id="inPerson" name="" type="radio"
                                                            tabindex="" />
                                                        <label class="form-check-label"
                                                            for="inPerson">In-Person</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="Virtual"
                                                            name="" type="radio" tabindex="" />
                                                        <label class="form-check-label"
                                                            for="Virtual"> Virtual</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="Phone"
                                                            name="" type="radio" tabindex="" />
                                                        <label class="form-check-label" for="Phone">
                                                            Phone</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input"
                                                            id="Teleconference" name="" type="radio"
                                                            tabindex="" />
                                                        <label class="form-check-label"
                                                            for="Teleconference">
                                                            Teleconference</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <label class="form-label">Specializations</label>
                                                <div class="">
                                                    <div class="form-check">
                                                        <input class="form-check-input"
                                                            id="BlogWriting" name="Specializations"
                                                            type="checkbox" tabindex="" />
                                                        <label class="form-check-label"
                                                            for="BlogWriting">Blog Writing</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input"
                                                            id="DeafBlindTactileInterpreting"
                                                            name="Specializations" type="checkbox"
                                                            tabindex="" />
                                                        <label class="form-check-label"
                                                            for="DeafBlindTactileInterpreting">Deaf-Blind
                                                            Tactile Interpreting</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label">Number of Providers <span
                                                        class="mandatory">*</span></label>
                                                <input type="" class="form-control"
                                                    placeholder="Enter Number of Providers">
                                            </div>
                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <div class="row">
                                                    <div class="col-lg-5 mb-4">
                                                        <div class="d-flex gap-3">
                                                            <label class="form-label-sm">
                                                                Broadcast
                                                            </label>
                                                            <div
                                                                class="form-check form-switch form-switch-column">
                                                                <input class="form-check-input"
                                                                    type="checkbox" role="switch"
                                                                    id="AutoNotifyBroadcast"
                                                                    checked>
                                                                <label class="form-check-label"
                                                                    for="AutoNotifyBroadcast">Auto-notify</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 mb-4">
                                                        <div class="d-flex gap-3">
                                                            <label class="form-label-sm">
                                                                Assign
                                                            </label>
                                                            <div
                                                                class="form-check form-switch form-switch-column">
                                                                <input class="form-check-input"
                                                                    type="checkbox" role="switch"
                                                                    id="AutoNotifyAssign" checked>
                                                                <label class="form-check-label"
                                                                    for="AutoNotifyAssign">Manual-assign</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mb-4">
                                                <div
                                                    class="d-lg-flex align-items-center mb-4 gap-3">
                                                    <div
                                                        class="form-check form-switch form-switch-column mb-lg-0">
                                                        <input class="form-check-input"
                                                            type="checkbox" role="switch" id=""
                                                            checked>
                                                    </div>
                                                    <h2 class="mb-lg-0">Add Consumers & Participants
                                                    </h2>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <label class="form-label">Service
                                                                Consumer(s)</label>
                                                            <a href="#" class="fw-bold">
                                                                <small>
                                                                    <svg width="16" height="16"
                                                                        viewBox="0 0 16 16"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            clip-rule="evenodd"
                                                                            d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z"
                                                                            fill="#0A1E46" />
                                                                    </svg>
                                                                    Add New Service Consumer
                                                                </small>
                                                            </a>
                                                        </div>
                                                        <div class="js-wrapper-manual-entry">
                                                            <select
                                                                class="form-select mb-2 js-form-select-manual-entry"
                                                                aria-label="Select Service Consumer(s)">
                                                                <option>Select Service Consumer(s)
                                                                </option>
                                                            </select>
                                                            <input type="" name=""
                                                                class="form-control mb-2 hidden js-form-input-manual-entry"
                                                                placeholder="Enter Service Consumer(s)">
                                                            <div class="form-check">
                                                                <input
                                                                    class="form-check-input js-form-check-input-manual-entry"
                                                                    id="ManualEntryServiceConsumer"
                                                                    name="" type="checkbox"
                                                                    tabindex="">
                                                                <label class="form-check-label"
                                                                    for="ManualEntryServiceConsumer"><small>Manual
                                                                        Entry</small></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4 ps-lg-5">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center">
                                                            <label
                                                                class="form-label">Participant(s)</label>
                                                            <a href="#" class="fw-bold">
                                                                <small>
                                                                    <svg width="16" height="16"
                                                                        viewBox="0 0 16 16"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            clip-rule="evenodd"
                                                                            d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z"
                                                                            fill="#0A1E46" />
                                                                    </svg>
                                                                    Add New Participant
                                                                </small>
                                                            </a>
                                                        </div>
                                                        <div class="js-wrapper-manual-entry">
                                                            <select
                                                                class="form-select mb-2 js-form-select-manual-entry"
                                                                aria-label="Select Participant(s)">
                                                                <option>Select Participant(s)
                                                                </option>
                                                            </select>
                                                            <input type="" name=""
                                                                class="form-control mb-2 hidden js-form-input-manual-entry"
                                                                placeholder="Enter Participant(s)">
                                                            <div class="form-check">
                                                                <input
                                                                    class="form-check-input js-form-check-input-manual-entry"
                                                                    id="ManualEntryParticipant"
                                                                    name="" type="checkbox"
                                                                    tabindex="">
                                                                <label class="form-check-label"
                                                                    for="ManualEntryParticipant"><small>Manual
                                                                        Entry</small></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-lg-6 align-self-center">
                                                        <h2 class="mb-lg-0">Meeting Information</h2>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"
                                                                    class="btn btn-primary rounded w-100 btn-has-icon">
                                                                    <svg width="22" height="18"
                                                                        viewBox="0 0 24 19"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M2 10.4062L8.66667 17.4062L22 2.40625"
                                                                            stroke="white"
                                                                            stroke-width="3"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                    Add Manually
                                                                </a>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <a href="#"
                                                                    class="btn btn-primary rounded w-100">
                                                                    Request from User
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row border-dashed rounded p-3 mb-3">
                                                    <h2>Meeting Link 1</h2>
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-3">
                                                            <label class="form-label">Meeting
                                                                Name</label>
                                                            <input type="" class="form-control"
                                                                placeholder="Enter Meeting Name">
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label class="form-label">Phone
                                                                Number</label>
                                                            <input type="" class="form-control"
                                                                placeholder="Enter Phone Number">
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label class="form-label">Access
                                                                Code</label>
                                                            <input type="" class="form-control"
                                                                placeholder="Enter Access Code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row border-dashed rounded p-3 mb-3">
                                                    <h2>Meeting Link 2</h2>
                                                    <div class="row">
                                                        <div class="col-lg-4 mb-3">
                                                            <label class="form-label">Meeting
                                                                Name</label>
                                                            <input type="" class="form-control"
                                                                placeholder="Enter Meeting Name">
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label class="form-label">Phone
                                                                Number</label>
                                                            <input type="" class="form-control"
                                                                placeholder="Enter Phone Number">
                                                        </div>
                                                        <div class="col-lg-4 mb-3">
                                                            <label class="form-label">Access
                                                                Code</label>
                                                            <input type="" class="form-control"
                                                                placeholder="Enter Access Code">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-lg-2">
                                                        <a href="#"
                                                            class="btn btn-primary rounded btn-has-icon w-100">
                                                            <svg width="20" height="20"
                                                                viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                                    fill="white" />
                                                            </svg>
                                                            Add Link
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /Services Duplicate Block -->
                                    <div class="row justify-content-end">
                                        <div class="col-lg-3">
                                            <a href="#"
                                                class="btn btn-primary rounded btn-has-icon w-100">
                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                        fill="white" />
                                                </svg>
                                                Add Service
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Service Information -->
                                <!-- Select Dates & Times -->
                                <div class="col-lg-12 mb-4">
                                    <h2>Select Dates & Times</h2>
                                    <!-- Select Dates & Times Duplicate Block -->
                                    <div class="duplicate-block">
                                        <h2>Date & Time 1</h2>
                                        <div class="d-lg-flex gap-5 mb-4">
                                            <div class="col-lg-3">
                                                <label class="form-label-sm" for="set_time_zone">Set
                                                    Time Zone <span
                                                        class="mandatory">*</span></label>
                                                <select class="form-select form-select-md"
                                                    id="set_time_zone">
                                                    <option>Set Time Zone</option>
                                                </select>
                                            </div>
                                            <div class="">
                                                <label class="form-label-sm"
                                                    for="set_start_date">Set Date <span
                                                        class="mandatory">*</span></label>
                                                <div class="position-relative">
                                                    <input type="" name=""
                                                        class="form-control form-control-md js-single-date"
                                                        placeholder="Select Date"
                                                        id="set_start_date"
                                                        aria-label="Set Start Date">
                                                    <svg class="icon-date md" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                                            fill="black" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div
                                                    class="d-flex flex-column justify-content-between">
                                                    <label class="form-label-sm"
                                                        for="set_start_time">Start Time</label>
                                                    <div class="d-flex gap-2">
                                                        <div
                                                            class="time d-flex align-items-center gap-2">
                                                            <div class="hours">12</div>
                                                            <svg width="5" height="19"
                                                                viewBox="0 0 5 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                                    fill="black" />
                                                            </svg>
                                                            <div class="mins">59</div>
                                                        </div>
                                                        <div
                                                            class="form-check form-switch form-switch-column mb-0">
                                                            <input checked class="form-check-input"
                                                                type="checkbox" role="switch"
                                                                id="startTimeAMPM">
                                                            <label class="form-check-label"
                                                                for="startTimeAMPM">AM</label>
                                                            <label class="form-check-label"
                                                                for="startTimeAMPM">PM</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <label class="form-label-sm" for="set_end_date">Set
                                                    Date <span class="mandatory">*</span></label>
                                                <div class="position-relative">
                                                    <input type="" name=""
                                                        class="form-control form-control-md js-single-date"
                                                        placeholder="Select Date" id="set_end_date"
                                                        aria-label="Set End Date">
                                                    <svg class="icon-date md" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                                            fill="black" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div
                                                    class="d-flex flex-column justify-content-between">
                                                    <label class="form-label-sm"
                                                        for="set_start_time">End Time</label>
                                                    <div class="d-flex gap-2">
                                                        <div
                                                            class="time d-flex align-items-center gap-2">
                                                            <div class="hours">12</div>
                                                            <svg width="5" height="19"
                                                                viewBox="0 0 5 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                                    fill="black" />
                                                            </svg>
                                                            <div class="mins">59</div>
                                                        </div>
                                                        <div
                                                            class="form-check form-switch form-switch-column mb-0">
                                                            <input checked class="form-check-input"
                                                                type="checkbox" role="switch"
                                                                id="endTimeAMPM">
                                                            <label class="form-check-label"
                                                                for="endTimeAMPM">AM</label>
                                                            <label class="form-check-label"
                                                                for="endTimeAMPM">PM</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-lg-flex align-items-center gap-5">
                                            <label class="form-label mb-lg-0">Total Billable Service
                                                Duration</label>
                                            <div>
                                                <label class="form-label-sm"
                                                    for="total_billable_service_duration_days">Days</label>
                                                <input type=""
                                                    class="form-control form-control-md text-center"
                                                    aria-label="Days" placeholder="0"
                                                    id="total_billable_service_duration_days">
                                            </div>
                                            <div>
                                                <label class="form-label-sm">Hours</label>
                                                <input type=""
                                                    class="form-control form-control-md form-control-md text-center"
                                                    aria-label="Hours" placeholder="00"
                                                    id="total_billable_service_duration_hours">
                                            </div>
                                            <div>
                                                <label class="form-label-sm">Minutes</label>
                                                <input type=""
                                                    class="form-control form-control-md text-center"
                                                    aria-label="Minutes" placeholder="00"
                                                    id="total_billable_service_duration_minutes">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Select Dates & Times Duplicate Block -->
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <!-- Select Dates & Times Duplicate Block -->
                                    <div class="duplicate-block">
                                        <h2>Date & Time 2</h2>
                                        <div class="d-lg-flex gap-5 mb-4">
                                            <div class="col-lg-3">
                                                <label class="form-label-sm" for="set_time_zone">Set
                                                    Time Zone <span
                                                        class="mandatory">*</span></label>
                                                <select class="form-select form-select-md"
                                                    id="set_time_zone">
                                                    <option>Set Time Zone</option>
                                                </select>
                                            </div>
                                            <div class="">
                                                <label class="form-label-sm"
                                                    for="set_start_date">Set Date <span
                                                        class="mandatory">*</span></label>
                                                <div class="position-relative">
                                                    <input type="" name=""
                                                        class="form-control form-control-md js-single-date"
                                                        placeholder="Select Date"
                                                        id="set_start_date"
                                                        aria-label="Set Start Date">
                                                    <svg class="icon-date md" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                                            fill="black" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div
                                                    class="d-flex flex-column justify-content-between">
                                                    <label class="form-label-sm"
                                                        for="set_start_time">Start Time</label>
                                                    <div class="d-flex gap-2">
                                                        <div
                                                            class="time d-flex align-items-center gap-2">
                                                            <div class="hours">12</div>
                                                            <svg width="5" height="19"
                                                                viewBox="0 0 5 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                                    fill="black" />
                                                            </svg>
                                                            <div class="mins">59</div>
                                                        </div>
                                                        <div
                                                            class="form-check form-switch form-switch-column mb-0">
                                                            <input checked class="form-check-input"
                                                                type="checkbox" role="switch"
                                                                id="startTimeAMPM">
                                                            <label class="form-check-label"
                                                                for="startTimeAMPM">AM</label>
                                                            <label class="form-check-label"
                                                                for="startTimeAMPM">PM</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <label class="form-label-sm" for="set_end_date">Set
                                                    Date <span class="mandatory">*</span></label>
                                                <div class="position-relative">
                                                    <input type="" name=""
                                                        class="form-control form-control-md js-single-date"
                                                        placeholder="Select Date" id="set_end_date"
                                                        aria-label="Set End Date">
                                                    <svg class="icon-date md" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                                            fill="black" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div
                                                    class="d-flex flex-column justify-content-between">
                                                    <label class="form-label-sm"
                                                        for="set_start_time">End Time</label>
                                                    <div class="d-flex gap-2">
                                                        <div
                                                            class="time d-flex align-items-center gap-2">
                                                            <div class="hours">12</div>
                                                            <svg width="5" height="19"
                                                                viewBox="0 0 5 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z"
                                                                    fill="black" />
                                                            </svg>
                                                            <div class="mins">59</div>
                                                        </div>
                                                        <div
                                                            class="form-check form-switch form-switch-column mb-0">
                                                            <input checked class="form-check-input"
                                                                type="checkbox" role="switch"
                                                                id="endTimeAMPM">
                                                            <label class="form-check-label"
                                                                for="endTimeAMPM">AM</label>
                                                            <label class="form-check-label"
                                                                for="endTimeAMPM">PM</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-lg-flex align-items-center gap-5">
                                            <label class="form-label mb-lg-0">Total Billable Service
                                                Duration</label>
                                            <div>
                                                <label class="form-label-sm"
                                                    for="total_billable_service_duration_days">Days</label>
                                                <input type=""
                                                    class="form-control form-control-md text-center"
                                                    aria-label="Days" placeholder="0"
                                                    id="total_billable_service_duration_days">
                                            </div>
                                            <div>
                                                <label class="form-label-sm">Hours</label>
                                                <input type=""
                                                    class="form-control form-control-md form-control-md text-center"
                                                    aria-label="Hours" placeholder="00"
                                                    id="total_billable_service_duration_hours">
                                            </div>
                                            <div>
                                                <label class="form-label-sm">Minutes</label>
                                                <input type=""
                                                    class="form-control form-control-md text-center"
                                                    aria-label="Minutes" placeholder="00"
                                                    id="total_billable_service_duration_minutes">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Select Dates & Times Duplicate Block -->
                                </div>
                                <!-- /Select Dates & Times -->
                                <!-- Physical Address -->
                                <div class="row mb-4">
                                    <div class="col-lg-6 mb-4 align-self-center">
                                        <h2 class="mb-lg-0">Physical Address</h2>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <a href="#"
                                                    class="btn btn-primary rounded w-100 btn-has-icon">
                                                    <svg width="22" height="18" viewBox="0 0 24 19"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M2 10.4062L8.66667 17.4062L22 2.40625"
                                                            stroke="white" stroke-width="3"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                    Add Manually
                                                </a>
                                            </div>
                                            <div class="col-lg-6 mb-4">
                                                <a href="#" class="btn btn-primary rounded w-100">
                                                    Request from User
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <div
                                                class="d-lg-flex justify-content-between align-items-center mb-3">
                                                <h3 class="mb-lg-0">Start Service Address</h3>
                                                <a href="#"
                                                    class="btn btn-primary btn-sm rounded">End
                                                    Address</a>
                                            </div>
                                            <p>List of most recently used address from the requester
                                            </p>
                                        </div>
                                        <!-- Button trigger modal | Add Address POPUP-->
                                        <div class="col-lg-12 text-lg-end">
                                            <div class="mb-4">
                                                <button type="button"
                                                    class="btn btn-primary btn-sm rounded gap-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#addAddressModal">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                            fill="white" />
                                                    </svg>
                                                    <span>Add New Address</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- #Address Tables-->
                                        <div class="col-lg-12 mb-4 border">
                                            <table class="table table-hover">
                                                <thead>
                                                    <th>#</th>
                                                    <th>Address</th>
                                                    <th></th>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd js-selected-row">
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA
                                                                QLD 4209 AUSTRALIA</p>
                                                        </td>
                                                        <!-- for active class row integrated with JS  -->
                                                        <td class="align-middle">
                                                            <svg class="d-none js-tick" width="24"
                                                                height="19" viewBox="0 0 24 19"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                    stroke="white" stroke-width="3"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </td>
                                                    </tr>
                                                    <tr class="even selected">
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA
                                                                QLD 4209 AUSTRALIA</p>
                                                        </td>
                                                        <!-- for active class row integrated with JS  -->
                                                        <td class="align-middle">
                                                            <svg width="24" height="19"
                                                                viewBox="0 0 24 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                    stroke="white" stroke-width="3"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd js-selected-row">
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA
                                                                QLD 4209 AUSTRALIA</p>
                                                        </td>
                                                        <!-- for active class row integrated with JS  -->
                                                        <td class="align-middle">
                                                            <svg class="d-none js-tick" width="24"
                                                                height="19" viewBox="0 0 24 19"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                    stroke="white" stroke-width="3"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- #Address Tables-->
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-4">
                                            <div
                                                class="d-lg-flex justify-content-between align-items-center mb-3">
                                                <h3 class="mb-lg-0">Start Service Address</h3>
                                                <a href="#"
                                                    class="btn btn-primary btn-sm rounded">End
                                                    Address</a>
                                            </div>
                                            <p>List of most recently used address from the requester
                                            </p>
                                        </div>
                                        <!-- Button trigger modal | Add Address POPUP-->
                                        <div class="col-lg-12 text-lg-end">
                                            <div class="mb-4">
                                                <button type="button"
                                                    class="btn btn-primary btn-sm rounded gap-2"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#addAddressModal">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            clip-rule="evenodd"
                                                            d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                            fill="white" />
                                                    </svg>
                                                    <span>Add New Address</span>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- #Address Tables-->
                                        <div class="col-lg-12 mb-4 border">
                                            <table class="table table-hover">
                                                <thead>
                                                    <th>#</th>
                                                    <th>Address</th>
                                                    <th></th>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd js-selected-row">
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA
                                                                QLD 4209 AUSTRALIA</p>
                                                        </td>
                                                        <!-- for active class row integrated with JS  -->
                                                        <td class="align-middle">
                                                            <svg class="d-none js-tick" width="24"
                                                                height="19" viewBox="0 0 24 19"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                    stroke="white" stroke-width="3"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </td>
                                                    </tr>
                                                    <tr class="even selected">
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA
                                                                QLD 4209 AUSTRALIA</p>
                                                        </td>
                                                        <!-- for active class row integrated with JS  -->
                                                        <td class="align-middle">
                                                            <svg width="24" height="19"
                                                                viewBox="0 0 24 19" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                    stroke="white" stroke-width="3"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd js-selected-row">
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            <p>Mrs Smith 98 Shirley Street PIMPAMA
                                                                QLD 4209 AUSTRALIA</p>
                                                        </td>
                                                        <!-- for active class row integrated with JS  -->
                                                        <td class="align-middle">
                                                            <svg class="d-none js-tick" width="24"
                                                                height="19" viewBox="0 0 24 19"
                                                                fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 10.2852L8.66667 17.2852L22 2.28516"
                                                                    stroke="white" stroke-width="3"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                            </svg>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- #Address Tables-->
                                    </div>
                                </div>
                                <!-- /Physical Address -->
                                <div class="col-12 justify-content-center form-actions d-flex">
                                    <button type="button"
                                        class="btn btn-outline-dark rounded mx-2">Cancel</button>
                                    <button type="submit" class="btn btn-primary rounded"
                                        x-on:click="$wire.switch('request-details')">Proceed to
                                        Request Details</button>
                                </div>
                            </div>

                            <!-- END: Add services Form -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade {{ $component == 'request-details' ? 'active show' : '' }}" id="request-details" role="tabpanel" aria-labelledby="request-details-tab" tabindex="0">
                    <form class="form">
                      <div class="col-md-12 mb-md-2">
                        <h2>Industry Form</h2>
                        <!-- Industry Form Begin -->
                        <div class="row mb-4">
                          <div class="col-md-12 col-12">
                            <h3>Computer Science</h3>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-3">
                              <label for="formFile"
                                class="form-label"><b>Req_info:</b></label>
                              <input class="form-control" type="file" id="formFile">
                            </div>
                          </div>
                        </div>
                        <!-- Industry Form End -->
                        <!-- Service Form Begin -->
                        <div class="row">
                          <div class="col-md-7 col-12">
                            <h2>Service Form</h2>
                          </div>
                          <div class="col-md-12 col-12">
                            <h3>English to Arabic Sign Language</h3>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="first-name-column">First
                              Name</label>
                              <input type="text" id="first-name-column"
                                class="form-control" placeholder="First Name"
                                name="fname-column" />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="last-name-column">Last
                              Name</label>
                              <input type="text" id="last-name-column"
                                class="form-control" placeholder="Last Name"
                                name="lname-column" />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="phone-number-column">Phone
                              Number</label>
                              <input type="text" id="phone-number-column"
                                class="form-control" placeholder="Enter Phone Number"
                                name="pnumber-column" />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label"
                                for="severity-column">Severity</label>
                              <select class="form-select" id="severity-column">
                                <option selected>Select Severity</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-12 justify-content-center form-actions d-flex">
                            <button type="button"
                              class="btn btn-outline-dark rounded" x-on:click="$wire.switch('requester-info')">Back</button>
                              <button type="submit"
                              class="btn btn-primary rounded mx-2">Request from User</button>
                            <button type="button"
                              class="btn btn-primary rounded" x-on:click="$wire.switch('payment-info')">Proceed to
                            Payment</button>
                          </div>
                        </div>
                        <!-- Service Form End -->
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade {{ $component == 'payment-info' ? 'active show' : '' }}" id="payment-info" role="tabpanel" aria-labelledby="payment-info-tab" tabindex="0">
                    <h2>Payment Summary</h2>
                    <div class="row">
                      <div class="col-lg-6 mb-4 pe-lg-5 float-left pt-5">
                        <div class="col-lg-10 mb-5">
                          <div class="d-flex flex-column gap-5">
                            <div class="row">
                              <label class="form-label mb-0 col-lg-6">Service 1 Total Rate:</label>
                              <label class="form-label-sm mb-0 col-lg-3 align-self-center">$00.00</label>
                              <div class="col-lg-3">
                                <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                              </div>
                            </div>
                            <div class="row">
                              <label class="form-label mb-0 col-lg-6">Service 2 Total Rate:</label>
                              <label class="form-label-sm mb-0 col-lg-3 align-self-center">$00.00</label>
                              <div class="col-lg-3">
                                <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                              </div>
                            </div>
                            <div class="row">
                              <label class="form-label mb-0 col-lg-6">Additional Charges:</label>
                              <label class="form-label-sm mb-0 col-lg-3 align-self-center">$00.00</label>
                              <div class="col-lg-3">
                                <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-10 mb-5">
                          <h2>Discounts</h2>
                          <div class="d-flex gap-3 flex-column flex-lg-row mb-4">
                            <div class="form-check">
                              <input class="form-check-input" id="Coupon" name="discounts" type="radio" tabindex="" checked />
                              <label class="form-check-label" for="Coupon">Coupon</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="$Amount" name="discounts" type="radio" tabindex="" />
                              <label class="form-check-label" for="$Amount">$ Amount</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="%Amount" name="discounts" type="radio" tabindex="" />
                              <label class="form-check-label" for="%Amount">% Amount</label>
                            </div>
                          </div>
                          <div class="row mb-4">
                            <label class="form-label mb-lg-0 col-lg-5 align-self-center">Coupon Code</label>
                            <div class="col-lg-4">
                              <input type="" name="" class="form-control form-control-md" placeholder="Enter Code">
                            </div>
                            <div class="col-lg-3 align-self-center">
                              <a href="#" class="btn btn-primary btn-sm rounded w-100">Apply</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-10 mb-5">
                          <h2>Additional Customer Charge</h2>
                          <div class="input-group">
                            <input type="" name="" class="form-control form-control-md" placeholder="Enter Charge Label">
                            <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                          </div>
                          <div class="text-lg-end">
                            <a href="#" class="fw-bold">
                              <small>
                                Add Additional  Charges
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                </svg>
                              </small>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-10 mb-5">
                          <h2>Additional Provider Payment</h2>
                          <div class="input-group mb-2">
                            <input type="" name="" class="form-control form-control-md" placeholder="Enter Charge Label">
                            <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                          </div>
                          <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox" tabindex="" />
                              <label class="form-check-label" for="ChargetoCustomer"><small>Charge to Customer</small></label>
                            </div>
                            <a href="#" class="fw-bold">
                              <small>
                                Add Additional  Charges
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                </svg>
                              </small>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 mb-4 ps-lg-5 float-right">
                        <!-- Booking Schedule -->
                        <div class="border p-3 tabular-nums mb-5">
                          <div class="text-center">
                            <h3 class="text-primary">Booking Schedule</h3>
                          </div>
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="title">Service 1 Bookings</div>
                              <div class="d-flex flex-column gap-3">
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 1:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 2:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 3:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 4:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 5:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="title">Service 2 Bookings</div>
                              <div class="d-flex flex-column gap-3">
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 1:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 2:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 3:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 4:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 5:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-6">
                                    <div class="label">Booking 5:</div>
                                  </div>
                                  <div class="col-6">
                                    <div class="date">01/12/2022</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /Booking Schedule -->
                        <!-- Billing Notes -->
                        <div class="my-5">
                          <label class="form-label">
                            Billing Notes
                          </label>
                          <textarea class="form-control" rows="5" cols="5"></textarea>
                        </div>
                        <!-- /Billing Notes -->
                        <!-- Payment Notes -->
                        <div class="my-5">
                          <label class="form-label">
                            Payment Notes
                          </label>
                          <textarea class="form-control" rows="5" cols="5"></textarea>
                        </div>
                        <!-- /Payment Notes -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="d-flex gap-3 p-2">
                          <label class="form-label mb-0">Discount:</label> <div class="align-self-center text-black">$00.00</div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-lg-12">
                        <div class="d-flex gap-3 bg-gray p-2">
                          <label class="form-label mb-0">Total Price:</label> <div class="align-self-center text-black">$00.00</div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="row mb-4">
                          <label class="form-label mb-lg-0 col-lg-6 align-self-center">Enter Override Amount:</label>
                          <div class="col-lg-3">
                            <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                          </div>
                          <div class="col-lg-3 align-self-center">
                            <a href="#" class="btn btn-primary btn-sm rounded w-100">Apply</a>
                          </div>
                        </div>
                        <!-- Payment Preference -->
                        <div class="row mb-4">
                          <h2>Payment Preference:</h2>
                          <div class="mb-4">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" id="PayLater" name="PaymentPreference" type="radio" tabindex="" />
                              <label class="form-check-label" for="PayLater"> Pay Later</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" id="PayNow" name="PaymentPreference" type="radio" tabindex="" />
                              <label class="form-check-label" for="PayNow"> Pay Now</label>
                            </div>
                          </div>
                          <div class="input-group mb-3">
                            <input type="" name="" class="form-control form-control-md" placeholder="Enter Card number">
                            <input type="" name="" class="form-control form-control-md text-center" placeholder="MM/YY">
                            <input type="" name="" class="form-control form-control-md text-center" placeholder="CVC">
                          </div>
                          <div class="text-lg-end">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" id="SaveforFuturePayments" name="PaymentPreference" type="checkbox" tabindex="" />
                              <label class="form-check-label" for="SaveforFuturePayments"> Save for Future Payments</label>
                            </div>
                          </div>
                        </div>
                        <!-- /Payment Preference -->
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-11">
                        <div class="row mb-4">
                          <div class="col-lg-6 mb-4">
                            <!-- Provider Notes -->
                            <div class="my-5">
                              <label class="form-label">
                                Provider Notes
                              </label>
                              <textarea class="form-control" rows="4" cols="4"></textarea>
                            </div>
                            <!-- /Provider Notes -->
                          </div>
                          <div class="col-lg-6 mb-4">
                            <!-- Customer Notes -->
                            <div class="my-5">
                              <label class="form-label">
                                Customer Notes
                              </label>
                              <textarea class="form-control" rows="4" cols="4"></textarea>
                            </div>
                            <!-- /Customer Notes -->
                          </div>
                          <div class="col-lg-6 mb-4">
                            <!-- Private Notes -->
                            <div class="my-5">
                              <label class="form-label">
                                Private Notes
                              </label>
                              <textarea class="form-control" rows="4" cols="4"></textarea>
                            </div>
                            <!-- /Private Notes -->
                          </div>
                          <div class="col-lg-6 mb-4">
                            <!-- Tags -->
                            <div class="my-5">
                              <label class="form-label">
                                Tags
                              </label>
                              <select x-cloak id="select">
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                                <option value="4">Option 4</option>
                                <option value="5">Option 5</option>
                              </select>
      
                              <div x-data="dropdown()" x-init="loadOptions()" class="form-control multi-select-dropdown mb-2">
                                <input name="values" type="hidden" x-bind:value="selectedValues()">
                                <div class="inline-block position-relative w-100">
                                  <div class="d-flex flex-column align-items-center position-relative">
                                    <div x-on:click="open" class="w-100">
                                      <div class="d-flex justify-content-between">
                                        <div class="d-flex flex-auto flex-wrap gap-2">
                                          <template x-for="(option,index) in selected" :key="options[option].value">
                                            <div class="d-flex justify-content-center align-items-center py-1 px-1 bg-white rounded border">
                                              <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                                              <div class="d-flex flex-auto flex-row-reverse">
                                                <div class="btn btn-hs-icon p-0" x-on:click.stop="remove(index,option)">
                                                  <svg class="fill-current h-4 w-4 " role="button" viewBox="0 0 20 20">
                                                    <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0 c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183 l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15 C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                  </svg>
                                                </div>
                                              </div>
                                            </div>
                                          </template>
                                          <div x-show="selected.length == 0" class="flex-1">
                                            <input placeholder="Select a option" class="form-control border-0 p-0" x-bind:value="selectedValues()">
                                          </div>
                                        </div>
                                        <div class="svelte-1l8159u d-flex align-items-center">
      
                                          <button type="button" x-show="isOpen() === true" x-on:click="open" class="btn btn-hs-icon p-0">
                                            <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                              <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83 c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z " />
                                            </svg>
      
                                          </button>
                                          <button type="button" x-show="isOpen() === false" @click="close" class="btn btn-hs-icon p-0">
                                            <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                              <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83 c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25 L17.418,6.109z" />
                                            </svg>
      
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="w-100 px-0">
                                      <div x-show.transition.origin.top="isOpen()" class="position-absolute shadow top-100 bg-white z-40 w-100 left-0 rounded max-h-select" x-on:click.away="close">
                                        <div class="d-flex flex-column w-100 overflow-y-auto options-container">
                                          <template x-for="(option,index) in options" :key="option" class="overflow-auto">
                                            <div class="cursor-pointer w-100 border-gray-100 rounded-t border-b hover:bg-gray-100" @click="select(index,$event)">
                                              <div class="d-flex w-100 items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                <div class="w-100 d-flex justify-content-between align-items-center">
                                                  <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                  <div x-show="option.selected">
                                                    <svg class="svg-icon" viewBox="0 0 20 20">
                                                      <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087 C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087 L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                                    </svg>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </template>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-lg-flex flex-wrap gap-3 mb-3">
                                <div class="tag">@admin_company</div>
                                <div class="tag">@booking_start_at</div>
                                <div class="tag">@consumer</div>
                                <div class="tag">@booking_end_at</div>
                                <div class="tag">@booking_duration</div>
                              </div>
                              <div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" id="Requester" name="" type="checkbox" tabindex="" />
                                  <label class="form-check-label" for="Requester">Requester</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" id="ServiceConsumers" name="" type="checkbox" tabindex="" />
                                  <label class="form-check-label" for="ServiceConsumers">Service Consumer(s)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" id="Participants" name="" type="checkbox" tabindex="" />
                                  <label class="form-check-label" for="Participants">Participant(s)</label>
                                </div>
                              </div>
                            </div>
                            <!-- /Tags -->
                          </div>
                        </div>
                        <!-- Add Document -->
                        <div class="row">
                          <div class="col-lg-3 mb-4">
                            <a href="#" class="btn btn-primary rounded btn-has-icon w-100">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"></path>
                              </svg>
                              Add Document
                            </a>
                          </div>
                          <div class="row">
                            <div class="col-2">
                              <img src="images/img-placeholder-document.jpg" alt="img-placeholder-document" class="w-100">
                              <p class="font-family-secondary"><small>File Name</small></p>
                            </div>
                            <div class="col-2">
                              <img src="images/img-placeholder-document.jpg" alt="img-placeholder-document" class="w-100">
                              <p class="font-family-secondary"><small>File Name</small></p>
                            </div>
                          </div>
                        </div>
                        <!-- /Add Document -->
                      </div>
                    </div>
                    <div class="col-12 justify-content-center form-actions d-flex">
                      <button type="button"
                        class="btn btn-outline-dark rounded" x-on:click="$wire.switch('request-details')">Back</button>
                        <button type="button"
                        class="btn btn-primary rounded mx-2" x-on:click="$wire.switch('booking-summary')">Booking Summary</button>
                    </div>
                  </div>
                  <div class="tab-pane fade {{ $component == 'booking-summary' ? 'active show' : '' }}" id="booking-summary" role="tabpanel" aria-labelledby="booking-summary-tab" tabindex="0">
                    <!-- Scheduling Details -->
                    <div class="mb-5">
                      <h2>Scheduling Details</h2>
                      <div class="d-flex flex-column gap-3 mt-5">
                        <div class="row">
                          <div class="col-lg-3">
                            <label class="col-form-label">Date & Time:</label>
                          </div>
                          <div class="col-lg-9 align-self-center">
                            <div class="font-family-tertiary">(10/25/2022 13:35 - 10/25/2022 13:35)</div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-3">
                            <label class="col-form-label">Frequency:</label>
                          </div>
                          <div class="col-lg-9 align-self-center">
                            <div class="font-family-tertiary">One-Time Request</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Scheduling Details -->
                    <!-- Service Request -->
                    <div class="mb-5">
                      <h2>Service Request (10/25/2022 13:35 - 10/25/2022 13:35)</h2>
                      <!-- Services 1 -->
                      <div class="my-5">
                        <h2>Services 1</h2>
                        <div class="d-flex flex-column gap-3">
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Accommodation:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">Sign Language Interpreting Services</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Service:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">English to Arabic Sign Language</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Specialization:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">Medical, Conference</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Service Type:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">In person</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Number of Providers:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">13</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Total Billable Time:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">1 hour(s) 0 minute(s)</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Total Cost:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">$00.00</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /Services 1 -->
                      <!-- Services 2 -->
                      <div class="my-5">
                        <h2>Services 2</h2>
                        <div class="d-flex flex-column gap-3">
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Accommodation:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">Sign Language Interpreting Services</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Service:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">English to Arabic Sign Language</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Specialization:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">Medical, Conference</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Service Type:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">In person</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Number of Providers:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">13</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Service Consumer:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">John Wick</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Participant(s):</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">Scott Hall</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Total Billable Time:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">1 hour(s) 0 minute(s)</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Total Cost:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">$00.00</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /Services 2 -->
                      <!-- Service Billing -->
                      <div class="my-5">
                        <h2>Service Billing</h2>
                        <div class="d-flex flex-column gap-3">
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Total Service Rate:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">$6,500.00</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Differentials:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">$70.00</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Specializations:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">$70.00</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label">Total Service Charges:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary">$26.00</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-3">
                              <label class="col-form-label fw-semibold">Service Total:</label>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="font-family-tertiary fw-medium">$6,596.00</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /Service Billing -->
                      <!-- Booking Total -->
                      <div class="my-5">
                        <h2>Booking Total</h2>
                        <div class="d-flex flex-column gap-3">
                          <div class="row">
                            <div class="col-lg-4">
                              <label class="col-form-label">Total Service Rate:</label>
                            </div>
                            <div class="col-lg-8 align-self-center">
                              <div class="font-family-tertiary">$6,500.00</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                              <label class="col-form-label">Total Differentials:</label>
                            </div>
                            <div class="col-lg-8 align-self-center">
                              <div class="font-family-tertiary">$70.00</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                              <label class="col-form-label">Total Service Charges:</label>
                            </div>
                            <div class="col-lg-8 align-self-center">
                              <div class="font-family-tertiary">$27.00</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4">
                              <label class="col-form-label">Additional Customer Charges:</label>
                            </div>
                            <div class="col-lg-8 align-self-center">
                              <div class="font-family-tertiary">$26.00</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /Booking Total -->
                      <!-- Gross Total -->
                      <div class="my-5">
                        <div class="d-flex flex-column gap-3">
                          <div class="row">
                            <div class="col-lg-2">
                              <div class="fw-semibold text-primary fs-5 font-family-tertiary">Gross Total:</div>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="fw-semibold text-primary fs-5 font-family-tertiary">$6,500.00</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-2">
                              <div class="fw-semibold text-primary fs-5 font-family-tertiary">Discount:</div>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="fw-semibold text-primary fs-5 font-family-tertiary">$00.00</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-2">
                              <div class="fw-semibold text-primary fs-5 font-family-tertiary">Net Total:</div>
                            </div>
                            <div class="col-lg-9 align-self-center">
                              <div class="fw-semibold text-primary fs-5 font-family-tertiary">$6,596.00</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /Gross Total -->
                      <!-- Assign Admin-Staff & admin-Staff Team -->
                      <div class="my-5">
                        <div class="form-check">
                          <input class="form-check-input" id="AssignAdminStaff&adminStaffTeam" name="" type="checkbox" tabindex="" />
                          <label class="form-check-label" for="AssignAdminStaff&adminStaffTeam">Assign Admin-Staff & admin-Staff Team</label>
                        </div>
                        <div class="d-lg-flex gap-2 mb-4">
                          <a href="#" class="btn btn-outline-dark btn-sm rounded">
                            Assign Admin-Staff
                          </a>
                          <!-- Programming note: only show on admin-end -->
                          <a href="#" class="btn btn-primary btn-sm rounded">
                            Assign Admin-Staff Team
                          </a>
                          <!-- /Programming note: only show on admin-end -->
                        </div>
                        <!-- Programming note: only show on admin-end -->
                        <div class="col-lg-6">
                          <div class="d-flex justify-content-end mb-1">
                            <a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                              </svg>
                            </a>
                          </div>
                          <table class="table table-hover border">
                            <thead>
                              <tr>
                                <th class="align-middle">
                                  <div class="form-check">
                                    <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                  </div>
                                </th>
                                <th class="align-middle">
                                  ADMIN-STAFF TEAM
                                </th>
                                <th class="align-middle">
                                  PERMISSION
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="align-middle">
                                  <div class="form-check">
                                    <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                  </div>
                                </td>
                                <td class="align-middle">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div>
                                      <img width="50" height="50" src="/tenant/images/portrait/small/image.png" class="rounded-circle" alt="Image">
                                    </div>
                                    <div class="pt-2">
                                      <div class="font-family-secondary leading-none">Fast Talkers</div>
                                      <a href="#" class="font-family-secondary"><small>fasttalker@gmail.com</small></a>
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">
                                  <div class="form-check form-switch">
                                      <label class="form-check-label" for="Visible">Visible</label>
                                      <input class="form-check-input" type="checkbox" role="switch" id="Visible">
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td class="align-middle">
                                  <div class="form-check">
                                    <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                                  </div>
                                </td>
                                <td class="align-middle">
                                  <div class="d-flex gap-2 align-items-center">
                                    <div>
                                      <img width="50" height="50" src="/tenant/images/portrait/small/image.png" class="rounded-circle" alt="Image">
                                    </div>
                                    <div class="pt-2">
                                      <div class="font-family-secondary leading-none">Fast Talkers</div>
                                      <a href="#" class="font-family-secondary"><small>fasttalker@gmail.com</small></a>
                                    </div>
                                  </div>
                                </td>
                                <td class="align-middle">
                                  <div class="form-check form-switch">
                                      <label class="form-check-label" for="Manage">Manage</label>
                                      <input checked class="form-check-input" type="checkbox" role="switch" id="Manage">
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- Programming note: only show on admin-end -->
                      </div>
                      <!-- /Assign Admin-Staff & admin-Staff Team -->
                      <!-- Checkbox Options -->
                      <div class="d-grid grid-cols-3 gap-2 my-5 col-lg-10">
                        <div class="form-check">
                          <input class="form-check-input" id="ExcludeAllNotifications" name="" type="checkbox" tabindex="">
                          <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeAllNotifications">Exclude All Notifications</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="ExcludeParticipantNotifications" name="" type="checkbox" tabindex="">
                          <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeParticipantNotifications">Exclude Participant Notifications</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="ExcludeRequesterNotifications" name="" type="checkbox" tabindex="">
                          <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeRequesterNotifications">Exclude Requester Notifications</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="ExcludeProviderNotifications" name="" type="checkbox" tabindex="">
                          <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeProviderNotifications">Exclude Provider Notifications</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="ExcludeServiceConsumerNotifications" name="" type="checkbox" tabindex="">
                          <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeServiceConsumerNotifications">Exclude Service Consumer Notifications</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" id="ExcludeAdminNotifications" name="" type="checkbox" tabindex="">
                          <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeAdminNotifications">Exclude Admin Notifications</label>
                        </div>
                      </div>
                      <!-- /Checkbox Options -->
                      <div class="col-12 justify-content-center form-actions d-flex gap-3">
                        <button type="button" class="btn btn-outline-dark rounded" x-on:click="$wire.switch('payment-info')">Back</button>
                        <button type="" class="btn btn-primary rounded">Save as Draft</button>
                        <button type="" class="btn btn-primary rounded">Request Feedback</button>
                        <div class="dropdown">
                          <button type="" class="btn btn-primary rounded dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Confirm</button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Confirm + Invite</a></li>
                            <li><a class="dropdown-item" href="#">Confirm + Assign</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- /Service Request -->
                  </div>
            </div>
        </div>
        <!-- End: Content-->
    </div>


</div>