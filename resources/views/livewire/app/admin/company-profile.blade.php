<div>
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">Company Details</h1>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="#">
										<x-icon name="home" />
									</a>
								</li>
								<li class="breadcrumb-item">
									All Companies
								</li>
								<li class="breadcrumb-item">
									Company Details
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
										<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-panel" aria-selected="false">
											<x-icon name="gray-user"/>
											<span>Profile</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="departments-tab" data-bs-toggle="tab" data-bs-target="#departments-tab-pane" type="button" role="tab" aria-controls="departments-tab-panel" aria-selected="false">
											<x-icon name="gray-department"/>
											<span>Departments</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule-tab-pane" type="button" role="tab" aria-controls="schedule-tab-panel" aria-selected="false">
											<x-icon name="gray-calendar"/>
											<span>Schedule</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="service-requests-tab" data-bs-toggle="tab" data-bs-target="#service-requests-tab-pane" type="button" role="tab" aria-controls="service-requests-tab-panel" aria-selected="false">
											<x-icon name="gray-journal"/>
											<span>Service Requests</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="permission-tab" data-bs-toggle="tab" data-bs-target="#drive-tab-pane" type="button" role="tab" aria-controls="drive-tab-panel" aria-selected="false">
											<x-icon name="gray-drive"/>
											<span>Drive</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="permission-tab" data-bs-toggle="tab" data-bs-target="#drive-tab-pane" type="button" role="tab" aria-controls="drive-tab-panel" aria-selected="false">
											<x-icon name="gray-rated-user"/>
											<span>Feedback</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="invoices-tab" data-bs-toggle="tab" data-bs-target="#invoices-tab-pane" type="button" role="tab" aria-controls="invoices-tab-panel" aria-selected="false">
											<x-icon name="gray-invoice"/>
											<span>Invoices</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments-tab-pane" type="button" role="tab" aria-controls="payments-tab-panel" aria-selected="false">
											<x-icon name="gray-payment"/>
											<span>Payments</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="referrals-tab" data-bs-toggle="tab" data-bs-target="#referrals-tab-pane" type="button" role="tab" aria-controls="referrals-tab-panel" aria-selected="false">
											<x-icon name="gray-referral"/>
											<span>Referrals</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes-tab-pane" type="button" role="tab" aria-controls="notes-tab-panel" aria-selected="false">
											<x-icon name="gray-note"/>
											<span>Notes</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#reports-tab-pane" type="button" role="tab" aria-controls="reports-tab-panel" aria-selected="false">
											<x-icon name="gray-bar-chart"/>
											<span>Reports</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab" aria-controls="notifications-tab-panel" aria-selected="false">
											<x-icon name="gray-bell"/>
											<span>Notifications</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log-tab-pane" type="button" role="tab" aria-controls="log-tab-panel" aria-selected="false">
											<x-icon name="gray-log"/>
											<span>Log</span>
										</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane" type="button" role="tab" aria-controls="settings-tab-panel" aria-selected="false">
											<x-icon name="gray-cog"/>
											<span>Settings</span>
										</button>
									</li>
								</ul>

								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
										<div class="col-md-12 mb-md-2 mt-5">
											<div class="row mt-2 mb-5">
												<div class="col-md-5 me-5">
													<div class="mb-4">
														<div class="row">
															<div class="col-md-4">
																<div class="d-inline-block position-relative">
																	<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Profile Image of Admin Staff Team"/>
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
																			Sydney, Australia
																		</label>
																	</div>
																</div>
															</div>

															<div class="col-md-7 ms-4">
																<h3 class="font-family-tertiary fw-medium">
																	Example Company
																</h3>
																<div class="row mb-4">
																	<div class="col-md-12">
																		<div class="row mb-1">
																			<div class="col-md-12">
																				<p class="font-family-tertiary">
																					(923) 023-9683
																				</p>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-12">
																				<p class="font-family-tertiary">
																					www.examplecompy.com
																				</p>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-12">
																				<p class="font-family-tertiary">
																					Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																				</p>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-12">
																				<p class="text-sm">
																					<a href="#" class="font-family-tertiary text-primary">
																						Mrs 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																					</a>
																				</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													
													<div class="row mb-4">
														<div class="col-md-12 mt-4">
															<div class="row mb-3">
																<div class="col-md-12 d-flex">
																	<div class="col-md-5">
																		<label for="" class="col-form-label">
																			Company Admin:
																		</label>
																	</div>
																	<div class="col-md-7 align-self-center">
																		<a href="#" class="font-family-secondary">
																			Thomas Charles , Harry Peter
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
																			<x-icon name="filled-star"/>
																			<x-icon name="filled-star"/>
																			<x-icon name="filled-star"/>
																			<x-icon name="star"/>
																			<x-icon name="star"/>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-12 d-flex">
																	<div class="col-md-5">
																		<label for="" class="col-form-label">
																			Customers:
																		</label>
																	</div>
																	<div class="col-md-7 align-self-center">
																		<div class="font-family-secondary">
																			40
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
																			17/01/2023
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
																			17/01/2023
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="row" id="table-hover-row">
														<div class="col-12">
															<div class="mb-2">
																<h2>Business Hours</h2>
															</div>
															<div class="card">
																<div class="table-responsive">
																	<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
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
																			<tr role="row" class="odd">
																				<td>Monday</td>
																				<td>
																					09 : 00 AM To 06 : 00 PM
																				</td>
																				<td>
																					06 : 00 PM To 10 : 00 PM
																				</td>
																			</tr>
																			<tr role="row" class="even">
																				<td>Tuesday</td>
																				<td>
																					09 : 00 AM To 06 : 00 PM
																				</td>
																				<td>
																					06 : 00 PM To 10 : 00 PM
																				</td>
																			</tr>
																			<tr role="row" class="odd">
																				<td>Wednesday</td>
																				<td>
																					09 : 00 AM To 06 : 00 PM
																				</td>
																				<td>
																					06 : 00 PM To 10 : 00 PM
																				</td>
																			</tr>
																			<tr role="row" class="even">
																				<td>Thursday</td>
																				<td>
																					09 : 00 AM To 06 : 00 PM
																				</td>
																				<td>
																					06 : 00 PM To 10 : 00 PM
																				</td>
																			</tr>
																			<tr role="row" class="odd">
																				<td>Friday</td>
																				<td>
																					09 : 00 AM To 06 : 00 PM
																				</td>
																				<td>
																					06 : 00 PM To 10 : 00 PM
																				</td>
																			</tr>
																			<tr role="row" class="even">
																				<td>Saturday</td>
																				<td>
																					09 : 00 AM To 06 : 00 PM
																				</td>
																				<td>
																					06 : 00 PM To 10 : 00 PM
																				</td>
																			</tr>
																			<tr role="row" class="odd">
																				<td>Sunday</td>
																				<td>
																					09 : 00 AM To 06 : 00 PM
																				</td>
																				<td>
																					06 : 00 PM To 10 : 00 PM
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 mb-md-2 text-center gap-2 mt-4">
													<button type="button" class="d-inline-flex align-items-center btn btn-outline-dark rounded px-3 py-2 gap-2">
														<span>Lock Account</span>
													</button>
													<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
														<span>Resend Welcome Email</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>