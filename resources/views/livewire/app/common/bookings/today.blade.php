<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if ($showBookingDetails)
		@livewire('app.common.bookings.booking-details')
	@else
	{{-- BEGIN: Content --}}
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">{{ $bookingType }} Assignments</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="#">
									<x-icon name="home"/>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="javascript:void(0)">
									Assignments
								</a>
							</li>
							<li class="breadcrumb-item">
								Today's Assignments
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
				<div class="row">
					{{-- Today's Assignment --}}
					<div>
						<div class="d-lg-flex justify-content-end mb-4">
							<a href="#" class="btn btn-primary rounded btn-sm">Create Assignment</a>
						</div>
						<div class="d-flex justify-content-between mb-2">
							<div class="d-inline-flex align-items-center gap-4">
								<div class="d-inline-flex align-items-center gap-4">
									<label for="show_records_number" class="form-label-sm mb-0">
										Show
									</label>
									<select class="form-select form-select-sm" id="show_records_number">
										<option>10</option>
										<option>15</option>
										<option>20</option>
										<option>25</option>
									</select>
								</div>
								<div>
									<div class="form-check form-switch mb-lg-0">
										<input class="form-check-input" type="checkbox" role="switch" id="ManagePermissions">
										<label class="form-check-label" for="ManagePermissions">
											Manage Permissions
										</label>
									</div>
								</div>
							</div>
							<div class="d-inline-flex align-items-center gap-4">
								<label for="search" class="form-label-sm mb-0">
									Search
								</label>
								<input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on"/>
							</div>
						</div>
						{{-- Hoverable rows Start --}}
						<div class="row" id="table-hover-row">
							<div class="col-12">
								<div class="card">
									<div class="table-responsive">
										<table id="unassigned_data" class="table table-fs-md table-hover" aria-label="Today's Assignments Table">
											<thead>
												<tr role="row">
													<th scope="col" class="text-center">
														<input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
													</th>
													<th scope="col">Booking ID</th>
													<th scope="col">Accommodation</th>
													<th scope="col">Address</th>
													<th scope="col">Company</th>
													<th scope="col">Billing</th>
													<th scope="col">Status</th>
													<th scope="col" class="text-center">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td class="text-center">
														<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
													</td>
													<td wire:click="showBookingDetails">
														<a href="#">100995-6</a>
														<div>
															<div class="time-date">08/24/2022</div>
															<div class="time-date">
																9:59 AM to 4:22 PM
															</div>
														</div>
													</td>
													<td>
														<div>Shelby Sign Language</div>
														<div>Shelby Sign Language</div>
														<div>Service: Language interpreting</div>
													</td>
													<td>
														<div class="badge bg-warning mb-1">
															Teleconference
														</div>
														<div>292332811 - Code 2131</div>
													</td>
													<td>
														<div>Demo Company</div>
														<div>No. of Providers: 5</div>
													</td>
													<td>$100</td>
													<td>
														<div class="d-flex align-items-center gap-1">
															<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512">
																<path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/>
															</svg>
															Unassigned
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="pencil"/>
															</a>
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="assign-provider"/>
															</a>
															<div class="dropdown ac-cstm">
																<a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																  </svg>
																</a>
																<div class="tablediv dropdown-menu fadeIn">
																  <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
																  <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
																  <a title="Manage Assigned Providers" aria-label="Manage Assigned Providers" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Manage Assigned Providers</a>
																  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
																  <a title="Message Provider Team" aria-label="Message Provider Team" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Provider Team</a> 
																  <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
																	<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	  <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																	Cancel
																  </a>
																</div>
															  </div>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td class="text-center">
														<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
													</td>
													<td wire:click="showBookingDetails">
														<a href="#">100995-6</a>
														<div>
															<div class="time-date">08/24/2022</div>
															<div class="time-date">
																9:59 AM to 4:22 PM
															</div>
														</div>
													</td>
													<td>
														<div>Shelby Sign Language</div>
														<div>Shelby Sign Language</div>
														<div>Service: Language interpreting</div>
													</td>
													<td>
														<div class="badge bg-warning mb-1">
															Teleconference
														</div>
														<div>292332811 - Code 2131</div>
													</td>
													<td>
														<div>Demo Company</div>
														<div>No. of Providers: 5</div>
													</td>
													<td>$100</td>
													<td>
														<div class="d-flex align-items-center gap-1">
															<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512">
																<path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/>
															</svg>
															Unassigned
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="pencil"/>
															</a>
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="assign-provider"/>
															</a>
															<div class="dropdown ac-cstm">
																<a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																  </svg>
																</a>
																<div class="tablediv dropdown-menu fadeIn">
																  <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
																  <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
																  <a title="Manage Assigned Providers" aria-label="Manage Assigned Providers" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Manage Assigned Providers</a>
																  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
																  <a title="Message Provider Team" aria-label="Message Provider Team" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Provider Team</a> 
																  <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
																	<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	  <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																	Cancel
																  </a>
																</div>
															  </div>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td class="text-center">
														<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
													</td>
													<td wire:click="showBookingDetails">
														<a href="#">100995-6</a>
														<div>
															<div class="time-date">08/24/2022</div>
															<div class="time-date">
																9:59 AM to 4:22 PM
															</div>
														</div>
													</td>
													<td>
														<div>Shelby Sign Language</div>
														<div>Shelby Sign Language</div>
														<div>Service: Language interpreting</div>
													</td>
													<td>
														<div class="badge bg-warning mb-1">
															Teleconference
														</div>
														<div>292332811 - Code 2131</div>
													</td>
													<td>
														<div>Demo Company</div>
														<div>No. of Providers: 5</div>
													</td>
													<td>$100</td>
													<td>
														<div class="d-flex align-items-center gap-1">
															<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512">
																<path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/>
															</svg>
															Unassigned
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="pencil"/>
															</a>
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="assign-provider"/>
															</a>
															<div class="dropdown ac-cstm">
																<a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																  </svg>
																</a>
																<div class="tablediv dropdown-menu fadeIn">
																  <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
																  <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
																  <a title="Manage Assigned Providers" aria-label="Manage Assigned Providers" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Manage Assigned Providers</a>
																  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
																  <a title="Message Provider Team" aria-label="Message Provider Team" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Provider Team</a> 
																  <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
																	<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	  <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																	Cancel
																  </a>
																</div>
															  </div>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td class="text-center">
														<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
													</td>
													<td wire:click="showBookingDetails">
														<a href="#">100995-6</a>
														<div>
															<div class="time-date">08/24/2022</div>
															<div class="time-date">
																9:59 AM to 4:22 PM
															</div>
														</div>
													</td>
													<td>
														<div>Shelby Sign Language</div>
														<div>Shelby Sign Language</div>
														<div>Service: Language interpreting</div>
													</td>
													<td>
														<div class="badge bg-warning mb-1">
															Teleconference
														</div>
														<div>292332811 - Code 2131</div>
													</td>
													<td>
														<div>Demo Company</div>
														<div>No. of Providers: 5</div>
													</td>
													<td>$100</td>
													<td>
														<div class="d-flex align-items-center gap-1">
															<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512">
																<path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/>
															</svg>
															Unassigned
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="pencil"/>
															</a>
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="assign-provider"/>
															</a>
															<div class="dropdown ac-cstm">
																<a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																  </svg>
																</a>
																<div class="tablediv dropdown-menu fadeIn">
																  <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
																  <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
																  <a title="Manage Assigned Providers" aria-label="Manage Assigned Providers" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Manage Assigned Providers</a>
																  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
																  <a title="Message Provider Team" aria-label="Message Provider Team" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Provider Team</a> 
																  <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
																	<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	  <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																	Cancel
																  </a>
																</div>
															  </div>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td class="text-center">
														<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
													</td>
													<td wire:click="showBookingDetails">
														<a href="#">100995-6</a>
														<div>
															<div class="time-date">08/24/2022</div>
															<div class="time-date">
																9:59 AM to 4:22 PM
															</div>
														</div>
													</td>
													<td>
														<div>Shelby Sign Language</div>
														<div>Shelby Sign Language</div>
														<div>Service: Language interpreting</div>
													</td>
													<td>
														<div class="badge bg-warning mb-1">
															Teleconference
														</div>
														<div>292332811 - Code 2131</div>
													</td>
													<td>
														<div>Demo Company</div>
														<div>No. of Providers: 5</div>
													</td>
													<td>$100</td>
													<td>
														<div class="d-flex align-items-center gap-1">
															<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512">
																<path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/>
															</svg>
															Unassigned
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="pencil"/>
															</a>
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="assign-provider"/>
															</a>
															<div class="dropdown ac-cstm">
																<a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																  </svg>
																</a>
																<div class="tablediv dropdown-menu fadeIn">
																  <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
																  <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
																  <a title="Manage Assigned Providers" aria-label="Manage Assigned Providers" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Manage Assigned Providers</a>
																  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
																  <a title="Message Provider Team" aria-label="Message Provider Team" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Provider Team</a> 
																  <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
																	<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	  <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																	Cancel
																  </a>
																</div>
															  </div>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td class="text-center">
														<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
													</td>
													<td wire:click="showBookingDetails">
														<a href="#">100995-6</a>
														<div>
															<div class="time-date">08/24/2022</div>
															<div class="time-date">
																9:59 AM to 4:22 PM
															</div>
														</div>
													</td>
													<td>
														<div>Shelby Sign Language</div>
														<div>Shelby Sign Language</div>
														<div>Service: Language interpreting</div>
													</td>
													<td>
														<div class="badge bg-warning mb-1">
															Teleconference
														</div>
														<div>292332811 - Code 2131</div>
													</td>
													<td>
														<div>Demo Company</div>
														<div>No. of Providers: 5</div>
													</td>
													<td>$100</td>
													<td>
														<div class="d-flex align-items-center gap-1">
															<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512">
																<path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/>
															</svg>
															Unassigned
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="pencil"/>
															</a>
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="assign-provider"/>
															</a>
															<div class="dropdown ac-cstm">
																<a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																  </svg>
																</a>
																<div class="tablediv dropdown-menu fadeIn">
																  <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
																  <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
																  <a title="Manage Assigned Providers" aria-label="Manage Assigned Providers" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Manage Assigned Providers</a>
																  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
																  <a title="Message Provider Team" aria-label="Message Provider Team" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Provider Team</a> 
																  <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
																	<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	  <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																	Cancel
																  </a>
																</div>
															  </div>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td class="text-center">
														<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
													</td>
													<td wire:click="showBookingDetails">
														<a href="#">100995-6</a>
														<div>
															<div class="time-date">08/24/2022</div>
															<div class="time-date">
																9:59 AM to 4:22 PM
															</div>
														</div>
													</td>
													<td>
														<div>Shelby Sign Language</div>
														<div>Shelby Sign Language</div>
														<div>Service: Language interpreting</div>
													</td>
													<td>
														<div class="badge bg-warning mb-1">
															Teleconference
														</div>
														<div>292332811 - Code 2131</div>
													</td>
													<td>
														<div>Demo Company</div>
														<div>No. of Providers: 5</div>
													</td>
													<td>$100</td>
													<td>
														<div class="d-flex align-items-center gap-1">
															<svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512">
																<path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/>
															</svg>
															Unassigned
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="pencil"/>
															</a>
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name="assign-provider"/>
															</a>
															<div class="dropdown ac-cstm">
																<a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																  </svg>
																</a>
																<div class="tablediv dropdown-menu fadeIn">
																  <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
																  <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
																  <a title="Manage Assigned Providers" aria-label="Manage Assigned Providers" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Manage Assigned Providers</a>
																  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
																  <a title="Message Provider Team" aria-label="Message Provider Team" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Provider Team</a> 
																  <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
																	<svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																	  <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																	Cancel
																  </a>
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
					</div>
					{{-- Today's Assignments End --}}
				</div>
			</div>
		</div>
	</div>
	@endif
</div>
{{-- End: Content --}}