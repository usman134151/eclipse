{{-- BEGIN: Assign Provider Off Canvas --}}
<x-off-canvas show="associateCustomer">
	<x-slot name="title">Associate Customer</x-slot>
	<div class="d-flex justify-content-between mb-2">
        <div class="d-inline-flex align-items-center gap-4">
            <label for="show-records-number" class="form-label">Show</label>
            <select class="form-select py-2" id="show-records-number">
                <option>10</option>
                <option>15</option>
                <option>20</option>
                <option>25</option>
            </select>
        </div>
        <div class="d-inline-flex align-items-center gap-4">
            <label for="search-company" class="form-label fw-semibold">Search</label>
            <input type="search" class="form-control py-2" id="search-admin-staff" name="search" placeholder="Search here" autocomplete="on"/>
        </div>
    </div>
	<div class="table-responsive">
		<table id="" class="table table-hover" aria-label="Associate Company Table">
            <thead>
                <tr role="row">
                    <th scope="col" class="text-center">
                        <input class="form-check-input" type="checkbox" value="" aria-label="Select All Companies">
                    </th>
                    <th scope="col">Name</th>
                    <th scope="col"> status</th>
                    <th scope="col">Action</th>
                </tr>
                {{-- <tr role="row" class="bg-primary">
                    <th>2 Selected Results</th>
                    <th><button class="btn btn-dark rounded" type="submit">Edit</button>
                    <button class="btn btn-dark rounded" type="submit">Duplicate</button>
                    <button class="btn btn-dark btn-outline-dark rounded" type="submit">Delete</button></th> 
                    <th></th>
                    <th></th>
                </tr> --}}
            </thead>
            <tbody>
                
                <tr role="row" class="odd">
                    <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                    </td>
                    <td>
                       <div class="row ">
                            <div class="col-md-2">
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Admin Profile">
                            </div>
                            <div class="col-md-10">
                              <h6 class="fw-semibold">Tessa Leo</h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Deactivated</label>
                            <label class="form-check-label" for="permissionsToggle">Activated</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" @click="associateservice = true" title="dollar" aria-label="dollar" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                           
                        </div>
                    </td>
                </tr>
                <tr role="row" class="odd">
                    <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                    </td>
                    <td>
                       <div class="row ">
                            <div class="col-md-2">
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Admin Profile">
                            </div>
                            <div class="col-md-10">
                              <h6 class="fw-semibold">Tommy Paul</h6>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Deactivated</label>
                            <label class="form-check-label" for="permissionsToggle">Activated</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" @click="associateservice = true" title="dollar" aria-label="dollar" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                           
                        </div>
                    </td>
                </tr>
                <tr role="row" class="odd">
                    <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                    </td>
                    <td>
                       <div class="row g-2">
                            <div class="col-md-2">
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Admin Profile">
                            </div>
                            <div class="col-md-10">
                              <h6 class="fw-semibold">James Micheal</h6>

                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="Togglepermissions" aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Deactivated</label>
                            <label class="form-check-label" for="permissionsToggle">Activated</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" @click="associateservice = true" title="dollar" aria-label="dollar" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                            
                        </div>
                    </td>
                </tr>
                <tr role="row" class="odd">
                    <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                    </td>
                    <td>
                       <div class="row g-2">
                            <div class="col-md-2">
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
                            </div>
                            <div class="col-md-10">
                              <h6 class="fw-semibold">David Jack</h6>

                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Deactivated</label>
                            <label class="form-check-label" for="permissionsToggle">Activated</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" @click="associateservice = true" title="dollar" aria-label="dollar" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                           
                        </div>
                    </td>
                </tr>
                <tr role="row" class="odd">
                    <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                    </td>
                    <td>
                       <div class="row g-2">
                            <div class="col-md-2">
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
                            </div>
                            <div class="col-md-10">
                              <h6 class="fw-semibold">Peter Lee</h6>

                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Deactivated</label>
                            <label class="form-check-label" for="permissionsToggle">Activated</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" @click="associateservice = true" title="dollar" aria-label="dollar" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                           
                        </div>
                    </td>
                </tr>
                <tr role="row" class="odd">
                    <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                    </td>
                    <td>
                       <div class="row g-2">
                            <div class="col-md-2">
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Team Profile">
                            </div>
                            <div class="col-md-10">
                              <h6 class="fw-semibold">Danny Lis</h6>

                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Deactivated</label>
                            <label class="form-check-label" for="permissionsToggle">Activated</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" @click="associateservice = true" title="dollar" aria-label="dollar" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                           
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
	  </div>
</x-off-canvas>
{{-- END: Admin Staff Team Details Off Canvas --}}
