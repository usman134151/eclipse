<div
	x-data="
	{
		accommodationServicesAccess: false,
		teamsProviderAccess: false,
		companiesCustomers: false
	}"
>
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
		  <div class="row breadcrumbs-top">
			<div class="col-12">
			  <h1 class="content-header-title float-start mb-0">Create New Role</h1>
			  <div class="breadcrumb-wrapper">
				<ol class="breadcrumb">
				  <li class="breadcrumb-item">
					<a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
						<x-icon name="home"/>
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
				<!-- BEGIN: Steps -->
				<div x-data="{ tab: @entangle('component') }" id="tab_wrapper">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link {{ $component == 'system-permissions' ? 'active' : '' }}" :class="{ 'active': tab === 'system-permissions' }" @click.prevent="tab = 'system-permissions'" id="system-permissions-tab" role="tab" aria-controls="system-permissions" aria-selected="true"><span class="number">1</span> 
								System Permissions
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a href="#" class="nav-link {{ $component == 'user-access' ? 'active' : '' }}" :class="{ 'active': tab === 'user-access' }" @click.prevent="tab = 'user-access'" id="user-access-tab" role="tab" aria-controls="user-access" aria-selected="false"><span class="number">2</span> 
								User Access
							</a>
						</li>
					</ul>
	
					<!-- Tab panes -->
					<div class="tab-content">
						<!-- BEGIN: System Permissions -->
						<div class="tab-pane fade {{ $component == 'system-permissions' ? 'active show' : '' }}" :class="{ 'active show': tab === 'system-permissions' }" id="system-permissions" role="tabpanel" aria-labelledby="system-permissions-tab" tabindex="0" x-show="tab === 'system-permissions'">
							<div class="row mb-4">
								<div class="col-lg-12">
									<h2>Manage User Permissions</h2>
									<p>Choose from predefined set of permissions for the user. You can customize permissions
										as well.</p>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12 gap-3 d-lg-flex">
									<a href="#" class="btn btn-outline-dark rounded">Super Admin</a>
									<a href="#" class="btn btn-outline-dark rounded">Provider Manager</a>
									<a href="#" class="btn btn-outline-dark rounded">Customer Relation</a>
									<a href="#" class="btn btn-outline-dark rounded">Company Manager</a>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12 mb-4">
									<p class="mb-0">Copy permissions from another user</p>
								</div>
								<div class="col-lg-12 d-lg-flex gap-3 mb-3">
									<select class="form-select w-auto">
										<option>Select User</option>
									</select>
									<a href="#" class="btn btn-primary rounded">Apply</a>
								</div>
								<div class="col-lg-12">
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
				<td data-bs-toggle="collapse" href="#dashboard" role="button" aria-expanded="false" aria-controls="dashboard">
				  <strong>Dashboard</strong>
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
			  <tr class="collapse " id="dashboard">
				<td class="align-middle">
					Dashboard content
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

			<tr>
				<td data-bs-toggle="collapse" href="#chat" role="button" aria-expanded="false" aria-controls="chat">
				  <strong>Chat</strong>
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
			<td data-bs-toggle="collapse" href="#assignments" role="button" aria-expanded="false" aria-controls="assignments">
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
		  <tr class="collapse " id="assignments">
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

		  <tr class="collapse " id="assignments">
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

		  <tr class="collapse " id="assignments">
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
			<td data-bs-toggle="collapse" href="#customers" role="button" aria-expanded="false" aria-controls="customers">
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
		  <tr class="collapse " id="customers">
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

		  <tr class="collapse " id="customers">
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

		  <tr class="collapse " id="customers">
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

		  <tr class="collapse " id="customers">
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
		  <tr class="collapse " id="customers">
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
		  <tr class="collapse " id="customers">
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
				<td data-bs-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings">
				  <strong> Settings</strong>
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
			  <tr class="collapse active" id="settings">
				<td class="align-middle">
					Business Profile & Settings
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
  {{-- 
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
				</tr> --}}
		</div>
		</tbody>
	  </table>
									</div>
								</div>
								<div class="col-12">
									<hr>
								</div>
							</div>
							<!-- Form Actions -->
							<div class="col-12 justify-content-center form-actions d-flex">
								<button type="button" class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">Back</button>
								<button type="submit" class="btn btn-primary rounded mx-2">Add</button>
								<button type="submit" class="btn btn-primary rounded" x-on:click="$wire.switch('user-access')">Next</button>
							</div><!-- /Form Actions --> 
						</div><!-- END: System Permissions -->
	
						<!-- BEGIN: User Access -->
						<div class="tab-pane fade {{ $component == 'user-access' ? 'active show' : '' }}" :class="{ 'active show': tab === 'user-access' }" id="user-access" role="tabpanel" aria-labelledby="user-access-tab" tabindex="0" x-show="tab === 'user-access'">
							<div class="row mb-4">
								<div class="col-lg-12">
									<h2>Manage User Access</h2>
									<p>Copy Access of Customers & Providers from another user</p>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-lg-12 d-lg-flex gap-3 mb-4">
									<select class="form-select w-auto">
										<option>Select User</option>
									</select>
									<a href="#" class="btn btn-primary rounded">Apply</a>
								</div>
								<div class="col-12">
									<div class="accordion" id="accordionManageUserAccess">
										<div class="accordion-item">
											<div id="headingCompaniesCustomerAccess">
												<div class="accordion-button justify-content-between"
													data-bs-toggle="collapse"
													data-bs-target="#collapseCompaniesCustomerAccess" aria-expanded="true"
													aria-controls="collapseCompaniesCustomerAccess">
													<div>Companies & Customer Access</div>
													<a href="#" class="btn btn-primary rounded me-5">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
														</svg>
														<span class="ms-2">Add Customer</span>
													</a>
												</div>
											</div>
											<div id="collapseCompaniesCustomerAccess"
												class="accordion-collapse collapse show" aria-labelledby="headingOne"
												data-bs-parent="#accordionManageUserAccess">
												<div class="accordion-body p-0">
													<div class="d-flex justify-content-between my-2">
														<div class="d-inline-flex align-items-center gap-4">
															<label for="show_records_number"
																class="form-label mb-0">Show</label>
															<select class="form-select" id="show_records_number">
																<option>10</option>
																<option>15</option>
																<option>20</option>
																<option>25</option>
															</select>
														</div>
														<div class="d-inline-flex align-items-center gap-4">
															<label for="search"
																class="form-label fw-semibold mb-0">Search</label>
															<input type="search" class="form-control" id="search"
																name="search" placeholder="Search here" autocomplete="on" />
														</div>
													</div>
													<table class="table table-hover mb-3">
														<thead>
															<tr>
																<th>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
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
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="companiesCustomers = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage" checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="companiesCustomers = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage1"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage1">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="companiesCustomers = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage2"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage2">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="companiesCustomers = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage3"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage3">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="companiesCustomers = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage4">
																		<label class="form-check-label"
																			for="CustomerAccessManage4">Visible</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="companiesCustomers = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage5"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage5">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
													<div
														class="d-flex justify-content-between align-items-center px-3 mb-3">
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
																<li class="page-item"><a class="page-link" href="#">1</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">3</a>
																</li>
																<li class="page-item active"><a class="page-link"
																		href="#">4</a></li>
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
												<div class="accordion-button justify-content-between"
													data-bs-toggle="collapse" data-bs-target="#collapseTeamsProvidersAccess"
													aria-expanded="true" aria-controls="collapseTeamsProvidersAccess">
													<div>Teams & Providers Access</div>
													<a href="#" class="btn btn-primary rounded me-5">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
														</svg>	
														<span class="ms-2">Add Provider</span>
													</a>
												</div>
											</div>
											<div id="collapseTeamsProvidersAccess" class="accordion-collapse collapse show"
												aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
												<div class="accordion-body p-0">
													<div class="d-flex justify-content-between my-2">
														<div class="d-inline-flex align-items-center gap-4">
															<label for="show_records_number"
																class="form-label mb-0">Show</label>
															<select class="form-select" id="show_records_number">
																<option>10</option>
																<option>15</option>
																<option>20</option>
																<option>25</option>
															</select>
														</div>
														<div class="d-inline-flex align-items-center gap-4">
															<label for="search"
																class="form-label fw-semibold mb-0">Search</label>
															<input type="search" class="form-control" id="search"
																name="search" placeholder="Search here" autocomplete="on" />
														</div>
													</div>
													<table class="table table-hover mb-3">
														<thead>
															<tr>
																<th>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
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
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="teamsProviderAccess = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage" checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="teamsProviderAccess = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage1"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage1">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="teamsProviderAccess = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage2"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage2">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td class="align-middle">
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td class="align-middle">
																	<a @click="teamsProviderAccess = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td class="align-middle">
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage3"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage3">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="teamsProviderAccess = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage4">
																		<label class="form-check-label"
																			for="CustomerAccessManage4">Visible</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="teamsProviderAccess = true">Example Company</a>
																</td>
																<td class="text-center">
																	3
																</td>
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage5"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage5">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
													<div
														class="d-flex justify-content-between align-items-center px-3 mb-3">
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
																<li class="page-item"><a class="page-link" href="#">1</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">3</a>
																</li>
																<li class="page-item active"><a class="page-link"
																		href="#">4</a></li>
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
												<div class="accordion-button justify-content-between"
													data-bs-toggle="collapse"
													data-bs-target="#collapseAccommodationServiceAccess"
													aria-expanded="true" aria-controls="collapseAccommodationServiceAccess">
													<div>Accommodation & Service Access</div>
													<a href="#" class="btn btn-primary rounded me-5">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
														</svg>
														<span class="ms-2">Add Service</span>
													</a>
												</div>
											</div>
											<div id="collapseAccommodationServiceAccess"
												class="accordion-collapse collapse show" aria-labelledby="headingOne"
												data-bs-parent="#accordionManageUserAccess">
												<div class="accordion-body p-0">
													<div class="d-flex justify-content-between my-2">
														<div class="d-inline-flex align-items-center gap-4">
															<label for="show_records_number"
																class="form-label mb-0">Show</label>
															<select class="form-select" id="show_records_number">
																<option>10</option>
																<option>15</option>
																<option>20</option>
																<option>25</option>
															</select>
														</div>
														<div class="d-inline-flex align-items-center gap-4">
															<label for="search"
																class="form-label fw-semibold mb-0">Search</label>
															<input type="search" class="form-control" id="search"
																name="search" placeholder="Search here" autocomplete="on" />
														</div>
													</div>
													<table class="table table-hover mb-3">
														<thead>
															<tr>
																<th>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
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
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="accommodationServicesAccess = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage" checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="accommodationServicesAccess = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage1"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage1">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="accommodationServicesAccess = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage2"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage2">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="accommodationServicesAccess = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage3"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage3">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="accommodationServicesAccess = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage4">
																		<label class="form-check-label"
																			for="CustomerAccessManage4">Visible</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="accommodationServicesAccess = true">Example Company</a>
																</td>
	
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage5"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage5">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
													<div
														class="d-flex justify-content-between align-items-center px-3 mb-3">
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
																<li class="page-item"><a class="page-link" href="#">1</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">3</a>
																</li>
																<li class="page-item active"><a class="page-link"
																		href="#">4</a></li>
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
												<div class="accordion-button justify-content-between"
													data-bs-toggle="collapse" data-bs-target="#collapseIndustryAccess"
													aria-expanded="true" aria-controls="collapseIndustryAccess">
													<div>Industry Access</div>
													<a href="#" class="btn btn-primary rounded me-5">
														<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
														</svg>
														<span class="ms-2">Add Industry</span>
													</a>
												</div>
											</div>
											<div id="collapseIndustryAccess" class="accordion-collapse collapse show"
												aria-labelledby="headingOne" data-bs-parent="#accordionManageUserAccess">
												<div class="accordion-body p-0">
													<div class="d-flex justify-content-between my-2">
														<div class="d-inline-flex align-items-center gap-4">
															<label for="show_records_number"
																class="form-label mb-0">Show</label>
															<select class="form-select" id="show_records_number">
																<option>10</option>
																<option>15</option>
																<option>20</option>
																<option>25</option>
															</select>
														</div>
														<div class="d-inline-flex align-items-center gap-4">
															<label for="search"
																class="form-label fw-semibold mb-0">Search</label>
															<input type="search" class="form-control" id="search"
																name="search" placeholder="Search here" autocomplete="on" />
														</div>
													</div>
													<table class="table table-hover mb-3">
														<thead>
															<tr>
																<th>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
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
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage" checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage1"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage1">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage2"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage2">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage3"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage3">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
	
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage4">
																		<label class="form-check-label"
																			for="CustomerAccessManage4">Visible</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check">
																		<input class="form-check-input" id="" name=""
																			type="checkbox" tabindex="">
																	</div>
																</td>
																<td>
																	<a @click="offcanvasOpen = true">Example Company</a>
																</td>
																<td>
																	<div class="form-check form-switch">
																		<input class="form-check-input" type="checkbox"
																			role="switch" id="CustomerAccessManage5"
																			checked>
																		<label class="form-check-label"
																			for="CustomerAccessManage5">Manage</label>
																	</div>
																</td>
																<td class="text-center">
																	<a href="#"
																		class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
																		<svg width="19" height="20" viewBox="0 0 19 20"
																			fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M8.99967 9.99984C11.3009 9.99984 13.1663 8.13436 13.1663 5.83317C13.1663 3.53198 11.3009 1.6665 8.99967 1.6665C6.69849 1.6665 4.83301 3.53198 4.83301 5.83317C4.83301 8.13436 6.69849 9.99984 8.99967 9.99984Z"
																				stroke="black" stroke-width="2" />
																			<path
																				d="M13.1666 18.3332H3.38822C3.15187 18.3332 2.91822 18.283 2.70276 18.1859C2.4873 18.0887 2.29497 17.9468 2.13853 17.7697C1.9821 17.5925 1.86513 17.3841 1.79539 17.1583C1.72566 16.9324 1.70475 16.6944 1.73405 16.4598L2.05905 13.8565C2.13463 13.2517 2.42857 12.6953 2.88558 12.292C3.34259 11.8887 3.9312 11.6663 4.54072 11.6665H4.83322"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round"
																				stroke-linejoin="round" />
																			<path
																				d="M17.3332 15.8332L13.1665 11.6665M17.3332 11.6665L13.1665 15.8332"
																				stroke="black" stroke-width="2"
																				stroke-linecap="round" />
																		</svg>
																	</a>
																</td>
															</tr>
														</tbody>
													</table>
													<div
														class="d-flex justify-content-between align-items-center px-3 mb-3">
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
																<li class="page-item"><a class="page-link" href="#">1</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a>
																</li>
																<li class="page-item"><a class="page-link" href="#">3</a>
																</li>
																<li class="page-item active"><a class="page-link"
																		href="#">4</a></li>
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
							<div class="col-12 justify-content-center form-actions d-flex">
								<button type="button" class="btn btn-outline-dark rounded mx-2" x-on:click="$wire.switch('system-permissions')">Back</button>
								<button type="submit" class="btn btn-primary rounded mx-2">Save & Exit</button>
								<button type="submit" class="btn btn-primary rounded">Next</button>
							</div>
						</div>
					</div>
					{{-- END: User Access --}}
				</div>
			</div>
			{{-- Card Body --}}
			{{-- END: Steps --}}
		</div>
	</div>
	@include('panels.user-access.accommodation-service-access')
	@include('panels.user-access.teams-provider-access')
	@include('panels.user-access.companies-customer-acess')
</div>
