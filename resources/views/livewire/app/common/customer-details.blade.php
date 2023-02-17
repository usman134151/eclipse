<div>
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">Customer Details</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
									<x-icon name="home"/>
								</a>
							</li>
							<li class="breadcrumb-item">
								Customers
							</li>
							<li class="breadcrumb-item">
								Customer Details
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
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard-tab-pane" type="button" role="tab" aria-controls="dashboard-tab-pane" aria-selected="true">
										<x-icon name="tablet"/>
										<span>Dashboard</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
										<x-icon name="gray-user"/>
										<span>Profile</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
										<x-icon name="gray-user"/>
										<span>Service Consumer Profile</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule-tab-pane" type="button" role="tab" aria-controls="schedule-tab-pane" aria-selected="false">
										<x-icon name="gray-calendar"/>
										<span>Schedule</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="service-requests-tab" data-bs-toggle="tab" data-bs-target="#service-requests-tab-pane" type="button" role="tab" aria-controls="service-requests-tab-pane" aria-selected="false">
										<x-icon name="gray-journal"/>
										<span>Service Requests</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="my-drive-tab" data-bs-toggle="tab" data-bs-target="#my-drive-tab-pane" type="button" role="tab" aria-controls="my-drive-tab-pane" aria-selected="false">
										<x-icon name="gray-drive"/>
										<span>My Drive</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="customer-feedback-tab" data-bs-toggle="tab" data-bs-target="#customer-feedback-tab-pane" type="button" role="tab" aria-controls="customer-feedback-tab-pane" aria-selected="false">
										<x-icon name="gray-rated-user"/>
										<span>Feedback</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="invoices-tab" data-bs-toggle="tab" data-bs-target="#invoices-tab-pane" type="button" role="tab" aria-controls="invoices-tab-pane" aria-selected="false">
										<x-icon name="gray-invoice"/>
										<span>Invoices</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments-tab-pane" type="button" role="tab" aria-controls="payments-tab-pane" aria-selected="false">
										<x-icon name="gray-payment"/>
										<span>Payments</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="referrals-tab" data-bs-toggle="tab" data-bs-target="#referrals-tab-pane" type="button" role="tab" aria-controls="referrals-tab-pane" aria-selected="false">
										<x-icon name="gray-referral"/>
										<span>Referrals</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes-tab-pane" type="button" role="tab" aria-controls="notes-tab-pane" aria-selected="false">
										<x-icon name="gray-note"/>
										<span>Notes</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#reports-tab-pane" type="button" role="tab" aria-controls="reports-tab-pane" aria-selected="false">
										<x-icon name="gray-bar-chart"/>
										<span>Reports</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab" aria-controls="notifications-tab-pane" aria-selected="false">
										<x-icon name="gray-bell"/>
										<span>Notifications</span>
									</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log-tab-pane" type="button" role="tab" aria-controls="log-tab-pane" aria-selected="false">
										<x-icon name="gray-log"/>
										<span>Log</span>
									</button>
								</li>
							</ul>
							
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
									<div class="col-md-12 mb-md-2 mt-5">
										<!-- main row (s) -->
										<div class="row mt-2 mb-5">
											<!-- left-col -->
											<div class="col-md-5 me-5">
												<div class="mb-4">
													<div class="row">
														<div class="col-md-4">
															<div class="d-inline-block position-relative">
																<img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle" alt="Profile Image of Admin Staff Team"/>
															</div>
															{{-- Here custom style is added for giving negative margin temporarily --}}
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
																		Sydney, Australia
																	</label>
																</div>
															</div>
														</div>
														<div class="col-md-7 ms-4">
															<h3 class="font-family-tertiary fw-medium">James Mary (He)</h3>
															<div class="row mb-4">
																<div class="col-md-12">
																	<div class="row mb-1">
																		<div class="col-md-12 d-flex font-family-tertiary fw-medium">
																			<div class="col-md-3">
																				<label for="">
																					Position:
																				</label>
																			</div>
																			<div class="col-md-9">
																				<p>Supervisor</p>
																			</div>
																		</div>
																	</div>
																	<div class="row mb-1">
																		<div class="col-md-12 d-flex gap-2 font-family-tertiary fw-medium">
																			<div class="col-md-3">
																				<label for="">
																					Company:
																				</label>
																			</div>
																			<div class="col-md-9">
																				<p>
																					Example Company
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="row mb-1">
																		<div class="col-md-12 d-flex gap font-family-tertiary fw-medium">
																			<div class="col-md-5">
																				<label for="">
																					Department(s):
																				</label>
																			</div>
																			<div class="col-md-10">
																				<p>
																					Language Interpreting
																				</p>
																			</div>
																		</div>
																	</div>
																	<div class="row mb-1">
																		<div class="col-md-12 d-flex gap-1 font-family-tertiary fw-medium">
																			<div class="col-md-4">
																				<label for="">
																					Access Role:
																				</label>
																			</div>
																			<div class="col-md-10">
																				<p>
																					Service Consumer
																				</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row mb-4">
													<div class="col-md-12 mt-4">
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Phone Number:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		(987) 653-5875
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Email Address:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">English</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Primary Language:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">jamesmary@gmail.com</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Physical Address:
																	</label>
																</div>
																<div class="col-md-12 align-self-center">
																	<div class="font-family-secondary">
																		Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Billing Address:
																	</label>
																</div>
																<div class="col-md-12 align-self-center">
																	<div class="font-family-secondary">
																		Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Provider Experience:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		<x-icon name="filled-star"/>
																		<x-icon name="filled-star"/>
																		<x-icon name="filled-star"/>
																		<x-icon name='star'/>
																		<x-icon name='star'/>
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Supervisor:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		Thomas Charles , Peter Henry
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Billing Manager:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		Wade Dave , Seth Ivan
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Completed Requests:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		60 Hours
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-5">
																	<label class="col-form-label" for="">
																		Open Requests:
																	</label>
																</div>
																<div class="col-md-7 align-self-center">
																	<div class="font-family-secondary">
																		20 Hours
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row mb-4">
													<div class="col-md-12">
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-4">
																	<label class="col-form-label" for="">
																		Total Invoiced:
																	</label>
																</div>
																<div class="col-md-5 align-self-center">
																	<div class="font-family-secondary">
																		$500
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-4">
																	<label class="col-form-label" for="">
																		Total Paid:
																	</label>
																</div>
																<div class="col-md-5 align-self-center">
																	<div class="font-family-secondary">
																		$300
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-4">
																	<label class="col-form-label" for="">
																		Total Due:
																	</label>
																</div>
																<div class="col-md-5 align-self-center">
																	<div class="font-family-secondary">
																		$200
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-4">
																	<label class="col-form-label" for="">
																		Total Overdue:
																	</label>
																</div>
																<div class="col-md-5 align-self-center">
																	<div class="font-family-secondary">
																		$300
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-4">
																	<label class="col-form-label" for="">
																		Account Credit:
																	</label>
																</div>
																<div class="col-md-5 align-self-center">
																	<div class="font-family-secondary">
																		$000
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- right-col -->
											<div class="col-md-6">
												<!-- table s -->
												<div class="row" id="table-hover-row">
													<div class="col-12">
														<div class="card">
															<div class="table-responsive">
																<!-- table one -->
																<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
																	<thead>
																		<tr role="row">
																			<th class="align-middle col-md-7" scope="col">
																				American Sign Language Interpreting
																			</th>
																			<th class="text-center align-middle col-md-3" scope="col">
																				Service Rate
																			</th>
																			<th class="text-center align-middle col-md-2" scope="col">
																				<div aria-expanded="true" data-bs-toggle="collapse" href="#collapseAmericanSignLanguageInterpreting" role="button" aria-expanded="false"aria-controls="collapseAmericanSignLanguageInterpreting">
																					<svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path d="M24.4726 0.462022C24.1199 0.16619 23.6414 -5.20854e-08 23.1426 -7.08858e-08C22.6438 -8.96861e-08 22.1654 0.16619 21.8126 0.462022L12.5004 8.2732L3.18833 0.462021C2.83353 0.174573 2.35832 0.0155169 1.86507 0.0191123C1.37181 0.0227076 0.899977 0.188666 0.55118 0.481243C0.202383 0.77382 0.00453562 1.16961 0.000249782 1.58336C-0.00403605 1.99711 0.185583 2.39572 0.528265 2.69333L11.1704 11.6202C11.5232 11.916 12.0016 12.0822 12.5004 12.0822C12.9993 12.0822 13.4777 11.916 13.8305 11.6202L24.4726 2.69334C24.8253 2.39741 25.0234 1.99611 25.0234 1.57768C25.0234 1.15925 24.8253 0.757944 24.4726 0.462022Z" fill="white"/>
																					</svg>
																				</div>
																			</th>
																		</tr>
																	</thead>
																	<tbody class="collapse.show" id="collapseAmericanSignLanguageInterpreting">
																		<tr role="row" class="odd">
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-10">
																						<p>
																							Blog Writing
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="text-center align-middle">
																				$10.00
																			</td>
																			<td></td>
																		</tr>
																		<tr role="row" class="even">
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-10">
																						<p>
																							Closed-Captioning
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="text-center align-middle">
																				$10.00
																			</td>
																			<td></td>
																		</tr>
																		<tr role="row" class="odd">
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-10">
																						<p>
																							Deaf-Blind Tactile Interpreting
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="text-center align-middle">
																				$10.00
																			</td>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
																<!-- table two -->
																<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
																	<thead>
																		<tr role="row">
																			<th class="align-middle col-md-7" scope="col">
																				International Sign Interpreting
																			</th>
																			<th class="text-center align-middle col-md-3" scope="col">
																				Service Rate
																			</th>
																			<th class="text-center align-middle col-md-2" scope="col">
																				<div data-bs-toggle="collapse" href="#collapseInternationalSignInterpreting" role="button" aria-expanded="false"aria-controls="collapseInternationalSignInterpreting">
																					<svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path d="M24.4726 0.462022C24.1199 0.16619 23.6414 -5.20854e-08 23.1426 -7.08858e-08C22.6438 -8.96861e-08 22.1654 0.16619 21.8126 0.462022L12.5004 8.2732L3.18833 0.462021C2.83353 0.174573 2.35832 0.0155169 1.86507 0.0191123C1.37181 0.0227076 0.899977 0.188666 0.55118 0.481243C0.202383 0.77382 0.00453562 1.16961 0.000249782 1.58336C-0.00403605 1.99711 0.185583 2.39572 0.528265 2.69333L11.1704 11.6202C11.5232 11.916 12.0016 12.0822 12.5004 12.0822C12.9993 12.0822 13.4777 11.916 13.8305 11.6202L24.4726 2.69334C24.8253 2.39741 25.0234 1.99611 25.0234 1.57768C25.0234 1.15925 24.8253 0.757944 24.4726 0.462022Z" fill="white"/>
																					</svg>
																				</div>
																			</th>
																		</tr>
																	</thead>
																	<tbody class="collapse" id="collapseInternationalSignInterpreting">
																		<tr role="row" class="odd">
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-10">
																						<p>
																							Blog Writing
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="text-center align-middle">
																				$10.00
																			</td>
																			<td></td>
																		</tr>
																		<tr role="row" class="even">
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-10">
																						<p>
																							Closed-Captioning
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="text-center align-middle">
																				$10.00
																			</td>
																			<td></td>
																		</tr>
																		<tr role="row" class="odd">
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-10">
																						<p>
																							Deaf-Blind Tactile Interpreting
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="text-center align-middle">
																				$10.00
																			</td>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
																<!-- table three -->
																<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
																	<thead>
																		<tr role="row">
																			<th class="align-middle col-md-7" scope="col">
																				Sign Language Interpreting Services
																			</th>
																			<th class="text-center align-middle col-md-3" scope="col">
																				Service Rate
																			</th>
																			<th class="text-center align-middle col-md-2" scope="col">
																				<div data-bs-toggle="collapse" href="#collapseSignLanguageInterpretingServices" role="button" aria-expanded="false"aria-controls="collapseSignLanguageInterpretingServices">
																					<svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path d="M24.4726 0.462022C24.1199 0.16619 23.6414 -5.20854e-08 23.1426 -7.08858e-08C22.6438 -8.96861e-08 22.1654 0.16619 21.8126 0.462022L12.5004 8.2732L3.18833 0.462021C2.83353 0.174573 2.35832 0.0155169 1.86507 0.0191123C1.37181 0.0227076 0.899977 0.188666 0.55118 0.481243C0.202383 0.77382 0.00453562 1.16961 0.000249782 1.58336C-0.00403605 1.99711 0.185583 2.39572 0.528265 2.69333L11.1704 11.6202C11.5232 11.916 12.0016 12.0822 12.5004 12.0822C12.9993 12.0822 13.4777 11.916 13.8305 11.6202L24.4726 2.69334C24.8253 2.39741 25.0234 1.99611 25.0234 1.57768C25.0234 1.15925 24.8253 0.757944 24.4726 0.462022Z" fill="white"/>
																					</svg>
																				</div>
																			</th>
																		</tr>
																	</thead>
																	<tbody class="collapse" id="collapseSignLanguageInterpretingServices">
																		<tr role="row" class="odd">
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-10">
																						<p>
																							Blog Writing
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="text-center align-middle">
																				$10.00
																			</td>
																			<td></td>
																		</tr>
																		<tr role="row" class="even">
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-10">
																						<p>
																							Closed-Captioning
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="text-center align-middle">
																				$10.00
																			</td>
																			<td></td>
																		</tr>
																		<tr role="row" class="odd">
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-10">
																						<p>
																							Deaf-Blind Tactile Interpreting
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="text-center align-middle">
																				$10.00
																			</td>
																			<td></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
												<!-- table e -->
											</div>
											<!-- Last Login colums (start) -->
											<div class="col-md-6 mb-md-2">
												<div class="mb-3">
													<h2>Top 5 Preferred Providers:</h2>
												</div>
												<div class="row" id="table-hover-row">
													<div class="col-12">
														<div class="card">
															<div class="table-responsive">
																<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
																	<thead>
																		<tr role="row">
																			<th scope="col" class="text-center">
																				#
																			</th>
																			<th scope="col">Provider</th>
																			<th scope="col">Action</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr role="row" class="odd">
																			<td class="align-middle fw-bold">
																				1
																			</td>
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-2">
																						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
																					</div>
																					<div class="col-md-10 align-self-center">
																						<h6 class="fw-semibold">
																							Dori Griffiths
																						</h6>
																						<p>
																							languagetranslation@gmail.com
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="align-middle">
																				<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																					<x-icon name="message"/>
																				</a>
																			</td>
																		</tr>
																		<tr role="row" class="even">
																			<td class="align-middle fw-bold">
																				2
																			</td>
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-2">
																						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
																					</div>
																					<div class="col-md-10 align-self-center">
																						<h6 class="fw-semibold">
																							Dori Griffiths
																						</h6>
																						<p>
																							languagetranslation@gmail.com
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="align-middle">
																				<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																					<x-icon name="message"/>
																				</a>
																			</td>
																		</tr>
																		<tr role="row" class="odd">
																			<td class="align-middle fw-bold">
																				3
																			</td>
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-2">
																						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
																					</div>
																					<div class="col-md-10 align-self-center">
																						<h6 class="fw-semibold">
																							Dori Griffiths
																						</h6>
																						<p>
																							languagetranslation@gmail.com
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="align-middle">
																				<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																					<x-icon name="message"/>
																				</a>
																			</td>
																		</tr>
																		<tr role="row" class="even">
																			<td class="align-middle fw-bold">
																				4
																			</td>
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-2">
																						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
																					</div>
																					<div class="col-md-10 align-self-center">
																						<h6 class="fw-semibold">
																							Dori Griffiths
																						</h6>
																						<p>
																							languagetranslation@gmail.com
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="align-middle">
																				<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																					<x-icon name="message"/>
																				</a>
																			</td>
																		</tr>
																		<tr role="row" class="odd">
																			<td class="align-middle fw-bold">
																				5
																			</td>
																			<td class="align-middle">
																				<div class="row g-2">
																					<div class="col-md-2">
																						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
																					</div>
																					<div class="col-md-10 align-self-center">
																						<h6 class="fw-semibold">
																							Dori Griffiths
																						</h6>
																						<p>
																							languagetranslation@gmail.com
																						</p>
																					</div>
																				</div>
																			</td>
																			<td class="align-middle">
																				<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																					<x-icon name="message"/>
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
											<div class="col-md-12 mb-md-2">
												<h2>Last Login:</h2>
												<div class="row">
													<div class="col-md-12 d-flex mb-md-2">
														<div class="col-md-1 mb-md-2 font-family-tertiary fw-medium">Date</div>
														<div class="col-md-6 mb-md-2 font-family-secondary">
															20/10/2022
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 d-flex mb-md-2">
														<div class="col-md-1 mb-md-2 font-family-tertiary fw-medium">Time</div>
														<div class="col-md-6 mb-md-2 font-family-secondary">01:34 PM</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-12 d-flex mb-md-2">
														<div class="col-md-1 mb-md-2 font-family-tertiary fw-medium">Location</div>
														<div class="col-md-6 mb-md-2 font-family-secondary">
															Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
														</div>
													</div>
												</div>
											</div>
											<!-- Last Login colums (end) -->
											<!-- in line / side by side buttons (start) -->
											<div class="col-md-12 mb-md-2 text-center gap-2 mt-4">
												<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
													<span>
														Lock Account
													</span>
												</button> 
												<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
													<span>
														Reset Provider Password
													</span>
												</button>
												<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
													<span>
														Message Provider
													</span>
												</button>
												<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
													<span>
														Resend Welcome Email
													</span>
												</button>
											</div>
											<!-- inline / side by side buttons (end) -->
										</div><!-- main row end -->
									</div>
								</div>
								<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
