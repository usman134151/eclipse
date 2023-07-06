{{-- Department List Off Canvas - Start --}}
<x-off-canvas show="departmentList" :allowBackdrop="false" size="fullscreen">
	<x-slot name="title">{{$companyLabel}} - List of Departments</x-slot>
        @if($companyId>0)
            <div class="row">
                                        
              <div class="d-flex flex-column flex-md-row justify-content-end mt-4 mb-3 gap-2">
                
              
                  <a href="/admin/department/create-department/{{$companyId}}" type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
                    {{-- Updated by Shanila to Add svg icon--}}
                    <svg aria-label="Add Department" width="20" height="20" viewBox="0 0 20 20">
                      <use xlink:href="/css/common-icons.svg#plus"></use>
                    </svg>
                    {{-- End of update by Shanila --}}
                    <span>Add Department</span>
                  </a>
              </div>
            </div>

			      @livewire('app.common.lists.departments',['companyId'=>$companyId,'companyLabel'=>$companyLabel])
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