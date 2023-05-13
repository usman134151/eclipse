{{-- Setup Details - Start --}}
<x-off-canvas show="setupDetails">
	<x-slot name="title">{{$setupLabel}} Values</x-slot>

  @livewire('app.common.panels.setup-details')

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
