<div>
	<div class="row between-section-segment-spacing">
		<div class="col-lg-12">
			<h2>Admin-Staff Team Permissions</h2>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="permission-radio-group" id="default-permissions">
				<label class="form-check-label" for="default-permissions">
					Default to Admin-Staff Individual Permissions
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="permission-radio-group" id="set-permissions" checked>
				<label class="form-check-label" for="set-permissions">
					Set Admin-Staff Team Permissions
				</label>
			</div>
		</div>
	</div>
	<div class="row between-section-segment-spacing">
		<div class="col-12">
		<div class="accordion" id="accordionManageUserAccess">
		  <div class="accordion-item">
			<div id="headingCompaniesCustomerAccess">
			  <div class="accordion-button justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapseCompaniesCustomerAccess" aria-expanded="false" aria-controls="collapseCompaniesCustomerAccess">
				<div>Companies & Customer Access</div>
				<a href="#" class="btn btn-primary rounded me-5">
					<svg aria-label="add customer" width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#plus"></use>
                    </svg>
					<span class="ms-2">Add Customer </span>
				</a>
			  </div>
			</div>
			<div id="collapseCompaniesCustomerAccess" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
			  <div class="accordion-body p-0">
				<div class="d-flex justify-content-between my-2">
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="show_records" class="form-label mb-0">Show</label>
					<select class="form-select" id="show_records">
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>25</option>
					</select>
				  </div>
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="search-column" class="form-label fw-semibold mb-0">Search</label>
					<input type="search" class="form-control" id="search-column" name="search" placeholder="Search here" autocomplete="on"/>
				  </div>
				</div>
				<table class="table table-hover mb-3">
				  <thead>
					<tr>
					  <th>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select All Companies">
						</div>
					  </th>
					  <th>
						Company
					  </th>
					  <th class="text-center">
						Customers
					  </th>
					  <th>
						Permission
					  </th>
					  <th class="text-center">Actions</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Company">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Company">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage1" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage1">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign">
								</use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Company">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage2" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage2">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Company">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage3" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage3">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Company">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage4" aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage4">Visible</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Company">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage5" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage5">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
				  </tbody>
				</table>
				<div class="d-flex justify-content-between align-items-center px-3 mb-3">
				  <div>
					<p class="fw-semibold mb-0">Showing 1 to 5 of 100 entries</p>
				  </div>
				  <nav aria-label="Page Navigation">
					<ul class="pagination mb-0">
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
		  <div class="accordion-item">
			<div id="headingTeamsProvidersAccess">
			  <div class="accordion-button justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTeamsProvidersAccess" aria-expanded="false" aria-controls="collapseTeamsProvidersAccess">
				<div>Teams & Providers Access</div>
				<a href="#" class="btn btn-primary rounded me-5">
					<svg aria-label="add" width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#plus"></use>
                    </svg>
					<span class="ms-2">Add Provider</span>
				</a>
			  </div>
			</div>
			<div id="collapseTeamsProvidersAccess" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
			  <div class="accordion-body p-0">
				<div class="d-flex justify-content-between my-2">
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="show_record_numbers" class="form-label mb-0">Show</label>
					<select class="form-select" id="show_record_numbers">
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>25</option>
					</select>
				  </div>
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="search-teams" class="form-label fw-semibold mb-0">Search</label>
					<input type="search" class="form-control" id="search" name="search-teams" placeholder="Search here" autocomplete="on"/>
				  </div>
				</div>
				<table class="table table-hover mb-3">
				  <thead>
					<tr>
					  <th>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select All Teams">
						</div>
					  </th>
					  <th>
						Teams
					  </th>
					  <th class="text-center">
						Providers
					  </th>
					  <th>
						Permission
					  </th>
					  <th class="text-center">Actions</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Teams">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Teams">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage1" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage1">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Teams">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage2" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage2">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Teams">
						</div>
					  </td>
					  <td class="align-middle">
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td class="align-middle">
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage3" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage3">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Teams">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage4" aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage4">Visible</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Teams">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td class="text-center">
						3
					  </td>
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage5" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage5">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
				  </tbody>
				</table>
				<div class="d-flex justify-content-between align-items-center px-3 mb-3">
				  <div>
					<p class="fw-semibold mb-0">Showing 1 to 5 of 100 entries</p>
				  </div>
				  <nav aria-label="Page Navigation">
					<ul class="pagination mb-0">
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
		  <div class="accordion-item">
			<div id="headingAccommodationServiceAccess">
			  <div class="accordion-button justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapseAccommodationServiceAccess" aria-expanded="false" aria-controls="collapseAccommodationServiceAccess">
				<div>Accommodation & Service Access</div>
				<a href="#" class="btn btn-primary rounded me-5">
					<svg aria-label="add" width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#plus"></use>
                    </svg>
					<span class="ms-2">Add Service</span>
				</a>
			  </div>
			</div>
			<div id="collapseAccommodationServiceAccess" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
			  <div class="accordion-body p-0">
				<div class="d-flex justify-content-between my-2">
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="show_records_numbers" class="form-label mb-0">Show</label>
					<select class="form-select" id="show_records_numbers">
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>25</option>
					</select>
				  </div>
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="search-accommodation" class="form-label fw-semibold mb-0">Search</label>
					<input type="search" class="form-control" id="search-accommodation" name="search" placeholder="Search here" autocomplete="on"/>
				  </div>
				</div>
				<table class="table table-hover mb-3">
				  <thead>
					<tr>
					  <th>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select All Accommodations">
						</div>
					  </th>
					  <th>
						Accommodation
					  </th>
					  <th>
						Permission
					  </th>
					  <th class="text-center">Actions</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Accommodation">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Accommodation">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage1" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage1">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Accommodation">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage2" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage2">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Accommodation">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage3" checked>
						  <label class="form-check-label" for="CustomerAccessManage3">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Accommodation">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage4" aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage4">Visible</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Accommodation">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage5" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage5">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
				  </tbody>
				</table>
				<div class="d-flex justify-content-between align-items-center px-3 mb-3">
				  <div>
					<p class="fw-semibold mb-0">Showing 1 to 5 of 100 entries</p>
				  </div>
				  <nav aria-label="Page Navigation">
					<ul class="pagination mb-0">
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
		  <div class="accordion-item">
			<div id="headingIndustryAccess">
			  <div class="accordion-button justify-content-between collapsed" data-bs-toggle="collapse" data-bs-target="#collapseIndustryAccess" aria-expanded="false" aria-controls="collapseIndustryAccess">
				<div>Industry Access</div>
				<a href="#" class="btn btn-primary rounded me-5">
					<svg aria-label="ADD Industry" width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#plus"></use>
                    </svg>
					<span class="ms-2">Add Industry</span>
				</a>
			  </div>
			</div>
			<div id="collapseIndustryAccess" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
			  <div class="accordion-body p-0">
				<div class="d-flex justify-content-between my-2">
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="show-records-numbers" class="form-label mb-0">Show</label>
					<select class="form-select" id="show-records-numbers">
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>25</option>
					</select>
				  </div>
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="search-industry" class="form-label fw-semibold mb-0">Search</label>
					<input type="search" class="form-control" id="search-industry" name="search" placeholder="Search here" autocomplete="on"/>
				  </div>
				</div>
				<table class="table table-hover mb-3">
				  <thead>
					<tr>
					  <th>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select All Industries">
						</div>
					  </th>
					  <th>
						Industry
					  </th>
					  <th>
						Permission
					  </th>
					  <th class="text-center">Actions</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Industry">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Industry">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage1" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage1">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Industry">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage2" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage2">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Industry">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage3" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage3">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Industry">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage4" aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage4">Visible</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select Industry">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage5" checked aria-label="Permission Toggle">
						  <label class="form-check-label" for="CustomerAccessManage5">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
							<svg aria-label="Revoke" width="19" height="20" viewBox="0 0 19 20">
								<use xlink:href="/css/common-icons.svg#unassign"></use>
							</svg>
						</a>
					  </td>
					</tr>
				  </tbody>
				</table>
				<div class="d-flex justify-content-between align-items-center px-3 mb-3">
				  <div>
					<p class="fw-semibold mb-0">Showing 1 to 5 of 100 entries</p>
				  </div>
				  <nav aria-label="Page Navigation">
					<ul class="pagination mb-0">
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
		</div>
	  </div>
	</div>
	<div class="d-flex justify-content-center col-12 form-actions">
		<button type="button" class="btn btn-outline-dark rounded mx-2">Back</button>
		<button type="submit" class="btn btn-primary rounded mx-2">Save & Exit</button>
		<button type="submit" class="btn btn-primary rounded">Next</button>
	</div>
</div>