<div x-data="{ createInvoices: false, invoiceGeneratorbookings: false }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="">
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">
                            Invoice Generator
                        </h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/" title="Go to Dashboard" aria-label="Go to Dashboard">
                                        <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        Customers
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
        <div class="content-body">
            <section id="multiple-column-form">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <p>
                                Here you will manage your Providers' payment based on the assignments they work. Select
                                the
                                bookings you wish to include on the remittance and when remittances are ready, issue one
                                or
                                all remittances to the respective Providers. Once issued, you can manage remittance
                                payments
                                from "Payment Manager."
                            </p>
                            <!-- BEGIN: Filters -->
                            {{-- <div class="bg-muted rounded p-4 mb-1"> --}}

                                {{-- <div class="d-lg-flex gap-5 align-items-center mb-4">
                                    <div class="mb-4 mb-lg-0">
                                        <label class="form-label-sm">Search</label>
                                        <div class="d-flex gap-2 align-items-center">
                                            <div class="position-relative">
                                                <input type="text" class="form-control form-control-md is-search"
                                                    id="search-column" aria-label="Search" aria-describedby="search"
                                                    placeholder="Provider Name or Email">
                                                <svg aria-label="Cancel" class="icon-search position-absolute"
                                                    width="1024" height="1024" viewBox="0 0 1024 1024"fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#cancel"></use>
                                                </svg>
                                            </div>
                                            <button aria-label="Search"
                                                class="btn btn-secondary rounded btn-sm btn-hs-icon">
                                                <svg aria-label="Search" class="mt-2" width="20" height="28"
                                                    viewBox="0 0 20 28"fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#search"></use>
                                                </svg>
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

                                </div> --}}
                                {{-- <x-advancefilters wire:ignore.self type="invoice-filters" :bmanagers="$bmanagers" :setupValues="$setupValues"/> --}}
                            {{-- </div> --}}
                            <!-- END: Filters -->

                            {{-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" value=""
                                    id="SelectAllProviders">
                                <label class="form-check-label" for="SelectAllProviders">
                                    Select All Providers
                                </label>
                            </div> --}}
                        </div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-2">
                            <div class="d-inline-flex align-items-center gap-4">
                                {{-- <div class="d-inline-flex align-items-center gap-4">
								<label for="show_records" class="form-label-sm mb-0">
								Show
								</label>
								<select class="form-select form-select-sm" id="show_records">
								<option>10</option>
								<option>15</option>
								<option>20</option>
								<option>25</option>
								</select>
							</div>  --}}
                            </div>
                            {{-- <a @click="createInvoices = true" href="#" aria-label="Create Invoice"
                                class="btn btn-primary btn-has-icon rounded">
                                <svg class="mx-2" aria-label="Create Invoice" width="20" height="20"
                                    viewBox="0 0 20 20">
                                    <use xlink:href="/css/common-icons.svg#plus">
                                    </use>
                                </svg>
                                <span>Create Invoice</span>
                            </a> --}}
                        </div>
                        @livewire('app.common.lists.draft-invoices', [], key(Str::random(10)))

                        {{-- <div class="row" id="table-hover-row"> 
						<div class="col-12">
						<div class="table-responsive border mb-4">
							<table id="" class="table table-fs-md table-hover" aria-label="">
							<thead>
							<tr role="row">
							<th scope="col" class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select All Providers">
							</th>
							<th scope="col" class="align-middle">
								Provider
							</th>
							<th scope="col">Total pending</th>
							<th scope="col" class="text-center align-middle">
								No. of Bookings
							</th>
							<th scope="col" class="text-center align-middle">
								Preferred Payment Method
							</th>
							<th class="text-center align-middle">Chat</th>
							<th class="text-center align-middle">
								<svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.875 1L10.75 7.5L5.875 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1L5.875 7.5L1 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</th>
							</tr>
							</thead>
							<tbody>
							@for ($i = 1; $i <= 6; $i++)
							<tr role="row" class="{{ $i % 2 == 0 ? 'even' : 'odd' }}">
							<td class="text-center align-middle">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
							</td>
							<td class="align-middle">
								<div class="d-flex gap-2 align-items-center">
								<div>
								<img width="50" height="50" src="/tenant-resources/images/portrait/small/image.png" class="rounded-circle" alt="Company Profile Image">
								</div>
								<div class="pt-2">
								<div class="font-family-secondary leading-none">
								Example Company
								</div>
								<a href="#" class="font-family-secondary">
								<small>
									examplecompany@gmail.com
								</small>
								</a>
								</div>
								</div>
							</td>
							<td class="text-center align-middle">$00.00</td>
							<td class="text-center align-middle">10</td>
							<td class="text-center align-middle">
								Direct Deposit
							</td>
							<td class="align-middle">
								<div class="d-flex actions justify-content-center">
								<a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
								<svg aria-label="Chat" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
								<use xlink:href="/css/common-icons.svg#chat"></use>
								</svg>
								</a>
								</div>
							</td>
							<td class="align-middle">
								<div class="d-flex actions justify-content-center">
								<a @click="invoiceGeneratorbookings = true" href="#" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
								<svg aria-label="Bookings" class="fill-stroke" width="12" height="15" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<use xlink:href="/css/common-icons.svg#bookings"></use>
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
						<div class="d-flex flex-column flex-md-row justify-content-between">
						<div>
						<p class="fw-semibold mb-lg-0 text-sm font-family-secondary">
							Showing 1 to 5 of 100 entries
						</p>
						</div>
						<nav aria-label="Page Navigation">
						<ul class="pagination justify-content-start justify-content-lg-end">
							<li class="page-item">
							<a class="page-link" href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							</a>
							</li>
							<li class="page-item">
							<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item">
							<a class="page-link" href="#">2</a>
							</li>
							<li class="page-item">
							<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item active">
							<a class="page-link" href="#">4</a>
							</li>
							<li class="page-item">
							<a class="page-link" href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							</a>
							</li>
						</ul>
						</nav>
						</div> --}}
                        {{-- Icon Legend Bar - Start --}}
                        <div class="d-flex actions gap-3 justify-content-end mb-2">
                            <div class="d-flex gap-2 align-items-center">
                                <a href="#" title="Bookings" aria-label="Bookings"
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
                        {{-- Icon Legend Bar - End --}}
                        {{-- <div class="bg-muted py-2 mb-4">
                            <div class="row justify-content-start">
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-start">
                                        <div class="fw-bold text-sm mx-5">
                                            Selected Remittance Total
                                        </div>
                                        <div class="fw-bold text-sm text-lg-end mx-3">
                                            $675
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
            </section>
        </div>

        @include('panels.invoices.create-invoice')
        @include('panels.invoices.invoice-generator-bookings')
    </div>
</div>
@push('scripts')
    <script>
        function updateVal(attrName, val) {

            Livewire.emit('updateVal', attrName, val);

        }
    </script>
@endpush
