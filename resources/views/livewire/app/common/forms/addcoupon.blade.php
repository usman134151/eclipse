<div>
    <!-- Submit Service Request Form section start -->
    <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="row">
                                            <div class="col-md-12 mb-md-2">
                                                <h1>Add Coupon</h1>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="coupon-name-column"> Coupon Name</label><span class="text-danger">*</span>
                                                    <input type="text" id="coupon-name-column"
                                                        class="form-control" placeholder="Enter Coupon Name"
                                                        name="cname-column" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="coupon-code-column">Coupon
                                                        Code<span class="text-danger" aria-hidden="true">*</span><i class="fa fa-info-circle mx-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Create a unique code for customers to use at check-out in order to redeem this coupon."></i></label>
                                                    <input type="text" id="coupon-code-column"
                                                        class="form-control" placeholder="Enter Coupon Code"
                                                        name="ccode-column" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-4">
                                                    <div class="form-group">
                                                        <label for="coupon-description">Coupon Description<i class="fa fa-info-circle mx-2" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter a description describing the coupon's intended use or associated marketing campaign."></i></label>
                                                        <textarea class="form-control" id="coupon-description" rows="8" cols="50" placeholder="Enter Coupon Description"  name="cdescription-column"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-4">
                                                    <label class="form-label"
                                                        for="discount-column">Discount<span class="text-danger" aria-hidden="true">*</span><i class="fa fa-info-circle mx-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter the amount or percentage you would like to offer as a discount for this coupon."></i></label>
                                                        <div class="row">
                                                            <div class="col-md-9">
                                                                <input type="text" id="discount-column"
                                                                class="form-control" placeholder="Enter Discount"
                                                                name="ccode-column" />
                                                            </div>
                                                            <div class="col-md-3">
                                                                <select class="form-select" aria-label="sign">
                                                                    <option selected value="1">$</option>
                                                                    <option value="2">%</option>
                                                                </select>
                                                            </div>
                                                        </div>                                                       
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label"
                                                        for="coupon-type-column">Coupon Type<i class="fa fa-info-circle mx-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Select whether this coupon can be redeemed once or multiple times."></i></label>
                                                    <select class="form-select" id="coupon-type-column">
                                                        <option value="1" selected>One Time</option>
                                                        <option value="2">Multiple Time</option>
                                                    </select>
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label"
                                                    for="select-accommodations-column"> Select Accommodations <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Select one or more accommodations for which this coupon may be redeemed."></i></label>
                                                    <select class="form-control chosen chosen-select" data-placeholder="Please Choose Accommodation" id="select-accommodations-column" multiple="true" tabindex="" name="">
                                                      <option value="1">Sign Language Interpreting Services</option>
                                                      <option value="2">Accessible Media Services</option>
                                                      <option value="3">Caption and Transcription Services</option>
                                                      <option value="5">ICS Administrative Accommodations</option>
                                                      <option value="6">Spoken Language Interpreting Service</option>
                                                      <option value="8">Chicago</option>
                                                      <option value="9">Alberta</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="select-services">Select Services <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Select one or more accommodations for which this coupon may be redeemed."></i></label>
                                                    <p>Choose Accommodation first</p>
                                                  </div>
                                            </div>                                            
                                                    <div class="col-12 justify-content-center form-actions d-flex">
                                                        <button type="submit"
                                                        class="btn btn-primary rounded">Create Coupon</button>
                                                        <button type="button"
                                                            class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">Back</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Submit Service Request Form section end -->
</div>
