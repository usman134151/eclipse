<div>
    <div class="row mt-4">
        <div class="col-md-6">


            <div class="col-lg-12 my-4">
            Are you sure you want to cancel this booking? 
            @if($booking['charges']>0)Booking is outside it’s cancellation window. If you’d like to cancel this booking, you will be charged {{formatPayment($booking['charges'])}}. @endif Would you like to proceed with cancelling?
            </div>

            <div class="col-lg-12 my-4">
            @if($booking['is_recurring'])
                <ul class="list-group list-group-flush gap-1">
                    <li class="list-group-item border-0 ps-0">
                        <div class="form-check">
                            <input class="form-check-input me-1" type="radio" name="dateRangeRadio" value=""
                                id="onlyThisBooking" checked>
                            <label class="form-check-label" for="onlyThisBooking">
                                Cancel only this booking.
                            </label>
                        </div>
                    </li>
                  
                    <li class="list-group-item border-0 ps-0">
                        <div class="form-check">
                            <input class="form-check-input me-1" type="radio" name="dateRangeRadio" value=""
                                id="thisAndFutureBookings">
                            <label class="form-check-label" for="thisAndFutureBookings">
                                Cancel this booking and all future bookings until.
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item border-0 ps-0">
                        <div class="form-check">
                            <input class="form-check-input me-1" type="radio" name="dateRangeRadio" value=""
                                id="allSubsequentBookings">
                            <label class="form-check-label" for="allSubsequentBookings">
                               Cancel all subsequent bookings.
                            </label>
                        </div>
                    </li>
                  
                </ul>
                @endif
            </div>
            <div class="col-lg-12 my-4">
            <div class="">
                                                    <label class="form-label">
                                                        Cancellation Notes
                                                    </label>
                                                    <textarea class="form-control" rows="4" cols="4" wire:model.defer="cancellation_notes">													
												</textarea>
                                                </div>
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
                            <div>{{$booking['booking_number']}}</div>
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
                                12/15/2022
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
                                Copy of Check service duration
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
                                5 of 5
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
                                John Wick
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
                            <div>$20.87</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label fw-semibold">Status:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>Assigned</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center gap-2 mt-5 form-actions">
            <a href="javascript:void(0);" x-on:click="cancelBooking = !cancelBooking" class="btn btn-outline-dark rounded" role="button">
               Close
            </a>
          
                <button type="button" class="btn btn-primary rounded" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Cancel Booking
                </button>

          
        </div>
    </div>
</div>
