{{-- BEGIN: Assign Provider Off Canvas --}}
<x-off-canvas show="assignProvider" size="fullscreen">
    <x-slot name="title">Assign Provider</x-slot>
    @if ($currentServiceId > 0)
        @livewire('app.common.panels.booking-details.assign-providers', ['service_id' => $currentServiceId, 'booking_id' => $booking_id])
        <x-slot name="outsideBody">

            <div class="col-12 justify-content-center form-actions d-flex gap-3">
                <button type="" class="btn btn-outline-dark rounded"
                    x-on:click="assignProvider = !assignProvider">Cancel</button>
                <button type="" x-on:click="window.scrollTo({ top: 0, behavior: 'smooth' });"
                    x-on:close-assign-providers.window="assignProvider = !assignProvider"
                    wire:click="$emit('saveAssignedProviders')" class="btn btn-primary rounded">Save</button>
            </div>
        </x-slot>
    @endif


</x-off-canvas>
<script>
    window.addEventListener('assign-service-users', function(event) {
        var service_id = event.detail.service_id;
        {{-- Livewire.emit('assignServiceProviders', service_id);  --}}

        @this.set('currentServiceId', service_id)
        @this.set('counter', 0)

    });
</script>
{{-- END: Assign Provider Off Canvas --}}
