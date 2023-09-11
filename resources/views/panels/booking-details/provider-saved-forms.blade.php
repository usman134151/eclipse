{{-- BEGIN: Reschedule Booking Off Canvas --}}
<x-off-canvas show="providerSavedForms">
    <x-slot name="title">Custom Froms
    </x-slot>
    @if ($provider_id)
        @livewire('app.common.panels.booking-details.provider-saved-forms',['booking_id' => $booking_id, 'service_id' => $service_id,'provider_id'=>$provider_id])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('open-provider-saved-forms', function(event) {
        var booking_id = event.detail.booking_id;
        var service_id = event.detail.service_id;
        var provider_id = event.detail.provider_id;

        Livewire.emit('openCustomSavedFroms', booking_id, service_id, provider_id);
    });
</script>
{{-- END: Reschedule Booking Off Canvas --}}
