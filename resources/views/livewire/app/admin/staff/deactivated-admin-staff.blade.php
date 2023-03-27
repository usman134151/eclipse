<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">Deactivated Admin-Staff</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
									<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"></path>
									</svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">
									Settings
								</a>
							</li>
							<li class="breadcrumb-item">
								<span class="text-secondary">Deactivated Admin-Staff</span>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-body">

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
											Deactive
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										</a>
										<a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
											<x-icon name="recycle-bin"/>
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
										<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										</a>
										<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
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
											Deactive
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										</a>
										<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
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
										<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
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
											Deactive
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
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
											Deactive
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
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
											Deactive
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
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
											Deactive
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
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
											Deactive
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
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
											Deactive
										</label>
									</div>
								</td>
								<td>
									<div class="d-flex actions">
										<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="pencil"/>
										</a>
										<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
											<x-icon name="view"/>
										<a href="#" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
											<x-icon name="recycle-bin"/>
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
            <x-icon name="pencil"/>
        </a>
        <span class="text-sm">
        Edit staff
        </span>
    </div>
    <div class="d-flex gap-2 align-items-center">
        <a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
            <i style="margin-left: 8px" class="fa fa-trash "></i>
          </a>
        <span class="text-sm">
            Delete                                                        </span>
    </div>
    <div class="d-flex gap-2 align-items-center">
        <a href="#" title="View Team" aria-label="view Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.2857 17.1423C15.0747 17.1423 15.7143 16.5027 15.7143 15.7137C15.7143 14.9247 15.0747 14.2852 14.2857 14.2852C13.4968 14.2852 12.8572 14.9247 12.8572 15.7137C12.8572 16.5027 13.4968 17.1423 14.2857 17.1423Z" fill="black"/>
            <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7748 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"/>
        </svg>
        </a>
        <span class="text-sm">
        View staff
        </span>
    </div>
    </div>
    {{-- icon legend bar end --}}

</div>
