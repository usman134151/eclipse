<div x-data="{ departmentList:false, departmentProfile:false }">
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
		@livewire('app.admin.forms.add-company') {{-- Show Add / Edit Form --}}
	@elseif ($showProfile)
		@livewire('app.admin.company-profile')
	@else
	{{-- BEGIN: Content --}}
	{{-- BEGIN: Header --}}
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">All Companies</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="/" title="Go to Dashboard" aria-label="Go to Dashboard">
									<x-icon name="home"/>
								</a>
							</li>
							<li class="breadcrumb-item">
								Customers
							</li>
							<li class="breadcrumb-item">
								All Companies
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- Basic multiple column form section Start --}}
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="d-flex justify-content-between mb-3">
									<p>
										Here you can view the companies you service and the users, assignments and invoices associated with them.
									</p>
									<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
										<x-icon name="plus"/>
										<span>Add Company</span>
									</button>
								</div>
							</div>
							<div class="d-flex justify-content-between mb-2">
								<div class="d-inline-flex align-items-center gap-4">
									<label for="show_records_number" class="form-label">Show</label>
									<select class="form-select" id="show_records_number">
										<option>10</option>
										<option>15</option>
										<option>20</option>
										<option>25</option>
									</select>
								</div>
								<div class="d-inline-flex align-items-center gap-4">
									<label for="search" class="form-label fw-semibold">Search</label>
									<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
								</div>
							</div>

							<div class="table-responsive mb-2">
								<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
									<thead>
										<tr role="row">
											<th scope="col" class="text-center">
												<input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
											</th>
											<th scope="col">Name</th>
											<th scope="col">Phone Number</th>
											<th scope="col" class="text-center">Total Departments</th>
											<th scope="col" class="text-center">Company User</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										@for ($i = 1; $i <= 10; $i++)
										<tr role="row" class="{{ ($i % 2 == 0) ? 'even' : 'odd'}} align-middle">
											<td class="text-center">
												<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
											</td>
											<td>
												<div class="row g-2">
													<div class="col-md-2">
														<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Image of Team Profile">
													</div>
													<div class="col-md-10">
														<h6 class="fw-semibold">
															Testing Company
														</h6>
														<p>
															www.software.com
														</p>
													</div>
												</div>
											</td>
											<td>
												<p>(923) 023-9683</p>
											</td>
											<td class="text-center">5</td>
											<td class="text-center">5</td>
											<td>
												<div class="d-flex actions">
													<a href="#" title="Edit Company" aria-label="Edit Company" class="btn btn-sm btn-secondary rounded btn-hs-icon">
														<x-icon name="pencil"/>
													</a>
													<a href="javascript:void(0)" title="View Company" aria-label="View Company" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
														<x-icon name="view"/>
													</a>
													<div class="d-flex actions">
														<div class="dropdown ac-cstm">
															<a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" title="More Options" aria-label="More Options" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																<x-icon name="dropdown"/>
															</a>
															<div class="tablediv dropdown-menu">
																<a title="View Company Users" aria-label="View Company Users" href="#" class="dropdown-item">
																	<i class="fa fa-users"></i>
																	View Company Users
																</a>
																<a href="#" title="View Company Departments" aria-label="View Company Departments" class="dropdown-item" @click="departmentList = true">
																	<i class="fa fa-building"></i>
																	View Company Departments
																</a> 
																<a href="javascript:void(0)" aria-label="Deactivate Company" title="Deactivate Company" class="dropdown-item">
																	<i class="fa fa-trash"></i>
																	Deactivate Company
																</a>
															</div>
														</div>
													</div>
												</div>
											</td>
										</tr>
										@endfor
									</tbody>
								</table>
							</div>
							<div class="d-flex justify-content-between">
								<div>
									<p class="fw-semibold">Showing 1 to 10 of 100 entries</p>
								</div>
								<nav aria-label="Page Navigation">
									<ul class="pagination">
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item active">
											<a class="page-link" href="#">4</a>
										</li>
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
	</section>
	{{-- End: Content --}}
	@endif
	@include('panels.company.department-list')
	@include('panels.company.department-profile')
</div>