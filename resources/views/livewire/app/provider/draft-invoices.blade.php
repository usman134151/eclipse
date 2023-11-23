<div x-data="{invoicesDetails: false, assignmentDetails: false, addReimbursement: false, step: 1}">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="content-header-title float-start mb-0">Invoice Generator</h1>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                      <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                        <use xlink:href="/css/common-icons.svg#home"></use>
                      </svg>
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="javascript:void(0)">
                        Payment
                    </a>
                  </li>
                  <li class="breadcrumb-item">
                    Invoice Generator
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="card">
        <div class="card-body">
            <div class="row mb-3 mt-3">
                <div class="col-md-11">
                    <p>
                        Here you can review your scheduled payroll based on the assignments, reimbursements, and referrals you've completed during the pay period.
                    </p>
                </div>
            </div>
            <div class="col-md-12 d-flex col-12 gap-4 mb-3">
                {{-- Date Range --}}
                <div class="col-md-4 col-12">
                    <div>
                        <label class="form-label" for="set_date">
                            Date Range
                        </label>
                        <div class="position-relative">
                            <input type="" name="" class="form-control js-single-date" placeholder="Jan 1, 2022 - Oct 1, 2022" id="set_date">
                            <svg aria-label="Select Date" class="icon-date right cursor-pointer" width="20" height="20" viewBox="0 0 20 20"fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#input-calender"></use>
                              </svg>
                        </div>
                    </div>
                </div>
                {{-- Status --}}
                <div class="col-md-3 col-12 mx-4">
                    <div class="mb-4">
                        <label class="form-label" for="status-column">Status</label>
                              <select class="select2 form-select" id="status-column">
                                <option>Pending</option>
                              </select>
                    </div>
                </div>
            </div>
           <x-advancefilters/>
            <div class="d-flex justify-content-between mb-2">
                <div class="d-inline-flex align-items-center gap-4">
                  <label for="show_records" class="form-label">Show</label>
                  <select class="form-select" id="show_records">
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                  </select>
                </div>
                <div class="d-inline-flex align-items-center gap-4">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg aria-label="Export" class="fill" width="23" height="26" viewBox="0 0 23 26"fill="none"
                         xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#export-dropdown"></use>
                      </svg>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            <div class="table-responsive">
                <table id="invoice-generator" class="table table-hover" aria-label="Invoice Generator">
                    <thead>
                        <tr role="row">
                            <th scope="col">
                              <div class="form-check">
                                  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select All Bookings">
                                </div>
                            </th>
                            <th scope="col">Booking id</th>
                            <th scope="col">Date & Time</th>
                            <th scope="col">Accommodation</th>
                            <th scope="col" width="20%">Company Name</th>
                            <th scope="col">Total Pay</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                      </tr>
                    </thead>
                      <tbody>
                        <tr role="row" class="odd">
                          <td>
                            <div class="form-check">
                            <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                            </div>
                          </td>
                          <td x-on:click="assignmentDetails = true">
                            100995-6
                          </td>
                          <td>
                            <div>11/23/2022</div>
                            <div class="text-sm"> 09:00 PM To <br> 4:18 PM</div>
                          </td>
                          <td>
                            <div class="text-sm">Shelby Sign Language</div>
                            <div class="text-sm">Specialization: Closed-Captioning</div>
                            <div class="text-sm">Service: Language interpreting</div>
                          </td>
                          <td >
                            <div class="row g-2">
                                <div class="col-md-2">
                                  <img src="/tenant-resources/images/portrait/small/image4.png"
                                  class="img-fluid rounded-circle"
                                  alt="Company Profile Image">
                                </div>
                                <div class="col-md-10 align-self-center">
                                  <div class="fw-semibold text-sm">Example Company</div>
                                  <p class="text-sm">examplecompany@gmail.com</p>
                                </div>
                              </div>
                          </td>
                          <td>$150.00</td>
                          <td>
                            <div class="d-inline-flex">
                                <div><svg aria-label="Completed" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                 </svg></div>
                               <div class="mx-1 text-sm mt-1">Completed</div>
                            </div>     
                          </td>
                          <td>
                            <div class="d-flex actions"> 
                              <a @click="invoicesDetails = true" href="#" title="Invoice Generate" aria-label="Invoice Generate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#invoice-generate"></use>
                               </svg>        
                              </a>
                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" x-on:click="assignmentDetails = true">
                                <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                               </svg>
                              </a>     
                            </div>
                          </td>
                        </tr>
                        <tr role="row" class="even">
                            <td>
                              <div class="form-check">
                              <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                              </div>
                            </td>
                            <td x-on:click="assignmentDetails = true">
                              100995-6
                            </td>
                            <td>
                              <div>11/23/2022</div>
                              <div class="text-sm"> 09:00 PM To <br> 4:18 PM</div>
                            </td>
                            <td>
                              <div class="text-sm">Shelby Sign Language</div>
                              <div class="text-sm">Specialization: Closed-Captioning</div>
                              <div class="text-sm">Service: Language interpreting</div>
                            </td>
                            <td >
                              <div class="row g-2">
                                  <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/image4.png"
                                  class="img-fluid rounded-circle"
                                  alt="Company Profile Image">
                                  </div>
                                  <div class="col-md-10 align-self-center">
                                    <div class="fw-semibold text-sm">Example Company</div>
                                    <p class="text-sm">examplecompany@gmail.com</p>
                                  </div>
                                </div>
                            </td>
                            <td>$150.00</td>
                            <td>
                                <svg aria-label="Underfilled" class="fill" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#red-dot"></use>
                                </svg>
                              <span class="text-sm">Underfilled</span>
                            </td>
                            <td>
                              <div class="d-flex actions"> 
                                <a @click="invoicesDetails = true" href="#" title="Invoice Generate" aria-label="Invoice Generate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#invoice-generate"></use>
                                 </svg>        
                                </a>
                                <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" x-on:click="assignmentDetails = true">
                                  <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                   xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                 </svg>
                                </a>     
                              </div>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td>
                              <div class="form-check">
                              <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                              </div>
                            </td>
                            <td x-on:click="assignmentDetails = true">
                              <div class="text-sm">100995-6</div>
                            </td>
                            <td>
                              <div>11/23/2022</div>
                              <div class="text-sm"> 09:00 PM To <br> 4:18 PM</div>
                            </td>
                            <td>
                              <div class="text-sm">Shelby Sign Language</div>
                              <div class="text-sm">Specialization: Closed-Captioning</div>
                              <div class="text-sm">Service: Language interpreting</div>
                            </td>
                            <td >
                              <div class="row g-2">
                                  <div class="col-md-2">
                                    <img src="/tenant-resources/images/portrait/small/image4.png"
                                  class="img-fluid rounded-circle"
                                  alt="Company Profile Image">
                                  </div>
                                  <div class="col-md-10 align-self-center">
                                    <div class="fw-semibold text-sm">Example Company</div>
                                    <p class="text-sm">examplecompany@gmail.com</p>
                                  </div>
                                </div>
                            </td>
                            <td>$150.00</td>
                            <td>
                                <div><svg aria-label="Canceled" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#yellow-dot"></use>
                                   </svg>
                                   <span class="text-sm"> Canceled</span> 
                                </div>
                                   <div class="ms-2 text-sm">Billable</div>   
                            </td>
                            <td>
                              <div class="d-flex actions"> 
                                <a @click="invoicesDetails = true" href="#" title="Invoice Generate" aria-label="Invoice Generate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#invoice-generate"></use>
                                 </svg>        
                                </a>
                                <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" x-on:click="assignmentDetails = true">
                                  <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                   xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                 </svg>
                                </a>     
                              </div>
                            </td>
                          </tr>
                          <tr role="row" class="even">
                              <td>
                                <div class="form-check">
                                <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                </div>
                              </td>
                              <td x-on:click="assignmentDetails = true">
                                100995-6
                              </td>
                              <td>
                                <div>11/23/2022</div>
                                <div class="text-sm"> 09:00 PM To <br> 4:18 PM</div>
                              </td>
                              <td>
                                <div class="text-sm">Shelby Sign Language</div>
                                <div class="text-sm">Specialization: Closed-Captioning</div>
                                <div class="text-sm">Service: Language interpreting</div>
                              </td>
                              <td >
                                <div class="row g-2">
                                    <div class="col-md-2">
                                      <img src="/tenant-resources/images/portrait/small/image4.png"
                                        class="img-fluid rounded-circle"
                                        alt="Company Profile Image">
                                    </div>
                                    <div class="col-md-10 align-self-center">
                                      <div class="fw-semibold text-sm">Example Company</div>
                                      <p class="text-sm">examplecompany@gmail.com</p>
                                    </div>
                                  </div>
                              </td>
                              <td>$150.00</td>
                              <td>
                                <div class="d-inline-flex">
                                  <div><svg aria-label="Completed" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                   </svg></div>
                                 <div class="mx-1 text-sm mt-1">Completed</div>
                              </div>
                              </td>
                              <td>
                                <div class="d-flex actions"> 
                                  <a @click="invoicesDetails = true" href="#" title="Invoice Generate" aria-label="Invoice Generate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#invoice-generate"></use>
                                   </svg>        
                                  </a>
                                  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" x-on:click="assignmentDetails = true">
                                    <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                   </svg>
                                  </a>     
                                </div>
                              </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td>
                                  <div class="form-check">
                                  <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                  </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                  100995-6
                                </td>
                                <td>
                                  <div>11/23/2022</div>
                                  <div class="text-sm"> 09:00 PM To <br> 4:18 PM</div>
                                </td>
                                <td>
                                  <div class="text-sm">Shelby Sign Language</div>
                                  <div class="text-sm">Specialization: Closed-Captioning</div>
                                  <div class="text-sm">Service: Language interpreting</div>
                                </td>
                                <td >
                                  <div class="row g-2">
                                      <div class="col-md-2">
                                        <img src="/tenant-resources/images/portrait/small/image4.png"
                                        class="img-fluid rounded-circle"
                                        alt="Company Profile Image">
                                      </div>
                                      <div class="col-md-10 align-self-center">
                                        <div class="fw-semibold text-sm">Example Company</div>
                                        <p class="text-sm">examplecompany@gmail.com</p>
                                      </div>
                                    </div>
                                </td>
                                <td>$150.00</td>
                                <td>
                                  <div class="d-inline-flex">
                                    <div><svg aria-label="Completed" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                     </svg></div>
                                     <div class="mx-1 text-sm mt-1">Completed</div>
                                </div>
                                </td>
                                <td>
                                  <div class="d-flex actions"> 
                                    <a @click="invoicesDetails = true" href="#" title="Invoice Generate" aria-label="Invoice Generate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                      <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19" fill="none"
                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#invoice-generate"></use>
                                     </svg>        
                                    </a>
                                    <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" x-on:click="assignmentDetails = true">
                                      <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                       xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                     </svg>
                                    </a>     
                                  </div>
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                  <td>
                                    <div class="form-check">
                                    <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                    </div>
                                  </td>
                                  <td x-on:click="assignmentDetails = true">
                                    100995-6
                                  </td>
                                  <td>
                                    <div>11/23/2022</div>
                                    <div class="text-sm"> 09:00 PM To <br> 4:18 PM</div>
                                  </td>
                                  <td>
                                    <div class="text-sm">Shelby Sign Language</div>
                                    <div class="text-sm">Specialization: Closed-Captioning</div>
                                    <div class="text-sm">Service: Language interpreting</div>
                                  </td>
                                  <td >
                                    <div class="row g-2">
                                        <div class="col-md-2">
                                          <img src="/tenant-resources/images/portrait/small/image4.png"
                                          class="img-fluid rounded-circle"
                                          alt="Company Profile Image">
                                        </div>
                                        <div class="col-md-10 align-self-center">
                                          <div class="fw-semibold text-sm">Example Company</div>
                                          <p class="text-sm">examplecompany@gmail.com</p>
                                        </div>
                                      </div>
                                  </td>
                                  <td>$150.00</td>
                                  <td>
                                    <div class="d-inline-flex">
                                      <div><svg aria-label="Completed" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                       </svg></div>
                                       <div class="mx-1 text-sm mt-1">Completed</div>
                                  </div>
                                  </td>
                                  <td>
                                    <div class="d-flex actions"> 
                                      <a @click="invoicesDetails = true" href="#" title="Invoice Generate" aria-label="Invoice Generate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#invoice-generate"></use>
                                       </svg>        
                                      </a>
                                      <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" x-on:click="assignmentDetails = true">
                                        <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                       </svg>
                                      </a>     
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td>
                                      <div class="form-check">
                                      <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td x-on:click="assignmentDetails = true">
                                      100995-6
                                    </td>
                                    <td>
                                      <div>11/23/2022</div>
                                      <div class="text-sm"> 09:00 PM To <br> 4:18 PM</div>
                                    </td>
                                    <td>
                                      <div class="text-sm">Shelby Sign Language</div>
                                      <div class="text-sm">Specialization: Closed-Captioning</div>
                                      <div class="text-sm">Service: Language interpreting</div>
                                    </td>
                                    <td >
                                      <div class="row g-2">
                                          <div class="col-md-2">
                                            <img src="/tenant-resources/images/portrait/small/image4.png"
                                              class="img-fluid rounded-circle"
                                              alt="Company Profile Image">
                                          </div>
                                          <div class="col-md-10 align-self-center">
                                            <div class="fw-semibold text-sm">Example Company</div>
                                            <p class="text-sm">examplecompany@gmail.com</p>
                                          </div>
                                        </div>
                                    </td>
                                    <td>$150.00</td>
                                    <td>
                                      <div class="d-inline-flex">
                                        <div><svg aria-label="Completed" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                         </svg></div>
                                       <div class="mx-1 text-sm">Completed</div>
                                    </div>
                                    </td>
                                    <td>
                                      <div class="d-flex actions"> 
                                        <a @click="invoicesDetails = true" href="#" title="Invoice Generate" aria-label="Invoice Generate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19" fill="none"
                                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#invoice-generate"></use>
                                         </svg>        
                                        </a>
                                        <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" x-on:click="assignmentDetails = true">
                                          <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                           xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                         </svg>
                                        </a>     
                                      </div>
                                    </td>
                                  </tr>
                                  <tr role="row" class="even">
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td x-on:click="assignmentDetails = true">
                                        100995-6
                                      </td>
                                      <td>
                                        <div>11/23/2022</div>
                                        <div class="text-sm"> 09:00 PM To <br> 4:18 PM</div>
                                      </td>
                                      <td>
                                        <div class="text-sm">Shelby Sign Language</div>
                                        <div class="text-sm">Specialization: Closed-Captioning</div>
                                        <div class="text-sm">Service: Language interpreting</div>
                                      </td>
                                      <td >
                                        <div class="row g-2">
                                            <div class="col-md-2">
                                              <img src="/tenant-resources/images/portrait/small/image4.png"
                                               class="img-fluid rounded-circle"
                                               alt="Company Profile Image">
                                            </div>
                                            <div class="col-md-10 align-self-center">
                                              <div class="fw-semibold text-sm">Example Company</div>
                                              <p class="text-sm">examplecompany@gmail.com</p>
                                            </div>
                                          </div>
                                      </td>
                                      <td>$150.00</td>
                                      <td>
                                        <div class="d-inline-flex">
                                          <div><svg aria-label="Completed" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                                           </svg></div>
                                           <div class="mx-1 text-sm mt-1">Completed</div>
                                      </div>
                                      </td>
                                      <td>
                                        <div class="d-flex actions"> 
                                          <a @click="invoicesDetails = true" href="#" title="Invoice Generate" aria-label="Invoice Generate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#invoice-generate"></use>
                                           </svg>        
                                          </a>
                                          <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" x-on:click="assignmentDetails = true">
                                            <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                             xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                           </svg>
                                          </a>     
                                        </div>
                                      </td>
                                    </tr>
                          </tbody>
                      </table>
            </div>
              <!-- Icon Help -->
        <div class="d-flex actions gap-3 justify-content-end mb-2">
          <div class="d-flex gap-2 align-items-center">
            <a href="#" title="Invoice Generate" aria-label="Invoice Generate" class="btn btn-sm btn-secondary rounded btn-hs-icon">
              <svg aria-label="Invoice Generate" width="22" height="19" viewBox="0 0 22 19" fill="none"
              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#invoice-generate"></use>
             </svg>        
            </a> 
            <span class="text-sm">
              Invoice Generate
            </span>
          </div>
          <div class="d-flex gap-2 align-items-center">
            <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
              <svg aria-label="View" class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
             </svg>
            </a>
            <span class="text-sm">
              View
            </span>
          </div>
        </div>
        <!-- /Icon Help -->
            <div class="d-flex justify-content-center mt-4">
              <button class="btn btn-primary rounded" @click="invoicesDetails = true">Generate Invoice</button>
              </div>
        </div>
    </div>
    @include('panels.provider.invoices-details')
    @include('panels.common.assignment-details')
    @include('panels.provider.add-reimbursement')
    @include('modals.common.running-late')
    @include('modals.return-assignment')
</div>
