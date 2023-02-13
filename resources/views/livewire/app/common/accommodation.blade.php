<div>
	<div>
        <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100"> 
        <div class="spinner-border" role="status" aria-live="polite"> 
        <span class="visually-hidden">Loading...</span> 
        </div></div></div>
          @if($showForm) 
          @livewire('app.common.forms.accommodation-form') <!--show add/edit form (update name of file accordingly-->
         @else

         <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                        <div class="page-title">
                          <div class="row mt-3">
                          <div class="col-md-3">
                            <h1>Accommodations</h1>
                          </div>
                          <div class="col-md-3 ms-auto text-end">
                            <a href="javascript:void(0)" wire:click="showForm" class="btn btn-primary">Add Accommodation</a>
                          </div>
                          </div>
                          <div class="row mt-4">
                            <div class="col-md-12">
                          <p>Create unique categories by which to group your more specific services. You can organize services by setting (Conference Interpreting, Medical Interpreting, Legal Interpreting...), by language modality (Spoken Languages, Signed Languages, Caption Services...), or however you see fit (Spanish Interpreting, French Interpreting, German Interpreting...).</p>
                        </div>
                        </div>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <div class="d-inline-flex align-items-center gap-4">
                          <label for="show_records_number" class="form-label">Show</label>
                          <select class="form-select" id="show_records_number">
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                          </select>
                        </div>
                        <div class="d-inline-flex align-items-center gap-4">
                          <label for="search" class="form-label fw-semibold">Search</label>
                          <input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                        </div>
                      </div>
                        <div class="table-responsive">
                          <table id="industries" class="table table-hover" aria-label="Accomodations">
                            <thead>
                              <tr role="row">
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>   
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tbody>
                                <tr role="row" class="odd"> 
                                  <td>
                                      <div class="row g-2">
                                        <div class="col-md-2">
                                          <img src="/tenant/images/portrait/small/avatar-s-1.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                        </div>
                                      </div> 
                                  </td>
                                  <td>Administration</td>
                                  <td><button class="btn btn-success btn-sm">Activated</button></td>
                                  <td>
                                    <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="even"> 
                                  <td>
                                    <div class="row g-2">
                                      <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-8.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                      </div>
                                    </div> 
                                </td>
                                  <td>Blog Writing</td>
                                  <td><button class="btn btn-warning  btn-sm">Deactivated</button></td>
                                  <td>
                                    <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="odd"> 
                                  <td>
                                    <div class="row g-2">
                                      <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-8.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                      </div>
                                    </div> 
                                </td>
                                  <td>Closed-Captioning</td>
                                  <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                  <td>
                                    <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="even"> 
                                  <td>
                                    <div class="row g-2">
                                      <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-8.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                      </div>
                                    </div> 
                                </td>
                                  <td>Conference Interperting</td>
                                  <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                  <td>
                                    <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="odd"> 
                                  <td>
                                    <div class="row g-2">
                                      <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-8.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                      </div>
                                    </div> 
                                </td>
                                  <td>FRBNY  Interpreting</td>
                                  <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                  <td>
                                    <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="even">
                                  <td>
                                    <div class="row g-2">
                                      <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-8.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                      </div>
                                    </div> 
                                </td> 
                                  <td>General</td>
                                  <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                  <td>
                                    <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm"> 
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="odd"> 
                                  <td>
                                    <div class="row g-2">
                                      <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-8.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                      </div>
                                    </div> 
                                </td>
                                  <td>Legal Interpreting</td>
                                  <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                  <td>
                                    <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="even"> 
                                  <td>
                                    <div class="row g-2">
                                      <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-8.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                      </div>
                                    </div> 
                                </td>
                                  <td>ICS Admin</td>
                                  <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                  <td>
                                    <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="odd"> 
                                  <td>
                                    <div class="row g-2">
                                      <div class="col-md-2">
                                        <img src="/tenant/images/portrait/small/avatar-s-8.jpg" class="img-fluid rounded-circle" alt="Provider Image">
                                      </div>
                                    </div> 
                                </td>
                                  <td>Johnn tooth</td>
                                  <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                  <td>
                                    <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                            </tbody>
                            </table>  
                      </div>
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
                  </div>
                </div>
              </div>
            </div>  
          </section>
@endif
</div>
</div>
