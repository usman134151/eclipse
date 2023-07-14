<div>
  <form class="form">
                            @csrf
                            <div class="col-md-12 mb-md-2">
                                <h2>Industry Form </h2>
                                <!-- Industry Form Begin -->
                                <div class="row between-section-segment-spacing">
                                    <div class="col-md-12 col-12">
                                        <h3>Computer Science</h3>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label"><b>Req_info:</b></label>
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                                <!-- Industry Form End -->
                                <!-- Service Form Begin -->
                                <div class="row">
                                    <div class="col-md-7 col-12">
                                        <h2>Service Form</h2>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <h3>English to Arabic Sign Language</h3>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="first-name">First
                                                Name</label>
                                            <input type="text" id="first-name" class="form-control"
                                                placeholder="First Name" name="fname-column" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="last-name-column">Last
                                                Name</label>
                                            <input type="text" id="last-name-column" class="form-control"
                                                placeholder="Last Name" name="lname-column" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="phone-number-column">Phone
                                                Number</label>
                                            <input type="text" id="phone-number-column" class="form-control"
                                                placeholder="Enter Phone Number" name="pnumber-column" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="severity">Severity</label>
                                            <select class="form-select" id="severity">
                                                <option selected>Select Severity</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div
                                        class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                        <button type="button" class="btn btn-outline-dark rounded" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('requester-info')">Back</button>
                                        <button type="submit" class="btn btn-primary rounded">Save as Draft</button>
                                        <button type="submit" class="btn btn-primary rounded">Request from User</button>
                                        <button type="button" class="btn btn-primary rounded"
                                        x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('payment-info')">Proceed to  Payment Info</button>
                                    </div>
                                </div>
                                <!-- Service Form End -->
                            </div>
                        </form></div>
