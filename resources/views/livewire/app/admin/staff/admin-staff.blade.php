<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if($showForm)
		@livewire('app.admin.staff.admin-staff-form')
	@elseif($showProfile)
		@livewire('app.common.forms.profile',['user'=>$user])
	@else
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">All Admin Staff</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
									<svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
										<use xlink:href="/css/common-icons.svg#home"></use>
									</svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								<a href="#">
									Settings
								</a>
							</li>
							<li class="breadcrumb-item">
								<span class="text-secondary">All Admin Staff</span>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content-body">
		<div class="d-flex justify-content-end mt-4 mb-3">
			<button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
				<svg class="mx-2" aria-label="Add Admin Staff" width="20" height="20" viewBox="0 0 20 20">
					<use xlink:href="/css/common-icons.svg#plus"></use>
				</svg>
				<span class="fw-normal">Add Admin Staff</span>
			</button>
		</div>

		{{-- updated by Ali to list of admin-staff --}}
        @livewire('app.common.lists.admin-staff',['status' => 1])


</div> {{-- icon legend bar start --}}
<div class="d-flex actions gap-3 justify-content-end mb-2">
    <div class="d-flex gap-2 align-items-center">
        <a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
            <svg aria-label="Edit Company" width="20" height="20" viewBox="0 0 20 20">
				<use xlink:href="/css/common-icons.svg#pencil"></use>
			</svg>
        </a>
        <span class="text-sm">
        Edit staff
        </span>
    </div>
    <div class="d-flex gap-2 align-items-center">
        <a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
            <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
				<use xlink:href="/css/common-icons.svg#recycle-bin"></use>
			</svg>
          </a>
        <span class="text-sm">Delete</span>
    </div>
    <div class="d-flex gap-2 align-items-center">
        <a href="#" title="View Team" aria-label="view Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
			<svg aria-label="View staff" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
			xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
		  </svg>
        </a>
        <span class="text-sm">
        View staff
        </span>
    </div>
    </div>
    {{-- icon legend bar end --}}
	@endif
    <script>
        function updateVal(attrName,val){
        console.log(attrName+'called for'+val);
        if(val!=''){
            Livewire.emit('updateVal', attrName, val);
        }


        }

    </script>

</div>
