<div x-data="{defaultAvailability: false, specificDateAvailability: false, pendingCredentials: false}">
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
                               {{--  
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="referrals-tab" data-bs-toggle="tab" data-bs-target="#referrals-tab-pane" type="button" role="tab" aria-controls="referrals-tab-pane" aria-selected="false">
										<x-icon name="gray-referral"/>
										<span>Referrals</span>
									</button>
								</li>
								--}}

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
															<div class="d-inline-block position-relative">
																<img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle" alt="Profile Image of Provider"/>
															</div>
															<div class="d-flex">

																<div style="margin-left: -1rem;" class="d-inline-block position-relative mt-3">
																	<x-icon name="bg-dark-gradiant"/> 
																
																<div class="position-absolute bottom-0 p-0 d-flex justify-content-center align-items-center">
																	<label class="text-white form-label-sm ps-2" for="">
																		Sydney, Australia  
																	</label>
																</div>
															</div>
															<div style="margin-left: -1rem; left:8rem;" class="d-inline-block position-absolute mt-3">
																<x-icon name="bg-light-gradiant"/> 
																<div class="position-absolute bottom-0 p-0 d-flex justify-content-center align-items-center">
																		<label class="text-white form-label-sm ps-2" for="">
																			Staff Provider
																		</label>
																</div>
															</div>
														</div>
													</div>
														<div class="col-md-6">
															<h3>James Mary (He)</h3>
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
															<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon ms-auto">
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
																		jamesmary@gmail.com
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1 mx-2">
															<div class="col-md-12 d-flex">
																<div class="col-md-4">
																	<label class="col-form-label" for="p-number">Phone Number:</label>
							                                     </div>
					                                            <div class="col-md-8 align-self-center">
											                         <div class="font-family-secondary">(987) 653-5875
																	 </div>
											                    </div>
					                                        </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                       <div class="col-md-12 d-flex">
					                                           <div class="col-md-4 "><label class="col-form-label" for="first-address">Address line 1:</label></div>
					                                            <div class="col-md-12 align-self-center"><div class="font-family-secondary">Mrs Smith 98 Shirley Street PIMPAMA</div></div>
					                                        </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                     <div class="col-md-12 d-flex">
					                                     <div class="col-md-4 "><label class="col-form-label" for="second-address">Address line 2:</label></div>
					                                     <div class="col-md-12 align-self-center"><div class="font-family-secondary">Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 <br> AUSTRALIA</div></div>
					                                     </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                      <div class="col-md-12 d-flex">
					                                      <div class="col-md-4 fw"><label class="col-form-label" for="city">City / State:</label></div>
					                                      <div class="col-md-8 align-self-center"><div class="font-family-secondary">Sydney</div></div>
					                                      </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                      <div class="col-md-12 d-flex">
					                                      <div class="col-md-4 "><label class="col-form-label" for="zip-code">Zip Code:</label></div>
					                                      <div class="col-md-8 align-self-center"><div class="font-family-secondary">289425</div></div>
					                                      </div>
					                                    </div>
					                                   <div class="row mb-1 mx-2">
					                                     <div class="col-md-12 d-flex">
					                                     <div class="col-md-4 "><label class="col-form-label" for="country">Country:</label></div>
					                                     <div class="col-md-8 align-self-center"><div class="font-family-secondary">Australia</div></div>
					                                     </div>
					                                    </div>
					                                    <div class="row mb-1 mx-2">
					                                      <div class="col-md-12 d-flex">
					                                      <div class="col-md-4 "><label class="col-form-label" for="education">Education:</label></div>
					                                      <div class="col-md-8 align-self-center"><div class="font-family-secondary">Master’s</div></div>
					                                      </div>
					                                     </div>
					                                  <div class="row mb-1 mx-2">
					                                    <div class="col-md-12 d-flex">
					                                    <div class="col-md-4 "><label class="col-form-label" for="experience">Experience:</label></div>
					                                    <div class="col-md-8 align-self-center"><div class="font-family-secondary">5 Year</div></div>
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
					                                   <div class="col-md-8 align-self-center"><div class="font-family-secondary">NoYCRK</div></div>
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
				                        		 <!-- table one  -->
				                                <table id="" class="table table-hover" aria-label="Admin Staff Teams Table">
				                                       <thead>
				                                       <tr role="row">
				                                         <th class="align-middle text-nowrap" scope="col">Language Translation Services</th>
				                                         <th class="text-end align-middle" scope="col">Service Rate</th>
				                                         <th class="text-end align-middle col-3" scope="col">
				                                         <div aria-expanded="true" data-bs-toggle="collapse" href="#collapseLanguageTranslationServices" role="button" aria-controls="collapseLanguageTranslationServices">
				                                          <svg class="me-4" width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
				                                          <path d="M24.4726 0.462022C24.1199 0.16619 23.6414 -5.20854e-08 23.1426 -7.08858e-08C22.6438 -8.96861e-08 22.1654 0.16619 21.8126 0.462022L12.5004 8.2732L3.18833 0.462021C2.83353 0.174573 2.35832 0.0155169 1.86507 0.0191123C1.37181 0.0227076 0.899977 0.188666 0.55118 0.481243C0.202383 0.77382 0.00453562 1.16961 0.000249782 1.58336C-0.00403605 1.99711 0.185583 2.39572 0.528265 2.69333L11.1704 11.6202C11.5232 11.916 12.0016 12.0822 12.5004 12.0822C12.9993 12.0822 13.4777 11.916 13.8305 11.6202L24.4726 2.69334C24.8253 2.39741 25.0234 1.99611 25.0234 1.57768C25.0234 1.15925 24.8253 0.757944 24.4726 0.462022Z" fill="white"></path>
				                                        </svg>
				                                         </div>
				                                         </th>
				                                       </tr>
				                                       </thead>
				                                     </table>
				                                     <div class="collapse show" id="collapseLanguageTranslationServices">
				                                        <table id="" class="table table-hover" aria-label="Admin Staff Teams Table">
				                                          <tbody>
				                                       <tr role="row" class="odd">
				                                         <td class="align-middle">
				                                          <p class="text-sm">Check service duration</p>
				                                         </td>
				                                         <td class="align-middle">
				                                          <div class="d-flex text-nowrap justify-content-end gap-2 align-items-center">
				                                            <small>Business Rate:</small><span class="text-sm"> $10.00</span>
				                                          </div>
				                                          <div class="d-flex text-nowrap justify-content-end gap-2 align-items-center">
				                                            <small>After-hours Rate:</small> <span class="text-sm">$10.00</span>
				                                          </div>
				                                          </td>
				                                          <td class="text-center align-middle ps-0">
				                                         <div class="row">
				                                           <div class="col-4 align-self-center pe-0 text-end text-sm">
				                                           10
				                                           </div>
				                                           <div class="col-8">
				                                           <button type="button" class="w-100 btn btn-sm btn-success px-4 fw-normal">High</button>
				                                           </div>
				                                           
				                                         </div>
				                                          </td>
				                                                     </tr>
				                                                     <tr role="row" class="even">
				                                         <td class="align-middle">
				                                          <p class="text-sm">New service capacity and capabilities</p>
				                                         </td>
				                                         <td class="align-middle">
				                                            <div class="d-flex justify-content-end text-sm">
				                                              $10.00
				                                            </div>
				                                              
				                                          </td>
				                                          <td class="text-center align-middle ps-0">
				                                         <div class="row">
				                                           <div class="col-4 align-self-center pe-0 text-end text-sm">
				                                           50
				                                           </div>
				                                           <div class="col-8">
				                                           <button type="button" class="w-100 btn btn-sm btn-warning px-4 fw-normal">Medium</button>
				                                           </div>
				                                           
				                                         </div>
				                                          </td>
				                                                     </tr>
				                                                     <tr role="row" class="odd">
				                                         <td class="align-middle">
				                                          <p class="text-sm">Service (in-person) hourly Rate</p>
				                                         </td>
				                                         <td class="align-middle">
				                                            <div class="d-flex justify-content-end text-sm">
				                                              $10.00
				                                            </div>
				                                          </td>
				                                          <td class="text-center align-middle ps-0">
				                                         <div class="row">
				                                           <div class="col-4 align-self-center pe-0 text-end text-sm">
				                                           80
				                                           </div>
				                                           <div class="col-8">
				                                           <button type="button" class="w-100 btn btn-sm btn-danger px-4 fw-normal">Low</button>
				                                           </div>
				                                           
				                                         </div>
				                                          </td>
				                                                     </tr>
				                                         </tbody>
				                                   </table>
				                                </div>
				                                         
				                                <!-- table two  -->
				                                <table id="" class="table table-hover" aria-label="Admin Staff Teams Table">
				                                  <thead>
				                                       <tr role="row">
				                                         <th class="align-middle text-nowrap" scope="col">Spoken Language Interpreting Services</th>
				                                         <th class="text-end align-middle" scope="col">Service Rate</th>
				                                         <th class="text-end align-middle col-3" scope="col">
				                                         <div aria-expanded="false" data-bs-toggle="collapse" href="#collapseSpokenLanguageInterpretingServices" role="button" aria-controls="collapseSpokenLanguageInterpretingServices">
				                                          <svg class="me-4" width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
				                                          <path d="M24.4726 0.462022C24.1199 0.16619 23.6414 -5.20854e-08 23.1426 -7.08858e-08C22.6438 -8.96861e-08 22.1654 0.16619 21.8126 0.462022L12.5004 8.2732L3.18833 0.462021C2.83353 0.174573 2.35832 0.0155169 1.86507 0.0191123C1.37181 0.0227076 0.899977 0.188666 0.55118 0.481243C0.202383 0.77382 0.00453562 1.16961 0.000249782 1.58336C-0.00403605 1.99711 0.185583 2.39572 0.528265 2.69333L11.1704 11.6202C11.5232 11.916 12.0016 12.0822 12.5004 12.0822C12.9993 12.0822 13.4777 11.916 13.8305 11.6202L24.4726 2.69334C24.8253 2.39741 25.0234 1.99611 25.0234 1.57768C25.0234 1.15925 24.8253 0.757944 24.4726 0.462022Z" fill="white"></path>
				                                        </svg>


				                                         </div>
				                                         </th>
				                                       </tr>
				                                       </thead>
				                                     </table>
				                                     <div class="collapse" id="collapseSpokenLanguageInterpretingServices">
				                                     <table id="" class="table table-hover" aria-label="Admin Staff Teams Table">
				                                       <tbody>
				                                         <tr role="row" class="odd">
				                                           <td class="align-middle">
				                                            <p class="text-sm">Check service duration</p>
				                                           </td>
				                                           <td class="align-middle">
				                                            <div class="d-flex text-nowrap justify-content-end gap-2 align-items-center">
				                                              <small>Business Rate:</small><span class="text-sm"> $10.00</span>
				                                            </div>
				                                            <div class="d-flex text-nowrap justify-content-end gap-2 align-items-center">
				                                              <small>After-hours Rate:</small> <span class="text-sm">$10.00</span>
				                                            </div>
				                                            </td>
				                                            <td class="text-center align-middle ps-0">
				                                           <div class="row">
				                                             <div class="col-4 align-self-center pe-0 text-end text-sm">
				                                             10
				                                             </div>
				                                             <div class="col-8">
				                                             <button type="button" class="w-100 btn btn-sm btn-success px-4 fw-normal">High</button>
				                                             </div>    
				                                           </div>
				                                            </td>
				                                         </tr>
				                                        <tr role="row" class="even">
				                                           <td class="align-middle">
				                                            <p class="text-sm">New service capacity and capabilities</p>
				                                           </td>
				                                           <td class="align-middle">
				                                              <div class="d-flex justify-content-end text-sm">
				                                                $10.00
				                                              </div>
				                                                
				                                            </td>
				                                            <td class="text-center align-middle ps-0">
				                                           <div class="row">
				                                             <div class="col-4 align-self-center pe-0 text-end text-sm">
				                                             50
				                                             </div>
				                                             <div class="col-8">
				                                             <button type="button" class="w-100 btn btn-sm btn-warning px-4 fw-normal">Medium</button>
				                                             </div>  
				                                           </div>
				                                            </td>
				                                         </tr>
				                                        <tr role="row" class="odd">
				                                           <td class="align-middle">
				                                            <p class="text-sm">Service (in-person) hourly Rate</p>
				                                           </td>
				                                           <td class="align-middle">
				                                              <div class="d-flex justify-content-end text-sm">
				                                                $10.00
				                                              </div>
				                                            </td>
				                                            <td class="text-center align-middle ps-0">
				                                           <div class="row">
				                                             <div class="col-4 align-self-center pe-0 text-end text-sm">
				                                             80
				                                             </div>
				                                             <div class="col-8">
				                                             <button type="button" class="w-100 btn btn-sm btn-danger px-4 fw-normal">Low</button>
				                                             </div>    
				                                           </div>
				                                            </td>
				                                         </tr>   
				                                         </tbody>
				                                  </table>
				                                </div>
				                                <!-- table three  -->
				                                <table id="" class="table table-hover" aria-label="Admin Staff Teams Table">
				                                  <thead>
				                                       <tr role="row">
				                                         <th class="align-middle text-nowrap" scope="col">Sign Language Interpreting Services</th>
				                                         <th class="text-end align-middle" scope="col">Service Rate</th>
				                                         <th class="text-end align-middle col-3" scope="col">
				                                         <div aria-expanded="false" data-bs-toggle="collapse" href="#collapseSignLanguageInterpretingServices" role="button" aria-controls="collapseSignLanguageInterpretingServices">
				                                          <svg class="me-4" width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
				                                          <path d="M24.4726 0.462022C24.1199 0.16619 23.6414 -5.20854e-08 23.1426 -7.08858e-08C22.6438 -8.96861e-08 22.1654 0.16619 21.8126 0.462022L12.5004 8.2732L3.18833 0.462021C2.83353 0.174573 2.35832 0.0155169 1.86507 0.0191123C1.37181 0.0227076 0.899977 0.188666 0.55118 0.481243C0.202383 0.77382 0.00453562 1.16961 0.000249782 1.58336C-0.00403605 1.99711 0.185583 2.39572 0.528265 2.69333L11.1704 11.6202C11.5232 11.916 12.0016 12.0822 12.5004 12.0822C12.9993 12.0822 13.4777 11.916 13.8305 11.6202L24.4726 2.69334C24.8253 2.39741 25.0234 1.99611 25.0234 1.57768C25.0234 1.15925 24.8253 0.757944 24.4726 0.462022Z" fill="white"></path>
				                                        </svg>


				                                         </div>
				                                         </th>
				                                       </tr>
				                                       </thead>
				                                     </table>
				                                     <div class="collapse" id="collapseSignLanguageInterpretingServices">
				                                       <table id="" class="table table-hover" aria-label="Admin Staff Teams Table">
				                                         <tbody>
				                                           <tr role="row" class="odd">
				                                             <td class="align-middle">
				                                              <p class="text-sm">Check service duration</p>
				                                             </td>
				                                             <td class="align-middle">
				                                              <div class="d-flex text-nowrap justify-content-end gap-2 align-items-center">
				                                                <small>Business Rate:</small><span class="text-sm"> $10.00</span>
				                                              </div>
				                                              <div class="d-flex text-nowrap justify-content-end gap-2 align-items-center">
				                                                <small>After-hours Rate:</small> <span class="text-sm">$10.00</span>
				                                              </div>
				                                              </td>
				                                              <td class="text-center align-middle ps-0">
				                                             <div class="row">
				                                               <div class="col-4 align-self-center pe-0 text-end text-sm">
				                                               10
				                                               </div>
				                                               <div class="col-8">
				                                               <button type="button" class="w-100 btn btn-sm btn-success px-4 fw-normal">High</button>
				                                               </div>
				                                               
				                                             </div>
				                                              </td>
				                                                         </tr>
				                                                         <tr role="row" class="even">
				                                             <td class="align-middle">
				                                              <p class="text-sm">New service capacity and capabilities</p>
				                                             </td>
				                                             <td class="align-middle">
				                                                <div class="d-flex justify-content-end text-sm">
				                                                  $10.00
				                                                </div>
				                                                  
				                                              </td>
				                                              <td class="text-center align-middle ps-0">
				                                             <div class="row">
				                                               <div class="col-4 align-self-center pe-0 text-end text-sm">
				                                               50
				                                               </div>
				                                               <div class="col-8">
				                                               <button type="button" class="w-100 btn btn-sm btn-warning px-4 fw-normal">Medium</button>
				                                               </div>
				                                               
				                                             </div>
				                                              </td>
				                                                         </tr>
				                                                         <tr role="row" class="odd">
				                                             <td class="align-middle">
				                                              <p class="text-sm">Service (in-person) hourly Rate</p>
				                                             </td>
				                                             <td class="align-middle">
				                                                <div class="d-flex justify-content-end text-sm">
				                                                  $10.00
				                                                </div>
				                                              </td>
				                                              <td class="text-center align-middle ps-0">
				                                             <div class="row">
				                                               <div class="col-4 align-self-center pe-0 text-end text-sm">
				                                               80
				                                               </div>
				                                               <div class="col-8">
				                                               <button type="button" class="w-100 btn btn-sm btn-danger px-4 fw-normal">Low</button>
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
				                               </div>
			                                    	 <!-- ..... table e  -->
			                                       </div>
			                                       <!-- Assigned Teams colums (start) -->
			                                       <div class="col-md-11 d-flex mb-md-2 gap-5 mt-4 bg-light p-4 mx-3">
			                                       <div class="row mb-4 mt-3">
			                                    	<div class="col-md-6">
			                                    	  <div class="row mb-1">
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
                                     					   <tr role="row" class="odd">
                                     						 <td class="align-middle fw-bold">1</td>
                                     						 <td class="align-middle"> <div class="row g-2">
                                     						   <div class="col-md-2">
                                     							 <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
						                                         </div>
						                                         <div class="col-md-10 align-self-center">
						                                      	 <h6 class="fw-semibold">Langauge Translation</h6>
						                                      	 <p>languagetranslation@gmail.com</p>
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
					                                        <tr role="row" class="even">
					                                     	 <td class="align-middle fw-bold">2</td>
					                                     	 <td class="align-middle"> <div class="row g-2">
					                                     	   <div class="col-md-2">
					                                     		 <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
					                                     	   </div>
					                                     	   <div class="col-md-10 align-self-center">
					                                     		 <h6 class="fw-semibold">Langauge Translation</h6>
					                                     		 <p>languagetranslation@gmail.com</p>
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
					                                       <tr role="row" class="odd">
					                                    	 <td class="align-middle fw-bold">3</td>
					                                    	 <td class="align-middle"> <div class="row g-2">
					                                    	   <div class="col-md-2">
					                                    		 <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
					                                    	   </div>
					                                    	   <div class="col-md-10 align-self-center">
					                                    		 <h6 class="fw-semibold">Langauge Translation</h6>
					                                    		 <p>languagetranslation@gmail.com</p>
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
					                                        <tr role="row" class="even">
					                                     	 <td class="align-middle fw-bold">4</td>
					                                     	 <td class="align-middle"> <div class="row g-2">
					                                     	   <div class="col-md-2">
					                                     		 <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
					                                     	   </div>
					                                     	   <div class="col-md-10 align-self-center">
					                                     		 <h6 class="fw-semibold">Langauge Translation</h6>
					                                     		 <p>languagetranslation@gmail.com</p>
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
					                                        <tr role="row" class="odd">
					                                     	 <td class="align-middle fw-bold">5</td>
					                                     	 <td class="align-middle"> <div class="row g-2">
					                                     	   <div class="col-md-2">
					                                     		 <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
					                                     	   </div>
					                                     	   <div class="col-md-10 align-self-center">
					                                     		 <h6 class="fw-semibold">Langauge Translation</h6>
					                                     		 <p>languagetranslation@gmail.com</p>
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
                                          
		                                             <div class="row">
		                                          	 <div class="col-md-4 mb-md-3">
		                                          	   <button type="button"
		                                          	   class="btn btn-outline-dark rounded w-100">Deaf and Blind
		                                          	 </button>
		                                          	   </div>
		                                          	 <div class="col-md-4 mb-md-3">
		                                          	   <button type="button"
		                                          	   class="btn btn-outline-dark rounded w-100">Only Virtual
		                                          	 </button>
		                                          	   </div>
		                                          	 </div>
		                                             <div class="row">
		                                          	 <div class="col-md-4 mb-md-3">
		                                          	   <button type="button"
		                                          	   class="btn btn-outline-dark rounded w-100">Pakistani Origin
		                                          	 </button>
		                                          	   </div>
		                                          	 <div class="col-md-4 mb-md-3">
		                                          	   <button type="button"
		                                          	   class="btn btn-outline-dark rounded w-100">Sign Language
		                                          	 </button>
		                                          	   </div>
		                                          	 </div>
		                                             <div class="row">
		                                          	 <div class="col-md-4 mb-md-3">
		                                          	   <button type="button"
		                                          	   class="btn btn-outline-dark rounded w-100">Legal
		                                        	 </button>
		                                        	   </div>
		                                        	 <div class="col-md-4 mb-md-3">
		                                        	   <button type="button"
		                                        	   class="btn btn-outline-dark rounded w-100">Conference
		                                        	 </button>
		                                        	   </div>
		                                        	 </div>
		                                           <div class="row">
		                                        	 <div class="col-md-4 mb-md-2">
		                                        	   <button type="button"
		                                        	   class="btn btn-outline-dark rounded w-100">Indian Origin
		                                        	 </button>
		                                        	   </div>
		                                        	 <div class="col-md-4 mb-md-2">
		                                        	   <button type="button"
		                                        	   class="btn btn-outline-dark rounded w-100">Medical
		                                        	 </button>
		                                        	   </div>
		                                        	 </div>
                                        
		                                         </div>
	                                              </div>
	                                              <!-- Assigned Teams colums (end) -->                                               
	                                              <!-- in line / side by side buttons (start) -->
	                                              <div class="col-md-12 mb-md-2 text-center gap-2 mt-4">
	                                            	 <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                            
	                                            		 <span>Lock Account</span>
	                                            	 </button>
	                                            	 <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                            
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
			                    	   <h3>Schedule</h3>
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
			                        				<svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
			                        					<path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
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
			                        	<img src="/html-prototype/images/temp/img-placeholder-calendar.png" class="w-100" alt="Dashboard Calendar"/>
			                        </div>
		                        </div>
		                        <!-- Schedule tab end -->
		                        <div class="tab-pane fade" id="availability-tab-pane" role="tabpanel" aria-labelledby="availability-tab" tabindex="0">
			                       <div class="row mb-4">
			                    	<p>In this section, you can add your availability schedule for each working day. You can also register any future holidays when you are not available. It is flexible to create same working hours schedule or different for each day. You can choose your working days as well.</p>
		                          </div>
			                      <div class="row mb-3">
			                    	<h2>Availability</h2>
			                      </div>
			                       <div class="d-flex justify-content-between mb-4">
			                    	<div class="d-inline-flex align-items-center gap-4">
			                    		<div class="mb-4 mb-lg-0">
			                    			<button @click="defaultAvailability = true" class="btn btn-outline-primary rounded">Change Default Availability</button>
			                    		</div>
			                    		<div class="mb-4 mb-lg-0">
			                    			<button @click="specificDateAvailability = true" class="btn btn-primary rounded">Change Availability For Specific Date</button>
			                    		</div>
			                    	</div>
			                      </div>
                                  <div>
			                    	<img src="/html-prototype/images/temp/img-placeholder-calendar.png" class="w-100" alt="Dashboard Calendar"/>
			                      </div>
		                        </div>
		                        <!-- Availability Tab End-->
		                        <div class="tab-pane fade" id="provider-feedback-tab-pane" role="tabpanel" aria-labelledby="provider-feedback-tab" tabindex="0">
                                    <div class="row mb-4">
										<h3>Feedback</h3>
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
												<svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
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
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
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
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
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
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
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
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
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
																	<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Image">
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
									<div class="col-md-12 d-flex col-12 gap-4 mb-4">
										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="keyword-search">
													Search
												</label>
												<input type="text" id="keyword-search" class="form-control"  placeholder="Keyword Search"/>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="tags">
													Tags
												</label>
												<input type="text" id="tags" class="form-control"  placeholder="Tags"/>
											</div>
										</div>
										<div class="col-md-3 col-12">
											<div class="mb-4">
												<label class="form-label" for="payment-status">
													Document Type
												</label>
											    <select class="select2 form-select" id="payment-status">
													<option>Select Document Type</option>
												</select>	
											</div>
										</div>
									</div>
									<div class="col-md-12 d-flex col-12 gap-4 mb-4">
										
										<div class="col-md-3 col-12">
											<div>
												<label class="form-label" for="set_set_date">
													Expiry Date
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
												<label class="form-label" for="payment-status">
													Status
												</label>
											    <select class="select2 form-select" id="payment-status">
													<option>Pending</option>
												</select>	
											</div>
										</div>
									</div>
									<div class="row">
										<ul class="nav nav-tabs" id="myTab" role="tablist">
											<li class="nav-item mx-5" role="presentation">
											  <button class="nav-link active btn btn-primary rounded" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending-tab-pane" type="button" role="tab" aria-controls="pending-tab-pane" aria-selected="true">Pending Credentials</button>
											</li>
											<li class="nav-item mx-5" role="presentation">
											  <button class="nav-link btn btn-inactive rounded" id="active-credentials-tab" data-bs-toggle="tab" data-bs-target="#active-credentials-tab-pane" type="button" role="tab" aria-controls="active-credentials-tab-pane" aria-selected="false">Active Credentials</button>
											</li>
											<li class="nav-item mx-5" role="presentation">
											  <button class="nav-link btn btn-inactive rounded bg-inactive" id="expired-tab" data-bs-toggle="tab" data-bs-target="#expired-tab-pane" type="button" role="tab" aria-controls="expired-tab-pane" aria-selected="false">Expired Credentials</button>
											</li>
										  </ul>
										  <div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="pending-tab-pane" role="tabpanel" aria-labelledby="pending-tab" tabindex="0">
												<div class="row">
													<h3>Pending Credentials</h3>
												</div>
												<div class="container">
													<div class="row mb-4">
													  <div class="col-md-11">
														<div class="row">
															<div class="col border border-warning rounded ">
																<div class="mt-4">
																	<div>Credential Title</div>
																	<div>Associated with Tag: Covid19</div>
																	<div>Type: Upload Only</div>
																	<button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																	</div>
															  </div>
															  <div class="col border border-warning rounded mx-3">
																<div class="mt-4">
																<div>Credential Title</div>
																<div>Associated with Tag: Covid19</div>
																<div>Type: Upload Only</div>
																<button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																</div>
															  </div>
															  <div class="col border border-warning rounded">
																<div class="mt-4">
																	<div>Credential Title</div>
																	<div>Associated with Tag: Covid19</div>
																	<div>Type: Upload Only</div>
																	<button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																	</div>
															  </div>
															  <div class="col border border-warning rounded mx-3">
																<div class="mt-4">
																	<div>Credential Title</div>
																	<div>Associated with Tag: Covid19</div>
																	<div>Type: Upload Only</div>
																	<button @click="pendingCredentials = true" class="btn btn-primary rounded m-3">Upload</button>
																	</div>
															  </div>
														</div>
													  </div>
													</div>
													<div class="row mb-4">
														<div class="col-md-11">
														  <div class="row">
															  <div class="col border border-warning rounded ">
																  <div class="mt-4">
																	  <div>Credential Title</div>
																	  <div>Associated with Tag: Covid19</div>
																	  <div>Type: Upload Only</div>
																	  <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																	  </div>
																</div>
																<div class="col border border-warning rounded mx-3">
																  <div class="mt-4">
																  <div>Credential Title</div>
																  <div>Associated with Tag: Covid19</div>
																  <div>Type: Upload Only</div>
																  <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																  </div>
																</div>
																<div class="col border border-warning rounded">
																  <div class="mt-4">
																	  <div>Credential Title</div>
																	  <div>Associated with Tag: Covid19</div>
																	  <div>Type: Upload Only</div>
																	  <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																	  </div>
																</div>
																<div class="col border border-warning rounded mx-3">
																  <div class="mt-4">
																	  <div>Credential Title</div>
																	  <div>Associated with Tag: Covid19</div>
																	  <div>Type: Upload Only</div>
																	  <button @click="pendingCredentials = true" class="btn btn-primary rounded m-3">Upload</button>
																	  </div>
																</div>
														  </div>
														</div>
													  </div>
													  <div class="row mb-4">
														<div class="col-md-11">
														  <div class="row">
															  <div class="col border border-warning rounded ">
																  <div class="mt-4">
																	  <div>Credential Title</div>
																	  <div>Associated with Tag: Covid19</div>
																	  <div>Type: Upload Only</div>
																	  <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																	  </div>
																</div>
																<div class="col border border-warning rounded mx-3">
																  <div class="mt-4">
																  <div>Credential Title</div>
																  <div>Associated with Tag: Covid19</div>
																  <div>Type: Upload Only</div>
																  <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																  </div>
																</div>
																<div class="col border border-warning rounded">
																  <div class="mt-4">
																	  <div>Credential Title</div>
																	  <div>Associated with Tag: Covid19</div>
																	  <div>Type: Upload Only</div>
																	  <button @click="pendingCredentials = true" class="btn btn-primary rounded mx-3 mt-3">Upload</button>
																	  </div>
																</div>
																<div class="col border border-warning rounded mx-3">
																  <div class="mt-4">
																	  <div>Credential Title</div>
																	  <div>Associated with Tag: Covid19</div>
																	  <div>Type: Upload Only</div>
																	  <button @click="pendingCredentials = true" class="btn btn-primary rounded m-3">Upload</button>
																	  </div>
																</div>
														  </div>
														</div>
													  </div>
												  </div>
											</div>
											<div class="tab-pane fade" id="active-credentials-tab-pane" role="tabpanel" aria-labelledby="active-credentials-tab" tabindex="0">
												<div class="row">
													<h3>Active Credentials</h3>
												</div>
												<div class="container">
													<div class="row mb-4">
													  <div class="col-md-11">
														<div class="row">
															<div class="col border border-success rounded ">
																<div class="mt-4">
																	<div>Credential Title</div>
																	<div>Associated with Tag: Covid19</div>
																	<div>Type: Upload Only</div>
																	<button type="button" data-bs-toggle="modal" data-bs-target="#viewButtonModal" class="btn btn-primary btn-has-icon rounded m-3">View</button>
																	</div>
															  </div>
															  <div class="col border border-success rounded mx-3">
																<div class="mt-4">
																<div>Credential Title</div>
																<div>Associated with Tag: Covid19</div>
																<div>Type: Upload Only</div>
																<button type="button" data-bs-toggle="modal" data-bs-target="#viewButtonModal" class="btn btn-primary btn-has-icon rounded m-3">View</button>
																</div>
															  </div>
															  <div class="col border border-success rounded">
																<div class="mt-4">
																	<div>Credential Title</div>
																	<div>Associated with Tag: Covid19</div>
																	<div>Type: Upload Only</div>
																	<button type="button" data-bs-toggle="modal" data-bs-target="#viewButtonModal" class="btn btn-primary btn-has-icon rounded m-3">View</button>
																	</div>
															  </div>
															  <div class="col border border-success rounded mx-3">
																<div class="mt-4">
																	<div>Credential Title</div>
																	<div>Associated with Tag: Covid19</div>
																	<div>Type: Upload Only</div>
																	<button type="button" data-bs-toggle="modal" data-bs-target="#viewButtonModal" class="btn btn-primary btn-has-icon rounded m-3">View</button>
																	</div>
															  </div>
														</div>
													  </div>
													</div>
												  </div>
											</div>
											<div class="tab-pane fade" id="expired-tab-pane" role="tabpanel" aria-labelledby="expired-tab" tabindex="0">
												<div class="row">
													<h3>Expired Credentials</h3>
												</div>
												<div class="container">
													<div class="row mb-4">
													  <div class="col-md-11">
														<div class="row">
															<div class="col border border-danger rounded ">
																<div class="mt-4">
																	<div>Credential Title</div>
																	<div>Associated with Tag: Covid19</div>
																	<div>Type: Sign & Upload</div>
																	<div>Expiry: 12/04/2023</div>
																	<button class="btn btn-primary rounded mx-3 mt-3">Renew</button>
																	</div>
															  </div>
															  <div class="col border border-danger rounded mx-3">
																<div class="mt-4">
																<div>Credential Title</div>
																<div>Associated with Tag: Covid19</div>
																<div>Type: Sign & Upload</div>
																<div>Expiry: 12/04/2023</div>
																<button class="btn btn-primary rounded mx-3 mt-3">Renew</button>
																</div>
															  </div>
															  <div class="col border border-danger rounded">
																<div class="mt-4">
																	<div>Credential Title</div>
																	<div>Associated with Tag: Covid19</div>
																	<div>Type: Sign & Upload</div>
																	<div>Expiry: 12/04/2023</div>
																	<button class="btn btn-primary rounded mx-3 mt-3">Renew</button>
																	</div>
															  </div>
															  <div class="col border border-danger rounded mx-3">
																<div class="mt-4">
																	<div>Credential Title</div>
																	<div>Associated with Tag: Covid19</div>
																	<div>Type: Sign & Upload</div>
																	<div>Expiry: 12/04/2023</div>
																	<button class="btn btn-primary rounded m-3">Renew</button>
																	</div>
															  </div>
														</div>
													  </div>
													</div>
												  </div>
											</div>
										  </div>
										</div>
								</div>
                                <!-- Provider Feedback Tab End-->
								<div class="tab-pane fade" id="invoices-remittances-tab-pane" role="tabpanel" aria-labelledby="invoices-remittances-tab" tabindex="0">
									<div class="row">
										<h3>Invoices & Remittances</h3>
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
												<svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
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
								    <div class="row">
										<h3>Notes</h3>
										<div class="col-md-6 col-12 mb-4">
											<label class="form-label" for="notes-column">
												Add Notes
											</label>
											<textarea class="form-control" rows="3" placeholder="" name="notesColumn" id="notes-column"></textarea>
										</div>
										<div class="row mb-4">
											<div class="col-md-6 col-12 d-flex">
												<div>
													<button class="btn btn-primary rounded ">Cancel</button>
												</div>
												<div>
													<button class="btn btn-primary rounded mx-2 ">Add</button>
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-md-8">
											<div class="d-inline-flex align-items-center">
												<div class="bg-warning rounded px-2 py-3">
													<p class="mb-0">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
													</p>
												</div>
												<div class="d-flex actions mx-2">
													<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
														<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                       </svg>
													</a>
													<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
														<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                        </svg>
													</a>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row mb-3">
										<div class="col-md-8">
											<div class="d-inline-flex align-items-center">
												<div class="bg-warning rounded px-2 py-3">
													<p class="mb-0">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
														<span class="text-primary">
															@Admin @Comapny
														</span>
													</p>
												</div>
												<div class="d-flex actions mx-2">
													<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
														<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                       </svg>
													</a>
													<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
														<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                        </svg>
													</a>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row mb-3">
										<div class="col-md-8">
											<div class="d-inline-flex align-items-center">
												<div class="d-inline-flex bg-warning rounded px-2 py-3">
													<div>
														<div>
														    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="40" cy="40" r="40" fill="#D9D9D9"/>
														    </svg>
													    </div>
													    <div class="mt-2">
														     <span class="text-secondary">
															 08/24/2022
														     </span>
													    </div>	
													</div>
													<div class="mx-2 mt-3">
														<p >
															consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
															<span class="text-primary">
																@Thomas_charles
															</span>
														</p>
													</div>
												</div>
												<div class="d-flex actions mx-2">
													<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
														<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                       </svg>
													</a>
													<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
														<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                        </svg>
													</a>
												</div>
											</div>
										</div>
									</div>

									<div class="row mb-3">
										<div class="col-md-8">
											<div class="d-inline-flex align-items-center">
												<div class="bg-warning rounded px-2 py-3">
													<p class="mb-0">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
														<span class="text-primary">
															@Thomas_charles
														</span>
													</p>
												</div>
												<div class="d-flex actions mx-2">
													<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
														<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                       </svg>
													</a>
													<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
														<svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                        </svg>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Notes Tab End-->
								<div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab" tabindex="0">
									<div class="row">
										<h3>Notification</h3>
										<p class="mt-3">
											Here you can control how you are notified about Profile activity.
										</p>
									</div>
									<div class="row mb-4">
										<div class="col-md-4 border rounded">
											<div class="row">
												<div class="d-flex justify-content-between mb-2 p-2">
													<div class="d-inline-flex align-items-center gap-4">
														<svg width="47" height="41" class="ms-2" viewBox="0 0 47 41" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M39.4375 1H7.5625C3.94381 1 1 3.93694 1 7.54647V26.253C1 29.8632 3.94381 32.7994 7.5625 32.7994H9.79402L6.72272 38.9275C6.53873 39.2963 6.61737 39.7436 6.9174 40.0261C7.09528 40.1941 7.32812 40.2819 7.5625 40.2819C7.72206 40.2819 7.88162 40.2429 8.02743 40.159L20.9371 32.7994H39.4375C43.0562 32.7994 46 29.8632 46 26.253V7.54647C46 3.93694 43.0562 1 39.4375 1ZM44.1235 26.2507C44.1235 28.8288 42.0194 30.9275 39.436 30.9275H20.686C20.5226 30.9275 20.363 30.9702 20.2203 31.0504L9.7841 37.0014L12.1508 32.2818C12.2966 31.9932 12.2798 31.6474 12.1095 31.3726C11.9385 31.0977 11.637 30.929 11.3125 30.929H7.5625C4.97903 30.929 2.875 28.8303 2.875 26.253V7.54647C2.875 4.96911 4.97903 2.87042 7.5625 2.87042V2.86889H39.436C42.0194 2.86889 44.1235 4.96758 44.1235 7.54494V26.2507Z" fill="black" stroke="black"/>
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
														<svg width="52" height="36" viewBox="0 0 52 36" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M51 5.29326C50.9991 5.15222 50.9915 5.01288 50.9771 4.87269C50.9618 4.73335 50.9405 4.59485 50.9125 4.45721C50.8844 4.31957 50.8505 4.18363 50.8088 4.04938C50.7672 3.91599 50.7196 3.78344 50.6661 3.6543C50.6117 3.52515 50.5514 3.39855 50.4851 3.2745C50.4188 3.1513 50.3458 3.03066 50.2685 2.91425C50.1903 2.79785 50.1062 2.68485 50.017 2.57694C49.9277 2.46819 49.8343 2.36453 49.7349 2.26512C49.6355 2.16571 49.5318 2.07225 49.4231 1.98304C49.3152 1.89383 49.203 1.80971 49.0857 1.73155C48.9693 1.65338 48.8495 1.58116 48.7263 1.51489C48.6023 1.44861 48.4757 1.38829 48.3466 1.33391C48.2174 1.27953 48.0857 1.23195 47.9515 1.19117C47.8172 1.14954 47.6813 1.1147 47.5436 1.08666C47.4068 1.05863 47.2684 1.03738 47.1282 1.02294C46.9888 1.0085 46.8495 1.00085 46.7093 1H5.29072C5.15052 1 5.01033 1.00765 4.87014 1.02124C4.7308 1.03569 4.59231 1.05608 4.45466 1.08412C4.31702 1.1113 4.18108 1.14614 4.04598 1.18692C3.91174 1.22771 3.78004 1.27529 3.65005 1.32966C3.5209 1.38319 3.3943 1.44352 3.27026 1.50979C3.14621 1.57606 3.02641 1.64828 2.90916 1.72645C2.79275 1.80462 2.67975 1.88788 2.57185 1.97709C2.46309 2.06631 2.35943 2.16062 2.26003 2.26003C2.16062 2.35943 2.06631 2.46394 1.97709 2.57185C1.88788 2.6806 1.80462 2.7936 1.72645 2.91001C1.64828 3.02726 1.57606 3.14706 1.50979 3.27111C1.44352 3.39515 1.38319 3.52175 1.32966 3.65175C1.27529 3.78174 1.22855 3.91344 1.18692 4.04768C1.14614 4.18193 1.11215 4.31872 1.08412 4.45636C1.05693 4.594 1.03569 4.7325 1.02209 4.87269C1.00765 5.01203 1 5.15222 1 5.29326V30.9815C1.00085 31.1225 1.0085 31.2619 1.02294 31.4021C1.03823 31.5414 1.05948 31.6799 1.08751 31.8175C1.11555 31.9552 1.14954 32.0911 1.19117 32.2245C1.2328 32.3588 1.28038 32.4913 1.33391 32.6204C1.38829 32.7496 1.44861 32.8762 1.51489 33.0002C1.58116 33.1234 1.65338 33.2441 1.73155 33.3605C1.80971 33.4769 1.89383 33.589 1.98304 33.6978C2.0714 33.8066 2.16572 33.9102 2.26512 34.0096C2.36453 34.1082 2.46819 34.2025 2.57609 34.2917C2.68485 34.3809 2.797 34.465 2.9134 34.5432C3.02981 34.6214 3.15046 34.6936 3.27365 34.7599C3.39685 34.8261 3.52345 34.8865 3.65345 34.9408C3.78259 34.9952 3.91429 35.0428 4.04853 35.0836C4.18278 35.1252 4.31787 35.16 4.45551 35.1881C4.59316 35.2161 4.73165 35.2374 4.87099 35.2518C5.01033 35.2662 5.15052 35.2739 5.29072 35.2747H46.7093C46.8495 35.2747 46.9897 35.2679 47.1299 35.2535C47.2692 35.2391 47.4077 35.2187 47.5453 35.1906C47.683 35.1634 47.8198 35.1286 47.954 35.0878C48.0883 35.047 48.22 34.9995 48.35 34.9459C48.4791 34.8916 48.6065 34.8312 48.7297 34.765C48.8538 34.6987 48.9744 34.6265 49.0908 34.5483C49.2072 34.4701 49.3203 34.3869 49.429 34.2976C49.5369 34.2084 49.6414 34.1141 49.7408 34.0147C49.8394 33.9153 49.9337 33.8116 50.0229 33.7029C50.1121 33.5941 50.1954 33.4811 50.2736 33.3647C50.3517 33.2483 50.4239 33.1277 50.4902 33.0036C50.5565 32.8796 50.6168 32.753 50.6703 32.623C50.7247 32.4938 50.7723 32.3613 50.8131 32.2271C50.8539 32.0928 50.8878 31.9569 50.9159 31.8184C50.9439 31.6807 50.9643 31.5422 50.9788 31.4021C50.9924 31.2627 51 31.1225 51 30.9815V5.29326ZM34.2985 18.1374L49.0951 3.92703C49.3389 4.34931 49.4604 4.80472 49.4596 5.29241V30.9815C49.4596 31.47 49.3381 31.9246 49.0934 32.3469L34.2985 18.1374ZM46.7076 2.54126C47.1596 2.54041 47.5853 2.64577 47.9846 2.85648L26.9898 23.0194C26.9236 23.0832 26.8522 23.1392 26.7757 23.1894C26.6993 23.2395 26.6185 23.2811 26.5336 23.3151C26.4486 23.35 26.3611 23.3754 26.2719 23.3933C26.1818 23.4103 26.0909 23.4188 25.9992 23.4188C25.9082 23.4188 25.8173 23.4103 25.7273 23.3933C25.638 23.3754 25.5505 23.35 25.4656 23.3151C25.3806 23.2811 25.2999 23.2395 25.2234 23.1894C25.147 23.1392 25.0756 23.0832 25.0093 23.0194L4.01455 2.85818C4.41388 2.64661 4.83955 2.54211 5.29072 2.54296L46.7076 2.54126ZM2.90661 32.3469C2.66191 31.9246 2.53956 31.47 2.54041 30.9815V5.29326C2.53956 4.80557 2.66106 4.35016 2.90406 3.92788L17.7024 18.1374L2.90661 32.3469ZM5.29072 33.7335C4.83955 33.7352 4.41388 33.6298 4.01455 33.4183L18.8137 19.2054L23.9447 24.1316C24.0815 24.2633 24.2293 24.3806 24.3891 24.4842C24.548 24.587 24.7162 24.6746 24.8921 24.7451C25.0679 24.8164 25.2498 24.87 25.4358 24.9057C25.6219 24.9422 25.8105 24.96 26 24.96C26.1903 24.96 26.3781 24.9422 26.5642 24.9057C26.7511 24.87 26.9321 24.8164 27.1079 24.7451C27.2847 24.6746 27.452 24.587 27.6118 24.4842C27.7707 24.3806 27.9194 24.2633 28.0561 24.1316L33.1855 19.2054L47.9855 33.4166C47.5861 33.6281 47.1604 33.7326 46.7093 33.7318L5.29072 33.7335Z" fill="black" stroke="black"/>
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
														<svg width="57" height="44" viewBox="0 0 57 44" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M41.3374 29.7475C41.2768 29.6869 41.2768 29.5647 41.2768 29.4424V17.7844C41.2768 11.1315 36.2269 5.69997 29.7167 5.02815V2.22048C29.7167 1.54866 29.17 1 28.5 1C27.831 1 27.2833 1.54866 27.2833 2.22048V5.02815C20.8347 5.63839 15.7241 11.1315 15.7241 17.7844V29.5031C15.7241 29.6253 15.6626 29.6869 15.6019 29.7475L12.56 32.7997C12.0123 33.3483 11.7688 34.0202 11.7688 34.8133V35.7286C11.7688 37.2552 13.0471 38.5363 14.568 38.5363H23.0853C23.5117 41.1004 25.7623 43.114 28.5 43.114C31.2386 43.114 33.4892 41.1611 33.9156 38.5363H42.4329C43.9538 38.5363 45.2312 37.2552 45.2312 35.7286V34.8133C45.2312 34.0808 44.927 33.3483 44.4409 32.7997L41.3374 29.7475ZM28.5 40.6731C27.162 40.6731 26.0059 39.7577 25.641 38.5363H31.4206C30.9951 39.7577 29.839 40.6731 28.5 40.6731ZM42.7977 35.7286C42.7977 35.9125 42.6158 36.0953 42.4329 36.0953H14.568C14.3852 36.0953 14.2032 35.9125 14.2032 35.7286V34.8133C14.2032 34.691 14.2639 34.6304 14.3245 34.5697L17.3664 31.5176C17.9141 30.968 18.1576 30.2971 18.1576 29.5031V17.7844C18.1576 12.1084 22.7811 7.40846 28.5 7.40846C34.2198 7.40846 38.8433 12.0468 38.8433 17.7844V29.5031C38.8433 30.2355 39.1475 30.968 39.6346 31.5176L42.6764 34.5697C42.7371 34.6304 42.7977 34.7526 42.7977 34.8133V35.7286ZM11.8304 28.4655C11.5868 28.7099 11.2826 28.8322 10.9785 28.8322C10.6743 28.8322 10.3701 28.7099 10.1265 28.4655C8.17919 26.5125 7.08467 23.8877 7.08467 21.1417C7.08467 18.3946 8.17919 15.7708 10.1265 13.8169C10.6136 13.3289 11.3433 13.3289 11.8304 13.8169C12.3165 14.3059 12.3165 15.0383 11.8304 15.5263C10.3094 17.0519 9.51817 19.0049 9.51817 21.1417C9.51817 23.2775 10.3701 25.2305 11.8304 26.757C12.3165 27.245 12.3165 27.9775 11.8304 28.4655ZM7.51016 31.0903C7.99723 31.5783 7.99723 32.3107 7.51016 32.7997C7.26663 33.0432 6.96244 33.1654 6.65825 33.1654C6.35406 33.1654 6.04988 33.0432 5.80634 32.7997C2.70382 29.6869 1 25.5356 1 21.1417C1 16.7468 2.70382 12.5964 5.80634 9.48365C6.29341 8.99564 7.02402 8.99564 7.51016 9.48365C7.99723 9.97165 7.99723 10.7041 7.51016 11.1931C4.89378 13.8169 3.43443 17.3571 3.43443 21.1417C3.43443 24.9253 4.89378 28.4048 7.51016 31.0903ZM46.8744 28.4655C46.6309 28.7099 46.3267 28.8322 46.0225 28.8322C45.7183 28.8322 45.4141 28.7099 45.1706 28.4655C44.6844 27.9775 44.6844 27.245 45.1706 26.757C48.274 23.6442 48.274 18.6391 45.1706 15.5263C44.6844 15.0383 44.6844 14.3059 45.1706 13.8169C45.6576 13.3289 46.3873 13.3289 46.8744 13.8169C50.8895 17.846 50.8895 24.4373 46.8744 28.4655ZM56 21.1417C56 25.5356 54.2971 29.6869 51.1937 32.7997C50.9501 33.0432 50.6459 33.1654 50.3418 33.1654C50.0376 33.1654 49.7334 33.0432 49.4908 32.7997C49.0037 32.3107 49.0037 31.5783 49.4908 31.0903C52.1062 28.4655 53.5665 24.9253 53.5665 21.1417C53.5665 17.3571 52.1062 13.8785 49.4908 11.1931C49.0037 10.7041 49.0037 9.97165 49.4908 9.48365C49.9769 8.99564 50.7075 8.99564 51.1937 9.48365C54.2971 12.5964 56 16.7468 56 21.1417Z" fill="black" stroke="black" stroke-width="0.7"/>
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
											Reports
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
												  <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
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
											<img src="/html-prototype/images/temp/image-placeholder-assignment-graph.png" height="200" width="800" class="img-fluid" alt="Pending Payment image">
										</div>
									  </div>
									<div class="mb-4">
										<div class="d-flex justify-content-between">
											<div class="d-inline-flex align-items-center gap-4">
											  <h2>Payments</h2>
											</div>
											<div class="dropdown me-5">           
												<button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												  <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
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
											<img src="/html-prototype/images/temp/img-placeholder-pending-payment.png" class="img-fluid" alt="Pending Payment image">
										</div>
									  </div>
								</div>
								<!-- Reports Tab End-->
								<div class="tab-pane fade" id="log-tab-pane" role="tabpanel" aria-labelledby="log-tab" tabindex="0">
									<div class="row mb-4">
										<h3>Logs</h3>
									</div>
									<div class="row mb-4">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
												<svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
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
								<!-- Log Tab End-->
								<div class="tab-pane fade" id="settings-tab-pane" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
									<div class="row mb-2">
										<h2>Settings</h2>
									</div>
								    <div class="row mb-2">
                                        <h3>Provider Payment & Preference</h3>
										<div class="row">
											<div class="col-lg-12">
												<div class="form-check form-switch">
													<input class="form-check-input" aria-label="Toggle Provider Payroll" type="checkbox" role="switch" id="provider-payroll" checked>
													<label class="form-check-label" for="provider-payroll">Provider Payroll</label>
													<label class="form-check-label" for="provider-payroll">Provider Payroll</label>
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
														Rate Per Mile to Reimburse Providers
													</label>
													<a href="#">
														KM <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path> </svg>
													</a>
												</div>
		
												<input class="form-control" type="" id="reimburseProviders" placeholder="$00:00">
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6 mb-4">
												<div class="d-lg-flex ">
													<label class="form-label" for="compensatedTravelTime">
														Rate To Reimburse Compensated Travel Time
													</label>
													<div class="ms-1 mt-1">
														<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M7.5 0C3.3645 0 0 3.3645 0 7.5C0 11.6355 3.3645 15 7.5 15C11.6355 15 15 11.6355 15 7.5C15 3.3645 11.6355 0 7.5 0ZM8.25 12H6.75V10.5H8.25V12ZM8.982 8.33625C8.835 8.45475 8.69325 8.568 8.58075 8.6805C8.27475 8.98575 8.25075 9.26325 8.25 9.27525V9.375H6.75V9.24975C6.75 9.16125 6.77175 8.367 7.5195 7.61925C7.66575 7.473 7.84725 7.3245 8.03775 7.17C8.58825 6.72375 8.94975 6.39825 8.94975 5.94975C8.94104 5.57086 8.78438 5.21044 8.5133 4.94559C8.24222 4.68074 7.87824 4.53251 7.49926 4.5326C7.12027 4.5327 6.75638 4.68112 6.48543 4.94611C6.21449 5.2111 6.05802 5.57161 6.0495 5.9505H4.5495C4.5495 4.32375 5.87325 3 7.5 3C9.12675 3 10.4505 4.32375 10.4505 5.9505C10.4505 7.14825 9.56625 7.863 8.982 8.33625Z" fill="#888575"/>
															</svg>                                                                    
														</div>
												</div>
												<div class="row">
												<div class="col-lg-8 d-inline-flex">
													<input class="form-control" type="" id="compensatedTravelTime" placeholder="$00:00">
													<div class="col-lg-4 ms-2 mt-3"><span>Per hour</span></div>
												</div>
											</div>
											<div class="row ms-2 mt-2">
												<div class="form-check">
													<input class="form-check-input" id="SameAsServiceRate" name="SameAsServiceRate" type="checkbox" tabindex="" />
													<label class="form-check-label" for="SameAsServiceRate">Same as Service Rate</label>
												  </div>
											 </div>
											</div>
										</div>
								
									</div>
								</div>
								<!-- Settings Tab End-->
								<div class="tab-pane fade" id="payments-preferences-tab-pane" role="tabpanel" aria-labelledby="payments-preferences-tab" tabindex="0">
                                    <div class="row">
										<h3>Payment Preferences</h3>
										<div class="col-12 form-actions d-flex">
											<div class="mb-4">
												<button type="submit"
												class="btn btn-outline-primary">Direct Deposit</button>
												<button type="button"
													class="btn btn-primary mx-2">Mail a Check</button>
											</div>
										</div>
										<div class="row">
											<h2>Select Address</h2>
											<div class="col-md-3">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
													<label class="form-check-label" for="flexRadioDefault1">
														Select Profile Default Address
													</label>
													</div>
													<div class="mb-3 mx-4">
														<span class="text-secondary">Mrs Smith 98 Shirley Street PIMPAMAQLD 4209 AUSTRALIA</span>
													</div>
													<div>
														<button type="button" class="btn btn-primary btn-has-icon rounded mb-4" data-bs-toggle="modal" data-bs-target="#addAddressModal">
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
															</svg>
															<span>Add Address</span>
														</button>
													</div>
											</div>
										</div>
										<div class="col-12 justify-content-center form-actions d-flex">
											<button type="submit"
											class="btn btn-primary rounded">Save</button>
										</div>
									</div>
								</div>
		                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>


		</div> <!-- tab-content -->
		 <!-- END: Provider Details ................... -->
		 </div>




				 </div>
			   </div>
			 </div>
			 @include('panels.common.default-availability')
			 @include('panels.common.specific-date-availibility')
			 @include('panels.common.pending-credentials')
			 @include('modals.common.view-button')
			 @include('modals.common.add-address')
			 @include('modals.mark-as-paid')
			 @include('modals.common.revert-back')
			 @include('modals.remittance-details')

		   </section>
		   <!-- Basic Floating Label Form section end -->
		 </div>
	   </div>
	 <!-- End: Content-->