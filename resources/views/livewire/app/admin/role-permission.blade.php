<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if ($showForm)
	@livewire('app.admin.forms.role-permission-form')
	@else
	<section id="multiple-column-form">
		<div class="content-header row  mb-3">
		  <div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
			  <div class="col-12">
				<h1 class="content-header-title float-start mb-0">Roles & Permissions</h1>
				<div class="breadcrumb-wrapper">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item">
					  <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
						<x-icon name="home"/>
					  </a>
					</li>
					<li class="breadcrumb-item">
					  <a href="#">
						Settings
					  </a>
					</li>
					<li class="breadcrumb-item">
					  <span class="text-secondary">Roles & Permissions</span>
					</li>
				  </ol>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="row">
		  <div class="col-12">
			<div class="card">
			  <div class="card-body">
				  <div class="row mt-3">
					<div class="col-md-12 mb-md-2">
					  <div class="row mb-4 mt-2">
						<div class="col-md-5">
						  <h2>List of Roles and Permissions</h2>
						</div>
						<div class="col-md-3 ms-auto text-end">
						  <a href="javascript:void(0)" class="btn btn-primary rounded" wire:click="showForm">
							<x-icon name="plus"/>
							<span class="ms-2">Add New Role</span></a>
						</div>
						</div>
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
					<div class="table-responsive">
						<table id="" class="table table-hover" aria-label="Roles and Permissions">
						  <thead>
							  <tr role="row">
								  <th scope="col">Name</th>
								  <th scope="col" class="text-center">No. of Permissions</th>
								  <th scope="col" class="text-center">Users</th>
								  <th scope="col" class="text-center">Date</th>
								  <th scope="col">Action</th>

							</tr>
						  </thead>
							<tbody>
							  <tr role="row" class="odd">
								<td>Agency Admin</td>
								<td class="text-center">5</td>
								<td class="text-center">2</td>
								<td class="text-center">04/22/2016</td>
								<td>
								  <div class="d-flex actions">
									<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
										<x-icon name="pencil"/>
									</a>
									<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
										<x-icon name="recycle-bin"/>
									</a>
								  </div>
								</td>
							  </tr>

							  <tr role="row" class="even">
								<td>All-Access Service Coordinator </td>
								<td class="text-center">5</td>
								<td class="text-center">2</td>
								<td class="text-center">04/22/2016</td>
								 <td>
									<div class="d-flex actions">
										<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
										</a>
									  </div>
								</td>
							  </tr>

							  <tr role="row" class="odd">
								<td>Restricted Service Coordinator</td>
								<td class="text-center">5</td>
								<td class="text-center">2</td>
								<td class="text-center">04/22/2016</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
										</a>
									  </div>
								</td>
							  </tr>

							  <tr role="row" class="even">
								<td>All-Access Accounts Payable</td>
								<td class="text-center">5</td>
								<td class="text-center">2</td>
								<td class="text-center">04/22/2016</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
										</a>
									  </div>
								</td>
							  </tr>

							  <tr role="row" class="odd">
								<td>Restricted Accounts Payable</td>
								<td class="text-center">5</td>
								<td class="text-center">2</td>
								<td class="text-center">04/22/2016</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
										</a>
									  </div>
								</td>
							  </tr>

							  <tr role="row" class="even">
								<td>All-Access Accounts Billable</td>
								<td class="text-center">5</td>
								<td class="text-center">2</td>
								<td class="text-center">04/22/2016</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
										</a>
									  </div>
								</td>
							  </tr>

							  <tr role="row" class="odd">
								<td>Restricted Accounts Billable</td>
								<td class="text-center">5</td>
								<td class="text-center">2</td>
								<td class="text-center">04/22/2016</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
										</a>
									  </div>
								</td>
							  </tr>
							 </tbody>
							</table>
						</div>
                    </div>
				  <div class="d-flex justify-content-between mt-4">
					<div>
					  <p class="fw-semibold">Showing 1 to 5 of 30 entries</p>
					</div>
					<nav aria-label="Page Navigation">
					  <ul class="pagination">
						<li class="page-item">
						  <a class="page-link" href="#" aria-label="Previous">Previous
							<span aria-hidden="true">&laquo;</span>
						  </a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item active"><a class="page-link" href="#">4</a></li>
						<li class="page-item">
						  <a class="page-link" href="#" aria-label="Next">Next
							<span aria-hidden="true">&raquo;</span>
						  </a>
						</li>
					  </ul>
					</nav>
				  </div>
                  {{-- icon legend bar start --}}
                  <div style="margin-right:10px" class="d-flex actions gap-3 justify-content-end mb-2">
                    <div class="d-flex gap-2 align-items-center">
                        <a href="#" title="Edit staff" aria-label="Edit staff" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="pencil"/>
                        </a>
                        <span class="text-sm">
                        Edit staff
                        </span>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                           <x-icon name="recycle-bin"/>
                          </a>
                        <span class="text-sm">
                            Delete                                                        </span>
                    </div>

                    </div>
                    {{-- icon legend bar end --}}
			  </div>

			</div>
		  </div>
		</div>
	  </section>
	@endif
</div>
