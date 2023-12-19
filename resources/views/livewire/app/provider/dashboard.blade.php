<div class="">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div>

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">Dashboard</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard"
                                        aria-label="Go to Dashboard">
                                        <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23"
                                            fill="currentColor" stroke="currentColor">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
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
        @livewire('app.common.dashboard-messages', ['userType' => 3, 'displayTo' => 'dashboard'])
        <div class="row mb-5">
            <ul class="d-grid grid-cols-6 gap-4 list-unstyled mb-5" id="myTab" role="tablist">
                <li class="" role="presentation">
                    <a class="dashborad-block active" id="calendar-tab" data-bs-toggle="tab"
                        data-bs-target="#calendar-tab-pane" type="button" role="tab"
                        aria-controls="calendar-tab-pane" aria-selected="true"
                        onclick="window.dispatchEvent(new Event('resize'))">
                        <div class="text-center block-text">Assignments Calendar</div>
                        <div class="text-center block-icon">
                            <svg aria-label="Assignments Calendar" class="fill" width="57" height="57"
                                viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M51.958 6.5897L38.4462 6.58975V3.22656C38.4462 2.29422 37.691 1.53906 36.7587 1.53906C35.8264 1.53906 35.0712 2.29422 35.0712 3.22656V6.58891H21.5712V3.22656C21.5712 2.29422 20.816 1.53906 19.8837 1.53906C18.9514 1.53906 18.1962 2.29422 18.1962 3.22656V6.58891H4.70801C2.84416 6.58891 1.33301 8.10006 1.33301 9.96391V52.1514C1.33301 54.0152 2.84416 55.5264 4.70801 55.5264H51.958C53.8218 55.5264 55.333 54.0152 55.333 52.1514V9.96391C55.333 8.10085 53.8218 6.5897 51.958 6.5897ZM51.958 52.1514H4.70801V9.96391H18.1962V11.6641C18.1962 12.5964 18.9514 13.3516 19.8837 13.3516C20.816 13.3516 21.5712 12.5964 21.5712 11.6641V9.96475H35.0712V11.6649C35.0712 12.5972 35.8264 13.3524 36.7587 13.3524C37.691 13.3524 38.4462 12.5972 38.4462 11.6649V9.96475H51.958V52.1514ZM40.1455 28.5272H43.5205C44.452 28.5272 45.208 27.7712 45.208 26.8397V23.4647C45.208 22.5332 44.452 21.7772 43.5205 21.7772H40.1455C39.214 21.7772 38.458 22.5332 38.458 23.4647V26.8397C38.458 27.7712 39.214 28.5272 40.1455 28.5272ZM40.1455 42.0264H43.5205C44.452 42.0264 45.208 41.2712 45.208 40.3389V36.9639C45.208 36.0324 44.452 35.2764 43.5205 35.2764H40.1455C39.214 35.2764 38.458 36.0324 38.458 36.9639V40.3389C38.458 41.272 39.214 42.0264 40.1455 42.0264ZM30.0205 35.2764H26.6455C25.714 35.2764 24.958 36.0324 24.958 36.9639V40.3389C24.958 41.2712 25.714 42.0264 26.6455 42.0264H30.0205C30.952 42.0264 31.708 41.2712 31.708 40.3389V36.9639C31.708 36.0332 30.952 35.2764 30.0205 35.2764ZM30.0205 21.7772H26.6455C25.714 21.7772 24.958 22.5332 24.958 23.4647V26.8397C24.958 27.7712 25.714 28.5272 26.6455 28.5272H30.0205C30.952 28.5272 31.708 27.7712 31.708 26.8397V23.4647C31.708 22.5324 30.952 21.7772 30.0205 21.7772ZM16.5205 21.7772H13.1455C12.214 21.7772 11.458 22.5332 11.458 23.4647V26.8397C11.458 27.7712 12.214 28.5272 13.1455 28.5272H16.5205C17.452 28.5272 18.208 27.7712 18.208 26.8397V23.4647C18.208 22.5324 17.452 21.7772 16.5205 21.7772ZM16.5205 35.2764H13.1455C12.214 35.2764 11.458 36.0324 11.458 36.9639V40.3389C11.458 41.2712 12.214 42.0264 13.1455 42.0264H16.5205C17.452 42.0264 18.208 41.2712 18.208 40.3389V36.9639C18.208 36.0332 17.452 35.2764 16.5205 35.2764Z"
                                    stroke-width="1.77469" />
                            </svg>
                        </div>
                        <div>
                            <!--	<div class="text-center block-number">50</div>-->
                        </div>
                    </a>
                </li>
                <li class="" role="presentation">
                    <a class="dashborad-block" id="assignments-tab" data-bs-toggle="tab"
                        data-bs-target="#assignments-tab-pane" type="button" role="tab"
                        aria-controls="assignments-tab-pane" aria-selected="false">
                        <div class="text-center block-text">Assignments List</div>
                        <div class="text-center block-icon">
                            <svg aria-label="Assignments List" class="fill" width="54" height="61"
                                viewBox="0 0 54 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.1215 48.3232H32.7326V42.4049H12.1215V48.3232ZM12.1215 36.4866H41.566V30.5682H12.1215V36.4866ZM12.1215 24.6499H41.566V18.7316H12.1215V24.6499ZM6.23264 54.2416H47.4549V12.8132H6.23264V54.2416ZM0.34375 60.1599V6.8949H18.5993C19.2373 5.1194 20.3051 3.68913 21.8029 2.6041C23.2986 1.51908 24.9789 0.976562 26.8438 0.976562C28.7086 0.976562 30.3898 1.51908 31.8876 2.6041C33.3834 3.68913 34.4502 5.1194 35.0882 6.8949H53.3438V60.1599H0.34375ZM26.8438 10.5939C27.4817 10.5939 28.0098 10.3838 28.4279 9.96355C28.844 9.54532 29.0521 9.01563 29.0521 8.37448C29.0521 7.73333 28.844 7.20265 28.4279 6.78245C28.0098 6.36422 27.4817 6.1551 26.8438 6.1551C26.2058 6.1551 25.6787 6.36422 25.2626 6.78245C24.8445 7.20265 24.6354 7.73333 24.6354 8.37448C24.6354 9.01563 24.8445 9.54532 25.2626 9.96355C25.6787 10.3838 26.2058 10.5939 26.8438 10.5939Z" />
                            </svg>
                        </div>
                        <div>
                            <!--<div class="text-center block-number">200</div>-->
                        </div>
                    </a>
                </li>
                {{-- <li class="" role="presentation">
                <a class="dashborad-block" id="available-assignments" data-bs-toggle="tab"
                    data-bs-target="#available-assignments-pane" type="button" role="tab"
                    aria-controls="available-assignments-pane" aria-selected="false">
                    <div class="text-center block-text">Available Assignments</div>
                    <div class="text-center block-icon">
                        <svg aria-label="Available Assignments" class="fill icon-availability"
                            viewBox="0 0 1440 809.999993" height="" preserveAspectRatio="xMidYMid meet"
                            version="1.0">
                            <defs>
                                <clipPath id="3b00f15639">
                                    <path
                                        d="M 610.59375 289.5 L 829.300781 289.5 L 829.300781 520.5 L 610.59375 520.5 Z M 610.59375 289.5 "
                                        clip-rule="nonzero" />
                                </clipPath>
                            </defs>
                            <g clip-path="url(#3b00f15639)">
                                <path fill=""
                                    d="M 647.039062 319.894531 L 634.902344 319.894531 C 628.488281 319.894531 623.242188 324.855469 622.789062 331.152344 L 622.75 332.054688 L 622.75 350.285156 L 817.164062 350.285156 L 817.164062 332.054688 C 817.164062 325.636719 812.203125 320.386719 805.933594 319.933594 L 805.011719 319.894531 L 792.855469 319.894531 L 792.875 332.054688 C 792.875 335.398438 790.148438 338.125 786.789062 338.125 C 783.449219 338.125 780.722656 335.398438 780.722656 332.054688 L 780.699219 319.894531 L 659.191406 319.894531 L 659.191406 332.054688 C 659.191406 335.398438 656.488281 338.125 653.125 338.125 C 649.765625 338.125 647.058594 335.398438 647.058594 332.054688 Z M 744.871094 407.667969 L 745.445312 408.179688 C 747.636719 410.375 747.800781 413.820312 745.9375 416.199219 L 745.445312 416.773438 L 714.332031 447.902344 C 713.265625 448.949219 711.625 449.070312 710.457031 448.25 L 710.027344 447.902344 L 703.589844 441.464844 L 692.582031 430.472656 C 690.207031 428.113281 690.207031 424.257812 692.582031 421.878906 C 694.941406 419.5 698.792969 419.5 701.171875 421.878906 L 712.179688 432.851562 L 736.855469 408.179688 C 739.03125 405.984375 742.492188 405.820312 744.871094 407.667969 Z M 811.324219 465.785156 L 786.789062 465.785156 L 785.886719 465.824219 C 779.921875 466.257812 775.125 471.015625 774.675781 476.980469 L 774.632812 477.945312 L 774.632812 502.492188 C 781.847656 497.816406 788.59375 492.34375 794.882812 486.046875 C 801.175781 479.75 806.648438 473.003906 811.324219 465.785156 Z M 817.164062 362.445312 L 622.75 362.445312 L 622.75 496.175781 C 622.75 502.574219 627.707031 507.847656 633.980469 508.296875 L 634.902344 508.339844 L 746 508.339844 L 746 508.316406 L 756.410156 508.316406 L 757.109375 508.277344 C 759.917969 507.949219 762.128906 505.734375 762.457031 502.945312 L 762.5 502.226562 L 762.5 477.945312 L 762.519531 476.734375 C 763.132812 464.265625 773.097656 454.300781 785.539062 453.664062 L 786.789062 453.625 L 811.097656 453.625 L 811.796875 453.582031 C 814.601562 453.273438 816.796875 451.058594 817.125 448.25 L 817.164062 447.554688 Z M 786.789062 289.5 C 790.148438 289.5 792.855469 292.226562 792.855469 295.570312 L 792.855469 307.730469 L 805.011719 307.730469 C 818.4375 307.730469 829.320312 318.621094 829.320312 332.054688 L 829.320312 452.640625 C 829.320312 456.71875 828.296875 460.738281 826.328125 464.328125 C 820.28125 475.363281 812.65625 485.472656 803.492188 494.640625 C 794.3125 503.828125 784.207031 511.457031 773.179688 517.503906 C 769.589844 519.472656 765.574219 520.5 761.496094 520.5 L 634.902344 520.5 C 621.476562 520.5 610.59375 509.609375 610.59375 496.175781 L 610.59375 332.054688 C 610.59375 318.621094 621.476562 307.730469 634.902344 307.730469 L 647.039062 307.730469 L 647.058594 295.570312 C 647.058594 292.226562 649.765625 289.5 653.125 289.5 C 656.488281 289.5 659.191406 292.226562 659.191406 295.570312 L 659.191406 307.730469 L 780.699219 307.730469 L 780.722656 295.570312 C 780.722656 292.226562 783.449219 289.5 786.789062 289.5 " />
                            </g>
                        </svg>
                    </div>
                    <div>
                        <!--<div class="text-center block-number">50</div>-->
                    </div>
                </a>
            </li> --}}
                <li class="" role="presentation">
                    <a class="dashborad-block" id="map-tab" data-bs-toggle="tab" data-bs-target="#map-tab-pane"
                        type="button" role="tab" aria-controls="map-tab-pane" aria-selected="false">
                        <div class="text-center block-text">Assignments Map</div>
                        <div class="text-center block-icon">
                            <svg aria-label="Assignments Map" class="stroke" width="55" height="55"
                                viewBox="0 0 60 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M50.0555 47.6875C54.2067 49.4729 56.7241 51.8151 56.7241 54.3835C56.7241 59.9759 44.7806 64.5085 30.0495 64.5085C15.3185 64.5085 3.375 59.9759 3.375 54.3835C3.375 51.8185 5.89241 49.4695 10.0436 47.6875"
                                    stroke-width="6.2114" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M46.7211 22.1313C46.7211 32.5702 30.0495 51.0078 30.0495 51.0078C30.0495 51.0078 13.3779 32.5702 13.3779 22.1313C13.3779 11.6958 20.8435 3.75781 30.0495 3.75781C39.2556 3.75781 46.7211 11.6958 46.7211 22.1313V22.1313Z"
                                    stroke-width="6.2114" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M30.0496 24C31.8911 24 33.384 22.489 33.384 20.625C33.384 18.761 31.8911 17.25 30.0496 17.25C28.2082 17.25 26.7153 18.761 26.7153 20.625C26.7153 22.489 28.2082 24 30.0496 24Z"
                                    stroke-width="6.2114" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div>
                            <!--<div class="text-center block-number">15</div>-->
                        </div>
                    </a>
                </li>
                <li class="" role="presentation">
                    <a class="dashborad-block" id="notifications-tab" data-bs-toggle="tab"
                        data-bs-target="#notifications-tab-pane" type="button" role="tab"
                        aria-controls="notifications-tab-pane" aria-selected="false">
                        <div class="text-center block-text">Notifications List</div>
                        <div class="text-center block-icon">
                            <svg aria-label="Notifications List" class="fill" width="55" height="55"
                                viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M27.3652 54.5313C30.3442 54.5313 32.7815 52.0389 32.7815 48.9928H21.949C21.949 52.0389 24.3863 54.5313 27.3652 54.5313ZM43.614 37.9159V24.0697C43.614 15.5682 39.1997 8.45125 31.4274 6.56817V4.6851C31.4274 2.38663 29.613 0.53125 27.3652 0.53125C25.1175 0.53125 23.3031 2.38663 23.3031 4.6851V6.56817C15.5578 8.45125 11.1165 15.5405 11.1165 24.0697V37.9159L5.70024 43.4543V46.2236H49.0302V43.4543L43.614 37.9159ZM38.1977 40.6851H16.5327V24.0697C16.5327 17.202 20.622 11.6082 27.3652 11.6082C34.1085 11.6082 38.1977 17.202 38.1977 24.0697V40.6851ZM15.3953 4.90663L11.5227 0.946635C5.02321 6.01433 0.744372 13.8236 0.365234 22.6851H5.78148C5.97332 19.1732 6.93739 15.7508 8.60191 12.6726C10.2664 9.5945 12.5885 6.93995 15.3953 4.90663V4.90663ZM48.949 22.6851H54.3652C53.959 13.8236 49.6802 6.01433 43.2078 0.946635L39.3622 4.90663C42.157 6.94996 44.4687 9.60743 46.1277 12.6839C47.7866 15.7604 48.7507 19.1778 48.949 22.6851Z" />
                            </svg>
                        </div>
                        <div>
                            <!--	<div class="text-center block-number">50</div>-->
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="calendar-tab-pane" role="tabpanel"
                    aria-labelledby="calendar-tab" tabindex="0">
                    <h3>Assignment Calendar</h3>
                    <!-- Filters -->
                    {{-- <div class="d-flex justify-content-start gap-4 mb-4">
                        <div class="d-flex justify-content-start gap-2">
                            <div class="mb-4 mb-lg-0 position-relative">
                                <!-- Begin : it will be replaced with livewire module-->
                                <svg aria-label="Select Date" class="icon-date sm cursor-pointer" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
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

                    </div> --}}
                    <!-- /Filters -->
                    @livewire('app.common.calendar', ['providerProfile' => false, 'user_id' => Auth::id(), 'hideProvider' => true], key(time()))
                    {{-- <div>
			<img src="/tenant-resources/images/img-placeholder-calendar.png" class="img-fluid" alt="Dashboard Calender"/>
			</div> --}}
                </div>
                <div class="tab-pane fade" id="assignments-tab-pane" role="tabpanel"
                    aria-labelledby="assignments-tab" tabindex="0">
                    <h2 class="text-dark">Assignment List</h2>
                    <!-- Filters -->
                    <div class="d-flex justify-content-start gap-4 mb-5">

                        <div class="d-flex justify-content-start gap-2">
                            <div class="mb-4 mb-lg-0">
                                <button type="button" class="btn btn-xs btn-primary rounded">Today</button>
                            </div>
                            <div class="mb-4 mb-lg-0">
                                <a href="/provider/bookings/upcoming"
                                    class="btn btn-xs btn-inactive rounded">Upcoming</a>
                            </div>
                            <div class="mb-4 mb-lg-0">
                                <a href="/provider/bookings/unassigned"
                                    class="btn btn-xs btn-inactive rounded">Unassigned</a>
                            </div>
                            <div class="mb-4 mb-lg-0">
                                <a href="/provider/bookings/past" type="button"
                                    class="btn btn-xs btn-inactive rounded">Past</a>
                            </div>
                            <div class="mb-4 mb-lg-0">
                                <a href="/provider/bookings/cancelled"
                                    class="btn btn-xs btn-inactive rounded">Cancelled</a>
                            </div>
                            <div class="mb-4 mb-lg-0">
                                <a href="/provider/bookings/invitations"
                                    class="btn btn-xs btn-inactive rounded">Invited</a>
                            </div>
                        </div>

                        <!-- Begin : show button on conditional basis -->
                        <!-- <div class="d-inline-flex align-items-center ms-auto text-end gap-4"><button type="button" class="btn btn btn-primary rounded">Calendar Sync</button></div> -->
                        <!-- End : show button on conditional basis -->

                    </div>
                    <!-- /Filters -->
                    @livewire('app.common.bookings.booking-list', ['bookingType' => 'Today\'s', 'showHeader' => false, 'isDashboard' => true])

                </div>
                {{-- <div class="tab-pane fade" id="available-assignments-pane" role="tabpanel"
                aria-labelledby="available-assignments" tabindex="0">
                <h3>Assignment List</h3>
                <!-- Buttons -->
                <div class="d-flex align-items-center gap-3 mb-4">
                    <a href="/provider/bookings/invitations" class="btn btn-inactive btn-sm rounded px-4">Assignment Invitations</a>
                    <a href="#" class="btn btn-primary btn-sm rounded px-4">Unassigned Assignments</a>
                </div>
                <!-- /Buttons -->
                <h3>Unassigned Assignments</h3>
                @livewire('app.common.bookings.booking-list', ['bookingType' => "Unassigned", 'showHeader' => false])
                
            </div> --}}
                <div class="tab-pane fade" id="map-tab-pane" role="tabpanel" aria-labelledby="map-tab"
                    tabindex="0">
                    @livewire('app.common.map')
                </div>
                <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel"
                    aria-labelledby="notifications-tab" tabindex="0">
                    @livewire('app.common.notifications')
                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN: Modal Map -->
    <div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title fs-5" id="mapModalLabel">Map</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe class="float-start"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96779.59535015929!2d-74.00126600000002!3d40.710039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1679489302803!5m2!1sen!2sus"
                        width="100%" height="570" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- END: Modal Map -->



    </div>
    <style>
        .tab-content>.active {
            display: contents !important;
        }
    </style>
</div>
