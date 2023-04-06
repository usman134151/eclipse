{{-- Setup Details - Start --}}
<x-off-canvas show="setupDetails">
	<x-slot name="title">{{$setupLabel}} Values</x-slot>



	

          <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
			            @if($setupId>0) @livewire('app.common.lists.setup-details', ['key' =>'details'.$setupId, 'setupId' => $setupId,'id'=>$setupId]) @endif</div> 
			        </div>

            </div>
					
          </section>

    <!-- end of list -->
  

   
</x-off-canvas>
<script>
  window.addEventListener('refresh-details', function(event) {
    var setupId = event.detail.setupId;
    var setupLabel=event.detail.setupLabel;
  
    Livewire.emit('refreshSetupDetails', setupId,setupLabel);
  });
</script>

{{-- Setup Details end - End --}}