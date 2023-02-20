<div>
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
		  <div class="row breadcrumbs-top">
			<div class="col-12">
			  <h1 class="content-header-title float-start mb-0">Create New Role</h1>
			  <div class="breadcrumb-wrapper">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item">
					<a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
					  <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"/>
						</svg>
					</a>
				  </li>
				  <li class="breadcrumb-item">
					Settings
				  </li>
				  <li class="breadcrumb-item">
					Create New Role
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
		<div class="mt-4">
		  <h2>Create New Roles and Permissions</h2>
		  <div class="row ms-1">
			<div class="row align-items-center">
			  <div class="col-auto">
				<label for="label" class="col-form-label">Label</label>
			  </div>
			  <div class="col-sm-3">
				<input type="text" id="label" placeholder="Marketing Manager" class="form-control" >
			  </div>
			</div>
			<p class="mt-3 mb-4">Create a predefined set of permissions to quickly deploy to one or multiple users. </p>
		  </div>
		</div>

		<!-- Hoverable rows start -->
	  <div class="row" id="table-hover-row">
		<div class="col-12">
		  <div class="card">
			<div class="table-responsive">

	  <table class="table table-hover mb-3">
		<thead>
		  <tr>
			<th>
			  Section
			</th>
			<th>
			  <div class="form-check">
				<input class="form-check-input" id="view" name=""
				  type="checkbox" tabindex="">
				  <label for="view" class="mt-1">View</label>
			  </div>
			</th>
			<th class="">
			  <div class="form-check">
				<input class="form-check-input" id="add" name=""
				  type="checkbox" tabindex="">
				  <label for="add" class="mt-1">Add</label>
			  </div>
			</th>
			<th>
			  <div class="form-check">
				<input class="form-check-input" id="edit" name=""
				  type="checkbox" tabindex="">
				  <label for="edit" class="mt-1">Edit</label>
			  </div>
			</th>
			<th>
			  <div class="form-check">
				<input class="form-check-input" id="delete" name=""
				  type="checkbox" tabindex="">
				  <label for="delete" class="mt-1">Delete</label>
			  </div>
			</th>
			<th>
			  <div class="form-check">
				<input class="form-check-input" id="all" name=""
				  type="checkbox" tabindex="">
				  <label for="all" class="mt-1">All</label>
			  </div>
			</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
			  <strong>Assignments</strong>

			  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
				</svg>

			</td>
			<td class="">
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td class="">
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td class="">
			  <div class="form-check">
				<input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" >
			  </div>
			</td>
			<td class="">
			  <div class="form-check">
				<input class="form-check-input"  aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td class="">
			  <div class="form-check">
				<input class="form-check-input"  aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>
		  <div >
		  <tr class="collapse " id="collapseExample1">
			<td class="align-middle">
			  Assignments (Today, Upcoming, Past, Pending)
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr class="collapse " id="collapseExample1">
			<td class="">
			  Booking Form
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr class="collapse " id="collapseExample1">
			<td class="">
			  Quotes & Leads Module
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr>
			<td data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
			  <strong>Customers</strong>

			  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
				</svg>

			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>
		  <div >
		  <tr class="collapse " id="collapseExample2">
			<td class="align-middle">
			  Add/Edit/Deactivate Company & Customers
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr class="collapse " id="collapseExample2">
			<td class="">
			  Companies (List, Profiles)
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr class="collapse " id="collapseExample2">
			<td class="">
			  Customers (List, Profiles)
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr class="collapse " id="collapseExample2">
			<td class="">
			  Customer Pricing
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>
		  <tr class="collapse " id="collapseExample2">
			<td class="">
			  Invoice Generator
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>
		  <tr class="collapse " id="collapseExample2">
			<td class="">
			  Customer Invoices
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
			  </div>
			</td>
		  </tr>

		  <tr>
			<td data-bs-toggle="collapse" href="#providers" role="button" aria-expanded="false" aria-controls="providers">
			  <strong>Providers</strong>
			  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
				</svg>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>
		  <div >
		  <tr class="collapse " id="providers">
			<td class="align-middle">
			  Add/Edit/Deactivate Provider & Provider Teams
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr class="collapse " id="providers">
			<td class="">
			  Provider Teams (List)
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr class="collapse " id="providers">
			<td class="">
			  Providers (List, Profiles)
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr class="collapse " id="providers">
			<td class="">
			  Provider Rates
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>
		  <tr class="collapse " id="providers">
			<td class="">
			  Applications & Screenings
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>
		  <tr class="collapse " id="providers">
			<td class="">
			  Reimbursements
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr class="collapse " id="providers">
			<td class="">
			  Remittance Generator
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>
		  <tr class="collapse " id="providers">
			<td class="">
			  Payment Manager
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
		  </tr>

		  <tr>
			<td >
			  <strong>Reports</strong>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
			  </div>
			</td>
			<td>
			  <div class="form-check">
				<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
			  </div>
			</td>
			</tr>

			<tr>
			  <td >
				<strong>System Logs</strong>
			  </td>
			  <td>
				<div class="form-check">
				  <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				</div>
			  </td>
			  <td>
				<div class="form-check">
				  <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				</div>
			  </td>
			  <td>
				<div class="form-check">
				  <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				</div>
			  </td>
			  <td>
				<div class="form-check">
				  <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				</div>
			  </td>
			  <td>
				<div class="form-check">
				  <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
				</div>
			  </td>
			  </tr>

			  <tr>
				<td data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
				  <strong>Business Profile & Settings </strong>
				  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
					</svg>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <div >
			  <tr class="collapse " id="collapseExample4">
				<td class="align-middle">
				  Account Profile
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr class="collapse " id="collapseExample4">
				<td class="align-middle">
				  Business Setup
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr class="collapse " id="collapseExample4">
				<td class="align-middle">
				  Notification Controls
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <tr class="collapse " id="collapseExample4">
				<td class="align-middle">
				  Email Notifications
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <tr class="collapse " id="collapseExample4">
				<td class="align-middle">
				  SMS Notifications
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <tr class="collapse " id="collapseExample4">
				<td class="align-middle">
				  Password Reset
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr>
				<td data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
				  <strong>Accommodations & Services Setup </strong>
				  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
					</svg>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
				  </div>
				</td>
			  </tr>
			  <div >
			  <tr class="collapse " id="collapseExample5">
				<td class="align-middle">
				  View Services & Accommodations
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr class="collapse " id="collapseExample5">
				<td class="align-middle">
				  Add/Edit Services & Accommodations
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr>
				<td data-bs-toggle="collapse" href="#specializations" role="button" aria-expanded="false" aria-controls="specializations">
				  <strong>Specializations</strong>
				  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
					</svg>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
				  </div>
				</td>
			  </tr>
			  <div >
			  <tr class="collapse " id="specializations">
				<td class="align-middle">
				  View Specializations
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr class="collapse " id="specializations">
				<td class="align-middle">
				  View/Edit Specializations
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr>
				<td data-bs-toggle="collapse" href="#industries" role="button" aria-expanded="false" aria-controls="industries">
				  <strong>Industries</strong>
				  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
					</svg>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <div >
			  <tr class="collapse " id="industries">
				<td class="align-middle">
				  View Industries
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr class="collapse " id="industries">
				<td class="align-middle">
				  View/Edit Industries
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr>
				<td data-bs-toggle="collapse" href="#saved-forms" role="button" aria-expanded="false" aria-controls="saved-forms">
				  <strong>Saved Forms</strong>
				  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
					</svg>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <div >
			  <tr class="collapse " id="saved-forms">
				<td class="align-middle">
				  View Customized Forms
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
				  </div>
				</td>
			  </tr>

			  <tr class="collapse " id="saved-forms">
				<td class="align-middle">
				  View/Edit Customized Forms
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
				  </div>
				</td>
			  </tr>

			  <tr>
				<td data-bs-toggle="collapse" href="#coupons-&-referrals-setup" role="button" aria-expanded="false" aria-controls="coupons-&-referrals-setup">
				  <strong>Coupons & Referrals Setup </strong>
				  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
					</svg>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <div >
			  <tr class="collapse " id="coupons-&-referrals-setup">
				<td class="align-middle">
				  View Coupons
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr class="collapse " id="coupons-&-referrals-setup">
				<td class="align-middle">
				  Add/Edit Coupons
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <tr class="collapse " id="coupons-&-referrals-setup">
				<td class="align-middle">
				  View Referrals
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <tr class="collapse " id="coupons-&-referrals-setup">
				<td class="align-middle">
				  Add/Edit Referrals
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr>
				<td data-bs-toggle="collapse" href="#platform-integrations" role="button" aria-expanded="false" aria-controls="platform-integrations">
				  <strong>Platform Integrations</strong>
				  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
					</svg>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <div >
			  <tr class="collapse " id="platform-integrations">
				<td class="align-middle">
				  QuickBooks
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
				  </div>
				</td>
			  </tr>

			  <tr class="collapse " id="platform-integrations">
				<td class="align-middle">
				  Stripe
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <tr class="collapse " id="platform-integrations">
				<td class="align-middle">
				  Calendar Sync
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <tr class="collapse " id="platform-integrations">
				<td class="align-middle">
				  Drive Sync
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr>
				<td data-bs-toggle="collapse" href="#admin-staff" role="button" aria-expanded="false" aria-controls="admin-staff">
				  <strong>Admin-Staff</strong>
				  <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
					</svg>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <div >
			  <tr class="collapse " id="admin-staff">
				<td class="align-middle">
				  Add/Edit/Deactivate Admin-Staff
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr class="collapse " id="admin-staff">
				<td class="align-middle">
				  View Admin-Staff
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>
			  <tr class="collapse " id="admin-staff">
				<td class="align-middle">
				  Add/Edit/Deactivate Admin-Staff Teams
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
				  </div>
				</td>
			  </tr>
			  <tr class="collapse " id="admin-staff">
				<td class="align-middle">
				  View Admin-Staff Teams
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
			  </tr>

			  <tr>
				<td >
				  <strong>Support Tickets</strong>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
				  </div>
				</td>
				<td>
				  <div class="form-check">
					<input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
				  </div>
				</td>
				</tr>
		</div>
		</tbody>
	  </table>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="col-12 justify-content-center form-actions d-flex">
		<button type="button" class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">Cancel</button>
		<button type="submit" class="btn btn-primary rounded ">Add</button>
	  </div>
	  </div>
	  </div>
	  </div>
</div>
