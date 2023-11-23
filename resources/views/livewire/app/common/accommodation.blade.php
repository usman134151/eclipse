@php
    $videoUrl = 'https://www.youtube.com/embed/epSdx8YXwNw?si=1zRdQJd90vL4WXe8';
@endphp

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
	<div class="content-header row">
        <div class="content-header-left col-12 mb-4">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                       All Accommodations
                    </h1>
					<div class="float-lg-end float-md-end float-sm-start mb-0">
						@include('layouts.video-guide')					
					</div>

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
                                    Settings
                                </a>
                            </li>
                            <li class="breadcrumb-item">
								All Accommodations
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