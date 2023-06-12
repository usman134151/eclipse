<div>
	<div class="row mb-4">
		<div class="col-lg-12">
			<h2>Added Admin-Staff Team Members</h2>
			{{-- Hoverable Rows Start --}}
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
							<th scope="col">Name</th>
							<th scope="col">Phone Number</th>
							{{-- <th scope="col">City, State</th> --}}
							{{-- <th scope="col">Open Booking</th> --}}
							{{-- <th scope="col">Managing</th> --}}
							{{-- <th scope="col">Viewing</th> --}}
							<th scope="col">Actions</th>
						</tr>
						</thead>
						<tbody>
						@foreach($adminStaff as $member)
						<tr role="row" class="odd">
							<td class="text-center">
							<input class="form-check-input" type="checkbox" wire:model.defer="teamMembers" value="{{$member->id}}" aria-label="Select Team">
							</td>
							<td>
							<div class="row g-2">
								<div class="col-md-2">
								<img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
								</div>
								<div class="col-md-10">
								<h6 class="fw-semibold">{{$member->name}}s</h6>
								<p>{{$member->email}}</p>
								</div>
							</div>
							</td>
							<td>
							<p>{{$member->userdetail->phone}}</p>
							</td>
							{{-- <td>Melbourne, Victoria Australia</td> --}}
							{{-- <td>20</td> --}}
							{{-- <td>10</td> --}}
							{{-- <td>5</td> --}}
							<td>
							<div class="d-flex actions">
								<a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
										<use xlink:href="/css/common-icons.svg#pencil"></use>
									</svg>
								</a>
								<a href="#" title="View" aria-label="View Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
						               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
						            </svg>
								</a>
								<div class="dropdown ac-cstm">
									<a href="javascript:void(0)" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
										<svg aria-label="More Options" class="mt-1" width="20" height="28" viewBox="0 0 20 28"fill="none"
							               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#dropdown"></use>
							            </svg>
									</a>
									<div class="tablediv dropdown-menu fadeIn">
										<a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item">
											<i class="fa fa-pencil-square-o"></i>
											Option 1
										</a>
										<a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)">
											<i class="fa fa-times-circle"></i>
											Option 2
										</a>
									</div>
								</div>
							</div>
							</td>
						</tr>
						@endforeach
						
						</tbody>
					</table>
					</div>
				</div>
				</div>
			</div>
			{{-- Hoverable Rows End --}}
		</div>
		<div class="row">
			<div class="d-flex justify-content-center gap-2 col-12 form-actions">
				<a
					href="javascript:void(0);"
					class="btn btn-outline-dark rounded px-4"
					role="button"
                    x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('team-info')"
				>
				Back</a>
				<button type="submit" class="btn btn-primary rounded px-4" wire:click.prevent="save" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('team-info')" >Save & Exit</button>
				{{-- <button type="submit" class="btn btn-primary rounded px-4"  x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('system-permissions')">Next</button> --}}
			</div>
		</div>
	</div>
</div>
