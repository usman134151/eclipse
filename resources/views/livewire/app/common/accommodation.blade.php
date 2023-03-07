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
                     {{-- icon legend bar start --}}
                     <div class="d-flex actions gap-3 justify-content-end mb-2">
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" title="Edit Provider" aria-label="Edit Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="pencil"/>
                            </a>
                            <span class="text-sm">
                            Edit
                            </span>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" title="View Provider" aria-label="view Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.2857 17.1423C15.0747 17.1423 15.7143 16.5027 15.7143 15.7137C15.7143 14.9247 15.0747 14.2852 14.2857 14.2852C13.4968 14.2852 12.8572 14.9247 12.8572 15.7137C12.8572 16.5027 13.4968 17.1423 14.2857 17.1423Z" fill="black"/>
                                <path d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7748 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z" fill="black"/>
                                <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"/>
                            </svg>
                            </a>
                            <span class="text-sm">
                            View
                            </span>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" title="Activate" aria-label="Activate" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                <i style="margin-left: 8px" class="fa fa-plus"></i>
                              </a>
                            <span class="text-sm">
                                Add</span>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" title="Activate" aria-label="Activate" class="btn btn-sm btn-secondary rounded btn-hs-icon"  data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                <i style="margin-left: 8px" class="fa fa-clone"></i>
                              </a>
                            <span class="text-sm">
                                Duplicate</span>
                        </div>

                        </div>
                        {{-- icon legend bar end --}}
                  </div>
                </div>
              </div>
            </div>
          </section>
@endif
</div>
</div>
