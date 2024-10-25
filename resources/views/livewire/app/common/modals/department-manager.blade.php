<div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title fs-5" id="departmentManagerLabel">Department Supervisor</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="row mb-2">
            <div class="col-lg-8 py-2">
                <label class="form-label-sm fw-bold mb-0 mx-4">Select Department Supervisor</label>
            </div>
            <div class="col-lg-4 text-center py-2">
              <label class="form-label-sm fw-bold mb-0">Default</label>
              <svg  class="fill" width="15" height="16" viewBox="0 0 15 16"fill="none"
                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#fill-question"></use>
              </svg>
            </div>
          </div><!-- END: Row Header -->
          @foreach($users as $user)
          <div class="row">
            <div class="col-lg-8 py-1">
              <div class="form-check mb-0">
                  <input class="form-check-input mt-3 ms-1" type="checkbox" value="{{$user->id}}" wire:model.defer="selectedSupervisors" aria-label="Select Manager">
                <div class="row g-2 d-flex gap-2 align-items-center">
                  <div class="col-md-2 ms-3">
                    <img  width="50" height="50"  src="{{$user->profile_pic != null ? $user->profile_pic : '/tenant-resources/images/portrait/small/avatar-s-11.jpg'}}" class="rounded-circle" alt="Profile Image">
                  </div>
                  <div class="col-md-9">
                    <h6 class="fw-semibold text-sm">{{$user->name}}</h6>
                    <p class="text-sm">{{$user->email}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 text-center py-1">
              <div class="form-check mb-0 mx-auto d-inline-block">
                  <input class="form-check-input" value="{{$user->id}}" wire:model="isDefault" type="radio" name="Choose manager" id="Choose manager">
              </div>
            </div>
          </div><!-- END: Row Data -->
          @endforeach
          
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="row justify-content-center w-100">
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
        </div>
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-primary"  data-bs-dismiss="modal" wire:click="updateData">Add</button>
        </div>
      </div>
    </div>
  </div>