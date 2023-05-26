<div class="row mb-4 mt-4">
    <div class="col-md-4">
        <h4>Company Name:</h4>
        <span>Microsoft</span>
    </div>
    <div class="col-md-4 mb-4">
        <h4>No. of Customers:</h4>
        <span>10</span>
    </div>
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
            <label for="search-admin-staff" class="form-label fw-semibold">Search</label>
            <input type="search" class="form-control py-2" id="search-admin-staff" name="search" placeholder="Search here" autocomplete="on"/>
        </div>
    </div>
    <div class="table-responsive">
        <table id="" class="table table-hover" aria-label="Companies And Customer Access Table">
            <thead>
                <tr role="row">
                    <th scope="col" class="text-center">
                        <input class="form-check-input" type="checkbox" value="" aria-label="Select All Customers">
                    </th>
                    <th scope="col">Customer</th>
                    <th scope="col">Department</th>
                    <th scope="col"> Permission</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr role="row" class="odd">
                    <td class="text-center">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                    </td>
                    <td>
                       <div class="row g-2">
                            <div class="col-md-2">
                               <img src="/tenant/images/portrait/small/avatar-s-11.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">James Michael </h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Marketing & Sales</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">John Lee</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Accounts & Finance</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-24.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">Eva George</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Customer Service</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-11.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">James Michael </h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Administration</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">Research & Development</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Marketing & Sales</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-11.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">James Michael </h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Marketing & Sales</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">James Michael </h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Marketing & Sales</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">James Michael </h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Marketing & Sales</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">James Michael </h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Marketing & Sales</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">James Michael </h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Marketing & Sales</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
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
                               <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Image of Customer Profile">
                            </div>
                            <div class="col-md-10">
                                <h6 class="fw-semibold mt-3">James Michael </h6>
                            </div>
                        </div>
                    </td>
                    <td>
                     <p>Marketing & Sales</p>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="permissionsToggle" checked aria-label="Permissions Toggle">
                            <label class="form-check-label" for="permissionsToggle">Visible</label>
                            <label class="form-check-label" for="permissionsToggle">Manage</label>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex actions">
                            <a href="javascript:void(0)" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
</div>
