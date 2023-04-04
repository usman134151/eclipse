<div x-data="{customers: false}">
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-5">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">Add Department</h1>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
										<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
											<use xlink:href="/css/sprite.svg#home"></use>
										</svg>
					  </a>
					</li>
					<li class="breadcrumb-item">
					  <a href="http://127.0.0.1:8000">
						Departments
					  </a>
					</li>
					<li class="breadcrumb-item">
					  All Departments
					</li>
					<li class="breadcrumb-item">
					  Add Department
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
			 <div  x-data="{ tab: @entangle('component') }" id="tab_wrapper">
			   	  <!-- Nav tabs -->
			   	  <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
			   		<li class="nav-item" role="presentation">
			   		  <a href="#" class="nav-link" :class="{ 'active': tab === 'department-info' }" @click.prevent="tab = 'department-info'" id="department-info-tab" role="tab" aria-controls="department-info" aria-selected="true"><span class="number">1</span>Department Info</a>
			   		</li>
			   		<li class="nav-item" role="presentation">
			   		  <a href="#" class="nav-link" :class="{ 'active': tab === 'service-catalog' }" @click.prevent="tab = 'service-catalog'" id="service-catalog-tab" role="tab" aria-controls="service-catalog" aria-selected="false"><span class="number">2</span> Service Catalog</a>
			   		</li>
			   		<li class="nav-item" role="presentation">
			   		  <a href="#" class="nav-link" :class="{ 'active': tab === 'drive-documents' }" @click.prevent="tab = 'drive-documents'" id="drive-documents-tab" role="tab" aria-controls="drive-documents" aria-selected="false"><span class="number">3</span> Drive Documents</a>
			   		</li>
			   	  </ul>
			   	  <!-- Tab panes -->
				<div class="tab-content">
					<!-- BEGIN: Customer Info -->
					<div class="tab-pane fade" :class="{ 'active show': tab === 'department-info' }" @click.prevent="tab = 'department-info'" id="department-info" role="tabpanel" aria-labelledby="department-info-tab" tabindex="0" x-show="tab === 'department-info'">
				  
		                <!-- Basic multiple Column Form section start -->
		                <section id="multiple-column-form">
		              	<div class="row">
		              	  <div class="col-12">
		              		<form class="form">
		              			  <div class="row mt-2 mb-5">
		              				<div class="col-12 text-center">
		              					<div class="d-inline-block position-relative">
		              						<img src="/tenant/images/portrait/small/testing.png" width="150" height="130" class="img-fluid rounded-circle" alt="Department Profile Image"/>
		              						<div class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
		              							<svg aria-label="Upload Picture" width="57" height="57" viewBox="0 0 57 57" fill="none"
		              							 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#camera"></use>
		              							</svg>
		              						</div>
		              					</div>
		              				  </div>
		              				</div>
		              			  </div>
		              			  <div class="row">
		              				<div class="col-md-8 mb-md-2">
		              					  <h2>Department Info</h2>
		              				  </div>   
		              					<div class="col-md-4 ">
		              					  <button  type="submit" class="btn btn-primary rounded">Add Data From Company</button>
		              				  </div> 
		              				  
		              					<!-- Department -->
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="department-name">
		              						  Department Name <span class="mandatory" aria-hidden="true">*</span>
		              						</label>
		              						<input
		              						  type="text"
		              						  id="department-name"
		              						  class="form-control"
		              						  name="department-name"
		              						  placeholder="Enter department-name*"
		              						  required
		              						  aria-required="true"
		              						  />
		              					  </div>
		              					</div>
              
		              					<!-- Industry -->
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="industry-column">Industry<span class="mandatory" aria-hidden="true">*</span></label>
		              					   <select class="select2 form-select" id="industry-column">
		              						  <option>Select Industry</option>
		              						</select>
		              					  </div>
		              					</div>
		              					
		              				  <div class="row">
              
		              					<!--  Department Website -->
		              					<div class="row">
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="department-website">
		              						  Department Website 
		              						</label>
		              						<input
		              						  type="text"
		              						  id="department-website"
		              						  class="form-control"
		              						  name="department-website"
		              						  placeholder="Enter Website URL"
		              						  required
		              						  aria-required="true"
		              						  />
		              					  </div>
		              					</div>
		              					</div>
              
		              					<!-- Department Business Hours -->
		              					<div class="col-md-6 col-12">
		              						<div class="mb-4">
		              							<label class="form-label" for="department-business-hours">Department Business Hours</label>
		              							<div class="mb-1">
		              								<button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup" data-bs-toggle="modal" data-bs-target="#companybusinesshoursModel">
		              									<svg class="fill" width="25" height="18" viewBox="0 0 25 18" fill="none"
		              					                	xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#right-color-arrow"></use>
		              					                </svg>
		              									Add Schedule
		              								</button>
		              							</div>
		              						</div>
		              					</div>
              
		              					<!-- Preferred Language -->
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="preferred-language">Preferred Language</label>
		              						<select class="select2 form-select" id="preferred-language">
		              						  <option>Select Preferred Language</option>
		              						</select>
		              					  </div>
		              					</div>
		              					
		              					<!-- Service End Date -->
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="service-start-date">
		              						  Service Start Date
		              						</label>
		              						<div class="position-relative">
		              							<input type="" name="" class="form-control" placeholder="17/01//2023" id="service-start-date">
		              							<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
		              								<use xlink:href="/css/provider.svg#date-field"></use>
		              							</svg>
		              						</div>
		              					</div>
		              					</div>
              
		              					 <!-- Service End Date -->
		              					 <div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="service-end-date">
		              						  Service End Date
		              						</label>
		              						<div class="position-relative">
		              							<input type="" name="" class="form-control" placeholder="17/01//2023" id="service-end-date">
		              							<svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
		              								<use xlink:href="/css/provider.svg#date-field"></use>
		              							</svg>
		              						</div>
		              					</div>
		              					</div>
              
		              					<!-- Department Manager(s) -->
		              					<div class="col-md-6 col-12">
		              						<div class="mb-4">
		              							<label class="form-label" for="department-manager">Department Manager(s)</label>
		              							<div class="mb-1">
		              								<button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup" data-bs-toggle="modal" data-bs-target="#departmentManagerModal" aria-label="Department Manager(s)">
		              									<svg class="fill" width="25" height="18" viewBox="0 0 25 18" fill="none"
		              					                	xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#right-color-arrow"></use>
		              					                </svg>
		              									Add Department Manger(s)
		              								</button>
		              							</div>
		              						</div>
		              					</div> 
		              				  <!-- Associated Tags -->
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="associated-tags">Associated Tags</label>
		              					   <input
		              						  type="text"
		              						  id="associated-tags"
		              						  class="form-control"
		              						  name="associated-tags"
		              						  placeholder="Enter Associated Tags"
		              						  />    
		              					  </div>
		              					</div>
		              					<!-- Preferred Providers -->
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="preferred-providers">Preferred Providers</label>
		              						<select class="select2 form-select" id="preferred-providers">
		              						  <option>Select Preferred Providers</option>
		              						</select>
		              					  </div>
		              					</div>
              
		              					<!-- Disfavored Providers -->
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="disfavored-providers">Disfavored Providers</label>
		              						<select class="select2 form-select" id="disfavored-providers">
		              						  <option>Select Disfavored Providers</option>
		              						</select>
		              					  </div>
		              					</div>
              
		              				   <!-- Default Invoice Template -->
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="select-default-invoice-template">Select Default Invoice Template</label>
		              						<select class="select2 form-select" id="select-default-invoice-template">
		              						  <option>Select Default Invoice Template</option>
		              						</select>
		              					  </div>
		              					</div>
              
		              					<!-- Select Default Quote Template -->
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              						<label class="form-label" for="select-default-quote-template">Select Default Quote Template</label>
		              						<select class="select2 form-select" id="select-default-quote-template">
		              						  <option>Select Default Quote Template</option>
		              						</select>
		              					  </div>
		              					</div>
              
		              					<!-- Select Default Timesheet -->
		              					<div class="col-md-6 col-12">
		              						<div class="mb-4">
		              							<label class="form-label" for="select-default-timesheet">Select Default Timesheet</label>
		              							<select class="select2 form-select" id="select-default-timesheet">
		              							  <option>Select Default Timesheet</option>
		              							</select>
		              						  </div>
		              					  </div>
              
		              					  <!-- Select Tags -->
		              					  <div class="col-md-6 col-12">
		              						<div class="mb-4">
		              							<label class="form-label" for="tags-column">
		              								Tags
		              							</label>
		              							<textarea class="form-control" rows="3" placeholder="" name="tags" id="tags-column"></textarea>
		              						</div>
		              					  </div>
              
		              					
		              			   <!-- Department Phone Number -->
		              				  <div class="row">
		              					<div class="col-md-12">
		              					  <h2>Department Phone Number</h2>
		              					  <div class="col-lg-6">
		              						<div class="mb-4">
		              						  <label class="form-label" for="service-name">
		              							Company Phone Number 
		              						  </label>
		              						  <div class="form-check">
		              							<input class="form-check-input" id="phone-number-ceo" name="phone-number-ceo" type="checkbox" tabindex="" />
		              							<label class="form-check-label" for="phone-number-ceo">CEO: 442342311</label>
		              						  </div>
		              						  <div class="form-check">
		              							<input class="form-check-input" id="phone-number-sales" name="phone-number-ceo" type="checkbox" tabindex="" />
		              							<label class="form-check-label" for="phone-number-sales"> Sales: 01232312</label>
		              						  </div>
		              						  <div class="form-check">
		              							<input class="form-check-input" id="phone-number-supports" name="Weekly" type="checkbox" tabindex="" />
		              							<label class="form-check-label" for="phone-number-supports"> Supports: 442342311</label>
		              						  </div>
		              						</div>
		              					  </div>
		              					</div>
		              				  </div>
              
		              				  <div class="row ms-1">
		              				  <div class="col-8 border">
		              					<div class="row mt-3">
		              				   <div class="col-5 ">
		              					<div class="mb-4">
		              					  <label class="form-label" for="title">Title</label>
		              					  <input
		              						type="text"
		              						id="title"
		              						class="form-control"
		              						name=""
		              						placeholder="Enter Title"
		              						/>  
		              					</div>
		              				   </div>
		              				   <div class="col-5 ">
		              					<div class="mb-4">
		              					  <label class="form-label" for="phone">Phone Number</label>
		              					  <input
		              						type="text"
		              						id="phone"
		              						class="form-control"
		              						name=""
		              						placeholder="Enter Phone Number"
		              						/>  
		              					</div>
		              				   </div>
		              				   <div class="col-2 mt-5"><button class="btn btn-primary rounded">Add</button></div>
		              				  </div>
		              				  
		              				  </div>
		              				  <div class="col-md-8 d-flex justify-content-end col-8 md-2 mt-4 mb-4">
		              					<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
		              					  
		              						<span>Add Phone Number</span>
		              					</button>
		              				  </div>
		              				  </div>
		              					<!-- Default Billing Address -->
		              					 <div class="col-md-6 col-12 mt-4">
		              					  <div class="mb-4">
		              					  <div><h2>Default Billing Address</h2></div>
		              					</div>
		              					</div>
              
		              					<div class="col-md-6 col-12 mt-4">
		              					  <div class="mb-4">
		              					  <div><h2>Default Service Address</h2></div>
		              					</div>
		              					</div>
              
		              					<div class="col-md-6 col-12">
		              					  <div class="mb-4">
		              					     <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" data-bs-toggle="modal" data-bs-target="#addAddressModal">
		              					      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
		              					     	<use xlink:href="/css/sprite.svg#plus"></use>
		              					      </svg>
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
		              						 <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2"  data-bs-toggle="modal" data-bs-target="#addAddressModal">
		              						 	<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
		              						 		<use xlink:href="/css/sprite.svg#plus"></use>
		              						 	 </svg> 
		              						 	<span>Add Address</span>
		              						 </button>                             
		              					  </div>
		              					</div>
		              					
		              					  <!-- #Address Tables-->
		              					  <div class="col-md-12 d-flex col-12 mb-4 gap-4">
		              					<!-- #Address left  Table-->
		              				   <div class="col-md-6 col-12 mb-4 border">
		              					<table class="table table-hover">
		              					  <thead>
		              						  <th>#</th>
		              						  <th>Address</th>
		              						  <th></th>
		              						 
		              						  
		              					  </thead>
		              					  <tbody>
		              						  <tr class="odd">
		              							  <td>
		              								  1
		              							  </td>
		              							  <td>
		              								  <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
		              							  </td>
              
		              							  <!-- for active class row integrated with JS  -->
		              							  <td class="allign-middle">
													<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
														<use xlink:href="/css/common-icons.svg#white-tick"></use>
													</svg>
		              							  </td>
		              						</tr>
		              						  <tr class="even">
		              							  <td>
		              								  2
		              							  </td>
		              							  <td>
		              								  <p>Mrs Smith 98 Shirley Street Appartment No. 45 PIMPAMA QLD 4209 AUSTRALIA</p>
		              							  </td>
              
		              							  <!-- for active class row integrated with JS  -->
		              							  <td class="allign-middle">
													<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
														<use xlink:href="/css/common-icons.svg#white-tick"></use>
													</svg>
		              							  </td>
		              						</tr>
		              						  <tr class="odd">
		              							  <td>
		              								  3
		              							  </td>
		              							  <td>
		              								  <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
		              							  </td>
		              							  <!-- for active class row integrated with JS  -->
		              							  <td class="allign-middle">
													<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
														<use xlink:href="/css/common-icons.svg#white-tick"></use>
													</svg>
		              							  </td>
		              							</tr>
		              					  </tbody>
		              				  </table>
		              				  </div>
              
		              				  <!-- #Address Tables left-->
		              				  <div class="col-md-6 col-12 mb-4 border">
		              					<table class="table table-hover">
		              					 <thead>
		              						 <th>#</th>
		              						 <th>Address</th>
		              						 <th></th>
		              						 
		              					 </thead>
		              					 <tbody>
		              						 <tr class="odd">
		              							 <td>
		              								 1
		              							 </td>
		              							 <td>
		              								 <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
		              							 </td>
              
		              							 <!-- for active class row integrated with JS  -->
		              							 <td class="allign-middle">
		              							  <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<use xlink:href="/css/common-icons.svg#white-tick"></use>
												</svg>
		              							</td>
		              					   </tr>
		              						 <tr class="even">
		              							 <td>
		              								 2
		              							 </td>
		              							 <td>
		              								 <p>Mrs Smith 98 Shirley Street Appartment No. 45 PIMPAMA QLD 4209 AUSTRALIA</p>
		              							 </td>
              
		              							 <!-- for active class row integrated with JS  -->
		              							 <td class="allign-middle">
		              							  <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<use xlink:href="/css/common-icons.svg#white-tick"></use>
												</svg>
		              							</td>
		              					   </tr>
		              						 <tr class="odd">
		              							 <td>
		              								 3
		              							 </td>
		              							 <td>
		              								 <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
		              							 </td>
              
		              							 <!-- for active class row integrated with JS  -->
		              							 <td class="allign-middle">
		              							  <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
													<use xlink:href="/css/common-icons.svg#white-tick"></use>
												</svg>
		              							</td>
		              					   </tr>
		              					 </tbody>
		              				 </table>
		              					</div>
		              					 
		              				   </div><!-- Address Tables end-div -->
		              					  
		              					<!-- Check-boxes -->
		              	              <div class="col-md-12 col-12 mt-5 mb-4">
		              	            	<div class="col-md-12 col-12 mb-4">
		              	            	<input class="form-check-input" type="checkbox" value="hide-user-details-providers" id="hide-user-details-providers">
		              	            	<label class="form-check-label" for="hide-user-details-providers">
		              	            	  Hide All Comapny Users' Details from Providers
		              	            	</label>
		              	              </div>
		              	              </div>
		              				  <!-- ....cancel/next (buttons)... -->
		              					<div class="col-12 justify-content-center form-actions d-flex gap-2">
		              					  <button type="button"
		              						  class="btn btn-outline-dark rounded px-4 py-2" wire:click.prevent="showList">Cancel</button>
		              						  <button type="submit"
		              						  class="btn btn-primary rounded px-4 py-2">Save & Exit</button>
		              					  <button type="submit"
		              						  class="btn btn-primary rounded px-4 py-2" x-on:click="$wire.switch('service-catalog')">Next</button>
	              
		              			        </div>
		              				   </div>
		              				   </div>
		              			</form>				
		                      	  </div>	
		                        </section>
		            </div><!-- end Customer Info  -->


	              	<!--BEGIN: Service Catalog-->
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
														 <!-- Icon Help -->
														 <div class="d-flex actions gap-3 justify-content-end mb-3">
															<div class="d-flex gap-2 align-items-center">
																<a href="#" title="Customers" aria-label="Customers" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Customers" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
																	  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#user-group"></use>
																	</svg>
																</a>
															  <span class="text-sm">
																Customers
															  </span>
															</div>
															<div class="d-flex gap-2 align-items-center">
																<a href="#" title="Customize Pricing" aria-label="Customize Pricing" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																	<svg aria-label="Customize Pricing" class="fill" width="21" height="20" viewBox="0 0 21 20"fill="none"
																	  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#building"></use>
																	</svg>
																</a>
															  <span class="text-sm">
																Customize Pricing
															  </span>
															</div>
														  </div>
														  <!-- /Icon Help -->
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 justify-content-center form-actions d-flex gap-2">
											<button type="button" class="btn btn-outline-dark rounded px-4 py-2" x-on:click="$wire.switch('department-info')">
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
		            </div><!--End: Service Catalog-->

		            <!--BEGIN: Drive Documents Pane-->
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
                     				<div class="col-md-10 mb-md-2 mx-5">
                     				<div class="d-flex justify-content-center">
                     				  <h3>Upload Document</h3>
                     				</div>
                     					 <div class="row mt-3">
                     					  <div class="col-md-3"></div>
                     					  <div class="col-md-2  text-center "> <div class=" border border-primary rounded ">
                     						<svg width="40" height="36" viewBox="0 0 40 36" class="mt-2" fill="none" xmlns="http://www.w3.org/2000/svg">
                     						  <path d="M16.35 23.4921L9.702 35.2381H33.35L40 23.4921H16.35ZM11.73 2.54302L0 23.3237L6.744 35.2342L18.476 14.4535L11.73 2.54302ZM38.89 21.5344L26.698 0H13.208L25.384 21.5344H38.89Z" fill="url(#paint0_linear_2957_105057)"/>
                     						  <defs>
                     						  <linearGradient id="paint0_linear_2957_105057" x1="20" y1="0" x2="36.0479" y2="0" gradientUnits="userSpaceOnUse">
                     						  <stop stop-color="#213969"/>
                     						  <stop offset="1" stop-color="#204387"/>
                     						  </linearGradient>
                     						  </defs>
                     						  </svg>  
                     						<p class="text-primary mt-2">Attach from Company Drive </p> 
                     					   </div></div>
                     					  <div class="col-md-2  rounded text-center"><div class=" border-primary rounded ">
                     						<svg width="40" height="36" viewBox="0 0 40 36" class="mt-2" class="mt-2" fill="none" xmlns="http://www.w3.org/2000/svg">
                     						  <path d="M16.35 23.4921L9.702 35.2381H33.35L40 23.4921H16.35ZM11.73 2.54302L0 23.3237L6.744 35.2342L18.476 14.4535L11.73 2.54302ZM38.89 21.5344L26.698 0H13.208L25.384 21.5344H38.89Z" fill="url(#paint0_linear_2957_105057)"/>
                     						  <defs>
                     						  <linearGradient id="paint0_linear_2957_105057" x1="20" y1="0" x2="36.0479" y2="0" gradientUnits="userSpaceOnUse">
                     						  <stop stop-color="#213969"/>
                     						  <stop offset="1" stop-color="#204387"/>
                     						  </linearGradient>
                     						  </defs>
                     						  </svg>
                     						  
                     						<p class="text-primary mt-2">Attach from Google Drive </p> 
                     					   </div></div>
                     					  <div class="col-md-2 rounded text-center"><div class=" border border-primary rounded ">
                     						<svg width="35" height="35" viewBox="0 0 35 35" class="mt-3" fill="none" xmlns="http://www.w3.org/2000/svg">
                     						  <path d="M32.0833 1.1498e-06H25.5208C25.3274 1.1498e-06 25.142 0.076824 25.0052 0.213569C24.8685 0.350315 24.7917 0.535781 24.7917 0.729168V8.75C24.7917 9.13678 24.638 9.50771 24.3645 9.7812C24.091 10.0547 23.7201 10.2083 23.3333 10.2083H11.7214C11.3429 10.2143 10.9763 10.0765 10.6955 9.82281C10.4147 9.56906 10.2406 9.21824 10.2083 8.84115C10.1959 8.64211 10.2244 8.44263 10.292 8.25504C10.3597 8.06745 10.4652 7.89573 10.6019 7.75051C10.7385 7.60528 10.9036 7.48964 11.0867 7.41072C11.2699 7.3318 11.4672 7.29128 11.6667 7.29167H21.875V0.729168C21.875 0.535781 21.7982 0.350315 21.6614 0.213569C21.5247 0.076824 21.3392 1.1498e-06 21.1458 1.1498e-06H10.8099C10.427 -0.000339916 10.0478 0.0752001 9.69421 0.222257C9.34065 0.369313 9.01973 0.584972 8.75 0.856772L0.856772 8.75C0.584972 9.01973 0.369313 9.34065 0.222257 9.69421C0.0752001 10.0478 -0.000339916 10.427 1.1498e-06 10.8099V32.0833C1.1498e-06 32.8569 0.307292 33.5987 0.854273 34.1457C1.40125 34.6927 2.14312 35 2.91667 35H32.0833C32.8569 35 33.5987 34.6927 34.1457 34.1457C34.6927 33.5987 35 32.8569 35 32.0833V2.91667C35 2.14312 34.6927 1.40125 34.1457 0.854273C33.5987 0.307292 32.8569 1.1498e-06 32.0833 1.1498e-06ZM17.5 26.25C16.4905 26.25 15.5037 25.9506 14.6643 25.3898C13.8249 24.8289 13.1707 24.0318 12.7844 23.0991C12.398 22.1665 12.297 21.1402 12.4939 20.1501C12.6909 19.16 13.177 18.2505 13.8908 17.5366C14.6046 16.8228 15.5141 16.3367 16.5042 16.1397C17.4943 15.9428 18.5206 16.0439 19.4533 16.4302C20.3859 16.8165 21.1831 17.4707 21.744 18.3101C22.3048 19.1495 22.6042 20.1363 22.6042 21.1458C22.5994 22.4981 22.0601 23.7935 21.1039 24.7497C20.1477 25.7059 18.8522 26.2452 17.5 26.25Z" fill="url(#paint0_linear_2957_105064)"/>
                     						  <defs>
                     						  <linearGradient id="paint0_linear_2957_105064" x1="17.5" y1="0" x2="31.5419" y2="0" gradientUnits="userSpaceOnUse">
                     						  <stop stop-color="#213969"/>
                     						  <stop offset="1" stop-color="#204387"/>
                     						  </linearGradient>
                     						  </defs>
                     						  </svg>
                     						<p class="mt-3 text-primary py-1">Attach from Disk</p> 
                     						
                     					   </div></div>
                     					  <div class="col-md-2"></div>
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
                     
                     			  
                     		  <div class="col-12 justify-content-center form-actions d-flex gap-2">
                     			<button type="button"
                     				class="btn btn-outline-dark rounded px-4 py-2" x-on:click="$wire.switch('service-catalog')">Back</button>
                     			<button type="submit"
                     				class="btn btn-primary rounded px-4 py-2" wire:click.prevent="showList">Submit</button>
                     
                     	        </div>
                     			  </div>
                     		  </div>
                     			</form>
                     		  </div>
                     		</div>
                     	
                     
                       </section>
        
		            </div><!--End: Drive Documents Pane-->
	            </div><!-- tab-content-end    -->
		    </div><!-- Basic Floating Label Form section end -->
	      </div><!-- ...card-body... -->
		   <!-- END: Steps -->
		  </div>
		</div>
	</div>
	  @include('panels.common.customers')
	  @include('modals.company-business-hours')
	  @include('modals.common.add-address')
	  @include('modals.department-manager')
</div>
