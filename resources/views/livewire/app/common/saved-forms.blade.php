<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
	@livewire('app.common.forms.add-customized-form') {{-- Show Add / Edit Form --}}
	@else
	{{-- Saved Forms Section - Start --}}
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form class="form">
							<div class="row">
								<div class="col-md-12 mb-md-2">
									<div class="row">
										<div class="col-md-3">
											<h1>Saved Forms</h1>
										</div>
										<div class="col-md-3 ms-auto text-end">
											<a href="#" wire:click="showForm" class="btn btn-primary rounded">
												Create New Form
											</a>
										</div>
										<p>
											Here are the forms you've created. Deactivate forms to save them for later.
										</p>
									</div>
								</div>
							</div>
							<div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-3">
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
							</div>
							<div class="table-responsive">
								<table id="coupons" class="table table-hover" aria-label="coupons">
									<thead>
										<tr role="row">
											<th scope="col">Form Types</th>
											<th scope="col">Status</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr role="row" class="odd">
											<td>Customer Request Form</td>
											<td>
												<button class="btn btn-success btn-sm">
													Activated
												</button>
											</td>
											<td>
												<div class="d-flex actions">
													<div class="dropdown ac-cstm">
														<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
															<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
																<use xlink:href="/css/common-icons.svg#dropdown"></use>
															</svg>
														</a>
														<div class="tablediv dropdown-menu">
															<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																<i class="fa fa-eye"></i>
																View
															</a>
															<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																<i class="fa fa-times-circle"></i>
																Deactivate
															</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr role="row" class="even">
											<td>New Provider Screening</td>
											<td>
												<button class="btn btn-success btn-sm">
													Activated
												</button>
											</td>
											<td>
												<div class="d-flex actions">
													<div class="dropdown ac-cstm">
														<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
															<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
																<use xlink:href="/css/common-icons.svg#dropdown"></use>
															</svg>
														</a>
														<div class="tablediv dropdown-menu">
															<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																<i class="fa fa-eye"></i>
																View
															</a>
															<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																<i class="fa fa-times-circle"></i>
																Deactivate
															</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr role="row" class="odd">
											<td>
												Customer Lead & Quote Form
											</td>
											<td>
												<button class="btn btn-success btn-sm">
													Activated
												</button>
											</td>
											<td>
												<div class="d-flex actions">
													<div class="dropdown ac-cstm">
														<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
															<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
																<use xlink:href="/css/common-icons.svg#dropdown"></use>
															</svg>
														</a>
														<div class="tablediv dropdown-menu">
															<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																<i class="fa fa-eye"></i>
																View
															</a>
															<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																<i class="fa fa-times-circle"></i>
																Deactivate
															</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr role="row" class="even">
											<td>New Provider Application</td>
											<td>
												<button class="btn btn-success  btn-sm">
													Activated
												</button>
											</td>
											<td>
												<div class="d-flex actions">
													<div class="dropdown ac-cstm">
														<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
															<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
																<use xlink:href="/css/common-icons.svg#dropdown"></use>
															</svg>
														</a>
														<div class="tablediv dropdown-menu">
															<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																<i class="fa fa-eye"></i>
																View
															</a>
															<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																<i class="fa fa-times-circle"></i>
																Deactivate
															</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										{{-- <tr role="row" class="odd">
											<td>Customer Request Form</td>
											<td>
												<button class="btn btn-success  btn-sm">
													Activated
												</button>
											</td>
											<td>
												<div class="d-flex actions">
													<div class="dropdown ac-cstm">
														<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
															<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
																<use xlink:href="/css/common-icons.svg#dropdown"></use>
															</svg>
														</a>
														<div class="tablediv dropdown-menu">
															<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																<i class="fa fa-eye"></i>
																View
															</a>
															<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																<i class="fa fa-times-circle"></i>
																Deactivate
															</a>
														</div>
													</div>
												</div>
											</td>
										</tr> --}}
										{{-- <tr role="row" class="even">
											<td>Customer Request Form</td>
											<td>
												<button class="btn btn-success  btn-sm">
													Activated
												</button>
											</td>
											<td>
												<div class="d-flex actions">
													<div class="dropdown ac-cstm">
														<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
															<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
																<use xlink:href="/css/common-icons.svg#dropdown"></use>
															</svg>
														</a>
														<div class="tablediv dropdown-menu">
															<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																<i class="fa fa-eye"></i>
																View
															</a>
															<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																<i class="fa fa-times-circle"></i>
																Deactivate
															</a>
														</div>
													</div>
												</div>
											</td>
										</tr> --}}
										{{-- <tr role="row" class="odd">
											<td>Customer Request Form</td>
											<td>
												<button class="btn btn-success  btn-sm">
													Activated
												</button>
											</td>
											<td>
												<div class="d-flex actions">
													<div class="dropdown ac-cstm">
														<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
															<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
																<use xlink:href="/css/common-icons.svg#dropdown"></use>
															</svg>
														</a>
														<div class="tablediv dropdown-menu">
															<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																<i class="fa fa-eye"></i>
																View
															</a>
															<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																<i class="fa fa-times-circle"></i>
																Deactivate
															</a>
														</div>
													</div>
												</div>
											</td>
										</tr> --}}
										{{-- <tr role="row" class="even">
											<td>Customer Request Form</td>
											<td>
												<button class="btn btn-success  btn-sm">
													Activated
												</button>
											</td>
											<td>
												<div class="d-flex actions">
													<div class="dropdown ac-cstm">
														<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
															<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
																<use xlink:href="/css/common-icons.svg#dropdown"></use>
															</svg>
														</a>
														<div class="tablediv dropdown-menu">
															<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																<i class="fa fa-eye"></i>
																View
															</a>
															<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																<i class="fa fa-times-circle"></i>
																Deactivate
															</a>
														</div>
													</div>
												</div>
											</td>
										</tr> --}}
										{{-- <tr role="row" class="odd">
											<td>Customer Request Form</td>
											<td>
												<button class="btn btn-success  btn-sm">
													Activated
												</button>
											</td>
											<td>
												<div class="d-flex actions">
													<div class="dropdown ac-cstm">
														<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
															<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
																<use xlink:href="/css/common-icons.svg#dropdown"></use>
															</svg>
														</a>
														<div class="tablediv dropdown-menu">
															<a title="Edit" aria-label="Edit" href="#" class="dropdown-item">
																<i class="fa fa-eye"></i>
																View
															</a>
															<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item">
																<i class="fa fa-times-circle"></i>
																Deactivate
															</a>
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
									<p class="fw-semibold">Showing 1 to 10 of 100 entries</p>
								</div>
								<nav aria-label="Page Navigation">
									<ul class="pagination justify-content-start justify-content-lg-end">
										<li class="page-item">
											<a class="page-link" href="#" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
										</li>
										<li class="page-item active">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">2</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
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
						</form>
						{{-- Icon Legend Bar - Start --}}
						<div class="d-flex actions gap-3 justify-content-end mb-2">
							<div class="d-flex gap-2 align-items-center">
								<a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
										<use xlink:href="/css/provider.svg#view"></use>
									</svg>
								</a>
								<span class="text-sm">
									View
								</span>
							</div>
							<div class="d-flex gap-2 align-items-center">
								<a href="#" title="Deactivate" aria-label="Deactivate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Deactivate" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none" xmlns="http://www.w3.org/2000/svg">
										<use xlink:href="/css/common-icons.svg#cross"></use>
									</svg>
								</a>
								<span class="text-sm">
									Deactivate
								</span>
							</div>
						</div>
						{{-- Icon Legend Bar - End --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- Saved Forms Section - End --}}
	@endif
</div>
