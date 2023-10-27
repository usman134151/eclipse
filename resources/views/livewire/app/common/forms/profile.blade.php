<div>
    <div x-data="{addDocument: false}">
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">Admin-Staff Profile</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="">
                                        <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="breadcrumb-item">
                                    Settings
                                </li>
                                <li class="breadcrumb-item">
                                    Admin Staff
                                </li>
                                <li class="breadcrumb-item">
                                    All Admin-Staff
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            @if(is_null($user))
            <div id="loader-section" class="loader-section" wire:loading>
                    <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                        <div class="spinner-border" role="status" aria-live="polite">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
            @else
            <!-- Basic multiple Column Form section start -->
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
                                            {{-- Updated by Shanila to Add svg icon--}}
                                            <svg aria-label="dashboard" width="31" height="29" viewBox="0 0 31 29">
                                                <use xlink:href="/css/common-icons.svg#tablet"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            <span>Dashboard</span>
                                        </button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="schedule-tab" data-bs-toggle="tab"
                                            data-bs-target="#schedule-tab-pane" type="button" role="tab"
                                            aria-controls="schedule-tab-pane" aria-selected="false">
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
                                            aria-controls="service-requests-tab-pane" aria-selected="false">
                                            {{-- Updated by Shanila to Add svg icon--}}
                                            <svg aria-label="service-request" width="28" height="31"
                                                viewBox="0 0 28 31">
                                                <use xlink:href="/css/common-icons.svg#gray-journal"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            <span>Service Requests</span>
                                        </button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="permissions-tab" data-bs-toggle="tab"
                                            data-bs-target="#permissions-tab-pane" type="button" role="tab"
                                            aria-controls="permissions-tab-pane" aria-selected="false">
                                            {{-- Updated by Shanila to Add svg icon--}}
                                            <svg aria-label="Permission" width="25" height="28" viewBox="0 0 25 28">
                                                <use xlink:href="/css/common-icons.svg#gray-user"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            <span>Permission</span>
                                        </button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="management-tab" data-bs-toggle="tab"
                                            data-bs-target="#management-tab-pane" type="button" role="tab"
                                            aria-controls="management-tab-pane" aria-selected="false">
                                            {{-- Updated by Shanila to Add svg icon--}}
                                            <svg aria-label="Management" width="24" height="29" viewBox="0 0 24 29">
                                                <use xlink:href="/css/common-icons.svg#gray-rated-user"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            <span>Management</span>
                                        </button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="notes-tab" data-bs-toggle="tab"
                                            data-bs-target="#notes-tab-pane" type="button" role="tab"
                                            aria-controls="notes-tab-pane" aria-selected="false">

                                            {{-- Updated by Shanila to Add svg icon--}}
                                            <svg aria-label="Notes" width="28" height="29" viewBox="0 0 28 29">
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
                                            aria-controls="notifications-tab-pane" aria-selected="false">
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
                                            aria-controls="log-tab-pane" aria-selected="false">

                                            {{-- Updated by Shanila to Add svg icon--}}
                                            <svg aria-label="logs" width="27" height="27" viewBox="0 0 27 27">
                                                <use xlink:href="/css/common-icons.svg#gray-log"></use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                            <span>Log</span>
                                        </button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel"
                                        aria-labelledby="dashboard-tab" tabindex="0">
                                        <div class="col-md-12 mb-md-2 mt-5">
                                            <div class="row mt-2 mb-5">
                                                <div class="col-md-5 me-5">
                                                    <div class="mb-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="d-inline-block position-relative profile-pic-div">
                                                                    <img  src="{{$user['userdetail']['profile_pic'] !=null ? $user['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/image4.png'}}"
                                                                        class="img-fluid"
                                                                        alt="Profile Image of Admin Staff" />
                                                                </div>
                                                                <div style="margin-left: -1rem;"
                                                                    class="d-inline-block position-relative mt-3">
                                                                    <svg aria-label="Sydney, Australia" width="156"
                                                                        height="32" viewBox="0 0 156 32" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M0 0H133L156 32H0V0Z"
                                                                            fill="url(#paint0_linear_2265_83025)" />
                                                                        <defs>
                                                                            <linearGradient
                                                                                id="paint0_linear_2265_83025" x1="78"
                                                                                y1="0" x2="140.587" y2="0"
                                                                                gradientUnits="userSpaceOnUse">
                                                                                <stop stop-color="#213969" />
                                                                                <stop offset="1" stop-color="#204387" />
                                                                            </linearGradient>
                                                                        </defs>
                                                                    </svg>
                                                                    <div
                                                                        class="position-absolute bottom-0 p-0 d-flex justify-content-center align-items-center">
                                                                        <label class="text-white form-label-sm ps-2"
                                                                            for="">
                                                                           {{$user['userdetail']['city'].', '.$user['userdetail']['country']}}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-7 ms-4">
                                                                <h3 class="font-family-tertiary fw-medium">
                                                                    {{$user['name']}}
                                                                </h3>
                                                                <div class="row mb-4">
                                                                    <div class="col-md-12">
                                                                        <div class="row mb-1">
                                                                            <div class="col-md-12">
                                                                                <p class="font-family-tertiary">
                                                                                    <b>Admin Company:</b> Example

                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <p class="font-family-tertiary">
                                                                                    <b>Position:</b>{{$user['userdetail']['user_position']}}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <p class="font-family-tertiary">
                                                                                    <b>Phone Number:</b>  {{$user['userdetail']['phone']}}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <p class="text-">
                                                                                    <b>Email:</b>{{$user['email']}}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <p class="">
                                                                                    <b>Primary Language:</b> English
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-4">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row" id="table-hover-row">
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <h2>Assigned Teams</h2>
                                                            </div>
                                                            <div class="card">
                                                                <div class="table-responsive">
                                                                    <!-- table one  -->
                                                                    <table id="unassigned_data"
                                                                        class="table table-hover"
                                                                        aria-label="Admin Staff Teams Table">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th scope="col">#</th>
                                                                                <th scope="col">Team</th>
                                                                                <th scope="col">Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @if(count($user['admin_teams']))
                                                                                @foreach($user['admin_teams'] as $index=> $team)
                                                                                    <tr role="row" class="odd">
                                                                                        <td>{{$index+1}}</td>
                                                                                        <td>
                                                                                            <div class="row g-2">
                                                                                                <div class="col-md-2">
                                                                                                    <img style="width:64px;height:64px;top:1rem" src="{{ $team['team_image']!=null ? $team['team_image'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg'}}"
                                                                                                        class="img-fluid rounded-circle"
                                                                                                        alt="Team Profile Image">
                                                                                                </div>
                                                                                                <div class="col-md-10">
                                                                                                    <h6 class="fw-semibold">
                                                                                                        {{$team['team_name']}}
                                                                                                    </h6>
                                                                                                    <p>{{$team['team_email']}}
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <a href="#" aria-label="Chat"
                                                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                                <svg aria-label="Chat"
                                                                                                    width="20" height="20"
                                                                                                    viewBox="0 0 20 20">
                                                                                                    <use
                                                                                                        xlink:href="/css/common-icons.svg#chat">
                                                                                                    </use>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                    @if($index==4)
                                                                                        @break
                                                                                    @endif
                                                                                @endforeach
                                                                            @else
                                                                                <tr>
                                                                                    <td> No Assigned Teams.</td>
                                                                                </tr>
                                                                            @endif
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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

                                                <div class="col-12 form-actions mt-5">
                                                    <button type="button"
                                                        class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">

                                                        <span>Deactivate</span>
                                                    </button>
                                                    <a target="_blank" href="/chat/{{$user['id']}}"
                                                        class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">

                                                        <span>Message</span>
                                                    </a>
                                                    <button type="button"
                                                        class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" data-bs-toggle="modal" data-bs-target="#changePasswordModal">

                                                        <span>Reset Password</span>
                                                    </button>
                                                    <button type="button"
                                                        class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">

                                                        <span>Lock Account</span>
                                                    </button>
                                                    <button type="button"
                                                        class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">

                                                        <span>Navigate</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Dashboard tab end -->
                                    <div class="tab-pane fade" id="schedule-tab-pane" role="tabpanel"
                                        aria-labelledby="schedule-tab" tabindex="0">
                                        <div class="row mb-3">
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
                                                    <button
                                                        class="btn btn-secondary dropdown-toggle btn-outline-primary"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Export Button">
                                                        <svg  width="23" height="26"
                                                            viewBox="0 0 23 26">
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
                                    <!-- Schedule Tab End-->

                                    <div class="tab-pane fade" id="service-requests-tab-pane" role="tabpanel"
                                        aria-labelledby="service-requests-tab" tabindex="0">
                                        <div class="row">
                                            <h3>Assignments</h3>
                                        </div>
                                        <div class="d-flex justify-content-start gap-4 mb-4">
                                            <div class="d-flex justify-content-start gap-2">
                                                <div class="mb-4 mb-lg-0 position-relative">
                                                    <!-- Begin : it will be replaced with livewire module-->
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg aria-label="Date" class="icon-date sm cursor-pointer"
                                                        width="20" height="20" viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#datefield-icon">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    <input type=""
                                                        class="form-control form-control-sm w-auto js-single-date"
                                                        placeholder="MM/DD/YYYY" name="selectDate"
                                                        aria-label="Select Date">
                                                    <!-- End : it will be replaced with livewire module -->
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-start gap-2">
                                                <div class="mb-4 mb-lg-0">
                                                    <button type="button"
                                                        class="btn btn-xs btn-primary rounded">Today</button>
                                                </div>
                                                <div class="mb-4 mb-lg-0">
                                                    <button type="button"
                                                        class="btn btn-xs btn-inactive rounded">Upcoming</button>
                                                </div>
                                                <div class="mb-4 mb-lg-0">
                                                    <button type="button"
                                                        class="btn btn-xs btn-inactive rounded">Past</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-5">
                                                <label class="form-label" for="time-zone">
                                                    Accommodation
                                                </label>
                                                {{-- Updated by Shanila to add dropdown--}}
                                                {!! App\Helpers\SetupHelper::createDropDown('Accommodation', 'id',
                                                'name', '', '', 'name', false, 'accommodation',
                                                '','accommodation') !!}
                                                {{-- End of update by Shanila --}}
                                            </div>
                                            <div class="col-5 mx-2">
                                                <label class="form-label" for="service">
                                                    Service
                                                </label>
                                                <select class="select2 form-select" id="service">
                                                    <option>Service</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="d-lg-flex justify-content-between mb-2">
                                                <h2 class="mb-lg-0 text-dark">Today’s Assignment</h2>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <div class="d-inline-flex align-items-center gap-4">
                                                    <div class="d-inline-flex align-items-center gap-4">
                                                        <label for="show_records" class="form-label-sm mb-0">
                                                            Show
                                                        </label>
                                                        <select class="form-select form-select-sm"
                                                            id="show_records">
                                                            <option>10</option>
                                                            <option>15</option>
                                                            <option>20</option>
                                                            <option>25</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-inline-flex align-items-center gap-4">
                                                    <label for="search-record" class="form-label-sm mb-0">
                                                        Search
                                                    </label>
                                                    <input type="search" class="form-control form-control-sm"
                                                        id="search-record" name="search" placeholder="Search here"
                                                        autocomplete="on" />
                                                </div>
                                            </div>
                                            {{-- Hoverable Rows - Start --}}
                                            <div class="row" id="table-hover-row">
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="table-responsive">
                                                            <table id="unassigned_data"
                                                                class="table table-fs-md table-hover"
                                                                aria-label="Admin Staff Teams Table">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th scope="col" class="text-center">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                aria-label="Select All Teams">
                                                                        </th>
                                                                        <th scope="col">Booking ID</th>
                                                                        <th scope="col">Accommodation</th>
                                                                        <th scope="col">Type</th>
                                                                        <th scope="col">Company</th>
                                                                        <th scope="col">Billing</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr role="row" class="odd">
                                                                        <td class="text-center">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                aria-label="Select Team">
                                                                        </td>
                                                                        <td>
                                                                            <a href="#">100995-6</a>
                                                                            <div>
                                                                                <div class="time-date">08/24/2022</div>
                                                                                <div class="time-date">9:59 AM to 4:22
                                                                                    PM</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Service: Language interpreting</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge bg-warning mb-1">
                                                                                Teleconference</div>
                                                                            <div>292332811 - Code 2131</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check form-switch">
                                                                                <div>Demo Company</div>
                                                                                <div>NO. of Providers: 5</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>$100</td>
                                                                        <td>
                                                                            <div class="d-flex actions">
                                                                                <a href="#" title="View"
                                                                                    aria-label="View"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    <svg aria-label="View" class="fill" width="20"
                                                                                        height="28" viewBox="0 0 20 28"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/provider.svg#view">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="text-center">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                aria-label="Select Team">
                                                                        </td>
                                                                        <td>
                                                                            <a href="#">100995-6</a>
                                                                            <div>
                                                                                <div class="time-date">08/24/2022</div>
                                                                                <div class="time-date">9:59 AM to 4:22
                                                                                    PM</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Service: Language interpreting</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge bg-warning mb-1">
                                                                                Teleconference</div>
                                                                            <div>292332811 - Code 2131</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check form-switch">
                                                                                <div>Demo Company</div>
                                                                                <div>NO. of Providers: 5</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>$100</td>
                                                                        <td>
                                                                            <div class="d-flex actions">
                                                                                <a href="#" title="View"
                                                                                    aria-label="View"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    <svg aria-label="View" class="fill" width="20"
                                                                                        height="28" viewBox="0 0 20 28"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/provider.svg#view">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="text-center">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                aria-label="Select Team">
                                                                        </td>
                                                                        <td>
                                                                            <a href="#">100995-6</a>
                                                                            <div>
                                                                                <div class="time-date">08/24/2022</div>
                                                                                <div class="time-date">9:59 AM to 4:22
                                                                                    PM</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Service: Language interpreting</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge bg-warning mb-1">
                                                                                Teleconference</div>
                                                                            <div>292332811 - Code 2131</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check form-switch">
                                                                                <div>Demo Company</div>
                                                                                <div>NO. of Providers: 5</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>$100</td>
                                                                        <td>
                                                                            <div class="d-flex actions">
                                                                                <a href="#" title="View"
                                                                                    aria-label="View"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    <svg aria-label="View" class="fill" width="20"
                                                                                        height="28" viewBox="0 0 20 28"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/provider.svg#view">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="text-center">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                aria-label="Select Team">
                                                                        </td>
                                                                        <td>
                                                                            <a href="#">100995-6</a>
                                                                            <div>
                                                                                <div class="time-date">08/24/2022</div>
                                                                                <div class="time-date">9:59 AM to 4:22
                                                                                    PM</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Service: Language interpreting</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge bg-warning mb-1">
                                                                                Teleconference</div>
                                                                            <div>292332811 - Code 2131</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check form-switch">
                                                                                <div>Demo Company</div>
                                                                                <div>NO. of Providers: 5</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>$100</td>
                                                                        <td>
                                                                            <div class="d-flex actions">
                                                                                <a href="#" title="View"
                                                                                    aria-label="View"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    <svg aria-label="View" class="fill" width="20"
                                                                                        height="28" viewBox="0 0 20 28"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/provider.svg#view">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="text-center">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                aria-label="Select Team">
                                                                        </td>
                                                                        <td>
                                                                            <a href="#">100995-6</a>
                                                                            <div>
                                                                                <div class="time-date">08/24/2022</div>
                                                                                <div class="time-date">9:59 AM to 4:22
                                                                                    PM</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Service: Language interpreting</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge bg-warning mb-1">
                                                                                Teleconference</div>
                                                                            <div>292332811 - Code 2131</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check form-switch">
                                                                                <div>Demo Company</div>
                                                                                <div>NO. of Providers: 5</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>$100</td>
                                                                        <td>
                                                                            <div class="d-flex actions">
                                                                                <a href="#" title="View"
                                                                                    aria-label="View"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    <svg aria-label="View" class="fill" width="20"
                                                                                        height="28" viewBox="0 0 20 28"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/provider.svg#view">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="even">
                                                                        <td class="text-center">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                aria-label="Select Team">
                                                                        </td>
                                                                        <td>
                                                                            <a href="#">100995-6</a>
                                                                            <div>
                                                                                <div class="time-date">08/24/2022</div>
                                                                                <div class="time-date">9:59 AM to 4:22
                                                                                    PM</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Service: Language interpreting</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge bg-warning mb-1">
                                                                                Teleconference</div>
                                                                            <div>292332811 - Code 2131</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check form-switch">
                                                                                <div>Demo Company</div>
                                                                                <div>NO. of Providers: 5</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>$100</td>
                                                                        <td>
                                                                            <div class="d-flex actions">
                                                                                <a href="#" title="View"
                                                                                    aria-label="View"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    <svg aria-label="View" class="fill" width="20"
                                                                                        height="28" viewBox="0 0 20 28"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/provider.svg#view">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr role="row" class="odd">
                                                                        <td class="text-center">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" value=""
                                                                                aria-label="Select Team">
                                                                        </td>
                                                                        <td>
                                                                            <a href="#">100995-6</a>
                                                                            <div>
                                                                                <div class="time-date">08/24/2022</div>
                                                                                <div class="time-date">9:59 AM to 4:22
                                                                                    PM</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Shelby Sign Language</div>
                                                                            <div>Service: Language interpreting</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="badge bg-warning mb-1">
                                                                                Teleconference</div>
                                                                            <div>292332811 - Code 2131</div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check form-switch">
                                                                                <div>Demo Company</div>
                                                                                <div>NO. of Providers: 5</div>
                                                                            </div>
                                                                        </td>
                                                                        <td>$100</td>
                                                                        <td>
                                                                            <div class="d-flex actions">
                                                                                <a href="#" title="View"
                                                                                    aria-label="View"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    <svg aria-label="View" class="fill" width="20"
                                                                                        height="28" viewBox="0 0 20 28"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <use
                                                                                            xlink:href="/css/provider.svg#view">
                                                                                        </use>
                                                                                    </svg>
                                                                                </a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Hoverable Rows - End --}}
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">
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
                                            <!-- Icon Help -->
                                            <div class="d-flex actions gap-3 justify-content-end mb-2">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <a href="#" title="View" aria-label="View"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg class="fill" width="20" height="28" viewBox="0 0 20 28"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#view"></use>
                                                        </svg>
                                                    </a>
                                                    <span class="text-sm">
                                                        View
                                                    </span>
                                                </div>
                                            </div>
                                            <!-- /Icon Help -->
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="permissions-tab-pane" role="tabpanel"
                                        aria-labelledby="permissions-tab" tabindex="0">
                                        <div class="row mb-4">
                                            <div class="col-lg-12">
                                                <h3>Permissions</h3>
                                                <p>Choose from predefined set of permissions for the user. You can
                                                    customize permissions
                                                    as well.</p>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-12 gap-3 d-lg-flex">
                                                <a href="#" class="btn btn-outline-dark rounded">Super Admin</a>
                                                <a href="#" class="btn btn-outline-dark rounded">Provider Manager</a>
                                                <a href="#" class="btn btn-outline-dark rounded">Customer Relation</a>
                                                <a href="#" class="btn btn-outline-dark rounded">Company Manager</a>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-12 mb-4">
                                                <p class="mb-0">Copy permissions from another user</p>
                                            </div>
                                            <div class="col-lg-12 d-lg-flex gap-3 mb-3">
                                                <select class="form-select w-auto" aria-label="Select User">
                                                    <option>Select User</option>
                                                </select>
                                                <a href="#" class="btn btn-primary rounded">Apply</a>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="table-responsive">
                                                    <table class="table table-hover mb-3">
                                                        <thead>
                                                            <tr>
                                                                <th class="w-25">
                                                                    Section
                                                                </th>
                                                                <th>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="view"
                                                                            name="" type="checkbox" tabindex="">
                                                                        <label for="view" class="mt-1">View</label>
                                                                    </div>
                                                                </th>
                                                                <th class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="add" name=""
                                                                            type="checkbox" tabindex="">
                                                                        <label for="add" class="mt-1">Add</label>
                                                                    </div>
                                                                </th>
                                                                <th>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="edit"
                                                                            name="" type="checkbox" tabindex="">
                                                                        <label for="edit" class="mt-1">Edit</label>
                                                                    </div>
                                                                </th>
                                                                <th>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="delete"
                                                                            name="" type="checkbox" tabindex="">
                                                                        <label for="delete" class="mt-1">Delete</label>
                                                                    </div>
                                                                </th>
                                                                <th>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" id="all" name=""
                                                                            type="checkbox" tabindex="">
                                                                        <label for="all" class="mt-1">All</label>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td data-bs-toggle="collapse" href="#dashboard"
                                                                    role="button" aria-expanded="false"
                                                                    aria-controls="dashboard">
                                                                    <strong>Dashboard</strong>
                                                                    <svg aria-label="Dashboard" class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8">
                                                                        <use xlink:href="/css/common-icons.svg#collapse-row">
                                                                        </use>
                                                                    </svg>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            aria-label="Select View" type="checkbox"
                                                                            tabindex="">
                                                                    </div>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            aria-label="Select Add" type="checkbox"
                                                                            tabindex="" checked>
                                                                    </div>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            aria-label="Select Edit" tabindex="">
                                                                    </div>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            aria-label="Select Delete" type="checkbox"
                                                                            tabindex="">
                                                                    </div>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            aria-label="Select All" type="checkbox"
                                                                            tabindex="">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <div>
                                                                <tr class="collapse " id="dashboard">
                                                                    <td class="align-middle">
                                                                        Dashboard content
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                aria-label="Select View" type="checkbox"
                                                                                tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                aria-label="Select Add" type="checkbox"
                                                                                tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" aria-label="Select Edit"
                                                                                tabindex="" checked>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                aria-label="Select Delete"
                                                                                type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                aria-label="Select All" type="checkbox"
                                                                                tabindex="">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>

                                                                <tr>
                                                                    <td data-bs-toggle="collapse" href="#chat"
                                                                        role="button" aria-expanded="false"
                                                                        aria-controls="chat">
                                                                        <strong>Chat</strong>
                                                                        <svg aria-label="Chat" class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8">
                                                                            <use xlink:href="/css/common-icons.svg#collapse-row">
                                                                            </use>
                                                                        </svg>
                                                                    </td>
                                                                    <td class="">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                aria-label="Select View" type="checkbox"
                                                                                tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                aria-label="Select Add" type="checkbox"
                                                                                tabindex="" checked>
                                                                        </div>
                                                                    </td>
                                                                    <td class="">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" aria-label="Select Edit"
                                                                                tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                aria-label="Select Delete"
                                                                                type="checkbox" tabindex="">
                                                                        </div>
                                                                    </td>
                                                                    <td class="">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                aria-label="Select All" type="checkbox"
                                                                                tabindex="">
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <td data-bs-toggle="collapse" href="#assignments"
                                                                    role="button" aria-expanded="false"
                                                                    aria-controls="assignments">
                                                                    <strong>Assignments</strong>
                                                                    <svg aria-label="Dashboard" class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8">
                                                                        <use xlink:href="/css/common-icons.svg#collapse-row">
                                                                        </use>
                                                                    </svg>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            aria-label="Select View" type="checkbox"
                                                                            tabindex="">
                                                                    </div>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            aria-label="Select Add" type="checkbox"
                                                                            tabindex="" checked>
                                                                    </div>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            aria-label="Select Edit" tabindex="">
                                                                    </div>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            aria-label="Select Delete" type="checkbox"
                                                                            tabindex="">
                                                                    </div>
                                                                </td>
                                                                <td class="">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input"
                                                                            aria-label="Select All" type="checkbox"
                                                                            tabindex="">
                                                                    </div>
                                                                </td>
                                                                </tr>
                                                                <div>
                                                                    <tr class="collapse " id="assignments">
                                                                        <td class="align-middle">
                                                                            Assignments (Today, Upcoming, Past, Pending)
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select View"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select Add"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox"
                                                                                    aria-label="Select Edit" tabindex=""
                                                                                    checked>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select Delete"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select All"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr class="collapse " id="assignments">
                                                                        <td class="">
                                                                            Booking Form
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select View"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select Add"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox"
                                                                                    aria-label="Select Edit" tabindex=""
                                                                                    checked>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select Delete"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select All"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr class="collapse " id="assignments">
                                                                        <td class="">
                                                                            Quotes & Leads Module
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select View"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select Add"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox"
                                                                                    aria-label="Select Edit" tabindex=""
                                                                                    checked>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select Delete"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select All"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td data-bs-toggle="collapse" href="#customers"
                                                                            role="button" aria-expanded="false"
                                                                            aria-controls="customers">
                                                                            <strong>Customers</strong>

                                                                            <svg aria-label="Customers" class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8">
                                                                                <use xlink:href="/css/common-icons.svg#collapse-row">
                                                                                </use>
                                                                            </svg>

                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select View"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select Add"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Edit" type="checkbox"
                                                                                    tabindex="" checked>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select Delete"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    aria-label="Select All"
                                                                                    type="checkbox" tabindex="">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <div>
                                                                        <tr class="collapse " id="customers">
                                                                            <td class="align-middle">
                                                                                Add/Edit/Deactivate Company & Customers
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select View"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Add"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Edit"
                                                                                        type="checkbox" tabindex=""
                                                                                        checked>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Delete"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select All"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="collapse " id="customers">
                                                                            <td class="">
                                                                                Companies (List, Profiles)
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select View"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Add"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Edit"
                                                                                        type="checkbox" tabindex=""
                                                                                        checked>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Delete"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select All"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="collapse " id="customers">
                                                                            <td class="">
                                                                                Customers (List, Profiles)
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select View"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Add"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Edit"
                                                                                        type="checkbox" tabindex=""
                                                                                        checked>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Delete"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select All"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr class="collapse " id="customers">
                                                                            <td class="">
                                                                                Customer Pricing
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select View"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Add"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Edit"
                                                                                        type="checkbox" tabindex=""
                                                                                        checked>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Delete"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select All"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="collapse " id="customers">
                                                                            <td class="">
                                                                                Invoice Generator
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select View"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Add"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Edit"
                                                                                        type="checkbox" tabindex=""
                                                                                        checked>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Delete"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select All"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="collapse " id="customers">
                                                                            <td class="">
                                                                                Customer Invoices
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select View"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Add"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Edit"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Delete"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select All"
                                                                                        type="checkbox" tabindex=""
                                                                                        checked>
                                                                                </div>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td data-bs-toggle="collapse"
                                                                                href="#providers" role="button"
                                                                                aria-expanded="false"
                                                                                aria-controls="providers">
                                                                                <strong>Providers</strong>
                                                                                <svg aria-label="Providers" class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8">
                                                                                    <use xlink:href="/css/common-icons.svg#collapse-row">
                                                                                    </use>
                                                                                </svg>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select View"
                                                                                        type="checkbox" tabindex=""
                                                                                        checked>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Add"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Edit"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select Delete"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input"
                                                                                        aria-label="Select All"
                                                                                        type="checkbox" tabindex="">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <div>
                                                                            <tr class="collapse " id="providers">
                                                                                <td class="align-middle">
                                                                                    Add/Edit/Deactivate Provider &
                                                                                    Provider Teams
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr class="collapse " id="providers">
                                                                                <td class="">
                                                                                    Provider Teams (List)
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr class="collapse " id="providers">
                                                                                <td class="">
                                                                                    Providers (List, Profiles)
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr class="collapse " id="providers">
                                                                                <td class="">
                                                                                    Provider Rates
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="collapse " id="providers">
                                                                                <td class="">
                                                                                    Applications & Screenings
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="collapse " id="providers">
                                                                                <td class="">
                                                                                    Reimbursements
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr class="collapse " id="providers">
                                                                                <td class="">
                                                                                    Remittance Generator
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr class="collapse " id="providers">
                                                                                <td class="">
                                                                                    Payment Manager
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <strong>Reports</strong>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>
                                                                                    <strong>System Logs</strong>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td data-bs-toggle="collapse"
                                                                                    href="#settings" role="button"
                                                                                    aria-expanded="false"
                                                                                    aria-controls="settings">
                                                                                    <strong> Settings</strong>
                                                                                    <svg aria-label="Settings" class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8">
                                                                                        <use xlink:href="/css/common-icons.svg#collapse-row">
                                                                                        </use>
                                                                                    </svg>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select View"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Add"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Edit"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select Delete"
                                                                                            type="checkbox" tabindex=""
                                                                                            checked>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            aria-label="Select All"
                                                                                            type="checkbox" tabindex="">
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <div>
                                                                                <tr class="collapse active"
                                                                                    id="settings">
                                                                                    <td class="align-middle">
                                                                                        Business Profile & Settings
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Select View"
                                                                                                type="checkbox"
                                                                                                tabindex="">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Select Add"
                                                                                                type="checkbox"
                                                                                                tabindex="">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Edit"
                                                                                                type="checkbox"
                                                                                                tabindex="" checked>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Select Delete"
                                                                                                type="checkbox"
                                                                                                tabindex="">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Select All"
                                                                                                type="checkbox"
                                                                                                tabindex="">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                {{--
                                                                                <tr>
                                                                                    <td data-bs-toggle="collapse"
                                                                                        href="#collapseExample4"
                                                                                        role="button"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="collapseExample4">
                                                                                        <strong>Business Profile &
                                                                                            Settings </strong>
                                                                                        <svg class="ms-2 mb-1"
                                                                                            width="17" height="8"
                                                                                            viewBox="0 0 17 8"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path
                                                                                                d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z"
                                                                                                fill="#6E6B7B" />
                                                                                        </svg>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Select View"
                                                                                                type="checkbox"
                                                                                                tabindex="">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Select Add"
                                                                                                type="checkbox"
                                                                                                tabindex="">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Edit"
                                                                                                type="checkbox"
                                                                                                tabindex="">
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Select Delete"
                                                                                                type="checkbox"
                                                                                                tabindex="" checked>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="form-check">
                                                                                            <input
                                                                                                class="form-check-input"
                                                                                                aria-label="Select All"
                                                                                                type="checkbox"
                                                                                                tabindex="">
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <div>
                                                                                    <tr class="collapse "
                                                                                        id="collapseExample4">
                                                                                        <td class="align-middle">
                                                                                            Account Profile
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select View"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Add"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Edit"
                                                                                                    type="checkbox"
                                                                                                    tabindex="" checked>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Delete"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select All"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr class="collapse "
                                                                                        id="collapseExample4">
                                                                                        <td class="align-middle">
                                                                                            Business Setup
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select View"
                                                                                                    type="checkbox"
                                                                                                    tabindex="" checked>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Add"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Edit"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Delete"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select All"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr class="collapse "
                                                                                        id="collapseExample4">
                                                                                        <td class="align-middle">
                                                                                            Notification Controls
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select View"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Add"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Edit"
                                                                                                    type="checkbox"
                                                                                                    tabindex="" checked>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Delete"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select All"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr class="collapse "
                                                                                        id="collapseExample4">
                                                                                        <td class="align-middle">
                                                                                            Email Notifications
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select View"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Add"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Edit"
                                                                                                    type="checkbox"
                                                                                                    tabindex="" checked>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Delete"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select All"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr class="collapse "
                                                                                        id="collapseExample4">
                                                                                        <td class="align-middle">
                                                                                            SMS Notifications
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select View"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Add"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Edit"
                                                                                                    type="checkbox"
                                                                                                    tabindex="" checked>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Delete"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select All"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr class="collapse "
                                                                                        id="collapseExample4">
                                                                                        <td class="align-middle">
                                                                                            Password Reset
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select View"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Add"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Edit"
                                                                                                    type="checkbox"
                                                                                                    tabindex="" checked>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Delete"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select All"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td data-bs-toggle="collapse"
                                                                                            href="#collapseExample5"
                                                                                            role="button"
                                                                                            aria-expanded="false"
                                                                                            aria-controls="collapseExample5">
                                                                                            <strong>Accommodations &
                                                                                                Services Setup </strong>
                                                                                            <svg class="ms-2 mb-1"
                                                                                                width="17" height="8"
                                                                                                viewBox="0 0 17 8"
                                                                                                fill="none"
                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                <path
                                                                                                    d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z"
                                                                                                    fill="#6E6B7B" />
                                                                                            </svg>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select View"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Add"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Edit"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select Delete"
                                                                                                    type="checkbox"
                                                                                                    tabindex="">
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="form-check">
                                                                                                <input
                                                                                                    class="form-check-input"
                                                                                                    aria-label="Select All"
                                                                                                    type="checkbox"
                                                                                                    tabindex="" checked>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <div>
                                                                                        <tr class="collapse "
                                                                                            id="collapseExample5">
                                                                                            <td class="align-middle">
                                                                                                View Services &
                                                                                                Accommodations
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select View"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select Add"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Edit"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select Delete"
                                                                                                        type="checkbox"
                                                                                                        tabindex=""
                                                                                                        checked>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select All"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr class="collapse "
                                                                                            id="collapseExample5">
                                                                                            <td class="align-middle">
                                                                                                Add/Edit Services &
                                                                                                Accommodations
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select View"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select Add"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Edit"
                                                                                                        type="checkbox"
                                                                                                        tabindex=""
                                                                                                        checked>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select Delete"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select All"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td data-bs-toggle="collapse"
                                                                                                href="#specializations"
                                                                                                role="button"
                                                                                                aria-expanded="false"
                                                                                                aria-controls="specializations">
                                                                                                <strong>Specializations</strong>
                                                                                                <svg class="ms-2 mb-1"
                                                                                                    width="17"
                                                                                                    height="8"
                                                                                                    viewBox="0 0 17 8"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                    <path
                                                                                                        d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z"
                                                                                                        fill="#6E6B7B" />
                                                                                                </svg>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select View"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select Add"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Edit"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select Delete"
                                                                                                        type="checkbox"
                                                                                                        tabindex="">
                                                                                                </div>
                                                                                            </td>
                                                                                            <td>
                                                                                                <div class="form-check">
                                                                                                    <input
                                                                                                        class="form-check-input"
                                                                                                        aria-label="Select All"
                                                                                                        type="checkbox"
                                                                                                        tabindex=""
                                                                                                        checked>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <div>
                                                                                            <tr class="collapse "
                                                                                                id="specializations">
                                                                                                <td
                                                                                                    class="align-middle">
                                                                                                    View Specializations
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select View"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select Add"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Edit"
                                                                                                            type="checkbox"
                                                                                                            tabindex=""
                                                                                                            checked>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select Delete"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select All"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr class="collapse "
                                                                                                id="specializations">
                                                                                                <td
                                                                                                    class="align-middle">
                                                                                                    View/Edit
                                                                                                    Specializations
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select View"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select Add"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Edit"
                                                                                                            type="checkbox"
                                                                                                            tabindex=""
                                                                                                            checked>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select Delete"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select All"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td data-bs-toggle="collapse"
                                                                                                    href="#industries"
                                                                                                    role="button"
                                                                                                    aria-expanded="false"
                                                                                                    aria-controls="industries">
                                                                                                    <strong>Industries</strong>
                                                                                                    <svg class="ms-2 mb-1"
                                                                                                        width="17"
                                                                                                        height="8"
                                                                                                        viewBox="0 0 17 8"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z"
                                                                                                            fill="#6E6B7B" />
                                                                                                    </svg>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select View"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select Add"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Edit"
                                                                                                            type="checkbox"
                                                                                                            tabindex=""
                                                                                                            checked>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select Delete"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td>
                                                                                                    <div
                                                                                                        class="form-check">
                                                                                                        <input
                                                                                                            class="form-check-input"
                                                                                                            aria-label="Select All"
                                                                                                            type="checkbox"
                                                                                                            tabindex="">
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <div>
                                                                                                <tr class="collapse "
                                                                                                    id="industries">
                                                                                                    <td
                                                                                                        class="align-middle">
                                                                                                        View Industries
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select View"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select Add"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Edit"
                                                                                                                type="checkbox"
                                                                                                                tabindex=""
                                                                                                                checked>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select Delete"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select All"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>

                                                                                                <tr class="collapse "
                                                                                                    id="industries">
                                                                                                    <td
                                                                                                        class="align-middle">
                                                                                                        View/Edit
                                                                                                        Industries
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select View"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select Add"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Edit"
                                                                                                                type="checkbox"
                                                                                                                tabindex=""
                                                                                                                checked>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select Delete"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select All"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>

                                                                                                <tr>
                                                                                                    <td data-bs-toggle="collapse"
                                                                                                        href="#saved-forms"
                                                                                                        role="button"
                                                                                                        aria-expanded="false"
                                                                                                        aria-controls="saved-forms">
                                                                                                        <strong>Saved
                                                                                                            Forms</strong>
                                                                                                        <svg class="ms-2 mb-1"
                                                                                                            width="17"
                                                                                                            height="8"
                                                                                                            viewBox="0 0 17 8"
                                                                                                            fill="none"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z"
                                                                                                                fill="#6E6B7B" />
                                                                                                        </svg>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select View"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select Add"
                                                                                                                type="checkbox"
                                                                                                                tabindex=""
                                                                                                                checked>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Edit"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select Delete"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                    <td>
                                                                                                        <div
                                                                                                            class="form-check">
                                                                                                            <input
                                                                                                                class="form-check-input"
                                                                                                                aria-label="Select All"
                                                                                                                type="checkbox"
                                                                                                                tabindex="">
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <div>
                                                                                                    <tr class="collapse "
                                                                                                        id="saved-forms">
                                                                                                        <td
                                                                                                            class="align-middle">
                                                                                                            View
                                                                                                            Customized
                                                                                                            Forms
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select View"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select Add"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Edit"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select Delete"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select All"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex=""
                                                                                                                    checked>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                    <tr class="collapse "
                                                                                                        id="saved-forms">
                                                                                                        <td
                                                                                                            class="align-middle">
                                                                                                            View/Edit
                                                                                                            Customized
                                                                                                            Forms
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select View"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select Add"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Edit"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select Delete"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select All"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex=""
                                                                                                                    checked>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>

                                                                                                    <tr>
                                                                                                        <td data-bs-toggle="collapse"
                                                                                                            href="#coupons-&-referrals-setup"
                                                                                                            role="button"
                                                                                                            aria-expanded="false"
                                                                                                            aria-controls="coupons-&-referrals-setup">
                                                                                                            <strong>Coupons
                                                                                                                &
                                                                                                                Referrals
                                                                                                                Setup
                                                                                                            </strong>
                                                                                                            <svg class="ms-2 mb-1"
                                                                                                                width="17"
                                                                                                                height="8"
                                                                                                                viewBox="0 0 17 8"
                                                                                                                fill="none"
                                                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                                                <path
                                                                                                                    d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z"
                                                                                                                    fill="#6E6B7B" />
                                                                                                            </svg>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select View"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex=""
                                                                                                                    checked>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select Add"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Edit"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select Delete"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <div
                                                                                                                class="form-check">
                                                                                                                <input
                                                                                                                    class="form-check-input"
                                                                                                                    aria-label="Select All"
                                                                                                                    type="checkbox"
                                                                                                                    tabindex="">
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <div>
                                                                                                        <tr class="collapse "
                                                                                                            id="coupons-&-referrals-setup">
                                                                                                            <td
                                                                                                                class="align-middle">
                                                                                                                View
                                                                                                                Coupons
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select View"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Add"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Edit"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex=""
                                                                                                                        checked>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Delete"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select All"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr class="collapse "
                                                                                                            id="coupons-&-referrals-setup">
                                                                                                            <td
                                                                                                                class="align-middle">
                                                                                                                Add/Edit
                                                                                                                Coupons
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select View"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Add"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex=""
                                                                                                                        checked>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Edit"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Delete"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select All"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr class="collapse "
                                                                                                            id="coupons-&-referrals-setup">
                                                                                                            <td
                                                                                                                class="align-middle">
                                                                                                                View
                                                                                                                Referrals
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select View"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Add"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Edit"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex=""
                                                                                                                        checked>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Delete"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select All"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <tr class="collapse "
                                                                                                            id="coupons-&-referrals-setup">
                                                                                                            <td
                                                                                                                class="align-middle">
                                                                                                                Add/Edit
                                                                                                                Referrals
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select View"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Add"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Edit"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Delete"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex=""
                                                                                                                        checked>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select All"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                        </tr>

                                                                                                        <tr>
                                                                                                            <td data-bs-toggle="collapse"
                                                                                                                href="#platform-integrations"
                                                                                                                role="button"
                                                                                                                aria-expanded="false"
                                                                                                                aria-controls="platform-integrations">
                                                                                                                <strong>Platform
                                                                                                                    Integrations</strong>
                                                                                                                <svg class="ms-2 mb-1"
                                                                                                                    width="17"
                                                                                                                    height="8"
                                                                                                                    viewBox="0 0 17 8"
                                                                                                                    fill="none"
                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                    <path
                                                                                                                        d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z"
                                                                                                                        fill="#6E6B7B" />
                                                                                                                </svg>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select View"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Add"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Edit"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex=""
                                                                                                                        checked>
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select Delete"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                            <td>
                                                                                                                <div
                                                                                                                    class="form-check">
                                                                                                                    <input
                                                                                                                        class="form-check-input"
                                                                                                                        aria-label="Select All"
                                                                                                                        type="checkbox"
                                                                                                                        tabindex="">
                                                                                                                </div>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        <div>
                                                                                                            <tr class="collapse "
                                                                                                                id="platform-integrations">
                                                                                                                <td
                                                                                                                    class="align-middle">
                                                                                                                    QuickBooks
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select View"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Add"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Edit"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Delete"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select All"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex=""
                                                                                                                            checked>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>

                                                                                                            <tr class="collapse "
                                                                                                                id="platform-integrations">
                                                                                                                <td
                                                                                                                    class="align-middle">
                                                                                                                    Stripe
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select View"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex=""
                                                                                                                            checked>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Add"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Edit"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Delete"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select All"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="collapse "
                                                                                                                id="platform-integrations">
                                                                                                                <td
                                                                                                                    class="align-middle">
                                                                                                                    Calendar
                                                                                                                    Sync
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select View"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Add"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Edit"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex=""
                                                                                                                            checked>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Delete"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select All"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr class="collapse "
                                                                                                                id="platform-integrations">
                                                                                                                <td
                                                                                                                    class="align-middle">
                                                                                                                    Drive
                                                                                                                    Sync
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select View"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Add"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Edit"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Delete"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex=""
                                                                                                                            checked>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select All"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>

                                                                                                            <tr>
                                                                                                                <td data-bs-toggle="collapse"
                                                                                                                    href="#admin-staff"
                                                                                                                    role="button"
                                                                                                                    aria-expanded="false"
                                                                                                                    aria-controls="admin-staff">
                                                                                                                    <strong>Admin-Staff</strong>
                                                                                                                    <svg class="ms-2 mb-1"
                                                                                                                        width="17"
                                                                                                                        height="8"
                                                                                                                        viewBox="0 0 17 8"
                                                                                                                        fill="none"
                                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                                        <path
                                                                                                                            d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z"
                                                                                                                            fill="#6E6B7B" />
                                                                                                                    </svg>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select View"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Add"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Edit"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex=""
                                                                                                                            checked>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select Delete"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                                <td>
                                                                                                                    <div
                                                                                                                        class="form-check">
                                                                                                                        <input
                                                                                                                            class="form-check-input"
                                                                                                                            aria-label="Select All"
                                                                                                                            type="checkbox"
                                                                                                                            tabindex="">
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <div>
                                                                                                                <tr class="collapse "
                                                                                                                    id="admin-staff">
                                                                                                                    <td
                                                                                                                        class="align-middle">
                                                                                                                        Add/Edit/Deactivate
                                                                                                                        Admin-Staff
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select View"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Add"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Edit"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Delete"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex=""
                                                                                                                                checked>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select All"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>

                                                                                                                <tr class="collapse "
                                                                                                                    id="admin-staff">
                                                                                                                    <td
                                                                                                                        class="align-middle">
                                                                                                                        View
                                                                                                                        Admin-Staff
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select View"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex=""
                                                                                                                                checked>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Add"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Edit"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Delete"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select All"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr class="collapse "
                                                                                                                    id="admin-staff">
                                                                                                                    <td
                                                                                                                        class="align-middle">
                                                                                                                        Add/Edit/Deactivate
                                                                                                                        Admin-Staff
                                                                                                                        Teams
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select View"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Add"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Edit"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Delete"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select All"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex=""
                                                                                                                                checked>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr class="collapse "
                                                                                                                    id="admin-staff">
                                                                                                                    <td
                                                                                                                        class="align-middle">
                                                                                                                        View
                                                                                                                        Admin-Staff
                                                                                                                        Teams
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select View"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Add"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Edit"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Delete"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex=""
                                                                                                                                checked>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select All"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>

                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        <strong>Support
                                                                                                                            Tickets</strong>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select View"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex=""
                                                                                                                                checked>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Add"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Edit"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select Delete"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                    <td>
                                                                                                                        <div
                                                                                                                            class="form-check">
                                                                                                                            <input
                                                                                                                                class="form-check-input"
                                                                                                                                aria-label="Select All"
                                                                                                                                type="checkbox"
                                                                                                                                tabindex="">
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                --}}
                                                                                                            </div>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Permissions Tab End-->

                                    <div class="tab-pane fade" id="management-tab-pane" role="tabpanel"
                                        aria-labelledby="management-tab" tabindex="0">

                                        <div id="headingIndustryAccess" class="mb-3">
                                            <h5>Companies & Customer Access</h5>
                                        </div>
                                        <div>
                                            <table class="table table-hover mb-3">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select All companies">
                                                            </div>
                                                        </th>
                                                        <th>
                                                            Company
                                                        </th>
                                                        <th>
                                                            Customers
                                                        </th>
                                                        <th>
                                                            Permission
                                                        </th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select company">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Computer Sciences</a>
                                                        </td>
                                                        <td>5</td>
                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select company">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Medical Industry</a>
                                                        </td>
                                                        <td>3</td>
                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select company">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Information Technology</a>
                                                        </td>
                                                        <td>4</td>
                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Companies & Customer Access End-->
                                        <div id="headingIndustryAccess" class="mb-3 mt-5">
                                            <h5>Teams & Providers Access</h5>
                                        </div>
                                        <div>
                                            <table class="table table-hover mb-3">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select All Teams">
                                                            </div>
                                                        </th>
                                                        <th>
                                                            Teams
                                                        </th>
                                                        <th>
                                                            Providers
                                                        </th>
                                                        <th>
                                                            Permission
                                                        </th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Team">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Business Preachers</a>
                                                        </td>
                                                        <td>5</td>
                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Teams">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Fast Talkers</a>
                                                        </td>
                                                        <td>3</td>
                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                 {{-- Updated by Shanila to Add svg icon--}}
                                                                 <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Team">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Information Technology</a>
                                                        </td>
                                                        <td>4</td>
                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                 {{-- Updated by Shanila to Add svg icon--}}
                                                                 <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Accommodation & Service Access Start-->
                                        <div class="mb-2 mt-5">
                                            <h5>Accommodation & Service Access</h5>
                                        </div>
                                        <div>
                                            <table class="table table-hover mb-3">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select All Accommodations">
                                                            </div>
                                                        </th>
                                                        <th>
                                                            Accommodation
                                                        </th>
                                                        <th>
                                                            Permission
                                                        </th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Accommodation">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Real Time Captioning Services</a>
                                                        </td>

                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                 {{-- Updated by Shanila to Add svg icon--}}
                                                                 <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Accommodation">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Sign Language Interpreting Services</a>
                                                        </td>

                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                 {{-- Updated by Shanila to Add svg icon--}}
                                                                 <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Accommodation & Service Access End-->
                                        <!-- Industry Access start-->
                                        <div id="headingIndustryAccess" class="mb-2 mt-5">
                                            <h5>Industry Access</h5>
                                        </div>
                                        <div>
                                            <table class="table table-hover mb-3">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select All Industry">
                                                            </div>
                                                        </th>
                                                        <th>
                                                            Industry
                                                        </th>
                                                        <th>
                                                            Permission
                                                        </th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Industry">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Computer Sciences</a>
                                                        </td>

                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                 {{-- Updated by Shanila to Add svg icon--}}
                                                                 <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Industry">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Medical Industry</a>
                                                        </td>

                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                 {{-- Updated by Shanila to Add svg icon--}}
                                                                 <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Industry">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Information Technology</a>
                                                        </td>

                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                 {{-- Updated by Shanila to Add svg icon--}}
                                                                 <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Industry access End-->

                                        <!-- Departments Access Start-->
                                        <div class="mb-2 mt-5">
                                            <h5>Departments Access</h5>
                                        </div>
                                        <div>
                                            <table class="table table-hover mb-3">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select All Accommodations">
                                                            </div>
                                                        </th>
                                                        <th>
                                                            Accommodation
                                                        </th>
                                                        <th>
                                                            Permission
                                                        </th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Accommodation">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Real Time Captioning Services</a>
                                                        </td>

                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                 {{-- Updated by Shanila to Add svg icon--}}
                                                                 <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="" name=""
                                                                    type="checkbox" tabindex="" aria-label="Select Accommodation">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <a>Sign Language Interpreting Services</a>
                                                        </td>

                                                        <td>
                                                            Manage
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                                                 {{-- Updated by Shanila to Add svg icon--}}
                                                                 <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                                                    <use xlink:href="/css/common-icons.svg#view">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Departments Access End-->
                                    </div>
                                    <!-- Management Tab Ends -->

                                    {{-- updated by Hammad to add notes --}}
                                    <div class="tab-pane fade" id="notes-tab-pane" role="tabpanel"
                                        aria-labelledby="notes-tab" tabindex="0">
                                        @livewire('app.common.forms.notes', ['showForm' => true, 'record_id' => $userid, 'record_type' => 3])
                                    </div>
                                    <!-- Notes Tab Ends -->
                                    {{-- End of update by Hammad --}}


                                    <div class="tab-pane fade" id="reports-tab-pane" role="tabpanel"
                                        aria-labelledby="reports-tab" tabindex="0">
                                        <div class="mb-4">
                                            <div class="d-flex justify-content-between">
                                                <div class="d-inline-flex align-items-center gap-4">
                                                    <h3>Reports</h3>
                                                </div>
                                                <div class="dropdown me-5">
                                                    <button class="btn btn-outline-primary dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <svg  width="23" height="26"
                                                            viewBox="0 0 23 26">
                                                            <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                            </use>
                                                        </svg>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <h2>Payments</h2>
                                            </div>
                                            <hr>
                                            <div>
                                                <img src="/tenant-resources/images/portrait/small/pending-payment.png"
                                                    class="img-fluid" alt="Pending Payment image">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Reports Tab Ends -->

                                    <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel"
                                        aria-labelledby="notifications-tab" tabindex="0">
                                        <div class="row">
                                            <h3>Notification</h3>
                                            <p class="mt-3">
                                                Here you can control how you are notified about Profile activity.
                                            </p>
                                        </div>
                                        <div class="mb-3">
                                            {{-- updated by Hammad to add notification --}}
                                            @livewire('app.common.settings.notifications', ['model_type' => 3, 'model_id' => $userid])
                                        </div>
                                        {{-- <div class="row mb-4">
                                            <div class="col-md-4 border rounded">
                                                <div class="row">
                                                    <div class="d-flex justify-content-between mb-2 p-2">
                                                        <div class="d-inline-flex align-items-center gap-4">
                                                        <svg aria-label="text" width="47" height="41" class="ms-2" viewBox="0 0 47 41">
                                                            <use xlink:href="/css/common-icons.svg#text">
                                                            </use>
                                                        </svg>
                                                            <span>Text</span>
                                                        </div>
                                                        <div class="d-inline-flex align-items-center gap-4">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="ToggleText" checked aria-label="Toggle ONN OFF">
                                                                <label class="form-check-label"
                                                                    for="ToggleText">OFF</label>
                                                                <label class="form-check-label"
                                                                    for="ToggleText">ON</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border rounded mx-5">
                                                <div class="row">
                                                    <div class="d-flex justify-content-between mb-2 p-2">
                                                        <div class="d-inline-flex align-items-center gap-4">
                                                        <svg aria-label="email" width="52" height="36" viewBox="0 0 52 36">
                                                            <use xlink:href="/css/common-icons.svg#email">
                                                            </use>
                                                        </svg>
                                                            <span>Email</span>
                                                        </div>
                                                        <div class="d-inline-flex align-items-center gap-4">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="ToggleEmail" checked aria-label="Toggle ONN OFF">
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
                                                        <svg aria-label="Notification" width="57" height="44" viewBox="0 0 57 44">
                                                            <use xlink:href="/css/common-icons.svg#notification">
                                                            </use>
                                                        </svg>
                                                            <span>Notification</span>
                                                        </div>
                                                        <div class="d-inline-flex align-items-center gap-4">
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="NotificationToggle" checked aria-label="Toggle ONN OFF">
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
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="permissions-toggle" checked aria-label="Permission Toggle Button">
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
                                                                    Disable
                                                                </label>
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
                                                                    Enable
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="permissions-toggle" aria-label="Permission Toggle Button">
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
                                                                    Disable
                                                                </label>
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
                                                                    Enable
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="permissions-toggle" aria-label="Permission Toggle Button">
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
                                                                    Disable
                                                                </label>
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
                                                                    Enable
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="permissions-toggle" checked aria-label="Permission Toggle Button">
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
                                                                    Disable
                                                                </label>
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
                                                                    Enable
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                sed do eiusmod Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed do eiusmod
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" id="permissions-toggle" checked aria-label="Permission Toggle Button">
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
                                                                    Disable
                                                                </label>
                                                                <label class="form-check-label"
                                                                    for="permissions-toggle">
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
                                    <div class="tab-pane fade" id="log-tab-pane" role="tabpanel"
                                        aria-labelledby="log-tab" tabindex="0">
                                        <div class="row mb-4">
                                            <h3>Logs</h3>
                                        </div>
                                            {{-- updated by Hammad to add logs --}}
                                        @livewire('app.common.lists.logs', ['record_id' => $userid, 'record_type' => 'user'])
                                    </div>
                                    <!-- Log Tab End-->



                                </div> <!-- tab-content -->
                                <!-- END: Provider Details ................... -->
                            </div>




                        </div>
                    </div>
                </div>
                @include('panels.common.add-document')
            </section>
            @endif
            <!-- Basic Floating Label Form section end -->
        </div>
    </div>
    @include('modals.common.change-password')
</div>
