<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
		@livewire('app.common.forms.customer-form') {{-- Show Add / Edit Form --}}
	@elseif($showProfile)
		@livewire('app.common.customer-details')
	@else
	<!-- Begin : Header Section -->
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">All Customers</h1>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
										<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"/>
										</svg>
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)">
										Customers
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)" class="text-secondary">
										All Customers
									</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- End : Header Section --}}
		{{-- Basic multiple column form section Start --}}
		<section id="multiple-column-form">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 mb-md-2">
									<div class="row">
										<div class="d-flex flex-column flex-md-row justify-content-end mt-4 mb-3 gap-2">
											<button  wire:click.prevent="downloadExportFile()" type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19 12C18.7348 12 18.4804 12.1054 18.2929 12.2929C18.1054 12.4804 18 12.7348 18 13V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V13C2 12.7348 1.89464 12.4804 1.70711 12.2929C1.51957 12.1054 1.26522 12 1 12C0.734784 12 0.48043 12.1054 0.292893 12.2929C0.105357 12.4804 0 12.7348 0 13V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V13C20 12.7348 19.8946 12.4804 19.7071 12.2929C19.5196 12.1054 19.2652 12 19 12ZM9.29 13.71C9.3851 13.801 9.49725 13.8724 9.62 13.92C9.7397 13.9729 9.86913 14.0002 10 14.0002C10.1309 14.0002 10.2603 13.9729 10.38 13.92C10.5028 13.8724 10.6149 13.801 10.71 13.71L14.71 9.71C14.8983 9.5217 15.0041 9.2663 15.0041 9C15.0041 8.7337 14.8983 8.4783 14.71 8.29C14.5217 8.1017 14.2663 7.99591 14 7.99591C13.7337 7.99591 13.4783 8.1017 13.29 8.29L11 10.59V1C11 0.734784 10.8946 0.48043 10.7071 0.292893C10.5196 0.105357 10.2652 0 10 0C9.73478 0 9.48043 0.105357 9.29289 0.292893C9.10536 0.48043 9 0.734784 9 1V10.59L6.71 8.29C6.61676 8.19676 6.50607 8.1228 6.38425 8.07234C6.26243 8.02188 6.13186 7.99591 6 7.99591C5.86814 7.99591 5.73757 8.02188 5.61575 8.07234C5.49393 8.1228 5.38324 8.19676 5.29 8.29C5.19676 8.38324 5.1228 8.49393 5.07234 8.61575C5.02188 8.73757 4.99591 8.86814 4.99591 9C4.99591 9.13186 5.02188 9.26243 5.07234 9.38425C5.1228 9.50607 5.19676 9.61676 5.29 9.71L9.29 13.71Z" fill="#F8F8F8"/>
												</svg>
												<span>Download Import File</span>
											</button>
											<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19 12C18.7348 12 18.4804 12.1054 18.2929 12.2929C18.1054 12.4804 18 12.7348 18 13V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V13C2 12.7348 1.89464 12.4804 1.70711 12.2929C1.51957 12.1054 1.26522 12 1 12C0.734784 12 0.48043 12.1054 0.292893 12.2929C0.105357 12.4804 0 12.7348 0 13V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V13C20 12.7348 19.8946 12.4804 19.7071 12.2929C19.5196 12.1054 19.2652 12 19 12ZM9.29 13.71C9.3851 13.801 9.49725 13.8724 9.62 13.92C9.7397 13.9729 9.86913 14.0002 10 14.0002C10.1309 14.0002 10.2603 13.9729 10.38 13.92C10.5028 13.8724 10.6149 13.801 10.71 13.71L14.71 9.71C14.8983 9.5217 15.0041 9.2663 15.0041 9C15.0041 8.7337 14.8983 8.4783 14.71 8.29C14.5217 8.1017 14.2663 7.99591 14 7.99591C13.7337 7.99591 13.4783 8.1017 13.29 8.29L11 10.59V1C11 0.734784 10.8946 0.48043 10.7071 0.292893C10.5196 0.105357 10.2652 0 10 0C9.73478 0 9.48043 0.105357 9.29289 0.292893C9.10536 0.48043 9 0.734784 9 1V10.59L6.71 8.29C6.61676 8.19676 6.50607 8.1228 6.38425 8.07234C6.26243 8.02188 6.13186 7.99591 6 7.99591C5.86814 7.99591 5.73757 8.02188 5.61575 8.07234C5.49393 8.1228 5.38324 8.19676 5.29 8.29C5.19676 8.38324 5.1228 8.49393 5.07234 8.61575C5.02188 8.73757 4.99591 8.86814 4.99591 9C4.99591 9.13186 5.02188 9.26243 5.07234 9.38425C5.1228 9.50607 5.19676 9.61676 5.29 9.71L9.29 13.71Z" fill="#F8F8F8"/>
												</svg>
												<span>Import Customer</span>
											</button>
											<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
												</svg>
												<span>Add Customer</span>
											</button>
	
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
									<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
								</div>
							</div>
							{{-- Hoverable rows Start --}}
							<div class="row" id="table-hover-row">
								<div class="col-12">
									<div class="card">
										<div class="table-responsive">
											<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
												<thead>
													<tr role="row">
														<th scope="col" class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
														</th>
														<th scope="col">Customer</th>
														<th scope="col">Phone Number</th>
														<th scope="col">Company</th>
														<th scope="col">Schedule</th>
														<th scope="col">Role</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Dori Griffiths
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<p>(923) 023-9683</p>
														</td>
														<td class="text-center">Example Company</td>
														<td class="text-center">See Schedule</td>
														<td>Supervisor</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<x-icon name="pencil"/>
																</a>
																<a href="#" title="Edit Customer" aria-label="Edit Customer" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																	<x-icon name="view"/>
																</a>

																<div class="d-flex actions">
																	<div class="dropdown ac-cstm">
																		<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown"data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																				<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																			</svg>
																		</a>
																		<div class="tablediv dropdown-menu">
																			<a title="View customer's Invoice" aria-label="View customer's Invoice" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View customer’s invoices</a>
																			<a title="Chat" aria-label="Chat" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat</a>
																			<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
																		</div>
																	</div>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							{{-- Hoverable rows End --}}
							<div class="d-flex flex-column flex-md-row justify-content-between">
								<div>
									<p class="fw-semibold">Showing 1 to 5 of 30 entries</p>
								</div>
								<nav aria-label="Page Navigation">
									<ul class="pagination justify-content-start justify-content-lg-end">
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												Previous
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
												Next
												<span aria-hidden="true">&raquo;</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
                            {{-- icon legend bar start --}}
                            <div class="d-flex actions gap-3 justify-content-end mb-2">
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="Edit Customer" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil"/>
                                    </a>
                                    <span class="text-sm">
                                    Edit Customer
                                    </span>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="View Customer" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.2857 17.1423C15.0747 17.1423 15.7143 16.5027 15.7143 15.7137C15.7143 14.9247 15.0747 14.2852 14.2857 14.2852C13.4968 14.2852 12.8572 14.9247 12.8572 15.7137C12.8572 16.5027 13.4968 17.1423 14.2857 17.1423Z" fill="black"/>
                                        <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7748 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
                                        <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"/>
                                    </svg>
                                    </a>
                                    <span class="text-sm">
                                    View Customer
                                    </span>
                                </div>
                                </div>
                                {{-- icon legend bar end --}}
						</div>
					</div>
				</div>
			</div>
		</section>
		{{-- Basic Floating Label Form section End --}}
	</div>
	@endif
</div>
