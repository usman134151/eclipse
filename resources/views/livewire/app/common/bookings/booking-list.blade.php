<div x-data="{rescheduleBooking: false}">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @if ($showBookingDetails)
    @livewire('app.common.bookings.booking-details')
    @else
    {{-- BEGIN: Content --}}
    <div class="content-header row">
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h1 class="content-header-title float-start mb-0">
                    {{ $bookingType }} Assignments
                </h1>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg aria-label="Home" width="22" height="23"viewBox="0 0 22 23" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#home"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">
                                Assignments
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            {{ $bookingType }} Assignments
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-lg-flex justify-content-end mb-4">
    <a href="/admin/booknow/create" class="btn btn-primary rounded btn-sm">
        Create Assignment
    </a>
</div>
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <div class="row">
                <x-advancefilters/>
                    <div>
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-2">
                            <div
                                class="d-inline-flex flex-column flex-md-row align-items-center gap-lg-4 gap-1 mb-2 mb-md-0">
                                <div class="d-inline-flex align-items-center gap-4">
                                    <label for="show_records" class="form-label-sm mb-0">
                                        Show
                                    </label>
                                    <select class="form-select form-select-sm" id="show_records">
                                        <option>7</option>
                                        <option>15</option>
                                        <option>20</option>
                                        <option>25</option>
                                    </select>
                                </div>
                                <div>
                                    <div class="form-check form-switch mb-0">
                                        <input class="form-check-input" type="checkbox" role="switch" aria-label="Manage Permissions Toggle"
                                         id="ManagePermissions">
                                        <label class="form-check-label" for="ManagePermissions">
                                            Manage Permissions
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-inline-flex align-items-center gap-4">
                                <label for="search-booking" class="form-label-sm mb-0">
                                    Search
                                </label>
                                <input type="search" class="form-control form-control-sm" id="search-booking" name="search"
                                    placeholder="Search here" autocomplete="on" />
                            </div>
                        </div>
                        {{-- Hoverable rows Start --}}
                        <div class="row" id="table-hover-row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table id="unassigned_data" class="table table-fs-md table-hover"
                                            aria-label="Today's Assignments Table">
                                            <thead>
                                                <tr role="row">
                                                    <th scope="col" class="text-center">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            aria-label="Select All Bookings">
                                                    </th>
                                                    <th scope="col">Booking ID</th>
                                                    <th scope="col">Accommodation</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Billing</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col" class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                $status = ['1', '2', '3'];
                                                $statusCode = ['bg-success', 'bg-gray', 'bg-warning'];
                                                @endphp
                                                @for ($i = 1; $i <= 7; $i++) <tr role="row"
                                                    class="{{ ($i % 2 == 0) ? 'even' : 'odd' }} {{ $statusCode[array_rand($status)] }}">
                                                    <td class="text-center">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            aria-label="Select Booking">
                                                    </td>
                                                    <td wire:click="showBookingDetails">
                                                        <a href="#">100995-6</a>
                                                        <div>
                                                            <div class="time-date">08/24/2022</div>
                                                            <div class="time-date">
                                                                9:59 AM to 4:22 PM
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>Shelby Sign Language</div>
                                                        <div>Shelby Sign Language</div>
                                                        <div>Service: Language interpreting</div>
                                                    </td>
                                                    <td>
                                                        <div class="badge bg-warning mb-1">
                                                            Teleconference
                                                        </div>
                                                        <div>292332811 - Code 2131</div>
                                                    </td>
                                                    <td>
                                                        <div>Demo Company</div>
                                                        <div>No. of Providers: 5</div>
                                                    </td>
                                                    <td>$100</td>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-1">
                                                            <x-icon name="yellow-dot" />
                                                            Unassigned
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex actions">

                                                        <a href="#" title="Edit" aria-label="Edit Booking" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                                        data-bs-target="#confirmCompletion">
                                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/customer.svg#confirm-completion-icon"></use>
                                                              </svg>
                                                        </a>
                                                            <a href="#" title="Edit" aria-label="Edit Booking" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Edit" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                                              </svg>
                                                            </a>
                                                            <a href="#" title="Assign Provider"
                                                                aria-label="Assign Provider"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#AssignproviderTeamModal">
                                                                <svg aria-label="Assign Provider" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#assign-provider"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="dropdown ac-cstm">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                    data-bs-toggle="dropdown"
                                                                    data-bs-auto-close="outside"
                                                                    aria-label="Action dropdown"
                                                                    data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                    <x-icon name="dropdown" />
                                                                </a>
                                                                <div class="tablediv dropdown-menu fadeIn">
                                                                    <a title="Duplicate" aria-label="Duplicate" href=""
                                                                        class="dropdown-item">
                                                                        <i class="fa fa-clone"></i>
                                                                        Duplicate
                                                                    </a>
                                                                    <a
																		href="javascript:void(0)"
																		aria-label="Reschedule"
																		title="Reschedule"
																		class="dropdown-item"
																		@click="rescheduleBooking = true"
																	>
                                                                        <i class="fa fa-calendar"></i>
                                                                        Reschedule
                                                                    </a>
                                                                    <a title="Manage Assigned Providers"
                                                                        aria-label="Manage Assigned Providers"
                                                                        class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="fa fa-user-plus"></i>
                                                                        Manage Assigned Providers
                                                                    </a>
                                                                    <a title="Message Customer"
                                                                        aria-label="Message Customer"
                                                                        class="dropdown-item" href="">
                                                                        <i class="fa fa-comment"></i>
                                                                        Message Customer
                                                                    </a>
                                                                    <a title="Message Provider Team"
                                                                        aria-label="Message Provider Team"
                                                                        class="dropdown-item" href="">
                                                                        <i class="fa fa-comment"></i>
                                                                        Message Provider Team
                                                                    </a>
                                                                    <a href="javascript:void(0)" title="Cancel"
                                                                        aria-label="Cancel" class="dropdown-item">
                                                                        <svg width="17" height="18" viewBox="0 0 17 18"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125"
                                                                                stroke="black" stroke-width="1.5"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></path>
                                                                        </svg>
                                                                        Cancel
                                                                    </a>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    @endfor
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            {{-- Hoverable rows End --}}
                            <div class="d-flex flex-column flex-md-row justify-content-between">
                                <div>
                                    <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">
                                        Showing 1 to 5 of 100 entries
                                    </p>
                                </div>
                                <nav aria-label="Page Navigation">
                                    <ul class="pagination justify-content-start justify-content-lg-end">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                1
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                2
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                3
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">
                                                4
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            {{-- icon legend bar start --}}
                            <div class="d-flex actions gap-3 justify-content-md-end mb-2">
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="Edit" aria-label="Edit Booking" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Assign Provider" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use>
                                        </svg>
                                    </a>
                                    <span class="text-sm">
                                        Edit
                                    </span>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="Assign Provider" aria-label="Assign Provider" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Assign Provider" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#assign-provider"></use>
                                        </svg>
                                    </a>
                                    <span class="text-sm">
                                        Assign Provider
                                    </span>
                                </div>
                            </div>
                            {{-- icon legend bar end --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @include('modals.assign-provider-team')
    @include('modals.common.confirm-completion')
	@include('panels.booking-details.reschedule-booking')
</div>
{{-- End: Content --}}
