<div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title justify-content-center fs-5" id="ManageCompanyBusinessHoursModalLabel">Manage Company Business Hours</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row mb-4">
            <div class="col-lg-12">
              <div class="col-lg-12">
                  <h3>Business Hours Setup</h3>
                  <p>Your set hours determine when "Business hours" and "After-hours" rates are in effect for customer billing and Provider payroll and prevents services from being scheduled during your "closed" hours.You can also set the times which you are closed and not providing services; this will restrict customers from scheduling.</p>
              </div>


                <div class="col-lg-12">
                  <h3>Time Configuration</h3>
                  <div class="d-lg-flex gap-3 align-items-center mb-3">
                          <div class="d-flex flex-column justify-content-between">
                              <label class="form-label">Set Business Time Zone</label>
                              <div class="d-flex gap-2">
                              <input aria-label="Select Time Zone" type="" name="" class="form-control w-auto js-select-time" placeholder="Select Time Zone">
                           </div>
                    </div>
                        <div class="d-flex flex-column justify-content-between">
                          <label class="form-label mt-3" for="set_start_time">Set Time Format</label>
                          <div class="d-flex gap-2">
                              <div class="input-group">
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio" id="radio1" value="option1" checked>
                                      <label class="form-check-label" for="radio1">
                                          12 Hrs
                                      </label>
                                    </div>
                                </div>
                          </div>
                          <div class="d-flex gap-2 mt-11">
                              <div class="time d-flex align-items-center gap-2">
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="radio" id="radio1" value="option1" checked>
                                      <label class="form-check-label" for="radio1">
                                          24 Hrs
                                      </label>
                                    </div>
                            </div>
                        </div>

                  </div>



              </div>
                <div class="row mb-4">
                  <h3>Add Hours Slot In Schedule</h3>
                  <label class="form-label">Type Of Slot</label>
                    <div class="col-lg-3">

                        <div class="mt-2 " >
                          <div class="input-group  ">
                              <div class="input-group-text">
                                <input class="form-check-input  mt-0" type="radio" value="Business Hours" aria-label="Radio button for following text input">
                              </div>

                              <input placeholder="Business Hours" type="text" class="form-control" aria-label="Text input with radio button">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mt-2" >
                        <div class="input-group">
                            <div class="input-group-text">
                              <input class="form-check-input mt-0" type="radio" value="After Business Hours" aria-label="Radio button for following text input">
                            </div>
                            <input placeholder="After Business Hours" type="text" class="form-control" aria-label="Text input with radio button">
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
                          <div class="d-flex">
                            <div class="d-flex flex-column justify-content-between">
                              <label class="form-label-sm" for="set_start_time">Start Time</label>
                              <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                  <div class="hours">12</div>
                                  <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                  </svg>
                                  <div class="mins">59</div>
                                </div>
                                <div class="form-check form-switch form-switch-column mb-0">
                                    <input checked class="form-check-input" type="checkbox" role="switch" id="pm" aria-label="PM">
                                    <label class="form-check-label" for="pm">PM</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="d-flex flex-column justify-content-between">
                              <label class="form-label-sm" for="set_start_time">End Time</label>
                              <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                  <div class="hours">12</div>
                                  <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                  </svg>
                                  <div class="mins">59</div>
                                </div>
                                <div class="form-check form-switch form-switch-column mb-0">
                                    <input checked class="form-check-input" type="checkbox" role="switch" id="am" aria-label="AM">
                                    <label class="form-check-label" for="am">AM</label>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <button class="btn btn-primary btn-sm rounded">Submit</button>
                  </div>
              </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-lg-flex  justify-content-between mb-4">
                            <h3 class="mb-lg-0">Business Schedule</h3>
                            <div class="time d-flex align-items-center gap-2">
                              <div class="form-check">
                                  <input class="form-check-input bg-success" type="radio" name="radio" id="Business Hours" value="" checked>
                                  <label class="form-check-label" for="Business Hours">
                                      Business Hours
                                  </label>
                                </div>
                                <div class="form-check ">
                                  <input class="form-check-input bg-warning" type="radio" name="radio" id="After Business Hours" value="option1" checked>
                                  <label class="form-check-label" for="After Business Hours">
                                      After Business Hours
                                  </label>
                                </div>
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
                                        </td>
                                        <td>
                                            <div class="time-slot mb-3 bg-success text-white">
                                                09 : 00 AM To 06 : 00 PM
                                            </div>
                                        </td>
                                        <td>
                                            <div class="time-slot mb-3 bg-success text-white">
                                                09 : 00 AM To 06 : 00 PM
                                            </div>
                                        </td>
                                        <td>
                                            <div class="time-slot mb-3 bg-success text-white">
                                                09 : 00 AM To 06 : 00 PM
                                            </div>
                                        </td>
                                        <td>
                                            <div class="time-slot mb-3 bg-success text-white">
                                                09 : 00 AM To 06 : 00 PM
                                            </div>
                                        </td>
                                        <td>
                                            <div class="time-slot mb-3 bg-success text-white">
                                                09 : 00 AM To 06 : 00 PM
                                            </div>
                                        </td>
                                        <td>
                                            <div class="time-slot mb-3 bg-secondary text-white">
                                                09 : 00 AM To 06 : 00 PM
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                      <td>
                                          <div class="time-slot mb-3 bg-warning text-white">
                                              09 : 00 AM To 06 : 00 PM
                                          </div>
                                      </td>
                                      <td>
                                          <div class="time-slot mb-3 bg-warning text-white">
                                              09 : 00 AM To 06 : 00 PM
                                          </div>
                                      </td>
                                      <td>
                                          <div class="time-slot mb-3 bg-warning text-white">
                                              09 : 00 AM To 06 : 00 PM
                                          </div>
                                      </td>
                                      <td>
                                          <div class="time-slot mb-3 bg-warning text-white">
                                              09 : 00 AM To 06 : 00 PM
                                          </div>
                                      </td>
                                      <td>
                                          <div class="time-slot mb-3 bg-warning text-white">
                                              09 : 00 AM To 06 : 00 PM
                                          </div>
                                      </td>
                                      <td>
                                          <div class="time-slot mb-3 bg-warning text-white">
                                              09 : 00 AM To 06 : 00 PM
                                          </div>
                                      </td>
                                      <td>
                                          <div class="time-slot mb-3 bg-secondary text-white">
                                              09 : 00 AM To 06 : 00 PM
                                          </div>
                                      </td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <div class="col-12 justify-content-center form-actions d-flex gap-3">
        <button type="button"
          class="btn btn-outline-dark rounded">Cancel</button>
          <button type="submit"
          class="btn btn-primary rounded">Submit</button>
      </div>
    </div>
  </div>