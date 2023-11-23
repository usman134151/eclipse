<div x-data="{ addDocument: false, invoiceDetailsPanel: false }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @if ($showDepartmentProfile)
        @livewire('app.common.department-profile', ['departmentId' => $department['id']])
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
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    {{ $isCustomer ? 'Home' : 'All Companies' }}
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
            @if (is_null($company))
                <div id="loader-section" class="loader-section" wire:loading>
                    <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                        <div class="spinner-border" role="status" aria-live="polite">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            @else
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
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="dashboard" width="31" height="29"
                                                    viewBox="0 0 31 29">
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
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="departments" width="29" height="30"
                                                    viewBox="0 0 29 30">
                                                    <use xlink:href="/css/common-icons.svg#gray-department"></use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                <span>Departments</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="users-tab" data-bs-toggle="tab"
                                                data-bs-target="#users-tab-pane" type="button" role="tab"
                                                aria-controls="users-tab-panel" aria-selected="false">
                                                <svg aria-label="Users" width="31" height="24"
                                                    viewBox="0 0 31 24">
                                                    <use xlink:href="/css/common-icons.svg#users"></use>
                                                </svg>
                                                <span>Users</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="schedule-tab" data-bs-toggle="tab"
                                                data-bs-target="#schedule-tab-pane" type="button" role="tab"
                                                aria-controls="schedule-tab-panel" aria-selected="false">
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="schedule" width="30" height="29"
                                                    viewBox="0 0 30 29">
                                                    <use xlink:href="/css/common-icons.svg#gray-calendar"></use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                <span>Schedule</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="service-requests-tab" data-bs-toggle="tab"
                                                data-bs-target="#service-requests-tab-pane" type="button"
                                                role="tab" aria-controls="service-requests-tab-panel"
                                                aria-selected="false">
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="service-request" width="28" height="31"
                                                    viewBox="0 0 28 31">
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
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="drive" width="35" height="30"
                                                    viewBox="0 0 35 30">
                                                    <use xlink:href="/css/common-icons.svg#gray-drive"></use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                <span>Drive</span>
                                            </button>
                                        </li>
                                        @if(!$isCustomer)
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="permission-tab" data-bs-toggle="tab"
                                                data-bs-target="#feedback-tab-pane" type="button" role="tab"
                                                aria-controls="feedback-tab-panel" aria-selected="false">
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="feedback" width="24" height="29"
                                                    viewBox="0 0 24 29">
                                                    <use xlink:href="/css/common-icons.svg#gray-rated-user"></use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                <span>Feedback</span>
                                            </button>
                                        </li>
                                        @endif
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="invoices-tab" data-bs-toggle="tab"
                                                data-bs-target="#invoices-tab-pane" type="button" role="tab"
                                                aria-controls="invoices-tab-panel" aria-selected="false">
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="invoices" width="29" height="31"
                                                    viewBox="0 0 29 31">
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
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="payments" width="27" height="31"
                                                    viewBox="0 0 27 31">
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
                                        @if (!$isCustomer)
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="notes-tab" data-bs-toggle="tab"
                                                    data-bs-target="#notes-tab-pane" type="button" role="tab"
                                                    aria-controls="notes-tab-panel" aria-selected="false">
                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                    <svg aria-label="notes" width="28" height="29"
                                                        viewBox="0 0 28 29">
                                                        <use xlink:href="/css/common-icons.svg#gray-note"></use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    <span>Notes</span>
                                                </button>
                                            </li>
                                        @endif
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="reports-tab" data-bs-toggle="tab"
                                                data-bs-target="#reports-tab-pane" type="button" role="tab"
                                                aria-controls="reports-tab-panel" aria-selected="false">
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="reports" width="30" height="28"
                                                    viewBox="0 0 30 28">
                                                    <use xlink:href="/css/common-icons.svg#gray-bar-chart"></use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                <span>Reports</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="notifications-tab" data-bs-toggle="tab"
                                                data-bs-target="#notifications-tab-pane" type="button"
                                                role="tab" aria-controls="notifications-tab-panel"
                                                aria-selected="false">
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="notifications" width="26" height="29"
                                                    viewBox="0 0 26 29">
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

                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="logs" width="27" height="27"
                                                    viewBox="0 0 27 27">
                                                    <use xlink:href="/css/common-icons.svg#gray-log"></use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                <span>Log</span>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                                data-bs-target="#settings-tab-pane" type="button" role="tab"
                                                aria-controls="settings-tab-panel" aria-selected="false"
                                                wire:click="$emit('getRecord', {{ $this->schedule->id }}, true)"
                                                >
                                                <svg aria-label="settings" width="26" height="27"
                                                    viewBox="0 0 26 27">
                                                    <use xlink:href="/css/common-icons.svg#gray-cog"></use>
                                                </svg>
                                                <span>Settings</span>
                                            </button>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="myTabContent">
                                        {{-- Dashboard Tab - Start --}}
                                        <div class="tab-pane fade show active" id="dashboard-tab-pane"
                                            role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
                                            <div class="col-md-12 mb-md-2 mt-5">
                                                <div class="row mt-2 mb-5">
                                                    <div class="col-md-5 me-5">
                                                        <div class="mb-4">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div
                                                                        class="d-inline-block position-relative profile-pic-div">
                                                                        <img src="{{ $company['company_logo'] != null ? $company['company_logo'] : '/tenant-resources/images/portrait/small/image4.png' }}"
                                                                            class="img-fluid
                                                                    alt="Company
                                                                            Image" />
                                                                    </div>
                                                                    <div style="margin-left: -1rem;"
                                                                        class="d-inline-block position-relative mt-3">
                                                                        <svg width="156" height="32"
                                                                            viewBox="0 0 156 32" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0 0H133L156 32H0V0Z"
                                                                                fill="url(#paint0_linear_2265_83025)" />
                                                                            <defs>
                                                                                <linearGradient
                                                                                    id="paint0_linear_2265_83025"
                                                                                    x1="78" y1="0"
                                                                                    x2="140.587" y2="0"
                                                                                    gradientUnits="userSpaceOnUse">
                                                                                    <stop stop-color="#213969" />
                                                                                    <stop offset="1"
                                                                                        stop-color="#204387" />
                                                                                </linearGradient>
                                                                            </defs>
                                                                        </svg>
                                                                        <div
                                                                            class="position-absolute bottom-0 p-0 d-flex justify-content-center align-items-center">
                                                                            <label
                                                                                class="text-white form-label-sm ps-2"
                                                                                for="">
                                                                                @if (count($company['addresses']) > 0)

                                                                                    {{ $company['addresses'][0]['city'] ?? '' }},
                                                                                    {{ $company['addresses'][0]['country'] ?? '' }}
                                                                                @else
                                                                                    N/A
                                                                                @endif
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-7 ms-4">
                                                                    <h3 class="font-family-tertiary fw-medium">
                                                                        {{ $company['name'] }}
                                                                    </h3>
                                                                    <div class="row mb-4">
                                                                        <div class="col-md-12">
                                                                            <div class="row mb-1">
                                                                                <div class="col-md-12">
                                                                                    <p class="font-family-tertiary">
                                                                                        @foreach ($company['phones'] as $phone)
                                                                                            @if ($phone['phone_number'])
                                                                                                <p>{{ $phone['phone_title'] }}
                                                                                                    :
                                                                                                    {{ $phone['phone_number'] }}
                                                                                                </p>
                                                                                            @else
                                                                                                <p>N/A</p>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            @if ($company['company_website'] != null)
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <a href="{{ $company['company_website'] }}"
                                                                                            target="_blank">
                                                                                            <p
                                                                                                class="font-family-tertiary">
                                                                                                {{ $company['company_website'] }}
                                                                                            </p>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <p class="font-family-tertiary">
                                                                                        @if (count($company['addresses']) > 0)
                                                                                            @foreach ($company['addresses'] as $address)
                                                                                                <p>
                                                                                                    {{ $address['address_line1'] ?? '' }}
                                                                                                    {{ $address['address_line2'] ?? '' }}
                                                                                                    {{ $address['city'] ?? '' }}
                                                                                                    {{ $address['state'] ?? '' }}
                                                                                                    {{ $address['zip'] ?? '' }}
                                                                                                    {{ $address['country'] ?? '' }}
                                                                                                </p>
                                                                                            @endforeach
                                                                                        @else
                                                                                            <p>N/A</p>
                                                                                        @endif
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
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Company Admin:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <a href="#"
                                                                                class="font-family-secondary">

                                                                                @foreach ($company['admins'] as $key => $admin)
                                                                                    {{ $admin['name'] }}
                                                                                    @if ($key != count($company['admins']) - 1)
                                                                                        ,
                                                                                    @endif
                                                                                @endforeach
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Provider Experience:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{-- Updated by Shanila to Add svg icon --}}
                                                                                <svg aria-label="rating"
                                                                                    width="18" height="16"
                                                                                    viewBox="0 0 18 16">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#filled-star">
                                                                                    </use>
                                                                                </svg>
                                                                                <svg aria-label="rating"
                                                                                    width="18" height="16"
                                                                                    viewBox="0 0 18 16">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#filled-star">
                                                                                    </use>
                                                                                </svg>
                                                                                <svg aria-label="rating"
                                                                                    width="18" height="16"
                                                                                    viewBox="0 0 18 16">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#filled-star">
                                                                                    </use>
                                                                                </svg>
                                                                                <svg aria-label="rating"
                                                                                    width="17" height="16"
                                                                                    viewBox="0 0 17 16">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#star">
                                                                                    </use>
                                                                                </svg>
                                                                                <svg aria-label="rating"
                                                                                    width="17" height="16"
                                                                                    viewBox="0 0 17 16">
                                                                                    <use
                                                                                        xlink:href="/css/common-icons.svg#star">
                                                                                    </use>
                                                                                </svg>
                                                                                {{-- End of update by Shanila --}}
                                                                                <small>(coming soon)</small>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Customers:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{ $company['users'] }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Completed Requests:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{-- 50 Hours <small>(coming soon)</small> --}}
                                                                                {{$company['completedRequest']}} Hours
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Open Requests:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{-- 80 Hours <small>(coming soon)</small> --}}
                                                                                {{$company['openRequest']}} Hours
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Total Invoiced:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{-- $192892.00 <small>(coming soon)</small> --}}
                                                                                ${{$company['totalInvoice']}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Total Paid:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{-- $84733.55 <small>(coming soon)</small> --}}
                                                                                ${{$company['paidInvoice']}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Total Due:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{-- $2834.00 <small>(coming soon)</small> --}}
                                                                                ${{$company['dueInvoice']}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Total Overdue:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{-- $78734.00 <small>(coming soon)</small> --}}
                                                                                ${{$company['overDueInvoice']}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Service Start Date:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{$company['company_service_start_date'] ? date_format(date_create($company['company_service_start_date']), "d/m/Y")   : 'N/A'}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12 d-flex">
                                                                        <div class="col-md-5">
                                                                            <label for=""
                                                                                class="col-form-label">
                                                                                Service End Date:
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-7 align-self-center">
                                                                            <div class="font-family-secondary">
                                                                                {{$company['company_service_end_date'] ? date_format(date_create($company['company_service_end_date']), "d/m/Y") : 'N/A'}}
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
                                                                    @isset($company['schedule'])

                                                                        <div class="table-responsive">
                                                                            <table id="unassigned_data"
                                                                                class="table table-hover"
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
                                                                                    @foreach ($company['schedule'] as $key => $timeslot)
                                                                                        <tr role="row" class="odd">
                                                                                            <td>{{ $key }}</td>
                                                                                            <td colSpan=2>
                                                                                                <div class="row">

                                                                                                    @foreach ($timeslot as $slots)
                                                                                                        <div
                                                                                                            class="col-md-6">

                                                                                                            @foreach ($slots as $slot)
                                                                                                                {{ date('h:i A', strtotime($slot['timeslot_start_time'])) . ' to ' . date('h:i A', strtotime($slot['timeslot_end_time'])) }}
                                                                                                                <br>
                                                                                                            @endforeach

                                                                                                        </div>
                                                                                                    @endforeach
                                                                                                </div>


                                                                                            </td>

                                                                                        </tr>
                                                                                    @endforeach

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    @else
                                                                        <small>Business Hours have not be setup.</small>
                @endif
            </div>

    </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="mb-3">
                <h2>Associated Tags:</h2>
            </div>
        </div>
        @if ($this->company['tags'])
            @foreach ($this->company['tags'] as $index => $tag)
                @if ($index % 2 == 0)
                    <div class="row ">
                @endif

                <div class="col-md-4 mb-md-3">
                    <button type="button" class="btn btn-outline-dark rounded w-100">{{ $tag }}
                    </button>
                </div>
                @if ($index % 2 == 1)
    </div>
    @endif
    @endforeach
    @if (count($this->company['tags']) % 2 == 1)
        </div>
    @endif
@else
    <div class="row"> <small> No Tags Available</small> </div>
    @endif

    </div>
    </div>
    @if (!$isCustomer)
        <div class="col-md-12 mb-md-2 text-center gap-2 mt-4">
            <button type="button" wire:click='lockAccount()'
                class="d-inline-flex align-items-center btn {{ $company['status'] ? 'btn-outline-dark' : 'btn-primary' }}  rounded px-3 py-2 gap-2">
                <span>
                    @if ($company['status'])
                        Lock Account
                    @else
                        Unlock Account
                    @endif
                </span>
            </button>
            <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                <span>Resend Welcome Email</span>
            </button>
        </div>
    @endif
    </div>
    </div>
    </div>
    {{-- Dashboard Tab - End --}}

    {{-- Schedule Tab - Start --}}
    <div class="tab-pane fade" id="schedule-tab-pane" role="tabpanel" aria-labelledby="schedule-tab" tabindex="0">
        <div class="row mb-4">
            <h3>Schedule 
                {{-- <small>(coming soon)</small></h3> --}}
        </div>

        <div>
            {{-- <x-advancefilters />
            <img class="w-100" alt="Dashboard Calendar"
                src="/tenant-resources/images/portrait/small/image-placeholder-calendar.png" /> --}}
                @livewire('app.common.calendar',['companyProfile' => true, 'user_id' => $company['id']])
        </div>
    </div>
    {{-- Schedule Tab - End --}}

    {{-- Departments Tab - Start --}}
    <div class="tab-pane fade" id="departments-tab-pane" role="tabpanel" aria-labelledby="departments-tab-tab"
        tabindex="0">
        <div class="row mb-3">
            <h2>Company Departments</h2>
        </div>
        <div class="d-flex justify-content-between mb-2">
            <div class="d-inline-flex align-items-center gap-4">

            </div>
            <div class="d-inline-flex align-items-center gap-4 me-3">
                <a href="/admin/department/create-department/{{ encrypt($company['id']) }}" type="button"
                    class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                    {{-- Updated by Shanila to Add svg icon --}}
                    <svg aria-label="add department" width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#plus">
                        </use>
                    </svg>
                    {{-- End of update by Shanila --}}
                    <span>Add Department</span>
                </a>
            </div>
        </div>

        <div class="card">
            @livewire('app.common.lists.departments', ['companyId' => $company['id']])


            {{-- Icon Legend Bar - Start --}}
            <div class="d-flex actions gap-3 justify-content-end mb-2">
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
    {{-- Users Tab - Start --}}

    <div class="tab-pane fade" id="users-tab-pane" role="tabpanel" aria-labelledby="users-tab-tab" tabindex="0">
        <div class="row mb-3">
            <h2>Company Users</h2>
        </div>
        <div class="d-flex justify-content-end mt-4 mb-3"></div>

        <div class="card">
            @livewire('app.common.company-users', ['companyId' => $company['id'], 'companyLabel' => $company['name'],'isPanel'=>false])

            <div class="col-12 justify-content-center form-actions d-flex gap-3">
                <button wire:click.prevent="$emit('savePermissions')"  class="btn btn-primary rounded">Update Permissions</button>
            </div>

        </div>
    </div>
    {{-- Users Tab - End --}}


    {{-- Drive Tab - Start --}}
    <div class="tab-pane fade" id="drive-tab-pane" role="tabpanel" aria-labelledby="drive-tab" tabindex="0">
        <h3>Drive</h3>
        <p>
            Here you can manage company required documents. You will receive notifications
            when your credentials are approaching expiration or have expired.
        </p>
        @livewire('app.common.forms.drive-uploads', ['showForm' => false, 'showSearch' => true, 'record_id' => $company['id'], 'record_type' => 1])


    </div>
    {{-- Drive Tab -End --}}

    @if(!$isCustomer)
    {{-- Feedback Tab - Start --}}
    <div class="tab-pane fade" id="feedback-tab-pane" role="tabpanel" aria-labelledby="feedback-tab" tabindex="0">
        <div class="row mb-4">
            <h3>Feedback <small>(coming soon)</small></h3>
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
                        <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                    <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{-- Updated by Shanila to Add svg icon --}}
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
                <table id="unassigned_data" class="table table-hover" aria-label="Department Table">
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
                                <input class="form-check-input" type="checkbox" value="" aria-label="Select">
                            </td>
                            <td>
                                <div class="row g-2">
                                    <div class="col-md-2">
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                            class="img-fluid rounded-circle" alt="Customer Image">
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
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg"
                                            class="img-fluid rounded-circle" alt="Provider Image">
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
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Rating" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Rating" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Rating" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Rating" width="17" height="16" viewBox="0 0 17 16">
                                            <use xlink:href="/css/common-icons.svg#star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Rating" width="17" height="16" viewBox="0 0 17 16">
                                            <use xlink:href="/css/common-icons.svg#star">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions">
                                    <a href="javascript:void(0)" title="Hide" aria-label="Hide Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Hide Company" width="24" height="19"
                                            viewBox="0 0 24 19">
                                            <use xlink:href="/css/common-icons.svg#hide-icon">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="#" title="Edit Company" aria-label="Edit"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#pencil">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="javascript:void(0)" title="Delete" aria-label="Delete Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Delete Company" width="21" height="21"
                                            viewBox="0 0 21 21">
                                            <use xlink:href="/css/common-icons.svg#recycle-bin">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
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
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                            class="img-fluid rounded-circle" alt="Customer Image">
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
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg"
                                            class="img-fluid rounded-circle" alt="Provider Image">
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
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
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
                                    <a href="javascript:void(0)" title="Hide" aria-label="Hide Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Hide Company" width="24" height="19"
                                            viewBox="0 0 24 19">
                                            <use xlink:href="/css/common-icons.svg#hide-icon">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="#" title="Edit Company" aria-label="Edit"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Edit Company" width="20" height="20"
                                            viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#pencil">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="javascript:void(0)" title="Delete" aria-label="Delete Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Delete Company" width="21" height="21"
                                            viewBox="0 0 21 21">
                                            <use xlink:href="/css/common-icons.svg#recycle-bin">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
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
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                            class="img-fluid rounded-circle" alt="Customer Image">
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
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg"
                                            class="img-fluid rounded-circle" alt="Provider Image">
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
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
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
                                    <a href="javascript:void(0)" title="Hide" aria-label="Hide Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg width="24" height="19" viewBox="0 0 24 19">
                                            <use xlink:href="/css/common-icons.svg#hide-icon">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="#" title="Edit Company" aria-label="Edit"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Edit Company" width="20" height="20"
                                            viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#pencil">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="javascript:void(0)" title="Delete" aria-label="Delete Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Delete Company" width="21" height="21"
                                            viewBox="0 0 21 21">
                                            <use xlink:href="/css/common-icons.svg#recycle-bin">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
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
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                            class="img-fluid rounded-circle" alt="Customer Image">
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
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg"
                                            class="img-fluid rounded-circle" alt="Provider Image">
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
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
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
                                    <a href="javascript:void(0)" title="Hide" aria-label="Hide Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Hide Company" width="24" height="19"
                                            viewBox="0 0 24 19">
                                            <use xlink:href="/css/common-icons.svg#hide-icon">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="#" title="Edit Company" aria-label="Edit Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Edit Company" width="20" height="20"
                                            viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#pencil">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="javascript:void(0)" title="Delete" aria-label="Delete Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Delete Company" width="21" height="21"
                                            viewBox="0 0 21 21">
                                            <use xlink:href="/css/common-icons.svg#recycle-bin">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
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
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                            class="img-fluid rounded-circle" alt="Customer Image">
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
                                        <img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg"
                                            class="img-fluid rounded-circle" alt="Provider Image">
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
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
                                            </use>
                                        </svg>
                                        <svg aria-label="Stars" width="18" height="16" viewBox="0 0 18 16">
                                            <use xlink:href="/css/common-icons.svg#filled-star">
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
                                    <a href="javascript:void(0)" title="Hide" aria-label="Hide Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Hide Company" width="24" height="19"
                                            viewBox="0 0 24 19">
                                            <use xlink:href="/css/common-icons.svg#hide-icon">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="#" title="Edit Company" aria-label="Edit Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Edit Company" width="20" height="20"
                                            viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#pencil">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                    <a href="javascript:void(0)" title="Delete" aria-label="Delete Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Delete Company" width="21" height="21"
                                            viewBox="0 0 21 21">
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
                    <a href="#" title="Hide" aria-label="Hide"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg aria-label="Hide Company" width="24" height="19" viewBox="0 0 24 19">
                            <use xlink:href="/css/common-icons.svg#hide-icon">
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
                    <a href="#" title="Delete" aria-label="Delete"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
                            <use xlink:href="/css/common-icons.svg#recycle-bin">
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
    @endif
    {{-- Feedback Tab - End --}}

    {{-- Invoices Tab - Start --}}
    <div class="tab-pane fade" id="invoices-tab-pane" role="tabpanel" aria-labelledby="invoices-tab"
        tabindex="0">
        <h3>
            Company Invoices <small>(coming soon)</small>
        </h3>

        <div class="d-flex justify-content-between">
            <div class="row gap-4">
            </div>
        </div>
        @livewire('app.common.lists.customer-invoices', ['filter_companies' => $company])
        

    </div>
    {{-- Invoices Tab : End --}}

    {{-- Payments Tab - Start --}}
    <div class="tab-pane fade" id="payments-tab-pane" role="tabpanel" aria-labelledby="payments-tab"
        tabindex="0">
        <div class="row">
            <h3>Payments <small>(coming soon)</small></h3>
        </div>
        <div class="d-flex justify-content-between">
            <div class="row gap-4">
              
            </div>
            <div class="d-inline-flex align-items-center gap-4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{-- Updated by Shanila to Add svg icon --}}
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
                                <input class="form-check-input" id="" name="" type="checkbox"
                                    tabindex="" aria-label="checkbox">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                <input class="form-check-input" aria-label="List Checkbox" id=""
                                    name="" type="checkbox" tabindex="">
                            </div>
                        </td>
                        <td>
                            <a>87109</a>
                            <p class="mt-1">08/24/2022</p>
                        </td>
                        <td class="align-middle">
                            <div class="row g-2">
                                <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                        class="img-fluid rounded-circle" alt="Team Profile Image">
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
                            {{-- Updated by Shanila to Add svg icon --}}
                            <svg width="17" height="21" viewBox="0 0 17 21">
                                <use xlink:href="/css/common-icons.svg#doc">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                        </td>
                        <td class="text-center">Direct Deposit</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                    <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                        viewBox="0 0 22 20">
                                        <use xlink:href="/css/common-icons.svg#round-arrow">
                                        </use>
                                    </svg>
                                </a>
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                <a href="#" title="View Receipt" aria-label="View Receipt"
                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                <a href="#" title="Send Receipt" aria-label="Send Receipt"
                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                <a href="#" title="Edit Payment" aria-label="Edit Payment"
                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                    <svg aria-label="Issue Refund" class="fill-stroke" width="22" height="20"
                        viewBox="0 0 22 20">
                        <use xlink:href="/css/common-icons.svg#round-arrow">
                        </use>
                    </svg>
                </a>
                <span class="text-sm">
                    Issue Refund
                </span>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <a href="#" title="Delete Payment" aria-label="Delete Payment"
                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
    <div class="tab-pane fade" id="referrals-tab-pane" role="tabpanel" aria-labelledby="referrals-tab"
        tabindex="0">
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
                        {{-- Updated by Shanila to Add svg icon --}}
                        <svg aria-label="date" class="icon-date" width="20" height="20"
                            viewBox="0 0 20 20">
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
                    <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{-- Updated by Shanila to Add svg icon --}}
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
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px"
                                        width="200px" class="img-fluid rounded-circle" alt="">
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    {{-- Updated by Shanila to Add svg icon --}}
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px"
                                        width="200px" class="img-fluid rounded-circle" alt="">
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    {{-- Updated by Shanila to Add svg icon --}}
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px"
                                        width="200px" class="img-fluid rounded-circle" alt="">
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    {{-- Updated by Shanila to Add svg icon --}}
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px"
                                        width="200px" class="img-fluid rounded-circle" alt="">
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    {{-- Updated by Shanila to Add svg icon --}}
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px"
                                        width="200px" class="img-fluid rounded-circle" alt="">
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
                                {{-- Updated by Shanila to Add svg icon --}}
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
                                <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    {{-- Updated by Shanila to Add svg icon --}}
                                    <svg aria-label="Remitance Inactive" width="21" height="21"
                                        viewBox="0 0 21 21">
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
                    {{-- Updated by Shanila to Add svg icon --}}
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
    @if (!$isCustomer)

        <div class="tab-pane fade" id="notes-tab-pane" role="tabpanel" aria-labelledby="notes-tab" tabindex="0">
            @livewire('app.common.forms.notes', ['showForm' => true, 'record_id' => $company['id'], 'record_type' => 1])
        </div>
    @endif
    {{-- Notes Tab -End --}}

    {{-- Notifications Tab - Start --}}
    <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab"
        tabindex="0">
        <div class="row">
            <h3>Notification</h3>
            <p class="mt-3">
                Here you can control how you are notified about Profile activity.
            </p>
        </div>
        <div class="mb-3">
            @livewire('app.common.settings.notifications', ['model_type' => 1, 'model_id' => $company['id']])
        </div>

        {{-- <div class="table-responsive">
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
                                    </div> --}}
    </div>
    {{-- Notifications Tab - End --}}

    {{-- Settings Tab - Start --}}
    <div class="tab-pane fade" id="settings-tab-pane" role="tabpanel" aria-labelledby="settings-tab"
        tabindex="0">
        <div class="row between-section-segment-spacing">
            @if ($company['id'])
                @livewire('app.common.setup.business-hours-setup', ['model_id' => $company['id'], 'model_type' => '2', 'isForm' => true])
            @endif
        </div>
        <div class="col-lg-12 form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="TheToggleSwitchNameWillBeHere"
                >
            <label class="form-check-label" for="TheToggleSwitchNameWillBeHere">
                Customer Billing 
            <small>(coming soon)</small>

            </label>
            <label class="form-check-label" for="TheToggleSwitchNameWillBeHere">
                Customer Billing 
            <small>(coming soon)</small>

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
                        <input type="" name="" class="form-control" placeholder="Enter URL link"
                            id="serviceAgreementsURL">
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-lg-12">
                <div class="form-check">
                    <input class="form-check-input" id="attachSendQuotes" name="attachSendQuotes" type="checkbox"
                        tabindex="" />
                    <label class="form-check-label" for="attachSendQuotes">
                        Attach and Send with Quotes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" id="acknowledgeInitialLogin" name="acknowledgeInitialLogin"
                        type="checkbox" tabindex="" />
                    <label class="form-check-label" for="acknowledgeInitialLogin">
                        Require Customer to Acknowledge on Initial Login
                    </label>
                </div>
            </div>
        </div>
        <div class="col-12 form-actions">
            <button type="submit" class="btn btn-primary rounded px-4 py-2" wire:click.prevent="saveSchedule"
                x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
                Save
            </button>

        </div>

    </div>
    {{-- Settings Tab - End --}}

    {{-- Logs Tab - Start --}}
    <div class="tab-pane fade" id="log-tab-pane" role="tabpanel" aria-labelledby="log-tab" tabindex="0">
        <div class="row mb-4">
            <h3>Logs </h3>
        </div>
        @livewire('app.common.lists.logs', ['record_id' => $company['id'], 'record_type' => 'company'])

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
    @include('panels.company.department-users')

    @include('panels.common.add-document')
    @include('modals.mark-as-paid')

    @include('modals.common.revert-back')
    @include('panels.common.invoice-details')
    @endif
    @endif
    <script>
     document.addEventListener("livewire:load", () => {

               window.livewire.emit('getRecord', {{ $this->schedule->id }}, true);
        });
    </script>
    </div>
