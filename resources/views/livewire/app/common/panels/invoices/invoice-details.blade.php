<div>
    <div class="row">
        <div class="row">
            <p>Here you can view and manage invoices issued to customers.</p>
          </div>
          <div class="col-md-8 mb-4 border border-primary p-2">
            <div class="col-md-12 mb-3 ps-3">
              <label class="form-label" for="Customer-invoices-summary">Customer invoices summary</label>
            </div>
            <div class="row ps-3">
              <div class="col-md-4">
                <div>
                  <h2>$1735.6</h2>
                  <p>Overdue</p>
                </div>
              </div>
              <div class="col-md-4">
                <div>
                  <h2>$6298.8</h2>
                  <p>Coming in the Next 30 Days</p>
                </div>
              </div>
              <div class="col-md-4">
                <div>
                  <h2>20 Days</h2>
                  <p>Average Payment Timeline</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 d-flex col-12 gap-4 mb-4 mt-5">
            <!-- Company -->
              <div class="col-md-3 col-12">
                <div>
                  <label class="form-label" for="company-column">Company</label>
                  <select class="select2 form-select" id="company-column">
                    <option>Select Company</option>
                    <option>Companey-1</option>
                    <option>Comapaney-2</option>
                  </select>
                </div>
              </div>

              <!-- Billing Manager -->
              <div class="col-md-3 col-12">
                <div>
                  <label class="form-label" for="Billing-Manager-column">Billing Manager</label>
                  <select class="select2 form-select" id="Billing-Manager-column">
                    <option>Select Billing Manager</option>
                    <option>Department-1</option>
                    <option>Department-2</option>
                  </select>
                </div>
              </div>
                    <!-- Date Range -->
                    <div class="col-md-3 col-12">
                      <div>
                        <label class="form-label" for="set_set_date">Date Range</label>
                        <div class="d-flex gap-3"><div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadio" id="IssuedRadioButton">
                          <label class="form-check-label" for="IssuedRadioButton">
                            Issued
                          </label>
                        </div><div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadio" id="DueRadioButton">
                          <label class="form-check-label" for="DueRadioButton">
                            Due
                          </label>
                        </div></div>
                        <div class="position-relative">
                          <input type="" name="" class="form-control js-single-date" placeholder="Select Date" id="set_set_date">
                          <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
                          </svg>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-md-12 d-flex col-12 gap-4">
                <!-- search  -->
                <div class="col-md-3 col-12">
                  <div class="mb-4">
                    <label class="form-label" for="search-column">
                      Search
                    </label>
                    <input
                      type="text"
                      id="search-column"
                      class="form-control"
                      name="search-column"
                      placeholder="Search here"
                      required
                      aria-required="true"
                      />
                  </div>
                </div>
                  <!-- Payment Status -->
                  <div class="col-md-3 col-12">
                    <div class="mb-4">
                      <label class="form-label" for="payment-status-column">Payment Status</label>
                      <select class="select2 form-select" id="payment-status-column">
                        <option>Select Payment Status</option>
                        <option>Payment Status-1</option>
                        <option>Payment Status-2</option>
                      </select>
                    </div>
                  </div>

                </div>
                <div class="row mb-4 mt-4">
                    <div class="dropdown">

                      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                          </svg>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                <div class="d-flex justify-content-between mb-2 mt-5">
                  <div class="d-inline-flex align-items-center gap-4">
                    <label for="show_records_number" class="form-label">Show</label>
                    <select class="form-select" id="show_records_number">
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                    </select>
                  </div>

                </div>
    </div>
    <div class="table-responsive">
        <table id="remittances" class="table table-hover" aria-label="Remittance">
          <thead>
              <tr role="row">
                  <th scope="col">
                    <div class="form-check">
                        <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="Select All Invoices">
                      </div>
                  </th>
                  <th scope="col">Invoice</th>
                  <th>Company</th>
                  <th scope="col">Recipient(s)</th>
                  <th scope="col">PO. NO</th>
                  <th scope="col">Total Amount</th>
                  <th scope="col">PDF</th>
                  <th scope="col">Payment Method</th>
                  <th scope="col">Payment Status</th>
                  <th class="text-center" scope="col">Action</th>

            </tr>
          </thead>
            <tbody>
              <tr role="row" class="odd">
                <td>
                    <div class="form-check">
                    <input class="form-check-input" aria-label="Select Invoice" id="" name="" type="checkbox" tabindex="">
                  </div>
                </td>
                <td><a @click="offcanvasOpen = true">87109</a>
                <p class="mt-1">08/24/2022</p></td>
                <td><div class="text-sm">Example Company</div></td>
                <td class="align-middle"> <div class="row g-2">
                  <div class="col-md-2">
                    <div class="uploaded-data d-flex">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                    </div>
                  </div>
                </div></td>
                <td class="text-center">17837</td>
                <td class="text-center">$40.00</td>
                <td class="text-center">
                <svg aria-label="Document" width="17" height="21" viewBox="0 0 17 21"><use xlink:href="/css/common-icons.svg#doc"></use></svg>
                </td>
                <td class="text-center">Direct Deposit</td>
                <td><div class="d-flex align-items-center gap-2">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6" cy="6" r="6" fill="#32A35F"/>
                    </svg>
                  <p>Paid</p>
                </div></td>
                <td>
                    <div class="d-flex actions">
                        <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                          <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                          </svg>
                        </a>
                      <a href="#" title="Payment Details" aria-label="Payment Details" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#payInvoice">
                        <svg aria-label="Payment Details" width="19" height="20" viewBox="0 0 19 20"  fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                            </svg>
                      </a>
                      <div class="d-flex actions">
                        <div class="dropdown ac-cstm">
                          <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                            </svg>
                              </a>
                          <!-- <div class="tablediv dropdown-menu">
                            <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                            <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                          </div> -->
                        </div>
                      </div>
                    </div>
                </td>
                </tr>
              <tr role="row" class="odd">
                <td>
                    <div class="form-check">
                    <input class="form-check-input" aria-label="Select Invoice" id="" name="" type="checkbox" tabindex="">
                  </div>
                </td>
                <td><a @click="offcanvasOpen = true">87109</a>
                <p class="mt-1">08/24/2022</p></td>
                <td><div class="text-sm">Example Company</div></td>
                <td class="align-middle"> <div class="row g-2">
                  <div class="col-md-2">
                    <div class="uploaded-data d-flex">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                    </div>
                  </div>
                </div></td>
                <td class="text-center">17837</td>
                <td class="text-center">$40.00</td>
                <td class="text-center">
                <svg aria-label="Document" width="17" height="21" viewBox="0 0 17 21"><use xlink:href="/css/common-icons.svg#doc"></use></svg>
                </td>
                <td class="text-center">Direct Deposit</td>
                <td><div class="d-flex align-items-center gap-2">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6" cy="6" r="6" fill="#32A35F"/>
                    </svg>
                  <p>Paid</p>
                </div></td>
                <td>
                    <div class="d-flex actions">
                        <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                          <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                          </svg>
                        </a>
                      <a href="#" title="Payment Details" aria-label="Payment Details" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#payInvoice">
                        <svg aria-label="Payment Details" width="19" height="20" viewBox="0 0 19 20"  fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                            </svg>
                      </a>
                      <div class="d-flex actions">
                        <div class="dropdown ac-cstm">
                          <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                            </svg>
                              </a>
                          <!-- <div class="tablediv dropdown-menu">
                            <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                            <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                          </div> -->
                        </div>
                      </div>
                    </div>
                </td>
                </tr>
              <tr role="row" class="odd">
                <td>
                    <div class="form-check">
                    <input class="form-check-input" aria-label="Select Invoice" id="" name="" type="checkbox" tabindex="">
                  </div>
                </td>
                <td><a @click="offcanvasOpen = true">87109</a>
                <p class="mt-1">08/24/2022</p></td>
                <td><div class="text-sm">Example Company</div></td>
                <td class="align-middle"> <div class="row g-2">
                  <div class="col-md-2">
                    <div class="uploaded-data d-flex">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                        <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                    </div>
                  </div>
                </div></td>
                <td class="text-center">17837</td>
                <td class="text-center">$40.00</td>
                <td class="text-center">
                <svg aria-label="Document" width="17" height="21" viewBox="0 0 17 21"><use xlink:href="/css/common-icons.svg#doc"></use></svg>
                </td>
                <td class="text-center">Direct Deposit</td>
                <td><div class="d-flex align-items-center gap-2">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="6" cy="6" r="6" fill="#023DB0"/>
                    </svg>

                  <p>Issued</p>
                </div></td>
                <td>
                    <div class="d-flex actions">
                        <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                          <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                          </svg>
                        </a>
                      <a href="#" title="Payment Details" aria-label="Payment Details" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#payInvoice">
                        <svg aria-label="Payment Details" width="19" height="20" viewBox="0 0 19 20"  fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                            </svg>
                      </a>
                      <div class="d-flex actions">
                        <div class="dropdown ac-cstm">
                          <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                            </svg>
                              </a>
                          <!-- <div class="tablediv dropdown-menu">
                            <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                            <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                          </div> -->
                        </div>
                      </div>
                    </div>
                </td>
                </tr>
                {{-- updated by shanila to loop rows --}}
                @php
                $status = ['1', '2', '3'];
                $statusCode = ['bg-success', 'bg-gray', 'bg-warning'];
                @endphp
                @for ($i = 1; $i <= 7; $i++) <tr role="row"
                class="{{ ($i % 2 == 0) ? 'even' : 'odd' }} {{ $statusCode[array_rand($status)] }}">
                <tr role="row" class="odd">
                  <td>
                      <div class="form-check">
                      <input class="form-check-input" aria-label="Select Invoice" id="" name="" type="checkbox" tabindex="">
                    </div>
                  </td>
                  <td><a @click="offcanvasOpen = true">87109</a>
                  <p class="mt-1">08/24/2022</p></td>
                  <td><div class="text-sm">Example Company</div></td>
                  <td class="align-middle"> <div class="row g-2">
                    <div class="col-md-2">
                      <div class="uploaded-data d-flex">
                          <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                          <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                          <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                          <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="" alt="Recipient Image">
                      </div>
                    </div>
                  </div></td>
                  <td class="text-center">17837</td>
                  <td class="text-center">$40.00</td>
                  <td class="text-center">
                  <svg aria-label="Document" width="17" height="21" viewBox="0 0 17 21"><use xlink:href="/css/common-icons.svg#doc"></use></svg>
                  </td>
                  <td class="text-center">Direct Deposit</td>
                  <td><div class="d-flex align-items-center gap-2">
                    {{-- updated by shanila to add conditon in rows --}}
                    <?php if ($i % 4 == 0): ?>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="6" cy="6" r="6" fill="#D42E2E"/>
                        </svg>
                        <p>Overdue</p>
                    <?php elseif ($i % 4 == 1): ?>
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="6" fill="#32A35F"/>
                      </svg>
                      <p>Paid</p>
                    <?php elseif ($i % 4 == 2): ?>
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="6" fill="#F5D83E"/>
                      </svg>
                      <p>Partial</p>
                    <?php else: ?>
                      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="6" cy="6" r="6" fill="#023DB0"/>
                      </svg>
                      <p>Issued</p>
                    <?php endif; ?>
                    {{-- end updated by shanila --}}
                  </div>
                </td>
                  <td>
                    <div class="d-flex actions">
                        <a href="#" title="back" aria-label="back" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                          <svg aria-label="Revert" class="fill-stroke" width="22" height="20" viewBox="0 0 22 20" fill="none"
                          xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#revert"></use>
                          </svg>
                        </a>
                      <a href="#"  title="Payment Details" aria-label="Payment Details" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#payInvoice">
                        <svg aria-label="Payment Details" width="19" height="20" viewBox="0 0 19 20"  fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                            </svg>
                      </a>
                      <div class="d-flex actions">
                        <div class="dropdown ac-cstm">
                          <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                            </svg>
                              </a>
                          <!-- <div class="tablediv dropdown-menu">
                            <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                            <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                          </div> -->
                        </div>
                      </div>
                    </div>
                  </td>
                  </tr>
                  @endfor
                  {{-- ended updated by shanila --}}
                </tbody>
            </table>
        </div>
        {{-- icon bar start--}}
        <div class="d-flex actions gap-3 justify-content-end mb-2">
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
              <a href="#" title="Payment Details" aria-label="Invoice Details" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <svg aria-label="Payment Details" width="19" height="20" viewBox="0 0 19 20"  fill="none"
                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                    </svg>
              </a>
                <span class="text-sm">
                  Payment Details
                </span>
            </div>
            <div class="d-flex gap-2 align-items-center">
              <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <svg aria-label="Download PDF" width="16" height="20" viewBox="0 0 16 20"  fill="none"
                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#download-file"></use>
                </svg>
                  </a>
                <span class="text-sm">
                    Download PDF
                </span>
            </div>
            </div>
           {{-- icon bar start end--}}
           <div class="col-12 form-actions">
            <button class="btn btn-primary rounded">Resend Invoice</button>
            <button class="btn btn-primary rounded mx-2" data-bs-toggle="modal" data-bs-target="#payInvoice">Record Payment</button>
            <button class="btn btn-primary rounded mx-2">Revert Invoice</button>
          </div>
          </div>
           @include('modals.common.pay-invoice')
</div>
