<div x-data="{ adminStaffDetails: false }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @if ($showForm)
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-4">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">Add Admin Staff Team</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard"
                                        aria-label="Go to Dashboard">
                                        <x-icon name="home" />
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        Settings
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        Add Admin Staff Team
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="card">
                <div class="card-body">
                    <div x-data="{ tab: 'team-info' }" id="tab_wrapper">
                        <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="javascript:void(0)" class="nav-link" :class="{ 'active': tab === 'team-info' }"
                                    @click.prevent="tab = 'team-info'" id="team-info-tab" role="tab"
                                    aria-controls="team-info" aria-selected="true"><span class="number">1</span> Team
                                    Info</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="javascript:void(0)" class="nav-link"
                                    :class="{ 'active': tab === 'team-members' }" @click.prevent="tab = 'team-members'"
                                    id="team-members-tab" role="tab" aria-controls="team-members"
                                    aria-selected="false"><span class="number">2</span> Admin Staff Team</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="javascript:void(0)" class="nav-link"
                                    :class="{ 'active': tab === 'system-permissions' }"
                                    @click.prevent="tab = 'system-permissions'" id="system-permissions-tab"
                                    role="tab" aria-controls="system-permissions" aria-selected="false"><span
                                        class="number">3</span> System Permissions</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            {{-- Team Info Start --}}
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'team-info' }" id="team-info"
                                role="tabpanel" aria-labelledby="team-info-tab" tabindex="0"
                                x-show="tab === 'team-info'">
                                @livewire('app.admin.team.team-info', ['showForm' => $showForm])
                            </div>
                            {{-- Team Info End --}}

                            {{-- Admin Staff Start --}}
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'team-members' }"
                                id="team-members" role="tabpanel" aria-labelledby="team-members-tab" tabindex="0"
                                x-show="tab === 'team-members'">
                                @livewire('app.admin.team.team-members', ['showForm' => $showForm])
                            </div>
                            {{-- Admin Staff End --}}

                            {{-- System Permissions Start --}}
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'system-permissions' }"
                                id="system-permissions" role="tabpanel" aria-labelledby="system-permissions-tab"
                                tabindex="0" x-show="tab === 'system-permissions'">
                                @livewire('app.admin.team.system-permissions', ['showForm' => $showForm])
                            </div>
                            {{-- System Permissions End --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">All Admin Staff Teams</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard"
                                        aria-label="Go to Dashboard">
                                        <x-icon name="home" />
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        Settings
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        All Admin Staff Teams
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="d-flex justify-content-between mt-4 mb-3">
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" aria-label="file-menu">
                        <x-icon name="blue-file"/>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item d-block" href="#">Action</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-block" href="#">Another action</a>
                        </li>
                        <li>
                            <a class="dropdown-item d-block" href="#">Something else here</a>
                        </li>
                    </ul>
                </div>
                <button type="button"
                    class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2"
                    wire:click="showForm">
                    <x-icon name="plus" />
                    <span class="fw-normal">Add Admin Staff Team</span>
                </button>
            </div>
            <div class="d-flex justify-content-between mb-2">
                <div class="d-inline-flex align-items-center gap-4">
                    <label for="show_records_number" class="form-label">Show</label>
                    <select class="form-select py-2" id="show_records_number">
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                    </select>
                </div>
                <div class="d-inline-flex align-items-center gap-4">
                    <label for="search" class="form-label fw-semibold">Search</label>
                    <input type="search" class="form-control py-2" id="search" name="search"
                        placeholder="Search here" autocomplete="on" />
                </div>
            </div>
            {{-- Hoverable rows start --}}
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
                                        <th scope="col">Team</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col" class="text-center">Total Members</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value=""
                                                aria-label="Select Team">
                                        </td>
                                        <td>
                                            <div class="row g-2">
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Image of Team Profile">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">5</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                    Deactive
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="javascript:void(0)" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="javascript:void(0)" title="Delete Team"
                                                    aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Team Profile Image">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">5</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                    Deactive
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="#" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="#" title="Delete Team" aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Team Profile Image">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">6</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status" checked>
                                                <label class="form-check-label">
                                                    Active
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="#" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="#" title="Delete Team" aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Team Profile Image">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">3</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                    Deactive
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="#" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="#" title="Delete Team" aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Team Profile Image">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">8</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                    Deactive
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="#" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="#" title="Delete Team" aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Team Profile Image">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">2</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status" checked>
                                                <label class="form-check-label">
                                                    Active
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="#" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="#" title="Delete Team" aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Team Profile Image">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">10</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                    Deactive
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="#" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="#" title="Delete Team" aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Team Profile Image">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">5</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                    Deactive
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="#" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="#" title="Delete Team" aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Team Profile Image">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">5</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                    Deactive
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="#" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="#" title="Delete Team" aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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
                                                <div class="col-md-2">
                                                    <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                        class="img-fluid rounded-circle" alt="Team Profile Image">
                                                </div>
                                                <div class="col-md-10">
                                                    <h6 class="fw-semibold">Medical</h6>
                                                    <p>dorigriffit@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p>(923) 023-9683</p>
                                        </td>
                                        <td class="text-center">5</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                    Deactive
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex actions">
                                                <a href="#" title="Edit Team" aria-label="Edit Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="pencil" />
                                                </a>
                                                <a @click="adminStaffDetails = true" href="javascript:void(0)"
                                                    title="View Admin Staff" aria-label="View Admin Staff"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="view" />
                                                </a>
                                                <a href="#" title="Delete Team" aria-label="Delete Team"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <x-icon name="recycle-bin" />
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

            <div class="d-flex justify-content-between">
                <div>
                    <p class="fw-semibold">Showing 1 to 5 of 100 entries</p>
                </div>
                <nav aria-label="Page Navigation">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            {{-- Icon Legend Bar Start --}}
            <div class="d-flex actions gap-3 justify-content-end mb-2">
                <div class="d-flex gap-2 align-items-center">
                    <a href="#" title="Edit Provider" aria-label="Edit Provider"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <x-icon name="pencil" />
                    </a>
                    <span class="text-sm">
                        Edit Admin
                    </span>
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <a href="#" title="Delete" aria-label="Delete"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                        data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                        <x-icon name="recycle-bin" />
                    </a>
                    <span class="text-sm">
                        Delete
                    </span>
                </div>
            </div>
            {{-- Icon Legend Bar End --}}
    @endif
    @include('panels.common.admin-staff-details')
</div>
