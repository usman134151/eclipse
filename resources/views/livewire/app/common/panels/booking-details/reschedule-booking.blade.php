<div>
    @if (!is_null($booking))

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <h2 class="font-family-tertiary">
                            Select Booking Date & Time
                        </h2>
                    </div>
                </div>
                @if ($previousReschedulings->count())

                    <div class="col-lg-12  p-5">
                        <div class="table-responsive text-nowrap">
                            <h3> Rescheduling Logs </h3>
                            <table id="unassigned_data" class="table table-hover border" aria-label="List of Providers">
                                <thead>
                                    <tr role="row">
                                        <th scope="col"></th>
                                        <th scope="col">From</th>
                                        <th scope="col">To</th>
                                        <th scope="col">Charges</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($previousReschedulings as $i => $prevBooking)
                                        <tr role="row" class="{{ $i % 2 == 0 ? 'even' : 'odd' }}">
                                            <td class="align-middle fw-bold">
                                                {{ $i + 1 }}
                                            </td>
                                            <td class="align-middle">
                                                <div class="time-date ">
                                                    {{ formatDateTime($prevBooking->previous_start_time) }}
                                                    to
                                                    {{ formatDateTime($prevBooking->previous_end_time) }}
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="time-date ">
                                                    {{ formatDateTime($prevBooking->current_start_time) }}
                                                    to
                                                    {{ formatDateTime($prevBooking->current_end_time) }}
                                                </div>
                                            </td>
                                            <td class="align-middle">{{ numberFormat($prevBooking->charges) }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        <small>*All previous charges will be included </small>

                        </div>
                    </div>
                @endif

                <div class="col-lg-12 my-4">
                    <div class="position-relative mb-3">
                        <label class="form-label-sm" for="override_charges">Override Rescheduling Charges</label>

                        <input type="" class="form-control " id="override_charges" name="override_charges"
                            placeholder="$0.00" wire:model="override_charges">

                        @error('override_charges')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div
                        class="d-flex flex-column flex-lg-row gap-lg-3 gap-2 align-items-lg-center justify justify-content-between">
                        <label class="form-label fw-semibold">Start Date & Time</label>


                        <div class="position-relative">
                            <input type="" class="form-control js-single-date" placeholder="MM/DD/YYYY"
                                id="booking_start_at" name="booking_start_at"
                                wire:model="reschedule_details.booking_start_at">
                            <svg class="icon-date cursor-pointer" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                    fill="black" />
                            </svg>

                        </div>
                        <div class="d-flex col-lg-auto mb-4">
                            <div class="d-flex flex-column">
                                <label class="form-label-sm" for="set_start_time">Start Time</label>
                                <div class="d-flex">
                                    <div class="time d-flex align-items-center gap-2">
                                        <select wire:model.defer="reschedule_details.booking_start_hour">
                                            @for ($i = 0; $i < 24; $i++)
                                                <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                    {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                            @endfor

                                        </select>

                                        <svg aria-label="colon" width="5" height="19" viewBox="0 0 5 19">
                                            <use xlink:href="/css/common-icons.svg#date-colon">
                                            </use>
                                        </svg>

                                        <select wire:model.defer="reschedule_details.booking_start_min">
                                            @for ($i = 0; $i < 59; $i++)
                                                <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                    {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                            @endfor

                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @error('reschedule_details.booking_start_at')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                    @error('reschedule_details.booking_start_hour')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                    @error('reschedule_details.booking_start_min')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 my-4">
                    <div
                        class="d-flex flex-column flex-lg-row gap-lg-3 gap-2 align-items-lg-center justify-content-between">
                        <label class="form-label fw-semibold">End Date & Time</label>
                        <div class="position-relative">
                            <input type="" class="form-control js-single-date" placeholder="MM/DD/YYYY"
                                wire:model.defer="reschedule_details.booking_end_at" id="booking_end_at"
                                name="booking_end_at">
                            <svg class="icon-date cursor-pointer" width="20" height="20" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div class="d-flex col-lg-auto mb-4">
                            <div class="d-flex flex-column">
                                <label class="form-label-sm" for="set_start_time">End Time</label>
                                <div class="d-flex">
                                    <div class="time d-flex align-items-center gap-2">
                                        <select wire:model.defer="reschedule_details.booking_end_hour">
                                            @for ($i = 0; $i < 24; $i++)
                                                <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                    {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                            @endfor

                                        </select>

                                        <svg aria-label="colon" width="5" height="19" viewBox="0 0 5 19">
                                            <use xlink:href="/css/common-icons.svg#date-colon">
                                            </use>
                                        </svg>

                                        <select wire:model.defer="reschedule_details.booking_end_min">
                                            @for ($i = 0; $i < 59; $i++)
                                                <option value="{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}">
                                                    {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</option>
                                            @endfor

                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @error('reschedule_details.booking_end_at')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                    @error('reschedule_details.booking_end_hour')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                    @error('reschedule_details.booking_end_min')
                        <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-lg-12 my-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="keep-same-providers"
                            name="keep-same-providers" disabled checked>
                        <label class="form-check-label" for="keep-same-providers">
                            Keep same providers
                        </label>
                    </div>
                </div>
                @if ($booking->is_recurring)
                    <div class="col-lg-12 my-4">
                        <ul class="list-group list-group-flush gap-1">
                            <li class="list-group-item border-0 ps-0">
                                <div class="form-check">
                                    <input class="form-check-input me-1" type="radio" name="dateRangeRadio"
                                        id="onlyThisBooking" wire:model="reschedule_details.setting"
                                        value="only_this_booking">
                                    <label class="form-check-label" for="onlyThisBooking">
                                        Reschedule only this booking.
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item border-0 ps-0">
                                <div class="form-check">
                                    <input class="form-check-input me-1" type="radio"
                                        name="dateRangeRadio" wire:model="reschedule_details.setting"
                                        value="bookings_until" id="thisAndFutureBookings">
                                    <label class="form-check-label" for="thisAndFutureBookings">
                                        Reschedule this booking and all future bookings until. 
                                    </label>
                                </div>
                                <div
                                    class="position-relative {{ $reschedule_details['setting'] == 'bookings_until' ?: 'hidden' }}">
                                    <div class="input-group w-50 ">
                                        <input type="" class="form-control  js-single-date"
                                            placeholder="MM/DD/YYYY"
                                            wire:model.defer="reschedule_details.reschedule_until"
                                            id="reschedule_until" name="reschedule_until">
                                        <svg class="icon-date cursor-pointer" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                                fill="black" />
                                        </svg>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item border-0 ps-0">
                                <div class="form-check">
                                    <input class="form-check-input me-1" type="radio"
                                        name="dateRangeRadio" wire:model="reschedule_details.setting"
                                        value="subsequent_bookings" id="allSubsequentBookings">
                                    <label class="form-check-label" for="allSubsequentBookings">
                                        Reschedule all subsequent bookings. 
                                    </label>
                                </div>

                            </li>
                        </ul>
                    </div>
                @endif

                <div class="col-lg-12 my-4">
                    <div class="table-responsive text-nowrap">
                        <table id="unassigned_data" class="table table-hover border" aria-label="List of Providers">
                            <thead>
                                <tr role="row">
                                    <th scope="col" class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="checkAllProviders">
                                            <label class="form-check-label visually-hidden" for="checkAllProviders">
                                                Select All Providers
                                            </label>
                                        </div>
                                    </th>
                                    <th scope="col">Provider</th>
                                    <th scope="col">Phone Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($booking->booking_provider)
                                    @foreach ($booking->booking_provider as $i => $provider)
                                        <tr role="row" class="{{ $i % 2 == 0 ? 'even' : 'odd' }}">
                                            <td class="align-middle fw-bold">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="checkProvider{{ $i }}">
                                                    <label class="form-check-label visually-hidden"
                                                        for="checkProvider{{ $i }}">
                                                        Select This Provider
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <div class="row g-2">
                                                    <div class="col-md-2">
                                                        <img width="50" height="50"
                                                            src="{{ $provider->user->userdetail->profile_pic ? $provider->user->userdetail->profile_pic : '/tenant-resources/images/portrait/small/avatar-s-20.jpg' }}"
                                                            style="max-width:100%;" class="rounded-circle"
                                                            alt="Image">
                                                    </div>
                                                    <div class="col-md-10 align-self-center">
                                                        <p>
                                                            {{ $provider->user->name }}
                                                        </p>
                                                        <p>
                                                            {{ $provider->user->email }}
                                                        </p>
                                                    </div>
                                                    {{-- @if ($i == '3')
                                                    <small class="text-danger text-sm">
                                                        This provider not available According to the updated Date &
                                                        Time.
                                                    </small>
                                                @endif --}}
                                                </div>
                                            </td>
                                            <td class="align-middle">{{ $provider->user->phone }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colSpan=3>No Providers Available</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <h2 class="font-family-tertiary text-center">
                            Booking Summary
                        </h2>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">Assignment No:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>{{ $booking->booking_number }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">Service Date:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>
                                    {{ date_format(date_create($booking->booking_start_at), 'm/d/Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">Assignment Details:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>
                                    {{ date_format(date_create($booking->booking_start_at), 'h:i A') }} -
                                    {{ date_format(date_create($booking->booking_end_at), 'h:i A') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">Accommodation:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>
                                    {{ $booking->booking_services ? ($booking->booking_services->first()->accommodation ? $booking->booking_services->first()->accommodation->name : 'N/A') : 'N/A' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">Service:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>
                                    {{ $booking->booking_services ? $booking->services->first()->name : 'N/A' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">Address:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>
                                    @if ($booking->physicalAddress)
                                        <a target="_blank"
                                            href="https://www.google.com/maps/search/?api=1&query={{ str_replace(' ', '+', $booking->physicalAddress->address_line1 . ' ' . $booking->physicalAddress->address_line2 . ', ' . $booking->physicalAddress->city . ' ' . $booking->physicalAddress->state . ' ' . $booking->physicalAddress->country) }}">
                                            {{ $booking->physicalAddress->address_line1 . ', ' . $booking->physicalAddress->address_line2 . ', ' . $booking->physicalAddress->city . ', ' . $booking->physicalAddress->country }}
                                        </a>
                                    @else
                                        N/A
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">No. of Provider:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>
                                    {{ $booking->provider_count }}
                                    {{-- 5 of 5 --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">Customer Name:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>
                                    {{ $booking->customer ? $booking->customer->name : 'N/A' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">Price:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>{{ numberFormat($booking->payment->total_amount) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="row">
                            <div class="col-lg-5">
                                <label class="col-form-label fw-semibold">Status:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>
                                    @if ($booking->booking_status == 0)
                                        Pending
                                    @elseif ($booking->status == 1)
                                        UnAssigned
                                    @elseif ($booking->status == 2)
                                        Assigned
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center gap-2 mt-5 form-actions">
                <a href="javascript:void(0);" class="btn btn-outline-dark rounded" role="button"
                    x-on:click="rescheduleBooking = !rescheduleBooking">
                    Cancel
                </a>
                {{-- <div class="dropdown"> --}}
                <button type="button" class="btn btn-primary rounded " wire:click="saveBooking"
                    x-on:close-reschedule.window="rescheduleBooking = false">
                    Update
                </button>
                {{-- <ul class="dropdown-menu">
                        <li>
                            <a href="#" class="dropdown-item d-block rounded">Update + Invite</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item d-block rounded">Update + Assign</a>
                        </li>
                    </ul> --}}
                {{-- </div> --}}
            </div>
        </div>
    @endif
</div>
