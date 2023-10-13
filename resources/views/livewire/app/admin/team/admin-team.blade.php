@php
    $videoUrl = 'https://www.youtube.com/embed/MLdkcJ5Cb5s?si=jHEX4ax2vVYkfJnZ';
@endphp

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
            <div class="content-header-left col-12 mb-4">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">{{$label}} Admin Staff Team</h1>
                        <div class="float-lg-end float-md-end float-sm-start mb-0">
                            @include('layouts.video-guide')					
                         </div>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard"
                                        aria-label="Go to Dashboard">
                                        <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        Settings
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        {{$label}} Admin Staff Team
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
                    <div x-data="{ tab: @entangle('component')}" id="tab_wrapper">
                        <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a href="javascript:void(0)" class="nav-link" :class="{ 'active': tab === 'team-info' }"
                                    id="team-info-tab" role="tab" @click.prevent="tab = 'team-info'"
                                    aria-controls="team-info" aria-selected="true"><span class="number">1</span> Team
                                    Info</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                @if($team!=null)
                                    <a href="javascript:void(0)" class="nav-link" @click.prevent="tab = 'team-members'"
                                        :class="{ 'active': tab === 'team-members' }"
                                        id="team-members-tab" role="tab" aria-controls="team-members"
                                        aria-selected="false"><span class="number">2</span> Admin Staff Team</a>
                                @else
                                    <div class="nav-link" title="Fill in first step to proceed">
                                        <span class="number">2</span>
                                        Admin Staff Team
                                    </div>
                                @endif
                            </li>
                         <!--   <li class="nav-item" role="presentation">
                                <a href="javascript:void(0)" class="nav-link"
                                    :class="{ 'active': tab === 'system-permissions' }"
                                    @click.prevent="tab = 'system-permissions'" id="system-permissions-tab"
                                    role="tab" aria-controls="system-permissions" aria-selected="false"><span
                                        class="number">3</span> System Permissions</a>
                            </li> -->
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

                            {{-- System Permissions Start
                            <div class="tab-pane fade" :class="{ 'active show': tab === 'system-permissions' }"
                                id="system-permissions" role="tabpanel" aria-labelledby="system-permissions-tab"
                                tabindex="0" x-show="tab === 'system-permissions'">
                                @livewire('app.admin.team.system-permissions', ['showForm' => $showForm])
                            </div>
                            System Permissions End --}}
                        </div>
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
                                        <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
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
            <div class="d-flex justify-content-end mb-3">
                {{-- <div class="dropdown">
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
                </div> --}}
                <button type="button"
                    class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2"
                    wire:click="showForm">
                    <svg aria-label="Add Admin Staff Team" width="20" height="20" viewBox="0 0 20 20">
                        <use xlink:href="/css/common-icons.svg#plus"></use>
                    </svg>
                    <span class="fw-normal">Add Admin Staff Team</span>
                </button>
            </div>
            {{-- <div class="d-flex justify-content-between mb-2">
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
            </div> --}}
            {{-- Hoverable rows start --}}
            @livewire('app.common.lists.admin-teams', key(Str::random(10)))
            {{-- Icon Legend Bar Start --}}
            <div class="d-flex actions gap-3 justify-content-end mb-2">
                <div class="d-flex gap-2 align-items-center">
                    <a href="#" title="Edit Provider" aria-label="Edit Provider"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
                            <use xlink:href="/css/common-icons.svg#pencil"></use>
                        </svg>
                    </a>
                    <span class="text-sm">
                        Edit Admin
                    </span>
                </div>
                <div class="d-flex gap-2 align-items-center">
                    <a href="#" title="Delete" aria-label="Delete"
                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                        data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                        <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
                            <use xlink:href="/css/common-icons.svg#recycle-bin"></use>
                        </svg>
                    </a>
                    <span class="text-sm">
                        Delete
                    </span>
                </div>
            </div>
            {{-- Icon Legend Bar End --}}
    @endif
    {{-- @include('panels.common.admin-staff-details') --}}
</div>

<script>
function updateVal(attrName,val){

    Livewire.emit('updateVal', attrName, val);

}
</script>
