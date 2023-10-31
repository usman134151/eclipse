<div class="modal-content">
    <div class="modal-header justify-center">
        <h2 class="modal-title fs-5 text-center" id="addNewCustomerLabel">ADD NEW CUSTOMER</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">

            <div class="col-lg-12 d-flex gap-2">

                <div class="col-md-6 col-12">
                    <div class="mb-4">
                      <label class="form-label" for="first-name-column">First
                      Name</label>
                      <input type="text" id="first-name-column"
                        class="form-control" placeholder="First Name"
                        name="fname-column" wire:model.defer="user.first_name" />
                    </div>
                    @error('user.last_name')
                      <span class="d-inline-block invalid-feedback mt-2">
                         {{ $message }}
                      </span>
                    @enderror
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                      <label class="form-label" for="first-name-column">Last Name</label>
                      <input type="text" id="first-name-column"
                        class="form-control" placeholder="Last Name" wire:model.defer="user.last_name"
                        name="lname-column" />
                    </div>
                    @error('user.first_name')
                      <span class="d-inline-block invalid-feedback mt-2">
                         {{ $message }}
                      </span>
                    @enderror
                  </div>
            </div>
            <div class="col-lg-12 d-flex gap-2">

                <div class="col-md-6 col-12">
                    <div class="mb-4">
                      <label class="form-label" for="first-name-column">Role</label>
                      @foreach($roles as $role)
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="{{$role['id']}}"  id="{{$role['id']}}"  wire:model.defer="rolesArr">
                          <label class="form-check-label" for="{{$role['id']}}">
                              {{$role['display_name']}}
                          </label>
                        </div>
                      @endforeach
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                      <label class="form-label" for="first-name-column">Email Address</label>
                      <input type="text" id="first-name-column"
                        class="form-control" placeholder="Email Address" wire:model.defer="user.email"
                        name="email-column" />
                    </div>
                    @error('user.email')
                      <span class="d-inline-block invalid-feedback mt-2">
                         {{ $message }}
                      </span>
                    @enderror
                  </div>
            </div>


        </div>
    </div>
    <div class="modal-footer">
        <div class="row justify-content-center w-100 mb-2">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark"
                    data-bs-dismiss="modal">Cancel</button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-primary" wire:click.prevent="addUser">Add</button>
            </div>
        </div>
    </div>
</div>