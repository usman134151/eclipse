<div x-data="{addDocument: false}">
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">
						Department Profile
					</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="#">
									<svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
										<use xlink:href="/css/common-icons.svg#home"></use>
									</svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								All Department
							</li>
							<li class="breadcrumb-item">
								Department Details
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-body">
	@if(is_null($department))
        <div id="loader-section" class="loader-section" wire:loading>
                <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                    <div class="spinner-border" role="status" aria-live="polite">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
        @else
		<section id="multiple-column-form">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard-tab-pane" type="button" role="tab" aria-controls="dashboard-tab-pane" aria-selected="true">
										<svg aria-label="dashboard" width="31" height="29" viewBox="0 0 31 29">
                                            <use xlink:href="/css/common-icons.svg#tablet"></use>
                                        </svg>
										<span>Dashboard</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="users-tab" data-bs-toggle="tab" data-bs-target="#users-tab-pane" type="button" role="tab" aria-controls="users-tab-panel" aria-selected="false">
										<svg aria-label="Users" width="31" height="24" viewBox="0 0 31 24">
                                            <use xlink:href="/css/common-icons.svg#users"></use>
                                        </svg>
										<span>Users</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule-tab-pane" type="button" role="tab" aria-controls="schedule-tab-panel" aria-selected="false" onclick="window.dispatchEvent(new Event('resize'))">
										<svg aria-label="schedule" width="30" height="29" viewBox="0 0 30 29">
                                            <use xlink:href="/css/common-icons.svg#gray-calendar"></use>
                                        </svg>
										<span>Schedule</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="service-requests-tab" data-bs-toggle="tab" data-bs-target="#service-requests-tab-pane" type="button" role="tab" aria-controls="service-requests-tab-panel" aria-selected="false">
										<svg aria-label="service-request" width="28" height="31" viewBox="0 0 28 31">
                                            <use xlink:href="/css/common-icons.svg#gray-journal"></use>
                                        </svg>
										<span>Service Requests</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="permission-tab" data-bs-toggle="tab" data-bs-target="#drive-tab-pane" type="button" role="tab" aria-controls="drive-tab-panel" aria-selected="false">
										<svg aria-label="drive" width="35" height="30" viewBox="0 0 35 30">
                                            <use xlink:href="/css/common-icons.svg#gray-drive"></use>
                                        </svg>
										<span>Drive</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="department-feedback-tab" data-bs-toggle="tab" data-bs-target="#department-feedback-tab-pane" type="button" role="tab" aria-controls="department-feedback-tab-panel" aria-selected="false">
										<svg aria-label="feedback" width="24" height="29" viewBox="0 0 24 29">
                                            <use xlink:href="/css/common-icons.svg#gray-rated-user"></use>
                                        </svg>
										<span>Feedback</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="invoices-tab" data-bs-toggle="tab" data-bs-target="#invoices-tab-pane" type="button" role="tab" aria-controls="invoices-tab-panel" aria-selected="false">
										<svg aria-label="invoices" width="29" height="31" viewBox="0 0 29 31">
                                            <use xlink:href="/css/common-icons.svg#gray-invoice"></use>
                                        </svg>
										<span>Invoices</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments-tab-pane" type="button" role="tab" aria-controls="payments-tab-panel" aria-selected="false">
										<svg aria-label="payments" width="27" height="31" viewBox="0 0 27 31">
                                            <use xlink:href="/css/common-icons.svg#gray-payment"></use>
                                        </svg>
										<span>Payments</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="referrals-tab" data-bs-toggle="tab" data-bs-target="#referrals-tab-pane" type="button" role="tab" aria-controls="referrals-tab-panel" aria-selected="false">
										<svg aria-label="referrals" width="27" height="29" viewBox="0 0 27 29">
                                            <use xlink:href="/css/common-icons.svg#gray-referral"></use>
                                        </svg>
										<span>Referrals</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes-tab-pane" type="button" role="tab" aria-controls="notes-tab-panel" aria-selected="false">
										<svg aria-label="notes" width="28" height="29" viewBox="0 0 28 29">
                                            <use xlink:href="/css/common-icons.svg#gray-note"></use>
                                        </svg>
										<span>Notes</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#reports-tab-pane" type="button" role="tab" aria-controls="reports-tab-panel" aria-selected="false">
										<svg aria-label="reports" width="30" height="28" viewBox="0 0 30 28">
                                            <use xlink:href="/css/common-icons.svg#gray-bar-chart"></use>
                                        </svg>
										<span>Reports</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab" aria-controls="notifications-tab-panel" aria-selected="false">
										<svg aria-label="notifications" width="26" height="29" viewBox="0 0 26 29">
                                            <use xlink:href="/css/common-icons.svg#gray-bell"></use>
                                        </svg>
										<span>Notifications</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log-tab-pane" type="button" role="tab" aria-controls="log-tab-panel" aria-selected="false">
										<svg aria-label="logs" width="27" height="27" viewBox="0 0 27 27">
                                            <use xlink:href="/css/common-icons.svg#gray-log"></use>
                                        </svg>
										<span>Log</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button wire:click="$emit('getRecord',{{$schedule->id}},true)" class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane" type="button" role="tab" aria-controls="settings-tab-panel" aria-selected="false">
										<svg aria-label="Log" width="26" height="27" viewBox="0 0 26 27" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-cog"></use>
                                        </svg>
										<span>Settings</span>
									</button>
								</li>
							</ul>

							<div class="tab-content" id="myTabContent">
								{{-- Dashboard Tab - Start --}}
								<div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
									<div class="col-md-12 mb-md-2 mt-5">
										<div class="row mt-2 mb-5">
											<div class="col-md-5 me-5">
												<div class="mb-4">
													<div class="row">
														<div class="col-md-4">
															<div class="d-inline-block position-relative profile-pic-div">
																<img  src="{{$department->department_logo !=null ? $department->department_logo : '/tenant-resources/images/portrait/small/image4.png'}}"
                                                                     class="img-fluid rounded-circle" alt="Department Image"/>
															</div>
															<div style="margin-left: -1rem;" class="d-inline-block position-relative mt-3">
																<svg width="156" height="32" viewBox="0 0 156 32" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M0 0H133L156 32H0V0Z" fill="url(#paint0_linear_2265_83025)"/>
																	<defs>
																		<linearGradient id="paint0_linear_2265_83025" x1="78" y1="0" x2="140.587" y2="0" gradientUnits="userSpaceOnUse">
																			<stop stop-color="#213969"/>
																			<stop offset="1" stop-color="#204387"/>
																		</linearGradient>
																	</defs>
																</svg>
																<div class="position-absolute bottom-0 p-0 d-flex justify-content-center align-items-center">
																	<label class="text-white form-label-sm ps-2" for="">
																		  @if (count($department->addresses) > 0)

                                                                                        {{ $department->addresses->first()->city ?? '' }},
                                                                                        {{ $department->addresses->first()->country ?? '' }}
                                                                                @else
                                                                                    N/A
                                                                                @endif
																	</label>
																</div>
															</div>
														</div>

														<div class="col-md-7 ms-4">
                                                            <div>
                                                                <h3 class="font-family-tertiary fw-medium">
																{{$department['name']}}
                                                                </h3>
                                                                <span>{{$department->company->name}}</span>
                                                            </div>
															<div class="row mb-4">
																<div class="col-md-12">
																	<div class="row mb-1">
																		<div class="col-md-12">
																			<p class="font-family-tertiary">
																			@foreach($department->phones as $phone)
																					@if($phone->phone_number)
																					<p>{{$phone->phone_title}} : {{$phone->phone_number}}<p>
																					@else
																					N/A
																					@endif
																			@endforeach</p>
																		</div>
																	</div>
																	@if($department->department_website)
																	<div class="row">
																		<div class="col-md-12">
																			<a href="{{$department->department_website}}" target="_blank" ><p class="font-family-tertiary">
																				{{$department->department_website}} </p>
																			</a>
																		</div>
																	</div>
																	@endif
																	<div class="row">
																		<div class="col-md-12">
																			<p class="font-family-tertiary">
 																				@if (count($department->addresses) > 0)
                                                                                     @foreach ($department->addresses as $address)
                                                                                         <p>
                                                                                        {{ $address->address_line1 ?? '' }}
                                                                                        {{ $address->address_line2 ?? '' }}
                                                                                        {{ $address->city ?? '' }}
                                                                                        {{ $address->state ?? '' }}
                                                                                        {{ $address->zip ?? '' }}
                                                                                        {{ $address->country ?? '' }}
                                                                                    </p>
                                                                                     @endforeach
                                                                                     @else
                                                                                     <p>N/A</p>
                                                                                @endif
																			</p>
																		</div>
																	</div>
																	
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row mb-4 ms-3">
													<div class="col-md-12 mt-4">
														<div class="row mb-3">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Department Supervisors:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<a href="#" class="font-family-secondary">
																	@if(count($department->supervisors))
																	 @foreach($department->supervisors as $key=>$supervisor)
                                                                            <a href="{{route('tenant.customer-profile',['customerID'=>encrypt($supervisor->id)])}}"> {{$supervisor->name}} </a>
                                                                             @if($key != count($department->supervisors)-1) , @endif

                                                                        @endforeach
																	@else
																		N/A
																	@endif

																	</a>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Provider Experience:
																		
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		<svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#filled-star"></use>
                                                                    </svg>
																	<svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#filled-star"></use>
                                                                    </svg>
																	<svg width="18" height="16" viewBox="0 0 18 16" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#filled-star"></use>
                                                                    </svg>
																	<svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#star"></use>
                                                                    </svg>
																	<svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#star"></use>
                                                                    </svg>
																	<small>(coming soon)</small>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Users:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		{{count($department->users)}}
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Completed Requests:
																		
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		50 Hours
																		<small>(coming soon)</small>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Open Requests:
																		
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		80 Hours
																		<small>(coming soon)</small>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Total Invoiced:
																		
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		$192892.00
																		<small>(coming soon)</small>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Total Paid:
																		
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		$84733.55
																		<small>(coming soon)</small>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Total Due:
																		
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		$2834.00
																		<small>(coming soon)</small>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Total Overdue:
																		
																		
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		$78734.00
																		<small>(coming soon)</small>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Service Start Date:
																		
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		@if($department->department_service_start_date)
																		{{date_format(date_create($department->department_service_start_date), "m/d/Y")}}
																		@else N/A @endif

																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label for="" class="col-form-label">
																		Service End Date:
																		
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		@if($department->department_service_end_date)
																		{{date_format(date_create($department->department_service_end_date), "m/d/Y")}}
																		@else N/A @endif 
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row" id="table-hover-row">
													<div class="col-12 mb-2">
														<div class="mb-0">
															<h2>Business Hours</h2>
														</div>
															<div class="card">
																@if($timeslots)

																	<div class="table-responsive">
																		<table id="unassigned_data" class="table table-hover"
																			aria-label="Business Hours">
																			<thead>
																				<tr role="row">
																					<th scope="col">Days</th>
																					<th scope="col">
																						Business Hours
																					</th>
																					<th scope="col">
																						After Business Hours
																					</th>
																				</tr>
																			</thead>
																			<tbody>
																				@foreach($timeslots as $key=> $timeslot)
																					<tr role="row" class="odd">
																						<td>{{$key}}</td>
																						<td colSpan=2>
                                                                                            <div class="row">

                                                                                                @foreach($timeslot as  $slots)
                                                                                                    <div class="col-md-6">

                                                                                                    @foreach($slots as $slot)
                                                                                                            {{date('h:i A', strtotime($slot['timeslot_start_time'])) . ' to ' . date('h:i A', strtotime($slot['timeslot_end_time']))}} <br>
                                                                                                    @endforeach

                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>


                                                                                        </td>
																					</tr>
																				@endforeach
																			
																			</tbody>
																		</table>
																	</div>
																@else
																	<small>Business Hours have not be setup.</small>
																@endif
															</div>
													</div>
												</div>
												<!-- left col  -->
		                                        <div class="row">
													<div class="col-12">

														<div class="row">
															<div class="mb-3">
															<h2>Associated Tags:</h2>
															</div>
														</div>
														@if($this->department['tags'])
														@foreach($this->department['tags'] as $index=>$tag)
															@if($index%2==0)
																<div class="row ">	@endif

																<div class="col-md-4 mb-md-3">
																	<button type="button"
																	class="btn btn-outline-dark rounded w-100">{{$tag}} 
																	</button>
																</div>
																@if($index%2==1)
																</div>	@endif

														@endforeach
														@if(count($this->department['tags'])%2==1)
																</div>	@endif
														@else

														<div class="row">  <small> No Tags Available</small> </div>
														@endif
		                                             
		                                         	</div>
												</div>
											</div>
											<div class="col-md-12 mb-md-2 text-center gap-2 mt-4">
												<button type="button" wire:click='lockAccount' class="d-inline-flex align-items-center btn btn-outline-dark rounded px-3 py-2 gap-2">
													<span> @if($this->department->status)
                                                            Lock Account
                                                        @else
                                                            Unlock Account
                                                        @endif</span>
												</button>
												<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
													<span>Resend Welcome Email</span>
												</button>
											</div>
										</div>
									</div>
								</div>
								{{-- Dashboard Tab - End --}}

								{{-- Schedule Tab - Start --}}
								<div class="tab-pane fade" id="schedule-tab-pane" role="tabpanel" aria-labelledby="schedule-tab" tabindex="0">
									<div class="row mb-4">
										<h3>Schedule 
											{{-- <small>(coming soon)</small> --}}
										</h3>
									</div>
									<div>
										{{-- <x-advancefilters/>
                                        <img  class="w-100" alt="Schedule Calendar" src="/tenant-resources/images/portrait/small/image-placeholder-calendar.png" /> --}}
										@livewire('app.common.calendar',['companyProfile' => true, 'department_id' => $department['id'] , 'user_id'=>$department['company_id'] ])

									</div>
								</div>
								{{-- Schedule Tab - End --}}

								{{-- Users Tab - Start --}}
								<div class="tab-pane fade" id="users-tab-pane" role="tabpanel" aria-labelledby="users-tab-tab" tabindex="0">
									<div class="row mb-3">
										<h2>Department Users</h2>
									</div>
									<div class="d-flex justify-content-end mt-4 mb-3"></div>
									{{-- <div class="d-flex justify-content-between mb-2">
										<div class="d-inline-flex align-items-center gap-4">
											<label for="show_records_number" class="form-label">
												Show
											</label>
											<select class="form-select" id="show_records_number">
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
											</select>
										</div>
										<div class="d-inline-flex align-items-center gap-4">
											<label for="search" class="form-label fw-semibold">
												Search
											</label>
											<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
										</div>
									</div> --}}
									<div class="card">

        									@livewire('app.common.department-users',['departmentId'=>$department->id,'departmentLabel'=>$department->name])

										{{-- <div class="table-responsive">
											<table id="unassigned_data" class="table table-hover" aria-label="Department Table">
												<thead>
													<tr role="row">
														<th scope="col" class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select All Departments">
														</th>
														<th scope="col">User</th>
														<th scope="col">Phone Number</th>
														<th scope="col" class="text-center">
															Position
														</th>
														<th scope="col" class="text-center">
															Status
														</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Department ">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img class="img-fluid rounded-circle" src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" />
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
														<td class="text-center">Developer</td>
														<td class="text-center">Inactive</td>
														<td>
															<div class="d-flex actions">
																<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20"fill="none"
                                                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                                                     </svg>
																</a>
																<a href="javascript:void(0)" title="Message" aria-label="Message" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg class="fill" width="20" height="20" viewBox="0 0 20 20"fill="none"
                                                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#message"></use>
                                                                     </svg>
																</a>
                                                                <a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
																		<use
																			xlink:href="/css/common-icons.svg#recycle-bin">
																		</use>
																	</svg>
																</a>
															</div>
														</td>
													</tr>
												
												</tbody>
											</table>
										</div> --}}
										{{-- <div class="d-flex justify-content-between m-4">
											<div>
												<p class="fw-semibold">
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
										</div> --}}
                                        {{-- <div class="d-flex actions gap-3 justify-content-end mb-2">
												<div class="d-flex gap-2 align-items-center">
												<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
													<svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20"fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
													</svg>
												</a>
												<span class="text-sm">
													View
												</span>
												</div>
												<div class="d-flex gap-2 align-items-center">
													<a href="#" title="Message" aria-label="Message" class="btn btn-sm btn-secondary rounded btn-hs-icon">
														<svg class="fill" width="20" height="20" viewBox="0 0 20 20"fill="none"
															xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#message"></use>
														</svg>
													</a>
													<span class="text-sm">
														Message
													</span>
												</div>
												<div class="d-flex gap-2 align-items-center">
												<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
													<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
														<use
															xlink:href="/css/common-icons.svg#recycle-bin">
														</use>
													</svg>
												</a>
												<span class="text-sm">
													Delete
												</span>
												</div>

                                        </div> --}}
									</div>
								</div>
								{{-- Users Tab - End --}}

								{{-- Drive Tab - Start --}}
								<div class="tab-pane fade" id="drive-tab-pane" role="tabpanel" aria-labelledby="drive-tab" tabindex="0">
									<div class="row">
                                      	<h3> Drive</h3>
                                        <p>Here you can manage department required documents. You will receive notifications when your credentials are approaching expiration or have expired.</p>
									</div>
                                    @livewire('app.common.forms.drive-uploads',['showForm'=>false,'showSearch'=>true,'record_id'=>$department['id'],'record_type'=>4])

								</div>
								{{-- Drive Tab -End --}}

								{{-- Feedback Tab - Start --}}
								<div class="tab-pane fade" id="department-feedback-tab-pane" role="tabpanel" aria-labelledby="department-feedback-tab" tabindex="0">
									<div class="row mb-4">
										<h3>Feedback <small>(coming soon)</small></h3>
									</div>
									<div class="row mb-4 mb-5">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												<svg aria-label="Export" class="fill" width="23" height="26" viewBox="0 0 23 26"fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#export-dropdown"></use>
                                                </svg>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="#">
														Action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Another action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Something else here
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="row mb-2">
										<div class="col-md-2">
											<div class="d-inline-flex">
												<label for="show_records_number" class="form-label mt-1">
													Show
												</label>
												<select class="form-select py-2 ms-2" id="show_records_number">
													<option selected>5</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
												</select>
											</div>
										</div>

										<div class="col-md-6">
											<button class="btn btn-primary rounded">
												Feedback Received
											</button>
											<button class="btn btn-inactive rounded">
												Feedback Given
											</button>
										</div>
										<div class="col-md-3">
											<div class="d-inline-flex align-items-center ">
												<label for="search" class="form-label fw-semibold mt-1">
													Search
												</label>
												<input type="search" class="form-control py-2 ms-2" id="search" name="search" placeholder="Search here" autocomplete="on"/>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="table-responsive">
											<table id="unassigned_data" class="table table-hover" aria-label="Department Table">
												<thead>
													<tr role="row">
														<th scope="col" class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select All Departments">
														</th>
														<th scope="col">Customer</th>
														<th scope="col">Provider</th>
														<th scope="col">Feedback</th>
														<th scope="col" >Stars</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Medical
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Ramon Miles
																	</h6>
																	<p>ramonmiles@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg width="23" height="20" viewBox="0 0 23 20">
                                                                        <use xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit Company" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Medical
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Ramon Miles
																	</h6>
																	<p>ramonmiles@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg width="23" height="20" viewBox="0 0 23 20">
                                                                        <use xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit Company" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Medical
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Ramon Miles
																	</h6>
																	<p>ramonmiles@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg width="23" height="20" viewBox="0 0 23 20">
                                                                        <use xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit Company" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Medical
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Ramon Miles
																	</h6>
																	<p>ramonmiles@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg width="23" height="20" viewBox="0 0 23 20">
                                                                        <use xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit Company" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select">
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Medical
																	</h6>
																	<p>dorigriffit@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															<div class="row g-2">
																<div class="col-md-2">
																	<img src="/tenant-resources/images/portrait/small/avatar-s-21.jpg" class="img-fluid rounded-circle" alt="Provider Image">
																</div>
																<div class="col-md-10">
																	<h6 class="fw-semibold">
																		Ramon Miles
																	</h6>
																	<p>ramonmiles@gmail.com</p>
																</div>
															</div>
														</td>
														<td>
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="18" height="16" viewBox="0 0 18 16">
																		<use
																			xlink:href="/css/common-icons.svg#filled-star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																	<svg aria-label="rating" width="17" height="16" viewBox="0 0 17 16">
																		<use
																			xlink:href="/css/common-icons.svg#star">
																		</use>
																	</svg>
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg width="23" height="20" viewBox="0 0 23 20">
                                                                        <use xlink:href="/css/common-icons.svg#hide-icon">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#pencil">
                                                                        </use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                        </use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="d-flex justify-content-between m-4">
											<div>
												<p class="fw-semibold">
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
                                        <div class="d-flex actions gap-3 justify-content-end mb-2">
											<div class="d-flex gap-2 align-items-center">
											  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
												<svg width="23" height="20" viewBox="0 0 23 20">
													<use xlink:href="/css/common-icons.svg#hide-icon">
													</use>
												</svg>
											  </a>
											  <span class="text-sm">
												Hide
											  </span>
											</div>
											<div class="d-flex gap-2 align-items-center">
											  <a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
												<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
													<use xlink:href="/css/common-icons.svg#pencil">
													</use>
												</svg>
											  </a>
											  <span class="text-sm">
												Edit
											  </span>
											</div>
											<div class="d-flex gap-2 align-items-center">
											  <a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
												<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
													<use
														xlink:href="/css/common-icons.svg#recycle-bin">
													</use>
												</svg>
											  </a>
											  <span class="text-sm">
												Delete
											  </span>
											</div>
										  </div>
									</div>
								</div>
								{{-- Feedback Tab - End --}}

								{{-- Invoices Tab - Start --}}
                                {{-- Updated by Shanila to fix remove Two search bars are added and edit name of heading add placeholder in date range input  --}}
								<div class="tab-pane fade" id="invoices-tab-pane" role="tabpanel" aria-labelledby="invoices-tab" tabindex="0">
									<h3>
										Department Invoices 
									</h3>
									@livewire('app.common.lists.customer-invoices', ['filter_department' => $department->id])
									<!--
									<div class="col-md-12 d-flex col-12 gap-4 mb-4">

										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="set_set_date" >
													Date Range
												</label>
												<div class="d-flex gap-3">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="flexRadioDefault" id="Issued" >
														<label class="form-check-label" for="Issued">
															Issued
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="flexRadioDefault" id="Due">
														<label class="form-check-label" for="Due">
															Due
														</label>
													</div>
												</div>
												<div class="position-relative">
													<input type="" name="" class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
													<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
                                                    </svg>
												</div>
											</div>
                                            {{-- End of update by Shanila --}}
										</div>
									</div>
									<div class="row mb-4 mb-4">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												<svg aria-label="Export" class="fill" width="23" height="26" viewBox="0 0 23 26"fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#export-dropdown"></use>
                                                </svg>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="#">
														Action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Another action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Something else here
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-2">
										<div class="d-inline-flex align-items-center gap-4">
											<label for="show_records_number" class="form-label">
												Show
											</label>
											<select class="form-select" id="show_records_number">
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
											</select>
										</div>
										<div class="d-inline-flex align-items-center gap-4">
											<label for="search" class="form-label fw-semibold">
												Search
											</label>
											<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
										</div>
									</div>
									<div class="table-responses">
										<table id="remittances" class="table table-hover" aria-label="Remittance">
											<thead>
												<tr role="row">
													<th scope="col">
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="checkbox">
														</div>
													</th>
													<th scope="col">Invoice</th>
													<th scope="col">Recipient(s)</th>
													<th scope="col">Po. No</th>
													<th scope="col">Total Amount</th>
													<th scope="col">PDF</th>
													<th scope="col">Payment Method</th>
													<th scope="col">Payment Status</th>
													<th class="text-center" scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                          </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                         </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                         </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
												       </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                         </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                         </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                         </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
												       </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                              </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a @click="offcanvasOpen = true">
															87109
														</a>
														<p class="mt-1">
															08/24/2022
														</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Information Technology
																</h6>
																<p>www.software.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                       </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                </svg> 
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
																</svg>
															</a>
															<a href="#" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="d-flex justify-content-between m-4">
										<div>
											<p class="fw-semibold">Showing 1 to 5 of 100 entries</p>
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
									-->
                                    <div class="d-flex actions gap-3 justify-content-end mb-2">
										<div class="d-flex gap-2 align-items-center">
										  <a href="#" title="Revert" aria-label="Revert" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                          </svg> 
										  </a>
										  <span class="text-sm">
											Revert
										  </span>
										</div>
										<div class="d-flex gap-2 align-items-center">
										  <a href="#" title="Record Payment" aria-label="Record Payment" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<svg width="19" height="20" viewBox="0 0 19 20" fill="none"
												xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dollar-assignment"></use>
											</svg>
										  </a>
										  <span class="text-sm">
											Record Payment
										  </span>
										</div>
										<div class="d-flex gap-2 align-items-center">
										  <a href="#" title="Download Invoice" aria-label="Download Invoice" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<svg width="16" height="20" viewBox="0 0 16 20" fill="none"
											 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
											</svg>
										  </a>
										  <span class="text-sm">
											Download Invoice
										  </span>
										</div>
									  </div>
								</div>
								{{-- Invoices Tab : End --}}

								{{-- Payments Tab - Start --}}
								<div class="tab-pane fade" id="payments-tab-pane" role="tabpanel" aria-labelledby="payments-tab" tabindex="0">
									<div class="row">
										<h3>Payments <small>(coming soon)</small></h3>
									</div>
									<div class="col-md-12 d-flex col-12 gap-4 mb-4">
										{{-- Search --}}
										<div class="col-md-3 col-12">
											<div class="mb-4">
												<label class="form-label" for="search-column">
													Search
												</label>
												<input type="text" id="search-column" class="form-control" name="search-column" placeholder="Search here" required aria-required="true"/>
											</div>
										</div>
										{{-- Date Range --}}
										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="set_set_date">
													Date Range
												</label>
												<div class="position-relative">
													<input type="" name="" class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
													<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
                                                    </svg>
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-4 mb-4">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												<svg aria-label="Export" class="fill" width="23" height="26" viewBox="0 0 23 26"fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#export-dropdown"></use>
                                                </svg>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="#">
														Action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Another action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Something else here
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-2">
										<div class="d-inline-flex align-items-center gap-4">
											<label for="show_records_number" class="form-label">
												Show
											</label>
											<select class="form-select" id="show_records_number">
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
											</select>
										</div>
									</div>
									<div class="table-responses">
										<table id="remittances" class="table table-hover" aria-label="Remittance">
											<thead>
												<tr role="row">
													<th scope="col">
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="checkbox">
														</div>
													</th>
													<th scope="col">Invoice</th>
													<th scope="col">Recipient(s)</th>
													<th scope="col">Po. No</th>
													<th scope="col">Total Amount</th>
													<th scope="col">PDF</th>
													<th scope="col">Payment Method</th>
													<th scope="col">Payment Status</th>
													<th class="text-center" scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17" fill="currentColor">
																	<use xlink:href="/css/common-icons.svg#eye-icon">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                       </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                             </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17" fill="currentColor">
																	<use xlink:href="/css/common-icons.svg#eye-icon">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17" fill="currentColor">
																	<use xlink:href="/css/common-icons.svg#eye-icon">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17">
																	<use xlink:href="/css/common-icons.svg#eye-icon" fill="currentColor">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                               </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17">
																	<use xlink:href="/css/common-icons.svg#eye-icon" fill="currentColor">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                         </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                             </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17" fill="currentColor">
																	<use xlink:href="/css/common-icons.svg#eye-icon">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                         </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                             </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17" fill="currentColor">
																	<use xlink:href="/css/common-icons.svg#eye-icon">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17" fill="currentColor">
																	<use xlink:href="/css/common-icons.svg#eye-icon">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17" fill="currentColor">
																	<use xlink:href="/css/common-icons.svg#eye-icon">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>87109</a>
														<p class="mt-1">08/24/2022</p>
													</td>
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
															</div>
															<div class="col-md-10 align-self-center">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">17837</td>
													<td class="text-center">$40.00</td>
													<td class="text-center">
														<svg aria-label="PDF"  width="17" height="21" viewBox="0 0 17 21" fill="none"
                                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
													</td>
													<td class="text-center">Direct Deposit</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                             </svg>
															<p>Paid</p>
														</div>
													</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="View" width="24" height="17" viewBox="0 0 24 17" fill="currentColor">
																	<use xlink:href="/css/common-icons.svg#eye-icon">
																	</use>
															</svg>
															</a>
															<a href="#" title="send" aria-label="send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
                                                                        <use xlink:href="/css/common-icons.svg#mapview">
                                                                        </use>
                                                                </svg>
															</a>
															 {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
                                                             <a href="#" title="edit" aria-label="edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
																<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
                                                            {{-- End of update by Shanila --}}
															<a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="d-flex justify-content-between m-4">
										<div>
											<p class="fw-semibold">Showing 1 to 5 of 100 entries</p>
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
                                    <div class="d-flex actions gap-3 justify-content-end mb-2">
										<div class="d-flex gap-2 align-items-center">
										  <a href="#" title="View Receipt" aria-label="View Receipt" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<svg title="View" width="24" height="17" viewBox="0 0 24 17" fill="currentColor">
												<use xlink:href="/css/common-icons.svg#eye-icon">
												</use>
										    </svg>
										  </a>
										  <span class="text-sm">
											View Receipt
										  </span>
										</div>
										<div class="d-flex gap-2 align-items-center">
											<a href="#" title="Send Receipt" aria-label="Send Receipt" class="btn btn-sm btn-secondary rounded btn-hs-icon">
												<svg title="Send" width="20" height="20" viewBox="0 0 20 20">
													<use xlink:href="/css/common-icons.svg#mapview">
													</use>
											</svg>
											</a>
											<span class="text-sm">
												Send Receipt
											</span>
										  </div>
										<div class="d-flex gap-2 align-items-center">
										  <a href="#" title="Edit Payment" aria-label="Edit Payment" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<svg title="Edit Company" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil">
												</use>
											</svg>
										  </a>
										  <span class="text-sm">
											Edit Payment
										  </span>
										</div>
										<div class="d-flex gap-2 align-items-center">
										  <a href="#" title="Issue Refund" aria-label="Issue Refund" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<svg class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                             </svg>
										  </a>
										  <span class="text-sm">
											Issue Refund
										  </span>
										</div>
										<div class="d-flex gap-2 align-items-center">
											<a href="#" title="Delete Payment" aria-label="Delete Payment" class="btn btn-sm btn-secondary rounded btn-hs-icon">
												<svg aria-label="Delete Company" width="21" height="21" viewBox="0 0 21 21">
													<use
														xlink:href="/css/common-icons.svg#recycle-bin">
													</use>
												</svg>
											</a>
											<span class="text-sm">
												Delete Payment
											</span>
										  </div>
									  </div>
								</div>
								{{-- Payments Tab - End --}}

								{{-- Referrals Tab - Start --}}
								<div class="tab-pane fade" id="referrals-tab-pane" role="tabpanel" aria-labelledby="referrals-tab" tabindex="0">
									<div class="row mb-4">
										<h3>Referral Code: 122YCRK <small>(coming soon)</small></h3>
									</div>
									<div class="col-md-12 d-flex col-12 gap-4 mb-4">
										{{-- Date Range --}}
										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="set_set_date">
													Date Range
												</label>
												<div class="position-relative">
													<input type="" name="" class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
													<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
                                                    </svg>
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												<svg aria-label="Export" class="fill" width="23" height="26" viewBox="0 0 23 26"fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#export-dropdown"></use>
                                                </svg>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="#">
														Action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Another action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Something else here
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-2">
										<div class="d-inline-flex align-items-center gap-4">
											<label for="show_records_number" class="form-label">
												Show
											</label>
											<select class="form-select" id="show_records_number">
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
											</select>
										</div>
										<div class="d-inline-flex align-items-center gap-4">
											<label for="search" class="form-label fw-semibold">
												Search
											</label>
											<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
										</div>
									</div>
									<div class="table-responses">
										<table id="remittances" class="table table-hover" aria-label="Remittance">
											<thead>
												<tr role="row">
													<th scope="col">Customer Name</th>
													<th scope="col">Amount</th>
													<th scope="col">Status</th>
													<th scope="col">Created At</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-1">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
															</div>
															<div class="col-md-7">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">$00.00</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12"
															height="12" viewBox="0 0 12 12">
															<use xlink:href="/css/common-icons.svg#red-dot">
															</use>
														</svg>
															<p>Pending</p>
														</div>
													</td>
													<td>10/10/2022 09:45 PM</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-1">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
															</div>
															<div class="col-md-7">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">$00.00</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                            </svg>
															<p>Approved</p>
														</div>
													</td>
													<td>10/10/2022 09:45 PM</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Customer" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-1">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
															</div>
															<div class="col-md-7">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">$00.00</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12"
															height="12" viewBox="0 0 12 12">
															<use xlink:href="/css/common-icons.svg#red-dot">
															</use>
														</svg>
															<p>Pending</p>
														</div>
													</td>
													<td>10/10/2022 09:45 PM</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Customer" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-1">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
															</div>
															<div class="col-md-7">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">$00.00</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                             </svg>
															<p>Approved</p>
														</div>
													</td>
													<td>10/10/2022 09:45 PM</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Customer" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td class="align-middle">
														<div class="row g-2">
															<div class="col-md-1">
																<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" height="350px" width="200px" class="img-fluid rounded-circle" alt="">
															</div>
															<div class="col-md-7">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td class="text-center">$00.00</td>
													<td>
														<div class="d-flex align-items-center gap-2">
															<svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                                             </svg>
															<p>Approved</p>
														</div>
													</td>
													<td>10/10/2022 09:45 PM</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Remitance Inactive" aria-label="Remitance Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Delete Customer" width="21" height="21" viewBox="0 0 21 21">
																	<use
																		xlink:href="/css/common-icons.svg#recycle-bin">
																	</use>
																</svg>
															</a>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								{{-- Referrals Tab - End --}}

								{{-- Notes Tab - Start --}}
								<div class="tab-pane fade" id="notes-tab-pane" role="tabpanel"
                                    aria-labelledby="notes-tab" tabindex="0">
                                        @livewire('app.common.forms.notes', ['showForm'=>true,'record_id' => $department->id,'record_type'=>4])
                                </div>
								{{-- Notes Tab -End --}}
                                {{-- Updated by Shanila to fix Report tab not integrated --}}
                                {{-- Report Tab start --}}
                                <div class="tab-pane fade" id="reports-tab-pane" role="tabpanel" aria-labelledby="reports-tab" tabindex="0">
									<div class="row mb-3">
										<h3>
											Reports <small>(coming soon)</small>
										</h3>
									</div>
									<div class="row mb-4">
										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="setDate">
													Date Range
												</label>
												<div class="position-relative">
													<input type="" name="" class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="">
													<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
													</svg>
												</div>
											</div>
										</div>
									</div>
									<div class="mb-4">
										<div class="d-flex justify-content-between">
											<div class="d-inline-flex align-items-center gap-4">
											  <h2>Payments</h2>
											</div>
											<div class="dropdown me-5">
												<button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
													<svg aria-label="Export" class="fill" width="23" height="26" viewBox="0 0 23 26"fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#export-dropdown"></use>
                                                   </svg>
												</button>
												<ul class="dropdown-menu">
												  <li><a class="dropdown-item" href="#">Action</a></li>
												  <li><a class="dropdown-item" href="#">Another action</a></li>
												  <li><a class="dropdown-item" href="#">Something else here</a></li>
												</ul>
											  </div>
										</div>
										<hr>
				                        <div>
											<img src="/tenant-resources/images/portrait/small/pending-payment.png" class="img-fluid" alt="Pending Payments Statistics">
										</div>
									  </div>
								</div>
								<!-- Reports Tab End-->
                                {{-- End of update by Shanila --}}
								{{-- Notifications Tab - Start --}}
								<div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab" tabindex="0">
									<div class="row">
										<h3>Notification</h3>
										<p class="mt-3">
											Here you can control how you are notified about Profile activity.
										</p>
									</div>
									<div class="mb-3">
										@livewire('app.common.settings.notifications',['model_type'=>4,'model_id'=>$department->id])
									</div>

									{{-- <div class="table-responsive">
										<table id="system-logs" class="table table-hover" aria-label="system-logs">
											<thead>
												<tr role="row">
													<th scope="col">Trigger</th>
													<th scope="col">Permission</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td>
														<p>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
														</p>
													</td>
													<td>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle" checked>
															<label class="form-check-label" for="permissions-toggle">
																Disable
															</label>
															<label class="form-check-label" for="permissions-toggle">
																Enable
															</label>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<p>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
														</p>
													</td>
													<td>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle">
															<label class="form-check-label" for="permissions-toggle">
																Disable
															</label>
															<label class="form-check-label" for="permissions-toggle">
																Enable
															</label>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<p>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
														</p>
													</td>
													<td>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle">
															<label class="form-check-label" for="permissions-toggle">
																Disable
															</label>
															<label class="form-check-label" for="permissions-toggle">
																Enable
															</label>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<p>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
														</p>
													</td>
													<td>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle" checked>
															<label class="form-check-label" for="permissions-toggle">
																Disable
															</label>
															<label class="form-check-label" for="permissions-toggle">
																Enable
															</label>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<p>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
														</p>
													</td>
													<td>
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle" checked>
															<label class="form-check-label" for="permissions-toggle">
																Disable
															</label>
															<label class="form-check-label" for="permissions-toggle">
																Enable
															</label>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div> --}}
								</div>
								{{-- Notifications Tab - End --}}

								{{-- Settings Tab - Start --}}
								<div class="tab-pane fade" id="settings-tab-pane" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
									<div >
										@if($department->id)
                                            @livewire('app.common.setup.business-hours-setup', ['model_id' => $department->id, 'model_type' => '4'])
										@endif
									</div>
									<div class="col-lg-12 form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" id="TheToggleSwitchNameWillBeHere" checked>
										<label class="form-check-label" for="TheToggleSwitchNameWillBeHere">
											Customer Billing
										</label>
										<label class="form-check-label" for="TheToggleSwitchNameWillBeHere">
											Customer Billing
										</label>
									</div>
									<div class="col-lg-12 mb-5">
										<label class="form-label" for="billingSchedule">
											Billing Schedule (Days After Invoice)
										</label>
										<p>Net</p>
										<div class="col-6 d-flex gap-2 align-items-center">
											<input class="form-control" type="" id="billingSchedule" placeholder="Enter Days">
											<span>Days</span>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col-lg-12">
											<h3>Service Agreements / Terms of Service</h3>
											<div class="row">
												<div class="col-lg-6">
													<label class="form-label" for="serviceAgreementsUpload">
														Upload File
													</label>
													<input class="form-control" type="file" id="serviceAgreementsUpload">
												</div>
												<div class="col-lg-6">
													<label class="form-label" for="serviceAgreementsURL">
														URL Link
													</label>
													<input type="" name="" class="form-control" placeholder="Enter URL link" id="serviceAgreementsURL">
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col-lg-12">
											<div class="form-check">
												<input class="form-check-input" id="attachSendQuotes" name="attachSendQuotes" type="checkbox" tabindex="" />
												<label class="form-check-label" for="attachSendQuotes">
													Attach and Send with Quotes
												</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" id="acknowledgeInitialLogin" name="acknowledgeInitialLogin" type="checkbox" tabindex="" />
												<label class="form-check-label" for="acknowledgeInitialLogin">
													Require Customer to Acknowledge on Initial Login
												</label>
											</div>
										</div>
									</div>
									<div class="col-12 form-actions">
											
											<button type="submit" class="btn btn-primary rounded px-4 py-2" wire:click.prevent="saveSchedule" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });">
												Save
											</button>
									</div>

								</div>
								{{-- Settings Tab - End --}}

								{{-- Logs Tab - Start --}}
								<div class="tab-pane fade" id="log-tab-pane" role="tabpanel" aria-labelledby="log-tab" tabindex="0">
									<div class="row mb-4">
										<h3>Logs <small>(coming soon)</small></h3>
									</div>
									<div class="row mb-4">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												<svg aria-label="Export" class="fill" width="23" height="26" viewBox="0 0 23 26"fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#export-dropdown"></use>
                                                </svg>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a class="dropdown-item" href="#">
														Action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Another action
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														Something else here
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-2">
										<div class="d-inline-flex align-items-center gap-4">
											<label for="show_records_number" class="form-label">
												Show
											</label>
											<select class="form-select" id="show_records_number">
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
											</select>
										</div>
										<div class="d-inline-flex align-items-center gap-4">
											<label for="search" class="form-label fw-semibold">
												Search
											</label>
											<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
										</div>
									</div>
									<div class="table-responsive">
										<table id="system-logs" class="table table-hover" aria-label="System Logs">
											<thead>
												<tr role="row">
													<th scope="col">Date & Time</th>
													<th scope="col">Activity</th>
													<th scope="col">IP Address</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td>11/23/2022 4:18 AM</td>
													<td>
														Specific schedule added by Alex Wonderland
													</td>
													<td>39.40.83.18</td>
												</tr>
												<tr role="row" class="even">
													<td>11/23/2022 4:18 AM</td>
													<td>
														Document deleted by Alex Wonderland
													</td>
													<td>39.40.83.18</td>
												</tr>
												<tr role="row" class="even">
													<td>11/23/2022 4:18 AM</td>
													<td>
														Specific schedule added by Alex Wonderland
													</td>
													<td>39.40.83.18</td>
												</tr>
												<tr role="row" class="odd">
													<td>11/23/2022 4:18 AM</td>
													<td>
														Specific schedule added by Alex Wonderland
													</td>
													<td>39.40.83.18</td>
												</tr>
												<tr role="row" class="even">
													<td>11/23/2022 4:18 AM</td>
													<td>
														Assignment Running Late by Alex Wonderland
													</td>
													<td>39.40.83.18</td>
												</tr>
												<tr role="row" class="odd">
													<td>11/23/2022 4:18 AM</td>
													<td>
														Specific schedule added by Alex Wonderland
													</td>
													<td>39.40.83.18</td>
												</tr>
												<tr role="row" class="even">
													<td>11/23/2022 4:18 AM</td>
													<td>
														Assignment Checked In by Alex Wonderland
													</td>
													<td>39.40.83.18</td>
												</tr>
												<tr role="row" class="odd">
													<td>11/23/2022 4:18 AM</td>
													<td>
														Specific schedule added by Alex Wonderland
													</td>
													<td>39.40.83.18</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="d-flex justify-content-between">
										<div>
											<p class="fw-semibold">
												Showing 1 to 5 of 30 entries
											</p>
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
												<li class="page-item">
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
								{{-- Logs Tab - End --}}
							</div>
						</div>
					</div>
				</div>
			</div>
            {{-- Updated by Shanila to fix Mark as paid modal not integrated --}}
            @include('modals.mark-as-paid')
            {{-- End of update by Shanila --}}
			@include('panels.common.add-document')
    		@include('modals.common.revert-back')
    		@include('panels.common.invoice-details')
		</section>
		@endif
	</div>
</div>
