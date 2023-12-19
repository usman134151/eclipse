<div>
    <div class="content-header row mb-3">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Provider Team Detail
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23"
                                        fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Providers</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="text-secondary">
                                    Provider Teams
                                </span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        @if (is_null($team))
        <div id="loader-section" class="loader-section" wire:loading>
            <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                <div class="spinner-border" role="status" aria-live="polite">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        @else
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- BEGAN: Provider Details --}}
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab"
                                        data-bs-target="#dashboard-tab-pane" type="button" role="tab"
                                        aria-controls="dashboard-tab-pane" aria-selected="true">
                                        <svg aria-label="Dashboard" width="31" height="29" viewBox="0 0 31 29"
                                            fill="currentColor" stroke="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#tablet"></use>
                                        </svg>
                                        <span>Dashboard</span>
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="provider-tab" data-bs-toggle="tab"
                                        data-bs-target="#provider-tab-pane" type="button" role="tab"
                                        aria-controls="provider-tab-pane" aria-selected="true">
                                        <svg aria-label="Provider" width="25" height="28" viewBox="0 0 25 28">
                                            <use xlink:href="/css/common-icons.svg#gray-user"></use>
                                        </svg>
                                        <span>Providers</span>
                                    </button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="schedule-tab" data-bs-toggle="tab"
                                        data-bs-target="#schedule-tab-pane" type="button" role="tab"
                                        aria-controls="schedule-tab-pane" aria-selected="false"
                                        onclick="window.dispatchEvent(new Event('resize'))">
                                        <svg aria-label="Schedule" width="30" height="29" viewBox="0 0 30 29"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#gray-calender"></use>
                                        </svg>
                                        <span>Schedule</span>
                                    </button>
                                </li>


                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="notes-tab" data-bs-toggle="tab"
                                        data-bs-target="#notes-tab-pane" type="button" role="tab"
                                        aria-controls="notes-tab-pane" aria-selected="false">
                                        <svg aria-label="Notes" width="28" height="29" viewBox="0 0 28 29" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#gray-notes"></use>
                                        </svg>
                                        <span>Notes</span>
                                    </button>
                                </li>
                                @endif
                            </ul>
                            <!-- Dashboard tab start -->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel"
                                    aria-labelledby="dashboard-tab" tabindex="0">
                                    <div class="col-md-12 mb-md-2 mt-5">
                                        <div class="row mt-2 mb-5">
                                            <div class="col-md-5">
                                                <div class="mb-5">
                                                    <div class="row">
                                                        <div class="col-md-2">


                                                        </div>
                                                        <div class="col-md-6">
                                                            <h3> {{$team->name}} </h3>

                                                            <div class="mb-3">
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#filled-star">
                                                                    </use>
                                                                </svg>
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#filled-star">
                                                                    </use>
                                                                </svg>
                                                                <svg width="18" height="16" viewBox="0 0 18 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#filled-star">
                                                                    </use>
                                                                </svg>
                                                                <svg width="17" height="16" viewBox="0 0 17 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#star"></use>
                                                                </svg>
                                                                <svg width="17" height="16" viewBox="0 0 17 16"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/sprite.svg#star"></use>
                                                                </svg>
                                                            </div>
                                                            <p>10 Feedback 3 Stars</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col-md-12 mt-4">
                                                        <div class="row mb-1 mx-2">
                                                            <div class="col-md-12 d-flex">
                                                                <div class="col-md-5">
                                                                    <label class="col-form-label"
                                                                        for="p-number">Accomodation:</label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        @forelse ($team->accommodations as $key =>
                                                                        $accommodation)
                                                                        {{ $accommodation->name }}
                                                                        @if ($key != count($team->accommodations) - 1)
                                                                        ,
                                                                        @endif
                                                                        @empty
                                                                        N/A
                                                                        @endforelse
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1 mx-2">
                                                            <div class="col-md-12 d-flex">
                                                                <div class="col-md-5">
                                                                    <label class="col-form-label"
                                                                        for="p-number">Specialization:</label>
                                                                </div>
                                                                <div class="col-md-6 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        @forelse ($team->specializations as $key =>
                                                                        $specialization)
                                                                        {{ $specialization->name }}
                                                                        @if ($key != count($team->specializations) - 1)
                                                                        ,
                                                                        @endif
                                                                        @empty
                                                                        N/A
                                                                        @endforelse
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1 mx-2">
                                                            <div class="col-md-12 d-flex">
                                                                <div class="col-md-4 "><label class="col-form-label"
                                                                        for="first-address">Services: </label>
                                                                </div>
                                                                <div class="col-md-12 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        @forelse ($team->services as $key => $service)
                                                                        {{ $service->name }}
                                                                        @if ($key != count($team->services) - 1)
                                                                        ,
                                                                        @endif
                                                                        @empty
                                                                        N/A
                                                                        @endforelse
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-1 mx-2">
                                                            <div class="col-md-12 d-flex">
                                                                <div class="col-md-4 fw"><label class="col-form-label"
                                                                        for="providerCount">Provider Count:</label>
                                                                </div>
                                                                <div class="col-md-8 align-self-center">
                                                                    <div class="font-family-secondary">
                                                                        {{count($team->providers)}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Assigned Teams colums (start) -->
                                            <div class="col-md-11 mb-md-2 gap-5 mt-4 bg-light p-4 mx-3">

                                                <div class="col-md-12 d-flex mb-md-2 gap-5 mt-4">

                                                    <div class="col-md-6 mb-md-2">
                                                        <div class="row">
                                                            <div class="mb-3">
                                                                <h2>Associated Tags:</h2>
                                                            </div>
                                                        </div>
                                                        @if ($this->team['tags'])
                                                        @foreach ($this->team['tags'] as $index => $tag)
                                                        @if ($index % 2 == 0)
                                                        <div class="row ">
                                                            @endif

                                                            <div class="col-md-4 mb-md-3">
                                                                <button type="button"
                                                                    class="btn btn-outline-dark rounded w-100">{{ $tag
                                                                    }}
                                                                </button>
                                                            </div>
                                                            @if ($index % 2 == 1)
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                        @if (count($this->team['tags']) % 2 == 1)
                                                    </div>
                                                    @endif
                                                    @else
                                                    <div class="row"> <small> No Tags Available</small> </div>
                                                    @endif


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-2 mb-5">

                                            <div class="row p-4 between-section-segment-spacing">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <h3>
                                                                Team Description
                                                            </h3>
                                                            <textarea class="form-control" rows="4" cols="4"
                                                                wire:model.defer="description">
                                                            </textarea>
                                                        </div>
                                                        <div class="col-1"></div>
                                                        <div class="col-5">
                                                            <h3>
                                                                Team Notes
                                                            </h3>
                                                            <textarea class="form-control" rows="4" cols="4"
                                                                wire:model.defer="notes">
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center mb-4">
                                                <button wire:click="updateData"
                                                    class="btn btn-primary rounded mx-2">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dashboard tab end -->
                            <!-- Providers tab start -->
                            <div class="tab-pane fade" id="provider-tab-pane" role="tabpanel"
                                aria-labelledby="provider-tab" tabindex="0">

                                <div class="between-section-segment-spacing">
                                    <div class="d-lg-flex align-items-center justify-content-between header-row">
                                        <h2 class="mb-lg-0">Providers</h2>
                                    </div>
                                    <div class="row" id="table-hover-row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="table-responsive">
                                                    <table id="unassigned_data" class="table table-fs-md table-hover"
                                                        aria-label="">
                                                        <thead>
                                                            <tr role="row">
                                                                <th scope="col" class="text-center">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" aria-label="Select All Teams">
                                                                </th>
                                                                <th scope="col">Provider</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if (count($providers))
                                                            @foreach ($providers as $index => $provider)
                                                            <tr role="row" class="odd">
                                                                <td class="text-center align-middle">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" aria-label="Select Team">
                                                                </td>
                                                                <td class="align-middle">
                                                                    <div class="d-flex gap-2 align-items-center">
                                                                        <div>
                                                                            <img width="50" height="50"
                                                                                src="{{ $provider['profile_pic'] ? $provider['profile_pic'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                                                class="rounded-circle"
                                                                                alt="Provider Profile Image">
                                                                        </div>
                                                                        <div class="pt-2">
                                                                            <div
                                                                                class="font-family-secondary leading-none">
                                                                                {{ $provider['name'] }}</div>
                                                                            <a target="_blank"
                                                                                href="{{ route('tenant.provider-profile', ['providerID' => $provider['id']]) }}"
                                                                                class="font-family-secondary"><small>
                                                                                    {{ $provider['email'] }}</small></a>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td class="align-middle">
                                                                    <div class="d-flex actions justify-content-center">

                                                                        <a target="_blank"
                                                                            href="/chat/{{ $provider['id'] }}"
                                                                            title="Chat" aria-label="Chat"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                            <svg aria-label="Chat" width="18"
                                                                                height="18" viewBox="0 0 18 18"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#chat-icon">
                                                                                </use>
                                                                            </svg>
                                                                        </a>
                                                                        <a href="{{ route('tenant.provider-profile', ['providerID' => $provider->id]) }}"
                                                                            target="_blank" title="View"
                                                                            aria-label="View"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                                            <svg aria-label="View" width="20"
                                                                                height="20" viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#view">
                                                                                </use>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            @else
                                                            <tr>
                                                                <td colSpan="7">
                                                                    <small>
                                                                        No providers assigned to this service.
                                                                    </small>
                                                                </td>
                                                            </tr>
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Providers Tab End-->
                            <!-- Schedule tab start -->
                            <div class="tab-pane fade" id="schedule-tab-pane" role="tabpanel"
                                aria-labelledby="schedule-tab-tab" tabindex="0">
                                <div class="row mb-3">
                                    <h3>Schedule</h3><small>coming soon</small>
                                    <div class="w-100">
                                        @livewire('app.common.calendar')
                                    </div>
                                </div>
                            </div>
                            <!-- Schedule tab end -->
                            <!-- Notes tab start -->
                            <div class="tab-pane fade" id="notes-tab-pane" role="tabpanel" aria-labelledby="notes-tab"
                                tabindex="0">
                                @livewire('app.common.forms.notes', ['showForm' => true, 'record_id' =>
                                Auth::user()->id,
                                'record_type' => 6])
                            </div>
                            <!-- Notes Tab End-->


                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>