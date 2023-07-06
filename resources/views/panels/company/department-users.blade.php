{{-- Department Users Off Canvas - Start --}}
<x-off-canvas show="departmentUsers" >
	<x-slot name="title">{{$du_departmentLabel}} Department Users</x-slot>
        @if($du_departmentId>0)

        @livewire('app.common.department-users',['departmentId'=>$du_departmentId,'departmentLabel'=>$du_departmentLabel])
        @endif
</x-off-canvas>
<script>
  window.addEventListener('refresh-department-users', function(event) {
    console.log('in user browser event',event.detail.departmentLabel);
    var departmentId = event.detail.departmentId;
    var departmentLabel=event.detail.departmentLabel;

    Livewire.emit('refreshDepartmentUsers', departmentId, departmentLabel); 
  });

</script>
{{-- Department Profile Off Canvas - End --}}