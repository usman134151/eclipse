 {{-- BEGIN: Filters --}}
 <div>
    <div class="accordion mb-4" id="accordionFilters">
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
                            <linearGradient id="paint0_linear_8696_11548" x1="15" y1="0" x2="27.0359" y2="0"
                                gradientUnits="userSpaceOnUse">
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
                <div class="accordion-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Accommodation</label>
                            {!! App\Helpers\SetupHelper::createDropDown('Accommodation', 'id',
                            'name', 'status', 1, 'name', true, '',
                            '','accommodation_filter') !!}
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Service</label>
                            <select data-placeholder="Select Accommodation" multiple class="select2 form-select"
                                tabindex="8">
                                <option value=""></option>
                                <option selected>Language Translation</option>
                                <option selected>Real Time Captioning</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Specialization</label>
                            {!! App\Helpers\SetupHelper::createDropDown('Specialization', 'id',
                            'name', 'status', 1, 'name', true, '',
                            '','specialization_filter') !!}
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="d-lg-flex justify-content-between align-items-center">
                                <label class="form-label mb-lg-0">Associated Tags</label>
                                <div class="form-check">
                                    <input class="form-check-input" id="MatchAll" name="" type="checkbox" tabindex="">
                                    <label class="form-check-label" for="MatchAll">
                                        <small>Match All</small>
                                    </label>
                                </div>
                            </div>
                            <select data-placeholder="Select Accommodation" multiple class="select2 form-select"
                                tabindex="8">
                                <option value=""></option>
                                <option selected>Medical</option>
                                <option selected>Conference</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex justify-content-start gap-2 mb-4">
                                <div class="mb-4 mb-lg-0">
                                    <button class="btn btn-xs btn-inactive dropdown-toggle bg-secondary rounded"
                                        data-bs-toggle="collapse" href="#collapseAdvanceFilter" role="button"
                                        aria-expanded="false" aria-controls="collapseAdvanceFilter">
                                        Advance Filter
                                    </button>
                                </div>
                                <div class="mb-4 mb-lg-0">
                                    <button type="button" class="btn btn-xs btn-outline-dark rounded">
                                        Clear all
                                    </button>
                                </div>
                            </div>
                            <div class="collapse" id="collapseAdvanceFilter">
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="d-lg-flex justify-content-between align-items-center">
                                            <label class="form-label mb-lg-0">Preferred Providers</label>
                                            <div class="form-check">
                                                <input class="form-check-input" id="MatchAllPreferredProviders" name=""
                                                    type="checkbox" tabindex="">
                                                <label class="form-check-label" for="MatchAllPreferredProviders">
                                                    <small>Match All</small>
                                                </label>
                                            </div>
                                        </div>
                                        <select data-placeholder="Select Accommodation" multiple
                                            class="select2 form-select" tabindex="8">
                                            <option value=""></option>
                                            <option selected>Thomas Charles</option>
                                            <option selected>Paulie Durber</option>
                                        </select>
                                        <div class="mt-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="Requester" name="" type="checkbox"
                                                    tabindex="">
                                                <label class="form-check-label"
                                                    for="Requester"><small>Requester</small></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="ServiceConsumers" name=""
                                                    type="checkbox" tabindex="">
                                                <label class="form-check-label" for="ServiceConsumers"><small>Service
                                                        Consumer(s)</small></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="Participants" name=""
                                                    type="checkbox" tabindex="">
                                                <label class="form-check-label"
                                                    for="Participants"><small>Participant(s)</small></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <label class="form-label">Preferred Team Providers</label>
                                        <select data-placeholder="Select Accommodation" multiple
                                            class="select2 form-select" tabindex="8">
                                            <option value=""></option>
                                            <option selected>Richard Payne</option>
                                            <option selected>Mr. Justin Richardson</option>
                                        </select>
                                        <div class="mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" id="AssignedProviders" name=""
                                                    type="checkbox" tabindex="">
                                                <label class="form-check-label" for="AssignedProviders"><small>Assigned
                                                        Providers</small></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Gender</label>
                                        {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                                        'setup_value_label', 'setup_id', 2, 'setup_value_label', false, 'gender',
                                        '','gender') !!}
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Ethnicity</label>
                                        {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id',
                                        'setup_value_label', 'setup_id', 3, 'setup_value_label', false, 'ethnicity',
                                        '','ethnicity') !!}
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Certification</label>
                                        {{-- updated by shanila to add multiselectdropdown --}}
                                {!! App\Helpers\SetupHelper::createDropDown('SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, '','','form-check') !!}
                                {{--ended updated--}}
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="d-lg-flex justify-content-between align-items-center mb-2">
                                            <label class="form-label mb-lg-0">Distance</label>
                                            <div>
                                                KM
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1 12.0837V15H3.91626L12.5173 6.39897L9.60103 3.48271L1 12.0837ZM14.7725 4.14373C15.0758 3.84044 15.0758 3.35051 14.7725 3.04722L12.9528 1.22747C12.6495 0.924177 12.1596 0.924177 11.8563 1.22747L10.4331 2.6506L13.3494 5.56687L14.7725 4.14373Z"
                                                        fill="#0A1E46" />
                                                </svg>
                                            </div>
                                        </div>
                                        <select class="form-select">
                                            <option>Select Certification</option>
                                        </select>
                                        <div class="mt-2 d-flex gap-2">
                                            <div class="form-check">
                                                <input class="form-check-input" id="ReimburseTravelTime" name=""
                                                    type="checkbox" tabindex="">
                                                <label class="form-check-label"
                                                    for="ReimburseTravelTime"><small>Reimburse Travel
                                                        Time</small></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="ReimburseTravelTime" name=""
                                                    type="checkbox" tabindex="">
                                                <label class="form-check-label"
                                                    for="ReimburseTravelTime"><small>Reimburse Mileage</small></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <label class="form-label">Search</label>
                                        <input class="form-control" type="" name="" placeholder="Name Search">
                                    </div>
                                    <div class="col-lg-4 mb-4">
                                        <div class="mt-5 d-flex gap-1">
                                            <div class="form-check">
                                                <input class="form-check-input" id="ProviderAvailability" name=""
                                                    type="checkbox" tabindex="">
                                                <label class="form-check-label text-nowrap"
                                                    for="ProviderAvailability"><small>Provider
                                                        Availability</small></label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="ProviderServiceRadius" name=""
                                                    type="checkbox" tabindex="">
                                                <label class="form-check-label text-nowrap"
                                                    for="ProviderServiceRadius"><small>Provider Service
                                                        Radius</small></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END: Filters -->
    <!-- BEGIN: Filter Table -->
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
        <table class="table table-fs-md table-hover" aria-label="">
            <thead>
                <tr>
                    <th scope="col">Provider</th>
                    <th scope="col" width="20%">Additional Provider Payment</th>
                    <th scope="col" class="text-center">Service Payment</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div>
                                <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                    class="rounded-circle" alt="Image">
                            </div>
                            <div class="pt-2">
                                <div class="font-family-secondary leading-none">sign language</div>
                                <a href="#"
                                    class="font-family-secondary text-sm"><small>signlanguage@gmail.com</small></a>
                                <div class="text-sm">599 Miles</div>
                                <div></div>
                            </div>
                        </div>
                        <div>
                            <a href="#">Sign Language</a><span>,</span>
                            <a href="#">Sign</a><span>,</span>
                            <a href="#">Interpreter</a>
                        </div>
                    </td>
                    <td>
                        <div class="d-grid grid-cols-2 gap-3 mb-3">
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap">Additional Payment</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                    aria-label="Additional Payment">
                            </div>
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap" for="additional=payment">Additional
                                    Payment</label>
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-2">
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        aria-label="Additional Payment">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                            fill="#888575" />
                                    </svg>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="ChargetoCustomer"><small>Charge to
                                            Customer</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-xs btn-has-icon btn-primary rounded">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                        fill="white" />
                                </svg>
                                Add New
                            </button>
                        </div>
                        {{--
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ChargetoCustomer"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="ReimburseTravelTime" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ReimburseTravelTime"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                        </div>
                        --}}
                    </td>
                    <td class="text-center">
                        <div class="d-flex gap-2 justify-content-center mb-3">
                            <div class="col-md-4">
                                <label class="form-label-sm">No of Days/Hours</label>
                                <div class="input-group">
                                    <input type="" name="" class="form-control form-control-sm text-center"
                                        placeholder="0" aria-label="Hours">
                                    <div class="input-group-text p-0">
                                        <select class="form-select form-select-sm" aria-label="Days">
                                            <option>/days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="average-rate" class="form-label-sm">Average Rate</label>
                                <input type="" id="average-rate" name="" class="form-control form-control-sm w-25%"
                                    placeholder="$00:00">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="form-check mb-3 col-md-3">
                                <div class="">
                                    <input class="form-check-input" id="reimburse-mileage" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap" for="reimburse-mileage"><small>Reimburse
                                            Mileage</small></label>
                                    <div>
                                        <input type="" name="" class="form-control form-control-sm text-center"
                                            placeholder="10 km" aria-label="Distance">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">

                            <div class="form-check mb-3 col-md-3">
                                <div>
                                    <input class="form-check-input" id="reimburse-travel-time" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap"
                                        for="reimburse-travel-time"><small>Reimburse Travel Time</small></label>
                                </div>
                                <div class="d-inline-flex">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="1 hr" aria-label="Reimburse Travel Time">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="32 m" aria-label="Reimburse Travel Time">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label class="form-label-sm" for="total-service-payment">Total Service
                                        Payment</label>
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        id="total-service-payment">
                                </div>
                                <div class="">
                                    <label class="form-label-sm">Total Booking Payment</label>
                                    $00:00
                                </div>
                            </div>
                            <div class="mx-3 mt-4">
                                <a href="#" class="btn btn-sm btn-outline-dark rounded mb-2">Assign</a>
                                <div class="form-check">
                                    <input class="form-check-input" id="assignPartialCoverage" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="assignPartialCoverage"
                                        for="partial-coverage"><small>Assign Partial Coverage</small></label>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary rounded text-nowrap" data-bs-toggle="modal"
                                    data-bs-target="#availableTimeslotModal">
                                    Select Booking Range
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div>
                                <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                    class="rounded-circle" alt="Image">
                            </div>
                            <div class="pt-2">
                                <div class="font-family-secondary leading-none">sign language</div>
                                <a href="#"
                                    class="font-family-secondary text-sm"><small>signlanguage@gmail.com</small></a>
                                <div class="text-sm">599 Miles</div>
                                <div></div>
                            </div>
                        </div>
                        <div>
                            <a href="#">Sign Language</a><span>,</span>
                            <a href="#">Sign</a><span>,</span>
                            <a href="#">Interpreter</a>
                        </div>
                    </td>
                    <td>
                        <div class="d-grid grid-cols-2 gap-3 mb-3">
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap">Additional Payment</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                    aria-label="Additional Payment">
                            </div>
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap" for="additional=payment">Additional
                                    Payment</label>
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-2">
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        aria-label="Additional Payment">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                            fill="#888575" />
                                    </svg>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="ChargetoCustomer"><small>Charge to
                                            Customer</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-xs btn-has-icon btn-primary rounded">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                        fill="white" />
                                </svg>
                                Add New
                            </button>
                        </div>
                        {{--
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ChargetoCustomer"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="ReimburseTravelTime" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ReimburseTravelTime"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                        </div>
                        --}}
                    </td>
                    <td class="text-center">
                        <div class="d-flex gap-2 justify-content-center mb-3">
                            <div class="col-md-4">
                                <label class="form-label-sm">No of Days/Hours</label>
                                <div class="input-group">
                                    <input type="" name="" class="form-control form-control-sm text-center"
                                        placeholder="0" aria-label="Hours">
                                    <div class="input-group-text p-0">
                                        <select class="form-select form-select-sm" aria-label="Days">
                                            <option>/days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="average-rate" class="form-label-sm">Average Rate</label>
                                <input type="" id="average-rate" name="" class="form-control form-control-sm w-25%"
                                    placeholder="$00:00">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="form-check mb-3 col-md-3">
                                <div class="">
                                    <input class="form-check-input" id="reimburse-mileage" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap" for="reimburse-mileage"><small>Reimburse
                                            Mileage</small></label>
                                    <div>
                                        <input type="" name="" class="form-control form-control-sm text-center"
                                            placeholder="10 km" aria-label="Distance">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">

                            <div class="form-check mb-3 col-md-3">
                                <div>
                                    <input class="form-check-input" id="reimburse-travel-time" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap"
                                        for="reimburse-travel-time"><small>Reimburse Travel Time</small></label>
                                </div>
                                <div class="d-inline-flex">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="1 hr" aria-label="Reimburse Travel Time">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="32 m" aria-label="Reimburse Travel Time">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label class="form-label-sm" for="total-service-payment">Total Service
                                        Payment</label>
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        id="total-service-payment">
                                </div>
                                <div class="">
                                    <label class="form-label-sm">Total Booking Payment</label>
                                    $00:00
                                </div>
                            </div>
                            <div class="mx-3 mt-4">
                                <a href="#" class="btn btn-sm btn-outline-dark rounded mb-2">Assign</a>
                                <div class="form-check">
                                    <input class="form-check-input" id="assignPartialCoverage" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="assignPartialCoverage"
                                        for="partial-coverage"><small>Assign Partial Coverage</small></label>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary rounded text-nowrap" data-bs-toggle="modal"
                                    data-bs-target="#availableTimeslotModal">
                                    Select Booking Range
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div>
                                <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                    class="rounded-circle" alt="Image">
                            </div>
                            <div class="pt-2">
                                <div class="font-family-secondary leading-none">sign language</div>
                                <a href="#"
                                    class="font-family-secondary text-sm"><small>signlanguage@gmail.com</small></a>
                                <div class="text-sm">599 Miles</div>
                                <div></div>
                            </div>
                        </div>
                        <div>
                            <a href="#">Sign Language</a><span>,</span>
                            <a href="#">Sign</a><span>,</span>
                            <a href="#">Interpreter</a>
                        </div>
                    </td>
                    <td>
                        <div class="d-grid grid-cols-2 gap-3 mb-3">
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap">Additional Payment</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                    aria-label="Additional Payment">
                            </div>
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap" for="additional=payment">Additional
                                    Payment</label>
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-2">
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        aria-label="Additional Payment">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                            fill="#888575" />
                                    </svg>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="ChargetoCustomer"><small>Charge to
                                            Customer</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-xs btn-has-icon btn-primary rounded">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                        fill="white" />
                                </svg>
                                Add New
                            </button>
                        </div>
                        {{--
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ChargetoCustomer"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="ReimburseTravelTime" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ReimburseTravelTime"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                        </div>
                        --}}
                    </td>
                    <td class="text-center">
                        <div class="d-flex gap-2 justify-content-center mb-3">
                            <div class="col-md-4">
                                <label class="form-label-sm">No of Days/Hours</label>
                                <div class="input-group">
                                    <input type="" name="" class="form-control form-control-sm text-center"
                                        placeholder="0" aria-label="Hours">
                                    <div class="input-group-text p-0">
                                        <select class="form-select form-select-sm" aria-label="Days">
                                            <option>/days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="average-rate" class="form-label-sm">Average Rate</label>
                                <input type="" id="average-rate" name="" class="form-control form-control-sm w-25%"
                                    placeholder="$00:00">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="form-check mb-3 col-md-3">
                                <div class="">
                                    <input class="form-check-input" id="reimburse-mileage" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap" for="reimburse-mileage"><small>Reimburse
                                            Mileage</small></label>
                                    <div>
                                        <input type="" name="" class="form-control form-control-sm text-center"
                                            placeholder="10 km" aria-label="Distance">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">

                            <div class="form-check mb-3 col-md-3">
                                <div>
                                    <input class="form-check-input" id="reimburse-travel-time" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap"
                                        for="reimburse-travel-time"><small>Reimburse Travel Time</small></label>
                                </div>
                                <div class="d-inline-flex">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="1 hr" aria-label="Reimburse Travel Time">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="32 m" aria-label="Reimburse Travel Time">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label class="form-label-sm" for="total-service-payment">Total Service
                                        Payment</label>
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        id="total-service-payment">
                                </div>
                                <div class="">
                                    <label class="form-label-sm">Total Booking Payment</label>
                                    $00:00
                                </div>
                            </div>
                            <div class="mx-3 mt-4">
                                <a href="#" class="btn btn-sm btn-outline-dark rounded mb-2">Assign</a>
                                <div class="form-check">
                                    <input class="form-check-input" id="assignPartialCoverage" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="assignPartialCoverage"
                                        for="partial-coverage"><small>Assign Partial Coverage</small></label>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary rounded text-nowrap" data-bs-toggle="modal"
                                    data-bs-target="#availableTimeslotModal">
                                    Select Booking Range
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div>
                                <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                    class="rounded-circle" alt="Image">
                            </div>
                            <div class="pt-2">
                                <div class="font-family-secondary leading-none">sign language</div>
                                <a href="#"
                                    class="font-family-secondary text-sm"><small>signlanguage@gmail.com</small></a>
                                <div class="text-sm">599 Miles</div>
                                <div></div>
                            </div>
                        </div>
                        <div>
                            <a href="#">Sign Language</a><span>,</span>
                            <a href="#">Sign</a><span>,</span>
                            <a href="#">Interpreter</a>
                        </div>
                    </td>
                    <td>
                        <div class="d-grid grid-cols-2 gap-3 mb-3">
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap">Additional Payment</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                    aria-label="Additional Payment">
                            </div>
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap" for="additional=payment">Additional
                                    Payment</label>
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-2">
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        aria-label="Additional Payment">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                            fill="#888575" />
                                    </svg>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="ChargetoCustomer"><small>Charge to
                                            Customer</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-xs btn-has-icon btn-primary rounded">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                        fill="white" />
                                </svg>
                                Add New
                            </button>
                        </div>
                        {{--
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ChargetoCustomer"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="ReimburseTravelTime" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ReimburseTravelTime"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                        </div>
                        --}}
                    </td>
                    <td class="text-center">
                        <div class="d-flex gap-2 justify-content-center mb-3">
                            <div class="col-md-4">
                                <label class="form-label-sm">No of Days/Hours</label>
                                <div class="input-group">
                                    <input type="" name="" class="form-control form-control-sm text-center"
                                        placeholder="0" aria-label="Hours">
                                    <div class="input-group-text p-0">
                                        <select class="form-select form-select-sm" aria-label="Days">
                                            <option>/days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="average-rate" class="form-label-sm">Average Rate</label>
                                <input type="" id="average-rate" name="" class="form-control form-control-sm w-25%"
                                    placeholder="$00:00">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="form-check mb-3 col-md-3">
                                <div class="">
                                    <input class="form-check-input" id="reimburse-mileage" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap" for="reimburse-mileage"><small>Reimburse
                                            Mileage</small></label>
                                    <div>
                                        <input type="" name="" class="form-control form-control-sm text-center"
                                            placeholder="10 km" aria-label="Distance">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">

                            <div class="form-check mb-3 col-md-3">
                                <div>
                                    <input class="form-check-input" id="reimburse-travel-time" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap"
                                        for="reimburse-travel-time"><small>Reimburse Travel Time</small></label>
                                </div>
                                <div class="d-inline-flex">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="1 hr" aria-label="Reimburse Travel Time">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="32 m" aria-label="Reimburse Travel Time">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label class="form-label-sm" for="total-service-payment">Total Service
                                        Payment</label>
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        id="total-service-payment">
                                </div>
                                <div class="">
                                    <label class="form-label-sm">Total Booking Payment</label>
                                    $00:00
                                </div>
                            </div>
                            <div class="mx-3 mt-4">
                                <a href="#" class="btn btn-sm btn-outline-dark rounded mb-2">Assign</a>
                                <div class="form-check">
                                    <input class="form-check-input" id="assignPartialCoverage" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="assignPartialCoverage"
                                        for="partial-coverage"><small>Assign Partial Coverage</small></label>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary rounded text-nowrap" data-bs-toggle="modal"
                                    data-bs-target="#availableTimeslotModal">
                                    Select Booking Range
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex gap-2 align-items-center">
                            <div>
                                <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                    class="rounded-circle" alt="Image">
                            </div>
                            <div class="pt-2">
                                <div class="font-family-secondary leading-none">sign language</div>
                                <a href="#"
                                    class="font-family-secondary text-sm"><small>signlanguage@gmail.com</small></a>
                                <div class="text-sm">599 Miles</div>
                                <div></div>
                            </div>
                        </div>
                        <div>
                            <a href="#">Sign Language</a><span>,</span>
                            <a href="#">Sign</a><span>,</span>
                            <a href="#">Interpreter</a>
                        </div>
                    </td>
                    <td>
                        <div class="d-grid grid-cols-2 gap-3 mb-3">
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap">Additional Payment</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                    aria-label="Additional Payment">
                            </div>
                            <div>
                                <label class="form-label-sm">Label</label>
                                <input type="" name="" class="form-control form-control-sm" placeholder="Payment Label"
                                    aria-label="Payment Label">
                            </div>
                            <div>
                                <label class="form-label-sm text-nowrap" for="additional=payment">Additional
                                    Payment</label>
                                <div class="d-flex justify-content-between align-items-center gap-2 mb-2">
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        aria-label="Additional Payment">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                            fill="#888575" />
                                    </svg>
                                </div>
                                <div class="form-check mb-0">
                                    <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="ChargetoCustomer"><small>Charge to
                                            Customer</small></label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <button class="btn btn-xs btn-has-icon btn-primary rounded">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                        fill="white" />
                                </svg>
                                Add New
                            </button>
                        </div>
                        {{--
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ChargetoCustomer"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="ReimburseTravelTime" name="" type="checkbox"
                                    tabindex="">
                                <label class="form-check-label" for="ReimburseTravelTime"><small>Reimburse
                                        Mileage</small></label>
                            </div>
                        </div>
                        --}}
                    </td>
                    <td class="text-center">
                        <div class="d-flex gap-2 justify-content-center mb-3">
                            <div class="col-md-4">
                                <label class="form-label-sm">No of Days/Hours</label>
                                <div class="input-group">
                                    <input type="" name="" class="form-control form-control-sm text-center"
                                        placeholder="0" aria-label="Hours">
                                    <div class="input-group-text p-0">
                                        <select class="form-select form-select-sm" aria-label="Days">
                                            <option>/days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="average-rate" class="form-label-sm">Average Rate</label>
                                <input type="" id="average-rate" name="" class="form-control form-control-sm w-25%"
                                    placeholder="$00:00">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="form-check mb-3 col-md-3">
                                <div class="">
                                    <input class="form-check-input" id="reimburse-mileage" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap" for="reimburse-mileage"><small>Reimburse
                                            Mileage</small></label>
                                    <div>
                                        <input type="" name="" class="form-control form-control-sm text-center"
                                            placeholder="10 km" aria-label="Distance">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">

                            <div class="form-check mb-3 col-md-3">
                                <div>
                                    <input class="form-check-input" id="reimburse-travel-time" name="" type="checkbox"
                                        tabindex="" checked>
                                    <label class="form-check-label text-nowrap"
                                        for="reimburse-travel-time"><small>Reimburse Travel Time</small></label>
                                </div>
                                <div class="d-inline-flex">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="1 hr" aria-label="Reimburse Travel Time">
                                    <input type="" name="" class="form-control form-control-sm text-center rounded-0"
                                        placeholder="32 m" aria-label="Reimburse Travel Time">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-inline-flex">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label class="form-label-sm" for="total-service-payment">Total Service
                                        Payment</label>
                                    <input type="" name="" class="form-control form-control-sm" placeholder="$00:00"
                                        id="total-service-payment">
                                </div>
                                <div class="">
                                    <label class="form-label-sm">Total Booking Payment</label>
                                    $00:00
                                </div>
                            </div>
                            <div class="mx-3 mt-4">
                                <a href="#" class="btn btn-sm btn-outline-dark rounded mb-2">Assign</a>
                                <div class="form-check">
                                    <input class="form-check-input" id="assignPartialCoverage" name="" type="checkbox"
                                        tabindex="">
                                    <label class="form-check-label text-nowrap" for="assignPartialCoverage"
                                        for="partial-coverage"><small>Assign Partial Coverage</small></label>
                                </div>
                                <a href="#" class="btn btn-sm btn-primary rounded text-nowrap" data-bs-toggle="modal"
                                    data-bs-target="#availableTimeslotModal">
                                    Select Booking Range
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END: Filter Table -->

    <x-slot name="outsideBody">
        <div class="col-12 justify-content-center form-actions d-flex gap-3">
            <button type="" class="btn btn-outline-dark rounded">Cancel</button>
            <button type="" class="btn btn-primary rounded">Save</button>
        </div>
    
</div>    