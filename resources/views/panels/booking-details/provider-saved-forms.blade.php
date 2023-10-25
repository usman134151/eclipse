{{-- BEGIN: Reschedule Booking Off Canvas --}}
<x-off-canvas show="providerSavedForms">
    <x-slot name="title">Custom Forms
    </x-slot>
    @if ($form_id)
        @livewire('app.common.panels.booking-details.provider-saved-forms',['booking_id'=>$booking_id,'form_id' => $form_id, 'service_id' => $service_id,'provider_id'=>$provider_id])
    @endif
</x-off-canvas>
<script>
    window.addEventListener('open-provider-saved-forms', function(event) {
        var form_id = event.detail.form_id;
        var service_id = event.detail.service_id;
        var provider_id = event.detail.provider_id;

        Livewire.emit('openCustomSavedFroms', form_id, service_id, provider_id);
    });
</script>
{{-- END: Reschedule Booking Off Canvas --}}
