<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5 text-center" id="payInvoiceLabel">Pay Invoice
            {{ numberFormat($totalPrice)}}</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">
            <label class="form-label mb-3">
                Payment Manager
            </label>
            <div class="col-lg-0 d-flex gap-2 mb-5">
                <button type="button"
                        class="btn  w-100 {{ $payment['payment_method'] == 4 ? 'btn-primary ' : ' btn-outline-dark' }} text-sm"
                        wire:click="$set('payment.payment_method','4')">
                    <svg class="fill" width="40" height="34" viewBox="0 0 40 34" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/sprite.svg#payment"></use>
                    </svg>
                    <span class="mx-1">Bank Transfer</span></button>
                <button type="button"
                        class="btn  w-100 {{ $payment['payment_method'] == 3 ? 'btn-primary ' : ' btn-outline-dark' }} text-sm"
                        wire:click="$set('payment.payment_method','3')">
                    <x-icon name="dollar-card"/>
                    <span class="mx-2 mt-2">Check</span>
                </button>
                <button type="button"
                        class="btn  w-100 {{ $payment['payment_method'] == 2 ? 'btn-primary ' : ' btn-outline-dark' }} text-sm"
                        wire:click="$set('payment.payment_method','2')">
                    <x-icon name="dollar-deposit"/>
                    <span class="mt-2 mx-2">Cash payment</span></button>
            </div>

            @error('payment.payment_method')
            <span class="d-inline-block invalid-feedback mt-2">
                    {{ $message }}
                </span>
            @enderror
            <div class="col-lg-10 d-flex gap-3 mb-3">
                <div>
                    <label class="form-label" for="paymentAmount">
                        Payment Amount
                    </label>
                    <input type="text" id="paymentAmount" class="form-control form-control-md" name="paymentAmount"
                           wire:model.defer="payment.payment_amount" placeholder="$420" required aria-required="true"/>

                    @error('payment.payment_amount')
                    <span class="d-inline-block invalid-feedback mt-2">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div>
                    <label class="form-label" for="paymentDate">
                        Payment Date
                    </label>
                    <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                        <x-icon name="input-calender"/>
                        <input wire:model.defer="payment.payment_date" id="payment_date"
                               class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY"
                               name="payment_date" aria-label="Payment Date">

                        @error('payment.payment_date')
                        <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <label class="form-label" for="notes-column">
                    Notes
                    <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/css/provider.svg#fill-question"></use>
                    </svg>
                </label>
                <textarea class="form-control" wire:model.defer="payment.payment_notes" rows="3" placeholder=""
                          name="notesColumn"
                          id="notes-column"></textarea>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-12 form-actions mb-2">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark"
                        data-bs-dismiss="modal">Cancel
                </button>
            </div>
            <div class="col-lg-3">
                <button type="submit" wire:click="{{$isMultiple? 'payMultipleInvoices' : 'payInvoice'}}"
                        class="btn rounded w-100 btn-primary">Submit
                </button>
            </div>
        </div>
    </div>
</div>
