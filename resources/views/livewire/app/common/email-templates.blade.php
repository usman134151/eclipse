<div>
	<!-- Begin : Header Section -->
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h2 class="content-header-title float-start mb-0">Email Templates</h2>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
										<svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23">
											<use xlink:href="/css/common-icons.svg#home"></use>
										</svg>
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">
										Settings
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">
										Business profile & Settings
									</a>
								</li>
								<li class="breadcrumb-item">
									Email Templates
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End : Header Section -->
		<!-- Hoverable rows start -->
		<section id="multiple-column-form">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="form">
								<div class="row">
									<!-- ....Select Trigger Option.... -->
									<div class="mb-4">
										<div class="row w-100">
											<div class="col-md-6 mb-md-2">
												<label class="form-label" for="select-trigger">
													Select Trigger
												</label>
											</div>
											<div class="col-md-6 text-end">
												<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
													<svg aria-label="Add Notification" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
													</svg>
													<span>Add Notification</span>
												</button>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4">
												<select class="select2 form-select" id="select-trigger">
													<option>Select Trigger</option>
												</select>
											</div>
										</div>
									</div>
									<!-- ........ -->
									<div class="row">
										<div class="mb-4">
											<div class="col-md-12 col-12">
												<label class="form-label" for="company-column">
													Select Role
												</label>
											</div>
											<div class="col-12 d-flex flex-column flex-md-row gap-2">
												<button wire:click="$set('selectedRoleId', 1)" type="submit" class="btn btn-primary rounded px-3 py-2 ">
													<svg aria-label="Admin"  width="27" height="27"
                                                      viewBox="0 0 27 27">
                                                     <use xlink:href="/css/common-icons.svg#admin-person-icon"></use>
                                                    </svg>
														
													<span>Admin</span>
												</button>
												<button wire:click="$set('selectedRoleId', 2)" type="submit" class="btn btn-primary rounded px-3 py-2 ">
													<svg aria-label="Admin"  width="24" height="27"
                                                      viewBox="0 0 24 27">
                                                     <use xlink:href="/css/common-icons.svg#provider-person-icon"></use>
                                                    </svg>
													<span>Provider</span>
												</button>
												<button type="button" class="btn btn-outline-dark rounded px-3 py-2">
													<svg aria-label="Supervisor" width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M21.0999 25.4686L20.1913 18.3954C19.9893 16.8593 19.0203 15.566 17.6275 14.9397L13.8724 13.2217V12.4539C14.6394 11.6453 15.0834 10.5338 15.0834 9.30099V7.32047C15.6689 7.21967 16.0931 6.73451 16.0931 6.12839C16.0931 5.60291 15.75 5.13791 15.2652 4.97619C15.1644 3.58207 14.3567 2.36939 13.2058 1.64187L12.58 2.99567C12.5195 3.13723 12.3582 3.23847 12.2167 3.23847C12.1562 3.23847 12.0957 3.21831 12.0554 3.19815C11.8534 3.09691 11.7727 2.87471 11.8534 2.65251L12.5195 1.19747C12.6409 0.954669 12.6208 0.671988 12.459 0.42919C12.3179 0.186829 12.0554 0.0654297 11.7727 0.0654297H9.6125C9.32982 0.0654297 9.08746 0.206989 8.92618 0.42919C8.78462 0.671988 8.76446 0.954669 8.88542 1.21763L9.55202 2.67267C9.65283 2.87471 9.55202 3.11707 9.34998 3.21831C9.14794 3.31911 8.90602 3.21831 8.80478 3.01627L8.13862 1.56123C6.9071 2.28875 6.03889 3.54175 5.93809 4.99679C5.45337 5.15807 5.11021 5.60291 5.11021 6.14855C5.11021 6.75467 5.55461 7.23983 6.11997 7.34107V9.32158C6.11997 10.5741 6.58409 11.686 7.3309 12.474V13.2419L3.57585 14.9599C2.16288 15.6063 1.21404 16.9001 1.012 18.4156L0.103473 25.4887C0.0833123 25.7109 0.224434 25.9134 0.446634 25.9336C0.668834 25.9537 0.870874 25.8122 0.911195 25.59L1.81972 18.5168C1.96084 17.4457 2.56652 16.4955 3.47504 15.9297L4.68641 18.86V20.4566H10.198V17.1827L8.15878 14.8586V13.1411C8.82494 13.5653 9.59234 13.8077 10.4399 13.8077H10.7634C11.611 13.8077 12.3784 13.5653 13.0446 13.1411V14.8586L11.0053 17.1827V20.4566H16.2947V18.86L17.5464 15.8289C18.536 16.3947 19.2223 17.3646 19.3635 18.5168L20.272 25.59C20.2921 25.792 20.474 25.9336 20.6761 25.9336C20.6962 25.9336 20.7164 25.9336 20.7365 25.9336C20.9583 25.8928 21.12 25.6908 21.0999 25.4686ZM5.91793 6.12839C5.91793 5.90619 6.09937 5.72431 6.32157 5.72431H14.8616C15.0834 5.72431 15.2652 5.90619 15.2652 6.12839C15.2652 6.35059 15.0834 6.53247 14.8616 6.53247H6.32157C6.09937 6.53247 5.91793 6.35059 5.91793 6.12839ZM10.7634 12.9995H10.4399C8.48178 12.9995 6.94742 11.3827 6.94742 9.32158V7.34107H14.2761V9.30099C14.2559 11.3827 12.7216 12.9995 10.7634 12.9995Z" fill="url(#paint0_linear_2686_98367)"/>
														<defs>
															<linearGradient id="paint0_linear_2686_98367" x1="10.6016" y1="0.0654297" x2="19.0267" y2="0.0654297" gradientUnits="userSpaceOnUse">
																<stop stop-color="#213969"/>
																<stop offset="1" stop-color="#204387"/>
															</linearGradient>
														</defs>
													</svg>
													<span>Supervisor</span>
												</button>
												<button type="submit" class="btn btn-primary rounded px-3 ">
													<svg aria-label="Admin"  width="23" height="26"
                                                       viewBox="0 0 23 26">
                                                    <use xlink:href="/css/common-icons.svg#admin-icon"></use>
                                                </svg>
													<span>Billing Manger</span>
												</button>
												<button type="submit" class="btn btn-primary rounded px-3 ">
													<svg aria-label="Admin"  width="25" height="24"
                                                       viewBox="0 0 25 24">
                                                    <use xlink:href="/css/common-icons.svg#person-icon"></use>
													</svg>
													<span>Requester</span>
												</button>
												<button type="submit" class="btn btn-primary rounded px-3">
													<svg aria-label="Consumer"  width="23" height="26"
                                                       viewBox="0 0 23 26">
                                                       <use xlink:href="/css/common-icons.svg#comsumer-person-icon"></use>
                                                     </svg>
													<span>Service Consumer</span>
												</button>
												<button type="submit" class="btn btn-primary rounded px-3">
													<svg  aria-label="Staff" width="36" height="26"
                                                        viewBox="0 0 36 26">
                                                        <use xlink:href="/css/common-icons.svg#two-person-icon"></use>
                                                    </svg>
													<span>Participants</span>
												</button>
											</div>
										</div>
									</div>
									<!-- ... -->
									<div class="row">
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
												<label for="search-column" class="form-label fw-semibold">
													Search
												</label>
												<input type="search" class="form-control" id="search-column" name="search" placeholder="Search here" autocomplete="on"/>
											</div>
										</div>
									</div>
									<!-- ...... -->
									<div class="row" id="table-hover-row">
										<div class="col-12">
											<div class="card">
												<div class="table-responsive">
													<table id="unassigned_data" class="table table-hover">
														<thead>
															<tr role="row">
																<th>User Role</th>
																<th>Name</th>
																<th>Trigger</th>
																<th>Trigger Description</th>
																<th>Subject</th>
																<th>Status</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr role="row" class="odd">
																<td><a href="#">Supervisor</a></td>
																<td>Account Password Reset</td>
																<td>
																	<p>password-reset</p>
																</td>
																<td>Account Password Reset</td>
																<td>
																	@admin_company - Password Reset
																</td>
																<td>
																	<div class="d-flex align-items-center flex-column">
																		<div class="form-check form-switch">
																			<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																			<label class="form-check-label">
																				Deactivate
																			</label>
																		</div>
																	</div>
																</td>
																<td>
																	<div class="d-flex actions">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                            </svg>
																		</a>
																	</div>
																</td>
															</tr>
															<tr role="row" class="even">
																<td><a href="#">Supervisor</a></td>
																<td>Assignment Reschedule Request Denied</td>
																<td>
																	<p>assignment-rescheduled-request-denied</p>
																</td>
																<td>Admin denies a customer`s reschedule request</td>
																<td>@admin_company was unable to reschedule your service request</td>
																<td><div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																		<label class="form-check-label">
																			Active
																		</label>
																	</div>
															</div>
															</td>
																<td>
																	<div class="d-flex actions">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                            </svg>
																		</a>
																	</div>
																</td>
															</tr>
															<tr role="row" class="odd">
																<td><a href="#">Supervisor</a></td>
																<td>Account Password Reset</td>
																<td>
																	<p>password-reset</p>
																</td>
																<td>Account Password Reset</td>
																<td>@admin_company - Password Reset</td>
																<td><div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																		<label class="form-check-label">
																			Active
																		</label>
																	</div>
															</div></td>
																<td>
																	<div class="d-flex actions">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                            </svg>
																		</a>
																	</div>
																</td>
															</tr>
															<tr role="row" class="even">
																<td><a href="#">Supervisor</a></td>
																<td>Assignment Reschedule Request Denied</td>
																<td>
																	<p>assignment-rescheduled-request-denied</p>
																</td>
																<td>Admin denies a customer`s reschedule request</td>
																<td>@admin_company was unable to reschedule your service request</td>
																<td><div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																		<label class="form-check-label">
																			Active
																		</label>
																	</div>
															</div></td>
																<td>
																	<div class="d-flex actions">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                            </svg>
																		</a>
																	</div>
																</td>
															</tr>
															<tr role="row" class="odd">
																<td><a href="#">Supervisor</a></td>
																<td>Assignment Reschedule Request Denied</td>
																<td>
																	<p>assignment-rescheduled-request-denied</p>
																</td>
																<td>Admin denies a customer`s reschedule request</td>
																<td>@admin_company was unable to reschedule your service request</td>
																<td><div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																		<label class="form-check-label">
																			Active
																		</label>
																	</div>
															</div></td>
																<td>
																	<div class="d-flex actions flex-end">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                            </svg>
																		</a>

																	</div>
																</td>
															</tr>
															<tr role="row" class="even">
																<td><a href="#">Supervisor</a></td>
																<td>Assignment Reschedule Request Denied</td>
																<td>
																	<p>assignment-rescheduled-request-denied</p>
																</td>
																<td>Admin denies a customer`s reschedule request</td>
																<td>@admin_company was unable to reschedule your service request</td>
																<td><div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																		<label class="form-check-label">
																			Active
																		</label>
																	</div>
															</div></td>
																<td>
																	<div class="d-flex actions">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                            </svg>
																		</a>
																	</div>
																</td>
															</tr>
															<tr role="row" class="odd">
																<td><a href="#">Supervisor</a></td>
																<td>Assignment Reschedule Request Denied</td>
																<td>
																	<p>assignment-rescheduled-request-denied</p>
																</td>
																<td>Admin denies a customer`s reschedule request</td>
																<td>@admin_company was unable to reschedule your service request</td>
																<td><div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																		<label class="form-check-label">
																			Active
																		</label>
																	</div>
															</div></td>
																<td>
																	<div class="d-flex actions">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                             xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                            </svg>
																		</a>
																	</div>
																</td>
															</tr>
															<tr role="row" class="even">
																<td><a href="#">Supervisor</a></td>
																<td>Assignment Reschedule Request Denied</td>
																<td>
																	<p>assignment-rescheduled-request-denied</p>
																</td>
																<td>Admin denies a customer`s reschedule request</td>
																<td>@admin_company was unable to reschedule your service request</td>
																<td><div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																		<label class="form-check-label">
																			Active
																		</label>
																	</div>
															</div></td>
																<td>
																	<div class="d-flex actions">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                            </svg>
																		</a>
																	</div>
																</td>
															</tr>
															<tr role="row" class="even">
																<td><a href="#">Supervisor</a></td>
																<td>Assignment Reschedule Request Denied</td>
																<td>
																	<p>assignment-rescheduled-request-denied</p>
																</td>
																<td>Admin denies a customer`s reschedule request</td>
																<td>@admin_company was unable to reschedule your service request</td>
																<td><div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																		<label class="form-check-label">
																			Active
																		</label>
																	</div>
															</div></td>
																<td>
																	<div class="d-flex actions">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                           </svg>
																		</a>
																	</div>
																</td>
															</tr>
															<tr role="row" class="even">
																<td><a href="#">Supervisor</a></td>
																<td>Assignment Reschedule Request Denied</td>
																<td>
																	<p>assignment-rescheduled-request-denied</p>
																</td>
																<td>Admin denies a customer`s reschedule request</td>
																<td>@admin_company was unable to reschedule your service request</td>
																<td><div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																		<label class="form-check-label">
																			Active
																		</label>
																	</div>
															</div></td>
																<td>
																	<div class="d-flex actions">
																		<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																			<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                                           </svg>
																		</a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="d-flex justify-content-between">
											<div>
												<p class="fw-semibold">
													Showing 1 to 10 of 100 entries
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
                {{-- icon legend bar start --}}
                        <div class="d-flex actions gap-3 justify-content-end mb-2">
                            <div class="d-flex gap-2 align-items-center">
                                <a href="#" title=" Edit Sms Templater" aria-label=" Edit Sms Template" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                   </svg>
                                </a>
                                <span class="text-sm">
                                Edit SMS Template
                                </span>
                            </div>

                            </div>
                            {{-- icon legend bar end --}}
										<div class="col-12 justify-content-center form-actions d-flex">
											<button type="button" class="btn btn-outline-dark rounded px-4 py-2 mx-2">Cancel</button>
                                            <button type="submit" class="btn btn-primary rounded px-4 py-2 mx-2">Save</button>
											<button type="submit" class="btn btn-primary rounded px-4 py-2">Next</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Hoverable rows end -->
	</div>
</div>
