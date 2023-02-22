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
														<div class="col-md-6">
															<h3>James Mary (He)</h3>
															<p>
																<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M13.2337 2.62171C13.6762 2.1798 14.2682 1.91977 14.893 1.89293C15.5178 1.86609 16.1299 2.07438 16.6087 2.47671L16.7687 2.62296L19.1437 4.99671H22.5012C23.1317 4.99682 23.7389 5.23517 24.2011 5.664C24.6633 6.09283 24.9464 6.68048 24.9937 7.30921L25.0012 7.49671V10.8542L27.3762 13.2292C27.8184 13.6718 28.0787 14.264 28.1055 14.8891C28.1324 15.5142 27.9239 16.1266 27.5212 16.6055L27.3749 16.7642L24.9999 19.1392V22.4967C25.0001 23.1274 24.7619 23.7349 24.3331 24.1974C23.9042 24.6599 23.3164 24.9432 22.6874 24.9905L22.5012 24.9967H19.1449L16.7699 27.3717C16.3274 27.814 15.7351 28.0742 15.11 28.1011C14.4849 28.1279 13.8725 27.9194 13.3937 27.5167L13.2349 27.3717L10.8599 24.9967H7.50118C6.87046 24.9969 6.26298 24.7587 5.8005 24.3298C5.33802 23.901 5.05474 23.3132 5.00743 22.6842L5.00118 22.4967V19.1392L2.62618 16.7642C2.18393 16.3217 1.92368 15.7294 1.89684 15.1043C1.86999 14.4792 2.0785 13.8668 2.48118 13.388L2.62618 13.2292L5.00118 10.8542V7.49671C5.0013 6.8662 5.23965 6.25902 5.66848 5.79681C6.09731 5.3346 6.68495 5.05149 7.31368 5.00421L7.50118 4.99671H10.8587L13.2337 2.62171ZM15.0012 4.39171L12.6262 6.76671C12.211 7.18127 11.6632 7.43659 11.0787 7.48796L10.8587 7.49671H7.50118V10.8542C7.50133 11.4416 7.29467 12.0102 6.91743 12.4605L6.76868 12.623L4.39368 14.998L6.76868 17.3717C7.18371 17.7867 7.43947 18.3346 7.49118 18.9192L7.50118 19.1392V22.4967H10.8587C11.4461 22.4966 12.0147 22.7032 12.4649 23.0805L12.6274 23.2292L15.0012 25.6042L17.3762 23.2292C17.7912 22.8142 18.339 22.5584 18.9237 22.5067L19.1437 22.4967H22.5012V19.1392C22.501 18.5518 22.7077 17.9832 23.0849 17.533L23.2337 17.3705L25.6087 14.9967L23.2337 12.6217C22.8187 12.2067 22.5629 11.6589 22.5112 11.0742L22.5012 10.8542V7.49671H19.1437C18.5563 7.49686 17.9877 7.29019 17.5374 6.91296L17.3749 6.76421L14.9999 4.38921L15.0012 4.39171ZM18.8512 11.2267C19.0761 11.0025 19.378 10.8724 19.6954 10.8627C20.0128 10.853 20.3221 10.9645 20.5603 11.1745C20.7985 11.3846 20.9478 11.6774 20.9779 11.9935C21.008 12.3097 20.9167 12.6255 20.7224 12.8767L20.6174 12.9942L14.5174 19.0942C14.2793 19.3327 13.9618 19.4754 13.6254 19.4952C13.2889 19.515 12.9569 19.4106 12.6924 19.2017L12.5724 19.0955L9.56743 16.0905C9.34087 15.866 9.20864 15.5635 9.19783 15.2448C9.18702 14.9261 9.29843 14.6152 9.50927 14.376C9.7201 14.1367 10.0144 13.9871 10.332 13.9577C10.6495 13.9283 10.9663 14.0214 11.2174 14.218L11.3349 14.3217L13.5449 16.5317L18.8499 11.2267H18.8512Z" fill="black"/>
																</svg>
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
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-4 fw-bold">
																	<label for="">
																		Email Address:
																	</label>
																</div>
																<div class="col-md-8">
																	<p>
																		jamesmary@gmail.com
																	</p>
																</div>
															</div>
														</div>
														<div class="row mb-1">
															<div class="col-md-12 d-flex">
																<div class="col-md-4 fw-bold">
																	<label for=""></label>
																	Phone Number:
																</div>
					   <div class="col-md-8"><p>(987) 653-5875</p></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw-bold"><label for=""></label>Address line 1:</div>
					   <div class="col-md-12"><p>Mrs Smith 98 Shirley Street PIMPAMA</p></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw-bold"><label for=""></label>Address line 2:</div>
					   <div class="col-md-12"><p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw-bold"><label for="">City / State:</label></div>
					   <div class="col-md-8"><p>Sydney</p></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw-bold"><label for="">Zip Code:</label></div>
					   <div class="col-md-8"><p>289425</p></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw-bold"><label for="">Country:</label></div>
					   <div class="col-md-8"><p>Australia</p></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw-bold"><label for="">Education:</label></div>
					   <div class="col-md-8"><p>Master’s</p></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw-bold"><label for="">Experience:</label></div>
					   <div class="col-md-8"><p>5 Year</p></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw-bold"><label for="">Start Date:</label></div>
					   <div class="col-md-8"><p>17/01/2023</p></div>
					   </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
					   <div class="col-md-4 fw-bold"><label for="">Referral Code:</label></div>
					   <div class="col-md-8"><p>NoYCRK</p></div>
					   </div>
					 </div>
				   </div>
				 </div>

				 <div class="row mb-4">
				   <div class="col-md-12">
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
						 <div class="col-md-7 fw-bold"><label for="">Total Hours Worked:</label></div>
						 <div class="col-md-5"><p>170</p></div>
						 </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
						 <div class="col-md-7 fw-bold"><label for="">Total Hours Returned:</label></div>
						 <div class="col-md-5"><p>20</p></div>
						 </div>
					 </div>
					 <div class="row mb-1">
					   <div class="col-md-12 d-flex">
						 <div class="col-md-7 fw-bold"><label for="">Total Incidents Running Late:</label></div>
						 <div class="col-md-5"><p>10</p></div>
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
								   <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									 <path d="M24.4726 0.462022C24.1199 0.16619 23.6414 -5.20854e-08 23.1426 -7.08858e-08C22.6438 -8.96861e-08 22.1654 0.16619 21.8126 0.462022L12.5004 8.2732L3.18833 0.462021C2.83353 0.174573 2.35832 0.0155169 1.86507 0.0191123C1.37181 0.0227076 0.899977 0.188666 0.55118 0.481243C0.202383 0.77382 0.00453562 1.16961 0.000249782 1.58336C-0.00403605 1.99711 0.185583 2.39572 0.528265 2.69333L11.1704 11.6202C11.5232 11.916 12.0016 12.0822 12.5004 12.0822C12.9993 12.0822 13.4777 11.916 13.8305 11.6202L24.4726 2.69334C24.8253 2.39741 25.0234 1.99611 25.0234 1.57768C25.0234 1.15925 24.8253 0.757944 24.4726 0.462022Z" fill="white"/>
									 </svg>
								 </div>
							   </th>
							 </tr>
						   </thead>
						   <tbody class="collapse.show" id="collapseLanguageTranslationServices">
							 <tr role="row" class="odd">
							   <td class="align-middle">
								 <div class="row g-2">
								 <div class="col-md-10">
									<p>Check service durationc</p>
								   </div>
								 </div>
							   </td>
							   <td class="text-center align-middle">$10.00</td>

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
								   <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									 <path d="M24.4726 0.462022C24.1199 0.16619 23.6414 -5.20854e-08 23.1426 -7.08858e-08C22.6438 -8.96861e-08 22.1654 0.16619 21.8126 0.462022L12.5004 8.2732L3.18833 0.462021C2.83353 0.174573 2.35832 0.0155169 1.86507 0.0191123C1.37181 0.0227076 0.899977 0.188666 0.55118 0.481243C0.202383 0.77382 0.00453562 1.16961 0.000249782 1.58336C-0.00403605 1.99711 0.185583 2.39572 0.528265 2.69333L11.1704 11.6202C11.5232 11.916 12.0016 12.0822 12.5004 12.0822C12.9993 12.0822 13.4777 11.916 13.8305 11.6202L24.4726 2.69334C24.8253 2.39741 25.0234 1.99611 25.0234 1.57768C25.0234 1.15925 24.8253 0.757944 24.4726 0.462022Z" fill="white"/>
									 </svg>
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
							   <td class="text-center align-middle">$10.00</td>

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
									<p>Check service durationc</p>
								   </div>
								 </div>
							   </td>
							   <td class="text-center align-middle">$10.00</td>

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
						   <a href="">
							 <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							   <g clip-path="url(#clip0_7704_24813)">
							   <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7704_24813)"/>
							   </g>
							   <path d="M8 21V24.766L9.515 23.857L14.277 21H19C20.103 21 21 20.103 21 19V11C21 9.897 20.103 9 19 9H7C5.897 9 5 9.897 5 11V19C5 20.103 5.897 21 7 21H8ZM7 11H19V19H13.723L10 21.234V19H7V11Z" fill="black"/>
							   <path d="M23 5H11C9.897 5 9 5.897 9 7H21C22.103 7 23 7.897 23 9V17C24.103 17 25 16.103 25 15V7C25 5.897 24.103 5 23 5Z" fill="black"/>
							   <defs>
							   <linearGradient id="paint0_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint1_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint2_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint3_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <clipPath id="clip0_7704_24813">
							   <rect width="30" height="30" fill="white"/>
							   </clipPath>
							   </defs>
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
						   <a href="">
							 <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							   <g clip-path="url(#clip0_7704_24813)">
							   <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7704_24813)"/>
							   </g>
							   <path d="M8 21V24.766L9.515 23.857L14.277 21H19C20.103 21 21 20.103 21 19V11C21 9.897 20.103 9 19 9H7C5.897 9 5 9.897 5 11V19C5 20.103 5.897 21 7 21H8ZM7 11H19V19H13.723L10 21.234V19H7V11Z" fill="black"/>
							   <path d="M23 5H11C9.897 5 9 5.897 9 7H21C22.103 7 23 7.897 23 9V17C24.103 17 25 16.103 25 15V7C25 5.897 24.103 5 23 5Z" fill="black"/>
							   <defs>
							   <linearGradient id="paint0_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint1_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint2_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint3_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <clipPath id="clip0_7704_24813">
							   <rect width="30" height="30" fill="white"/>
							   </clipPath>
							   </defs>
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
						   <a href="">
							 <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							   <g clip-path="url(#clip0_7704_24813)">
							   <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7704_24813)"/>
							   </g>
							   <path d="M8 21V24.766L9.515 23.857L14.277 21H19C20.103 21 21 20.103 21 19V11C21 9.897 20.103 9 19 9H7C5.897 9 5 9.897 5 11V19C5 20.103 5.897 21 7 21H8ZM7 11H19V19H13.723L10 21.234V19H7V11Z" fill="black"/>
							   <path d="M23 5H11C9.897 5 9 5.897 9 7H21C22.103 7 23 7.897 23 9V17C24.103 17 25 16.103 25 15V7C25 5.897 24.103 5 23 5Z" fill="black"/>
							   <defs>
							   <linearGradient id="paint0_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint1_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint2_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint3_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <clipPath id="clip0_7704_24813">
							   <rect width="30" height="30" fill="white"/>
							   </clipPath>
							   </defs>
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
						   <a href="">
							 <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							   <g clip-path="url(#clip0_7704_24813)">
							   <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7704_24813)"/>
							   </g>
							   <path d="M8 21V24.766L9.515 23.857L14.277 21H19C20.103 21 21 20.103 21 19V11C21 9.897 20.103 9 19 9H7C5.897 9 5 9.897 5 11V19C5 20.103 5.897 21 7 21H8ZM7 11H19V19H13.723L10 21.234V19H7V11Z" fill="black"/>
							   <path d="M23 5H11C9.897 5 9 5.897 9 7H21C22.103 7 23 7.897 23 9V17C24.103 17 25 16.103 25 15V7C25 5.897 24.103 5 23 5Z" fill="black"/>
							   <defs>
							   <linearGradient id="paint0_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint1_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint2_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint3_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <clipPath id="clip0_7704_24813">
							   <rect width="30" height="30" fill="white"/>
							   </clipPath>
							   </defs>
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
						   <a href="">
							 <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							   <g clip-path="url(#clip0_7704_24813)">
							   <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7704_24813)"/>
							   <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7704_24813)"/>
							   </g>
							   <path d="M8 21V24.766L9.515 23.857L14.277 21H19C20.103 21 21 20.103 21 19V11C21 9.897 20.103 9 19 9H7C5.897 9 5 9.897 5 11V19C5 20.103 5.897 21 7 21H8ZM7 11H19V19H13.723L10 21.234V19H7V11Z" fill="black"/>
							   <path d="M23 5H11C9.897 5 9 5.897 9 7H21C22.103 7 23 7.897 23 9V17C24.103 17 25 16.103 25 15V7C25 5.897 24.103 5 23 5Z" fill="black"/>
							   <defs>
							   <linearGradient id="paint0_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint1_linear_7704_24813" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint2_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0150376" stop-color="#C4C4C4"/>
							   <stop offset="1" stop-color="white" stop-opacity="0.01"/>
							   </linearGradient>
							   <linearGradient id="paint3_linear_7704_24813" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
							   <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
							   <stop offset="1" stop-opacity="0.01"/>
							   </linearGradient>
							   <clipPath id="clip0_7704_24813">
							   <rect width="30" height="30" fill="white"/>
							   </clipPath>
							   </defs>
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
			 <div class="col-md-4 mb-md-2">
			   <button type="button"
			   class="btn btn-outline-dark rounded w-100">Deaf and Blind
			 </button>
			   </div>
			 <div class="col-md-4 mb-md-2">
			   <button type="button"
			   class="btn btn-outline-dark rounded w-100">Only Virtual
			 </button>
			   </div>
			 </div>
		   <div class="row">
			 <div class="col-md-4 mb-md-2">
			   <button type="button"
			   class="btn btn-outline-dark rounded w-100">Pakistani Origin
			 </button>
			   </div>
			 <div class="col-md-4 mb-md-2">
			   <button type="button"
			   class="btn btn-outline-dark rounded w-100">Sign Language
			 </button>
			   </div>
			 </div>
		   <div class="row">
			 <div class="col-md-4 mb-md-2">
			   <button type="button"
			   class="btn btn-outline-dark rounded w-100">Legal
			 </button>
			   </div>
			 <div class="col-md-4 mb-md-2">
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

	   <!-- Last Login colums (start) -->
	   <div class="col-md-12 mb-md-2">
		 <h2>Last Login:</h2>
		 <div class="row">
		   <div class="col-md-12 d-flex mb-md-2">
		   <div class="col-md-1 mb-md-2 fw-bold">Date</div>
		   <div class="col-md-6 mb-md-2">20/10/2022</div>

		   </div>
		 </div>
		 <div class="row">
		   <div class="col-md-12 d-flex mb-md-2">
		   <div class="col-md-1 mb-md-2 fw-bold">Time</div>
		   <div class="col-md-6 mb-md-2">01:34 PM</div>

		   </div>
		 </div>
		 <div class="row">
		   <div class="col-md-12 d-flex mb-md-2">
		   <div class="col-md-1 mb-md-2 fw-bold">Location</div>
		   <div class="col-md-6 mb-md-2">Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</div>

		   </div>
		 </div>
	   </div>
	   <!-- Last Login colums (end) -->

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