<div>
    @if(!is_null($booking['customer']))
  
    <div class="row mt-4">
        <div class="col-md-6">


            <div class="col-lg-12 my-4">
            Are you sure you want to cancel this booking? 
            @if($booking['charges']>0)Booking is outside it’s cancellation window. If you’d like to cancel this booking, you will be charged {{formatPayment($booking['charges'])}}. @endif Would you like to proceed with cancelling?
            </div>
            <div class="col-lg-12 my-4">
            <div class="">
                                                    <label class="form-label">
                                                        Override charges
                                                    </label>
                                                    <input type="text" class="form-control" rows="4" cols="4" wire:model.defer="override_charges">													
												
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
            <div class="col-lg-6 my-4">
           <!-- @if($booking['is_recurring'])
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
                @endif -->
            </div>
            <div class="col-lg-6 my-4">
<div class="form-check">
<input class="form-check-input position-static" type="checkbox" wire:model.defer="unbillable" value="3" {{ $booking['status'] == 3 ? 'checked' : '' }}>
<label class="form-check-label" for="gridCheck1">Mark as Unbillable</label>
</div>
<div class="form-check">
<input class="form-check-input position-static" type="checkbox" value="1" wire:model.defer="booking.cancel_provider_payment">
<label class="form-check-label" for="blankCheckbox2CancellationModal">Cancel Provider Payment</label>
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
                            <label class="col-form-label fw-semibold">Customer Name:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>
                               {{$booking['customer']['first_name']}}  {{$booking['customer']['last_name']}}
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
                            <div>                                                                        @if (!is_null($booking['payment']))
                                                                            {{ formatPayment($booking['payment']['total_amount']) }}
                                                                        @else
                                                                            N/A
                                                                        @endif</div>
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
                @foreach($booking['booking_services'] as $index=>$service)


                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-5">
                            <label class="col-form-label fw-semibold">Service:</label>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div>
                               {{$booking['services'][$index]['name']}}
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
                               {{$service['provider_count']}}
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
            <a href="javascript:void(0);" x-on:click="cancelBooking = !cancelBooking" class="btn btn-outline-dark rounded" role="button">
               Close
            </a>
          
                <button type="button" class="btn btn-primary rounded" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false" wire:click="cancelBooking"  x-on:click="cancelBooking = !cancelBooking" >
                    Cancel Booking
                </button>

          
        </div>
    </div>

@endif
</div>