<div x-data="{ addDocument: false , invoiceDetailsPanel: false }">

    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        {{ $isCustomer ? 'My Profile' : 'Customers' }}
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    {{-- Updated by Shanila to Add svg icon --}}
                                    <svg aria-label="home" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                {{ $isCustomer ? 'Home' : 'Customers' }}
                            </li>
                            <li class="breadcrumb-item">
                                {{ $isCustomer ? 'My Profile' : 'Customer Details' }}
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        @if (is_null($user))
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
                                {{-- BEGAN: Provider Details --}}
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
                                    @if (!$isCustomer)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="schedule-tab" data-bs-toggle="tab"
                                            data-bs-target="#schedule-tab-pane" type="button" role="tab"
                                            aria-controls="schedule-tab-pane" aria-selected="false">
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
                                            data-bs-target="#service-requests-tab-pane" type="button" role="tab"
                                            aria-controls="service-requests-tab-pane" aria-selected="false">
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
                                        <button class="nav-link" id="my-drive-tab" data-bs-toggle="tab"
                                            data-bs-target="#my-drive-tab-pane" type="button" role="tab"
                                            aria-controls="my-drive-tab-pane" aria-selected="false">
                                            {{-- Updated by Shanila to Add svg icon --}}
                                            <svg aria-label="drive" width="35" height="30" viewBox="0 0 35 30">
                                                <use xlink:href="/css/common-icons.svg#gray-drive"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            <span>My Drive</span>
                                        </button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="customer-feedback-tab" data-bs-toggle="tab"
                                            data-bs-target="#customer-feedback-tab-pane" type="button"
                                            role="tab" aria-controls="customer-feedback-tab-pane"
                                            aria-selected="false">
                                            {{-- Updated by Shanila to Add svg icon --}}
                                            <svg aria-label="feedback" width="24" height="29"
                                                viewBox="0 0 24 29">
                                                <use xlink:href="/css/common-icons.svg#gray-rated-user"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            <span>Feedback</span>
                                        </button>
                                    </li>
                                    @if (in_array('company_admin', $this->user['roles']) || in_array('supervisor', $this->user['roles']) || in_array('billing_manager', $this->user['roles']))
                                        
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="invoices-tab" data-bs-toggle="tab"
                                            data-bs-target="#invoices-tab-pane" type="button" role="tab"
                                            aria-controls="invoices-tab-pane" aria-selected="false">
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
                                            aria-controls="payments-tab-pane" aria-selected="false">
                                            {{-- Updated by Shanila to Add svg icon --}}
                                            <svg aria-label="payments" width="27" height="31"
                                                viewBox="0 0 27 31">
                                                <use xlink:href="/css/common-icons.svg#gray-payment"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            <span>Payments</span>
                                        </button>
                                    </li>

                                    @endif

                                    {{--
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="referrals-tab" data-bs-toggle="tab"
                                        data-bs-target="#referrals-tab-pane" type="button" role="tab"
                                        aria-controls="referrals-tab-pane" aria-selected="false">
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
                                                aria-controls="notes-tab-pane" aria-selected="false">
                                                {{-- Updated by Shanila to Add svg icon --}}
                                                <svg aria-label="notes" width="28" height="29"
                                                    viewBox="0 0 28 29">
                                                    <use xlink:href="/css/common-icons.svg#gray-note"></use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
                                                <span>Notes</span>
                                            </button>
                                        </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="reports-tab" data-bs-toggle="tab"
                                            data-bs-target="#reports-tab-pane" type="button" role="tab"
                                            aria-controls="reports-tab-pane" aria-selected="false">
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
                                            data-bs-target="#notifications-tab-pane" type="button" role="tab"
                                            aria-controls="notifications-tab-pane" aria-selected="false">
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
                                            aria-controls="log-tab-pane" aria-selected="false">
                                            {{-- Updated by Shanila to Add svg icon --}}
                                            <svg aria-label="logs" width="27" height="27"
                                                viewBox="0 0 27 27">
                                                <use xlink:href="/css/common-icons.svg#gray-log"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            <span>Log</span>
                                        </button>
                                    </li>
                                    @endif

                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel"
                                        aria-labelledby="dashboard-tab" tabindex="0">
                                        <div class="col-md-12 mb-md-2 mt-5">
                                            <div class="row mt-2 mb-5">
                                                <div class="col-lg-5 me-lg-5 between-section-segment-spacing">
                                                    <div class="row mb-4">
                                                        <div class="col-md-4">
                                                            <div
                                                                class="d-inline-block position-relative profile-pic-div">
                                                                <img src="{{ $user['userdetail']['profile_pic'] != null ? $user['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/image4.png' }}"
                                                                    class="img-fluid" alt="Customer Profile Image" />
                                                            </div>
                                                            <div style="margin-left: -1rem;"
                                                                class="d-inline-block position-relative mt-3">
                                                                <svg aria-label="Sydney, Australia" width="156"
                                                                    height="32" viewBox="0 0 156 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0 0H133L156 32H0V0Z"
                                                                        fill="url(#paint0_linear_2265_83025)" />
                                                                    <defs>
                                                                        <linearGradient id="paint0_linear_2265_83025"
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
                                                                    <label class="text-white form-label-sm ps-2"
                                                                        for="">
                                                                        @if ($user['userdetail']['physical_address'] != null)
                                                                            {{ $user['userdetail']['physical_address']['city'] . ', ' . $user['userdetail']['physical_address']['country'] }}
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 ms-4 mt-4">
                                                            <h3 class="font-family-tertiary fw-medium">
                                                                {{ $user['name'] }} ({{ $user['userdetail']['title'] }})
                                                            </h3>
                                                            <div class="row mb-4">
                                                                <div class="col-md-12">
                                                                    <div class="row mb-2">
                                                                        <div
                                                                            class="col-md-12 d-flex font-family-tertiary gap-2">
                                                                            <span class="fw-medium">
                                                                                Position:
                                                                            </span>
                                                                            <div>
                                                                                {{ $user['userdetail']['user_position'] }}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div
                                                                            class="col-md-12 d-flex font-family-tertiary gap-2">
                                                                            <span class="fw-medium">
                                                                                Company:
                                                                            </span>
                                                                            <div>{{ $user['company']['name'] }}</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div
                                                                            class="col-md-12 d-flex font-family-tertiary gap-2">
                                                                            <span class="fw-medium">
                                                                                Department(s):
                                                                            </span>
                                                                            <div class="text-wrap"
                                                                                style="width=300px">

                                                                                @foreach ($user['userdetail']['departments'] as $key => $dept)
                                                                                    {{ $dept }}
                                                                                    @if ($key != count($user['userdetail']['departments']) - 1)
                                                                                        ,
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-2">
                                                                        <div
                                                                            class="col-md-12 d-flex font-family-tertiary gap-2">
                                                                            <span class="fw-medium">
                                                                                Access Role:
                                                                            </span>
                                                                            <div>
                                                                                @foreach ($user['roles'] as $key => $roles)
                                                                                {{$roles}}
                                                                                @if ($key != count($user['roles']) - 1 )
                                                                                        ,
                                                                                    @endif
                                                                                @endforeach
                                                                                {{-- Service Consumer
                                                                                <small>(coming soon)</small> --}}
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-12 mt-4">
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Phone Number:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        {{ $user['userdetail']['phone'] }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Email Address:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        {{ $user['email'] }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Primary Language:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        {{ $user['userdetail']['language'] }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Physical Address:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        @if ($user['userdetail']['physical_address'] != null)
                                                                            {{ $user['userdetail']['physical_address']['address_line1'] . ' ' . $user['userdetail']['physical_address']['city'] . ' ' . $user['userdetail']['physical_address']['country'] . '(' . $user['userdetail']['physical_address']['address_name'] . ')' }}
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Billing Address:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        @if ($user['userdetail']['billing_address'] != null)
                                                                            {{ $user['userdetail']['billing_address']['address_line1'] . ' ' . $user['userdetail']['billing_address']['city'] . ' ' . $user['userdetail']['billing_address']['country'] . '(' . $user['userdetail']['billing_address']['address_name'] . ')' }}
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Provider Experience:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        @for ($i = 0; $i < $user['avg_rating']; $i++)
                                                                            <svg aria-label="rating" width="18"
                                                                                height="16" viewBox="0 0 18 16">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#filled-star">
                                                                                </use>
                                                                            </svg>
                                                                        @endfor
                                                                        @for ($i = $user['avg_rating']; $i < 5; $i++)
                                                                            <svg aria-label="rating" width="17"
                                                                                height="16" viewBox="0 0 17 16">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#star">
                                                                                </use>
                                                                            </svg>
                                                                        @endfor

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Supervisor:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        @if (count($user['userdetail']['supervisors']) > 0)
                                                                            @foreach ($user['userdetail']['supervisors'] as $key => $sv)
                                                                                {{ $sv }}
                                                                                @if ($key != count($user['userdetail']['supervisors']) - 1)
                                                                                    ,
                                                                                @endif
                                                                            @endforeach
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Billing Manager:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        @if (count($user['userdetail']['billing_managers']) > 0)
                                                                            @foreach ($user['userdetail']['billing_managers'] as $key => $sv)
                                                                                {{ $sv }}
                                                                                @if ($key != count($user['userdetail']['billing_managers']) - 1)
                                                                                    ,
                                                                                @endif
                                                                            @endforeach
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Completed Requests:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        {{$this->user['completedRequest']}} Hours
                                                                        {{-- 60 Hours <small>(coming soon)</small> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-6">
                                                                    <label class="col-form-label" for="">
                                                                        Open Requests:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        {{$this->user['openRequest']}} Hours
                                                                        {{-- 20 Hours <small>(coming soon)</small> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if (in_array('company_admin', $this->user['roles']) || in_array('supervisor', $this->user['roles']) || in_array('billing_manager', $this->user['roles']))
                                                    <div class="row mb-4">
                                                        <div class="col-md-12">
                                                            <div class="row mb-1">
                                                                <div class="col-md-5">
                                                                    <label class="col-form-label" for="">
                                                                        Total Invoiced:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-5 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        ${{$this->user['totalInvoice']}}
                                                                        {{-- $500 <small>(coming soon)</small> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-5">
                                                                    <label class="col-form-label" for="">
                                                                        Total Paid:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-5 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        ${{$this->user['paidInvoice']}}
                                                                        {{-- $300 <small>(coming soon)</small> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-5">
                                                                    <label class="col-form-label" for="">
                                                                        Total Due:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-5 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        ${{$this->user['dueInvoice']}}
                                                                        {{-- $200<small>(coming soon)</small> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-1">
                                                                <div class="col-md-5">
                                                                    <label class="col-form-label" for="">
                                                                        Total Overdue:
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-5 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        ${{$this->user['overDueInvoice']}}
                                                                        {{-- $300<small>(coming soon)</small> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <label class="col-form-label" for="">
                                                                        Account Credit:

                                                                    </label>
                                                                </div>
                                                                <div class="col-md-5 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        ${{$user['accountCredit']}}
                                                                        {{-- <small>(coming soon)</small> --}}

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6 between-section-segment-spacing">
                                                    <div class="row" id="table-hover-row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="table-responsive">
                                                                    @if (count($service_catalog))
                                                                        @foreach ($service_catalog as $accom)
                                                                            <table id=""
                                                                                class="table table-hover"
                                                                                aria-label="{{ $accom[0]['accommodation_name'] }}">
                                                                                <thead>
                                                                                    <tr role="row"
                                                                                        aria-expanded="false"
                                                                                        data-bs-toggle="collapse"
                                                                                        href="#collapse{{ $accom[0]['accommodation_id'] }}"
                                                                                        role="button"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="collapse{{ $accom[0]['accommodation_id'] }}">
                                                                                        <th class="align-middle text-nowrap "
                                                                                            style="width:70%"
                                                                                            scope="col">
                                                                                            {{ $accom[0]['accommodation_name'] }}
                                                                                        </th>
                                                                                        <th class="text-center align-middle"
                                                                                            scope="col">
                                                                                            Service Rate
                                                                                        </th>
                                                                                        <th class="text-end align-middle"
                                                                                            scope="col">
                                                                                            <div>
                                                                                                {{-- Updated by Shanila to Add svg
                                                                                            icon --}}
                                                                                                <svg aria-label="collapse"
                                                                                                    class="heading-arrow"
                                                                                                    width="26"
                                                                                                    height="13"
                                                                                                    viewBox="0 0 26 13">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#collapse">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by Shanila --}}
                                                                                            </div>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>
                                                                            </table>
                                                                            <div class="collapse "
                                                                                id="collapse{{ $accom[0]['accommodation_id'] }}">
                                                                                @if (count($accom))
                                                                                    <table class="table table-hover">


                                                                                        <tbody>
                                                                                            @foreach ($accom as $service)
                                                                                                <tr role="row"
                                                                                                    class="odd">
                                                                                                    <td class="align-middle"
                                                                                                        style="width:70%">
                                                                                                        <div
                                                                                                            class="row g-2">
                                                                                                            <div
                                                                                                                class="col-md-10">
                                                                                                                <p>
                                                                                                                    {{ $service['service_name'] }}
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td
                                                                                                        class="text-center align-middle">
                                                                                                        $10.00
                                                                                                    </td>
                                                                                                    <td></td>
                                                                                                </tr>
                                                                                            @endforeach

                                                                                        </tbody>
                                                                                    </table>
                                                                                @else
                                                                                    <div class="">
                                                                                        <small>No services
                                                                                            associated</small>
                                                                                    </div>
                                                                                @endif
                                                                            </div>
                                                                        @endforeach
                                                                    @endif


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- table e -->
                                                </div>

                                                <!-- Last Login colums (start) -->
                                                <div class="col-lg-6 mb-md-2">
                                                    <div class="mb-3">
                                                        <h2>Top 5 Preferred Providers:</h2>
                                                    </div>
                                                    <div class="row" id="table-hover-row">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="table-responsive">
                                                                    <table id="unassigned_data"
                                                                        class="table table-hover"
                                                                        aria-label="Admin Staff Teams Table">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th scope="col"
                                                                                    class="text-center">
                                                                                    #
                                                                                </th>
                                                                                <th scope="col">Provider</th>
                                                                                <th scope="col">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @if (count($user['userdetail']['favoured_users']) > 0)
                                                                                @foreach ($user['userdetail']['favoured_users'] as $index => $user)
                                                                                    <tr role="row" class="odd">
                                                                                        <td
                                                                                            class="align-middle fw-bold">
                                                                                            {{ $index + 1 }}
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <div class="row g-2">
                                                                                                <div class="col-md-2">
                                                                                                    <img style="width:54px;height:54px;top:1rem"
                                                                                                        src="{{ $user['userdetail']['profile_pic'] != null ? $user['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/image4.png' }}"
                                                                                                        class="img-fluid rounded-circle"
                                                                                                        alt="Provider Profile Image">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="col-md-10 align-self-center">
                                                                                                    <h6
                                                                                                        class="fw-semibold">
                                                                                                        {{ $user['name'] }}
                                                                                                    </h6>
                                                                                                    <p>
                                                                                                        {{ $user['email'] }}
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td class="align-middle">
                                                                                            <a href="#"
                                                                                                aria-label="Chat"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                {{-- Updated by Shanila to Add svg
                                                                                            icon --}}
                                                                                                <svg aria-label="Chat"
                                                                                                    width="20"
                                                                                                    height="20"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#chat">
                                                                                                    </use>
                                                                                                </svg>
                                                                                                {{-- End of update by Shanila --}}
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            @else
                                                                                <tr role="row" class="odd">
                                                                                    <td class="align-middle" colspan=3>
                                                                                        None Selected
                                                                                    </td>
                                                                                </tr>
                                                                            @endif
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- left col  -->
                                                <div class="col-md-6 mb-md-2">
                                                    <div class="row">
                                                        <div class="mb-3">
                                                            <h2>Associated Tags:</h2>
                                                        </div>
                                                    </div>
                                                    @if ($this->user['tags'])
                                                        @foreach ($this->user['tags'] as $index => $tag)
                                                            @if ($index % 2 == 0)
                                                                <div class="row ">
                                                            @endif

                                                            <div class="col-md-4 mb-md-3">
                                                                <button type="button"
                                                                    class="btn btn-outline-dark rounded w-100">{{ $tag }}
                                                                </button>
                                                            </div>
                                                            @if ($index % 2 == 1)
                                                </div>
        @endif
        @endforeach
        @if (count($this->user['tags']) % 2 == 1)
    </div>
    @endif
@else
    <div class="row"> <small> No Tags Available</small> </div>
    @endif

</div>
<div class="col-md-12 inner-section-segment-spacing">
    {{-- <small>(coming soon)</small> --}}

    <h2>Last Login:</h2>
    <div class="row">
        <div class="col-md-12 d-flex mb-md-2">
            <div class="col-md-1 mb-md-2 font-family-tertiary fw-medium">
                Date</div>
            <div class="col-md-6 mb-md-2 font-family-secondary">
                {{$this->user['login_date']}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex mb-md-2">
            <div class="col-md-1 mb-md-2 font-family-tertiary fw-medium">
                Time</div>
            <div class="col-md-6 mb-md-2 font-family-secondary">{{$this->user['login_time']}}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex mb-md-2">
            <div class="col-md-1 mb-md-2 font-family-tertiary fw-medium">
                {{-- Location --}}
                IP Address
            </div>
            <div class="col-md-6 mb-md-2 font-family-secondary">
                {{-- Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA --}}
                {{$this->user['login_ip']}}
            </div>
        </div>
    </div>
</div>
<!-- Last Login colums (end) -->
<!-- in line / side by side buttons (start) -->
@if (!$isCustomer)
    <div class="col-md-12 d-flex form-actions flex-lg-row flex-column justify-content-center gap-2">
        <button type="button" wire:click="lockAccount()"
            class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
            <span>

                @if ($this->user['status'])
                    Lock Account
                @else
                    Unlock Account
                @endif

            </span>
        </button>
        <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2"
            data-bs-toggle="modal" data-bs-target="#changePasswordModal">
            <span>
                Reset Customer Password
            </span>
        </button>
        <a target="_blank" href="/chat/{{$this->user['id']}}" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
            <span>
                Message Customer
            </span>
        </a>
        <button type="button" wire:click="resendWelcomeEmail"
            class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
            <span>
                Resend Welcome Email
            </span>
        </button>
    </div>
@endif
<!-- inline / side by side buttons (end) -->
</div><!-- main row end -->
</div>

</div>
<!-- Dashboard tab end -->
<div class="tab-pane fade" id="schedule-tab-pane" role="tabpanel" aria-labelledby="schedule-tab" tabindex="0">
    <div class="row mb-2">
        <h3>Schedule <small>(coming soon)</small></h3>

    </div>
    <div class="inner-section-segment-spacing">
    </div>
    <div>
        <x-advancefilters />
        <img class="w-100" alt="Schedule Calendar"
            src="/tenant-resources/images/portrait/small/image-placeholder-calendar.png" />
    </div>
</div>
@if (!$isCustomer)

<!-- Schedule tab end -->
<div class="tab-pane fade" id="customer-feedback-tab-pane" role="tabpanel" aria-labelledby="customer-feedback-tab"
    tabindex="0">
    <div class="row mb-2">
        <h3>Feedback
        </h3>
    </div>
    <div class="col-md-12 d-flex col-12 gap-4 mb-4">
        {{-- Search --}}
        <div class="col-md-3 col-12">
            <div class="mb-4">
                <label class="form-label" for="search-record-column">
                    Search <small>(coming soon)</small>
                </label>
                <input type="text" id="search-record-column" class="form-control" name="search-column"
                    placeholder="Search here" required aria-required="true" />
            </div>
        </div>
        {{-- Date Range --}}
        <div class="col-md-3 col-12">
            <label class="form-label" for="set_date-column">
                Date Range <small>(coming soon)</small>
            </label>
            <div class="position-relative">
                <input type="" name="" class="form-control js-single-date"
                    placeholder="Jan 1, 2022 - Oct 1, 2022" id="set_date-column">
                {{-- Updated by Shanila to Add svg icon --}}
                <svg aria-label="Date" class="icon-date" width="20" height="20" viewBox="0 0 20 20">
                    <use xlink:href="/css/common-icons.svg#datefield-icon">
                    </use>
                </svg>
                {{-- End of update by Shanila --}}
            </div>
        </div>
    </div>
    <div class="">
        @livewire('app.common.lists.feedback', ['toFeedback' => true, 'user_id' => $userid])
    </div>
</div>
<div class="tab-pane fade" id="my-drive-tab-pane" role="tabpanel" aria-labelledby="my-drive-tab" tabindex="0">
    <div class="row mb-3">
        <h3>My Drive</h3>


    </div>
    @livewire('app.common.forms.drive-uploads', ['showForm' => false, 'showSearch' => true, 'record_id' => $userid, 'record_type' => 3])

</div>

<!-- drive Tab End-->
@if (in_array('company_admin', $this->user['roles']) || in_array('supervisor', $this->user['roles']) || in_array('billing_manager', $this->user['roles']))
    
<div class="tab-pane fade" id="invoices-tab-pane" role="tabpanel" aria-labelledby="invoices-tab" tabindex="0">
    <h3>
        Invoices 
        {{-- <small>(coming soon)</small> --}}
    </h3>
    {{-- <div class="col-md-12 d-flex col-12 gap-4 mb-4">
        <div class="col-md-3 col-12 mb-4">
            <label class="form-label" for="search-records">
                Search
            </label>
            <input type="text" id="search-records" class="form-control" name="search-column"
                placeholder="Search here" required aria-required="true" />
        </div>

        <div class="col-md-3 col-12">
            <div>
                <label class="form-label" for="date-range">
                    Date Range
                </label>
                <div class="position-relative">
                    <input type="" name="" class="form-control js-single-date"
                        placeholder="Jan 1, 2022 - Oct 1, 2022" id="date-range">
                    <svg aria-label="Date" class="icon-date" width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                        </use>
                    </svg>
                </div>
            </div>
        </div>
    </div> --}}
    <x-advancefilters type="invoice-filters" :bmanagers="$bmanagers" :setupValues="$setupValues"/>

    @livewire('app.common.lists.customer-invoices', ['company_id'=>$companyIds, 'invoice_status'=>'pending',
        'supervisor_id'=>$supervisorId,'billing_manager_id'=>$billing_managerId ])


    {{-- <div class="d-flex justify-content-between mb-2">
        <div class="d-inline-flex align-items-center gap-4">
            <label for="show-records-number" class="form-label">
                Show
            </label>
            <select class="form-select" id="show-records-number">
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
                    <svg aria-label="Export" class="fill" width="23" height="26"
                        viewBox="0 0 23 26"fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/common-icons.svg#export-dropdown"></use>
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
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr role="row" class="odd">
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" aria-label="List Checkbox" id="" name=""
                                type="checkbox" tabindex="">
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
                        <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                            <use xlink:href="/css/common-icons.svg#doc">
                            </use>
                        </svg>
                    </td>
                    <td class="text-center">Direct Deposit</td>
                    <td>
                        <div class="d-flex actions">
                            <a href="#" title="back" aria-label="back"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="back" class="fill-stroke" width="22" height="20"
                                    viewBox="0 0 22 20">
                                    <use xlink:href="/css/common-icons.svg#round-arrow">
                                    </use>
                                </svg>
                            </a>
                            <a href="#" title="Remitance Inactive" aria-label="Remitance Inactive"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                data-bs-target="#markAsPaidModal">
                                <svg aria-label="Remitance Inactive" width="19" height="20"
                                    viewBox="0 0 19 20">
                                    <use xlink:href="/css/common-icons.svg#dollar-assignment">
                                    </use>
                                </svg>
                            </a>
                            <a href="#" title="Download PDF" aria-label="Download PDF"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/provider.svg#download-file"></use>
                                </svg>
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
     --}}
    <div class="d-flex actions gap-3 justify-content-end mb-2">
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Revert" aria-label="Revert"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                {{-- Updated by Shanila to Add svg icon --}}
                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                    <use xlink:href="/css/common-icons.svg#round-arrow">
                    </use>
                </svg>
                {{-- End of update by Shanila --}}
            </a>
            <span class="text-sm">
                Revert
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Record Payment" aria-label="Record Payment"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                {{-- Updated by Shanila to Add svg icon --}}
                <svg aria-label="Record Payment" width="19" height="20" viewBox="0 0 19 20">
                    <use xlink:href="/css/common-icons.svg#dollar-assignment">
                    </use>
                </svg>
                {{-- End of update by Shanila --}}
            </a>
            <span class="text-sm">
                Record Payment
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Download Invoice" aria-label="Download Invoice"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                {{-- Updated by Shanila to Add svg icon --}}
                <svg aria-label="Download Invoice" width="16" height="20" viewBox="0 0 16 20">
                    <use xlink:href="/css/common-icons.svg#download-file">
                    </use>
                </svg>
                {{-- End of update by Shanila --}}
            </a>
            <span class="text-sm">
                Download Invoice
            </span>
        </div>
    </div>
    <div class="justify-content-center d-flex flex-md-row">
        <div id="messageAlert" class="text-danger">
        </div>
    </div>
    <div class="justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
        <button disabled class="btn btn-primary rounded">Resend Invoice</button>
        <button class="btn btn-primary rounded" onclick="payInvoices()">Record Payment</button>
        <button class="btn btn-primary rounded" onclick="revertInvoices()">Revert
            Invoice
        </button>
    </div>
</div>
@endif

<!-- Invoices Remittances Tab End-->
    <div class="tab-pane fade" id="notes-tab-pane" role="tabpanel" aria-labelledby="notes-tab" tabindex="0">
        @livewire('app.common.forms.notes', ['showForm' => true, 'record_id' => $userid, 'record_type' => 3])

    </div>

<!-- Notes Tab End-->
<div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab"
    tabindex="0">
    <div class="row">
        <h3>Notification </h3>
        <p class="mt-3">
            Here you can control how you are notified about Profile activity.
        </p>
    </div>
    <div class="mb-3">
        @livewire('app.common.settings.notifications', ['model_type' => 3, 'model_id' => $userid])
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
<!-- Notifications Tab End-->
<div class="tab-pane fade" id="log-tab-pane" role="tabpanel" aria-labelledby="log-tab" tabindex="0">
    <div class="row mb-4">
        <h3>Logs</h3>
    </div>
    @livewire('app.common.lists.logs', ['record_id' => $userid, 'record_type' => 'user'])

</div>
<!-- Log Tab End-->
<div class="tab-pane fade" id="service-requests-tab-pane" role="tabpanel" aria-labelledby="service-requests-tab"
    tabindex="0">
</div>
<!-- Settings Tab End-->

@if (in_array('company_admin', $this->user['roles']) || in_array('supervisor', $this->user['roles']) || in_array('billing_manager', $this->user['roles']))
    
<div class="tab-pane fade" id="payments-tab-pane" role="tabpanel" aria-labelledby="payments-tab"
    tabindex="0">
    <div class="row">
        <h3>Payments
            <small>(coming soon)</small>
        </h3>
    </div>
    <div class="col-md-12 d-flex col-12 gap-4 mb-4">
        {{-- Search --}}
        <div class="col-md-3 col-12">
            <div class="mb-4">
                <label class="form-label" for="search-column">
                    Search
                </label>
                <input type="text" id="search-column" class="form-control" name="search-column"
                    placeholder="Search here" required aria-required="true" />
            </div>
        </div>
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
                    <svg aria-label="Date" class="icon-date" width="20" height="20"
                        viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                        </use>
                    </svg>
                    {{-- End of update by Shanila --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4 mb-4">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <svg aria-label="Export" class="fill" width="23" height="26"
                    viewBox="0 0 23 26"fill="none" xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/common-icons.svg#export-dropdown"></use>
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
                                <svg aria-label="view" width="24" height="17" viewBox="0 0 24 17">
                                    <use xlink:href="/css/common-icons.svg#eye-icon">
                                    </use>
                                </svg>
                            </a>
                            <a href="#" title="send" aria-label="send"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21">
                                    <use xlink:href="/css/common-icons.svg#mapview">
                                    </use>
                                </svg>
                            </a>
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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
                                {{-- End of update by Shanila --}}
                            </a>
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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
                                {{-- End of update by Shanila --}}
                            </a>
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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
                                {{-- End of update by Shanila --}}
                            </a>
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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
                                {{-- End of update by Shanila --}}
                            </a>
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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
                                {{-- End of update by Shanila --}}
                            </a>
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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
                                {{-- End of update by Shanila --}}
                            </a>
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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
                                {{-- End of update by Shanila --}}
                            </a>
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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
                                {{-- End of update by Shanila --}}
                            </a>
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
                            <a href="#" title="view" aria-label="view"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
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
                            <a href="#" title="Edit" aria-label="Edit"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
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

    <div class="d-flex actions gap-3 justify-content-end mb-2">
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="View Receipt" aria-label="View Receipt"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <svg aria-label="view Receipt" width="24" height="17" viewBox="0 0 24 17">
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
                <svg aria-label="Send  Receipt" width="20" height="21" viewBox="0 0 20 21">
                    <use xlink:href="/css/common-icons.svg#mapview">
                    </use>
                </svg>
            </a>
            <span class="text-sm">
                Send Receipt
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Edit" aria-label="Edit Payment"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                {{-- Updated by Shanila to Add svg icon --}}
                <svg aria-label="Edit Payment" width="20" height="20" viewBox="0 0 20 20">
                    <use xlink:href="/css/common-icons.svg#pencil">
                    </use>
                </svg>
                {{-- End of update by Shanila --}}
            </a>
            <span class="text-sm">
                Edit Payment
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Issue Refund" aria-label="Issue Refund"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                {{-- Updated by Shanila to Add svg icon --}}
                <svg aria-label="back" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20">
                    <use xlink:href="/css/common-icons.svg#round-arrow">
                    </use>
                </svg>
                {{-- End of update by Shanila --}}
            </a>
            <span class="text-sm">
                Issue Refund
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Delete Payment" aria-label="Delete Payment"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                {{-- Updated by Shanila to Add svg icon --}}
                <svg aria-label="Delete Payment" width="21" height="21" viewBox="0 0 21 21">
                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                    </use>
                </svg>
                {{-- End of update by Shanila --}}
            </a>
            <span class="text-sm">
                Delete Payment
            </span>
        </div>
    </div>
</div>
@endif

<div class="tab-pane fade" id="reports-tab-pane" role="tabpanel" aria-labelledby="reports-tab" tabindex="0">
    <div class="row mb-3">
        <h3>
            Reports <small>(coming soon)</small>
        </h3>
    </div>
    <div class="row mb-4">
        <div class="col-md-3 col-12">
            <div>
                <label class="form-label" for="setDate">
                    Date Range
                </label>
                <div class="position-relative">
                    <input type="" name="" class="form-control js-single-date"
                        placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
                    <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/provider.svg#date-field"></use>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-5">
        <div class="d-flex justify-content-between">
            <div class="d-inline-flex align-items-center gap-4">
                <h2>Assignment</h2>
            </div>
            <div class="dropdown me-5">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg aria-label="Export" class="fill" width="23" height="26"
                        viewBox="0 0 23 26"fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/common-icons.svg#export-dropdown"></use>
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div>
            <img src="/tenant-resources/images/portrait/small/image-placeholder-assignment-graph.png" height="200"
                width="800" class="img-fluid" alt="Pending Payment image">
        </div>
    </div>
    <div class="mb-4">
        <div class="d-flex justify-content-between">
            <div class="d-inline-flex align-items-center gap-4">
                <h2>Payments</h2>
            </div>
            <div class="dropdown me-5">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <svg aria-label="Export" class="fill" width="23" height="26"
                        viewBox="0 0 23 26"fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/common-icons.svg#export-dropdown"></use>
                    </svg>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div>
            <img src="/tenant-resources/images/portrait/small/pending-payment.png" class="img-fluid"
                alt="Pending Payment image">
        </div>
    </div>
</div>
@endif
<!-- Reports tab ends -->

</div> <!-- tab-content -->
<!-- END: Provider Details ................... -->
</div>




</div>
</div>
</div>
@include('panels.common.add-document')
@include('modals.common.revert-back')
@include('panels.common.invoice-details')
@include('modals.mark-as-paid')
@include('modals.common.pay-invoice')
@include('modals.common.change-password', ['userid' => $userid])
</section>
@endif
</div>


</div>
@push('scripts')
    <script>
        function updateVal(attrName, val) {

            Livewire.emit('updateVal', attrName, val);

        }

        function payInvoices() {
            let selectedValues = [];
            $('tbody .form-check-input:checked').each(function () {
                selectedValues.push($(this).val());
            });

            if (selectedValues.length > 0) {

                Livewire.emit('initMultipleInvoices', selectedValues);
                $('#payInvoice').modal('show');
            } else {
                $('#messageAlert').html('Please select at least one invoice.');
                setTimeout(function () {
                    $('#messageAlert').html('');
                }, 2000);
            }
        }


        function revertInvoices() {
            let selectedValues = [];
            $('tbody .form-check-input:checked').each(function () {
                selectedValues.push($(this).val());
            });

            if (selectedValues.length > 0) {
                Livewire.emit('revertMultipleInvoice', selectedValues);
                $('#revertBackModal').modal('show');
            } else {
                $('#messageAlert').html('Please select at least one invoice.');
                setTimeout(function () {
                    $('#messageAlert').html('');
                }, 2000);
            }
        }

        Livewire.on('revertModalDismissed', () => {
            $('#revertBackModal').modal('hide');

        });

        Livewire.on('payInvoiceModalDismissed', () => {
            $('#payInvoice').modal('hide');

        });
        
    </script>
@endpush
