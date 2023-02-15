<div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="content-header-title float-start mb-0">Invoice Generator</h1>
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
                    <a href="http://127.0.0.1:8000">
                      Customers
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
      <div class="content-body">
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                      <div class="row  mb-4 mt-3">
                        <div class="col-md-12 mb-md-2">
                          <div class="row">
                            <p>Here you can create and issue invoices to customers for services you have delivered.</p>                        
                        </div>
                        </div>    
                        </div>

                        <div class="col-md-12 d-flex col-12 gap-4 mb-4">
                            <!-- Company -->
                            <div class="col-md-3 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="company-column">Company</label>
                                <select class="select2 form-select" id="company-column">
                                  <option>Select Company</option>
                                  <option>Companey-1</option>
                                  <option>Comapaney-2</option>
                                </select>
                              </div>
                            </div>
                            <!-- Department -->
                            <div class="col-md-3 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="department-column">Department</label>
                                <select class="select2 form-select" id="department-column">
                                  <option>Select Department</option>
                                  <option>Department-1</option>
                                  <option>Department-2</option>
                                </select>
                              </div>
                            </div>
                            <!-- Billing Manager -->
                            <div class="col-md-3 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="Billing-Manager-column">Billing Manager</label>
                                <select class="select2 form-select" id="Billing-Manager-column">
                                  <option>Select Billing Manager</option>
                                  <option>Department-1</option>
                                  <option>Department-2</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        <div class="col-md-12 d-flex col-12 gap-4">
                            <!-- Accommodation -->
                            <div class="col-md-3 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="Accommodation-column">Accommodation</label>
                                <select class="select2 form-select" id="Accommodation-column">
                                  <option>Select Accommodation</option>
                                  <option>Accommodation-1</option>
                                  <option>Accommodation-2</option>
                                </select>
                              </div>
                            </div>
                            <!-- Department -->
                            <div class="col-md-3 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="Service-column">Service</label>
                                <select class="select2 form-select" id="Service-column">
                                  <option>Select Service</option>
                                  <option>Service-1</option>
                                  <option>Service-2</option>
                                </select>
                              </div>
                            </div>
                            <!-- Date Range -->
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="set_set_date">Date Range</label>
                                <div class="position-relative">
                                  <input type="" name="" class="form-control js-single-date" placeholder="Select Date" id="">
                                  <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row mb-4">
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
                        <div class="d-flex justify-content-between mb-2">
                          <div class="d-inline-flex align-items-center gap-4">
                            <label for="show_records_number" class="form-label">Show</label>
                            <select class="form-select" id="show_records_number">
                              <option>10</option>
                              <option>15</option>
                              <option>20</option>
                              <option>25</option>
                            </select>
                          </div>
                          <div class="d-inline-flex align-items-center gap-4">
                            <a href="#" class="btn btn-primary rounded "><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-2">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                              </svg>
                              Create Invoice</a>
                             </div>
                        </div>
                        <div class="table-responsive">
                            <table id="remittances" class="table table-hover" aria-label="Remittance">
                              <thead>
                                  <tr role="row">
                                      <th scope="col">
                                        <div class="form-check">
                                            <input class="form-check-input" id="" name="" type="checkbox" tabindex="" aria-label="checkbox">
                                          </div>
                                      </th>
                                      <th scope="col">BOOKING ID</th>
                                      <th scope="col">Accommodation</th>   
                                      <th scope="col">No. of Providers</th>
                                      <th scope="col">Total Additional Charges</th>
                                      <th scope="col">Total Service Rate</th>
                                      <th scope="col">Booking Total</th>
                                      <th class="text-center" scope="col">Action</th>   

                                </tr>
                              </thead>
                                <tbody>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                    <p class="mt-1">08/24/2022 <br>
                                      9:59 AM to 4:22 PM</p></td>
                                    <td>
                                      <p class="mb-1"> Shelby Sign Language</p>
                                      <div class="row mb-1">
                                        <div class="col-12 d-flex gap-2">
                                          <div class="col">Service:</div>
                                        <div class="col-12">Language interpreting</div></div>
                                        
                                      </div>
                                      <div class="row mb-1">
                                        <div class="col-12 d-flex gap-2">
                                          <div class="col">Specialization:</div>
                                        <div class="col-12"> Closed-Captioning</div></div>
                                        
                                      </div>
                                </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                    <p class="mt-1">08/24/2022 <br>
                                      9:59 AM to 4:22 PM</p>
                                    </td>
                                      <td>
                                        <p class="mb-1"> Shelby Sign Language</p>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Service:</div>
                                          <div class="col-12">Language interpreting</div></div>
                                          
                                        </div>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Specialization:</div>
                                          <div class="col-12"> Closed-Captioning</div></div>
                                          
                                        </div>
                                  </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                      <p class="mt-1">08/24/2022 <br>
                                        9:59 AM to 4:22 PM</p>
                                      </td>
                                      <td>
                                        <p class="mb-1"> Shelby Sign Language</p>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Service:</div>
                                          <div class="col-12">Language interpreting</div></div>
                                          
                                        </div>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Specialization:</div>
                                          <div class="col-12"> Closed-Captioning</div></div>
                                          
                                        </div>
                                  </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                    <p class="mt-1">08/24/2022 <br>
                                      9:59 AM to 4:22 PM</p></td>
                                      <td>
                                        <p class="mb-1"> Shelby Sign Language</p>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Service:</div>
                                          <div class="col-12">Language interpreting</div></div>
                                          
                                        </div>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Specialization:</div>
                                          <div class="col-12"> Closed-Captioning</div></div>
                                          
                                        </div>
                                  </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                    <p class="mt-1">08/24/2022 <br>
                                      9:59 AM to 4:22 PM</p></td>
                                      <td>
                                        <p class="mb-1"> Shelby Sign Language</p>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Service:</div>
                                          <div class="col-12">Language interpreting</div></div>
                                          
                                        </div>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Specialization:</div>
                                          <div class="col-12"> Closed-Captioning</div></div>
                                          
                                        </div>
                                  </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                    <p class="mt-1">08/24/2022 <br>
                                      9:59 AM to 4:22 PM</p></td>
                                      <td>
                                        <p class="mb-1"> Shelby Sign Language</p>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Service:</div>
                                          <div class="col-12">Language interpreting</div></div>
                                          
                                        </div>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Specialization:</div>
                                          <div class="col-12"> Closed-Captioning</div></div>
                                          
                                        </div>
                                  </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                    <p class="mt-1">08/24/2022 <br>
                                      9:59 AM to 4:22 PM</p></td>
                                      <td>
                                        <p class="mb-1"> Shelby Sign Language</p>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Service:</div>
                                          <div class="col-12">Language interpreting</div></div>
                                          
                                        </div>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Specialization:</div>
                                          <div class="col-12"> Closed-Captioning</div></div>
                                          
                                        </div>
                                  </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                    <p class="mt-1">08/24/2022 <br>
                                      9:59 AM to 4:22 PM</p></td>
                                      <td>
                                        <p class="mb-1"> Shelby Sign Language</p>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Service:</div>
                                          <div class="col-12">Language interpreting</div></div>
                                          
                                        </div>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Specialization:</div>
                                          <div class="col-12"> Closed-Captioning</div></div>
                                          
                                        </div>
                                  </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                    <p class="mt-1">08/24/2022 <br>
                                      9:59 AM to 4:22 PM</p></td>
                                      <td>
                                        <p class="mb-1"> Shelby Sign Language</p>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Service:</div>
                                          <div class="col-12">Language interpreting</div></div>
                                          
                                        </div>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Specialization:</div>
                                          <div class="col-12"> Closed-Captioning</div></div>
                                          
                                        </div>
                                  </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                  <tr role="row" class="odd">
                                    <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="List Checkbox" id="" name="" type="checkbox" tabindex="">
                                      </div>
                                    </td>
                                    <td><a @click="offcanvasOpen = true">100995-6</a>
                                    <p class="mt-1">08/24/2022 <br>
                                      9:59 AM to 4:22 PM</p></td>
                                      <td>
                                        <p class="mb-1"> Shelby Sign Language</p>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Service:</div>
                                          <div class="col-12">Language interpreting</div></div>
                                          
                                        </div>
                                        <div class="row mb-1">
                                          <div class="col-12 d-flex gap-2">
                                            <div class="col">Specialization:</div>
                                          <div class="col-12"> Closed-Captioning</div></div>
                                          
                                        </div>
                                  </td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td class="text-center">$00.00</td>
                                    <td>
                                      <div class="d-flex actions">
                                        <a href="#" title="Edit Department" aria-label="Edit Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <a href="#" title="View Department" aria-label="View Department" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                                            <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                                            <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                                          </svg>
                                        </a>
                                        <div class="d-flex actions">
                                          <div class="dropdown ac-cstm">
                                            <a href="javascript:void(0)" title="More Options" aria-label="More Options" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              </svg>
                                            </a>
                                            <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Edit</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Deactivate</a>
                                             
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    </tr>
                                    
                                             
                                    </tbody>
                                </table>
                            </div>
                      <div class="d-flex justify-content-between mt-4">
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
                  </div>
                
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Floating Label Form section end -->
      </div>
</div>
