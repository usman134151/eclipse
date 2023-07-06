{{-- Department Profile Off Canvas - Start --}}
<x-off-canvas show="departmentProfile" :allowBackdrop="false" size="fullscreen">
	<x-slot name="title">{{$departmentLabel}} Department Profile</x-slot>
        @if($departmentId>0)

		@livewire('app.common.department-profile',['departmentId'=>$departmentId,'departmentLabel'=>$departmentLabel])
		@endif
</x-off-canvas>
<script>
  window.addEventListener('refresh-department-profile', function(event) {
    console.log('in browser event',event.detail.departmentId);
    var departmentId = event.detail.departmentId;
    var departmentLabel=event.detail.departmentLabel;

    Livewire.emit('refreshDepartmentProfile', departmentId, departmentLabel); 
  });

</script>
{{-- Department Profile Off Canvas - End --}}