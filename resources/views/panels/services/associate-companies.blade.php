{{-- BEGIN: Associate-Companies Off Canvas --}}
<x-off-canvas show="associateCompanies">
	<x-slot name="title">Associate Companies</x-slot>
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
                              <h6 class="fw-semibold">Accenture</h6>
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
                            <a href="javascript:void(0)" title="Add Service Rates" aria-label="Add Service Rates" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                            <a href="javascript:void(0)" @click="associateDepartment = true" title="View Departments" aria-label="View Departments" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="building"/>
                            </a>
                            <a href="#" @click="associateCustomer= true" title="user-group" aria-label="user-group" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="user-group"/>
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
                              <h6 class="fw-semibold">CVS Health</h6>

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
                            <a href="javascript:void(0)" title="Add Service Rates" aria-label="Add Service Rates" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                            <a href="javascript:void(0)" @click="associateDepartment = true" title="View Departments" aria-label="View Departments" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="building"/>
                            </a>
                            <a href="javascript:void(0)" @click="associateCustomer= true" title="View Company Users" aria-label="View Company Users" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="user-group"/>
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
                              <h6 class="fw-semibold">MET International</h6>

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
                            <a href="javascript:void(0)" title="Add Service Rates" aria-label="Add Service Rates" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                            <a href="javascript:void(0)" @click="associateDepartment = true" title="View Departments" aria-label="View Departments" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="building"/>
                            </a>
                            <a href="javascript:void(0)" title="View Company Users" @click="associateCustomer= true" aria-label="View Company Users" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="user-group"/>
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
                              <h6 class="fw-semibold">HRS Inc.</h6>

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
                            <a href="javascript:void(0)" title="Add Service Rates" aria-label="Add Service Rates" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                            <a href="javascript:void(0)" @click="associateDepartment = true" title="View Departments" aria-label="View Departments" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="building"/>
                            </a>
                            <a href="javascript:void(0)" title="View Company Users" @click="associateCustomer= true" aria-label="View Company Users" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="user-group"/>
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
                              <h6 class="fw-semibold">Demo Company</h6>

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
                            <a href="javascript:void(0)" title="Add Service Rates" aria-label="Add Service Rates" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="dollar-icon"/>
                            </a>
                            <a href="javascript:void(0)" @click="associateDepartment = true" title="View Departments" aria-label="View Departments" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="building"/>
                            </a>
                            <a href="javascript:void(0)" title="View Company Users" @click="associateCustomer= true" aria-label="View Company Users" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="user-group"/>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between">
            <div>
                <p class="fw-semibold">Showing 1 to 5 of 30 entries</p>
            </div>
            <nav aria-label="Page Navigation">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">Previous
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item active"><a class="page-link" href="#">4</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">Next
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
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
</x-off-canvas>
{{-- END: Associate-Companies Off Canvas --}}