<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if ($showForm)
	@livewire('app.common.forms.department-form') {{-- Show Add / Edit Form --}}
	 {{-- Show Add / Edit Form --}}
	@elseif ($showProfile)
	    @livewire('app.common.department-profile')
	@else
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">All Departments</h1>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
										<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
									</a>
								</li>
								<li class="breadcrumb-item">
									Customers
								</li>
								<li class="breadcrumb-item">
									All Departments
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body">
			<div class="d-flex justify-content-end mt-4 mb-3">
				<a href="javascript:void(0)" type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
					<svg aria-label="add provider" width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#plus"></use>
                    </svg>
					<span>Add Department</span>
				</a>
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
			<!-- Hoverable rows start -->
			<div class="row" id="table-hover-row">
<div class="col-12">
<div class="card">
  <div class="table-responsive">
	<table id="unassigned_data" class="table table-hover" aria-label="Department Table">
	  <thead>
		<tr role="row">
		  <th scope="col" class="text-center">
			<input class="form-check-input" type="checkbox" value="" aria-label="Select All Departments">
		  </th>
		  <th scope="col">Name</th>
		  <th scope="col">Phone Number</th>
		  <th scope="col" >Department supervisor's</th>
		  <th scope="col" class="text-center">Department User</th>
		  <th scope="col">Action</th>
		</tr>
	  </thead>
	  <tbody>
		<tr role="row" class="odd">
		  <td class="text-center">
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department ">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td >
			<p>(923) 023-9683</p>
		  </td>
		  <td >
		   <a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		  <td class="text-center">5</td>
		  <td>
			<div class="d-flex actions">
				<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="/css/common-icons.svg#pencil"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
					<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
					  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
						<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
					</svg>
				</a>
			</div>
		  </td>
		</tr>
		<tr role="row" class="even">
		  <td class="text-center">
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td>
			<p>(923) 023-9683</p>
		  </td>
		  <td >
			<a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		   <td class="text-center">5</td>
		  <td>
			<div class="d-flex actions">
				<div class="d-flex actions">
					<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
							<use xlink:href="/css/common-icons.svg#pencil"></use>
						</svg>
					</a>
					<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
						<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						</svg>
					</a>
					<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
							<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
						</svg>
					</a>
				</div>
			</div>
		  </td>
		</tr>
		<tr role="row" class="odd">
		  <td class="text-center">
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td>
			<p>(923) 023-9683</p>
		  </td>
		  <td >
			<a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		   <td class="text-center">5</td>
		  <td>
			<div class="d-flex actions">
				<div class="d-flex actions">
					<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
							<use xlink:href="/css/common-icons.svg#pencil"></use>
						</svg>
					</a>
					<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
						<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						</svg>
					</a>
					<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
							<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
						</svg>
					</a>
				</div>
			</div>
		  </td>
		</tr>
		<tr role="row" class="even">
		  <td >
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td>
			<p>(923) 023-9683</p>
		  </td>
		  <td >
			<a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		   <td class="text-center">5</td>
		  <td>
			<div class="d-flex actions">
				<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="/css/common-icons.svg#pencil"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
					<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
					  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
						<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
					</svg>
				</a>
			</div>
		  </td>
		</tr>
		<tr role="row" class="odd">
		  <td >
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td>
			<p>(923) 023-9683</p>
		  </td>
		  <td >
			<a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		   <td class="text-center">5</td>
		  </td>
		  <td>
			<div class="d-flex actions">
				<div class="d-flex actions">
					<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
							<use xlink:href="/css/common-icons.svg#pencil"></use>
						</svg>
					</a>
					<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
						<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						</svg>
					</a>
					<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
							<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
						</svg>
					</a>
				</div>
			</div>
		  </td>
		</tr>
		<tr role="row" class="even">
		  <td>
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td>
			<p>(923) 023-9683</p>
		  </td>
		  <td >
			<a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		   <td class="text-center">5</td>
		  <td>
			<div class="d-flex actions">
				<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="/css/common-icons.svg#pencil"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
					<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
					  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
						<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
					</svg>
				</a>
			</div>
		  </td>
		</tr>
		<tr role="row" class="odd">
		  <td >
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td>
			<p>(923) 023-9683</p>
		  </td>
		  <td >
			<a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		   <td class="text-center">5</td>
		  <td>
			<div class="d-flex actions">
				<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="/css/common-icons.svg#pencil"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
					<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
					  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
						<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
					</svg>
				</a>
			</div>
		  </td>
		</tr>
		<tr role="row" class="even">
		  <td >
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td>
			<p>(923) 023-9683</p>
		  </td>
		  <td >
			<a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		   <td class="text-center">5</td>
		  <td>
			<div class="d-flex actions">
				<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="/css/common-icons.svg#pencil"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
					<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
					  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
						<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
					</svg>
				</a>
			</div>
		  </td>
		</tr>
		<tr role="row" class="odd">
		  <td >
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td>
			<p>(923) 023-9683</p>
		  </td>
		  <td >
			<a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		   <td class="text-center">5</td>
		  <td>
			<div class="d-flex actions">
				<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="/css/common-icons.svg#pencil"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
					<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
					  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
						<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
					</svg>
				</a>
			</div>
		  </td>
		</tr>
		<tr role="row" class="even">
		  <td class="text-center">
			<input class="form-check-input" type="checkbox" value="" aria-label="Select Department">
		  </td>
		  <td>
			<div class="row g-2">
			  <div class="col-md-2">
				<img src="/tenant/images/portrait/small/image4.png" class="img-fluid rounded-circle" alt="Department Profile Image">
			  </div>
			  <div class="col-md-10">
				<h6 class="fw-semibold">Testing Company</h6>
				<p>www.software.com</p>
			  </div>
			</div>
		  </td>
		  <td>
			<p>(923) 023-9683</p>
		  </td>
		  <td >
			<a href="#"> Thomas Charles, Wade Dave, Seth IvanRiley Gilbert </a></td>
		   <td class="text-center">5</td>
		  <td>
			<div class="d-flex actions">
				<a href="#" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon">
					<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
						<use xlink:href="/css/common-icons.svg#pencil"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
					<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
					  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
					</svg>
				</a>
				<a href="javascript:void(0)" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
  <div class="d-flex justify-content-between m-4">
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
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item active"><a class="page-link" href="#">4</a></li>
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
<!-- Hoverable rows end -->

</div>
</div>
	@endif
    @include('modals.company-business-hours')
    @include('modals.common.add-address')
    @include('modals.department-manager')
</div>
