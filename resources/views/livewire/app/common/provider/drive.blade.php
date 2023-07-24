
   <div class="card">
   <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

        <div class="card-body">
            <div class="row">
                <h3>My Drive</h3>
                <p>Here you can manage your professional credentials and required documents. You will receive notifications when your credentials are approaching expiration or have expired.</p>
            </div>

            @livewire('app.common.forms.provider-credentials-drive',['showForm'=>true,'provider_id'=>Auth::id()])
		
       
        </div>
    
    {{-- @include('panels.common.pending-credentials') --}}
    </div>

    
   
    

@push('scripts')

<script>
	function updateVal(attrName,val){

		Livewire.emit('updateVal', attrName, val);
	}

  Livewire.on('openActiveCredentialModal', (type) => {
      // Open the modal
      $('#viewButtonModal').modal('show');
  });

  Livewire.on('documentModalDismissed', () => {
    $('#viewButtonModal').modal('hide');
        
    });
			

</script>
@endpush