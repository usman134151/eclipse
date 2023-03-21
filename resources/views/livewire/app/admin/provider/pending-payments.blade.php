<div>
    <div x-data="{ payment :false }">
        <div id="loader-section" class="loader-section" wire:loading>
            <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                <div class="spinner-border" role="status" aria-live="polite">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <div class="content-header row">
            <div class="content-header-left col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">
                            Payment Manager
                        </h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        Provider
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    Payment Manager
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
                <div class="mb-4">
                  <p>Here you can view and manage your providers' remittance payments according to your payment cycle.</p>
                  <div class="mb-4">
                    <img src="/html-prototype/images/temp/img-placeholder-pending-payment.png" class="img-fluid" alt="Responsive image">
                  </div>
                  <!-- BEGIN: Filters -->
                  <div class="bg-muted rounded p-4 mb-1">
                    <div class="d-lg-flex gap-5 align-items-center mb-4">
                      <div class="mb-4 mb-lg-0">
                        <label class="form-label-sm">Search</label>
                        <div class="d-flex gap-2 align-items-center">
                          <div class="position-relative">
                            <input type="text" class="form-control form-control-md is-search" id="search" aria-describedby="search" placeholder="Provider Name or Email">
                            <x-icon name="cancel"/>
                          </div>
                          <button class="btn btn-secondary rounded btn-sm btn-hs-icon">
                            <x-icon name="search"/>
                          </button>
                        </div>
                      </div>
                      <div class="mb-4 mb-lg-0">
                        <label class="form-label-sm">Date Range</label>
                        <div class="d-md-flex gap-2" >    
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dateRange" id="issued">
                                <label class="form-check-label-sm" for="issued">
                                    Issued
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dateRange" id="scheduledPayment">
                                <label class="form-check-label-sm" for="scheduledPayment">
                                    Scheduled_Payment
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dateRange" id="piad">
                                <label class="form-check-label-sm" for="piad">
                                    Piad
                                </label>
                            </div>
                        </div>
                        <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                          <x-icon name="input-calender"/>
                          <input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
                        </div>
                      </div>
                      <div class="mb-4 mb-lg-0">
							<label class="form-label-sm" for="payment-status-column">
								Payment Status
							</label>
							<select class="select2 form-select form-select-md" id="payment-status-column">
								<option>Pending</option>
							</select>
                      </div>

                    </div>
                    <x-advancefilters/>
                  </div>
                  <!-- END: Filters -->
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-2">
                  <div class="d-inline-flex align-items-center gap-4">
                    <div class="d-inline-flex align-items-center gap-4">
                      <label for="show_records_number" class="form-label-sm mb-0">Show</label>
                      <select class="form-select form-select-sm" id="show_records_number">
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                      </select>
                    </div>
                  </div>
                  <div class="dropdown">
                              
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                  <div class="col-12">
                      <div class="table-responsive border mb-4">
                        <table id="" class="table table-fs-md table-hover" aria-label="">
                          <thead>
                            <tr role="row">
                              <th scope="col" class="text-center align-middle">
                                <input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
                              </th>
                              <th scope="col" class="align-middle">Provider</th>
                              <th scope="col">Total pending</th>
                              <th scope="col" class="text-center align-middle">No. of invoices</th>
                              <th scope="col" class="text-center align-middle">Preferred Payment Method</th>
                              <th class="text-center align-middle">Chat</th>
                              <th class="text-center align-middle">
                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M5.875 1L10.75 7.5L5.875 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
                                  <path d="M1 1L5.875 7.5L1 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr role="row" class="odd">
                              <td class="text-center align-middle">
                                <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                              </td>
                              <td class="align-middle">
                                <div class="d-flex gap-2 align-items-center">
                                  <div>
                                    <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-24.jpg" class="rounded-circle" alt="Image">
                                  </div>
                                  <div class="pt-2">
                                    <div class="font-family-secondary leading-none">Wade Dave</div>
                                    <a href="#" class="font-family-secondary"><small>wadedave@gmail.com</small></a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center align-middle">
                                $00.00
                              </td>
                              <td class="text-center align-middle">
                                3
                              </td>
                              <td class="text-center align-middle">
                                Direct Deposit
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <x-icon name="message"/>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="javascript:void(0)" @click="payment = true" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                  <x-icon name="right-gray-arrows"/>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr role="row" class="even">
                              <td class="text-center align-middle">
                                <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                              </td>
                              <td class="align-middle">
                                <div class="d-flex gap-2 align-items-center">
                                  <div>
                                    <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
                                  </div>
                                  <div class="pt-2">
                                    <div class="font-family-secondary leading-none">Dori Griffiths</div>
                                    <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center align-middle">
                                $00.00
                              </td>
                              <td class="text-center align-middle">
                                3
                              </td>
                              <td class="text-center align-middle">
                                Direct Deposit
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <x-icon name="message"/>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="javascript:void(0)" @click="payment = true" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                    <x-icon name="right-gray-arrows"/>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr role="row" class="odd">
                              <td class="text-center align-middle">
                                <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                              </td>
                              <td class="align-middle">
                                <div class="d-flex gap-2 align-items-center">
                                  <div>
                                    <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-24.jpg" class="rounded-circle" alt="Image">
                                  </div>
                                  <div class="pt-2">
                                    <div class="font-family-secondary leading-none">Wade Dave</div>
                                    <a href="#" class="font-family-secondary"><small>wadedave@gmail.com</small></a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center align-middle">
                                $00.00
                              </td>
                              <td class="text-center align-middle">
                                3
                              </td>
                              <td class="text-center align-middle">
                                Direct Deposit
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <x-icon name="message"/>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="javascript:void(0)" @click="payment = true" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                    <x-icon name="right-gray-arrows"/>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr role="row" class="even">
                              <td class="text-center align-middle">
                                <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                              </td>
                              <td class="align-middle">
                                <div class="d-flex gap-2 align-items-center">
                                  <div>
                                    <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
                                  </div>
                                  <div class="pt-2">
                                    <div class="font-family-secondary leading-none">Dori Griffiths</div>
                                    <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center align-middle">
                                $00.00
                              </td>
                              <td class="text-center align-middle">
                                3
                              </td>
                              <td class="text-center align-middle">
                                Direct Deposit
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <x-icon name="message"/>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="javascript:void(0)" @click="payment = true" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                    <x-icon name="right-gray-arrows"/>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr role="row" class="odd">
                              <td class="text-center align-middle">
                                <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                              </td>
                              <td class="align-middle">
                                <div class="d-flex gap-2 align-items-center">
                                  <div>
                                    <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
                                  </div>
                                  <div class="pt-2">
                                    <div class="font-family-secondary leading-none">Dori Griffiths</div>
                                    <a href="#" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center align-middle">
                                $00.00
                              </td>
                              <td class="text-center align-middle">
                                3
                              </td>
                              <td class="text-center align-middle">
                                Direct Deposit
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <x-icon name="message"/>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="javascript:void(0)" @click="payment = true" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                    <x-icon name="right-gray-arrows"/>
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <tr role="row" class="even">
                              <td class="text-center align-middle">
                                <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                              </td>
                              <td class="align-middle">
                                <div class="d-flex gap-2 align-items-center">
                                  <div>
                                    <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-24.jpg" class="rounded-circle" alt="Image">
                                  </div>
                                  <div class="pt-2">
                                    <div class="font-family-secondary leading-none">Wade Dave</div>
                                    <a href="#" class="font-family-secondary"><small>wadedave@gmail.com</small></a>
                                  </div>
                                </div>
                              </td>
                              <td class="text-center align-middle">
                                $00.00
                              </td>
                              <td class="text-center align-middle">
                                3
                              </td>
                              <td class="text-center align-middle">
                                Direct Deposit
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <x-icon name="message"/>
                                  </a>
                                </div>
                              </td>
                              <td class="align-middle">
                                <div class="d-flex actions justify-content-center">
                                  <a href="javascript:void(0)" @click="payment = true" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
                                    <x-icon name="right-gray-arrows"/>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                  </div>
                </div>
                <!-- Hoverable rows end -->
                <div class="d-flex flex-column flex-md-row justify-content-between">
                  <div>
                    <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100 entries</p>
                  </div>
                  <nav aria-label="Page Navigation">
                    <ul class="pagination justify-content-start justify-content-lg-end">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item active"><a class="page-link" href="#">4</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="justify-content-center d-flex mb-2">
                  <div class="form-check mx-auto">
                    <input class="form-check-input" type="checkbox" value="" id="ExcludeNotification">
                    <label class="form-check-label" for="ExcludeNotification">
                      Exclude Notification
                    </label>
                  </div>
                </div>
                <div class="row justify-content-center mb-4 ">
                  <div class="d-flex gap-3 col-lg-8 form-actions flex-lg-row flex-column">
                    <a href="#" class="btn btn-primary rounded w-100">Revert Selected Remittances</a>
                    <a href="#" class="btn btn-primary rounded w-100">Mark Selected Remittances as Paid</a>
                  </div>
                </div>
              </div>
              <!-- Basic Floating Label Form section end -->
            </div>
            <!-- ...card-body... -->
            <!-- END: Steps -->
          </div>
        @include('panels.remittance.payment')

    {{-- /Remittance Deatil - Modal --}}
        @include('modals.remittance-details')
    {{-- /Remittance Deatil - Modal --}}
       
    {{-- Revert Back - Modal --}}
        @include('modals.common.revert-back')
    {{-- Revert Back - Modal --}}
    @include('modals.mark-as-paid')
    </div>
</div>
