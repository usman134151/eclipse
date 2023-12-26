<div x-data="{ invoicesDetails: false, assignmentDetails: false, addReimbursement: false, step: 1 }">
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
                    <h1 class="content-header-title float-start mb-0">Invoice Generator</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23"
                                        fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">
                                    Payment
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Invoice Generator
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row mb-3 mt-3">
                <div class="col-md-11">
                    <p>
                        Here you can review your scheduled payroll based on the assignments, reimbursements, and
                        referrals you've completed during the pay period.
                    </p>
                </div>
            </div>
            <div class="col-md-12 d-flex col-12 gap-4 mb-3">
                {{-- Date Range --}}
                <div class="col-md-4 col-12">
                    <div>
                        <label class="form-label" for="set_date">
                            Date Range
                        </label>
                        <div class="position-relative">
                            <input type="" name="" class="form-control js-single-date"
                                placeholder="Jan 1, 2022 - Oct 1, 2022" id="set_date">
                            <svg aria-label="Select Date" class="icon-date right cursor-pointer" width="20"
                                height="20" viewBox="0 0 20 20"fill="none" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/common-icons.svg#input-calender"></use>
                            </svg>
                        </div>
                    </div>
                </div>
                {{-- Status --}}
                <div class="col-md-3 col-12 mx-4">
                    <div class="mb-4">
                        <label class="form-label" for="status-column">Status</label>
                        <select class="select2 form-select" id="status-column">
                            <option>Pending</option>
                        </select>
                    </div>
                </div>
            </div>
            <x-advancefilters />

            <div class="table-responsive">
                <table id="invoice-generator" class="table table-hover" aria-label="Invoice Generator">
                    <thead>
                        <tr role="row">
                            <th scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" id="check-all-bookings" name=""
                                        type="checkbox" wire:model="selectAll" tabindex=""
                                        aria-label="Select All Bookings">
                                </div>
                            </th>
                            <th scope="col">Booking id</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Accommodation</th>
                            <th scope="col" width="20%">Company Name</th>
                            <th scope="col">Total Pay</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoiceData as $booking)
                            <tr role="row" class="odd">
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input booking-checkbox" aria-label="Select Booking"
                                            id="" wire:model="selectedBookings"
                                            value="{{ $booking->booking_id }}" data-value="{{ $booking->booking_id }}"
                                            type="checkbox" tabindex="">
                                    </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                    {{ $booking->booking_number }}
                                </td>
                                <td>
                                    <div>{{ formatDate($booking->booking_start_at) }}</div>
                                    <div class="text-sm">
                                        {{ date_format(date_create($booking->booking_start_at), 'h:i A') }} To <br>
                                        {{ date_format(date_create($booking->booking_end_at), 'h:i A') }}</div>
                                </td>
                                <td>
                                    <div class="text-sm">{{ $booking->accommodation_name }}</div>
                                    <div class="text-sm">Specialization: Closed-Captioning</div>
                                    <div class="text-sm">Service: {{ $booking->service_name }}</div>
                                </td>
                                <td>
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                            <img src="{{ $booking->company && $booking->company->company_logo ? $booking->company->company_logo : '/tenant-resources/images/portrait/small/image4.png' }}"
                                                class="img-fluid rounded-circle" alt="Company Profile Image">
                                        </div>
                                        <div class="col-md-10 align-self-center">
                                            <div class="fw-semibold text-sm">
                                                {{ $booking->company ? $booking->company->name : 'N/A' }}</div>
                                            {{-- <p class="text-sm">examplecompany@gmail.com</p> --}}
                                        </div>
                                    </div>
                                </td>
                                <td>{{ numberFormat($booking->is_override_price ? $booking->override_price : $booking->total_amount) }}
                                </td>
                                <td>
                                    <div class="d-inline-flex">
                                        <div><svg aria-label="Completed" width="10" height="10"
                                                viewBox="0 0 10 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="{{ $type[$booking->status]['code'] }}"></use>
                                            </svg></div>
                                        <div class="mx-1 text-sm mt-1">{{ $type[$booking->status]['title'] }}</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex actions">
                                        <a @click="invoicesDetails = true" href="#" title="Invoice Generate"
                                            wire:click="$emit('openInvoiceDetailsPanel',[{{ $booking->booking_id }}])"
                                            aria-label="Invoice Generate"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg aria-label="Invoice Generate" width="22" height="19"
                                                viewBox="0 0 22 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="/css/provider.svg#invoice-generate"></use>
                                            </svg>
                                        </a>
                                        <a href="#" title="View" aria-label="View"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                            x-on:click="assignmentDetails = true">
                                            <svg aria-label="View" class="fill" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex flex-column flex-md-row justify-content-between">

                <div class="col-auto overflow-auto my-sm-2 my-md-0 ms-sm-0">
                    <div class="d-flex flex-lg-row align-items-center">
                        <label class="w-auto">
                            <select wire:model="limit" class="form-select form-select-sm" id="limit">
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </label>
                        <small class="ms-2 text-muted">
                            Records per page
                        </small>
                    </div>
                </div>
                {{ $invoiceData->links('livewire.app.common.bookings.booking-nav') }}
            </div>
            <!-- Icon Help -->
            <div class="d-flex actions gap-3 justify-content-end mb-2">
                <div class="d-flex gap-2 align-items-center">
                    <a href="#" title="Invoice Generate" aria-label="Invoice Generate"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/provider.svg#invoice-generate"></use>
                        </svg>
                    </a>
                    <span class="text-sm">
                        Invoice Generate
                    </span>
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <a href="#" title="View" aria-label="View"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="/css/provider.svg#view"></use>
                        </svg>
                    </a>
                    <span class="text-sm">
                        View
                    </span>
                </div>
            </div>
            <!-- /Icon Help -->
            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-primary rounded" @click="invoicesDetails = true"
                    wire:click="$emit('openInvoiceDetailsPanel',)">Generate Invoice</button>
            </div>
        </div>
    </div>
    @include('panels.provider.invoices-details')
    @include('panels.common.assignment-details')
    @include('panels.provider.add-reimbursement')
    @include('modals.common.running-late')
    @include('modals.return-assignment')


</div>
@push('scripts')
    <script>
        $('#check-all-bookings').change(function() {
            const isChecked = $(this).is(':checked');
            $('.booking-checkbox').prop('checked', isChecked);

            //update livewire variable
            var booking_ids = [];
            $('.booking-checkbox:checked').each(function() {
                const booking_id = parseFloat($(this).data('value'));
                booking_ids.push(booking_id);

            });
            @this.set('selectedBookings', booking_ids);

        });
    </script>
@endpush
