<div x-data="{customers: false}">
	<div class="content-header row">
		<div class="content-header-left col-12 mb-5">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">
						Add Company
					</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Home">
									<svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"/>
									</svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">
									Customers
								</a>
							</li>
							<li class="breadcrumb-item">
								All Companies
							</li>
							<li class="breadcrumb-item">
								Add Company
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
					{{-- NavTabs --}}
					<ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a href="javascript:void(0)" class="nav-link" :class="{ 'active': tab === 'company-info' }" @click.prevent="tab = 'company-info'" id="company-info-tab" role="tab" aria-controls="company-info" aria-selected="true">
								<span class="number">1</span>
								Company Info
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'service-catalog' }" @click.prevent="tab = 'service-catalog'" id="service-catalog-tab" role="tab" aria-controls="service-catalog" aria-selected="false">
								<span class="number">2</span>
								Service Catalog
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link" :class="{ 'active': tab === 'drive-documents' }" @click.prevent="tab = 'drive-documents'" id="drive-documents-tab" role="tab" aria-controls="drive-documents" aria-selected="false">
								<span class="number">3</span>
								Drive Documents
							</a>
						</li>
					</ul>

					{{-- Tab Panes --}}
					<div class="tab-content">
						{{-- BEGIN: Customer Info --}}
						<div class="tab-pane fade" :class="{ 'active show': tab === 'company-info' }" id="company-info" role="tabpanel" aria-labelledby="company-info-tab" tabindex="0" x-show="tab === 'company-info'">
							<section id="multiple-column-form">
								<div class="row">
									<div class="col-12">
										<form class="form">
											<div class="row mt-2 mb-5">
												<div class="col-12 text-center">
													<div class="d-inline-block position-relative">
														<img src="/tenant/images/portrait/small/testing.png" width="150" height="130" class="img-fluid rounded-circle" alt="Company Image"/>
														<div class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
															<svg aria-label="Upload Picture" width="57" height="57" viewBox="0 0 57 57" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#camera"></use>
                                                            </svg>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12 mb-md-2">
													<h2>Company Info</h2>
												</div>

												{{-- Company --}}
												<div class="col-lg-6 pe-lg-5 col-12">
													<div class="mb-2">
														<label class="form-label" for="company-name">
															Company Name
															<span class="mandatory" aria-hidden="true">
																*
															</span>
														</label>
														<input type="text" id="company-name" class="form-control" name="company-name" placeholder="Enter Company Name" required aria-required="true"/>
													</div>
													<div class="mb-4">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="hide-user-details-providers" id="hide-user-details-providers">
															<label class="form-check-label" for="hide-user-details-providers">
																Hide All Comapny Users' Details from Providers
															</label>
														</div>
													</div>
												</div>

												{{-- Industry --}}
												<div class="col-lg-6 ps-lg-5 col-12">
													<div class="mb-4">
														<label class="form-label" for="industry-column">
															Industry
															<span class="mandatory" aria-hidden="true">
																*
															</span>
														</label>
														<select class="select2 form-select" id="industry-column">
															<option>Select Industry</option>
														</select>
													</div>
												</div>

												{{-- Department Website --}}
												<div class="row">
													<div class="col-lg-6 pe-lg-5 col-12">
														<div class="mb-4">
															<label class="form-label" for="company-website">
																Company Website
															</label>
															<input type="text" id="company-website" class="form-control" name="company-website" placeholder="Enter Website URL" required aria-required="true"/>
														</div>
													</div>
												</div>

												{{-- Department Business Hours --}}
												<div class="col-lg-6 pe-lg-5 col-12">
													<div class="mb-4">
														<label class="form-label" for="department-business-hours">Manage Company Business Hours</label>
														<div class="mb-1">
															<button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup" data-bs-toggle="modal" data-bs-target="#companybusinesshoursModel">
																<x-icon name="right-color-arrow"/>
																Add Schedule
															</button>
														</div>
													</div>
												</div>

												{{-- Preferred Language --}}
												<div class="col-lg-6 ps-lg-5 col-12">
													<div class="mb-4">
														<label class="form-label" for="preferred-language">
															Preferred Language
														</label>
														<select class="select2 form-select" id="preferred-language">
															<option>
																Select Preferred Language
															</option>
														</select>
													</div>
												</div>
                                                {{-- Service Start Date --}}
                                                <div class="col-lg-6 mb-4 pe-lg-5">
                                                    <label class="form-label" for="service-start-date-column">
                                                        Service Start Date
                                                    </label>
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="position-relative flex-grow-1">
                                                            <input type="text" class="form-control js-single-date" placeholder="MM/DD/YYYY" aria-label="" aria-describedby="" id="service-start-date-column">
                                                            <svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>


												{{-- Service End Date --}}
                                                <div class="col-lg-6 mb-4 ps-lg-5">
                                                    <label class="form-label" for="service-end-date-column">
                                                        Service End Date
                                                    </label>
                                                    <div class="d-flex align-items-center w-100">
                                                        <div class="position-relative flex-grow-1">
                                                            <input type="text" class="form-control js-single-date" placeholder="MM/DD/YYYY" aria-label="" aria-describedby="" id="service-end-date-column">
                                                            <svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>



												{{-- Company Admin(s) --}}
												<div class="col-lg-6 pe-lg-5 col-12">
													<div class="mb-4">
														<label class="form-label" for="company-manager">
															Company Admin(s)
														</label>
														<input type="text" id="company-admin" class="form-control" name="company-admin" placeholder="Add Company Admin(s)"/>
													</div>
												</div>

												{{-- Associated Tags --}}
												<div class="col-lg-6 ps-lg-5 col-12">
													<div class="mb-4">
														<label class="form-label" for="associated-tags">
															Associated Tags
														</label>
														<input type="text" id="associated-tags" class="form-control" name="associated-tags" placeholder="Enter Associated Tags"/>
													</div>
												</div>

												{{-- Preferred Providers --}}
												<div class="col-lg-6 pe-lg-5 col-12">
													<div class="mb-4">
														<label class="form-label" for="preferred-providers">
															Preferred Providers
														</label>
														<select class="select2 form-select" id="preferred-providers">
															<option>
																Select Preferred Providers
															</option>
                                                            <option>
																 Providers 1
															</option>
                                                            <option>
                                                                Providers 2
                                                           </option>
                                                           <option>
                                                            Providers 3
                                                       </option>
														</select>
													</div>
												</div>

												{{-- Disfavored Providers --}}
												<div class="col-lg-6 ps-lg-5 col-12">
													<div class="mb-4">
														<label class="form-label" for="disfavored-providers">
															Disfavored Providers
														</label>
														<select class="select2 form-select" id="disfavored-providers">
															<option>
																Select Disfavored Providers
															</option>
                                                            <option>
                                                                Providers 1
                                                           </option>
                                                           <option>
                                                               Providers 2
                                                          </option>
                                                          <option>
                                                           Providers 3
                                                      </option>
														</select>
													</div>
												</div>

												{{-- Default Invoice Template --}}
												<div class="col-lg-6 pe-lg-5 col-12">
													<div class="mb-4">
														<label class="form-label" for="select-default-invoice-template">
															Select Default Invoice Template
														</label>
														<select class="select2 form-select" id="select-default-invoice-template">
															<option>
																Select Default Invoice Template
															</option>
														</select>
													</div>
												</div>

												{{-- Select Default Quote Template --}}
												<div class="col-lg-6 ps-lg-5 col-12">
													<div class="mb-4">
														<label class="form-label" for="select-default-quote-template">
															Select Default Quote Template
														</label>
														<select class="select2 form-select" id="select-default-quote-template">
															<option>
																Select Default Quote Template
															</option>
														</select>
													</div>
												</div>

												{{-- Select Default Timesheet --}}
												<div class="row">
														<div class="col-lg-6 pe-lg-5 col-12">
															<div class="mb-4">
																<label class="form-label" for="select-default-timesheet">
																	Select Default Timesheet
																</label>
																<select class="select2 form-select" id="select-default-timesheet">
																	<option>
																		Select Default Timesheet
																	</option>
																</select>
															</div>
														</div>
														<div class="col-lg-6 ps-lg-5 col-12">
															<div class="mb-4">
																<label class="form-label" for="tags-column">
																	Tags
																</label>
																<textarea class="form-control" rows="3" placeholder="" name="tags" id="tags-column"></textarea>
															</div>
														</div>
												</div>

												{{-- Department Phone Number --}}
												<div class="row">
													<div class="col-md-12">
														<h2>Phone Number</h2>
													</div>
												</div>

												<div class="row ms-1">
													<div class="col-lg-8 py-3 border">
														<div class="row">
															<div class="col-lg-5 col-md-4 mb-4 mb-md-0">
																	<label class="form-label" for="title">
																		Title
																	</label>
																	<input type="text" id="title" class="form-control" name="" placeholder="Enter Title"/>
															</div>
															<div class="col-lg-5 col-md-4 mb-4 mb-md-0">
																	<label class="form-label" for="phone">
																		Phone Number
																	</label>
																	<input type="text" id="phone" class="form-control" name="" placeholder="Enter Phone Number"/>
															</div>
															<div class="col-lg-2 col-md-4 align-self-end">
																<button class="btn btn-primary rounded">
																	Add
																</button>
															</div>
														</div>
													</div>

													<div class="col-lg-8 d-flex justify-content-end md-2 mt-4 mb-4">
														<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
															<svg aria-label="Add Phone number" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
															</svg>
															<span>Add Phone Number</span>
														</button>
													</div>
												</div>

												{{-- Default Billing Address --}}
												<div class="col-lg-12 mb-4">
													<div class="row">
														<div class="col-lg-6 pe-lg-5 mb-4">
															<h2>Default Billing Address</h2>
															<button type="button" class="btn btn-primary btn-has-icon rounded mb-4" data-bs-toggle="modal" data-bs-target="#addAddressModal">
																<svg aria-label="Add Address" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="ANDI508-element ANDI508-highlight ANDI508-element-active" data-andi508-index="27">
																	<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"></path>
																</svg>
																<span>Add Address</span>
															</button>
															<table class="table table-hover border">
																<thead>
																	<th>#</th>
																	<th>Address</th>
																	<th></th>
																</thead>
																<tbody>
																	<tr class="odd js-selected-row">
																		<td>1</td>
																		<td>
																			<p>
																				Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																			</p>
																		</td>
																		<td class="align-middle">
																			<svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</td>
																	</tr>
																	<tr class="even js-selected-row">
																		<td>2</td>
																		<td>
																			<p>
																				Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																			</p>
																		</td>
																		<td class="align-middle">
																			<svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</td>
																	</tr>
																	<tr class="odd js-selected-row">
																		<td>3</td>
																		<td>
																			<p>
																				Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																			</p>
																		</td>
																		<td class="align-middle">
																			<svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="col-lg-6 ps-lg-5 mb-4">
															<h2>Default Service Address</h2>
															<div class="d-lg-flex justify-content-between align-items-center">
																<div class="form-check mb-4">
																	<input class="form-check-input" type="checkbox" value="" id="same-as-billing-address-checkbox">
																	<label class="form-check-label" for="same-as-billing-address-checkbox">
																		Same as Billing Address
																	</label>
																</div>

																<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2 mb-4" data-bs-toggle="modal" data-bs-target="#addAddressModal">
																	<svg aria-label="Add Adress" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="ANDI508-element ANDI508-highlight ANDI508-element-active" data-andi508-index="27">
																		<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"></path>
																	</svg>
																	<span>Add Address</span>
																</button>
															</div>
															<table class="table table-hover border">
																<thead>
																	<th>#</th>
																	<th>Address</th>
																	<th></th>
																</thead>
																<tbody>
																	<tr class="odd js-selected-row">
																		<td>1</td>
																		<td>
																			<p>
																				Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																			</p>
																		</td>
																		<td class="align-middle">
																			<svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</td>
																	</tr>
																	<tr class="even js-selected-row">
																		<td>2</td>
																		<td>
																			<p>
																				Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																			</p>
																		</td>
																		<td class="align-middle">
																			<svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</td>
																	</tr>
																	<tr class="odd js-selected-row">
																		<td>3</td>
																		<td>
																			<p>
																				Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																			</p>
																		</td>
																		<td class="align-middle">
																			<svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																			</svg>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>

												<div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
													<button type="button" class="btn btn-outline-dark rounded px-4 py-2" wire:click.prevent="showList">
														Cancel
													</button>
													<button type="submit" class="btn btn-primary rounded px-4 py-2">
														Save & Exit
													</button>
													<button type="button" class="btn btn-primary rounded px-4 py-2" x-on:click="$wire.switch('service-catalog')">
														Next
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</section>
						</div>
						{{-- End Customer Info --}}

						{{-- BEGIN: Service Catalog --}}
						<div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }" id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab" tabindex="0" x-show="tab === 'service-catalog'">
							<section id="multiple-column-form">
								<div class="row">
									<div class="card-body">
										<form class="form">
											<div class="col-md-8 mb-md-2">
												<div class="mb-5">
													<h2>Service Catalog</h2>
												</div>
											</div>
											<div class="col-md-12 mb-md-2">
												<div class="row">
													<div class="col-md-4 mb-md-2">
														<div class="mb-3">
															<p class="fs-5">
																Filter By Accommodation
															</p>
														</div>
														<div class="content-body">
															<div class="card">
																<div class="card-body">
																	<form class="form">
																		<div class="overflow-y-auto">
																			<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
																				<tbody>
																					<input type="search" class="form-control" id="search-record" name="search" placeholder="Search" autocomplete="on" aria-label="Search"/>
																					<tr role="row" class="odd">
																						<td class="text-start">
																							<p>
																								Shelby Sign Language
																							</p>
																						</td>
																					</tr>
																					<tr role="row" class="odd">
																						<td class="text-start">
																							<p>
																								Language Translation Services
																							</p>
																						</td>
																					</tr>
																					@for ($i = 0; $i < 4; $i++)
																					<tr role="row" class="odd">
																						<td class="text-start">
																							<p>
																								Real Time Captioning Services
																							</p>
																						</td>
																					</tr>
																					@endfor
																					<tr role="row" class="odd">
																						<td class="text-start">
																							<p>
																								Sign Language Interpreting Services
																							</p>
																						</td>
																					</tr>
																					@for ($i = 0; $i < 5; $i++)
																					<tr role="row" class="odd">
																						<td class="text-start">
																							<p>
																								Spoken Language Interpreting Services
																							</p>
																						</td>
																					</tr>
																					@endfor
																				</tbody>
																			</table>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-6 mb-md-2">
														<div class="mb-3">
															<p class="fs-5">
																Select Service
															</p>
														</div>
														<div class="card">
															<div class="card-body">
																<form class="form">
																	<div class="overflow-y-auto">
																		<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
																			<tbody>
																				<input type="search" class="form-control"  name="search" placeholder="Search" autocomplete="on" aria-label="Search"/>
																				<tr role="row" class="odd">
																					<td class="text-start">
																						<p>Language interpreting</p>
																					</td>
																					<td>
																						<div class="form-check form-switch">
																							<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																							<label class="form-check-label">
																								Active
																							</label>
																						</div>
																					</td>
																					<td>
																						<div class="d-flex actions">
																							<a @click="customers = true" href="#" title="Customers" aria-label="Customers" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Customers" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#user-group"></use>
														                                        </svg>
																							</a>
																							<a href="#" title="Department" aria-label="Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Department" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#building"></use>
														                                        </svg>
																							</a>
																						</div>
																					</td>
																				</tr>
																				<tr role="row" class="odd">
																					<td class="text-start">
																						<p>
																							New service capacity and capabilities
																						</p>
																					</td>
																					<td>
																						<div class="form-check form-switch">
																							<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																							<label class="form-check-label">
																								Active
																							</label>
																						</div>
																					</td>
																					<td>
																						<div class="d-flex actions">
																							<a @click="customers = true" href="#" title="Customers" aria-label="Customers" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Customers" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#user-group"></use>
														                                        </svg>
																							</a>
																							<a href="#" title="Department" aria-label="Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Department" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#building"></use>
														                                        </svg>
																							</a>
																						</div>
																					</td>
																				</tr>
																				<tr role="row" class="odd">
																					<td class="text-start">
																						<p>
																							Shelby test two service
																						</p>
																					</td>
																					<td>
																						<div class="form-check form-switch">
																							<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																							<label class="form-check-label">
																								Active
																							</label>
																						</div>
																					</td>
																					<td>
																						<div class="d-flex actions">
																							<a @click="customers = true" href="#" title="Customers" aria-label="Customers" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Customers" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#user-group"></use>
														                                        </svg>
																							</a>
																							<a href="#" title="Department" aria-label="Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Department" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#building"></use>
														                                        </svg>
																							</a>
																						</div>
																					</td>
																				</tr>
																				<tr role="row" class="odd">
																					<td class="text-start">
																						<p>CART Captioning</p>
																					</td>
																					<td>
																						<div class="form-check form-switch">
																							<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																							<label class="form-check-label">
																								Active
																							</label>
																						</div>
																					</td>
																					<td>
																						<div class="d-flex actions">
																							<a @click="customers = true" href="#" title="Customers" aria-label="Customers" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Customers" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#user-group"></use>
														                                        </svg>
																							</a>
																							<a href="#" title="Department" aria-label="Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Department" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#building"></use>
														                                        </svg>
																							</a>
																						</div>
																					</td>
																				</tr>
																				@for ($i = 0; $i < 5; $i++)
																				<tr role="row" class="odd">
																					<td class="text-start">
																						<p>Transcript Services</p>
																					</td>
																					<td>
																						<div class="form-check form-switch">
																							<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
																							<label class="form-check-label">
																								Active
																							</label>
																						</div>
																					</td>
																					<td>
																						<div class="d-flex actions">
																							<a @click="customers = true" href="#" title="Customers" aria-label="Customers" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Customers" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#user-group"></use>
														                                        </svg>
																							</a>
																							<a href="#" title="Department" aria-label="Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<svg aria-label="Department" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
															                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#building"></use>
														                                        </svg>
																							</a>
																						</div>
																					</td>
																				</tr>
																				@endfor
																			</tbody>
																		</table>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 justify-content-center form-actions d-flex gap-2">
											<button type="button" class="btn btn-outline-dark rounded px-4 py-2" x-on:click="$wire.switch('company-info')">
												Back
											</button>
											<button type="submit" class="btn btn-primary rounded px-4 py-2">
												Save & Exit
											</button>
											<button type="submit" class="btn btn-primary rounded px-4 py-2" x-on:click="$wire.switch('drive-documents')">
												Next
											</button>
										</div>
									</div>
								</form>
							</section>
						</div>
						{{-- End: Service Catalog --}}

						{{-- BEGIN: Drive Documents Pane --}}
						<div class="tab-pane fade" :class="{ 'active show': tab === 'drive-documents' }" @click.prevent="tab = 'drive-documents'" id="drive-documents" role="tabpanel" aria-labelledby="drive-documents-tab" tabindex="0" x-show="tab === 'drive-documents'">
							<section id="multiple-column-form">
								<div class="row">
									<div class="col-12">
										<form class="form">
											<div class="col-md-8 mb-md-2">
												<h2>Drive Documents</h2>
											</div>
											<div class="col-md-12 mb-md-2">
												<div class="row">
													<div class="col-md-12 mb-md-2">
														<div class="d-flex justify-content-center">
															<div>
																<h3 class="text-center">
																	Upload Document
																</h3>
																<input class="form-control form-control-sm" type="file" aria-label="Upload File">
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex justify-content-center gap-3 mt-5">
													<div>
														<img src="/tenant/images/img-placeholder-document.jpg" alt="Preview File"/>
														<p>File Name</p>
													</div>
													<div>
														<img src="/tenant/images/img-placeholder-document.jpg" alt="Preview File"/>
														<p>File Name</p>
													</div>
													<div>
														<img src="/tenant/images/img-placeholder-document.jpg" alt="Preview File"/>
														<p>File Name</p>
													</div>
												</div>
											</div>
											<div class="col-12 justify-content-center form-actions d-flex">
												<button type="button" class="btn btn-outline-dark rounded px-4 py-2 mx-2" x-on:click="$wire.switch('service-catalog')">
													Back
												</button>
												<button type="submit" class="btn btn-primary rounded px-4 py-2">
													Submit
												</button>
												{{-- <button type="button" class="btn btn-primary rounded px-4 py-2">
													Next
												</button> --}}
											</div>
										</form>
									</div>
								</div>
							</section>
						</div>
						{{-- BEGIN: Drive Documents Pane --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('panels.common.customers')
	@include('modals.company-business-hours')
	@include('modals.common.add-address')
</div>

