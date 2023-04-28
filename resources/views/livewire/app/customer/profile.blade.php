<div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">My Profile</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                {{-- updated Sana to change x-icon to svg --}}
                                <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23"><use xlink:href="/css/common-icons.svg#home"></use></svg>
                     {{-- end updated by Sana --}}  
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000">
                                    Profile
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                My profile
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <h6>Here you can view, update, and manage your personal information.</h6>
                    <div class="row mt-2 mb-5">
                        {{-- BEGIN: Profile --}}
                        <div class="col-12 ">
                            <div class="text-center">
                                <div class="d-inline-block position-relative mb-3">
                                    <img src="/tenant/images/portrait/small/avatar-s-9.jpg"
                                        class="img-fluid rounded-circle" alt="Customer Profile Image" />
                                    {{-- <div>
                                        <input class="position-absolute form-control" type="file" />
                                    </div> --}}
                                    <div
                                        class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
                                        <svg aria-label="Upload Picture" width="57" height="57" viewBox="0 0 57 57"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/provider.svg#camera"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3>Referral Code: KYTALB</h3>
                                </div>
                            </div>
                            <div class="p-4 border border-dark rounded bg-lighter mb-4 align-items-left text-left">
                                <div class="row">
                                    <div class="col-lg col-3 mb-4">
                                        <div class="mb-4">
                                            <label class="form-label text-primary text-left">Supervisor Detail</label>

                                            <div class="font-family-tertiary value gap-2 ">
                                                <p class="fw-semibold">Name: <span class="text-primary">Zaara
                                                        Noor</span></p>
                                                <p class="fw-semibold">Email: <span class="">zaranoor@gmail.com</span>
                                                </p>
                                                <p class="fw-semibold">Phone No:<span>(121) 212-2333</span></p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg col-3 mb-4">
                                        <div class="mb-4">
                                            <label class="form-label text-primary gap-2">Departments</label>
                                            <div class="font-family-tertiary value ">
                                                <p class="fw-semibold text-primary">Language Interpreter</p>
                                                <p class="fw-semibold text-primary">Cart Captioning</p>
                                                <p class="fw-semibold text-primary">Cart Captioning</p>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-6 col-6 mb-4 text-left">
                                        <label class="form-label text-primary gap-2">Assigned Role</label>
                                        <div class="d-flex col-lg-12 ">
                                            <div class=" col-lg-6 font-family-tertiary value ">
                                                <h6 class=" fw-semibold"> Admin</h6>
                                                <h6 class=" fw-semibold">Supervisor</h6>
                                                <h6 class=" fw-semibold">Service Consumer</h6>

                                            </div>
                                            <div class=" col-lg-6 font-family-tertiary value">
                                                <div class="d-flex col-lg-12 ">
                                                    <div class="col-lg-8">
                                                        <h6 class=" fw-semibold"> Pending Invoices:</h6>
                                                        <h6 class=" fw-semibold">Total Invoices:</h6>
                                                        <h6 class=" fw-semibold">Overdue Invoices:</h6>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <h6 class=" fw-semibold"> <span>$253</span></h6>
                                                        <h6 class=" fw-semibold"><span>$3734</span></h6>
                                                        <h6 class=" fw-semibold"><span>$368</span></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-3 ">
                                                <div class="w-100">
                                                    <span class="fw-semibold">Open Service Requests:</span>
                                                    <span>10</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="w-100">
                                                    <span class="fw-semibold">Total Service Requests:</span>
                                                    <span>10</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="w-100 mx-5">
                                                    <span class="fw-semibold">Total Number of Assigned
                                                        Supervisor:</span>
                                                    <span>15</span>
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
                            <input type="text" id="first-name" class="form-control" name="frist-name"
                                placeholder="Alex" />
                        </div>
                        <div class="col-lg-6 mb-4 pe-lg-5">
                            <label class="form-label" for="last-name">
                                Last Name

                            </label>
                            <input type="text" id="last-name" class="form-control" name="last-name"
                                placeholder="Wonderland" required aria-required="true" />
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
                            <label class="form-label" for="phone_number-column">Phone Number</label>
                            <input type="text" id="phone_number-column" class="form-control" name="phone"
                                placeholder="(343) 424-6564" />
                        </div>
                        <div class="col-lg-6 mb-4 pe-lg-5">
                            <label class="form-label" for="preferred-language">
                                Preferred Language
                            </label>
                            {!! $setupValues['languages']['rendered'] !!}
                        </div>
                        <div class="col-lg-6 mb-4 ps-lg-5">
                            <label class="form-label" for="industry">
                                Industry
                            </label>
                             {{-- Updated by Shanila to add dropdown--}}
                             {!! $setupValues['industries']['rendered'] !!}
                             {{-- End of update by Shanila --}}
                        </div>
                        <div class="col-lg-12 mb-4">
                            <h2>Billing Address</h2>
                        </div>

                        <div class="col-lg-6 mb-4 pe-lg-5">
                            <label class="form-label" for="address-line-column">
                                Address Line 1
                            </label>
                            <input type="text" id="address-line-column" class="form-control" name="address-line"
                                placeholder="Seattle, WA, USA" />
                        </div>
                        <div class="col-lg-6 mb-4 ps-lg-5">
                            <label class="form-label" for="address-line-2-column">
                                Address Line 2
                            </label>
                            <input type="text" id="address-line-2-column" class="form-control" name="addressLine2"
                                placeholder="house 21" />
                        </div>
                        <div class="col-lg-6 mb-4 pe-lg-5">
                            <label class="form-label" for="country">
                                Country
                            </label>
                            {!! $setupValues['countries']['rendered'] !!}
                        </div>
                        <div class="col-lg-6 mb-4 ps-lg-5">
                            <label class="form-label" for="state-column">
                                State / Province
                            </label>
                            <select class="select2 form-select" id="state-column">
                                <option value="Al">
                                    Alabama
                                </option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-4 pe-lg-5">
                            <label class="form-label" for="city-column">
                                City
                            </label>
                            <select class="select2 form-select" id="city-column">
                                <option value="">Oxford</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-4 ps-lg-5">
                            <label class="form-label" for="zip-code-column">
                                Zip Code
                            </label>
                            <input type="text" id="zip-code-column" class="form-control" name="zipCode" placeholder="07481" />
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
                            {!! $setupValues['countries']['rendered'] !!}
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
                            <label class="form-label" for="zipcode">
                                Zip Code
                            </label>
                            <input type="text" id="zipcode" class="form-control" name="zipCode" placeholder="07481" />
                        </div>
                        {{-- Input Fields End --}}
                    </div>
                    <div class="col-12 justify-content-center form-actions d-flex gap-3">

                        <button type="button" class="btn btn-primary rounded"
                            x-on:click="$wire.switch('provider-service')">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>

        </div>

        {{-- Action Buttons - Start --}}


        {{-- END: Profile --}}

    </div>
</div>
</div>
</div>
</div>
