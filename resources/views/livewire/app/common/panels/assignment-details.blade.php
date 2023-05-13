<div>
    <ul class="nav nav-tabs border-0 mt-4" id="assignment-details-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active btn rounded p-3" :class="(step == 1) ? 'active' : 'btn-secondary border-0'" x-on:click.prevent="step = 1" id="booking-details-tab" type="button" role="tab" aria-controls="booking-details-tab-pane" aria-selected="true">
                Booking Details
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link btn rounded p-3" :class="(step == 2) ? 'active' : 'btn-secondary border-0'" x-on:click.prevent="step = 2" id="payment-details-tab" type="button" role="tab" aria-controls="payment-details-tab-panel" aria-selected="false">
                Payment Details
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link btn rounded p-3" :class="(step == 3) ? 'active' : 'btn-secondary border-0'" x-on:click.prevent="step = 3" id="attachments-tab" type="button" role="tab" aria-controls="attachments-tab-panel" aria-selected="false">
                Attachments
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link btn rounded p-3" :class="(step == 4) ? 'active' : 'btn-secondary border-0'" x-on:click.prevent="step = 4" id="provider-details-tab" type="button" role="tab" aria-controls="provider-details-tab-panel" aria-selected="false">
                Provider Details
            </button>
        </li>
    </ul>

    <div class="tab-content" id="assignment-details-tab-content">
        <div class="tab-pane fade show active" id="booking-details-tab-pane" role="tabpanel" aria-labelledby="booking-details-tab" :class="{ 'active show': step == 1 }" x-show="step == 1">
            <div class="row align-items-center">
                <div class="col-auto">
                    <h2 class="font-family-tertiary text-center mb-0">
                        Requester Detail
                    </h2>
                </div>
                <div class="col-auto ms-2">
                    <div class="d-flex flex-column flex-md-row gap-2">
                        <button type="button" class="btn btn-outline-primary text-primary rounded text-sm d-inline-flex gap-1 align-items-center px-3">
                            <svg aria-label="Message Coordinator" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 21V24.766L9.515 23.857L14.277 21H19C20.103 21 21 20.103 21 19V11C21 9.897 20.103 9 19 9H7C5.897 9 5 9.897 5 11V19C5 20.103 5.897 21 7 21H8ZM7 11H19V19H13.723L10 21.234V19H7V11Z" fill="url(#paint0_linear_3838_133679)"/>
                                <path d="M23 5H11C9.897 5 9 5.897 9 7H21C22.103 7 23 7.897 23 9V17C24.103 17 25 16.103 25 15V7C25 5.897 24.103 5 23 5Z" fill="url(#paint1_linear_3838_133679)"/>
                                <defs>
                                    <linearGradient id="paint0_linear_3838_133679" x1="13" y1="9" x2="19.4192" y2="9" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#213969"/>
                                        <stop offset="1" stop-color="#204387"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_3838_133679" x1="17" y1="5" x2="23.4192" y2="5" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#213969"/>
                                        <stop offset="1" stop-color="#204387"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span>Message Coordinator</span>
                        </button>
                        <button type="button" class="btn btn-primary rounded text-sm d-inline-flex gap-1 align-items-center px-3" data-bs-toggle="modal" data-bs-target="#runningLateModal">
                            <svg aria-label="Running Late" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.833008 6.63281H1.66668V7.46183H0.833008V6.63281Z" fill="white"/>
                                <path d="M12.9191 2.89933V2.07031H11.2521V3.31384C11.2521 3.43989 11.1946 3.55874 11.0961 3.63741L9.78613 4.67961C10.0957 4.86064 10.4515 4.97146 10.8355 4.97146C11.9843 4.97146 12.9191 4.04219 12.9191 2.89933Z" fill="white"/>
                                <path d="M3.88497 10.778C4.18274 10.778 4.45936 10.6312 4.62432 10.3846L6.66726 7.3371V5.80469C6.2887 5.80469 5.94102 5.9946 5.738 6.31183L5.53201 6.63371H2.50017V7.46273H5.00161L3.6756 9.53485H0V10.3639H3.36091C3.42224 10.5999 3.62865 10.778 3.88497 10.778Z" fill="white"/>
                                <path d="M1.25006 14.5H0.833008V16.9198C1.2196 16.7921 1.5326 16.4896 1.66668 16.0908V14.9145C1.66668 14.6861 1.47973 14.5 1.25006 14.5Z" fill="white"/>
                                <path d="M6.73242 11.1847H9.72746L10.8691 8.53475C10.9202 8.4159 11.0243 8.3275 11.1508 8.2962C11.2768 8.26448 11.4105 8.29366 11.5124 8.37445L12.1045 8.84563L12.5918 7.71546L11.3576 6.48758C11.1512 6.8268 10.7921 7.0404 10.3886 7.0404C10.007 7.0404 9.65218 6.85134 9.44111 6.53538L8.94539 5.79688H7.5018V7.0404H7.91843C8.05928 7.0404 8.18997 7.11062 8.26695 7.2282C8.34436 7.34536 8.35662 7.49298 8.29994 7.62072L6.73242 11.1847Z" fill="white"/>
                                <path d="M10.6592 6.03911L10.7844 5.79041C10.446 5.78491 10.1224 5.72104 9.82129 5.60938L10.1313 6.07168C10.2527 6.25398 10.5619 6.2341 10.6592 6.03911Z" fill="white"/>
                                <path d="M10.4179 3.11686V1.65761C10.4179 1.42921 10.604 1.24353 10.8345 1.24353H12.7413C12.419 0.512638 11.6868 0 10.8345 0C9.68574 0 8.75098 0.929686 8.75098 2.07212V2.90114C8.75098 3.35795 8.90494 3.77669 9.15745 4.11929L10.4179 3.11686Z" fill="white"/>
                                <path d="M12.917 20.7243H12.9914C12.9644 20.6584 12.9419 20.5903 12.917 20.5234V20.7243Z" fill="white"/>
                                <path d="M9.86727 12.0234H6.36636L5.38169 14.2618C5.3157 14.4128 5.16555 14.5101 5.00017 14.5101H2.5V16.1681H7.24317L8.378 13.9103C8.43425 13.7986 8.53873 13.7179 8.66139 13.6912C8.78489 13.6646 8.91305 13.6946 9.0116 13.7724L11.0951 15.43C11.1472 15.4715 11.1886 15.5252 11.2157 15.5857L12.5146 18.4927C12.5108 18.4082 12.5011 18.3253 12.5011 18.2402C12.5011 17.2509 12.7261 16.3149 13.1182 15.4711L12.5696 13.9433L9.86727 12.0234Z" fill="white"/>
                                <path d="M19.1681 14.0859C16.8705 14.0859 15.001 15.9453 15.001 18.2306C15.001 20.5159 16.8705 22.3753 19.1681 22.3753C21.4661 22.3753 23.3352 20.5159 23.3352 18.2306C23.3352 15.9453 21.4661 14.0859 19.1681 14.0859ZM21.0372 19.829L19.5686 18.9526C19.4493 19.019 19.314 19.0596 19.1681 19.0596C18.7087 19.0596 18.3348 18.6878 18.3348 18.2306C18.3348 17.9252 18.5036 17.6609 18.7514 17.5171V14.915H19.5847V17.5175C19.833 17.6613 20.0017 17.9256 20.0017 18.231C20.0017 18.2357 20.0005 18.2395 20.0005 18.2441L21.4665 19.1193L21.0372 19.829Z" fill="white"/>
                                <path d="M19.166 12.4375C15.9489 12.4375 13.332 15.04 13.332 18.2398C13.332 21.4391 15.9489 24.0421 19.166 24.0421C22.3831 24.0421 25.0001 21.4391 25.0001 18.2398C25.0001 15.04 22.3831 12.4375 19.166 12.4375ZM19.166 23.2131C16.4087 23.2131 14.1657 20.9823 14.1657 18.2398C14.1657 15.4973 16.4087 13.2665 19.166 13.2665C21.9234 13.2665 24.1668 15.4973 24.1668 18.2398C24.1668 20.9823 21.9234 23.2131 19.166 23.2131Z" fill="white"/>
                                <path d="M14.2848 9.88494L17.2447 8.90323C17.3974 8.85247 17.5002 8.71078 17.5002 8.55005C17.5002 8.11439 17.0595 7.77898 16.6331 7.89995L13.8644 8.68667C13.7206 8.72812 13.5624 8.68794 13.4554 8.58135L13.224 8.35126L12.7773 9.38753L13.1491 9.68276C13.4634 9.93316 13.9037 10.011 14.2848 9.88494Z" fill="white"/>
                                <path d="M16.251 4.96875H21.2513V5.79777H16.251V4.96875Z" fill="white"/>
                                <path d="M20.001 7.46094H22.5011V8.28953H20.001V7.46094Z" fill="white"/>
                            </svg>
                            <span>Running Late</span>
                        </button>
                        <button type="button" class="btn btn-primary rounded text-sm d-inline-flex gap-1 align-items-center px-3" data-bs-toggle="modal" data-bs-target="#returnAssignmentModal">
                            <svg aria-label="Return Assignment" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 5C9.48615 5 5 9.48615 5 15C5 20.5138 9.48615 25 15 25C20.5138 25 25 20.5138 25 15C25 9.48615 20.5138 5 15 5ZM15 6.53846C19.6823 6.53846 23.4615 10.3177 23.4615 15C23.4615 19.6823 19.6823 23.4615 15 23.4615C10.3177 23.4615 6.53846 19.6823 6.53846 15C6.53846 10.3177 10.3177 6.53846 15 6.53846ZM12.0923 10.9846L10.9846 12.0923L13.8954 15L10.9862 17.9077L12.0938 19.0154L15 16.1054L17.9077 19.0131L19.0154 17.9077L16.1054 15L19.0131 12.0923L17.9077 10.9846L15 13.8954L12.0923 10.9862V10.9846Z" fill="white"/>
                            </svg>
                            <span>Return Assignment</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">Assignment No:</label>
                        </div>
                        <div class="col-lg-7 align-self-center text-end">
                            <div>101929</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="d-flex justify-content-end me-4">
                        <div class="dropdown">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg aria-label="Export" width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                                </svg>
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item d-block rounded" href="#">
                                        Action
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-block rounded" href="#">
                                        Another action
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-block rounded" href="#">
                                        Something else here
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">Start Time:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>
                                10/25/2022 4:20 PM
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">End Time:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>
                                10/25/2022 8:20 PM
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">Duration:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>
                                4 Hours 0 Minutes
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">Frequency:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>
                                One Time
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">Industry:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>Information Technology</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">Company:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>Software Agency</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">Requester:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>Mr. Ali Ahmed</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">Point of contact:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>Mr. Ali Ahmed</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label">Phone Number:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>(923) 023-9683</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-lg-flex justify-content-between align-items-center mb-5">
                        <h2 class="mb-lg-0">Service 1</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Accommodation:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        Spoken Language Interpreting Services
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Service:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        English to French Interpreting
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Specialization:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">Legal</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Service Type:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">Virtual</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Number of Providers:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">10</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Service Consumer:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        <a href="#">Thomas Charles</a>,
                                        <a href="#">Richard Payne</a>,
                                        <a href="#">Jennifer Summers</a>,
                                        <a href="#">Lori Wells</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Participants:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        <a href="#">Thomas Charles</a>,
                                        <a href="#">Dana Carey</a>,
                                        <a href="#">Nicholas Tanner</a>,
                                        <a href="#">Crystal Mays</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="d-lg-flex justify-content-between align-items-center mb-5">
                        <h2 class="mb-lg-0">Service 1 Meeting Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Meeting Name:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary">
                                            Spoken Language Interpreting Services
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Meeting Link:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary text-primary">
                                            https://meet.google.com/xxxxxxxx
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Meeting Phone Number:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        (923) 023-9683
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Meeting Passcode:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">********</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Status:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">Active</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Created:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        10/15/2022 12:20 PM
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-lg-flex justify-content-between align-items-center mb-5">
                        <h2 class="mb-lg-0">Service 2</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Accommodation:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        Spoken Language Interpreting Services
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Service:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        English to French Interpreting
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Specialization:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">Legal</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Service Type:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">Virtual</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Number of Providers:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">10</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Service Consumer:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        <a href="#">Thomas Charles</a>,
                                        <a href="#">Mary Garcia</a>,
                                        <a href="#">Andrew Burns</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Participants:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        <a href="#">Thomas Charles</a>,
                                        <a href="#">Richard Payne</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="d-lg-flex justify-content-between align-items-center mb-5">
                        <h2 class="mb-lg-0">Service 2 Meeting Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Meeting Name:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary">
                                            Spoken Language Interpreting Services
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Meeting Link:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary text-primary">
                                            https://meet.google.com/xxxxxxxx
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Meeting Phone Number:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        (923) 023-9683
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">
                                        Meeting Passcode:
                                    </label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">********</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Status:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">Active</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Created:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">
                                        10/15/2022 12:20 PM
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-12">
                    <div class="d-lg-flex justify-content-between align-items-center mb-5">
                        <h2 class="mb-lg-0">Service Form Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">First Name:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary">Thomas</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Last Name:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary">Charles</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Phone Number:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary">
                                            (923) 023-9683
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Severity:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="font-family-tertiary">Active</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="d-lg-flex justify-content-between align-items-center mb-5">
                        <h2 class="mb-lg-0">Industry Form Detail</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="col-form-label">
                                                Req_info:
                                            </label>
                                        </div>
                                        <div class="col-lg-9 align-self-center">
                                            <a href="#">View Uploaded Document</a>
                                        </div>
                                        <div class="col-lg-auto">
                                            <img src="/tenant/images/img-placeholder-document.jpg" alt="img-placeholder-document">
                                            <p class="font-family-secondary">
                                                <small>File Name</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h2 class="mb-lg-4">Notes</h2>
                    <div class="row mb-4">
                        <div class="col-lg-6 mb-4">
                            <div>
                                <label class="form-label" for="provider_notes">
                                    Provider Notes
                                </label>
                                <textarea class="form-control" name="provider_notes" id="provider_notes" rows="4" cols="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex form-actions">
                    <button type="button" class="btn btn-primary rounded" x-on:click="step++">
                        Next
                    </button>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="payment-details-tab-pane" role="tabpanel" aria-labelledby="payment-details-tab" :class="{ 'active show': step == 2 }" x-show="step == 2">
            <div class="row my-4">
                <div class="col-lg-12">
                    <div class="d-lg-flex justify-content-between align-items-center mb-5">
                        <h2 class="mb-lg-0">Payment Detail </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Provider Rate Sum:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary">$00.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Additional Provider Payments:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary">$00.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label">Total Provider Payment:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="font-family-tertiary">$00.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 d-flex gap-3 form-actions">
                    <button type="button" class="btn btn-outline-dark rounded" x-on:click="step--">
                        Back
                    </button>
                    <button type="submit" class="btn btn-primary rounded" x-on:click="step++">
                        Next
                    </button>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="attachments-tab-pane" role="tabpanel" aria-labelledby="attachments-tab"  :class="{ 'active show': step == 3 }" x-show="step == 3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-lg-flex align-items-center gap-5 mb-5">
                        <h2 class="mb-lg-0">Attachments</h2>
                        <button type="button" class="btn btn-primary rounded d-inline-flex align-items-center gap-1" x-on:click="addReimbursement = true">
                            <svg aria-label="Add Reimbursement" width="20" height="21" viewBox="0 0 20 21">
                                <use xlink:href="/css/common-icons.svg#plus"></use>
                            </svg>
                            <span>Add Reimbursement</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="col-form-label">
                                                Add Document
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-12">
                                            <button class="btn btn-secondary btn-outline-secondary" type="button">Choose File</button>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-auto">
                                            <img src="/tenant/images/img-placeholder-document.jpg" alt="img-placeholder-document" class="">
                                            <p class="font-family-secondary">
                                                <small>File Name</small>
                                            </p>
                                        </div>
                                        <div class="col-lg-auto">
                                            <img src="/tenant/images/img-placeholder-document.jpg" alt="img-placeholder-document" class="">
                                            <p class="font-family-secondary">
                                                <small>File Name</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex gap-3 form-actions">
                    <button type="button" class="btn btn-outline-dark rounded" x-on:click="step--">
                        Back
                    </button>
                    <button type="submit" class="btn btn-primary rounded" x-on:click="step++">
                        Next
                    </button>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="provider-details-tab-pane" role="tabpanel" aria-labelledby="provider-details-tab"  :class="{ 'active show': step == 4 }" x-show="step == 4">
            <div class="mb-5">
                <div class="d-lg-flex align-items-center justify-content-between mb-4">
                    <h2 class="mb-lg-0">Service 1 Assigned Providers</h2>
                    <div class="d-flex">
                        <a href="#" class="btn btn-has-icon border-2 btn-outline-primary text-primary rounded">
                            <svg aria-label="Team Chat" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="url(#paint0_linear_10513_5925)"></path>
                                <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="url(#paint1_linear_10513_5925)"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_10513_5925" x1="8" y1="4" x2="14.4192" y2="4" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#213969"></stop>
                                        <stop offset="0.994792" stop-color="#013191"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_10513_5925" x1="12" y1="0" x2="18.4192" y2="0" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#213969"></stop>
                                        <stop offset="0.994792" stop-color="#013191"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span>Team Chat</span>
                        </a>
                    </div>
                </div>
                <div class="mb-4">
                    <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>
                            <svg aria-label="Export button" width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z"></path>
                            </svg>
                        </span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item d-block rounded">
                                Action
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-block rounded">
                                Another action
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-block rounded">
                                Something else here
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
                                    <thead>
                                        <tr role="row">
                                            <th scope="col" class="text-center">
                                                <input class="form-check-input" type="checkbox" value="" aria-label="Select All Providers">
                                            </th>
                                            <th scope="col">Provider</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 5; $i++)
                                        <tr role="row" class="{{ ($i % 2 == 0) ? 'even' : 'odd' }}">
                                            <td class="text-center align-middle">
                                                <input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div>
                                                        <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Provider Image">
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="font-family-secondary leading-none">
                                                            Dori Griffiths
                                                        </div>
                                                        <a href="#" class="font-family-secondary">
                                                            <small>dorigriffit@gmail.com</small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg aria-label="Chat" width="20" height="20" viewBox="0 0 20 20">
                                                        <use
                                                        xlink:href="/css/common-icons.svg#chat">
                                                        </use>
                                                     </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <div class="d-lg-flex align-items-center justify-content-between mb-4">
                    <h2 class="mb-lg-0">Service 2 Assigned Providers</h2>
                    <div class="d-flex">
                        <a href="#" class="btn btn-has-icon border-2 btn-outline-primary text-primary rounded">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="url(#paint0_linear_10513_5925)"></path>
                                <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="url(#paint1_linear_10513_5925)"></path>
                                <defs>
                                    <linearGradient id="paint0_linear_10513_5925" x1="8" y1="4" x2="14.4192" y2="4" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#213969"></stop>
                                        <stop offset="0.994792" stop-color="#013191"></stop>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_10513_5925" x1="12" y1="0" x2="18.4192" y2="0" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#213969"></stop>
                                        <stop offset="0.994792" stop-color="#013191"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span>Team Chat</span>
                        </a>
                    </div>
                </div>
                <div class="mb-4">
                    <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>
                            <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z"></path>
                            </svg>
                        </span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item d-block rounded">
                                Action
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-block rounded">
                                Another action
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-block rounded">
                                Something else here
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive text-nowrap">
                                <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
                                    <thead>
                                        <tr role="row">
                                            <th scope="col" class="text-center">
                                                <input class="form-check-input" type="checkbox" value="" aria-label="Select All Providers">
                                            </th>
                                            <th scope="col">Provider</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 5; $i++)
                                        <tr role="row" class="{{ ($i % 2 == 0) ? 'even' : 'odd' }}">
                                            <td class="text-center align-middle">
                                                <input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div>
                                                        <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="font-family-secondary leading-none">
                                                            Dori Griffiths
                                                        </div>
                                                        <a href="#" class="font-family-secondary">
                                                            <small>dorigriffit@gmail.com</small>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black"/>
                                                            <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black"/>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex form-actions">
                    <button type="button" class="btn btn-outline-dark rounded" x-on:click="step--">
                        Back
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>