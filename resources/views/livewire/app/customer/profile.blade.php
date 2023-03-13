<div>
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="row mt-2 mb-5">
                        {{-- BEGIN: Profile --}}
                        <div class="col-12 ">
                           <div class="text-center">
                            <div class="d-inline-block position-relative mb-3">
                                <img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle"
                                    alt="Profile Image of Provider" />
                                {{-- <div>
                                    <input class="position-absolute form-control" type="file" />
                                </div> --}}
                                <div
                                    class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
                                    <x-icon name="camera" />
                                </div>
                            </div>
                            <div>
                                <h3>Referral Code: KYTALB</h3>
                            </div>
                            <div>
                                <x-icon name="green-badge" />
                                <span><strong>Certified</strong></span>
                            </div>
                        </div>
                            <div class="p-4 border border-dark rounded bg-lighter mb-4 align-items-left text-left">
                                <div class="row">
                                    <div class="col-lg col-3 mb-4">
                                        <div class="mb-4">
                                            <label class="form-label text-primary text-left">Supervisor Detail</label>

                                            <div class="font-family-tertiary value ">
                                                <p class="fw-semibold">Name: <span class="text-primary">Zaara
                                                        Noor</span></p>
                                                <p class="fw-semibold">Email: <span class="">zaranoor@gmail.com</span>
                                                </p>
                                                <p class="fw-semibold">Phone No:<span>(121) 212-2333</span></p>
                                            </div>
                                            <p class="fw-semibold">Open Service Requests: <span>10</span></p>
                                        </div>

                                    </div>
                                    <div class="col-lg col-3 mb-4">
                                        <div class="mb-4">
                                            <label class="form-label text-primary">Departments</label>
                                            <div class="font-family-tertiary value ">
                                                <p class="fw-semibold text-primary">Language Interpreter</p>
                                                <p class="fw-semibold text-primary">Cart Captioning</p>
                                                <p class="fw-semibold text-primary">Cart Captioning</p>

                                            </div>
                                            <p class="fw-semibold">Cart Captioning: <span class="text-primary">15</span>
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-6 mb-4 text-left">
                                        <label class="form-label text-primary">Assigned Role</label>
                                        <div class="d-flex col-lg-12 ">
                                        <div class=" col-lg-6 font-family-tertiary value ">
                                            <h6> Admin</h6>
                                            <h6>Supervisor</h6>
                                            <h6>Service Consumer</h6>

                                        </div>
                                        <div class=" col-lg-6 font-family-tertiary value">
                                            <h6> Pending Invoices: <span>$253</span></h6>
                                            <h6>Total Invoices: <span>$3734</span></h6>
                                            <h6>Overdue Invoices: <span>$3734</span>$368</h6>
                                            <h6></h6>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <p class="fw-semibold">Total Number of Assigned Supervisor: <span class="text-primary">15</span>
                                        </p>
                                    </div>
                                    </div>


                                </div>

                             </div>
                                </div>



                            </div>


                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <h2>My Profile</h2>
                    </div>
                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="company">
                            Company
                        </label>
                        <input type="text" id="company" class="form-control" name="email" placeholder="NA" required
                            aria-required="true" />
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="frist-name">First Name</label>
                        <input type="text" id="first-name" class="form-control" name="frist-name" placeholder="Alex" />
                    </div>
                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="last-name">
                            Last Name

                        </label>
                        <input type="text" id="last-name" class="form-control" name="last-name" placeholder="Wonderland"
                            required aria-required="true" />
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="pronouns">Pronouns</label>
                        <input type="text" id="pronouns" class="form-control" name="pronouns" placeholder="He" />
                    </div>
                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="email">
                            Email

                        </label>
                        <input type="text" id="email" class="form-control" name="email"
                            placeholder="alex@dispostable.com" required aria-required="true" />
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="text" id="phone" class="form-control" name="phone" placeholder="(343) 424-6564" />
                    </div>
                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="preferred-language">
                            Preferred Language
                        </label>
                        <select class="select2 form-select" id="preferred-language">
                            <option value="">English</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="industry">
                            Industry
                        </label>
                        <select class="select2 form-select" id="state">
                            <option value="Al">
                                Legal
                            </option>
                        </select>
                    </div>.
                    <div class="col-lg-12 mb-4">
                        <h2>Billing Address</h2>
                    </div>

                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="address-line-1">
                            Address Line 1
                        </label>
                        <input type="text" id="address-line-1" class="form-control" name="address-line-1"
                            placeholder="Seattle, WA, USA" />
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="address-line-2">
                            Address Line 2
                        </label>
                        <input type="text" id="address-line-2" class="form-control" name="addressLine2"
                            placeholder="house 21" />
                    </div>
                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="country">
                            Country
                        </label>
                        <select class="select2 form-select" id="country">
                            <option value="">USA</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="state">
                            State / Province
                        </label>
                        <select class="select2 form-select" id="state">
                            <option value="Al">
                                Alabama
                            </option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="city">
                            City
                        </label>
                        <select class="select2 form-select" id="city">
                            <option value="">Oxford</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="zip-code">
                            Zip Code
                        </label>
                        <input type="text" id="zip-code" class="form-control" name="zipCode" placeholder="07481" />
                    </div>
                    <div class="col-lg-12 mb-4">
                        <h2>Physical Address</h2>
                    </div>

                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="address-line-1">
                            Address Line 1
                        </label>
                        <input type="text" id="address-line-1" class="form-control" name="address-line-1"
                            placeholder="Seattle, WA, USA" />
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="address-line-2">
                            Address Line 2
                        </label>
                        <input type="text" id="address-line-2" class="form-control" name="addressLine2"
                            placeholder="house 21" />
                    </div>
                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="country">
                            Country
                        </label>
                        <select class="select2 form-select" id="country">
                            <option value="">USA</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="state">
                            State / Province
                        </label>
                        <select class="select2 form-select" id="state">
                            <option value="Al">
                                Alabama
                            </option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label" for="city">
                            City
                        </label>
                        <select class="select2 form-select" id="city">
                            <option value="">Oxford</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label" for="zip-code">
                            Zip Code
                        </label>
                        <input type="text" id="zip-code" class="form-control" name="zipCode" placeholder="07481" />
                    </div>
                    {{-- Input Fields End --}}
                </div>
                {{-- Action Buttons - Start --}}
                <div class="col-12 justify-content-center form-actions d-flex gap-3">

                    <button type="button" class="btn btn-primary rounded" x-on:click="$wire.switch('provider-service')">
                        Save Changes
                    </button>
                </div>

                {{-- END: Profile --}}

            </div>
        </div>
    </div>
</div>
</div>
