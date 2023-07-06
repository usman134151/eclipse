{{-- Department Profile Off Canvas - Start --}}
<x-off-canvas show="departmentProfile" :allowBackdrop="false" size="fullscreen">
	<x-slot name="title">Department Profile</x-slot>
	@livewire('app.common.department-profile')
</x-off-canvas>
<script>
  window.addEventListener('refresh-department-profile', function(event) {
    console.log('in browser event',event.detail.departmentId);
    var companyId = event.detail.departmentId;
    var companyLabel=event.detail.departmentLabel;

    Livewire.emit('refreshDepartmentDetails', companyId, companyLabel); 
  });

</script>
{{-- Department Profile Off Canvas - End --}}