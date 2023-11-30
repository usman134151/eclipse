<div>
    <div x-data="{ payment: false }">
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
                            <img src="/tenant-resources/images/portrait/small/pending-payment.png" class="img-fluid"
                                alt="Pending Payments Statistics">
                        </div>
                        <!-- BEGIN: Filters -->
                        <div class="bg-muted rounded p-4 mb-1">
                            (Coming Soon)
                            <div class="d-lg-flex gap-5 align-items-center mb-4">
                                <div class="mb-4 mb-lg-0">
                                    <label class="form-label-sm" for="search-record">Search</label>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="position-relative">
                                            <input type="text" class="form-control form-control-md is-search"
                                                id="search-record" aria-describedby="search"
                                                placeholder="Provider Name or Email">
                                            {{-- Updated by Shanila to Add
                                            svg icon --}}
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
                                            svg icon --}}
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
                                            <input class="form-check-input" type="radio" name="dateRange"
                                                id="issued">
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
                                            <input class="form-check-input" type="radio" name="dateRange"
                                                id="piad">
                                            <label class="form-check-label-sm" for="piad">
                                                Paid
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">

                                        {{-- Updated by Shanila to Add
                                        svg icon --}}
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
                    @livewire('app.common.lists.pending-payments')
                    <!-- Icon Help -->
                    <div class="d-flex actions gap-3 justify-content-end mb-2">
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" title="Bookings" aria-label="Bookings"
                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                {{-- Updated by Shanila to Add svg icon --}}
                                <svg aria-label="More" class="fill-stroke" width="12" height="15"
                                    class="" viewBox="0 0 12 15">
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
                            <a href="#" class="btn btn-primary rounded w-100">Mark Selected Remittances as
                                Paid</a>
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
<script>
    function updateVal(attrName, val) {

        Livewire.emit('updateVal', attrName, val);

    }
</script>
