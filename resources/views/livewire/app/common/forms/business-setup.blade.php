<div>
	<div class="content-header row">
	  <div class="content-header-left col-12 mb-2">
		<div class="row breadcrumbs-top">
		  <div class="col-12">
			<h1 class="content-header-title float-start mb-0">Business Setup</h1>
			<div class="breadcrumb-wrapper">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
						<svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
							<use xlink:href="/css/common-icons.svg#home"></use>
						</svg>
					</a>
				</li>
				<li class="breadcrumb-item">
				  <a href="javascript:void(0)">
				  Settings
				  </a>
				</li>
				<li class="breadcrumb-item">
				  Business Setup
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
			  <!-- BEGIN: Steps -->
				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
				  <li class="nav-item" role="presentation">
					<button class="nav-link {{ $component == 'configuration-setting' ? 'active' : '' }}" id="configuration-setting-tab" data-bs-toggle="tab" data-bs-target="#configuration-setting" type="button" role="tab" aria-controls="configuration-setting" aria-selected="true"><span class="number">1</span> Configuration Setting</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link {{ $component == 'business-hours' ? 'active' : '' }}" id="business-hours-tab" data-bs-toggle="tab" data-bs-target="#business-hours" type="button" role="tab" aria-controls="business-hours" aria-selected="false"><span class="number">2</span> Business Hours</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button  class="nav-link {{ $component == 'payments' ? 'active' : '' }}" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments" type="button" role="tab" aria-controls="payments" aria-selected="false"><span class="number">3</span> Payments</button>
				  </li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane fade {{ $component == 'configuration-setting' ? 'active show' : '' }}" id="configuration-setting" role="tabpanel" aria-labelledby="configuration-setting-tab" tabindex="0">
					<div class="row between-section-segment-spacing">
					  <div class="col-lg-12">
						  <h2 class="mb-4">Configuration Setting</h2>
						  <div class="row inner-section-segment-spacing">
							<div class="col-lg-6">
							  <h3>Choose Portal Default Colours</h3>
							  <div class="row gap-0 row-gap-3">
								  <div class="choose-portal-colors">
									<div class="row">
									    <div class="col-12 col-md-3 col-lg-5 col-xl-4 mb-1 mb-md-0">
									      <label class="form-label-sm">Default Colour</label>
									    </div>
									    <div class="d-flex align-items-center col-12 col-md-8 col-lg-7 col-xl-8">
									      <div class="choosen-color">
									        <input type="color" class="form-control form-control-color border-0 p-0 w-100 h-100" id="PortalDefaultColour" value="#0A1E46" title="Choose your color">
									      </div>
									      <label class="form-label-sm">Choose Colour</label>
									    </div>
									</div>
								  </div>
								  <div class="choose-portal-colors">
									<div class="row">
									    <div class="col-12 col-md-3 col-lg-5 col-xl-4 mb-1 mb-md-0">
									      <label class="form-label-sm">Foreground Color</label>
									    </div>
									    <div class="d-flex align-items-center col-12 col-md-8 col-lg-7 col-xl-8">
									      <div class="choosen-color">
									        <input type="color" class="form-control form-control-color border-0 p-0 w-100 h-100" id="PortalForegroundColour" value="#000000" title="Choose your color">
									      </div>
									      <label class="form-label-sm">Choose Colour</label>
									    </div>
									</div>
								  </div>
							 </div>
							</div>
						  </div>
						  <div class="row inner-section-segment-spacing">
							<div class="col-lg-6">
							  <h3>Choose URL for Users to Access the Portal</h3>
								<div class="d-flex flex-column flex-md-row gap-3 align-items-md-center">
								  <input aria-label="Sub Domain Name for URL" type="" name="" class="form-control" placeholder="Name">
								  <label>.eclipsescheduling.com</label>
								  <div class="option">
									  <div class="d-flex">
										<svg class="mx-2" aria-label="Availabe" width="24" height="19" viewBox="0 0 24 19">
											<use xlink:href="/css/common-icons.svg#green-tick">
											</use>
										</svg>
										  Available
									  </div>
								  </div>
								</div>
							</div>
						  </div>
						  <div class="row inner-section-segment-spacing">
						  	<div class="col-md-7 col-lg-5">
						    	<div class="row">
						      		<div class="col-lg-12">
						        		<h3 class="mb-3">Company Logo</h3>
						      		</div>
						      		<div class="col-lg-12">
						        		<label class="form-label" for="add-company-logo"> Add Company Logo</label>
						        		<input aria-label="Sub Domain Name for URL" type="file" name="" class="form-control" placeholder="Name">
						      		</div>
						    	</div>
						  	</div>
						  	<div class="col-md-3 col-lg-6 mb-4 align-self-end ps-lg-5">
						    	<img src="/html-prototype/images/company/rectangle-logo.png" class="img-fluid" alt="help-desk">
						  	</div>
						  </div>
						  <div class="row inner-section-segment-spacing">
						  	<div class="col-md-7 col-lg-5">
						  		<div class="row">
								  	<div class="col-lg-12">
										<h3 class="mb-3">Login Screen Image</h3>
									</div>
									<div class="col-lg-12">
										<label class="form-label" for="upload-login-screen-image">Upload Login Screen Image</label>
									  	<input aria-label="Sub Domain Name for URL" type="file" name="" class="form-control" placeholder="Name">
									</div>
						  		</div>
						  	</div>
							<div class="col-md-3 col-lg-6 mb-4 align-self-end ps-lg-5">

								<img src="/html-prototype/images/company/help-desk.png" class="img-fluid" alt="help-desk"/>
							</div>
						  </div>
						  <div class="row inner-section-segment-spacing">
							<div class="col-lg-6">
								<h3>Login Screen Welcome Text</h3>
								<label class="form-label" for="updated-welcome-text">Updated Welcome Text</label>
								  <textarea class="form-control" rows="3" cols="3" placeholder="Enter Text" id="updated-welcome-text"></textarea>
							</div>
						  </div>
						  <div class="row inner-section-segment-spacing">
							<div class="col-lg-6">
								<h3>Assign Email to Send Notifications</h3>
								<label class="form-label" for="EmailAddressSendNotifications">Email Address</label>
								  <input
									type="text"
									id="EmailAddressSendNotifications"
									class="form-control"
									name="EmailAddressSendNotifications"
									placeholder="Enter Email"
									/>
							</div>
						  </div>
						  <div class="row inner-section-segment-spacing">
							<div class="col-lg-6">
								<h3>Assign Email to Receive Customer Responses</h3>
								<label class="form-label" for="EmailAddressCustomerResponses">Email Address</label>
								  <input
									type="text"
									id="EmailAddressCustomerResponses"
									class="form-control"
									name="EmailAddressCustomerResponses"
									placeholder="Enter Email"
									/>
							</div>
						  </div>
						  <div class="row">
							<div class="col-lg-6 mb-3 mt-4">
								<h3>Announcements & Communications</h3>
								</div>
						  </div>
						  <div class="border-dashed col-lg-6 p-4 rounded">
							<div class="row">
								<div class="col-lg-12 mb-4">
									<label class="form-label" for="AnnouncementsCommunications">Message 1</label>
									  <textarea class="form-control" rows="4" cols="3" placeholder="Enter Message" id="AnnouncementsCommunications"></textarea>
								</div>
							  </div>

						  <div class="row">
							<div class="col-lg-12 mb-4 d-lg-flex gap-3">
								<div class="col-xl-6">
									<h3>Display:</h3>
									<div class="form-check">
									  <input class="form-check-input" id="DisplayOnLoginScreen" name="DisplayOnLoginScreen" type="checkbox" tabindex="" />
									  <label class="form-check-label" for="DisplayOnLoginScreen"> Display On Log-in Screen</label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" id="DisplayOnDashboard" name="DisplayOnDashboard" type="checkbox" tabindex="" />
									  <label class="form-check-label" for="DisplayOnDashboard"> Display On Dashboard</label>
									</div>
									<div class="row mb-4 mt-4">
										<div class="col-lg-8">
											<h3>Duration:</h3>
											<label class="form-label-sm" for="Days"> Days</label>
											<input class="form-control form-control-sm text-center w-25" id="Days" name="DisplayToProviders" value="5" type="" tabindex="" />
										</div>
									</div>
								</div>

								<div class="col-xl-6">
									<h3>Audience:</h3>
									<div class="form-check">
									  <input class="form-check-input" id="DisplayToProviders" name="DisplayToProviders" type="checkbox" tabindex="" />
									  <label class="form-check-label" for="DisplayToProviders"> Display to Providers</label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" id="DisplayToCustomers" name="DisplayToCustomers" type="checkbox" tabindex="" />
									  <label class="form-check-label" for="DisplayToCustomers"> Display to Customers</label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" id="DisplayToAdminUsers" name="DisplayToAdminUsers" type="checkbox" tabindex="" />
									  <label class="form-check-label" for="DisplayToAdminUsers"> Display to Admin-users</label>
									</div>
								</div>

							</div>


						  </div>
						</div>
						<div class="col-lg-8 mt-3">
							<a href="#" class="btn btn-primary btn-sm rounded">
								<svg class="mx-2" aria-label="Add Message" width="20" height="20" viewBox="0 0 20 20">
									<use xlink:href="/css/common-icons.svg#plus">
									</use>
								</svg>
								<span class="ms-2">Add Message</span>
							</a>
						  </div>
						</div>
					  </div>
					  <div class="col-12 justify-content-center form-actions d-flex">
						  <button type="button" class="btn btn-outline-dark rounded mx-2">Cancel</button>
						  <button type="submit" class="btn btn-primary rounded" x-on:click="$wire.switch('business-hours')">Next</button>
					  </div>
					</div>

				  <div class="tab-pane fade {{ $component == 'business-hours' ? 'active show' : '' }}" id="business-hours" role="tabpanel" aria-labelledby="business-hours-tab" tabindex="0">
					<div class="row between-section-segment-spacing" >
						<div class="col-lg-12">
						  <h2>Business Hours Setup</h2>
						  <p>Your set hours determine when "Business hours" and "After-hours" rates are in effect for customer billing and Provider payroll and prevents services from being scheduled during your "closed" hours.You can also set the times which you are closed and not providing services; this will restrict customers from scheduling.</p>
					  </div>
					</div>
					<div class="row between-section-segment-spacing">
						<div class="col-lg-12">
							<h3>Time Configuration</h3>
							<div class="row">
								<div class="col-lg-6">
									<label for="Set_Business_Time_Zone" class="form-label">Set Business Time Zone</label>
									<input id="Set_Business_Time_Zone" type="" name="" class="form-control" placeholder="Select Time Zone">
								</div>
								<div class="col-lg-6">
									<label class="form-label">Set Time Format</label>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="Hrs" id="12HrsRadioButton" checked>
									  <label class="form-check-label" for="12HrsRadioButton">
										12 Hrs
									  </label>
									</div>
									<div class="form-check">
									  <input class="form-check-input" type="radio" name="Hrs" id="24Hrs">
									  <label class="form-check-label" for="24Hrs">
										24 Hrs
									  </label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row between-section-segment-spacing">
						<div class="col-lg-12">
							<h3>Add Hours Slot In Schedule</h3>
							<div class="row mb-2">
								<div class="col-lg-6">
									<label class="form-label">Type Of Slot</label>
									<div >
										<div class="form-check form-check-inline ">
										  <input class="form-check-input" type="radio" name="HoursSlot" id="BusinessHours" checked>
										  <label class="form-check-label" for="BusinessHours">
											Business Hours
										  </label>
										</div>
										<div class="form-check form-check-inline">
										  <input class="form-check-input" type="radio" name="HoursSlot" id="AfterBusinessHours">
										  <label class="form-check-label" for="AfterBusinessHours">
											After Business Hours
										  </label>
										</div>
									</div>
								</div>
							</div>
							<div class="row inner-section-segment-spacing">
								<div class="col-lg-12">
									<label class="form-label">Select Days & Time</label>
									<div class="d-flex flex-column flex-lg-row gap-lg-3 gap-2 align-items-lg-center mb-3">
										<input aria-label="Select Day" type="" name="" class="form-control w-auto js-select-day" placeholder="Select Day">
										<label class="form-label-sm">Choose Time</label>
										<div class="d-flex">
										  <div class="d-flex flex-column justify-content-between">
											<label class="form-label-sm" for="set_start_time">Start Time</label>
											<div class="d-flex gap-2">
											  <div class="time d-flex align-items-center gap-2">
												<div class="hours">12</div>
												<svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												  <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
												</svg>
												<div class="mins">59</div>
											  </div>
											  <div class="form-check form-switch form-switch-column mb-0">
												  <input checked class="form-check-input" type="checkbox" role="switch" id="pm" aria-label="PM">
												  <label class="form-check-label" for="pm">PM</label>
											  </div>
											</div>
										  </div>
										</div>
										<div class="d-flex">
										  <div class="d-flex flex-column justify-content-between">
											<label class="form-label-sm" for="set_start_time">End Time</label>
											<div class="d-flex gap-2">
											  <div class="time d-flex align-items-center gap-2">
												<div class="hours">12</div>
												<svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												  <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
												</svg>
												<div class="mins">59</div>
											  </div>
											  <div class="form-check form-switch form-switch-column mb-0">
												  <input checked class="form-check-input" type="checkbox" role="switch" id="am" aria-label="AM">
												  <label class="form-check-label" for="am">AM</label>
											  </div>
											</div>
										  </div>
										</div>
									</div>
									<button class="btn btn-primary btn-sm rounded">Submit</button>
								</div>
							</div>
							<div class="row inner-section-segment-spacing">
								<div class="col-12">
									<div class="d-lg-flex justify-content-between mb-4">
										<h3 class="mb-lg-0">Business Schedule</h3>
										<div class="helping-labels d-flex gap-3">
											<div class="d-flex align-items-center">
												<span class="label-color bg-success"></span>
												Business Hours
											</div>
											<div class="d-flex align-items-center">
												<span class="label-color bg-warning"></span>
												After Business Hours
											</div>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-schedule">
											<thead>
												<th>
													<div class="day">
														Monday
													</div>
													<div class="form-check form-switch">
														<label  class="form-check-label" >ON</label>
														<input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="monday">
													</div>
												</th>
												<th>
													<div class="day">
														Tuesday
													</div>
													<div class="form-check form-switch">
														<label class="form-check-label">ON</label>
														<input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="tuesday">
													</div>
												</th>
												<th>
													<div class="day">
														Wednesday
													</div>
													<div class="form-check form-switch">
														<label class="form-check-label">ON</label>
														<input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="wednesday">
													</div>
												</th>
												<th>
													<div class="day">
														Thursday
													</div>
													<div class="form-check form-switch">
														<label class="form-check-label">ON</label>
														<input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="thursday">
													</div>
												</th>
												<th>
													<div class="day">
														Friday
													</div>
													<div class="form-check form-switch">
														<label class="form-check-label">ON</label>
														<input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="friday">
													</div>
												</th>
												<th>
													<div class="day">
														Saturday
													</div>
													<div class="form-check form-switch">
														<label class="form-check-label" >ON</label>
														<input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="saturday">
													</div>
												</th>
												<th>
													<div class="day">
														Sunday
													</div>
													<div class="form-check form-switch">
														<label class="form-check-label" >OFF</label>
														<input class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="sunday">
													</div>
												</th>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="time-slot mb-3 bg-success text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
														<div class="time-slot bg-warning text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
													</td>
													<td>
														<div class="time-slot mb-3 bg-success text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
														<div class="time-slot bg-warning text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
													</td>
													<td>
														<div class="time-slot mb-3 bg-success text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
														<div class="time-slot bg-warning text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
													</td>
													<td>
														<div class="time-slot mb-3 bg-success text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
														<div class="time-slot bg-warning text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
													</td>
													<td>
														<div class="time-slot mb-3 bg-success text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
														<div class="time-slot bg-warning text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
													</td>
													<td>
														<div class="time-slot mb-3 bg-success text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
														<div class="time-slot bg-warning text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
													</td>
													<td>
														<div class="time-slot mb-3 bg-secondary text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
														<div class="time-slot bg-secondary text-white">
															09 : 00 AM To 06 : 00 PM
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="row inner-section-segment-spacing">
								<div class="col-12">
									<h3>Add Holidays / Days Closed</h3>
									<div class="d-lg-flex gap-3 mb-3">
										<div>
											<label for="select-days" class="form-label">Select Days / Holidays </label>
											<div class="position-relative">
												<input type="" id="select-days" class="form-control w-auto js-single-date" placeholder="MM/DD/YYYY" name="selectHolidays">
												<svg aria-label="Select Date" class="icon-date md right cursor-pointer mt-2" width="20" height="20" viewBox="0 0 20 20"fill="none"
										        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#input-calender"></use>
									          </svg>
											</div>
										</div>
										<div>
											<label class="form-label">Repeat Holiday</label>
											<div class="form-check">
												<input class="form-check-input" id="yearly" name="yearly" type="checkbox" tabindex="" />
												<label class="form-check-label" for="yearly"> Yearly</label>
											</div>
										</div>
									</div>
									<button class="btn btn-primary btn-sm rounded">Submit</button>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-9">
									<h3>Listed Holidays</h3>
									<table class="table table-hover">
										<thead>
											<th scope="col">DATE</th>
											<th scope="col">DAY</th>
											<th scope="col">ACTION</th>
										</thead>
										<tbody>
											<tr class="odd">
												<td>
													12/25/2022 - 01/05/2023
												</td>
												<td>
													Tuesday
												</td>
												<td>
													<a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
														<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
															<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
														</svg>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>
													12/25/2022
												</td>
												<td>
													Tuesday
												</td>
												<td>
													<a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
														<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
															<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
														</svg>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>
													12/25/2022
												</td>
												<td>
													Tuesday
												</td>
												<td>
													<a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
														<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
															<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
														</svg>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>
													12/25/2022
												</td>
												<td>
													Tuesday
												</td>
												<td>
													<a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
														<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
															<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
														</svg>
													</a>
												</td>
											</tr>
											<tr class="odd">
												<td>
													12/25/2022
												</td>
												<td>
													Tuesday
												</td>
												<td>
													<a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
														<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
															<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
														</svg>
													</a>
												</td>
											</tr>
											<tr class="even">
												<td>
													12/25/2022
												</td>
												<td>
													Tuesday
												</td>
												<td>
													<a href="#" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
														<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
															<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
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
					<!-- Form Actions -->
					<div class="col-12 justify-content-center form-actions d-flex">
						<button type="button" class="btn btn-outline-dark rounded mx-2" x-on:click="$wire.switch('configuration-setting')">Cancel</button>
						<button type="submit" class="btn btn-primary rounded" x-on:click="$wire.switch('payments')">Next</button>
					</div><!-- /Form Actions -->
				  </div>
				  <div class="tab-pane fade {{ $component == 'payments' ? 'active show' : '' }}" id="payments" role="tabpanel" aria-labelledby="payments-tab" tabindex="0">
					<div class="row">
						<div class="col-lg-12">
							<h2>Payments</h2>
							<div class="row">
								<div class="col-lg-12">
									<div class="mb-5">
									<h3>Provider Payments & Preferences</h3>
									<div class="row between-section-segment-spacing">
										<div class="col-lg-12 mb-4">
											<div class="d-flex align-items-center">
											<div class="form-check form-switch mb-0">
											<input class="form-check-input" aria-label="Toggle Provider Payroll" type="checkbox" role="switch" id="providerPayroll" checked="">
											<input class="form-check-input" aria-label="Toggle Provider Payroll" type="checkbox" role="switch">												
											</div>
											<label class="form-label mb-0">Provider Payroll</label></div></div>
										<div class="col-lg-6">
											<div class="row">
												<div class="col-lg-12 mb-2">
													<label class="form-label" for="directDepositFormUpload">
														Direct Deposit Form Upload
													</label>
													<input class="form-control" type="file" id="directDepositFormUpload">
												</div>
												<div class="col-lg-12 mb-4">
														<div class="form-check">
															<input class="form-check-input" id="enrollDirectDepositProvider" name="enrollDirectDeposit" type="checkbox" tabindex="" />
															<label class="form-check-label" for="enrollDirectDepositProvider">Require Provider to Acknowledge to Enroll in Direct Deposit</label>
														</div>
												</div>
												 <div class="between-section-segment-spacing">
													<div class="col-lg-12 mb-4">
														<div class="d-lg-flex justify-content-between mb-2 mb-lg-0">
															<label class="form-label" for="reimburseProviders">
																Rate Per Mile to Reimburse Providers
															</label>
															<a href="#">
																KM <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil">
																	</use>
																</svg>
															</a>
														</div>

														<input class="form-control" type="" id="reimburseProviders" placeholder="$00:00">
													</div>
													<div class="col-lg-12 mb-4">
														<div class="d-lg-flex ">
															<label class="form-label" for="compensatedTravelTime">
																Rate To Reimburse Compensated Travel Time
																<svg aria-label="Information" width="15" height="16" viewBox="0 0 15 16">
																	<use xlink:href="/css/common-icons.svg#fill-question"></use>
																</svg>
															</label>
														</div>
														<div class="row">
														<div class="col-lg-8 d-inline-flex">
															<input class="form-control" type="" id="compensatedTravelTime" placeholder="$00:00">
															<div class="text-nowrap col-lg-4 ms-2 mt-3"><span>Per hour</span></div>
														</div>
													</div>
													<div class="row ms-1 mt-2">
														<div class="form-check">
															<input class="form-check-input" id="SameAsServiceRate" name="SameAsServiceRate" type="checkbox" tabindex="" />
															<label class="form-check-label" for="SameAsServiceRate">Same as Service Rate</label>
														  </div>
													 </div>
													</div>
													<div class="col-lg-12 mb-4">
														<label class="form-label" for="select-currency">
															Select Currency
														</label>
														<select id="select-currency" class="form-select">
															<option>Select Currency</option>
														</select>
													</div>
												</div>
													<div class="col-lg-12 mb-4">
														<div class="form-check form-switch">
															<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Customer Billing" id="customerBilling">
															<label class="form-check-label" >Customer Billing</label>
														</div>
													</div>
													<div class="col-lg-12 mb-4">
														<label class="form-label" for="billingSchedule">
															Billing Schedule (Days After Invoice) <br>Net
														</label>
														<div class="col-3 d-flex gap-2 align-items-center">
															<input class="form-control" type="" id="billingSchedule" placeholder="10"> <span>Days</span>
														</div>
													</div>
												</div>
											</div>
										{{-- Begin: Staff Providers --}}
										<div class="col-lg-6">
											<label class="form-label" for="payment-schedule ">
												Payment Schedule
											</label>
											<div class="row">
												<div class="col-lg-6">
													<div class="mb-2">
														<div class="form-check">
															<input class="form-check-input" id="staffProvider" name="enrollDirectDeposit" type="checkbox" tabindex="" checked />
															<label class="form-check-label" for="staffProvider">Staff Providers</label>
														</div>
													</div>
													<div class="mx-4 mb-4">
														<div class="mb-2">
															<div class="form-check">
																<input class="form-check-input" checked type="radio" name="Hrs" id="everyweekstarting">
																<label class="form-check-label" for="everyweekstarting">
																	Every week starting
																</label>
															  </div>
														</div>
														<div class="mx-4">
															<div class="mb-2">
																<label class="form-label text-sm" for="invoice-submission-day1">
																	Invoice Submission Day
																</label>
																<select id="invoice-submission-day1" class="form-select">
																	<option>Friday</option>
																</select>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="remittanceRelease">
																	Remittance Release
																</label>
																<select id="remittanceRelease" class="form-select">
																	<option>3 Days</option>
																</select>
															</div>
														</div>
													</div>

													<div class="mx-4 mb-4">
														<div class="mb-2">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="Hrs" id="" aria-label="Every two-weeks starting" checked>
																<label class="form-check-label" for="">
																	Every two-weeks starting
																</label>
															  </div>
														</div>
														<div class="mx-4">
															<div class="mb-2">
																<label class="form-label text-sm" for="invoice-submission-day2">
																	Invoice Submission Day
																</label>
																<select id="invoice-submission-day2" class="form-select">
																	<option>Friday</option>
																</select>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="remittance-release1">
																	Remittance Release
																</label>
																<select id="remittance-release1" class="form-select">
																	<option>3 Days</option>
																</select>
															</div>
														</div>
													</div>

													<div class="mx-4 mb-4">
														<div class="mb-2">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="Hrs" id="EveryMonthStarting" checked>
																<label class="form-check-label" for="EveryMonthStarting">
																	Every month starting
																</label>
															  </div>
														</div>
														<div class="mx-4">
															<div class="mb-2">
																<label class="form-label text-sm" for="invoice-submission-day3">
																	Invoice Submission Day
																</label>
																<select id="invoice-submission-day3" class="form-select">
																	<option>4th</option>
																</select>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="remittance-release2">
																	Remittance Release
																</label>
																<select id="remittance-release2" class="form-select">
																	<option>14 Days</option>
																</select>
															</div>
														</div>
													</div>

													<div class="mx-4">
														<div class="mb-2">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="Hrs" id="on-select-days-of-month" checked>
																<label class="form-check-label" for="on-select-days-of-month">
																	On select days of the month
																</label>
															  </div>
														</div>
														<div class="mx-4">
															<div class="mb-2">
																<label class="form-label text-sm" for="invoice-submission-day4">
																	Invoice Submission Day
																</label>
																<select id="invoice-submission-day4" class="form-select">
																	<option>4th</option>
																</select>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="remittance-release4">
																	Invoice Submission Day
																</label>
																<div class="d-flex gap-1 align-items-center">
																	<select id="remittance-release4" class="form-select">
																		<option>14th</option>
																	</select>
																	<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#blue-plus"></use>
                                                                    </svg>
																	<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#blue-delete-icon"></use>
                                                                    </svg>
																</div>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="remittance-release5">
																	Remittance Release
																</label>
																<select id="remittance-release5" class="form-select">
																	<option>14 Days</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												{{-- End: Staff Providers --}}
												{{-- Begin: Contract Providers --}}
												<div class="col-lg-6">
													<div class="mb-2">
														<div class="form-check">
															<input class="form-check-input" id="contract-providers" name="contract-providers" type="checkbox" tabindex="" checked />
															<label class="form-check-label" for="contract-providers">Contract Providers</label>
														</div>
													</div>
													<div class="mx-4 mb-4">
														<div class="mb-2">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="Hrs" id="every-week-starting" checked>
																<label class="form-check-label" for="every-week-starting">
																	Every week starting
																</label>
															  </div>
														</div>
														<div class="mx-4">
															<div class="mb-2">
																<label class="form-label text-sm" for="invoiceSubmissionDay">
																	Invoice Submission Day
																</label>
																<select id="invoiceSubmissionDay" class="form-select">
																	<option>Friday</option>
																</select>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="Remittance-Release">
																	Remittance Release
																</label>
																<select id="Remittance-Release" class="form-select">
																	<option>3 Days</option>
																</select>
															</div>
														</div>
													</div>

													<div class="mx-4 mb-4">
														<div class="mb-2">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="Hrs" id="EveryTwoWeeksStarting" checked>
																<label class="form-check-label" for="EveryTwoWeeksStarting">
																	Every two-weeks starting
																</label>
															  </div>
														</div>
														<div class="mx-4">
															<div class="mb-2">
																<label class="form-label text-sm" for="">
																	Invoice Submission Day
																</label>
																<select  class="form-select" aria-label="Invoice Submission Day">
																	<option>Friday</option>
																</select>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="remittance-release">
																	Remittance Release
																</label>
																<select  class="form-select" aria-label="Remittance Release">
																	<option>3 Days</option>
																</select>
															</div>
														</div>
													</div>

													<div class="mx-4 mb-4">
														<div class="mb-2">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="Hrs" id="every-month-starting" checked>
																<label class="form-check-label" for="every-month-starting">
																	Every month starting
																</label>
															  </div>
														</div>
														<div class="mx-4">
															<div class="mb-2">
																<label class="form-label text-sm" for="Invoice-Submissio-nDay">
																	Invoice Submission Day
																</label>
																<select id="Invoice-Submissio-nDay" class="form-select">
																	<option>4th</option>
																</select>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="remittance_release">
																	Remittance Release
																</label>
																<select id="remittance_release" class="form-select">
																	<option>14 Days</option>
																</select>
															</div>
														</div>
													</div>

													<div class="mx-4">
														<div class="mb-2">
															<div class="form-check">
																<input class="form-check-input" type="radio" name="Hrs" id="on-select-day-of-month" checked>
																<label class="form-check-label" for="on-select-day-of-month">
																	On select days of the month
																</label>
															  </div>
														</div>
														<div class="mx-4">
															<div class="mb-2">
																<label class="form-label text-sm" for="invoice-submissionday">
																	Invoice Submission Day
																</label>
																<select id="invoice-submissionday" class="form-select">
																	<option>4th</option>
																</select>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="invoice-submissionDay">
																	Invoice Submission Day
																</label>
																<div class="d-flex gap-1 align-items-center">
																	<select id="invoice-submissionDay" class="form-select">
																		<option>14th</option>
																	</select>
																	<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#blue-plus"></use>
                                                                    </svg>
																	<svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#blue-delete-icon"></use>
                                                                    </svg>						
																</div>
															</div>
															<div class="mb-2">
																<label class="form-label input-sm text-sm" for="remittance-release-days">
																	Remittance Release
																</label>
																<select id="remittance-release-days" class="form-select">
																	<option>14 Days</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												{{-- End: Contract Providers --}}
											</div>
										</div>
										{{-- End: Right Column --}}
									</div>
									<div class="between-section-segment-spacing">
									<div class="row">
										<div class="col-lg-12">
											<h3>Service Agreements / Terms of Service</h3>
											<div class="row">
												<div class="col-lg-6 mb-4">
													<label class="form-label" for="serviceAgreementsUpload">
														Upload File
													</label>
													<input class="form-control" type="file" id="serviceAgreementsUpload">
												</div>
												<div class="col-lg-6 mb-4">
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
												<label class="form-check-label" for="attachSendQuotes">Attach and Send with Quotes</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" id="acknowledgeInitialLogin" name="acknowledgeInitialLogin" type="checkbox" tabindex="" />
												<label class="form-check-label" for="acknowledgeInitialLogin">Require Customer to Acknowledge on Initial Login</label>
											</div>
										</div>
									</div>
									</div>
									<div class="between-section-segment-spacing">
									<div class="row">
										<div class="col-lg-12">
											<h3>Privacy Policy</h3>
											<div class="row">
												<div class="col-lg-6 mb-4">
													<label class="form-label" >
														Upload File
													</label>
													<input class="form-control" type="file" aria-label="Upload File" >
												</div>
												<div class="col-lg-6 mb-4">
													<label class="form-label" >
														URL Link
													</label>
													<input type="" name="" class="form-control" placeholder="Enter URL link" aria-label="Enter URL Link" >
												</div>
											</div>
										</div>
									</div>
									<div class="row mb-4">
										<div class="col-lg-12">
											<div class="form-check">
												<input class="form-check-input" id="add-to-customer-drive" name="customerDrive" type="checkbox" tabindex="" checked />
												<label class="form-check-label" for="add-to-customer-drive" >Add to Customer Drive</label>
											</div>
											<div class="form-check mx-4">
												<input class="form-check-input" id="acknowledge-Initial-Logincustomer-Drive" name="acknowledgeInitialLogincustomerDrive" type="checkbox" tabindex="" />
												<label class="form-check-label" for="acknowledge-Initial-Logincustomer-Drive">Require Customer to Acknowledge on Initial Login</label>
											</div>
											<div class="form-check">
												<input class="form-check-input" id="provider-Drive" name="providerDrive" type="checkbox" tabindex="" checked />
												<label class="form-check-label" for="provider-Drive">Add to Provider Drive</label>
											</div>
											<div class="form-check mx-4">
												<input class="form-check-input" id="acknowledge-Initial-Loginprovider-Drive" name="acknowledgeInitialLoginproviderDrive" type="checkbox" tabindex="" />
												<label class="form-check-label" for="acknowledge-Initial-Loginprovider-Drive">Require Customer to Acknowledge on Initial Login</label>
											</div>
										</div>
									</div>
									</div>
									<!-- Duplicate Block -->
									<div>
										<div class="row between-section-segment-spacing">
											<div class="col-lg-12 mb-4">
												<h3>Additional Policies</h3>
												<div class="duplicate-block mb-3">
													<h3 class="text-primary">Policy 1</h3>
													<div class="row">
														<div class="col-lg-6 mb-4">
															<label class="form-label" for="privacyPolicyTitle">
																Policy Title
															</label>
															<input type="" name="" class="form-control" placeholder="Enter Title" id="privacyPolicyTitle">
														</div>
													
														<div class="col-lg-6 mb-4">
															<label class="form-label" for="privacyPolicyUpload">
																Upload File
															</label>
															<input class="form-control" type="file" id="privacyPolicyUpload">
														</div>
														<div class="col-lg-6 mb-4">
															<label class="form-label" for="URL-Link">
																URL Link
															</label>
															<input type="" name="" class="form-control" placeholder="Enter URL link" id="URL-Link">
														</div>
													</div>
													<div class="col-lg-12">
														<div class="form-check">
															<input class="form-check-input" id="customerDrive" name="customerDrive" type="checkbox" tabindex="" checked />
															<label class="form-check-label" for="customerDrive">Add to Customer Drive</label>
														</div>
														<div class="form-check mx-4">
															<input class="form-check-input" id="acknowledgeInitialLogincustomerDrive" name="acknowledgeInitialLogincustomerDrive" type="checkbox" tabindex="" />
															<label class="form-check-label" for="acknowledgeInitialLogincustomerDrive">Require Customer to Acknowledge on Initial Login</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" id="providerDrive" name="providerDrive" type="checkbox" tabindex="" checked />
															<label class="form-check-label" for="providerDrive">Add to Provider Drive</label>
														</div>
														<div class="form-check mx-4">
															<input class="form-check-input" id="acknowledgeInitialLoginproviderDrive" name="acknowledgeInitialLoginproviderDrive" type="checkbox" tabindex="" />
															<label class="form-check-label" for="acknowledgeInitialLoginproviderDrive">Require Customer to Acknowledge on Initial Login</label>
														</div>
													</div>
											</div>
											<div class="row between-section-segment-spacing">
												<div class="col-lg-12 text-lg-end mt-2">
													<button type="button" class="btn btn-primary btn rounded"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Policy
													</button>
												</div>
											</div>
												<div class="row">
												   <h3>Request Feedback</h3>
													<div class="col-lg-12">
														<div class="form-check">
															<input class="form-check-input" id="customer-Drive" name="customerDrive" type="checkbox" tabindex="" />
															<label class="form-check-label" for="customer-Drive">Provider about consumer</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" id="acknowledge-Initial-Login-customer-Drive" name="acknowledgeInitialLogincustomerDrive" type="checkbox" tabindex="" />
															<label class="form-check-label" for="acknowledge-Initial-Login-customer-Drive">Provider about team providers</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" id="consumerDrive" name="providerDrive" type="checkbox" tabindex="" />
															<label class="form-check-label" for="consumerDrive">Consumer about provider</label>
														</div>
														<div class="form-check">
															<input class="form-check-input" id="Requesteraboutprovider" name="" type="checkbox" tabindex="" />
															<label class="form-check-label" for="Requesteraboutprovider">Requester about provider</label>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div><!-- /Duplicate Block -->
									<!-- Form Actions -->
									<div class="col-12 justify-content-center form-actions d-flex">
										<button type="button" class="btn btn-outline-dark rounded mx-2" x-on:click="$wire.switch('business-hours')">Cancel</button>
										<button type="submit" class="btn btn-primary rounded">Submit</button>
									</div><!-- /Form Actions -->
								</div>
							</div>
						</div>
					</div>

				  </div>
				</div>
				<!-- END: Steps -->
			  </div>
			</div>
		</div>
	</div>
</div>
