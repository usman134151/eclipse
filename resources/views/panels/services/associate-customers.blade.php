{{-- BEGIN: Associate-Customer Off Canvas --}}
<x-off-canvas show="associateCustomer" style="z-index:400000">
	<x-slot name="title">Associate Customer</x-slot>
    @livewire('app.common.panels.services.associate-model', ['modelType' => 'customer'])

</x-off-canvas>
{{-- END: Associate-Customer Canvas --}}
