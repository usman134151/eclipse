{{-- Setup Details - Start --}}
<x-off-canvas show="setupDetails">
	<x-slot name="title">{{$setupLabel}} Values</x-slot>
  <div class="row">
      <div class="col-12">     
        @if($setupId>0)
           @livewire('app.common.lists.setup-details', ['key' =>'details'.$setupId, 'setupId' => $setupId,'setupDeleteable'=>$setupDeleteable,]) 
           @endif
      </div>      
    </div>
    <!-- end of list -->
</x-off-canvas>
<script>
  window.addEventListener('refresh-details', function(event) {
    var setupId = event.detail.setupId;
    var setupLabel=event.detail.setupLabel;
    var setupDeleteable=event.detail.setupDeleteable;// updated by shanila to add a new column in tables which can be deletable

    Livewire.emit('refreshSetupDetails', setupId, setupLabel,setupDeleteable); // updated by shanila to add a new column in tables which can be deletable
    Livewire.emit('refreshDetailList', setupDeleteable); // updated by shanila to add a new column in tables which can be deletable
  });

</script>

{{-- Setup Details end - End --}}
