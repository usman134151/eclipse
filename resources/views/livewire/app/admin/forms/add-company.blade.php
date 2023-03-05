<div x-data="{customers: false}">
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-5">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">
						Add Company
					</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
									<x-icon name="home"/>
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
															<x-icon name="camera"/>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8 mb-md-2">
													<h2>Company Info</h2>
												</div>
												
												{{-- Company --}}
												<div class="col-md-6 col-12">
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
														<input class="form-check-input" type="checkbox" value="hide-user-details-providers" id="hide-user-details-providers">
														<label class="form-check-label" for="hide-user-details-providers">
															Hide All Comapny Users' Details from Providers
														</label>
													</div>
												</div>

												{{-- Industry --}}
												<div class="col-md-6 col-12">
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
													<div class="col-md-6 col-12">
														<div class="mb-4">
															<label class="form-label" for="company-website">
																Company Website
															</label>
															<input type="text" id="company-website" class="form-control" name="company-website" placeholder="Enter Website URL" required aria-required="true"/>
														</div>
													</div>
												</div>

												{{-- Department Business Hours --}}
												<div class="col-md-6 col-12">
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
												<div class="col-md-6 col-12">
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
												<div class="col-md-6 col-12">
													<div class="mb-4">
														<label class="form-label" for="service-start-date">
															Service Start Date
														</label>
														<div class="position-relative">
															<input type="" name="" class="form-control" placeholder="17/01//2023" id="service-start-date">
															<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
															</svg>
														</div>
													</div>
												</div>

												{{-- Service End Date --}}
												<div class="col-md-6 col-12">
													<div class="mb-4">
														<label class="form-label" for="service-end-date">
															Service End Date
														</label>
														<div class="position-relative">
															<input type="" name="" class="form-control" placeholder="17/01//2023" id="service-end-date">
															<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
															</svg>
														</div>
													</div>
												</div>

												{{-- Company Admin(s) --}}
												<div class="col-md-6 col-12">
													<div class="mb-4">
														<label class="form-label" for="company-manager">
															Company Admin(s)
														</label>
														<input type="text" id="company-admin" class="form-control" name="company-admin" placeholder="Add Company Admin(s)"/>  
													</div>
												</div>

												{{-- Associated Tags --}}
												<div class="col-md-6 col-12">
													<div class="mb-4">
														<label class="form-label" for="associated-tags">
															Associated Tags
														</label>
														<input type="text" id="associated-tags" class="form-control" name="associated-tags" placeholder="Enter Associated Tags"/>
													</div>
												</div>

												{{-- Preferred Providers --}}
												<div class="col-md-6 col-12">
													<div class="mb-4">
														<label class="form-label" for="preferred-providers">
															Preferred Providers
														</label>
														<select class="select2 form-select" id="preferred-providers">
															<option>
																Select Preferred Providers
															</option>
														</select>
													</div>
												</div>

												{{-- Disfavored Providers --}}
												<div class="col-md-6 col-12">
													<div class="mb-4">
														<label class="form-label" for="disfavored-providers">
															Disfavored Providers
														</label>
														<select class="select2 form-select" id="disfavored-providers">
															<option>
																Select Disfavored Providers
															</option>
														</select>
													</div>
												</div>

												{{-- Default Invoice Template --}}
												<div class="col-md-6 col-12">
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
												<div class="col-md-6 col-12">
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
													<div class="col-md-12 mb-md-2">
														<div class="col-md-6 col-12">
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
													</div>
												</div>

												{{-- Department Phone Number --}}
												<div class="row">
													<div class="col-md-12">
														<h2>Phone Number</h2>
													</div>
												</div>
												
												<div class="row ms-1">
													<div class="col-8 border">
														<div class="row mt-3">
															<div class="col-5">
																<div class="mb-4">
																	<label class="form-label" for="title">
																		Title
																	</label>
																	<input type="text" id="title" class="form-control" name="" placeholder="Enter Title"/>
																</div>
															</div>
															<div class="col-5">
																<div class="mb-4">
																	<label class="form-label" for="phone">
																		Phone Number
																	</label>
																	<input type="text" id="phone" class="form-control" name="" placeholder="Enter Phone Number"/>
																</div>
															</div>
															<div class="col-2 mt-5">
																<button class="btn btn-primary rounded">
																	Add
																</button>
															</div>
														</div>
													</div>

													<div class="col-md-8 d-flex justify-content-end col-8 md-2 mt-4 mb-4">
														<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
															<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
															</svg>
															<span>Add Phone Number</span>
														</button>
													</div>
												</div>

												{{-- Default Billing Address --}}
												<div class="col-md-6 col-12 mt-4 mb-4">
													<h3>Default Billing Address</h3>
												</div>
												
												<div class="col-md-6 col-12 mt-4 mb-4">
													<h3>Default Service Address</h3>
												</div>
												
												<div class="col-md-6 col-12">
													<div class="mb-4">
														<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" data-bs-toggle="modal" data-bs-target="#addAddressModal">
															<x-icon name="plus"/>
															<span>Add Address</span>
														</button>
													</div>
												</div>
												
												<div class="col-md-3 col-12">
													<div class="mb-4">
														<input class="form-check-input" type="checkbox" value="" id="same-as-billing-address-checkbox">
														<label class="form-check-label" for="same-as-billing-address-checkbox">
															Same as Billing Address
														</label>
													</div>
												</div>
												
												<div class="col-md-3 col-12 text-end">
													<div class="mb-4">
														<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" data-bs-toggle="modal" data-bs-target="#addAddressModal">
															<x-icon name="plus"/>
															<span>Add Address</span>
														</button>
													</div>
												</div>
												
												<div class="col-md-12 d-flex col-12 mb-4 gap-4">
													<div class="col-md-6 col-12 mb-4 border">
														<table class="table table-hover">
															<thead>
																<th>#</th>
																<th>Address</th>
																<th></th>
															</thead>
															<tbody>
																<tr class="odd">
																	<td>1</td>
																	<td>
																		<p>
																			Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																		</p>
																	</td>
																	{{-- For active class row integrated with JS --}}
																	<td class="allign-middle">
																		<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																	</td>
																</tr>
																<tr class="even">
																	<td>2</td>
																	<td>
																		<p>
																			Mrs Smith 98 Shirley Street Appartment No. 45 PIMPAMA QLD 4209 AUSTRALIA
																		</p>
																	</td>
																	{{-- For active class row integrated with JS --}}
																	<td class="allign-middle">
																		<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																	</td>
																</tr>
																<tr class="odd">
																	<td>3</td>
																	<td>
																		<p>
																			Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																		</p>
																	</td>
																	{{-- For active class row integrated with JS --}}
																	<td class="allign-middle">
																		<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													
													<div class="col-md-6 col-12 mb-4 border">
														<table class="table table-hover">
															<thead>
																<th>#</th>
																<th>Address</th>
																<th></th>
															</thead>
															<tbody>
																<tr class="odd">
																	<td>1</td>
																	<td>
																		<p>
																			Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																		</p>
																	</td>
																	{{-- For active class row integrated with JS --}}
																	<td class="allign-middle">
																		<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																	</td>
																</tr>
																<tr class="even">
																	<td>2</td>
																	<td>
																		<p>
																			Mrs Smith 98 Shirley Street Appartment No. 45 PIMPAMA QLD 4209 AUSTRALIA
																		</p>
																	</td>
																	{{-- For active class row integrated with JS --}}
																	<td class="allign-middle">
																		<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																	</td>
																</tr>
																<tr class="odd">
																	<td>3</td>
																	<td>
																		<p>
																			Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA
																		</p>
																	</td>
																	{{-- For active class row integrated with JS --}}
																	<td class="allign-middle">
																		<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
																		</svg>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												
												<div class="col-12 justify-content-center form-actions d-flex gap-2">
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
																					<input type="search" class="form-control" id="search" name="search" placeholder="Search" autocomplete="on"/>
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
																				<input type="search" class="form-control" id="search" name="search" placeholder="Search" autocomplete="on"/>
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
																							<a @click="customers = true" href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="user-group"/>
																							</a>
																							<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="building"/>
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
																							<a @click="customers = true" href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="user-group"/>
																							</a>
																							<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="building"/>
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
																							<a @click="customers = true" href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="user-group"/>
																							</a>
																							<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="building"/>
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
																							<a @click="customers = true" href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="user-group"/>
																							</a>
																							<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="building"/>
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
																							<a @click="customers = true" href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="user-group"/>
																							</a>
																							<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																								<x-icon name="building"/>
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
																<input class="form-control form-control-sm" type="file">
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex justify-content-center gap-3 mt-5">
													<div>
														<img src="/tenant/images/img-placeholder-document.jpg"/>
														<p>File Name</p>
													</div>
													<div>
														<img src="/tenant/images/img-placeholder-document.jpg"/>
														<p>File Name</p>
													</div>
													<div>
														<img src="/tenant/images/img-placeholder-document.jpg"/>
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