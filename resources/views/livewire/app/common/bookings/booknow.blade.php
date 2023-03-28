<div>
  <!-- BEGIN: Content-->
  <div class="content-header row">
      <div class="content-header-left col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h1 class="content-header-title float-start mb-0">Booking Form</h1>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
              <li class="breadcrumb-item">
          <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
          <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"/>
          </svg>
          </a>
        </li>
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">
                  Assignments
                  </a>
                </li>
                <li class="breadcrumb-item">
                  Booking Form
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
          <!-- BEGIN: Assignment Booking Form -->
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link {{ $component == 'requester-info' ? 'active' : '' }}" id="requester-info-tab" data-bs-toggle="tab" data-bs-target="#requester-info" type="button" role="tab" aria-controls="requester-info" aria-selected="true"><span class="number">1</span> Requester Info</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link {{ $component == 'request-details' ? 'active' : '' }}" id="request-details-tab" data-bs-toggle="tab" data-bs-target="#request-details" type="button" role="tab" aria-controls="request-details" aria-selected="false"><span class="number">2</span> Request Details</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link {{ $component == 'payment-info' ? 'active' : '' }}" id="payment-info-tab" data-bs-toggle="tab" data-bs-target="#payment-info" type="button" role="tab" aria-controls="payment-info" aria-selected="false"><span class="number">3</span> Payment Info</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link {{ $component == 'booking-summary' ? 'active' : '' }}" id="booking-summary-tab" data-bs-toggle="tab" data-bs-target="#booking-summary" type="button" role="tab" aria-controls="booking-summary" aria-selected="false"><span class="number">4</span> Booking Summary</button>
            </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane fade {{ $component == 'requester-info' ? 'active show' : '' }}" id="requester-info" role="tabpanel" aria-labelledby="requester-info-tab" tabindex="0">
              <h2>Requester Information</h2>
              <div class="mb-4">
                <label class="form-label form-label-highlighted">Permitted Scheduling Frequencies <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                <div class="d-flex gap-3 flex-column flex-lg-row">
                  <div class="form-check form-check-highlighted mb-0">
                    <input class="form-check-input" id="oneTimeRequest" name="PermittedSchedulingFrequencies" type="radio" tabindex="" checked />
                    <label class="form-check-label" for="oneTimeRequest">One-Time Request</label>
                  </div>
                  <div class="form-check form-check-highlighted mb-0">
                    <input class="form-check-input" id="Daily" name="PermittedSchedulingFrequencies" type="radio" tabindex="" />
                    <label class="form-check-label" for="Daily">Daily</label>
                  </div>
                  <div class="form-check form-check-highlighted mb-0">
                    <input class="form-check-input" id="Weekly" name="PermittedSchedulingFrequencies" type="radio" tabindex="" />
                    <label class="form-check-label" for="Weekly">Weekly</label>
                  </div>
                  <div class="form-check form-check-highlighted mb-0">
                    <input class="form-check-input" id="WeekDaily" name="PermittedSchedulingFrequencies" type="radio" tabindex="" />
                    <label class="form-check-label" for="WeekDaily">WeekDaily</label>
                  </div>
                  <div class="form-check form-check-highlighted mb-0">
                    <input class="form-check-input" id="Monthly" name="PermittedSchedulingFrequencies" type="radio" tabindex="" />
                    <label class="form-check-label" for="Monthly">Monthly</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 mb-4 pe-lg-5">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="form-label">Company <span class="mandatory">*</span></label>
                    <a href="#" class="fw-bold">
                      <small>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                        </svg>
                        Add New Company
                      </small>
                    </a>
                  </div>
                  <select class="form-select">
                    <option>Select Company</option>
                  </select>
                </div>
                <div class="col-lg-6 mb-4 ps-lg-5">
                  <label class="form-label">Department <span class="mandatory">*</span></label>
                  <div>
                    <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup" data-bs-toggle="modal" data-bs-target="#departmentModal">
                        <x-icon name="right-color-arrow"/>
                        Select Department
                    </button>
                </div>
                </div>
                <div class="col-lg-6 mb-4 pe-lg-5">
                  <label class="form-label">Industry <span class="mandatory">*</span></label>
                  <div>
                    <button type="button" class="btn btn-has-icon px-0 btn-multiselect-popup" data-bs-toggle="modal" data-bs-target="#industryModal">
                        <x-icon name="right-color-arrow"/>
                        Select Industry
                    </button>
                </div>
                </div>
                <div class="col-lg-6 mb-4 ps-lg-5">
                  <div class="d-flex justify-content-between align-items-center">
                    <label class="form-label">Requester <span class="mandatory">*</span></label>
                    <a href="#" class="fw-bold" data-bs-toggle="modal" data-bs-target="#addNewCustomer">
                      <small>
                      <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                        </svg>
                        Add New Requester
                      </small>
                    </a>
                  </div>
                  <select class="form-select mb-2">
                    <option>Select Requester</option>
                  </select>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="HideRequesterInfofromProviders" name="HideRequesterInfofromProviders" type="checkbox" tabindex="" />
                    <label class="form-check-label" for="HideRequesterInfofromProviders"><small>Hide Requester's Info from Providers</small></label>
                  </div>
                </div>
                <div class="col-lg-6 mb-4 pe-lg-5">
                  <label class="form-label">Point of Contact <span class="mandatory">*</span></label>
                  <input type="" class="form-control" placeholder="Enter Name">
                </div>
                <div class="col-lg-6 mb-4 ps-lg-5">
                  <label class="form-label">Phone Number <span class="mandatory">*</span></label>
                  <input type="" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="col-lg-12" x-data="{ open: true }">
                  <div class="d-md-flex align-items-center mb-4 gap-3 gap-md-0">
                    <div class="form-check form-switch form-switch-column mb-lg-0">
                      <input class="form-check-input" type="checkbox" role="switch" id="" @click="open = !open" x-text="open==true  ? 'hide' : 'show'" checked>
                    </div>
                    <h3 class="mb-lg-0">Add Supervisor & Billing Manager</h3>
                  </div>
                  <div class="row switch-toggle-content" x-show="open">
                    <div class="col-lg-6 mb-4 pe-lg-5">
                      <label class="form-label">Supervisor <span class="mandatory">*</span></label>
                      <select class="form-select">
                        <option>Select Supervisor</option>
                      </select>
                    </div>
                    <div class="col-lg-6 mb-4 ps-lg-5">
                      <label class="form-label">Billing Manager</label>
                      <select class="form-select">
                        <option>Select Billing Manager</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- Service Information -->
                <div class="col-lg-12 mb-4">
                  <h2>Service Information</h2>
                  <div class="row">
                    <div class="col-lg-6 pe-lg-5 mb-4">
                      <label class="form-label">Booking Title</label>
                      <input type="text" class="form-control" placeholder="Enter Booking Title">
                    </div>
                  </div>

                  <!-- Services Duplicate Block -->
                  <div class="duplicate-block mb-3">
                    <h2>Services 1</h2>
                    <div class="row">
                      <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label">Accommodation <span class="mandatory">*</span></label>
                        <select class="form-select">
                          <option>Select Accommodation</option>
                        </select>
                      </div>
                      <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label">Service <span class="mandatory">*</span> <i class="fa fa-question-circle text-muted" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title=""></i></label>
                        <select class="form-select">
                          <option>Select Service</option>
                        </select>
                      </div>
                      <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label">Service Type <span class="mandatory">*</span></label>
                        <div class="d-grid grid-cols-3">
                          <div class="form-check">
                            <input class="form-check-input" id="inPerson" name="" type="radio" tabindex="" />
                            <label class="form-check-label" for="inPerson">In-Person</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="Virtual" name="" type="radio" tabindex="" />
                            <label class="form-check-label" for="Virtual"> Virtual</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="Phone" name="" type="radio" tabindex="" />
                            <label class="form-check-label" for="Phone"> Phone</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="Teleconference" name="" type="radio" tabindex="" />
                            <label class="form-check-label" for="Teleconference"> Teleconference</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 mb-4 ps-lg-5">
                        <label class="form-label">Specializations</label>
                        <div class="">
                          <div class="form-check">
                            <input class="form-check-input" id="BlogWriting" name="Specializations" type="checkbox" tabindex="" />
                            <label class="form-check-label" for="BlogWriting">Blog Writing</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" id="DeafBlindTactileInterpreting" name="Specializations" type="checkbox" tabindex="" />
                            <label class="form-check-label" for="DeafBlindTactileInterpreting">Deaf-Blind Tactile Interpreting</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 mb-4 pe-lg-5">
                        <label class="form-label">Number of Providers <span class="mandatory">*</span></label>
                        <input type="" class="form-control" placeholder="Enter Number of Providers">
                      </div>
                      <div class="col-lg-6 mb-4 ps-lg-5">
                        <div class="row">
                          <div class="col-lg-5 col-md-6 mb-4">
                            <div class="d-flex gap-3">
                              <label class="form-label-sm">
                                  Broadcast
                              </label>
                              <div class="form-check form-switch form-switch-column">
                                <input class="form-check-input" type="checkbox" role="switch" id="AutoNotifyBroadcast" checked>
                                <label class="form-check-label" for="AutoNotifyBroadcast">Auto-notify</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-7 col-md-6 mb-4">
                            <div class="d-flex gap-3">
                              <label class="form-label-sm">
                                  Assign
                              </label>
                              <div class="form-check form-switch form-switch-column">
                                <input class="form-check-input" type="checkbox" role="switch" id="AutoNotifyAssign" checked>
                                <label class="form-check-label" for="AutoNotifyAssign">Manual-assign</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 mb-4" x-data="{ open: true }">
                        <div class="d-md-flex align-items-center mb-4 gap-3 gap-md-0">
                          <div class="form-check form-switch form-switch-column mb-lg-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="" @click="open = !open" x-text="open==true  ? 'hide' : 'show'" checked>
                          </div>
                          <h3 class="mb-lg-0">Add Consumers & Participants</h3>
                        </div>
                        <div class="row mb-4 switch-toggle-content" x-show="open">
                          <div class="col-lg-6 mb-4 pe-lg-5">
                            <div class="d-flex justify-content-between align-items-center" >
                              <label class="form-label">Service Consumer(s)</label>
                              <a href="#" class="fw-bold"  data-bs-toggle="modal" data-bs-target="#addNewCustomer">
                                <small>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                  </svg>
                                  Add New Service Consumer
                                </small>
                              </a>
                            </div>
                            <div class="js-wrapper-manual-entry">
                              <select class="form-select mb-2 js-form-select-manual-entry" aria-label="Select Service Consumer(s)">
                                <option>Select Service Consumer(s)</option>
                              </select>
                              <input type="" name="" class="form-control mb-2 hidden js-form-input-manual-entry" placeholder="Enter Service Consumer(s)">
                              <div class="form-check">
                                <input class="form-check-input js-form-check-input-manual-entry" id="ManualEntryServiceConsumer" name="" type="checkbox" tabindex="">
                                <label class="form-check-label" for="ManualEntryServiceConsumer"><small>Manual Entry</small></label>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 mb-4 ps-lg-5">
                            <div class="d-flex justify-content-between align-items-center">
                              <label class="form-label">Participant(s)</label>
                              <a href="#" class="fw-bold" data-bs-toggle="modal" data-bs-target="#addNewCustomer">
                                <small>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"/>
                                  </svg>
                                  Add New Participant
                                </small>
                              </a>
                            </div>
                            <div class="js-wrapper-manual-entry">
                              <select class="form-select mb-2 js-form-select-manual-entry" aria-label="Select Participant(s)">
                                <option>Select Participant(s)</option>
                              </select>
                              <input type="" name="" class="form-control mb-2 hidden js-form-input-manual-entry" placeholder="Enter Participant(s)">
                              <div class="form-check">
                                <input class="form-check-input js-form-check-input-manual-entry" id="ManualEntryParticipant" name="" type="checkbox" tabindex="">
                                <label class="form-check-label" for="ManualEntryParticipant"><small>Manual Entry</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-md-4">
                          <div class="col-lg-6 align-self-center">
                            <h2 class="mb-lg-0">Meeting Information</h2>
                          </div>
                          <div class="col-lg-6">
                            <div class="row">
                              <div class="col-md-6 mb-4 mb-md-0">
                                <a href="#" class="btn btn-primary rounded w-100 btn-has-icon">
                                  <svg width="22" height="18" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.4062L8.66667 17.4062L22 2.40625" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                  </svg>
                                  Add Manually
                                </a>
                              </div>
                              <div class="col-md-6 mb-4 mb-md-0">
                                <a href="#" class="btn btn-primary rounded w-100" data-bs-toggle="modal" data-bs-target="#RequestfromUserModal">
                                  Request from User
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="border-dashed rounded p-3 mb-3">
                          <div class="d-flex justify-content-between">
                            <div class="align-items-center gap-4"><h2>Meeting Link 1</h2></div>
                            <div class="align-items-center gap-4">
                              <a href="#" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use>
                                </svg>
                              </a>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-4 mb-3">
                              <label class="form-label">Meeting Name</label>
                              <input type="" class="form-control" placeholder="Enter Meeting Name">
                            </div>
                            <div class="col-lg-4 mb-3">
                              <label class="form-label">Phone Number</label>
                              <input type="" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <div class="col-lg-4 mb-3">
                              <label class="form-label">Access Code</label>
                              <input type="" class="form-control" placeholder="Enter Access Code">
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-md-6 col-lg-3">
                            <a href="#" class="btn btn-primary rounded btn-has-icon w-100">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                              </svg>
                              Add Link
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Services Duplicate Block -->
                  <div class="row justify-content-end">
                    <div class="col-md-6 col-lg-2">
                      <a href="#" class="btn btn-primary rounded btn-has-icon w-100">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                        </svg>
                        Add Service
                      </a>
                    </div>
                  </div>
                </div>
                <!-- /Service Information -->
                <!-- Select Dates & Times -->
                <div class="col-lg-12 mb-4">
                  <h2>Select Dates & Times</h2>
                  <!-- Select Dates & Times Duplicate Block -->
                      <div class="duplicate-block">
                        <h2>Date & Time 1</h2>
                        <div class="d-md-flex flex-md-wrap justify-content-between">
                          <div class="col-lg-3 col-md-6 pe-md-2 pe-lg-0 mb-4">
                            <label class="form-label-sm" for="set_time_zone">Set Time Zone <span class="mandatory">*</span></label>
                            <select class="form-select form-select-md" id="set_time_zone">
                              <option>Set Time Zone</option>
                            </select>
                          </div>
                          <div class="col-lg-auto col-md-6 ps-md-2 ps-lg-0 mb-4">
                            <label class="form-label-sm" for="set_start_date">Start Date <span class="mandatory">*</span></label>
                            <div class="position-relative">
                              <input type="" name="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" id="set_start_date" aria-label="Set Start Date">
                              <svg class="icon-date md" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="d-flex col-lg-auto mb-4">
                            <div class="d-flex flex-column justify-content-between">
                              <label class="form-label-sm" for="set_start_time">Start Time</label>
                              <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                  <div class="hours">12</div>
                                  <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"></path>
                                  </svg>
                                  <div class="mins">59</div>
                                </div>
                                <div class="form-check form-switch form-switch-column mb-0">
                                  <input checked="" class="form-check-input" type="checkbox" role="switch" id="startTimeAMPM">
                                  <label class="form-check-label" for="startTimeAMPM">AM</label>
                                  <label class="form-check-label" for="startTimeAMPM">PM</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-auto mb-4">
                            <label class="form-label-sm" for="set_end_date">End Date<span class="mandatory">*</span></label>
                            <div class="position-relative">
                              <input type="" name="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" id="set_end_date" aria-label="Set End Date">
                              <svg class="icon-date md" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"></path>
                              </svg>
                            </div>
                          </div>
                          <div class="d-flex col-lg-auto mb-4">
                            <div class="d-flex flex-column justify-content-between">
                              <label class="form-label-sm" for="set_start_time">End Time</label>
                              <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                  <div class="hours">12</div>
                                  <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"></path>
                                  </svg>
                                  <div class="mins">59</div>
                                </div>
                                <div class="form-check form-switch form-switch-column mb-0">
                                  <input checked="" class="form-check-input" type="checkbox" role="switch" id="endTimeAMPM">
                                  <label class="form-check-label" for="endTimeAMPM">AM</label>
                                  <label class="form-check-label" for="endTimeAMPM">PM</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="d-md-flex align-items-center gap-5">
                          <label class="form-label mb-lg-0">Total Billable Service Duration</label>
                          <div>
                            <label class="form-label-sm" for="total_billable_service_duration_days">Days</label>
                            <input type="" class="form-control form-control-md text-center" aria-label="Days" placeholder="0" id="total_billable_service_duration_days">
                          </div>
                          <div>
                            <label class="form-label-sm">Hours</label>
                            <input type="" class="form-control form-control-md form-control-md text-center" aria-label="Hours" placeholder="00" id="total_billable_service_duration_hours">
                          </div>
                          <div>
                            <label class="form-label-sm">Minutes</label>
                            <input type="" class="form-control form-control-md text-center" aria-label="Minutes" placeholder="00" id="total_billable_service_duration_minutes">
                          </div>
                        </div>
                      </div>
                      <!-- /Select Dates & Times Duplicate Block -->
                      <div class="d-flex justify-content-end mt-3">
                        <button class="btn btn-primary rounded">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                          </svg>   
                          <span class="mx-2">Add Date</span>
                        </button>
                      </div>
                </div>
                <!-- /Select Dates & Times -->
                <!-- Physical Address -->
                <div class="row mb-4">
                  <div class="col-lg-6 mb-4 align-self-center">
                    <h2 class="mb-lg-0">Physical Address</h2>
                  </div>
                  <div class="col-lg-6">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <a href="#" class="btn btn-primary rounded w-100 btn-has-icon">
                          <svg width="22" height="18" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10.4062L8.66667 17.4062L22 2.40625" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                          Add Manually
                        </a>
                      </div>
                      <div class="col-md-6 mb-4">
                        <a href="#" class="btn btn-primary rounded w-100" data-bs-toggle="modal" data-bs-target="#RequestfromUserModal">
                          Request from User
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <p class="mt-3">List of most recently used address from the requester</p>
                    </div>
                    <!-- Button trigger modal | Add Address POPUP-->
                    <div class="col-lg-12 text-lg-end">
                      <div class="mb-4">
                        <button type="button" class="btn btn-primary btn-sm rounded gap-2" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"></path>
                            </svg>
                            <span>Add New Address</span>
                        </button>
                      </div>
                    </div>
                    <!-- #Address Tables-->
                    <div class="col-lg-12 mb-4 border">
                      <table class="table table-hover">
                        <thead>
                          <tr><th>#</th>
                          <th>Address</th>
                          <th></th>
                        </tr></thead>
                        <tbody>
                          <tr class="odd js-selected-row">
                            <td>
                              1
                            </td>
                            <td>
                              <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                            </td>
                            <!-- for active class row integrated with JS  -->
                            <td class="align-middle">
                              <svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                            </td>
                          </tr>
                          <tr class="even js-selected-row">
                            <td>
                              2
                            </td>
                            <td>
                              <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                            </td>
                            <!-- for active class row integrated with JS  -->
                          <td class="align-middle">
                                <svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </td>
                          </tr>
                          <tr class="odd js-selected-row">
                            <td>
                              3
                            </td>
                            <td>
                              <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                            </td>
                            <!-- for active class row integrated with JS  -->
                            <td class="align-middle">
                              <svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- #Address Tables-->
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-4">
                      <div class="d-lg-flex justify-content-between align-items-center">
                        <h3 class="mb-lg-0">Start Service Address</h3>
                        <a href="#" class="btn btn-primary btn-sm rounded js-show-start-service-hidden-content">End Address</a>
                      </div>
                    </div>
                    <div class="js-start-service-hidden-content">
                      <!-- Button trigger modal | Add Address POPUP-->
                      <div class="col-lg-12 text-lg-end">
                        <div class="mb-4">
                          <button type="button" class="btn btn-primary btn-sm rounded gap-2" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"></path>
                              </svg>
                              <span>Add New Address</span>
                          </button>
                        </div>
                      </div>
                      <!-- #Address Tables-->
                      <div class="col-lg-12 mb-4 border">
                        <table class="table table-hover">
                          <thead>
                            <tr><th>#</th>
                            <th>Address</th>
                            <th></th>
                          </tr></thead>
                          <tbody>
                            <tr class="odd js-selected-row">
                              <td>
                                1
                              </td>
                              <td>
                                <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                              </td>
                              <!-- for active class row integrated with JS  -->
                              <td class="align-middle">
                                <svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </td>
                            </tr>
                            <tr class="even js-selected-row">
                              <td>
                                2
                              </td>
                              <td>
                                <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                              </td>
                              <!-- for active class row integrated with JS  -->
                            <td class="align-middle">
                                  <svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                  </svg>
                              </td>
                            </tr>
                            <tr class="odd js-selected-row">
                              <td>
                                3
                              </td>
                              <td>
                                <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                              </td>
                              <!-- for active class row integrated with JS  -->
                              <td class="align-middle">
                                <svg class="d-none js-tick" width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- #Address Tables-->
                    </div>
                  </div>
                </div>
                <!-- /Physical Address -->
                <div class="justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                  <button type="button" class="btn btn-outline-dark rounded">Cancel</button>
                  <button type="button" class="btn btn-primary rounded">Save as Draft</button>
                  <button type="submit" class="btn btn-primary rounded" x-on:click="$wire.switch('request-details')">Proceed to Request Details</button>
                </div>
              </div>
            </div>
            <!-- END: requester-info -->
            <div class="tab-pane fade {{ $component == 'request-details' ? 'active show' : '' }}" id="request-details" role="tabpanel" aria-labelledby="request-details-tab" tabindex="0">
              <form class="form">
                <div class="col-md-12 mb-md-2">
                  <h2>Industry Form</h2>
                  <!-- Industry Form Begin -->
                  <div class="row mb-4">
                    <div class="col-md-12 col-12">
                      <h3>Computer Science</h3>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="mb-3">
                        <label for="formFile"
                          class="form-label"><b>Req_info:</b></label>
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
                        <label class="form-label" for="first-name-column">First
                        Name</label>
                        <input type="text" id="first-name-column"
                          class="form-control" placeholder="First Name"
                          name="fname-column" />
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="mb-4">
                        <label class="form-label" for="last-name-column">Last
                        Name</label>
                        <input type="text" id="last-name-column"
                          class="form-control" placeholder="Last Name"
                          name="lname-column" />
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="mb-4">
                        <label class="form-label" for="phone-number-column">Phone
                        Number</label>
                        <input type="text" id="phone-number-column"
                          class="form-control" placeholder="Enter Phone Number"
                          name="pnumber-column" />
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="mb-4">
                        <label class="form-label"
                          for="severity-column">Severity</label>
                        <select class="form-select" id="severity-column">
                          <option selected>Select Severity</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                      <button type="button"
                        class="btn btn-outline-dark rounded" x-on:click="$wire.switch('requester-info')">Back</button>
                        <button type="submit" class="btn btn-primary rounded">Save as Draft</button>
                        <button type="submit"
                        class="btn btn-primary rounded">Request from User</button>
                      <button type="button"
                        class="btn btn-primary rounded" x-on:click="$wire.switch('payment-info')">Proceed to
                      Payment</button>
                    </div>
                  </div>
                  <!-- Service Form End -->
                </div>
              </form>
            </div>
            <div class="tab-pane fade {{ $component == 'payment-info' ? 'active show' : '' }}" id="payment-info" role="tabpanel" aria-labelledby="payment-info-tab" tabindex="0">
              <h2>Payment Summary</h2>
              <div class="row">
                <div class="col-lg-6 mb-4 pe-lg-5 pt-5">
                  <div class="col-lg-10 mb-5">
                    <div class="d-flex flex-column gap-5">
                      <div class="row">
                        <label class="form-label mb-2 col-lg-6">Service 1 Total Rate:</label>
                        <label class="form-label-sm mb-0 col-lg-3 col-6 align-self-center">$00.00</label>
                        <div class="col-lg-3 col-6">
                          <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                        </div>
                      </div>
                      <div class="row">
                        <label class="form-label mb-2 col-lg-6">Service 2 Total Rate:</label>
                        <label class="form-label-sm mb-0 col-lg-3 col-md-6 align-self-center">$00.00</label>
                        <div class="col-lg-3 col-md-6">
                          <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                        </div>
                      </div>
                      <div class="row">
                        <label class="form-label mb-2 col-lg-6">Additional Charges:</label>
                        <label class="form-label-sm mb-0 col-lg-3 col-md-6 align-self-center">$00.00</label>
                        <div class="col-lg-3 col-md-6">
                          <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-10 mb-5">
                    <h2>Discounts</h2>
                    <div class="d-flex gap-3 flex-column flex-md-row mb-4">
                      <div class="form-check mb-0">
                        <input class="form-check-input" id="Coupon" name="discounts" type="radio" tabindex="" checked="">
                        <label class="form-check-label" for="Coupon">Coupon</label>
                      </div>
                      <div class="form-check mb-0">
                        <input class="form-check-input" id="$Amount" name="discounts" type="radio" tabindex="">
                        <label class="form-check-label" for="$Amount">$ Amount</label>
                      </div>
                      <div class="form-check mb-0">
                        <input class="form-check-input" id="%Amount" name="discounts" type="radio" tabindex="">
                        <label class="form-check-label" for="%Amount">% Amount</label>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <label class="form-label mb-md-0 col-lg-5 col-md-3 align-self-center">Coupon Code</label>
                      <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                        <input type="" name="" class="form-control form-control-md" placeholder="Enter Code">
                      </div>
                      <div class="col-md-3 align-self-center">
                        <a href="#" class="btn btn-primary btn-sm rounded w-100">Apply</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-10 mb-5">
                    <h2>Additional Customer Charge</h2>
                    <div class="input-group">
                      <input type="" name="" class="form-control form-control-md" placeholder="Enter Charge Label">
                      <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                    </div>
                    <div class="text-lg-end">
                      <a href="#" class="fw-bold">
                        <small>
                          Add Additional  Charges
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"></path>
                          </svg>
                        </small>
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-10 mb-5">
                    <h2>Additional Provider Payment</h2>
                    <div class="input-group mb-2">
                      <input type="" name="" class="form-control form-control-md" placeholder="Enter Charge Label">
                      <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-1 gap-md-0">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="ChargetoCustomer" name="" type="checkbox" tabindex="">
                        <label class="form-check-label" for="ChargetoCustomer"><small>Charge to Customer</small></label>
                      </div>
                      <a href="#" class="fw-bold">
                        <small>
                          Add Additional  Charges
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58182 0 0 3.58182 0 8C0 12.4182 3.58182 16 8 16C12.4182 16 16 12.4182 16 8C16 3.58182 12.4182 0 8 0ZM8.72727 10.9091C8.72727 11.102 8.65065 11.287 8.51426 11.4234C8.37787 11.5597 8.19289 11.6364 8 11.6364C7.80712 11.6364 7.62213 11.5597 7.48574 11.4234C7.34935 11.287 7.27273 11.102 7.27273 10.9091V8.72727H5.09091C4.89802 8.72727 4.71304 8.65065 4.57665 8.51426C4.44026 8.37787 4.36364 8.19289 4.36364 8C4.36364 7.80712 4.44026 7.62213 4.57665 7.48574C4.71304 7.34935 4.89802 7.27273 5.09091 7.27273H7.27273V5.09091C7.27273 4.89802 7.34935 4.71304 7.48574 4.57665C7.62213 4.44026 7.80712 4.36364 8 4.36364C8.19289 4.36364 8.37787 4.44026 8.51426 4.57665C8.65065 4.71304 8.72727 4.89802 8.72727 5.09091V7.27273H10.9091C11.102 7.27273 11.287 7.34935 11.4234 7.48574C11.5597 7.62213 11.6364 7.80712 11.6364 8C11.6364 8.19289 11.5597 8.37787 11.4234 8.51426C11.287 8.65065 11.102 8.72727 10.9091 8.72727H8.72727V10.9091Z" fill="#0A1E46"></path>
                          </svg>
                        </small>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 ps-lg-5 d-md-flex flex-md-wrap" style="
                  ">
                  <!-- Booking Schedule -->
                  <div class="col-md-12 border p-3 tabular-nums mb-lg-5 mb-4">
                    <div class="text-center">
                      <h3 class="text-primary">Booking Schedule</h3>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3 mb-lg-0">
                        <div class="title">Service 1 Bookings</div>
                        <div class="d-flex flex-column gap-3">
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 1:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 2:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 3:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 4:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 5:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="title">Service 2 Bookings</div>
                        <div class="d-flex flex-column gap-3">
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 1:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 2:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 3:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 4:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 5:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="label">Booking 5:</div>
                            </div>
                            <div class="col-6">
                              <div class="date">01/12/2022</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Booking Schedule -->
                  <!-- Billing Notes -->
                  <div class="mb-lg-5 mb-4 col-lg-12 col-md-6 pe-md-3 pe-lg-0">
                    <label class="form-label">
                    Billing Notes
                    </label>
                    <textarea class="form-control" rows="5" cols="5"></textarea>
                  </div>
                  <!-- /Billing Notes -->
                  <!-- Payment Notes -->
                  <div class="mb-lg-5 mb-4 col-lg-12 col-md-6 ps-md-3 ps-lg-0">
                    <label class="form-label">
                    Payment Notes
                    </label>
                    <textarea class="form-control" rows="5" cols="5"></textarea>
                  </div>
                  <!-- /Payment Notes -->
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="d-flex gap-3 p-2">
                    <label class="form-label mb-0">Discount:</label> <div class="align-self-center text-black">$00.00</div>
                  </div>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-lg-12">
                  <div class="d-flex gap-3 bg-gray p-2">
                    <label class="form-label mb-0">Total Price:</label> <div class="align-self-center text-black">$00.00</div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="row mb-4">
                    <label class="form-label mb-lg-0 col-lg-6 align-self-center">Enter Override Amount:</label>
                    <div class="col-md-3 mb-3 mb-md-0">
                      <input type="" name="" class="form-control form-control-md text-center" placeholder="$00.00">
                    </div>
                    <div class="col-md-3 align-self-center">
                      <a href="#" class="btn btn-primary btn-sm rounded w-100">Apply</a>
                    </div>
                  </div>
                  <!-- Payment Preference -->
                  <div class="row mb-4">
                    <h2>Payment Preference:</h2>
                    <div class="mb-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="PayLater" name="PaymentPreference" type="radio" tabindex="" />
                        <label class="form-check-label" for="PayLater"> Pay Later</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="PayNow" name="PaymentPreference" type="radio" tabindex="" />
                        <label class="form-check-label" for="PayNow"> Pay Now</label>
                      </div>
                    </div>
                    <div class="input-group mb-3">
                      <input type="" name="" class="form-control form-control-md" placeholder="Enter Card number">
                      <input type="" name="" class="form-control form-control-md text-center" placeholder="MM/YY">
                      <input type="" name="" class="form-control form-control-md text-center" placeholder="CVC">
                    </div>
                    <div class="text-lg-end">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" id="SaveforFuturePayments" name="PaymentPreference" type="checkbox" tabindex="" />
                        <label class="form-check-label" for="SaveforFuturePayments"> Save for Future Payments</label>
                      </div>
                    </div>
                  </div>
                  <!-- /Payment Preference -->
                </div>
              </div>
              <div class="row">
                <div class="col-lg-11">
                  <div class="row mb-4">
                    <div class="col-lg-6 mb-4">
                      <!-- Provider Notes -->
                      <div class="my-lg-5">
                        <label class="form-label">
                          Provider Notes
                        </label>
                        <textarea class="form-control" rows="4" cols="4"></textarea>
                      </div>
                      <!-- /Provider Notes -->
                    </div>
                    <div class="col-lg-6 mb-4">
                      <!-- Customer Notes -->
                      <div class="my-lg-5">
                        <label class="form-label">
                          Customer Notes
                        </label>
                        <textarea class="form-control" rows="4" cols="4"></textarea>
                      </div>
                      <!-- /Customer Notes -->
                    </div>
                    <div class="col-lg-6 mb-4">
                      <!-- Private Notes -->
                      <div class="my-lg-5">
                        <label class="form-label">
                          Private Notes
                        </label>
                        <textarea class="form-control" rows="4" cols="4"></textarea>
                      </div>
                      <!-- /Private Notes -->
                    </div>
                    <div class="col-lg-6 mb-4">
                      <!-- Tags -->
                      <div class="my-lg-5">
                        <label class="form-label" for="tags">
                          Tags
                        </label>
                        <select data-placeholder="" multiple class="form-select chosen-select" tabindex="" id="tags">
                          <option value=""></option>
                          <option selected>Option 1</option>
                          <option selected>Option 2</option>
                        </select>
                        <div class="d-lg-flex flex-wrap gap-3 mb-3">
                          <div class="tag">@admin_company</div>
                          <div class="tag">@booking_start_at</div>
                          <div class="tag">@consumer</div>
                          <div class="tag">@booking_end_at</div>
                          <div class="tag">@booking_duration</div>
                        </div>
                        <div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" id="Requester" name="" type="checkbox" tabindex="" />
                            <label class="form-check-label" for="Requester">Requester</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" id="ServiceConsumers" name="" type="checkbox" tabindex="" />
                            <label class="form-check-label" for="ServiceConsumers">Service Consumer(s)</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" id="Participants" name="" type="checkbox" tabindex="" />
                            <label class="form-check-label" for="Participants">Participant(s)</label>
                          </div>
                        </div>
                      </div>
                      <!-- /Tags -->
                    </div>
                  </div>
                  <!-- Add Document -->
                  <div class="row">
                    <div class="col-lg-3 col-md-5 mb-4">
                      <a href="#" class="btn btn-primary rounded btn-has-icon w-100" data-bs-toggle="modal" data-bs-target="#addDocument">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"></path>
                        </svg>
                        Add Document
                      </a>
                    </div>
                    <div class="row">
                      <div class="col-6 col-md-3 col-lg-2">
                        <img src="/tenant/images/img-placeholder-document.jpg" alt="img-placeholder-document" class="w-100">
                        <p class="font-family-secondary"><small>File Name</small></p>
                      </div>
                      <div class="col-6 col-md-3 col-lg-2">
                        <img src="/tenant/images/img-placeholder-document.jpg" alt="img-placeholder-document" class="w-100">
                        <p class="font-family-secondary"><small>File Name</small></p>
                      </div>
                    </div>
                  </div>
                  <!-- /Add Document -->
                </div>
              </div>
              <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                <button type="button"
                  class="btn btn-outline-dark rounded" x-on:click="$wire.switch('request-details')">Back</button>
                  <button type="submit" class="btn btn-primary rounded">Save as Draft</button>
                  <button type="button"
                  class="btn btn-primary rounded" x-on:click="$wire.switch('booking-summary')">Booking Summary</button>
              </div>
            </div>
            <div class="tab-pane fade {{ $component == 'booking-summary' ? 'active show' : '' }}" id="booking-summary" role="tabpanel" aria-labelledby="booking-summary-tab" tabindex="0">
              <!-- Scheduling Details -->
              <div class="mb-5">
                <h2>Scheduling Details</h2>
                <div class="d-flex flex-column gap-3 mt-5">
                  <div class="row">
                    <div class="col-lg-3 col-md-4">
                      <label class="col-form-label">Date & Time:</label>
                    </div>
                    <div class="col-lg-9 col-md-8 align-self-center">
                      <div class="font-family-tertiary">(10/25/2022 13:35 - 10/25/2022 13:35)</div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4">
                      <label class="col-form-label">Frequency:</label>
                    </div>
                    <div class="col-lg-9 col-md-8 align-self-center">
                      <div class="font-family-tertiary">One-Time Request</div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /Scheduling Details -->
              <!-- Service Request -->
              <div class="mb-5">
                <h2>Service Request (10/25/2022 13:35 - 10/25/2022 13:35)</h2>
                <!-- Services 1 -->
                <div class="my-5">
                  <h2>Services 1</h2>
                  <div class="d-flex flex-column gap-3">
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Accommodation:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">Sign Language Interpreting Services</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Service:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">English to Arabic Sign Language</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Specialization:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">Medical, Conference</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Service Type:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">In person</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Number of Providers:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">13</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Total Billable Time:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">1 hour(s) 0 minute(s)</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Total Cost:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$00.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Services 1 -->
                <!-- Services 2 -->
                <div class="my-5">
                  <h2>Services 2</h2>
                  <div class="d-flex flex-column gap-3">
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Accommodation:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">Sign Language Interpreting Services</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Service:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">English to Arabic Sign Language</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Specialization:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">Medical, Conference</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Service Type:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">In person</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Number of Providers:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">13</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Service Consumer:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">John Wick</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Participant(s):</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">Scott Hall</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Total Billable Time:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">1 hour(s) 0 minute(s)</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Total Cost:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$00.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Services 2 -->
                <!-- Service Billing -->
                <div class="my-5">
                  <h2>Service Billing</h2>
                  <div class="d-flex flex-column gap-3">
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Total Service Rate:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$6,500.00</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Differentials:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$70.00</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Specializations:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$70.00</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label">Total Service Charges:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$26.00</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4">
                        <label class="col-form-label fw-semibold">Service Total:</label>
                      </div>
                      <div class="col-lg-9 col-md-8 align-self-center">
                        <div class="font-family-tertiary fw-medium">$6,596.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Service Billing -->
                <!-- Booking Total -->
                <div class="my-5">
                  <h2>Booking Total</h2>
                  <div class="d-flex flex-column gap-3">
                    <div class="row">
                      <div class="col-lg-4 col-md-4">
                        <label class="col-form-label">Total Service Rate:</label>
                      </div>
                      <div class="col-lg-8 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$6,500.00</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-md-4">
                        <label class="col-form-label">Total Differentials:</label>
                      </div>
                      <div class="col-lg-8 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$70.00</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-md-4">
                        <label class="col-form-label">Total Service Charges:</label>
                      </div>
                      <div class="col-lg-8 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$27.00</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-md-4">
                        <label class="col-form-label">Additional Customer Charges:</label>
                      </div>
                      <div class="col-lg-8 col-md-8 align-self-center">
                        <div class="font-family-tertiary">$26.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Booking Total -->
                <!-- Gross Total - Discount - Net Total -->
                <div class="my-5">
                  <div class="d-flex flex-column gap-3">
                    <div class="row">
                      <div class="col-lg-2 col-md-3">
                        <div class="fw-semibold text-primary fs-5 font-family-tertiary">Gross Total:</div>
                      </div>
                      <div class="col-lg-9 col-md-9 align-self-center">
                        <div class="fw-semibold text-primary fs-5 font-family-tertiary">$6,500.00</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-2 col-md-3">
                        <div class="fw-semibold text-primary fs-5 font-family-tertiary">Discount:</div>
                      </div>
                      <div class="col-lg-9 col-md-9 align-self-center">
                        <div class="fw-semibold text-primary fs-5 font-family-tertiary">$00.00</div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-2 col-md-3">
                        <div class="fw-semibold text-primary fs-5 font-family-tertiary">Net Total:</div>
                      </div>
                      <div class="col-lg-9 col-md-9 align-self-center">
                        <div class="fw-semibold text-primary fs-5 font-family-tertiary">$6,596.00</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /Gross Total - Discount - Net Total -->
                <!-- Assign Admin-Staff & admin-Staff Team -->
                <div class="my-5">
                  <div class="form-check">
                    <input class="form-check-input" id="AssignAdminStaff&adminStaffTeam" name="" type="checkbox" tabindex="" />
                    <label class="form-check-label" for="AssignAdminStaff&adminStaffTeam">Assign Admin-Staff & admin-Staff Team</label>
                  </div>
                  <div class="d-flex flex-column flex-md-row gap-2 mb-4">
                    <a href="#" class="btn btn-outline-dark btn-sm rounded" data-bs-toggle="modal" data-bs-target="#assignAdminStaffModal">
                      Assign Admin-Staff
                    </a>
                    <!-- Programming note: only show on admin-end -->
                    <a href="#" class="btn btn-primary btn-sm rounded" data-bs-toggle="modal" data-bs-target="#assignAdminStaffTeamModal">
                      Assign Admin-Staff Team
                    </a>
                    <!-- /Programming note: only show on admin-end -->
                  </div>
                  <!-- Programming note: only show on admin-end -->
                  <div class="col-lg-6">
                    <div class="d-flex justify-content-end mb-1">
                      <a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                        </svg>
                      </a>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-hover border">
                        <thead>
                          <tr>
                            <th class="align-middle">
                              <div class="form-check">
                                <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                              </div>
                            </th>
                            <th class="align-middle">
                              ADMIN-STAFF TEAM
                            </th>
                            <th class="align-middle">
                              PERMISSION
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="align-middle">
                              <div class="form-check">
                                <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                              </div>
                            </td>
                            <td class="align-middle">
                              <div class="d-flex gap-2 align-items-center">
                                <div>
                                  <img width="50" height="50" src="/tenant/images/portrait/small/image.png" class="rounded-circle" alt="Image">
                                </div>
                                <div class="pt-2">
                                  <div class="font-family-secondary leading-none">Fast Talkers</div>
                                  <a href="#" class="font-family-secondary"><small>fasttalker@gmail.com</small></a>
                                </div>
                              </div>
                            </td>
                            <td class="align-middle">
                              <div class="form-check form-switch">
                                  <label class="form-check-label" for="Visible">Visible</label>
                                  <input class="form-check-input" type="checkbox" role="switch" id="Visible">
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="align-middle">
                              <div class="form-check">
                                <input class="form-check-input" id="" name="" type="checkbox" tabindex="" />
                              </div>
                            </td>
                            <td class="align-middle">
                              <div class="d-flex gap-2 align-items-center">
                                <div>
                                  <img width="50" height="50" src="/tenant/images/portrait/small/image.png" class="rounded-circle" alt="Image">
                                </div>
                                <div class="pt-2">
                                  <div class="font-family-secondary leading-none">Fast Talkers</div>
                                  <a href="#" class="font-family-secondary"><small>fasttalker@gmail.com</small></a>
                                </div>
                              </div>
                            </td>
                            <td class="align-middle">
                              <div class="form-check form-switch">
                                  <label class="form-check-label" for="Manage">Manage</label>
                                  <input checked class="form-check-input" type="checkbox" role="switch" id="Manage">
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- Programming note: only show on admin-end -->
                </div>
                <!-- /Assign Admin-Staff & admin-Staff Team -->
                <!-- Checkbox Options -->
                <div class="d-grid lg:grid-cols-3 sm:grid-cols-2 gap-2 my-5 col-lg-10">
                  <div class="form-check">
                    <input class="form-check-input" id="ExcludeAllNotifications" name="" type="checkbox" tabindex="">
                    <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeAllNotifications">Exclude All Notifications</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="ExcludeParticipantNotifications" name="" type="checkbox" tabindex="">
                    <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeParticipantNotifications">Exclude Participant Notifications</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="ExcludeRequesterNotifications" name="" type="checkbox" tabindex="">
                    <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeRequesterNotifications">Exclude Requester Notifications</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="ExcludeProviderNotifications" name="" type="checkbox" tabindex="">
                    <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeProviderNotifications">Exclude Provider Notifications</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="ExcludeServiceConsumerNotifications" name="" type="checkbox" tabindex="">
                    <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeServiceConsumerNotifications">Exclude Service Consumer Notifications</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" id="ExcludeAdminNotifications" name="" type="checkbox" tabindex="">
                    <label class="form-check-label form-check-label-sm fw-semibold" for="ExcludeAdminNotifications">Exclude Admin Notifications</label>
                  </div>
                </div>
                <!-- /Checkbox Options -->
                <div class="col-12 justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                  <button type="button" class="btn btn-outline-dark rounded" x-on:click="$wire.switch('payment-info')">Back</button>
                  <button type="" class="btn btn-primary rounded">Save as Draft</button>
                  <button type="" class="btn btn-primary rounded">Request Feedback</button>
                  <div class="dropdown">
                    <button type="" class="btn btn-primary rounded dropdown-toggle w-100 h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Confirm</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Confirm + Invite</a></li>
                      <li><a class="dropdown-item" href="#">Confirm + Assign</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- /Service Request -->
            </div>
          </div>
          <!-- END: Assignment Booking Form -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End: Content-->
</div>
<!-- Modal Request from User -->
<div class="modal fade" id="RequestfromUserModal" tabindex="-1" aria-labelledby="RequestfromUserModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="RequestfromUserModalLabel">Request Service Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-4">
              <label class="form-label">Who would you like to request this information from?</label>
              <div class="col-lg-8">
                <select class="form-select">
                  <option>Select</option>
                </select>
              </div>
            </div>
            <div class="mb-4">
              <div class="mb-2">
                <label class="form-label">When should they first be notified?</label>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="WhenShouldTheyFirstBeNotifiedNow" value="optionNow">
                    <label class="form-check-label" for="WhenShouldTheyFirstBeNotifiedNow">
                      Now
                      <svg width="19" height="21" viewBox="0 0 19 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.6943 0.858394C12.5168 0.781472 12.3153 0.776492 12.1341 0.844549C11.9528 0.912605 11.8067 1.04812 11.7279 1.22129C11.649 1.39446 11.6439 1.59109 11.7137 1.76793C11.7834 1.94477 11.9223 2.08734 12.0998 2.16426C12.1115 2.16997 12.2653 2.23998 12.5142 2.38286C14.0097 3.25097 15.2622 4.46617 16.1603 5.92041C17.6539 8.36212 17.5455 10.9524 17.525 11.441L17.5221 11.5125C17.5219 11.7019 17.5989 11.8837 17.736 12.0178C17.8732 12.1519 18.0593 12.2274 18.2535 12.2276C18.4477 12.2278 18.634 12.1527 18.7714 12.0188C18.9089 11.885 18.9862 11.7034 18.9864 11.5139V11.5196L18.9879 11.4825C19.02 10.7986 18.9882 10.1133 18.8927 9.4351C18.7316 8.2521 18.3436 6.7005 17.4196 5.18889C15.5892 2.19998 12.8642 0.931259 12.6943 0.859822V0.858394ZM12.8261 4.50882C12.7471 4.45174 12.6572 4.41075 12.5617 4.3883C12.4662 4.36585 12.367 4.36239 12.27 4.37813C12.1731 4.39388 12.0804 4.4285 11.9975 4.47993C11.9146 4.53137 11.8431 4.59856 11.7873 4.67752C11.7316 4.75648 11.6927 4.84557 11.673 4.9395C11.6533 5.03343 11.6531 5.13028 11.6726 5.22426C11.6921 5.31824 11.7307 5.40744 11.7862 5.48654C11.8418 5.56563 11.9131 5.63302 11.9958 5.68467C12.6792 6.12922 13.2423 6.72846 13.637 7.43126C14.0317 8.13407 14.2463 8.9196 14.2626 9.72085V9.72656C14.2626 9.91602 14.3397 10.0977 14.477 10.2317C14.6143 10.3657 14.8005 10.4409 14.9947 10.4409C15.1889 10.4409 15.3751 10.3657 15.5124 10.2317C15.6497 10.0977 15.7269 9.91602 15.7269 9.72656V9.63655C15.719 9.34531 15.6896 9.055 15.639 8.76788C15.5164 8.07154 15.2795 7.39903 14.9376 6.77622C14.587 6.14643 14.1312 5.57809 13.589 5.0946C13.1702 4.72027 12.8217 4.50596 12.8261 4.50882ZM0.738335 14.6643C-0.00870693 13.3536 -0.197783 11.8089 0.211892 10.3635C0.621566 8.91798 1.59716 7.68756 2.92822 6.9376C4.25929 6.18764 5.83915 5.97825 7.32702 6.3546C8.81488 6.73094 10.0915 7.66286 10.8815 8.94933L12.0822 10.9781L14.8732 12.9598C14.9717 13.0298 15.0508 13.1227 15.1032 13.2301C15.1556 13.3375 15.1797 13.456 15.1733 13.5748C15.1669 13.6935 15.1302 13.8089 15.0666 13.9103C15.0029 14.0118 14.9143 14.0961 14.8088 14.1556L11.1041 16.243L11.1085 16.2459L7.09924 18.5047V18.499L3.39457 20.585C3.28898 20.6444 3.16986 20.6771 3.04801 20.6803C2.92615 20.6834 2.80543 20.6568 2.69678 20.6029C2.58814 20.5489 2.49501 20.4694 2.42585 20.3715C2.35669 20.2735 2.31369 20.1603 2.30074 20.042L1.93906 16.6945L0.738335 14.6643ZM2.00642 13.9499L3.28475 16.1116C3.33578 16.198 3.3677 16.2939 3.37846 16.393L3.63911 18.799L13.1014 13.4684L11.0953 12.0454C11.013 11.9866 10.9441 11.9117 10.8932 11.8254L9.61344 9.66512C9.01966 8.70284 8.06247 8.00642 6.9478 7.72572C5.83314 7.44501 4.65009 7.60246 3.65318 8.16417C2.65628 8.72588 1.92519 9.64697 1.61722 10.7293C1.30925 11.8116 1.449 12.9671 2.00642 13.9499ZM7.64103 19.8506C8.02306 20.3204 8.56545 20.6406 9.16928 20.7528C9.7731 20.8649 10.3981 20.7616 10.9304 20.4615C11.4626 20.1615 11.8666 19.6849 12.0686 19.1184C12.2706 18.552 12.2573 17.9336 12.031 17.376L7.64103 19.8492V19.8506Z" fill="black"/>
                      </svg>
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input js-form-check-input-notify-later" type="checkbox" id="WhenShouldTheyFirstBeNotifiedLater" value="optionLater">
                    <label class="form-check-label" for="WhenShouldTheyFirstBeNotifiedLater">
                      Later
                      <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.40375 16.9197C11.1845 16.9197 12.8923 16.2123 14.1514 14.9532C15.4106 13.694 16.118 11.9862 16.118 10.2055C16.118 8.42478 15.4106 6.71699 14.1514 5.45783C12.8923 4.19867 11.1845 3.49128 9.40375 3.49128C7.62302 3.49128 5.91524 4.19867 4.65607 5.45783C3.39691 6.71699 2.68952 8.42478 2.68952 10.2055C2.68952 11.9862 3.39691 13.694 4.65607 14.9532C5.91524 16.2123 7.62302 16.9197 9.40375 16.9197ZM9.40375 18.2626C8.34568 18.2626 7.29797 18.0542 6.32044 17.6493C5.34291 17.2444 4.45471 16.6509 3.70654 15.9027C2.95837 15.1545 2.36489 14.2663 1.95999 13.2888C1.55508 12.3113 1.34668 11.2636 1.34668 10.2055C1.34668 9.14744 1.55508 8.09973 1.95999 7.1222C2.36489 6.14467 2.95837 5.25647 3.70654 4.5083C4.45471 3.76013 5.34291 3.16665 6.32044 2.76175C7.29797 2.35684 8.34568 2.14844 9.40375 2.14844C11.5406 2.14844 13.59 2.9973 15.101 4.5083C16.6119 6.01929 17.4608 8.06864 17.4608 10.2055C17.4608 12.3424 16.6119 14.3917 15.101 15.9027C13.59 17.4137 11.5406 18.2626 9.40375 18.2626Z" fill="black"/>
                        <path d="M4.79388 16.7597L5.95678 17.4312L4.94965 19.1755C4.90588 19.2525 4.84733 19.32 4.77735 19.3743C4.70736 19.4285 4.62734 19.4684 4.54189 19.4916C4.45644 19.5148 4.36724 19.5209 4.27943 19.5095C4.19162 19.4981 4.10694 19.4694 4.03025 19.4251C3.95357 19.3808 3.8864 19.3218 3.83261 19.2515C3.77883 19.1812 3.73948 19.1009 3.71685 19.0153C3.69422 18.9297 3.68874 18.8404 3.70074 18.7527C3.71273 18.665 3.74196 18.5805 3.78675 18.5041L4.79388 16.7597ZM14.0138 16.7597L12.8509 17.4312L13.8581 19.1755C13.9018 19.2525 13.9604 19.32 14.0304 19.3743C14.1004 19.4285 14.1804 19.4684 14.2658 19.4916C14.3513 19.5148 14.4405 19.5209 14.5283 19.5095C14.6161 19.4981 14.7008 19.4694 14.7775 19.4251C14.8542 19.3808 14.9213 19.3218 14.9751 19.2515C15.0289 19.1812 15.0682 19.1009 15.0909 19.0153C15.1135 18.9297 15.119 18.8404 15.107 18.7527C15.095 18.665 15.0658 18.5805 15.021 18.5041L14.0138 16.7597ZM9.40386 10.2013H12.761C12.939 10.2013 13.1098 10.272 13.2357 10.3979C13.3617 10.5238 13.4324 10.6946 13.4324 10.8727C13.4324 11.0508 13.3617 11.2215 13.2357 11.3475C13.1098 11.4734 12.939 11.5441 12.761 11.5441H8.73244C8.55437 11.5441 8.38359 11.4734 8.25768 11.3475C8.13176 11.2215 8.06102 11.0508 8.06102 10.8727V6.17274C8.06102 5.99467 8.13176 5.82389 8.25768 5.69797C8.38359 5.57206 8.55437 5.50132 8.73244 5.50132C8.91051 5.50132 9.08129 5.57206 9.20721 5.69797C9.33313 5.82389 9.40386 5.99467 9.40386 6.17274V10.2013ZM0.559891 6.01026C0.131397 5.36456 -0.0605141 4.59049 0.0167198 3.81941C0.0939537 3.04832 0.435575 2.3277 0.983623 1.77981C1.53167 1.23192 2.25239 0.89051 3.0235 0.813498C3.79461 0.736487 4.56861 0.928621 5.21419 1.3573L4.23123 2.34026C3.85536 2.16075 3.43307 2.10218 3.02253 2.17262C2.61199 2.24305 2.23339 2.43904 1.93885 2.73357C1.64431 3.02811 1.44833 3.40672 1.37789 3.81726C1.30745 4.2278 1.36603 4.65008 1.54554 5.02595L0.561234 6.01026H0.559891ZM18.0854 6.01026C18.5133 5.36465 18.7048 4.59095 18.6274 3.82029C18.55 3.04963 18.2086 2.32942 17.6609 1.78175C17.1132 1.23407 16.393 0.892613 15.6224 0.815257C14.8517 0.7379 14.078 0.929402 13.4324 1.3573L14.4154 2.34026C14.7912 2.16075 15.2135 2.10218 15.6241 2.17262C16.0346 2.24305 16.4132 2.43904 16.7077 2.73357C17.0023 3.02811 17.1983 3.40672 17.2687 3.81726C17.3391 4.2278 17.2806 4.65008 17.101 5.02595L18.0854 6.01026Z" fill="black"/>
                        </svg>
                    </label>
                  </div>
                </div>
              </div>
              <div class="mb-2 js-notify-later-content hidden">
                <label class="form-label-sm">Notify</label>
                <div class="d-flex align-items-center">
                  <input type="" name="" class="form-control form-control-md form-control-max-w-xs text-center" value="100">
                  <div class="ms-3">Day(s)</div>
                </div>
                <div class="mt-1">before the service start-time</div>
              </div>
              <div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="RepeatNotification" checked>
                  <label class="form-check-label" for="RepeatNotification">Repeat Notification</label>
                  <label class="form-check-label" for="RepeatNotification">Repeat Notification</label>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label">
                How often should they be notified?
              </label>
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="HowOftenShouldTheyBeNotified" id="Time" value="option1">
                  <label class="form-check-label" for="Time">Time(s)</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="HowOftenShouldTheyBeNotified" id="EveryDays" value="option2">
                  <label class="form-check-label" for="EveryDays">(*) Every ___ Days</label>
                </div>
                <div class="mt-2">
                  <input type="" name="" class="form-control form-control-md text-center  form-control-max-w-xs" value="10">
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <label class="form-label">Message for the Requestee</label>
              <textarea class="form-control" rows="3" cols="3"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
          </div>
          <div class="col-lg-6">
            <button type="button" class="btn rounded w-100 btn-primary">Add</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /Modal Request from User -->
@include('modals.common.add-address')
@include('modals.common.add-industry')
@include('modals.common.add-department')
@include('modals.common.add-document')
@include('modals.common.add-new-customer')
@include('modals.common.assign-admin-staff')
@include('modals.common.assign-admin-staff-team')
