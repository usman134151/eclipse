@php
    $videoUrl = 'https://www.youtube.com/embed/MLdkcJ5Cb5s?si=jHEX4ax2vVYkfJnZ';
@endphp
<div x-data="{ accommodationServicesAccess: false, teamsProviderAccess: false, companiesCustomers: false }">
	<div class="content-header row">
		<div class="content-header-left col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">{{$label}} Role</h1>
					<div class="float-lg-end float-md-end float-sm-start mb-0">
                            @include('layouts.video-guide')					
                         </div>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
									{{-- Updated by Shanila to Add svg icon--}}
									<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
										<use xlink:href="/css/common-icons.svg#home"></use>
									</svg>
									{{-- End of update by Shanila --}}
								</a>
							</li>
							<li class="breadcrumb-item">
								Settings
							</li>
							<li class="breadcrumb-item">
								{{$label}} Role
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
				<form class="form" wire:submit.prevent="save({{ $roleID }})">
					<div class="mt-4">
						<h2>{{ $label }} Roles and Permissions</h2>
						<div class="row ms-1">
							<div class="row align-items-center">
								<div class="col-auto">
									<label for="system-role-name" class="col-form-label">Label</label>
								</div>
								<div class="col-sm-3">
									<input type="text" id="system-role-name" placeholder="Enter Role Name / Label" class="form-control" wire:model.defer="roleName">
								</div>
								@error('roleName')
								<span class="d-inline-block invalid-feedback mt-2">
									{{ $message }}
								</span>
								@enderror
							</div>
							<p class="mt-3 mb-4">
								Create a predefined set of permissions to quickly deploy to one or multiple users.
							</p>
						</div>
					</div>
					{{-- Hoverable rows start --}}
					<div class="row" id="table-hover-row">
						<div class="col-12">
							<div class="card">
								<div class="table-responsive">
									<table class="table table-hover mb-3">
										<thead>
											<tr>
												<th scope="col">
													Section
												</th>
												{{-- Updated by Sohail Asghar to fetch rights dynamically from DB --}}
												@foreach ($rights as $right)
												<th scope="col">
													<div class="form-check">
														<input
															class="form-check-input maincheck"
															id="{{ $right->right_type }}"
															name="{{ $right->right_type }}"
															type="checkbox"
														>
														<label for="{{ $right->right_type }}" class="mt-1">
															{{ $right->right_type }}
														</label>
													</div>
												</th>
												@endforeach
											</tr>
										</thead>
										<tbody>
											{{-- Updated by Sohail Asghar to fetch section names dynamically from DB --}}
											@foreach ($sections as $section)
											@php
												$count = $loop->iteration;
												$childSections = $section->childSection;
											@endphp
											<tr>
												<td data-bs-toggle="collapse" href="#collapseExample{{ $count }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $count }}">
													<strong>{{ $section->section_name }}</strong>
													@if ($childSections->count())
													<svg
														aria-label="{{ $section->section_name }}"
														class="ms-2 mb-1"
														width="17"
														height="8"
														viewBox="0 0 17 8"
													>
														<use xlink:href="/css/common-icons.svg#collapse-row"></use>
													</svg>
													@endif
												</td>
												{{-- Updated by Sohail Asghar to save permissions in DB --}}
												@foreach ($rights as $right)
												<td>
													<div class="form-check">
														<input
															class="form-check-input subcheck-{{ $right->right_type}}"
															type="checkbox"
															value="{{ $section->id . '-' . $right->id }}"
															wire:model.defer="sectionRights"
														>
													</div>
												</td>
												@endforeach
												{{-- End of update by Sohail Asghar --}}
											</tr>
											@if ($childSections->count())
											<div>
											@foreach ($childSections as $childSection)
											<tr class="collapse" id="collapseExample{{ $count }}">
												<td class="align-middle">
													{{ $childSection->section_name }}
												</td>
												{{-- Updated by Sohail Asghar to save permissions in DB --}}
												@foreach ($rights as $right)
												<td>
													<div class="form-check">
														<input
															class="form-check-input subcheck-{{ $right->right_type}}"
															type="checkbox"
															value="{{ $childSection->id . '-' . $right->id }}"
															wire:model.defer="sectionRights"
														>
													</div>
												</td>
												@endforeach
												{{-- End of update by Sohail Asghar --}}
											</tr>
											@endforeach
											</div>
											@endif
											@endforeach
											{{-- End of updateEnd of update by Sohail Asghar --}}
										</tbody>
									</table>
									@error('sectionRights')
									<span class="d-inline-block invalid-feedback ps-3">
										{{ $message }}
									</span>
									@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 justify-content-center form-actions d-flex">
						<button type="button" class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">
							Cancel
						</button>
						<button type="submit" class="btn btn-primary rounded" wire:click.prevent="save({{ $roleID }})">
							Add
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>

		
	
		$('.maincheck').change(function () {
			
	       
			if ($(this).prop('checked')) {
            $('.subcheck-'+$(this).attr('id')).prop('checked', false);		
			
        } else {
			$('.subcheck-'+$(this).attr('id')).prop('checked', true);
        }	

		$('.subcheck-'+$(this).attr('id')).click();


		
         
       });

  </script>
	{{-- @include('panels.user-access.accommodation-service-access')
	@include('panels.user-access.teams-provider-access')
	@include('panels.user-access.companies-customer-acess') --}}
</div>