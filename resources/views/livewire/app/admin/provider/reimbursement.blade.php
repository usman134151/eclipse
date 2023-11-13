<div>
    <div x-data="{ addReimbursement: false}">
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
                        <h1 class="content-header-title float-start mb-0">Reimbursements</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard"
                                        aria-label="Go to Dashboard">
                                        {{-- Updated by Shanila to Add svg icon--}}
                                        <svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                        Provider
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                        Reimbursements
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 mb-md-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <p>Here you can manage your providers' reimbursements for each
                                                    assignment they work. Once approved, reimbursements will appear in
                                                    the provider's payroll in "Remittances."</p>
                                                <!-- BEGIN: Filters -->
                                                <div class="bg-muted rounded p-4 mb-1">
                                                    <div class="d-lg-flex gap-5 align-items-center mb-4">
                                                        <div class="mb-4 mb-lg-0">
                                                            <label class="form-label-sm" for="search-column">Search</label>
                                                            <div class="d-flex gap-2 align-items-center">
                                                                <div class="position-relative">
                                                                    <input type="text"
                                                                        class="form-control form-control-md is-search"
                                                                         aria-describedby="search"
                                                                        placeholder="Provider Name or Email" id="search-column">
                                                                    {{-- Updated by Shanila to Add
                                                                    svg icon--}}
                                                                    <svg aria-label="search"
                                                                        class="icon-search position-absolute"
                                                                        viewBox="0 0 1024 1024" version="1.1">
                                                                        <use xlink:href="/css/common-icons.svg#cancel">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila
                                                                    --}}
                                                                </div>
                                                                <button
                                                                    class="btn btn-secondary rounded btn-sm btn-hs-icon">
                                                                    {{-- Updated by Shanila to Add
                                                                    svg icon--}}
                                                                    <svg aria-label="search" width="22" height="20"
                                                                        viewBox="0 0 22 20">
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
                                                                    <input class="form-check-input" type="radio"
                                                                        name="dateRange" id="booking">
                                                                    <label class="form-check-label-sm" for="booking">
                                                                        Booking
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="dateRange" id="issued">
                                                                    <label class="form-check-label-sm" for="issued">
                                                                        Issued
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="dateRange" id="piad">
                                                                    <label class="form-check-label-sm" for="piad">
                                                                        Piad
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                                                                {{-- Updated by Shanila to Add
                                                                svg icon--}}
                                                                <svg aria-label="input-calender"
                                                                    class="icon-date md left cursor-pointer" width="20"
                                                                    height="20" viewBox="0 0 20 20">
                                                                    <use
                                                                        xlink:href="/css/common-icons.svg#input-calender">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila
                                                                --}}
                                                                <input type=""
                                                                    class="form-control form-control-md js-single-date"
                                                                    placeholder="MM/DD/YYYY" name="selectDate"
                                                                    aria-label="Select Date">
                                                            </div>
                                                        </div>
                                                        <div class="mb-4 mb-lg-0">
                                                            <label class="form-label-sm" for="review-status-column">
                                                                Review Status
                                                            </label>
                                                            <select class="select2 form-select form-select-md"
                                                                id="review-status-column">
                                                                <option>Pending</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-4 mb-lg-0">
                                                            <label class="form-label-sm" for="payment-status-column">
                                                                Payment Status
                                                            </label>
                                                            <select class="select2 form-select form-select-md"
                                                                id="payment-status-column">
                                                                <option>Pending</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <x-advancefilters />
                                                </div>
                                                <!-- END: Filters -->
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="select-all-providers" id="select-all-providers">
                                                    <label class="form-check-label fw-semibold"
                                                        for="select-all-providers">
                                                        Select All Providers
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-4">
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-primary dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                        <svg aria-label="Export" width="23" height="26"
                                                            viewBox="0 0 23 26">
                                                            <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 text-end mb-4">
                                                <a @click="addReimbursement = true" class="btn btn-primary rounded ">
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <svg class="mx-2" aria-label="Add Reimbursement" width="20" height="20" viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#plus">
                                                        </use>
                                                    </svg>
                                                    {{-- End of update by Shanila --}}
                                                    Add Reimbursement
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-2">
                                    <div class="d-inline-flex align-items-center gap-4">
                                        <label for="show_records_number" class="form-label">Show</label>
                                        <select class="form-select" id="show_records_number">
                                            <option>10</option>
                                            <option>15</option>
                                            <option>20</option>
                                            <option>25</option>
                                        </select>
                                    </div>
                                    <div class="d-inline-flex align-items-center gap-4">
                                        <label for="search" class="form-label fw-semibold">Search</label>
                                        <input type="search" class="form-control" id="search" name="search"
                                            placeholder="Search here" autocomplete="on" />
                                    </div>
                                </div>
                                <div class="table-responsive mb-2">
                                    <table id="remittances" class="table table-hover" aria-label="Remittance">
                                        <thead>
                                            <tr role="row">
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="" name="" type="checkbox"
                                                            tabindex="" aria-label="checkbox">
                                                    </div>
                                                </th>
                                                <th scope="col">BOOKING ID</th>
                                                <th scope="col">Provider</th>
                                                <th scope="col">REASON DOCUMENT</th>
                                                <th scope="col">AMOUNT</th>
                                                <th scope="col">Review Status</th>
                                                <th scope="col">Issued Paid</th>
                                                <th scope="col">Payment method </th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($reimbursementData as  $index => $reimbursement)
                                            <tr role="row" class="odd">
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                                    </div>
                                                </td>
                                                <td><a @click="offcanvasOpen = true">{{$reimbursement["booking_number"]}}<br />{{
                                                        date_format(date_create($reimbursement['booking_start_at']), 'm/d/Y') }} <br>
                                                        {{ $reimbursement['booking_start_at'] ? date_format(date_create($reimbursement['booking_start_at']), 'h:i
                                                        A') : 'N/A' }} to {{ $reimbursement['booking_end_at'] ?
                                                        date_format(date_create($reimbursement['booking_end_at']), 'h:i A') : 'N/A' }}</p></a></td>
                                                <td>
                                                    <div class="row g-2">
                                                        <div class="col-md-3">
                                                            
                                                            @if ($reimbursement['provider_profilePic']!= null)
                                                                <img src={{$reimbursement['provider_profilePic']}} class="img-fluid rounded-circle"
                                                                    alt="Provider Profile Image">
                                                            @else
                                                                <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle"
                                                                    alt="Provider Profile Image">
                                                            @endif
                                                        </div>
                                                        <div class="col-md-9">
                                                            <h6 class="fw-semibold">{{$reimbursement['provider_name']}}</h6>
                                                            <p>{{$reimbursement['provider_email']}}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Fuel Expenses<br>
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    <button wire:click="downloadFile({{ $index }})" class="btn btn-link">
                                                        <svg class="mx-2" aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
                                                    </button>
                                                    
                                                    {{-- End of update by Shanila --}}
                                                </td>
                                                <td>{{$reimbursement['amount']}}</td>
                                                <td>{{$reimbursement['review_status']}}</td>
                                                <td>{{ $reimbursement['issued_at'] ? date_format(date_create($reimbursement['issued_at']), 'm/d/Y') : 'N/A' }} <br> 
                                                {{ $reimbursement['paid_at'] ? date_format(date_create($reimbursement['paid_at']), 'm/d/Y') : 'N/A' }}</td>
                                                <td>{{$reimbursement['payment_method']}}</td>
                                                <td>
                                                    <div class="d-flex actions">
                                                        <a href="javascript:void(0)" title="Edit" aria-label="Edit"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg title="Edit" width="20" height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#pencil">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="javascript:void(0)" title="Check" aria-label="Check"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                                            data-bs-target="#reimbursementReview">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="Check" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#check">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="javascript:void(0)" title="cross" aria-label="cross"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                                            data-bs-target="#denyReimbursement">
                                                            {{-- Updated by Shanila to Add svg icon--}}
                                                            <svg aria-label="cancel" width="20" height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#cross">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>    
                                            @empty
                                                No Data
                                            @endforelse
                                            
                                        </tbody>
                                    </table>
                                </div>

                                {{-- <div class="d-flex flex-column flex-md-row justify-content-between">
                                    <div>
                                        <p class="fw-semibold">Showing 1 to 5 of 30 entries</p>
                                    </div>
                                    <nav aria-label="Page Navigation">
                                        <ul class="pagination justify-content-start justify-content-lg-end">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">Previous
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">Next
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div> --}}
                                {{-- icon legend bar start --}}
                                <div class="d-flex actions gap-3 justify-content-md-end mb-2">
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" title="Edit Provider" aria-label="Edit Provider"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                           {{-- Updated by Shanila to Add svg icon--}}
                                           <svg title="Edit Provider" width="20" height="20" viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#pencil">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        </a>
                                        <span class="text-sm">
                                            Edit Provider
                                        </span>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" title="approve" aria-label="approve"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                           {{-- Updated by Shanila to Add svg icon--}}
                                           <svg aria-label="approve" width="22" height="20" viewBox="0 0 22 20">
                                            <use xlink:href="/css/common-icons.svg#check">
                                            </use>
                                        </svg>
                                        {{-- End of update by Shanila --}}
                                        </a>
                                        <span class="text-sm">
                                            Approve </span>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" title="cross" aria-label="cross "
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            {{-- Updated by Shanila to Add svg icon--}}
                                            <svg aria-label=" Deny " width="20" height="20" viewBox="0 0 20 20">
                                                <use xlink:href="/css/common-icons.svg#cross">
                                                </use>
                                            </svg>
                                            {{-- End of update by Shanila --}}
                                        </a>
                                        <span class="text-sm">
                                            Deny </span>
                                    </div>
                                </div>
                                {{-- icon legend bar end --}}

                                <div class="row mt-4 mb-4">
                                    <div class="d-flex flex-column flex-lg-row justify-content-center gap-lg-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="charge-to-customer">
                                            <label class="form-check-label" for="charge-to-customer">
                                                Charge to Customer
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="exclude-notification">
                                            <label class="form-check-label" for="exclude-notification">
                                                Exclude Notification
                                            </label>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex form-actions flex-lg-row flex-column justify-content-center gap-2">
                                        <a href="#" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#reimbursementReview">Approve Reimbursement</a>
                                        <button type="button"  class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target="#denyReimbursement">Decline Reimburement</button>
                                    </div>
                                </div>
                            </div><!-- END: Card Body -->
                        </div>
                    </div>
                </div>
            </section>
            @include('panels.common.add-reimbursement')
        </div>
        <!-- Basic Floating Label Form section end -->
        @include('modals.common.deny-reimbursement')
        @include('modals.common.reimbursement-review')
    </div>
    <script>
        function updateVal(attrName,val){

            Livewire.emit('updateVal', attrName, val);

        }
    </script>
