{{-- Department Profile Off Canvas - Start --}}
<x-off-canvas show="departmentProfile" :allowBackdrop="false" size="fullscreen">
	<x-slot name="title">Department Profile</x-slot>
	@livewire('app.common.panels.company.department-profile')
</x-off-canvas>
{{-- Department Profile Off Canvas - End --}}