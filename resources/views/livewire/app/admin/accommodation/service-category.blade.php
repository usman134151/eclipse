<div x-data="{ associateCompanies:false, associateCustomer:false, associateDepartment:false,associateservice:false }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @if($showForm)
    @livewire('app.admin.accommodation.forms.add-service') {{-- Show Add / Edit Form --}}
    @else
    <!-- BEGIN: Content-->
    <!-- BEGIN: Header-->
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Associate Service</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z"
                                            fill="#0A1E46" />
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Services
                            </li>
                            <li class="breadcrumb-item">
                                Associate Service
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 md-2 mb-5 mt-2">
                                    <div class="row">
                                        <p>Here you can add, edit, and organize the services you offer for each
                                            accommodation.</p>
                                        <div class="col-md-3 ms-auto text-end">
                                            <a href="#" wire:click="showForm" class="btn btn-primary rounded">Create
                                                Service</a>
                                        </div>
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
                                    <input type="search" class="form-control" id="search" name="search"
                                        placeholder="Search here" autocomplete="on" />
                                </div>
                            </div>
                            <!-- Hoverable rows start -->
                            <div class="row" id="table-hover-row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table id="unassigned_data" class="table table-hover"
                                                aria-label="Admin Staff Teams Table">
                                                <thead>
                                                    <tr role="row">
                                                        <th scope="col" class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select All Teams">
                                                        </th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col"></th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr role="row" class="odd" >
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Team">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">

                                                                <div class="col-md-10">
                                                                    <p>Check service duration</p>
                                                                </div>

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a @click="associateCompanies = true">
                                                                        <x-icon name="chain" />
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <p>Associate Companies & Customers</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" aria-label="Toggle Team Status">
                                                                <label class="form-check-label">
                                                                    Activated
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Edit Service" aria-label="Edit Service">
                                                                    <x-icon name='pencil' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Duplicate Service" aria-label="Duplicate Service">
                                                                    <x-icon name='duplicate' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Delete Service" aria-label="Delete Service">
                                                                    <x-icon name='recycle-bin' />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even" >
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Team">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-10">
                                                                    <p>Check service duration</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a @click="associateCompanies = true">
                                                                        <x-icon name="chain" />
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <p>Associate Companies & Customers</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" aria-label="Toggle Team Status">
                                                                <label class="form-check-label">
                                                                    Activated
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Edit Service" aria-label="Edit Service">
                                                                    <x-icon name='pencil' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Duplicate Service" aria-label="Duplicate Service">
                                                                    <x-icon name='duplicate' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Delete Service" aria-label="Delete Service">
                                                                    <x-icon name='recycle-bin' />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd" >
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Team">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-10">
                                                                    <p>Check service duration</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a @click="associateCompanies = true">
                                                                        <x-icon name="chain" />
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <p>Associate Companies & Customers</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" aria-label="Toggle Team Status">
                                                                <label class="form-check-label">
                                                                    Activated
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Edit Service" aria-label="Edit Service">
                                                                    <x-icon name='pencil' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Duplicate Service" aria-label="Duplicate Service">
                                                                    <x-icon name='duplicate' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Delete Service" aria-label="Delete Service">
                                                                    <x-icon name='recycle-bin' />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="even">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Team">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-10">
                                                                    <p>Check service duration</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a @click="associateCompanies = true">
                                                                        <x-icon name="chain" />
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <p>Associate Companies & Customers</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" aria-label="Toggle Team Status">
                                                                <label class="form-check-label">
                                                                    Activated
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Edit Service" aria-label="Edit Service">
                                                                    <x-icon name='pencil' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Duplicate Service" aria-label="Duplicate Service">
                                                                    <x-icon name='duplicate' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Delete Service" aria-label="Delete Service">
                                                                    <x-icon name='recycle-bin' />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd" >
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Team">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-10">
                                                                    <p>Check service duration</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a @click="associateCompanies = true">
                                                                        <x-icon name="chain" />
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <p>Associate Companies & Customers</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" aria-label="Toggle Team Status">
                                                                <label class="form-check-label">
                                                                    Activated
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Edit Service" aria-label="Edit Service">
                                                                    <x-icon name='pencil' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Duplicate Service" aria-label="Duplicate Service">
                                                                    <x-icon name='duplicate' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Delete Service" aria-label="Delete Service">
                                                                    <x-icon name='recycle-bin' />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Team">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-10">
                                                                    <p>Check service duration</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a @click="associateCompanies = true">
                                                                        <x-icon name="chain" />
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <p>Associate Companies & Customers</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" aria-label="Toggle Team Status">
                                                                <label class="form-check-label">
                                                                    Activated
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Edit Service" aria-label="Edit Service">
                                                                    <x-icon name='pencil' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Duplicate Service" aria-label="Duplicate Service">
                                                                    <x-icon name='duplicate' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Delete Service" aria-label="Delete Service">
                                                                    <x-icon name='recycle-bin' />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Team">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-10">
                                                                    <p>Check service duration</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a  @click="associateCompanies = true">
                                                                        <x-icon name="chain" />
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <p>Associate Companies & Customers</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" aria-label="Toggle Team Status">
                                                                <label class="form-check-label">
                                                                    Activated
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Edit Service" aria-label="Edit Service">
                                                                    <x-icon name='pencil' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Duplicate Service" aria-label="Duplicate Service">
                                                                    <x-icon name='duplicate' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Delete Service" aria-label="Delete Service">
                                                                    <x-icon name='recycle-bin' />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd">
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Team">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-10">
                                                                    <p>Check service duration</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a  @click="associateCompanies = true">
                                                                        <x-icon name="chain" />
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <p>Associate Companies & Customers</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" aria-label="Toggle Team Status">
                                                                <label class="form-check-label">
                                                                    Activated
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Edit Service" aria-label="Edit Service">
                                                                    <x-icon name='pencil' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Duplicate Service" aria-label="Duplicate Service">
                                                                    <x-icon name='duplicate' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Delete Service" aria-label="Delete Service">
                                                                    <x-icon name='recycle-bin' />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr role="row" class="odd" >
                                                        <td class="text-center">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                aria-label="Select Team">
                                                        </td>
                                                        <td>
                                                            <div class="row g-2">
                                                                <div class="col-md-10">
                                                                    <p >Check service duration</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <a @click="associateCompanies = true" >
                                                                        <x-icon name="chain" />
                                                                    </a>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <p>Associate Companies & Customers</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-check form-switch">
                                                                <input class="form-check-input" type="checkbox"
                                                                    role="switch" aria-label="Toggle Team Status">
                                                                <label class="form-check-label">
                                                                    Activated
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex actions">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Edit Service" aria-label="Edit Service">
                                                                    <x-icon name='pencil' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Duplicate Service" aria-label="Duplicate Service">
                                                                    <x-icon name='duplicate' />
                                                                </a>
                                                                <a href="#"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                    title="Delete Service" aria-label="Delete Service">
                                                                    <x-icon name='recycle-bin' />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>

                                    </div>

                                </div>
                            </div>

                            <!-- Hoverable rows end -->
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
                                    <a href="#" title="Edit Service" aria-label="Edit Service"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <x-icon name="pencil" />
                                    </a>
                                    <span class="text-sm">
                                        Edit Service
                                    </span>
                                </div>

                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="Duplicate Service" aria-label="Duplicate Service"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                        data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                        <x-icon name="duplicate" />
                                    </a>
                                    <span class="text-sm">
                                        Duplicate Service</span>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="Delete Service" aria-label="Delete Service"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                        data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                        <x-icon name="recycle-bin" />
                                    </a>
                                    <span class="text-sm">
                                        Delete Service </span>
                                </div>

                            </div>
                            {{-- icon legend bar end --}}

                        </div>
                        <!-- ....Back/next (buttons)... -->
                        <div class="col-12 justify-content-center form-actions d-flex gap-2">
                            <button type="button" class="btn btn-outline-dark rounded px-4 py-2">Back</button>
                            <button type="submit" class="btn btn-primary rounded px-4 py-2">Save & Exit</button>
                            <button type="submit" class="btn btn-primary rounded px-4 py-2">Next</button>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Floating Label Form section end -->
    </div>
    <!-- End: Content-->
    @endif
    @include('panels.services.associate-companies')
	@include('panels.services.associate-customers')
    @include('panels.services.associate-department')
    @include('panels.services.associated-service')
</div>
