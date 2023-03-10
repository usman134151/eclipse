<x-off-canvas show="invoicesDetails" :allowBackdrop="false" size="fullscreen">
	<x-slot name="title">Invoices Details</x-slot>

    <div class="row mb-4 mt-3">
        <div class="col-md-4">
           <span class="fw-semibold"> Invoice ID:</span> INP-73-23-0001
        </div>
        <div class="col-md-4">
            <span class="fw-semibold"> Creation Date:</span> 22/02/2023
        </div>
        <div class="col-md-4">
            <span class="fw-semibold"> Due Date:</span> 22/02/2023
        </div>
    </div>
    <div class="dropdown mb-4">
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
    <div class="table-responsive">
        <table id="remittances" class="table table-hover" aria-label="Remittances">
            <thead>
                <tr role="row">
                    <th scope="col">Booking ID</th>
                    <th scope="col">Date & Time</th>
                    <th scope="col">Service</th>
                    <th scope="col">Paid At</th>
                    <th scope="col">Service type</th>
                    <th scope="col">Action</th>
              </tr>
            </thead>
              <tbody>
                <tr role="row" class="odd">
                  <td>
                    <div>100995-6</div>
                  </td>
                  <td>
                    <div>11/23/2022</div>
                    <div class="text-sm">09:00 PM To 4:18 PM</div>
                  </td>
                  <td>
                    American Sign Language Interpreting
                  </td>
                  <td>
                    In-Person
                  </td>
                  <td>
                    <div class="text-sm">$100.00</div>
                    <div class="text-primary text-sm">Additional Charges</div>
                    <div class="text-sm">Fuel: &10.00</div>
                    <div class="text-sm">Fuel: &10.00</div>
                  </td>
                  <td>
                    <div class="d-flex actions"> 
                      <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                        <svg class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                        </svg>
                      </a>     
                    </div>
                  </td>
                </tr>
                <tr role="row" class="even">
                    <td>
                      <div>100995-6</div>
                    </td>
                    <td>
                      <div>11/23/2022</div>
                      <div class="text-sm">09:00 PM To 4:18 PM</div>
                    </td>
                    <td>
                      American Sign Language Interpreting
                    </td>
                    <td>
                      In-Person
                    </td>
                    <td>
                      <div class="text-sm">$100.00</div>
                      <div class="text-primary text-sm">Additional Charges</div>
                      <div class="text-sm">Fuel: &10.00</div>
                      <div class="text-sm">Fuel: &10.00</div>
                    </td>
                    <td>
                      <div class="d-flex actions"> 
                        <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                          <svg class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                          </svg>
                        </a>     
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="odd">
                    <td>
                      <div>100995-6</div>
                    </td>
                    <td>
                      <div>11/23/2022</div>
                      <div class="text-sm">09:00 PM To 4:18 PM</div>
                    </td>
                    <td>
                      American Sign Language Interpreting
                    </td>
                    <td>
                      In-Person
                    </td>
                    <td>
                      <div class="text-sm">$100.00</div>
                      <div class="text-primary text-sm">Additional Charges</div>
                      <div class="text-sm">Fuel: &10.00</div>
                      <div class="text-sm">Fuel: &10.00</div>
                    </td>
                    <td>
                      <div class="d-flex actions"> 
                        <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                          <svg class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                              xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                          </svg>
                        </a>     
                      </div>
                    </td>
                  </tr>
                  <tr role="row" class="even">
                      <td>
                        <div>100995-6</div>
                      </td>
                      <td>
                        <div>11/23/2022</div>
                        <div class="text-sm">09:00 PM To 4:18 PM</div>
                      </td>
                      <td>
                        American Sign Language Interpreting
                      </td>
                      <td>
                        In-Person
                      </td>
                      <td>
                        <div class="text-sm">$100.00</div>
                        <div class="text-primary text-sm">Additional Charges</div>
                        <div class="text-sm">Fuel: &10.00</div>
                        <div class="text-sm">Fuel: &10.00</div>
                      </td>
                      <td>
                        <div class="d-flex actions"> 
                          <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                            </svg>
                          </a>     
                        </div>
                      </td>
                    </tr>
                    <tr role="row" class="odd">
                        <td>
                          <div>100995-6</div>
                        </td>
                        <td>
                          <div>11/23/2022</div>
                          <div class="text-sm">09:00 PM To 4:18 PM</div>
                        </td>
                        <td>
                          American Sign Language Interpreting
                        </td>
                        <td>
                          In-Person
                        </td>
                        <td>
                          <div class="text-sm">$100.00</div>
                          <div class="text-primary text-sm">Additional Charges</div>
                          <div class="text-sm">Fuel: &10.00</div>
                          <div class="text-sm">Fuel: &10.00</div>
                        </td>
                        <td>
                          <div class="d-flex actions"> 
                            <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                              <svg class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                              </svg>
                            </a>     
                          </div>
                        </td>
                      </tr>
                      <tr role="row" class="even">
                          <td>
                            <div>100995-6</div>
                          </td>
                          <td>
                            <div>11/23/2022</div>
                            <div class="text-sm">09:00 PM To 4:18 PM</div>
                          </td>
                          <td>
                            American Sign Language Interpreting
                          </td>
                          <td>
                            In-Person
                          </td>
                          <td>
                            <div class="text-sm">$100.00</div>
                            <div class="text-primary text-sm">Additional Charges</div>
                            <div class="text-sm">Fuel: &10.00</div>
                            <div class="text-sm">Fuel: &10.00</div>
                          </td>
                          <td>
                            <div class="d-flex actions"> 
                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                </svg>
                              </a>     
                            </div>
                          </td>
                        </tr> <tr role="row" class="odd">
                            <td>
                              <div>100995-6</div>
                            </td>
                            <td>
                              <div>11/23/2022</div>
                              <div class="text-sm">09:00 PM To 4:18 PM</div>
                            </td>
                            <td>
                              American Sign Language Interpreting
                            </td>
                            <td>
                              In-Person
                            </td>
                            <td>
                              <div class="text-sm">$100.00</div>
                              <div class="text-primary text-sm">Additional Charges</div>
                              <div class="text-sm">Fuel: &10.00</div>
                              <div class="text-sm">Fuel: &10.00</div>
                            </td>
                            <td>
                              <div class="d-flex actions"> 
                                <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                  </svg>
                                </a>     
                              </div>
                            </td>
                          </tr>
                          <tr role="row" class="even">
                              <td>
                                <div>100995-6</div>
                              </td>
                              <td>
                                <div>11/23/2022</div>
                                <div class="text-sm">09:00 PM To 4:18 PM</div>
                              </td>
                              <td>
                                American Sign Language Interpreting
                              </td>
                              <td>
                                In-Person
                              </td>
                              <td>
                                <div class="text-sm">$100.00</div>
                                <div class="text-primary text-sm">Additional Charges</div>
                                <div class="text-sm">Fuel: &10.00</div>
                                <div class="text-sm">Fuel: &10.00</div>
                              </td>
                              <td>
                                <div class="d-flex actions"> 
                                  <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                    <svg class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                    </svg>
                                  </a>     
                                </div>
                              </td>
                            </tr>
                  </tbody>
              </table>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <button class="btn btn-primary rounded">Generate Invoice</button>
    </div>
</x-off-canvas>