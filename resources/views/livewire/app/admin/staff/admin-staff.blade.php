<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
		@livewire('app.admin.staff.admin-staff-form')
	@elseif($showProfile)
		@livewire('app.common.forms.profile')
	@else
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">All Admin Staff</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
									<svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23">
										<use xlink:href="/css/common-icons.svg#home"></use>
									</svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">
									Settings
								</a>
							</li>
							<li class="breadcrumb-item">
								<span class="text-secondary">All Admin Staff</span>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-body">
		<div class="d-flex justify-content-end mt-4 mb-3">
			<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
				<svg class="mx-2" aria-label="Add Reimbursement" width="20" height="20" viewBox="0 0 20 20">
					<use xlink:href="/css/common-icons.svg#plus"></use>
				</svg>
				<span class="fw-normal">Add Admin Staff</span>
			</button>
		</div>
		<div class="d-flex justify-content-between mb-2">
			<div class="d-inline-flex align-items-center gap-4">
				<label for="show_records_number" class="form-label">Show</label>
				<select class="form-select py-2" id="show_records_number">
					<option selected>10</option>
					<option>15</option>
					<option>20</option>
					<option>25</option>
				</select>
			</div>
			<div class="d-inline-flex align-items-center gap-4">
				<label for="search" class="form-label fw-semibold">Search</label>
				<input type="search" class="form-control py-2" id="search" name="search" placeholder="Search here" autocomplete="on"/>
			</div>
		</div>
		{{-- Hoverable rows start --}}
	<div class="row" id="table-hover-row">
		<div class="col-12">
			<div class="card">
				<div class="table-responsive">
					<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
						<thead>
							<tr role="row">
								<th scope="col" class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
								</th>
								<th scope="col">Admin</th>
								<th scope="col">Phone Number</th>
								<th scope="col">Status</th>
								<th scope="col">Actions</th>
							</tr>
						</thead>
						<tbody class="align-middle">
							<tr role="row" class="odd">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Dori Griffiths</h6>
											<p>dorigriffit@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
										<label class="form-check-label">
											Deactivate
										</label>
										<label class="form-check-label">Active</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
							<tr role="row" class="even">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-11.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Ramon Miles</h6>
											<p>ramonmiles@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status" checked>
										<label class="form-check-label">
											Active
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
							<tr role="row" class="odd">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Dori Griffiths</h6>
											<p>dorigriffit@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
										<label class="form-check-label">
											Deactivate
										</label>
										<label class="form-check-label">Active</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
							<tr role="row" class="even">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-11.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Ramon Miles</h6>
											<p>ramonmiles@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status" checked>
										<label class="form-check-label">
											Active
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
							<tr role="row" class="odd">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Dori Griffiths</h6>
											<p>dorigriffit@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
										<label class="form-check-label">
											Deactivate
										</label>
										<label class="form-check-label">Active</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
							<tr role="row" class="even">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Dori Griffiths</h6>
											<p>dorigriffit@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
										<label class="form-check-label">
											Deactivate
										</label>
										<label class="form-check-label">Active</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
							<tr role="row" class="odd">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Dori Griffiths</h6>
											<p>dorigriffit@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
										<label class="form-check-label">
											Deactivate
										</label>
										<label class="form-check-label">Active</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
							<tr role="row" class="even">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Dori Griffiths</h6>
											<p>dorigriffit@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
										<label class="form-check-label">
											Deactivate
										</label>
										<label class="form-check-label">Active</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
							<tr role="row" class="odd">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Dori Griffiths</h6>
											<p>dorigriffit@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
										<label class="form-check-label">
											Deactivate
										</label>
										<label class="form-check-label">Active</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
							<tr role="row" class="even">
								<td class="text-center">
									<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
								</td>
								<td>
									<div class="row g-2">
										<div class="col-md-2">
											<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
										</div>
										<div class="col-md-10 mt-4">
											<h6 class="fw-semibold">Dori Griffiths</h6>
											<p>dorigriffit@gmail.com</p>
										</div>
									</div>
								</td>
								<td>
									<p>(923) 023-9683</p>
								</td>
								<td>
									<div class="form-check form-switch">
										<input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
										<label class="form-check-label">
											Deactivate
										</label>
										<label class="form-check-label">Active</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#pencil"></use>
											</svg>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                            </svg>
										</a>
										<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
												<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
											</svg>
										</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<div class="d-flex justify-content-between">
		<div>
			<p class="fw-semibold">Showing 1 to 5 of 100 entries</p>
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
</div> {{-- icon legend bar start --}}
<div class="d-flex actions gap-3 justify-content-end mb-2">
    <div class="d-flex gap-2 align-items-center">
        <a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
            <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
				<use xlink:href="/css/common-icons.svg#pencil"></use>
			</svg>
        </a>
        <span class="text-sm">
        Edit staff
        </span>
    </div>
    <div class="d-flex gap-2 align-items-center">
        <a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
            <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
				<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
			</svg>
          </a>
        <span class="text-sm">Delete</span>
    </div>
    <div class="d-flex gap-2 align-items-center">
        <a href="#" title="View Team" aria-label="view Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
			<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
			xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
		  </svg>
        </a>
        <span class="text-sm">
        View staff
        </span>
    </div>
    </div>
    {{-- icon legend bar end --}}
	@endif
</div>
