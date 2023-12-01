<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5 text-center" id="markAsPaidModalLabel">
            MARK AS PAID
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row inner-section-segment-spacing">
            <label class="form-label mb-3">
                Payment Manager
            </label>
            <div class="col-lg-0 d-flex gap-3">
                <button wire:click="$set('payment.method',0)" type="button" class="btn  w-auto text-sm d-inline-flex justify-content-center align-items-center fw-semibold gap-1 {{$payment['method'] == 0 ? 'btn-primary ' : 'btn-outline-dark text-primary'}}">
                    <x-icon name="payment"/>
                    Provider's Payment Preference
                </button>
                <button wire:click="$set('payment.method',2)" type="button" class="btn w-auto text-sm d-inline-flex justify-content-center align-items-center fw-semibold gap-1 {{$payment['method'] == 2 ? 'btn-primary ' : 'btn-outline-dark text-primary'}} ">
                    <x-icon name="dollar-card"/>
                    Check
                </button>
                <button wire:click="$set('payment.method',1)" type="button" class="btn w-auto text-sm d-inline-flex justify-content-center align-items-center fw-semibold gap-1 {{$payment['method'] == 1 ? 'btn-primary ' : 'btn-outline-dark text-primary'}}">
                    <x-icon name="dollar-deposit"/>
                    Direct Deposit
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-0 d-flex gap-3">
                <div>
                    <label class="form-label" for="paymentAmount">
                        Payment Amount
                    </label>
                    <input wire:model="payment.amount" disabled type="text" id="paymentAmount" class="form-control form-control-md" name="paymentAmount" required aria-required="true" />
                </div>
                <div>
                    <label class="form-label" for="paymentDate">
                        Payment Date
                    </label>
                    <div class="position-relative has-date-icon-left-side">
                        <x-icon name="input-calender"/>
                        <input type="" wire:model="payment.date" id="paymentDate" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" name="paymentDate" aria-label="Payment Date">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-12 form-actions mb-2">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark"
                    data-bs-dismiss="modal">
                    Cancel
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" wire:click="save" class="btn rounded w-100 btn-primary">
                    Submit
                </button>
            </div>
        </div>
        <div class="row justify-content-center w-100 mt-4">
            <div class="form-check col-lg-4">
                <input class="form-check-input" type="checkbox" id="excludeNotification">
                <label class="form-check-label" for="excludeNotification">
                    Exclude Notification
                </label>
            </div>
        </div>
    </div>
</div>