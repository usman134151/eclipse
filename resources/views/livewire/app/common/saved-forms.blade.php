<div>
	<div>
		<div id="loader-section" class="loader-section" wire:loading>
			<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			  <div class="spinner-border" role="status" aria-live="polite">
				  <span class="visually-hidden">Loading...</span>
			  </div>
			</div>
		  </div>
		  @if($showForm)
			@livewire('app.common.forms.add-customized-form') <!--show add/edit form-->
		  @else
			  <!-- Saved Forms section start -->
			  <section id="multiple-column-form">
					<div class="row">
					  <div class="col-12">
						<div class="card">
						  <div class="card-body">
							<form class="form">
							  <div class="row">
								<div class="col-md-12 mb-md-2">
								  <div class="row">
								  <div class="col-md-3">
									<h1>Saved Forms</h1>
								  </div>
								  <div class="col-md-3 ms-auto text-end">
									<a href="#" wire:click="showForm" class="btn btn-primary rounded">Create New Form</a>
								  </div>
								  <p>Here are the forms you've created. Deactivate forms to save them for later.</p>
								</div>
								</div>
								</div>
								<div class="table-responsive">
								  <table id="coupons" class="table table-hover" aria-label="coupons">
									<thead>
										<tr role="row">
											<th scope="col">FORM TYPES</th>
											<th scope="col">STATUS</th>
											<th scope="col">Action</th>
									  </tr>
									</thead>
									<tbody>
									  <tbody>
										<tr role="row" class="odd">
										  <td>Customer Request Form</td>
										  <td><button class="btn btn-success btn-sm">Activated</button></td>
										  <td>
											<div class="d-flex actions">
											  <div class="dropdown ac-cstm">
												<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
													<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
													xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
												 </svg>
												</a>
												<div class="tablediv dropdown-menu">
												  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
												  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

												</div>
											  </div>
											</div>
										  </td>
										</tr>
										<tr role="row" class="even">
										<td>Customer Request Form</td>
										  <td><button class="btn btn-warning  btn-sm">Deactivated</button></td>
										  <td>
											<div class="d-flex actions">
											  <div class="dropdown ac-cstm">
												<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
													<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
													xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
												 </svg>
												</a>
												<div class="tablediv dropdown-menu">
												  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
												  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

												</div>
											  </div>
											</div>
										  </td>
										</tr>
										<tr role="row" class="odd">
										  <td>Customer Request Form</td>
										  <td><button class="btn btn-success  btn-sm">Activated</button></td>
										  <td>
											<div class="d-flex actions">
											  <div class="dropdown ac-cstm">
												<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
													<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
													xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
												   </svg>
												</a>
												<div class="tablediv dropdown-menu">
												  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
												  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

												</div>
											  </div>
											</div>
										  </td>
										</tr>
										<tr role="row" class="even">
											<td>Customer Request Form</td>
										  <td><button class="btn btn-success  btn-sm">Activated</button></td>
										  <td>
											<div class="d-flex actions">
											  <div class="dropdown ac-cstm">
												<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
													<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
													xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
												  </svg>
												</a>
												<div class="tablediv dropdown-menu">
												  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
												  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

												</div>
											  </div>
											</div>
										  </td>
										</tr>
										<tr role="row" class="odd">
											<td>Customer Request Form</td>
										  <td><button class="btn btn-success  btn-sm">Activated</button></td>
										  <td>
											<div class="d-flex actions">
											  <div class="dropdown ac-cstm">
												<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
													<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
													xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
												    </svg>
												</a>
												<div class="tablediv dropdown-menu">
												  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
												  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

												</div>
											  </div>
											</div>
										  </td>
										</tr>
										<tr role="row" class="even">
											<td>Customer Request Form</td>
										  <td><button class="btn btn-success  btn-sm">Activated</button></td>
										  <td>
											<div class="d-flex actions">
											  <div class="dropdown ac-cstm">
												<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
													<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
													xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
												    </svg>
												</a>
												<div class="tablediv dropdown-menu">
												  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
												  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

												</div>
											  </div>
											</div>
										  </td>
										</tr>
										<tr role="row" class="odd">
											<td>Customer Request Form</td>
										  <td><button class="btn btn-success  btn-sm">Activated</button></td>
										  <td>
											<div class="d-flex actions">
											  <div class="dropdown ac-cstm">
												<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
													<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
													xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
												    </svg>
												</a>
												<div class="tablediv dropdown-menu">
												  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
												  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

												</div>
											  </div>
											</div>
										  </td>
										</tr>
										<tr role="row" class="even">
											<td>Customer Request Form</td>
										  <td><button class="btn btn-success  btn-sm">Activated</button></td>
										  <td>
											<div class="d-flex actions">
											  <div class="dropdown ac-cstm">
												<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
													<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
													xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
												    </svg>
												</a>
												<div class="tablediv dropdown-menu">
												  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
												  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

												</div>
											  </div>
											</div>
										  </td>
										</tr>
										<tr role="row" class="odd">
											<td>Customer Request Form</td>
										  <td><button class="btn btn-success  btn-sm">Activated</button></td>
										  <td>
											<div class="d-flex actions">
											  <div class="dropdown ac-cstm">
												<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
													<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
													xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
												   </svg>
												</a>
												<div class="tablediv dropdown-menu">
												  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
												  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

												</div>
											  </div>
											</div>
										  </td>
										</tr>
									</tbody>
									</table>


							  </div>
							</form>
                                                  {{-- icon legend bar start --}}
                      <div class="d-flex actions gap-3 justify-content-end mb-2">
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						        </svg>
                            </a>
                            <span class="text-sm">
                            View
                            </span>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" title="Deactivate" aria-label="Deactivate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Deactivate" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
							               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#cross"></use>
							            </svg>
                            </a>
                            <span class="text-sm">
                                    Deactivate                              </span>
                        </div>

                        </div>
                        {{-- icon legend bar end --}}
						  </div>
						</div>
					  </div>
					</div>
				  </section>
				  <!--Saved Forms section end -->
			@endif
</div>
