<div class="content-body">
          <div class="card">
          <div class="card-body">
            <!-- BEGIN: Steps -->
            <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'customer-info' }" id="tab_wrapper">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a href="" class="nav-link" :class="{ 'active': tab === 'customer-info' }" @click.prevent="tab = 'customer-info'; window.location.hash = 'customer-info'" id="customer-info-tab" role="tab" aria-controls="customer-info" aria-selected="true"><span class="number">1</span>Customer Info</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a href="" class="nav-link" :class="{ 'active': tab === 'service-catalog' }" @click.prevent="tab = 'service-catalog'; window.location.hash = 'service-catalog'" id="service-catalog-tab" role="tab" aria-controls="service-catalog" aria-selected="false"><span class="number">2</span> Service Catalog</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a href="" class="nav-link" :class="{ 'active': tab === 'drive-documents' }" @click.prevent="tab = 'drive-documents'; window.location.hash = 'drive-documents'" id="drive-documents-tab" role="tab" aria-controls="drive-documents" aria-selected="false"><span class="number">3</span> Drive Documents</a>
                    </li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- BEGIN: Customer Info -->
                    <div class="tab-pane fade" :class="{ 'active show': tab === 'customer-info' }" @click.prevent="tab = 'customer-info'; window.location.hash = 'customer-info'" id="customer-info" role="tabpanel" aria-labelledby="customer-info-tab" tabindex="0" x-show="tab === 'customer-info'">
                  
          <!-- Basic multiple Column Form section start -->
          <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
              
                    <form class="form">

                      <div class="row mt-2 mb-5">
                        <div class="col-12 text-center">
                          <div class="d-inline-block position-relative">
                            <img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle" alt="Profile Image of Admin Staff Team"/>
                            
                            <div class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
                              <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="28.5" cy="28.5" r="28" fill="#0A1E46" stroke="white"/>
                                <path d="M42.9375 37.625C42.9375 38.172 42.7202 38.6966 42.3334 39.0834C41.9466 39.4702 41.422 39.6875 40.875 39.6875H16.125C15.578 39.6875 15.0534 39.4702 14.6666 39.0834C14.2798 38.6966 14.0625 38.172 14.0625 37.625V25.25C14.0625 24.703 14.2798 24.1784 14.6666 23.7916C15.0534 23.4048 15.578 23.1875 16.125 23.1875H18.5422C20.1824 23.1866 21.7551 22.5345 22.9147 21.3746L24.6266 19.6668C25.0123 19.281 25.5352 19.0637 26.0807 19.0625H30.9152C31.4622 19.0626 31.9867 19.28 32.3734 19.6668L34.0811 21.3746C34.6558 21.9494 35.3381 22.4054 36.0891 22.7165C36.84 23.0275 37.6449 23.1876 38.4578 23.1875H40.875C41.422 23.1875 41.9466 23.4048 42.3334 23.7916C42.7202 24.1784 42.9375 24.703 42.9375 25.25V37.625ZM16.125 21.125C15.031 21.125 13.9818 21.5596 13.2082 22.3332C12.4346 23.1068 12 24.156 12 25.25V37.625C12 38.719 12.4346 39.7682 13.2082 40.5418C13.9818 41.3154 15.031 41.75 16.125 41.75H40.875C41.969 41.75 43.0182 41.3154 43.7918 40.5418C44.5654 39.7682 45 38.719 45 37.625V25.25C45 24.156 44.5654 23.1068 43.7918 22.3332C43.0182 21.5596 41.969 21.125 40.875 21.125H38.4578C37.3638 21.1248 36.3148 20.69 35.5414 19.9164L33.8336 18.2086C33.0602 17.435 32.0112 17.0002 30.9172 17H26.0828C24.9888 17.0002 23.9398 17.435 23.1664 18.2086L21.4586 19.9164C20.6852 20.69 19.6362 21.1248 18.5422 21.125H16.125Z" fill="white"/>
                                <path d="M28.5 35.5625C27.1325 35.5625 25.821 35.0193 24.854 34.0523C23.887 33.0853 23.3438 31.7738 23.3438 30.4063C23.3438 29.0387 23.887 27.7272 24.854 26.7602C25.821 25.7932 27.1325 25.25 28.5 25.25C29.8675 25.25 31.179 25.7932 32.146 26.7602C33.113 27.7272 33.6562 29.0387 33.6562 30.4063C33.6562 31.7738 33.113 33.0853 32.146 34.0523C31.179 35.0193 29.8675 35.5625 28.5 35.5625ZM28.5 37.625C30.4145 37.625 32.2506 36.8645 33.6044 35.5107C34.9582 34.1569 35.7188 32.3208 35.7188 30.4063C35.7188 28.4917 34.9582 26.6556 33.6044 25.3018C32.2506 23.948 30.4145 23.1875 28.5 23.1875C26.5855 23.1875 24.7494 23.948 23.3956 25.3018C22.0418 26.6556 21.2812 28.4917 21.2812 30.4063C21.2812 32.3208 22.0418 34.1569 23.3956 35.5107C24.7494 36.8645 26.5855 37.625 28.5 37.625ZM18.1875 26.2813C18.1875 26.5548 18.0789 26.8171 17.8855 27.0105C17.6921 27.2039 17.4298 27.3125 17.1562 27.3125C16.8827 27.3125 16.6204 27.2039 16.427 27.0105C16.2336 26.8171 16.125 26.5548 16.125 26.2813C16.125 26.0077 16.2336 25.7454 16.427 25.552C16.6204 25.3586 16.8827 25.25 17.1562 25.25C17.4298 25.25 17.6921 25.3586 17.8855 25.552C18.0789 25.7454 18.1875 26.0077 18.1875 26.2813Z" fill="white"/>
                                </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-8 mb-md-2">
                              <h2>Customer Information</h2>
                          </div>
                        
                          <div class="col-md-4 md-md-2">
                            <div class="mb-4">
                            <div class="row w-100">
                               <label class="form-label" for="permissions-column">Copy permissions from another user</label>
                            </div>
                            <div class="row w-100">
                              <div class="col-md-8">
                                <select class="select2 form-select" id="select-user-column">
                                  <option>Select User</option>
                                </select>
                            </div> 
                            <div class="col-md-4 text-end">
                              <button  type="submit" class="btn btn-primary rounded">Apply</button>
                          </div> 
                            
                             </div>
                          </div>
                        </div>
                          
                          <div class="row">

                            <!-- Industry -->
                            <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="f-name">
                                  Industry <span class="mandatory" aria-hidden="true">*</span>
                                </label>
                                <input
                                  type="text"
                                  id="industry-column"
                                  class="form-control"
                                  name="industry-column"
                                  placeholder="Enter Industry"
                                  required
                                  aria-required="true"
                                  />
                              </div>
                            </div>
                            </div>

                            <!-- Company -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="f-name">
                                  Company <span class="mandatory" aria-hidden="true">*</span>
                                </label>
                                <input
                                  type="text"
                                  id="company*-column"
                                  class="form-control"
                                  name="company*-column"
                                  placeholder="Enter Company*"
                                  required
                                  aria-required="true"
                                  />
                              </div>
                            </div>

                            <!-- Department -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="department-column">Department</label>
                               <select class="select2 form-select" id="department-column">
                                  <option>Select Department</option>
                                </select>
                                <div class="form-check mt-2">
                                  <input class="form-check-input" type="checkbox" value="" id="assign-as-department-supervisor">
                                  <label class="form-check-label" for="assign-as-department-supervisor">
                                    Assign as Department Supervisor
                                  </label>
                                </div>
                              </div>
                            </div>

                            <!-- Role -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="role-column">Role</label>
                                <div class="row">
                                  <div class="col-md-4 col-12">
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" type="checkbox" value="company-admin" id="company-admin">
                                      <label class="form-check-label" for="company-admin">
                                        Company Admin
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-12">
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" type="checkbox" value="supervisor" id="supervisor">
                                      <label class="form-check-label" for="supervisor">
                                        Supervisor
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-12">
                                    <div class="form-check mb-2">
                                      <input class="form-check-input" type="checkbox" value="billing-manager" id="billing-manager">
                                      <label class="form-check-label" for="billing-manager">
                                        Billing Manager
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-4 col-12">
                                    <div class="form-check mb-3">
                                      <input class="form-check-input" type="checkbox" value="service-consumer" id="service-consumer">
                                      <label class="form-check-label" for="service-consumer">
                                        Service Consumer
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-12">
                                    <div class="form-check mb-4">
                                      <input class="form-check-input" type="checkbox" value="participant" id="participant">
                                      <label class="form-check-label" for="participant">
                                        Participant
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-12">
                                    <div class="form-check mb-4">
                                      <input class="form-check-input" type="checkbox" value="requester" id="requester">
                                      <label class="form-check-label" for="requester">
                                        Requester
                                      </label>
                                    </div>
                                  </div>
                                  <div class="col-md-4 col-12"></div>
                                </div>
                              
                            
                               
                              
                                
                              </div>
                            </div>

                            <!-- Position -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="position-column">Position</label>
                               <input
                                  type="text"
                                  id="position-column"
                                  class="form-control"
                                  name="positionColumn"
                                  placeholder="Enter Position"
                                  />
                              </div>
                            </div>

                            <!-- Assigned Supervisor(s) -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="assigned-supervisor-column">Assigned Supervisor(s)</label>
                               <input
                                  type="text"
                                  id="assigned-supervisor-column"
                                  class="form-control"
                                  name="assigned-supervisor-column"
                                  placeholder="Assigned Supervisor(s)"
                                  />
                                  <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="assign-myself">
                                    <label class="form-check-label" for="assign-myself">
                                      Assign Myself
                                    </label>
                                  </div>
                              </div>
                            </div>

                            <!-- Supervising -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <div class="col-lg-12 d-flex col-12 gap-2 align-items-center">
                                  <label class="form-label" for="supervising-column">Supervising</label>
                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                      fill="#888575" />
                                  </svg>
                                </div>
                                <input
                                  type="text"
                                  id="supervising-column"
                                  class="form-control"
                                  name="supervising-column"
                                  placeholder="Supervising"
                                  />
                              </div>
                            </div>
                            
                            <!-- Assigned Billing Manager* -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="assigned-billing-manager">
                                  Assigned Billing Manager <span class="mandatory" aria-hidden="true">*</span>
                                </label>
                                <input
                                  type="text"
                                  id="assigned-billing-manager-column"
                                  class="form-control"
                                  name="assigned-billing-manager-column"
                                  placeholder="Assigned Billing Manager"
                                  required
                                  aria-required="true"
                                  />
                                  <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" value="" id="assign-myself">
                                    <label class="form-check-label" for="assign-myself">
                                      Assign Myself
                                    </label>
                                  </div>
                              </div>
                            </div>

                             <!-- Bill Managing -->
                             <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <div class="col-lg-12 d-flex col-12 gap-2 align-items-center">
                                  <label class="form-label" for="bill-managing-column">Bill Managing</label>
                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M10 0C4.486 0 0 4.486 0 10C0 15.514 4.486 20 10 20C15.514 20 20 15.514 20 10C20 4.486 15.514 0 10 0ZM11 16H9V14H11V16ZM11.976 11.115C11.78 11.273 11.591 11.424 11.441 11.574C11.033 11.981 11.001 12.351 11 12.367V12.5H9V12.333C9 12.215 9.029 11.156 10.026 10.159C10.221 9.964 10.463 9.766 10.717 9.56C11.451 8.965 11.933 8.531 11.933 7.933C11.9214 7.42782 11.7125 6.94725 11.3511 6.59412C10.9896 6.24099 10.5043 6.04334 9.99901 6.04347C9.4937 6.0436 9.0085 6.2415 8.64725 6.59482C8.28599 6.94814 8.07736 7.42881 8.066 7.934H6.066C6.066 5.765 7.831 4 10 4C12.169 4 13.934 5.765 13.934 7.934C13.934 9.531 12.755 10.484 11.976 11.115Z"
                                      fill="#888575" />
                                  </svg>
                                </div>
                                <input
                                  type="text"
                                  id="bill-managing-column"
                                  class="form-control"
                                  name="bill-managing-column"
                                  placeholder="Bill Managing"
                                  />
                              </div>
                            </div>

                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="f-name">
                                  First Name <span class="mandatory" aria-hidden="true">*</span>
                                </label>
                                <input
                                  type="text"
                                  id="f-name"
                                  class="form-control"
                                  name="f-name"
                                  placeholder="Enter First Name"
                                  required
                                  aria-required="true"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="l-name">
                                  Last Name <span class="mandatory" aria-hidden="true">*</span>
                                </label>
                                <input
                                  type="text"
                                  id="l-name"
                                  class="form-control"
                                  name="l-name"
                                  placeholder="Enter Last Name"
                                  required
                                  aria-required="true"
                                  />
                              </div>
                            </div>
                       
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="pronouns-column">Pronouns</label>
                                <input
                                  type="text"
                                  id="pronouns-column"
                                  class="form-control"
                                  placeholder="Enter Pronouns"
                                  name="pronouns"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 d-flex align-items-center col-12 mb-4 gap-2">
                                <div class="col-md-11 col-12">
                                <form>
                                  <label class="form-label" for="date">Date of Birth</label>
                                  <div class="input-group mb-3" id="date">
                                    <input type="text" class="form-control" placeholder="Select Date of Birth" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <span class="input-group-text" id="basic-addon2"><svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="white"/>
                                      </svg>
                                      </span>
                                  </div>
                                </form>
                                </div>
                                <div class="col-md-1 col-12">
                                <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M12 0C6.54545 0 1.88727 3.52467 0 8.5C1.88727 13.4753 6.54545 17 12 17C17.4545 17 22.1127 13.4753 24 8.5C22.1127 3.52467 17.4545 0 12 0ZM12 14.1667C8.98909 14.1667 6.54545 11.628 6.54545 8.5C6.54545 5.372 8.98909 2.83333 12 2.83333C15.0109 2.83333 17.4545 5.372 17.4545 8.5C17.4545 11.628 15.0109 14.1667 12 14.1667ZM12 5.1C10.1891 5.1 8.72727 6.61867 8.72727 8.5C8.72727 10.3813 10.1891 11.9 12 11.9C13.8109 11.9 15.2727 10.3813 15.2727 8.5C15.2727 6.61867 13.8109 5.1 12 5.1Z" fill="black"/>
                                  </svg>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="gender-column">Gender</label>
                                <select class="select2 form-select" id="gender-column">
                                  <option>Male</option>
                                  <option>Female</option>
                                  <option>Others</option>
                                </select>
                              </div>
                            </div>
                            

                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="ethnicity-column">Ethnicity</label>
                               <select class="select2 form-select" id="ethnicity-column">
                                  <option>Select Ethnicity</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="email">
                                  Email <span class="mandatory" aria-hidden="true">*</span>
                                </label>
                                <input
                                  type="text"
                                  id="email"
                                  class="form-control"
                                  name="email"
                                  placeholder="Enter Email"
                                  required
                                  aria-required="true"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input
                                  type="text"
                                  id="phone"
                                  class="form-control"
                                  name="phone"
                                  placeholder="Enter Phone Number"
                                  />
                              </div>
                            </div>

                            <!-- Preferred Language -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="preferred-language">Preferred Language</label>
                                <select class="select2 form-select" id="preferred-language">
                                  <option>English</option>
                                </select>
                              </div>
                            </div>

                            <!-- Time Zone -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="time-zone">Time Zone</label>
                                <select class="select2 form-select" id="time-zone">
                                  <option>Select Time Zone</option>
                                </select>
                              </div>
                            </div>

                            <!-- Preferred Providers -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="preferred-providers">Preferred Providers</label>
                                <select class="select2 form-select" id="preferred-providers">
                                  <option>Select Preferred Providers</option>
                                </select>
                              </div>
                            </div>

                            <!-- Disfavored Providers -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="disfavored-providers">Disfavored Providers</label>
                                <select class="select2 form-select" id="disfavored-providers">
                                  <option>Select Disfavored Providers</option>
                                </select>
                              </div>
                            </div>

                            <!-- Assigned Admin-Staff -->
                            <div class="row">
                            <div class="col-md-12 mb-md-2">
                              <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="assigned-admin-staff">Assigned Admin-Staff</label>
                                <input
                                  type="text"
                                  id="assigned-admin-staff"
                                  class="form-control"
                                  name="assigned-admin-staff"
                                  placeholder="Assigned Admin-Staff"
                                  />
                              </div>
                            </div>
                            </div>
                          </div>

                            <!-- Service Consumer Introduction -->
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="service-consumer-introduction-column">
                                  Service Consumer Introduction
                                  </label>
                                  <textarea
                                  class="form-control"
                                  rows="3"
                                  cols="3"
                                  placeholder=""
                                  name="service-consumer-introduction-column"
                                  id="service-consumer-introduction-column"
                                  ></textarea>
                                </div>
                            </div>
            
                             <!-- Service Consumer Introduction Media -->
                            <div class="col-md-6 col-12 mb-4">
                              <label for="formFile"
                                class="form-label">Service Consumer Introduction Media</label>
                                  <input class="form-control" type="file" id="formFile">
                            </div>

                             <!-- Default Billing Address -->
                             <div class="col-md-6 col-12">
                              <div class="mb-4">
                              <div><h3>Default Billing Address</h3></div>
                            </div>
                            </div>

                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                              <div><h3>Default Service Address</h3></div>
                            </div>
                            </div>

                      <!-- Button trigger modal | Add Address POPUP-->
                     <div class="col-md-6 col-12">
                              <div class="mb-4">
                            <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                                    </svg>
                                    <span>Add Address</span>
                                </button>                               </div>
                            </div>

                            <div class="col-md-3 col-12">
                              <div class="mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="same-as-billing-address-checkbox">
                                <label class="form-check-label" for="same-as-billing-address-checkbox">
                                  Same as Billing Address
                                </label>                              
                              </div>
                            </div>

                            <!-- Button trigger modal | Add Address POPUP-->
                            <div class="col-md-3 col-12 text-end">
                              <div class="mb-4">
                                <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                                    </svg>
                                    <span>Add Address</span>
                                </button>                             
                              </div>
                            </div>
                           
                    <!-- Dev Note:
                              Reminder that companies, depts, and customers should allow for multiple industries to be assigned. If multiple, one MUST be selected as default/primary. Allow users to choose another assigned industry in the Booking Form when creating a booking. -->

                              <!-- #Address Tables-->
                              <div class="col-md-12 d-flex col-12 mb-4 gap-4">
                            <!-- #Address left  Table-->
                           <div class="col-md-6 col-12 mb-4 border">
                            <table class="table table-hover">
                              <thead>
                                  <th>#</th>
                                  <th>Address</th>
                                  <th></th>
                                 
                                  
                              </thead>
                              <tbody>
                                  <tr class="odd">
                                      <td>
                                          1
                                      </td>
                                      <td>
                                          <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                                      </td>

                                      <!-- for active class row integrated with JS  -->
                                      <td class="allign-middle">
                                        <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                      </td>
                                </tr>
                                  <tr class="even">
                                      <td>
                                          2
                                      </td>
                                      <td>
                                          <p>Mrs Smith 98 Shirley Street Appartment No. 45 PIMPAMA QLD 4209 AUSTRALIA</p>
                                      </td>

                                      <!-- for active class row integrated with JS  -->
                                      <td class="allign-middle">
                                        <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                      </td>
                                </tr>
                                  <tr class="odd">
                                      <td>
                                          3
                                      </td>
                                      <td>
                                          <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                                      </td>
                                      <!-- for active class row integrated with JS  -->
                                      <td class="allign-middle">
                                        <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                      </td>
                                    </tr>
                              </tbody>
                          </table>
                          </div>

                          <!-- #Address Tables left-->
                          <div class="col-md-6 col-12 mb-4 border">
                            <table class="table table-hover">
                             <thead>
                                 <th>#</th>
                                 <th>Address</th>
                                 <th></th>
                                 
                             </thead>
                             <tbody>
                                 <tr class="odd">
                                     <td>
                                         1
                                     </td>
                                     <td>
                                         <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                                     </td>

                                     <!-- for active class row integrated with JS  -->
                                     <td class="allign-middle">
                                      <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </td>
                               </tr>
                                 <tr class="even">
                                     <td>
                                         2
                                     </td>
                                     <td>
                                         <p>Mrs Smith 98 Shirley Street Appartment No. 45 PIMPAMA QLD 4209 AUSTRALIA</p>
                                     </td>

                                     <!-- for active class row integrated with JS  -->
                                     <td class="allign-middle">
                                      <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </td>
                               </tr>
                                 <tr class="odd">
                                     <td>
                                         3
                                     </td>
                                     <td>
                                         <p>Mrs Smith 98 Shirley Street PIMPAMA QLD 4209 AUSTRALIA</p>
                                     </td>

                                     <!-- for active class row integrated with JS  -->
                                     <td class="allign-middle">
                                      <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10.2852L8.66667 17.2852L22 2.28516" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </td>
                               </tr>
                             </tbody>
                         </table>
                            </div>
                             
                           </div><!-- Address Tables end-div -->
                           
                           <!-- ratio buttons -->
                           <div class="col-md-6 col-12">
                            <div class="mb-4">
                            <div>Grant Access to User(s)' Schedules?</div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="grantAccessToUserSchedulesRatio" id="grant-access-to-user-schedules-ratio" value="option1">
                              <label class="form-check-label" for="grant-access-to-user-schedules-ratio">yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="grantAccessToUserSchedules" id="grant-access-to-user-schedules-ratio" value="option1">
                              <label class="form-check-label" for="grant-access-to-user-schedules-ratio">no</label>
                            </div>
                          </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                              <label class="form-label" for="grant-access-to-user-schedules-column">Grant Access to User(s)' Schedules</label>
                              <select class="select2 form-select" id="grant-access-to-user-schedules-column">
                                <option>Select</option>
                               
                              </select>
                            </div>
                          </div>
                          
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                            <div>Require Service Request Approval from Assigned Supervisor</div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="require-service-request-approval-ratio" id="require-service-request-approval-ratio" value="option1">
                              <label class="form-check-label" for="require-service-request-approval-ratio">yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="restrict-access-to-invoices-&-billing-details-ratio" id="restrict-access-to-invoices-&-billing-details-ratio" value="option1">
                              <label class="form-check-label" for="restrict-access-to-invoices-&-billing-details-ratio">no</label>
                            </div>
                          </div>
                          </div>
                          <div class="col-md-6 col-12">
                            <div class="mb-4">
                            <div>Hide Billing Information from User</div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="hide-billing-information-user-ratio" id="hide-billing-information-user-ratio" value="option1">
                              <label class="form-check-label" for="hide-billing-information-user-ratio">yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="hide-billing-information-user-ratio" id="hide-billing-information-user-ratio" value="option2">
                              <label class="form-check-label" for="hide-billing-information-user-ratio">no</label>
                            </div>
                          </div>
                          </div><!-- ratio buttons end-->
                          
                          <!-- ....cancel/next (buttons)... -->
                            <div class="col-12 justify-content-center form-actions d-flex">
                              <button type="button"
                                  class="btn btn-outline-dark rounded px-4 py-2 mx-2">Cancel</button>
                              <button type="submit"
                                  class="btn btn-primary rounded px-4 py-2">Next</button>
    
                      </div>
                           </div>
                           </div>
                      
                    </form>
                  
                
              </div>
            </div>
            
          </section>
        </div><!-- end Customer Info  -->


        <!--BEGIN: Service Catalog-->
        <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }" @click.prevent="tab = 'service-catalog'; window.location.hash = 'service-catalog'" id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab" tabindex="0" x-show="tab === 'service-catalog'">

          <section id="multiple-column-form">
            <div class="row">
              
                  <div class="card-body">
                    <form class="form">
                      <div class="col-md-8 mb-md-2">
                        <div class="mb-5">
                        <h2>Service Catalog</h2>
                      </div>
                    </div>
                    <!-- ........  -->
                    <div class="col-md-12 mb-md-2">
                      <div class="row">
        
                       <!-- BEGAIN: left column  (Filter By Accommodation)-->
                       <div class="col-md-4 mb-md-2">
                        <div class="mb-3"><p class="fs-5">Filter By Accommodation</p></div>
                          <!-- start left card  -->
                          <div class="content-body">
                            <div class="card">
                            <div class="card-body">
                              <form class="form">
                                <!-- left column | scroll bar start  -->
                                <div class="overflow-y-auto">
                                      <!-- left column table (start)-->
                            <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
        
                              <tbody>
                       
                        <input type="search" class="form-control" id="search" name="search" placeholder="Search" autocomplete="on"/>
                           
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>Shelby Sign Language</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>Language Translation Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>Real Time Captioning Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>Real Time Captioning Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>Real Time Captioning Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>Real Time Captioning Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>	Sign Language Interpreting Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>	Spoken Language Interpreting Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>	Spoken Language Interpreting Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>	Spoken Language Interpreting Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>	Spoken Language Interpreting Services</p>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="text-start">
                              <p>	Spoken Language Interpreting Services</p>
                            </td>
                          </tr>
                          
                        </tbody>
                      
                      </table>
                      <!-- left column table (end)-->
                                </div><!-- left column | scroll bar ends  -->
                              </form>
                          </div>
                          </div>
                       </div><!-- end left card  -->
        
                       </div>
                      <!-- END: left column  -->
        
        <!-- ....................................................  -->
        
                       <!-- BEGAIN: right column  -->
                       <div class="col-md-6 mb-md-2">
                        <div class="mb-3"><p class="fs-5">Select Service</p></div>
                          <!-- start right card  -->
                            <div class="card">
                            <div class="card-body">
                              <form class="form">
                                <!-- right column | scroll bar start  -->
                                <div class="overflow-y-auto">
                                      <!-- right column table (start)-->
                                      <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
                                        <tbody>
                                         
                                              <input type="search" class="form-control" id="search" name="search" placeholder="Search" autocomplete="on"/>
                                          
                                          <tr role="row" class="odd">
                                            <td class="text-start">
                                              <p>Language interpreting</p> 
                                            </td>
                                            <td>
                                              <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                  Active
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="d-flex actions">

                                                <!-- OFF Canvas | Customers  -->
                                                <a @click="offcanvasOpen = true" href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71432)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71432)"/>
                                                    </g>
                                                    <path d="M18.8215 21.9768L18.2455 17.3652C18.1639 16.712 17.8464 16.1111 17.3528 15.6756C16.8593 15.24 16.2236 14.9997 15.5653 15H13.5817C12.9237 15.0002 12.2885 15.2406 11.7953 15.6762C11.3021 16.1117 10.9849 16.7123 10.9033 17.3652L10.3264 21.9768C10.2947 22.2302 10.3173 22.4874 10.3927 22.7313C10.4681 22.9753 10.5945 23.2004 10.7635 23.3918C10.9326 23.5831 11.1404 23.7363 11.3732 23.8412C11.606 23.946 11.8585 24.0002 12.1138 24H17.035C17.2902 24.0001 17.5426 23.9458 17.7753 23.8409C18.008 23.736 18.2157 23.5828 18.3847 23.3914C18.5536 23.2001 18.6799 22.975 18.7552 22.7311C18.8306 22.4872 18.8531 22.2301 18.8215 21.9768V21.9768Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.575 11.4C16.0662 11.4 17.275 10.1912 17.275 8.7C17.275 7.20883 16.0662 6 14.575 6C13.0838 6 11.875 7.20883 11.875 8.7C11.875 10.1912 13.0838 11.4 14.575 11.4Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37617 14.1C8.37028 14.1 9.17617 13.2941 9.17617 12.3C9.17617 11.3059 8.37028 10.5 7.37617 10.5C6.38206 10.5 5.57617 11.3059 5.57617 12.3C5.57617 13.2941 6.38206 14.1 7.37617 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M21.7746 14.1C22.7687 14.1 23.5746 13.2941 23.5746 12.3C23.5746 11.3059 22.7687 10.5 21.7746 10.5C20.7805 10.5 19.9746 11.3059 19.9746 12.3C19.9746 13.2941 20.7805 14.1 21.7746 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37532 16.8008H7.09992C6.67383 16.8007 6.26153 16.9518 5.93638 17.2272C5.61123 17.5026 5.39431 17.8844 5.32422 18.3047L5.02452 20.1047C4.98151 20.3626 4.9952 20.6267 5.06463 20.8788C5.13407 21.1309 5.25758 21.3648 5.42658 21.5643C5.59557 21.7638 5.806 21.924 6.04323 22.034C6.28045 22.1439 6.53877 22.2008 6.80022 22.2008H10.0753M21.7753 16.8008H22.0507C22.4768 16.8007 22.8891 16.9518 23.2143 17.2272C23.5394 17.5026 23.7563 17.8844 23.8264 18.3047L24.1261 20.1047C24.1691 20.3626 24.1554 20.6267 24.086 20.8788C24.0166 21.1309 23.8931 21.3648 23.7241 21.5643C23.5551 21.7638 23.3446 21.924 23.1074 22.034C22.8702 22.1439 22.6119 22.2008 22.3504 22.2008H19.0753" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71432">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                
                                              </a>
                                                <a href="" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71446)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71446)"/>
                                                    </g>
                                                    <path d="M8.57087 6.55077V23.6092H16.2852V6.55077H8.57087ZM7.92801 5H16.928C17.0985 5 17.262 5.08169 17.3826 5.2271C17.5031 5.37252 17.5709 5.56974 17.5709 5.77538V24.3846C17.5709 24.5903 17.5031 24.7875 17.3826 24.9329C17.262 25.0783 17.0985 25.16 16.928 25.16H7.92801C7.75752 25.16 7.594 25.0783 7.47344 24.9329C7.35289 24.7875 7.28516 24.5903 7.28516 24.3846V5.77538C7.28516 5.56974 7.35289 5.37252 7.47344 5.2271C7.594 5.08169 7.75752 5 7.92801 5Z" fill="black"/>
                                                    <path d="M9.85714 9.65234H15V11.2031H9.85714V9.65234ZM9.85714 14.3047H15V15.8554H9.85714V14.3047ZM9.85714 18.957H15V20.5077H9.85714V18.957ZM17.5714 15.8554H20.1429V17.4062H17.5714V15.8554ZM17.5714 18.957H20.1429V20.5077H17.5714V18.957ZM6 23.6093H24V25.16H6V23.6093Z" fill="black"/>
                                                    <path d="M17.5709 12.7539V23.6093H21.428V12.7539H17.5709ZM16.928 11.2031H22.0709C22.2414 11.2031 22.4049 11.2848 22.5254 11.4302C22.646 11.5756 22.7137 11.7729 22.7137 11.9785V24.3847C22.7137 24.5903 22.646 24.7875 22.5254 24.9329C22.4049 25.0784 22.2414 25.16 22.0709 25.16H16.928C16.7575 25.16 16.594 25.0784 16.4734 24.9329C16.3529 24.7875 16.2852 24.5903 16.2852 24.3847V11.9785C16.2852 11.7729 16.3529 11.5756 16.4734 11.4302C16.594 11.2848 16.7575 11.2031 16.928 11.2031Z" fill="black"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71446">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                          <!-- ......  -->
                                          <tr role="row" class="odd">
                                            <td class="text-start">
                                              <p>New service capacity and capabilities</p>
                                            </td>
                                            <td>
                                              <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                  Active
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="d-flex actions">
                                                <!-- OFF Canvas | Customers  -->
                                                <a @click="offcanvasOpen = true" href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71432)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71432)"/>
                                                    </g>
                                                    <path d="M18.8215 21.9768L18.2455 17.3652C18.1639 16.712 17.8464 16.1111 17.3528 15.6756C16.8593 15.24 16.2236 14.9997 15.5653 15H13.5817C12.9237 15.0002 12.2885 15.2406 11.7953 15.6762C11.3021 16.1117 10.9849 16.7123 10.9033 17.3652L10.3264 21.9768C10.2947 22.2302 10.3173 22.4874 10.3927 22.7313C10.4681 22.9753 10.5945 23.2004 10.7635 23.3918C10.9326 23.5831 11.1404 23.7363 11.3732 23.8412C11.606 23.946 11.8585 24.0002 12.1138 24H17.035C17.2902 24.0001 17.5426 23.9458 17.7753 23.8409C18.008 23.736 18.2157 23.5828 18.3847 23.3914C18.5536 23.2001 18.6799 22.975 18.7552 22.7311C18.8306 22.4872 18.8531 22.2301 18.8215 21.9768V21.9768Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.575 11.4C16.0662 11.4 17.275 10.1912 17.275 8.7C17.275 7.20883 16.0662 6 14.575 6C13.0838 6 11.875 7.20883 11.875 8.7C11.875 10.1912 13.0838 11.4 14.575 11.4Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37617 14.1C8.37028 14.1 9.17617 13.2941 9.17617 12.3C9.17617 11.3059 8.37028 10.5 7.37617 10.5C6.38206 10.5 5.57617 11.3059 5.57617 12.3C5.57617 13.2941 6.38206 14.1 7.37617 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M21.7746 14.1C22.7687 14.1 23.5746 13.2941 23.5746 12.3C23.5746 11.3059 22.7687 10.5 21.7746 10.5C20.7805 10.5 19.9746 11.3059 19.9746 12.3C19.9746 13.2941 20.7805 14.1 21.7746 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37532 16.8008H7.09992C6.67383 16.8007 6.26153 16.9518 5.93638 17.2272C5.61123 17.5026 5.39431 17.8844 5.32422 18.3047L5.02452 20.1047C4.98151 20.3626 4.9952 20.6267 5.06463 20.8788C5.13407 21.1309 5.25758 21.3648 5.42658 21.5643C5.59557 21.7638 5.806 21.924 6.04323 22.034C6.28045 22.1439 6.53877 22.2008 6.80022 22.2008H10.0753M21.7753 16.8008H22.0507C22.4768 16.8007 22.8891 16.9518 23.2143 17.2272C23.5394 17.5026 23.7563 17.8844 23.8264 18.3047L24.1261 20.1047C24.1691 20.3626 24.1554 20.6267 24.086 20.8788C24.0166 21.1309 23.8931 21.3648 23.7241 21.5643C23.5551 21.7638 23.3446 21.924 23.1074 22.034C22.8702 22.1439 22.6119 22.2008 22.3504 22.2008H19.0753" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71432">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                                <a href="" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71446)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71446)"/>
                                                    </g>
                                                    <path d="M8.57087 6.55077V23.6092H16.2852V6.55077H8.57087ZM7.92801 5H16.928C17.0985 5 17.262 5.08169 17.3826 5.2271C17.5031 5.37252 17.5709 5.56974 17.5709 5.77538V24.3846C17.5709 24.5903 17.5031 24.7875 17.3826 24.9329C17.262 25.0783 17.0985 25.16 16.928 25.16H7.92801C7.75752 25.16 7.594 25.0783 7.47344 24.9329C7.35289 24.7875 7.28516 24.5903 7.28516 24.3846V5.77538C7.28516 5.56974 7.35289 5.37252 7.47344 5.2271C7.594 5.08169 7.75752 5 7.92801 5Z" fill="black"/>
                                                    <path d="M9.85714 9.65234H15V11.2031H9.85714V9.65234ZM9.85714 14.3047H15V15.8554H9.85714V14.3047ZM9.85714 18.957H15V20.5077H9.85714V18.957ZM17.5714 15.8554H20.1429V17.4062H17.5714V15.8554ZM17.5714 18.957H20.1429V20.5077H17.5714V18.957ZM6 23.6093H24V25.16H6V23.6093Z" fill="black"/>
                                                    <path d="M17.5709 12.7539V23.6093H21.428V12.7539H17.5709ZM16.928 11.2031H22.0709C22.2414 11.2031 22.4049 11.2848 22.5254 11.4302C22.646 11.5756 22.7137 11.7729 22.7137 11.9785V24.3847C22.7137 24.5903 22.646 24.7875 22.5254 24.9329C22.4049 25.0784 22.2414 25.16 22.0709 25.16H16.928C16.7575 25.16 16.594 25.0784 16.4734 24.9329C16.3529 24.7875 16.2852 24.5903 16.2852 24.3847V11.9785C16.2852 11.7729 16.3529 11.5756 16.4734 11.4302C16.594 11.2848 16.7575 11.2031 16.928 11.2031Z" fill="black"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71446">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                          <!-- ......  -->
                                          <tr role="row" class="odd">
                                            <td class="text-start">
                                              <p>Shelby test two service</p>
                                            </td>
                                            <td>
                                              <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                  Active
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="d-flex actions">
                                                <!-- OFF Canvas | Customers  -->
                                                <a @click="offcanvasOpen = true" href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71432)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71432)"/>
                                                    </g>
                                                    <path d="M18.8215 21.9768L18.2455 17.3652C18.1639 16.712 17.8464 16.1111 17.3528 15.6756C16.8593 15.24 16.2236 14.9997 15.5653 15H13.5817C12.9237 15.0002 12.2885 15.2406 11.7953 15.6762C11.3021 16.1117 10.9849 16.7123 10.9033 17.3652L10.3264 21.9768C10.2947 22.2302 10.3173 22.4874 10.3927 22.7313C10.4681 22.9753 10.5945 23.2004 10.7635 23.3918C10.9326 23.5831 11.1404 23.7363 11.3732 23.8412C11.606 23.946 11.8585 24.0002 12.1138 24H17.035C17.2902 24.0001 17.5426 23.9458 17.7753 23.8409C18.008 23.736 18.2157 23.5828 18.3847 23.3914C18.5536 23.2001 18.6799 22.975 18.7552 22.7311C18.8306 22.4872 18.8531 22.2301 18.8215 21.9768V21.9768Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.575 11.4C16.0662 11.4 17.275 10.1912 17.275 8.7C17.275 7.20883 16.0662 6 14.575 6C13.0838 6 11.875 7.20883 11.875 8.7C11.875 10.1912 13.0838 11.4 14.575 11.4Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37617 14.1C8.37028 14.1 9.17617 13.2941 9.17617 12.3C9.17617 11.3059 8.37028 10.5 7.37617 10.5C6.38206 10.5 5.57617 11.3059 5.57617 12.3C5.57617 13.2941 6.38206 14.1 7.37617 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M21.7746 14.1C22.7687 14.1 23.5746 13.2941 23.5746 12.3C23.5746 11.3059 22.7687 10.5 21.7746 10.5C20.7805 10.5 19.9746 11.3059 19.9746 12.3C19.9746 13.2941 20.7805 14.1 21.7746 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37532 16.8008H7.09992C6.67383 16.8007 6.26153 16.9518 5.93638 17.2272C5.61123 17.5026 5.39431 17.8844 5.32422 18.3047L5.02452 20.1047C4.98151 20.3626 4.9952 20.6267 5.06463 20.8788C5.13407 21.1309 5.25758 21.3648 5.42658 21.5643C5.59557 21.7638 5.806 21.924 6.04323 22.034C6.28045 22.1439 6.53877 22.2008 6.80022 22.2008H10.0753M21.7753 16.8008H22.0507C22.4768 16.8007 22.8891 16.9518 23.2143 17.2272C23.5394 17.5026 23.7563 17.8844 23.8264 18.3047L24.1261 20.1047C24.1691 20.3626 24.1554 20.6267 24.086 20.8788C24.0166 21.1309 23.8931 21.3648 23.7241 21.5643C23.5551 21.7638 23.3446 21.924 23.1074 22.034C22.8702 22.1439 22.6119 22.2008 22.3504 22.2008H19.0753" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71432">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                                <a href="" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71446)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71446)"/>
                                                    </g>
                                                    <path d="M8.57087 6.55077V23.6092H16.2852V6.55077H8.57087ZM7.92801 5H16.928C17.0985 5 17.262 5.08169 17.3826 5.2271C17.5031 5.37252 17.5709 5.56974 17.5709 5.77538V24.3846C17.5709 24.5903 17.5031 24.7875 17.3826 24.9329C17.262 25.0783 17.0985 25.16 16.928 25.16H7.92801C7.75752 25.16 7.594 25.0783 7.47344 24.9329C7.35289 24.7875 7.28516 24.5903 7.28516 24.3846V5.77538C7.28516 5.56974 7.35289 5.37252 7.47344 5.2271C7.594 5.08169 7.75752 5 7.92801 5Z" fill="black"/>
                                                    <path d="M9.85714 9.65234H15V11.2031H9.85714V9.65234ZM9.85714 14.3047H15V15.8554H9.85714V14.3047ZM9.85714 18.957H15V20.5077H9.85714V18.957ZM17.5714 15.8554H20.1429V17.4062H17.5714V15.8554ZM17.5714 18.957H20.1429V20.5077H17.5714V18.957ZM6 23.6093H24V25.16H6V23.6093Z" fill="black"/>
                                                    <path d="M17.5709 12.7539V23.6093H21.428V12.7539H17.5709ZM16.928 11.2031H22.0709C22.2414 11.2031 22.4049 11.2848 22.5254 11.4302C22.646 11.5756 22.7137 11.7729 22.7137 11.9785V24.3847C22.7137 24.5903 22.646 24.7875 22.5254 24.9329C22.4049 25.0784 22.2414 25.16 22.0709 25.16H16.928C16.7575 25.16 16.594 25.0784 16.4734 24.9329C16.3529 24.7875 16.2852 24.5903 16.2852 24.3847V11.9785C16.2852 11.7729 16.3529 11.5756 16.4734 11.4302C16.594 11.2848 16.7575 11.2031 16.928 11.2031Z" fill="black"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71446">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                          <!-- ......  -->
                                          <tr role="row" class="odd">
                                            <td class="text-start">
                                              <p>CART Captioning</p>
                                            </td>
                                            <td>
                                              <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                  Active
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="d-flex actions">
                                                <!-- OFF Canvas | Customers  -->
                                                <a @click="offcanvasOpen = true" href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71432)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71432)"/>
                                                    </g>
                                                    <path d="M18.8215 21.9768L18.2455 17.3652C18.1639 16.712 17.8464 16.1111 17.3528 15.6756C16.8593 15.24 16.2236 14.9997 15.5653 15H13.5817C12.9237 15.0002 12.2885 15.2406 11.7953 15.6762C11.3021 16.1117 10.9849 16.7123 10.9033 17.3652L10.3264 21.9768C10.2947 22.2302 10.3173 22.4874 10.3927 22.7313C10.4681 22.9753 10.5945 23.2004 10.7635 23.3918C10.9326 23.5831 11.1404 23.7363 11.3732 23.8412C11.606 23.946 11.8585 24.0002 12.1138 24H17.035C17.2902 24.0001 17.5426 23.9458 17.7753 23.8409C18.008 23.736 18.2157 23.5828 18.3847 23.3914C18.5536 23.2001 18.6799 22.975 18.7552 22.7311C18.8306 22.4872 18.8531 22.2301 18.8215 21.9768V21.9768Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.575 11.4C16.0662 11.4 17.275 10.1912 17.275 8.7C17.275 7.20883 16.0662 6 14.575 6C13.0838 6 11.875 7.20883 11.875 8.7C11.875 10.1912 13.0838 11.4 14.575 11.4Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37617 14.1C8.37028 14.1 9.17617 13.2941 9.17617 12.3C9.17617 11.3059 8.37028 10.5 7.37617 10.5C6.38206 10.5 5.57617 11.3059 5.57617 12.3C5.57617 13.2941 6.38206 14.1 7.37617 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M21.7746 14.1C22.7687 14.1 23.5746 13.2941 23.5746 12.3C23.5746 11.3059 22.7687 10.5 21.7746 10.5C20.7805 10.5 19.9746 11.3059 19.9746 12.3C19.9746 13.2941 20.7805 14.1 21.7746 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37532 16.8008H7.09992C6.67383 16.8007 6.26153 16.9518 5.93638 17.2272C5.61123 17.5026 5.39431 17.8844 5.32422 18.3047L5.02452 20.1047C4.98151 20.3626 4.9952 20.6267 5.06463 20.8788C5.13407 21.1309 5.25758 21.3648 5.42658 21.5643C5.59557 21.7638 5.806 21.924 6.04323 22.034C6.28045 22.1439 6.53877 22.2008 6.80022 22.2008H10.0753M21.7753 16.8008H22.0507C22.4768 16.8007 22.8891 16.9518 23.2143 17.2272C23.5394 17.5026 23.7563 17.8844 23.8264 18.3047L24.1261 20.1047C24.1691 20.3626 24.1554 20.6267 24.086 20.8788C24.0166 21.1309 23.8931 21.3648 23.7241 21.5643C23.5551 21.7638 23.3446 21.924 23.1074 22.034C22.8702 22.1439 22.6119 22.2008 22.3504 22.2008H19.0753" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71432">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                                <a href="" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71446)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71446)"/>
                                                    </g>
                                                    <path d="M8.57087 6.55077V23.6092H16.2852V6.55077H8.57087ZM7.92801 5H16.928C17.0985 5 17.262 5.08169 17.3826 5.2271C17.5031 5.37252 17.5709 5.56974 17.5709 5.77538V24.3846C17.5709 24.5903 17.5031 24.7875 17.3826 24.9329C17.262 25.0783 17.0985 25.16 16.928 25.16H7.92801C7.75752 25.16 7.594 25.0783 7.47344 24.9329C7.35289 24.7875 7.28516 24.5903 7.28516 24.3846V5.77538C7.28516 5.56974 7.35289 5.37252 7.47344 5.2271C7.594 5.08169 7.75752 5 7.92801 5Z" fill="black"/>
                                                    <path d="M9.85714 9.65234H15V11.2031H9.85714V9.65234ZM9.85714 14.3047H15V15.8554H9.85714V14.3047ZM9.85714 18.957H15V20.5077H9.85714V18.957ZM17.5714 15.8554H20.1429V17.4062H17.5714V15.8554ZM17.5714 18.957H20.1429V20.5077H17.5714V18.957ZM6 23.6093H24V25.16H6V23.6093Z" fill="black"/>
                                                    <path d="M17.5709 12.7539V23.6093H21.428V12.7539H17.5709ZM16.928 11.2031H22.0709C22.2414 11.2031 22.4049 11.2848 22.5254 11.4302C22.646 11.5756 22.7137 11.7729 22.7137 11.9785V24.3847C22.7137 24.5903 22.646 24.7875 22.5254 24.9329C22.4049 25.0784 22.2414 25.16 22.0709 25.16H16.928C16.7575 25.16 16.594 25.0784 16.4734 24.9329C16.3529 24.7875 16.2852 24.5903 16.2852 24.3847V11.9785C16.2852 11.7729 16.3529 11.5756 16.4734 11.4302C16.594 11.2848 16.7575 11.2031 16.928 11.2031Z" fill="black"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71446">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                          <!-- ......  -->
                                          <tr role="row" class="odd">
                                            <td class="text-start">
                                              <p>Transcript Services</p>
                                            </td>
                                            <td>
                                              <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                  Active
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="d-flex actions">
                                                <!-- OFF Canvas | Customers  -->
                                                <a @click="offcanvasOpen = true" href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71432)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71432)"/>
                                                    </g>
                                                    <path d="M18.8215 21.9768L18.2455 17.3652C18.1639 16.712 17.8464 16.1111 17.3528 15.6756C16.8593 15.24 16.2236 14.9997 15.5653 15H13.5817C12.9237 15.0002 12.2885 15.2406 11.7953 15.6762C11.3021 16.1117 10.9849 16.7123 10.9033 17.3652L10.3264 21.9768C10.2947 22.2302 10.3173 22.4874 10.3927 22.7313C10.4681 22.9753 10.5945 23.2004 10.7635 23.3918C10.9326 23.5831 11.1404 23.7363 11.3732 23.8412C11.606 23.946 11.8585 24.0002 12.1138 24H17.035C17.2902 24.0001 17.5426 23.9458 17.7753 23.8409C18.008 23.736 18.2157 23.5828 18.3847 23.3914C18.5536 23.2001 18.6799 22.975 18.7552 22.7311C18.8306 22.4872 18.8531 22.2301 18.8215 21.9768V21.9768Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.575 11.4C16.0662 11.4 17.275 10.1912 17.275 8.7C17.275 7.20883 16.0662 6 14.575 6C13.0838 6 11.875 7.20883 11.875 8.7C11.875 10.1912 13.0838 11.4 14.575 11.4Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37617 14.1C8.37028 14.1 9.17617 13.2941 9.17617 12.3C9.17617 11.3059 8.37028 10.5 7.37617 10.5C6.38206 10.5 5.57617 11.3059 5.57617 12.3C5.57617 13.2941 6.38206 14.1 7.37617 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M21.7746 14.1C22.7687 14.1 23.5746 13.2941 23.5746 12.3C23.5746 11.3059 22.7687 10.5 21.7746 10.5C20.7805 10.5 19.9746 11.3059 19.9746 12.3C19.9746 13.2941 20.7805 14.1 21.7746 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37532 16.8008H7.09992C6.67383 16.8007 6.26153 16.9518 5.93638 17.2272C5.61123 17.5026 5.39431 17.8844 5.32422 18.3047L5.02452 20.1047C4.98151 20.3626 4.9952 20.6267 5.06463 20.8788C5.13407 21.1309 5.25758 21.3648 5.42658 21.5643C5.59557 21.7638 5.806 21.924 6.04323 22.034C6.28045 22.1439 6.53877 22.2008 6.80022 22.2008H10.0753M21.7753 16.8008H22.0507C22.4768 16.8007 22.8891 16.9518 23.2143 17.2272C23.5394 17.5026 23.7563 17.8844 23.8264 18.3047L24.1261 20.1047C24.1691 20.3626 24.1554 20.6267 24.086 20.8788C24.0166 21.1309 23.8931 21.3648 23.7241 21.5643C23.5551 21.7638 23.3446 21.924 23.1074 22.034C22.8702 22.1439 22.6119 22.2008 22.3504 22.2008H19.0753" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71432">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                                <a href="" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71446)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71446)"/>
                                                    </g>
                                                    <path d="M8.57087 6.55077V23.6092H16.2852V6.55077H8.57087ZM7.92801 5H16.928C17.0985 5 17.262 5.08169 17.3826 5.2271C17.5031 5.37252 17.5709 5.56974 17.5709 5.77538V24.3846C17.5709 24.5903 17.5031 24.7875 17.3826 24.9329C17.262 25.0783 17.0985 25.16 16.928 25.16H7.92801C7.75752 25.16 7.594 25.0783 7.47344 24.9329C7.35289 24.7875 7.28516 24.5903 7.28516 24.3846V5.77538C7.28516 5.56974 7.35289 5.37252 7.47344 5.2271C7.594 5.08169 7.75752 5 7.92801 5Z" fill="black"/>
                                                    <path d="M9.85714 9.65234H15V11.2031H9.85714V9.65234ZM9.85714 14.3047H15V15.8554H9.85714V14.3047ZM9.85714 18.957H15V20.5077H9.85714V18.957ZM17.5714 15.8554H20.1429V17.4062H17.5714V15.8554ZM17.5714 18.957H20.1429V20.5077H17.5714V18.957ZM6 23.6093H24V25.16H6V23.6093Z" fill="black"/>
                                                    <path d="M17.5709 12.7539V23.6093H21.428V12.7539H17.5709ZM16.928 11.2031H22.0709C22.2414 11.2031 22.4049 11.2848 22.5254 11.4302C22.646 11.5756 22.7137 11.7729 22.7137 11.9785V24.3847C22.7137 24.5903 22.646 24.7875 22.5254 24.9329C22.4049 25.0784 22.2414 25.16 22.0709 25.16H16.928C16.7575 25.16 16.594 25.0784 16.4734 24.9329C16.3529 24.7875 16.2852 24.5903 16.2852 24.3847V11.9785C16.2852 11.7729 16.3529 11.5756 16.4734 11.4302C16.594 11.2848 16.7575 11.2031 16.928 11.2031Z" fill="black"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71446">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                          <!-- ......  -->
                                          <tr role="row" class="odd">
                                            <td class="text-start">
                                              <p>Transcript Services</p>
                                            </td>
                                            <td>
                                              <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                  Active
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="d-flex actions">
                                                <!-- OFF Canvas | Customers  -->
                                                <a @click="offcanvasOpen = true" href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71432)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71432)"/>
                                                    </g>
                                                    <path d="M18.8215 21.9768L18.2455 17.3652C18.1639 16.712 17.8464 16.1111 17.3528 15.6756C16.8593 15.24 16.2236 14.9997 15.5653 15H13.5817C12.9237 15.0002 12.2885 15.2406 11.7953 15.6762C11.3021 16.1117 10.9849 16.7123 10.9033 17.3652L10.3264 21.9768C10.2947 22.2302 10.3173 22.4874 10.3927 22.7313C10.4681 22.9753 10.5945 23.2004 10.7635 23.3918C10.9326 23.5831 11.1404 23.7363 11.3732 23.8412C11.606 23.946 11.8585 24.0002 12.1138 24H17.035C17.2902 24.0001 17.5426 23.9458 17.7753 23.8409C18.008 23.736 18.2157 23.5828 18.3847 23.3914C18.5536 23.2001 18.6799 22.975 18.7552 22.7311C18.8306 22.4872 18.8531 22.2301 18.8215 21.9768V21.9768Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.575 11.4C16.0662 11.4 17.275 10.1912 17.275 8.7C17.275 7.20883 16.0662 6 14.575 6C13.0838 6 11.875 7.20883 11.875 8.7C11.875 10.1912 13.0838 11.4 14.575 11.4Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37617 14.1C8.37028 14.1 9.17617 13.2941 9.17617 12.3C9.17617 11.3059 8.37028 10.5 7.37617 10.5C6.38206 10.5 5.57617 11.3059 5.57617 12.3C5.57617 13.2941 6.38206 14.1 7.37617 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M21.7746 14.1C22.7687 14.1 23.5746 13.2941 23.5746 12.3C23.5746 11.3059 22.7687 10.5 21.7746 10.5C20.7805 10.5 19.9746 11.3059 19.9746 12.3C19.9746 13.2941 20.7805 14.1 21.7746 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37532 16.8008H7.09992C6.67383 16.8007 6.26153 16.9518 5.93638 17.2272C5.61123 17.5026 5.39431 17.8844 5.32422 18.3047L5.02452 20.1047C4.98151 20.3626 4.9952 20.6267 5.06463 20.8788C5.13407 21.1309 5.25758 21.3648 5.42658 21.5643C5.59557 21.7638 5.806 21.924 6.04323 22.034C6.28045 22.1439 6.53877 22.2008 6.80022 22.2008H10.0753M21.7753 16.8008H22.0507C22.4768 16.8007 22.8891 16.9518 23.2143 17.2272C23.5394 17.5026 23.7563 17.8844 23.8264 18.3047L24.1261 20.1047C24.1691 20.3626 24.1554 20.6267 24.086 20.8788C24.0166 21.1309 23.8931 21.3648 23.7241 21.5643C23.5551 21.7638 23.3446 21.924 23.1074 22.034C22.8702 22.1439 22.6119 22.2008 22.3504 22.2008H19.0753" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71432">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                                <a href="" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71446)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71446)"/>
                                                    </g>
                                                    <path d="M8.57087 6.55077V23.6092H16.2852V6.55077H8.57087ZM7.92801 5H16.928C17.0985 5 17.262 5.08169 17.3826 5.2271C17.5031 5.37252 17.5709 5.56974 17.5709 5.77538V24.3846C17.5709 24.5903 17.5031 24.7875 17.3826 24.9329C17.262 25.0783 17.0985 25.16 16.928 25.16H7.92801C7.75752 25.16 7.594 25.0783 7.47344 24.9329C7.35289 24.7875 7.28516 24.5903 7.28516 24.3846V5.77538C7.28516 5.56974 7.35289 5.37252 7.47344 5.2271C7.594 5.08169 7.75752 5 7.92801 5Z" fill="black"/>
                                                    <path d="M9.85714 9.65234H15V11.2031H9.85714V9.65234ZM9.85714 14.3047H15V15.8554H9.85714V14.3047ZM9.85714 18.957H15V20.5077H9.85714V18.957ZM17.5714 15.8554H20.1429V17.4062H17.5714V15.8554ZM17.5714 18.957H20.1429V20.5077H17.5714V18.957ZM6 23.6093H24V25.16H6V23.6093Z" fill="black"/>
                                                    <path d="M17.5709 12.7539V23.6093H21.428V12.7539H17.5709ZM16.928 11.2031H22.0709C22.2414 11.2031 22.4049 11.2848 22.5254 11.4302C22.646 11.5756 22.7137 11.7729 22.7137 11.9785V24.3847C22.7137 24.5903 22.646 24.7875 22.5254 24.9329C22.4049 25.0784 22.2414 25.16 22.0709 25.16H16.928C16.7575 25.16 16.594 25.0784 16.4734 24.9329C16.3529 24.7875 16.2852 24.5903 16.2852 24.3847V11.9785C16.2852 11.7729 16.3529 11.5756 16.4734 11.4302C16.594 11.2848 16.7575 11.2031 16.928 11.2031Z" fill="black"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71446">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                          <!-- ......  -->
                                          <tr role="row" class="odd">
                                            <td class="text-start">
                                              <p>Transcript Services</p>
                                            </td>
                                            <td>
                                              <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                  Active
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="d-flex actions">
                                                <!-- OFF Canvas | Customers  -->
                                                <a @click="offcanvasOpen = true" href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71432)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71432)"/>
                                                    </g>
                                                    <path d="M18.8215 21.9768L18.2455 17.3652C18.1639 16.712 17.8464 16.1111 17.3528 15.6756C16.8593 15.24 16.2236 14.9997 15.5653 15H13.5817C12.9237 15.0002 12.2885 15.2406 11.7953 15.6762C11.3021 16.1117 10.9849 16.7123 10.9033 17.3652L10.3264 21.9768C10.2947 22.2302 10.3173 22.4874 10.3927 22.7313C10.4681 22.9753 10.5945 23.2004 10.7635 23.3918C10.9326 23.5831 11.1404 23.7363 11.3732 23.8412C11.606 23.946 11.8585 24.0002 12.1138 24H17.035C17.2902 24.0001 17.5426 23.9458 17.7753 23.8409C18.008 23.736 18.2157 23.5828 18.3847 23.3914C18.5536 23.2001 18.6799 22.975 18.7552 22.7311C18.8306 22.4872 18.8531 22.2301 18.8215 21.9768V21.9768Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.575 11.4C16.0662 11.4 17.275 10.1912 17.275 8.7C17.275 7.20883 16.0662 6 14.575 6C13.0838 6 11.875 7.20883 11.875 8.7C11.875 10.1912 13.0838 11.4 14.575 11.4Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37617 14.1C8.37028 14.1 9.17617 13.2941 9.17617 12.3C9.17617 11.3059 8.37028 10.5 7.37617 10.5C6.38206 10.5 5.57617 11.3059 5.57617 12.3C5.57617 13.2941 6.38206 14.1 7.37617 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M21.7746 14.1C22.7687 14.1 23.5746 13.2941 23.5746 12.3C23.5746 11.3059 22.7687 10.5 21.7746 10.5C20.7805 10.5 19.9746 11.3059 19.9746 12.3C19.9746 13.2941 20.7805 14.1 21.7746 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37532 16.8008H7.09992C6.67383 16.8007 6.26153 16.9518 5.93638 17.2272C5.61123 17.5026 5.39431 17.8844 5.32422 18.3047L5.02452 20.1047C4.98151 20.3626 4.9952 20.6267 5.06463 20.8788C5.13407 21.1309 5.25758 21.3648 5.42658 21.5643C5.59557 21.7638 5.806 21.924 6.04323 22.034C6.28045 22.1439 6.53877 22.2008 6.80022 22.2008H10.0753M21.7753 16.8008H22.0507C22.4768 16.8007 22.8891 16.9518 23.2143 17.2272C23.5394 17.5026 23.7563 17.8844 23.8264 18.3047L24.1261 20.1047C24.1691 20.3626 24.1554 20.6267 24.086 20.8788C24.0166 21.1309 23.8931 21.3648 23.7241 21.5643C23.5551 21.7638 23.3446 21.924 23.1074 22.034C22.8702 22.1439 22.6119 22.2008 22.3504 22.2008H19.0753" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71432">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                                <a href="" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71446)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71446)"/>
                                                    </g>
                                                    <path d="M8.57087 6.55077V23.6092H16.2852V6.55077H8.57087ZM7.92801 5H16.928C17.0985 5 17.262 5.08169 17.3826 5.2271C17.5031 5.37252 17.5709 5.56974 17.5709 5.77538V24.3846C17.5709 24.5903 17.5031 24.7875 17.3826 24.9329C17.262 25.0783 17.0985 25.16 16.928 25.16H7.92801C7.75752 25.16 7.594 25.0783 7.47344 24.9329C7.35289 24.7875 7.28516 24.5903 7.28516 24.3846V5.77538C7.28516 5.56974 7.35289 5.37252 7.47344 5.2271C7.594 5.08169 7.75752 5 7.92801 5Z" fill="black"/>
                                                    <path d="M9.85714 9.65234H15V11.2031H9.85714V9.65234ZM9.85714 14.3047H15V15.8554H9.85714V14.3047ZM9.85714 18.957H15V20.5077H9.85714V18.957ZM17.5714 15.8554H20.1429V17.4062H17.5714V15.8554ZM17.5714 18.957H20.1429V20.5077H17.5714V18.957ZM6 23.6093H24V25.16H6V23.6093Z" fill="black"/>
                                                    <path d="M17.5709 12.7539V23.6093H21.428V12.7539H17.5709ZM16.928 11.2031H22.0709C22.2414 11.2031 22.4049 11.2848 22.5254 11.4302C22.646 11.5756 22.7137 11.7729 22.7137 11.9785V24.3847C22.7137 24.5903 22.646 24.7875 22.5254 24.9329C22.4049 25.0784 22.2414 25.16 22.0709 25.16H16.928C16.7575 25.16 16.594 25.0784 16.4734 24.9329C16.3529 24.7875 16.2852 24.5903 16.2852 24.3847V11.9785C16.2852 11.7729 16.3529 11.5756 16.4734 11.4302C16.594 11.2848 16.7575 11.2031 16.928 11.2031Z" fill="black"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71446">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                          <!-- ......  -->
                                          <tr role="row" class="odd">
                                            <td class="text-start">
                                              <p>Transcript Services</p>
                                            </td>
                                            <td>
                                              <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                  Active
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="d-flex actions">
                                                <!-- OFF Canvas | Customers  -->
                                                <a @click="offcanvasOpen = true" href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71432)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71432)"/>
                                                    </g>
                                                    <path d="M18.8215 21.9768L18.2455 17.3652C18.1639 16.712 17.8464 16.1111 17.3528 15.6756C16.8593 15.24 16.2236 14.9997 15.5653 15H13.5817C12.9237 15.0002 12.2885 15.2406 11.7953 15.6762C11.3021 16.1117 10.9849 16.7123 10.9033 17.3652L10.3264 21.9768C10.2947 22.2302 10.3173 22.4874 10.3927 22.7313C10.4681 22.9753 10.5945 23.2004 10.7635 23.3918C10.9326 23.5831 11.1404 23.7363 11.3732 23.8412C11.606 23.946 11.8585 24.0002 12.1138 24H17.035C17.2902 24.0001 17.5426 23.9458 17.7753 23.8409C18.008 23.736 18.2157 23.5828 18.3847 23.3914C18.5536 23.2001 18.6799 22.975 18.7552 22.7311C18.8306 22.4872 18.8531 22.2301 18.8215 21.9768V21.9768Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.575 11.4C16.0662 11.4 17.275 10.1912 17.275 8.7C17.275 7.20883 16.0662 6 14.575 6C13.0838 6 11.875 7.20883 11.875 8.7C11.875 10.1912 13.0838 11.4 14.575 11.4Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37617 14.1C8.37028 14.1 9.17617 13.2941 9.17617 12.3C9.17617 11.3059 8.37028 10.5 7.37617 10.5C6.38206 10.5 5.57617 11.3059 5.57617 12.3C5.57617 13.2941 6.38206 14.1 7.37617 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M21.7746 14.1C22.7687 14.1 23.5746 13.2941 23.5746 12.3C23.5746 11.3059 22.7687 10.5 21.7746 10.5C20.7805 10.5 19.9746 11.3059 19.9746 12.3C19.9746 13.2941 20.7805 14.1 21.7746 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37532 16.8008H7.09992C6.67383 16.8007 6.26153 16.9518 5.93638 17.2272C5.61123 17.5026 5.39431 17.8844 5.32422 18.3047L5.02452 20.1047C4.98151 20.3626 4.9952 20.6267 5.06463 20.8788C5.13407 21.1309 5.25758 21.3648 5.42658 21.5643C5.59557 21.7638 5.806 21.924 6.04323 22.034C6.28045 22.1439 6.53877 22.2008 6.80022 22.2008H10.0753M21.7753 16.8008H22.0507C22.4768 16.8007 22.8891 16.9518 23.2143 17.2272C23.5394 17.5026 23.7563 17.8844 23.8264 18.3047L24.1261 20.1047C24.1691 20.3626 24.1554 20.6267 24.086 20.8788C24.0166 21.1309 23.8931 21.3648 23.7241 21.5643C23.5551 21.7638 23.3446 21.924 23.1074 22.034C22.8702 22.1439 22.6119 22.2008 22.3504 22.2008H19.0753" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71432">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                                <a href="" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71446)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71446)"/>
                                                    </g>
                                                    <path d="M8.57087 6.55077V23.6092H16.2852V6.55077H8.57087ZM7.92801 5H16.928C17.0985 5 17.262 5.08169 17.3826 5.2271C17.5031 5.37252 17.5709 5.56974 17.5709 5.77538V24.3846C17.5709 24.5903 17.5031 24.7875 17.3826 24.9329C17.262 25.0783 17.0985 25.16 16.928 25.16H7.92801C7.75752 25.16 7.594 25.0783 7.47344 24.9329C7.35289 24.7875 7.28516 24.5903 7.28516 24.3846V5.77538C7.28516 5.56974 7.35289 5.37252 7.47344 5.2271C7.594 5.08169 7.75752 5 7.92801 5Z" fill="black"/>
                                                    <path d="M9.85714 9.65234H15V11.2031H9.85714V9.65234ZM9.85714 14.3047H15V15.8554H9.85714V14.3047ZM9.85714 18.957H15V20.5077H9.85714V18.957ZM17.5714 15.8554H20.1429V17.4062H17.5714V15.8554ZM17.5714 18.957H20.1429V20.5077H17.5714V18.957ZM6 23.6093H24V25.16H6V23.6093Z" fill="black"/>
                                                    <path d="M17.5709 12.7539V23.6093H21.428V12.7539H17.5709ZM16.928 11.2031H22.0709C22.2414 11.2031 22.4049 11.2848 22.5254 11.4302C22.646 11.5756 22.7137 11.7729 22.7137 11.9785V24.3847C22.7137 24.5903 22.646 24.7875 22.5254 24.9329C22.4049 25.0784 22.2414 25.16 22.0709 25.16H16.928C16.7575 25.16 16.594 25.0784 16.4734 24.9329C16.3529 24.7875 16.2852 24.5903 16.2852 24.3847V11.9785C16.2852 11.7729 16.3529 11.5756 16.4734 11.4302C16.594 11.2848 16.7575 11.2031 16.928 11.2031Z" fill="black"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71446">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                          <!-- ......  -->
                                          <tr role="row" class="odd">
                                            <td class="text-start">
                                              <p>Transcript Services</p>
                                            </td>
                                            <td>
                                              <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                                                <label class="form-check-label">
                                                  Active
                                                </label>
                                              </div>
                                            </td>
                                            <td>
                                              <div class="d-flex actions">
                                                <!-- OFF Canvas | Customers  -->
                                                <a @click="offcanvasOpen = true" href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71432)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71432)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71432)"/>
                                                    </g>
                                                    <path d="M18.8215 21.9768L18.2455 17.3652C18.1639 16.712 17.8464 16.1111 17.3528 15.6756C16.8593 15.24 16.2236 14.9997 15.5653 15H13.5817C12.9237 15.0002 12.2885 15.2406 11.7953 15.6762C11.3021 16.1117 10.9849 16.7123 10.9033 17.3652L10.3264 21.9768C10.2947 22.2302 10.3173 22.4874 10.3927 22.7313C10.4681 22.9753 10.5945 23.2004 10.7635 23.3918C10.9326 23.5831 11.1404 23.7363 11.3732 23.8412C11.606 23.946 11.8585 24.0002 12.1138 24H17.035C17.2902 24.0001 17.5426 23.9458 17.7753 23.8409C18.008 23.736 18.2157 23.5828 18.3847 23.3914C18.5536 23.2001 18.6799 22.975 18.7552 22.7311C18.8306 22.4872 18.8531 22.2301 18.8215 21.9768V21.9768Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M14.575 11.4C16.0662 11.4 17.275 10.1912 17.275 8.7C17.275 7.20883 16.0662 6 14.575 6C13.0838 6 11.875 7.20883 11.875 8.7C11.875 10.1912 13.0838 11.4 14.575 11.4Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37617 14.1C8.37028 14.1 9.17617 13.2941 9.17617 12.3C9.17617 11.3059 8.37028 10.5 7.37617 10.5C6.38206 10.5 5.57617 11.3059 5.57617 12.3C5.57617 13.2941 6.38206 14.1 7.37617 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M21.7746 14.1C22.7687 14.1 23.5746 13.2941 23.5746 12.3C23.5746 11.3059 22.7687 10.5 21.7746 10.5C20.7805 10.5 19.9746 11.3059 19.9746 12.3C19.9746 13.2941 20.7805 14.1 21.7746 14.1Z" stroke="black" stroke-width="1.5"/>
                                                    <path d="M7.37532 16.8008H7.09992C6.67383 16.8007 6.26153 16.9518 5.93638 17.2272C5.61123 17.5026 5.39431 17.8844 5.32422 18.3047L5.02452 20.1047C4.98151 20.3626 4.9952 20.6267 5.06463 20.8788C5.13407 21.1309 5.25758 21.3648 5.42658 21.5643C5.59557 21.7638 5.806 21.924 6.04323 22.034C6.28045 22.1439 6.53877 22.2008 6.80022 22.2008H10.0753M21.7753 16.8008H22.0507C22.4768 16.8007 22.8891 16.9518 23.2143 17.2272C23.5394 17.5026 23.7563 17.8844 23.8264 18.3047L24.1261 20.1047C24.1691 20.3626 24.1554 20.6267 24.086 20.8788C24.0166 21.1309 23.8931 21.3648 23.7241 21.5643C23.5551 21.7638 23.3446 21.924 23.1074 22.034C22.8702 22.1439 22.6119 22.2008 22.3504 22.2008H19.0753" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71432" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71432" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71432">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                                <a href="" title="Delete Team" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  
                                                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_1998_71446)">
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_1998_71446)"/>
                                                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_1998_71446)"/>
                                                    </g>
                                                    <path d="M8.57087 6.55077V23.6092H16.2852V6.55077H8.57087ZM7.92801 5H16.928C17.0985 5 17.262 5.08169 17.3826 5.2271C17.5031 5.37252 17.5709 5.56974 17.5709 5.77538V24.3846C17.5709 24.5903 17.5031 24.7875 17.3826 24.9329C17.262 25.0783 17.0985 25.16 16.928 25.16H7.92801C7.75752 25.16 7.594 25.0783 7.47344 24.9329C7.35289 24.7875 7.28516 24.5903 7.28516 24.3846V5.77538C7.28516 5.56974 7.35289 5.37252 7.47344 5.2271C7.594 5.08169 7.75752 5 7.92801 5Z" fill="black"/>
                                                    <path d="M9.85714 9.65234H15V11.2031H9.85714V9.65234ZM9.85714 14.3047H15V15.8554H9.85714V14.3047ZM9.85714 18.957H15V20.5077H9.85714V18.957ZM17.5714 15.8554H20.1429V17.4062H17.5714V15.8554ZM17.5714 18.957H20.1429V20.5077H17.5714V18.957ZM6 23.6093H24V25.16H6V23.6093Z" fill="black"/>
                                                    <path d="M17.5709 12.7539V23.6093H21.428V12.7539H17.5709ZM16.928 11.2031H22.0709C22.2414 11.2031 22.4049 11.2848 22.5254 11.4302C22.646 11.5756 22.7137 11.7729 22.7137 11.9785V24.3847C22.7137 24.5903 22.646 24.7875 22.5254 24.9329C22.4049 25.0784 22.2414 25.16 22.0709 25.16H16.928C16.7575 25.16 16.594 25.0784 16.4734 24.9329C16.3529 24.7875 16.2852 24.5903 16.2852 24.3847V11.9785C16.2852 11.7729 16.3529 11.5756 16.4734 11.4302C16.594 11.2848 16.7575 11.2031 16.928 11.2031Z" fill="black"/>
                                                    <defs>
                                                    <linearGradient id="paint0_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint1_linear_1998_71446" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint2_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <linearGradient id="paint3_linear_1998_71446" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                                    <stop offset="1" stop-opacity="0.01"/>
                                                    </linearGradient>
                                                    <clipPath id="clip0_1998_71446">
                                                    <rect width="30" height="30" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                                </a>
                                              </div>
                                            </td>
                                          </tr>
                                          <!-- ......  -->
                                        </tbody>
                                      </table><!-- right column table (end)-->
                                </div><!-- right column | scroll bar ends  -->
                              </form>
                          </div>
                          </div><!-- end card  -->
        
                       </div>
                      <!-- END: right column  -->
        
        
                      </div>
                    </div>            
               
        
                  </div>
                  <div class="col-12 justify-content-center form-actions d-flex">
                    <button type="button"
                        class="btn btn-outline-dark rounded px-4 py-2 mx-2">Back</button>
                    <button type="submit"
                        class="btn btn-primary rounded px-4 py-2">Next</button>
        
            </div>
                  </div>
                    </form>
                  
          </section>

        </div><!--End: Service Catalog-->

        <!--BEGIN: Drive Documents Pane-->
        <div class="tab-pane fade" :class="{ 'active show': tab === 'drive-documents' }" @click.prevent="tab = 'drive-documents'; window.location.hash = 'drive-documents'" id="drive-documents" role="tabpanel" aria-labelledby="drive-documents-tab" tabindex="0" x-show="tab === 'drive-documents'">
         
  
  <section id="multiple-column-form">
    <div class="row">
      <div class="col-12">
       
            <form class="form">
              <div class="col-md-8 mb-md-2">
                <h2>Drive Documents</h2>
            </div>
            
            <div class="col-md-12 mb-md-2">
              <div class="row">
                <div class="col-md-10 mb-md-2">
                <div class="d-flex justify-content-center">
                  <h3>Upload Document</h3>
                </div>
                    <div class="d-flex justify-content-center">
                      <input class="form" type="file" id="formFile">
               </div>
               <div class="d-flex justify-content-center gap-3 mt-4">
                
               <div><svg width="164" height="207" viewBox="0 0 164 207" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="164" height="207" fill="url(#pattern0)"/>
                <defs>
                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                <use xlink:href="#image0_1998_71597" transform="matrix(0.000906504 0 0 0.000718196 -0.176829 -0.0772947)"/>
                </pattern>
                <image id="image0_1998_71597" width="1500" height="1500" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABdwAAAXcCAIAAAC3V9szAAAgAElEQVR4nOzdaVMbB6K2YSQhNpvNeMHjJY5zMvP+/38z44zxlhgcQCDJCLSeD6pKzXvGC2bR0926rm/O1k91pUrippfawfHpAgAAAACzVU8PAAAAAJhHogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASI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AAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAI/A8beRt7vKNl/wAAAABJRU5ErkJggg=="/>
                </defs>
                </svg>
                <p>File Name</p>
                </div>

                <div><svg width="164" height="207" viewBox="0 0 164 207" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <rect width="164" height="207" fill="url(#pattern0)"/>
                  <defs>
                  <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_1998_71597" transform="matrix(0.000906504 0 0 0.000718196 -0.176829 -0.0772947)"/>
                  </pattern>
                  <image id="image0_1998_71597" width="1500" height="1500" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABdwAAAXcCAIAAAC3V9szAAAgAElEQVR4nOzdaVMbB6K2YSQhNpvNeMHjJY5zMvP+/38z44zxlhgcQCDJCLSeD6pKzXvGC2bR0926rm/O1k91pUrippfawfHpAgAAAACzVU8PAAAAAJhHogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASI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AAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAI/A8beRt7vKNl/wAAAABJRU5ErkJggg=="/>
                  </defs>
                  </svg>
                  <p>File Name</p>

                  </div>

                  <div><svg width="164" height="207" viewBox="0 0 164 207" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="164" height="207" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_1998_71597" transform="matrix(0.000906504 0 0 0.000718196 -0.176829 -0.0772947)"/>
                    </pattern>
                    <image id="image0_1998_71597" width="1500" height="1500" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABdwAAAXcCAIAAAC3V9szAAAgAElEQVR4nOzdaVMbB6K2YSQhNpvNeMHjJY5zMvP+/38z44zxlhgcQCDJCLSeD6pKzXvGC2bR0926rm/O1k91pUrippfawfHpAgAAAACzVU8PAAAAAJhHogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASIMgAAAAABogwAAABAgCgDAAAAECDKAAAAAASI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AAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAIiDIAAAAAAVEGAAAAICDKAAAAAAREGQAAAICAKAMAAAAQEGUAAAAAAqIMAAAAQECUAQAAAAiIMgAAAAABUQYAAAAgIMoAAAAABEQZAAAAgIAoAwAAABAQZQAAAAACogwAAABAQJQBAAAACIgyAAAAAAFRBgAAACAgygAAAAAERBkAAACAgCgDAAAAEBBlAAAAAAKiDAAAAEBAlAEAAAAI/A8beRt7vKNl/wAAAABJRU5ErkJggg=="/>
                    </defs>
                    </svg>
                    <p>File Name</p>
                    </div>
                    
               </div>
              </div>

              <!-- Check-boxes -->
              <div class="col-md-12 col-12 mt-5 mb-4">
                <div class="col-md-12 col-12 mb-4">
                <input class="form-check-input" type="checkbox" value="hide-user-details-providers" id="hide-user-details-providers">
                <label class="form-check-label" for="hide-user-details-providers">
                  Hide User's Details from Providers
                </label>
              </div>
              <div class="col-md-12 col-12">
                <input class="form-check-input" type="checkbox" value="send-invitation-email-customer" id="send-invitation-email-customer">
                <label class="form-check-label" for="send-invitation-email-customer">
                  Send Invitation Email to the Customer
                </label>
              </div>
              </div>

          <div class="col-12 justify-content-center form-actions d-flex">
            <button type="button"
                class="btn btn-outline-dark rounded px-4 py-2 mx-2">Back</button>
            <button type="submit"
                class="btn btn-primary rounded px-4 py-2">Submit</button>

    </div>
              </div>
          </div>
            </form>
          </div>
        </div>
    

  </section>

        </div><!--End: Drive Documents Pane-->



            </div><!-- tab-content-end    -->
        </div><!-- Basic Floating Label Form section end -->
        </div><!-- ...card-body... -->
         <!-- END: Steps -->
        </div>
        </div>
      </div>
    </div>
    <!-- End: Content-->




    <!-- BEGAIN: Model: POPUP | Add Address   -->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-body">
     
      
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
  <h1 class="modal-title fs-5" id="exampleModalLabel">ADD ADDRESS</h1>
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
  <!-- .........  -->

  <!--BEGAIN: Basic multiple Column Form section start | Popup  -->
  <section id="multiple-column-form">
    <div class="row">
      <div class="col-12">
      <form class="form">
        <div class="row">
          <div class="col-md-12 mb-md-2">

            <!-- END: Form-row | Popup  -->
            <div class="row">

              <!-- Address title | Popup   -->
              <div class="col-md-12 mb-md-2">
            <div class="col-md-6 col-12">
                <div class="mb-4">
                  <label class="form-label" for="address-title">Address Title</label>
                  <input
                    type="text"
                    id="address-title"
                    class="form-control"
                    name="address-title"
                    placeholder="Example “Head Office”"
                    />
                </div>
              </div>
              </div>

              <!-- Address Line 1 | Popup  -->
              <div class="col-md-6 col-12">
                <div class="mb-4">
                  <label class="form-label" for="address-line-1">Address Line 1</label>
                  <input
                    type="text"
                    id="address-line-1"
                    class="form-control"
                    name="address-line-1"
                    placeholder="Enter Address Line 1"
                    />
                </div>
              </div>

              <!-- Address Line 2 | Popup  -->
              <div class="col-md-6 col-12">
                <div class="mb-4">
                  <label class="form-label" for="address-line-2">Address Line 2</label>
                  <input
                    type="text"
                    id="address-line-2"
                    class="form-control"
                    name="addressLine2"
                    placeholder="Enter Address Line 2"
                    />
                </div>
              </div>

              <!-- city | Popup  -->
              <div class="col-md-6 col-12">
                <div class="mb-4">
                  <label class="form-label" for="city">City</label>
                  <select class="select2 form-select" id="city">
                    <option value="select-city">Select City</option>
                  </select>
                </div>
              </div>

              <!-- State / Province | Popup -->
              <div class="col-md-6 col-12">
                <div class="mb-4">
                  <label class="form-label" for="state">State / Province</label>
                  <select class="select2 form-select" id="state">
                    <option value="Al">Select State/Province</option>
                  </select>
                </div>
              </div>

              <!-- Country | Popup  -->
              <div class="col-md-6 col-12">
                <div class="mb-4">
                  <label class="form-label" for="country">Country</label>
                  <select class="select2 form-select" id="country">
                    <option value="USA">USA</option>
                  </select>
                </div>
              </div>

              <!-- Zip Code | Popup  -->
              <div class="col-md-6 col-12">
                <div class="mb-4">
                  <label class="form-label" for="zip-code">Zip Code</label>
                  <input
                    type="text"
                    id="zip-code"
                    class="form-control"
                    name="zipCode"
                    placeholder="Enter Zip Code"
                    />
                </div>
              </div> 
             <!-- END: Form-row -->
            </div>
          
    

          </div>
        </div>
      </form>
      </div>
    </div>
  </section><!--END:  Basic multiple Column Form section start  | Popup -->
</div>
<div class="modal-footer">
  <div class="col-md-12 col-12 mb-md-2">
                    
    <!-- ....cancel/next (buttons)... -->
    <div class="col-12 justify-content-center gap-2 d-flex mt-5">
      <a
        href="javascript:void(0);"
        class="btn btn-secondary rounded px-4"
        role="button"
      >
        Cancel</a>
      <button type="submit" class="btn btn-primary rounded px-4">Add</button>
    </div>
    
  </div>
</div>
</div>
</div>
</div>
      </div>
  </div>
</div>
<!-- End: Content-->
    <!-- END: Model: POPUP | Add Address   -->



</div>
@push('scripts')
	<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
	<script>
		document.addEventListener("livewire:load", () => {
			let el = $('.select2')
			initSelect()

			Livewire.hook('message.processed', (message, component) => {
				initSelect()
			})

			// Only needed if doing save without redirect
			/* Livewire.on('setCategoriesSelect', values => {
				el.val(values).trigger('change.select2')
			})*/

			// Will come into play if and when wire:model is applied
			// el.on('change', function (e) {
			// 	@this.set('productCategories', el.select2("val"))
			// })

			function initSelect () {
				el.select2({
					placeholder: '{{__('Select your option')}}',
					allowClear: !el.attr('required'),
				})
			}
		})
		
		new Pikaday({
			field: document.getElementById('service_start_date'),
			format: 'MM/DD/YYYY'
		})
	</script>
@endpush