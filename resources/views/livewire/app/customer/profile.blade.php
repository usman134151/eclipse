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
                                    <svg width="22" height="23" viewBox="0 0 22 23" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z"
                                            fill="#0A1E46" />
                                    </svg>
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
                                        class="img-fluid rounded-circle" alt="Profile Image of Provider" />
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
