@php
    $videoUrl = 'https://www.youtube.com/embed/MLdkcJ5Cb5s?si=jHEX4ax2vVYkfJnZ';
@endphp
<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if ($showForm)
	@livewire('app.admin.forms.role-permission-form')
	@else
	<section id="multiple-column-form">
		<div class="content-header row mb-3">
			<div class="content-header-left col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">
							Roles & Permissions
						</h1>
						<div class="float-lg-end float-md-end float-sm-start mb-0">
                            @include('layouts.video-guide')					
                         </div>
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
									<a href="#">Settings</a>
								</li>
								<li class="breadcrumb-item">
									<span class="text-secondary">
										Roles & Permissions
									</span>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="row mt-3">
							<div class="col-md-12 mb-md-2">
								<div class="row mb-4 mt-2">
									<div class="col-md-5">
										<h2>List of Roles and Permissions</h2>
									</div>
									<div class="col-md-3 ms-auto text-end">
										<a href="javascript:void(0)" class="btn btn-primary rounded" wire:click="showForm">
											{{-- Updated by Shanila to Add svg icon--}}
											<svg aria-label="Add New Role" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#plus"></use>
											</svg>
											{{-- End of update by Shanila --}}
											<span class="ms-2">Add New Role</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						@livewire('app.common.lists.role-permissions', key(Str::random(10)))
					</div>
					{{-- Icon Legend Bar Start --}}
					<div class="d-flex actions justify-content-end gap-3 mb-2 me-4">
						<div class="d-flex gap-2 align-items-center">
							<a href="#" title="Edit staff" aria-label="Edit staff" class="btn btn-sm btn-secondary rounded btn-hs-icon">
								{{-- Updated by Shanila to Add svg icon--}}
								<svg title="Edit" width="20" height="20" viewBox="0 0 20 20">
									<use xlink:href="/css/common-icons.svg#pencil"></use>
								</svg>
								{{-- End of update by Shanila --}}
							</a>
							<span class="text-sm">
								Edit staff
							</span>
						</div>
						<div class="d-flex gap-2 align-items-center">
							<a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
								{{-- Updated by Shanila to Add svg icon--}}
								<svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
									<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
								</svg>
								{{-- End of update by Shanila --}}
							</a>
							<span class="text-sm">
								Delete
							</span>
						</div>
					</div>
					{{-- Icon Legend Bar End --}}
				</div>
			</div>
		</div>
	</section>
	@endif
</div>