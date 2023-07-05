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
	    @livewire('app.common.department-profile')

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
