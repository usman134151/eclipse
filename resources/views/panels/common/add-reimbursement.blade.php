<x-off-canvas show="addReimbursement" style="z-index: 1057;">
	<x-slot name="title">Add Reimbursement</x-slot>
    <div class="row">
        <div class="col-md-10 mb-4">
            <label class="form-label" for="provider">
                Provider
            </label>
            <input type="text" id="provider" class="form-control" name="provider" placeholder="Imogene Guthrie"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mb-4">
            <label class="form-label" for="assignment-no">
                Assignment No.
            </label>
            <input type="text" id="assignment-no" class="form-control" name="assignment-no" placeholder="100995-6"/>
        </div>
    </div>
    <div class="row">
        <div class=" col-md-10 mb-4">
            <label class="form-label" for="reason-for-reimbursement">
                Reason for Reimbursement
            </label>
            <div class="mb-2">
                <div class="d-inline-flex">
                    <input class="form-check-input" type="radio" name="reason-for-reimbursement" id="mileage" checked>
                    <label for="mileage" class="form-label mx-2">Mileage</label>
                </div>
            </div>
            <div class="mb-2">
                <div class="d-inline-flex">
                    <input class="form-check-input" type="radio" name="reason-for-reimbursement" id="compensated-travel-time" checked>
                    <label for="compensated-travel-time" class="form-label mx-2">Compensated Travel Time</label>
                </div>
                <div class=" mb-3">
                    <div class="mx-4 d-inline-flex col-md-2">
                        <div>
                            <label for="hours">Hours</label>
                             <input type="text" id="hours" class="form-control rounded-0 text-center px-0 " aria-label="Discount Amount" placeholder="00" aria-label="Hours" aria-describedby="Hours">
                        </div>
                        <div>
                            <label for="minutes">Minutes</label>
                            <input type="text" id="minutes" class="form-control rounded-0 text-center px-0 " aria-label="Discount Amount" placeholder="00" aria-label="Minutes" aria-describedby="Minutes">
                        </div>
                    </div>
                  </div>
            </div>
            <div>
                <div class="d-inline-flex">
                    <input class="form-check-input" type="radio" name="reason-for-reimbursement" id="reason-for-reimbursement" checked>
                    <label for="" class="form-label mx-2">Other</label>
                </div>
                <input type="text" id="" class="form-control" name="" placeholder="Reason for Reimbursement" aria-label="Reason for Reimbursement"/>
                <div class="mt-4">
                    <label class="form-label" for="reimbursement-amount">
                        Reimbursement Amount
                    </label>
                    <input type="text" id="reimbursement-amount" class="form-control" name="reimbursement-amount" placeholder="$00.00"/>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-10">
            <label class="form-label" for="upload-document">
                Receipt for Reimbursement
            </label>
            <input type="file" id="upload-document" class="form-control" name="upload-document" placeholder="upload-document"/>
        </div>
    </div>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="" id="charge-to-customer" checked>
            <label class="form-check-label" for="charge-to-customer">
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
</x-off-canvas>
