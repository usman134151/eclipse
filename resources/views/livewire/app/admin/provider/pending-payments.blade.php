<div>
    <div x-data="{ payment :false }">
        <div id="loader-section" class="loader-section" wire:loading>
            <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                <div class="spinner-border" role="status" aria-live="polite">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">
                            Payment Manager
                        </h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        Provider
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Payment Manager
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
                        <p>Here you can view and manage your providers' remittance payments according to your payment
                            cycle.</p>
                        <div class="mb-4">
                            <img src="/html-prototype/images/temp/img-placeholder-pending-payment.png" class="img-fluid"
                                alt="Responsive image">
                        </div>
                        <!-- BEGIN: Filters -->
                        <div class="bg-muted rounded p-4 mb-1">
                            <div class="d-lg-flex gap-5 align-items-center mb-4">
                                <div class="mb-4 mb-lg-0">
                                    <label class="form-label-sm">Search</label>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="position-relative">
                                            <input type="text" class="form-control form-control-md is-search"
                                                id="search" aria-describedby="search"
                                                placeholder="Provider Name or Email">
                                            {{-- Updated by Shanila to Add
                                            svg icon--}}
                                            <svg aria-label="search" class="icon-search position-absolute"
                                                viewBox="0 0 1024 1024" version="1.1">
                                                <use xlink:href="/css/common-icons.svg#cancel">
                                                </use>
                                            </svg>
                                            {{-- End of update by Shanila
                                            --}}
                                        </div>
                                        <button class="btn btn-secondary rounded btn-sm btn-hs-icon">
                                            {{-- Updated by Shanila to Add
                                            svg icon--}}
                                            <svg aria-label="search" width="22" height="20" viewBox="0 0 22 20">
                                                <use xlink:href="/css/common-icons.svg#search">
                                                </use>
                                            </svg>
                                            {{-- End of update by Shanila
                                            --}}
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-4 mb-lg-0">
                                    <label class="form-label-sm">Date Range</label>
                                    <div class="d-md-flex gap-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dateRange" id="issued">
                                            <label class="form-check-label-sm" for="issued">
                                                Issued
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dateRange"
                                                id="scheduledPayment">
                                            <label class="form-check-label-sm" for="scheduledPayment">
                                                Scheduled Payment
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="dateRange" id="piad">
                                            <label class="form-check-label-sm" for="piad">
                                                Paid
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">

                                        {{-- Updated by Shanila to Add
                                        svg icon--}}
                                        <svg aria-label="input-calender" class="icon-date md left cursor-pointer"
                                            width="20" height="20" viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#input-calender">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila
                                        --}}
                                        <input type="" class="form-control form-control-md js-single-date"
                                            placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
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
                            <x-advancefilters />
                        </div>
                        <!-- END: Filters -->
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-2">
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
                        <div class="dropdown">

                            <button class="btn btn-outline-primary dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{-- Updated by Shanila to Add svg icon--}}
                                <svg aria-label="Export" width="23" height="26" viewBox="0 0 23 26">
                                    <use xlink:href="/css/common-icons.svg#document-dropdown">
                                    </use>
                                </svg>
                                {{-- End of update by Shanila --}}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
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
                                            <th scope="col" class="text-center align-middle">Preferred Payment Method
                                            </th>
                                            <th class="text-center align-middle">Chat</th>
                                            <th class="text-center align-middle">
                                                {{-- Updated by Shanila to Add svg icon--}}
                                                <svg aria-label="More" width="12" height="15" viewBox="0 0 12 15"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#right-arrow-blue">
                                                    </use>
                                                </svg>
                                                {{-- End of update by Shanila --}}
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
                                                            src="/tenant/images/portrait/small/avatar-s-24.jpg"
                                                            class="rounded-circle" alt="Image">
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="font-family-secondary leading-none">Wade Dave</div>
                                                        <a href="#"
                                                            class="font-family-secondary"><small>wadedave@gmail.com</small></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                $00.00
                                            </td>
                                            <td class="text-center align-middle">
                                                3
                                            </td>
                                            <td class="text-center align-middle">
                                                Direct Deposit
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Chat" aria-label="Chat"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Chat" width="18" height="18"
                                                            viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/common-icons.svg#chat-icon">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="javascript:void(0)" @click="payment = true" title="Booking"
                                                        aria-label="Booking" class="btn btn-hs-icon p-0">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="More" class="fill-stroke" width="12"
                                                            height="15" class="" viewBox="0 0 12 15">
                                                            <use xlink:href="/css/common-icons.svg#right-gray-arrows">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
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
                                                        <div class="font-family-secondary leading-none">Dori Griffiths
                                                        </div>
                                                        <a href="#"
                                                            class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                $00.00
                                            </td>
                                            <td class="text-center align-middle">
                                                3
                                            </td>
                                            <td class="text-center align-middle">
                                                Direct Deposit
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Chat" aria-label="Chat"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Chat" width="18" height="18"
                                                            viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/common-icons.svg#chat-icon">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="javascript:void(0)" @click="payment = true" title="Booking"
                                                        aria-label="Booking" class="btn btn-hs-icon p-0">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="More" class="fill-stroke" width="12"
                                                            height="15" class="" viewBox="0 0 12 15">
                                                            <use xlink:href="/css/common-icons.svg#right-gray-arrows">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
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
                                                            src="/tenant/images/portrait/small/avatar-s-24.jpg"
                                                            class="rounded-circle" alt="Image">
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="font-family-secondary leading-none">Wade Dave</div>
                                                        <a href="#"
                                                            class="font-family-secondary"><small>wadedave@gmail.com</small></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                $00.00
                                            </td>
                                            <td class="text-center align-middle">
                                                3
                                            </td>
                                            <td class="text-center align-middle">
                                                Direct Deposit
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Chat" aria-label="Chat"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Chat" width="18" height="18"
                                                            viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/common-icons.svg#chat-icon">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="javascript:void(0)" @click="payment = true" title="Booking"
                                                        aria-label="Booking" class="btn btn-hs-icon p-0">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="More" class="fill-stroke" width="12"
                                                            height="15" class="" viewBox="0 0 12 15">
                                                            <use xlink:href="/css/common-icons.svg#right-gray-arrows">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
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
                                                        <div class="font-family-secondary leading-none">Dori Griffiths
                                                        </div>
                                                        <a href="#"
                                                            class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                $00.00
                                            </td>
                                            <td class="text-center align-middle">
                                                3
                                            </td>
                                            <td class="text-center align-middle">
                                                Direct Deposit
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Chat" aria-label="Chat"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Chat" width="18" height="18"
                                                            viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/common-icons.svg#chat-icon">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="javascript:void(0)" @click="payment = true" title="Booking"
                                                        aria-label="Booking" class="btn btn-hs-icon p-0">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="More" class="fill-stroke" width="12"
                                                            height="15" class="" viewBox="0 0 12 15">
                                                            <use xlink:href="/css/common-icons.svg#right-gray-arrows">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
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
                                                        <div class="font-family-secondary leading-none">Dori Griffiths
                                                        </div>
                                                        <a href="#"
                                                            class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                $00.00
                                            </td>
                                            <td class="text-center align-middle">
                                                3
                                            </td>
                                            <td class="text-center align-middle">
                                                Direct Deposit
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Chat" aria-label="Chat"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Chat" width="18" height="18"
                                                            viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/common-icons.svg#chat-icon">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="javascript:void(0)" @click="payment = true" title="Booking"
                                                        aria-label="Booking" class="btn btn-hs-icon p-0">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="More" class="fill-stroke" width="12"
                                                            height="15" class="" viewBox="0 0 12 15">
                                                            <use xlink:href="/css/common-icons.svg#right-gray-arrows">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
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
                                                            src="/tenant/images/portrait/small/avatar-s-24.jpg"
                                                            class="rounded-circle" alt="Image">
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="font-family-secondary leading-none">Wade Dave</div>
                                                        <a href="#"
                                                            class="font-family-secondary"><small>wadedave@gmail.com</small></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                $00.00
                                            </td>
                                            <td class="text-center align-middle">
                                                3
                                            </td>
                                            <td class="text-center align-middle">
                                                Direct Deposit
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Chat" aria-label="Chat"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Chat" width="18" height="18"
                                                            viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/common-icons.svg#chat-icon">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="javascript:void(0)" @click="payment = true" title="Booking"
                                                        aria-label="Booking" class="btn btn-hs-icon p-0">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="More" class="fill-stroke" width="12"
                                                            height="15" class="" viewBox="0 0 12 15">
                                                            <use xlink:href="/css/common-icons.svg#right-gray-arrows">
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
                        </div>
                    </div>
                    <!-- Hoverable rows end -->
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div>
                            <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100 entries
                            </p>
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
                    <!-- Icon Help -->
                    <div class="d-flex actions gap-3 justify-content-end mb-2">
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" title="Bookings" aria-label="Bookings"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon--}}
                                <svg aria-label="More" class="fill-stroke" width="12"
                                height="15" class="" viewBox="0 0 12 15">
                                <use xlink:href="/css/common-icons.svg#right-gray-arrows">
                                </use>
                            </svg>
                            {{-- End of update by Shanila --}}
                            </a>
                            <span class="text-sm">
                                Bookings
                            </span>
                        </div>

                    </div>
                    <!-- /Icon Help -->
                    <div class="justify-content-center d-flex mb-2">
                        <div class="form-check mx-auto">
                            <input class="form-check-input" type="checkbox" value="" id="ExcludeNotification">
                            <label class="form-check-label" for="ExcludeNotification">
                                Exclude Notification
                            </label>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4 ">
                        <div class="d-flex gap-3 col-lg-8 form-actions flex-lg-row flex-column">
                            <a href="#" class="btn btn-primary rounded w-100">Revert Selected Remittances</a>
                            <a href="#" class="btn btn-primary rounded w-100">Mark Selected Remittances as Paid</a>
                        </div>
                    </div>
                </div>
                <!-- Basic Floating Label Form section end -->
            </div>
            <!-- ...card-body... -->
            <!-- END: Steps -->
        </div>
        @include('panels.remittance.payment')

        {{-- /Remittance Deatil - Modal --}}
        @include('modals.remittance-details')
        {{-- /Remittance Deatil - Modal --}}

        {{-- Revert Back - Modal --}}
        @include('modals.common.revert-back')
        {{-- Revert Back - Modal --}}
        @include('modals.mark-as-paid')
    </div>
</div>
