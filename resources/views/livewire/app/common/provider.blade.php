<div>
    <div x-data="{addDocument: false , addNew: false}">
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
	@livewire('app.common.forms.provider-form') {{-- Show Add / Edit Form --}}
    @include('panels.common.add-document')
    @include('modals.assign-provider-team')
    @include('modals.contract-provider-availiblity')
    @include('modals.staff-provider-availiblity')
    @include('panels.common.add-new')
	@elseif($showProfile)
	@livewire('app.common.provider-details')
	@elseif($importFile)
	@livewire('app.common.import.provider')
	@else
	{{-- Header Section - Start --}}
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">@if($status)Active @else Deactivated @endif Providers</h1>
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
									@if($status)Active @else Deactivated @endif Providers
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
								<div class="d-flex flex-column flex-md-row justify-content-end mt-4 mb-3 gap-2">
										{{-- Updated by Shanila to fix style of buttons--}}


										<button type="button" wire:click.prevent="downloadExportFile()" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
											{{-- Updated by Shanila to Add svg icon--}}
											<svg aria-label="Download Import File" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#import-file"></use>
											</svg>
											{{-- End of update by Shanila --}}
											<span>Download Import File</span>
										</button>
										<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="importFile">
												{{-- Updated by Shanila to Add svg icon--}}
												<svg aria-label="Import Customer" width="20" height="20" viewBox="0 0 20 20">
													<use xlink:href="/css/common-icons.svg#import-file"></use>
												</svg>
												{{-- End of update by Shanila --}}
												<span>Import Providers</span>
											</button>
											<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
											{{-- Updated by Shanila to Add svg icon--}}
											<svg aria-label="add provider" width="20" height="20" viewBox="0 0 20 20">
												<use xlink:href="/css/common-icons.svg#plus"></use>
											</svg>
											{{-- End of update by Shanila --}}
											<span>Add Provider</span>
										</button>
										{{-- End of update by Shanila --}}
									</div>
								</div>
							</div>
						</div>
						@if($status) <x-advancefilters /> @endif 
						


						<div class="row" id="table-hover-row">
							<div class="col-12">
								<div class="card">
									@livewire('app.common.lists.providers', ['status' => $status],key(Str::random(10)))

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
</div>
<script>
	function updateVal(attrName,val){

		Livewire.emit('updateVal', attrName, val);

	}
</script>
</div>

