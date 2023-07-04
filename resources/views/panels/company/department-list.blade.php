{{-- Department List Off Canvas - Start --}}
<x-off-canvas show="departmentList">
	<x-slot name="title">{{$companyLabel}} - List of Departments</x-slot>
        @if($companyId>0)

			@livewire('app.common.panels.company.department-list',['companyId'=>$companyId,'companyLabel'=>$companyLabel])
		@endif
</x-off-canvas>
<script>
  window.addEventListener('refresh-department-details', function(event) {
    console.log('in browser event',event.detail.companyId);
    var companyId = event.detail.companyId;
    var companyLabel=event.detail.companyLabel;

    Livewire.emit('refreshDepartmentDetails', companyId, companyLabel); 
  });

</script>

{{-- Department List Off Canvas - End --}}