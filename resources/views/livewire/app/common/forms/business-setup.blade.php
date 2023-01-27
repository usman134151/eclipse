<div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h1 class="content-header-title float-start mb-0">Business Setup</h1>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="">
                      Home
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0)">
                      Settings
                      </a>
                    </li>
                    <li class="breadcrumb-item">
                      Business Setup
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
                    <!-- BEGIN: Steps -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="configuration-setting-tab" data-bs-toggle="tab" data-bs-target="#configuration-setting" type="button" role="tab" aria-controls="configuration-setting" aria-selected="true"><span class="number">1</span> Configuration Setting</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="business-hours-tab" data-bs-toggle="tab" data-bs-target="#business-hours" type="button" role="tab" aria-controls="business-hours" aria-selected="false"><span class="number">2</span> Business Hours</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="payments-tab" data-bs-toggle="tab" data-bs-target="#payments" type="button" role="tab" aria-controls="payments" aria-selected="false"><span class="number">3</span> Payments</button>
                      </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane fade" id="configuration-setting" role="tabpanel" aria-labelledby="configuration-setting-tab" tabindex="0">
                          <div class="row">
                            <div class="col-lg-12">
                                <h2>Configuration Setting</h2>
                                <div class="row">
                                  <div class="col-lg-6 mb-4">
                                    <h3>Choose Portal Default Colours</h3>
                                    <div class="row gap-0 row-gap-3">
                                      <div class="choose-portal-colors d-lg-flex gap-3 align-items-center">
                                        <label>Default Colour</label>
                                        <div class="choosen-color choosen-default-color"></div>
                                        <a href="" class="btn btn-primary btn-sm rounded">Choose Colour</a>
                                      </div>
                                      <div class="choose-portal-colors d-lg-flex gap-3 align-items-center">
                                          <label>Foreground Color</label>
                                          <div class="choosen-color choosen-foreground-color"></div>
                                          <a href="" class="btn btn-primary btn-sm rounded">Choose Colour</a>
                                       </div>
                                   </div>
                                  </div>
                                </div>
                            
                            <div class="row">
                              <div class="col-lg-6 mb-4">
                                <h3>Choose URL for Users to Access the Portal</h3>
                                  <div class="d-lg-flex gap-3 align-items-center">
                                    <input aria-label="Sub Domain Name for URL" type="" name="" class="form-control w-auto" placeholder="Name">
                                    <label>.eclipsescheduling.com</label>
                                    <div class="option">
                                        <div>
                                            <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 10L8.66667 17L22 2" stroke="#15974F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Available
                                        </div>
                                    </div>
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 mb-4">
                                  <h3>Assign Email to Send Notifications</h3>
                                  <label class="form-label" for="EmailAddressSendNotifications">Email Address</label>
                                    <input
                                      type="text"
                                      id="EmailAddressSendNotifications"
                                      class="form-control"
                                      name="EmailAddressSendNotifications"
                                      placeholder="Enter Email"
                                      />
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 mb-4">
                                  <h3>Assign Email to Receive Customer Responses</h3>
                                  <label class="form-label" for="EmailAddressCustomerResponses">Email Address</label>
                                    <input
                                      type="text"
                                      id="EmailAddressCustomerResponses"
                                      class="form-control"
                                      name="EmailAddressCustomerResponses"
                                      placeholder="Enter Email"
                                      />
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 mb-4">
                                  <h3>Announcements & Communications</h3>
                                  <label class="form-label" for="AnnouncementsCommunications">Message</label>
                                    <textarea class="form-control" rows="3" cols="3" placeholder="Enter Message" id="AnnouncementsCommunications"></textarea>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-8 mb-4 d-lg-flex gap-3">
                                  <div class="col-lg-4">
                                      <h3>Audience:</h3>
                                      <div class="form-check">
                                        <input class="form-check-input" id="DisplayToProviders" name="DisplayToProviders" type="checkbox" tabindex="" />
                                        <label class="form-check-label" for="DisplayToProviders"> Display to Providers</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" id="DisplayToCustomers" name="DisplayToCustomers" type="checkbox" tabindex="" />
                                        <label class="form-check-label" for="DisplayToCustomers"> Display to Customers</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" id="DisplayToAdminUsers" name="DisplayToAdminUsers" type="checkbox" tabindex="" />
                                        <label class="form-check-label" for="DisplayToAdminUsers"> Display to Admin-users</label>
                                      </div>
                                  </div>
                                  <div class="col-lg-4">
                                      <h3>Display:</h3>
                                      <div class="form-check">
                                        <input class="form-check-input" id="DisplayOnLoginScreen" name="DisplayOnLoginScreen" type="checkbox" tabindex="" />
                                        <label class="form-check-label" for="DisplayOnLoginScreen"> Display On Log-in Screen</label>
                                      </div>
                                      <div class="form-check">
                                        <input class="form-check-input" id="DisplayOnDashboard" name="DisplayOnDashboard" type="checkbox" tabindex="" />
                                        <label class="form-check-label" for="DisplayOnDashboard"> Display On Dashboard</label>
                                      </div>
                                  </div>
                                  <div class="col-lg-4">
                                      <h3>Duration:</h3>
                                      <label class="form-label-sm" for="Days"> Days</label>
                                      <input class="form-control text-center" id="Days" name="DisplayToProviders" value="5" type="" tabindex="" />
                                  </div>
                              </div>
                              <div class="col-lg-8">
                                <a href="" class="btn btn-primary btn-sm rounded">Apply</a>
                              </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-12 justify-content-center form-actions d-flex">
                            <button type="button" class="btn btn-outline-dark rounded mx-2">CANCEL</button>
                            <button type="submit" class="btn btn-primary rounded">NEXT</button>
                        </div>
                        </div>
                      
                      <div class="tab-pane fade show active" id="business-hours" role="tabpanel" aria-labelledby="business-hours-tab" tabindex="0">
                        <div class="row mb-4" >
                            <div class="col-lg-12">
                              <h2>Business Hours Setup</h2>
                              <p>Your set hours determine when "Business hours" and "After-hours" rates are in effect for customer billing and Provider payroll and prevents services from being scheduled during your "closed" hours.You can also set the times which you are closed and not providing services; this will restrict customers from scheduling.</p>
                          </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <h3>Time Configuration</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="Set_Business_Time_Zone" class="form-label">Set Business Time Zone</label>
                                        <input id="Set_Business_Time_Zone" type="" name="" class="form-control" placeholder="Select Time Zone">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Set Time Format</label>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="Hrs" id="12Hrs1" checked>
                                          <label class="form-check-label" for="12Hrs1">
                                            12 Hrs
                                          </label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" name="Hrs" id="24Hrs">
                                          <label class="form-check-label" for="24Hrs">
                                            24 Hrs
                                          </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <h3>Add Hours Slot In Schedule</h3>
                                <div class="row mb-2">
                                    <div class="col-lg-6">
                                        <label class="form-label">Type Of Slot</label>
                                        <div >    
                                            <div class="form-check form-check-inline ">
                                              <input class="form-check-input" type="radio" name="HoursSlot" id="BusinessHours" checked>
                                              <label class="form-check-label" for="BusinessHours">
                                                Business Hours
                                              </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" name="HoursSlot" id="AfterBusinessHours">
                                              <label class="form-check-label" for="AfterBusinessHours">
                                                After Business Hours
                                              </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <label class="form-label">Select Days & Time</label>
                                        <div class="d-lg-flex gap-3 align-items-center mb-3">
                                            <input aria-label="Select Day" type="" name="" class="form-control w-auto js-select-day" placeholder="Select Day">
                                            <label class="form-label-sm">Choose Time</label>
                                            <div class="input-group w-auto">
                                              <input type="text" class="form-control w-auto js-timepciker-start-time btn btn-primary btn-sm rounded" placeholder="Start Time" aria-label="Start Time" aria-describedby="start-time">
                                              
                                            </div>
                                            <div class="input-group w-auto">
                                              <input type="text" class="form-control w-auto js-timepciker-end-time btn btn-primary btn-sm rounded" placeholder="End Time" aria-label="End Time" aria-describedby="end-time">
                                             
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-sm rounded">Submit</button>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="d-lg-flex justify-content-between mb-4">
                                            <h3 class="mb-lg-0">Business Schedule</h3>
                                            <div class="helping-labels d-flex gap-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="label-color bg-success"></span>
                                                    Business Hours
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="label-color bg-warning"></span>
                                                    After Business Hours
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <table class="table table-bordered table-schedule">
                                                <thead>
                                                    <th>
                                                        <div class="day">
                                                            Monday
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <label  class="form-check-label" >ON</label>
                                                            <input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="monday">
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="day">
                                                            Tuesday
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label">ON</label>
                                                            <input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="tuesday">
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="day">
                                                            Wednesday
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label">ON</label>
                                                            <input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="wednesday">
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="day">
                                                            Thursday
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label">ON</label>
                                                            <input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="thursday">
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="day">
                                                            Friday
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label">ON</label>
                                                            <input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="friday">
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="day">
                                                            Saturday
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label" >ON</label>
                                                            <input checked class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="saturday">
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="day">
                                                            Sunday
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <label class="form-check-label" >OFF</label>
                                                            <input class="form-check-input" aria-label="Toggle Business Schedule Status" type="checkbox" role="switch" id="sunday">
                                                        </div>
                                                    </th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="time-slot mb-3 bg-success text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                            <div class="time-slot bg-warning text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="time-slot mb-3 bg-success text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                            <div class="time-slot bg-warning text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="time-slot mb-3 bg-success text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                            <div class="time-slot bg-warning text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="time-slot mb-3 bg-success text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                            <div class="time-slot bg-warning text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="time-slot mb-3 bg-success text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                            <div class="time-slot bg-warning text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="time-slot mb-3 bg-success text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                            <div class="time-slot bg-warning text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="time-slot mb-3 bg-success text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                            <div class="time-slot bg-warning text-white">
                                                                09 : 00 AM To 06 : 00 PM
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <h3>Add Holidays / Days Closed</h3>
                                        <div class="d-lg-flex gap-3 mb-3">
                                            <div>
                                                <label for="select-days" class="form-label">Select Days / Holidays </label>
                                                <div class="position-relative">
                                                    <input type="" id="select-days" class="form-control w-auto js-single-date" placeholder="MM/DD/YYYY" name="selectHolidays">
                                                    <svg class="icon-date cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="form-label">Repeat Holiday</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="yearly" name="yearly" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="yearly"> Yearly</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-sm rounded">Submit</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <h3>Listed Holidays</h3>
                                        <table class="table table-hover">
                                            <thead>
                                                <th scope="col">DATE</th>
                                                <th scope="col">DAY</th>
                                                <th scope="col">ACTION</th>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td>
                                                        12/25/2022
                                                    </td>
                                                    <td>
                                                        Tuesday
                                                    </td>
                                                    <td>
                                                        <a href="" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.4 4.2H12.6C12.6 3.64305 12.3787 3.1089 11.9849 2.71508C11.5911 2.32125 11.057 2.1 10.5 2.1C9.94304 2.1 9.4089 2.32125 9.01508 2.71508C8.62125 3.1089 8.4 3.64305 8.4 4.2ZM6.3 4.2C6.3 3.08609 6.7425 2.0178 7.53015 1.23015C8.3178 0.442499 9.38609 0 10.5 0C11.6139 0 12.6822 0.442499 13.4698 1.23015C14.2575 2.0178 14.7 3.08609 14.7 4.2H19.95C20.2285 4.2 20.4955 4.31062 20.6925 4.50754C20.8894 4.70445 21 4.97152 21 5.25C21 5.52848 20.8894 5.79555 20.6925 5.99246C20.4955 6.18937 20.2285 6.3 19.95 6.3H19.0239L18.0936 17.157C18.0042 18.2054 17.5245 19.182 16.7494 19.8937C15.9744 20.6053 14.9605 21.0001 13.9083 21H7.0917C6.0395 21.0001 5.02559 20.6053 4.25056 19.8937C3.47552 19.182 2.99584 18.2054 2.9064 17.157L1.9761 6.3H1.05C0.771523 6.3 0.504451 6.18937 0.307538 5.99246C0.110625 5.79555 0 5.52848 0 5.25C0 4.97152 0.110625 4.70445 0.307538 4.50754C0.504451 4.31062 0.771523 4.2 1.05 4.2H6.3ZM13.65 10.5C13.65 10.2215 13.5394 9.95445 13.3425 9.75754C13.1455 9.56062 12.8785 9.45 12.6 9.45C12.3215 9.45 12.0545 9.56062 11.8575 9.75754C11.6606 9.95445 11.55 10.2215 11.55 10.5V14.7C11.55 14.9785 11.6606 15.2455 11.8575 15.4425C12.0545 15.6394 12.3215 15.75 12.6 15.75C12.8785 15.75 13.1455 15.6394 13.3425 15.4425C13.5394 15.2455 13.65 14.9785 13.65 14.7V10.5ZM8.4 9.45C8.67848 9.45 8.94555 9.56062 9.14246 9.75754C9.33937 9.95445 9.45 10.2215 9.45 10.5V14.7C9.45 14.9785 9.33937 15.2455 9.14246 15.4425C8.94555 15.6394 8.67848 15.75 8.4 15.75C8.12152 15.75 7.85445 15.6394 7.65754 15.4425C7.46062 15.2455 7.35 14.9785 7.35 14.7V10.5C7.35 10.2215 7.46062 9.95445 7.65754 9.75754C7.85445 9.56062 8.12152 9.45 8.4 9.45ZM4.998 16.9785C5.04273 17.5029 5.28273 17.9913 5.67046 18.3472C6.0582 18.703 6.56542 18.9003 7.0917 18.9H13.9083C14.4342 18.8998 14.9409 18.7023 15.3282 18.3465C15.7155 17.9907 15.9552 17.5025 15.9999 16.9785L16.9155 6.3H4.0845L5.0001 16.9785H4.998Z" fill="black"/>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td>
                                                        12/25/2022
                                                    </td>
                                                    <td>
                                                        Tuesday
                                                    </td>
                                                    <td>
                                                        <a href="" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.4 4.2H12.6C12.6 3.64305 12.3787 3.1089 11.9849 2.71508C11.5911 2.32125 11.057 2.1 10.5 2.1C9.94304 2.1 9.4089 2.32125 9.01508 2.71508C8.62125 3.1089 8.4 3.64305 8.4 4.2ZM6.3 4.2C6.3 3.08609 6.7425 2.0178 7.53015 1.23015C8.3178 0.442499 9.38609 0 10.5 0C11.6139 0 12.6822 0.442499 13.4698 1.23015C14.2575 2.0178 14.7 3.08609 14.7 4.2H19.95C20.2285 4.2 20.4955 4.31062 20.6925 4.50754C20.8894 4.70445 21 4.97152 21 5.25C21 5.52848 20.8894 5.79555 20.6925 5.99246C20.4955 6.18937 20.2285 6.3 19.95 6.3H19.0239L18.0936 17.157C18.0042 18.2054 17.5245 19.182 16.7494 19.8937C15.9744 20.6053 14.9605 21.0001 13.9083 21H7.0917C6.0395 21.0001 5.02559 20.6053 4.25056 19.8937C3.47552 19.182 2.99584 18.2054 2.9064 17.157L1.9761 6.3H1.05C0.771523 6.3 0.504451 6.18937 0.307538 5.99246C0.110625 5.79555 0 5.52848 0 5.25C0 4.97152 0.110625 4.70445 0.307538 4.50754C0.504451 4.31062 0.771523 4.2 1.05 4.2H6.3ZM13.65 10.5C13.65 10.2215 13.5394 9.95445 13.3425 9.75754C13.1455 9.56062 12.8785 9.45 12.6 9.45C12.3215 9.45 12.0545 9.56062 11.8575 9.75754C11.6606 9.95445 11.55 10.2215 11.55 10.5V14.7C11.55 14.9785 11.6606 15.2455 11.8575 15.4425C12.0545 15.6394 12.3215 15.75 12.6 15.75C12.8785 15.75 13.1455 15.6394 13.3425 15.4425C13.5394 15.2455 13.65 14.9785 13.65 14.7V10.5ZM8.4 9.45C8.67848 9.45 8.94555 9.56062 9.14246 9.75754C9.33937 9.95445 9.45 10.2215 9.45 10.5V14.7C9.45 14.9785 9.33937 15.2455 9.14246 15.4425C8.94555 15.6394 8.67848 15.75 8.4 15.75C8.12152 15.75 7.85445 15.6394 7.65754 15.4425C7.46062 15.2455 7.35 14.9785 7.35 14.7V10.5C7.35 10.2215 7.46062 9.95445 7.65754 9.75754C7.85445 9.56062 8.12152 9.45 8.4 9.45ZM4.998 16.9785C5.04273 17.5029 5.28273 17.9913 5.67046 18.3472C6.0582 18.703 6.56542 18.9003 7.0917 18.9H13.9083C14.4342 18.8998 14.9409 18.7023 15.3282 18.3465C15.7155 17.9907 15.9552 17.5025 15.9999 16.9785L16.9155 6.3H4.0845L5.0001 16.9785H4.998Z" fill="black"/>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>
                                                        12/25/2022
                                                    </td>
                                                    <td>
                                                        Tuesday
                                                    </td>
                                                    <td>
                                                        <a href="" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.4 4.2H12.6C12.6 3.64305 12.3787 3.1089 11.9849 2.71508C11.5911 2.32125 11.057 2.1 10.5 2.1C9.94304 2.1 9.4089 2.32125 9.01508 2.71508C8.62125 3.1089 8.4 3.64305 8.4 4.2ZM6.3 4.2C6.3 3.08609 6.7425 2.0178 7.53015 1.23015C8.3178 0.442499 9.38609 0 10.5 0C11.6139 0 12.6822 0.442499 13.4698 1.23015C14.2575 2.0178 14.7 3.08609 14.7 4.2H19.95C20.2285 4.2 20.4955 4.31062 20.6925 4.50754C20.8894 4.70445 21 4.97152 21 5.25C21 5.52848 20.8894 5.79555 20.6925 5.99246C20.4955 6.18937 20.2285 6.3 19.95 6.3H19.0239L18.0936 17.157C18.0042 18.2054 17.5245 19.182 16.7494 19.8937C15.9744 20.6053 14.9605 21.0001 13.9083 21H7.0917C6.0395 21.0001 5.02559 20.6053 4.25056 19.8937C3.47552 19.182 2.99584 18.2054 2.9064 17.157L1.9761 6.3H1.05C0.771523 6.3 0.504451 6.18937 0.307538 5.99246C0.110625 5.79555 0 5.52848 0 5.25C0 4.97152 0.110625 4.70445 0.307538 4.50754C0.504451 4.31062 0.771523 4.2 1.05 4.2H6.3ZM13.65 10.5C13.65 10.2215 13.5394 9.95445 13.3425 9.75754C13.1455 9.56062 12.8785 9.45 12.6 9.45C12.3215 9.45 12.0545 9.56062 11.8575 9.75754C11.6606 9.95445 11.55 10.2215 11.55 10.5V14.7C11.55 14.9785 11.6606 15.2455 11.8575 15.4425C12.0545 15.6394 12.3215 15.75 12.6 15.75C12.8785 15.75 13.1455 15.6394 13.3425 15.4425C13.5394 15.2455 13.65 14.9785 13.65 14.7V10.5ZM8.4 9.45C8.67848 9.45 8.94555 9.56062 9.14246 9.75754C9.33937 9.95445 9.45 10.2215 9.45 10.5V14.7C9.45 14.9785 9.33937 15.2455 9.14246 15.4425C8.94555 15.6394 8.67848 15.75 8.4 15.75C8.12152 15.75 7.85445 15.6394 7.65754 15.4425C7.46062 15.2455 7.35 14.9785 7.35 14.7V10.5C7.35 10.2215 7.46062 9.95445 7.65754 9.75754C7.85445 9.56062 8.12152 9.45 8.4 9.45ZM4.998 16.9785C5.04273 17.5029 5.28273 17.9913 5.67046 18.3472C6.0582 18.703 6.56542 18.9003 7.0917 18.9H13.9083C14.4342 18.8998 14.9409 18.7023 15.3282 18.3465C15.7155 17.9907 15.9552 17.5025 15.9999 16.9785L16.9155 6.3H4.0845L5.0001 16.9785H4.998Z" fill="black"/>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td>
                                                        12/25/2022
                                                    </td>
                                                    <td>
                                                        Tuesday
                                                    </td>
                                                    <td>
                                                        <a href="" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.4 4.2H12.6C12.6 3.64305 12.3787 3.1089 11.9849 2.71508C11.5911 2.32125 11.057 2.1 10.5 2.1C9.94304 2.1 9.4089 2.32125 9.01508 2.71508C8.62125 3.1089 8.4 3.64305 8.4 4.2ZM6.3 4.2C6.3 3.08609 6.7425 2.0178 7.53015 1.23015C8.3178 0.442499 9.38609 0 10.5 0C11.6139 0 12.6822 0.442499 13.4698 1.23015C14.2575 2.0178 14.7 3.08609 14.7 4.2H19.95C20.2285 4.2 20.4955 4.31062 20.6925 4.50754C20.8894 4.70445 21 4.97152 21 5.25C21 5.52848 20.8894 5.79555 20.6925 5.99246C20.4955 6.18937 20.2285 6.3 19.95 6.3H19.0239L18.0936 17.157C18.0042 18.2054 17.5245 19.182 16.7494 19.8937C15.9744 20.6053 14.9605 21.0001 13.9083 21H7.0917C6.0395 21.0001 5.02559 20.6053 4.25056 19.8937C3.47552 19.182 2.99584 18.2054 2.9064 17.157L1.9761 6.3H1.05C0.771523 6.3 0.504451 6.18937 0.307538 5.99246C0.110625 5.79555 0 5.52848 0 5.25C0 4.97152 0.110625 4.70445 0.307538 4.50754C0.504451 4.31062 0.771523 4.2 1.05 4.2H6.3ZM13.65 10.5C13.65 10.2215 13.5394 9.95445 13.3425 9.75754C13.1455 9.56062 12.8785 9.45 12.6 9.45C12.3215 9.45 12.0545 9.56062 11.8575 9.75754C11.6606 9.95445 11.55 10.2215 11.55 10.5V14.7C11.55 14.9785 11.6606 15.2455 11.8575 15.4425C12.0545 15.6394 12.3215 15.75 12.6 15.75C12.8785 15.75 13.1455 15.6394 13.3425 15.4425C13.5394 15.2455 13.65 14.9785 13.65 14.7V10.5ZM8.4 9.45C8.67848 9.45 8.94555 9.56062 9.14246 9.75754C9.33937 9.95445 9.45 10.2215 9.45 10.5V14.7C9.45 14.9785 9.33937 15.2455 9.14246 15.4425C8.94555 15.6394 8.67848 15.75 8.4 15.75C8.12152 15.75 7.85445 15.6394 7.65754 15.4425C7.46062 15.2455 7.35 14.9785 7.35 14.7V10.5C7.35 10.2215 7.46062 9.95445 7.65754 9.75754C7.85445 9.56062 8.12152 9.45 8.4 9.45ZM4.998 16.9785C5.04273 17.5029 5.28273 17.9913 5.67046 18.3472C6.0582 18.703 6.56542 18.9003 7.0917 18.9H13.9083C14.4342 18.8998 14.9409 18.7023 15.3282 18.3465C15.7155 17.9907 15.9552 17.5025 15.9999 16.9785L16.9155 6.3H4.0845L5.0001 16.9785H4.998Z" fill="black"/>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="odd">
                                                    <td>
                                                        12/25/2022
                                                    </td>
                                                    <td>
                                                        Tuesday
                                                    </td>
                                                    <td>
                                                        <a href="" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.4 4.2H12.6C12.6 3.64305 12.3787 3.1089 11.9849 2.71508C11.5911 2.32125 11.057 2.1 10.5 2.1C9.94304 2.1 9.4089 2.32125 9.01508 2.71508C8.62125 3.1089 8.4 3.64305 8.4 4.2ZM6.3 4.2C6.3 3.08609 6.7425 2.0178 7.53015 1.23015C8.3178 0.442499 9.38609 0 10.5 0C11.6139 0 12.6822 0.442499 13.4698 1.23015C14.2575 2.0178 14.7 3.08609 14.7 4.2H19.95C20.2285 4.2 20.4955 4.31062 20.6925 4.50754C20.8894 4.70445 21 4.97152 21 5.25C21 5.52848 20.8894 5.79555 20.6925 5.99246C20.4955 6.18937 20.2285 6.3 19.95 6.3H19.0239L18.0936 17.157C18.0042 18.2054 17.5245 19.182 16.7494 19.8937C15.9744 20.6053 14.9605 21.0001 13.9083 21H7.0917C6.0395 21.0001 5.02559 20.6053 4.25056 19.8937C3.47552 19.182 2.99584 18.2054 2.9064 17.157L1.9761 6.3H1.05C0.771523 6.3 0.504451 6.18937 0.307538 5.99246C0.110625 5.79555 0 5.52848 0 5.25C0 4.97152 0.110625 4.70445 0.307538 4.50754C0.504451 4.31062 0.771523 4.2 1.05 4.2H6.3ZM13.65 10.5C13.65 10.2215 13.5394 9.95445 13.3425 9.75754C13.1455 9.56062 12.8785 9.45 12.6 9.45C12.3215 9.45 12.0545 9.56062 11.8575 9.75754C11.6606 9.95445 11.55 10.2215 11.55 10.5V14.7C11.55 14.9785 11.6606 15.2455 11.8575 15.4425C12.0545 15.6394 12.3215 15.75 12.6 15.75C12.8785 15.75 13.1455 15.6394 13.3425 15.4425C13.5394 15.2455 13.65 14.9785 13.65 14.7V10.5ZM8.4 9.45C8.67848 9.45 8.94555 9.56062 9.14246 9.75754C9.33937 9.95445 9.45 10.2215 9.45 10.5V14.7C9.45 14.9785 9.33937 15.2455 9.14246 15.4425C8.94555 15.6394 8.67848 15.75 8.4 15.75C8.12152 15.75 7.85445 15.6394 7.65754 15.4425C7.46062 15.2455 7.35 14.9785 7.35 14.7V10.5C7.35 10.2215 7.46062 9.95445 7.65754 9.75754C7.85445 9.56062 8.12152 9.45 8.4 9.45ZM4.998 16.9785C5.04273 17.5029 5.28273 17.9913 5.67046 18.3472C6.0582 18.703 6.56542 18.9003 7.0917 18.9H13.9083C14.4342 18.8998 14.9409 18.7023 15.3282 18.3465C15.7155 17.9907 15.9552 17.5025 15.9999 16.9785L16.9155 6.3H4.0845L5.0001 16.9785H4.998Z" fill="black"/>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="even">
                                                    <td>
                                                        12/25/2022
                                                    </td>
                                                    <td>
                                                        Tuesday
                                                    </td>
                                                    <td>
                                                        <a href="" aria-label="delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M8.4 4.2H12.6C12.6 3.64305 12.3787 3.1089 11.9849 2.71508C11.5911 2.32125 11.057 2.1 10.5 2.1C9.94304 2.1 9.4089 2.32125 9.01508 2.71508C8.62125 3.1089 8.4 3.64305 8.4 4.2ZM6.3 4.2C6.3 3.08609 6.7425 2.0178 7.53015 1.23015C8.3178 0.442499 9.38609 0 10.5 0C11.6139 0 12.6822 0.442499 13.4698 1.23015C14.2575 2.0178 14.7 3.08609 14.7 4.2H19.95C20.2285 4.2 20.4955 4.31062 20.6925 4.50754C20.8894 4.70445 21 4.97152 21 5.25C21 5.52848 20.8894 5.79555 20.6925 5.99246C20.4955 6.18937 20.2285 6.3 19.95 6.3H19.0239L18.0936 17.157C18.0042 18.2054 17.5245 19.182 16.7494 19.8937C15.9744 20.6053 14.9605 21.0001 13.9083 21H7.0917C6.0395 21.0001 5.02559 20.6053 4.25056 19.8937C3.47552 19.182 2.99584 18.2054 2.9064 17.157L1.9761 6.3H1.05C0.771523 6.3 0.504451 6.18937 0.307538 5.99246C0.110625 5.79555 0 5.52848 0 5.25C0 4.97152 0.110625 4.70445 0.307538 4.50754C0.504451 4.31062 0.771523 4.2 1.05 4.2H6.3ZM13.65 10.5C13.65 10.2215 13.5394 9.95445 13.3425 9.75754C13.1455 9.56062 12.8785 9.45 12.6 9.45C12.3215 9.45 12.0545 9.56062 11.8575 9.75754C11.6606 9.95445 11.55 10.2215 11.55 10.5V14.7C11.55 14.9785 11.6606 15.2455 11.8575 15.4425C12.0545 15.6394 12.3215 15.75 12.6 15.75C12.8785 15.75 13.1455 15.6394 13.3425 15.4425C13.5394 15.2455 13.65 14.9785 13.65 14.7V10.5ZM8.4 9.45C8.67848 9.45 8.94555 9.56062 9.14246 9.75754C9.33937 9.95445 9.45 10.2215 9.45 10.5V14.7C9.45 14.9785 9.33937 15.2455 9.14246 15.4425C8.94555 15.6394 8.67848 15.75 8.4 15.75C8.12152 15.75 7.85445 15.6394 7.65754 15.4425C7.46062 15.2455 7.35 14.9785 7.35 14.7V10.5C7.35 10.2215 7.46062 9.95445 7.65754 9.75754C7.85445 9.56062 8.12152 9.45 8.4 9.45ZM4.998 16.9785C5.04273 17.5029 5.28273 17.9913 5.67046 18.3472C6.0582 18.703 6.56542 18.9003 7.0917 18.9H13.9083C14.4342 18.8998 14.9409 18.7023 15.3282 18.3465C15.7155 17.9907 15.9552 17.5025 15.9999 16.9785L16.9155 6.3H4.0845L5.0001 16.9785H4.998Z" fill="black"/>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Form Actions -->
                        <div class="col-12 justify-content-center form-actions d-flex">
                            <button type="button" class="btn btn-outline-dark rounded mx-2">CANCEL</button>
                            <button type="submit" class="btn btn-primary rounded">NEXT</button>
                        </div><!-- /Form Actions -->
                      </div>
                      <div class="tab-pane fade" id="payments" role="tabpanel" aria-labelledby="payments-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2>Payments</h2>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-5">
                                        <h3>Provider Payments & Preferences</h3>
                                        <div class="row mb-4">
                                            <div class="col-lg-12 mb-1">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" aria-label="Toggle Provider Payroll" type="checkbox" role="switch" id="providerPayroll" checked>
                                                    <label class="form-check-label" >Provider Payroll</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="directDepositFormUpload">
                                                    Direct Deposit Form Upload
                                                </label>
                                                <input class="form-control" type="file" id="directDepositFormUpload">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="paymentSchedule">
                                                    Payment Schedule
                                                </label>
                                                <div class="position-relative">
                                                    <input type="" name="" class="form-control" placeholder="Select Date" id="paymentSchedule">
                                                    <svg class="icon-date" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-12">
                                                <h3>Options:</h3>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="enrollDirectDeposit" name="enrollDirectDeposit" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="enrollDirectDeposit">Require Provider to Acknowledge to Enroll in Direct Deposit</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-6">
                                                <div class="d-lg-flex justify-content-between">
                                                    <label class="form-label" for="reimburseProviders">
                                                        Rate Per Mile to Reimburse Providers
                                                    </label>
                                                    <a href="">
                                                        KM <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path> </svg>
                                                    </a>
                                                </div>
                                                <input class="form-control" type="" id="reimburseProviders" placeholder="$00:00">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="selectCurrency">
                                                    Select Currency
                                                </label>
                                                <select id="selectCurrency" class="form-select">
                                                    <option>Select Currency</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-12 mb-1">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Customer Billing" id="customerBilling" checked>
                                                    <label class="form-check-label" >Customer Billing</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="form-label" for="billingSchedule">
                                                    Billing Schedule (Days After Invoice)
                                                </label>
                                                <input class="form-control" type="" id="billingSchedule" placeholder="Enter Days">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="mb-5">
                                        <div class="row mb-4">
                                            <div class="col-lg-12">
                                                <h3>Service Agreements / Terms of Service</h3>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label class="form-label" for="serviceAgreementsUpload">
                                                            Upload File
                                                        </label>
                                                        <input class="form-control" type="file" id="serviceAgreementsUpload">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-label" for="serviceAgreementsURL">
                                                            URL Link
                                                        </label>
                                                        <input type="" name="" class="form-control" placeholder="Enter URL link" id="serviceAgreementsURL">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-12">
                                                <h3>Options:</h3>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="attachSendQuotes" name="attachSendQuotes" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="attachSendQuotes">Attach and Send with Quotes</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="acknowledgeInitialLogin" name="acknowledgeInitialLogin" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="acknowledgeInitialLogin">Require Customer to Acknowledge on Initial Login</label>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="mb-5">
                                        <div class="row mb-4">
                                            <div class="col-lg-12">
                                                <h3>Privacy Policy</h3>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label class="form-label" >
                                                            Upload File
                                                        </label>
                                                        <input class="form-control" type="file" aria-label="Upload File" >
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-label" >
                                                            URL Link
                                                        </label>
                                                        <input type="" name="" class="form-control" placeholder="Enter URL link" aria-label="Enter URL Link" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-lg-12">
                                                <h3>Options:</h3>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="add-to-customer-drive" name="customerDrive" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="add-to-customer-drive" >Add to Customer Drive</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="acknowledge-Initial-Logincustomer-Drive" name="acknowledgeInitialLogincustomerDrive" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="acknowledge-Initial-Logincustomer-Drive">Require Customer to Acknowledge on Initial Login</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="provider-Drive" name="providerDrive" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="provider-Drive">Add to Provider Drive</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="acknowledge-Initial-Loginprovider-Drive" name="acknowledgeInitialLoginproviderDrive" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="acknowledge-Initial-Loginprovider-Drive">Require Customer to Acknowledge on Initial Login</label>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Duplicate Block -->
                                        <div>
                                            <div class="row mb-4">
                                                <div class="col-lg-12">
                                                    <h3>Additional Policies</h3>
                                                    <h3 class="text-primary">Policy 1</h3>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="privacyPolicyUpload">
                                                                Upload File
                                                            </label>
                                                            <input class="form-control" type="file" id="privacyPolicyUpload">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label class="form-label" for="privacyPolicyURL">
                                                                URL Link
                                                            </label>
                                                            <input type="" name="" class="form-control" placeholder="Enter URL link" id="privacyPolicyURL">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 text-lg-end">
                                                            <button type="button" class="btn btn-primary btn rounded"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Policy
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                            <div class="col-lg-12">
                                                <h3>Options:</h3>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="customerDrive" name="customerDrive" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="customerDrive">Add to Customer Drive</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="acknowledgeInitialLogincustomerDrive" name="acknowledgeInitialLogincustomerDrive" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="acknowledgeInitialLogincustomerDrive">Require Customer to Acknowledge on Initial Login</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="providerDrive" name="providerDrive" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="providerDrive">Add to Provider Drive</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" id="acknowledgeInitialLoginproviderDrive" name="acknowledgeInitialLoginproviderDrive" type="checkbox" tabindex="" />
                                                    <label class="form-check-label" for="acknowledgeInitialLoginproviderDrive">Require Customer to Acknowledge on Initial Login</label>
                                                </div>
                                            </div>
                                        </div>
                                        </div><!-- /Duplicate Block -->
                                        <!-- Form Actions -->
                                        <div class="col-12 justify-content-center form-actions d-flex">
                                            <button type="button" class="btn btn-outline-dark rounded mx-2">CANCEL</button>
                                            <button type="submit" class="btn btn-primary rounded">NEXT</button>
                                        </div><!-- /Form Actions -->
                                    </div>
                                </div>
                            </div>
                        </div>

                      </div>
                      </div>
                    </div>
                    <!-- END: Steps -->    
                </div>
            </div>
        </div>
</div>
