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
	@elseif($showProfile)
	@livewire('app.common.provider-details')
	@else
	{{-- Header Section - Start --}}
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">All Providers</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
								{{-- Updated by Shanila to Add svg icon--}}
								<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
									<use xlink:href="/css/common-icons.svg#home"></use>
								</svg>
								{{-- End of update by Shanila --}}
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
	{{-- Header Section - Start --}}
	{{-- Provider List - Start --}}
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12 mb-md-2">
								<div class="row">
									<div class="col-md-6 ms-auto text-end mb-3">
										{{-- Updated by Shanila to fix style of buttons--}}
										<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
											{{-- Updated by Shanila to Add svg icon--}}
											<svg aria-label="add provider" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#plus"></use>
											</svg>
											{{-- End of update by Shanila --}}
											<span>Add Provider</span>
										</button>
										<button type="button" wire:click.prevent="downloadExportFile()" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
											{{-- Updated by Shanila to Add svg icon--}}
											<svg aria-label="Download Import File" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#import-file"></use>
											</svg>
											{{-- End of update by Shanila --}}
											<span>Download Import File</span>
										</button>
										{{-- End of update by Shanila --}}
									</div>
								</div>
							</div>
						</div>
						<x-advancefilters />

						{{-- <div class="d-flex justify-content-between mb-2">
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
								<input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on" />
							</div>
						</div> --}}
						<div class="row" id="table-hover-row">
							<div class="col-12">
								<div class="card">
									@livewire('app.common.lists.providers', key(Str::random(10)))
									@php /*<div class="table-responsive">
										<table id="unassigned_data" class="table table-hover"
											aria-label="Admin Staff Teams Table">
											<thead>
												<tr role="row">
													<th scope="col" class="text-center">
														<input class="form-check-input" type="checkbox"
															value="" aria-label="Select All Providers">
													</th>
													<th scope="col">Team</th>
													<th scope="col">Phone Number</th>
													<th scope="col" class="text-center">
														Upcoming Appointments
													</th>
													<th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
												@for ($i = 1; $i <= 6; $i++)
												<tr role="row" class="{{ ($i % 2 == 0) ? 'even' : 'odd' }}">
													<td class="text-center">
														<input class="form-check-input" type="checkbox" value="" aria-label="Select Provider">
													</td>
													<td>
														<div class="row g-2">
															<div class="col-md-2">
																<img src="/tenant/images/portrait/small/avatar-s-20.jpg"
																	class="img-fluid rounded-circle"
																	alt="Dori Griffiths, Provider Image">
															</div>
															<div class="col-md-10">
																<h6 class="fw-semibold">
																	Dori Griffiths
																</h6>
																<p>dorigriffit@gmail.com</p>
															</div>
														</div>
													</td>
													<td><p>(923) 023-9683</p></td>
													<td class="text-center">5</td>
													<td>
														<div class="d-flex actions">
															<a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
																{{-- Updated by Shanila to Add svg icon--}}
																<svg title="Edit Provider" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#pencil"></use>
																</svg>
																{{-- End of update by Shanila --}}
															</a>
															<a href="#" aria-label="View Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
																{{-- Updated by Shanila to Add svg icon--}}
																<svg aria-label="View Provider" width="20" height="20" viewBox="0 0 20 20">
																	<use xlink:href="/css/common-icons.svg#view"></use>
																</svg>
																{{-- End of update by Shanila --}}
															</a>
															<div class="d-flex actions">
																<div class="dropdown ac-cstm">
																	<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
																		{{-- Updated by Shanila to Add svg
																		icon--}}
																		<svg aria-label="More Options" width="20" height="20" viewBox="0 0 20 20">
																			<use xlink:href="/css/common-icons.svg#dropdown"></use>
																		</svg>
																		{{-- End of update by Shanila --}}
																	</a>
																	<div class="tablediv dropdown-menu">
																		<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																			<i class="fa fa-eye"></i>
																			View
																			Schedule
																		</a>
																		<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																			<i class="fa fa-eye"></i>
																			View
																			Payment
																		</a>
																		<a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href="#">
																			<i class="fa fa-comment"></i>
																			Chat
																			with Provider
																		</a>
																		<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																			<i class="fa fa-times-circle"></i>
																			Deactivate
																		</a>
																	</div>
																</div>
															</div>
														</div>
													</td>
												</tr>
												@endfor
											</tbody>
										</table>
									</div>*/
									@endphp
								</div>
							</div>
						</div>
						{{-- <div class="d-flex justify-content-between">
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
						</div> --}}
						{{-- Icon Legend Bar - Start --}}
						<div class="d-flex actions gap-3 justify-content-end mb-2">
							<div class="d-flex gap-2 align-items-center">
								<a href="#" title="Edit Provider" aria-label="Edit Provider"
									class="btn btn-sm btn-secondary rounded btn-hs-icon">
									{{-- Updated by Shanila to Add svg icon--}}
									<svg title="Edit Provider" width="20"
									height="20" viewBox="0 0 20 20">
									<use
										xlink:href="/css/common-icons.svg#pencil">
									</use>
								</svg>
								{{-- End of update by Shanila --}}
								</a>
								<span class="text-sm">
									Edit Provider
								</span>
							</div>
							<div class="d-flex gap-2 align-items-center">
								<a href="#" title="View Provider" aria-label="view Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label='View Provider' width='20' height='20' viewBox='0 0 20 20'>
										<use xlink:href='/css/common-icons.svg#view'></use>
									</svg>
								</a>
								<span class="text-sm">
									View Provider
								</span>
							</div>
						</div>
						{{-- Icon Legend Bar - End --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- Provider List - End --}}
	@endif
    @include('panels.common.add-document')
    @include('modals.assign-provider-team')
    @include('modals.contract-provider-availiblity')
    @include('modals.staff-provider-availiblity')
    @include('panels.common.add-new')
</div>
