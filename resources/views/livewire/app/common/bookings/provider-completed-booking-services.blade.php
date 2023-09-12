<div>
    <div class="between-section-segment-spacing">

        <!-- Hoverable rows start -->
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="">
                            <thead>
                                <tr role="row">
                                    <th scope="col" class="text-center">
                                        <input class="form-check-input" type="checkbox" value=""
                                            aria-label="Select All Teams">
                                    </th>
                                    <th scope="col">Provider</th>
                                    <th scope="col">Check-In</th>
                                    <th scope="col" class="text-center">
                                        Duration</th>
                                    <th scope="col" class="text-center">Form</th>
                                    <th scope="col" class="text-center">Punctuality
                                    </th>
                                    <th scope="col" class="text-center">Notes</th>

                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Feedback
                                    </th>


                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($data['attendingProviders']))
                                    @foreach ($data['attendingProviders'] as $index => $provider)
                                        <tr role="row" class="odd">
                                            <td class="text-center align-middle">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    aria-label="Select Team">
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div>
                                                        <img width="50" height="50"
                                                            src="{{ $provider->user->userdetail->profile_pic ? $provider->user->userdetail->profile_pic : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                            class="rounded-circle" alt="Provider Profile Image">
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="font-family-secondary leading-none">
                                                            {{ $provider->user->name }}
                                                        </div>
                                                        <a target="_blank"
                                                            href="{{ route('tenant.provider-profile', ['providerID' => $provider['provider_id']]) }}"
                                                            class="font-family-secondary"><small>
                                                                {{ $provider->user->email }}</small></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="time-date">
                                                    {{ $provider->check_in_procedure_values ? date_format(date_create($provider->check_in_procedure_values['actual_start_timestamp']), 'm/d/y h:i A') : 'N/A' }}
                                                    to
                                                </div>
                                                <div class="time-date">
                                                    {{ $provider->check_out_procedure_values ? date_format(date_create($provider->check_out_procedure_values['actual_end_timestamp']), 'm/d/y h:i A') : 'N/A' }}
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                04 hours 3 mins
                                            </td>
                                            <td>
                                                @if ($data['checkin_form_enabled'] || $data['checkout_form_enabled'])
                                                    <a href="#" title="Check In Form" aria-label="Check In Form"
                                                        @click="providerSavedForms = true"
                                                        wire:click="openSavedFormsPanel({{ $provider->user->id }})"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg width="18" height="18" viewBox="0 0 18 18"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/admin-menu.svg#saved-form">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                @else
                                                    N/A
                                                @endif

                                            </td>

                                            <td>
                                                <a href="#" title="Punctuality" aria-label="Punctuality"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                    {{-- <i class="fa-regular fa-triangle-exclamation"
                                                                                        style="color: #e2dc22;"></i> --}}
                                                </a>

                                            </td>
                                            <td>
                                                <a href="#" title="Feedback" aria-label="Feedback"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                    {{-- notepad icon --}}
                                                    <svg aria-label="Notes" width="28" height="29"
                                                        viewBox="0 0 28 29" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/sprite.svg#gray-notes">
                                                        </use>
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                No Change
                                            </td>
                                            <td>
                                                <a href="#" title="Feedback" aria-label="Feedback"
                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">

                                                    <svg aria-label="Rating" width="22" height="22"
                                                        viewBox="0 0 22 22" fill="none">
                                                        <use xlink:href="/css/common-icons.svg#rating-icon">
                                                        </use>
                                                    </svg>

                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">

                                                    <div class="dropdown ac-cstm">
                                                        <a href="javascript:void(0)"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-label="Action dropdown"
                                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="More Options" width="20"
                                                                height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#dropdown">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <div class="tablediv dropdown-menu fadeIn">
                                                            @if ($provider->check_in_status == 3)
                                                                <a title="Edit Close Out" aria-label="Edit Close Out"
                                                                    href="#" class="dropdown-item"
                                                                    @click="offcanvasOpenCheckOut = true"
                                                                    wire:click="$emit('showCheckOutPanel','{{ $booking_id }}','{{ $provider->booking_service_id }}','{{ $provider->booking->booking_number }}','{{ $provider->user->id }}')">
                                                                    {{-- <i class="fa fa-clone"></i> --}}

                                                                    Edit Close Out
                                                                </a>
                                                            @endif
                                                            <a title="Timesheet" aria-label="Timesheet"
                                                                href="#" class="dropdown-item">
                                                                {{-- <i class="fa fa-clone"></i> --}}
                                                                Download Timesheet
                                                            </a>

                                                            <a title="Download Forms" aria-label="Download Forms"
                                                                href="#" class="dropdown-item">
                                                                {{-- <i class="fa fa-clone"></i> --}}
                                                                Download Forms
                                                            </a>
                                                            <a title="Approve Time Extension"
                                                                aria-label="Approve Time Extension" href="#"
                                                                class="dropdown-item">
                                                                {{-- <i class="fa fa-clone"></i> --}}
                                                                Approve Time Extension
                                                            </a>

                                                            <a title="Deny Time Extension"
                                                                aria-label="Deny Time Extension" href="#"
                                                                class="dropdown-item">
                                                                {{-- <i class="fa fa-clone"></i> --}}
                                                                Deny Time Extension
                                                            </a>


                                                        </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colSpan="3">
                                            <small>
                                                No Providers have checked in to this service yet.
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
        <!-- Hoverable rows end -->
        {{-- {{ $data['attendingProviders']->links() }} --}}

    </div>

</div>
