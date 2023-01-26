<div>
	<section id="multiple-column-form">
		<div class="row">
		  <div class="col-12">
			<div class="card">
			  <div class="card-body">
				<form class="form">
				  <div class="row">
					<div class="col-md-8 mb-md-2">
						  <h2>Customer Info</h2>
					  </div>
					
					  <div class="col-md-4 md-md-2">
						<div class="row">
						   <label class="form-label" for="company-column"> permissions from another user</label>

						  <div class="col-md-6 col-12">
							<select class="select2 form-select" id="copy-permissions-column">
							  <option>Select User</option>
							</select>

						</div>
						  <div class="col-md-6 col-12">
							<button  type="submit" class="btn btn-primary rounded">Cancel</button>


						</div>
						</div>
						  <!-- <label class="form-label" for="company-column">Copy permissions from another user</label>
						  <select class="select2 form-select" id="copy-permissions-column">
							<option>Select User</option>
							<button  type="submit" class="btn btn-primary rounded">Cancel</button>
						  </select> -->
						  
						
					  </div>
					  <div class="row">
						<div class="col-md-6 col-12">
						  <div class="mb-4">
							<label class="form-label" for="company-column">Company</label>
							<select class="select2 form-select" id="company-column">
							  <option>Select Companey</option>
							 
							</select>
						  </div>
						</div>
						<div class="col-md-6 col-12">
						  <div class="mb-4">
							<label class="form-label" for="industry-column">Industry</label>
							<select class="select2 form-select" id="industry-column">
							  <option>Select Industry</option>
							 
							</select>
						  </div>
						</div>
						<div class="col-md-6 col-12">
						  <div class="mb-4">
							<label class="form-label" for="role-column">Role</label>
							<select class="select2 form-select" id="role-column">
							  <option>Select Role</option>
							 
							</select>
						  </div>
						</div>
			
						<!-- ...row for a new line.... -->
						<div class="row">
						  <div class="col-md-6 col-12">
							<div>Is this a Service Comsumer?</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="services-customer" id="inlineRadio1" value="option1">
							  <label class="form-check-label" for="inlineRadio1">yes</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="services-customer" id="inlineRadio2" value="option2">
							  <label class="form-check-label" for="inlineRadio2">no</label>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="supervisor-column">Supervisor(s)</label>
							  <select class="select2 form-select" id="supervisor-column">
								<option>Select Supervisor(s)</option>
							   
							  </select>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div>Is this a Billing Manager?</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="billing-manager" id="inlineRadio1" value="option1">
							  <label class="form-check-label" for="inlineRadio1">yes</label>
							</div>
							<div class="form-check form-check-inline">
							  <input class="form-check-input" type="radio" name="billing-manager" id="inlineRadio2" value="option2">
							  <label class="form-check-label" for="inlineRadio2">no</label>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="manager-column">Billing Manager(s)</label>
							  <select class="select2 form-select" id="manager-column">
								<option>Select Billing Manager(s)</option>
							   
							  </select>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="first-name-column">First Name</label>
							  <input
								type="text"
								id="first-name-column"
								class="form-control"
								name="fname-column"
								placeholder="Enter First Name"
								/>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="last-name-column">Last Name</label>
							  <input
								type="text"
								id="last-name-column"
								class="form-control"
								placeholder="Enter Last Name"
								name="lname-column"
								/>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="gender-column">Gender</label>
							  <select class="select2 form-select" id="gender-column">
								<option>Male</option>
								<option>Female</option>
								<option>Others</option>
							  </select>
							</div>
						  </div>

						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="pronouns-column">Pronouns</label>
							  <input
								type="text"
								id="pronouns-column"
								class="form-control"
								placeholder="Enter Pronouns"
								name="pronouns"
								/>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="ethnicity-column">Ethnicity</label>
							 
								
							  <select class="select2 form-select" id="ethnicity-column">
								<option>Select Ethnicity</option>
							  </select>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="service-perferences-column">Service Preferences</label>
							 
								
							  <input
								type="email"
								id="service-perferences-column"
								class="form-control"
								name="service-perferences-column"
								placeholder="Enter Service Preferences"
								/>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="department-column">Department</label>
							 
								
							  <select class="select2 form-select" id="department-column">
								<option>Select Department</option>
							  </select>
							  <div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
								  Assign as Department Supervisor
								</label>
							  </div>                                </div>
							
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="position-column">Position</label>
							 
								
							  <input
								type="email"
								id="position-column"
								class="form-control"
								name="position-column"
								placeholder="Enter Position"
								/>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="phone">Phone Number</label>
							  <input
								type="text"
								id="phone"
								class="form-control"
								name="phone"
								placeholder="Enter Phone Number"
								/>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="email-id-column">Email</label>
							  <input
								type="email"
								id="email-id-column"
								class="form-control"
								name="email-id-column"
								placeholder="Enter Email"
								/>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <form>
								<label class="form-label" for="date">Service Start Date</label>
								<div class="input-group mb-3" id="datepicker">
								  <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
								  <span class="input-group-text" id="basic-addon2"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="white"/>
									</svg>
									</span>
								</div>
							  </form>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="set-time-zone">Set Time Zone</label>
							  <select class="select2 form-select" id="set-time-zone">
								<option>Select Time Zone</option>
							  </select>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="preferred-language">Preferred Language</label>
							  <select class="select2 form-select" id="preferred-language">
								<option>English</option>
							  </select>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="associatedTags">Associated Tags</label>
							  <input
								type="text"
								id="associatedTags"
								class="form-control"
								name="associatedTags"
								placeholder="Enter Associated Tags"
								/>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="admin-staff-access-column">Admin-Staff Access</label>
							  <input
								type="text"
								id="admin-staff-access-column"
								class="form-control"
								name="admin-staff-access-column"
								placeholder="Add Admins"
								/>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="provider-preference-column">Provider Preference</label>
							  <select class="select2 form-select" id="provider-preference-column">
								<option>Select Provider Preferences</option>
							  </select>
							</div>
						  </div>
						  <div class="col-md-6 col-12">
							<div class="mb-4">
							  <label class="form-label" for="disfavored-providers-column">Disfavored Providers</label>
							  <select class="select2 form-select" id="disfavored-providers-column">
								<option>Select Disfavored Providers</option>
							  </select>
							</div>
						  </div>
						 

						</div>
						<!-- ......  -->
					  <div class="row">
						<div class="col-md-6 col-12">
						  <div class="mb-4">
						  <div><h5>Default Billing Address</h5></div>
						  <div><button type="submit" class="btn btn-primary rounded">Add Address</button></div>
						</div>
						</div>
						<div class="col-md-6 col-12">
						  <div class="mb-4">
						  <div><h5>Default Service Address</h5></div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="same-billing-address">
							<label class="form-check-label" for="defaultCheck1">
							  Same as Billing Address
							</label>
							<button  type="submit" class="btn btn-primary rounded">Add Address</button>

						  </div> 
						  
						</div>
						</div>
						<div class="col-md-6 col-12">
						  <div class="mb-4">
						  <div>Grant Access to User(s)' Schedules?</div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="grant-access-user-schedules" id="inlineRadio1" value="option1">
							<label class="form-check-label" for="inlineRadio1">yes</label>
						  </div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="grant-access-user-schedules" id="inlineRadio2" value="option2">
							<label class="form-check-label" for="inlineRadio2">no</label>
						  </div>
						</div>
						</div>
						<div class="col-md-6 col-12">
						  <div class="mb-4">
							<label class="form-label" for="grant-access-column">Grant Access to User(s)' Schedules</label>
							<select class="select2 form-select" id="grant-access-column">
							  <option>Select</option>
							 
							</select>
						  </div>
						</div>
						<div class="col-md-6 col-12">
						  <div class="mb-4">

						  <div>Restrict Access to Invoices & Billing Details?</div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="restrict-access-invoices" id="inlineRadio1" value="option1">
							<label class="form-check-label" for="inlineRadio1">yes</label>
						  </div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="restrict-access-invoices" value="option2">
							<label class="form-check-label" for="inlineRadio2">no</label>
						  </div>
						</div>
						</div>
						<div class="col-md-6 col-12">
						  <div class="mb-4">

						  <div>Auto-approve Service Requests?</div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="auto-approve-service-requests" id="inlineRadio1" value="option1">
							<label class="form-check-label" for="inlineRadio1">yes</label>
						  </div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="auto-approve-service-requests" id="inlineRadio2" value="option2">
							<label class="form-check-label" for="inlineRadio2">no</label>
						  </div>
						</div>
						</div>
						<div class="col-md-6 col-12">
						  <div class="mb-4">

						  <div>Allow User to Submit Service Requests?</div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="allow-user-submit-service" id="inlineRadio1" value="option1">
							<label class="form-check-label" for="inlineRadio1">yes</label>
						  </div>
						  <div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="allow-user-submit-service" id="inlineRadio2" value="option2">
							<label class="form-check-label" for="inlineRadio2">no</label>
						  </div>
						</div>
						</div>
						<div class="d-flex justify-content-center col-12 form-actions">
							<div class="mx-auto">
								<button type="submit" class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">Cancel</button>
								<button type="submit" class="btn btn-primary rounded">Next</button>
							</div>
						</div>
					</div>
					</div>
				</form>
			  </div>
			</div>
			</div>
		</div>
	</section>
</div>
