<div class="modal-content">
    <div class="modal-header justify-center">
        <h2 class="modal-title fs-5 text-center" id="addNewCustomerLabel">Confirm Action</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <div class="col-12">
                Are you sure you want to update this Booking? Booking is outside it’s modification window.
                If you’d like to modify this booking, you will be charged
                {{ $booking ? numberFormat($booking['payment']['modification_fee']) : '' }}. Would you like to proceed
                with
                modification?
            </div>
            @if (!session()->get('isCustomer'))
                <div class="col-lg-12 mt-2">


                    <div class="mb-4">
                        <label class="form-label" for="first-name-column">Override Charges</label>
                        <input type="text" id="charges" wire:model.defer="override_charges" class="form-control"
                            placeholder="$0.00" name="charges" />
                        @error('override_charges')
                            <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="col-12">
                <div class="mb-4">
                    <label class="form-label" for="first-name-column">Reason For Edit</label>
                    <textarea type="number" id="reason" class="form-control" placeholder="Enter Reason For Modification" name="reason"></textarea>
                </div>
            </div> --}}
                <div class="col-12">
                    <div class="">

                        <input class="form-check-input " wire:model="waiveModification" id="waive_modification"
                            name="waive_modification" type="checkbox" tabindex="">
                        <label class="form-check-label" for="waive_modification">Waive Modification Fee </label>

                    </div>
                    <div class="">

                        <input class="form-check-input show-hidden-content" id="cancel_provider_payment"
                            name="cancel_provider_payment" type="checkbox" tabindex="" disabled>
                        <label class="form-check-label" for="cancel_provider_payment">Cancel Provider Payment
                            <small>(coming soon)</small> </label>

                    </div>
                </div>
            @endif

        </div>

    </div>
    <div class="modal-footer">
        <div class="row justify-content-center w-100 mb-2">
            <div class="col-lg-6">
                <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">No, leave
                    booking as created! </button>
            </div>
            <div class="col-lg-6">
                <button type="button" wire:click="confirm" class="btn rounded w-100 btn-primary">Yes, I accept the
                    modification
                    charge!</button>
            </div>
        </div>
    </div>
</div>
