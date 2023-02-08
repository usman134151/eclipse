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
				<div class="content-header-left col-md-9 col-12 mb-2">
					<div class="row breadcrumbs-top">
						<div class="col-12">
							<h1 class="content-header-title float-start mb-0">All Providers</h1>
							<div class="breadcrumb-wrapper">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
											<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"/>
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
									<div class="row">
										<div class="col-md-12 mb-md-2">
											<div class="row">
												<div class="col-md-3 ms-auto text-end mb-3"></div>
											</div>
										</div>
									</div>
									<div class="d-flex justify-content-between mb-2">
										<div class="d-inline-flex align-items-center gap-4">
											<label for="show_records_number" class="form-label">
												Show
											</label>
											<select class="form-select" id="show_records_number">
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
											</select>
										</div>
										<div class="d-inline-flex align-items-center gap-4">
											<label for="search" class="form-label fw-semibold">
												Search
											</label>
											<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
											<input type="search" class="form-control text-center" id="advance-search" aria-label="Advance Search" name="search" placeholder="Advance Search" autocomplete="on"/>
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
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
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
					  <a href="" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
						</svg>
					  </a>
					  <a href=""  aria-label="View Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
						  <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
						  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
						</svg>
					  </a>
					  <div class="d-flex actions">
											<div class="dropdown ac-cstm">
											<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</a>
											<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
											<a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Chat with Provider</a> 
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
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
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
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
					  <a href="" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
						</svg>
					  </a>
					  <a href="" aria-label="View Provider"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
						  <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
						  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
						</svg>
					  </a>
					  <div class="d-flex actions">
											<div class="dropdown ac-cstm">
											<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</a>
											<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
											<a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Chat with Provider</a> 
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
												<a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>Activate</a>
												
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
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
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
					  <a href="" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
						</svg>
					  </a>
					  <a href="" aria-label="View Provider"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
						  <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
						  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
						</svg>
					  </a>
					  <div class="d-flex actions">
											<div class="dropdown ac-cstm">
											<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</a>
											<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
											<a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Chat with Provider</a> 
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
												<a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>Activate</a>
												
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
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
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
					  <a href="" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
						</svg>
					  </a>
					  <a href="" aria-label="View Provider"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
						  <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
						  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
						</svg>
					  </a>
					  <div class="d-flex actions">
											<div class="dropdown ac-cstm">
											<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</a>
											<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
											<a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Chat with Provider</a> 
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
												<a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>Activate</a>
												
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
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
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
					  <a href="" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
						</svg>
					  </a>
					  <a href="" aria-label="View Provider"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
						  <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
						  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
						</svg>
					  </a>
					  <div class="d-flex actions">
											<div class="dropdown ac-cstm">
											<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</a>
											<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
											<a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Chat with Provider</a> 
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
												<a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>Activate</a>
												
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
						<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
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
					  <a href="" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
						</svg>
					  </a>
					  <a href="" aria-label="View Provider"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						  <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
						  <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
						  <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
						</svg>
					  </a>
					  <div class="d-flex actions">
											<div class="dropdown ac-cstm">
											<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
												<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</a>
											<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Profile</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Schedule</a>
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-eye"></i>View Payment</a>
											<a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Chat with Provider</a> 
											<a title="Edit" aria-label="Edit" href="" class="dropdown-item"><i class="fa fa-edit"></i>Edit Provider</a>
												<a href="javascript:void(0)" aria-label="Activate" title="Activate" class="dropdown-item"><i class="fa fa-check"></i>Activate</a>
												
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
					  </section>
	 <!--End : Provider List -->
		</div>
	 @endif
</div>
