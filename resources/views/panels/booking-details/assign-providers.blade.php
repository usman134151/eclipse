{{-- BEGIN: Assign Provider Off Canvas --}}
<x-off-canvas show="assignProvider" size="fullscreen">
    <x-slot name="title">Assign Provider </x-slot>
    @if($currentServiceId>0)
        @livewire('app.common.panels.booking-details.assign-providers',['service_id'=>$currentServiceId,'booking_id'=> $booking_id])
    @endif
   
    
</x-off-canvas>
<script>

  window.addEventListener('assign-service-users', function(event) {
    var service_id = event.detail.service_id;
    {{-- Livewire.emit('assignServiceProviders', service_id);  --}}
    if( Array.isArray(service_id))
      service_id = service_id[1];
    @this.set('currentServiceId',service_id)
    @this.set('counter',0)

  });

</script>
{{-- END: Assign Provider Off Canvas --}}
