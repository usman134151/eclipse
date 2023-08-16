<div>
@if($userType=='provider')
    @livewire('app.common.forms.provider-form', ['user' => $user, 'isProvider' => true]) {{-- Show Add / Edit Form With Provider Restrictions --}}
@elseif($userType=='customer')
    @livewire('app.common.forms.customer-form', ['user' => $user, 'isCustomer' => true]) {{-- Show Add / Edit Form With Provider Restrictions --}}

@endif

</div>
@push('scripts')
    <script>
        function updateVal(attrName, val) {
            if (attrName == 'select-days')
                Livewire.emit('updateDay', val);
            else
                // Livewire.emit('updateVal', attrName, val);
                Livewire.emit('updateVal', attrName, val);
            Livewire.emit('refreshFilters', attrName, val);
        }

    </script>
    <script src="/tenant-resources/js/form-functions.js"></script>
	<script>

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
