<div>
	<div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
	@if ($showForm)
	<div>@livewire('app.common.forms.department-form') {{-- Show Add / Edit Form --}}</div>
	 {{-- Show Add / Edit Form --}}
    
	@elseif ($showProfile)
        
	    @livewire('app.common.department-profile',['departmentId'=>$department['id']])

    @else
    <div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">All Departments</h1>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="http://127.0.0.1:8000" title="Go to Dashboard"
										aria-label="Go to Dashboard">
										{{-- Updated by Shanila to Add svg icon--}}
										<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
											<use xlink:href="/css/common-icons.svg#home"></use>
										</svg>
										{{-- End of update by Shanila --}}
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)">
										{{$company->name}}
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)" class="text-secondary">
										All Departments
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
                                    <div class="d-flex flex-column flex-md-row justify-content-start mt-4 ">
											
										
											<h2>{{$company->name}} Departments</h2>
										</div>
										<div class="d-flex flex-column flex-md-row justify-content-end mt-4 mb-3 gap-2">
											
										
											<a href="/admin/department/create-department/{{$companyId}}" type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
												{{-- Updated by Shanila to Add svg icon--}}
												<svg aria-label="Add Customer" width="20" height="20" viewBox="0 0 20 20">
													<use xlink:href="/css/common-icons.svg#plus"></use>
												</svg>
												{{-- End of update by Shanila --}}
												<span>Add Department</span>
											</a>
										</div>
									</div>
								</div>
							</div>

							{{-- Hoverable rows Start --}}
							<div class="row" id="table-hover-row">
								
								<div class="col-12">
									<div class="card">
									
										@livewire('app.common.lists.departments',['companyId'=>$companyId,'listpage'=>true])

							{{-- Icon Legend Bar - Start --}}
						
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	@endif

    @include('modals.common.add-address')
    @include('modals.department-manager')
	<script>
	function updateVal(attrName,val){

		Livewire.emit('updateVal', attrName, val);

	}
</script>
</div>
@push('scripts')
<script>
	function updateVal(attrName,val){
		if(attrName=='select-days')
			Livewire.emit('updateDay', val);
		if(attrName!='address.country')
		Livewire.emit('updateVal', attrName, val);

	}
	var phoneIndex=0;
	var localIncrements=0;
	function newElement(parentRow, domRow,updatedIndex) {
			  
		    	phoneIndex=updatedIndex;
                var newElem = document.createElement('div');
                $(newElem).addClass('input-group my-5');
                newElem.innerHTML = $(domRow).html();
                $(newElem).find(':input').attr('value', '');
            // $(newElem).find(':input').attr('onblur', 'saveElement(0,$(this).val())');
                $(newElem).find('textarea').val('');
                $(newElem).find(':checkbox, :radio').attr('checked', false);
                $(newElem).css('display', 'none');
            
            
                parentRow.append(newElem);
                $(newElem).slideDown();
                $(newElem).find('[name="title"]').focus();
                // Get the phone number and title inputs in the new element
                var phoneNumberInput = $(newElem).find('[name="phone-number"]');
                var titleInput = $(newElem).find('[name="title"]');
                var deleteIcon= $(newElem).find('[name="deleteIcon"]');
                deleteIcon.attr('phone-id',phoneIndex);
                // Attach the wire:model directive to the phone number input
                phoneNumberInput.attr('wire:model', 'phoneNumbers.' + phoneIndex + '.phone_number');
                               
                // Attach the wire:model directive to the title input
                titleInput.attr('wire:model', 'phoneNumbers.' + phoneIndex + '.phone_title');
                                phoneIndex++;
                // Listen to the wire:change event on the phone number input
                phoneNumberInput.on('change', function() {
                
                    // Call the Livewire component function addPhone
                    Livewire.emit('addPhone',titleInput.val(),phoneNumberInput.val());
                });
                deleteIcon.on('click', function() {
                    $(newElem).slideUp();
                // Call the Livewire component function addPhone
                 Livewire.emit('removePhone',$(this).attr('phone-id'));
            });

}  
Livewire.on('updateAddressType', (type) => {
            // Handle the event here
           
            // Open the modal
            $('#addAddressModal').modal('show');
        });
        Livewire.on('modalDismissed', () => {
            $('#addAddressModal').modal('hide');
               
            });
      
</script>



@endpush
