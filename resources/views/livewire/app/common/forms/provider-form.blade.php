<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	{{-- BEGIN: Content --}}
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">Add Provider</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
									<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"/>
									</svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="javascript:void(0)">
									Providers
								</a>
							</li>
							<li class="breadcrumb-item">
								Add Provider
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
				{{-- BEGIN: Steps --}}
				<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'profile' }" id="tab_wrapper">
					{{-- Nav tabs --}}
					<ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a href="" class="nav-link" :class="{ 'active': tab === 'profile' }" @click.prevent="tab = 'profile'; window.location.hash = 'profile'" id="user-profile-tab" role="tab" aria-controls="user-profile" aria-selected="true"><span class="number">1</span> Provider info</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="" class="nav-link" :class="{ 'active': tab === 'provider-service' }" @click.prevent="tab = 'provider-service'; window.location.hash = 'provider-service'" id="provider-service-tab" role="tab" aria-controls="provider-service" aria-selected="false"><span class="number">2</span>Provider Serivce Profile</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="" class="nav-link" :class="{ 'active': tab === 'upload-document' }" @click.prevent="tab = 'upload-document'; window.location.hash = 'upload-document'" id="upload-document-tab" role="tab" aria-controls="upload-document" aria-selected="false"><span class="number">3</span> Upload Document</a>
						</li>
					</ul>
					{{-- Tab panes --}}
					<div class="tab-content">
						{{-- BEGIN: Profile --}}
						<div class="tab-pane fade" :class="{ 'active show': tab === 'profile' }" @click.prevent="tab = 'profile'; window.location.hash = 'profile'" id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab" tabindex="0" x-show="tab === 'profile'">
							{{-- Tab Panes --}}
							<div class="row mt-2 mb-5">
								{{-- BEGIN: Profile --}}
								<div class="col-12 text-center">
									<div class="d-inline-block position-relative">
										<img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle" alt="Profile Image of Admin Staff Team"/>
										<!-- <div>
											<input class="position-absolute form-control" type="file" />
										</div> -->
										<div class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
											<svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="28.5" cy="28.5" r="28" fill="#0A1E46" stroke="white"/>
												<path d="M42.9375 37.625C42.9375 38.172 42.7202 38.6966 42.3334 39.0834C41.9466 39.4702 41.422 39.6875 40.875 39.6875H16.125C15.578 39.6875 15.0534 39.4702 14.6666 39.0834C14.2798 38.6966 14.0625 38.172 14.0625 37.625V25.25C14.0625 24.703 14.2798 24.1784 14.6666 23.7916C15.0534 23.4048 15.578 23.1875 16.125 23.1875H18.5422C20.1824 23.1866 21.7551 22.5345 22.9147 21.3746L24.6266 19.6668C25.0123 19.281 25.5352 19.0637 26.0807 19.0625H30.9152C31.4622 19.0626 31.9867 19.28 32.3734 19.6668L34.0811 21.3746C34.6558 21.9494 35.3381 22.4054 36.0891 22.7165C36.84 23.0275 37.6449 23.1876 38.4578 23.1875H40.875C41.422 23.1875 41.9466 23.4048 42.3334 23.7916C42.7202 24.1784 42.9375 24.703 42.9375 25.25V37.625ZM16.125 21.125C15.031 21.125 13.9818 21.5596 13.2082 22.3332C12.4346 23.1068 12 24.156 12 25.25V37.625C12 38.719 12.4346 39.7682 13.2082 40.5418C13.9818 41.3154 15.031 41.75 16.125 41.75H40.875C41.969 41.75 43.0182 41.3154 43.7918 40.5418C44.5654 39.7682 45 38.719 45 37.625V25.25C45 24.156 44.5654 23.1068 43.7918 22.3332C43.0182 21.5596 41.969 21.125 40.875 21.125H38.4578C37.3638 21.1248 36.3148 20.69 35.5414 19.9164L33.8336 18.2086C33.0602 17.435 32.0112 17.0002 30.9172 17H26.0828C24.9888 17.0002 23.9398 17.435 23.1664 18.2086L21.4586 19.9164C20.6852 20.69 19.6362 21.1248 18.5422 21.125H16.125Z" fill="white"/>
												<path d="M28.5 35.5625C27.1325 35.5625 25.821 35.0193 24.854 34.0523C23.887 33.0853 23.3438 31.7738 23.3438 30.4063C23.3438 29.0387 23.887 27.7272 24.854 26.7602C25.821 25.7932 27.1325 25.25 28.5 25.25C29.8675 25.25 31.179 25.7932 32.146 26.7602C33.113 27.7272 33.6562 29.0387 33.6562 30.4063C33.6562 31.7738 33.113 33.0853 32.146 34.0523C31.179 35.0193 29.8675 35.5625 28.5 35.5625ZM28.5 37.625C30.4145 37.625 32.2506 36.8645 33.6044 35.5107C34.9582 34.1569 35.7188 32.3208 35.7188 30.4063C35.7188 28.4917 34.9582 26.6556 33.6044 25.3018C32.2506 23.948 30.4145 23.1875 28.5 23.1875C26.5855 23.1875 24.7494 23.948 23.3956 25.3018C22.0418 26.6556 21.2812 28.4917 21.2812 30.4063C21.2812 32.3208 22.0418 34.1569 23.3956 35.5107C24.7494 36.8645 26.5855 37.625 28.5 37.625ZM18.1875 26.2813C18.1875 26.5548 18.0789 26.8171 17.8855 27.0105C17.6921 27.2039 17.4298 27.3125 17.1562 27.3125C16.8827 27.3125 16.6204 27.2039 16.427 27.0105C16.2336 26.8171 16.125 26.5548 16.125 26.2813C16.125 26.0077 16.2336 25.7454 16.427 25.552C16.6204 25.3586 16.8827 25.25 17.1562 25.25C17.4298 25.25 17.6921 25.3586 17.8855 25.552C18.0789 25.7454 18.1875 26.0077 18.1875 26.2813Z" fill="white"/>
											</svg>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 mb-md-2">
									<h2>Provider Information</h2>
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="f-name">
													First Name <span class="mandatory" aria-hidden="true">*</span>
												</label>
												<input type="text" id="f-name" class="form-control" name="f-name" placeholder="Enter First Name" required aria-required="true"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="l-name">
													Last Name <span class="mandatory" aria-hidden="true">*</span>
												</label>
												<input type="text" id="l-name" class="form-control" name="l-name" placeholder="Enter Last Name" required aria-required="true"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="pronouns-column">Pronouns</label>
												<input type="text" id="pronouns-column" class="form-control" placeholder="Enter Pronouns" name="pronouns"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<form>
													<label class="form-label" for="date">Date of Birth</label>
													<div class="input-group mb-3" id="date">
														<input type="text" class="form-control" id="dob" placeholder="Select Date of Birth" aria-label="Recipient's username" aria-describedby="basic-addon2">
														<span class="input-group-text" id="basic-addon2">
															<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="white"/>
															</svg>
														</span>
													</div>
												</form>
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
												<label class="form-label" for="ethnicity-column">
													Ethnicity
												</label>
												<select class="select2 form-select" id="ethnicity-column">
													<option>Select Ethnicity</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="providerID-column">
													Provider ID
												</label>
												<input type="email" id="providerID-column" class="form-control" name="providerID-column" placeholder="Enter Provider ID"
												/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="provider-type-column">
													Provider Type
												</label>
												<select class="select2 form-select" id="provider-type-column">
													<option>Select Provider Type</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="email">
													Email <span class="mandatory" aria-hidden="true">*</span>
												</label>
												<input type="text" id="email" class="form-control" name="email" placeholder="Enter Email" required aria-required="true"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="phone">Phone Number</label>
												<input type="text" id="phone" class="form-control" name="phone" placeholder="Enter Phone Number"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="country">Country</label>
												<select class="select2 form-select" id="country">
													<option value="USA">USA</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="state">State/Province</label>
												<select class="select2 form-select" id="state">
													<option value="Al">Select State/Province</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="city">City</label>
												<input type="text" id="city" class="form-control" name="city" placeholder="Select City"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="zip-code">Zip Code</label>
												<input type="text" id="zip-code" class="form-control" name="zipCode" placeholder="Enter Zip Code"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="address-line-1">
													Address Line 1
												</label>
												<input type="text" id="address-line-1" class="form-control" name="address-line-1" placeholder="Enter Address Line 1"
												/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="address-line-2">
													Address Line 2
												</label>
												<input type="text" id="address-line-2" class="form-control" name="addressLine2" placeholder="Enter Address Line 2"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<form>
													<label class="form-label" for="start-date">
														Start Date
													</label>
													<div class="input-group mb-3" id="start-date">
														<input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
														<span class="input-group-text" id="basic-addon2">
															<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="white"/>
															</svg>
														</span>
													</div>
												</form>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<form>
													<label class="form-label" for="end-date">End Date</label>
													<div class="input-group mb-3" id="enddate">
														<input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
														<span class="input-group-text" id="basic-addon2">
															<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="white"/>
															</svg>
														</span>
													</div>
												</form>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<div class="d-flex justify-content-between">
													<div>
														<label class="form-label" for="education-column">
															Education
														</label>
													</div>
													<div>
														<svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z" fill="url(#paint0_linear_6804_147499)"/>
															<defs>
																<linearGradient id="paint0_linear_6804_147499" x1="10.5" y1="0" x2="18.9251" y2="0" gradientUnits="userSpaceOnUse">
																	<stop stop-color="#213969"/>
																	<stop offset="1" stop-color="#204387"/>
																</linearGradient>
															</defs>
														</svg>
														Upload Supporting Documents
													</div>
												</div>
												<input type="text" id="education-column" class="form-control" name="education-column" placeholder="Enter Education"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<div class="d-flex justify-content-between">
													<div>
														<label class="form-label" for="certification-column">
															Certification(s)
														</label>
													</div>
													<div>
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="#0A1E46"/>
														</svg>
														Add New
													</div>
													<div>
														<svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z" fill="url(#paint0_linear_6804_147518)"/>
															<defs>
																<linearGradient id="paint0_linear_6804_147518" x1="10.5" y1="0" x2="18.9251" y2="0" gradientUnits="userSpaceOnUse">
																	<stop stop-color="#213969"/>
																	<stop offset="1" stop-color="#204387"/>
																</linearGradient>
															</defs>
														</svg>
														Upload Supporting Documents
													</div>
												</div>
												<div>
													<select class="select2 form-select" id="certification-column">
														<option value="certification-column">Enter Certification(s)</option>
													</select>
												</div>
												<div class="mt-2">
													<input class="form-check-input" type="checkbox" value="display-provider" id="display-provider">
													<label class="form-check-label" for="display-provider">
														Display Provider as Certified
													</label>
												</div>
											</div>
										</div>
									</div>
									<!-- row for a new line -->
									<div class="row">
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<div class="d-flex justify-content-between">
													<div>
														<label class="form-label" for="experience-column">
															Experience
														</label>
													</div>
													<div>
														<svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z" fill="url(#paint0_linear_6804_147499)"/>
															<defs>
																<linearGradient id="paint0_linear_6804_147499" x1="10.5" y1="0" x2="18.9251" y2="0" gradientUnits="userSpaceOnUse">
																	<stop stop-color="#213969"/>
																	<stop offset="1" stop-color="#204387"/>
																</linearGradient>
															</defs>
														</svg>
														Upload Supporting Documents
													</div>
												</div>
												<textarea class="form-control" rows="3" cols="3" placeholder="" name="experienceColumn" id="experience-column"></textarea>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="notes-column">
													Notes
												</label>
												<textarea class="form-control" rows="3" placeholder="" name="notesColumn" id="notes-column"></textarea>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="preferred-language-column">
													Preferred Language
												</label>
												<select class="select2 form-select" id="preferred-language-column">
													<option value="preferred-language-column">
														Select Preferred Language
													</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="set-time-zone-column">
													Set Time Zone
												</label>
												<select class="select2 form-select" id="set-time-zone-column">
													<option value="set-time-zone-column">
														Select Time Zone
													</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="preferred-colleagues-column">
													Preferred Colleagues
												</label>
												<select class="select2 form-select" id="preferred-colleagues-column">
													<option value="preferred-colleagues-column">
														Select Preferred Colleagues
													</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="disfavored-colleagues-column">
													Disfavored Colleagues
												</label>
												<select class="select2 form-select" id="disfavored-colleagues-column">
													<option value="disfavored-colleagues-column">
														Select Disfavored Colleagues
													</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="provider-introduction">
													Provider Introduction
												</label>
												<textarea class="form-control" rows="3" cols="3" placeholder="" name="provider- introduction" id="provider-introduction"></textarea>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="provider-introduction-media">
													Provider Introduction Media
												</label>
												<input type="file" id="provider-introduction-media" class="form-control" name="companeyAdmins" placeholder="Add Admins"/>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="payment-settings">
													Payment Settings
												</label>
												<select class="select2 form-select" id="payment-settings">
													<option value="Al">Select Payment Settings</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="default-remittance-temp">
													Select Default Remittance Template
												</label>
												<select class="select2 form-select" id="default-remittance-temp">
													<option value="Al">
														Select Default Remittance Template
													</option>
												</select>
											</div>
										</div>
									</div>
									<!-- input fields end -->
								</div>
								<div class="col-md-12 col-12 mb-md-2">
									<div class="row">
										<div class="col-md-5 col-12">
											<div class="mb-4">
												<h2>Provider Schedule Configuration</h2>
											</div>
											<div class="row">
												<div class="col-6 mb-1">
													<div class="mb-4">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="exampleRadios" id="contract-rovider-radio-btn" value="option1" checked>
															<label class="form-check-label" for="contract-provider-radio-btn">
																Contract Provider
															</label>
															<svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
															</svg>
														</div>
													</div>
													<div class="mb-4">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="exampleRadios" id="staff-provider-radio-btn" value="option2">
															<label class="form-check-label" for="staff-provider-radio-btn">
																Staff Provider
															</label>
															<svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
															</svg>
														</div>
													</div>
													<div class="mb-4">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="exampleRadios" id="agency-provider-radio-btn" value="option3" disabled>
															<label class="form-check-label" for="agency-provider-radio-btn">
																Agency Provider (Coming Soon)
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- cancel/next (buttons) -->
									<div class="col-12 justify-content-center gap-2 d-flex mt-5">
										<a href="javascript:void(0);" class="btn btn-secondary rounded px-4" role="button" wire:click="showList">
											Cancel
										</a>
										<button type="submit" class="btn btn-primary rounded px-4">
											Next
										</button>
									</div>
									<!-- End: Profile Tab -->
									<!-- END: Steps -->
								</div>
							</div>
						</div>
						{{-- END: Profile --}}

						{{-- BEGIN: Provider Service --}}
						<div class="tab-pane fade" :class="{ 'active show': tab === 'provider-service' }" @click.prevent="tab = 'provider-service'; window.location.hash = 'provider-service'" id="provider-service" role="tabpanel" aria-labelledby="provider-service-tab" tabindex="0" x-show="tab === 'provider-service'">
							<!-- Basic multiple Column Form section start -->
							<section id="multiple-column-form">
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body">
												<form class="form">
													<div class="row">
														<div class="col-md-12 mb-md-2">
															<div class="col-md-12 mb-4">
																<h2>Provider Service Profile</h2>
															</div>
															<div class="col-md-12 col-12 md-2 mb-5 mt-4">
																<div class="col-lg-12 mb-3 ">
																	<label class="form-label" for="copy_provider">
																		Copy from Other Provide.
																	</label>
																</div>
																<div class="col-lg-12 d-lg-flex gap-3">
																	<select class="form-select w-auto" id="copy_provider">
																		<option>Select Provider</option>
																	</select>
																	<a href="" class="btn btn-primary rounded">Apply</a>
																</div>
															</div>
															<div class="row">
																<div class="col-12">
																	<label class="form-label" for="ApplyTo">
																		Accommodation
																	</label>
																</div>
																<div class="col-md-4 col-12">
																	<div class="mb-4">
																		<!-- <label>Select Accommodations <i class="fa fa-info-circle" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Select one or more accommodations for which this coupon may be redeemed."></i></label> -->
																		<select class="form-control chosen chosen-select" data-placeholder="Please Choose Accommodation" aria-label="Please Choose Accommodation" multiple="true" tabindex="" name="">
																			<option value="1">Requester</option>
																			<option value="2">Billing Manager</option>
																			<option value="3">Requester 2</option>
																			<option value="5">Billing Manager 2</option>
																			<option value="6">Requester 3</option>
																			<option value="8">Billing Manager 3</option>
																			<option value="9">Requester 3</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-12 col-12 mb-md-2">
															<div class="col-lg-12 d-flex col-12 gap-2 align-items-center mb-3 mt-1">
																<h3 class="mb-lg-0">Service</h3>
																<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z" fill="#888575" />
																</svg>
															</div>
														</div>
														<div class="col-md-12 col-12 mb-md-2">
															<div class="form-check mb-3">
																<input class="form-check-input" type="checkbox" value="check-service-duration" id="first-check-service-duration">
																<label class="form-check-label" for="first-check-service-duration">
																	Check service duration
																</label>
															</div>
														</div>
														<!-- Section one end -->
														<div class="col-md-12 col-12 md-2 mb-4">
															<div class="row">
																<div class="col-md-5 col-12 mb-3">Enable Billing and Payment Rate:</div>
																<div class="col-md-7 col-12 mb-3">Service Types</div>
															</div>
															<div class="row">
																<div class="col-md-5 d-flex col-12 mb-md-2 gap-3">
																	<div class="form-check mb-3">
																		<input class="form-check-input" type="radio" value="hourly/minute_rate" id="first-hourly/minute_rate">
																		<label class="form-check-label" for="first-hourly/minute_rate">
																			Hourly/Minute Rate
																		</label>
																	</div>
																	<div class="form-check mb-3">
																		<input class="form-check-input" type="radio" value="day_rate" id="first-day_rate">
																		<label class="form-check-label" for="first-day_rate">
																			Day Rate
																		</label>
																	</div>
																	<div class="form-check mb-3">
																		<input class="form-check-input" type="radio" value="fixed_rate" id="first-fixed_rate">
																		<label class="form-check-label" for="first-fixed_rate">
																			Fixed Rate
																		</label>
																	</div>
																</div>
																<div class="col-md-7 d-flex col-12 mb-md-2 gap-3">
																	<div class="form-check mb-3">
																		<input class="form-check-input" type="checkbox" value="in-person" id="first-in-person">
																		<label class="form-check-label" for="first-in-person">
																		In-Person
																		</label>
																	</div>
																	<div class="form-check mb-3">
																		<input class="form-check-input" type="checkbox" value="virtual" id="first-virtual">
																		<label class="form-check-label" for="first-virtual">
																			Virtual
																		</label>
																	</div>
																	<div class="form-check mb-3">
																		<input class="form-check-input" type="checkbox" value="phone" id="first-phone">
																		<label class="form-check-label" for="first-phone">
																			Phone
																		</label>
																	</div>
																	<div class="form-check mb-3">
																		<input class="form-check-input" type="checkbox" value="teleconferencing" id="first-teleconferencing">
																		<label class="form-check-label" for="first-teleconferencing">
																			Teleconferencing
																		</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-lg-12 mb-5">
															<div class="d-lg-flex align-items-center mb-4 gap-3">
																<h2>Standard Provider Rates</h2>
															</div>
															<div class="row">
																<div class="col-12">
																	<div class="border p-3">
																		<div class="row">
																			<div class="col-lg-6 pe-lg-5">
																				<div class="d-flex flex-column gap-5">
																					<!-- In-Person Billing Increment -->
																					<div>
																						<div class="text-primary fw-bold">
																							In-Person
																						</div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Business Hours
																								</span>
																								<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																								<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									After-Hours
																								</span>
																								<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																								<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																						</div>
																					</div>
																					<!-- /In-Person Billing Increment -->
																					<!-- Phone Billing Increment -->
																					<div>
																						<div class="text-primary fw-bold">
																							Phone
																						</div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Business Hours
																								</span>
																								<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																								<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									After-Hours
																								</span>
																								<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																								<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																						</div>
																					</div>
																					<!-- /Phone Billing Increment -->
																				</div>
																			</div>
																			<div class="col-lg-6 ps-lg-5 ">
																				<div class="d-flex flex-column gap-5">
																					<!-- Virtual Billing Increment -->
																					<div>
																						<div class="text-primary fw-bold">
																							Virtual
																						</div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Business Hours
																								</span>
																								<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																								<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									After-Hours
																								</span>
																								<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																								<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																						</div>
																					</div>
																					<!-- /Virtual Billing Increment -->
																					<!-- Teleconference Billing Increment -->
																					<div>
																						<div class="text-primary fw-bold">
																							Teleconference
																						</div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Business Hours
																								</span>
																								<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																								<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									After-Hours
																								</span>
																								<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																								<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																						</div>
																					</div>
																					<!-- /Teleconference Billing Increment -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- section two end -->
														<div class="col-lg-12 mb-5">
															<div class="d-lg-flex align-items-center mb-4 gap-3">
																<h2 class="mb-lg-0">Expedited Service Differentials</h2>
															</div>
															<div class="row">
																<div class="col-lg-12">
																	<div class="border p-3">
																		<div class="row">
																			<div class="col-lg-6 pe-lg-5">
																				<div class="text-primary fw-bold">
																					In-Person
																				</div>
																				<div class="d-flex flex-column gap-5">
																					<!-- In-Person Additional Service Charges -->
																					<div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Parameter 1 <small>(Hour)</small>
																								</span>
																								<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																								<div class="col-lg-2">
																									<select class="form-select rounded-0 aria" aria-label="$">
																										<option>$</option>
																									</select>
																								</div>
																								<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="inperson-checkbox" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="inperson-checkbox">
																									Multiply by Assignment Duration
																								</label>
																							</div>
																							<div class="text-end">
																								<a href="" class="fw-bold">
																									<small>
																										Add Additional Service Charges 
																										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																											<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																										</svg>
																									</small>
																								</a>
																							</div>
																						</div>
																					</div>
																					<!-- /In-Person Additional Service Charges -->
																				</div>
																			</div>
																			<div class="col-lg-6 pe-lg-5">
																				<div class="text-primary fw-bold">
																					Virtual
																				</div>
																				<div class="d-flex flex-column gap-5">
																					<!-- Virtual Additional Service Charges -->
																					<div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Parameter 1 <small>(Hour)</small>
																								</span>
																								<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																								<div class="col-lg-2">
																									<select class="form-select rounded-0" aria-label="$">
																										<option>$</option>
																									</select>
																								</div>
																								<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="virtual-checkbox" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="virtual-checkbox">Multiply by Assignment Duration</label>
																							</div>
																							<div class="text-end">
																								<a href="" class="fw-bold">
																									<small>
																										Add Additional Service Charges 
																										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																											<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																										</svg>
																									</small>
																								</a>
																							</div>
																						</div>
																					</div>
																					<!-- /Virtual Additional Service Charges -->
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-12 px-0">
																				<hr>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-lg-6 pe-lg-5">
																				<div class="text-primary fw-bold">
																					Phone
																				</div>
																				<div class="d-flex flex-column gap-5">
																					<!-- Phone Additional Service Charges -->
																					<div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Parameter 1 <small>(Hour)</small>
																								</span>
																								<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																								<div class="col-lg-2" >
																									<select class="form-select rounded-0" aria-label="$">
																										<option>$</option>
																									</select>
																								</div>
																								<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="phone-checkbox" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="phone-checkbox">Multiply by Assignment Duration</label>
																							</div>
																							<div class="text-end">
																								<a href="" class="fw-bold">
																									<small>
																										Add Additional Service Charges 
																										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																											<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																										</svg>
																									</small>
																								</a>
																							</div>
																						</div>
																					</div>
																					<!-- /Phone Additional Service Charges -->
																				</div>
																			</div>
																			<div class="col-lg-6 pe-lg-5">
																				<div class="text-primary fw-bold">
																					Teleconference
																				</div>
																				<div class="d-flex flex-column gap-5">
																					<!-- Teleconference Additional Service Charges -->
																					<div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Parameter 1 <small>(Hour)</small>
																								</span>
																								<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																								<div class="col-lg-2">
																									<select class="form-select rounded-0" aria-label="$">
																										<option>$</option>
																									</select>
																								</div>
																								<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="teleconference-checkbox" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="teleconference-checkbox">Multiply by Assignment Duration</label>
																							</div>
																							<div class="text-end">
																								<a href="" class="fw-bold">
																									<small>
																										Add Additional Service Charges 
																										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																											<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																										</svg>
																									</small>
																								</a>
																							</div>
																						</div>
																					</div>
																					<!-- /Teleconference Additional Service Charges -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- /Expedited Services -->
														<!-- Cancellations/Modifications/Rescheduling -->
														<div class="col-lg-12 mb-5">
															<div class="d-lg-flex align-items-center mb-4 gap-3">
																<h2 class="mb-lg-0">Cancellations/Modifications/Rescheduling</h2>
															</div>
															<div class="row">
																<div class="col-lg-12">
																	<div class="border p-3">
																		<div class="row">
																			<div class="col-lg-6 pe-lg-5">
																				<div class="text-primary fw-bold">
																					In-Person
																				</div>
																				<div class="d-flex flex-column gap-5">
																					<!-- In-Person Additional Service Charges -->
																					<div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Parameter 1
																								</span>
																								<input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
																								<div class="col-lg-2">
																									<select class="form-select rounded-0" aria-label="$">
																										<option>$</option>
																									</select>
																								</div>
																								<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="d-grid grid-cols-2 gap-1">
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Exclude After-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-multiply-by-duration" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-multiply-by-duration"> Multiply by Duration</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-closed-hours">Exclude Closed-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-pay-service-minimum" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-pay-service-minimum"> Pay Service Minimum</label>
																								</div>
																							</div>
																							<div class="text-end">
																								<a href="" class="fw-bold">
																									<small>
																										Add Additional Service Charges 
																										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																											<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																										</svg>
																									</small>
																								</a>
																							</div>
																						</div>
																					</div>
																					<!-- /In-Person Additional Service Charges -->
																				</div>
																			</div>
																			<div class="col-lg-6 pe-lg-5">
																				<div class="text-primary fw-bold">
																					Virtual
																				</div>
																				<div class="d-flex flex-column gap-5">
																					<!-- Virtual Additional Service Charges -->
																					<div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Parameter 1
																								</span>
																								<input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
																								<div class="col-lg-2">
																									<select class="form-select rounded-0" aria-label="$">
																										<option>$</option>
																									</select>
																								</div>
																								<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="d-grid grid-cols-2 gap-1">
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="2-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="2-exclude-after-hours">Exclude After-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="2-multiply-by-duration" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="2-multiply-by-duration"> Multiply by Duration</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="2-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="2-exclude-closed-hours">Exclude Closed-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="2-pay-service-minimum" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="2-pay-service-minimum"> Pay Service Minimum</label>
																								</div>
																							</div>
																							<div class="text-end">
																								<a href="" class="fw-bold">
																									<small>
																										Add Additional Service Charges 
																										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																											<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																										</svg>
																									</small>
																								</a>
																							</div>
																						</div>
																					</div>
																					<!-- /Virtual Additional Service Charges -->
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-12 px-0">
																				<hr>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-lg-6 pe-lg-5">
																				<div class="text-primary fw-bold">
																					Phone
																				</div>
																				<div class="d-flex flex-column gap-5">
																					<!-- Phone Additional Service Charges -->
																					<div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Parameter 1 
																								</span>
																								<input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
																								<div class="col-lg-2">
																									<select class="form-select rounded-0" aria-label="$">
																										<option>$</option>
																									</select>
																								</div>
																								<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="d-grid grid-cols-2 gap-1">
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="3-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="3-exclude-after-hours">Exclude After-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="3-multiply-by-duration" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="3-multiply-by-duration"> Multiply by Duration</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="3-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="3-exclude-closed-hours">Exclude Closed-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="3-pay-service-minimum" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="3-pay-service-minimum"> Pay Service Minimum</label>
																								</div>
																							</div>
																							<div class="text-end">
																								<a href="" class="fw-bold">
																									<small>
																										Add Additional Service Charges 
																										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																											<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																										</svg>
																									</small>
																								</a>
																							</div>
																						</div>
																					</div>
																					<!-- /Phone Additional Service Charges -->
																				</div>
																			</div>
																			<div class="col-lg-6 pe-lg-5">
																				<div class="text-primary fw-bold">
																					Teleconference
																				</div>
																				<div class="d-flex flex-column gap-5">
																					<!-- Teleconference Additional Service Charges -->
																					<div>
																						<div class="d-flex flex-column gap-3">
																							<div class="input-group">
																								<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																									Parameter 1
																								</span>
																								<input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
																								<div class="col-lg-2">
																									<select class="form-select rounded-0" aria-label="$">
																										<option>$</option>
																									</select>
																								</div>
																								<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																							</div>
																							<div class="d-grid grid-cols-2 gap-1">
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="4-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="4-exclude-after-hours">Exclude After-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="4-multiply-by-duration" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="4-multiply-by-duration"> Multiply by Duration</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="4-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="4-exclude-closed-hours">Exclude Closed-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="4-pay-service-minimum" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="4-pay-service-minimum"> Pay Service Minimum</label>
																								</div>
																							</div>
																							<div class="text-end">
																								<a href="" class="fw-bold">
																									<small>
																										Add Additional Service Charges 
																										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																											<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																										</svg>
																									</small>
																								</a>
																							</div>
																						</div>
																					</div>
																					<!-- /Teleconference Additional Service Charges -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- /End: Cancellations/Modifications/Rescheduling -->
														<div class="col-lg-12 mb-5">
															<div class="d-lg-flex align-items-center mb-4 gap-3">
																<h2 class="mb-lg-0">Cancellations/Modifications/Rescheduling</h2>
															</div>
															<div class="row">
																<div class="col-lg-12">
																	<div class="border p-3">
																		<div class="d-flex flex-column gap-3">
																			<div class="d-lg-flex gap-4">
																				<div class="align-self-end d-flex align-items-center gap-2 col-lg-5">
																					<div class="align-items-center">
																						<input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Checkbox Medical Interpreting" />
																					</div>
																					<div class="input-group">
																						<select class="form-select bg-secondary w-75" aria-label="Medical Interpreting">
																							<option>Medical Interpreting</option>
																						</select>
																						<select class="form-select" aria-label="$">
																							<option>$</option>
																						</select>
																					</div>
																				</div>
																				<div class="align-self-end">
																					<div class="text-primary fw-bold">In-Person</div>
																					<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																				</div>
																				<div class="align-self-end">
																					<div class="text-primary fw-bold">Virtual</div>
																					<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																				</div>
																				<div class="align-self-end">
																					<div class="text-primary fw-bold">Phone</div>
																					<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																				</div>
																				<div class="align-self-end">
																					<div class="text-primary fw-bold">Teleconference</div>
																					<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																				</div>
																			</div>
																			<div class="">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" id="multiply-by-assignment-duration" name="" type="checkbox" tabindex="" />
																					<label class="form-check-label" for="multiply-by-assignment-duration">Multiply by Assignment Duration</label>
																				</div>
																			</div>
																			<div class="text-end">
																				<a href="" class="fw-bold">
																					<small>
																						Add Additional Specialization 
																						<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																						</svg>
																					</small>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- /End : Cancellations/Modifications/Rescheduling -->
														<div class="col-md-12 col-12 mb-md-2">
															<div class="form-check mb-3">
																<input class="form-check-input" type="checkbox" value="copy-of-check-service-duration" id="copy-of-check-service-duration">
																<label class="form-check-label" for="copy-of-check-service-duration">
																	Copy of Check service duration
																</label>
															</div>
															<div class="form-check mb-3">
																<input class="form-check-input" type="checkbox" aria-label="Check Service Duration" value="check-service-duration" id="1-check-service-duration">
																<label class="form-check-label" for="1-check-service-duration">
																	Hide from customer service
																</label>
															</div>
															<div class="form-check mb-3">
																<input class="form-check-input" type="checkbox" value="check-service-duration" id="language-interpreting">
																<label class="form-check-label" for="language-interpreting">
																	Language interpreting
																</label>
															</div>
														</div>
													</div>
													<!-- section five end -->
													<!-- section six end -->
													<!-- section seven end -->
													<!-- section eight end -->
													<!-- section nine end -->
													<!-- section ten end -->
													<!-- section eleven end -->
													<!-- section twelve end -->
													<!-- section thirteen end -->
													<!-- main row -->
													<div class="col-md-12 col-12 md-2 mb-4">
														<div class="row">
															<div class="col-md-5 col-12 mb-3">Enable Billing and Payment Rate:</div>
															<div class="col-md-7 col-12 mb-3">Service Types</div>
														</div>
														<div class="row">
															<div class="col-md-5 d-flex col-12 mb-md-2 gap-3">
																<div class="form-check mb-3">
																	<input class="form-check-input" type="radio" value="hourly/minute_rate" id="hourly/minute_rate">
																	<label class="form-check-label" for="hourly/minute_rate">
																		Hourly/Minute Rate
																	</label>
																</div>
																<div class="form-check mb-3">
																	<input class="form-check-input" type="radio" value="day_rate" id="day_rate">
																	<label class="form-check-label" for="day_rate">
																		Day Rate
																	</label>
																</div>
																<div class="form-check mb-3">
																	<input class="form-check-input" type="radio" value="fixed_rate" aria-label="" id="fixed_rate">
																	<label class="form-check-label" for="fixed_rate">
																		Fixed Rate
																	</label>
																</div>
															</div>
															<div class="col-md-7 d-flex col-12 mb-md-2 gap-3">
																<div class="form-check mb-3">
																	<input class="form-check-input" type="checkbox" value="in-person" id="in-person">
																	<label class="form-check-label" for="in-person">
																		In-Person
																	</label>
																</div>
																<div class="form-check mb-3">
																	<input class="form-check-input" type="checkbox" value="virtual" id="virtual">
																	<label class="form-check-label" for="virtual">
																		Virtual
																	</label>
																</div>
																<div class="form-check mb-3">
																	<input class="form-check-input" type="checkbox" value="phone" id="1-phone">
																	<label class="form-check-label" for="1-phone">
																		Phone
																	</label>
																</div>
																<div class="form-check mb-3">
																	<input class="form-check-input" type="checkbox" value="teleconferencing" id="teleconferencing">
																	<label class="form-check-label" for="teleconferencing">
																		Teleconferencing
																	</label>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-12 mb-5">
														<div class="d-lg-flex align-items-center mb-4 gap-3">
															<h2>Standard Provider Rates</h2>
														</div>
														<div class="row">
															<div class="col-12">
																<div class="border p-3">
																	<div class="row">
																		<div class="col-lg-6 pe-lg-5">
																			<div class="d-flex flex-column gap-5">
																				<!-- In-Person Billing Increment -->
																				<div>
																					<div class="text-primary fw-bold">
																						In-Person
																					</div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Business Hours
																							</span>
																							<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																							<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								After-Hours
																							</span>
																							<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																							<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																					</div>
																				</div>
																				<!-- /In-Person Billing Increment -->
																				<!-- Phone Billing Increment -->
																				<div>
																					<div class="text-primary fw-bold">
																						Phone
																					</div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Business Hours
																							</span>
																							<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																							<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								After-Hours
																							</span>
																							<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																							<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																					</div>
																				</div>
																				<!-- /Phone Billing Increment -->
																			</div>
																		</div>
																		<div class="col-lg-6 ps-lg-5">
																			<div class="d-flex flex-column gap-5">
																				<!-- Virtual Billing Increment -->
																				<div>
																					<div class="text-primary fw-bold">
																						Virtual
																					</div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Business Hours
																							</span>
																							<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																							<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								After-Hours
																							</span>
																							<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																							<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																					</div>
																				</div><!-- /Virtual Billing Increment -->
																				<!-- Teleconference Billing Increment -->
																				<div>
																					<div class="text-primary fw-bold">
																						Teleconference
																					</div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Business Hours
																							</span>
																							<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																							<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								After-Hours
																							</span>
																							<input type="text" class="form-control rounded-0 text-center" placeholder="$" aria-label="" aria-describedby="">
																							<input type="text" class="form-control rounded-0 text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																					</div>
																				</div>
																				<!-- /Teleconference Billing Increment -->
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- section two end -->
													<div class="col-lg-12 mb-5">
														<div class="d-lg-flex align-items-center mb-4 gap-3">
															<h2 class="mb-lg-0">Expedited Service Differentials</h2>
														</div>
														<div class="row">
															<div class="col-lg-12">
																<div class="border p-3">
																	<div class="row">
																		<div class="col-lg-6 pe-lg-5">
																			<div class="text-primary fw-bold">
																				In-Person
																			</div>
																			<div class="d-flex flex-column gap-5">
																				<!-- In-Person Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1 <small>(Hour)</small>
																							</span>
																							<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="form-check form-check-inline">
																							<input class="form-check-input" id="in-person-checkbox" name="" type="checkbox" tabindex="" />
																							<label class="form-check-label" for="in-person-checkbox">Multiply by Assignment Duration</label>
																						</div>
																						<div class="text-end">
																							<a href="" class="fw-bold">
																								<small>
																									Add Additional Service Charges 
																									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																									</svg>
																								</small>
																							</a>
																						</div>
																					</div>
																				</div>
																				<!-- /In-Person Additional Service Charges -->
																			</div>
																		</div>
																		<div class="col-lg-6 pe-lg-5">
																			<div class="text-primary fw-bold">
																				Virtual
																			</div>
																			<div class="d-flex flex-column gap-5">
																				<!-- Virtual Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1 <small>(Hour)</small>
																							</span>
																							<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="form-check form-check-inline">
																							<input class="form-check-input" id="virtual-checkbox-2" name="" type="checkbox" tabindex="" />
																							<label class="form-check-label" for="virtual-checkbox-2">Multiply by Assignment Duration</label>
																						</div>
																						<div class="text-end">
																							<a href="" class="fw-bold">
																								<small>
																									Add Additional Service Charges 
																									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																									</svg>
																								</small>
																							</a>
																						</div>
																					</div>
																				</div>
																				<!-- /Virtual Additional Service Charges -->
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-12 px-0">
																			<hr>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-6 pe-lg-5">
																			<div class="text-primary fw-bold">
																				Phone
																			</div>
																			<div class="d-flex flex-column gap-5">
																				<!-- Phone Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1 <small>(Hour)</small>
																							</span>
																							<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="form-check form-check-inline">
																							<input class="form-check-input" id="phone-checkbox-2" name="" type="checkbox" tabindex="" />
																							<label class="form-check-label" for="phone-checkbox-2">Multiply by Assignment Duration</label>
																						</div>
																						<div class="text-end">
																							<a href="" class="fw-bold">
																								<small>
																									Add Additional Service Charges 
																									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																									</svg>
																								</small>
																							</a>
																						</div>
																					</div>
																				</div>
																				<!-- /Phone Additional Service Charges -->
																			</div>
																		</div>
																		<div class="col-lg-6 pe-lg-5">
																			<div class="text-primary fw-bold">
																				Teleconference
																			</div>
																			<div class="d-flex flex-column gap-5">
																				<!-- Teleconference Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1 <small>(Hour)</small>
																							</span>
																							<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="form-check form-check-inline">
																							<input class="form-check-input" id="teleconference-checkbox-2" name="" type="checkbox" tabindex="" />
																							<label class="form-check-label" for="teleconference-checkbox-2">Multiply by Assignment Duration</label>
																						</div>
																						<div class="text-end">
																							<a href="" class="fw-bold">
																								<small>
																									Add Additional Service Charges 
																									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																									</svg>
																								</small>
																							</a>
																						</div>
																					</div>
																				</div>
																				<!-- /Teleconference Additional Service Charges -->
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /Expedited Services -->
													<!-- Cancellations/Modifications/Rescheduling -->
													<div class="col-lg-12 mb-5">
														<div class="d-lg-flex align-items-center mb-4 gap-3">
															<h2 class="mb-lg-0">Cancellations/Modifications/Rescheduling</h2>
														</div>
														<div class="row">
															<div class="col-lg-12">
																<div class="border p-3">
																	<div class="row">
																		<div class="col-lg-6 pe-lg-5">
																			<div class="text-primary fw-bold">
																				In-Person
																			</div>
																			<div class="d-flex flex-column gap-5">
																				<!-- In-Person Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1
																							</span>
																							<input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="d-grid grid-cols-2 gap-1">
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-after-hours-1" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="exclude-after-hours-1">Exclude After-hours</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="multiply-by-duration-1" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="multiply-by-duration-1"> Multiply by Duration</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-closed-hours-1" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="exclude-closed-hours-1">Exclude Closed-hours</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="pay-service-minimum-1" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="pay-service-minimum-1"> Pay Service Minimum</label>
																							</div>
																						</div>
																						<div class="text-end">
																							<a href="" class="fw-bold">
																								<small>
																									Add Additional Service Charges 
																									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																									</svg>
																								</small>
																							</a>
																						</div>
																					</div>
																				</div>
																				<!-- /In-Person Additional Service Charges -->
																			</div>
																		</div>
																		<div class="col-lg-6 pe-lg-5">
																			<div class="text-primary fw-bold">
																				Virtual
																			</div>
																			<div class="d-flex flex-column gap-5">
																				<!-- Virtual Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1
																							</span>
																							<input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="d-grid grid-cols-2 gap-1">
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-after-hours-2" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="exclude-after-hours-2">Exclude After-hours</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="multiply-by-duration-2" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="multiply-by-duration-2"> Multiply by Duration</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-closed-hours-2" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="exclude-closed-hours-2">Exclude Closed-hours</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="pay-service-minimum-2" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="pay-service-minimum-2"> Pay Service Minimum</label>
																							</div>
																						</div>
																						<div class="text-end">
																							<a href="" class="fw-bold">
																								<small>
																									Add Additional Service Charges 
																									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																									</svg>
																								</small>
																							</a>
																						</div>
																					</div>
																				</div>
																				<!-- /Virtual Additional Service Charges -->
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-12 px-0">
																			<hr>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-6 pe-lg-5">
																			<div class="text-primary fw-bold">
																				Phone
																			</div>
																			<div class="d-flex flex-column gap-5">
																				<!-- Phone Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1 
																							</span>
																							<input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="d-grid grid-cols-2 gap-1">
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-after-hours-3" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="exclude-after-hours-3">Exclude After-hours</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="multiply-by-duration-3" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="multiply-by-duration-3"> Multiply by Duration</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-closed-hours-3" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="exclude-closed-hours-3">Exclude Closed-hours</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="pay-service-minimum-3" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="pay-service-minimum-3"> Pay Service Minimum</label>
																							</div>
																						</div>
																						<div class="text-end">
																							<a href="" class="fw-bold">
																								<small>
																									Add Additional Service Charges 
																									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																									</svg>
																								</small>
																							</a>
																						</div>
																					</div>
																				</div>
																				<!-- /Phone Additional Service Charges -->
																			</div>
																		</div>
																		<div class="col-lg-6 pe-lg-5">
																			<div class="text-primary fw-bold">
																				Teleconference
																			</div>
																			<div class="d-flex flex-column gap-5">
																				<!-- Teleconference Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1
																							</span>
																							<input type="text" class="form-control text-center" placeholder="00 Hour" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="d-grid grid-cols-2 gap-1">
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-after-hours-4" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="exclude-after-hours-4">Exclude After-hours</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="multiply-by-duration-4" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="multiply-by-duration-4"> Multiply by Duration</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-closed-hours-4" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="exclude-closed-hours-4">Exclude Closed-hours</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="pay-service-minimum-4" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="pay-service-minimum-4"> Pay Service Minimum</label>
																							</div>
																						</div>
																						<div class="text-end">
																							<a href="" class="fw-bold">
																								<small>
																									Add Additional Service Charges 
																									<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																										<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																									</svg>
																								</small>
																							</a>
																						</div>
																					</div>
																				</div>
																				<!-- /Teleconference Additional Service Charges -->
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /End: Cancellations/Modifications/Rescheduling -->
													<div class="col-lg-12 mb-5">
														<div class="d-lg-flex align-items-center mb-4 gap-3">
															<h2 class="mb-lg-0">Cancellations/Modifications/Rescheduling</h2>
														</div>
														<div class="row">
															<div class="col-lg-12">
																<div class="border p-3">
																	<div class="d-flex flex-column gap-3">
																		<div class="d-lg-flex gap-4">
																			<div class="align-self-end d-flex align-items-center gap-2 col-lg-5">
																				<div class="align-items-center">
																					<input class="form-check-input" aria-label="Checkbox Medical Interpreting" type="checkbox" tabindex="" />
																				</div>
																				<div class="input-group">
																					<select class="form-select bg-secondary w-75" aria-label="Medical Interpreting">
																						<option>Medical Interpreting</option>
																					</select>
																					<select class="form-select" aria-label="$">
																						<option>$</option>
																					</select>
																				</div>
																			</div>
																			<div class="align-self-end">
																				<div class="text-primary fw-bold">In-Person</div>
																				<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																			</div>
																			<div class="align-self-end">
																				<div class="text-primary fw-bold">Virtual</div>
																				<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																			</div>
																			<div class="align-self-end">
																				<div class="text-primary fw-bold">Phone</div>
																				<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																			</div>
																			<div class="align-self-end">
																				<div class="text-primary fw-bold">Teleconference</div>
																				<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																			</div>
																		</div>
																		<div class="">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" id="multiply-by-assignment-duration-1" name="" type="checkbox" tabindex="" />
																				<label class="form-check-label" for="multiply-by-assignment-duration-1">Multiply by Assignment Duration</label>
																			</div>
																		</div>
																		<div class="text-end">
																			<a href="" class="fw-bold">
																				<small>
																					Add Additional Specialization 
																					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																					</svg>
																				</small>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /End : Cancellations/Modifications/Rescheduling -->
													<div class="form-check mb-3">
														<input class="form-check-input" type="checkbox" value="check-service-duration" id="3-check-service-duration">
														<label class="form-check-label" for="3-check-service-duration">
															New service capacity and capabilities
														</label>
													</div>
													<!-- cancel/next (buttons) -->
													<div class="col-12 justify-content-center gap-2 d-flex mt-5 mb-5">
														<a href="javascript:void(0);" class="btn btn-secondary rounded px-4" role="button">
															Back
														</a>
														<button type="submit" class="btn btn-primary rounded px-4">
															Next
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- Basic Floating Label Form section end -->
						</div>
						{{-- END: Provider Service --}}

						{{-- BEGIN: Upload Document --}}
						<div class="tab-pane fade" :class="{ 'active show': tab === 'upload-document' }" @click.prevent="tab = 'upload-document'; window.location.hash = 'provider-serivce'" id="upload-document" role="tabpanel" aria-labelledby="upload-document-tab" tabindex="0" x-show="tab === 'upload-document'">
							<!-- Basic multiple Column Form section start -->
							<section id="multiple-column-form">
								<div class="row">
									<div class="col-12">
										<div class="card">
											<div class="card-body">
												<form class="form">
													<div class="row">
														<div class="col-md-10 mb-md-2">
															<div class="col-md-12 mt-4">
																<h2>Attach Document</h2>
															</div>
															<div class="row">
																<div class="col-md-12 col-12 md-2 mb-4 mt-5">
																	<div class="row">
																		<div class="col-lg-5 mb-4 ">
																			<h3 class="mb-0">Document 1</h3>
																		</div>
																		<div class="col-lg-7 d-lg-flex justify-content-end gap-3 mb-4">
																			<a href="" class="btn btn-primary rounded">
																				<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M2 10.4062L8.66667 17.4062L22 2.40625" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																				</svg>
																				Add Manually
																			</a>
																			<a href="" class="btn btn-primary rounded">
																				Request from User
																			</a>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-12 md-2 mb-3">
																	<div class="row">
																		<div class="col-md-6 col-12">
																			<label class="form-label" for="ApplyTo">
																				Document Title
																			</label>
																			<input type="text" id="Apply-To" class="form-control" name="ApplyTo" placeholder="Enter Document Title" />
																		</div>
																		<div class="col-md-6 col-12">
																			<label class="form-label for="document-type">
																				Document Type
																			</label>
																			<select class="form-select" id="document-type">
																				<option>Select Document Type</option>
																			</select>
																		</div>
																	</div>
																</div>
																<div class="col-md-12 col-12 md-2 mb-4">
																	<input class="form-check-input" type="checkbox" value="no-expiration" id="no-expiration">
																	<label class="form-check-label" for="no-expiration">
																		No Expiration
																	</label>
																</div>
																<div class="col-md-6 col-12 mb-4">
																	<form>
																		<label class="form-label" for="date">
																			Expiration Date
																		</label>
																		<div class="input-group mb-3" id="date">
																			<input type="text" class="form-control" placeholder="Select Expiration Date" aria-label="Recipient's username" aria-describedby="basic-addon2">
																			<span class="input-group-text" id="basic-addon2">
																				<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="white"/>
																				</svg>
																			</span>
																		</div>
																	</form>
																</div>
																<div class="col-md-6 col-12 mb-4">
																	<label for="formFile" class="form-label">
																		Upload File
																	</label>
																	<input class="form-control" type="file" id="formFile">
																</div>
																<div class="col-md-6 col-12 mb-4">
																	<label class="form-label" for="notes-column">
																		Note
																	</label>
																	<textarea class="form-control" rows="4" placeholder="" name="notesColumn" id="notes-column"></textarea>
																</div>
																<div class="col-md-6 col-12 mb-4">
																	<label class="form-label" for="tags-column">
																		Tags
																	</label>
																	<textarea class="form-control" rows="4" placeholder="" name="tagsColumn" id="tags-column"></textarea>
																</div>
																<!-- main row -->
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-10 mb-md-2">
															<div id="elements" class="elements">
																<!-- duplicate addDocument form from jquery  -->
															</div>
															<div class="col-md-12 d-flex justify-content-end col-12 md-2 mb-4">
																<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" id="add-todo-item">
																	<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
																	</svg>
																	<span>Add Document</span>
																</button>
															</div>
															<div class="col-md-12 col-12 md-2 mb-4 gap-2">
																<input class="form-check-input" type="checkbox" value="send-invitation-email-to-provider" id="send-invitation-email-to-provider">
																<label class="form-check-label" for="send-invitation-email-to-provider">
																	Send Invitation Email to Provider
																</label>
															</div>
															<!-- main row -->
														</div>
													</div>
													<div class="row">
														<div class="col-10 justify-content-center gap-2 d-flex mb-5">
															<a href="javascript:void(0);" class="btn btn-secondary rounded px-4" role="button">
																Back
															</a>
															<button type="submit" class="btn btn-primary rounded px-4">
																Next
															</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</section>
							<!-- Basic Floating Label Form section end -->
						</div>
						{{-- END: Upload Document --}}
					</div>
				</div>
			</div>
			<!-- End: Content-->	
		</div>
	</div>
</div>