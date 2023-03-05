{{-- Mark as Read Modal- Start --}}
<div class="modal fade" id="markAsReadModal" tabindex="-1" aria-labelledby="markAsReadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 text-center" id="markAsReadModalLabel">MARK AS PAID</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <label class="form-label mb-3">
                        Payment Manager
                    </label>
                    <div class="col-lg-0 d-flex gap-2 mb-5">
                        <button type="button" class="btn rounded w-100 btn-primary text-sm">
                            <x-icon name="payment"/>
                            Provider's Payment Preference</button>
                        <button type="button" class="btn rounded w-100 btn-outline-dark text-sm">
                            <x-icon name="dollar-card"/>
                            Check
                        </button>
                        <button type="button" class="btn rounded w-100 btn-outline-dark text-sm">
                            <x-icon name="dollar-deposit"/>
                            Direct Deposit</button>
                    </div>
                    <div class="col-lg-0 d-flex gap-3">
                        <div>
                            <label class="form-label" for="paymentAmount">
                                Payment Amount
                            </label>
                            <input type="text" id="paymentAmount" class="form-control form-control-md" name="paymentAmount"
                                placeholder="$420" required aria-required="true" />
                        </div>
                        <div>
                            <label class="form-label" for="paymentDate">
                                Payment Date
                            </label>
                            <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                                <x-icon name="input-calender"/>
                                <input type="" id="paymentDate" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" name="paymentDate" aria-label="Payment Date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row justify-content-center w-100 mb-2">
                    <div class="col-lg-3">
                        <button type="button" class="btn rounded w-100 btn-outline-dark"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-lg-3">
                        <button type="button" class="btn rounded w-100 btn-primary">Submit</button>
                    </div>
                </div>
                <div class="row d-flex justify-content-center w-100 mb-4">
                    <div class="form-check col-lg-4">
                        <input class="form-check-input" type="checkbox" value="" id="ExcludeNotification">
                        <label class="form-check-label" for="ExcludeNotification">
                            Exclude Notification
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Mark as Read - End --}}
