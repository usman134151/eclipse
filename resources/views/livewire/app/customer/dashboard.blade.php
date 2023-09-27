<div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Dashboard</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    {{-- updated Sana to change x-icon to svg --}}
                                    <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- end updated by Sana --}}

                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    Dashboard
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('app.common.dashboard-messages', ['userType' => 2, 'displayTo' => 'dashboard'])
    <div class="row mb-5">
        <ul class="d-grid grid-cols-6 gap-4 list-unstyled mb-5" id="myTab" role="tablist">
            <li class="" role="presentation">
                <a class="dashborad-block active" id="calendar-tab" data-bs-toggle="tab"
                    data-bs-target="#calendar-tab-pane" type="button" role="tab" aria-controls="calendar-tab-pane"
                    aria-selected="true">
                    <div class="text-center block-text">Service Calendar</div>
                    <div class="text-center block-icon">
                        <svg aria-label="Service Calendar" class="fill" width="57" height="57"
                            viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#calendar-icon"></use>
                        </svg>
                    </div>
                    <div>
                      <!--   <div class="text-center block-number">50</div>-->
                    </div>
                </a>
            </li>
            <li class="" role="presentation">
                <a class="dashborad-block" id="scheduled-services-tab" data-bs-toggle="tab"
                    data-bs-target="#scheduled-services-tab-pane" type="button" role="tab"
                    aria-controls="scheduled-services-tab-pane" aria-selected="false">
                    <div class="text-center block-text">Scheduled Services</div>
                    <div class="text-center block-icon">
                        <svg aria-label="Scheduled Services" class="fill" width="54" height="61"
                            viewBox="0 0 54 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#scheduled-services-icon"></use>
                        </svg>
                    </div>
                    <div>
                       <!--  <div class="text-center block-number">200</div>-->
                    </div>
                </a>
            </li>
            @if (in_array(6, session()->get('customerRoles')) || in_array(10, session()->get('customerRoles')))

            <li class="" role="presentation">
                <a class="dashborad-block" id="submit-service-request" data-bs-toggle="tab"
                    data-bs-target="#submit-service-request-pane" type="button" role="tab"
                    aria-controls="submit-service-request-pane" aria-selected="false">
                    <div class="text-center block-text">Submit Service Request</div>
                    <div class="text-center block-icon">
                        <svg aria-label="Submit Service Request" class="fill icon-availability" height="61"
                            viewBox="0 0 1440 809.999993" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#submit-service-icon"></use>
                        </svg>
                    </div>
                    <div>
                       <!-- <div class="text-center block-number">50</div> -->
                    </div>
                </a>
            </li>
            @endif
            <li class="" role="presentation">
                <a class="dashborad-block" id="notifications-tab" data-bs-toggle="tab"
                    data-bs-target="#notifications-tab-pane" type="button" role="tab"
                    aria-controls="assignments-tab-pane" aria-selected="false">
                    <div class="text-center block-text">Notifications List</div>
                    <div class="text-center block-icon">
                        <svg aria-label="Notifications List" class="stroke" width="54" height="61"
                            viewBox="0 0 60 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#notification-icon"></use>
                        </svg>
                    </div>
                    <div>
                       <!--  <div class="text-center block-number">50</div>-->
                    </div>
                </a>
            </li>
            <li class="" role="presentation">
                <a class="dashborad-block" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <div class="text-center block-text">My Profile</div>
                    <div class="text-center block-icon">
                        <svg aria-label="My Profile" class="fill" width="55" height="55"
                            viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#myprofile"></use>
                        </svg>
                    </div>
                    <div>
                        {{-- <div class="text-center block-number">15</div> --> --}}
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="calendar-tab-pane" role="tabpanel"
                aria-labelledby="calendar-tab" tabindex="0">
                <h3>Booking Calendar</h3>
                
                @livewire('app.common.calendar', ['isCustomer'=>true,'user_id'=>Auth::id()])
               
            </div>

            {{-- Add services Form --}}
            <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel"
                aria-labelledby="notifications-tab" tabindex="0">
                @livewire('app.common.notifications')
            </div>
            <div class="tab-pane fade" id="scheduled-services-tab-pane" role="tabpanel"
                aria-labelledby="scheduled-services-tab" tabindex="0">
                <h2 class="text-dark">Scheduled Services</h2>
                <!-- Filters -->
                <div class="d-flex justify-content-start gap-4 mb-5">
                    <div class="d-flex justify-content-start gap-2">
                        <div class="mb-4 mb-lg-0 position-relative">
                            <!-- Begin : it will be replaced with livewire module-->
                            {{-- updated Sana to change x-icon to svg --}}
                            <svg aria-label="Input-calender" class="icon-date sm cursor-pointer" width="20"
                                height="20" viewBox="0 0 20 20">
                                <use xlink:href="/css/common-icons.svg#input-calender"></use>
                            </svg>
                            {{-- end updated by Sana --}}
                            <input type="" class="form-control form-control-sm w-auto js-single-date"
                                placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
                            <!-- End : it will be replaced with livewire module -->
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <select class="form-select form-select-sm rounded bg-secondary text-white rounded"
                                aria-label="Advance Filter" id="show_status">
                                <option>Advance Filter</option>
                            </select>
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <button type="button" class="btn btn-xs btn-outline-dark rounded">Clear all</button>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start gap-2">
                        <div class="mb-4 mb-lg-0">
                            <button type="button" class="btn btn-xs btn-primary rounded">Today</button>
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <button type="button" class="btn btn-xs btn-inactive rounded">Upcoming</button>
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <button type="button" class="btn btn-xs btn-inactive rounded">Unassigned</button>
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <button type="button" class="btn btn-xs btn-inactive rounded">Previous</button>
                        </div>
                        <div class="mb-4 mb-lg-0">
                            <button type="button" class="btn btn-xs btn-inactive rounded">Cancelled</button>
                        </div>
                    </div>
                </div>
                <div class="d-lg-flex justify-content-between mb-2">
                    <h2 class="mb-lg-0 text-dark">Today’s Services</h2>
                    <div class="d-inline-flex align-items-center gap-4">
                        <div class="d-lg-flex justify-content-end mb-4">

                        </div>
                    </div>
                </div>

                @livewire('app.common.bookings.booking-list', ['bookingSection' => 'customer', 'bookingType' => "Today's", 'showHeader'=>false])
            </div>
            <!-- /Today's Assignment -->

            <div class="tab-pane fade" id="submit-service-request-pane" role="tabpanel"
                aria-labelledby="submit-service-request" tabindex="0">
                <div>
                    <!-- BEGIN: Content-->
                    <div class="content-header row">
                        <div class="content-header-left col-md-9 col-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <div class="col-12">
                                    <h1 class="content-header-title float-start mb-0">Submit Service Request</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    @livewire('app.common.bookings.booknow')
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                tabindex="0">

                <!-- Filters -->
                @livewire('app.customer.profile')
            </div>
        </div>
    </div>
    <style>
        .tab-content>.active {
            display: contents !important;
        }
    </style>
</div>
