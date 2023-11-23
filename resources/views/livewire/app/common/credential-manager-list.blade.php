<div>
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
        <div class="spinner-border" role="status" aria-live="polite">
        <span class="visually-hidden">Loading...</span>
        </div></div>
    </div>
    @if($showForm)
    @livewire('app.common.forms.credential-manager') <!--show add/edit form (update name of file accordingly-->
   @else
    <section>
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                <h1 class="content-header-title float-start mb-0">Credential</h1>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                <use xlink:href="/css/common-icons.svg#home"></use>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">
                            Settings
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                            Credential
                    </li>
                    </ol>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-2 me-2">
                            <div class="d-inline-flex align-items-center gap-4">
                            </div>
                          </div>
                            <div class="page-title">
                                <div class="row mt-3 mb-4">
                                <div class="col-md-5">
                                  <h3>Credential Management</h3>
                                </div>
                                <div class="col-md-3 ms-auto text-end">
                                  <a href="javascript:void(0)" wire:click="showForm" class="btn btn-primary rounded">
                                    <svg class="mx-2" aria-label="Add Message" width="20" height="20" viewBox="0 0 20 20">
                                        <use xlink:href="/css/common-icons.svg#plus">
                                        </use>
                                    </svg>
                                    <span class="mx-1 mt-1">Create Credential</span>
                                </a>
                                </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="d-inline-flex align-items-center gap-4">
                                  <label for="show_records_number" class="form-label">Show</label>
                                  <select class="form-select" id="show_records_number">
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                  </select>
                                </div>
                                {{--  
                                <div class="d-inline-flex align-items-center gap-4">
                                  <label for="search" class="form-label fw-semibold">Search</label>
                                  <input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                                </div>
                                --}}
                                <div class="dropdown">           
                                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg class="mx-2" aria-label="Export Button" width="23" height="26" viewBox="0 0 23 26">
                                            <use xlink:href="/css/common-icons.svg#export-dropdown">
                                            </use>
                                        </svg>                                 
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                  </div>
                            </div>
                          <div class="row" id="table-hover-row">
                            <div class="table-responsive">
                                <table class="table table-hover"
                                    aria-label="Credential Management Table">
                                    <thead>
                                        <tr role="row">
                                            <th scope="col" class="text-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    aria-label="Select All Credentials">
                                            </th>
                                            <th scope="col" width="80%">Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>       
                                        <tr role="row" class="odd" >
                                            <td class="text-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    aria-label="Select Credential">
                                            </td>
                                            <td>
                                                <div class="row g-2">
                                                    <div class="col-md-10">
                                                        <p>Driving License</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Edit" aria-label="Edit">
                                                     <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/sprite.svg#edit-icon"></use></svg>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Delet" aria-label="Delete Service">
                                                        <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even" >
                                            <td class="text-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    aria-label="Select Credential">
                                            </td>
                                            <td>
                                                <div class="row g-2">
                                                    <div class="col-md-10">
                                                        <p>COVID vaccination certificate</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Edit" aria-label="Edit">
                                                     <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/sprite.svg#edit-icon"></use></svg>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Delet" aria-label="Delete Service">
                                                        <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd" >
                                            <td class="text-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    aria-label="Select Credential">
                                            </td>
                                            <td>
                                                <div class="row g-2">
                                                    <div class="col-md-10">
                                                        <p>National Board of Certification for Medical Interpreters (NBCMI)</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Edit" aria-label="Edit">
                                                     <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/sprite.svg#edit-icon"></use></svg>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Delet" aria-label="Delete Service">
                                                        <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even" >
                                            <td class="text-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    aria-label="Select Credential">
                                            </td>
                                            <td>
                                                <div class="row g-2">
                                                    <div class="col-md-10">
                                                        <p>American Translators Association (ATA) Certification</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Edit" aria-label="Edit">
                                                     <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/sprite.svg#edit-icon"></use></svg>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Delet" aria-label="Delete Service">
                                                        <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd" >
                                            <td class="text-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    aria-label="Select Credential">
                                            </td>
                                            <td>
                                                <div class="row g-2">
                                                    <div class="col-md-10">
                                                        <p>United Nations Language Competitive Examination Certification</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Edit" aria-label="Edit">
                                                     <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/sprite.svg#edit-icon"></use></svg>
                                                    </a>
                                                    <a href="#"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        title="Delet" aria-label="Delete Service">
                                                        <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
                                                    </a>
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
                                <a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon"  title="Edit" aria-label="Edit">
                                  <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <use xlink:href="/css/sprite.svg#edit-icon"></use></svg>
                                </a>
                                <span class="text-sm">
                                Edit
                                </span>
                            </div>
                            <div class="d-flex gap-2 align-items-center">
                                <a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon" title="Delet" aria-label="Delete Service">
                                   <svg width="19" height="19" aria-label="Delete" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                   <use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
                               </a>
                               <span class="text-sm">
                                Delete
                               </span>
                            </div>
                            </div>
                            {{-- icon legend bar end --}}
                            
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    @endif
</div>
