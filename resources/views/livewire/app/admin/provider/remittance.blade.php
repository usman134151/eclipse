<div x-data="{ remittanceGeneratorBooking: false, issueRemittance: false, addNewPayment: false }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Remittance Generator
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    Provider
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Remittance Generator
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <div class="mb-4">
                    <p>Here you will manage your Providers' payment based on the assignments they work. Select the
                        bookings you wish to include on the remittance and when remittances are ready, issue one or all
                        remittances to the respective Providers. Once issued, you can manage remittance payments from
                        "Payment Manager."</p>
                    <!-- BEGIN: Filters -->
                    <div class="bg-muted rounded p-4 mb-1">
                        <div class="d-lg-flex gap-5 align-items-center mb-4">
                            <div class="mb-4 mb-lg-0">
                                <label class="form-label-sm">Search</label>
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control-md is-search" id="search" aria-describedby="search" placeholder="Provider Name or Email">
                                        <x-icon name="cancel"/>
                                    </div>
                                    <button class="btn btn-secondary rounded btn-sm btn-hs-icon">
                                        <x-icon name="search"/>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-4 mb-lg-0">
                                <label class="form-label-sm">Date Range</label>
                                <div class="d-md-flex gap-2" >
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dateRange" id="issued">
                                        <label class="form-check-label-sm" for="issued">
                                        Issued
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dateRange" id="scheduledPayment">
                                        <label class="form-check-label-sm" for="scheduledPayment">
                                        Scheduled_Payment
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dateRange" id="piad">
                                        <label class="form-check-label-sm" for="piad">
                                        Piad
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                                    <x-icon name="input-calender"/>
                                    <input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
                                </div>
                            </div>
                            <div class="mb-4 mb-lg-0">
                                <label class="form-label-sm" for="payment-status-column">
                                Payment Status
                                </label>
                                <select class="select2 form-select form-select-md" id="payment-status-column">
                                    <option>Pending</option>
                                </select>
                            </div>

                        </div>
                        <x-advancefilters/>
                    </div>
                    <!-- END: Filters -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="SelectAllProviders">
                        <label class="form-check-label" for="SelectAllProviders">
                            Select All Providers
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-md-between justify-content-center mb-2 gap-2 align-items-center">
                    <div class="d-inline-flex align-items-center gap-4">
                        <div class="d-inline-flex align-items-center gap-4">
                            <label for="show_records_number" class="form-label-sm mb-0">Show</label>
                            <select class="form-select form-select-sm" id="show_records_number">
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0)" @click="addNewPayment = true"
                            class="btn btn-primary btn-sm px-4 btn-has-icon rounded">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                    fill="white"></path>
                            </svg>
                            Add Payment
                        </a>
                    </div>
                </div>
                <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="table-responsive border mb-4">
                            <table id="" class="table table-fs-md table-hover" aria-label="">
                                <thead>
                                    <tr role="row">
                                        <th scope="col" class="text-center align-middle">
                                            <input class="form-check-input" type="checkbox" value=""
                                                aria-label="Select All Teams">
                                        </th>
                                        <th scope="col" class="align-middle">Provider</th>
                                        <th scope="col">Total pending</th>
                                        <th scope="col" class="text-center align-middle">No. of invoices</th>
                                        <th scope="col" class="text-center align-middle">Pending Bookings</th>
                                        <th scope="col" class="text-center align-middle">Preferred Payment Method</th>
                                        <th class="text-center align-middle">Chat</th>
                                        <th class="text-center align-middle">
                                            <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.875 1L10.75 7.5L5.875 14" stroke="white"
                                                    stroke-width="1.625" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M1 1L5.875 7.5L1 14" stroke="white" stroke-width="1.625"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="text-center align-middle">
                                            <input class="form-check-input" type="checkbox" value=""
                                                aria-label="Select Team">
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img width="50" height="50"
                                                        src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="rounded-circle" alt="Image">
                                                </div>
                                                <div class="pt-2">
                                                    <div class="font-family-secondary leading-none">Dori Griffiths</div>
                                                    <a href="#"
                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            $00.00
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            Direct Deposit
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="#" title="Chat" aria-label="Chat"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z"
                                                            fill="black" />
                                                        <path
                                                            d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z"
                                                            fill="black" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="javascript:void(0)" @click="remittanceGeneratorBooking = true"
                                                    title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                                    <svg class="fill-stroke" width="12" height="15" class=""
                                                        viewBox="0 0 12 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.875 1L10.75 7.5L5.875 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M1 1L5.875 7.5L1 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="text-center align-middle">
                                            <input class="form-check-input" type="checkbox" value=""
                                                aria-label="Select Team">
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img width="50" height="50"
                                                        src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="rounded-circle" alt="Image">
                                                </div>
                                                <div class="pt-2">
                                                    <div class="font-family-secondary leading-none">Dori Griffiths</div>
                                                    <a href="#"
                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            $00.00
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            Direct Deposit
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="#" title="Chat" aria-label="Chat"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z"
                                                            fill="black" />
                                                        <path
                                                            d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z"
                                                            fill="black" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="javascript:void(0)" @click="remittanceGeneratorBooking = true"
                                                    title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                                    <svg class="fill-stroke" width="12" height="15" class=""
                                                        viewBox="0 0 12 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.875 1L10.75 7.5L5.875 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M1 1L5.875 7.5L1 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="text-center align-middle">
                                            <input class="form-check-input" type="checkbox" value=""
                                                aria-label="Select Team">
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img width="50" height="50"
                                                        src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="rounded-circle" alt="Image">
                                                </div>
                                                <div class="pt-2">
                                                    <div class="font-family-secondary leading-none">Dori Griffiths</div>
                                                    <a href="#"
                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            $00.00
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            Direct Deposit
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="#" title="Chat" aria-label="Chat"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z"
                                                            fill="black" />
                                                        <path
                                                            d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z"
                                                            fill="black" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="javascript:void(0)" @click="remittanceGeneratorBooking = true"
                                                    title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                                    <svg class="fill-stroke" width="12" height="15" class=""
                                                        viewBox="0 0 12 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.875 1L10.75 7.5L5.875 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M1 1L5.875 7.5L1 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="text-center align-middle">
                                            <input class="form-check-input" type="checkbox" value=""
                                                aria-label="Select Team">
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img width="50" height="50"
                                                        src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="rounded-circle" alt="Image">
                                                </div>
                                                <div class="pt-2">
                                                    <div class="font-family-secondary leading-none">Dori Griffiths</div>
                                                    <a href="#"
                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            $00.00
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            Direct Deposit
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="#" title="Chat" aria-label="Chat"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z"
                                                            fill="black" />
                                                        <path
                                                            d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z"
                                                            fill="black" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="javascript:void(0)" @click="remittanceGeneratorBooking = true"
                                                    title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                                    <svg class="fill-stroke" width="12" height="15" class=""
                                                        viewBox="0 0 12 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.875 1L10.75 7.5L5.875 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M1 1L5.875 7.5L1 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="text-center align-middle">
                                            <input class="form-check-input" type="checkbox" value=""
                                                aria-label="Select Team">
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img width="50" height="50"
                                                        src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="rounded-circle" alt="Image">
                                                </div>
                                                <div class="pt-2">
                                                    <div class="font-family-secondary leading-none">Dori Griffiths</div>
                                                    <a href="#"
                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            $00.00
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            Direct Deposit
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="#" title="Chat" aria-label="Chat"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z"
                                                            fill="black" />
                                                        <path
                                                            d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z"
                                                            fill="black" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="javascript:void(0)" @click="remittanceGeneratorBooking = true"
                                                    title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                                    <svg class="fill-stroke" width="12" height="15" class=""
                                                        viewBox="0 0 12 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.875 1L10.75 7.5L5.875 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M1 1L5.875 7.5L1 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="text-center align-middle">
                                            <input class="form-check-input" type="checkbox" value=""
                                                aria-label="Select Team">
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex gap-2 align-items-center">
                                                <div>
                                                    <img width="50" height="50"
                                                        src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="rounded-circle" alt="Image">
                                                </div>
                                                <div class="pt-2">
                                                    <div class="font-family-secondary leading-none">Dori Griffiths</div>
                                                    <a href="#"
                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            $00.00
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            10
                                        </td>
                                        <td class="text-center align-middle">
                                            Direct Deposit
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="#" title="Chat" aria-label="Chat"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z"
                                                            fill="black" />
                                                        <path
                                                            d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z"
                                                            fill="black" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <div class="d-flex actions justify-content-center">
                                                <a href="javascript:void(0)" @click="remittanceGeneratorBooking = true"
                                                    title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                                    <svg class="fill-stroke" width="12" height="15" class=""
                                                        viewBox="0 0 12 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5.875 1L10.75 7.5L5.875 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M1 1L5.875 7.5L1 14" stroke="black"
                                                            stroke-width="1.625" stroke-linecap="round"
                                                            stroke-linejoin="round" />
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

                <!-- Hoverable rows end -->
                <div class="d-flex flex-column flex-md-row justify-content-between">
                    <div>
                        <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100 entries</p>
                    </div>
                    <nav aria-label="Page Navigation">
                        <ul class="pagination justify-content-start justify-content-lg-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{-- icon legend bar start --}}
                <div class="d-flex actions gap-3 justify-content-md-end mb-2">
                    <div class="d-flex gap-2 align-items-center">
                        <a href="#" title="Edit Provider" aria-label="Edit Provider"
                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg class="fill-stroke" width="12" height="15" class="" viewBox="0 0 12 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.875 1L10.75 7.5L5.875 14" stroke="black" stroke-width="1.625"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 1L5.875 7.5L1 14" stroke="black" stroke-width="1.625" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                        <span class="text-sm">
                            Booking
                        </span>
                    </div>
                </div>
                {{-- icon legend bar end --}}
                <div class="row justify-content-center mb-2">
                    <div class="col-lg-4">
                        <a href="#" class="btn btn-primary rounded w-100">Issue All Selected Remittances</a>
                    </div>
                </div>
                <div class="justify-content-center d-flex mb-4">
                    <div class="form-check mx-auto">
                        <input class="form-check-input" type="checkbox" value="" id="ExcludeNotification">
                        <label class="form-check-label" for="ExcludeNotification">
                            Exclude Notification
                        </label>
                    </div>
                </div>
            </div>
            <!-- Basic Floating Label Form section end -->
        </div>
        <!-- ...card-body... -->
        <!-- END: Steps -->
    </div>
    @include('panels.remittance.remittance-generator-booking')
    @include('panels.remittance.issue-remittance')
    @include('panels.remittance.add-new-payment')
</div>
