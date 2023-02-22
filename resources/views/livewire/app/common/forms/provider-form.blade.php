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
				<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'profile' }" id="tab_wrapper">
					{{-- Nav tabs --}}
					<ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'profile' }" @click.prevent="tab = 'profile'; window.location.hash = 'profile'" id="user-profile-tab" role="tab" aria-controls="user-profile" aria-selected="true"><span class="number">1</span> Provider info</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'provider-service' }" @click.prevent="tab = 'provider-service'; window.location.hash = 'provider-service'" id="provider-service-tab" role="tab" aria-controls="provider-service" aria-selected="false"><span class="number">2</span>Provider Serivce Profile</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'upload-document' }" @click.prevent="tab = 'upload-document'; window.location.hash = 'upload-document'" id="upload-document-tab" role="tab" aria-controls="upload-document" aria-selected="false"><span class="number">3</span> Upload Document</a>
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
											<x-icon name="camera"/>
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
										<div class="col-md-6 d-flex align-items-center col-12 mb-4 gap-2">
											<div class="col-md-11 col-12">
												<form>
													<label class="form-label" for="date-of-birth">Date of Birth</label>
													<div class="position-relative">
														<input type="" name="" class="form-control" placeholder="Select Date of Birth" id="date-of-birth">
														<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
														</svg>
													</div>	
												</form>
											</div>
											<div class="col-md-1 col-12 mt-5">
											<svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
											  <path d="M12 0C6.54545 0 1.88727 3.52467 0 8.5C1.88727 13.4753 6.54545 17 12 17C17.4545 17 22.1127 13.4753 24 8.5C22.1127 3.52467 17.4545 0 12 0ZM12 14.1667C8.98909 14.1667 6.54545 11.628 6.54545 8.5C6.54545 5.372 8.98909 2.83333 12 2.83333C15.0109 2.83333 17.4545 5.372 17.4545 8.5C17.4545 11.628 15.0109 14.1667 12 14.1667ZM12 5.1C10.1891 5.1 8.72727 6.61867 8.72727 8.5C8.72727 10.3813 10.1891 11.9 12 11.9C13.8109 11.9 15.2727 10.3813 15.2727 8.5C15.2727 6.61867 13.8109 5.1 12 5.1Z" fill="black"/>
											  </svg>
											</div>
										</div>

										<div class="col-md-6 col-12">
											<div class="mb-4">
												<div class="d-flex justify-content-between">
													<div>
														<label class="form-label" for="gender-column">Gender</label>
													</div>
													<div>
														<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.203125C4.47727 0.203125 0 4.6804 0 10.2031C0 15.7259 4.47727 20.2031 10 20.2031C15.5227 20.2031 20 15.7259 20 10.2031C20 4.6804 15.5227 0.203125 10 0.203125ZM10.9091 13.8395C10.9091 14.0806 10.8133 14.3118 10.6428 14.4823C10.4723 14.6528 10.2411 14.7486 10 14.7486C9.75889 14.7486 9.52766 14.6528 9.35718 14.4823C9.18669 14.3118 9.09091 14.0806 9.09091 13.8395V11.1122H6.36364C6.12253 11.1122 5.8913 11.0164 5.72081 10.8459C5.55032 10.6755 5.45455 10.4442 5.45455 10.2031C5.45455 9.96202 5.55032 9.73079 5.72081 9.5603C5.8913 9.38981 6.12253 9.29403 6.36364 9.29403H9.09091V6.56676C9.09091 6.32566 9.18669 6.09443 9.35718 5.92394C9.52766 5.75345 9.75889 5.65767 10 5.65767C10.2411 5.65767 10.4723 5.75345 10.6428 5.92394C10.8133 6.09443 10.9091 6.32566 10.9091 6.56676V9.29403H13.6364C13.8775 9.29403 14.1087 9.38981 14.2792 9.5603C14.4497 9.73079 14.5455 9.96202 14.5455 10.2031C14.5455 10.4442 14.4497 10.6755 14.2792 10.8459C14.1087 11.0164 13.8775 11.1122 13.6364 11.1122H10.9091V13.8395Z" fill="#0A1E46"/>
															</svg>
															<a >Add New</a>	
													</div>
												</div>
												
												<select class="select2 form-select" id="gender-column">
													<option>Male</option>
													<option>Female</option>
													<option>Others</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<div class="d-flex justify-content-between">
													<div>
														<label class="form-label" for="ethnicity-column">
															Ethnicity
														</label>
													</div>
													<div>
														<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.203125C4.47727 0.203125 0 4.6804 0 10.2031C0 15.7259 4.47727 20.2031 10 20.2031C15.5227 20.2031 20 15.7259 20 10.2031C20 4.6804 15.5227 0.203125 10 0.203125ZM10.9091 13.8395C10.9091 14.0806 10.8133 14.3118 10.6428 14.4823C10.4723 14.6528 10.2411 14.7486 10 14.7486C9.75889 14.7486 9.52766 14.6528 9.35718 14.4823C9.18669 14.3118 9.09091 14.0806 9.09091 13.8395V11.1122H6.36364C6.12253 11.1122 5.8913 11.0164 5.72081 10.8459C5.55032 10.6755 5.45455 10.4442 5.45455 10.2031C5.45455 9.96202 5.55032 9.73079 5.72081 9.5603C5.8913 9.38981 6.12253 9.29403 6.36364 9.29403H9.09091V6.56676C9.09091 6.32566 9.18669 6.09443 9.35718 5.92394C9.52766 5.75345 9.75889 5.65767 10 5.65767C10.2411 5.65767 10.4723 5.75345 10.6428 5.92394C10.8133 6.09443 10.9091 6.32566 10.9091 6.56676V9.29403H13.6364C13.8775 9.29403 14.1087 9.38981 14.2792 9.5603C14.4497 9.73079 14.5455 9.96202 14.5455 10.2031C14.5455 10.4442 14.4497 10.6755 14.2792 10.8459C14.1087 11.0164 13.8775 11.1122 13.6364 11.1122H10.9091V13.8395Z" fill="#0A1E46"/>
															</svg>
															<a >Add New</a>	
													</div>
												</div>
												
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
												<label class="form-label mb-3" for="assign-provider-teams">
													Assign Provider Teams
												</label>
											    <div class="d-flex align-items-center gap-1">
													<div>
														<x-icon name="right-color-arrow"/>
													</div>
													<div class="text-primary fw-semibold">
														Add Provider Teams
													</div>
													
												</div>
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
													<option value="">Select Country</option>
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
												<select class="select2 form-select" id="city">
													<option value="">Select City</option>
												</select>
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
													<label class="form-label" for="start-date-column">
														Start Date
													</label>
													<div class="input-group mb-3" id="start-date">
														<input type="text" name="" class="form-control" aria-describedby="basic-addon2"  placeholder="17/01//2023" id="start-date-column" >
														<div class="position-relative">
															<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
															</svg>
														</div>
													</div>
												</form>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<form>
													<label class="form-label" for="end-date">End Date</label>
													<div class="input-group mb-3" id="enddate">
														<input type="text" class="form-control" placeholder="17/01//2023" aria-label="Recipient's username" aria-describedby="basic-addon2">
														<div class="position-relative">
															<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
															</svg>
														</div>
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
										<div class="col-md-6 col-12">
											<div class="mb-4">
												<label class="form-label" for="provider-introduction">
													Tags
												</label>
												<textarea class="form-control" rows="3" cols="3" placeholder="" name="tags" id="tags"></textarea>
											</div>
										</div>
									</div>
									<!-- input fields end -->
								</div>
								<div class="col-md-12 col-12 mb-md-2">
									<!-- cancel/next (buttons) -->
									<div class="col-12 justify-content-center gap-2 d-flex mt-5">
										<a href="javascript:void(0);" class="btn btn-secondary rounded px-4" role="button" wire:click="showList">
											Cancel
										</a>
										<button type="submit" class="btn btn-primary rounded px-4">
											Save & Exit
										</button>
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
															<div class="col-md-12 col-12 mb-md-2">
																<div class="row mb-5">
																	<div class="col-md-5 col-12">
																		<div class="mb-4">
																			<h3>Provider Type</h3>
																		</div>
																		<div class="row">
																			<div class="col-12 mb-4">
																				<div class="mb-2 ">	
																					<div class="d-flex ">
																					  <div>
																					<div class="form-check">
																						<input class="form-check-input" type="radio" name="exampleRadios" id="contract-provider-radio-btn" tabindex="0" role="tab" value="option1" checked>
																						<label class="form-check-label" for="contract-provider-radio-btn">
																							Contract Provider
																						</label>
																						<svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
																							<path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
																						</svg>
																					</div>
																				</div>
																			   <div>
																					<button class="btn btn-outline-primary rounded-3 ms-4  justify content between p-1">Availability Schedule</button>
																				</div>
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
																			</div>
																		</div>
																	</div>
																	<div class="row ">
																		<h4 class="mb-2" for="">Would you like to set a rate for when this provider works outside their set schedule?</h4>
																		<div class="d-flex">
																			<div class="form-check">
																				<input class="form-check-input" type="radio" name="exampleRadios" id="provider-rate-schedule-radio-btn" value="option2" checked>
																				<label class="form-check-label" for="provider-rate-schedule-radio-btn">
																					Yes
																				</label>
																			</div>
																			<div class="form-check ms-4">
																				<input class="form-check-input" type="radio" name="exampleRadios" id="provider-rate-schedule-radio-button" value="option2" >
																				<label class="form-check-label" for="provider-rate-schedule-radio-button">
																					No
																				</label>
																			</div>
																		</div>
																	</div>
																</div>							
																<div class="col-md-12 col-12 md-2 mb-5 mt-4">
																	<div class="row">
																		<div class="col-6">
																		<div class="mb-4">
																			<h2>Provider Service Profile</h2>
																		</div>
																		<div class="bg-muted p-4" >
																		<h5 class="text-primary">Travel Profile</h5>
																		<div class="col-12 mb-3">
																			<div class="d-flex justify-content-between">
																				<div>
																					<label class="form-label text-sm fw-semibold" for="rate-per-mile-to-reimburse">
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
																				<label class="form-label text-sm fw-semibold" for="rate-to-reimburse-compensated-travel-time">
																					Rate to Reimburse Compensated Travel Time <x-icon name="fill-question"/>
																				</label>
																				<div class="col-6">
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
																	<div class="col-4 ms-auto mb-3 ">
																		<label class="form-label" for="copy_provider">
																			Copy from Other Provider
																		</label>
																		<div class="d-flex gap-2">
																			<select class="form-select w-auto" id="copy_provider">
																				<option>Select Provider</option>
																			</select>
																			<a href="#" class="btn btn-primary rounded">Apply</a>
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
																	<path d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z" fill="#888575" />
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
														<!-- Section one end -->
														<div class="col-md-12 col-12 md-2 mb-4">
															<div class="row">
																<div class="col-md-7 col-12 mb-3">Service Types</div>
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
																<div class="col-12">
																	<div class="border p-3">
																		<div class="row">
																			<div class="col-lg-6 pe-lg-5">
																				<div class="d-flex flex-column gap-5">
																					<!-- In-Person Billing Increment -->
																					<div>
																						<div class="text-primary fw-bold">
																							In-Person Rates
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
																							Phone Rates
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
																							Virtual Rates
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
																							Teleconference Rates
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
																							<div class="text-end">
																								<a href="#" class="fw-bold">
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
																							<div class="text-end">
																								<a href="#" class="fw-bold">
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
																							<div class="text-end">
																								<a href="#" class="fw-bold">
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
																							<div class="text-end">
																								<a href="#" class="fw-bold">
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
																									<label class="form-check-label" for="1-exclude-after-hours">X by Duration</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-multiply-by-duration" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-multiply-by-duration"> Exclude After-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-closed-hours">Cancellations</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-pay-service-minimum" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-pay-service-minimum"> Exclude Closed-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Modifications</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Bill Service Minimum</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Rescheduling</label>
																								</div>
																							</div>
																							<div class="text-end">
																								<a href="#" class="fw-bold">
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
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">X by Duration</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-multiply-by-duration" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-multiply-by-duration"> Exclude After-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-closed-hours">Cancellations</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-pay-service-minimum" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-pay-service-minimum"> Exclude Closed-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Modifications</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Bill Service Minimum</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Rescheduling</label>
																								</div>
																							</div>
																							<div class="text-end">
																								<a href="#" class="fw-bold">
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
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">X by Duration</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-multiply-by-duration" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-multiply-by-duration"> Exclude After-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-closed-hours">Cancellations</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-pay-service-minimum" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-pay-service-minimum"> Exclude Closed-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Modifications</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Bill Service Minimum</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Rescheduling</label>
																								</div>
																							</div>
																							<div class="text-end">
																								<a href="#" class="fw-bold">
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
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">X by Duration</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-multiply-by-duration" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-multiply-by-duration"> Exclude After-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-closed-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-closed-hours">Cancellations</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-pay-service-minimum" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-pay-service-minimum"> Exclude Closed-hours</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Modifications</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Bill Service Minimum</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" id="1-exclude-after-hours" name="" type="checkbox" tabindex="" />
																									<label class="form-check-label" for="1-exclude-after-hours">Rescheduling</label>
																								</div>
																							</div>
																							<div class="text-end">
																								<a href="#" class="fw-bold">
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
																<h2 class="mb-lg-0">Specializations</h2>
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
																			<div class="mx-5">
																				<div class="d-flex">
																					<div class="form-check form-check-inline">
																						<input class="form-check-input" id="hide-from-customers" name="" type="checkbox" tabindex="" />
																						<label class="form-check-label" for="hide-from-customers">Hide from Customers</label>
																					</div>
																					<div class="form-check form-check-inline">
																						<input class="form-check-input" id="hide-from-providers" name="" type="checkbox" tabindex="" />
																						<label class="form-check-label" for="hide-from-providers">Hide from Providers</label>
																					</div>
																					<div class="form-check form-check-inline">
																						<input class="form-check-input" id="x-by-duration" name="" type="checkbox" tabindex="" />
																						<label class="form-check-label" for="x-by-duration">X by Duration</label>
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
															</div>
														</div>
														<!-- /End : Cancellations/Modifications/Rescheduling -->
														<div class="col-md-12 col-12 mb-md-2">
															<div class="form-check mb-5">
																<input class="form-check-input" type="checkbox" value="copy-of-check-service-duration" id="copy-of-check-service-duration">
																<label class="form-check-label" for="copy-of-check-service-duration">
																	Copy of Check service duration
																</label>
															</div>
															<div class="form-check mb-5">
																<input class="form-check-input" type="checkbox" aria-label="Check Service Duration" value="check-service-duration" id="1-check-service-duration">
																<label class="form-check-label" for="1-check-service-duration">
																	Hide from customer service
																</label>
															</div>
															<div class="form-check mb-5">
																<input class="form-check-input" type="checkbox" value="check-service-duration" id="language-interpreting" checked>
																<label class="form-check-label" for="language-interpreting">
																	New service capacity and capabilities
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
							
													<!-- cancel/next (buttons) -->
													<div class="col-12 justify-content-center gap-2 d-flex mt-5 mb-5">
														<a href="javascript:void(0);" class="btn btn-secondary rounded px-4" role="button">
															Back
														</a>
														<button type="submit" class="btn btn-primary rounded px-4">
															Save & Exit
														</button>
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
																			<h3 class="mb-0 text-primary">Driving License<span class="text-danger">*</span></h3>
																		</div>
																		<div class="col-lg-7 d-lg-flex justify-content-end gap-3 mb-4">
																			<a href="#" class="btn btn-primary rounded">
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
																<div class="col-md-12 col-12 md-2 mb-3">
																	<div class="row">
																		<div class="col-md-6 col-12">
																			<label class="form-label" for="ApplyTo">
																				Document Title
																			</label>
																			<div>Driving License</div>
																		</div>
																		<div class="col-md-6 col-12">
																			<label class="form-label for="document-type">
																				Document Type
																			</label>
																			<div>Upload only</div>
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
																			<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
																			</svg>
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
																	<label class="form-label" for="notes">
																		Note
																	</label>
																	<textarea class="form-control" rows="4" placeholder="" name="notesColumn" id="notes"></textarea>
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
															<div class="col-md-12 d-flex justify-content-end col-12 md-2 mb-5">
																<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" id="add-todo-item">
																	<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
																	</svg>
																	<span>Add Document</span>
																</button>
															</div>
															<div class="col-md-12 col-12 md-2 mb-4 gap-2 text-center">
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
																Submit
															</button>
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
