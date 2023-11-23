<div>
	<div class="content-header row">
        <div class="content-header-left col-12 mb-4">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Leads
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Home">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    Assignments
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Leads
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- BEGIN: Content-->
      <!-- BEGIN: Header-->
	  <div class="content-body">
		<!-- Basic multiple Column Form section start -->
		<section id="multiple-column-form">
		  <div class="row">
			<div class="col-12">
			  <div class="card">
				<div class="card-body">
					<div class="row">
					  <div class="col-md-12 mb-md-2">
						<div class="row">
						  <h1 class="text-secondary">Leads</h1>

						<div class="col-12 d-flex align-items-center gap-2 mb-4">
						  <div class="text-secondary h5 m-0">
								 Quote URL :
						  </div>
						  <div>
							  <a href="#" class="btn btn-secondary rounded btn-custom">
								  <span class="btn-text">
								  Copy Link
								  </span> </a>
						  </div>
						</div>
					  </div>
					  </div>
					  </div>
					  <div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-2">
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
					  <table id="unassigned_data" class="table table-hover">
		<thead>
		  <tr role="row">
			<th>Consumer</th>
			<th>Consumer Name</th>
			<th>Email</th>
			<th>Phone Number</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
			<td>Coming Soon</td>
		  {{-- <tr role="row" class="odd">
			<td>AbmaSoft</td>
			<td>Jennie</td>
			<td>helper@dispostable.com</td>
			<td>(343) 424-6364</td>
			<td>
			  <div class="d-flex actions">
				<div class="dropdown ac-cstm">
				  <a href="javascript:void(0)" aria-label="Action Button Dropdown" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
					<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
						xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
					 </svg>
				  </a>

				  <div class="tablediv dropdown-menu fadeIn">
					<a title="Convert to Consumer" aria-label="Convert to Consumer" href="#" class="dropdown-item"><i class="fa fa-sync"></i>Convert to Customer</a>
					<a title="Edit Lead" aria-label="Edit Lead" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Lead</a>
					<a title="Delete" aria-label="Delete" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o"></i>Delete</a>
				  </div>
				</div>
			  </div>
			</td>
		  </tr>
		  <tr role="row" class="odd">
			<td>AbmaSoft</td>
			<td>Jennie</td>
			<td>helper@dispostable.com</td>
			<td>(343) 424-6364</td>
			<td>
			  <div class="d-flex actions">
				<div class="dropdown ac-cstm">
				  <a href="javascript:void(0)" aria-label="Action Button Dropdown" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
					<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
					 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
					</svg>
				  </a>

				  <div class="tablediv dropdown-menu fadeIn">
					<a title="Convert to Consumer" aria-label="Convert to Consumer" href="#" class="dropdown-item"><i class="fa fa-sync"></i>Convert to Customer</a>
					<a title="Edit Lead" aria-label="Edit Lead" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Lead</a>
					<a title="Delete" aria-label="Delete" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o"></i>Delete</a>
				  </div>
				</div>
			  </div>
			</td>
		  </tr>
		  <tr role="row" class="odd">
			<td>AbmaSoft</td>
			<td>Jennie</td>
			<td>helper@dispostable.com</td>
			<td>(343) 424-6364</td>
			<td>
			  <div class="d-flex actions">
				<div class="dropdown ac-cstm">
				  <a href="javascript:void(0)" aria-label="Action Button Dropdown" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
					<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
					 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
					</svg>
				  </a>

				  <div class="tablediv dropdown-menu fadeIn">
					<a title="Convert to Consumer" aria-label="Convert to Consumer" href="#" class="dropdown-item"><i class="fa fa-sync"></i>Convert to Customer</a>
					<a title="Edit Lead" aria-label="Edit Lead" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Lead</a>
					<a title="Delete" aria-label="Delete" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o"></i>Delete</a>
				  </div>
				</div>
			  </div>
			</td>
		  </tr>
		  <tr role="row" class="odd">
			<td>AbmaSoft</td>
			<td>Jennie</td>
			<td>helper@dispostable.com</td>
			<td>(343) 424-6364</td>
			<td>
			  <div class="d-flex actions">
				<div class="dropdown ac-cstm">
				  <a href="javascript:void(0)" aria-label="Action Button Dropdown" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
					<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
					 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
					 </svg>
				  </a>

				  <div class="tablediv dropdown-menu fadeIn">
					<a title="Convert to Consumer" aria-label="Convert to Consumer" href="#" class="dropdown-item"><i class="fa fa-sync"></i>Convert to Customer</a>
					<a title="Edit Lead" aria-label="Edit Lead" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Lead</a>
					<a title="Delete" aria-label="Delete" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o"></i>Delete</a>
				  </div>
				</div>
			  </div>
			</td>
		  </tr>
		  <tr role="row" class="odd">
			<td>AbmaSoft</td>
			<td>Jennie</td>
			<td>helper@dispostable.com</td>
			<td>(343) 424-6364</td>
			<td>
			  <div class="d-flex actions">
				<div class="dropdown ac-cstm">
				  <a href="javascript:void(0)" aria-label="Action Button Dropdown" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
					<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
					 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
					</svg>
				  </a>

				  <div class="tablediv dropdown-menu fadeIn">
					<a title="Convert to Consumer" aria-label="Convert to Consumer" href="#" class="dropdown-item"><i class="fa fa-sync"></i>Convert to Customer</a>
					<a title="Edit Lead" aria-label="Edit Lead" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Lead</a>
					<a title="Delete" aria-label="Delete" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o"></i>Delete</a>
				  </div>
				</div>
			  </div>
			</td>
		  </tr>
		  <tr role="row" class="odd">
			<td>AbmaSoft</td>
			<td>Jennie</td>
			<td>helper@dispostable.com</td>
			<td>(343) 424-6364</td>
			<td>
			  <div class="d-flex actions">
				<div class="dropdown ac-cstm">
				  <a href="javascript:void(0)" aria-label="Action Button Dropdown" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
					<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
					xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
					</svg>
				  </a>

				  <div class="tablediv dropdown-menu fadeIn">
					<a title="Convert to Consumer" aria-label="Convert to Consumer" href="#" class="dropdown-item"><i class="fa fa-sync"></i>Convert to Customer</a>
					<a title="Edit Lead" aria-label="Edit Lead" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Lead</a>
					<a title="Delete" aria-label="Delete" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-trash-o"></i>Delete</a>
				  </div>
				</div>
			  </div>
			</td>
		  </tr> --}}
		</tbody>
	  </table>

					  </div>
					<div class="d-flex flex-column flex-md-row justify-content-between">
					  <div>
						<p class="fw-semibold">Showing 1 to 5 of 30 entries</p>
					  </div>
					  <nav aria-label="Page Navigation">
						<ul class="pagination justify-content-start justify-content-lg-end">
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
       <div class="d-flex flex-wrap actions gap-3 justify-content-md-end mb-2">
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Edit Lead" aria-label="Edit Lead" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <i style="margin-left: 8px" class="fa fa-edit"></i>
            </a>
            <span class="text-sm">
            Edit Lead
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
				<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
					<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
				</svg>
              </a>
            <span class="text-sm">
                Delete                                                        </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Lead sync" aria-label="Lead sync" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <i style="margin-left: 8px" class="fa fa-sync"></i>
            </a>
            <span class="text-sm">
                Convert to Customer
            </span>
        </div>

        </div>
        {{-- icon legend bar end --}}
				</div>

			  </div>
			</div>
		  </div>
		</section>
		<!-- Basic Floating Label Form section end -->
	  </div>
	</div>
  </div>
  <!-- End: Content-->
</div>
