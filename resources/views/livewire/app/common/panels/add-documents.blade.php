<form class="form">
    {{-- updated by shanila to add csrf--}}
    @csrf
    {{-- update ended by shanila --}}

<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-8 mb-4">
            <label class="form-label" for="document-title">
                Document Title
            </label>
            <input type="text" id="document-title" class="form-control" name="document-title"
                placeholder="Enter Document Title" required aria-required="true" />
        </div>
        <div class="col-lg-8 mb-4">
            <label class="form-label" for="notes-column">
                Note
            </label>
            <textarea class="form-control" rows="3" placeholder="" name="notesColumn" id="notes-column"></textarea>
        </div>
        <div class="col-lg-8 mb-4">
            <label class="form-label" for="set_set_date">Upload File</label>
        </div>
        <div class="col-lg-8 mb-4">
            <div class="row">
                <div class="text-center col-lg-3 d-flex">
                    <a href="#" class="btn btn-outline-dark d-block px-2 pb-0">
                        <svg class="mb-2" width="40" height="36" viewBox="0 0 40 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.35 23.4921L9.702 35.2381H33.35L40 23.4921H16.35ZM11.73 2.54302L0 23.3237L6.744 35.2342L18.476 14.4535L11.73 2.54302ZM38.89 21.5344L26.698 0H13.208L25.384 21.5344H38.89Z"
                                fill="url(#paint0_linear_2957_105057)" />
                            <defs>
                                <linearGradient id="paint0_linear_2957_105057" x1="20" y1="0" x2="36.0479" y2="0"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#213969" />
                                    <stop offset="1" stop-color="#204387" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <p class="text-primary mb-0 fw-medium">
                            Attach from Company Drive
                        </p>
                    </a>
                </div>
                <div class="text-center col-lg-3 d-flex">
                    <a href="#" class="btn btn-outline-dark d-block px-2 pb-0">
                        <svg class="mb-2" width="40" height="36" viewBox="0 0 40 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.35 23.4921L9.702 35.2381H33.35L40 23.4921H16.35ZM11.73 2.54302L0 23.3237L6.744 35.2342L18.476 14.4535L11.73 2.54302ZM38.89 21.5344L26.698 0H13.208L25.384 21.5344H38.89Z"
                                fill="url(#paint0_linear_2957_105057)" />
                            <defs>
                                <linearGradient id="paint0_linear_2957_105057" x1="20" y1="0" x2="36.0479" y2="0"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#213969" />
                                    <stop offset="1" stop-color="#204387" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <p class="text-primary mb-0 fw-medium">
                            Attach from Google Drive
                        </p>
                    </a>
                </div>
                <div class="text-center col-lg-3 d-flex">
                    <a href="#" class="btn btn-outline-dark d-block px-2 pb-0">
                        <svg class="mb-2" width="35" height="35" viewBox="0 0 35 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M32.0833 1.1498e-06H25.5208C25.3274 1.1498e-06 25.142 0.076824 25.0052 0.213569C24.8685 0.350315 24.7917 0.535781 24.7917 0.729168V8.75C24.7917 9.13678 24.638 9.50771 24.3645 9.7812C24.091 10.0547 23.7201 10.2083 23.3333 10.2083H11.7214C11.3429 10.2143 10.9763 10.0765 10.6955 9.82281C10.4147 9.56906 10.2406 9.21824 10.2083 8.84115C10.1959 8.64211 10.2244 8.44263 10.292 8.25504C10.3597 8.06745 10.4652 7.89573 10.6019 7.75051C10.7385 7.60528 10.9036 7.48964 11.0867 7.41072C11.2699 7.3318 11.4672 7.29128 11.6667 7.29167H21.875V0.729168C21.875 0.535781 21.7982 0.350315 21.6614 0.213569C21.5247 0.076824 21.3392 1.1498e-06 21.1458 1.1498e-06H10.8099C10.427 -0.000339916 10.0478 0.0752001 9.69421 0.222257C9.34065 0.369313 9.01973 0.584972 8.75 0.856772L0.856772 8.75C0.584972 9.01973 0.369313 9.34065 0.222257 9.69421C0.0752001 10.0478 -0.000339916 10.427 1.1498e-06 10.8099V32.0833C1.1498e-06 32.8569 0.307292 33.5987 0.854273 34.1457C1.40125 34.6927 2.14312 35 2.91667 35H32.0833C32.8569 35 33.5987 34.6927 34.1457 34.1457C34.6927 33.5987 35 32.8569 35 32.0833V2.91667C35 2.14312 34.6927 1.40125 34.1457 0.854273C33.5987 0.307292 32.8569 1.1498e-06 32.0833 1.1498e-06ZM17.5 26.25C16.4905 26.25 15.5037 25.9506 14.6643 25.3898C13.8249 24.8289 13.1707 24.0318 12.7844 23.0991C12.398 22.1665 12.297 21.1402 12.4939 20.1501C12.6909 19.16 13.177 18.2505 13.8908 17.5366C14.6046 16.8228 15.5141 16.3367 16.5042 16.1397C17.4943 15.9428 18.5206 16.0439 19.4533 16.4302C20.3859 16.8165 21.1831 17.4707 21.744 18.3101C22.3048 19.1495 22.6042 20.1363 22.6042 21.1458C22.5994 22.4981 22.0601 23.7935 21.1039 24.7497C20.1477 25.7059 18.8522 26.2452 17.5 26.25Z"
                                fill="url(#paint0_linear_2957_105064)" />
                            <defs>
                                <linearGradient id="paint0_linear_2957_105064" x1="17.5" y1="0" x2="31.5419" y2="0"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#213969" />
                                    <stop offset="1" stop-color="#204387" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <p class="text-primary mb-0 fw-medium">
                            Attach from Disk
                        </p>
                    </a>
                </div>
                <div class="text-center col-lg-3 d-flex">
                    <a href="#" class="btn btn-outline-dark d-block px-2 pb-0">
                        <svg class="mb-2" width="42" height="35" viewBox="0 0 42 35" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20.6185 6.57682L10.3093 13.1536L20.6185 19.7305L10.3093 26.3073L0 19.6944L10.3093 13.1176L0 6.57682L10.3093 0L20.6185 6.57682ZM10.2552 28.4232L20.567 21.8464L30.8763 28.4232L20.567 35L10.2552 28.4232ZM20.6185 19.697L30.9278 13.1176L20.6185 6.57682L30.8763 0L41.1856 6.57682L30.8763 13.1536L41.1856 19.7305L30.8763 26.3073L20.6185 19.6944V19.697Z"
                                fill="url(#paint0_linear_7724_170911)" />
                            <defs>
                                <linearGradient id="paint0_linear_7724_170911" x1="20.5928" y1="0" x2="37.1163"
                                    y2="0" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#213969" />
                                    <stop offset="1" stop-color="#204387" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <p class="text-primary mb-0 fw-medium">
                            Attach from Dropbox
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mb-4">
            <div class="form-check">
                <input class="form-check-input" id="AttachtoProviderConfirmation" name="" type="checkbox"
                    tabindex="">
                <label class="form-check-label" for="AttachtoProviderConfirmation">
                    Attach to Provider Confirmation
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="AttachtoCustomerConfirmation" name="" type="checkbox"
                    tabindex="">
                <label class="form-check-label" for="AttachtoCustomerConfirmation">
                    Attach to Customer Confirmation
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="RequestfromUser" name="" type="checkbox" tabindex="">
                <label class="form-check-label" for="RequestfromUser">
                    Request from User
                </label>
            </div>
        </div>
        <div class="col-lg-8 mb-4">
            <label class="form-label">
                Who would you like to request this information from?
            </label>
            <select class="form-select">
                <option>Select</option>
            </select>
        </div>
        <div class="col-lg-8 mb-4">
            <div class="d-flex flex-column gap-4">
                <div>
                    <label class="form-label">
                        When should they first be notified?
                    </label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="WhenshouldtheyfirstbenotifiedNow" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label" for="WhenshouldtheyfirstbenotifiedNow">
                                Now
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="WhenshouldtheyfirstbenotifiedLater" name=""
                                type="checkbox" tabindex="">
                            <label class="form-check-label" for="WhenshouldtheyfirstbenotifiedLater">
                                Later
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="form-label-sm">Notify</label>
                    <div class="d-flex gap-2">
                        <input type="" name="" class="form-control form-control-sm text-center w-25" value="2">
                        <label class="form-label mb-0">
                            Day(s)
                        </label>
                    </div>
                    <div>
                        <label class="form-label-sm">
                            Before the service start-time
                        </label>
                    </div>
                </div>
                <div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="RepeatNotification"
                            checked>
                        <label class="form-check-label" for="RepeatNotification">
                            Repeat Notification
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mb-4">
            <div class="d-flex flex-column gap-4">
                <div>
                    <label class="form-label">
                        How often should they be notified?
                    </label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="HowoftenshouldtheybenotifiedTime" name=""
                                type="radio" tabindex="">
                            <label class="form-check-label" for="HowoftenshouldtheybenotifiedTime">
                                Time(s)
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="HowoftenshouldtheybenotifiedEveryDay" name=""
                                type="radio" tabindex="" checked>
                            <label class="form-check-label" for="HowoftenshouldtheybenotifiedEveryDay">
                                (*) Every ___ Days
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="" name="" class="form-control form-control-sm text-center w-25" value="10">
                </div>
            </div>
        </div>
        <div class="col-lg-8 mb-4">
            <label class="form-label">Message to User</label>
            <textarea class="form-control" rows="5" cols="5"></textarea>
        </div>
    </div>
    <div class="col-lg-12 justify-content-center gap-2 d-flex mt-5 form-actions">
        <a href="javascript:void(0);" class="btn btn-outline-dark rounded" role="button">
            Cancel
        </a>
        <button type="submit" class="btn btn-primary rounded">
            Upload
        </button>
    </div>
</div>
</form>