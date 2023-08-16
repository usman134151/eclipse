<div x-data="{ rescheduleBooking: false }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @if ($showBookingDetails)
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">
                            Assignment Details
                        </h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        {{-- Updated by Shanila to Add svg icon --}}
                                        <svg aria-label="Go to Dashboard" width="22" height="23"
                                            viewBox="0 0 22 23">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                        {{-- End of update by Shanila --}} </a>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                        Assignments
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Assignment Details
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @livewire('app.common.bookings.booking-details', ['booking_id' => $booking_id])
    @else
        {{-- BEGIN: Content --}}
        @if ($bookingSection != 'customer')
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
                                            <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="/css/sprite.svg#home"></use>
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
        @endif
        <div class="content-body">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @if ($bookingSection != 'customer')
                        @endif
                        <div>
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-2">

                                <div
                                    class="d-inline-flex flex-column flex-md-row align-items-center gap-lg-4 gap-1 mb-2 mb-md-0">

                                    <div>
                                        <div class="form-check form-switch mb-0">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                aria-label="Manage Permissions Toggle" id="ManagePermissions">
                                            <label class="form-check-label" for="ManagePermissions">
                                                Manage Permissions
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-inline-flex align-items-center gap-4">
                                    <div class="d-inline-flex align-items-end gap-4">
                                        <div class="d-inline-flex align-items-center gap-4">
                                            <div class="d-lg-flex justify-content-end mb-4">
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-primary dropdown-toggle"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label="Export Button" width="23" height="26"
                                                            viewBox="0 0 23 26">
                                                            <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </button>
                                                    {{-- <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" aria-label="Select All Bookings">
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
                                                    @foreach ($booking_assignments as $i => $booking)
                                                        <tr role="row"
                                                            class="{{ $i % 2 == 0 ? 'even' : 'odd' }} {{ $statusCode[array_rand($status)] }}">
                                                            <td class="text-center">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" aria-label="Select Booking">
                                                            </td>
                                                            <td wire:click="showBookingDetails({{ $booking['id'] }})">
                                                                <a
                                                                    href="#">{{ $booking['booking_number'] ? $booking['booking_number'] : '' }}</a>
                                                                <div>
                                                                    <div class="time-date">
                                                                        {{ date_format(date_create($booking['booking_start_at']), 'm/d/Y') }}
                                                                    </div>
                                                                    <div class="time-date">
                                                                        {{ $booking['booking_start_at'] ? date_format(date_create($booking['booking_start_at']), 'h:i A') : '' }}
                                                                        to
                                                                        {{ $booking['booking_end_at'] ? date_format(date_create($booking['booking_end_at']), 'h:i A') : '' }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    {{ $booking['accommodations'] ? $booking['accommodations']['name'] : '' }}
                                                                </div>
                                                                {{-- <div>Shelby Sign Language</div> --}}
                                                                @if ($booking->services->isNotEmpty())
                                                                    <div>Service:
                                                                        {{ $booking->services->first()->name }}
                                                                    </div>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="badge bg-warning mb-1">
                                                                    @if ($booking->services->isNotEmpty())
                                                                        @if ($booking->services->first()->pivot->service_types == 1)
                                                                            In-Person
                                                                        @elseif($booking->services->first()->pivot->service_types == 2)
                                                                            Virtual
                                                                        @elseif($booking->services->first()->pivot->service_types == 4)
                                                                            Phone
                                                                        @elseif($booking->services->first()->pivot->service_types == 5)
                                                                            Teleconference
                                                                        @endif
                                                                    @endif
                                                                </div>
                                                                <div>292332811 - Code 2131</div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    {{ $booking['company'] ? $booking['company']['name'] : '' }}
                                                                </div>
                                                                <div>No. of Providers: {{ $booking['provider_count'] }}
                                                                </div>
                                                            </td>
                                                            <td>$100</td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-1">
                                                                    {{-- Updated by Shanila to Add svg icon --}}
                                                                    <svg aria-label="Unassigned" class="fill-warning"
                                                                        width="12" height="12"
                                                                        viewBox="0 0 512 512">
                                                                        <use
                                                                            xlink:href="/css/common-icons.svg#yellow-dot">
                                                                        </use>
                                                                    </svg>
                                                                    {{-- End of update by Shanila --}}
                                                                    Unassigned
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex actions">

                                                                    <a href="#" title="Edit"
                                                                        aria-label="Edit Booking"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg aria-label="Edit" class="fill"
                                                                            width="20" height="28"
                                                                            viewBox="0 0 20 28" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <use
                                                                                xlink:href="/css/sprite.svg#edit-icon">
                                                                            </use>
                                                                        </svg>
                                                                    </a>
                                                                    @if (($bookingType == "Today's" || $bookingType == 'Past') && $bookingSection == 'customer')
                                                                        <a href="#" title="Confirm Completion"
                                                                            aria-label="Confirm Completion"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#confirmCompletion">
                                                                            <svg width="30" height="30"
                                                                                viewBox="0 0 30 30" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/customer.svg#confirm-completion-icon">
                                                                                </use>
                                                                            </svg>
                                                                        </a>
                                                                    @else
                                                                        <a href="#" title="Assign Provider"
                                                                            aria-label="Assign Provider"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#AssignproviderTeamModal">
                                                                            <svg aria-label="Assign Provider"
                                                                                width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <use
                                                                                    xlink:href="/css/sprite.svg#assign-provider">
                                                                                </use>
                                                                            </svg>
                                                                        </a>
                                                                    @endif
                                                                    <div class="dropdown ac-cstm">
                                                                        <a href="javascript:void(0)"
                                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown"
                                                                            data-bs-auto-close="outside"
                                                                            aria-label="Action dropdown"
                                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                                            <svg aria-label="More Options"
                                                                                width="20" height="20"
                                                                                viewBox="0 0 20 20">
                                                                                <use
                                                                                    xlink:href="/css/common-icons.svg#dropdown">
                                                                                </use>
                                                                            </svg>
                                                                            {{-- End of update by Shanila --}}
                                                                        </a>
                                                                        <div class="tablediv dropdown-menu fadeIn">
                                                                            <a title="Duplicate"
                                                                                aria-label="Duplicate" href=""
                                                                                class="dropdown-item">
                                                                                <i class="fa fa-clone"></i>
                                                                                Duplicate
                                                                            </a>
                                                                            <a href="javascript:void(0)"
                                                                                aria-label="Reschedule"
                                                                                title="Reschedule"
                                                                                class="dropdown-item"
                                                                                @click="rescheduleBooking = true">
                                                                                <i class="fa fa-calendar"></i>
                                                                                Reschedule
                                                                            </a>
                                                                            <a title="Manage Assigned Providers"
                                                                                aria-label="Manage Assigned Providers"
                                                                                class="dropdown-item"
                                                                                href="javascript:void(0)">
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
                                                                            <a href="javascript:void(0)"
                                                                                title="Cancel" aria-label="Cancel"
                                                                                class="dropdown-item">
                                                                                <svg width="17" height="18"
                                                                                    viewBox="0 0 17 18" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125"
                                                                                        stroke="black"
                                                                                        stroke-width="1.5"
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
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>



                                {{-- Hoverable rows End --}}
                                <div class="d-flex flex-column flex-md-row justify-content-between">

                                    <div class="col-auto overflow-auto my-sm-2 my-md-0 ms-sm-0">
                                        <div class="d-flex flex-lg-row align-items-center">
                                            <label class="w-auto">
                                                <select wire:model="limit" class="form-select form-select-sm"
                                                    id="limit">
                                                    <option>10</option>
                                                    <option>25</option>
                                                    <option>50</option>
                                                    <option>100</option>
                                                </select>
                                            </label>
                                            <small class="ms-2 text-muted">
                                                Records per page
                                            </small>
                                        </div>
                                    </div>

                                    {{ $booking_assignments->links('livewire.app.common.bookings.booking-nav') }}

                                </div>
                                {{-- icon legend bar start --}}
                                <div class="d-flex actions gap-3 justify-content-md-end mb-2">
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" title="Edit" aria-label="Edit Booking"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg aria-label="Assign Provider" class="fill" width="20"
                                                height="28" viewBox="0 0 20 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="/css/sprite.svg#edit-icon"></use>
                                            </svg>
                                        </a>
                                        <span class="text-sm">
                                            Edit
                                        </span>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" title="Assign Provider" aria-label="Assign Provider"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg aria-label="Assign Provider" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="/css/sprite.svg#assign-provider"></use>
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
    @include('panels.booking-details.reschedule-booking')
    @include('modals.common.confirm-completion')
    @include('modals.admin-staff')
    @include('modals.assign-provider-team')
    @include('modals.meeting-links')
    @include('modals.provider-message')
    @include('modals.unassign')
    @include('modals.common.review-feedback')
    @include('modals.common.available-timeslot')
</div>
{{-- End: Content --}}
@push('scripts')
    <script>
        function updateVal(attrName, val) {

            if (attrName == "Service_filter" ||
                attrName == "specialization_search_filter" ||
                attrName == "setup_value_label" ||
                attrName == "tags_selected" ||
                attrName == "providers_selected" ||
                attrName == "preferred_provider_ids" ||
                attrName == "gender" ||
                attrName == "ethnicity" ||
                attrName == "certifications") {
                Livewire.emit('refreshFilters', attrName, val);
            } else {
                Livewire.emit('updateVal', attrName, val);
            }
        }
        document.addEventListener('refreshSelects2', function(event) {
            $('.select2').select2();
            $('.select2').off('change').on('change', function(e) {
                let attrName = $(this).attr('id');
                updateVal(attrName, $(this).select2("val"));
            });
        });

        function refreshSelectsEvent() {
            $('.select2').select2();
            $('.select2').off('change').on('change', function(e) {
                let attrName = $(this).attr('id');
                updateVal(attrName, $(this).select2("val"));
            });
        }
    </script>
@endpush
