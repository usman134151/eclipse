<div x-data="{ remittanceGeneratorBooking: false, issueRemittance: false, addNewPayment: false, addReimbursement: false }">
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
                <div class="between-section-segment-spacing">
                    {{-- <p>Here you will manage your Providers' payment based on the assignments they work. Select the
                        bookings you wish to include on the remittance and when remittances are ready, issue one or all
                        remittances to the respective Providers. Once issued, you can manage remittance payments from
                        "Payment Manager."</p> --}}
                    <!-- BEGIN: Filters -->
                    {{-- <div class="bg-muted rounded p-4 mb-1">
                        (Coming Soon)
                        <div class="d-lg-flex gap-5 align-items-center mb-4">
                            <div class="mb-4 mb-lg-0">
                                <label class="form-label-sm" for="search-column">Search</label>
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="position-relative">
                                        <input type="text" class="form-control form-control-md is-search"
                                            id="search-column" aria-describedby="search-column"
                                            placeholder="Provider Name or Email">
                                        <svg aria-label="Cancel" class="icon-search position-absolute" width="1024"
                                            height="1024" viewBox="0 0 1024 1024"fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/common-icons.svg#cancel"></use>
                                        </svg>
                                    </div>
                                    <button class="btn btn-secondary rounded btn-sm btn-hs-icon">
                                        <svg aria-label="Search" class="mt-2" width="20" height="28"
                                            viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/common-icons.svg#search"></use>
                                        </svg>
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
                                    <svg aria-label="Select Date" class="icon-date md left cursor-pointer"
                                        width="20" height="20" viewBox="0 0 20 20"fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="/css/common-icons.svg#input-calender"></use>
                                    </svg>
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
                    </div> --}}
                    <!-- END: Filters -->
                    <x-advancefilters type="payment-filters" :filterProviders="$filterProviders" isRemittance=true />

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="SelectAllProviders">
                        <label class="form-check-label" for="SelectAllProviders">
                            Select All Providers
                        </label>
                    </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-end mb-2 gap-2 align-items-center">

                    <div class="">
                        <a href="javascript:void(0)" @click="addNewPayment = true" wire:click="$emit('refreshPanel')"
                            class="btn btn-primary btn-sm px-4 btn-has-icon rounded">
                            <svg aria-label="Add Payment" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                    fill="white"></path>
                            </svg>
                            Add Payment
                        </a>
                        <a @click="addReimbursement = true" class="btn btn-sm btn-primary btn-has-icon rounded px-4">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                    fill="white"></path>
                            </svg>
                            Add Reimbursement
                        </a>
                    </div>
                </div>
                <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        @livewire('app.common.lists.draft-remittances', ['name_seacrh_filter' => $name_seacrh_filter,'provider_ids' => $provider_ids, 'filter_payment_method' => $filter_payment_method ])

                    </div>
                </div>


                {{-- icon legend bar start --}}
                <div class="d-flex actions gap-3 justify-content-md-end mb-2">
                    <div class="d-flex gap-2 align-items-center">
                        <a href="#" title="Edit Provider" aria-label="Edit Provider"
                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg aria-label="Bookings" class="fill-stroke" width="12" height="15"
                                viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/common-icons.svg#bookings"></use>
                            </svg>
                        </a>
                        <span class="text-sm">
                            Booking
                        </span>
                    </div>
                </div>
                {{-- icon legend bar end --}}
                <div class="row justify-content-center mb-2">
                    <div class="col-lg-4 text-center">
                        <small>(coming soon)</small>
                        <button disabled class="btn btn-primary rounded w-100">Issue All Selected Remittances</button>
                    </div>
                </div>
                {{-- <div class="justify-content-center d-flex mb-4">
                    <div class="form-check mx-auto">
                        <input class="form-check-input" type="checkbox" value="" id="Exclude-Notification">
                        <label class="form-check-label" for="Exclude-Notification">
                            Exclude Notification
                        </label>
                    </div>
                </div> --}}
            </div>
            <!-- Basic Floating Label Form section end -->
        </div>
        <!-- ...card-body... -->
        <!-- END: Steps -->

        @include('panels.remittance.remittance-generator-booking')
        @include('modals.booking-reimbursements')

        @include('panels.remittance.issue-remittance')
        @include('panels.remittance.add-new-payment')
        @include('panels.common.add-reimbursement')

        @include('modals.objection-remittance')
        @include('modals.accept-remittance')

    </div>


</div>
@push('scripts')
<script>
     function updateVal(attrName, val) {
        Livewire.emit('updateVal', attrName, val);
    }
    document.addEventListener('refreshSelects2', function(event) {
            $('.select2').select2();
            $('.select2').off('change').on('change', function(e) {
                let attrName = $(this).attr('id');
                updateVal(attrName, $(this).select2("val"));
            });
        });

        function refreshSelectsEvent() {
            $('.select2').select2();
            $('.select2').off('change').on('change', function(e) {
                let attrName = $(this).attr('id');
                updateVal(attrName, $(this).select2("val"));
            });
        }


</script>
    
@endpush