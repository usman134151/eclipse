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
                            {{-- updated by shanila
							@livewire('app.common.lists.form-list', key(Str::random(10)))
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
