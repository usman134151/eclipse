<form class="form">
    {{-- updated by shanila to add csrf--}}
    @csrf
    {{-- update ended by shanila --}}
    <div class="row">
        <div class="col-md-10 mb-4">
            <label class="form-label" for="provider">
                Provider
            </label>
            <input type="text"  class="form-control" name="provider" placeholder="Imogene Guthrie"  aria-label="Provider"/>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 mb-4">
            <label class="form-label" for="assignment-no">
                Assignment No.
            </label>
            <input type="text" id="assignment-no" class="form-control" name="assignment-no"
                placeholder="100995-6" />
        </div>
    </div>
    <div class="row">
        <div class=" col-md-10 mb-4">
            <label class="form-label" for="reason-for-reimbursement">
                Reason for Reimbursement
            </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="reason-for-reimbursement" id="mileage"
                    checked="">
                <label for="mileage" class="form-check-label">Mileage</label>
            </div>
            <div class="form-check">
                <label for="compensated-travel-time" class="form-check-label mb-2">Compensated Travel Time</label>
                <input class="form-check-input show-hidden-content" type="radio" name="reason-for-reimbursement"
                    id="compensated-travel-time" checked="">
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
                    id="reason-for-reimbursement" checked="">
                <div class="hidden-content">
                    <input type="text" id="" class="form-control" name="" placeholder="Reason for Reimbursement"
                        aria-label="Reason for Reimbursement">
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
        <input class="form-check-input" type="checkbox" value="" id="charge-To-customer" checked>
        <label class="form-check-label" for="charge-To-customer">
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

</form>