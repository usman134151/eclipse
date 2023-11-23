<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
	@livewire('app.common.forms.customer-form') {{-- Show Add / Edit Form --}}
	
	@elseif($showProfile)
	@livewire('app.common.customer-details',['user'=>$user])
	@elseif($importFile)
	@livewire('app.common.import.customer')
	@else
	{{-- BEGIN : Header Section --}}
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">All Customers</h1>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="http://127.0.0.1:8000" title="Go to Dashboard"
										aria-label="Go to Dashboard">
										{{-- Updated by Shanila to Add svg icon--}}
										<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
											<use xlink:href="/css/common-icons.svg#home"></use>
										</svg>
										{{-- End of update by Shanila --}}
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)">
										Customers
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)" class="text-secondary">
										All Customers
									</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- END : Header Section --}}
		<section id="multiple-column-form">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12 mb-md-2">
									<div class="row">
										<div class="d-flex flex-column flex-md-row justify-content-end mt-4 mb-3 gap-2">
											<button wire:click.prevent="downloadExportFile()" type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
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
												<span>Import Customer</span>
											</button>
											<a class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2"href="/admin/customer/create-customer">
												{{-- Updated by Shanila to Add svg icon--}}
												<svg aria-label="Add Customer" width="20" height="20" viewBox="0 0 20 20">
													<use xlink:href="/css/common-icons.svg#plus"></use>
												</svg>
												{{-- End of update by Shanila --}}
												<span>Add Customer</span>
											</a>
										</div>
									</div>
								</div>
							</div>

							{{-- Hoverable rows Start --}}
							<div class="row" id="table-hover-row">
								
								<div class="col-12">
									<div class="card">
									
										@livewire('app.common.lists.customers',['status' => $this->status], key(Str::random(10)))
									
							{{-- Icon Legend Bar - Start --}}
							<div class="d-flex actions gap-3 justify-content-end mb-2">
								<div class="d-flex gap-2 align-items-center">
									<a href="#" title="Edit Customer" aria-label="Edit Team"
										class="btn btn-sm btn-secondary rounded btn-hs-icon">
										<svg title="Edit Customer" width="20" height="20" viewBox="0 0 20 20">
											<use xlink:href="/css/common-icons.svg#pencil"></use>
										</svg>
									</a>
									<span class="text-sm">
										Edit Customer
									</span>
								</div>
								<div class="d-flex gap-2 align-items-center">
									<a href="#" title="View Customer" aria-label="View"
										class="btn btn-sm btn-secondary rounded btn-hs-icon">
										{{-- Updated by Shanila to Add svg icon--}}
										<svg aria-label="View Customer" width="20" height="20" viewBox="0 0 20 20">
											<use xlink:href="/css/common-icons.svg#view"></use>
										</svg>
										{{-- End of update by Shanila --}}
									</a>
									<span class="text-sm">
										View Customer
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
	@endif
	@push('scripts')
	<script>
	function updateVal(attrName,val){
	
	if(val!=''){
		Livewire.emit('updateVal', attrName, val);
	}
		

	}
	Livewire.on('updateAddressType', (type) => {
            // Handle the event here
           
            // Open the modal
            $('#addAddressModal').modal('show');
        });
        Livewire.on('modalDismissed', () => {
            $('#addAddressModal').modal('hide');
               
            });

   
        Livewire.on('passwordmodalDismissed', () => {
            $('#changePasswordModal').modal('hide');
               
            });

			document.addEventListener('updateModelVars', function (event) {
				const elemId = event.detail.elem;
				var elem = document.getElementById(elemId);
				var clickEvent = new Event("click");
				elem.dispatchEvent(clickEvent);
            });
			
</script>

@endpush
</div>
