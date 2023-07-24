<div class="">       
 <div class="row mb-0 mt-3">
            <p>Here you can manage your preferred method of compensation for remittance payments.</p>
        </div>
            <div class="col-12 form-actions">
                <div class="mb-0" role="tablist" id="myTab" tabindex="0">
                    <button type="submit"  tabindex="0" class="btn btn-outline-primary active" id="direct-deposit-tab" data-bs-toggle="tab" data-bs-target="#direct-deposit" type="button" role="tab" aria-controls="direct-deposit" aria-selected="true">Direct Deposit</button>
                    <button type="button"  tabindex="0" class="btn btn-primary mx-2"  id="mail-a-check-tab" data-bs-toggle="tab" data-bs-target="#mail-a-check" type="button" role="tab" aria-controls="mail-a-check" aria-selected="false">Mail a Check</button>
                </div>
            </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="direct-deposit" role="tabpanel" aria-labelledby="direct-deposit-tab">
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        <label class="form-label" for="bank-name">
                            Bank Name
                        </label>
                        <input type="text" id="bank-name" class="form-control" name="bank-name" placeholder="Enter Bank Name"/>
                    </div>
                    <div class="col-lg-5 mb-4">
                        <label class="form-label" for="routing-number">
                            Routing Number
                        </label>
                        <div class="d-flex align-items-center w-100">
                            <div class="position-relative flex-grow-1">
                                <input type="text" id="routing-number" class="form-control" name="routing-number" placeholder="______________"/>
                            </div>
                            <button type="button" class="btn px-2">
                                <svg aria-label="View" width="24" height="17" viewBox="0 0 24 17">
                                    <use xlink:href="/css/common-icons.svg#black-eye">
                                    </use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        <label class="form-label" for="account-number">
                            Account Number
                        </label>
                        <div class="d-flex align-items-center w-100">
                            <div class="position-relative flex-grow-1">
                                <input type="text" id="account-number" class="form-control" name="account-number" placeholder="______________"/>
                            </div>
                            <button type="button" class="btn px-2">
                                <svg aria-label="View" width="24" height="17" viewBox="0 0 24 17">
                                    <use xlink:href="/css/common-icons.svg#black-eye">
                                    </use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="mail-a-check" role="tabpanel" aria-labelledby="mail-a-check-tab">
                <div class="row">
                    <h2>Select Address</h2>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Select Profile Default Address
                            </label>
                            </div>
                            <div class="mb-3 mx-4">
                                <span class="text-secondary">Mrs Smith 98 Shirley Street PIMPAMAQLD 4209 AUSTRALIA</span>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary btn-has-icon rounded mb-4" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                    <svg aria-label="Add Address" width="20" height="21" viewBox="0 0 20 21">
                                        <use xlink:href="/css/common-icons.svg#plus"></use>
                                    </svg>
                                    <span>Add Address</span>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
          </div>
       
       
        <div class="col-12 justify-content-center form-actions d-flex">
            <button type="submit"  class="btn btn-primary rounded">Save</button>
        </div>
   
</div>
