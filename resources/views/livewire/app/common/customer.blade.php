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
			<div class="content-header-left col-md-9 col-12 mb-2">
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
										<div class="d-flex justify-content-end mt-4 mb-3 gap-2">
											<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19 12C18.7348 12 18.4804 12.1054 18.2929 12.2929C18.1054 12.4804 18 12.7348 18 13V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V13C2 12.7348 1.89464 12.4804 1.70711 12.2929C1.51957 12.1054 1.26522 12 1 12C0.734784 12 0.48043 12.1054 0.292893 12.2929C0.105357 12.4804 0 12.7348 0 13V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.7956 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V13C20 12.7348 19.8946 12.4804 19.7071 12.2929C19.5196 12.1054 19.2652 12 19 12ZM9.29 13.71C9.3851 13.801 9.49725 13.8724 9.62 13.92C9.7397 13.9729 9.86913 14.0002 10 14.0002C10.1309 14.0002 10.2603 13.9729 10.38 13.92C10.5028 13.8724 10.6149 13.801 10.71 13.71L14.71 9.71C14.8983 9.5217 15.0041 9.2663 15.0041 9C15.0041 8.7337 14.8983 8.4783 14.71 8.29C14.5217 8.1017 14.2663 7.99591 14 7.99591C13.7337 7.99591 13.4783 8.1017 13.29 8.29L11 10.59V1C11 0.734784 10.8946 0.48043 10.7071 0.292893C10.5196 0.105357 10.2652 0 10 0C9.73478 0 9.48043 0.105357 9.29289 0.292893C9.10536 0.48043 9 0.734784 9 1V10.59L6.71 8.29C6.61676 8.19676 6.50607 8.1228 6.38425 8.07234C6.26243 8.02188 6.13186 7.99591 6 7.99591C5.86814 7.99591 5.73757 8.02188 5.61575 8.07234C5.49393 8.1228 5.38324 8.19676 5.29 8.29C5.19676 8.38324 5.1228 8.49393 5.07234 8.61575C5.02188 8.73757 4.99591 8.86814 4.99591 9C4.99591 9.13186 5.02188 9.26243 5.07234 9.38425C5.1228 9.50607 5.19676 9.61676 5.29 9.71L9.29 13.71Z" fill="#F8F8F8"/>
												</svg>
												<span>Download List Format</span>
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
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-between mb-2">
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
																<a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																	<x-icon name="dropdown"/>
																</a>
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
							<div class="d-flex justify-content-between">
								<div>
									<p class="fw-semibold">Showing 1 to 5 of 30 entries</p>
								</div>
								<nav aria-label="Page Navigation">
									<ul class="pagination">
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
						</div>
					</div>
				</div>
			</div>
		</section>
		{{-- Basic Floating Label Form section End --}}
	</div>
	@endif
</div>