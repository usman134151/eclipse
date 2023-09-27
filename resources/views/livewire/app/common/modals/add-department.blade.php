<div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title fs-5" id="departmentModalLabel">Select Department</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row justify-content-center">
        <div class="col-lg-11">
          <div class="row">
            <div class="col-lg-6 py-2">
              <label class="form-label-sm fw-bold mb-0">Select Department</label>
            </div>
            @if(!$isBooking)
            <div class="col-lg-3 text-center py-2">
              <label class="form-label-sm fw-bold mb-0">Default <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
            </div>
             
            <div class="col-lg-3 text-center py-2">
              <label class="form-label-sm fw-bold mb-0">Supervisor</label>
            </div>
            @endif
          </div><!-- END: Row Header -->
          @if(count($departments)==0)
            <div class="text-center mt-5">Departments has not been added for this company</div>
          @endif
          @foreach($departments as $department)

          <div class="row">
            <div class="col-lg-6 py-2">
              <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox"id="{{$department->id}}" value="{{ $department->id }}" wire:model="selectedDepartments.{{$department->id}}.department_id">
                <label class="form-check-label " for="DepartmentNameCheckbox1">
                  <small>{{$department->name}}</small>
                </label>
              </div>
            </div>
            @if(!$isBooking)
            <div class="col-lg-3 text-center py-2">
              <div class="form-check mb-0 mx-auto d-inline-block">
                <input class="form-check-input" type="radio" name="defaultDepartment" wire:model="defaultDepartment" value="{{$department->id}}">
              </div>
            </div>
             
            <div class="col-lg-3 text-center py-2">
              <div class="form-check mb-0 mx-auto d-inline-block">
                <input class="form-check-input" type="checkbox" id="{{$department->id}}" value="" wire:model="selectedDepartments.{{$department->id}}.is_supervisor" >
              </div>
            </div>
            @endif
          </div>
          <!-- END: Row Data -->
          @endforeach
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="col-12 form-actions">
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
        </div>
        <div class="col-lg-3">
          <button type="button" data-bs-dismiss="modal" class="btn rounded w-100 btn-primary" wire:click="updateData">Add</button>
        </div>
      </div>
    </div>
  </div>