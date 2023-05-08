<div x-data="{ addDocuments:false}">
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <!-- BEGIN: Assignment Booking Form -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'requester-info' ? 'active' : '' }}"
                            id="requester-info-tab" data-bs-toggle="tab" data-bs-target="#requester-info" type="button"
                            role="tab" aria-controls="requester-info" aria-selected="true"><span class="number">1</span>
                            Requester Info</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'request-details' ? 'active' : '' }}"
                            id="request-details-tab" data-bs-toggle="tab" data-bs-target="#request-details"
                            type="button" role="tab" aria-controls="request-details" aria-selected="false"><span
                                class="number">2</span>
                            Request Details</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'payment-info' ? 'active' : '' }}"
                            id="payment-info-tab" data-bs-toggle="tab" data-bs-target="#payment-info" type="button"
                            role="tab" aria-controls="payment-info" aria-selected="false"><span class="number">3</span>
                            Payment
                            Info</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $component == 'booking-summary' ? 'active' : '' }}"
                            id="booking-summary-tab" data-bs-toggle="tab" data-bs-target="#booking-summary"
                            type="button" role="tab" aria-controls="booking-summary" aria-selected="false"><span
                                class="number">4</span>
                            Booking Summary</button>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade {{ $component == 'requester-info' ? 'active show' : '' }}"
                        id="requester-info" role="tabpanel" aria-labelledby="requester-info-tab" tabindex="0">
                        {{-- updated by shanila to add csrf and add form tag --}}
                        <form class="form">
                            @csrf
                            <h2>Requester Information</h2>
                            <div class="mb-4">
                                <label class="form-label form-label-highlighted">Permitted Scheduling
                                    Frequencies <i class="fa fa-question-circle text-muted" aria-hidden="true"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                                <div class="d-flex gap-3 flex-column flex-lg-row mb-0">
                                    {{-- updated by shanila to add dropdown --}}
                                    {!! App\Helpers\SetupHelper::createRadio('SetupValue', 'id',
                                    'setup_value_label', 'setup_id', '6', 'id','',1,'form-check-input ')
                                    !!}

                                    {{-- ended update --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="row between-section-segment-spacing">
                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="form-label" for="company-column">Company <span class="mandatory">*</span></label>
                                            <a href="#" class="fw-bold">
                                                <small>
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Add New" class="me-1" width="20" height="21"
                                                        viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#add-new"></use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    Add New Company
                                                </small>
                                            </a>
                                        </div>
                                        <select class="form-select" id="company-column">
                                            <option>Select Company</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 mb-4 ps-lg-5">
                                        <label class="form-label">Department <span class="mandatory">*</span></label>
                                        <div>
                                            <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                data-bs-toggle="modal" data-bs-target="#departmentModal" aria-label="Department">
                                                {{-- Updated by Shanila to Add svg icon--}}
                                                <svg aria-label=" Select Department" width="25" height="18"
                                                    viewBox="0 0 25 18">
                                                    <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                    </use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                Select Department
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                        <label class="form-label" >Industry <span class="mandatory">*</span></label>
                                        <div>
                                            <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup"
                                                data-bs-toggle="modal" data-bs-target="#industryModal" aria-label="Industry">
                                                {{-- Updated by Shanila to Add svg icon--}}
                                                <svg aria-label=" Select Industry" width="25" height="18"
                                                    viewBox="0 0 25 18">
                                                    <use xlink:href="/css/common-icons.svg#right-color-arrow">
                                                    </use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                Select Industry
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4 ps-lg-5">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label class="form-label" for="requestor">Requester <span class="mandatory">*</span></label>
                                            <a href="#" class="fw-bold" data-bs-toggle="modal"
                                                data-bs-target="#addNewCustomer" aria-label="Requester">
                                                <small>
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Add New Requester" class="me-1" width="20" height="21"
                                                        viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#add-new"></use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    Add New Requester
                                                </small>
                                            </a>
                                        </div>
                                        <select class="form-select mb-2" id="requestor">
                                            <option>Select Requester</option>
                                        </select>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="HideRequesterInfofromProviders"
                                                name="HideRequesterInfofromProviders" type="checkbox" tabindex="" />
                                            <label class="form-check-label" for="HideRequesterInfofromProviders"><small>Hide
                                                    Requester's Info from Providers</small></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                        <label class="form-label" for="point-of-contact">Point of Contact <span class="mandatory">*</span></label>
                                        <input type="" class="form-control" placeholder="Enter Name" id="point-of-contact">
                                    </div>
                                    <div class="col-lg-6 mb-4 ps-lg-5">
                                        <label class="form-label" for="ph-number">Phone Number <span class="mandatory">*</span></label>
                                        <input type="" class="form-control" placeholder="Enter Phone Number" id="ph-number">
                                    </div>
                                </div>
                                <div class="row between-section-segment-spacing">
                                    <div class="col-lg-12 mb-4">
                                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                                            <div class="form-check form-switch form-switch-column mb-lg-0">
                                                <input class="form-check-input" type="checkbox" role="switch" id=""
                                                    checked aria-label="Add Supervisor & Billing Manager">
                                            </div>
                                            <h3 class="mb-lg-0">Add Supervisor & Billing Manager</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 pe-lg-5">
                                                <label class="form-label" for="supervisor">Supervisor <span
                                                        class="mandatory">*</span></label>
                                                <select class="form-select" id="supervisor">
                                                    <option>Select Supervisor</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 ps-lg-5">
                                                <label class="form-label" for="billing-manager">Billing Manager</label>
                                                <select class="form-select" id="billing-manager">
                                                    <option>Select Billing Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Information -->
                                <div class="col-lg-12 mb-4">
                                    <h2>Service Information</h2>
                                    <div class="duplicate-block mb-3">
                                        <h2>Services 1</h2>
                                        <div class="row">
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label">Accommodation <span
                                                        class="mandatory">*</span></label>
                                                {{-- Updated by Shanila to add dropdown--}}
                                                {!! App\Helpers\SetupHelper::createDropDown('Accommodation', 'id',
                                                'name', '', '', 'name', false, 'accommodation',
                                                '','accommodation') !!}
                                                {{-- End of update by Shanila --}}
                                            </div>
                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <label class="form-label" for="service">Service <span class="mandatory">*</span> <i
                                                        class="fa fa-question-circle text-muted" aria-hidden="true"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title=""></i></label>
                                                <select class="form-select" id="service">
                                                    <option>Select Service</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label">Service Type <span
                                                        class="mandatory">*</span></label>
                                                <div class="d-grid grid-cols-3">
                                                    {{-- updated by shanila to add dropdown --}}
                                                    {!! App\Helpers\SetupHelper::createRadio('SetupValue', 'id',
                                                    'setup_value_label', 'setup_id', '5', 'id','',1,'form-check-input ')
                                                    !!}
                                                    {{--ended updated--}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                <label class="form-label">Specializations</label>
                                                <div class="">
                                                    {{-- updated by shanila to add dropdown --}}
                                                    {!! App\Helpers\SetupHelper::createCheckboxes('Specialization',
                                                    'id',
                                                    'name', 'status', 1, 'name', [],1,'form-check') !!}
                                                    {{--ended updated--}}
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-4 pe-lg-5">
                                                <label class="form-label" for="number-of-providers">Number of Providers <span
                                                        class="mandatory">*</span></label>
                                                <input type="" class="form-control"
                                                    placeholder="Enter Number of Providers" id="number-of-providers">
                                            </div>
                                            <div class="d-lg-flex align-items-center mb-4 gap-3">
                                                <div class="form-check form-switch form-switch-column mb-lg-0">
                                                    <input class="form-check-input" type="checkbox" role="switch" id=""
                                                        checked aria-label="Add Consumers & Participants">
                                                </div>
                                                <h2 class="mb-lg-0 text-dark">Add Consumers & Participants</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Services Duplicate Block -->
                                    <div class="duplicate-block mb-3">

                                        <div class="row">


                                            <div class="col-lg-12 mb-4">

                                                <div class="row mb-4 d-flex">
                                                    <div class="col-lg-11 align-self-center d-flex">
                                                        <h2 class="mb-lg-0">Services 2</h2>
                                                    </div>
                                                    <div class="col-lg" style="margin-left: 37px">
                                                        <a href="#" title="Delete" aria-label="Delete"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/customer.svg#delete-icon"></use>
                                                            </svg>
                                                        </a>

                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                                        <label class="form-label">Accommodation <span
                                                                class="mandatory">*</span></label>
                                                        {!! App\Helpers\SetupHelper::createDropDown('Accommodation',
                                                        'id',
                                                        'name', '', '', 'name', false, 'accommodation',
                                                        '','accommodation') !!}
                                                    </div>
                                                    <div class="col-lg-6 mb-4 ps-lg-5">
                                                        <label class="form-label" for="service-column">Service <span
                                                                class="mandatory">*</span>
                                                            <i class="fa fa-question-circle text-muted"
                                                                aria-hidden="true" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title=""></i></label>
                                                        <select class="form-select" id="service-column">
                                                            <option>Select Service</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                                        <label class="form-label">Service Type <span
                                                                class="mandatory">*</span></label>
                                                        <div class="d-grid grid-cols-3">
                                                            {{-- updated by shanila to add dropdown --}}
                                                            {!! App\Helpers\SetupHelper::createRadio('SetupValue', 'id',
                                                            'setup_value_label', 'setup_id', '5',
                                                            'id','',1,'form-check-input ')
                                                            !!}
                                                            {{--ended updated--}}
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4 ps-lg-5">
                                                        <label class="form-label">Specializations</label>
                                                        <div class="">
                                                            {{-- updated by shanila to add dropdown --}}
                                                            {!!
                                                            App\Helpers\SetupHelper::createCheckboxes('Specialization',
                                                            'id',
                                                            'name', 'status', 1, 'name', [],1,'form-check') !!}
                                                            {{--ended updated--}}
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mb-4 pe-lg-5">
                                                        <label class="form-label" for="numberofproviders">Number of Providers <span
                                                                class="mandatory">*</span></label>
                                                        <input type="" class="form-control"
                                                            placeholder="Enter Number of Providers" id="numberofproviders">
                                                    </div>
                                                    <div class="col-lg-12 mb-4">
                                                        <div class="d-lg-flex align-items-center mb-4 gap-3">
                                                            <div
                                                                class="form-check form-switch form-switch-column mb-lg-0">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="" checked aria-label="Add Consumers & Participants">
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
                                                                        {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Additional Parameter" class="me-1" width="20" height="21" viewBox="0 0 20 21">
                                                                                            <use xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- end updated by Sana --}}
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
                                                                            id="ManualEntryServiceConsumer" name=""
                                                                            type="checkbox" tabindex="">
                                                                        <label class="form-check-label"
                                                                            for="ManualEntryServiceConsumer"><small>Manual
                                                                                Entry</small></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 mb-4 ps-lg-5">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <label class="form-label">Participant(s)</label>
                                                                    <a href="#" class="fw-bold">
                                                                        <small>
                                                                        {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Additional Parameter" class="me-1" width="20" height="21" viewBox="0 0 20 21">
                                                                                            <use xlink:href="/css/common-icons.svg#add-new">
                                                                                            </use>
                                                                                        </svg>
                                                                                        {{-- end updated by Sana --}}
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
                                                                            id="ManualEntryParticipant" name=""
                                                                            type="checkbox" tabindex="">
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
                                                                            {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Manually" width="24" height="19" viewBox="0 0 24 19" fill="none">
                                                            <use xlink:href="/css/common-icons.svg#check-add"></use> </svg>
                                                            {{-- end updated by Sana --}} 
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
                                                            <div class="row mb-4 d-flex">
                                                                <div class="col-lg-11 align-self-center d-flex">
                                                                    <h2 class="mb-lg-0">Meeting Link 1</h2>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 mb-3">
                                                                    <label class="form-label" for="meetingName">Meeting
                                                                        Name</label>
                                                                    <input type="" class="form-control"
                                                                        placeholder="Enter Meeting Name" id="meetingName">
                                                                </div>
                                                                <div class="col-lg-4 mb-3">
                                                                    <label class="form-label" for="phoneNumber">Phone
                                                                        Number</label>
                                                                    <input type="" class="form-control"
                                                                        placeholder="Enter Phone Number" id="phoneNumber">
                                                                </div>
                                                                <div class="col-lg-4 mb-3">
                                                                    <label class="form-label" for="accessCode">Access
                                                                        Code</label>
                                                                    <input type="" class="form-control"
                                                                        placeholder="Enter Access Code" id="accessCode">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row border-dashed rounded p-3 mb-3">
                                                            <div class="row mb-4 d-flex">
                                                                <div class="col-lg-11 align-self-center d-flex">
                                                                    <h2 class="mb-lg-0">Meeting Link 2</h2>
                                                                </div>
                                                                <div class="col-lg" style="margin-left: 37px">
                                                                    <a href="#" title="Edit Company"
                                                                        aria-label="Edit Company"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <use
                                                                                xlink:href="/css/customer.svg#delete-icon">
                                                                            </use>
                                                                        </svg>
                                                                    </a>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 mb-3">
                                                                    <label class="form-label" for="meeting-name">Meeting
                                                                        Name</label>
                                                                    <input type="" class="form-control"
                                                                        placeholder="Enter Meeting Name" id="meeting-name">
                                                                </div>
                                                                <div class="col-lg-4 mb-3">
                                                                    <label class="form-label" for="phnumber">Phone
                                                                        Number</label>
                                                                    <input type="" class="form-control"
                                                                        placeholder="Enter Phone Number" id="phnumber">
                                                                </div>
                                                                <div class="col-lg-4 mb-3">
                                                                    <label class="form-label" for="AcessCode">Access
                                                                        Code</label>
                                                                    <input type="" class="form-control"
                                                                        placeholder="Enter Access Code" id="AcessCode">
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-end">
                                                                <div class="col-lg-2">
                                                                    <a href="#"
                                                                        class="btn btn-primary rounded btn-has-icon w-100">
                                                                        <svg aria-label="Add Link" width="20" height="20" viewBox="0 0 20 20"
                                                                            fill="none"
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
                                            </div>

                                            <!-- /Services Duplicate Block -->
                                            <div class="row justify-content-end">
                                                <div class="col-lg-3">
                                                    <a href="#" class="btn btn-primary rounded btn-has-icon w-100">
                                                        <svg aria-label="Add Service" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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
                                        <div class="row between-section-segment-spacing">
                                            <!-- Select Dates & Times -->
                                            <div class="col-lg-12 mb-4">
                                                <h2>Select Dates & Times</h2>
                                                <!-- Select Dates & Times Duplicate Block -->
                                                <div class="duplicate-block">
                                                    <div class="row mb-4 d-flex">
                                                        <div class="col-lg-11 align-self-center d-flex">
                                                            <h2 class="mb-lg-0">Date & Time 1</h2>
                                                        </div>

                                                    </div>
                                                    <div class="d-lg-flex gap-5 mb-4">
                                                        <div class="col-lg-3">
                                                            <label class="form-label-sm" for="set_time_zone">Set
                                                                Time Zone <span class="mandatory">*</span></label>
                                                            {{-- updated by shanila to add dropdown --}}
                                                            {!! App\Helpers\SetupHelper::createDropDown('SetupValue',
                                                            'id',
                                                            'setup_value_label', 'setup_id', 4, 'setup_value_label',
                                                            false, 'timezone',
                                                            '','timezone') !!}
                                                            {{-- end updated --}}
                                                        </div>
                                                        <div class="">
                                                            <label class="form-label-sm" for="start_date">Set Date
                                                                <span class="mandatory">*</span></label>
                                                            <div class="position-relative">
                                                                <input type="" name=""
                                                                    class="form-control form-control-md js-single-date"
                                                                    placeholder="Select Date" id="start_date"
                                                                    aria-label="Set Start Date">
                                                                    {{-- updated Sana to change x-icon to svg --}}
                            <svg aria-label="Input-calender" class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20"><use xlink:href="/css/common-icons.svg#input-calender"></use></svg>
                            {{-- end updated by Sana --}} 
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="d-flex flex-column justify-content-between">
                                                                <label class="form-label-sm" for="start_time">Start
                                                                    Time</label>
                                                                <div class="d-flex gap-2">
                                                                    <div class="time d-flex align-items-center gap-2">
                                                                        <div class="hours">12</div>
                                                                        {{-- updated Sana to change x-icon to svg --}}
                                                                        <svg aria-label="colon" width="5" height="19" viewBox="0 0 5 19">
                                                                <use xlink:href="/css/common-icons.svg#date-colon"> </use></svg>
                                                                {{-- end updated by Sana --}} 
                                                                        <div class="mins">59</div>
                                                                    </div>
                                                                    <div
                                                                        class="form-check form-switch form-switch-column mb-0">
                                                                        <input checked class="form-check-input"
                                                                            type="checkbox" role="switch"
                                                                            id="startTimeAMPM" aria-label="AM PM Toggle">
                                                                        <label class="form-check-label"
                                                                            for="startTimeAMPM">AM</label>
                                                                        <label class="form-check-label"
                                                                            for="startTimeAMPM">PM</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <label class="form-label-sm" for="set_end_date-column">Set
                                                                Date <span class="mandatory">*</span></label>
                                                            <div class="position-relative">
                                                                <input type="" name=""
                                                                    class="form-control form-control-md js-single-date"
                                                                    placeholder="Select Date" id="set_end_date-column"
                                                                    aria-label="Set End Date">
                                                                    {{-- updated Sana to change x-icon to svg --}}
                            <svg aria-label="Input-calender" class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20"><use xlink:href="/css/common-icons.svg#input-calender"></use></svg>
                            {{-- end updated by Sana --}} 
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="d-flex flex-column justify-content-between">
                                                                <label class="form-label-sm" for="set_start_time">End
                                                                    Time</label>
                                                                <div class="d-flex gap-2">
                                                                    <div class="time d-flex align-items-center gap-2">
                                                                        <div class="hours">12</div>
                                                                        {{-- updated Sana to change x-icon to svg --}}
                                                                        <svg aria-label="colon" width="5" height="19" viewBox="0 0 5 19">
                                                                <use xlink:href="/css/common-icons.svg#date-colon"> </use></svg>
                                                                {{-- end updated by Sana --}} 
                                                                        <div class="mins">59</div>
                                                                    </div>
                                                                    <div
                                                                        class="form-check form-switch form-switch-column mb-0">
                                                                        <input checked class="form-check-input"
                                                                            type="checkbox" role="switch"
                                                                            id="endTimeAMPM" aria-label="AM PM Toggle">
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
                                                                for="days">Days</label>
                                                            <input type=""
                                                                class="form-control form-control-md text-center"
                                                                aria-label="Days" placeholder="0"
                                                                id="days">
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
                                                    <div class="row mb-4 d-flex">
                                                        <div class="col-lg-11 align-self-center d-flex">
                                                            <h2 class="mb-lg-0">Date & Time 2</h2>
                                                        </div>
                                                        <div class="col-lg" style="margin-left: 25px">
                                                            <a href="#" title="Delete" aria-label="Delete"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/customer.svg#delete-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>

                                                        </div>
                                                    </div>
                                                    <div class="d-lg-flex gap-5 mb-4">
                                                        <div class="col-lg-3">
                                                            <label class="form-label-sm" for="set_time_zone">Set
                                                                Time Zone <span class="mandatory">*</span></label>
                                                            {{-- updated by shanila to add dropdown --}}
                                                            {!! App\Helpers\SetupHelper::createDropDown('SetupValue',
                                                            'id',
                                                            'setup_value_label', 'setup_id', 4, 'setup_value_label',
                                                            false, 'timezone',
                                                            '','timezone') !!}
                                                            {{-- end updated --}}
                                                        </div>
                                                        <div class="">
                                                            <label class="form-label-sm" for="set_start_date">Set Date
                                                                <span class="mandatory">*</span></label>
                                                            <div class="position-relative">
                                                                <input type="" name=""
                                                                    class="form-control form-control-md js-single-date"
                                                                    placeholder="Select Date" id="set_start_date"
                                                                    aria-label="Set Start Date">
                                                                    {{-- updated Sana to change x-icon to svg --}}
                            <svg aria-label="Input-calender" class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20"><use xlink:href="/css/common-icons.svg#input-calender"></use></svg>
                            {{-- end updated by Sana --}} 
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="d-flex flex-column justify-content-between">
                                                                <label class="form-label-sm" for="set_start_time">Start
                                                                    Time</label>
                                                                <div class="d-flex gap-2">
                                                                    <div class="time d-flex align-items-center gap-2">
                                                                        <div class="hours">12</div>
                                                                        {{-- updated Sana to change x-icon to svg --}}
                                                                        <svg aria-label="colon" width="5" height="19" viewBox="0 0 5 19">
                                                                <use xlink:href="/css/common-icons.svg#date-colon"> </use></svg>
                                                                {{-- end updated by Sana --}} 
                                                                        <div class="mins">59</div>
                                                                    </div>
                                                                    <div
                                                                        class="form-check form-switch form-switch-column mb-0">
                                                                        <input checked class="form-check-input"
                                                                            type="checkbox" role="switch"
                                                                            id="startTimeAMPM" aria-label="AM PM Toggle">
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
                                                               
                                                                    {{-- updated Sana to change x-icon to svg --}}
                            <svg aria-label="Input-calender" class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20"><use xlink:href="/css/common-icons.svg#input-calender"></use></svg>
                            {{-- end updated by Sana --}} 
                                                            </div>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="d-flex flex-column justify-content-between">
                                                                <label class="form-label-sm" for="set_start_time">End
                                                                    Time</label>
                                                                <div class="d-flex gap-2">
                                                                    <div class="time d-flex align-items-center gap-2">
                                                                        <div class="hours">12</div>
                                                                        {{-- updated Sana to change x-icon to svg --}}
                                                                        <svg aria-label="colon" width="5" height="19" viewBox="0 0 5 19">
                                                                <use xlink:href="/css/common-icons.svg#date-colon"> </use></svg>
                                                                {{-- end updated by Sana --}} 
                                                                        <div class="mins">59</div>
                                                                    </div>
                                                                    <div
                                                                        class="form-check form-switch form-switch-column mb-0">
                                                                        <input checked class="form-check-input"
                                                                            type="checkbox" role="switch"
                                                                            id="endTimeAMPM" aria-label="AM PM Toggle">
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
                                        </div>
                                        <!-- Physical Address -->
                                        <div class="row between-section-segment-spacing">
                                            <div class="col-lg-6 mb-4 align-self-center">
                                                <h2 class="mb-lg-0">Physical Address</h2>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6 mb-4">
                                                        <a href="#" class="btn btn-primary rounded w-100 btn-has-icon">
                                                        {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Manually" width="24" height="19" viewBox="0 0 24 19" fill="none">
                                                            <use xlink:href="/css/common-icons.svg#check-add"></use> </svg>
                                                            {{-- end updated by Sana --}} 
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
                                                        <a href="#" class="btn btn-primary btn-sm rounded">End
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
                                                            data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                                            {{-- updated Sana to change x-icon to svg --}}
                                                            <svg class="mx-2" aria-label="Add New Address" width="20" height="20" viewBox="0 0 20 20">
								<use xlink:href="/css/common-icons.svg#plus"></use></svg>
                            {{-- end updated by Sana --}} 
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
                                                                {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Manually" width="24" height="19" viewBox="0 0 24 19" fill="none">
                                                            <use xlink:href="/css/common-icons.svg#check-add"></use> </svg>
                                                            {{-- end updated by Sana --}} 
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
                                                                {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Manually" width="24" height="19" viewBox="0 0 24 19" fill="none">
                                                            <use xlink:href="/css/common-icons.svg#check-add"></use> </svg>
                                                            {{-- end updated by Sana --}} 
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
                                                                {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Manually" width="24" height="19" viewBox="0 0 24 19" fill="none">
                                                            <use xlink:href="/css/common-icons.svg#check-add"></use> </svg>
                                                            {{-- end updated by Sana --}} 
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
                                                        <a href="#" class="btn btn-primary btn-sm rounded">End
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
                                                            data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                                            {{-- updated Sana to change x-icon to svg --}}
                                                            <svg class="mx-2" aria-label="Add New Address" width="20" height="20" viewBox="0 0 20 20">
								<use xlink:href="/css/common-icons.svg#plus"></use></svg>
                            {{-- end updated by Sana --}} 
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
                                                                {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Manually" width="24" height="19" viewBox="0 0 24 19" fill="none">
                                                            <use xlink:href="/css/common-icons.svg#check-add"></use> </svg>
                                                            {{-- end updated by Sana --}} 
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
                                                                {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Manually" width="24" height="19" viewBox="0 0 24 19" fill="none">
                                                            <use xlink:href="/css/common-icons.svg#check-add"></use> </svg>
                                                            {{-- end updated by Sana --}} 
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
                                                                {{-- updated Sana to change x-icon to svg --}}
                                                                            <svg aria-label="Add Manually" width="24" height="19" viewBox="0 0 24 19" fill="none">
                                                            <use xlink:href="/css/common-icons.svg#check-add"></use> </svg>
                                                            {{-- end updated by Sana --}} 
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
                                                x-on:click="$wire.switch('request-details')">Next</button>
                                            <button type="submit" class="btn btn-primary rounded mx-2">Draft</button>
                                            <button type="submit" class="btn btn-primary rounded mx-2">Save</button>
                                        </div>
                                    </div>

                                    <!-- END: Add services Form -->
                                </div>
                            </div>
                        </form>
                        {{-- ended update by shanila --}}

                    </div>
                    <div class="tab-pane fade {{ $component == 'request-details' ? 'active show' : '' }}"
                        id="request-details" role="tabpanel" aria-labelledby="request-details-tab" tabindex="0">
                        <form class="form">
                            {{-- updated by shanila to add csrf--}}
                            @csrf
                            {{-- update ended by shanila --}}
                            <div class="row mb-4">
                                <div class="col-lg-6 align-self-center">
                                    <h2 class="mb-lg-0">Industry Form</h2>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="#" class="btn btn-primary rounded w-100 btn-has-icon">
                                                <svg width="22" height="18" viewBox="0 0 24 19" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 10.4062L8.66667 17.4062L22 2.40625" stroke="white"
                                                        stroke-width="3" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                Add Manually
                                            </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#" class="btn btn-primary rounded w-100">
                                                Request from User
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-md-2">
                                <!-- Industry Form Begin -->
                                <div class="row between-section-segment-spacing">
                                    <div class="col-md-12 col-12">
                                        <h3>Computer Science</h3>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label"><b>Req_info:</b></label>
                                            <a href="#" @click="addDocuments = true"
                                                class="position-absolute w-100 h-100 d-block"></a>
                                            <label for="AddDocuments" class="form-label">Add Documents</label>
                                            <input class="form-control" type="file" id="AddDocuments">
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
                                            <label class="form-label" for="first-Name-column">First
                                                Name</label>
                                            <input type="text" id="first-Name-column" class="form-control"
                                                placeholder="First Name" name="fname-column" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="last-name-column">Last
                                                Name</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                                placeholder="Last Name" name="lname-column" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="phone-number-column">Phone
                                                Number</label>
                                            <input type="text" id="phone-number-column" class="form-control"
                                                placeholder="Enter Phone Number" name="pnumber-column" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="severity">Severity</label>
                                            <select class="form-select" id="severity">
                                                <option selected>Select Severity</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 justify-content-center form-actions d-flex">
                                        <button type="button" class="btn btn-outline-dark rounded mx-2"
                                            x-on:click="$wire.switch('requester-info')">Back</button>
                                        <button type="button" class="btn btn-primary rounded"
                                            x-on:click="$wire.switch('payment-info')">Next</button>
                                        <button type="submit" class="btn btn-primary rounded mx-2">Draft</button>
                                        <button type="submit" class="btn btn-primary rounded mx-2">Save</button>

                                    </div>
                                </div>
                                <!-- Service Form End -->
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade {{ $component == 'payment-info' ? 'active show' : '' }}" id="payment-info"
                        role="tabpanel" aria-labelledby="payment-info-tab" tabindex="0">
                        {{-- updated by shanila to add csrf and add form tag --}}
                        <form class="form">
                            @csrf
                             <h2>Payment  Information</h2>
                             <div class="between-section-segment-spacing">
                                <h5 class="mb-2">Service Rate Total:<span class="mx-3">$00.00</span></h5>
                                <h5 class="mb-2">Service Charges:<span class="mx-3">$00.00</span></h5>
                             </div>
                            
                              <div class="between-section-segment-spacing">
                                <h2>Discounts</h2>
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="radio" checked name="coupon" id="coupon">
                                    <label class="form-check-label" for="coupon">
                                        Coupon
                                    </label>
                                  </div>   
                                  <div class="row ">
                                    <div class="col-lg-12 d-inline-flex">
                                        <div class="mt-2"><label for="coupon-code" class="form-label">Coupon Code</label></div>
                                        <div class="mx-3">
                                            <input type="text" placeholder="Enter Code" class="form-control" id="coupon-code">
                                        </div>
                                        <div class="mx-3 mb-2">
                                            <button class="btn btn-primary rounded">Apply</button>
                                        </div>
                                    </div> 
                                  </div>  
                              </div>

                            <div class="between-section-segment-spacing">
                                <h2>Additional Customer Charge</h2>
                                <div class="d-inline-flex mb-2">
                                    <input type="text" id="" class="form-control form-control-md rounded-0" placeholder="Enter Charge Label" />
                                    <input type="text" id="" class="form-control form-control-md rounded-0" placeholder="$00.00" />
                                </div>
                                <div class="col-4 between-section-segment-spacing">
                                   <div class="d-flex justify-content-end">
                                    <a href="#" class="fw-bold mx-5">
                                        <small>
                                            Add Additional  Charges
                                            <svg aria-label="Add New" class="me-1" width="20" height="21"
                                                viewBox="0 0 20 21">
                                                <use xlink:href="/css/common-icons.svg#add-new"></use>
                                            </svg>
                                        </small>
                                    </a>
                                   </div>
                                </div>
                                <h5 class="mb-3">Total Additional Charges: <span>$00.00</span></h5>
                                <h5 class="mb-3">Adjustments: <span>$00.00</span></h5>
                                <h5 class="mb-3">Total Price: <span>$00.00</span></h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="row mb-4">
                                        <div class="col-lg-6 mb-4">
                                            <h2>Payment Preference:</h2>

                                            <div class="d-flex gap-3 flex-column flex-lg-row">

                                                <div class="form-check form-check-highlighted">
                                                    <input class="form-check-input" id="pay-later"
                                                        name="PermittedSchedulingFrequencies" type="radio"
                                                        tabindex="" />
                                                    <label class="form-check-label" for="pay-later">Pay Later</label>
                                                </div>
                                                <div class="form-check form-check-highlighted">
                                                    <input class="form-check-input" id="PayNow"
                                                        name="PermittedSchedulingFrequencies" type="radio"
                                                        tabindex="" />
                                                    <label class="form-check-label" for="PayNow">Pay Now</label>
                                                </div>
                                            </div>
                                            <div class="d-inline-flex mb-2">
                                                <input type="text" id="" class="form-control form-control-md rounded-0" placeholder="Enter Card number" />
                                                <input type="text" id="" class="form-control form-control-md rounded-0 mx-1" placeholder="MM/YY" />
                                                <input type="text" id="" class="form-control form-control-md rounded-0" placeholder="CVC" />
                                            </div>
                                            <div class="col-12 between-section-segment-spacing">
                                                <div class="d-flex justify-content-end">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="save-ur-future-payments">
                                                        <label class="form-check-label" for="save-ur-future-payments">
                                                            Save for Future Payments
                                                        </label>
                                                      </div>
                                                </div>
                                             </div>
                                            <!-- Provider Notes -->
                                            <div class="my-5">
                                                <label class="form-label" for="customer-notes">
                                                    Customer Notes
                                                </label>
                                                <textarea class="form-control" rows="4" cols="4" id="customer-notes"></textarea>
                                            </div>
                                            <!-- /Provider Notes -->
                                        </div>


                                    </div>
                                    <!-- Add Document -->
                                    <div class="row">
                                        <div class="col-lg-3 mb-4">
                                            <a @click="addDocuments = true"
                                                class="btn btn-primary rounded btn-has-icon w-100">
                                                {{-- updated Sana to change x-icon to svg --}}
                                                            <svg class="mx-2" aria-label="Add Document" width="20" height="20" viewBox="0 0 20 20">
								<use xlink:href="/css/common-icons.svg#plus"></use></svg>
                            {{-- end updated by Sana --}} 
                                                Add Document
                                            </a>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="images/img-placeholder-document.jpg"
                                                    alt="img-placeholder-document" class="w-100">
                                                <p class="font-family-secondary"><small>File Name</small></p>
                                            </div>
                                            <div class="col-2">
                                                <img src="images/img-placeholder-document.jpg"
                                                    alt="img-placeholder-document" class="w-100">
                                                <p class="font-family-secondary"><small>File Name</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Add Document -->
                                </div>
                            </div>
                            <div class="col-12 justify-content-center form-actions d-flex">
                                <button type="button" class="btn btn-outline-dark rounded mx-2"
                                    x-on:click="$wire.switch('request-details')">Back</button>
                                <button type="button" class="btn btn-primary rounded mx-2"
                                    x-on:click="$wire.switch('booking-summary')">Next</button>
                                <button type="submit" class="btn btn-primary rounded mx-2">Draft</button>
                                <button type="submit" class="btn btn-primary rounded mx-2">Save</button>

                            </div>
                        </form>
                        {{-- ended update by shanila --}}

                    </div>
                    <div class="tab-pane fade {{ $component == 'booking-summary' ? 'active show' : '' }}"
                        id="booking-summary" role="tabpanel" aria-labelledby="booking-summary-tab" tabindex="0">
                        <!-- Scheduling Details -->
                        {{-- updated by shanila to add csrf and add form tag --}}
                        <form class="form">
                            @csrf
                            <div class="mb-5">
                                <h2>Scheduling Details</h2>
                                <div class="d-flex flex-column gap-3 mt-5">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">Date & Time:</label>
                                        </div>
                                        <div class="col-lg-9 align-self-center">
                                            <div class="font-family-tertiary">(10/25/2022 13:35 - 10/25/2022 13:35)
                                            </div>
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
                                                <div class="font-family-tertiary">Sign Language Interpreting Services
                                                </div>
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
                                                <div class="font-family-tertiary">Sign Language Interpreting Services
                                                </div>
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
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">Gross
                                                    Total:
                                                </div>
                                            </div>
                                            <div class="col-lg-9 align-self-center">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">
                                                    $6,500.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">
                                                    Discount:
                                                </div>
                                            </div>
                                            <div class="col-lg-9 align-self-center">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">$00.00
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">Net
                                                    Total:
                                                </div>
                                            </div>
                                            <div class="col-lg-9 align-self-center">
                                                <div class="fw-semibold text-primary fs-5 font-family-tertiary">
                                                    $6,596.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Gross Total -->

                                <div class="col-12 justify-content-center form-actions d-flex gap-3">
                                    <button type="button" class="btn btn-outline-dark rounded"
                                        x-on:click="$wire.switch('payment-info')">Back</button>
                                    <button type="submit" class="btn btn-primary rounded mx-2">Save As Draft</button>
                                    <button type="submit" class="btn btn-primary rounded mx-2">confirm</button>

                                </div>
                            </div>
                            <!-- /Service Request -->
                        </form>
                        {{-- ended update by shanila --}}

                    </div>
                </div>
            </div>
            <!-- End: Content-->
        </div>


    </div>
    @include('panels.common.add-documents')
    @include('modals.common.add-address')
    @include('modals.common.add-industry')
    @include('modals.common.add-department')
    @include('modals.common.add-new-customer')
</div>
