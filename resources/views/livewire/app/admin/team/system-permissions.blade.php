<div>
	<div class="row mb-4">
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
	<div class="row mb-4">
		<div class="col-12">
		<div class="accordion" id="accordionManageUserAccess">
		  <div class="accordion-item">
			<div id="headingCompaniesCustomerAccess">
			  <div class="accordion-button justify-content-between" data-bs-toggle="collapse" data-bs-target="#collapseCompaniesCustomerAccess" aria-expanded="false" aria-controls="collapseCompaniesCustomerAccess">
				<div>Companies & Customer Access</div>
				<a href="#" class="btn btn-primary rounded me-5">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
					</svg>
					<span class="ms-2">Add Customer </span>
				</a>
			  </div>
			</div>
			<div id="collapseCompaniesCustomerAccess" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
			  <div class="accordion-body p-0">
				<div class="d-flex justify-content-between my-2">
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="show_records_number" class="form-label mb-0">Show</label>
					<select class="form-select" id="show_records_number">
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>25</option>
					</select>
				  </div>
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="search" class="form-label fw-semibold mb-0">Search</label>
					<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
				  </div>
				</div>
				<table class="table table-hover mb-3">
				  <thead>
					<tr>
					  <th>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage" checked>
						  <label class="form-check-label" for="CustomerAccessManage">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage1" checked>
						  <label class="form-check-label" for="CustomerAccessManage1">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage2" checked>
						  <label class="form-check-label" for="CustomerAccessManage2">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage3" checked>
						  <label class="form-check-label" for="CustomerAccessManage3">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage4">
						  <label class="form-check-label" for="CustomerAccessManage4">Visible</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage5" checked>
						  <label class="form-check-label" for="CustomerAccessManage5">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
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
			  <div class="accordion-button justify-content-between" data-bs-toggle="collapse" data-bs-target="#collapseTeamsProvidersAccess" aria-expanded="false" aria-controls="collapseTeamsProvidersAccess">
				<div>Teams & Providers Access</div>
				<a href="#" class="btn btn-primary rounded me-5">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
					</svg>
					<span class="ms-2">Add Provider</span>
				</a>
			  </div>
			</div>
			<div id="collapseTeamsProvidersAccess" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
			  <div class="accordion-body p-0">
				<div class="d-flex justify-content-between my-2">
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="show_records_number" class="form-label mb-0">Show</label>
					<select class="form-select" id="show_records_number">
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>25</option>
					</select>
				  </div>
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="search" class="form-label fw-semibold mb-0">Search</label>
					<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
				  </div>
				</div>
				<table class="table table-hover mb-3">
				  <thead>
					<tr>
					  <th>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage" checked>
						  <label class="form-check-label" for="CustomerAccessManage">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage1" checked>
						  <label class="form-check-label" for="CustomerAccessManage1">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage2" checked>
						  <label class="form-check-label" for="CustomerAccessManage2">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td class="align-middle">
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage3" checked>
						  <label class="form-check-label" for="CustomerAccessManage3">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage4">
						  <label class="form-check-label" for="CustomerAccessManage4">Visible</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage5" checked>
						  <label class="form-check-label" for="CustomerAccessManage5">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
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
			  <div class="accordion-button justify-content-between" data-bs-toggle="collapse" data-bs-target="#collapseAccommodationServiceAccess" aria-expanded="false" aria-controls="collapseAccommodationServiceAccess">
				<div>Accommodation & Service Access</div>
				<a href="#" class="btn btn-primary rounded me-5">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
					</svg>
					<span class="ms-2">Add Service</span>
				</a>
			  </div>
			</div>
			<div id="collapseAccommodationServiceAccess" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
			  <div class="accordion-body p-0">
				<div class="d-flex justify-content-between my-2">
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="show_records_number" class="form-label mb-0">Show</label>
					<select class="form-select" id="show_records_number">
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>25</option>
					</select>
				  </div>
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="search" class="form-label fw-semibold mb-0">Search</label>
					<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
				  </div>
				</div>
				<table class="table table-hover mb-3">
				  <thead>
					<tr>
					  <th>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage" checked>
						  <label class="form-check-label" for="CustomerAccessManage">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage1" checked>
						  <label class="form-check-label" for="CustomerAccessManage1">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage2" checked>
						  <label class="form-check-label" for="CustomerAccessManage2">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage4">
						  <label class="form-check-label" for="CustomerAccessManage4">Visible</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  

					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage5" checked>
						  <label class="form-check-label" for="CustomerAccessManage5">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
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
			  <div class="accordion-button justify-content-between" data-bs-toggle="collapse" data-bs-target="#collapseIndustryAccess" aria-expanded="false" aria-controls="collapseIndustryAccess">
				<div>Industry Access</div>
				<a href="#" class="btn btn-primary rounded me-5">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
					</svg>
					<span class="ms-2">Add Industry</span>
				</a>
			  </div>
			</div>
			<div id="collapseIndustryAccess" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
			  <div class="accordion-body p-0">
				<div class="d-flex justify-content-between my-2">
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="show_records_number" class="form-label mb-0">Show</label>
					<select class="form-select" id="show_records_number">
					  <option>10</option>
					  <option>15</option>
					  <option>20</option>
					  <option>25</option>
					</select>
				  </div>
				  <div class="d-inline-flex align-items-center gap-4">
					<label for="search" class="form-label fw-semibold mb-0">Search</label>
					<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
				  </div>
				</div>
				<table class="table table-hover mb-3">
				  <thead>
					<tr>
					  <th>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage" checked>
						  <label class="form-check-label" for="CustomerAccessManage">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage1" checked>
						  <label class="form-check-label" for="CustomerAccessManage1">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage2" checked>
						  <label class="form-check-label" for="CustomerAccessManage2">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
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
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage4">
						  <label class="form-check-label" for="CustomerAccessManage4">Visible</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
							</svg>
						</a>
					  </td>
					</tr>
					<tr>
					  <td>
						<div class="form-check">
						  <input class="form-check-input" id="" name="" type="checkbox" tabindex="">
						</div>
					  </td>
					  <td>
						<a @click="offcanvasOpen = true">Example Company</a>
					  </td>
					  <td>
						<div class="form-check form-switch">
						  <input class="form-check-input" type="checkbox" role="switch" id="CustomerAccessManage5" checked>
						  <label class="form-check-label" for="CustomerAccessManage5">Manage</label>
						</div>
					  </td>
					  <td class="text-center">
						<a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
						  <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z" stroke="black" stroke-width="2"/>
							<path d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332" stroke="black" stroke-width="2" stroke-linecap="round"/>
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