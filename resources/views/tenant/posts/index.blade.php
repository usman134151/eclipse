@extends('layouts.tenant', ['title' => 'Blog'])

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <!-- BEGIN: Header-->
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h1 class="content-header-title float-start mb-0">Basic Form</h1>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="http://127.0.0.1:8000">
                      Home
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0)">
                      Forms
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      Form Layouts
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
          <!-- Basic multiple Column Form section start -->
          <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form">
                      <div class="row">
                        <div class="col-md-12 mb-md-2">
                          <h2>My Profile</h2>
                          <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="company-column">Company</label>
                                <input
                                  type="text"
                                  id="company-column"
                                  class="form-control"
                                  name="company-column"
                                  placeholder="Company"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="first-name-column">First Name</label>
                                <input
                                  type="text"
                                  id="first-name-column"
                                  class="form-control"
                                  placeholder="First Name"
                                  name="fname-column"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="last-name-column">Last Name</label>
                                <input
                                  type="text"
                                  id="last-name-column"
                                  class="form-control"
                                  placeholder="Last Name"
                                  name="lname-column"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="last-name-column">Pronouns</label>
                                <input
                                  type="text"
                                  id="last-name-column"
                                  class="form-control"
                                  placeholder=""
                                  name="lname-column"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="email-id-column">Email</label>
                                <input
                                  type="email"
                                  id="email-id-column"
                                  class="form-control"
                                  name="email-id-column"
                                  placeholder="Email"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="phone">Phone</label>
                                <input
                                  type="text"
                                  id="phone"
                                  class="form-control"
                                  name="phone"
                                  placeholder=""
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="preferred-language">Preferred Language</label>
                                <select class="select2 form-select" id="preferred-language">
                                  <option>English</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="industry">Industry</label>
                                <input
                                  type="text"
                                  id="industry"
                                  class="form-control"
                                  name="industry"
                                  placeholder=""
                                  />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12 col-12 mb-md-2">
                          <div class="row">
                            <div class="col-md-5 col-12">
                              <h2>Supervisor Detail</h2>
                              <div class="row">
                                <div class="col-6 mb-1">
                                  Name:
                                </div>
                                <div class="col-6 mb-1">
                                  Zaara Noor
                                </div>
                                <div class="col-6 mb-1">
                                  Email:
                                </div>
                                <div class="col-6 mb-1">
                                  zaranoor@gmail.com
                                </div>
                                <div class="col-6 mb-1">
                                  Phone No:
                                </div>
                                <div class="col-6 mb-1">
                                  (121) 212-2333
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-md-2">
                          <div class="col-md-12">
                            <h2>Billing Address</h2>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="address-line-1">Address Line 1</label>
                              <input
                                type="text"
                                id="address-line-1"
                                class="form-control"
                                name="address-line-1"
                                placeholder=""
                                />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="address-line-2">Address Line 2</label>
                              <input
                                type="text"
                                id="address-line-2"
                                class="form-control"
                                name="address-line-2"
                                placeholder=""
                                />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="country">Country</label>
                              <select class="select2 form-select" id="country">
                                <option value="USA">USA</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="state">State</label>
                              <select class="select2 form-select" id="state">
                                <option value="Al">Alabama</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="city">City</label>
                              <input
                                type="text"
                                id="city"
                                class="form-control"
                                name="city"
                                placeholder=""
                                />
                            </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="zip-code">Enable Option</label>
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 justify-content-center d-flex">
                          <button type="submit" class="btn btn-primary rounded">Save Changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Floating Label Form section end -->
        </div>
      </div>
    </div>
    <!-- End: Content-->
@endsection