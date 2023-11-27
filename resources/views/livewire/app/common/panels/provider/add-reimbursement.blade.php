<div>
    <div class="row">
        <div class="col-md-10 mb-4">
            <label class="form-label" for="assignment-no">
                Assignment No.
            </label>
            <input type="text" id="assignment-no" class="form-control" name="assignment-no" placeholder="100995-6" />
        </div>
    </div>

    <div class="row">
        <div class=" col-md-10 mb-4">
            <label class="form-label" for="reason-for-reimbursement">
                Reason for Reimbursement
            </label>
            <div class="form-check">
                <label for="mileage" class="form-check-label">Mileage</label>
                <input class="form-check-input show-hidden-content" type="radio" name="reason-for-reimbursement"
                    id="mileage">
                <div class="hidden-content">
                    <a href="#" class="d-flex justify-content-end">
                        KM <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                fill="black"></path>
                        </svg>
                    </a>
                    <input type="text" id="" class="form-control" name=""
                        placeholder="Enter Miles/Km" aria-label="Enter Miles/Km">
                </div>
            </div>

            <div class="form-check">
                <label for="compensated-travel-time" class="form-check-label mb-2">Compensated Travel Time</label>
                <input class="form-check-input show-hidden-content" type="radio" name="reason-for-reimbursement"
                    id="compensated-travel-time" checked>
                <div class="hidden-content col-lg-4">
                    <div class="d-flex justify-content-around">
                        <label class="form-label-sm">Hours</label>
                        <label class="form-label-sm">Minutes</label>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-md text-center" placeholder="00"
                            aria-label="00" aria-describedby="">
                        <input type="text" class="form-control form-control-md text-center" placeholder="00"
                            aria-label="00" aria-describedby="">
                    </div>
                </div>
            </div>
            <div class="form-check">
                <label for="" class="form-check-label">Other</label>
                <input class="form-check-input show-hidden-content" type="radio" name="reason-for-reimbursement"
                    id="reason-for-reimbursement">
                <div class="hidden-content">
                    <input type="text" id="" class="form-control" name=""
                        placeholder="Reason for Reimbursement" aria-label="Reason for Reimbursement">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mb-4">
            <div>
                <div class="">
                    <label class="form-label" for="reimbursement-amount">
                        Reimbursement Amount
                    </label>
                    <input type="text" id="reimbursement-amount" class="form-control" name="reimbursement-amount"
                        placeholder="$00.00">
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-10">
            <label class="form-label" for="upload-document">
                Receipt for Reimbursement
            </label>
            <input type="file" id="upload-document" class="form-control" name="upload-document"
                placeholder="upload-document" />
        </div>
    </div>
    <div class="form-check mb-4">
        <input class="form-check-input" type="checkbox" value="" id="chargeToCustomer" checked>
        <label class="form-check-label" for="chargeToCustomer">
            Charge to Customer
        </label>
    </div>
    <div class="col-12 justify-content-center form-actions d-flex gap-3">
        <button class="btn btn-outline-primary rounded" x-on:click="addReimbursement = !addReimbursement">
            CANCEL
        </button>
        <button type="submit" class="btn btn-primary rounded" x-on:click="addReimbursement = !addReimbursement">
            ADD
        </button>
    </div>
</div>
