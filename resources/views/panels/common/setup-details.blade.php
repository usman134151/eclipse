{{-- Setup Details - Start --}}
<x-off-canvas show="setupDetails">
	<x-slot name="title">Setup Details</x-slot>



	

          <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
			  @if($setupId>0)
			  {{$setupId}} @livewire('app.common.lists.setup-details', ['key' =>'details'.$setupId, 'setupId' => $setupId,'id'=>$setupId]) @endif</div> 
			</div>
					
          </section>

    <!-- end of list -->
  

   
</x-off-canvas>
<script>
  window.addEventListener('refresh-details', function(event) {
    var setupId = event.detail.setupId;
   // alert(setupId);
    Livewire.emit('refreshSetupDetails', setupId);
    // Do something with the setupId parameter here...
  });
</script>

{{-- Setup Details end - End --}}