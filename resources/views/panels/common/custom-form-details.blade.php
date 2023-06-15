{{-- form Details - Start --}}
<x-off-canvas show="formDetails">
	<x-slot name="title">{{$formLabel}} - Existing Forms</x-slot>
  <div class="row">
      <div class="col-12">     
        @if($formId>0)
           @livewire('app.common.lists.form-details', ['key' =>'details'.$formId, 'formId' => $formId,'formDeleteable'=>$formDeleteable,]) 
           @endif
      </div>      
    </div>
    <!-- end of list -->
</x-off-canvas>
<script>
  window.addEventListener('refresh-form-details', function(event) {
    console.log('in browser event');
    var formId = event.detail.formId;
    var formLabel=event.detail.formLabel;
    var formDeleteable=event.detail.formDeleteable;

    Livewire.emit('refreshFormDetails', formId, formLabel,formDeleteable); 
    {{-- Livewire.emit('refreshDetailList', formDeleteable); --}}
  });

</script>

{{-- form Details end - End --}}
