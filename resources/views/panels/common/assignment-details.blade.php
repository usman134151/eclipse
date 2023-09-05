<x-off-canvas show="assignmentDetails" style="z-index: 1056;">
    <x-slot name="title">Assignment Detail ({{ $bookingNumber }}) </x-slot>
    @if ($booking_id>0)
        @livewire('app.common.panels.assignment-details',['booking_id'=>$booking_id])
    @endif
</x-off-canvas>
<script>
  window.addEventListener('open-assignment-details', function(event) {
    var booking_id = event.detail.booking_id;
    Livewire.emit('setAssignmentDetails', booking_id); 
  });

</script>
