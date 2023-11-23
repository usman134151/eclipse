<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	<div class="content-header row">
        <div class="content-header-left col-12 mb-4">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Provider Screenings
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Home">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                    {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    Provider
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Provider Screenings
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<section id="multiple-column-form">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form class="form">
							<div class="row">
								<div class="col-md-12 mb-md-2">
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                        <h1>Provider Screenings</h1>
                                        </div>
                                        </div>
								</div>
							</div>
                            {{-- updated by shanila to list of provider --}}
							@livewire('app.common.lists.provider-screenings', key(Str::random(10)))
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
</div>
