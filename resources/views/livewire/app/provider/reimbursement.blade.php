<div x-data="{addReimbursement: false, assignmentDetails: false, step: 1}">
  <div id="loader-section" class="loader-section" wire:loading>
    <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
        <div class="spinner-border" role="status" aria-live="polite">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
  </div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="content-header-title float-start mb-0">Reimbursements</h1>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                      <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
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
                    Reimbursements
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
     <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3 mt-3">
                    <div class="col-md-11">
                        <p>
                            Here you can view, manage, and request reimbursement for expenses incurred while providing services. All reimbursements require review and approval.
                        </p>
                    </div>
                </div>
                <div class="row mb-3">
                   <div class="d-inline-flex">
                      <div class="col-md-3 ms-auto text-end">
                          <a @click="addReimbursement = true" href="#" class="btn btn-primary rounded ">
                            <svg aria-label="add Reimbursement" width="20" height="20" viewBox="0 0 20 20">
                              <use xlink:href="/css/common-icons.svg#plus">
                              </use>
                          </svg>
                          <span class="ms-2"> Add Reimbursement</span>
                          </a>
                        </div>
                   </div>
              </div>
              <x-advancefilters/>
              <div class="d-flex justify-content-between mb-2">
                  {{-- <div class="d-inline-flex align-items-center gap-4">
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
                  </div> --}}
                </div>
                <div class="table-responsive">
                    <table id="remittances" class="table table-hover" aria-label="Reimbursements">
                        <thead>
                            <tr role="row">
                                <th scope="col">
                                  <div class="form-check">
                                      <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select All Bookings">
                                    </div>
                                </th>
                                <th scope="col">Booking Number</th>
                                <th scope="col">Reason Documnet</th>
                                <th scope="col">AMOUNT</th>
                                <th scope="col">Status</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Issued</th>
                                <th scope="col">Paid</th>
                                <th scope="col">Payment Method</th>
                          </tr>
                        </thead>
                          <tbody>
                            @forelse ($reimbursementData as  $index => $reimbursement)
                                            <tr role="row" class="odd">
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                                    </div>
                                                </td>
                                                <td>{{$reimbursement["booking_number"]}}<br />{{
                                                        date_format(date_create($reimbursement['booking_start_at']), 'm/d/Y') }} <br>
                                                        {{ $reimbursement['booking_start_at'] ? date_format(date_create($reimbursement['booking_start_at']), 'h:i
                                                        A') : 'N/A' }} to {{ $reimbursement['booking_end_at'] ?
                                                        date_format(date_create($reimbursement['booking_end_at']), 'h:i A') : 'N/A' }}</p></td>
            
                                                <td>{{$reimbursement['reason']}}<br>
                                                    {{-- Updated by Shanila to Add svg icon--}}
                                                    @if($reimbursement['file'])
                                                    <button wire:click="downloadFile({{ $index }})" class="btn btn-link">
                                                        <svg class="mx-2" aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                                            <use xlink:href="/css/common-icons.svg#doc"></use>
                                                        </svg>
                                                    </button>
                                                    @endif
                                                    
                                                    {{-- End of update by Shanila --}}
                                                </td>
                                                <td>{{formatPayment($reimbursement['amount'])}}</td>
                                                <td>{{$reimbursement['review_status']}}</td>
                                                <td>{{$reimbursement['payment_status']}}</td>
                                                <td>{{ $reimbursement['issued_at'] ? date_format(date_create($reimbursement['issued_at']), 'm/d/Y') : 'N/A' }} </td> 
                                                <td>{{ $reimbursement['paid_at'] ? date_format(date_create($reimbursement['paid_at']), 'm/d/Y') : 'N/A' }}</td>
                                                <td>{{$reimbursement['payment_method']}}</td>
                                                {{-- <td>
                                                    <div class="d-flex actions">
                                                        <a href="javascript:void(0)" title="Edit" aria-label="Edit"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            <svg title="Edit" width="20" height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#pencil">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" title="Check" aria-label="Check"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                                            data-bs-target="#reimbursementReview">
                                                            <svg aria-label="Check" width="22" height="20" viewBox="0 0 22 20">
                                                                <use xlink:href="/css/common-icons.svg#check">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                        <a href="javascript:void(0)" title="cross" aria-label="cross"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                                            data-bs-target="#denyReimbursement">
                                                            <svg aria-label="cancel" width="20" height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#cross">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td> --}}
                                            </tr>    
                                            @empty
                                                No Data
                                            @endforelse
                            {{-- <td>Coming Soon</td> --}}
                            {{-- <tr role="row" class="odd">
                              <td>
                                  <div class="form-check">
                                  <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                </div>
                              </td>
                              <td x-on:click="assignmentDetails = true">
                                <div>
                                    100995-6
                                </div>
                              </td>
                              <td>Fuel Expenses<br>
                                <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                  <use xlink:href="/css/common-icons.svg#doc">
                                  </use>
                              </svg>
                              </td>
                              <td>$100.00</td>
                              <td>Approved</td>
                              <td>Issued</td>
                              <td>
                                <div> 11/23/2022  </div>
                                <div>4:18 AM</div>
                              </td>
                              <td>
                                 -
                              </td>
                              <td>
                                Mail a Check
                              </td>
                              </tr>
                            </tr>
                              <tr role="row" class="even">
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                  </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                  <div>
                                      100995-6
                                  </div>
                                </td>
                                <td>Fuel Expenses<br>
                                  <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                    <use xlink:href="/css/common-icons.svg#doc">
                                    </use>
                                </svg>
                                </td>
                                <td>$100.00</td>
                                <td>Approved</td>
                                <td>Issued</td>
                                <td>
                                  <div> 11/23/2022  </div>
                                  <div>4:18 AM</div>
                                </td>
                                <td>
                                   -
                                </td>
                                <td>
                                  Mail a Check
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                  </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                  <div>
                                      100995-6
                                  </div>
                                </td>
                                <td>Fuel Expenses<br>
                                  <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                    <use xlink:href="/css/common-icons.svg#doc">
                                    </use>
                                </svg>
                                </td>
                                <td>$100.00</td>
                                <td>Approved</td>
                                <td>Issued</td>
                                <td>
                                  <div> 11/23/2022  </div>
                                  <div>4:18 AM</div>
                                </td>
                                <td>
                                   -
                                </td>
                                <td>
                                  Mail a Check
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                  </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                  <div>
                                      100995-6
                                  </div>
                                </td>
                                <td>Fuel Expenses<br>
                                  <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                    <use xlink:href="/css/common-icons.svg#doc">
                                    </use>
                                </svg>
                                </td>
                                <td>$100.00</td>
                                <td>Approved</td>
                                <td>Issued</td>
                                <td>
                                  <div> 11/23/2022  </div>
                                  <div>4:18 AM</div>
                                </td>
                                <td>
                                   -
                                </td>
                                <td>
                                  Mail a Check
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                  </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                  <div>
                                      100995-6
                                  </div>
                                </td>
                                <td>Fuel Expenses<br>
                                  <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                    <use xlink:href="/css/common-icons.svg#doc">
                                    </use>
                                </svg>
                                </td>
                                <td>$100.00</td>
                                <td>Approved</td>
                                <td>Issued</td>
                                <td>
                                  <div> 11/23/2022  </div>
                                  <div>4:18 AM</div>
                                </td>
                                <td>
                                   -
                                </td>
                                <td>
                                  Mail a Check
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                  </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                  <div>
                                      100995-6
                                  </div>
                                </td>
                                <td>Fuel Expenses<br>
                                  <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                    <use xlink:href="/css/common-icons.svg#doc">
                                    </use>
                                </svg>
                                </td>
                                <td>$100.00</td>
                                <td>Approved</td>
                                <td>Issued</td>
                                <td>
                                  <div> 11/23/2022  </div>
                                  <div>4:18 AM</div>
                                </td>
                                <td>
                                   -
                                </td>
                                <td>
                                  Mail a Check
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                  </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                  <div>
                                      100995-6
                                  </div>
                                </td>
                                <td>Fuel Expenses<br>
                                  <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                    <use xlink:href="/css/common-icons.svg#doc">
                                    </use>
                                </svg>
                                </td>
                                <td>$100.00</td>
                                <td>Approved</td>
                                <td>Issued</td>
                                <td>
                                  <div> 11/23/2022  </div>
                                  <div>4:18 AM</div>
                                </td>
                                <td>
                                   -
                                </td>
                                <td>
                                  Mail a Check
                                </td>
                              </tr>
                              <tr role="row" class="even">
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                  </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                  <div>
                                      100995-6
                                  </div>
                                </td>
                                <td>Fuel Expenses<br>
                                  <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                    <use xlink:href="/css/common-icons.svg#doc">
                                    </use>
                                </svg>
                                </td>
                                <td>$100.00</td>
                                <td>Approved</td>
                                <td>Issued</td>
                                <td>
                                  <div> 11/23/2022  </div>
                                  <div>4:18 AM</div>
                                </td>
                                <td>
                                   -
                                </td>
                                <td>
                                  Mail a Check
                                </td>
                              </tr>
                              <tr role="row" class="odd">
                                <td>
                                    <div class="form-check">
                                    <input class="form-check-input" aria-label="Select Booking" id="" name="" type="checkbox" tabindex="">
                                  </div>
                                </td>
                                <td x-on:click="assignmentDetails = true">
                                  <div>
                                      100995-6
                                  </div>
                                </td>
                                <td>Fuel Expenses<br>
                                  <svg aria-label="document" width="17" height="21" viewBox="0 0 17 21">
                                    <use xlink:href="/css/common-icons.svg#doc">
                                    </use>
                                </svg>
                                </td>
                                <td>$100.00</td>
                                <td>Approved</td>
                                <td>Issued</td>
                                <td>
                                  <div> 11/23/2022  </div>
                                  <div>4:18 AM</div>
                                </td>
                                <td>
                                   -
                                </td>
                                <td>
                                  Mail a Check
                                </td>
                              </tr> --}}
                              </tbody>
                          </table>
                   </div>
            </div>
            {{-- <div class="d-flex justify-content-between">
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
            </div> --}}
        </div>
     </div>
     @include('panels.common.add-reimbursement')
     @include('panels.common.assignment-details')
    @include('modals.common.running-late')
    @include('modals.return-assignment')
</div>
<script>
  function updateVal(attrName,val){

      Livewire.emit('updateVal', attrName, val);

  }
</script>

