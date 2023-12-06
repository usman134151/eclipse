<x-off-canvas show="assignmentDetails" style="z-index: 1056;">
@if(isset($bookingNumber)) 
    <x-slot name="title">Assignment Detail ({{ $bookingNumber }}) </x-slot>
  
    @if ($booking_id>0 &&$providerPanelType==3)
        @livewire('app.common.panels.assignment-details',['booking_id'=>$booking_id])
    @endif
@else
<x-slot name="title">Assignment Detail </x-slot>
@endif    
</x-off-canvas>
<script>
  window.addEventListener('open-assignment-details', function(event) {
    var booking_id = event.detail.booking_id;
    console.log('in init func '+ booking_id);

    Livewire.emit('setAssignmentDetails', booking_id); 
  });

    window.addEventListener('open-assignment-details-dashboard', function(event) {
    var booking_id = event.detail.booking_id;
    console.log('in dashboard '+ booking_id);
    Livewire.emit('openBookingDetails', booking_id); 
  });


</script>
