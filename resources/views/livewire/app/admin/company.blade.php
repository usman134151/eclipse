<div x-data="{ departmentList:false, departmentProfile:false }">
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
		@livewire('app.admin.forms.add-company') {{-- Show Add / Edit Form --}}
	@elseif ($showProfile)
		@livewire('app.admin.company-profile')
	@else
	{{-- BEGIN: Content --}}
	{{-- BEGIN: Header --}}
	<div class="content-header row">
		<div class="content-header-left col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">All Companies</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="/" title="Go to Dashboard" aria-label="Go to Dashboard">
									<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"/>
									</svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								Customers
							</li>
							<li class="breadcrumb-item">
								All Companies
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- Basic multiple column form section - Start --}}
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<div class="row mb-5">
									<div class="col-md-8">
										<p>
											Here you can view the companies you service and the users, assignments and invoices associated with them.
										</p>
									</div>
									<div class="col-md-4 text-md-end">
										<button type="button" class="d-inline-lg-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
											<svg aria-label="Add Company" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="ANDI508-element ANDI508-highlight ANDI508-element-active" data-andi508-index="27">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"></path>
											</svg>
											<span>Add Company</span>
										</button>
									</div>
								</div>
							</div>
							{{-- <div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-3">
								<div class="d-inline-flex align-items-center gap-4">
									<label for="show_records" class="form-label-sm mb-0">Show</label>
									<select class="form-select form-select-md" id="show_records">
										<option>10</option>
										<option>15</option>
										<option>20</option>
										<option>25</option>
									</select>
								</div>
								<div class="d-inline-flex align-items-center gap-4">
									<label for="search-record" class="form-label-sm mb-0">Search</label>
									<input type="search" class="form-control form-control-md" id="search-record" name="search-record" placeholder="Search here" autocomplete="on">
								</div>
							</div> --}}
							@livewire('app.common.lists.companies', key(Str::random(10)))
							
							
							{{-- Icon Legend Bar - Start --}}
							<div class="d-flex actions gap-3 justify-content-md-end mb-2">
								<div class="d-flex gap-2 align-items-center">
									<a href="#" title="Edit Company" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
										<svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
											<use xlink:href="/css/sprite.svg#edit-icon"></use>
										</svg>
									</a>
									<span class="text-sm">
										Edit Company
									</span>
								</div>
								<div class="d-flex gap-2 align-items-center">
									<a href="#" title="View Company" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
										<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
											<use xlink:href="/css/provider.svg#view"></use>
										</svg>
									</a>
									<span class="text-sm">
										View Company
									</span>
								</div>
							</div>
							{{-- Icon Legend Bar - End --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('panels.company.department-list')
	@include('panels.company.department-profile')
	</section>
	{{-- End: Content --}}
	@endif

	

	
</div>
@push('scripts')
<script>
	function updateVal(attrName,val){
		if(attrName!='address.country')
		Livewire.emit('updateVal', attrName, val);

	}
</script>
@endpush