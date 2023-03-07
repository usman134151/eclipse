<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
	@livewire('app.admin.forms.notification-configuration-form') {{-- Show Add / Edit Form --}}
	@else
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
											<label class="form-label" for="company-column">
												Select Trigger
											</label>
										</div>
										<div class="col-md-6 text-end">
											<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
												<x-icon name="plus"/>
												<span>Add Notification</span>
											</button>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<select class="select2 form-select" id="permissions-column">
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
										<div class="col-md-12 col-12">
											<button type="submit" class="btn btn-primary rounded px-4 py-2 mx-1">
												<svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M15.2205 15.8797C15.0615 15.8277 14.0565 15.3747 14.6845 13.4657H14.6755C16.3125 11.7797 17.5635 9.06674 17.5635 6.39574C17.5635 2.28874 14.8325 0.135742 11.6585 0.135742C8.4825 0.135742 5.7665 2.28774 5.7665 6.39574C5.7665 9.07774 7.0105 11.8017 8.6575 13.4837C9.2995 15.1677 8.1515 15.7927 7.9115 15.8797C4.5875 17.0827 0.6875 19.2737 0.6875 21.4367V22.2477C0.6875 25.1947 6.4015 25.8647 11.6895 25.8647C16.9855 25.8647 22.6275 25.1947 22.6275 22.2477V21.4367C22.6275 19.2087 18.7085 17.0347 15.2205 15.8797ZM9.7045 24.5887C9.7045 22.0397 11.3275 18.5987 11.3275 18.5987L10.2045 17.7177C10.2045 16.8757 11.6575 15.9947 11.6575 15.9947C11.6575 15.9947 13.1065 16.8897 13.1065 17.7177L11.9875 18.5987C11.9875 18.5987 13.6105 22.0267 13.6105 24.6167C13.6105 25.0227 9.7045 24.9287 9.7045 24.5887Z" fill="white"/>
												</svg>
												<span>Admin</span>
											</button>
											<button type="submit" class="btn btn-primary rounded px-4 py-2 mx-1">
												<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M2.125 24C2.125 24 0.125 24 0.125 22C0.125 20 2.125 14 12.125 14C22.125 14 24.125 20 24.125 22C24.125 24 22.125 24 22.125 24H2.125ZM12.125 12C13.7163 12 15.2424 11.3679 16.3676 10.2426C17.4929 9.11742 18.125 7.5913 18.125 6C18.125 4.4087 17.4929 2.88258 16.3676 1.75736C15.2424 0.632141 13.7163 0 12.125 0C10.5337 0 9.00758 0.632141 7.88236 1.75736C6.75714 2.88258 6.125 4.4087 6.125 6C6.125 7.5913 6.75714 9.11742 7.88236 10.2426C9.00758 11.3679 10.5337 12 12.125 12V12Z" fill="white"/>
												</svg>
												<span>Provider</span>
											</button>
											<button type="button" class="btn btn-outline-dark rounded px-4 py-2 mx-1">
												<svg width="22" height="26" viewBox="0 0 22 26" fill="none" xmlns="http://www.w3.org/2000/svg">
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
											<button type="submit" class="btn btn-primary rounded px-4 py-2 mx-1">
												<svg width="36" height="26" viewBox="0 0 36 26" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M26.0312 13C28.4463 13 30.3888 11.04 30.3888 8.625C30.3888 6.21 28.4463 4.25 26.0312 4.25C24.8709 4.25 23.7581 4.71094 22.9377 5.53141C22.1172 6.35188 21.6562 7.46468 21.6562 8.625C21.6562 9.78532 22.1172 10.8981 22.9377 11.7186C23.7581 12.5391 24.8709 13 26.0312 13ZM12.9062 11.25C15.8112 11.25 18.1388 8.905 18.1388 6C18.1388 3.095 15.8112 0.75 12.9062 0.75C10.0013 0.75 7.65625 3.095 7.65625 6C7.65625 8.905 10.0013 11.25 12.9062 11.25ZM26.0312 16.5C22.8288 16.5 16.4062 18.11 16.4062 21.3125V25.25H35.6562V21.3125C35.6562 18.11 29.2337 16.5 26.0312 16.5ZM12.9062 14.75C8.82875 14.75 0.65625 16.7975 0.65625 20.875V25.25H12.9062V21.3125C12.9062 19.825 13.4837 17.2175 17.0537 15.24C15.5312 14.925 14.0612 14.75 12.9062 14.75Z" fill="white"/>
												</svg>
												<span>Staff</span>
											</button>
											<button type="submit" class="btn btn-primary rounded px-4 py-2 mx-1">
												<svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6.59935 15.1736C9.82064 15.1736 12.4724 12.724 12.8457 9.60324C13.0423 8.9512 14.1228 4.74352 11.3727 2.72883C10.5278 2.05712 9.50638 1.68172 8.38701 1.60304C8.44558 1.48418 8.48492 1.32641 8.46525 1.18788C8.42634 0.83257 8.17066 0.536266 7.81706 0.476834C7.40489 0.397735 6.99228 0.358398 6.59935 0.358398C3.92792 0.358398 2.67087 1.91902 2.2386 2.64973C0.274362 3.32143 -0.413165 5.79063 0.333366 9.48438C0.667295 12.6847 3.33873 15.1736 6.59935 15.1736ZM1.55107 10.1167C2.61187 9.42537 3.02447 8.16106 3.16172 7.17338C3.57432 7.33158 4.04592 7.43035 4.59578 7.43035C5.30297 7.43035 5.9905 7.23281 6.61902 6.83774C7.22787 7.21272 7.89573 7.41025 8.56359 7.41025C9.0352 7.41025 9.48671 7.33158 9.93864 7.15371C10.1157 8.14139 10.5672 9.42537 11.628 10.0971C11.7066 10.1561 11.8045 10.1958 11.9226 10.2155C11.3137 12.6056 9.17245 14.3834 6.59935 14.3834C4.02626 14.3834 1.885 12.6056 1.27615 10.2155C1.37449 10.1958 1.4724 10.1758 1.55107 10.1167Z" fill="white"/>
												</svg>
												<span>Consumer</span>
											</button>
										</div>
									</div>
								</div>
								<!-- ... -->
								<div class="row">
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
															<td>@admin_company - Password Reset</td>
															<td>
																<div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
																		<label class="form-check-label" for="statusSwitchCheck"></label>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex actions">
																	<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																		<x-icon name='pencil'/>
																	</a>
																</div>
															</td>
														</tr>
														<tr role="row" class="even">
															<td><a href="#">Supervisor</a></td>
															<td>
																Assignment Reschedule Request Denied
															</td>
															<td>
																<p>
																	assignment-rescheduled-request-denied
																</p>
															</td>
															<td>
																Admin denies a customer`s reschedule request
															</td>
															<td>
																@admin_company was unable to reschedule your service request
															</td>
															<td>
																<div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
																		<label class="form-check-label" for="statusSwitchCheck"></label>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex actions">
																	<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																		<x-icon name='pencil'/>
																	</a>
																</div>
															</td>
														</tr>
														<tr role="row" class="odd">
															<td>
																<a href="#">Supervisor</a>
															</td>
															<td>Account Password Reset</td>
															<td>
																<p>password-reset</p>
															</td>
															<td>Account Password Reset</td>
															<td>@admin_company - Password Reset</td>
															<td>
																<div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
																		<label class="form-check-label" for="statusSwitchCheck"></label>
																	</div>
																</div>
															</td>
															<td>
																<div class="d-flex actions">
																	<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																		<x-icon name='pencil'/>
																	</a>
																</div>
															</td>
														</tr>
														<tr role="row" class="even">
															<td><a href="#">Supervisor</a></td>
															<td>
																Assignment Reschedule Request Denied
															</td>
															<td>
																<p>
																	assignment-rescheduled-request-denied
																</p>
															</td>
															<td>
																Admin denies a customer`s reschedule request
															</td>
															<td>
																@admin_company was unable to reschedule your service request
															</td>
															<td>
																<div class="d-flex align-items-center flex-column">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
																		<label class="form-check-label" for="statusSwitchCheck"></label>
																	</div>
																</div>
															</td>
															<td>
															<div class="d-flex actions">
															<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name='pencil'/>
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
															<div class="form-check form-switch ">
															<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
															<label class="form-check-label" for="statusSwitchCheck"></label>
														</div>
														</div></td>
														<td>
															<div class="d-flex actions flex-end">
															<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name='pencil'/>
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
															<div class="form-check form-switch ">
															<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
															<label class="form-check-label" for="statusSwitchCheck"></label>
														</div>
														</div></td>
														<td>
															<div class="d-flex actions">
															<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name='pencil'/>
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
															<div class="form-check form-switch ">
															<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
															<label class="form-check-label" for="statusSwitchCheck"></label>
														</div>
														</div></td>
														<td>
															<div class="d-flex actions">
															<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name='pencil'/>
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
															<div class="form-check form-switch ">
															<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
															<label class="form-check-label" for="statusSwitchCheck"></label>
														</div>
														</div></td>
														<td>
															<div class="d-flex actions">
															<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name='pencil'/>
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
															<div class="form-check form-switch ">
															<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
															<label class="form-check-label" for="statusSwitchCheck"></label>
														</div>
														</div></td>
														<td>
															<div class="d-flex actions">
															<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name='pencil'/>
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
															<div class="form-check form-switch ">
															<input class="form-check-input" type="checkbox" role="switch" id="statusSwitchCheck">
															<label class="form-check-label" for="statusSwitchCheck"></label>
														</div>
														</div></td>
														<td>
															<div class="d-flex actions">
															<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																<x-icon name='pencil'/>
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
											<p class="fw-semibold">Showing 1 to 10 of 100 entries</p>
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
                                <a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <x-icon name="pencil"/>
                                </a>
                                <span class="text-sm">
                                Edit Notification
                                </span>
                            </div>

                            </div>
                            {{-- icon legend bar end --}}
									<div class="col-12 justify-content-center form-actions d-flex">
										<button type="button" class="btn btn-outline-dark rounded px-4 py-2 mx-2">
											Cancel
										</button>
										<button type="submit" class="btn btn-primary rounded px-4 py-2">
											Next
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
</div>
