<div>
    <a href="#" aria-label="Eclipse Scheduling Notification" id="dropdownNotification" class="nav-link"
        data-bs-toggle="dropdown">
        <svg aria-label="Notifications" width="20" height="20" viewBox="0 0 20 20" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19.1667 14.1668C19.1667 14.6668 18.8334 15.0002 18.3334 15.0002H1.66671C1.16671 15.0002 0.833374 14.6668 0.833374 14.1668C0.833374 13.6668 1.16671 13.3335 1.66671 13.3335C2.58337 13.3335 3.33337 12.5835 3.33337 11.6668V7.50016C3.33337 3.8335 6.33337 0.833496 10 0.833496C13.6667 0.833496 16.6667 3.8335 16.6667 7.50016V11.6668C16.6667 12.5835 17.4167 13.3335 18.3334 13.3335C18.8334 13.3335 19.1667 13.6668 19.1667 14.1668ZM12.1667 17.9168C11.6667 18.7502 10.8334 19.1668 10 19.1668C9.58337 19.1668 9.16671 19.0835 8.75004 18.8335C8.33337 18.5835 8.08337 18.3335 7.83337 17.9168C7.58337 17.5002 7.75004 17.0002 8.16671 16.7502C8.58337 16.5002 9.08337 16.6668 9.33337 17.0835C9.3586 17.1087 9.38383 17.1416 9.41137 17.1775L9.41138 17.1775C9.47481 17.2601 9.5505 17.3587 9.66671 17.4168C10.0834 17.6668 10.5834 17.5002 10.8334 17.0835C11.0834 16.6668 11.5834 16.5835 12 16.7502C12.4167 16.9168 12.4167 17.5002 12.1667 17.9168ZM15 11.6668C15 12.2502 15.1667 12.8335 15.4167 13.3335H4.58337C4.83337 12.8335 5.00004 12.2502 5.00004 11.6668V7.50016C5.00004 4.75016 7.25004 2.50016 10 2.50016C12.75 2.50016 15 4.75016 15 7.50016V11.6668Z"
                fill="black" />
            <mask id="mask0_207_5890" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20"
                height="20">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M19.1667 14.1668C19.1667 14.6668 18.8334 15.0002 18.3334 15.0002H1.66671C1.16671 15.0002 0.833374 14.6668 0.833374 14.1668C0.833374 13.6668 1.16671 13.3335 1.66671 13.3335C2.58337 13.3335 3.33337 12.5835 3.33337 11.6668V7.50016C3.33337 3.8335 6.33337 0.833496 10 0.833496C13.6667 0.833496 16.6667 3.8335 16.6667 7.50016V11.6668C16.6667 12.5835 17.4167 13.3335 18.3334 13.3335C18.8334 13.3335 19.1667 13.6668 19.1667 14.1668ZM12.1667 17.9168C11.6667 18.7502 10.8334 19.1668 10 19.1668C9.58337 19.1668 9.16671 19.0835 8.75004 18.8335C8.33337 18.5835 8.08337 18.3335 7.83337 17.9168C7.58337 17.5002 7.75004 17.0002 8.16671 16.7502C8.58337 16.5002 9.08337 16.6668 9.33337 17.0835C9.3586 17.1087 9.38383 17.1416 9.41137 17.1775L9.41138 17.1775C9.47481 17.2601 9.5505 17.3587 9.66671 17.4168C10.0834 17.6668 10.5834 17.5002 10.8334 17.0835C11.0834 16.6668 11.5834 16.5835 12 16.7502C12.4167 16.9168 12.4167 17.5002 12.1667 17.9168ZM15 11.6668C15 12.2502 15.1667 12.8335 15.4167 13.3335H4.58337C4.83337 12.8335 5.00004 12.2502 5.00004 11.6668V7.50016C5.00004 4.75016 7.25004 2.50016 10 2.50016C12.75 2.50016 15 4.75016 15 7.50016V11.6668Z"
                    fill="white" />
            </mask>
            <g mask="url(#mask0_207_5890)">
                <rect width="20" height="20" fill="#6E6B7B" />
            </g>
        </svg><!-- <span class="badge rounded-pill bg-danger badge-up">21</span>-->
    </a>
    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
        <li class="dropdown-menu-header">
            <div class="dropdown-header d-flex">
                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                {{-- <div class="badge rounded-pill bg-primary d-flex align-items-center justify-content-center">
                    21 New
                </div> --}}
            </div>
        </li>
        <li class="scrollable-container media-list">
            @forelse ($notificationMessages as $message) 
            <a aria-label="Notification User Avatar" class="d-flex" href="#">
                <div class="list-item d-flex align-items-start">
                    <div class="list-item-body flex-grow-1">
                        {{$message}}
                        {{-- ALB Requests has approved a new service request for Consumer User_company (
                        102391 , 9:41 AM ) --}}
                    </div>
                        
                </div>
            </a>
            @empty
                No Notification Available
            @endforelse

        </li>
        <li class="dropdown-menu-footer"><a href="{{ url($userType . '/system-logs') }}" aria-label="Read All Notifications"
                class="btn btn-primary w-100 all_notify">Read all
                notifications</a></li>
    </ul>
</div>