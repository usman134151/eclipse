<div>
    <section id="multiple-column-form">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form class="form">
                <div class="row">
                  <div class="col-lg-12">
                    <!-- .... section 1..(start).. -->
                    <div class="row">
                      <div class="col-lg-5 pe-lg-4 mb-4">
                          <label class="form-label" for="name-column">Name</label>
                          <input type="text" id="name-column" class="form-control" name="name-column"
                            placeholder="Enter Name" />
                      </div>
                      <div class="col-lg-5 ps-lg-4 mb-4">
                          <label class="form-label" for="gender-column">Select Trigger</label>
                          <select class="select2 form-select" id="gender-column">
                            <option>Select Trigger</option>
                          </select>
                      </div>
                      <div class="col-lg-5 pe-lg-4 mb-4">
                          <label class="form-label" for="trigger-description">
                          Trigger Description
                          </label>
                          <textarea class="form-control" rows="2" cols="3" placeholder="" name="trigger-description"
                            id="trigger-description"></textarea>
                      </div>
                      <div class="col-lg-5 ps-lg-4 mb-4">
                          <label class="form-label" for="select-role">Select Role</label>
                          <select class="select2 form-select" id="select-role">
                            <option>Select Role</option>
                          </select>
                      </div>
                      <div class="col-lg-5 pe-lg-4 mb-4">
                          <label class="form-label" for="select-role">Select Role</label>
                          <select class="select2 form-select" id="select-role">
                            <option>Select Role</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-7">
                          <div class="row">
                            <div class="col-lg-4 align-self-end mb-4">
                              <div class="d-inline-flex gap-2 align-items-center">
                                <label for="Frequency" class="form-label text-primary mb-lg-0">
                                  Frequency
                                </label>
                                <input type="text" class="form-control form-control-md form-control-max-w-xs text-center" id="frequency" name="frequency" placeholder="2" autocomplete="on"/>
                              </div>
                            </div>
                            <div class="col-lg-4 text-center align-self-end mb-4">
                              <div class="row g-0">
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="DisplayToProviders"> Days</label>
                                  <input class="form-control form-control-md text-center" id="DisplayToProviders" name="DisplayToProviders" value="00" type="" tabindex="" />
                                </div>
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="DisplayToProviders"> Hours</label>
                                  <input class="form-control form-control-md text-center" id="DisplayToProviders" name="DisplayToProviders" value="00" type="" tabindex="" />
                                </div>
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="DisplayToProviders"> Minutes</label>
                                  <input class="form-control form-control-md text-center" id="DisplayToProviders" name="DisplayToProviders" value="00" type="" tabindex="" />
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                              <div class="d-flex flex-column gap-2">
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="Before-Booking" value="option2">
                                  <label class="form-check-label" for="Before-Booking">
                                  Before Booking
                                  </label>
                                </div>
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="After-Booking" value="option2">
                                  <label class="form-check-label" for="After-Booking">
                                  After Booking
                                  </label>
                                </div>
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="After-Trigger" value="option2">
                                  <label class="form-check-label" for="After-Trigger">
                                  After Trigger
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12 text-end mb-4">
                              <button type="button" class="btn btn-primary rounded gap-2">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                                </svg>
                                <span>Add Notification</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ...section 1 ...(ends)...  -->
                    <!-- .......section 2....(start)....  -->
                    <div class="row">
                      <div class="col-lg-5 col-12">
                        <div class="mb-4">
                          <label class="form-label" for="SubjectColumn">
                          Subject
                          </label>
                          <textarea class="form-control" rows="3" cols="3" placeholder="Normal text"
                            name="SubjectColumn" id="SubjectColumn">Enter Subject</textarea>
                        </div>
                      </div>
                      <div class="col-lg-8 col-12 mb-4">
                        <textarea id="editor"></textarea>
                      </div>
                      <div class="col-lg-4 col-12 mb-4">
                        <div class="p-3 border rounded">
                          <label class="form-label">Tag Key</label>
                          <div class="d-lg-flex flex-wrap gap-3">
                            <div class="tag">@admin_company</div>
                            <div class="tag">@booking_start_at</div>
                            <div class="tag">@consumer</div>
                            <div class="tag">@booking_end_at</div>
                            <div class="tag">@booking_duration</div>
                            <div class="tag">@booking_location</div>
                            <div class="tag">@services</div>
                            <div class="tag">@service_type</div>
                            <div class="tag">@dashboard</div>
                            <div class="tag">@reports</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-5 col-12 mb-4">
                          <label class="form-label" for="subject-column">Subject</label>
                          <input type="text" id="subject-column" class="form-control" name="subject-column"
                            placeholder="Enter Subject" />
                      </div>
                      <div class="col-lg-4 pe-lg-5 col-12 mb-4">
                          <label class="form-label" for="send-from-column">Send From:</label>
                          <input type="text" id="send-from-column" class="form-control" name="send-from-column"
                            placeholder="Enter Notification Email Address" />
                      </div>
                      <div class="col-lg-3 col-12 mb-4">
                        <label class="form-label" for="send-from-column">Reply to:</label>
                        <div class="d-flex flex-column gap-2">
                          <div class="form-check mb-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="AssignedAdminStaff"
                              value="option1" checked>
                            <label class="form-check-label" for="AssignedAdminStaff">
                            Assigned Admin-staff
                            </label>
                          </div>
                          <div class="form-check mb-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="SelectAdminStaff"
                              value="option2">
                            <label class="form-check-label" for="SelectAdminStaff">
                            Select Admin-staff
                            </label>
                          </div>
                          <div class="form-check mb-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="Custom-Email"
                              value="option2">
                            <label class="form-check-label" for="Custom-Email">
                            Custom Email
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-7">
                          <div class="row">
                            <div class="col-lg-4 align-self-end mb-4">
                              <div class="d-inline-flex gap-2 align-items-center">
                                <label for="Frequency" class="form-label text-primary mb-lg-0">
                                  Frequency
                                </label>
                                <input type="text" class="form-control form-control-md form-control-max-w-xs text-center" id="frequency" name="frequency" placeholder="2" autocomplete="on"/>
                              </div>
                            </div>
                            <div class="col-lg-4 text-center align-self-end mb-4">
                              <div class="row g-0">
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="DisplayToProviders"> Days</label>
                                  <input class="form-control form-control-md text-center" id="DisplayToProviders" name="DisplayToProviders" value="00" type="" tabindex="" />
                                </div>
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="DisplayToProviders"> Hours</label>
                                  <input class="form-control form-control-md text-center" id="DisplayToProviders" name="DisplayToProviders" value="00" type="" tabindex="" />
                                </div>
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="DisplayToProviders"> Minutes</label>
                                  <input class="form-control form-control-md text-center" id="DisplayToProviders" name="DisplayToProviders" value="00" type="" tabindex="" />
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                              <div class="d-flex flex-column gap-2">
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="Before-Booking" value="option2">
                                  <label class="form-check-label" for="Before-Booking">
                                  Before Booking
                                  </label>
                                </div>
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="After-Booking" value="option2">
                                  <label class="form-check-label" for="After-Booking">
                                  After Booking
                                  </label>
                                </div>
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="After-Trigger" value="option2">
                                  <label class="form-check-label" for="After-Trigger">
                                  After Trigger
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-12 text-end mb-4">
                              <button type="button" class="btn btn-primary rounded gap-2">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                                </svg>
                                <span>Add Notification</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ....   section 2 ends.... -->
                    <!-- ..... section 3 start.... -->
                    <div class="row">
                      <div class="col-lg-8 col-12 mb-4">
                        <textarea id="editor"></textarea>
                      </div>
                      <div class="col-lg-4 col-12 mb-4">
                        <div class="p-3 border rounded">
                          <label class="form-label">Tag Key</label>
                          <div class="d-lg-flex flex-wrap gap-3">
                            <div class="tag">@admin_company</div>
                            <div class="tag">@booking_start_at</div>
                            <div class="tag">@consumer</div>
                            <div class="tag">@booking_end_at</div>
                            <div class="tag">@booking_duration</div>
                            <div class="tag">@booking_location</div>
                            <div class="tag">@services</div>
                            <div class="tag">@service_type</div>
                            <div class="tag">@dashboard</div>
                            <div class="tag">@reports</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-5 col-12 mb-4">
                          <label class="form-label" for="subject-column">Subject</label>
                          <input type="text" id="subject-column" class="form-control" name="subject-column"
                            placeholder="Enter Subject" />
                      </div>
                      <div class="col-lg-4 pe-lg-5 col-12 mb-4">
                          <label class="form-label" for="send-from-column">Send From:</label>
                          <input type="text" id="send-from-column" class="form-control" name="send-from-column"
                            placeholder="Enter Notification Email Address" />
                      </div>
                      <div class="col-lg-3 col-12 mb-4">
                        <label class="form-label" for="send-from-column">Reply to:</label>
                        <div class="d-flex flex-column gap-2">
                          <div class="form-check mb-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="AssignedAdminStaff"
                              value="option1" checked>
                            <label class="form-check-label" for="AssignedAdminStaff">
                            Assigned Admin-staff
                            </label>
                          </div>
                          <div class="form-check mb-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="SelectAdminStaff"
                              value="option2">
                            <label class="form-check-label" for="SelectAdminStaff">
                            Select Admin-staff
                            </label>
                          </div>
                          <div class="form-check mb-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="Custom-Email"
                              value="option2">
                            <label class="form-check-label" for="Custom-Email">
                            Custom Email
                            </label>
                          </div>
                        </div>
                      </div>
                      <!-- ...... Select Apply to ....  -->
                      <div class="col-lg-12 col-12">
                        <div class="row">
                          <div class="col-lg-5 col-12 mb-4">
                              <label class="form-label" for="ApplyTo">Apply to:</label>
                              <select class="form-control chosen chosen-select" data-placeholder="Please Choose Accommodation" aria-label="Please Choose Accommodation" multiple="true" tabindex="" name="">
                                <option value="1" selected>Requester</option>
                                <option value="2" selected>Billing Manager</option>
                                <option value="3">Requester 2</option>
                                <option value="5">Billing Manager 2</option>
                                <option value="6">Requester 3</option>
                                <option value="8">Billing Manager 3</option>
                                <option value="9">Requester 3</option>
                              </select>
                          </div>
                        </div>
                      </div>
                      <!-- ....... ....  -->
                    </div>
                    <div class="col-lg-12 col-12">
                      <div class="row">
                        <div class="col-lg-7 col-12">
                          <div class="row">
                            <div class="col-lg-4 align-self-end mb-4">
                              <div class="d-inline-flex gap-2 align-items-center">
                                <label for="Frequency" class="form-label text-primary mb-lg-0">
                                  Frequency
                                </label>
                                <input type="text" class="form-control form-control-md form-control-max-w-xs text-center" id="frequency" name="frequency" placeholder="2" autocomplete="on"/>
                              </div>
                            </div>
                            <div class="col-lg-4 text-center align-self-end mb-4">
                              <div class="row g-0">
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="DisplayToProviders"> Days</label>
                                  <input class="form-control form-control-md text-center" id="DisplayToProviders" name="DisplayToProviders" value="00" type="" tabindex="" />
                                </div>
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="DisplayToProviders"> Hours</label>
                                  <input class="form-control form-control-md text-center" id="DisplayToProviders" name="DisplayToProviders" value="00" type="" tabindex="" />
                                </div>
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="DisplayToProviders"> Minutes</label>
                                  <input class="form-control form-control-md text-center" id="DisplayToProviders" name="DisplayToProviders" value="00" type="" tabindex="" />
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                              <div class="d-flex flex-column gap-2">
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="Before-Booking" value="option2">
                                  <label class="form-check-label" for="Before-Booking">
                                  Before Booking
                                  </label>
                                </div>
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="After-Booking" value="option2">
                                  <label class="form-check-label" for="After-Booking">
                                  After Booking
                                  </label>
                                </div>
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" name="exampleRadios" id="After-Trigger" value="option2">
                                  <label class="form-check-label" for="After-Trigger">
                                  After Trigger
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- ... btn row...  -->
                          <div class="row">
                            <div class="col-lg-12 text-end mb-4">
                              <button type="button" class="btn btn-primary rounded gap-2">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                                </svg>
                                <span>Add Notification</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ....   section 3 ends.... -->
                    <!-- ....   section 4 start.... -->
                    <div class="row mb-4">
                      <div class="col-lg-8 col-12 mb-4">
                        <textarea id="editor"></textarea>
                      </div>
                      <div class="col-lg-4 col-12 mb-4">
                        <div class="p-3 border rounded">
                          <label class="form-label">Tag Key</label>
                          <div class="d-lg-flex flex-wrap gap-3">
                            <div class="tag">@admin_company</div>
                            <div class="tag">@booking_start_at</div>
                            <div class="tag">@consumer</div>
                            <div class="tag">@booking_end_at</div>
                            <div class="tag">@booking_duration</div>
                            <div class="tag">@booking_location</div>
                            <div class="tag">@services</div>
                            <div class="tag">@service_type</div>
                            <div class="tag">@dashboard</div>
                            <div class="tag">@reports</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-4">
                        <button type="button" class="btn btn-primary rounded gap-2">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                          </svg>
                          <span>New Customer Notification Template</span>
                        </button>
                      </div>
                    </div>
                    <!-- ....   section 4 ends.... -->
                  </div>
                </div>
                <!-- ....cancel/next (buttons)... -->
                <div class="col-12 justify-content-center form-actions d-flex gap-2">
                  <a href="javascript:void(0);" class="btn btn-outline-dark rounded" role="button" wire:click.prevent="showList">
                  Cancel
                  </a>
                  <button type="submit" class="btn btn-primary rounded">Save</button>
                  <button type="submit" class="btn btn-primary rounded">Next</button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    </section>
</div>
