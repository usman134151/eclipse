    <!-- BEGIN: Header-->

    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a title="Navbar Toggler" aria-label="Navbar Toggler" class="nav-link menu-toggle"
                            href="#"><svg aria-label="Navbar Toggler" xmlns="http://www.w3.org/2000/svg"
                                width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-menu ficon">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a href="{{session('isCustomer')? url('/customer/dashboard') : ( session('isProvider') ? url('/provider/dashboard') : url('/admin/dashboard')) }}" title="Dashboard"
                            aria-label="Eclipse Scheduling Dashboard" class="nav-link" data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                            <svg aria-label="Dashboard Assignment" width="18" height="18" viewBox="0 0 18 18"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.3 1.8H13.5V0.9C13.5 0.661305 13.4052 0.432387 13.2364 0.263604C13.0676 0.0948211 12.8387 0 12.6 0C12.3613 0 12.1324 0.0948211 11.9636 0.263604C11.7948 0.432387 11.7 0.661305 11.7 0.9V1.8H6.3V0.9C6.3 0.661305 6.20518 0.432387 6.0364 0.263604C5.86761 0.0948211 5.63869 0 5.4 0C5.1613 0 4.93239 0.0948211 4.7636 0.263604C4.59482 0.432387 4.5 0.661305 4.5 0.9V1.8H2.7C1.98392 1.8 1.29716 2.08446 0.790812 2.59081C0.284464 3.09716 0 3.78392 0 4.5V15.3C0 16.0161 0.284464 16.7028 0.790812 17.2092C1.29716 17.7155 1.98392 18 2.7 18H15.3C16.0161 18 16.7028 17.7155 17.2092 17.2092C17.7155 16.7028 18 16.0161 18 15.3V4.5C18 3.78392 17.7155 3.09716 17.2092 2.59081C16.7028 2.08446 16.0161 1.8 15.3 1.8ZM16.2 15.3C16.2 15.5387 16.1052 15.7676 15.9364 15.9364C15.7676 16.1052 15.5387 16.2 15.3 16.2H2.7C2.46131 16.2 2.23239 16.1052 2.0636 15.9364C1.89482 15.7676 1.8 15.5387 1.8 15.3V9H16.2V15.3ZM16.2 7.2H1.8V4.5C1.8 4.2613 1.89482 4.03239 2.0636 3.8636C2.23239 3.69482 2.46131 3.6 2.7 3.6H4.5V4.5C4.5 4.73869 4.59482 4.96761 4.7636 5.1364C4.93239 5.30518 5.1613 5.4 5.4 5.4C5.63869 5.4 5.86761 5.30518 6.0364 5.1364C6.20518 4.96761 6.3 4.73869 6.3 4.5V3.6H11.7V4.5C11.7 4.73869 11.7948 4.96761 11.9636 5.1364C12.1324 5.30518 12.3613 5.4 12.6 5.4C12.8387 5.4 13.0676 5.30518 13.2364 5.1364C13.4052 4.96761 13.5 4.73869 13.5 4.5V3.6H15.3C15.5387 3.6 15.7676 3.69482 15.9364 3.8636C16.1052 4.03239 16.2 4.2613 16.2 4.5V7.2Z"
                                    fill="#6E6B7B" />
                            </svg></a></li>
                    <li class="nav-item d-none d-lg-block"><a target="_blank" href="/chat" title="Chat"
                            aria-label="Eclipse Scheduling Chat" class="nav-link" data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                            <svg aria-label="Chat" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.2 0H1.8C0.8073 0 0 0.816816 0 1.82122V12.7485C0 13.7529 0.8073 14.5697 1.8 14.5697H4.5V18L10.1493 14.5697H16.2C17.1927 14.5697 18 13.7529 18 12.7485V1.82122C18 0.816816 17.1927 0 16.2 0ZM16.2 12.7485H9.6507L6.3 14.7819V12.7485H1.8V1.82122H16.2V12.7485Z"
                                    fill="#6E6B7B" />
                            </svg>
                            <span class="message-counter badge rounded-pill bg-danger badge-up" style="display: none"></span>
                        </a></li>
                    <li class="nav-item d-none d-lg-block"><a href="{{ session('isCustomer')? url('/customer/bookings/today') : ( session('isProvider') ? url('/provider/bookings/today') : url('/admin/bookings/today') )}}"
                            title="Assignments" aria-label="Assignments" class="nav-link" data-bs-toggle="tooltip"
                            data-bs-placement="bottom">
                            <svg aria-label="Today's Assignment" width="18" height="20" viewBox="0 0 18 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.4552 11.999H7.47604C7.20227 11.999 6.97764 11.7753 6.97764 11.4988C6.97764 11.2226 7.20227 11.0004 7.47604 11.0004H13.4552C13.7308 11.0004 13.9536 11.2226 13.9536 11.4988C13.9536 11.7753 13.7308 11.999 13.4552 11.999ZM13.4552 14.9985H7.47604C7.20227 14.9985 6.97764 14.7748 6.97764 14.4983C6.97764 14.2236 7.20227 13.9999 7.47604 13.9999H13.4552C13.7308 13.9999 13.9536 14.2236 13.9536 14.4983C13.9536 14.7748 13.7308 14.9985 13.4552 14.9985ZM13.4552 8.99952H7.47604C7.20227 8.99952 6.97764 8.77581 6.97764 8.49929C6.97764 8.22309 7.20227 7.99938 7.47604 7.99938H13.4552C13.7308 7.99938 13.9536 8.22309 13.9536 8.49929C13.9536 8.77581 13.7308 8.99952 13.4552 8.99952ZM5.23556 14.5001C5.23556 14.6982 5.15591 14.8899 5.01582 15.029C4.87573 15.1694 4.6862 15.2494 4.48721 15.2494C4.28975 15.2494 4.09869 15.1694 3.95861 15.029C3.81852 14.8899 3.74039 14.6982 3.74039 14.5001C3.74039 14.3002 3.81852 14.1101 3.95861 13.9694C4.09869 13.8287 4.28975 13.749 4.48721 13.749C4.6862 13.749 4.87573 13.8287 5.01582 13.9694C5.15591 14.1101 5.23556 14.3002 5.23556 14.5001ZM5.23556 11.4988C5.23556 11.6987 5.15591 11.8888 5.01582 12.0311C4.87573 12.1699 4.6862 12.2499 4.48721 12.2499C4.28975 12.2499 4.09869 12.1699 3.95861 12.0311C3.81852 11.8888 3.74039 11.6987 3.74039 11.4988C3.74039 11.3007 3.81852 11.1106 3.95861 10.9684C4.09869 10.8292 4.28975 10.7495 4.48721 10.7495C4.6862 10.7495 4.87573 10.8292 5.01582 10.9684C5.15591 11.1106 5.23556 11.3007 5.23556 11.4988ZM5.23556 8.49929C5.23556 8.6992 5.15591 8.88934 5.01582 9.03004C4.87573 9.17073 4.6862 9.24887 4.48721 9.24887C4.28975 9.24887 4.09869 9.17073 3.95861 9.03004C3.81852 8.88934 3.74039 8.6992 3.74039 8.49929C3.74039 8.30122 3.81852 8.10955 3.95861 7.96886C4.09869 7.82816 4.28975 7.75003 4.48721 7.75003C4.6862 7.75003 4.87573 7.82816 5.01582 7.96886C5.15591 8.10955 5.23556 8.30122 5.23556 8.49929ZM15.9475 16.0005H15.9456C15.9456 16.5294 15.7357 17.0394 15.3615 17.4133C14.9888 17.7887 14.4825 17.998 13.9536 17.9996H3.98882C3.46174 17.9996 2.95389 17.7887 2.58124 17.4133C2.20707 17.0394 1.99678 16.5294 1.99678 16.0005V6.00001C1.99678 5.46958 2.20707 4.96142 2.58124 4.58572C2.95389 4.21032 3.46174 4.00095 3.98882 3.99943H4.98561C4.98561 4.26465 5.09059 4.51888 5.27707 4.70719C5.46507 4.89427 5.71809 4.99987 5.98239 4.99987H11.96C12.2243 4.99987 12.4792 4.89427 12.6657 4.70719C12.8518 4.51888 12.9568 4.26465 12.9568 3.99943H13.9536C14.4825 4.00095 14.9888 4.21032 15.3615 4.58572C15.7357 4.96142 15.9456 5.46958 15.9456 6.00001L15.9475 16.0005ZM13.9536 3.00051H10.9648C10.9648 2.28482 10.5842 1.62467 9.96799 1.2685C9.3518 0.9105 8.59246 0.9105 7.97443 1.2685C7.35823 1.62467 6.97917 2.28482 6.97917 3.00051H3.98882C3.19591 3.00051 2.43627 3.31547 1.87592 3.87796C1.31527 4.44044 1 5.20436 1 6.00001V16.0005C1 16.7965 1.31527 17.5585 1.87592 18.121C2.43627 18.6835 3.19591 19 3.98882 19H13.9536C14.7468 19 15.508 18.6835 16.0683 18.121C16.629 17.5585 16.9427 16.7965 16.9427 16.0005V6.00001C16.9427 5.20436 16.629 4.44044 16.0683 3.87796C15.508 3.31547 14.7468 3.00051 13.9536 3.00051Z"
                                    fill="#6E6B7B" stroke="#6E6B7B" stroke-width="0.5" />
                            </svg>
                        </a>
                    </li>
                    @if(!session('isProvider'))
                    <li class="nav-item d-none d-lg-block"><a href="{{ session('isCustomer')? url('/customer/reports') :url('/admin/reports') }}" title="Reports"
                            aria-label="Reports" class="nav-link" data-bs-toggle="tooltip" data-bs-placement="bottom">
                            <svg aria-label="Reports" width="17" height="19" viewBox="0 0 17 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.14286 14.1574V12.2778M8.25 14.1574V10.3981M11.3571 14.1574V8.51852M13.4286 17.9167H3.07143C2.52205 17.9167 1.99518 17.7186 1.60671 17.3661C1.21824 17.0136 1 16.5355 1 16.037V2.87963C1 2.38112 1.21824 1.90303 1.60671 1.55053C1.99518 1.19803 2.52205 1 3.07143 1H8.85693C9.13159 1.00005 9.39499 1.0991 9.58918 1.27537L15.1965 6.36352C15.3908 6.53973 15.4999 6.77874 15.5 7.02797V16.037C15.5 16.5355 15.2818 17.0136 14.8933 17.3661C14.5048 17.7186 13.9779 17.9167 13.4286 17.9167Z"
                                    stroke="#6E6B7B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </li>
                    @endif

                </ul>
            </div>
            <!-- BEGIN: search-by-keyword - search-by-no -->
            <div class="mx-auto  d-none d-xl-flex gap-3 align-items-center">
                <div class="search-by-keyword position-relative">
                    <svg aria-label="Search by Keyword" width="15" height="15" class="icon-search-keyword-no"
                        viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.0086 9.69676C11.9163 8.45791 12.3229 6.92194 12.1469 5.39615C11.971 3.87036 11.2255 2.46727 10.0596 1.4676C8.89374 0.467925 7.39345 -0.0546141 5.8589 0.00452304C4.32436 0.0636602 2.86872 0.700112 1.78321 1.78655C0.697708 2.87298 0.0623867 4.32928 0.00435596 5.86409C-0.0536748 7.39889 0.469864 8.89902 1.47023 10.0643C2.4706 11.2297 3.87402 11.9743 5.39972 12.1491C6.92542 12.324 8.46088 11.9163 9.69892 11.0075H9.69798C9.7261 11.045 9.7561 11.0807 9.78985 11.1153L13.3991 14.7251C13.5749 14.901 13.8133 14.9999 14.062 15C14.3107 15.0001 14.5492 14.9014 14.7251 14.7256C14.901 14.5498 14.9999 14.3113 15 14.0625C15.0001 13.8138 14.9014 13.5753 14.7256 13.3993L11.1164 9.78959C11.0828 9.75565 11.0468 9.72431 11.0086 9.69583V9.69676ZM11.2504 6.09264C11.2504 6.76984 11.1171 7.44041 10.8579 8.06606C10.5988 8.69171 10.219 9.26019 9.74025 9.73904C9.26146 10.2179 8.69306 10.5977 8.0675 10.8569C7.44194 11.116 6.77147 11.2494 6.09436 11.2494C5.41726 11.2494 4.74679 11.116 4.12123 10.8569C3.49566 10.5977 2.92726 10.2179 2.44848 9.73904C1.9697 9.26019 1.5899 8.69171 1.33079 8.06606C1.07167 7.44041 0.938307 6.76984 0.938307 6.09264C0.938307 4.72498 1.48153 3.41333 2.44848 2.44625C3.41543 1.47916 4.72689 0.93586 6.09436 0.93586C7.46183 0.93586 8.7733 1.47916 9.74025 2.44625C10.7072 3.41333 11.2504 4.72498 11.2504 6.09264Z"
                            fill="url(#paint0_linear_8033_213447)" />
                        <defs>
                            <linearGradient id="paint0_linear_8033_213447" x1="7.5" y1="0"
                                x2="13.518" y2="0" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#213969" />
                                <stop offset="1" stop-color="#204387" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <input type="" name="" class="form-control rounded js-search-by-keyword"
                        placeholder="Search by Keyword" aria-label="Search by Keyword">
                </div>
                <div class="search-by-no position-relative">
                    <svg aria-label="Search by No" width="15" height="15" class="icon-search-keyword-no"
                        viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.0086 9.69676C11.9163 8.45791 12.3229 6.92194 12.1469 5.39615C11.971 3.87036 11.2255 2.46727 10.0596 1.4676C8.89374 0.467925 7.39345 -0.0546141 5.8589 0.00452304C4.32436 0.0636602 2.86872 0.700112 1.78321 1.78655C0.697708 2.87298 0.0623867 4.32928 0.00435596 5.86409C-0.0536748 7.39889 0.469864 8.89902 1.47023 10.0643C2.4706 11.2297 3.87402 11.9743 5.39972 12.1491C6.92542 12.324 8.46088 11.9163 9.69892 11.0075H9.69798C9.7261 11.045 9.7561 11.0807 9.78985 11.1153L13.3991 14.7251C13.5749 14.901 13.8133 14.9999 14.062 15C14.3107 15.0001 14.5492 14.9014 14.7251 14.7256C14.901 14.5498 14.9999 14.3113 15 14.0625C15.0001 13.8138 14.9014 13.5753 14.7256 13.3993L11.1164 9.78959C11.0828 9.75565 11.0468 9.72431 11.0086 9.69583V9.69676ZM11.2504 6.09264C11.2504 6.76984 11.1171 7.44041 10.8579 8.06606C10.5988 8.69171 10.219 9.26019 9.74025 9.73904C9.26146 10.2179 8.69306 10.5977 8.0675 10.8569C7.44194 11.116 6.77147 11.2494 6.09436 11.2494C5.41726 11.2494 4.74679 11.116 4.12123 10.8569C3.49566 10.5977 2.92726 10.2179 2.44848 9.73904C1.9697 9.26019 1.5899 8.69171 1.33079 8.06606C1.07167 7.44041 0.938307 6.76984 0.938307 6.09264C0.938307 4.72498 1.48153 3.41333 2.44848 2.44625C3.41543 1.47916 4.72689 0.93586 6.09436 0.93586C7.46183 0.93586 8.7733 1.47916 9.74025 2.44625C10.7072 3.41333 11.2504 4.72498 11.2504 6.09264Z"
                            fill="url(#paint0_linear_8033_213447)" />
                        <defs>
                            <linearGradient id="paint0_linear_8033_213447" x1="7.5" y1="0"
                                x2="13.518" y2="0" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#213969" />
                                <stop offset="1" stop-color="#204387" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <input type="" name="" class="form-control rounded js-search-by-no"
                        placeholder="Search by No" aria-label="Search by No">
                </div>
            </div>
            <!-- END: search-by-keyword - search-by-no -->
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block">
                    @livewire('app.common.theme-manager')
                </li>
                <li class="nav-item dropdown dropdown-notification me-25">
                    @livewire('app.common.notification')
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" aria-label="Eclipse Scheduling Tenant Logout" class="nav-link"
                        onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                        <svg aria-label="Logout" width="18" height="19" viewBox="0 0 18 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.8385 2.1263L4.8708 3.6014C3.61636 4.47959 2.67458 5.73485 2.18227 7.18484C1.68995 8.63482 1.67274 10.204 2.13314 11.6644C2.59354 13.1249 3.50756 14.4005 4.74244 15.306C5.97731 16.2115 7.46872 16.6997 9 16.6997C10.5313 16.6997 12.0227 16.2115 13.2576 15.306C14.4924 14.4005 15.4065 13.1249 15.8669 11.6644C16.3273 10.204 16.31 8.63482 15.8177 7.18484C15.3254 5.73485 14.3836 4.47959 13.1292 3.6014L14.1615 2.1263C15.3477 2.95558 16.316 4.05901 16.9843 5.34278C17.6526 6.62655 18.001 8.0527 18 9.5C18 14.4707 13.9707 18.5 9 18.5C4.0293 18.5 2.33121e-06 14.4707 2.33121e-06 9.5C-0.00103989 8.0527 0.347392 6.62655 1.01568 5.34278C1.68397 4.05901 2.65235 2.95558 3.8385 2.1263ZM8.1 9.5V0.5H9.9V9.5H8.1Z"
                                fill="#6E6B7B" />
                        </svg>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none">
                            {{-- Interpreter Admin --}}
                            <span class="user-name fw-bolder">{{ Auth::user()->first_name }}</span>
                            <span class="user-status">{{ Auth::user()->last_name }}</span>
                        </div>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <span class="avatar">
                            @if (!is_null(Auth::user()->userDetails) && Auth::user()->userDetails->profile_pic)
                                <img class="round" src="{{ Auth::user()->userDetails->profile_pic }}" alt="avatar"
                                    height="40" width="40">
                            @else
                                <img class="round" src="/tenant-resources/images/portrait/small/avatar-s-11.jpg"
                                    alt="avatar" height="40" width="40">
                            @endif
                            <span class="avatar-status-online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="dropdown-user"
                        data-bs-popper="static">
                        @if (session()->get('isProvider'))
                            <a href="/provider/profile" class="dropdown-item" href="#">
                        @elseif (session()->get('isCustomer'))
                                <a href="/customer/myprofile" class="dropdown-item" href="#">
                        @else
                                    {{-- for admin --}}
                                    <a href="/admin/profile" class="dropdown-item" href="#">
                        @endif
                        <svg aria-label="Profile" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-50">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        Profile
                        </a>
                        @if (session()->get('isProvider'))
                            <a href="{{ url('/provider/bookings/upcoming') }}" class="dropdown-item" href="#">
                          @elseif (session()->get('isProvider'))
                            <a href="{{ url('/provider/bookings/upcoming') }}" class="dropdown-item" href="#">
                            @else
                                <a href="{{ url('/admin/bookings/upcoming') }}" class="dropdown-item"
                                    href="#">
                        @endif
                        <svg aria-label="Upcoming Assignments" aria-label="Upcoming Assignments" width="15"
                            height="20" viewBox="0 0 15 20" fill="currentColor" stroke="currentColor" stroke-width="0.3" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/common-icons.svg#upcoming-assignment-icons"></use>
                        </svg>
                        Assignments
                        </a>
                        @if (!session()->get('isProvider'))
                            <a href="{{ session()->get('isCustomer') ? url('/customer/pending-reviews') : url('/admin/bookings/pending-approval') }}" class="dropdown-item"
                                href="#">
                                <svg aria-label="Pending Assignments" aria-label="Pending Assignments" width="18"
                                    height="18" viewBox="0 0 18 18" fill="currentColor" stroke="currentColor" stroke-width="0.3"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/common-icons.svg#pending-assignments-icon"></use>
                                </svg>
                                Pending Assignments
                            </a>
                        @endif

                        @if (session()->get('isProvider'))
                            <a target="_blank"  href="{{ url('/chat') }}" class="dropdown-item">
                        @elseif (session()->get('isCustomer'))
                            <a target="_blank" href="{{ url('/chat') }}" class="dropdown-item">
                            @else
                                <a target="_blank" href="{{ url('/chat') }}" class="dropdown-item">
                        @endif
                        <svg aria-label="Chats" xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-message-square me-50">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                        Chats
                        </a>
                        <div class="dropdown-divider"></div>
                        @if (!session()->get('isProvider'))
                            @if (!session()->get('isCustomer'))
                            <a href="{{ url('/admin/business-setup') }}" class="dropdown-item" href="#">
                                <svg aria-label="Business Setup" aria-label="Business Setup" width="20"
                                    height="20" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/common-icons.svg#business-setup-icon"></use>
                                </svg>
                                Business Setup
                            </a>
                            @endif
                            <a href="{{session()->get('isCustomer') ? url('/customer/reports') : url('/admin/reports') }}" class="dropdown-item" href="#">
                                <svg aria-label="Reports" aria-label="Business Setup" width="13" height="19"
                                    viewBox="0 0 13 19" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/common-icons.svg#reports-header-icons"></use>
                                </svg>
                                Reports
                            </a>
                            <a href="{{ session()->get('isCustomer')? url('/customer/jira-status'): url('/admin/jira-status') }}" class="dropdown-item" href="#">
                                <svg aria-label="Support Tickets" aria-label="Support Tickets" width="19"
                                    height="19" viewBox="0 0 19 19" fill="currentColor" stroke="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/common-icons.svg#support-ticket"></use>
                                </svg>
                                Support Tickets
                            </a>
                        @endif
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                            <svg aria-label="Logout" xmlns="http://www.w3.org/2000/svg" width="14"
                                height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-power me-50">
                                <path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path>
                                <line x1="12" y1="2" x2="12" y2="12"></line>
                            </svg>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- Modal - Search By Keyword -->
    <div class="modal fade" id="searchByKeywordModal" tabindex="-1" aria-labelledby="searchByKeywordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="searchByKeywordModalLabel">Search by Keyword</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 1</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 2</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 3</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 4</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 5</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 6</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 7</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 8</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 9</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 10</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal - Search by No -->
    <div class="modal fade" id="searchByNoModal" tabindex="-1" aria-labelledby="searchByNoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="searchByKeywordModalLabel">Search by No</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-11">
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 1</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 2</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 3</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 4</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 5</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 6</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 7</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 8</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 9</label>
                                </div>
                                <div class="col-lg-6 py-2 text-center">
                                    <label class="form-label-sm mb-0">Search result 10</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
