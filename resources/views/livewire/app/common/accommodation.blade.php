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
                                            <x-icon name="dropdown"/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="#" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
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
                                            <x-icon name="dropdown"/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="#" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
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
                                            <x-icon name="dropdown"/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="#" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
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
                                            <x-icon name="dropdown"/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="#" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
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
                                            <x-icon name="dropdown"/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="#" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
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
                                            <x-icon name="dropdown"/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="#" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
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
                                            <x-icon name="dropdown"/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="#" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
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
                                            <x-icon name="dropdown"/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="#" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
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
                                            <x-icon name="dropdown"/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a title="View" aria-label="View" href="#" class="dropdown-item"><i class="fa fa-eye"></i>View</a>
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Add Service" aria-label="Add Service" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-plus"></i>Add Service
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            <a title="Duplicate" aria-label="Duplicate" href="#" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
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
