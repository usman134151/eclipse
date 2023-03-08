<div x-data="{ createInvoices:false, invoiceGeneratorbookings:false }">
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">
						Invoice Generator
					</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="/" title="Go to Dashboard" aria-label="Go to Dashboard">
									<x-icon name="home"/>
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
							Here you will manage your Providers' payment based on the assignments they work. Select the bookings you wish to include on the remittance and when remittances are ready, issue one or all remittances to the respective Providers. Once issued, you can manage remittance payments from "Payment Manager."
						</p>
						<div class="bg-muted rounded p-4 mb-1">
							<div class="d-flex gap-5 align-items-center">
								<div class="mb-4 mb-lg-0">
									<label for="search-provider" class="form-label-sm">
										Search
									</label>
									<div class="d-flex gap-2 align-items-center">
										<div class="position-relative">
											<input type="text" class="form-control form-control-md is-search" id="search-provider" aria-describedby="search" placeholder="Provider Name or Email">
											<svg class="icon-search position-absolute" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
												<path d="M290 323.515733a25.6 25.6 0 1 1 36.181334-36.181333l408.234666 408.234667a25.6 25.6 0 1 1-36.181333 36.181333l-408.234667-408.234667z" fill="#ffffff" />
												<path d="M320.365867 731.7504a25.6 25.6 0 1 1-36.181334-36.181333l408.234667-408.234667a25.6 25.6 0 1 1 36.181333 36.181333l-408.234666 408.234667z" fill="#ffffff" />
											</svg>
										</div>
										<button aria-label="Search" class="btn btn-secondary rounded btn-sm btn-hs-icon">
											<svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.0043 14.977C18.5005 14.5284 18.01 14.0669 17.5336 13.593C17.1334 13.215 16.8924 12.94 16.8924 12.94L13.88 11.603C15.086 10.3316 15.7517 8.69499 15.752 7C15.752 3.141 12.3738 0 8.22098 0C4.06815 0 0.689941 3.141 0.689941 7C0.689941 10.859 4.06815 14 8.22098 14C10.1177 14 11.8466 13.34 13.1732 12.261L14.6116 15.061C14.6116 15.061 14.9075 15.285 15.3141 15.657C15.7305 16.02 16.2781 16.511 16.8031 17.024L18.2641 18.416L18.914 19.062L21.1959 16.941L20.5009 16.337C20.0931 15.965 19.5487 15.471 19.0043 14.977V14.977ZM8.22098 12C5.25482 12 2.84167 9.757 2.84167 7C2.84167 4.243 5.25482 2 8.22098 2C11.1871 2 13.6003 4.243 13.6003 7C13.6003 9.757 11.1871 12 8.22098 12Z" fill="black"/>
											</svg>
										</button>
									</div>
								</div>
								<div class="mb-4 mb-lg-0">
									<label class="form-label-sm">Date Range</label>
									<div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
										<svg class="icon-date md left cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
										</svg>
										<input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
									</div>
								</div>
								<div class="mb-4 mb-lg-0">
									<label class="form-label-sm">Scheduled Payment</label>
									<div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
										<svg class="icon-date md left cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
										</svg>
										<input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
									</div>
								</div>
								<div class="d-flex gap-3 align-items-center">
									<div class="mb-4 mb-lg-0">
										<select class="form-select form-select-sm rounded bg-secondary text-white rounded" aria-label="Advance Filter" id="show_status">
											<option>Advance Filter</option>
										</select>
									</div>
									<div class="mb-4 mb-lg-0">
										<button type="button" class="btn btn-xs bg-white btn-outline-dark rounded">
											Clear all
										</button>
									</div>
								</div>
							</div>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="SelectAllProviders">
							<label class="form-check-label" for="SelectAllProviders">
								Select All Providers
							</label>
						</div>
					</div>
					<div class="d-flex justify-content-between mb-2">
						<div class="d-inline-flex align-items-center gap-4">
							<div class="d-inline-flex align-items-center gap-4">
								<label for="show_records" class="form-label-sm mb-0">
									Show
								</label>
								<select class="form-select form-select-sm" id="show_records">
									<option>10</option>
									<option>15</option>
									<option>20</option>
									<option>25</option>
								</select>
							</div>
						</div>
						<div class="">
							<a @click="createInvoices = true" href="#" class="btn btn-primary btn-sm px-4 btn-has-icon rounded">
								<x-icon name="plus"/>
								<span>Create Invoice</span>
							</a>
						</div>
					</div>
					<div class="row" id="table-hover-row">
						<div class="col-12">
							<div class="table-responsive border mb-4">
								<table id="" class="table table-fs-md table-hover" aria-label="">
									<thead>
										<tr role="row">
											<th scope="col" class="text-center align-middle">
												<input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
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
										<tr role="row" class="{{ ($i % 2 == 0) ? 'even' : 'odd' }}">
											<td class="text-center align-middle">
												<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
											</td>
											<td class="align-middle">
												<div class="d-flex gap-2 align-items-center">
													<div>
														<img width="50" height="50" src="/tenant/images/portrait/small/image.png" class="rounded-circle" alt="Image">
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
														<x-icon name="message"/>
													</a>
												</div>
											</td>
											<td class="align-middle">
												<div class="d-flex actions justify-content-center">
													<a @click="invoiceGeneratorbookings = true" href="#" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
														<x-icon name="right-gray-arrows"/>
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
					<div class="d-flex justify-content-between">
						<div>
							<p class="fw-semibold mb-lg-0 text-sm font-family-secondary">
								Showing 1 to 5 of 100 entries
							</p>
						</div>
						<nav aria-label="Page Navigation">
							<ul class="pagination">
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
					</div>
					{{-- Icon Legend Bar - Start --}}
					<div class="d-flex actions gap-3 justify-content-end mb-2">
						<div class="d-flex gap-2 align-items-center">
							<a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
								<x-icon name="right-gray-arrows"/>
							</a>
							<span class="text-sm">
								Booking
							</span>
						</div>
					</div>
					{{-- Icon Legend Bar - End --}}
					<div class="bg-muted py-2 mb-4">
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
					</div>
				</div>
			</div>
		</section>
	</div>
	@include('panels.invoices.create-invoice')
	@include('panels.invoices.invoice-generator-bookings')
</div>
