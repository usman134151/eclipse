<div x-data="{defaultAvailability: false, specificDateAvailability: false, pendingCredentials: false}">
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
						Provider Details
					</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
									<svg aria-label="Home" width="22" height="23"viewBox="0 0 22 23" fill="none"
                                       xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#home"></use>
                                    </svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								Providers
							</li>
							<li class="breadcrumb-item">
								Provider Details
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-body">
    @if(is_null($user))
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
							{{-- BEGAN: Provider Details --}}
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard-tab-pane" type="button" role="tab" aria-controls="dashboard-tab-pane" aria-selected="true">
										<svg aria-label="Dashboard" width="31" height="29" viewBox="0 0 31 29" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#tablet"></use>
                                        </svg>
										<span>Dashboard</span>
									</button>
								</li>
								
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="service-catalog-and-rates-tab" data-bs-toggle="tab" data-bs-target="#service-catalog-and-rates-tab-pane" type="button" role="tab" aria-controls="service-catalog-and-rates-tab-pane" aria-selected="false">
										<x-icon name="gray-referral"/>
										<span>Service Catalog & Rates</span>
									</button>
								</li>
								

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule-tab-pane" type="button" role="tab" aria-controls="schedule-tab-pane" aria-selected="false">
										<svg aria-label="Schedule" width="30" height="29" viewBox="0 0 30 29" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-calender"></use>
                                        </svg>
										<span>Schedule</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="availability-tab" data-bs-toggle="tab" data-bs-target="#availability-tab-pane" type="button" role="tab" aria-controls="availability-tab-pane" aria-selected="false">
										<svg aria-label="Availability" width="31" height="30" viewBox="0 0 31 30" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-suit-case"></use>
                                        </svg>
										<span>Availability</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="my-drive-tab" data-bs-toggle="tab" data-bs-target="#my-drive-tab-pane" type="button" role="tab" aria-controls="my-drive-tab-pane" aria-selected="false">
										<svg aria-label="My Drive" width="35" height="30" viewBox="0 0 35 30" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-drive"></use>
                                        </svg>
										<span>My Drive</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="provider-feedback-tab" data-bs-toggle="tab" data-bs-target="#provider-feedback-tab-pane" type="button" role="tab" aria-controls="provider-feedback-tab-pane" aria-selected="false">
										<svg aria-label="Feedback" width="24" height="29" viewBox="0 0 24 29" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-rated-user"></use>
                                        </svg>
										<span>Feedback</span>
									</button>
								</li>
                               

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="invoices-remittances-tab" data-bs-toggle="tab" data-bs-target="#invoices-remittances-tab-pane" type="button" role="tab" aria-controls="invoices-remittances-tab-pane" aria-selected="false">
										<svg aria-label="Invoices & Remittances" width="29" height="31" viewBox="0 0 29 31" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-invoice"></use>
                                        </svg>
										<span>Invoices & Remittances</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="payments-preferences-tab" data-bs-toggle="tab" data-bs-target="#payments-preferences-tab-pane" type="button" role="tab" aria-controls="payments-preferences-tab-pane" aria-selected="false">
										<svg aria-label="Payments & Preferences" width="27" height="31" viewBox="0 0 29 31" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-payment"></use>
                                        </svg>
										<span>Payments & Preferences</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes-tab-pane" type="button" role="tab" aria-controls="notes-tab-pane" aria-selected="false">
										<svg aria-label="Notes" width="28" height="29" viewBox="0 0 28 29" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-notes"></use>
                                        </svg>
										<span>Notes</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#reports-tab-pane" type="button" role="tab" aria-controls="reports-tab-pane" aria-selected="false">
										<svg aria-label="Reports" width="30" height="28" viewBox="0 0 30 28" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-bar-char"></use>
                                        </svg>
										<span>Reports</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab" aria-controls="notifications-tab-pane" aria-selected="false">
										<svg aria-label="Notifications" width="26" height="29" viewBox="0 0 26 29" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-bell"></use>
                                        </svg>
										<span>Notifications</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log-tab-pane" type="button" role="tab" aria-controls="log-tab-pane" aria-selected="false">
										<svg aria-label="Log" width="27" height="27" viewBox="0 0 27 27" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-log"></use>
                                        </svg>
										<span>Log</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane" type="button" role="tab" aria-controls="settings-tab-pane" aria-selected="false">
										<svg aria-label="Log" width="26" height="27" viewBox="0 0 26 27" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#gray-cog"></use>
                                        </svg>
										<span>Settings</span>
									</button>
								</li>
							</ul>

                           <div class="tab-content" id="myTabContent">
	                            <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
									<div class="col-md-12 mb-md-2 mt-5">
										<div class="row mt-2 mb-5">
											<div class="col-md-5">
												<div class="mb-5">
													<div class="row">
														<div class="col-md-6">
															<div class="d-inline-block position-relative profile-pic-div">
																<img   src="{{$user['userdetail']['profile_pic'] !=null ? $user['userdetail']['profile_pic'] : '/tenant-resources/images/portrait/small/image4.png'}}"

																 class="img-fluid" alt="Profile Image of Provider"/>
															</div>
															<div class="d-flex">

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
																	<label class="text-white form-label-sm ps-2" style="width:100%" for="">
																	@if($user['userdetail']['provider_type'])
																			{{ucwords(str_replace('_', ' ', strtolower($user['userdetail']['provider_type'])))}}
																		@else
																			N/A
																		@endif
																	</label>
																</div>
															</div>
															{{-- <div style="margin-left: -1rem; left:8rem;" class="d-inline-block position-absolute mt-3">
																<svg width="170" height="32" viewBox="0 0 170 32" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M0 0H147L170 32H0V0Z" fill="url(#paint0_linear_8719_187413)"/>
																	<defs>
																		<linearGradient id="paint0_linear_8719_187413" x1="85" y1="0" x2="153.204" y2="0" gradientUnits="userSpaceOnUse">
																			<stop stop-color="#3F64AB"/>
																			<stop offset="1" stop-color="#3F64AB" stop-opacity="0.7"/>
																		</linearGradient>
																	</defs>
																</svg>
																<div class="position-absolute bottom-0 p-0 d-flex justify-content-center align-items-center">
																		<label class="text-white form-label-sm ps-2" for="">
																		@if($user['userdetail']['provider_type'])
																			{{ucwords(str_replace('_', ' ', strtolower($user['userdetail']['provider_type'])))}}
																		@else
																			N/A
																		@endif
																		</label>
																</div>
															</div> --}}
														</div>
													</div>
														<div class="col-md-6">
															<h3> {{$user['name']}}</h3>
															<p>
															  <svg aria-label="Certified" width="30" height="30" viewBox="0 0 30 30" fill="none"
																xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#grey-tick-badge"></use>
															  </svg>
																Certified
															</p>
															<div class="mb-3">
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
															</div>
															<p>10 Feedback 3 Stars</p>
														</div>
													</div>
												</div>

												<div class="row mb-4">
													<div class="col-md-12 mt-4">
														<div class="">
															<a href="{{route('tenant.provider-edit',['providerID'=>$userid])}}" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon ms-auto">
																<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                </svg>
															</a>
														</div>
														<div class="row mb-1 mx-2">
															<div class="col-md-12 d-flex">
																<div class="col-md-4">
																	<label class="col-form-label" for="">
																		Email Address:
																	</label>
																</div>
																<div class="col-md-8 align-self-center">
																	<div class="font-family-secondary">
																		{{$user['email']}}
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1 mx-2">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="p-number">Phone Number:</label>
							                                     </div>
					                                            <div class="col-md-6 align-self-center">
											                         <div class="font-family-secondary"> {{$user['userdetail']['phone'] ? $user['userdetail']['phone'] : 'N/A'}}
																	 </div>
											                    </div>
					                                        </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                       <div class="col-md-12 d-flex">
					                                           <div class="col-md-4 "><label class="col-form-label" for="first-address">Address line 1:</label></div>
					                                            <div class="col-md-12 align-self-center"><div class="font-family-secondary">{{$user['userdetail']['address_line1'] ? $user['userdetail']['address_line1'] : 'N/A'}}</div></div>
					                                        </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                     <div class="col-md-12 d-flex">
					                                     <div class="col-md-4 "><label class="col-form-label" for="second-address">Address line 2:</label></div>
					                                     <div class="col-md-12 align-self-center"><div class="font-family-secondary">{{$user['userdetail']['address_line2'] ? $user['userdetail']['address_line2'] : "N/A"}}</div></div>
					                                     </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                      <div class="col-md-12 d-flex">
					                                      <div class="col-md-4 fw"><label class="col-form-label" for="city">City / State:</label></div>
					                                      <div class="col-md-8 align-self-center"><div class="font-family-secondary">{{$user['userdetail']['city'] ? $user['userdetail']['city'] : 'N/A'}}</div></div>
					                                      </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                      <div class="col-md-12 d-flex">
					                                      <div class="col-md-4 "><label class="col-form-label" for="zip-code">Zip Code:</label></div>
					                                      <div class="col-md-8 align-self-center"><div class="font-family-secondary">{{$user['userdetail']['zip']? $user['userdetail']['zip'] : 'N/A'}}</div></div>
					                                      </div>
					                                    </div>
					                                   <div class="row mb-1 mx-2">
					                                     <div class="col-md-12 d-flex">
					                                     <div class="col-md-4 "><label class="col-form-label" for="country">Country:</label></div>
					                                     <div class="col-md-8 align-self-center"><div class="font-family-secondary">{{$user['userdetail']['country']? $user['userdetail']['country'] : 'N/A'}}</div></div>
					                                     </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                      <div class="col-md-12 d-flex">
					                                      <div class="col-md-4 "><label class="col-form-label" for="education">Education:</label></div>
					                                      <div class="col-md-8 align-self-center"><div class="font-family-secondary">{{$user['userdetail']['education'] ? $user['userdetail']['education'] : 'N/A'}}</div></div>
					                                      </div>
					                                     </div>
					                                  <div class="row mb-1 mx-2">
					                                    <div class="col-md-12 d-flex">
					                                    <div class="col-md-4 "><label class="col-form-label" for="experience">Experience:</label></div>
					                                    <div class="col-md-8 align-self-center"><div class="font-family-secondary">{{$user['userdetail']['user_experience'] ? $user['userdetail']['user_experience'] : 'N/A'}}</div></div>
					                                    </div>
					                                  </div>
					                                 <div class="row mb-1 mx-2">
					                                   <div class="col-md-12 d-flex">
					                                   <div class="col-md-4 "><label class="col-form-label" for="s-date">Start Date:</label></div>
					                                   <div class="col-md-8 align-self-center"><div class="font-family-secondary">17/01/2023</div></div>
					                                   </div>
					                                 </div>
					                                 <div class="row mb-1 mx-2">
					                                   <div class="col-md-12 d-flex">
					                                   <div class="col-md-4 "><label class="col-form-label" for="r-code">Referral Code:</label></div>
					                                   <div class="col-md-8 align-self-center"><div class="font-family-secondary">{{$user['userdetail']['user_number']!=null ? $user['userdetail']['user_number'] : ''}}</div></div>
					                                   </div>
					                                 </div>
				                                    </div>
				                                </div>
			                               </div>
			                           <!-- right-col  -->
			                           <div class="col-md-7">
				                         <!-- ..... table s  -->
				                         <div class="row" id="table-hover-row">
				                           <div class="col-12">
				                        	 <div class="card">
				                        	   <div class="table-responsive">
											   			@if(count($accommodation_catalog))
															<!-- table one  -->
															@foreach($accommodation_catalog as $accommodation)
																@if(count($accommodation))
																	<table id="" class="table table-hover" aria-label="Accommodations and Services Table">
																		<thead>
																			<tr role="row">
																					<th class="align-middle text-nowrap" scope="col">{{$accommodation[0]['accommodation_name']}}</th>
																					<th class="text-end align-middle" scope="col">
																					{{-- Service Rate --}}
																					</th>
																					<th class="text-end align-middle col-3" scope="col">
																					<div aria-expanded="false" data-bs-toggle="collapse" href="#collapse{{ $accommodation[0]['accommodation_id']}}" role="button" aria-controls="collapse{{ $accommodation[0]['accommodation_id']}}">
																						<svg class="me-4" width="26" height="13" viewBox="0 0 26 13">
																							<use xlink:href="/css/common-icons.svg#lower-arrow-head"></use>
																						</svg>
																					</div>
																					</th>
																			</tr>
																		</thead>
																	</table>
																	<div class="collapse " id="collapse{{ $accommodation[0]['accommodation_id']}}">
																		<table id="" class="table table-hover" aria-label="{{$accommodation[0]['accommodation_name']}} Table">
																			<tbody>
																				@foreach($accommodation as $service)
																				<tr role="row">
																					<td class="align-middle">
																						<p class="text-sm">{{$service['service_name']}}</p>
																					</td>
																					<td class="align-middle">
																						{{-- <div class="d-flex text-nowrap justify-content-end gap-2 align-items-center">
																							<small>Business Rate:</small><span class="text-sm"> $10.00</span>
																						</div>
																						<div class="d-flex text-nowrap justify-content-end gap-2 align-items-center">
																							<small>After-hours Rate:</small> <span class="text-sm">$10.00</span>
																						</div> --}}
																					</td>
																					<td class="text-center align-middle ps-0" style="width:200px">
																						<div class="row">
																							<div class="col-4 align-self-center pe-0 text-end text-sm">
																							{{$service['provider_priority']}}
																							</div>
																							<div class="col-8">
																								@if($service['provider_priority'] > 0 && $service['provider_priority'] <= 33)
																									<button class="w-100 btn btn-sm btn-success px-4 fw-normal">High</button>
																								@elseif( $service['provider_priority'] > 33 && $service['provider_priority'] <= 66)
																									<button  class="w-100 btn btn-sm btn-warning px-4 fw-normal">Medium</button>
																								@else
																									<button  class="w-100 btn btn-sm btn-danger px-4 fw-normal">Low</button>
																								@endif

																							
																							</div>
																						</div>
																					</td>
																				</tr>
																				@endforeach
																				
																			</tbody>
																		</table>
																	</div>
																@endif
															@endforeach
														@endif


				                               
				                              	   </div>
				                              	 </div>
				                                 </div>
				                               </div>
			                                    	 <!-- ..... table e  -->
			                                       </div>
			                                       <!-- Assigned Teams colums (start) -->
			                                       <div class="col-md-11 d-flex mb-md-2 gap-5 mt-4 bg-light p-4 mx-3">
			                                       <div class="row mb-4 mt-3">
			                                    	<div class="col-md-6">
			                                    	  <div class="row mb-1">
													  		<small>(coming soon)</small>
			                                    		  <h2 class="text-primary">Service Statistics</h2>
			                                    		  <div class="col-md-12 d-flex">
			                                    		   <div class="col-md-8"><label class="col-form-label" for="total-hours-worked:">Total Hours Worked:</label></div>
			                                    		  <div class="col-md-5 align-self-center"><div class="font-family-secondary">170</div></div>
			                                    		  </div>
			                                    	  </div>
			                                    	  <div class="row mb-1">
			                                    		 <div class="col-md-12 d-flex">
			                                    		  <div class="col-md-8"><label class="col-form-label" for="total-hours-returned">Total Hours Returned:</label></div>
			                                    		  <div class="col-md-5 align-self-center"><div class="font-family-secondary">20</div></div>
			                                    		 </div>
			                                    	  </div>
			                                    	  <div class="row mb-1">
			                                    		 <div class="col-md-12 d-flex">
			                                    		  <div class="col-md-8"><label class="col-form-label" for="total-incidents-running-late">Total Incidents Running Late:</label></div>
			                                    		  <div class="col-md-4 align-self-center"><div class="font-family-secondary">10</div></div>
			                                    		 </div>
			                                    	  </div>
			                                    	</div>
			                                    	<div class="col-md-6">
			                                    	 <div class="row mb-1">
													  		<small>(coming soon)</small>

			                                    		 <h2 class="text-primary">Last Login:</h2>
			                                    		 <div class="col-md-12 d-flex">
			                                    		  <div class="col-md-3 "><label class="col-form-label" for="date">Date:</label></div>
			                                    		 <div class="col-md-5 align-self-center"><div class="font-family-secondary">20/10/2022</div></div>
			                                    		 </div>
			                                    	 </div>
			                                    	 <div class="row mb-1">
			                                    		<div class="col-md-12 d-flex">
			                                    		 <div class="col-md-3 "><label class="col-form-label" for="time">Time:</label></div>
			                                    		 <div class="col-md-5 align-self-center"><div class="font-family-secondary">01:34 PM</div></div>
			                                    		</div>
			                                    	 </div>
			                                    	 <div class="row mb-1">
			                                    		<div class="col-md-12 d-flex">
			                                    		 <div class="col-md-3"><label class="col-form-label" for="location">Location:</label></div>
			                                    		 <div class="col-md-10 align-self-center"><div class="font-family-secondary text-sm">Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</div></div>
			                                    		</div>
			                                    	 </div>
			                                       </div>
			                                      </div>
			                                    </div>

                                     		   <div class="col-md-12 d-flex mb-md-2 gap-5 mt-4">
                                     			 <!-- right col  -->
                                     		 <div class="col-md-6 mb-md-2">
                                     		   <div class="mb-3">
                                     			 <h2>Assigned Teams:</h2>
                                     		   </div>
                                     		   <div class="row" id="table-hover-row">
                                     			 <div class="col-12">
                                     			   <div class="card">
                                     				 <div class="table-responsive">
                                     				   <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
                                     					 <thead>
                                     					   <tr role="row">
                                     					   <th scope="col" class="text-center">#</th>
                                     					   <th scope="col">Team</th>
                                     					   <th scope="col">Action</th>
                                     					 </tr>
                                     					 </thead>
                                     					 <tbody>
															@if(count($user['teams']))
																@foreach($user['teams'] as $index=> $team)
																	<tr role="row" class="odd">
																		<td class="align-middle fw-bold">{{$index+1}}</td>
																		<td class="align-middle"> <div class="row g-2">
																		<div class="col-md-2">
																			<img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
																			</div>
																			<div class="col-md-10 align-self-center">
																			<h6 class="fw-semibold">{{$team['name']}}</h6>
																			</div>
																		</div></td>
																		<td class="align-middle">
																			<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																				<svg aria-label="Message" class="fill" width="20" height="28" viewBox="0 0 20 28" fill="none"
																				xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#message"></use>
																				</svg>
																			</a>
																		</td>
																	</tr>
																@endforeach
															@else
															 <tr>
															 	<td> <small>No Teams Assigned</small> </td>
															 </tr>
															@endif
														   </tbody>
		                                       		   </table>
		                                       		 </div>
		                                       	   </div>
		                                       	 </div>
		                                          </div>
		                                      </div>
		                                          	 <!-- left col  -->
		                                           	<div class="col-md-6 mb-md-2">
														<div class="row">
															<div class="mb-3">
															<h2>Associated Tags:</h2>
															</div>
														</div>
														@if($this->user['tags'])
														@foreach($this->user['tags'] as $index=>$tag)
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
														@if(count($this->user['tags'])%2==1)
																</div>	@endif
														@else

														<div class="row">  <small> No Tags Available</small> </div>
														@endif
		                                             
		                                         	</div>
	                                              </div>
	                                              <!-- Assigned Teams colums (end) -->
	                                              <!-- in line / side by side buttons (start) -->
	                                              <div class="col-12 form-actions mt-4">
	                                            	 <button wire:click="lockAccount" type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">

	                                            		 <span>
                                                        @if($this->user['status'])
                                                            Lock Account
                                                        @else
                                                            Unlock Account
                                                        @endif
														</span>
	                                            	 </button>
	                                            	 <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" data-bs-toggle="modal" data-bs-target="#changePasswordModal">

	                                            		 <span>Reset Provider Password</span>
	                                            	 </button>
	                                            	 <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">

	                                            		 <span>Message Provider</span>
	                                            	 </button>
	                                            	 <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">

	                                            		 <span>Resend Welcome Email</span>
	                                            	 </button>
	                                              </div>
	                                             <!-- in line / side by side buttons (end) -->
			                                </div><!-- main row end  -->
			                              </div>
	                            </div>
		                        <!-- Dashboard tab end -->
		                        <div class="tab-pane fade" id="schedule-tab-pane" role="tabpanel" aria-labelledby="schedule-tab-tab" tabindex="0">
			                        <div class="row mb-3">
			                    	   <h3>Schedule <small>(coming soon)</small> </h3>
			                        </div>
			                        <div class="d-flex justify-content-between mb-2">
			                        	<div class="d-inline-flex align-items-center gap-4">
			                        		<div class="mb-4 mb-lg-0">
			                        			<select class="form-select form-select-sm rounded bg-secondary text-white rounded" aria-label="Advance Filter" id="show_status">
			                        				<option>Advance Filter</option>
			                        			</select>
			                        		</div>
			                        		<div class="mb-4 mb-lg-0">
			                        			<button type="button" class="btn btn-xs btn-outline-dark rounded">
			                        				Clear All
			                        			</button>
			                        		</div>
			                        	</div>
			                        	<div class="d-inline-flex align-items-center gap-4 me-3">
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
			                        </div>
			                        <div>
			                        	<x-advancefilters/>
                                        <img  class="w-100" alt="Schedule Calendar" src="/tenant-resources/images/portrait/small/image-placeholder-calendar.png" />
			                        </div>
		                        </div>
		                        <!-- Schedule tab end -->
								<div class="tab-pane fade" id="service-catalog-and-rates-tab-pane" role="tabpanel" aria-labelledby="service-catalog-and-rates-tab-tab" tabindex="0">
			                        <div class="row mb-3">
			                    	   <h3>Service Catalog & Rates </h3>
			                        </div>
			                        <div class="d-flex justify-content-between mb-2">
			                        	<div class="d-inline-flex align-items-center gap-4">
			                        		<section id="multiple-column-form">
												<!-- END: Sign Language Interpreting Services -->
												@if(count($service_catalog))
													@foreach($service_catalog as $accom)
														@if(count($accom))
															<div class="my-4">
																<div class="mb-3 fw-semibold" type="button" data-bs-toggle="collapse"
																	data-bs-target="#accomodation-{{$accom[0]['accommodation_id']}}" aria-expanded="false" aria-controls="accomodation-{{$accom[0]['accommodation_id']}}">
																	{{$accom[0]['accommodation_name']}}
																	<svg aria-label="Accomodation" class="icon-arrow-bottom ms-5" width="32" height="15" viewBox="0 0 32 15"fill="none"
																				xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#grey-upper-arrow"></use>
																	</svg>
																</div>
																
																<div class="collapse" id="accomodation-{{$accom[0]['accommodation_id']}}">
																	@foreach($accom as $service)
																		<div class="mb-3 fw-semibold" data-bs-toggle="collapse" type="button"
																			data-bs-target="#service-{{$service['service_id']}}" aria-expanded="false"
																			aria-controls="service-{{$service['service_id']}}">
																				<div class="d-flex my-2 w-100">
																							<div class=" ">
																								<svg aria-label="Service" class="icon-arrow-bottom me-1" width="25" height="13" viewBox="0 0 25 13"fill="none"
																										xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#grey-upper-arrow"></use>
																								</svg>

																								{{$service['service_name']}}
																							</div>
																							<div class="align-center justify-end mx-5">
																								@if($service['provider_priority'] > 0 && $service['provider_priority'] <= 33)
																									<button class="w-100 btn btn-sm btn-success px-4 fw-normal">High</button>
																								@elseif( $service['provider_priority'] > 33 && $service['provider_priority'] <= 66)
																									<button  class="w-100 btn btn-sm btn-warning px-4 fw-normal">Medium</button>
																								@else
																									<button  class="w-100 btn btn-sm btn-danger px-4 fw-normal">Low</button>
																								@endif

																							
																							</div>
																				</div>

																		</div>
																		
																		<div class="collapse" id="service-{{$service['service_id']}}">
																			<div class="row">
																				<div class="d-inline-flex mb-4">
																					<h2>Standard Rates</h2>
																					<svg aria-label="Set the standard rates for the service" class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16"fill="none"
																							xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
																					</svg>
																				</div>
																				<div class="row mb-4">
																					<div class="col-md-4">
																						<div class="d-inline-flex">
																							<div>
																								<svg aria-label="In-Person" width="25" height="24"
																									viewBox="0 0 25 24" fill="none"
																									xmlns="http://www.w3.org/2000/svg">
																									<use xlink:href="/css/provider.svg#in-person"></use>
																								</svg>
																							</div>
																							<div class="mx-3 fw-semibold">Day Rate In-person:</div>
																							<div class="mx-3">$101.00</div>
																						</div>
																					</div>
																					<div class="col-md-4">
																						<div class="d-inline-flex">
																							<div>
																								<svg aria-label="Virtual" width="25" height="25"
																									viewBox="0 0 25 25" fill="none"
																									xmlns="http://www.w3.org/2000/svg">
																									<use xlink:href="/css/provider.svg#virtual-service">
																									</use>
																								</svg>
																							</div>
																							<div class="mx-3 fw-semibold">Day Rate Virtual:</div>
																							<div class="mx-3">$101.00</div>
																						</div>
																					</div>
																				</div>
																				<div class="row mb-4">
																					<div class="col-md-4">
																						<div class="d-inline-flex">
																							<div>
																								<svg aria-label="Phone" width="30" height="24"
																									viewBox="0 0 30 24" fill="none"
																									xmlns="http://www.w3.org/2000/svg">
																									<use xlink:href="/css/provider.svg#phone"></use>
																								</svg>
																							</div>
																							<div class="mx-3 fw-semibold">Day Rate Phone:</div>
																							<div class="mx-3">$101.00</div>
																						</div>
																					</div>
																					<div class="col-md-4">
																						<div class="d-inline-flex">
																							<div>
																								<svg aria-label="Teleconference" width="30" height="26"
																									viewBox="0 0 30 26" fill="none"
																									xmlns="http://www.w3.org/2000/svg">
																									<use xlink:href="/css/provider.svg#teleconference">
																									</use>
																								</svg>
																							</div>
																							<div class="mx-3 fw-semibold">Day Rate Teleconference:</div>
																							<div class="mx-3">$101.00</div>
																						</div>
																					</div>
																				</div>
																				<hr>
																			</div>
																			{{-- Standandard Rates -End --}}
																			{{-- InPerson Expedited Service -Start --}}
																			<div class="row">
																				<div class="d-inline-flex mb-4">
																					<h2>Expedited Hours </h2>
																					<svg aria-label="Expedited Hours for the service" class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16"fill="none"
																							xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
																					</svg>
																				</div>
																				<div class="row mb-3">
																					<div class="d-inline-flex">
																						<div class="d-inline-flex col-3">
																							<div>
																								<svg aria-label="In-Person" width="25" height="24"
																									viewBox="0 0 25 24" fill="none"
																									xmlns="http://www.w3.org/2000/svg">
																									<use xlink:href="/css/provider.svg#in-person"></use>
																								</svg>
																							</div>
																							<div class="mx-2 d-inline-flex">
																								<div class="text-primary fw-semibold">In-person</div>
																								<div class="mx-2 ">
																									<svg aria-label="" width="15" height="16"
																										viewBox="0 0 15 16" fill="none"
																										xmlns="http://www.w3.org/2000/svg">
																										<use xlink:href="/css/provider.svg#fill-question">
																										</use>
																									</svg>
																								</div>
																							</div>
																						</div>
																						<div class="d-inline-flex col-3">
																							<div class="bg-muted rounded">
																								<span class="fw-semibold">Parameter 1</span>
																							</div>
																							<div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
																								</span><span class="mx-1">5</span></div>
																						</div>
																						<div class="mx-2 d-inline-flex">
																							<div class="d-inline-flex">
																								<span class="fw-semibold">Rate: </span><span
																									class="mx-1">$100.00</span>
																							</div>
																						</div>
																						<div class="mx-4">
																							Multiply by service duration
																						</div>
																					</div>
																				</div>
																				{{-- InPerson Expedited Service -End --}}
																				<div class="row mb-3">
																					<div class="d-inline-flex">
																						<div class="d-inline-flex col-3">
																							<div>
																								<svg aria-label="Virtual" width="25" height="25"
																									viewBox="0 0 25 25" fill="none"
																									xmlns="http://www.w3.org/2000/svg">
																									<use xlink:href="/css/provider.svg#virtual-service">
																									</use>
																								</svg>
																							</div>
																							<div class="mx-2 d-inline-flex">
																								<div class="text-primary fw-semibold">Virtual</div>
																								<div class="mx-2 ">
																									<svg aria-label="" width="15" height="16"
																										viewBox="0 0 15 16" fill="none"
																										xmlns="http://www.w3.org/2000/svg">
																										<use xlink:href="/css/provider.svg#fill-question">
																										</use>
																									</svg>
																								</div>
																							</div>
																						</div>
																						<div class="d-inline-flex col-3">
																							<div class="bg-muted rounded">
																								<span class="fw-semibold">Parameter 1</span>
																							</div>
																							<div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
																								</span><span class="mx-1">5</span></div>
																						</div>
																						<div class="mx-2 d-inline-flex">
																							<div class="d-inline-flex">
																								<span class="fw-semibold">Rate: </span><span
																									class="mx-1">$100.00</span>
																							</div>
																						</div>
																						<div class="mx-4">
																							Multiply by service duration
																						</div>
																					</div>
																				</div>
																				{{-- Virtual Expedited service End --}}
																				<div class="row mb-3">
																					<div class="d-inline-flex">
																						<div class="d-inline-flex col-3">
																							<div>
																								<svg aria-label="Phone" width="30" height="24"
																									viewBox="0 0 30 24" fill="none"
																									xmlns="http://www.w3.org/2000/svg">
																									<use xlink:href="/css/provider.svg#phone"></use>
																								</svg>
																							</div>
																							<div class="mx-2 d-inline-flex">
																								<div class="text-primary fw-semibold">Phone</div>
																								<div class="mx-2 ">
																									<svg aria-label="" width="15" height="16"
																										viewBox="0 0 15 16" fill="none"
																										xmlns="http://www.w3.org/2000/svg">
																										<use xlink:href="/css/provider.svg#fill-question">
																										</use>
																									</svg>
																								</div>
																							</div>
																						</div>
																						<div class="d-inline-flex col-3">
																							<div class="bg-muted rounded">
																								<span class="fw-semibold">Parameter 1</span>
																							</div>
																							<div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
																								</span><span class="mx-1">5</span></div>
																						</div>
																						<div class="mx-2 d-inline-flex">
																							<div class="d-inline-flex">
																								<span class="fw-semibold">Rate: </span><span
																									class="mx-1">$100.00</span>
																							</div>
																						</div>
																						<div class="mx-4">
																							Multiply by service duration
																						</div>
																					</div>
																				</div>
																				{{-- Phone Expedited Service -End --}}
																				<div class="row mb-4">
																					<div class="d-inline-flex">
																						<div class="d-inline-flex col-3">
																							<div>
																								<svg aria-label="Teleconference" width="30" height="26"
																									viewBox="0 0 30 26" fill="none"
																									xmlns="http://www.w3.org/2000/svg">
																									<use xlink:href="/css/provider.svg#teleconference">
																									</use>
																								</svg>
																							</div>
																							<div class="mx-2 d-inline-flex">
																								<div class="text-primary fw-semibold">Teleconference</div>
																								<div class="mx-2 ">
																									<svg aria-label="" width="15" height="16"
																										viewBox="0 0 15 16" fill="none"
																										xmlns="http://www.w3.org/2000/svg">
																										<use xlink:href="/css/provider.svg#fill-question">
																										</use>
																									</svg>
																								</div>
																							</div>
																						</div>
																						<div class="d-inline-flex col-3">
																							<div class="bg-muted rounded">
																								<span class="fw-semibold">Parameter 1</span>
																							</div>
																							<div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice:
																								</span><span class="mx-1">5</span></div>
																						</div>
																						<div class="mx-2 d-inline-flex">
																							<div class="d-inline-flex">
																								<span class="fw-semibold">Rate: </span><span
																									class="mx-1">$100.00</span>
																							</div>
																						</div>
																						<div class="mx-4">
																							Multiply by service duration
																						</div>
																					</div>
																				</div>
																				{{-- Teleconference Expedited Service End --}}
																				<div class="row">
																					<hr>
																				</div>
																				<div class="row">
																					<div class="d-inline-flex mb-3">
																						<h2>Specialization Rates</h2>
																						<svg aria-label="Specialization Rates" class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16"fill="none"
																							xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#fill-question"></use>
																					</svg>
																					</div>
																					<div class="bg-muted p-1 col-1 mx-3 mb-2">Medical</div>
																					<div class="d-inline-flex">
																						<div class="mx-2">
																							<div class="d-inline-flex">
																								<div>
																									<span class="fw-semibold">Rate Type:</span>
																									<span>%</span>
																								</div>
																							</div>
																						</div>
																						<div class="mx-3">
																							<div class="d-inline-flex">
																								<div>
																									<svg aria-label="In-Person" width="25" height="24"
																										viewBox="0 0 25 24" fill="none"
																										xmlns="http://www.w3.org/2000/svg">
																										<use xlink:href="/css/provider.svg#in-person"></use>
																									</svg>
																								</div>
																								<div class="mx-1 mt-1"><span class="fw-semibold">In-Person:
																									</span><span class="mx-1">$100.00</span></div>
																							</div>
																						</div>
																						<div class="mx-3">
																							<div class="d-inline-flex">
																								<div>
																									<svg aria-label="Virtual" width="25" height="25"
																										viewBox="0 0 25 25" fill="none"
																										xmlns="http://www.w3.org/2000/svg">
																										<use xlink:href="/css/provider.svg#virtual-service">
																										</use>
																									</svg>
																								</div>
																								<div class="mx-1 mt-1"><span
																										class="fw-semibold">Virtual:</span><span
																										class="mx-1">$100.00</span></div>
																							</div>
																						</div>
																						<div class="mx-3">
																							<div class="d-inline-flex">
																								<div>
																									<svg aria-label="Phone" width="30" height="24"
																										viewBox="0 0 30 24" fill="none"
																										xmlns="http://www.w3.org/2000/svg">
																										<use xlink:href="/css/provider.svg#phone"></use>
																									</svg>
																								</div>
																								<div class="mx-1 mt-1"><span
																										class="fw-semibold">Phone:</span><span
																										class="mx-1">$100.00</span></div>
																							</div>
																						</div>
																						<div class="mx-3">
																							<div class="d-inline-flex">
																								<div>
																									<svg aria-label="Teleconference" width="30" height="26"
																										viewBox="0 0 30 26" fill="none"
																										xmlns="http://www.w3.org/2000/svg">
																										<use xlink:href="/css/provider.svg#teleconference">
																										</use>
																									</svg>
																								</div>
																								<div class="mx-1 mt-1"><span
																										class="fw-semibold">Teleconferencing:</span><span
																										class="mx-1">$100.00</span></div>
																							</div>
																						</div>
																					</div>
																					<div class="row mt-4 mb-3">
																						<div class="col-3 mb-2 mx-1">
																							<span class="bg-muted p-1 mb-3"> Projector & Screen
																								Rental</span>
																						</div>
																						<div class="d-inline-flex mt-2">
																							<div class="mx-2">
																								<div class="d-inline-flex">
																									<div>
																										<span class="fw-semibold"> Rate
																											Type:</span><span>%</span>
																									</div>
																								</div>
																							</div>
																							<div class="mx-3">
																								<div class="d-inline-flex">
																									<div>
																										<svg aria-label="In-Person" width="25" height="24"
																											viewBox="0 0 25 24" fill="none"
																											xmlns="http://www.w3.org/2000/svg">
																											<use xlink:href="/css/provider.svg#in-person">
																											</use>
																										</svg>
																									</div>
																									<div class="mx-1 mt-1"><span
																											class="fw-semibold">In-Person: </span><span
																											class="mx-1">$100.00</span></div>
																								</div>
																							</div>
																							<div class="mx-3">
																								<div class="d-inline-flex">
																									<div>
																										<svg aria-label="Virtual" width="25" height="25"
																											viewBox="0 0 25 25" fill="none"
																											xmlns="http://www.w3.org/2000/svg">
																											<use
																												xlink:href="/css/provider.svg#virtual-service">
																											</use>
																										</svg>
																									</div>
																									<div class="mx-1 mt-1"><span
																											class="fw-semibold">Virtual:</span><span
																											class="mx-1">$100.00</span></div>
																								</div>
																							</div>
																							<div class="mx-3">
																								<div class="d-inline-flex">
																									<div>
																										<svg aria-label="Phone" width="30" height="24"
																											viewBox="0 0 30 24" fill="none"
																											xmlns="http://www.w3.org/2000/svg">
																											<use xlink:href="/css/provider.svg#phone"></use>
																										</svg>
																									</div>
																									<div class="mx-1 mt-1"><span
																											class="fw-semibold">Phone:</span><span
																											class="mx-1">$100.00</span></div>
																								</div>
																							</div>
																							<div class="mx-3">
																								<div class="d-inline-flex">
																									<div>
																										<svg aria-label="Teleconference" width="30"
																											height="26" viewBox="0 0 30 26" fill="none"
																											xmlns="http://www.w3.org/2000/svg">
																											<use
																												xlink:href="/css/provider.svg#teleconference">
																											</use>
																										</svg>
																									</div>
																									<div class="mx-1 mt-1"><span
																											class="fw-semibold">Teleconferencing:</span><span
																											class="mx-1">$100.00</span></div>
																								</div>
																							</div>
																						</div>
																					</div>
																					<hr>
																				</div>
																				{{-- Specialization Rates -End --}}
																			</div>
																		</div>
																	@endforeach
																</div>
															</div>
														@else
															<div class="row">
																<div class="col-12">
																	<small>No Services Setup</small>
																</div>
															</div>
														@endif
													@endforeach
												@else
													<div class="row">
														<div class="col-12">
															<small>No Accomodations and Services Setup</small>
														</div>
													</div>
												@endif	
												<!-- END: Sign Language Interpreting Services -->
												
											</section>
			                        	</div>
			                        	
			                        </div>
		                        </div>
		                        <!-- Service Catalog and Rates tab end -->
		                        <div class="tab-pane fade" id="availability-tab-pane" role="tabpanel" aria-labelledby="availability-tab" tabindex="0">
			                       <div class="row mb-4">
			                    	<p>In this section, you can add your availability schedule for each working day. You can also register any future holidays when you are not available. It is flexible to create same working hours schedule or different for each day. You can choose your working days as well.</p>
		                          </div>
			                      <div class="row mb-3">
			                    	<h2>Availability <small>(coming soon)</small> </h2>
			                      </div>
								  	{{-- @livewire('app.provider.manage-availability', ['provider_id' => $user['id']]) --}}
			                       
                                  <div>
			                      </div>
		                        </div>
		                        <!-- Availability Tab End-->
		                        <div class="tab-pane fade" id="provider-feedback-tab-pane" role="tabpanel" aria-labelledby="provider-feedback-tab" tabindex="0">
                                    <div class="row mb-4">
										<h3>Feedback <small>(coming soon)</small></h3>
									</div>
									<div class="col-md-12 d-flex col-12 gap-4 mb-4">
										{{-- Search --}}
										<div class="col-md-3 col-12">
											<div class="mb-4">
												<label class="form-label" for="search-record">
													Search
												</label>
												<input type="text" id="search-record" class="form-control" name="search-record" placeholder="Search here" required aria-required="true"/>
											</div>
										</div>
										{{-- Date Range --}}
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
										<div class="col-md-3 col-12">
											<label class="form-label" for="stars">
												Stars
											</label>
												<select class="select2 form-select" id="stars">
													<option value="stars">
														3 starts
													</option>
												</select>
										</div>
									</div>

									<div class="col-md-6 mb-4">
										<button class="btn btn-primary rounded">
											Feedback Given
										</button>
										<button class="btn btn-inactive rounded mx-4">
											Feedback Received
										</button>
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
									<div class="d-flex justify-content-between mb-2">
										<div class="d-inline-flex align-items-center gap-4">
											<label for="showRecordsNumber" class="form-label">
												Show
											</label>
											<select class="form-select" id="showRecordsNumber">
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
											</select>
										</div>
										<div class="d-inline-flex align-items-center gap-4">
											<label for="searchRecord" class="form-label fw-semibold">
												Search
											</label>
											<input type="search" class="form-control" id="searchRecord" name="search" placeholder="Search here" autocomplete="on"/>
										</div>
									</div>
									<div class="card">
										<div class="table-responsive">
											<table id="unassigned_data" class="table table-hover" aria-label="Department Table">
												<thead>
													<tr role="row">
														<th scope="col" class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select All Customers">
														</th>
														<th scope="col">Customer</th>
														<th scope="col">Feedback</th>
														<th scope="col" >Stars</th>
														<th scope="col">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Customer">
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
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
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
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Hide" width="24" height="19" viewBox="0 0 24 19" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#hide-icon"></use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Customer">
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
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
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
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Hide" width="24" height="19" viewBox="0 0 24 19" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#hide-icon"></use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Customer">
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
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
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
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Hide" width="24" height="19" viewBox="0 0 24 19" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#hide-icon"></use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
													<tr role="row" class="even">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Customer">
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
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
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
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Hide" width="24" height="19" viewBox="0 0 24 19" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#hide-icon"></use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
													<tr role="row" class="odd">
														<td class="text-center">
															<input class="form-check-input" type="checkbox" value="" aria-label="Select Customer">
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
															The way you gave that presentation today really good. I'm so impressed by your dedication to learning.
														</td>
														<td>
															<div class="row mt-4">
																<div class="col-md-12 d-flex">
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
																</div>
															</div>
														</td>
														<td>
															<div class="d-flex actions">
																<a href="javascript:void(0)" title="Hide" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Hide" width="24" height="19" viewBox="0 0 24 19" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#hide-icon"></use>
                                                                    </svg>
																</a>
																<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                    </svg>
																</a>
																<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                    </svg>
																</a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											<div class="d-flex actions gap-3 justify-content-end mb-2">
												<div class="d-flex gap-2 align-items-center">
												  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
													<svg aria-label="Hide" width="24" height="19" viewBox="0 0 24 19" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#hide-icon"></use>
                                                    </svg>
												  </a>
												  <span class="text-sm">
													Hide
												  </span>
												</div>
												<div class="d-flex gap-2 align-items-center">
												  <a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
													<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                   </svg>
												  </a>
												  <span class="text-sm">
													Edit
												  </span>
												</div>
												<div class="d-flex gap-2 align-items-center">
												  <a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
													<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                    </svg>
												  </a>
												  <span class="text-sm">
													Delete
												  </span>
												</div>
											  </div>
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
									</div>
		                        </div>
								<div class="tab-pane fade" id="my-drive-tab-pane" role="tabpanel" aria-labelledby="my-drive-tab" tabindex="0">
								    <div class="row">
										<h3>My Drive</h3>
										<p>Here you can manage your professional credentials and required documents. You will receive notifications when your credentials are approaching expiration or have expired.</p>
									</div>
									@livewire('app.common.forms.provider-credentials-drive', ['showForm'=>true,'provider_id' => $user['id']])
									
								</div>
                                <!-- Provider Feedback Tab End-->
								<div class="tab-pane fade" id="invoices-remittances-tab-pane" role="tabpanel" aria-labelledby="invoices-remittances-tab" tabindex="0">
									<div class="row">
										<h3>Invoices & Remittances <small>(coming soon)</small></h3>
									</div>
									<div class="row">
										<div class="col-md-8 mb-4 p-2">
											<div class="col-md-12 mb-3 ps-3">
											  <label class="form-label" for="Customer-invoices-summary">Lifetime Summary</label>
											</div>
											<div class="row ps-3">
											  <div class="col-md-3">
												<div>
												  <h2>$1735.6</h2>
												  <p>Total Remitted</p>
												</div>
											  </div>
											  <div class="col-md-3">
												<div>
												  <h2>$6298.8</h2>
												  <p>Total Paid</p>
												</div>
											  </div>
											  <div class="col-md-3">
												<div>
												  <h2>$494</h2>
												  <p>Total Overdue</p>
												</div>
											  </div>
											  <div class="col-md-3">
												<div>
												  <h2>$2373</h2>
												  <p>Total Pending</p>
												</div>
											  </div>
											</div>

										  </div>
									</div>
									<div class="col-md-12 d-flex col-12 gap-4 mb-4">
										{{-- Date Range --}}
										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="set_date">
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
										<div class="col-md-3 col-12">
											<div class="mb-4">
												<label class="form-label" for="paymentStatus">
													Payment Status
												</label>
											    <select class="select2 form-select" id="paymentStatus">
													<option>Select Payment Status</option>
												</select>
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
											<label for="show_records" class="form-label">
												Show
											</label>
											<select class="form-select" id="show_records">
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
											</select>
										</div>
										<div class="d-inline-flex align-items-center gap-4">
											<label for="search-recird" class="form-label fw-semibold">Search</label>
											<input type="search" class="form-control" id="search-record" name="search-record" placeholder="Search here" autocomplete="on"/>
										  </div>
									</div>
									<div class="table-responses">
										<table id="remittances" class="table table-hover" aria-label="Remittance">
											<thead>
												<tr role="row">
													<th scope="col">
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select All Remittances">
														</div>
													</th>
													<th scope="col">Remittance. NO</th>
													<th scope="col">Payment date</th>
													<th scope="col">Remittance Total</th>
													<th scope="col">Status</th>
													<th  scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>100995-6</a>
														<p class="mt-1 text-secondary">08/24/2022</p>
													</td>
													<td class="text-center">12/01/2023</td>
													<td class="text-center">3346$</td>
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
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
																<svg aria-label="View "width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#eye-icon"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Send" aria-label="Send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#mapview"></use>
                                                                </svg>
															</a>
															<a href="#" title="Revert Remittance" aria-label="Revert Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#revertBackModal">
											                    <svg aria-label="Revert Remittance" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#round-arrow"></use>
                                                                </svg>
															</a>
															<a href="#" title="Mark As Paid" aria-label="Mark As Paid" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
															    <svg aria-label="Mark As Paid" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-icon"></use>
                                                                </svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>100995-6</a>
														<p class="mt-1 text-secondary">08/24/2022</p>
													</td>
													<td class="text-center">12/01/2023</td>
													<td class="text-center">3346$</td>
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
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
																<svg aria-label="View "width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#eye-icon"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Send" aria-label="Send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#mapview"></use>
                                                                </svg>
															</a>
															<a href="#" title="Revert Remittance" aria-label="Revert Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#revertBackModal">
											                    <svg aria-label="Revert Remittance" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#round-arrow"></use>
                                                                </svg>
															</a>
															<a href="#" title="Mark As Paid" aria-label="Mark As Paid" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
															    <svg aria-label="Mark As Paid" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-icon"></use>
                                                                </svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>100995-6</a>
														<p class="mt-1 text-secondary">08/24/2022</p>
													</td>
													<td class="text-center">12/01/2023</td>
													<td class="text-center">3346$</td>
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
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
																<svg aria-label="View "width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#eye-icon"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Send" aria-label="Send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#mapview"></use>
                                                                </svg>
															</a>
															<a href="#" title="Revert Remittance" aria-label="Revert Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#revertBackModal">
											                    <svg aria-label="Revert Remittance" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#round-arrow"></use>
                                                                </svg>
															</a>
															<a href="#" title="Mark As Paid" aria-label="Mark As Paid" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
															    <svg aria-label="Mark As Paid" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-icon"></use>
                                                                </svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>100995-6</a>
														<p class="mt-1 text-secondary">08/24/2022</p>
													</td>
													<td class="text-center">12/01/2023</td>
													<td class="text-center">3346$</td>
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
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
																<svg aria-label="View "width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#eye-icon"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Send" aria-label="Send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#mapview"></use>
                                                                </svg>
															</a>
															<a href="#" title="Revert Remittance" aria-label="Revert Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#revertBackModal">
											                    <svg aria-label="Revert Remittance" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#round-arrow"></use>
                                                                </svg>
															</a>
															<a href="#" title="Mark As Paid" aria-label="Mark As Paid" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
															    <svg aria-label="Mark As Paid" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-icon"></use>
                                                                </svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>100995-6</a>
														<p class="mt-1 text-secondary">08/24/2022</p>
													</td>
													<td class="text-center">12/01/2023</td>
													<td class="text-center">3346$</td>
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
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
																<svg aria-label="View "width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#eye-icon"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Send" aria-label="Send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#mapview"></use>
                                                                </svg>
															</a>
															<a href="#" title="Revert Remittance" aria-label="Revert Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#revertBackModal">
											                    <svg aria-label="Revert Remittance" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#round-arrow"></use>
                                                                </svg>
															</a>
															<a href="#" title="Mark As Paid" aria-label="Mark As Paid" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
															    <svg aria-label="Mark As Paid" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-icon"></use>
                                                                </svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>100995-6</a>
														<p class="mt-1 text-secondary">08/24/2022</p>
													</td>
													<td class="text-center">12/01/2023</td>
													<td class="text-center">3346$</td>
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
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
																<svg aria-label="View "width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#eye-icon"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Send" aria-label="Send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#mapview"></use>
                                                                </svg>
															</a>
															<a href="#" title="Revert Remittance" aria-label="Revert Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#revertBackModal">
											                    <svg aria-label="Revert Remittance" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#round-arrow"></use>
                                                                </svg>
															</a>
															<a href="#" title="Mark As Paid" aria-label="Mark As Paid" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
															    <svg aria-label="Mark As Paid" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-icon"></use>
                                                                </svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="odd">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>100995-6</a>
														<p class="mt-1 text-secondary">08/24/2022</p>
													</td>
													<td class="text-center">12/01/2023</td>
													<td class="text-center">3346$</td>
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
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
																<svg aria-label="View "width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#eye-icon"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Send" aria-label="Send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#mapview"></use>
                                                                </svg>
															</a>
															<a href="#" title="Revert Remittance" aria-label="Revert Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#revertBackModal">
											                    <svg aria-label="Revert Remittance" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#round-arrow"></use>
                                                                </svg>
															</a>
															<a href="#" title="Mark As Paid" aria-label="Mark As Paid" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
															    <svg aria-label="Mark As Paid" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-icon"></use>
                                                                </svg>
															</a>
														</div>
													</td>
												</tr>
												<tr role="row" class="even">
													<td>
														<div class="form-check">
															<input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
														</div>
													</td>
													<td>
														<a>100995-6</a>
														<p class="mt-1 text-secondary">08/24/2022</p>
													</td>
													<td class="text-center">12/01/2023</td>
													<td class="text-center">3346$</td>
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
															<a href="#" title="view" aria-label="view" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
																<svg aria-label="View "width="24" height="17" viewBox="0 0 24 17" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#eye-icon"></use>
                                                                 </svg>
															</a>
															<a href="#" title="Send" aria-label="Send" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#mapview"></use>
                                                                </svg>
															</a>
															<a href="#" title="Revert Remittance" aria-label="Revert Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#revertBackModal">
											                    <svg aria-label="Revert Remittance" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#round-arrow"></use>
                                                                </svg>
															</a>
															<a href="#" title="Mark As Paid" aria-label="Mark As Paid" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#markAsPaidModal">
															    <svg aria-label="Mark As Paid" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-icon"></use>
                                                                </svg>
															</a>
														</div>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
									<div class="d-flex actions gap-3 justify-content-end mb-2">
										<div class="d-flex gap-2 align-items-center">
										  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<svg aria-label="View "width="24" height="17" viewBox="0 0 24 17" fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#eye-icon"></use>
                                            </svg>
										  </a>
										  <span class="text-sm">
										  View
										  </span>
										</div>
										<div class="d-flex gap-2 align-items-center">
										  <a href="#" title="" aria-label="Resend Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<svg aria-label="Send" width="20" height="21" viewBox="0 0 20 21" fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#mapview"></use>
                                            </svg>
										  </a>
										  <span class="text-sm">
											Resend Remittance
										  </span>
										</div>
										<div class="d-flex gap-2 align-items-center">
										  <a href="#" title="Revert Remittance" aria-label="Revert Remittance" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<svg aria-label="Revert Remittance" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#round-arrow"></use>
                                            </svg>
										  </a>
										  <span class="text-sm">
											Revert Remittance
										  </span>
										</div>
										<div class="d-flex gap-2 align-items-center">
											<a href="#" title="Mark as Paid" aria-label="Mark as Paid" class="btn btn-sm btn-secondary rounded btn-hs-icon">
												<svg aria-label="Mark As Paid" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-icon"></use>
                                                </svg>
											</a>
											<span class="text-sm">
												Mark as Paid
											</span>
										  </div>
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
								</div>
								<!-- Invoices Remittances Tab End-->
								<div class="tab-pane fade" id="notes-tab-pane" role="tabpanel" aria-labelledby="notes-tab" tabindex="0">
									@livewire('app.common.forms.notes', ['showForm'=>true,'record_id' => $user['id'],'record_type'=>2])

								</div>
								<!-- Notes Tab End-->
								<div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab" tabindex="0">
									<div class="row">
										<h3>Notification <small>(coming soon)</small></h3>
										<p class="mt-3">
											Here you can control how you are notified about Profile activity.
										</p>
									</div>
									<div class="row mb-4">
										<div class="col-md-4 border rounded">
											<div class="row">
												<div class="d-flex justify-content-between mb-2 p-2">
													<div class="d-inline-flex align-items-center gap-4">
														<svg  width="47" height="41" class="ms-2"  viewBox="0 0 47 41"  fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#text"></use>
														</svg>
														<span>Text</span>
													</div>
													<div class="d-inline-flex align-items-center gap-4">
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="ToggleText" checked>
															<label class="form-check-label" for="ToggleText">OFF</label>
															<label class="form-check-label" for="ToggleText">ON</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4 border rounded mx-5">
											<div class="row">
												<div class="d-flex justify-content-between mb-2 p-2">
													<div class="d-inline-flex align-items-center gap-4">
														<svg  width="52" height="36"  viewBox="0 0 52 36"  fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#email"></use>
														</svg>
														<span>Email</span>
													</div>
													<div class="d-inline-flex align-items-center gap-4">
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="ToggleEmail" checked>
															<label class="form-check-label" for="ToggleEmail">
																OFF
															</label>
															<label class="form-check-label" for="ToggleEmail">
																ON
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-4"></div>
									</div>
									<div class="row mb-5">
										<div class="col-md-4 mt-2 border rounded">
											<div class="row">
												<div class="d-flex justify-content-between mb-2 p-2">
													<div class="d-inline-flex align-items-center gap-4">
														<svg  width="57" height="41" viewBox="0 0 57 41"  fill="none"
														xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#notification"></use>
														</svg>
														<span>Notification</span>
													</div>
													<div class="d-inline-flex align-items-center gap-4">
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" id="NotificationToggle" checked>
															<label class="form-check-label" for="NotificationToggle">OFF</label>
															<label class="form-check-label" for="NotificationToggle">ON</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-5">
										<h2>Account Management</h2>
									    <div class="table-responsive">
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
									    </div>
								    </div>
									<div class="row mb-5">
										<h2>Booking Management & Updates</h2>
									    <div class="table-responsive">
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
									    </div>
								    </div>
									<div class="row mb-5">
										<h2>Broadcast & Assign</h2>
									    <div class="table-responsive">
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
									    </div>
								    </div>
									<div class="row mb-4">
										<h2>Financials</h2>
									    <div class="table-responsive">
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
									    </div>
								    </div>
								</div>
								<!-- Notifications Tab End-->
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
									<div class="mb-5">
										<div class="d-flex justify-content-between">
											<div class="d-inline-flex align-items-center gap-4">
											  <h2>Assignment</h2>
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
											<img src="/tenant-resources/images/portrait/small/image-placeholder-assignment-graph.png" height="200" width="800" class="img-fluid" alt="Assignments Report">
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
											<img src="/tenant-resources/images/portrait/small/pending-payment.png" class="img-fluid" alt="Pending Payment image">
										</div>
									  </div>
								</div>
								<!-- Reports Tab End-->
								<div class="tab-pane fade" id="log-tab-pane" role="tabpanel" aria-labelledby="log-tab" tabindex="0">
									<div class="row mb-4">
										<h3>Logs </h3>
									</div>
                                    	@livewire('app.common.lists.logs',['record_id'=>$user['id'],'record_type'=>'user'])

								</div>
								<!-- Log Tab End-->
								<div class="tab-pane fade" id="settings-tab-pane" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
									<div class="row mb-2">
										<h2>Settings <small>(coming soon)</small></h2>
									</div>
								    <div class="row mb-2">
                                        <h3>Provider Payment & Preference</h3>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-check form-switch">
													<input class="form-check-input " aria-label="Toggle Provider Payroll" type="checkbox" role="switch" id="provider_payroll" >
													<label class="form-check-label" for="provider_payroll">Provider Payroll</label>
													<label class="form-check-label" for="provider_payroll">Provider Payroll</label>
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-lg-6 mb-5">
											<label class="form-label" for="billingSchedule">
												Payment Schedule <span class="text-sm">(Days after Provider Invoice / Remittance)</span>
											</label>
												<input class="form-control" type="" id="billingSchedule" placeholder="Enter Days">
										</div>
									</div>
									<div class="row">
										<div class="row mb-4">
											<h3>Travel Reimbursement Rate</h3>
										</div>
										<div class="row">
											<div class="col-lg-6 mb-4">
												<div class="d-lg-flex justify-content-between">
													<label class="form-label" for="reimburseProviders">
													Rate per unit to reimburse provider
													</label>
												
												</div>


												<div class="row">
													<div class="col-8">
														<input type="number" id="travel_rate_per_unit" class="form-control" name="rate-per-mile-to-reimburse" placeholder="$00:00" wire:model.defer="settings.travel_rate_per_unit"  />
													</div>
													<div class="col-4">
														<select  id="travel_rate_unit" class="form-select" wire:model.defer="settings.travel_rate_unit">
															<option value="km" >KM</option>
															<option value="m" >Miles</option>
														</select>
													</div>
												</div>										
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 mb-4">
												<div class="d-lg-flex ">
													<label class="form-label" for="compensatedTravelTime">
														Rate To Reimburse Compensated Travel Time
													</label>
													<div class="ms-1 mt-1">
														<svg aria-label="Information" width="15" height="16" viewBox="0 0 15 16">
															<use xlink:href="/css/common-icons.svg#fill-question"></use>
														</svg>
														</div>
												</div>
												<div class="row">
												<div class="col-lg-8 d-inline-flex">
												 <input type="number" wire:model.defer="settings.rate_for_travel_time" id="rate-to-reimburse-compensated-travel-time"
												  class="form-control" name="rate-to-reimburse-compensated-travel-time" placeholder="$00:00" />
													<div class="col-lg-4 ms-2 mt-3"><span>Per hour</span></div>
												</div>
											</div>
											<div class="row ms-2 mt-2">
												<div class="form-check">
													 <input class="form-check-input" wire:model.defer="settings.same_as_service_rate"
                                                                                        type="checkbox"
                                                                                        id="same_as_service_rate">
													<label class="form-check-label" for="SameAsServiceRate">Same as Service Rate</label>
												  </div>
											 </div>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-12 justify-content-center form-actions d-flex gap-3">
											
											<button type="submit" wire:click='saveSettings' class="btn btn-primary rounded">
												Save
											</button>
										</div>
									</div>
								</div>
								<!-- Settings Tab End-->
								<div class="tab-pane fade" id="payments-preferences-tab-pane" role="tabpanel" aria-labelledby="payments-preferences-tab" tabindex="0">
                                    <div class="row">
										<h3>Payment Preferences</h3>
										
											@livewire('app.provider.payment-preferences', ['provider_id' => $user['id'] ])
									</div>
								</div>
		                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>



                            </div> <!-- tab-content -->
		 <!-- END: Provider Details ................... -->
		 </div>




				 </div>
			   </div>
			 </div>
			 {{-- @include('panels.common.default-availability') --}}
			 {{-- @include('panels.common.specific-date-availibility') --}}
			 @include('panels.common.pending-credentials')
			 @include('modals.common.add-address')
			 @include('modals.mark-as-paid')
			 @include('modals.common.revert-back')
			 @include('modals.common.change-password',['userid'=>$userid])
			 @include('modals.remittance-details')

		   </section>
           @endif
		   <!-- Basic Floating Label Form section end -->
		 </div>
		 
	
	   </div>
	 <!-- End: Content-->
