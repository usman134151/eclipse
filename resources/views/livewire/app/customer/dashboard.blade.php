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
                                    <x-icon name="home" />
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
    <div class="row mb-5">
        <ul class="d-grid grid-cols-6 gap-4 list-unstyled mb-5" id="myTab" role="tablist">
            <li class="" role="presentation">
                <a class="dashborad-block active" id="calendar-tab" data-bs-toggle="tab"
                    data-bs-target="#calendar-tab-pane" type="button" role="tab" aria-controls="calendar-tab-pane"
                    aria-selected="true">
                    <div class="text-center block-text">Service Calendar</div>
                    <div class="text-center block-icon">
                        <svg class="fill" width="57" height="57" viewBox="0 0 57 57" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#calendar-icon"></use>
                        </svg>
                    </div>
                    <div>
                        <div class="text-center block-number">50</div>
                    </div>
                </a>
            </li>
            <li class="" role="presentation">
                <a class="dashborad-block" id="scheduled-services-tab" data-bs-toggle="tab"
                    data-bs-target="#scheduled-services-tab-pane" type="button" role="tab"
                    aria-controls="scheduled-services-tab-pane" aria-selected="false">
                    <div class="text-center block-text">Scheduled Services</div>
                    <div class="text-center block-icon">
                        <svg class="fill" width="54" height="61" viewBox="0 0 54 61" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#scheduled-services-icon"></use>
                        </svg>
                    </div>
                    <div>
                        <div class="text-center block-number">200</div>
                    </div>
                </a>
            </li>
            <li class="" role="presentation">
                <a class="dashborad-block" id="submit-service-request" data-bs-toggle="tab"
                    data-bs-target="#submit-service-request-pane" type="button" role="tab"
                    aria-controls="submit-service-request-pane" aria-selected="false">
                    <div class="text-center block-text">Submit Service Request</div>
                    <div class="text-center block-icon">
                        <svg class="fill icon-availability" height="" viewBox="0 0 1440 809.999993" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#submit-service-icon"></use>
                        </svg>
                    </div>
                    <div>
                        <div class="text-center block-number">50</div>
                    </div>
                </a>
            </li>
            <li class="" role="presentation">
                <a class="dashborad-block" id="notifications-tab" data-bs-toggle="tab"
                    data-bs-target="#notifications-tab-pane" type="button" role="tab"
                    aria-controls="assignments-tab-pane" aria-selected="false">
                    <div class="text-center block-text">Notifications List</div>
                    <div class="text-center block-icon">
                        <svg class="stroke" width="54" height="61" viewBox="0 0 60 68" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#notification-icon"></use>
                        </svg>
                    </div>
                    <div>
                        <div class="text-center block-number">50</div>
                    </div>
                </a>
            </li>
            <li class="" role="presentation">
                <a class="dashborad-block" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                    type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <div class="text-center block-text">My Profile</div>
                    <div class="text-center block-icon">
                        <svg class="fill" width="55" height="55" viewBox="0 0 55 55" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/customer.svg#myprofile"></use>
                        </svg>
                    </div>
                    <div>
                        <div class="text-center block-number">15</div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="calendar-tab-pane" role="tabpanel" aria-labelledby="calendar-tab"
                tabindex="0">
                <h3>Booking Calender</h3>
                <!-- Filters -->
                <div class="d-flex justify-content-start gap-4 mb-4">
                    <div class="d-flex justify-content-start gap-2">
                        <div class="mb-4 mb-lg-0 position-relative">
                            <!-- Begin : it will be replaced with livewire module-->
                            <svg class="icon-date sm cursor-pointer" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                    fill="black" />
                            </svg>
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

                </div>
                <!-- /Filters -->
                @livewire('app.common.calendar')
                {{-- <div>
                    <img src="/tenant/images/img-placeholder-calendar.png" class="img-fluid" alt="Dashboard Calender" />
                </div> --}}
            </div>

            {{-- Add services Form --}}
            <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab"
                tabindex="0">
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
                            <svg class="icon-date sm cursor-pointer" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                    fill="black" />
                            </svg>
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
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                                    </svg>
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>

                @livewire('app.common.bookings.booking-list')
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
                    @livewire('app.customer.booking.booknow')
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                <!-- Filters -->
                @livewire('app.customer.profile')
            </div>
        </div>
    </div>
