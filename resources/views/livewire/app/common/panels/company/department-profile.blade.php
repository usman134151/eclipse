<div class="card-body">
    <ul class="nav nav-tabs" id="Tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="offcanvas-dashboard-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-dashboard-tab-pane" type="button" role="tab" aria-controls="dashboard-tab-pane" aria-selected="true">
                <x-icon name="tablet"/>
                <span>Dashboard</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-schedule-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-schedule-tab-pane" type="button" role="tab" aria-controls="offcanvas-schedule-tab-panel" aria-selected="false">
                <x-icon name="gray-calendar"/>
                <span>Schedule</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-service-requests-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-service-requests-tab-pane" type="button" role="tab" aria-controls="offcanvas-service-requests-tab-panel" aria-selected="false">
                <x-icon name="gray-journal"/>
                <span>Service Requests</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-permission-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-drive-tab-pane" type="button" role="tab" aria-controls="offcanvas-drive-tab-panel" aria-selected="false">
                <x-icon name="gray-drive"/>
                <span>Drive</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-permission-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-feedback-tab-pane" type="button" role="tab" aria-controls="offcanvas-feedback-tab-panel" aria-selected="false">
                <x-icon name="gray-rated-user"/>
                <span>Feedback</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-invoices-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-invoices-tab-pane" type="button" role="tab" aria-controls="offcanvas-invoices-tab-panel" aria-selected="false">
                <x-icon name="gray-invoice"/>
                <span>Invoices</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-payments-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-payments-tab-pane" type="button" role="tab" aria-controls="offcanvas-payments-tab-panel" aria-selected="false">
                <x-icon name="gray-payment"/>
                <span>Payments</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-referrals-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-referrals-tab-pane" type="button" role="tab" aria-controls="offcanvas-referrals-tab-panel" aria-selected="false">
                <x-icon name="gray-referral"/>
                <span>Referrals</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-notes-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-notes-tab-pane" type="button" role="tab" aria-controls="offcanvas-notes-tab-panel" aria-selected="false">
                <x-icon name="gray-note"/>
                <span>Notes</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-reports-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-reports-tab-pane" type="button" role="tab" aria-controls="offcanvas-reports-tab-panel" aria-selected="false">
                <x-icon name="gray-bar-chart"/>
                <span>Reports</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-notifications-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-notifications-tab-pane" type="button" role="tab" aria-controls="offcanvas-notifications-tab-panel" aria-selected="false">
                <x-icon name="gray-bell"/>
                <span>Notifications</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-log-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-log-tab-pane" type="button" role="tab" aria-controls="offcanvas-log-tab-panel" aria-selected="false">
                <x-icon name="gray-log"/>
                <span>Log</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="offcanvas-settings-tab" data-bs-toggle="tab" data-bs-target="#offcanvas-settings-tab-pane" type="button" role="tab" aria-controls="offcanvas-settings-tab-panel" aria-selected="false">
                <x-icon name="gray-cog"/>
                <span>Settings</span>
            </button>
        </li>
    </ul>

    <div class="tab-content" id="TabContent">
        {{-- Dashboard Tab - Start --}}
        <div class="tab-pane fade show active" id="offcanvas-dashboard-tab-pane" role="tabpanel" aria-labelledby="offcanvas-dashboard-tab" tabindex="0">
            <div class="col-md-12 mb-md-2 mt-5">
                <div class="row mt-2 mb-5">
                    <div class="col-md-5 me-5">
                        <div class="mb-4">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-inline-block position-relative">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Image"/>
                                    </div>
                                    <div style="margin-left: -1rem;" class="d-inline-block position-relative mt-3">
                                        <svg width="156" height="32" viewBox="0 0 156 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H133L156 32H0V0Z" fill="url(#paint0_linear_2265_83025)"/>
                                            <defs>
                                                <linearGradient id="paint0_linear_2265_83025" x1="78" y1="0" x2="140.587" y2="0" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#213969"/>
                                                    <stop offset="1" stop-color="#204387"/>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <div class="position-absolute bottom-0 p-0 d-flex justify-content-center align-items-center">
                                            <label class="text-white form-label-sm ps-2" for="">
                                                Sydney, Australia
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-7 ms-4">
                                    <h3 class="font-family-tertiary fw-medium">
                                        Example Company
                                    </h3>
                                    <div class="row mb-4">
                                        <div class="col-md-12">
                                            <div class="row mb-1">
                                                <div class="col-md-12">
                                                    <p class="font-family-tertiary">
                                                        (923) 023-9683
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="font-family-tertiary">
                                                        www.examplecompy.com
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="font-family-tertiary">
                                                        Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="text-sm">
                                                        <a href="#" class="font-family-tertiary text-primary">
                                                            Mrs 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-12 mt-4">
                                <div class="row mb-3">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Company Admin:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <a href="#" class="font-family-secondary">
                                                Thomas Charles , Harry Peter
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Provider Experience:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                <x-icon name="filled-star"/>
                                                <x-icon name="filled-star"/>
                                                <x-icon name="filled-star"/>
                                                <x-icon name="star"/>
                                                <x-icon name="star"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Customers:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                40
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Completed Requests:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                50 Hours
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Open Requests:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                80 Hours
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Total Invoiced:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                $192892.00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Total Paid:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                $84733.55
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Total Due:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                $2834.00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Total Overdue:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                $78734.00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Service Start Date:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                17/01/2023
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-5">
                                            <label for="" class="col-form-label">
                                                Service End Date:
                                            </label>
                                        </div>
                                        <div class="col-md-7 align-self-center">
                                            <div class="font-family-secondary">
                                                17/01/2023
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row" id="table-hover-row">
                            <div class="col-12">
                                <div class="mb-2">
                                    <h2>Business Hours</h2>
                                </div>
                                <div class="card">
                                    <div class="table-responsive">
                                        <table id="unassigned_data" class="table table-hover" aria-label="Business Hours">
                                            <thead>
                                                <tr role="row">
                                                    <th scope="col">Days</th>
                                                    <th scope="col">
                                                        Business Hours
                                                    </th>
                                                    <th scope="col">
                                                        After Business Hours
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td>Monday</td>
                                                    <td>
                                                        09 : 00 AM To 06 : 00 PM
                                                    </td>
                                                    <td>
                                                        06 : 00 PM To 10 : 00 PM
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>Tuesday</td>
                                                    <td>
                                                        09 : 00 AM To 06 : 00 PM
                                                    </td>
                                                    <td>
                                                        06 : 00 PM To 10 : 00 PM
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>Wednesday</td>
                                                    <td>
                                                        09 : 00 AM To 06 : 00 PM
                                                    </td>
                                                    <td>
                                                        06 : 00 PM To 10 : 00 PM
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>Thursday</td>
                                                    <td>
                                                        09 : 00 AM To 06 : 00 PM
                                                    </td>
                                                    <td>
                                                        06 : 00 PM To 10 : 00 PM
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>Friday</td>
                                                    <td>
                                                        09 : 00 AM To 06 : 00 PM
                                                    </td>
                                                    <td>
                                                        06 : 00 PM To 10 : 00 PM
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>Saturday</td>
                                                    <td>
                                                        09 : 00 AM To 06 : 00 PM
                                                    </td>
                                                    <td>
                                                        06 : 00 PM To 10 : 00 PM
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>Sunday</td>
                                                    <td>
                                                        09 : 00 AM To 06 : 00 PM
                                                    </td>
                                                    <td>
                                                        06 : 00 PM To 10 : 00 PM
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-md-2 text-center gap-2 mt-4">
                        <button type="button" class="d-inline-flex align-items-center btn btn-outline-dark rounded px-3 py-2 gap-2">
                            <span>Lock Account</span>
                        </button>
                        <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                            <span>Resend Welcome Email</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        {{-- Dashboard Tab - End --}}
        
        {{-- Schedule Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-schedule-tab-pane" role="tabpanel" aria-labelledby="offcanvas-schedule-tab" tabindex="0">
            <div class="row mb-4">
                <h3>Schedule</h3>
            </div>
            <div>
                <x-advancefilters/>
                <img  class="w-100" alt="Schedule Calendar" src="/tenant/images/portrait/small/image-placeholder-calendar.png" />
            </div>
        </div>
        {{-- Schedule Tab - End --}}

        {{-- Drive Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-drive-tab-pane" role="tabpanel" aria-labelledby="offcanvas-drive-tab" tabindex="0">
            <h3>Drive</h3>
            <p>
                Here you can manage company required documents. You will receive notifications when your credentials are approaching expiration or have expired.
            </p>
            <div class="row">
                <div class="col-md-4 col-12 mb-4">
                    <label class="form-label" for="search">
                        Search
                    </label>
                    <input type="text" id="search" class="form-control" name="search" placeholder="Keyword Search"/>
                </div>
                <div class="col-md-4 col-12">
                    <label class="form-label" for="search">
                        Tags
                    </label>
                    <input type="text" id="tags" class="form-control" name="search" placeholder="tags"/>
                </div>
                <div class="col-md-4 col-12">
                    <label class="form-label" for="search">
                        Document Type
                    </label>
                    <select class="select2 form-select" id="document-type">
                        <option value="document-type">
                            Select Document Type
                        </option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-2">
                    <label class="form-label" for="search">
                        Status
                    </label>
                    <select class="select2 form-select" id="document-type">
                        <option value="document-type">
                            Pending
                        </option>
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-3">
                    <label class="form-label" for="search">
                        Upload Document
                    </label>
                    <input type="file" id="upload-document" class="form-control" name="upload-document" placeholder="upload-document"/>
                </div>
            </div>
            <div class="row">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                Action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Another action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Something else here
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-2">
                    <img src="/tenant/images/img-placeholder-document.jpg"/>
                    <p>Certification</p>
                </div>
            </div>
        </div>
        {{-- Drive Tab -End --}}
        
        {{-- Feedback Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-feedback-tab-pane" role="tabpanel" aria-labelledby="offcanvas-feedback-tab" tabindex="0">
            <div class="row mb-4">
                <h3>Feedback</h3>
            </div>
            <div class="col-md-12 d-flex col-12  mb-4">
                {{-- Date Range --}}
                <div class="col-md-3 col-12">
                    <div>
                        <label class="form-label" for="set_set_date">
                            Date Range
                        </label>
                        <div class="position-relative">
                            <input type="" name="" class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
                            <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 mb-5">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                Action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Another action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Something else here
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2">
                    <div class="d-inline-flex">
                        <label for="show_records_number" class="form-label mt-1">
                            Show
                        </label>
                        <select class="form-select py-2 ms-2" id="show_records_number">
                            <option selected>5</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <button class="btn btn-primary rounded">
                        Feedback Received
                    </button>
                    <button class="btn btn-inactive rounded">
                        Feedback Given
                    </button>
                </div>
                <div class="col-md-3">
                    <div class="d-inline-flex align-items-center ">
                        <label for="search" class="form-label fw-semibold mt-1">
                            Search
                        </label>
                        <input type="search" class="form-control py-2 ms-2" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table id="unassigned_data" class="table table-hover" aria-label="Department Table">
                        <thead>
                            <tr role="row">
                                <th scope="col" class="text-center">
                                    <input class="form-check-input" type="checkbox" value="" aria-label="Select All Departments">
                                </th>
                                <th scope="col">Customer</th>
                                <th scope="col">Provider</th>
                                <th scope="col">Feedback</th>
                                <th scope="col" >Stars</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" value="" aria-label="Select">
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Medical
                                            </h6>
                                            <p>dorigriffit@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Ramon Miles
                                            </h6>
                                            <p>ramonmiles@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
                                </td>
                                <td>
                                    <div class="row mt-4">
                                        <div class="col-md-12 d-flex">
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#star">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex actions">
                                        <a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="hide-icon"/>
                                        </a>
                                        <a href="#" title="Edit Company" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="pencil"/>
                                        </a>
                                        <a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="recycle-bin"/>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" value="" aria-label="Select">
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Medical
                                            </h6>
                                            <p>dorigriffit@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Ramon Miles
                                            </h6>
                                            <p>ramonmiles@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
                                </td>
                                <td>
                                    <div class="row mt-4">
                                        <div class="col-md-12 d-flex">
                                            <x-icon name="filled-star"/>
                                            <x-icon name="filled-star"/>
                                            <x-icon name="filled-star"/>
                                            <x-icon name="star"/>
                                            <x-icon name="star"/>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex actions">
                                        <a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="hide-icon"/>
                                        </a>
                                        <a href="#" title="Edit Company" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="pencil"/>
                                        </a>
                                        <a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="recycle-bin"/>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" value="" aria-label="Select">
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Medical
                                            </h6>
                                            <p>dorigriffit@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Ramon Miles
                                            </h6>
                                            <p>ramonmiles@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
                                </td>
                                <td>
                                    <div class="row mt-4">
                                        <div class="col-md-12 d-flex">
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#star">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex actions">
                                        <a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="hide-icon"/>
                                        </a>
                                        <a href="#" title="Edit Company" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="pencil"/>
                                        </a>
                                        <a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="recycle-bin"/>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" value="" aria-label="Select">
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Medical
                                            </h6>
                                            <p>dorigriffit@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Ramon Miles
                                            </h6>
                                            <p>ramonmiles@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
                                </td>
                                <td>
                                    <div class="row mt-4">
                                        <div class="col-md-12 d-flex">
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#star">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex actions">
                                        <a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="hide-icon"/>
                                        </a>
                                        <a href="#" title="Edit Company" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="pencil"/>
                                        </a>
                                        <a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="recycle-bin"/>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="text-center">
                                    <input class="form-check-input" type="checkbox" value="" aria-label="Select">
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Medical
                                            </h6>
                                            <p>dorigriffit@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="/tenant/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                        </div>
                                        <div class="col-md-10">
                                            <h6 class="fw-semibold">
                                                Ramon Miles
                                            </h6>
                                            <p>ramonmiles@gmail.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
                                </td>
                                <td>
                                    <div class="row mt-4">
                                        <div class="col-md-12 d-flex">
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#star">
                                                </use>
                                            </svg>
                                            <svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
                                                <use
                                                    xlink:href="/css/common-icons.svg#star">
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex actions">
                                        <a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="hide-icon"/>
                                        </a>
                                        <a href="#" title="Edit Company" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="pencil"/>
                                        </a>
                                        <a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <x-icon name="recycle-bin"/>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-between m-4">
                    <div>
                        <p class="fw-semibold">
                            Showing 1 to 5 of 100 entries
                        </p>
                    </div>
                    <nav aria-label="Page Navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        {{-- Feedback Tab - End --}}
        
        {{-- Invoices Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-invoices-tab-pane" role="tabpanel" aria-labelledby="offcanvas-invoices-tab" tabindex="0">
            <h3>
                Company Invoices
            </h3>
            <div class="col-md-12 d-flex col-12 gap-4 mb-4">
                <div class="col-md-3 col-12 mb-4">
                    <label class="form-label" for="search-column">
                        Search
                    </label>
                    <input type="text" id="search-column" class="form-control" name="search-column" placeholder="Search here" required aria-required="true"/>
                </div>
                <div class="col-md-3 col-12">
                    <div class="mb-4">
                        <label class="form-label" for="payment-status-column">
                            Payment Status
                        </label>
                        <select class="select2 form-select" id="payment-status-column">
                            <option>Select Payment Status</option>
                            <option>Payment Status-1</option>
                            <option>Payment Status-2</option>
                        </select>
                    </div>
                </div>

                {{-- Date Range --}}
                <div class="col-md-3 col-12">
                    <div>
                        <label class="form-label" for="set_set_date">
                            Date Range
                        </label>
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Issued">
                                <label class="form-check-label" for="Issued">
                                    Issued
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="Due">
                                <label class="form-check-label" for="Due">
                                    Due
                                </label>
                            </div>
                        </div>
                        <div class="position-relative">
                            <input type="" name="" class="form-control js-single-date" placeholder="Select Date" id="">
                            <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 mb-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                Action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Another action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Something else here
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="d-inline-flex align-items-center gap-4">
                    <label for="show_records_number" class="form-label">
                        Show
                    </label>
                    <select class="form-select" id="show_records_number">
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                    </select>
                </div>
                <div class="d-inline-flex align-items-center gap-4">
                    <label for="search" class="form-label fw-semibold">
                        Search
                    </label>
                    <input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                </div>
            </div>
            <div class="table-responses">
                <table id="remittances" class="table table-hover" aria-label="Remittance">
                    <thead>
                        <tr role="row">
                            <th scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="checkbox">
                                </div>
                            </th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Recipient(s)</th>
                            <th scope="col">Po. No</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">PDF</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Payment Status</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a @click="offcanvasOpen = true">
                                    87109
                                </a>
                                <p class="mt-1">
                                    08/24/2022
                                </p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Information Technology
                                        </h6>
                                        <p>www.software.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="dollar-assignment"/>
                                    </a>
                                    <a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="download-file"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between m-4">
                <div>
                    <p class="fw-semibold">Showing 1 to 5 of 100 entries</p>
                </div>
                <nav aria-label="Page Navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- Invoices Tab : End --}}

        {{-- Payments Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-payments-tab-pane" role="tabpanel" aria-labelledby="offcanvas-payments-tab" tabindex="0">
            <div class="row">
                <h3>Payments</h3>
            </div>
            <div class="col-md-12 d-flex col-12 gap-4 mb-4">
                {{-- Search --}}
                <div class="col-md-3 col-12">
                    <div class="mb-4">
                        <label class="form-label" for="search-column">
                            Search
                        </label>
                        <input type="text" id="search-column" class="form-control" name="search-column" placeholder="Search here" required aria-required="true"/>
                    </div>
                </div>
                {{-- Date Range --}}
                <div class="col-md-3 col-12">
                    <div>
                        <label class="form-label" for="set_set_date">
                            Date Range
                        </label>
                        <div class="position-relative">
                            <input type="" name="" class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
                            <x-icon name="datefield-icon"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 mb-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                Action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Another action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Something else here
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="d-inline-flex align-items-center gap-4">
                    <label for="show_records_number" class="form-label">
                        Show
                    </label>
                    <select class="form-select" id="show_records_number">
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                    </select>
                </div>
            </div>
            <div class="table-responses">
                <table id="remittances" class="table table-hover" aria-label="Remittance">
                    <thead>
                        <tr role="row">
                            <th scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="checkbox">
                                </div>
                            </th>
                            <th scope="col">Invoice</th>
                            <th scope="col">Recipient(s)</th>
                            <th scope="col">Po. No</th>
                            <th scope="col">Total Amount</th>
                            <th scope="col">PDF</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Payment Status</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                </div>
                            </td>
                            <td>
                                <a>87109</a>
                                <p class="mt-1">08/24/2022</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">17837</td>
                            <td class="text-center">$40.00</td>
                            <td class="text-center">
                                <x-icon name="doc"/>
                            </td>
                            <td class="text-center">Direct Deposit</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Paid</p>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="eye-icon"/>
                                    </a>
                                    <a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="mapview"/>
                                    </a>
                                    <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="round-arrow"/>
                                    </a>
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between m-4">
                <div>
                    <p class="fw-semibold">Showing 1 to 5 of 100 entries</p>
                </div>
                <nav aria-label="Page Navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- Payments Tab - End --}}
        
        {{-- Referrals Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-referrals-tab-pane" role="tabpanel" aria-labelledby="offcanvas-referrals-tab" tabindex="0">
            <div class="row mb-4">
                <h3>Referral Code: 122YCRK</h3>
            </div>
            <div class="col-md-12 d-flex col-12 gap-4 mb-4">
                {{-- Date Range --}}
                <div class="col-md-3 col-12">
                    <div>
                        <label class="form-label" for="set_set_date">
                            Date Range
                        </label>
                        <div class="position-relative">
                            <input type="" name="" class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
                            <x-icon name="datefield-icon"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                Action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Another action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Something else here
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="d-inline-flex align-items-center gap-4">
                    <label for="show_records_number" class="form-label">
                        Show
                    </label>
                    <select class="form-select" id="show_records_number">
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                    </select>
                </div>
                <div class="d-inline-flex align-items-center gap-4">
                    <label for="search" class="form-label fw-semibold">
                        Search
                    </label>
                    <input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                </div>
            </div>
            <div class="table-responses">
                <table id="remittances" class="table table-hover" aria-label="Remittance">
                    <thead>
                        <tr role="row">
                            <th scope="col">Customer Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd">
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-1">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">$00.00</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="red-dot"/>
                                    <p>Pending</p>
                                </div>
                            </td>
                            <td>10/10/2022 09:45 PM</td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-1">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">$00.00</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Approved</p>
                                </div>
                            </td>
                            <td>10/10/2022 09:45 PM</td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-1">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">$00.00</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="red-dot"/>
                                    <p>Pending</p>
                                </div>
                            </td>
                            <td>10/10/2022 09:45 PM</td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-1">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">$00.00</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Approved</p>
                                </div>
                            </td>
                            <td>10/10/2022 09:45 PM</td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class="align-middle">
                                <div class="row g-2">
                                    <div class="col-md-1">
                                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="fw-semibold">
                                            Dori Griffiths
                                        </h6>
                                        <p>dorigriffit@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">$00.00</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <x-icon name="green-dot"/>
                                    <p>Approved</p>
                                </div>
                            </td>
                            <td>10/10/2022 09:45 PM</td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="recycle-bin"/>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Referrals Tab - End --}}

        {{-- Notes Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-notes-tab-pane" role="tabpanel" aria-labelledby="offcanvas-notes-tab" tabindex="0">
            <div class="row">
                <h3>Notes</h3>
                <div class="col-md-6 col-12 mb-4">
                    <label class="form-label" for="notes-column">
                        Add Notes
                    </label>
                    <textarea class="form-control" rows="3" placeholder="" name="notesColumn" id="notes-column"></textarea>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6 col-12 d-flex justify-content-end">
                        <button class="btn btn-primary rounded ">Add</button>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="d-inline-flex align-items-center">
                        <div class="bg-warning rounded px-2 py-3">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            </p>
                        </div>
                        <div class="d-flex actions mx-2">
                            <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                <x-icon name="pencil"/>
                            </a>
                            <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                <x-icon name="recycle-bin"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="d-inline-flex align-items-center">
                        <div class="bg-warning rounded px-2 py-3">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                <span class="text-primary">
                                    @Admin @Comapny
                                </span>
                            </p>
                        </div>
                        <div class="d-flex actions mx-2">
                            <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                <x-icon name="pencil"/>
                            </a>
                            <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                <x-icon name="recycle-bin"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="d-inline-flex align-items-center">
                        <div class="bg-warning rounded px-2 py-3">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                <span class="text-primary">
                                    @Thomas_charles
                                </span>
                            </p>
                        </div>
                        <div class="d-flex actions mx-2">
                            <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                <x-icon name="pencil"/>
                            </a>
                            <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                <x-icon name="recycle-bin"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-8">
                    <div class="d-inline-flex align-items-center">
                        <div class="bg-warning rounded px-2 py-3">
                            <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                <span class="text-primary">
                                    @Thomas_charles
                                </span>
                            </p>
                        </div>
                        <div class="d-flex actions mx-2">
                            <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                <x-icon name="pencil"/>
                            </a>
                            <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                <x-icon name="recycle-bin"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Notes Tab -End --}}
        
        {{-- Notifications Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-notifications-tab-pane" role="tabpanel" aria-labelledby="offcanvas-notifications-tab" tabindex="0">
            <div class="row">
                <h3>Notification</h3>
                <p class="mt-3">
                    Here you can control how you are notified about Profile activity.
                </p>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 border rounded">
                    <div class="row">
                        <div class="d-flex justify-content-between mb-2 p-2">
                            <div class="d-inline-flex align-items-center gap-4">
                                <svg width="47" height="41" class="ms-2" viewBox="0 0 47 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M39.4375 1H7.5625C3.94381 1 1 3.93694 1 7.54647V26.253C1 29.8632 3.94381 32.7994 7.5625 32.7994H9.79402L6.72272 38.9275C6.53873 39.2963 6.61737 39.7436 6.9174 40.0261C7.09528 40.1941 7.32812 40.2819 7.5625 40.2819C7.72206 40.2819 7.88162 40.2429 8.02743 40.159L20.9371 32.7994H39.4375C43.0562 32.7994 46 29.8632 46 26.253V7.54647C46 3.93694 43.0562 1 39.4375 1ZM44.1235 26.2507C44.1235 28.8288 42.0194 30.9275 39.436 30.9275H20.686C20.5226 30.9275 20.363 30.9702 20.2203 31.0504L9.7841 37.0014L12.1508 32.2818C12.2966 31.9932 12.2798 31.6474 12.1095 31.3726C11.9385 31.0977 11.637 30.929 11.3125 30.929H7.5625C4.97903 30.929 2.875 28.8303 2.875 26.253V7.54647C2.875 4.96911 4.97903 2.87042 7.5625 2.87042V2.86889H39.436C42.0194 2.86889 44.1235 4.96758 44.1235 7.54494V26.2507Z" fill="black" stroke="black"/>
                                </svg>
                                <span>Text</span>
                            </div>
                            <div class="d-inline-flex align-items-center gap-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="ToggleText" checked>
                                    <label class="form-check-label" for="ToggleText">OFF</label>
                                    <label class="form-check-label" for="ToggleText">ON</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border rounded mx-5">
                    <div class="row">
                        <div class="d-flex justify-content-between mb-2 p-2">
                            <div class="d-inline-flex align-items-center gap-4">
                                <svg width="52" height="36" viewBox="0 0 52 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M51 5.29326C50.9991 5.15222 50.9915 5.01288 50.9771 4.87269C50.9618 4.73335 50.9405 4.59485 50.9125 4.45721C50.8844 4.31957 50.8505 4.18363 50.8088 4.04938C50.7672 3.91599 50.7196 3.78344 50.6661 3.6543C50.6117 3.52515 50.5514 3.39855 50.4851 3.2745C50.4188 3.1513 50.3458 3.03066 50.2685 2.91425C50.1903 2.79785 50.1062 2.68485 50.017 2.57694C49.9277 2.46819 49.8343 2.36453 49.7349 2.26512C49.6355 2.16571 49.5318 2.07225 49.4231 1.98304C49.3152 1.89383 49.203 1.80971 49.0857 1.73155C48.9693 1.65338 48.8495 1.58116 48.7263 1.51489C48.6023 1.44861 48.4757 1.38829 48.3466 1.33391C48.2174 1.27953 48.0857 1.23195 47.9515 1.19117C47.8172 1.14954 47.6813 1.1147 47.5436 1.08666C47.4068 1.05863 47.2684 1.03738 47.1282 1.02294C46.9888 1.0085 46.8495 1.00085 46.7093 1H5.29072C5.15052 1 5.01033 1.00765 4.87014 1.02124C4.7308 1.03569 4.59231 1.05608 4.45466 1.08412C4.31702 1.1113 4.18108 1.14614 4.04598 1.18692C3.91174 1.22771 3.78004 1.27529 3.65005 1.32966C3.5209 1.38319 3.3943 1.44352 3.27026 1.50979C3.14621 1.57606 3.02641 1.64828 2.90916 1.72645C2.79275 1.80462 2.67975 1.88788 2.57185 1.97709C2.46309 2.06631 2.35943 2.16062 2.26003 2.26003C2.16062 2.35943 2.06631 2.46394 1.97709 2.57185C1.88788 2.6806 1.80462 2.7936 1.72645 2.91001C1.64828 3.02726 1.57606 3.14706 1.50979 3.27111C1.44352 3.39515 1.38319 3.52175 1.32966 3.65175C1.27529 3.78174 1.22855 3.91344 1.18692 4.04768C1.14614 4.18193 1.11215 4.31872 1.08412 4.45636C1.05693 4.594 1.03569 4.7325 1.02209 4.87269C1.00765 5.01203 1 5.15222 1 5.29326V30.9815C1.00085 31.1225 1.0085 31.2619 1.02294 31.4021C1.03823 31.5414 1.05948 31.6799 1.08751 31.8175C1.11555 31.9552 1.14954 32.0911 1.19117 32.2245C1.2328 32.3588 1.28038 32.4913 1.33391 32.6204C1.38829 32.7496 1.44861 32.8762 1.51489 33.0002C1.58116 33.1234 1.65338 33.2441 1.73155 33.3605C1.80971 33.4769 1.89383 33.589 1.98304 33.6978C2.0714 33.8066 2.16572 33.9102 2.26512 34.0096C2.36453 34.1082 2.46819 34.2025 2.57609 34.2917C2.68485 34.3809 2.797 34.465 2.9134 34.5432C3.02981 34.6214 3.15046 34.6936 3.27365 34.7599C3.39685 34.8261 3.52345 34.8865 3.65345 34.9408C3.78259 34.9952 3.91429 35.0428 4.04853 35.0836C4.18278 35.1252 4.31787 35.16 4.45551 35.1881C4.59316 35.2161 4.73165 35.2374 4.87099 35.2518C5.01033 35.2662 5.15052 35.2739 5.29072 35.2747H46.7093C46.8495 35.2747 46.9897 35.2679 47.1299 35.2535C47.2692 35.2391 47.4077 35.2187 47.5453 35.1906C47.683 35.1634 47.8198 35.1286 47.954 35.0878C48.0883 35.047 48.22 34.9995 48.35 34.9459C48.4791 34.8916 48.6065 34.8312 48.7297 34.765C48.8538 34.6987 48.9744 34.6265 49.0908 34.5483C49.2072 34.4701 49.3203 34.3869 49.429 34.2976C49.5369 34.2084 49.6414 34.1141 49.7408 34.0147C49.8394 33.9153 49.9337 33.8116 50.0229 33.7029C50.1121 33.5941 50.1954 33.4811 50.2736 33.3647C50.3517 33.2483 50.4239 33.1277 50.4902 33.0036C50.5565 32.8796 50.6168 32.753 50.6703 32.623C50.7247 32.4938 50.7723 32.3613 50.8131 32.2271C50.8539 32.0928 50.8878 31.9569 50.9159 31.8184C50.9439 31.6807 50.9643 31.5422 50.9788 31.4021C50.9924 31.2627 51 31.1225 51 30.9815V5.29326ZM34.2985 18.1374L49.0951 3.92703C49.3389 4.34931 49.4604 4.80472 49.4596 5.29241V30.9815C49.4596 31.47 49.3381 31.9246 49.0934 32.3469L34.2985 18.1374ZM46.7076 2.54126C47.1596 2.54041 47.5853 2.64577 47.9846 2.85648L26.9898 23.0194C26.9236 23.0832 26.8522 23.1392 26.7757 23.1894C26.6993 23.2395 26.6185 23.2811 26.5336 23.3151C26.4486 23.35 26.3611 23.3754 26.2719 23.3933C26.1818 23.4103 26.0909 23.4188 25.9992 23.4188C25.9082 23.4188 25.8173 23.4103 25.7273 23.3933C25.638 23.3754 25.5505 23.35 25.4656 23.3151C25.3806 23.2811 25.2999 23.2395 25.2234 23.1894C25.147 23.1392 25.0756 23.0832 25.0093 23.0194L4.01455 2.85818C4.41388 2.64661 4.83955 2.54211 5.29072 2.54296L46.7076 2.54126ZM2.90661 32.3469C2.66191 31.9246 2.53956 31.47 2.54041 30.9815V5.29326C2.53956 4.80557 2.66106 4.35016 2.90406 3.92788L17.7024 18.1374L2.90661 32.3469ZM5.29072 33.7335C4.83955 33.7352 4.41388 33.6298 4.01455 33.4183L18.8137 19.2054L23.9447 24.1316C24.0815 24.2633 24.2293 24.3806 24.3891 24.4842C24.548 24.587 24.7162 24.6746 24.8921 24.7451C25.0679 24.8164 25.2498 24.87 25.4358 24.9057C25.6219 24.9422 25.8105 24.96 26 24.96C26.1903 24.96 26.3781 24.9422 26.5642 24.9057C26.7511 24.87 26.9321 24.8164 27.1079 24.7451C27.2847 24.6746 27.452 24.587 27.6118 24.4842C27.7707 24.3806 27.9194 24.2633 28.0561 24.1316L33.1855 19.2054L47.9855 33.4166C47.5861 33.6281 47.1604 33.7326 46.7093 33.7318L5.29072 33.7335Z" fill="black" stroke="black"/>
                                </svg>
                                <span>Email</span>
                            </div>
                            <div class="d-inline-flex align-items-center gap-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="ToggleEmail" checked>
                                    <label class="form-check-label" for="ToggleEmail">
                                        OFF
                                    </label>
                                    <label class="form-check-label" for="ToggleEmail">
                                        ON
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 mt-2 border rounded">
                    <div class="row">
                        <div class="d-flex justify-content-between mb-2 p-2">
                            <div class="d-inline-flex align-items-center gap-4">
                                <svg width="57" height="44" viewBox="0 0 57 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M41.3374 29.7475C41.2768 29.6869 41.2768 29.5647 41.2768 29.4424V17.7844C41.2768 11.1315 36.2269 5.69997 29.7167 5.02815V2.22048C29.7167 1.54866 29.17 1 28.5 1C27.831 1 27.2833 1.54866 27.2833 2.22048V5.02815C20.8347 5.63839 15.7241 11.1315 15.7241 17.7844V29.5031C15.7241 29.6253 15.6626 29.6869 15.6019 29.7475L12.56 32.7997C12.0123 33.3483 11.7688 34.0202 11.7688 34.8133V35.7286C11.7688 37.2552 13.0471 38.5363 14.568 38.5363H23.0853C23.5117 41.1004 25.7623 43.114 28.5 43.114C31.2386 43.114 33.4892 41.1611 33.9156 38.5363H42.4329C43.9538 38.5363 45.2312 37.2552 45.2312 35.7286V34.8133C45.2312 34.0808 44.927 33.3483 44.4409 32.7997L41.3374 29.7475ZM28.5 40.6731C27.162 40.6731 26.0059 39.7577 25.641 38.5363H31.4206C30.9951 39.7577 29.839 40.6731 28.5 40.6731ZM42.7977 35.7286C42.7977 35.9125 42.6158 36.0953 42.4329 36.0953H14.568C14.3852 36.0953 14.2032 35.9125 14.2032 35.7286V34.8133C14.2032 34.691 14.2639 34.6304 14.3245 34.5697L17.3664 31.5176C17.9141 30.968 18.1576 30.2971 18.1576 29.5031V17.7844C18.1576 12.1084 22.7811 7.40846 28.5 7.40846C34.2198 7.40846 38.8433 12.0468 38.8433 17.7844V29.5031C38.8433 30.2355 39.1475 30.968 39.6346 31.5176L42.6764 34.5697C42.7371 34.6304 42.7977 34.7526 42.7977 34.8133V35.7286ZM11.8304 28.4655C11.5868 28.7099 11.2826 28.8322 10.9785 28.8322C10.6743 28.8322 10.3701 28.7099 10.1265 28.4655C8.17919 26.5125 7.08467 23.8877 7.08467 21.1417C7.08467 18.3946 8.17919 15.7708 10.1265 13.8169C10.6136 13.3289 11.3433 13.3289 11.8304 13.8169C12.3165 14.3059 12.3165 15.0383 11.8304 15.5263C10.3094 17.0519 9.51817 19.0049 9.51817 21.1417C9.51817 23.2775 10.3701 25.2305 11.8304 26.757C12.3165 27.245 12.3165 27.9775 11.8304 28.4655ZM7.51016 31.0903C7.99723 31.5783 7.99723 32.3107 7.51016 32.7997C7.26663 33.0432 6.96244 33.1654 6.65825 33.1654C6.35406 33.1654 6.04988 33.0432 5.80634 32.7997C2.70382 29.6869 1 25.5356 1 21.1417C1 16.7468 2.70382 12.5964 5.80634 9.48365C6.29341 8.99564 7.02402 8.99564 7.51016 9.48365C7.99723 9.97165 7.99723 10.7041 7.51016 11.1931C4.89378 13.8169 3.43443 17.3571 3.43443 21.1417C3.43443 24.9253 4.89378 28.4048 7.51016 31.0903ZM46.8744 28.4655C46.6309 28.7099 46.3267 28.8322 46.0225 28.8322C45.7183 28.8322 45.4141 28.7099 45.1706 28.4655C44.6844 27.9775 44.6844 27.245 45.1706 26.757C48.274 23.6442 48.274 18.6391 45.1706 15.5263C44.6844 15.0383 44.6844 14.3059 45.1706 13.8169C45.6576 13.3289 46.3873 13.3289 46.8744 13.8169C50.8895 17.846 50.8895 24.4373 46.8744 28.4655ZM56 21.1417C56 25.5356 54.2971 29.6869 51.1937 32.7997C50.9501 33.0432 50.6459 33.1654 50.3418 33.1654C50.0376 33.1654 49.7334 33.0432 49.4908 32.7997C49.0037 32.3107 49.0037 31.5783 49.4908 31.0903C52.1062 28.4655 53.5665 24.9253 53.5665 21.1417C53.5665 17.3571 52.1062 13.8785 49.4908 11.1931C49.0037 10.7041 49.0037 9.97165 49.4908 9.48365C49.9769 8.99564 50.7075 8.99564 51.1937 9.48365C54.2971 12.5964 56 16.7468 56 21.1417Z" fill="black" stroke="black" stroke-width="0.7"/>
                                </svg>
                                <span>Notification</span>
                            </div>
                            <div class="d-inline-flex align-items-center gap-4">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="NotificationToggle" checked>
                                    <label class="form-check-label" for="NotificationToggle">OFF</label>
                                    <label class="form-check-label" for="NotificationToggle">ON</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="table-responsive">
                <table id="system-logs" class="table table-hover" aria-label="system-logs">
                    <thead>
                        <tr role="row">
                            <th scope="col">Trigger</th>
                            <th scope="col">Permission</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd">
                            <td>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle" checked>
                                    <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                    </label>
                                    <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle">
                                    <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                    </label>
                                    <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle">
                                    <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                    </label>
                                    <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle" checked>
                                    <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                    </label>
                                    <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                </p>
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle" checked>
                                    <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                    </label>
                                    <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Notifications Tab - End --}}

        {{-- Settings Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-settings-tab-pane" role="tabpanel" aria-labelledby="offcanvas-settings-tab" tabindex="0">
            <div class="row mb-4" >
                <div class="col-lg-12">
                    <h2>Business Hours Setup</h2>
                    <p>
                        Your set hours determine when "Business hours" and "After-hours" rates are in effect for customer billing and Provider payroll and prevents services from being scheduled during your "closed" hours.You can also set the times which you are closed and not providing services; this will restrict customers from scheduling.
                    </p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h3>Time Configuration</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="Set_Business_Time_Zone" class="form-label">
                                Set Business Time Zone
                            </label>
                            <input id="Set_Business_Time_Zone" type="" name="" class="form-control" placeholder="Select Time Zone">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">
                                Set Time Format
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Hrs" id="12HrsRadioButton" checked>
                                <label class="form-check-label" for="12HrsRadioButton">
                                    12 Hrs
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Hrs" id="24Hrs">
                                <label class="form-check-label" for="24Hrs">
                                    24 Hrs
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h3>Add Hours Slot In Schedule</h3>
                    <div class="row mb-4">
                        <div class="col-lg-6">
                            <label class="form-label">Type Of Slot</label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="HoursSlot" id="BusinessHours" checked>
                                    <label class="form-check-label" for="BusinessHours">
                                        Business Hours
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="HoursSlot" id="AfterBusinessHours">
                                    <label class="form-check-label" for="AfterBusinessHours">
                                        After Business Hours
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label class="form-label">
                                Select Days & Time
                            </label>
                            <div class="d-lg-flex gap-3 align-items-center mb-3">
                                <input aria-label="Select Day" type="" name="" class="form-control w-auto js-select-day" placeholder="Select Day">
                                <label class="form-label-sm">
                                    Choose Time
                                </label>
                                <div class="d-flex">
                                    <div class="d-flex flex-column justify-content-between">
                                        <label class="form-label-sm" for="set_start_time">
                                            Start Time
                                        </label>
                                        <div class="d-flex gap-2">
                                            <div class="time d-flex align-items-center gap-2">
                                                <div class="hours">12</div>
                                                <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                                </svg>
                                                <div class="mins">59</div>
                                            </div>
                                            <div class="form-check form-switch form-switch-column mb-0">
                                                <input checked class="form-check-input" type="checkbox" role="switch" id="pm" aria-label="PM">
                                                <label class="form-check-label" for="pm">PM</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="d-flex flex-column justify-content-between">
                                        <label class="form-label-sm" for="set_start_time">
                                            End Time
                                        </label>
                                        <div class="d-flex gap-2">
                                            <div class="time d-flex align-items-center gap-2">
                                                <div class="hours">12</div>
                                                <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                                </svg>
                                                <div class="mins">59</div>
                                            </div>
                                            <div class="form-check form-switch form-switch-column mb-0">
                                                <input checked class="form-check-input" type="checkbox" role="switch" id="am" aria-label="AM">
                                                <label class="form-check-label" for="am">AM</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm rounded">
                                Submit
                            </button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="d-lg-flex justify-content-between mb-4">
                                <h3 class="mb-lg-0">Business Schedule</h3>
                                <div class="helping-labels d-flex gap-3">
                                    <div class="d-flex align-items-center">
                                        <span class="label-color bg-success"></span>
                                        Business Hours
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="label-color bg-warning"></span>
                                        After Business Hours
                                    </div>
                                </div>
                            </div>
                            <div>
                                <table class="table table-bordered table-schedule mb-4">
                                    <thead>
                                        <th>
                                            <div class="day">
                                                Monday
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label" >
                                                    ON
                                                </label>
                                                <input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="monday">
                                            </div>
                                        </th>
                                        <th>
                                            <div class="day">
                                                Tuesday
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label">
                                                    ON
                                                </label>
                                                <input class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="tuesday" checked>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="day">
                                                Wednesday
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label">
                                                    ON
                                                </label>
                                                <input class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="wednesday" checked>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="day">
                                                Thursday
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label">
                                                    ON
                                                </label>
                                                <input class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="thursday" checked>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="day">
                                                Friday
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label">
                                                    ON
                                                </label>
                                                <input class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="friday" checked>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="day">
                                                Saturday
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label">
                                                    ON
                                                </label>
                                                <input class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="saturday" checked>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="day">
                                                Sunday
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label" >
                                                    OFF
                                                </label>
                                                <input class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="sunday">
                                            </div>
                                        </th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="time-slot mb-3 bg-success text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                                <div class="time-slot bg-warning text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                            </td>
                                            <td>
                                                <div class="time-slot mb-3 bg-success text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                                <div class="time-slot bg-warning text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                            </td>
                                            <td>
                                                <div class="time-slot mb-3 bg-success text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                                <div class="time-slot bg-warning text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                            </td>
                                            <td>
                                                <div class="time-slot mb-3 bg-success text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                                <div class="time-slot bg-warning text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                            </td>
                                            <td>
                                                <div class="time-slot mb-3 bg-success text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                                <div class="time-slot bg-warning text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                            </td>
                                            <td>
                                                <div class="time-slot mb-3 bg-success text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                                <div class="time-slot bg-warning text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                            </td>
                                            <td>
                                                <div class="time-slot mb-3 bg-secondary text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                                <div class="time-slot bg-secondary text-white">
                                                    09 : 00 AM To 06 : 00 PM
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <h3>Add Holidays / Days Closed</h3>
                            <div class="d-lg-flex gap-3 mb-3">
                                <div>
                                    <label for="select-days" class="form-label">
                                        Select Days / Holidays
                                    </label>
                                    <div class="position-relative">
                                        <input type="" id="select-days" class="form-control w-auto js-single-date" placeholder="MM/DD/YYYY" name="selectHolidays">
                                        <svg class="icon-date cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label">
                                        Repeat Holiday
                                    </label>
                                    <div class="form-check">
                                        <input class="form-check-input" id="yearly" name="yearly" type="checkbox" tabindex=""/>
                                        <label class="form-check-label" for="yearly">
                                            Yearly
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm rounded">
                                Submit
                            </button>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-9">
                            <h3>Listed Holidays</h3>
                            <table class="table table-hover">
                                <thead>
                                    <th scope="col">Date</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Action</th>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>
                                            12/25/2022
                                        </td>
                                        <td>
                                            Tuesday
                                        </td>
                                        <td>
                                            <a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <x-icon name="recycle-bin"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>
                                            12/26/2022
                                        </td>
                                        <td>
                                            Monday
                                        </td>
                                        <td>
                                            <a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <x-icon name="recycle-bin"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td>
                                            01/02/2023
                                        </td>
                                        <td>
                                            Monday
                                        </td>
                                        <td>
                                            <a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <x-icon name="recycle-bin"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>
                                            04/07/2023
                                        </td>
                                        <td>
                                            Friday
                                        </td>
                                        <td>
                                            <a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <x-icon name="recycle-bin"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd">
                                        <td>
                                            01/10/2023
                                        </td>
                                        <td>
                                            Monday
                                        </td>
                                        <td>
                                            <a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <x-icon name="recycle-bin"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>
                                            05/01/2023
                                        </td>
                                        <td>
                                            Monday
                                        </td>
                                        <td>
                                            <a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <x-icon name="recycle-bin"/>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even">
                                        <td>
                                            05/29/2023
                                        </td>
                                        <td>
                                            Monday
                                        </td>
                                        <td>
                                            <a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <x-icon name="recycle-bin"/>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="TheToggleSwitchNameWillBeHere" checked>
                <label class="form-check-label" for="TheToggleSwitchNameWillBeHere">
                    Customer Billing
                </label>
                <label class="form-check-label" for="TheToggleSwitchNameWillBeHere">
                    Customer Billing
                </label>
            </div>
            <div class="col-lg-12 mb-5">
                <label class="form-label" for="billingSchedule">
                    Billing Schedule (Days After Invoice)
                </label>
                <p>Net</p>
                <div class="col-6 d-flex gap-2 align-items-center">
                    <input class="form-control" type="" id="billingSchedule" placeholder="Enter Days">
                    <span>Days</span>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h3>Service Agreements / Terms of Service</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="form-label" for="serviceAgreementsUpload">
                                Upload File
                            </label>
                            <input class="form-control" type="file" id="serviceAgreementsUpload">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="serviceAgreementsURL">
                                URL Link
                            </label>
                            <input type="" name="" class="form-control" placeholder="Enter URL link" id="serviceAgreementsURL">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="form-check">
                        <input class="form-check-input" id="attachSendQuotes" name="attachSendQuotes" type="checkbox" tabindex="" />
                        <label class="form-check-label" for="attachSendQuotes">
                            Attach and Send with Quotes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" id="acknowledgeInitialLogin" name="acknowledgeInitialLogin" type="checkbox" tabindex="" />
                        <label class="form-check-label" for="acknowledgeInitialLogin">
                            Require Customer to Acknowledge on Initial Login
                        </label>
                    </div>
                </div>
            </div>
        </div>
        {{-- Settings Tab - End --}}

        {{-- Logs Tab - Start --}}
        <div class="tab-pane fade" id="offcanvas-log-tab-pane" role="tabpanel" aria-labelledby="offcanvas-log-tab" tabindex="0">
            <div class="row mb-4">
                <h3>Logs</h3>
            </div>
            <div class="row mb-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                        </svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                Action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Another action
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                Something else here
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="d-inline-flex align-items-center gap-4">
                    <label for="show_records_number" class="form-label">
                        Show
                    </label>
                    <select class="form-select" id="show_records_number">
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                    </select>
                </div>
                <div class="d-inline-flex align-items-center gap-4">
                    <label for="search" class="form-label fw-semibold">
                        Search
                    </label>
                    <input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                </div>
            </div>
            <div class="table-responsive">
                <table id="system-logs" class="table table-hover" aria-label="System Logs">
                    <thead>
                        <tr role="row">
                            <th scope="col">Date & Time</th>
                            <th scope="col">Activity</th>
                            <th scope="col">IP Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd">
                            <td>11/23/2022 4:18 AM</td>
                            <td>
                                Specific schedule added by Alex Wonderland
                            </td>
                            <td>39.40.83.18</td>
                        </tr>
                        <tr role="row" class="even">
                            <td>11/23/2022 4:18 AM</td>
                            <td>
                                Document deleted by Alex Wonderland
                            </td>
                            <td>39.40.83.18</td>
                        </tr>
                        <tr role="row" class="even">
                            <td>11/23/2022 4:18 AM</td>
                            <td>
                                Specific schedule added by Alex Wonderland
                            </td>
                            <td>39.40.83.18</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>11/23/2022 4:18 AM</td>
                            <td>
                                Specific schedule added by Alex Wonderland
                            </td>
                            <td>39.40.83.18</td>
                        </tr>
                        <tr role="row" class="even">
                            <td>11/23/2022 4:18 AM</td>
                            <td>
                                Assignment Running Late by Alex Wonderland
                            </td>
                            <td>39.40.83.18</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>11/23/2022 4:18 AM</td>
                            <td>
                                Specific schedule added by Alex Wonderland
                            </td>
                            <td>39.40.83.18</td>
                        </tr>
                        <tr role="row" class="even">
                            <td>11/23/2022 4:18 AM</td>
                            <td>
                                Assignment Checked In by Alex Wonderland
                            </td>
                            <td>39.40.83.18</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>11/23/2022 4:18 AM</td>
                            <td>
                                Specific schedule added by Alex Wonderland
                            </td>
                            <td>39.40.83.18</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <p class="fw-semibold">
                        Showing 1 to 5 of 30 entries
                    </p>
                </div>
                <nav aria-label="Page Navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                Previous
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                Next
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        {{-- Logs Tab - End --}}
    </div>
</div>