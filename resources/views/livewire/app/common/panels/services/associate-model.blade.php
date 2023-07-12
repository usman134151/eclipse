<div>
    <div class="d-flex justify-content-between mb-2">

    <div class="d-inline-flex align-items-center gap-4">
        <label for="search-company" class="form-label fw-semibold">Search</label>
        <input type="text" class="form-control py-2" id="search-admin-staff" name="search" placeholder="Search here" autocomplete="on"  wire:keyup="filterResults()"  wire:model.debounce.500ms="searchParameter"/>
    </div>
</div>
<div class="table-responsive">
    <table id="" class="table table-hover" aria-label="Associate Company Table">
        <thead>
            <tr role="row">

                <th scope="col">Name</th>
                <th scope="col"> status</th>
                <th scope="col">Action</th>
            </tr>

        </thead>
        <tbody>
            @foreach($modelList as $index=>$model)
            <tr role="row" class="odd">

                <td>
                   <div class="row ">
                        <div class="col-md-2">
                           <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Admin Profile">
                        </div>
                        <div class="col-md-10">
                          <h6 class="fw-semibold">{{$model['name']}}</h6>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle{{$model['name']}}" checked aria-label="Activation Toggle" wire:model="modelList.{{$index}}.activated"
                                                                                                        wire:click="updateModel({{$index}})">
                        <label class="form-check-label" for="permissionsToggle{{$model['name']}}">Deactivated</label>
                        <label class="form-check-label" for="permissionsToggle{{$model['name']}}">Activated</label>
                    </div>
                </td>
                <td>
                    <div class="d-flex actions">
                        <a href="javascript:void(0)" @click="associateservice = true;$wire.updateServiceData({{$index}})" title="Add Service Rates" aria-label="Add Service Rates" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="dollar-icon"/>
                        </a>
                        @if($modelType=='company')
                        <a href="javascript:void(0)" @click="associateDepartment = true;$wire.reloadDepartment({{$model['id']}})" title="View Departments" aria-label="View Departments" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="building"/>
                        </a>
                        <a href="#"  @click="associateCustomer = true;$wire.reloadUsers({{$model['id']}})" title="user-group" aria-label="user-group" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="user-group"/>
                        </a>
                        @elseif($modelType=='department')
                        <a href="#"  @click="associateCustomer = true;$wire.reloadDepartmentUsers({{$model['id']}})" title="user-group" aria-label="user-group" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <x-icon name="user-group"/>
                        </a>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>

    {{-- icon legend bar start --}}
    <div class="d-flex actions gap-3 justify-content-end mb-2">
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Add Service Rates" aria-label="Add Service Rates"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <x-icon name="dollar-icon" />
            </a>
            <span class="text-sm">
                Add Service Rates
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="View Departments" aria-label="View Departments"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <x-icon name="building" />
            </a>
            <span class="text-sm">
                View Departments
            </span>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <a href="#" title="View Company Users" aria-label="View Company Users"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <x-icon name="user-group" />
            </a>
            <span class="text-sm">
                View Company Users
            </span>
        </div>

    </div>
    {{-- icon legend bar end --}}
  </div>
            </div>