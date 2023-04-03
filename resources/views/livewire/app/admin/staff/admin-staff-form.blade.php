<div> 
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">Add Admin Staff</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="#">
									<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"></path>
									</svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="javascript:void(0)">
									Settings
								</a>
							</li>
							<li class="breadcrumb-item">
								<span class="text-secondary">Admin Staff</span>
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
				{{--
				<!-- BEGIN: Steps -->
				<div x-data="{ tab: 'profile' }" id="tab_wrapper">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a href="javascript:void(0)" class="nav-link" :class="{ 'active': tab === 'profile' }" @click.prevent="tab = 'profile'" id="user-profile-tab" role="tab" aria-controls="user-profile" aria-selected="true"><span class="number">1</span>
								Profile
							</a>
						</li>
						 
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'system-permissions' }" @click.prevent="tab = 'system-permissions'" id="system-permissions-tab" role="tab" aria-controls="system-permissions" aria-selected="false"><span class="number">2</span> 
								System Permissions
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'user-access' }" @click.prevent="tab = 'user-access'" id="user-access-tab" role="tab" aria-controls="user-access" aria-selected="false"><span class="number">3</span> 
								User Access
							</a>
						</li>  
					</ul>
	
					<!-- Tab panes -->
					<div class="tab-content">
						<!-- BEGIN: Profile -->
						<div class="tab-pane fade" :class="{ 'active show': tab === 'profile' }" id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab" tabindex="0" x-show="tab === 'profile'">
							--}}
							<form class="form">
							<div class="row between-section-segment-spacing">
								<div class="row mb-4">
									<div class="col-12 text-center">
										<div class="d-inline-block position-relative">
											<img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle"
												alt="Profile Image of Admin Staff Team" />
												<!-- <div>
													<input class="position-absolute form-control" type="file" />
												</div> -->
											<div
												class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
												<svg width="57" height="57" viewBox="0 0 57 57" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<circle cx="28.5" cy="28.5" r="28" fill="#0A1E46" stroke="white" />
													<path
														d="M42.9375 37.625C42.9375 38.172 42.7202 38.6966 42.3334 39.0834C41.9466 39.4702 41.422 39.6875 40.875 39.6875H16.125C15.578 39.6875 15.0534 39.4702 14.6666 39.0834C14.2798 38.6966 14.0625 38.172 14.0625 37.625V25.25C14.0625 24.703 14.2798 24.1784 14.6666 23.7916C15.0534 23.4048 15.578 23.1875 16.125 23.1875H18.5422C20.1824 23.1866 21.7551 22.5345 22.9147 21.3746L24.6266 19.6668C25.0123 19.281 25.5352 19.0637 26.0807 19.0625H30.9152C31.4622 19.0626 31.9867 19.28 32.3734 19.6668L34.0811 21.3746C34.6558 21.9494 35.3381 22.4054 36.0891 22.7165C36.84 23.0275 37.6449 23.1876 38.4578 23.1875H40.875C41.422 23.1875 41.9466 23.4048 42.3334 23.7916C42.7202 24.1784 42.9375 24.703 42.9375 25.25V37.625ZM16.125 21.125C15.031 21.125 13.9818 21.5596 13.2082 22.3332C12.4346 23.1068 12 24.156 12 25.25V37.625C12 38.719 12.4346 39.7682 13.2082 40.5418C13.9818 41.3154 15.031 41.75 16.125 41.75H40.875C41.969 41.75 43.0182 41.3154 43.7918 40.5418C44.5654 39.7682 45 38.719 45 37.625V25.25C45 24.156 44.5654 23.1068 43.7918 22.3332C43.0182 21.5596 41.969 21.125 40.875 21.125H38.4578C37.3638 21.1248 36.3148 20.69 35.5414 19.9164L33.8336 18.2086C33.0602 17.435 32.0112 17.0002 30.9172 17H26.0828C24.9888 17.0002 23.9398 17.435 23.1664 18.2086L21.4586 19.9164C20.6852 20.69 19.6362 21.1248 18.5422 21.125H16.125Z"
														fill="white" />
													<path
														d="M28.5 35.5625C27.1325 35.5625 25.821 35.0193 24.854 34.0523C23.887 33.0853 23.3438 31.7738 23.3438 30.4063C23.3438 29.0387 23.887 27.7272 24.854 26.7602C25.821 25.7932 27.1325 25.25 28.5 25.25C29.8675 25.25 31.179 25.7932 32.146 26.7602C33.113 27.7272 33.6562 29.0387 33.6562 30.4063C33.6562 31.7738 33.113 33.0853 32.146 34.0523C31.179 35.0193 29.8675 35.5625 28.5 35.5625ZM28.5 37.625C30.4145 37.625 32.2506 36.8645 33.6044 35.5107C34.9582 34.1569 35.7188 32.3208 35.7188 30.4063C35.7188 28.4917 34.9582 26.6556 33.6044 25.3018C32.2506 23.948 30.4145 23.1875 28.5 23.1875C26.5855 23.1875 24.7494 23.948 23.3956 25.3018C22.0418 26.6556 21.2812 28.4917 21.2812 30.4063C21.2812 32.3208 22.0418 34.1569 23.3956 35.5107C24.7494 36.8645 26.5855 37.625 28.5 37.625ZM18.1875 26.2813C18.1875 26.5548 18.0789 26.8171 17.8855 27.0105C17.6921 27.2039 17.4298 27.3125 17.1562 27.3125C16.8827 27.3125 16.6204 27.2039 16.427 27.0105C16.2336 26.8171 16.125 26.5548 16.125 26.2813C16.125 26.0077 16.2336 25.7454 16.427 25.552C16.6204 25.3586 16.8827 25.25 17.1562 25.25C17.4298 25.25 17.6921 25.3586 17.8855 25.552C18.0789 25.7454 18.1875 26.0077 18.1875 26.2813Z"
														fill="white" />
												</svg>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="d-lg-flex justify-content-between mb-4">
											<h2 class="mb-lg-0">User Profile</h2>
											<div class="form-check form-switch">
												<input class="form-check-input" type="checkbox" role="switch" id="userProfile" checked>
												<label class="form-check-label" for="userProfile">Active</label>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="first_name">
												First Name <span class="mandatory" aria-hidden="true">*</span>
											</label>
											<input type="text" id="first_name" class="form-control" name="first_name"
												placeholder="Enter First Name" required aria-required="true" />
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="last_name">
												Last Name <span class="mandatory" aria-hidden="true">*</span>
											</label>
											<input type="text" id="last_name" class="form-control" name="last_name"
												placeholder="Enter Last Name" required aria-required="true" />
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="pronouns">Pronouns</label>
											<input type="text" id="pronouns" class="form-control"
												placeholder="Enter Pronouns" name="pronouns" />
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<div class="d-flex justify-content-between align-items-center">
												<label class="form-label" for="gender">Gender</label>
												<a href="#" class="fw-bold">
													<small>
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"></path>
														</svg>
														Add New
													</small>
												</a>
											</div>
											<select class="form-select" id="gender">
												<option>Select Gender</option>
											</select>
										</div>
									</div>
									<div class="row inner-section-segment-spacing">
									<div class="col-md-6 col-12">
										<div>
											<div class="d-flex justify-content-between align-items-center">
												<label class="form-label" for="ethnicity">
													Ethnicity
												</label>
												<a href="#" class="fw-bold">
													<small>
														<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"></path>
														</svg>
														Add New
													</small>
												</a>
											</div>
											<select class="form-select" id="ethnicity">
												<option>Select Ethnicity</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div>
											<label class="form-label" for="position">Position</label>
											<input type="text" id="position" class="form-control"
												placeholder="Enter Position" name="position" />
										</div>
									</div>
								</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label">
												Roles and Permissions
											</label>
											<div>
												<div class="mt-3">
													<input class="form-check-input" type="checkbox" value="agency_admin" id="agency_admin">
													<label class="form-check-label" for="agency_admin">
														Agency Admin
													</label>
												</div>
												<div class="mt-3">
													<input class="form-check-input" type="checkbox" value="service_coordinator" id="service_coordinator" checked>
													<label class="form-check-label" for="service_coordinator">
														Service Coordinator
													</label>
													<div class="ms-4 mt-3">
														<div class="form-check mt-3">
															<input class="form-check-input" type="radio" name="accessRights" id="all_access" checked>
															<label class="form-check-label" for="all_access">
																All Access
															</label>
														</div>
														<div class="form-check mt-3">
															<input class="form-check-input" type="radio" name="accessRights" id="restricted_access">
															<label class="form-check-label" for="restricted_access">
																Restricted Access
															</label>
														</div>
													</div>
												</div>
												<div class="mt-3">
													<input class="form-check-input" type="checkbox" value="accounts_payable" id="accounts_payable">
													<label class="form-check-label" for="accounts_payable">
														Accounts Payable
													</label>
												</div>
												<div class="mt-3">
													<input class="form-check-input" type="checkbox" value="accounts_billable" id="accounts_billable">
													<label class="form-check-label" for="accounts_billable">
														Accounts Billable
													</label>
												</div>
												<div class="mt-3">
													<input class="form-check-input" type="checkbox" value="recruiting" id="recruiting">
													<label class="form-check-label" for="recruiting">
														Recruiting
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="email">Email<span class="mandatory"
													aria-hidden="true">*</span></label>
											<input type="text" id="email" class="form-control" placeholder="Enter Email"
												name="email" />
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="phone_number">
												Phone Number
											</label>
											<input type="text" id="phone_number" class="form-control" name="phone_number"
												placeholder="Enter Phone Number" required aria-required="true" />
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="work_address_line_1">
												Work Address Line 1
											</label>
											<input type="text" id="work_address_line_1" class="form-control"
												name="work_address_line_1" placeholder="Enter Address 1" required
												aria-required="true" />
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="work_address_line_2">
												Work Address Line 2
											</label>
											<input type="text" id="work_address_line_2" class="form-control"
												name="work_address_line_2" placeholder="Enter Address 2" required
												aria-required="true" />
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="country">Country</label>
											<select class="select2 form-select" id="country">
												<option value="USA">Select Country</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="state">State / Province</label>
											<select class="form-select" id="state">
												<option value="Al">Select State/Province</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="city">City</label>
											<select class="form-select" id="city">
												<option>Select City</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="city">Zip Code / Postal Code</label>
											<input type="text" id="zip_code_postal_code" class="form-control" name="zip_code_postal_code" placeholder="Enter Zip Code / Postal Code" required aria-required="true" />
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
											<label class="form-label" for="set_time_zone">Set Time Zone</label>
											<select class="form-select" id="set_time_zone">
												<option>Select Time Zone</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-12">
										<div class="mb-4">
										  <label class="form-label" for="tags">
											Tags
										  </label>
										  <textarea
										  class="form-control"
										  placeholder=""
										  name="tags"
										  id="tags"
										  ></textarea>
										</div>
									  </div>

									<div class="row mt-3">
										<h2>Roles and Permissions</h2>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<select class="form-select" id="roles-permissions">
													<option>Select Roles and Permissions</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 justify-content-center form-actions d-flex">
									<button type="button" class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">
										Cancel
									</button>
									<button type="submit" class="btn btn-primary rounded mx-2">Save & Exit</button>
									<button type="submit" class="btn btn-primary rounded">Next</button>
								</div>
							</div>
							</form>
						</div><!-- END: Profile -->
	{{-- 
						<!-- BEGIN: System Permissions -->
						<div class="tab-pane fade" :class="{ 'active show': tab === 'system-permissions' }" id="system-permissions" role="tabpanel" aria-labelledby="system-permissions-tab" tabindex="0" x-show="tab === 'system-permissions'">
							 <div class="row mb-4">
								<div class="col-lg-12">
									<h2>Manage User Permissions</h2>
									<p>Choose from predefined set of permissions for the user. You can customize permissions
										as well.</p>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12 gap-3 d-lg-flex">
									<a href="#" class="btn btn-outline-dark rounded">Super Admin</a>
									<a href="#" class="btn btn-outline-dark rounded">Provider Manager</a>
									<a href="#" class="btn btn-outline-dark rounded">Customer Relation</a>
									<a href="#" class="btn btn-outline-dark rounded">Company Manager</a>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12 mb-4">
									<p class="mb-0">Copy permissions from another user</p>
								</div>
								<div class="col-lg-12 d-lg-flex gap-3 mb-3">
									<select class="form-select w-auto">
										<option>Select User</option>
									</select>
									<a href="#" class="btn btn-primary rounded">Apply</a>
								</div>
								<div class="col-lg-12">
									<div class="table-responsive">
										<table id="" class="table table-hover">
											<thead>
												<tr role="row">
													<th class="w-25">Section</th>
													<th>
														<div class="form-check mb-0 d-lg-flex align-items-center gap-2">
															<input class="form-check-input" id="th_view" name="th_view"
																type="checkbox" tabindex="" />
															<label class="form-check-label" for="th_view"> View</label>
														</div>
													</th>
													<th>
														<div class="form-check mb-0 d-lg-flex align-items-center gap-2">
															<input class="form-check-input" id="th_add" name="th_add"
																type="checkbox" tabindex="" />
															<label class="form-check-label" for="th_add"> Add</label>
														</div>
													</th>
													<th>
														<div class="form-check mb-0 d-lg-flex align-items-center gap-2">
															<input class="form-check-input" id="th_edit" name="th_edit"
																type="checkbox" tabindex="" />
															<label class="form-check-label" for="th_edit"> Edit</label>
														</div>
													</th>
													<th>
														<div class="form-check mb-0 d-lg-flex align-items-center gap-2">
															<input class="form-check-input" id="th_delete" name="th_delete"
																type="checkbox" tabindex="" />
															<label class="form-check-label" for="th_delete"> Delete</label>
														</div>
													</th>
													<th>
														<div class="form-check mb-0 d-lg-flex align-items-center gap-2">
															<input class="form-check-input" id="th_all" name="th_all"
																type="checkbox" tabindex="" />
															<label class="form-check-label" for="th_all"> All</label>
														</div>
													</th>
												</tr>
											</thead>
											<tbody>
												<tr role="row" class="odd">
													<td>
														<div class="d-flex justify-content-between"
															data-bs-toggle="collapse" href="#collapseDashboard"
															role="button" aria-expanded="false"
															aria-controls="collapseDashboard">
															Dashboard
															<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'
																fill='none' stroke='#000000' stroke-width='2'
																stroke-linecap='round' stroke-linejoin='round'
																class='feather feather-chevron-right icon-arrow-right'>
																<polyline points='9 18 15 12 9 6'></polyline>
															</svg>
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody class="collapse" id="collapseDashboard">
												<tr>
													<td class="ps-4">Dashboard</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody>
												<tr role="row" class="even">
													<td>
														<div class="d-flex justify-content-between">
															Chat
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody>
												<tr role="row" class="odd">
													<td>
														<div class="d-flex justify-content-between"
															data-bs-toggle="collapse" href="#collapseAssignments"
															role="button" aria-expanded="false"
															aria-controls="collapseAssignments">
															Assignments
															<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'
																fill='none' stroke='#000000' stroke-width='2'
																stroke-linecap='round' stroke-linejoin='round'
																class='feather feather-chevron-right icon-arrow-right'>
																<polyline points='9 18 15 12 9 6'></polyline>
															</svg>
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody class="collapse" id="collapseAssignments">
												<tr>
													<td class="ps-4">Assignments</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody>
												<tr role="row" class="even">
													<td>
														<div class="d-flex justify-content-between"
															data-bs-toggle="collapse" href="#collapseCustomers"
															role="button" aria-expanded="false"
															aria-controls="collapseCustomers">
															Customers
															<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'
																fill='none' stroke='#000000' stroke-width='2'
																stroke-linecap='round' stroke-linejoin='round'
																class='feather feather-chevron-right icon-arrow-right'>
																<polyline points='9 18 15 12 9 6'></polyline>
															</svg>
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody class="collapse" id="collapseCustomers">
												<tr class="odd">
													<td class="first-col">Add Customer</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
												<tr class="even">
													<td class="first-col">All Customers</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
												<tr class="odd">
													<td class="first-col">All Companies</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
												<tr class="even">
													<td class="first-col">Deactivated Customers</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
												<tr class="odd">
													<td class="first-col">Invoice Generator</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
												<tr class="even">
													<td class="first-col">Customer Invoices</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody>
												<tr role="row" class="odd">
													<td>
														<div class="d-flex justify-content-between"
															data-bs-toggle="collapse" href="#collapseProviders"
															role="button" aria-expanded="false"
															aria-controls="collapseProviders">
															Providers
															<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'
																fill='none' stroke='#000000' stroke-width='2'
																stroke-linecap='round' stroke-linejoin='round'
																class='feather feather-chevron-right icon-arrow-right'>
																<polyline points='9 18 15 12 9 6'></polyline>
															</svg>
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody class="collapse" id="collapseProviders">
												<tr>
													<td class="ps-4">Add Provider</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody>
												<tr role="row" class="even">
													<td>
														<div class="d-flex justify-content-between">
															Reports
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody>
												<tr role="row" class="odd">
													<td>
														<div class="d-flex justify-content-between">
															System Logs
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody>
												<tr role="row" class="even">
													<td>
														<div class="d-flex justify-content-between"
															data-bs-toggle="collapse" href="#collapseSettings" role="button"
															aria-expanded="false" aria-controls="collapseSettings">
															Settings
															<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'
																fill='none' stroke='#000000' stroke-width='2'
																stroke-linecap='round' stroke-linejoin='round'
																class='feather feather-chevron-right icon-arrow-right'>
																<polyline points='9 18 15 12 9 6'></polyline>
															</svg>
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
											<tbody class="collapse" id="collapseSettings">
												<tr>
													<td class="ps-4">Business Profile & Settings</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
													<td>
														<div class="form-check">
															<input class="form-check-input" id="" name="" type="checkbox"
																tabindex="" />
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-12">
									<hr>
								</div>
							</div>
							<!-- Form Actions -->
							<div class="col-12 justify-content-center form-actions d-flex">
								<button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
								<button type="submit" class="btn btn-primary rounded">Next</button>
							</div><!-- /Form Actions -->   

						</div><!-- END: System Permissions -->
	
						<!-- BEGIN: User Access -->
						<div class="tab-pane fade" :class="{ 'active show': tab === 'user-access' }" id="user-access" role="tabpanel" aria-labelledby="user-access-tab" tabindex="0" x-show="tab === 'user-access'">
							<div class="row mb-4">
								<div class="col-lg-12">
									<h2>Manage User Access</h2>
									<p>Copy Access of Customers & Providers from another user</p>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12 d-lg-flex gap-3 mb-4">
									<select class="form-select w-auto">
										<option>Select User</option>
									</select>
									<a href="#" class="btn btn-primary rounded">Apply</a>
								</div>
								<div class="col-12">
									<div class="accordion" id="accordionManageUserAccess">
										<div class="accordion-item">
											<div id="headingCompaniesCustomerAccess">
												<div class="accordion-button justify-content-between"
													data-bs-toggle="collapse"
													data-bs-target="#collapseCompaniesCustomerAccess" aria-expanded="true"
													aria-controls="collapseCompaniesCustomerAccess">
													<div>Companies & Customer Access</div>
													<a href="#" class="btn btn-primary rounded me-5">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
														</svg>
														<span class="ms-2">Add Customer</span>
													</a>
												</div>
											</div>
											<div id="collapseCompaniesCustomerAccess"
												class="accordion-collapse collapse show" aria-labelledby="headingOne"
												data-bs-parent="#accordionManageUserAccess">
												<div class="accordion-body p-0">
													<div class="d-flex justify-content-between my-2">
														<div class="d-inline-flex align-items-center gap-4">
															<label for="show_records_number"
																class="form-label mb-0">Show</label>
															<select class="form-select" id="show_records_number">
																<option>10</option>
																<option>15</option>
																<option>20</option>
																<option>25</option>
															</select>
														</div>
														<div class="d-inline-flex align-items-center gap-4">
															<label for="search"
																class="form-label fw-semibold mb-0">Search</label>
															<input type="search" class="form-control" id="search"
																name="search" placeholder="Search here" autocomplete="on" />
														</div>
													</div>
													<table class="table table-hover mb-3">
														<thead>
															<tr>
																<th>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</th>
																<th>
																	Company
																</th>
																<th class="text-center">
																	Customers
																</th>
																<th>
																	Permission
																</th>
																<th class="text-center">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage" checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage1"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage1">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage2"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage2">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage3"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage3">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage4">
																		<label class="form-check-label"
																			for="CustomerAccessManage4">Visible</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage5"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage5">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
													<div
														class="d-flex justify-content-between align-items-center px-3 mb-3">
														<div>
															<p class="fw-semibold mb-0">Showing 1 to 5 of 100 entries</p>
														</div>
														<nav aria-label="Page Navigation">
															<ul class="pagination mb-0">
																<li class="page-item">
																	<a class="page-link" href="#" aria-label="Previous">
																		<span aria-hidden="true">&laquo;</span>
																	</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">1</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">3</a>
																</li>
																<li class="page-item active"><a class="page-link"
																		href="#">4</a></li>
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
										</div>
										<div class="accordion-item">
											<div id="headingTeamsProvidersAccess">
												<div class="accordion-button justify-content-between"
													data-bs-toggle="collapse" data-bs-target="#collapseTeamsProvidersAccess"
													aria-expanded="true" aria-controls="collapseTeamsProvidersAccess">
													<div>Teams & Providers Access</div>
													<a href="#" class="btn btn-primary rounded me-5">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
														</svg>	
														<span class="ms-2">Add Provider</span>
													</a>
												</div>
											</div>
											<div id="collapseTeamsProvidersAccess" class="accordion-collapse collapse show"
												aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
												<div class="accordion-body p-0">
													<div class="d-flex justify-content-between my-2">
														<div class="d-inline-flex align-items-center gap-4">
															<label for="show_records_number"
																class="form-label mb-0">Show</label>
															<select class="form-select" id="show_records_number">
																<option>10</option>
																<option>15</option>
																<option>20</option>
																<option>25</option>
															</select>
														</div>
														<div class="d-inline-flex align-items-center gap-4">
															<label for="search"
																class="form-label fw-semibold mb-0">Search</label>
															<input type="search" class="form-control" id="search"
																name="search" placeholder="Search here" autocomplete="on" />
														</div>
													</div>
													<table class="table table-hover mb-3">
														<thead>
															<tr>
																<th>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</th>
																<th>
																	Teams
																</th>
																<th class="text-center">
																	Providers
																</th>
																<th>
																	Permission
																</th>
																<th class="text-center">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage" checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage1"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage1">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage2"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage2">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage3"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage3">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage4">
																		<label class="form-check-label"
																			for="CustomerAccessManage4">Visible</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage5"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage5">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
													<div
														class="d-flex justify-content-between align-items-center px-3 mb-3">
														<div>
															<p class="fw-semibold mb-0">Showing 1 to 5 of 100 entries</p>
														</div>
														<nav aria-label="Page Navigation">
															<ul class="pagination mb-0">
																<li class="page-item">
																	<a class="page-link" href="#" aria-label="Previous">
																		<span aria-hidden="true">&laquo;</span>
																	</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">1</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">3</a>
																</li>
																<li class="page-item active"><a class="page-link"
																		href="#">4</a></li>
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
										</div>
										<div class="accordion-item">
											<div id="headingAccommodationServiceAccess">
												<div class="accordion-button justify-content-between"
													data-bs-toggle="collapse"
													data-bs-target="#collapseAccommodationServiceAccess"
													aria-expanded="true" aria-controls="collapseAccommodationServiceAccess">
													<div>Accommodation & Service Access</div>
													<a href="#" class="btn btn-primary rounded me-5">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
														</svg>
														<span class="ms-2">Add Service</span>
													</a>
												</div>
											</div>
											<div id="collapseAccommodationServiceAccess"
												class="accordion-collapse collapse show" aria-labelledby="headingOne"
												data-bs-parent="#accordionManageUserAccess">
												<div class="accordion-body p-0">
													<div class="d-flex justify-content-between my-2">
														<div class="d-inline-flex align-items-center gap-4">
															<label for="show_records_number"
																class="form-label mb-0">Show</label>
															<select class="form-select" id="show_records_number">
																<option>10</option>
																<option>15</option>
																<option>20</option>
																<option>25</option>
															</select>
														</div>
														<div class="d-inline-flex align-items-center gap-4">
															<label for="search"
																class="form-label fw-semibold mb-0">Search</label>
															<input type="search" class="form-control" id="search"
																name="search" placeholder="Search here" autocomplete="on" />
														</div>
													</div>
													<table class="table table-hover mb-3">
														<thead>
															<tr>
																<th>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</th>
																<th>
																	Accommodation
																</th>
																<th>
																	Permission
																</th>
																<th class="text-center">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage" checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage1"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage1">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage2"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage2">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage3"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage3">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage4">
																		<label class="form-check-label"
																			for="CustomerAccessManage4">Visible</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage5"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage5">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
													<div
														class="d-flex justify-content-between align-items-center px-3 mb-3">
														<div>
															<p class="fw-semibold mb-0">Showing 1 to 5 of 100 entries</p>
														</div>
														<nav aria-label="Page Navigation">
															<ul class="pagination mb-0">
																<li class="page-item">
																	<a class="page-link" href="#" aria-label="Previous">
																		<span aria-hidden="true">&laquo;</span>
																	</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">1</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">3</a>
																</li>
																<li class="page-item active"><a class="page-link"
																		href="#">4</a></li>
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
										</div>
										<div class="accordion-item">
											<div id="headingIndustryAccess">
												<div class="accordion-button justify-content-between"
													data-bs-toggle="collapse" data-bs-target="#collapseIndustryAccess"
													aria-expanded="true" aria-controls="collapseIndustryAccess">
													<div>Industry Access</div>
													<a href="#" class="btn btn-primary rounded me-5">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
														</svg>
														<span class="ms-2">Add Industry</span>
													</a>
												</div>
											</div>
											<div id="collapseIndustryAccess" class="accordion-collapse collapse show"
												aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
												<div class="accordion-body p-0">
													<div class="d-flex justify-content-between my-2">
														<div class="d-inline-flex align-items-center gap-4">
															<label for="show_records_number"
																class="form-label mb-0">Show</label>
															<select class="form-select" id="show_records_number">
																<option>10</option>
																<option>15</option>
																<option>20</option>
																<option>25</option>
															</select>
														</div>
														<div class="d-inline-flex align-items-center gap-4">
															<label for="search"
																class="form-label fw-semibold mb-0">Search</label>
															<input type="search" class="form-control" id="search"
																name="search" placeholder="Search here" autocomplete="on" />
														</div>
													</div>
													<table class="table table-hover mb-3">
														<thead>
															<tr>
																<th>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</th>
																<th>
																	Industry
																</th>
																<th>
																	Permission
																</th>
																<th class="text-center">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage" checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage1"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage1">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage2"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage2">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage3"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage3">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage4">
																		<label class="form-check-label"
																			for="CustomerAccessManage4">Visible</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage5"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage5">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
													<div
														class="d-flex justify-content-between align-items-center px-3 mb-3">
														<div>
															<p class="fw-semibold mb-0">Showing 1 to 5 of 100 entries</p>
														</div>
														<nav aria-label="Page Navigation">
															<ul class="pagination mb-0">
																<li class="page-item">
																	<a class="page-link" href="#" aria-label="Previous">
																		<span aria-hidden="true">&laquo;</span>
																	</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">1</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">3</a>
																</li>
																<li class="page-item active"><a class="page-link"
																		href="#">4</a></li>
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
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 justify-content-center form-actions d-flex">
								<button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
								<button type="submit" class="btn btn-primary rounded mx-2">Save & Exit</button>
								<button type="submit" class="btn btn-primary rounded">Next</button>
							</div>
						</div>
					</div> --}}
					{{-- END: User Access --}}
				</div>
			</div>
			{{-- Card Body --}}
			{{-- END: Steps --}}
		</div>
	</div>
</div>
