<div x-data="{addDocument: false}">
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
								<x-icon name="home"/>
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
				<div x-data="{ tab: @entangle('component') }" id="tab_wrapper">
					{{-- Nav tabs --}}
					<ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'profile' }" @click.prevent="tab = 'profile'" id="user-profile-tab" role="tab" aria-controls="user-profile" aria-selected="true"><span class="number">1</span> Provider info</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'provider-service' }" @click.prevent="tab = 'provider-service'" id="provider-service-tab" role="tab" aria-controls="provider-service" aria-selected="false"><span class="number">2</span>Provider Serivce Profile</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'upload-document' }" @click.prevent="tab = 'upload-document'" id="upload-document-tab" role="tab" aria-controls="upload-document" aria-selected="false"><span class="number">3</span> Upload Document</a>
						</li>
					</ul>
					{{-- Tab panes --}}
					<div class="tab-content">
						{{-- BEGIN: Profile --}}
						<div class="tab-pane fade" :class="{ 'active show': tab === 'profile' }"  id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab" tabindex="0" x-show="tab === 'profile'">
							{{-- Tab Panes --}}
							<div class="row mt-2 mb-5">
								{{-- BEGIN: Profile --}}
								<div class="col-12 text-center">
									<div class="d-inline-block position-relative">
										<img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle" alt="Provider Profile Image"/>
										{{-- <div>
											<input class="position-absolute form-control" type="file" />
										</div> --}}
										<div class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
											<svg aria-label="Upload Picture" width="57" height="57" viewBox="0 0 57 57" fill="none"
                                              xmlns="http://www.w3.org/2000/svg">
                                              <use xlink:href="/css/provider.svg#camera"></use>
                                            </svg>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 mb-4">
									<h2>Provider Information</h2>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="f-name">
										First Name
										<span class="mandatory" aria-hidden="true">
											*
										</span>
									</label>
									<input type="text" id="f-name" class="form-control" name="f-name" placeholder="Enter First Name" required aria-required="true"/>
								</div>
								<div class="col-lg-6 mb-4 ps-lg-5">
									<label class="form-label" for="l-name">
										Last Name
										<span class="mandatory" aria-hidden="true">
											*
										</span>
									</label>
									<input type="text" id="l-name" class="form-control" name="l-name" placeholder="Enter Last Name" required aria-required="true"/>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="pronouns-column">
										Pronouns
									</label>
									<input type="text" id="pronouns-column" class="form-control" placeholder="Enter Pronouns" name="pronouns"/>
								</div>
								<div class="col-lg-6 ps-lg-5 mb-4">
									<label class="form-label" for="">
										Date of Birth
									</label>
									<div class="d-flex align-items-center w-100">
										<div class="position-relative flex-grow-1">
											<input type="text" class="form-control js-single-date" placeholder="Select Date of Birth" aria-label="" aria-describedby="">
											<svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
											</svg>
										</div>
										<button type="button" class="btn px-2">
											<svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M12 0C6.54545 0 1.88727 3.52467 0 8.5C1.88727 13.4753 6.54545 17 12 17C17.4545 17 22.1127 13.4753 24 8.5C22.1127 3.52467 17.4545 0 12 0ZM12 14.1667C8.98909 14.1667 6.54545 11.628 6.54545 8.5C6.54545 5.372 8.98909 2.83333 12 2.83333C15.0109 2.83333 17.4545 5.372 17.4545 8.5C17.4545 11.628 15.0109 14.1667 12 14.1667ZM12 5.1C10.1891 5.1 8.72727 6.61867 8.72727 8.5C8.72727 10.3813 10.1891 11.9 12 11.9C13.8109 11.9 15.2727 10.3813 15.2727 8.5C15.2727 6.61867 13.8109 5.1 12 5.1Z" fill="black"/>
											</svg>
										</button>
									</div>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<div class="d-flex justify-content-between align-items-center mb-1">
										<label class="form-label mb-lg-0" for="gender-column">
											Gender
										</label>
										<a href="#" class="fw-bold">
											<small>
												<svg class="me-1" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.203125C4.47727 0.203125 0 4.6804 0 10.2031C0 15.7259 4.47727 20.2031 10 20.2031C15.5227 20.2031 20 15.7259 20 10.2031C20 4.6804 15.5227 0.203125 10 0.203125ZM10.9091 13.8395C10.9091 14.0806 10.8133 14.3118 10.6428 14.4823C10.4723 14.6528 10.2411 14.7486 10 14.7486C9.75889 14.7486 9.52766 14.6528 9.35718 14.4823C9.18669 14.3118 9.09091 14.0806 9.09091 13.8395V11.1122H6.36364C6.12253 11.1122 5.8913 11.0164 5.72081 10.8459C5.55032 10.6755 5.45455 10.4442 5.45455 10.2031C5.45455 9.96202 5.55032 9.73079 5.72081 9.5603C5.8913 9.38981 6.12253 9.29403 6.36364 9.29403H9.09091V6.56676C9.09091 6.32566 9.18669 6.09443 9.35718 5.92394C9.52766 5.75345 9.75889 5.65767 10 5.65767C10.2411 5.65767 10.4723 5.75345 10.6428 5.92394C10.8133 6.09443 10.9091 6.32566 10.9091 6.56676V9.29403H13.6364C13.8775 9.29403 14.1087 9.38981 14.2792 9.5603C14.4497 9.73079 14.5455 9.96202 14.5455 10.2031C14.5455 10.4442 14.4497 10.6755 14.2792 10.8459C14.1087 11.0164 13.8775 11.1122 13.6364 11.1122H10.9091V13.8395Z" fill="#0A1E46"/>
												</svg>
												Add New
											</small>
										</a>
									</div>
									<select class="select2 form-select" id="gender-column">
										<option>Male</option>
										<option>Female</option>
										<option>Others</option>
									</select>
								</div>
								<div class="col-lg-6 mb-4 ps-lg-5">
									<div class="d-flex justify-content-between align-items-center mb-1">
										<label class="form-label" for="ethnicity-column">
											Ethnicity
										</label>
										<a href="#" class="fw-bold">
											<small>
												<svg class="me-1" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.203125C4.47727 0.203125 0 4.6804 0 10.2031C0 15.7259 4.47727 20.2031 10 20.2031C15.5227 20.2031 20 15.7259 20 10.2031C20 4.6804 15.5227 0.203125 10 0.203125ZM10.9091 13.8395C10.9091 14.0806 10.8133 14.3118 10.6428 14.4823C10.4723 14.6528 10.2411 14.7486 10 14.7486C9.75889 14.7486 9.52766 14.6528 9.35718 14.4823C9.18669 14.3118 9.09091 14.0806 9.09091 13.8395V11.1122H6.36364C6.12253 11.1122 5.8913 11.0164 5.72081 10.8459C5.55032 10.6755 5.45455 10.4442 5.45455 10.2031C5.45455 9.96202 5.55032 9.73079 5.72081 9.5603C5.8913 9.38981 6.12253 9.29403 6.36364 9.29403H9.09091V6.56676C9.09091 6.32566 9.18669 6.09443 9.35718 5.92394C9.52766 5.75345 9.75889 5.65767 10 5.65767C10.2411 5.65767 10.4723 5.75345 10.6428 5.92394C10.8133 6.09443 10.9091 6.32566 10.9091 6.56676V9.29403H13.6364C13.8775 9.29403 14.1087 9.38981 14.2792 9.5603C14.4497 9.73079 14.5455 9.96202 14.5455 10.2031C14.5455 10.4442 14.4497 10.6755 14.2792 10.8459C14.1087 11.0164 13.8775 11.1122 13.6364 11.1122H10.9091V13.8395Z" fill="#0A1E46"/>
												</svg>
												Add New
											</small>
										</a>
									</div>
									<select class="select2 form-select" id="ethnicity-column">
										<option>Select Ethnicity</option>
									</select>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="providerID-column">
										Provider ID
									</label>
									<input type="email" id="providerID-column" class="form-control" name="providerID-column" placeholder="Enter Provider ID"/>
								</div>
								<div class="col-lg-6 mb-4 ps-lg-5">
									<label class="form-label mb-3" for="assign-provider-teams">
										Assign Provider Teams
									</label>
									<button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#AssignproviderTeamModal">
										<div>
											<x-icon name="right-color-arrow"/>
										</div>
										<div class="text-primary fw-semibold">
											Add Provider Teams
										</div>
									</button>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="email">
										Email
										<span class="mandatory" aria-hidden="true">
											*
										</span>
									</label>
									<input type="text" id="email" class="form-control" name="email" placeholder="Enter Email" required aria-required="true"/>
								</div>
								<div class="col-lg-6 mb-4 ps-lg-5">
									<label class="form-label" for="phone">Phone Number</label>
									<input type="text" id="phone" class="form-control" name="phone" placeholder="Enter Phone Number"/>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="country">
										Country
									</label>
									<select class="select2 form-select" id="country">
										<option value="">Select Country</option>
									</select>
								</div>
								<div class="col-lg-6 mb-4 ps-lg-5">
									<label class="form-label" for="state">
										State / Province
									</label>
									<select class="select2 form-select" id="state">
										<option value="Al">
											Select State / Province
										</option>
									</select>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="city">
										City
									</label>
									<select class="select2 form-select" id="city">
										<option value="">Select City</option>
									</select>
								</div>
								<div class="col-lg-6 mb-4 ps-lg-5">
									<label class="form-label" for="zip-code">
										Zip Code
									</label>
									<input type="text" id="zip-code" class="form-control" name="zipCode" placeholder="Enter Zip Code"/>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="address-line-1">
										Address Line 1
									</label>
									<input type="text" id="address-line-1" class="form-control" name="address-line-1" placeholder="Enter Address Line 1"/>
								</div>
								<div class="col-lg-6 mb-4 ps-lg-5">
									<label class="form-label" for="address-line-2">
										Address Line 2
									</label>
									<input type="text" id="address-line-2" class="form-control" name="addressLine2" placeholder="Enter Address Line 2"/>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="start-date-column">
										Start Date
									</label>
									<div class="d-flex align-items-center w-100">
										<div class="position-relative flex-grow-1">
											<input type="text" class="form-control js-single-date" placeholder="Select Date of Birth" aria-label="" aria-describedby="" id="start-date-column">
											<svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
											</svg>
										</div>
									</div>
								</div>
								<div class="col-lg-6 mb-4 ps-lg-5">
									<label class="form-label" for="end-date-column">
										End Date
									</label>
									<div class="d-flex align-items-center w-100">
										<div class="position-relative flex-grow-1">
											<input type="text" class="form-control js-single-date" placeholder="Select Date of Birth" aria-label="" aria-describedby="" id="end-date-column">
											<svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
											</svg>
										</div>
									</div>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<div class="d-flex justify-content-between align-items-center">
										<label class="form-label" for="education-column">
											Education
										</label>
										<a @click="addDocument = true" href="#" class="fw-bold">
											<small>
												<svg class="me-1" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z" fill="#0A1E46"/>
												</svg>
												Upload Supporting Documents
											</small>
										</a>
									</div>
									<input type="text" id="education-column" class="form-control" name="education-column" placeholder="Enter Education"/>
								</div>
								<div class="col-lg-6 mb-4 ps-lg-5">
									<div class="d-flex justify-content-between align-items-center mb-2">
										<label class="form-label mb-lg-0" for="certification-column">
											Certification(s)
										</label>
										<div class="d-flex align-items-center gap-3">
											<a href="#" class="fw-bold">
												<small>
													<svg class="me-1" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.203125C4.47727 0.203125 0 4.6804 0 10.2031C0 15.7259 4.47727 20.2031 10 20.2031C15.5227 20.2031 20 15.7259 20 10.2031C20 4.6804 15.5227 0.203125 10 0.203125ZM10.9091 13.8395C10.9091 14.0806 10.8133 14.3118 10.6428 14.4823C10.4723 14.6528 10.2411 14.7486 10 14.7486C9.75889 14.7486 9.52766 14.6528 9.35718 14.4823C9.18669 14.3118 9.09091 14.0806 9.09091 13.8395V11.1122H6.36364C6.12253 11.1122 5.8913 11.0164 5.72081 10.8459C5.55032 10.6755 5.45455 10.4442 5.45455 10.2031C5.45455 9.96202 5.55032 9.73079 5.72081 9.5603C5.8913 9.38981 6.12253 9.29403 6.36364 9.29403H9.09091V6.56676C9.09091 6.32566 9.18669 6.09443 9.35718 5.92394C9.52766 5.75345 9.75889 5.65767 10 5.65767C10.2411 5.65767 10.4723 5.75345 10.6428 5.92394C10.8133 6.09443 10.9091 6.32566 10.9091 6.56676V9.29403H13.6364C13.8775 9.29403 14.1087 9.38981 14.2792 9.5603C14.4497 9.73079 14.5455 9.96202 14.5455 10.2031C14.5455 10.4442 14.4497 10.6755 14.2792 10.8459C14.1087 11.0164 13.8775 11.1122 13.6364 11.1122H10.9091V13.8395Z" fill="#0A1E46"/>
													</svg>
													Add New
												</small>
											</a>
											<a @click="addDocument = true" href="#" class="fw-bold">
												<small>
													<svg class="me-1" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z" fill="#0A1E46"/>
													</svg>
													Upload Supporting Documents
												</small>
											</a>
										</div>
									</div>
									<div>
										<select class="select2 form-select" id="certification-column">
											<option value="certification-column">
												Enter Certification(s)
											</option>
										</select>
									</div>
									<div class="mt-2">
										<input class="form-check-input" type="checkbox" value="display-provider" id="display-provider">
										<label class="form-check-label" for="display-provider">
											Display Provider as Certified
										</label>
									</div>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<div class="d-flex justify-content-between align-items-center">
										<label class="form-label" for="education-column">
											Experience
										</label>
										<a @click="addDocument = true" href="#" class="fw-bold">
											<small>
												<svg class="me-1" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z" fill="#0A1E46"/>
												</svg>
												Upload Supporting Documents
											</small>
										</a>
									</div>
									<textarea class="form-control" rows="3" cols="3" placeholder="" name="experienceColumn" id="experience-column"></textarea>
								</div>
								<div class="col-lg-6 ps-lg-5">
									<label class="form-label" for="notes-column">
										Notes
									</label>
									<textarea class="form-control" rows="3" placeholder="" name="notesColumn" id="notes-column"></textarea>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="preferred-language-column">
										Preferred Language
									</label>
									<select class="select2 form-select" id="preferred-language-column">
										<option value="preferred-language-column">
											Select Preferred Language
										</option>
									</select>
								</div>
								<div class="col-lg-6 ps-lg-5">
									<label class="form-label" for="set-time-zone-column">
										Set Time Zone
									</label>
									<select class="select2 form-select" id="set-time-zone-column">
										<option value="set-time-zone-column">
											Select Time Zone
										</option>
									</select>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="preferred-colleagues-column">
										Preferred Colleagues
									</label>
									<select class="select2 form-select" id="preferred-colleagues-column">
										<option value="preferred-colleagues-column">
											Select Preferred Colleagues
										</option>
									</select>
								</div>
								<div class="col-lg-6 ps-lg-5">
									<label class="form-label" for="disfavored-colleagues-column">
										Disfavored Colleagues
									</label>
									<select class="select2 form-select" id="disfavored-colleagues-column">
										<option value="disfavored-colleagues-column">
											Select Disfavored Colleagues
										</option>
									</select>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="provider-introduction">
										Provider Introduction
									</label>
									<textarea class="form-control" rows="3" cols="3" placeholder="" name="provider- introduction" id="provider-introduction"></textarea>
								</div>
								<div class="col-lg-6 ps-lg-5">
									<label class="form-label" for="provider-introduction-media">
										Provider Introduction Media
									</label>
									<input type="file" id="provider-introduction-media" class="form-control" name="companeyAdmins" placeholder="Add Admins"/>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label" for="payment-settings">
										Payment Settings
									</label>
									<select class="select2 form-select" id="payment-settings">
										<option value="Al">
											Select Payment Settings
										</option>
									</select>
								</div>
								<div class="col-lg-6 ps-lg-5">
									<label class="form-label" for="default-remittance-temp">
										Select Default Remittance Template
									</label>
									<select class="select2 form-select" id="default-remittance-temp">
										<option value="Al">
											Select Default Remittance Template
										</option>
									</select>
								</div>
								<div class="col-lg-6 mb-4 pe-lg-5">
									<label class="form-label">
										Tags
									</label>
									<select data-placeholder="" multiple class="form-select chosen-select">
										<option selected>Customer</option>
										<option selected>Companies</option>
										<option selected>Teams</option>
									</select>
								</div>
								{{-- Input Fields End --}}
							</div>
							{{-- Action Buttons - Start --}}
							<div class="col-12 justify-content-center form-actions d-flex gap-3">
								<button type="button" class="btn btn-outline-dark rounded" wire:click.prevent="showList">
									Cancel
								</button>
								<button type="submit" class="btn btn-primary rounded">
									Save & Exit
								</button>
								<button type="button" class="btn btn-primary rounded" x-on:click="$wire.switch('provider-service')">
									Next
								</button>
							</div>
						</div>
						{{-- END: Profile --}}

						{{-- BEGIN: Provider Service --}}
						<div class="tab-pane fade" :class="{ 'active show': tab === 'provider-service' }" id="provider-service" role="tabpanel" aria-labelledby="provider-service-tab" tabindex="0" x-show="tab === 'provider-service'">
							<section id="multiple-column-form">
								<div class="row">
									<div class="col-12">
										<form class="form">
											<div class="row">
												<div class="col-md-12 mb-md-2">
													<div class="col-md-12 col-12 mb-md-2">
														<div class="row mb-5">
															<div class="col-lg-12 mb-4">
																<h3>Provider Type</h3>
																<div class="row">
																	<div class="col-12 mb-4">
																		<div class="mb-2">
																			<div class="d-flex align-items-center gap-4">
																				<div>
																					<div class="form-check mb-0">
																						<input class="form-check-input" type="radio" name="ProviderType" id="ContractProviderType" checked>
																						<label class="form-check-label" for="ContractProviderType">
																							Contract Provider
																						</label>
																						<svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
																						</svg>
																					</div>
																				</div>
																				<div>
																					<button type="button" class="btn btn-outline-primary px-3 py-1 rounded-lg btn-has-icon px-0 btn-multiselect-popup" data-bs-toggle="modal" data-bs-target="#contractProviderAvailiblityModal">
																						Availability Schedule
																					</button>
																				</div>
																			</div>
																		</div>
																		<div class="mb-4">
																			<div class="d-flex align-items-center gap-4">
																				<div>
																					<div class="form-check mb-0">
																						<input class="form-check-input" type="radio" name="ProviderType" id="staffProviderType" checked>
																						<label class="form-check-label" for="staffProviderType">
																							Staff Provider
																						</label>
																						<svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
																						</svg>
																					</div>
																				</div>
																				<div>
																					<button type="button" class="btn btn-outline-primary px-3 py-1 rounded-lg btn-has-icon px-0 btn-multiselect-popup" data-bs-toggle="modal" data-bs-target="#staffProviderAvailiblityModal">
																						Availability Schedule
																					</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<h4 class="mb-2">
																	Would you like to set a rate for when this provider works outside their set schedule?
																</h4>
																<div class="d-flex">
																	<div class="form-check">
																		<input class="form-check-input" type="radio" name="exampleRadios" id="provider-rate-schedule-radio-btn" value="option2" checked>
																		<label class="form-check-label" for="provider-rate-schedule-radio-btn">
																			Yes
																		</label>
																	</div>
																	<div class="form-check ms-4">
																		<input class="form-check-input" type="radio" name="exampleRadios" id="provider-rate-schedule-radio-button" value="option2">
																		<label class="form-check-label" for="provider-rate-schedule-radio-button">
																			No
																		</label>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-12 col-12 md-2 mb-5 mt-4">
															<div class="row">
																<div class="col-6 mb-4">
																	<h2>Provider Service Profile</h2>
																	<div class="bg-muted rounded p-4">
																		<h5 class="text-primary">
																			Travel Profile
																		</h5>
																		<div class="col-12 mb-3">
																			<div class="d-flex justify-content-between">
																				<div>
																					<label class="form-label-sm" for="rate-per-mile-to-reimburse">
																						Rate per mile to reimburse providers
																					</label>
																				</div>
																				<div>
																					KM
																					<x-icon name="pencil"/>
																				</div>
																			</div>
																			<input type="text" id="rate-per-mile-to-reimburse" class="form-control" name="rate-per-mile-to-reimburse" placeholder="$00:00"/>
																		</div>
																		<div class="col-12 mb-2">
																			<label class="form-label-sm" for="rate-to-reimburse-compensated-travel-time">
																				Rate to Reimburse Compensated Travel Time
																				<x-icon name="fill-question"/>
																			</label>
																			<div class="col-lg-8">
																				<div class="d-flex align-items-center gap-2">
																					<div>
																						<input type="text" id="rate-to-reimburse-compensated-travel-time" class="form-control" name="rate-to-reimburse-compensated-travel-time" placeholder="$00:00"/>
																					</div>
																					<div>Per hour</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-12">
																			<div class="form-check">
																				<input class="form-check-input" type="checkbox" value="service-rate" id="service-rate">
																				<label class="form-check-label" for="service-rate">
																					Same as Service Rate
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-4 ms-auto mb-3">
																	<label class="form-label-sm mb-2 d-block" for="copy_provider">
																		Copy from Other Provider
																	</label>
																	<div class="row">
																		<div class="col-lg-7">
																			<select class="form-select form-select-md rounded" id="copy_provider">
																				<option>
																					Select Provider
																				</option>
																			</select>
																		</div>
																		<div class="col-lg-5">
																			<a href="#" class="btn btn-primary btn-sm rounded w-100">
																				Apply
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row mb-4">
															<div class="col-lg-5">
																<label class="form-label" for="ApplyTo">
																	Accommodation
																</label>
																<select class="chosen-select form-select form control w-auto" id="copy_provider" multiple>
																	<option selected>
																		Shelby Sign Language
																	</option>
																	<option selected>
																		Language Translation Services
																	</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-12 mb-md-2">
														<div class="col-lg-12 d-flex col-12 gap-2 align-items-center mb-3 mt-1">
															<h3 class="mb-lg-0">Service</h3>
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z" fill="#888575"/>
															</svg>
														</div>
													</div>
													<div class="col-md-12 col-12 mb-md-2">
														<div class="form-check mb-3">
															<input class="form-check-input" type="checkbox" value="check-service-duration" id="first-check-service-duration" checked>
															<label class="form-check-label" for="first-check-service-duration">
																Check service duration
															</label>
														</div>
													</div>
													<div class="col-md-12 col-12 md-2 mb-4">
														<div class="row">
															<div class="col-md-7 col-12 mb-3">
																Service Types
															</div>
														</div>
														<div class="row">
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
															<div class="col-lg-6 pe-lg-5">
																<div class="d-flex flex-column gap-5">
																	<!-- In-Person Billing Increment -->
																	<div>
																		<label class="form-label text-primary">
																			In-Person Rates
																		</label>
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
																		<label class="form-label text-primary">
																			Phone Rates
																		</label>
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
																		<label class="form-label text-primary">
																			Virtual Rates
																		</label>
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
																		<label class="form-label text-primary">
																			Teleconference Rates
																		</label>
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
													<!-- section two end -->
													<div class="col-lg-12 mb-5">
														<div class="d-lg-flex align-items-center mb-4 gap-3">
															<h2 class="mb-lg-0">
																Expedited Service Differentials
															</h2>
														</div>
														<div class="row">
															<div class="col-lg-12">
																<div class="row">
																	<div class="col-lg-6 pe-lg-5 mb-4">
																		<div class="border-dashed p-2 rounded mb-1">
																			<label class="form-label text-primary">
																				In-Person
																			</label>
																			<div class="d-flex flex-column gap-5">
																				<!-- In-Person Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1
																								<small>
																									(Hour)
																								</small>
																							</span>
																							<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="d-flex">
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="x-by-duration" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="x-by-duration">
																									X by Duration
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="exclude-after-hours">
																									Exclude After-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-closed-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="exclude-closed-hours">
																									Exclude Closed-hours
																								</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!-- /In-Person Additional Service Charges -->
																			</div>
																		</div>
																		<div class="text-end">
																			<a href="#" class="fw-bold">
																				<small>
																					Add Additional Parameter
																					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																					</svg>
																				</small>
																			</a>
																		</div>
																	</div>
																	<div class="col-lg-6 ps-lg-5 mb-4">
																		<div class="border-dashed p-2 rounded mb-1">
																			<label class="form-label text-primary">
																				Virtual
																			</label>
																			<div class="d-flex flex-column gap-5">
																				<!-- Virtual Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1
																								<small>
																									(Hour)
																								</small>
																							</span>
																							<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="d-flex">
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="x-by-duration" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="x-by-duration">
																									X by Duration
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="exclude-after-hours">
																									Exclude After-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-closed-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="exclude-closed-hours">
																									Exclude Closed-hours
																								</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!-- /Virtual Additional Service Charges -->
																			</div>
																		</div>
																		<div class="text-end">
																			<a href="#" class="fw-bold">
																				<small>
																					Add Additional Parameter
																					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																					</svg>
																				</small>
																			</a>
																		</div>
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-6 pe-lg-5">
																		<div class="border-dashed p-2 rounded mb-1">
																			<label class="form-label text-primary">
																				Phone
																			</label>
																			<div class="d-flex flex-column gap-5">
																				<!-- Phone Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1
																								<small>
																									(Hour)
																								</small>
																							</span>
																							<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="d-flex">
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="x-by-duration" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="x-by-duration">
																									X by Duration
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="exclude-after-hours">
																									Exclude After-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-closed-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="exclude-closed-hours">
																									Exclude Closed-hours
																								</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!-- /Phone Additional Service Charges -->
																			</div>
																		</div>
																		<div class="text-end">
																			<a href="#" class="fw-bold">
																				<small>
																					Add Additional Parameter
																					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																					</svg>
																				</small>
																			</a>
																		</div>
																	</div>
																	<div class="col-lg-6 ps-lg-5">
																		<div class="border-dashed p-2 rounded mb-1">
																			<label class="form-label text-primary">
																				Teleconference
																			</label>
																			<div class="d-flex flex-column gap-5">
																				<!-- Teleconference Additional Service Charges -->
																				<div>
																					<div class="d-flex flex-column gap-3">
																						<div class="input-group">
																							<span class="input-group-text gap-2 bg-secondary col-lg-5" id="">
																								Parameter 1
																								<small>
																									(Hour)
																								</small>
																							</span>
																							<input type="text" class="form-control text-center" placeholder="0" aria-label="" aria-describedby="">
																							<div class="col-lg-2">
																								<select class="form-select rounded-0" aria-label="$">
																									<option>$</option>
																								</select>
																							</div>
																							<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																						</div>
																						<div class="d-flex">
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="x-by-duration" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="x-by-duration">
																									X by Duration
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="exclude-after-hours">
																									Exclude After-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="exclude-closed-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label text-sm" for="exclude-closed-hours">
																									Exclude Closed-hours
																								</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!-- /Teleconference Additional Service Charges -->
																			</div>
																		</div>
																		<div class="text-end">
																			<a href="#" class="fw-bold">
																				<small>
																					Add Additional Parameter
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
													<!-- /Expedited Services -->
													<!-- Cancellations/Modifications/Rescheduling -->
													<div class="col-lg-12 mb-5">
														<div class="d-lg-flex align-items-center mb-4 gap-3">
															<h2 class="mb-lg-0">
																Cancellations/Modifications/Rescheduling
															</h2>
														</div>
														<div class="row">
															<div class="col-lg-12">
																<div class="row">
																	<div class="col-lg-6 pe-lg-5 mb-4">
																		<div class="border-dashed p-2 rounded mb-1">
																			<label class="form-label text-primary">
																				In-Person
																			</label>
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
																								<input class="form-check-input" id="1-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-closed-hours">
																									Cancellations
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-multiply-by-duration" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-multiply-by-duration">
																									Exclude After-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Modifications
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-pay-service-minimum" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-pay-service-minimum">
																									Exclude Closed-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Rescheduling
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Bill Service Minimum
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									X by Duration
																								</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!-- /In-Person Additional Service Charges -->
																			</div>
																		</div>
																		<div class="text-end">
																			<a href="#" class="fw-bold">
																				<small>
																					Add Additional Parameter
																					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																					</svg>
																				</small>
																			</a>
																		</div>
																	</div>
																	<div class="col-lg-6 ps-lg-5 mb-4">
																		<div class="border-dashed p-2 rounded mb-1">
																			<label class="form-label text-primary">
																				Virtual
																			</label>
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
																								<input class="form-check-input" id="1-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-closed-hours">
																									Cancellations
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-multiply-by-duration" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-multiply-by-duration">
																									Exclude After-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Modifications
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-pay-service-minimum" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-pay-service-minimum">
																									Exclude Closed-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Rescheduling
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Bill Service Minimum
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									X by Duration
																								</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!-- /Virtual Additional Service Charges -->
																			</div>
																		</div>
																	</div>
																	<div class="text-end">
																		<a href="#" class="fw-bold">
																			<small>
																				Add Additional Parameter
																				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																				</svg>
																			</small>
																		</a>
																	</div>
																</div>
																<div class="row">
																	<div class="col-lg-6 pe-lg-5">
																		<div class="border-dashed p-2 rounded mb-1">
																			<label class="form-label text-primary">
																				Phone
																			</label>
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
																								<input class="form-check-input" id="1-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-closed-hours">
																									Cancellations
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-multiply-by-duration" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-multiply-by-duration">
																									Exclude After-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Modifications
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-pay-service-minimum" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-pay-service-minimum">
																									Exclude Closed-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Rescheduling
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Bill Service Minimum
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									X by Duration
																								</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!-- /Phone Additional Service Charges -->
																			</div>
																		</div>
																		<div class="text-end">
																			<a href="#" class="fw-bold">
																				<small>
																					Add Additional Parameter
																					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																						<path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
																					</svg>
																				</small>
																			</a>
																		</div>
																	</div>
																	<div class="col-lg-6 ps-lg-5">
																		<div class="border-dashed p-2 rounded mb-1">
																			<label class="form-label text-primary">
																				Teleconference
																			</label>
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
																								<input class="form-check-input" id="1-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-closed-hours">
																									Cancellations
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-multiply-by-duration" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-multiply-by-duration">
																									Exclude After-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Modifications
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-pay-service-minimum" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-pay-service-minimum">
																									Exclude Closed-hours
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Rescheduling
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									Bill Service Minimum
																								</label>
																							</div>
																							<div class="form-check form-check-inline">
																							</div>
																							<div class="form-check form-check-inline">
																								<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																								<label class="form-check-label" for="1-exclude-after-hours">
																									X by Duration
																								</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!-- /Teleconference Additional Service Charges -->
																			</div>
																		</div>
																		<div class="text-end">
																			<a href="#" class="fw-bold">
																				<small>
																					Add Additional Parameter
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
													<!-- /End: Cancellations/Modifications/Rescheduling -->
													<div class="col-lg-12 mb-5">
														<div class="d-lg-flex align-items-center mb-4 gap-3">
															<h2 class="mb-lg-0">Specializations</h2>
														</div>
														<div class="row">
															<div class="col-lg-12">
																<div class="border-dashed rounded p-3 mb-2">
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
																				<label class="form-label text-primary">
																					In-Person
																				</label>
																				<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																			</div>
																			<div class="align-self-end">
																				<label class="form-label text-primary">
																					Virtual
																				</label>
																				<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																			</div>
																			<div class="align-self-end">
																				<label class="form-label text-primary">
																					Phone
																				</label>
																				<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																			</div>
																			<div class="align-self-end">
																				<label class="form-label text-primary">
																					Teleconference
																				</label>
																				<input type="text" class="form-control text-center" placeholder="00.00" aria-label="" aria-describedby="">
																			</div>
																		</div>
																		<div class="mx-5">
																			<div class="d-flex">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" id="hide-from-customers" name="" type="checkbox" tabindex=""/>
																					<label class="form-check-label" for="hide-from-customers">
																						<small>
																							Hide from Customers
																						</small>
																					</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" id="hide-from-providers" name="" type="checkbox" tabindex="" />
																					<label class="form-check-label" for="hide-from-providers">
																						<small>
																							Hide from Providers
																						</small>
																					</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" id="x-by-duration" name="" type="checkbox" tabindex="" />
																					<label class="form-check-label" for="x-by-duration">
																						<small>
																							X by Duration
																						</small>
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="text-end">
																	<a href="#" class="fw-bold">
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
													<!-- /End : Cancellations/Modifications/Rescheduling -->
													<div class="col-md-12 col-12 mb-md-2">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="copy-of-check-service-duration" id="copy-of-check-service-duration">
															<label class="form-check-label" for="copy-of-check-service-duration">
																Copy of Check service duration
															</label>
														</div>
														<div class="mb-5">
															<hr>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" aria-label="Check Service Duration" value="check-service-duration" id="1-check-service-duration">
															<label class="form-check-label" for="1-check-service-duration">
																Hide from customer service
															</label>
														</div>
														<div class="mb-5">
															<hr>
														</div>
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="check-service-duration" id="language-interpreting">
															<label class="form-check-label" for="language-interpreting">
																New service capacity and capabilities
															</label>
														</div>
														<div class="mb-5">
															<hr>
														</div>
													</div>
												</div>
												<!-- cancel/next (buttons) -->
												<div class="col-12 justify-content-center form-actions d-flex gap-3">
													<button type="button" class="btn btn-outline-dark rounded" x-on:click="$wire.switch('profile')">
														Back
													</button>
													<button type="submit" class="btn btn-primary rounded">
														Save & Exit
													</button>
													<button type="button" class="btn btn-primary rounded" x-on:click="$wire.switch('upload-document')">
														Next
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</section>
						</div>
						{{-- END: Provider Service --}}

						{{-- BEGIN: Upload Document --}}
						<div class="tab-pane fade" :class="{ 'active show': tab === 'upload-document' }"  id="upload-document" role="tabpanel" aria-labelledby="upload-document-tab" tabindex="0" x-show="tab === 'upload-document'">
							<!-- Basic multiple Column Form section start -->
							<section id="multiple-column-form">
								<div class="row">
									<div class="col-12">
										<form class="form">
										  <div class="row">
											<div class="col-lg-12">
											  <h2>Attach Document</h2>
											</div>
										  </div>
										  <div class="row">
											<div class="col-lg-12 mb-4 mt-5">
											  <div class="row">
												<div class="col-lg-5 mb-4 ">
												  <h3 class="mb-0 text-primary">Driving License<span class="text-danger">*</span></h3>
												</div>
												<div class="col-lg-7 d-lg-flex justify-content-end gap-3 mb-4">
												  <a href="#" class="btn btn-primary btn-has-icon rounded">
													<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													  <path d="M2 10.4062L8.66667 17.4062L22 2.40625" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
													Add Manually
												  </a>
												  <a href="#" class="btn btn-primary rounded">
													Request from User
												  </a>
												</div>
											  </div>
											</div>
											<div class="col-lg-12 mb-4">
											  <div class="row">
												<div class="col-lg-4">
												  <label class="form-label" for="ApplyTo">
													Document Title
												  </label>
												  <div>Driving License</div>
												</div>
												<div class="col-lg-4 col-12">
												  <label class="form-label" for="document-type">
													Document Type
												  </label>
												  <div>Upload only</div>
												</div>
												<div class="col-lg-4 col-12">
												  <label class="form-label-sm mb-2 d-flex align-items-center gap-2">
													<svg width="20" height="27" viewBox="0 0 20 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													  <path d="M20 23.3333V7.5L12.5 0H3.33333C2.44928 0 1.60143 0.35119 0.976311 0.976311C0.351189 1.60143 0 2.44928 0 3.33333V23.3333C0 24.2174 0.351189 25.0652 0.976311 25.6904C1.60143 26.3155 2.44928 26.6667 3.33333 26.6667H16.6667C17.5507 26.6667 18.3986 26.3155 19.0237 25.6904C19.6488 25.0652 20 24.2174 20 23.3333ZM12.5 5C12.5 5.66304 12.7634 6.29893 13.2322 6.76777C13.7011 7.23661 14.337 7.5 15 7.5H18.3333V23.3333C18.3333 23.7754 18.1577 24.1993 17.8452 24.5118C17.5326 24.8244 17.1087 25 16.6667 25H3.33333C2.89131 25 2.46738 24.8244 2.15482 24.5118C1.84226 24.1993 1.66667 23.7754 1.66667 23.3333V3.33333C1.66667 2.89131 1.84226 2.46738 2.15482 2.15482C2.46738 1.84226 2.89131 1.66667 3.33333 1.66667H12.5V5Z" fill="black"/>
													  <path d="M4.3385 23.4729C4.01365 23.343 3.75193 23.092 3.6085 22.7729C3.2835 22.1262 3.39183 21.4796 3.74183 20.9362C4.07183 20.4246 4.6185 19.9896 5.23683 19.6246C6.02006 19.1803 6.84798 18.82 7.70683 18.5496C8.37382 17.3505 8.96498 16.1109 9.47683 14.8379C9.1708 14.1425 8.93085 13.4199 8.76017 12.6796C8.61683 12.0129 8.56183 11.3529 8.6835 10.7862C8.8085 10.1962 9.14017 9.66622 9.76683 9.41456C10.0868 9.28622 10.4335 9.21456 10.7702 9.28622C10.9395 9.32228 11.0987 9.39557 11.2362 9.50079C11.3737 9.60601 11.4861 9.74052 11.5652 9.89456C11.7118 10.1679 11.7652 10.4879 11.7768 10.7912C11.7885 11.1046 11.7568 11.4512 11.6985 11.8146C11.5585 12.6646 11.2485 13.7046 10.8318 14.8046C11.2917 15.7879 11.8383 16.7283 12.4652 17.6146C13.207 17.556 13.9531 17.5839 14.6885 17.6979C15.2952 17.8079 15.9118 18.0229 16.2885 18.4729C16.4885 18.7129 16.6102 19.0062 16.6218 19.3362C16.6335 19.6562 16.5435 19.9729 16.3918 20.2746C16.2605 20.5541 16.0568 20.7935 15.8018 20.9679C15.5498 21.1323 15.2523 21.2128 14.9518 21.1979C14.4002 21.1746 13.8618 20.8712 13.3968 20.5029C12.8314 20.0354 12.3219 19.5041 11.8785 18.9196C10.7514 19.0475 9.63772 19.2739 8.55017 19.5962C8.05213 20.4795 7.48362 21.3211 6.85017 22.1129C6.3635 22.6962 5.83517 23.2062 5.30517 23.4246C5.00065 23.5623 4.65524 23.5796 4.3385 23.4729ZM6.63683 20.3046C6.36017 20.4312 6.1035 20.5646 5.87183 20.7012C5.32517 21.0246 4.97017 21.3396 4.7935 21.6129C4.63683 21.8546 4.6335 22.0296 4.72683 22.2146C4.7435 22.2512 4.76017 22.2746 4.77017 22.2879C4.79005 22.2826 4.80954 22.2759 4.8285 22.2679C5.05683 22.1746 5.42017 21.8762 5.88683 21.3146C6.15224 20.9896 6.40251 20.6526 6.63683 20.3046ZM9.37017 18.0879C9.92671 17.958 10.4883 17.8507 11.0535 17.7662C10.75 17.3018 10.4664 16.8247 10.2035 16.3362C9.94209 16.9272 9.6642 17.5108 9.37017 18.0862V18.0879ZM13.4468 18.8379C13.6968 19.1096 13.9402 19.3379 14.1718 19.5212C14.5718 19.8379 14.8502 19.9429 15.0018 19.9479C15.0424 19.9532 15.0836 19.9444 15.1185 19.9229C15.1878 19.8681 15.2418 19.7964 15.2752 19.7146C15.3344 19.613 15.3682 19.4987 15.3735 19.3812C15.3725 19.3421 15.3571 19.3047 15.3302 19.2762C15.2435 19.1729 14.9968 19.0229 14.4668 18.9279C14.1297 18.8715 13.7886 18.842 13.4468 18.8396V18.8379ZM10.1302 12.9946C10.2704 12.5421 10.3818 12.0812 10.4635 11.6146C10.5152 11.3012 10.5352 11.0429 10.5268 10.8396C10.5273 10.7274 10.5093 10.6159 10.4735 10.5096C10.3901 10.5199 10.3087 10.5423 10.2318 10.5762C10.0868 10.6346 9.9685 10.7529 9.90517 11.0479C9.8385 11.3679 9.85517 11.8296 9.98183 12.4179C10.0218 12.6029 10.0718 12.7962 10.1318 12.9946H10.1302Z" fill="black"/>
													</svg>
													<span class="fw-semibold text-sm">File Name.pdf</span>
												  </label>
												  <div>
													<a href="#" class="btn btn-primary btn-sm rounded col-lg-4">Download</a>
												  </div>
												</div>
											  </div>
											</div>
											<div class="col-lg-12 mb-4">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="no-expiration" id="no-expiration">
													<label class="form-check-label" for="no-expiration">
													  No Expiration
													</label>
												</div>
											</div>
											<div class="col-lg-6 pe-lg-5 mb-4">
												<label class="form-label" for="end-date-column">Expiration Date</label>
												<div class="d-flex align-items-center w-100">
												  <div class="position-relative flex-grow-1">
													<input type="text" class="form-control js-single-date" placeholder="Select Date of Birth" aria-label="" aria-describedby="" id="end-date-column">
													<svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
													  <path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
													</svg>
												  </div>
												</div>
											</div>
											<div class="col-lg-6 ps-lg-5 mb-4">
											  <label for="formFile" class="form-label">
												Upload File
											  </label>
											  <input class="form-control mb-1" type="file" id="formFile">
											  <div class="text-primary text-sm">License.PDf</div>
											</div>
											<div class="col-lg-6 pe-lg-5 mb-4">
											  <label class="form-label" for="notes">
												Note
											  </label>
											  <textarea class="form-control" rows="4" placeholder="" name="notesColumn" id="notes"></textarea>
											</div>
											<div class="col-lg-6 ps-lg-5 mb-4">
											  <label class="form-label">Tags</label>
											  <select data-placeholder="" multiple class="form-select chosen-select" tabindex="">
												<option value=""></option>
											  </select>
											</div>
										  </div>
										  <div class="row">
											<div class="col-lg-12 gap-2">
											  <div class="d-flex justify-content-center align-items-center">
												<div class="form-check">
												  <input class="form-check-input" type="checkbox" value="send-invitation-email-to-provider" id="send-invitation-email-to-provider">
												  <label class="form-check-label" for="send-invitation-email-to-provider">
													Send Invitation Email to Provider
												  </label>
												</div>
											  </div>
											</div>
										  </div>
										  <div class="col-12 justify-content-center form-actions d-flex gap-3">
											<button type="button" class="btn btn-outline-dark rounded" x-on:click="$wire.switch('provider-service')">
												Back
											</button>
											<button type="submit" class="btn btn-primary rounded">
												Submit
											</button>
											{{-- <button type="submit" class="btn btn-primary rounded">
												Next
											</button> --}}
										  </div>
										</form>
									</div>
								</div>
							</section>
						</div>
						{{-- END: Upload Document --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('panels.common.add-document')
	@include('modals.assign-provider-team')
	@include('modals.contract-provider-availiblity')
	@include('modals.staff-provider-availiblity')
</div>