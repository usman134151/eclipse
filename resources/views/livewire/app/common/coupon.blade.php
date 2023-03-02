<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
	@livewire('app.common.forms.coupon-form') {{-- Show Add / Edit Form --}}
	@else
	{{-- Basic multiple Column Form section start --}}
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
							<h1>Coupons</h1>
							</div>
							<div class="col-md-3 ms-auto text-end">
							<a href="#" wire:click="showForm" class="btn btn-primary rounded">Create Coupon</a>
							</div>
							<p>Here you can create and manage coupon campaigns based on specific services, targeting first-time and repeating customers.</p>
						</div>
						</div>
						</div>
						<div class="table-responsive">
							<table id="coupons" class="table table-hover" aria-label="coupons">
							<thead>
								<tr role="row">
									<th scope="col">CODE</th>
									<th scope="col">DISCOUNT</th>
									<th scope="col">ASSOCIATION</th>
									<th scope="col">SERVICES</th>
									<th scope="col">STATUS</th>
									<th scope="col">Action</th>
								</tr>
							</thead>
							<tbody>
								<tbody>
								<tr role="row" class="odd">
									<td>23En80</td>
									<td>5%</td>
									<td>Accessible Media Services</td>
									<td>Education service..</td>
									<td><button class="btn btn-success btn-sm">Activated</button></td>
									<td>
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
											<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
											<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

										</div>
										</div>
									</div>
									</td>
								</tr>
								<tr role="row" class="even">
								<td>700OFF</td>
									<td>5%</td>
									<td>Sign Language Interpreting Services,</td>
									<td>American Sign Language Interpreting</td>
									<td><button class="btn btn-warning  btn-sm">Deactivated</button></td>
									<td>
									<div class="d-flex actions">
										<div class="dropdown ac-cstm">
										<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
											<x-icon name="dropdown"/>
										</a>
										<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
											<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

										</div>
										</div>
									</div>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td>999</td>
									<td>5%</td>
									<td>Chicago</td>
									<td>Copy of Development,Development</td>
									<td><button class="btn btn-success  btn-sm">Activated</button></td>
									<td>
									<div class="d-flex actions">
										<div class="dropdown ac-cstm">
										<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
											<x-icon name="dropdown"/>
										</a>
										<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
											<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>

										</div>
										</div>
									</div>
									</td>
								</tr>
								<tr role="row" class="even">
									<td>2023</td>
									<td>5%</td>
									<td>Accessible Media Services</td>
									<td>Pharmacy</td>
									<td><button class="btn btn-success  btn-sm">Activated</button></td>
									<td>
									<div class="d-flex actions">
										<div class="dropdown ac-cstm">
										<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
											<x-icon name="dropdown"/>
										</a>
										<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
											<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
										</div>
										</div>
									</div>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td>23679</td>
									<td>11%</td>
									<td>Sign Language Interpreting Services</td>
									<td>American Sign Language Interpreting,</td>
									<td><button class="btn btn-success btn-sm">Activated</button></td>
									<td>
									<div class="d-flex actions">
										<div class="dropdown ac-cstm">
										<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
											<x-icon name="dropdown"/>
										</a>
										<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
											<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
										</div>
										</div>
									</div>
									</td>
								</tr>
								<tr role="row" class="even">
									<td>564536</td>
									<td>20%</td>
									<td>Accessible Media Services</td>
									<td>Audio Description Services</td>
									<td><button class="btn btn-success  btn-sm">Activated</button></td>
									<td>
									<div class="d-flex actions">
										<div class="dropdown ac-cstm">
										<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
											<x-icon name="dropdown"/>
										</a>
										<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
											<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
										</div>
										</div>
									</div>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td>INCLUDEME</td>
									<td>10%</td>
									<td>Sign Language Interpreting Services</td>
									<td>CART Captioning</td>
									<td><button class="btn btn-success btn-sm">Activated</button></td>
									<td>
									<div class="d-flex actions">
										<div class="dropdown ac-cstm">
										<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
											<x-icon name="dropdown"/>
										</a>
										<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
											<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
										</div>
										</div>
									</div>
									</td>
								</tr>
								<tr role="row" class="even">
									<td>welcom23</td>
									<td>15%</td>
									<td>Accessible Media Services</td>
									<td>CART Captioning</td>
									<td><button class="btn btn-success btn-sm">Activated</button></td>
									<td>
									<div class="d-flex actions">
										<div class="dropdown ac-cstm">
										<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
											<x-icon name="dropdown"/>
										</a>
										<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
											<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
										</div>
										</div>
									</div>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td>yn2023</td>
									<td>$20</td>
									<td>Caption and Transcription Services</td>
									<td>Test service add</td>
									<td><button class="btn btn-success btn-sm">Activated</button></td>
									<td>
									<div class="d-flex actions">
										<div class="dropdown ac-cstm">
										<a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
											<x-icon name="dropdown"/>
										</a>
										<div class="tablediv dropdown-menu">
											<a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
											<a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
										</div>
										</div>
									</div>
									</td>
								</tr>
							</tbody>
						</table>
						</div>
					</form>
                                          {{-- icon legend bar start --}}
                                          <div class="d-flex actions gap-3 justify-content-end mb-2">
                                            <div class="d-flex gap-2 align-items-center">
                                                <a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil"/>
                                                </a>
                                                <span class="text-sm">
                                                Edit
                                                </span>
                                            </div>
                                            <div class="d-flex gap-2 align-items-center">
                                                <a href="#" title="cross" aria-label="cross " class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="cross"/>
                                                </a>
                                                <span class="text-sm">
                                                        Deactivate                              </span>
                                            </div>

                                            </div>
                                            {{-- icon legend bar end --}}
					</div>
				</div>
				</div>
			</div>
		</section>
		{{-- Basic Floating Label Form section end --}}
		@endif
</div>
