<div x-data="{assignmentDetails: false, addReimbursement: false, step: 1}">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="content-header-title float-start mb-0">Remittances</h1>
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
                    Remittances
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
                            <svg aria-label="Date" class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field"></use>
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
                <table id="remittances" class="table table-hover" aria-label="Remittances">
                    <thead>
                        <tr role="row">
                            <th scope="col">
                              <div class="form-check">
                                  <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select All Remittances">
                                </div>
                            </th>
                            <th scope="col">Remittance. NO</th>
                            <th scope="col">Total Pay</th>
                            <th scope="col">Scheduled Payment Date</th>
                            <th scope="col">Paid At</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                      </tr>
                    </thead>
                      <tbody>
                       
                       <tr role="row" class="odd">
                          <td>
                            <div class="form-check">
                            <input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
                            </div>
                          </td>
                          <td x-on:click="assignmentDetails = true">
                            <div>100995-6</div>
                            <div>08/24/2022</div>
                            <div>9:59 AM</div>
                          </td>
                          <td>$100.00
                          </td>
                          <td>10/25/2022</td>
                          <td>
                            <div>10/11/2022</div>
                            <div>11:15 PM</div>
                          </td>
                          <td>Direct Deposit</td>
                          <td>
                            <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                            </svg>
                            Paid
                          </td>
                          <td>
                            <div class="d-flex actions"> 
                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
                                <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                </svg>
                              </a>
                              <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                </svg>  
                              </a>                               
                              <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
                                <svg aria-label="Download File" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                </svg>
                              </a>      
                            </div>
                          </td>
                        </tr>
                        <tr role="row" class="even">
                           <td>
                             <div class="form-check">
                             <input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
                             </div>
                           </td>
                           <td x-on:click="assignmentDetails = true">
                             <div>100995-6</div>
                             <div>08/24/2022</div>
                             <div>9:59 AM</div>
                           </td>
                           <td>$100.00
                           </td>
                           <td>10/25/2022</td>
                           <td>
                             <div>10/11/2022</div>
                             <div>11:15 PM</div>
                           </td>
                           <td>Direct Deposit</td>
                           <td>
                            <svg aria-label="Pending" class="fill-warning" width="12" height="12" viewBox="0 0 512 512" fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#yellow-dot"></use>
                            </svg>
                             Pending
                           </td>
                           <td>
                             <div class="d-flex actions"> 
                               <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
                                <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                              </svg>
                               </a>
                               <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                </svg> 
                               </a>                               
                               <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                <svg aria-label="Download File" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                </svg>
                               </a>      
                             </div>
                           </td>
                        </tr>
                        <tr role="row" class="odd">
                            <td>
                              <div class="form-check">
                              <input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
                              </div>
                            </td>
                            <td x-on:click="assignmentDetails = true">
                              <div>100995-6</div>
                              <div>08/24/2022</div>
                              <div>9:59 AM</div>
                            </td>
                            <td>$100.00
                            </td>
                            <td>10/25/2022</td>
                            <td>
                              <div>10/11/2022</div>
                              <div>11:15 PM</div>
                            </td>
                            <td>Direct Deposit</td>
                            <td>
                              <svg aria-label="Pending" class="fill-warning" width="12" height="12" viewBox="0 0 512 512" fill="none"
                               xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#yellow-dot"></use>
                               </svg>
                              Pending
                            </td>
                            <td>
                              <div class="d-flex actions"> 
                                <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
                                  <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                  </svg>
                                </a>
                                <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                  </svg> 
                                </a>                               
                                <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Download File" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                   xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                   </svg>
                                </a>      
                              </div>
                            </td>
                          </tr>
                        </tr>
                          <tr role="row" class="even">
                             <td>
                               <div class="form-check">
                               <input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
                               </div>
                             </td>
                             <td x-on:click="assignmentDetails = true">
                               <div>100995-6</div>
                               <div>08/24/2022</div>
                               <div>9:59 AM</div>
                             </td>
                             <td>$100.00
                             </td>
                             <td>10/25/2022</td>
                             <td>
                               <div>10/11/2022</div>
                               <div>11:15 PM</div>
                             </td>
                             <td>Direct Deposit</td>
                             <td>
                              <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                              </svg>
                               Paid
                             </td>
                             <td>
                               <div class="d-flex actions"> 
                                 <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
                                  <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                </svg>
                                 </a>
                                 <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                  </svg> 
                                 </a>                               
                                 <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
                                  <svg aria-label="Download File" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                  </svg>
                                 </a>      
                               </div>
                             </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td>
                              <div class="form-check">
                              <input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
                              </div>
                            </td>
                            <td x-on:click="assignmentDetails = true">
                              <div>100995-6</div>
                              <div>08/24/2022</div>
                              <div>9:59 AM</div>
                            </td>
                            <td>$100.00
                            </td>
                            <td>10/25/2022</td>
                            <td>
                              <div>10/11/2022</div>
                              <div>11:15 PM</div>
                            </td>
                            <td>Direct Deposit</td>
                            <td>
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                            </svg>
                              Paid
                            </td>
                            <td>
                              <div class="d-flex actions"> 
                                <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
                                  <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                  </svg>
                                </a>
                                <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                  </svg>  
                                </a>                               
                                <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon " >
                                  <svg aria-label="Download File" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                  </svg>
                                </a>      
                              </div>
                            </td>
                          </tr>
                          <tr role="row" class="even">
                             <td>
                               <div class="form-check">
                               <input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
                               </div>
                             </td>
                             <td x-on:click="assignmentDetails = true">
                               <div>100995-6</div>
                               <div>08/24/2022</div>
                               <div>9:59 AM</div>
                             </td>
                             <td>$100.00
                             </td>
                             <td>10/25/2022</td>
                             <td>
                               <div>10/11/2022</div>
                               <div>11:15 PM</div>
                             </td>
                             <td>Direct Deposit</td>
                             <td>
                              <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12" fill="none"
                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                              </svg>
                               Paid
                             </td>
                             <td>
                               <div class="d-flex actions"> 
                                 <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
                                  <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                </svg>
                                 </a>
                                 <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                  </svg> 
                                 </a>                               
                                 <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
                                  <svg aria-label="Download File" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                  </svg>
                                 </a>      
                               </div>
                             </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td>
                              <div class="form-check">
                              <input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
                              </div>
                            </td>
                            <td x-on:click="assignmentDetails = true">
                              <div>100995-6</div>
                              <div>08/24/2022</div>
                              <div>9:59 AM</div>
                            </td>
                            <td>$100.00
                            </td>
                            <td>10/25/2022</td>
                            <td>
                              <div>10/11/2022</div>
                              <div>11:15 PM</div>
                            </td>
                            <td>Direct Deposit</td>
                            <td>
                              <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                            </svg>
                              Paid
                            </td>
                            <td>
                              <div class="d-flex actions"> 
                                <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
                                  <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                  </svg>
                                </a>
                                <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                  </svg> 
                                </a>                               
                                <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon" >
                                  <svg aria-label="Download File" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                  </svg>
                                </a>      
                              </div>
                            </td>
                          </tr>
                          <tr role="row" class="even">
                             <td>
                               <div class="form-check">
                               <input class="form-check-input" aria-label="Select Remittance" id="" name="" type="checkbox" tabindex="">
                               </div>
                             </td>
                             <td x-on:click="assignmentDetails = true">
                               <div>100995-6</div>
                               <div>08/24/2022</div>
                               <div>9:59 AM</div>
                             </td>
                             <td>$100.00
                             </td>
                             <td>10/25/2022</td>
                             <td>
                               <div>10/11/2022</div>
                               <div>11:15 PM</div>
                             </td>
                             <td>Direct Deposit</td>
                             <td>
                              <svg aria-label="Paid" width="12" height="12" viewBox="0 0 12 12" fill="none"
                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#green-dot"></use>
                             </svg>
                               Paid
                             </td>
                             <td>
                               <div class="d-flex actions"> 
                                 <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#remittanceDetailModal">
                                  <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                </svg>
                                 </a>
                                 <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                                  </svg>  
                                 </a>                               
                                 <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg aria-label="Download File" width="16" height="20" viewBox="0 0 16 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                                  </svg>
                                 </a>      
                               </div>
                             </td>
                          </tr> 

                          </tbody>
                      </table>
            </div>
            <div class="d-flex justify-content-between mb-3">
                <div>
                  <p class="fw-semibold">Showing 1 to 5 of 30 entries</p>
                </div>
                <nav aria-label="Page Navigation">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">Previous
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item active"><a class="page-link" href="#">4</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">Next
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
               <!-- Icon Help -->
        <div class="d-flex actions gap-3 justify-content-end mb-2">
            <div class="d-flex gap-2 align-items-center">
                <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                  <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                </svg>
                  </a>
              <span class="text-sm">
                View
              </span>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                  <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                  </svg>
                </a>
              <span class="text-sm">
              Revert
              </span>
            </div>
            <div class="d-flex gap-2 align-items-center">
                <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                  <svg aria-label="Download File" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                  </svg>
                    </a>
              <span class="text-sm">
                Download PDF
              </span>
            </div>
          </div>
          <!-- /Icon Help -->
        </div>
    </div>
    @include('panels.common.assignment-details')
    @include('panels.provider.add-reimbursement')
    @include('modals.common.running-late')
    @include('modals.return-assignment')
    @include('modals.remittance-details')
</div>
