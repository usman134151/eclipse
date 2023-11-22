<div>
    @if (!is_null($booking['customer']))

        <div class="row mt-4">
            <div class="col-md-6">


                <div class="col-lg-12 my-4">
                    Are you sure you want to cancel this booking?
                    @if ($charges > 0)
                        Booking is outside it’s cancellation window. If you’d like to cancel this booking, you will be
                        charged {{ formatPayment($charges) }}.
                    @endif Would you like to proceed with cancelling?
                </div>
                <div class="col-lg-12 my-4">
                    <div class="">
                        <label class="form-label">
                            Override charges
                        </label>
                        <input type="text" class="form-control" rows="4" cols="4"
                            wire:model.lazy="override_charges" wire:blur="updateBillable">

                    </div>
                </div>
                <div class="col-lg-12 my-4">
                    <div class="">
                        <label class="form-label">
                            Cancellation Notes
                        </label>
                        <textarea class="form-control" rows="4" cols="4" wire:model.defer="booking.cancellation_notes">													
												</textarea>
                    </div>
                </div>
                <div class="col-lg-12 my-4">
                    <div class="flex d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox"
                                wire:model.defer="unbillable" value="3"
                                {{ $booking['status'] == 3 || $booking['override_charges'] > 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck1">Mark as Unbillable
                                {{ $booking['override_charges'] }}</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input position-static" type="checkbox" value="1"
                                wire:model.defer="booking.cancel_provider_payment">
                            <label class="form-check-label" for="blankCheckbox2CancellationModal">Cancel Provider
                                Payment</label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 my-4">
                    @if ($booking['is_recurring'])
                        <div class="col-lg-12 my-4">
                            <ul class="list-group list-group-flush gap-1">
                                <li class="list-group-item border-0 ps-0">
                                    <div class="form-check">
                                        <input class="form-check-input me-1" type="radio" name="dateRangeRadio"
                                            id="onlyThisBooking" {{-- wire:model="reschedule_details.setting" --}} value="only_this_booking">
                                        <label class="form-check-label" for="onlyThisBooking">
                                            Cancel only this booking.
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 ps-0">
                                    <div class="form-check">
                                        <input disabled class="form-check-input me-1" type="radio"
                                            name="dateRangeRadio" {{-- wire:model="reschedule_details.setting" --}} value="bookings_until"
                                            id="thisAndFutureBookings">
                                        <label class="form-check-label" for="thisAndFutureBookings">
                                            Cancel this booking and all future bookings until. <small>(coming
                                                soon)</small>
                                        </label>
                                    </div>
                                    <div class="position-relative ">
                                        <div class="input-group w-50 ">
                                            {{-- {{ $reschedule_details['setting'] == 'bookings_until' ?: 'hidden' }} --}}
                                            <input type="" class="form-control  js-single-date"
                                                placeholder="MM/DD/YYYY" {{-- wire:model.defer="reschedule_details.reschedule_until" --}} id="reschedule_until"
                                                name="reschedule_until">
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
                                        <input disabled class="form-check-input me-1" type="radio"
                                            name="dateRangeRadio" {{-- wire:model="reschedule_details.setting" --}} value="subsequent_bookings"
                                            id="allSubsequentBookings">
                                        <label class="form-check-label" for="allSubsequentBookings">
                                            Cancel all subsequent bookings. <small>(coming soon)</small>
                                        </label>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    @endif
                </div>


            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <h2 class="font-family-tertiary">
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
                                <div>{{ $booking['booking_number'] }}</div>
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
                                    {{ $booking['customer']['first_name'] }} {{ $booking['customer']['last_name'] }}
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
                                <div>
                                    @if (!is_null($booking['payment']))
                                        {{ formatPayment($booking['payment']['total_amount']) }}
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
                                <label class="col-form-label fw-semibold">Service Date:</label>
                            </div>
                            <div class="col-lg-7 align-self-center">
                                <div>
                                    {{ $booking['booking_start_at'] ? date_format(date_create($booking['booking_start_at']), 'h:i A') : '' }}
                                    to
                                    {{ $booking['booking_end_at'] ? date_format(date_create($booking['booking_end_at']), 'h:i A') : '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($booking['booking_services'] as $index => $service)
                        <div class="col-lg-12 mb-3">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label class="col-form-label fw-semibold">Service:</label>
                                </div>
                                <div class="col-lg-7 align-self-center">
                                    <div>
                                        {{ $booking['services'][$index]['name'] }}
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
                                        {{ $service['provider_count'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center gap-2 mt-5 form-actions">
                <a href="javascript:void(0);" x-on:click="cancelBooking = !cancelBooking"
                    class="btn btn-outline-dark rounded" role="button">
                    Close
                </a>

                <button type="button" class="btn btn-primary rounded" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false" wire:click="cancelBooking" x-on:click="cancelBooking = !cancelBooking">
                    Cancel Booking
                </button>


            </div>
        </div>

    @endif
</div>
