<x-off-canvas show="offcanvasOpenCheckIn">
    <x-slot name="title">Check-In # {{ $bookingNumber }}</x-slot>
    @if ($booking_id &&$providerPanelType==1)
        @livewire('app.common.panels.provider.check-in', ['booking_id' => $booking_id,'booking_service_id'=>$booking_service_id, 'provider_id'=>$selectedProvider])
    @endif
</x-off-canvas>
<script>
  window.addEventListener('open-check-in', function(event) {
    var booking_id = event.detail.booking_id;
    var booking_service_id = event.detail.booking_service_id;

    Livewire.emit('showCheckInPanel', booking_id, booking_service_id); 
  });

</script>
