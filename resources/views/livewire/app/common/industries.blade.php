<div>
  <div id="loader-section" class="loader-section" wire:loading>
      <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
        <div class="spinner-border" role="status" aria-live="polite">
            <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
    @if($showForm)
      @livewire('app.common.forms.industries-form') <!--show add/edit form-->
    @else
         <!-- Basic multiple Column Form section start -->
         <section id="multiple-column-form">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <form class="form">
                        <div class="row">
                          <div class="col-md-12 mb-md-2">
                            <div class="row mt-3">
                            <div class="col-md-3">
                              <h1>Industries</h1>
                            </div>
                            <div class="col-md-3 ms-auto text-end">
                              <a href="#" wire:click="showForm" class="btn btn-primary">Create</a>
                            </div>
                            <p class="mt-3">Here you can set up "industries" by which to organize your customers and collect appropriate request details in step 2 on the service request form.</p>
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
                            <table id="industries" class="table table-hover" aria-label="Industries">
                              <thead>
                                <tr role="row">
                                  <th scope="col">Name</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Created On</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tbody>
                                  <tr role="row" class="odd">
                                    <td>Administration</td>
                                    <td><button class="btn btn-success btn-sm">Activated</button></td>
                                    <td>14th September 2021</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <div class="dropdown">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                             <x-icon name='dropdown'/>
                                            </a>
                                            <div class="tablediv dropdown-menu fadeIn">
                                              <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                              <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row" class="even">
                                    <td>Administrative</td>
                                    <td><button class="btn btn-warning  btn-sm">Deactivated</button></td>
                                    <td>18th November 2021</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <div class="dropdown">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <x-icon name='dropdown'/>
                                            </a>
                                            <div class="tablediv dropdown-menu fadeIn">
                                              <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                              <a title="Activate" aria-label="Activate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-check-circle"></i>Activate</a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row" class="odd">
                                    <td>Higher Education</td>
                                    <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                    <td>2nd June 2021</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                            <x-icon name='dropdown'/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row" class="even">
                                    <td>Conference Interperting</td>
                                    <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                    <td>12th July 2022</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                            <x-icon name='dropdown'/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row" class="odd">
                                    <td>FRBNY  Interpreting</td>
                                    <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                    <td>1st July 2021</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                            <x-icon name='dropdown'/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row" class="even">
                                    <td>General</td>
                                    <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                    <td>29th March 2022</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                            <x-icon name='dropdown'/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row" class="odd">
                                    <td>Legal Interpreting</td>
                                    <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                    <td>21st December 2022</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                            <x-icon name='dropdown'/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row" class="even">
                                    <td>ICS Admin</td>
                                    <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                    <td>21st August 2021</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                            <x-icon name='dropdown'/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row" class="odd">
                                    <td>Johnn tooth</td>
                                    <td><button class="btn btn-success  btn-sm">Activated</button></td>
                                    <td>1st July 2021</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                            <x-icon name='dropdown'/>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                            <a href="javascript:void(0)" aria-label="Edit" title="Edit" class="dropdown-item"><i class="fa fa-pencil-square-o"></i>Edit</a>
                                            <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                  </tr>
                              </tbody>
                              </table>
                        </div>
                      </form>
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
                            <a href="#" title="cross" aria-label="cross " class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <x-icon name="cross"/>
                            </a>
                            <span class="text-sm">
                                    Deactivate                              </span>
                        </div>

                        </div>
                        {{-- icon legend bar end --}}
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
            <!-- Basic Floating Label Form section end -->
       <!-- end of list -->
       @endif
  </div>
