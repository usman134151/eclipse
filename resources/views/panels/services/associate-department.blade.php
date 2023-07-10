{{-- BEGIN: Associate-Department Off Canvas --}}
<x-off-canvas show="associateDepartment">
	<x-slot name="title">Associate Department</x-slot>
    @livewire('app.common.panels.services.associate-model',['modelType'=>'department'])
</x-off-canvas>
{{-- END: Associate-Department Off Canvas --}}
