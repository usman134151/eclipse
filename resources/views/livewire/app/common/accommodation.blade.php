<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
	@livewire('app.common.forms.accommodation-form') {{-- Show Add / Edit Form --}}
	@else
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="page-title">
							<div class="row mt-3">
								<div class="col-md-6">
									<h1>{{ $listTitle }}</h1>
								</div>
								<div class="col-md-3 ms-auto text-end">
									<button type="button" wire:click="showForm" class="btn btn-primary">
										Add Accommodation
									</button>
								</div>
							</div>
							<div class="row mt-4">
								<div class="col-md-12">
									<p>{{ $listDescription }}</p>
								</div>
							</div>
						</div>
						@livewire('app.common.lists.accommodations', key(Str::random(10)))
					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
</div>