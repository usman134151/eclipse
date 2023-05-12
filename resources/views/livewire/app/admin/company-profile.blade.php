<div x-data="{addDocument: false}">
    @if ($showDepartmentProfile)
    @livewire('app.common.department-profile')
    @else
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Company Details
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="home" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                     {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                All Companies
                            </li>
                            <li class="breadcrumb-item">
                                Company Details
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                        data-bs-target="#dashboard-tab-pane" type="button" role="tab"
                                        aria-controls="dashboard-tab-pane" aria-selected="true">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="dashboard" width="31" height="29" viewBox="0 0 31 29">
                                            <use xlink:href="/css/common-icons.svg#tablet"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Dashboard</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="departments-tab" data-bs-toggle="tab"
                                        data-bs-target="#departments-tab-pane" type="button" role="tab"
                                        aria-controls="departments-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="departments" width="29" height="30" viewBox="0 0 29 30">
                                            <use xlink:href="/css/common-icons.svg#gray-department"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Departments</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="schedule-tab" data-bs-toggle="tab"
                                        data-bs-target="#schedule-tab-pane" type="button" role="tab"
                                        aria-controls="schedule-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="schedule" width="30" height="29" viewBox="0 0 30 29">
                                            <use xlink:href="/css/common-icons.svg#gray-calendar"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Schedule</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="service-requests-tab" data-bs-toggle="tab"
                                        data-bs-target="#service-requests-tab-pane" type="button" role="tab"
                                        aria-controls="service-requests-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="service-request" width="28" height="31" viewBox="0 0 28 31">
                                            <use xlink:href="/css/common-icons.svg#gray-journal"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Service Requests</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="permission-tab" data-bs-toggle="tab"
                                        data-bs-target="#drive-tab-pane" type="button" role="tab"
                                        aria-controls="drive-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="drive" width="35" height="30" viewBox="0 0 35 30">
                                            <use xlink:href="/css/common-icons.svg#gray-drive"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Drive</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="permission-tab" data-bs-toggle="tab"
                                        data-bs-target="#feedback-tab-pane" type="button" role="tab"
                                        aria-controls="feedback-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="feedback" width="24" height="29" viewBox="0 0 24 29">
                                            <use xlink:href="/css/common-icons.svg#gray-rated-user"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Feedback</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="invoices-tab" data-bs-toggle="tab"
                                        data-bs-target="#invoices-tab-pane" type="button" role="tab"
                                        aria-controls="invoices-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="invoices" width="29" height="31" viewBox="0 0 29 31">
                                            <use xlink:href="/css/common-icons.svg#gray-invoice"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Invoices</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="payments-tab" data-bs-toggle="tab"
                                        data-bs-target="#payments-tab-pane" type="button" role="tab"
                                        aria-controls="payments-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="payments" width="27" height="31" viewBox="0 0 27 31">
                                            <use xlink:href="/css/common-icons.svg#gray-payment"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Payments</span>
                                    </button>
                                </li>
                                {{--  
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="referrals-tab" data-bs-toggle="tab"
                                        data-bs-target="#referrals-tab-pane" type="button" role="tab"
                                        aria-controls="referrals-tab-panel" aria-selected="false">
                                        <svg aria-label="referrals" width="27" height="29" viewBox="0 0 27 29">
                                            <use xlink:href="/css/common-icons.svg#gray-referral"></use>
                                        </svg>
                                        <span>Referrals</span>
                                    </button>
                                </li>
                                --}}

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="notes-tab" data-bs-toggle="tab"
                                        data-bs-target="#notes-tab-pane" type="button" role="tab"
                                        aria-controls="notes-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="notes" width="28" height="29" viewBox="0 0 28 29">
                                            <use xlink:href="/css/common-icons.svg#gray-note"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Notes</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="reports-tab" data-bs-toggle="tab"
                                        data-bs-target="#reports-tab-pane" type="button" role="tab"
                                        aria-controls="reports-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="reports" width="30" height="28" viewBox="0 0 30 28">
                                            <use xlink:href="/css/common-icons.svg#gray-bar-chart"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Reports</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="notifications-tab" data-bs-toggle="tab"
                                        data-bs-target="#notifications-tab-pane" type="button" role="tab"
                                        aria-controls="notifications-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="notifications" width="26" height="29" viewBox="0 0 26 29">
                                            <use xlink:href="/css/common-icons.svg#gray-bell"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Notifications</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="log-tab" data-bs-toggle="tab"
                                        data-bs-target="#log-tab-pane" type="button" role="tab"
                                        aria-controls="log-tab-panel" aria-selected="false">

                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="logs" width="27" height="27" viewBox="0 0 27 27">
                                            <use xlink:href="/css/common-icons.svg#gray-log"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Log</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#settings-tab-pane" type="button" role="tab"
                                        aria-controls="settings-tab-panel" aria-selected="false">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="settings" width="26" height="27" viewBox="0 0 26 27">
                                            <use xlink:href="/css/common-icons.svg#gray-cog"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        <span>Settings</span>
                                    </button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                {{-- Dashboard Tab - Start --}}
                                <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel"
                                    aria-labelledby="dashboard-tab" tabindex="0">
                                    <div class="col-md-12 mb-md-2 mt-5">
                                        <div class="row mt-2 mb-5">
                                            <div class="col-md-5 me-5">
                                                <div class="mb-4">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="d-inline-block position-relative">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Department Image" />
                                                            </div>
                                                            <div style="margin-left: -1rem;"
                                                                class="d-inline-block position-relative mt-3">
                                                                <svg width="156" height="32" viewBox="0 0 156 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0 0H133L156 32H0V0Z"
                                                                        fill="url(#paint0_linear_2265_83025)" />
                                                                    <defs>
                                                                        <linearGradient id="paint0_linear_2265_83025"
                                                                            x1="78" y1="0" x2="140.587" y2="0"
                                                                            gradientUnits="userSpaceOnUse">
                                                                            <stop stop-color="#213969" />
                                                                            <stop offset="1" stop-color="#204387" />
                                                                        </linearGradient>
                                                                    </defs>
                                                                </svg>
                                                                <div
                                                                    class="position-absolute bottom-0 p-0 d-flex justify-content-center align-items-center">
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
                                                                                Mrs Smith 98 Shirley Street PIMPAMA QLD
                                                                                4209 AUSTRALIA
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <p class="text-sm">
                                                                                <a href="#"
                                                                                    class="font-family-tertiary text-primary">
                                                                                    Mrs 98 Shirley Street PIMPAMA QLD
                                                                                    4209 AUSTRALIA
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
                                                                        {{-- Updated by Shanila to Add svg icon--}}
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
                                                                        {{-- End of update by Shanila --}}
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
                                                                <table id="unassigned_data" class="table table-hover"
                                                                    aria-label="Business Hours">
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
                                                <button type="button"
                                                    class="d-inline-flex align-items-center btn btn-outline-dark rounded px-3 py-2 gap-2">
                                                    <span>Lock Account</span>
                                                </button>
                                                <button type="button"
                                                    class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                                    <span>Resend Welcome Email</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Dashboard Tab - End --}}

                                {{-- Schedule Tab - Start --}}
                                <div class="tab-pane fade" id="schedule-tab-pane" role="tabpanel"
                                    aria-labelledby="schedule-tab" tabindex="0">
                                    <div class="row mb-4">
                                        <h3>Schedule</h3>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <div class="d-inline-flex align-items-center gap-4">
                                            <div class="mb-4 mb-lg-0">
                                                <select
                                                    class="form-select form-select-sm rounded bg-secondary text-white rounded"
                                                    aria-label="Advance Filter" id="show_status">
                                                    <option>Advance Filter</option>
                                                </select>
                                            </div>
                                            <div class="mb-4 mb-lg-0">
                                                <button type="button" class="btn btn-xs btn-outline-dark rounded">
                                                    Clear All
                                                </button>
                                            </div>
                                        </div>
                                        <div class="d-inline-flex align-items-center gap-4 me-3">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle btn-outline-primary"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg aria-label="Export Button" width="23" height="26" viewBox="0 0 23 26">
                                                        <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                        </use>
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
                                    </div>
                                    <div>
                                        <img src="/html-prototype/images/temp/img-placeholder-calendar.png"
                                            class="w-100" alt="Dashboard Calendar" />
                                    </div>
                                </div>
                                {{-- Schedule Tab - End --}}

                                {{-- Departments Tab - Start --}}
                                <div class="tab-pane fade" id="departments-tab-pane" role="tabpanel"
                                    aria-labelledby="departments-tab-tab" tabindex="0">
                                    <div class="row mb-3">
                                        <h2>Company Departments</h2>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <div class="d-inline-flex align-items-center gap-4">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle btn-outline-primary"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                           {{-- Updated by Shanila to Add svg icon--}}
                                                <svg aria-label="Export Button" width="23" height="26" viewBox="0 0 23 26">
                                                    <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                    </use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
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
                                        <div class="d-inline-flex align-items-center gap-4 me-3">
                                            <a href="/admin/department/create" type="button"
                                                class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                                {{-- Updated by Shanila to Add svg icon--}}
                                                <svg aria-label="add department" width="20" height="20" viewBox="0 0 20 20">
                                                    <use xlink:href="/css/common-icons.svg#plus">
                                                    </use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                <span>Add Department</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4 mb-3"></div>
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
                                            <input type="search" class="form-control" id="search" name="search"
                                                placeholder="Search here" autocomplete="on" />
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table id="unassigned_data" class="table table-hover"
                                                aria-label="Department Table">
                                                <thead>
                                                    <tr role="row">
                                                        <th scope="col" class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select All Departments">
                                                        </th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Phone Number</th>
                                                        <th scope="col" class="text-center">
                                                            Total Departments
                                                        </th>
                                                        <th scope="col" class="text-center">
                                                            Department User
                                                        </th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg aria-label="More Options" width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg aria-label="More Options" width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg aria-label="More Options" width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg aria-label="More Options" width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg aria-label="More Options" width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg aria-label="More Options" width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg aria-label="More Options" width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg aria-label="More Options" width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Department ">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img class="img-fluid rounded-circle"
                                                                        src="/tenant/images/portrait/small/image4.png" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <h6 class="fw-semibold">
                                                                        Computer Science
                                                                    </h6>
                                                                    <p>www.software.com</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p>(923) 023-9683</p>
                                                        </td>
                                                        <td class="text-center">5</td>
                                                        <td class="text-center">5</td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#" title="Edit Company"
                                                                    aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="View Company"
                                                                    aria-label="View Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    wire:click="showDepartmentProfile">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="View Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#view">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <div class="d-flex actions">
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            title="More Options"
                                                                            aria-label="More Options"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                                            <svg aria-label="More Options" width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu">
                                                                            <a title="Edit" aria-label="Edit" href="#"
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-eye"></i>
                                                                                Action
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                        {{-- Icon Legend Bar - Start --}}
						                <div class="d-flex actions gap-3 justify-content-end mb-2">
                                            <div class="d-flex gap-2 align-items-center">
						                		<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                        </use>
                                                    </svg>
						                		</a>
						                		<span class="text-sm">
						                			Edit
						                		</span>
						                	</div>
						                	<div class="d-flex gap-2 align-items-center">
						                		<a href="#" title="View" aria-label="View"
						                			class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#view">
                                                        </use>
                                                    </svg>
						                		</a>
						                		<span class="text-sm">
                                                    View
						                		</span>
						                	</div>
						                </div>
						                {{-- Icon Legend Bar - End --}}
                                    </div>
                                </div>
                                {{-- Departments Tab - End --}}

                                {{-- Drive Tab - Start --}}
                                <div class="tab-pane fade" id="drive-tab-pane" role="tabpanel"
                                    aria-labelledby="drive-tab" tabindex="0">
                                    <h3>Drive</h3>
                                    <p>
                                        Here you can manage company required documents. You will receive notifications
                                        when your credentials are approaching expiration or have expired.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-4 col-12 mb-4">
                                            <label class="form-label" for="search">
                                                Search
                                            </label>
                                            <input type="text" id="search" class="form-control" name="search"
                                                placeholder="Keyword Search" />
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <label class="form-label" for="search">
                                                Tags
                                            </label>
                                            <input type="text" id="tags" class="form-control" name="search"
                                                placeholder="tags" />
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
                                            <button @click="addDocument = true"
                                                class="btn btn-secondary btn-outline-secondary" type="button">Choose
                                                File</button>
                                            {{-- <input type="file" id="upload-document" class="form-control"
                                                name="upload-document" placeholder="upload-document" /> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle btn-outline-primary"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{-- Updated by Shanila to Add svg icon--}}
                                                <svg aria-label="Export Button" width="23" height="26" viewBox="0 0 23 26">
                                                    <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                    </use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
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
                                            <img src="/tenant/images/img-placeholder-document.jpg" />
                                            <p>Certification</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- Drive Tab -End --}}

                                {{-- Feedback Tab - Start --}}
                                <div class="tab-pane fade" id="feedback-tab-pane" role="tabpanel"
                                    aria-labelledby="feedback-tab" tabindex="0">
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
                                                    <input type="" name="" class="form-control js-single-date"
                                                        placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
                                                    <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                                            fill="black" />
                                                    </svg>
                                                </div>
                                            </div>
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

                                        <div class="col-md-7">
                                            <button class="btn btn-primary rounded">
                                                Feedback Received
                                            </button>
                                            <button class="btn btn-inactive rounded">
                                                Feedback Given
                                            </button>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-end">
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle btn-outline-primary"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                   {{-- Updated by Shanila to Add svg icon--}}
                                                   <svg aria-label="Export Button" width="23" height="26" viewBox="0 0 23 26">
                                                    <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                    </use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
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
                                    </div>
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table id="unassigned_data" class="table table-hover"
                                                aria-label="Department Table">
                                                <thead>
                                                    <tr role="row">
                                                        <th scope="col" class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select All Departments">
                                                        </th>
                                                        <th scope="col">Customer</th>
                                                        <th scope="col">Provider</th>
                                                        <th scope="col">Feedback</th>
                                                        <th scope="col">Stars</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Customer Image">
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
                                                                    <img src="/tenant/images/portrait/small/avatar-s-21.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Provider Image">
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
                                                            The way you gave that presentation today really good. I'm so
                                                            impressed by your dedication to learning.
                                                        </td>
                                                        <td>
                                                            <div class="row mt-4">
                                                                <div class="col-md-12 d-flex">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Rating" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Rating"  width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Rating"  width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Rating"  width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Rating"  width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="javascript:void(0)" title="Hide"
                                                                    aria-label="Hide Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Hide Company"  width="24" height="19" viewBox="0 0 24 19">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="#" title="Edit Company" aria-label="Edit"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="Delete"
                                                                    aria-label="Delete Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Customer Image">
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
                                                                    <img src="/tenant/images/portrait/small/avatar-s-21.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Provider Image">
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
                                                            The way you gave that presentation today really good. I'm so
                                                            impressed by your dedication to learning.
                                                        </td>
                                                        <td>
                                                            <div class="row mt-4">
                                                                <div class="col-md-12 d-flex">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg  aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="javascript:void(0)" title="Hide"
                                                                    aria-label="Hide Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg  aria-label="Hide Company"  width="24" height="19" viewBox="0 0 24 19">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="#" title="Edit Company" aria-label="Edit"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="Delete"
                                                                    aria-label="Delete Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Customer Image">
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
                                                                    <img src="/tenant/images/portrait/small/avatar-s-21.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Provider Image">
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
                                                            The way you gave that presentation today really good. I'm so
                                                            impressed by your dedication to learning.
                                                        </td>
                                                        <td>
                                                            <div class="row mt-4">
                                                                <div class="col-md-12 d-flex">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg  aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="javascript:void(0)" title="Hide"
                                                                    aria-label="Hide Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg width="24" height="19" viewBox="0 0 24 19">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="#" title="Edit Company" aria-label="Edit"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="Delete"
                                                                    aria-label="Delete Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Customer Image">
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
                                                                    <img src="/tenant/images/portrait/small/avatar-s-21.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Provider Image">
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
                                                            The way you gave that presentation today really good. I'm so
                                                            impressed by your dedication to learning.
                                                        </td>
                                                        <td>
                                                            <div class="row mt-4">
                                                                <div class="col-md-12 d-flex">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="javascript:void(0)" title="Hide"
                                                                    aria-label="Hide Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Hide Company" width="24" height="19" viewBox="0 0 24 19">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="#" title="Edit Company" aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="Delete"
                                                                    aria-label="Delete Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-2">
                                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Customer Image">
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
                                                                    <img src="/tenant/images/portrait/small/avatar-s-21.jpg"
                                                                        class="img-fluid rounded-circle"
                                                                        alt="Provider Image">
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
                                                            The way you gave that presentation today really good. I'm so
                                                            impressed by your dedication to learning.
                                                        </td>
                                                        <td>
                                                            <div class="row mt-4">
                                                                <div class="col-md-12 d-flex">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#filled-star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    <svg aria-label="Stars" width="17" height="16" viewBox="0 0 17 16">
                                                                        <use xlink:href="/css/common-icons.svg#star">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="javascript:void(0)" title="Hide"
                                                                    aria-label="Hide Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Hide Company" width="24" height="19" viewBox="0 0 24 19">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="#" title="Edit Company" aria-label="Edit Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                </a>
                                                                <a href="javascript:void(0)" title="Delete"
                                                                    aria-label="Delete Company"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                                    <svg aria-label="Delete Company"  width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
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
                                        {{-- Icon Legend Bar - Start --}}
						                <div class="d-flex actions gap-3 justify-content-end mb-2">
                                            <div class="d-flex gap-2 align-items-center">
						                		<a href="#" title="Hide" aria-label="Hide" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg aria-label="Hide Company" width="24" height="19" viewBox="0 0 24 19">
                                                        <use
                                                            xlink:href="/css/common-icons.svg#hide-icon">
                                                        </use>
                                                    </svg>
						                		</a>
						                		<span class="text-sm">
						                			Hide
						                		</span>
						                	</div>
						                	<div class="d-flex gap-2 align-items-center">
						                		<a href="#" title="Edit" aria-label="Edit"
						                			class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                        </use>
                                                    </svg>
						                		</a>
						                		<span class="text-sm">
                                                    Edit
						                		</span>
						                	</div>
						                	<div class="d-flex gap-2 align-items-center">
						                		<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						                			<svg aria-label="Delete"  width="21" height="21" viewBox="0 0 21 21">
                                                        <use
                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                        </use>
                                                    </svg>
						                		</a>
						                		<span class="text-sm">
						                			Delete
						                		</span>
						                	</div>
						                </div>
						                {{-- Icon Legend Bar - End --}}
                                    </div>
                                </div>
                                {{-- Feedback Tab - End --}}

                                {{-- Invoices Tab - Start --}}
                                <div class="tab-pane fade" id="invoices-tab-pane" role="tabpanel"
                                    aria-labelledby="invoices-tab" tabindex="0">
                                    <h3>
                                        Company Invoices
                                    </h3>
                                    
                                    <div class="d-flex justify-content-between">
                                        <div class="row gap-4">
                                            <x-advancefilters type="invoice-filters"/>
                                        </div>
                                        <div class="d-inline-flex align-items-center gap-4">
                                             <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle btn-outline-primary"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{-- Updated by Shanila to Add svg icon--}}
                                                <svg aria-label="Export Button" width="23" height="26" viewBox="0 0 23 26">
                                                    <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                    </use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
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
                                    </div>
                                    <div class="table-responses">
                                        <table id="remittances" class="table table-hover" aria-label="Remittance">
                                            <thead>
                                                <tr role="row">
                                                    <th scope="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="" name=""
                                                                type="checkbox" tabindex="" aria-label="checkbox">
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
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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

                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" >
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" >
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="pending" class="fill-warning"  width="12" height="12" viewBox="0 0 512 512">
                                                                <use xlink:href="/css/common-icons.svg#yellow-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Issued</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        - {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Pending" width="12" height="12" viewBox="0 0 12 12">
                                                            <use xlink:href="/css/common-icons.svg#red-dot">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                            <p>Pending</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive"  width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div aria-label="Paid" class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg  width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Issued" class="fill-warning"  width="12" height="12" viewBox="0 0 512 512">
                                                                <use xlink:href="/css/common-icons.svg#yellow-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Issued</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a  href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>
                                                            87109
                                                        </a>
                                                        <p class="mt-1">
                                                            08/24/2022
                                                        </p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/image4.png"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
                                                                  {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                                <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                                </svg>
                                                            {{-- End of update by Shanila --}}
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
                                    {{-- Icon Legend Bar - Start --}}
					                	<div class="d-flex actions gap-3 justify-content-end mb-2">
                                            <div class="d-flex gap-2 align-items-center">
					                			<a href="#" title="Revert" aria-label="Revert" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					                				<svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                                        </use>
                                                    </svg>
					                			</a>
					                			<span class="text-sm">
					                				Revert
					                			</span>
					                		</div>
					                		<div class="d-flex gap-2 align-items-center">
					                			<a href="#" title="Record Payment" aria-label="Record Payment"
					                				class="btn btn-sm btn-secondary rounded btn-hs-icon">
					                				<svg aria-label="Remitance Inactive" width="19" height="20" viewBox="0 0 19 20">
                                                        <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                                        </use>
                                                    </svg>
					                			</a>
					                			<span class="text-sm">
					                				Record Payment
					                			</span>
					                		</div>
					                		<div class="d-flex gap-2 align-items-center">
					                			<a href="#" title="Download Invoice" aria-label="Download Invoice" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					                				<svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                                    </svg>
					                			</a>
					                			<span class="text-sm">
					                				Download Invoice
					                			</span>
					                		</div>
					                	</div>
					                	{{-- Icon Legend Bar - End --}}
                                </div>
                                {{-- Invoices Tab : End --}}

                                {{-- Payments Tab - Start --}}
                                <div class="tab-pane fade" id="payments-tab-pane" role="tabpanel"
                                    aria-labelledby="payments-tab" tabindex="0">
                                    <div class="row">
                                        <h3>Payments</h3>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="row gap-4">
                                            <x-advancefilters type="invoice-filters"/>
                                        </div>
                                        <div class="d-inline-flex align-items-center gap-4">
                                             <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle btn-outline-primary"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{-- Updated by Shanila to Add svg icon--}}
                                                <svg aria-label="Export Button" width="23" height="26" viewBox="0 0 23 26">
                                                    <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                    </use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
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
                                    </div>
                                    <div class="table-responses">
                                        <table id="remittances" class="table table-hover" aria-label="Remittance">
                                            <thead>
                                                <tr role="row">
                                                    <th scope="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="" name=""
                                                                type="checkbox" tabindex="" aria-label="checkbox">
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
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Paid"  width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}

                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" aria-label="List Checkbox"
                                                                id="" name="" type="checkbox" tabindex="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a>87109</a>
                                                        <p class="mt-1">08/24/2022</p>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-2">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    class="img-fluid rounded-circle"
                                                                    alt="Team Profile Image">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </td>
                                                    <td class="text-center">Direct Deposit</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-2">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Paid</p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <a href="#" title="view" aria-label="view"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="send" aria-label="send"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                <svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                                    <use xlink:href="/css/common-icons.svg#mapview">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="edit" aria-label="edit"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#pencil">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="back" aria-label="back"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            {{-- End of update by Shanila --}}
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
                                    {{-- Icon Legend Bar - Start --}}
					                	<div class="d-flex actions gap-3 justify-content-end mb-2">
                                            <div class="d-flex gap-2 align-items-center">
					                			<a href="#" title="View Receipt" aria-label="View Receipt" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					                				<svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                                        <use xlink:href="/css/common-icons.svg#eye-icon">
                                                        </use>
                                                    </svg>
					                			</a>
					                			<span class="text-sm">
					                				View Receipt
					                			</span>
					                		</div>
                                            <div class="d-flex gap-2 align-items-center">
					                			<a href="#" title="Send Receipt" aria-label="Send Receipt" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					                				<svg aria-label="send" width="20" height="21" viewBox="0 0 20 21">
                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                        </use>
                                                    </svg>
					                			</a>
					                			<span class="text-sm">
					                				Send Receipt
					                			</span>
					                		</div>
                                            <div class="d-flex gap-2 align-items-center">
					                			<a href="#" title="Edit Payment" aria-label="Edit Payment" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					                				<svg aria-label="edit" width="20" height="20" viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                        </use>
                                                    </svg>
					                			</a>
					                			<span class="text-sm">
					                				Edit Payment
					                			</span>
					                		</div>
					                		<div class="d-flex gap-2 align-items-center">
					                			<a href="#" title="Issue Refund" aria-label="Issue Refund"
					                				class="btn btn-sm btn-secondary rounded btn-hs-icon">
					                				<svg aria-label="Issue Refund" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                                        </use>
                                                    </svg>
					                			</a>
					                			<span class="text-sm">
					                				Issue Refund
					                			</span>
					                		</div>
					                		<div class="d-flex gap-2 align-items-center">
					                			<a href="#" title="Delete Payment" aria-label="Delete Payment" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					                				<svg aria-label="Delete Payment" width="21" height="21" viewBox="0 0 21 21">
                                                        <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                        </use>
                                                    </svg>
					                			</a>
					                			<span class="text-sm">
					                				Delete Payment
					                			</span>
					                		</div>
					                	</div>
					                	{{-- Icon Legend Bar - End --}}
                                </div>
                                {{-- Payments Tab - End --}}

                                {{-- Referrals Tab - Start --}}
                                <div class="tab-pane fade" id="referrals-tab-pane" role="tabpanel"
                                    aria-labelledby="referrals-tab" tabindex="0">
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
                                                    <input type="" name="" class="form-control js-single-date"
                                                        placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="date" class="icon-date" width="20" height="20" viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                </div>
                                            </div>
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
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle btn-outline-primary"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Export Button" width="23" height="26" viewBox="0 0 23 26">
                                                        <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
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
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    height="350px" width="200px"
                                                                    class="img-fluid rounded-circle" alt="">
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
                                                           {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="pending" width="12" height="12" viewBox="0 0 12 12">
                                                            <use xlink:href="/css/common-icons.svg#red-dot">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                            <p>Pending</p>
                                                        </div>
                                                    </td>
                                                    <td>10/10/2022 09:45 PM</td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Remitance Inactive"  width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-1">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    height="350px" width="200px"
                                                                    class="img-fluid rounded-circle" alt="">
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
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Approved" width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Approved</p>
                                                        </div>
                                                    </td>
                                                    <td>10/10/2022 09:45 PM</td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Remitance Inactive"  width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-1">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    height="350px" width="200px"
                                                                    class="img-fluid rounded-circle" alt="">
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
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Pending" width="12" height="12" viewBox="0 0 12 12">
                                                            <use xlink:href="/css/common-icons.svg#red-dot">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                            <p>Pending</p>
                                                        </div>
                                                    </td>
                                                    <td>10/10/2022 09:45 PM</td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-1">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    height="350px" width="200px"
                                                                    class="img-fluid rounded-circle" alt="">
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
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Approved" width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Approved</p>
                                                        </div>
                                                    </td>
                                                    <td>10/10/2022 09:45 PM</td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                               {{-- Updated by Shanila to Add svg icon--}}
                                                               <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="align-middle">
                                                        <div class="row g-2">
                                                            <div class="col-md-1">
                                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                                    height="350px" width="200px"
                                                                    class="img-fluid rounded-circle" alt="">
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
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Approved" width="12" height="12" viewBox="0 0 12 12">
                                                                <use xlink:href="/css/common-icons.svg#green-dot">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                            <p>Approved</p>
                                                        </div>
                                                    </td>
                                                    <td>10/10/2022 09:45 PM</td>
                                                    <td>
                                                        <div class="d-flex actions">
                                                            <a href="#" title="Remitance Inactive"
                                                                aria-label="Remitance Inactive"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="Remitance Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    {{-- Icon Legend Bar - Start --}}
						<div class="d-flex actions gap-3 justify-content-end mb-2">
							<div class="d-flex gap-2 align-items-center">
								<a href="#" title="Delete" aria-label="Delete"
									class="btn btn-sm btn-secondary rounded btn-hs-icon">
									{{-- Updated by Shanila to Add svg icon--}}
									<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
                                        <use xlink:href="/css/common-icons.svg#recycle-bin">
                                        </use>
                                    </svg>
								{{-- End of update by Shanila --}}
								</a>
								<span class="text-sm">
									Delete
								</span>
							</div>
						</div>
						{{-- Icon Legend Bar - End --}}
                                </div>
                                {{-- Referrals Tab - End --}}

                                {{-- Notes Tab - Start --}}
                                <div class="tab-pane fade" id="notes-tab-pane" role="tabpanel"
                                    aria-labelledby="notes-tab" tabindex="0">
                                    <div class="row">
                                        <h3>Notes</h3>
                                        <div class="col-md-6 col-12 mb-4">
                                            <label class="form-label" for="notes-column">
                                                Add Notes
                                            </label>
                                            <textarea class="form-control" rows="3" placeholder="" name="notesColumn"
                                                id="notes-column"></textarea>
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
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                    </p>
                                                </div>
                                                <div class="d-flex actions mx-2">
                                                    <a href="#" title="Inactive" aria-label="Inactive"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                                        <svg width="20" height="20" viewBox="0 0 20 20">
                                                            <use xlink:href="/css/common-icons.svg#pencil">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" title="Inactive" aria-label="Inactive"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                            <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
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
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                        sed do eiusmod
                                                        <span class="text-primary">
                                                            @Admin @Comapny
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="d-flex actions mx-2">
                                                    <a href="#" title="Inactive" aria-label="Edit"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                                        <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
                                                            <use xlink:href="/css/common-icons.svg#pencil">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" title="Inactive" aria-label="Inactive"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                            <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
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
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                        sed do eiusmod Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod
                                                        <span class="text-primary">
                                                            @Thomas_charles
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="d-flex actions mx-2">
                                                    <a href="#" title="Inactive" aria-label="Inactive"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                                        <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
                                                            <use xlink:href="/css/common-icons.svg#pencil">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" title="Inactive" aria-label="Inactive"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Inactive"  width="21" height="21" viewBox="0 0 21 21">
                                                            <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
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
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                        sed do eiusmod Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit, sed do eiusmod
                                                        <span class="text-primary">
                                                            @Thomas_charles
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="d-flex actions mx-2">
                                                    <a href="#" title="Inactive" aria-label="Inactive"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                                        <svg width="20" height="20" viewBox="0 0 20 20">
                                                            <use xlink:href="/css/common-icons.svg#pencil">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" title="Inactive" aria-label="Inactive"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Inactive" width="21" height="21" viewBox="0 0 21 21">
                                                            <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Notes Tab -End --}}

                                {{-- Notifications Tab - Start --}}
                                <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel"
                                    aria-labelledby="notifications-tab" tabindex="0">
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="text" width="47" height="41" class="ms-2" viewBox="0 0 47 41">
                                                            <use xlink:href="/css/common-icons.svg#text">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}

                                                        <span>Text</span>
                                                    </div>
                                                    <div class="d-inline-flex align-items-center gap-4">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="ToggleText" checked>
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

                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="email" width="52" height="36" viewBox="0 0 52 36">
                                                            <use xlink:href="/css/common-icons.svg#email">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        <span>Email</span>
                                                    </div>
                                                    <div class="d-inline-flex align-items-center gap-4">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="ToggleEmail" checked>
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
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Notification" width="57" height="44" viewBox="0 0 57 44">
                                                            <use xlink:href="/css/common-icons.svg#notification">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        <span>Notification</span>
                                                    </div>
                                                    <div class="d-inline-flex align-items-center gap-4">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="NotificationToggle" checked>
                                                            <label class="form-check-label"
                                                                for="NotificationToggle">OFF</label>
                                                            <label class="form-check-label"
                                                                for="NotificationToggle">ON</label>
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
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit, sed do eiusmod
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="permissions-toggle" checked>
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
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="permissions-toggle">
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
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="permissions-toggle">
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
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit, sed do eiusmod
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="permissions-toggle" checked>
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
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                            do eiusmod Lorem ipsum dolor sit amet, consectetur
                                                            adipiscing elit, sed do eiusmod
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                role="switch" id="permissions-toggle" checked>
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
                                <div class="tab-pane fade" id="settings-tab-pane" role="tabpanel"
                                    aria-labelledby="settings-tab" tabindex="0">
                                    <div class="row between-section-segment-spacing">
                                        <div class="col-lg-12">
                                            <h2>Business Hours Setup</h2>
                                            <p>
                                                Your set hours determine when "Business hours" and "After-hours" rates
                                                are in effect for customer billing and Provider payroll and prevents
                                                services from being scheduled during your "closed" hours.You can also
                                                set the times which you are closed and not providing services; this will
                                                restrict customers from scheduling.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row between-section-segment-spacing">
                                        <div class="col-lg-12">
                                            <h3>Time Configuration</h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label for="Set_Business_Time_Zone" class="form-label">
                                                        Set Business Time Zone
                                                    </label>
                                                    <input id="Set_Business_Time_Zone" type="" name=""
                                                        class="form-control" placeholder="Select Time Zone">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label">
                                                        Set Time Format
                                                    </label>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Hrs"
                                                            id="12HrsRadioButton" checked>
                                                        <label class="form-check-label" for="12HrsRadioButton">
                                                            12 Hrs
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="Hrs"
                                                            id="24Hrs">
                                                        <label class="form-check-label" for="24Hrs">
                                                            24 Hrs
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row between-section-segment-spacing">
                                        <div class="col-lg-12 ">
                                            <h3>Add Hours Slot In Schedule</h3>
                                            <div class="row mb-4">
                                                <div class="col-lg-6">
                                                    <label class="form-label">Type Of Slot</label>
                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="HoursSlot" id="BusinessHours" checked>
                                                            <label class="form-check-label" for="BusinessHours">
                                                                Business Hours
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="HoursSlot" id="AfterBusinessHours">
                                                            <label class="form-check-label" for="AfterBusinessHours">
                                                                After Business Hours
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row inner-section-segment-spacing">
                                                <div class="col-lg-12">
                                                    <label class="form-label">
                                                        Select Days & Time
                                                    </label>
                                                    <div class="d-lg-flex gap-3 align-items-center mb-3">
                                                        <input aria-label="Select Day" type="" name=""
                                                            class="form-control w-auto js-select-day"
                                                            placeholder="Select Day">
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
                                                                        <svg width="5" height="19" viewBox="0 0 5 19"
                                                                            fill="none"
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
                                                                            type="checkbox" role="switch" id="pm"
                                                                            aria-label="PM">
                                                                        <label class="form-check-label"
                                                                            for="pm">PM</label>
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
                                                                        <svg width="5" height="19" viewBox="0 0 5 19"
                                                                            fill="none"
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
                                                                            type="checkbox" role="switch" id="am"
                                                                            aria-label="AM">
                                                                        <label class="form-check-label"
                                                                            for="am">AM</label>
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
                                            <div class="row inner-section-segment-spacing">
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
                                                                        <label class="form-check-label">
                                                                            ON
                                                                        </label>
                                                                        <input checked class="form-check-input"
                                                                            aria-label="Toggle Business Schedule Status"
                                                                            type="checkbox" role="switch" id="monday">
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
                                                                        <input class="form-check-input"
                                                                            aria-label="Toggle Business Schedule Status"
                                                                            type="checkbox" role="switch" id="tuesday"
                                                                            checked>
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
                                                                        <input class="form-check-input"
                                                                            aria-label="Toggle Business Schedule Status"
                                                                            type="checkbox" role="switch" id="wednesday"
                                                                            checked>
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
                                                                        <input class="form-check-input"
                                                                            aria-label="Toggle Business Schedule Status"
                                                                            type="checkbox" role="switch" id="thursday"
                                                                            checked>
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
                                                                        <input class="form-check-input"
                                                                            aria-label="Toggle Business Schedule Status"
                                                                            type="checkbox" role="switch" id="friday"
                                                                            checked>
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
                                                                        <input class="form-check-input"
                                                                            aria-label="Toggle Business Schedule Status"
                                                                            type="checkbox" role="switch" id="saturday"
                                                                            checked>
                                                                    </div>
                                                                </th>
                                                                <th>
                                                                    <div class="day">
                                                                        Sunday
                                                                    </div>
                                                                    <div class="form-check form-switch">
                                                                        <label class="form-check-label">
                                                                            OFF
                                                                        </label>
                                                                        <input class="form-check-input"
                                                                            aria-label="Toggle Business Schedule Status"
                                                                            type="checkbox" role="switch" id="sunday">
                                                                    </div>
                                                                </th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div
                                                                            class="time-slot mb-3 bg-success text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                        <div class="time-slot bg-warning text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="time-slot mb-3 bg-success text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                        <div class="time-slot bg-warning text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="time-slot mb-3 bg-success text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                        <div class="time-slot bg-warning text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="time-slot mb-3 bg-success text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                        <div class="time-slot bg-warning text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="time-slot mb-3 bg-success text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                        <div class="time-slot bg-warning text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="time-slot mb-3 bg-success text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                        <div class="time-slot bg-warning text-white">
                                                                            09 : 00 AM To 06 : 00 PM
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="time-slot mb-3 bg-secondary text-white">
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
                                            <div class="row inner-section-segment-spacing">
                                                <div class="col-12">
                                                    <h3>Add Holidays / Days Closed</h3>
                                                    <div class="d-lg-flex gap-3 mb-3">
                                                        <div>
                                                            <label for="select-days" class="form-label">
                                                                Select Days / Holidays
                                                            </label>
                                                            <div class="position-relative">
                                                                <input type="" id="select-days"
                                                                    class="form-control w-auto js-single-date"
                                                                    placeholder="MM/DD/YYYY" name="selectHolidays">
                                                                <svg class="icon-date cursor-pointer" width="20"
                                                                    height="20" viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label class="form-label">
                                                                Repeat Holiday
                                                            </label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="yearly"
                                                                    name="yearly" type="checkbox" tabindex="" />
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
                                                                    <a href="#" aria-label="delete"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="delete"  width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
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
                                                                    <a href="#" aria-label="delete"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="delete" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
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
                                                                    <a href="#" aria-label="delete"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="delete" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
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
                                                                    <a href="#" aria-label="delete"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="delete" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
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
                                                                    <a href="#" aria-label="delete"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="delete" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
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
                                                                    <a href="#" aria-label="delete"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="delete" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
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
                                                                    <a href="#" aria-label="delete"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="delete" width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
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
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="TheToggleSwitchNameWillBeHere" checked>
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
                                            <input class="form-control" type="" id="billingSchedule"
                                                placeholder="Enter Days">
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
                                                    <input class="form-control" type="file"
                                                        id="serviceAgreementsUpload">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="form-label" for="serviceAgreementsURL">
                                                        URL Link
                                                    </label>
                                                    <input type="" name="" class="form-control"
                                                        placeholder="Enter URL link" id="serviceAgreementsURL">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-12">
                                            <div class="form-check">
                                                <input class="form-check-input" id="attachSendQuotes"
                                                    name="attachSendQuotes" type="checkbox" tabindex="" />
                                                <label class="form-check-label" for="attachSendQuotes">
                                                    Attach and Send with Quotes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="acknowledgeInitialLogin"
                                                    name="acknowledgeInitialLogin" type="checkbox" tabindex="" />
                                                <label class="form-check-label" for="acknowledgeInitialLogin">
                                                    Require Customer to Acknowledge on Initial Login
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Settings Tab - End --}}

                                {{-- Logs Tab - Start --}}
                                <div class="tab-pane fade" id="log-tab-pane" role="tabpanel" aria-labelledby="log-tab"
                                    tabindex="0">
                                    <div class="row mb-4">
                                        <h3>Logs</h3>
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
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle btn-outline-primary"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Export Button" width="23" height="26" viewBox="0 0 23 26">
                                                        <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
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
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('modals.mark-as-paid')
    @include('panels.common.add-document')
    @include('modals.mark-as-paid')
    @endif
</div>
