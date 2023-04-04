<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
	@livewire('app.common.forms.provider-form') {{-- Show Add / Edit Form --}}
	@else
		<!-- Begin : Header Section -->
		<div class="content-wrapper container-xxl p-0">
			<div class="content-header row">
				<div class="content-header-left col-12 mb-2">
					<div class="row breadcrumbs-top">
						<div class="col-12">
							<h1 class="content-header-title float-start mb-0">Deactivated Providers</h1>
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
										<a href="javascript:void(0)">
											Providers
										</a>
									</li>
									<li class="breadcrumb-item">
										<a href="javascript:void(0)" class="text-secondary">
											All Providers
										</a>
									</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End : Header Section -->
			<!-- Begin : Provider List -->
			<section id="multiple-column-form">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<form class="form">
									<div class="d-flex flex-column flex-md-row justify-content-between my-2 gap-3">
									    <div class="d-inline-flex align-items-center gap-4">
									        <label for="show_records_number" class="form-label-sm mb-0">
									        Show
									        </label>
									        <select class="form-select form-select-md" id="show_records_number">
									            <option>10</option>
									            <option>15</option>
									            <option>20</option>
									            <option>25</option>
									        </select>
									    </div>
									    <div class="d-inline-flex flex-column flex-md-row align-items-md-center gap-lg-4 gap-2">
									        <label for="search" class="form-label-sm mb-0">
									        Search
									        </label>
									        <input type="search" class="form-control form-control-md" id="search" name="search" placeholder="Search here" autocomplete="on">
									        <a href="#" class="btn btn-sm btn-primary rounded text-nowrap">
									        Advance Search</a>
									    </div>
									</div>
									<!-- Hoverable rows start -->
	<div class="row" id="table-hover-row">
	  <div class="col-12">
		<div class="card">
		  <div class="table-responsive">
			<table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
			  <thead>
				<tr role="row">
				  <th scope="col" class="text-center">
					<input class="form-check-input" type="checkbox" value="" aria-label="Select All Providers">
				  </th>
				  <th scope="col">Team</th>
				  <th scope="col">Phone Number</th>
				  <th scope="col" class="text-center">Upcoming Appointments</th>
				  <th scope="col">Action</th>
				</tr>
			  </thead>
			  <tbody>
				<tr role="row" class="odd">
				  <td class="text-center">
					<input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
				  </td>
				  <td>
					<div class="row g-2">
					  <div class="col-md-2">
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Dori Griffiths, Deactivated-provider Image">
					  </div>
					  <div class="col-md-10">
						<h6 class="fw-semibold">Dori Griffiths</h6>
						<p>dorigriffit@gmail.com</p>
					  </div>
					</div>
				  </td>
				  <td>
					<p>(923) 023-9683</p>
				  </td>
				  <td class="text-center">5</td>
				  <td>
					<div class="d-flex actions">
					  <a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
							<use xlink:href="/css/common-icons.svg#pencil"></use>
						</svg>
					  </a>
					  <a href="#"  aria-label="View Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
						<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                         xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                         </svg>
					  </a>
					  <div class="d-flex actions">
				    	<div class="dropdown ac-cstm">
				    	<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
							<svg class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
							xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
							</svg>
				    	</a>
				    	<div class="tablediv dropdown-menu">
				    	<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
				    	<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
				    	<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
				    	<a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat with Provider</a>
				    	<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
				    	<a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>
	                    Activate</a>
				    	</div>
				    	</div>
					</div>
					</div>
				  </td>
				</tr>
				<tr role="row" class="even">
				  <td class="text-center">
					<input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
				  </td>
				  <td>
					<div class="row g-2">
					  <div class="col-md-2">
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Dori Griffiths, Deactivated-provider Image">
					  </div>
					  <div class="col-md-10">
						<h6 class="fw-semibold">Dori Griffiths</h6>
						<p>dorigriffit@gmail.com</p>
					  </div>
					</div>
				  </td>
				  <td>
					<p>(923) 023-9683</p>
				  </td>
				  <td class="text-center">5</td>
				  <td>
					<div class="d-flex actions">
						<a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						  <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
							  <use xlink:href="/css/common-icons.svg#pencil"></use>
						  </svg>
						</a>
						<a href="#"  aria-label="View Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
						  <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						   xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						   </svg>
						</a>
						<div class="d-flex actions">
						  <div class="dropdown ac-cstm">
						  <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
							  <svg class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
							  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
							  </svg>
						  </a>
						  <div class="tablediv dropdown-menu">
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
						  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat with Provider</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
						  <a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>
						  Activate</a>
						  </div>
						  </div>
					  </div>
					  </div>
				  </td>
				</tr>
				<tr role="row" class="odd">
				  <td class="text-center">
					<input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
				  </td>
				  <td>
					<div class="row g-2">
					  <div class="col-md-2">
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Dori Griffiths, Deactivated-provider Image">
					  </div>
					  <div class="col-md-10">
						<h6 class="fw-semibold">Dori Griffiths</h6>
						<p>dorigriffit@gmail.com</p>
					  </div>
					</div>
				  </td>
				  <td>
					<p>(923) 023-9683</p>
				  </td>
				  <td class="text-center">5</td>
				  <td>
					<div class="d-flex actions">
						<a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						  <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
							  <use xlink:href="/css/common-icons.svg#pencil"></use>
						  </svg>
						</a>
						<a href="#"  aria-label="View Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
						  <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						   xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						   </svg>
						</a>
						<div class="d-flex actions">
						  <div class="dropdown ac-cstm">
						  <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
							  <svg class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
							  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
							  </svg>
						  </a>
						  <div class="tablediv dropdown-menu">
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
						  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat with Provider</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
						  <a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>
						  Activate</a>
						  </div>
						  </div>
					  </div>
					  </div>
				  </td>
				</tr>
				<tr role="row" class="even">
				  <td class="text-center">
					<input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
				  </td>
				  <td>
					<div class="row g-2">
					  <div class="col-md-2">
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Dori Griffiths, Deactivated-provider Image">
					  </div>
					  <div class="col-md-10">
						<h6 class="fw-semibold">Dori Griffiths</h6>
						<p>dorigriffit@gmail.com</p>
					  </div>
					</div>
				  </td>
				  <td>
					<p>(923) 023-9683</p>
				  </td>
				  <td class="text-center">5</td>
				  <td>
					<div class="d-flex actions">
						<a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						  <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
							  <use xlink:href="/css/common-icons.svg#pencil"></use>
						  </svg>
						</a>
						<a href="#"  aria-label="View Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
						  <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						   xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						   </svg>
						</a>
						<div class="d-flex actions">
						  <div class="dropdown ac-cstm">
						  <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
							  <svg class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
							  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
							  </svg>
						  </a>
						  <div class="tablediv dropdown-menu">
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
						  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat with Provider</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
						  <a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>
						  Activate</a>
						  </div>
						  </div>
					  </div>
					  </div>
				  </td>
				</tr>
				<tr role="row" class="odd">
				  <td class="text-center">
					<input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
				  </td>
				  <td>
					<div class="row g-2">
					  <div class="col-md-2">
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Dori Griffiths, Deactivated-provider Image">
					  </div>
					  <div class="col-md-10">
						<h6 class="fw-semibold">Dori Griffiths</h6>
						<p>dorigriffit@gmail.com</p>
					  </div>
					</div>
				  </td>
				  <td>
					<p>(923) 023-9683</p>
				  </td>
				  <td class="text-center">5</td>
				  <td>
					<div class="d-flex actions">
						<a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						  <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
							  <use xlink:href="/css/common-icons.svg#pencil"></use>
						  </svg>
						</a>
						<a href="#"  aria-label="View Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
						  <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						   xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						   </svg>
						</a>
						<div class="d-flex actions">
						  <div class="dropdown ac-cstm">
						  <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
							  <svg class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
							  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
							  </svg>
						  </a>
						  <div class="tablediv dropdown-menu">
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
						  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat with Provider</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
						  <a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>
						  Activate</a>
						  </div>
						  </div>
					  </div>
					  </div>
				  </td>
				</tr>
				<tr role="row" class="even">
				  <td class="text-center">
					<input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
				  </td>
				  <td>
					<div class="row g-2">
					  <div class="col-md-2">
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Dori Griffiths, Deactivated-provider Image">
					  </div>
					  <div class="col-md-10">
						<h6 class="fw-semibold">Dori Griffiths</h6>
						<p>dorigriffit@gmail.com</p>
					  </div>
					</div>
				  </td>
				  <td>
					<p>(923) 023-9683</p>
				  </td>
				  <td class="text-center">5</td>
				  <td>
					<div class="d-flex actions">
						<a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						  <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
							  <use xlink:href="/css/common-icons.svg#pencil"></use>
						  </svg>
						</a>
						<a href="#"  aria-label="View Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
						  <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						   xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						   </svg>
						</a>
						<div class="d-flex actions">
						  <div class="dropdown ac-cstm">
						  <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
							  <svg class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
							  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
							  </svg>
						  </a>
						  <div class="tablediv dropdown-menu">
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
						  <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href="#"><i class="fa fa-comment"></i>Chat with Provider</a>
						  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
						  <a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>
						  Activate</a>
						  </div>
						  </div>
					  </div>
					  </div>
				  </td>
				</tr>
			  </tbody>
			</table>
		  </div>
		</div>
	  </div>
	</div>
	<!-- Hoverable rows end -->
								</form>
								<div class="d-flex flex-column flex-md-row justify-content-between">
    <div>
        <p class="fw-semibold">Showing 1 to 5 of 100 entries</p>
    </div>
    <nav aria-label="Page Navigation">
        <ul class="pagination justify-content-start justify-content-lg-end">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item active"><a class="page-link" href="#">4</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
    {{-- icon legend bar start --}}
    <div class="d-flex actions gap-3 justify-content-md-end mb-2">
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
					<use xlink:href="/css/common-icons.svg#pencil"></use>
				</svg>
            </a>
            <span class="text-sm">
            Edit Provider
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="View Provider" aria-label="view Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
				<svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
				xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
				</svg>
            </a>
            <span class="text-sm">
            View Provider
            </span>
        </div>
        </div>
        {{-- icon legend bar end --}}
							  </div>
							</div>
						  </div>
						</div>
					  </section>
	 <!--End : Provider List -->
		</div>
	 @endif
</div>
