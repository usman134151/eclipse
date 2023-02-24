<div>
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
									<x-icon name="home"/>
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
										<x-icon name="tablet"/>
										<span>Dashboard</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule-tab-pane" type="button" role="tab" aria-controls="schedule-tab-pane" aria-selected="false">
										<x-icon name="gray-calendar"/>
										<span>Schedule</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="availability-tab" data-bs-toggle="tab" data-bs-target="#availability-tab-pane" type="button" role="tab" aria-controls="availability-tab-pane" aria-selected="false">
										<x-icon name="gray-suitcase"/>
										<span>Availability</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="my-drive-tab" data-bs-toggle="tab" data-bs-target="#my-drive-tab-pane" type="button" role="tab" aria-controls="my-drive-tab-pane" aria-selected="false">
										<x-icon name="gray-drive"/>
										<span>My Drive</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="provider-feedback-tab" data-bs-toggle="tab" data-bs-target="#provider-feedback-tab-pane" type="button" role="tab" aria-controls="provider-feedback-tab-pane" aria-selected="false">
										<x-icon name="gray-rated-user"/>
										<span>Feedback</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="referrals-tab" data-bs-toggle="tab" data-bs-target="#referrals-tab-pane" type="button" role="tab" aria-controls="referrals-tab-pane" aria-selected="false">
										<x-icon name="gray-referral"/>
										<span>Referrals</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="invoices-remittances-tab" data-bs-toggle="tab" data-bs-target="#invoices-remittances-tab-pane" type="button" role="tab" aria-controls="invoices-remittances-tab-pane" aria-selected="false">
										<x-icon name="gray-invoice"/>
										<span>Invoices & Remittances</span>
									</button>
								</li>

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="payments-preferences-tab" data-bs-toggle="tab" data-bs-target="#payments-preferences-tab-pane" type="button" role="tab" aria-controls="payments-preferences-tab-pane" aria-selected="false">
										<x-icon name="gray-payment"/>
										<span>Payments & Preferences</span>
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

								<li class="nav-item" role="presentation">
									<button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane" type="button" role="tab" aria-controls="settings-tab-pane" aria-selected="false">
										<x-icon name="gray-cog"/>
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
															<div style="margin-left: -1rem;" class="d-inline-block position-relative mt-3">
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
																<x-icon name="gray-tick-badge"/>
																Certified
															</p>
															<div class="mb-3">
																<x-icon name="filled-star"/>
																<x-icon name="filled-star"/>
																<x-icon name="filled-star"/>
																<x-icon name="star"/>
																<x-icon name="star"/>
															</div>
															<p>10 Feedback 3 Stars</p>
														</div>
													</div>
												</div>

												<div class="row mb-4">
													<div class="col-md-12 mt-4">
														<div class="">
															<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon ms-auto">
																<x-icon name="pencil"/>
															</a>
														</div>
														<div class="row mb-1">
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
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-4">
																	<label class="col-form-label" for="p-number">Phone Number:</label>
																</div>
					   <div class="col-md-8 align-self-center"><div class="font-family-secondary">(987) 653-5875</div></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 "><label class="col-form-label" for="first-address">Address line 1:</label></div>
					   <div class="col-md-12 align-self-center"><div class="font-family-secondary">Mrs Smith 98 Shirley Street PIMPAMA</div></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 "><label class="col-form-label" for="second-address">Address line 2:</label></div>
					   <div class="col-md-12 align-self-center"><div class="font-family-secondary">Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 <br> AUSTRALIA</div></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw"><label class="col-form-label" for="city">City / State:</label></div>
					   <div class="col-md-8 align-self-center"><div class="font-family-secondary">Sydney</div></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 "><label class="col-form-label" for="zip-code">Zip Code:</label></div>
					   <div class="col-md-8 align-self-center"><div class="font-family-secondary">289425</div></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 "><label class="col-form-label" for="country">Country:</label></div>
					   <div class="col-md-8 align-self-center"><div class="font-family-secondary">Australia</div></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 "><label class="col-form-label" for="education">Education:</label></div>
					   <div class="col-md-8 align-self-center"><div class="font-family-secondary">Master’s</div></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 "><label class="col-form-label" for="experience">Experience:</label></div>
					   <div class="col-md-8 align-self-center"><div class="font-family-secondary">5 Year</div></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 "><label class="col-form-label" for="s-date">Start Date:</label></div>
					   <div class="col-md-8 align-self-center"><div class="font-family-secondary">17/01/2023</div></div>
					   </div>
					 </div>
					 <div class="row mb-1">
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
						 <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
						   <thead>
							 <tr role="row">
							   <th class="align-middle col-md-7" scope="col">Language Translation Services</th>
							   <th class="text-center align-middle col-md-3" scope="col">Service Rate</th>
							   <th class="text-center align-middle col-md-2" scope="col">
								 <div aria-expanded="true" data-bs-toggle="collapse" href="#collapseLanguageTranslationServices" role="button" aria-expanded="false" aria-controls="collapseLanguageTranslationServices">
									<x-icon name="accordion-arrow"/>
								 </div>
							   </th>
							 </tr>
						   </thead>
						   <tbody class="collapse.show" id="collapseLanguageTranslationServices">
							 <tr role="row" class="odd">
							   <td class="align-middle">
								 <div class="row g-2">
								 <div class="col-md-8">
									<p>Check service durationc</p>
								   </div>
								 </div>
							   </td>
							   <td class="align-middle text-sm col-4 text-right" >
								Business Rate: $10.00 <br> After-hours Rate: $10.00
							    </td>
							   <td class="text-center align-middle">
								 <div class="row g-2">
								   <div class="col-md-4 align-self-center">
									 10
								   </div>
								   <div class="col-md-8">
									 <button type="button" class="btn btn-success w-100">High</button>
								   </div>
								 </div>
							   </td>

							 </tr>
							 <tr role="row" class="even">
							   <td class="align-middle">
							   <div class="row g-2">
							   <div class="col-md-10">
								  <p>New service capacity and capabilities</p>
								 </div>
							   </div>
							 </td>
							 <td class="text-center align-middle">$10.00</td>
							 <td class="text-center align-middle">
							   <div class="row g-2">
								 <div class="col-md-4 align-self-center">
								   50
								 </div>
								 <div class="col-md-8">
								   <button type="button" class="btn btn-warning w-100">Medium</button>
								 </div>
							   </div>
							 </td>
						   </tr>
						   <tr role="row" class="odd">
							 <td class="align-middle">
							   <div class="row g-2">
							   <div class="col-md-10">
								  <p>Service (in-person) hourly Rate</p>
								 </div>
							   </div>
							 </td>
							 <td class="text-center align-middle">$10.00</td>
							 <td class="text-center align-middle">
							   <div class="row g-2">
								 <div class="col-md-4 align-self-center">
								   80
								 </div>
								 <div class="col-md-8">
								   <button type="button" class="btn btn-danger w-100">Low</button>
								 </div>
							   </div>
							 </td>
						   </tr>
						   </tbody>
						 </table>
						 <!-- table two  -->
						 <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
						   <thead>
							 <tr role="row">
							   <th class="align-middle col-md-7" scope="col">Spoken Language Interpreting Services</th>
							   <th class="text-center align-middle col-md-3" scope="col">Service Rate</th>
							   <th class="text-center align-middle col-md-2" scope="col">
								 <div data-bs-toggle="collapse" href="#collapseSpokenLanguageInterpretingServices" role="button" aria-expanded="false" aria-controls="collapseSpokenLanguageInterpretingServices">
									<x-icon name="accordion-arrow"/>
								 </div>
							   </th>
							 </tr>
						   </thead>
						   <tbody class="collapse" id="collapseSpokenLanguageInterpretingServices">
							 <tr role="row" class="odd">
							   <td class="align-middle">
								 <div class="row g-2">
								 <div class="col-md-10">
									<p>Check service durationc</p>
								   </div>
								 </div>
							   </td>
							   <td class="align-middle text-sm col-4 text-right" >
								Business Rate: $10.00 <br> After-hours Rate: $10.00
							    </td>

							   <td class="text-center align-middle">
								 <div class="row g-2">
								   <div class="col-md-4 align-self-center">
									 10
								   </div>
								   <div class="col-md-8">
									 <button type="button" class="btn btn-success w-100">High</button>
								   </div>
								 </div>
							   </td>

							 </tr>
							 <tr role="row" class="even">
							   <td class="align-middle">
							   <div class="row g-2">
							   <div class="col-md-10">
								  <p>New service capacity and capabilities</p>
								 </div>
							   </div>
							 </td>
							 <td class="text-center align-middle">$10.00</td>
							 <td class="text-center align-middle">
							   <div class="row g-2">
								 <div class="col-md-4 align-self-center">
								   50
								 </div>
								 <div class="col-md-8">
								   <button type="button" class="btn btn-warning w-100">Medium</button>
								 </div>
							   </div>
							 </td>
						   </tr>
						   <tr role="row" class="odd">
							 <td class="align-middle">
							   <div class="row g-2">
							   <div class="col-md-10">
								  <p>Service (in-person) hourly Rate</p>
								 </div>
							   </div>
							 </td>
							 <td class="text-center align-middle">$10.00</td>
							 <td class="text-center align-middle">
							   <div class="row g-2">
								 <div class="col-md-4 align-self-center">
								   80
								 </div>
								 <div class="col-md-8">
								   <button type="button" class="btn btn-danger w-100">Low</button>
								 </div>
							   </div>
							 </td>
						   </tr>
						   </tbody>
						 </table>
						 <!-- table three  -->
						 <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
						   <thead>
							 <tr role="row">
							   <th class="align-middle col-md-7" scope="col">Sign Language Interpreting Services</th>
							   <th class="text-center align-middle col-md-3" scope="col">Service Rate</th>
							   <th class="text-center align-middle col-md-2" scope="col">
								 <div data-bs-toggle="collapse" href="#collapseSignLanguageInterpretingServices" role="button" aria-expanded="false" aria-controls="collapseSignLanguageInterpretingServices">
								   <x-icon name="accordion-arrow"/>
								 </div>
							   </th>
							 </tr>
						   </thead>
						   <tbody class="collapse" id="collapseSignLanguageInterpretingServices">
							 <tr role="row" class="odd">
							   <td class="align-middle">
								 <div class="row g-2">
								 <div class="col-md-10">
									<p>Check service durationc</p>
								   </div>
								 </div>
							   </td>
							   <td class="align-middle text-sm col-4 text-right" >
								Business Rate: $10.00 <br> After-hours Rate: $10.00
							    </td>

							   <td class="text-center align-middle">
								 <div class="row g-2">
								   <div class="col-md-4 align-self-center">
									 10
								   </div>
								   <div class="col-md-8">
									 <button type="button" class="btn btn-success w-100">High</button>
								   </div>
								 </div>
							   </td>

							 </tr>
							 <tr role="row" class="even">
							   <td class="align-middle">
							   <div class="row g-2">
							   <div class="col-md-10">
								  <p>New service capacity and capabilities</p>
								 </div>
							   </div>
							 </td>
							 <td class="text-center align-middle">$10.00</td>
							 <td class="text-center align-middle">
							   <div class="row g-2">
								 <div class="col-md-4 align-self-center">
								   50
								 </div>
								 <div class="col-md-8">
								   <button type="button" class="btn btn-warning w-100">Medium</button>
								 </div>
							   </div>
							 </td>
						   </tr>
						   <tr role="row" class="odd">
							 <td class="align-middle">
							   <div class="row g-2">
							   <div class="col-md-10">
								  <p>Service (in-person) hourly Rate</p>
								 </div>
							   </div>
							 </td>
							 <td class="text-center align-middle">$10.00</td>
							 <td class="text-center align-middle">
							   <div class="row g-2">
								 <div class="col-md-4 align-self-center">
								   80
								 </div>
								 <div class="col-md-8">
								   <button type="button" class="btn btn-danger w-100">Low</button>
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
				 <!-- ..... table e  -->
			   </div>
			   <!-- Assigned Teams colums (start) -->
			   <div class="col-md-12 d-flex mb-md-2 gap-5 mt-4 bg-light p-5">
			   <div class="row mb-4">
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
								<x-icon name="message"/>
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
								<x-icon name="message"/>
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
								<x-icon name="message"/>
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
								<x-icon name="message"/>
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
		   <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">...</div>
		   <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
		   <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
		 </div>
		 <!-- END: Provider Details ................... -->
		 </div>




				 </div>
			   </div>
			 </div>
		   </section>
		   <!-- Basic Floating Label Form section end -->
		 </div>
	   </div>
	 </div>
	 <!-- End: Content-->
</div>