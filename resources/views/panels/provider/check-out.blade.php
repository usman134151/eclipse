<x-off-canvas show="offcanvasOpenCheckOut">

    <x-slot name="title">Check-Out # {{ $bookingNumber }}</x-slot>
    @if ($checkout_booking_id &&$providerPanelType==2)
        @livewire('app.common.panels.provider.check-out', ['booking_id' => $checkout_booking_id,'booking_service_id'=>$booking_service_id,'provider_id'=>$selectedProvider])
    @endif
</x-off-canvas>
<script>
  window.addEventListener('open-check-out', function(event) {
    var booking_id = event.detail.booking_id;
    var booking_service_id = event.detail.booking_service_id;


    Livewire.emit('showCheckOutPanel', booking_id,booking_service_id); 
  });

</script>