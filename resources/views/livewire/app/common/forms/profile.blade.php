<div>
  <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h1 class="content-header-title float-start mb-0">Admin-Staff Profile</h1>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="">
                        <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M1.24997 12.5849H2.33331V20.1682C2.33331 21.3631 3.30506 22.3349 4.49997 22.3349H17.5C18.6949 22.3349 19.6666 21.3631 19.6666 20.1682V12.5849H20.75C20.9642 12.5848 21.1736 12.5212 21.3517 12.4022C21.5298 12.2832 21.6686 12.114 21.7506 11.9161C21.8326 11.7181 21.8541 11.5004 21.8123 11.2902C21.7705 11.0801 21.6674 10.8871 21.5159 10.7356L11.7659 0.985603C11.6654 0.884912 11.546 0.805029 11.4146 0.750526C11.2831 0.696023 11.1423 0.667969 11 0.667969C10.8577 0.667969 10.7168 0.696023 10.5854 0.750526C10.454 0.805029 10.3346 0.884912 10.2341 0.985603L0.484056 10.7356C0.332596 10.8871 0.229455 11.0801 0.187674 11.2902C0.145892 11.5004 0.167346 11.7181 0.249322 11.9161C0.331297 12.114 0.470115 12.2832 0.648226 12.4022C0.826337 12.5212 1.03574 12.5848 1.24997 12.5849ZM8.83331 20.1682V14.7515H13.1666V20.1682H8.83331ZM11 3.28335L17.5 9.78335V14.7515L17.5011 20.1682H15.3333V14.7515C15.3333 13.5566 14.3616 12.5849 13.1666 12.5849H8.83331C7.63839 12.5849 6.66664 13.5566 6.66664 14.7515V20.1682H4.49997V9.78335L11 3.28335Z"
                            fill="#0A1E46" />
                        </svg>
  
                      </a>
                    </li>
  
                    <li class="breadcrumb-item">
                      Settings
                    </li>
                    <li class="breadcrumb-item">
                    Admin Staff
                    </li>
                    <li class="breadcrumb-item">
                    All Admin-Staff
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
                      {{-- BEGAN: Provider Details --}}
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard-tab-pane" type="button" role="tab" aria-controls="dashboard-tab-pane" aria-selected="true">
                            <x-icon name="tablet"/>
                            <span>Dashboard</span>
                          </button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule-tab-pane" type="button" role="tab" aria-controls="schedule-tab-pane" aria-selected="false">
                            <x-icon name="gray-calendar"/>
                            <span>Schedule</span>
                          </button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="service-requests-tab" data-bs-toggle="tab" data-bs-target="#service-requests-tab-pane" type="button" role="tab" aria-controls="service-requests-tab-pane" aria-selected="false">
                            <x-icon name="gray-journal"/>
                            <span>Service Requests</span>
                          </button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="permissions-tab" data-bs-toggle="tab" data-bs-target="#permissions-tab-pane" type="button" role="tab" aria-controls="permissions-tab-pane" aria-selected="false">
                            <x-icon name="gray-drive"/>
                            <span>Permission</span>
                          </button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="management-tab" data-bs-toggle="tab" data-bs-target="#management-tab-pane" type="button" role="tab" aria-controls="management-tab-pane" aria-selected="false">
                            <x-icon name="gray-rated-user"/>
                            <span>Management</span>
                          </button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes-tab-pane" type="button" role="tab" aria-controls="notes-tab-pane" aria-selected="false">
                            <x-icon name="gray-note"/>
                            <span>Notes</span>
                          </button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="reports-tab" data-bs-toggle="tab" data-bs-target="#reports-tab-pane" type="button" role="tab" aria-controls="reports-tab-pane" aria-selected="false">
                            <x-icon name="gray-bar-chart"/>
                            <span>Reports</span>
                          </button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab" aria-controls="notifications-tab-pane" aria-selected="false">
                            <x-icon name="gray-bell"/>
                            <span>Notifications</span>
                          </button>
                        </li>
        
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="log-tab" data-bs-toggle="tab" data-bs-target="#log-tab-pane" type="button" role="tab" aria-controls="log-tab-pane" aria-selected="false">
                            <x-icon name="gray-log"/>
                            <span>Log</span>
                          </button>
                        </li>
                      </ul>
                      
                      <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
                            <div class="col-md-12 mb-md-2 mt-5">
                              <div class="row mt-2 mb-5">
                                <div class="col-md-5 me-5">
                                  <div class="mb-4">
                                    <div class="row">
                                      <div class="col-md-4">
                                        <div class="d-inline-block position-relative">
                                          <img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle" alt="Profile Image of Admin Staff"/>
                                        </div>
                                        <div style="margin-left: -1rem;" class="d-inline-block position-relative mt-3">
                                          <svg aria-label="Sydney, Australia" width="156" height="32" viewBox="0 0 156 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0H133L156 32H0V0Z" fill="url(#paint0_linear_2265_83025)"/>
                                            <defs>
                                              <linearGradient id="paint0_linear_2265_83025" x1="78" y1="0" x2="140.587" y2="0" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#213969"/>
                                                <stop offset="1" stop-color="#204387"/>
                                              </linearGradient>
                                            </defs>
                                          </svg>
                                          <div class="position-absolute bottom-0 p-0 d-flex justify-content-center align-items-center">
                                            <label class="text-white form-label-sm ps-2" for="">
                                              Sydney, Australia
                                            </label> 
                                          </div>
                                        </div>
                                      </div>
              
                                      <div class="col-md-7 ms-4">
                                        <h3 class="font-family-tertiary fw-medium">
                                          James Mary (He)
                                        </h3>
                                        <div class="row mb-4">
                                          <div class="col-md-12">
                                            <div class="row mb-1">
                                              <div class="col-md-12">
                                                <p class="font-family-tertiary">
                                                 <b>Admin Company:</b> Example Company
                                                </p>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <p class="font-family-tertiary">
                                                  <b>Position:</b> Supervisor
                                                </p>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <p class="font-family-tertiary">
                                                 <b>Phone Number:</b> (987) 653-5875
                                                </p>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <p class="text-">
                                                    <b>Email:</b> jamesmary@gmail.com 
                                                </p>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <p class="">
                                                    <b>Primary Language:</b> English
                                                </p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="row mb-4">
                                   
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="row" id="table-hover-row">
                                    <div class="col-12">
                                      <div class="mb-2">
                                        <h2>Assigned Teams</h2>
                                      </div>
                                      <div class="card">
                                        <div class="table-responsive">
                                          <!-- table one  -->
                                          <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
                                            <thead>
                                              <tr role="row">
                                                <th scope="col">#</th>
                                                <th scope="col">Team</th>
                                                <th scope="col">Action</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr role="row" class="odd">
                                                <td>1</td>
                                                <td>
                                                  <div class="row g-2">
                                                    <div class="col-md-2">
                                                      <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                                    </div>
                                                    <div class="col-md-10">
                                                      <h6 class="fw-semibold">Langauge Translation</h6>
                                                      <p>langaugetranslation@gmail.com</p>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <a href="#" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg aria-label="Chat" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black" />
                                                    <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black" />
                                                      </svg>
                                                  </a>
                                                 </td>
                                              </tr>
                                              <tr role="row" class="odd">
                                                <td>2</td>
                                                <td>
                                                  <div class="row g-2">
                                                    <div class="col-md-2">
                                                      <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                                    </div>
                                                    <div class="col-md-10">
                                                      <h6 class="fw-semibold">Langauge Translation</h6>
                                                      <p>langaugetranslation@gmail.com</p>
                                                    </div>
                                                  </div>
                                                </td>
                                              <td>
                                                <a href="#" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                  <svg aria-label="Chat" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black" />
                                                  <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black" />
                                                    </svg>
                                                </a>
                                               </td>
                                              </tr>
                                              <tr role="row" class="odd">
                                                <td>3</td>
                                                <td>
                                                  <div class="row g-2">
                                                    <div class="col-md-2">
                                                      <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                                    </div>
                                                    <div class="col-md-10">
                                                      <h6 class="fw-semibold">Langauge Translation</h6>
                                                      <p>langaugetranslation@gmail.com</p>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <a href="#" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg aria-label="Chat" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black" />
                                                    <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black" />
                                                      </svg>
                                                  </a>
                                                 </td>
                                              </tr>
                                              <tr role="row" class="odd">
                                                <td>4</td>
                                                <td>
                                                  <div class="row g-2">
                                                    <div class="col-md-2">
                                                      <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                                    </div>
                                                    <div class="col-md-10">
                                                      <h6 class="fw-semibold">Langauge Translation</h6>
                                                      <p>langaugetranslation@gmail.com</p>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <a href="#" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg aria-label="Chat" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black" />
                                                    <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black" />
                                                      </svg>
                                                  </a>
                                                 </td>
                                              </tr>
                                              <tr role="row" class="odd">
                                                <td>5</td>
                                                <td>
                                                  <div class="row g-2">
                                                    <div class="col-md-2">
                                                      <img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Team Profile Image">
                                                    </div>
                                                    <div class="col-md-10">
                                                      <h6 class="fw-semibold">Langauge Translation</h6>
                                                      <p>langaugetranslation@gmail.com</p>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td>
                                                  <a href="#" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg aria-label="Chat" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z" fill="black" />
                                                    <path d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z" fill="black" />
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
                                </div>
              
                                <div class="col-md-12 mb-md-2 text-center gap-2 mt-5">
                                  <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                 
                                      <span>Deactivate</span>
                                  </button> 
                                  <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                   
                                      <span>Message</span>
                                  </button> 
                                  <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                   
                                      <span>Reset Password</span>
                                  </button> 
                                  <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                    
                                      <span>Lock Account</span>
                                  </button>
                                  <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">
                                    
                                      <span>Navigate</span>
                                  </button> 
                                </div>
                              </div>
                            </div> 
                          </div>
                          <!-- Dashboard tab end -->
                         <div class="tab-pane fade" id="schedule-tab-pane" role="tabpanel" aria-labelledby="schedule-tab" tabindex="0">
                           <div class="row mb-3">
                            <h3>Schedule</h3>
                           </div>
                           <div class="d-flex justify-content-between mb-2">
                             <div class="d-inline-flex align-items-center gap-4">
                               <div class="mb-4 mb-lg-0">
                                 <select class="form-select form-select-sm rounded bg-secondary text-white rounded" aria-label="Advance Filter" id="show_status">
                                   <option>Advance Filter</option>
                                 </select>
                               </div>
                               <div class="mb-4 mb-lg-0">
                                 <button type="button" class="btn btn-xs btn-outline-dark rounded">
                                   Clear All
                                 </button>
                               </div>
                             </div>
                             <div class="d-inline-flex align-items-center gap-4 me-3">
                               <div class="dropdown">
                                 <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                                   </svg>
                                 </button>
                                 <ul class="dropdown-menu">
                                   <li>
                                     <a class="dropdown-item" href="#">
                                       Action
                                     </a>
                                   </li>
                                   <li>
                                     <a class="dropdown-item" href="#">
                                       Another action
                                     </a>
                                   </li>
                                   <li>
                                     <a class="dropdown-item" href="#">
                                       Something else here
                                     </a>
                                   </li>
                                 </ul>
                               </div>
                             </div>
                           </div>
                           <div>
                             <img src="/html-prototype/images/temp/img-placeholder-calendar.png" class="w-100" alt="Dashboard Calendar"/>
                           </div>
                        
                          </div>             
                        <!-- Schedule Tab End-->

                        <div class="tab-pane fade" id="service-requests-tab-pane" role="tabpanel" aria-labelledby="service-requests-tab" tabindex="0">
                           <div class="row">
                            <h3>Assignments</h3>
                           </div>
                          <div class="d-flex justify-content-start gap-4 mb-4">
                            <div class="d-flex justify-content-start gap-2">
                            <div class="mb-4 mb-lg-0 position-relative">
                              <!-- Begin : it will be replaced with livewire module-->
                              <svg class="icon-date sm cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
                              </svg>
                              <input type="" class="form-control form-control-sm w-auto js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
                              <!-- End : it will be replaced with livewire module -->
                            </div>
                            </div>
                            <div class="d-flex justify-content-start gap-2">
                            <div class="mb-4 mb-lg-0">
                              <button type="button" class="btn btn-xs btn-primary rounded">Today</button>
                            </div>
                            <div class="mb-4 mb-lg-0">
                              <button type="button" class="btn btn-xs btn-inactive rounded">Upcoming</button>
                            </div>
                            <div class="mb-4 mb-lg-0">
                              <button type="button" class="btn btn-xs btn-inactive rounded">Past</button>
                            </div>
                            </div>
                          </div>
                            <div class="row mb-4">
                              <div class="col-5">
                                <label class="form-label" for="time-zone">
                                  Accommodation
                                </label>
                                <select class="select2 form-select" id="time-zone">
                                  <option>Select Accommodations</option>
                                </select>
                              </div>
                              <div class="col-5 mx-2">
                                <label class="form-label" for="time-zone">
                                  Service
                                </label>
                                <select class="select2 form-select" id="time-zone">
                                  <option>Service</option>
                                </select>
                              </div>
                            </div>
                            <div class="row">
                            <div class="d-lg-flex justify-content-between mb-2">
                              <h2 class="mb-lg-0 text-dark">Today’s Assignment</h2>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                              <div class="d-inline-flex align-items-center gap-4">
                                <div class="d-inline-flex align-items-center gap-4">
                                  <label for="show_records_number" class="form-label-sm mb-0">
                                    Show
                                  </label>
                                  <select class="form-select form-select-sm" id="show_records_number">
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                  </select>
                                </div>
                              </div>
                              <div class="d-inline-flex align-items-center gap-4">
                                <label for="search" class="form-label-sm mb-0">
                                  Search
                                </label>
                                <input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                              </div>
                            </div>
                            {{-- Hoverable Rows - Start --}}
                            <div class="row" id="table-hover-row">
                              <div class="col-12">
                                <div class="card">
                                  <div class="table-responsive">
                                    <table id="unassigned_data" class="table table-fs-md table-hover" aria-label="Admin Staff Teams Table">
                                      <thead>
                                        <tr role="row">
                                          <th scope="col" class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
                                          </th>
                                          <th scope="col">Booking ID</th>
                                          <th scope="col">Accommodation</th>
                                          <th scope="col">Type</th>
                                          <th scope="col">Company</th>
                                          <th scope="col">Billing</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr role="row" class="odd">
                                          <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                                          </td>
                                          <td>
                                            <a href="#">100995-6</a>
                                            <div>
                                              <div class="time-date">08/24/2022</div>
                                              <div class="time-date">9:59 AM to 4:22 PM</div>
                                            </div>
                                          </td>
                                          <td>
                                            <div>Shelby Sign Language</div>
                                            <div>Shelby Sign Language</div>
                                            <div>Service: Language interpreting</div>
                                          </td>
                                          <td>
                                            <div class="badge bg-warning mb-1">Teleconference</div>
                                            <div>292332811 - Code 2131</div>
                                          </td>
                                          <td>
                                            <div class="form-check form-switch">
                                              <div>Demo Company</div>
                                              <div>NO. of Providers: 5</div>
                                            </div>
                                          </td>
                                          <td>$100</td>
                                          <td>
                                            <div class="d-flex actions">
                                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                              </svg>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr role="row" class="even">
                                          <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                                          </td>
                                          <td>
                                            <a href="#">100995-6</a>
                                            <div>
                                              <div class="time-date">08/24/2022</div>
                                              <div class="time-date">9:59 AM to 4:22 PM</div>
                                            </div>
                                          </td>
                                          <td>
                                            <div>Shelby Sign Language</div>
                                            <div>Shelby Sign Language</div>
                                            <div>Service: Language interpreting</div>
                                          </td>
                                          <td>
                                            <div class="badge bg-warning mb-1">Teleconference</div>
                                            <div>292332811 - Code 2131</div>
                                          </td>
                                          <td>
                                            <div class="form-check form-switch">
                                              <div>Demo Company</div>
                                              <div>NO. of Providers: 5</div>
                                            </div>
                                          </td>
                                          <td>$100</td>
                                          <td>
                                            <div class="d-flex actions">
                                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                              </svg>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                          <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                                          </td>
                                          <td>
                                            <a href="#">100995-6</a>
                                            <div>
                                              <div class="time-date">08/24/2022</div>
                                              <div class="time-date">9:59 AM to 4:22 PM</div>
                                            </div>
                                          </td>
                                          <td>
                                            <div>Shelby Sign Language</div>
                                            <div>Shelby Sign Language</div>
                                            <div>Service: Language interpreting</div>
                                          </td>
                                          <td>
                                            <div class="badge bg-warning mb-1">Teleconference</div>
                                            <div>292332811 - Code 2131</div>
                                          </td>
                                          <td>
                                            <div class="form-check form-switch">
                                              <div>Demo Company</div>
                                              <div>NO. of Providers: 5</div>
                                            </div>
                                          </td>
                                          <td>$100</td>
                                          <td>
                                            <div class="d-flex actions">
                                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                              </svg>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr role="row" class="even">
                                          <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                                          </td>
                                          <td>
                                            <a href="#">100995-6</a>
                                            <div>
                                              <div class="time-date">08/24/2022</div>
                                              <div class="time-date">9:59 AM to 4:22 PM</div>
                                            </div>
                                          </td>
                                          <td>
                                            <div>Shelby Sign Language</div>
                                            <div>Shelby Sign Language</div>
                                            <div>Service: Language interpreting</div>
                                          </td>
                                          <td>
                                            <div class="badge bg-warning mb-1">Teleconference</div>
                                            <div>292332811 - Code 2131</div>
                                          </td>
                                          <td>
                                            <div class="form-check form-switch">
                                              <div>Demo Company</div>
                                              <div>NO. of Providers: 5</div>
                                            </div>
                                          </td>
                                          <td>$100</td>
                                          <td>
                                            <div class="d-flex actions">
                                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                              </svg>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                          <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                                          </td>
                                          <td>
                                            <a href="#">100995-6</a>
                                            <div>
                                              <div class="time-date">08/24/2022</div>
                                              <div class="time-date">9:59 AM to 4:22 PM</div>
                                            </div>
                                          </td>
                                          <td>
                                            <div>Shelby Sign Language</div>
                                            <div>Shelby Sign Language</div>
                                            <div>Service: Language interpreting</div>
                                          </td>
                                          <td>
                                            <div class="badge bg-warning mb-1">Teleconference</div>
                                            <div>292332811 - Code 2131</div>
                                          </td>
                                          <td>
                                            <div class="form-check form-switch">
                                              <div>Demo Company</div>
                                              <div>NO. of Providers: 5</div>
                                            </div>
                                          </td>
                                          <td>$100</td>
                                          <td>
                                            <div class="d-flex actions">
                                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                              </svg>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr role="row" class="even">
                                          <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                                          </td>
                                          <td>
                                            <a href="#">100995-6</a>
                                            <div>
                                              <div class="time-date">08/24/2022</div>
                                              <div class="time-date">9:59 AM to 4:22 PM</div>
                                            </div>
                                          </td>
                                          <td>
                                            <div>Shelby Sign Language</div>
                                            <div>Shelby Sign Language</div>
                                            <div>Service: Language interpreting</div>
                                          </td>
                                          <td>
                                            <div class="badge bg-warning mb-1">Teleconference</div>
                                            <div>292332811 - Code 2131</div>
                                          </td>
                                          <td>
                                            <div class="form-check form-switch">
                                              <div>Demo Company</div>
                                              <div>NO. of Providers: 5</div>
                                            </div>
                                          </td>
                                          <td>$100</td>
                                          <td>
                                            <div class="d-flex actions">
                                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                              </svg>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                          <td class="text-center">
                                            <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                                          </td>
                                          <td>
                                            <a href="#">100995-6</a>
                                            <div>
                                              <div class="time-date">08/24/2022</div>
                                              <div class="time-date">9:59 AM to 4:22 PM</div>
                                            </div>
                                          </td>
                                          <td>
                                            <div>Shelby Sign Language</div>
                                            <div>Shelby Sign Language</div>
                                            <div>Service: Language interpreting</div>
                                          </td>
                                          <td>
                                            <div class="badge bg-warning mb-1">Teleconference</div>
                                            <div>292332811 - Code 2131</div>
                                          </td>
                                          <td>
                                            <div class="form-check form-switch">
                                              <div>Demo Company</div>
                                              <div>NO. of Providers: 5</div>
                                            </div>
                                          </td>
                                          <td>$100</td>
                                          <td>
                                            <div class="d-flex actions">
                                              <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                                xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                              </svg>
                                              </a>
                                            </div>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>
                            </div>
                            {{-- Hoverable Rows - End --}}
                            <div class="d-flex justify-content-between">
                              <div>
                                <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">
                                  Showing 1 to 5 of 100 entries
                                </p>
                              </div>
                              <nav aria-label="Page Navigation">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                    </a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                  </li>
                                  <li class="page-item active">
                                    <a class="page-link" href="#">4</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
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
                                   <svg class="fill" width="20" height="28" viewBox="0 0 20 28"fill="none"
                                   xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                                 </svg>
                                   </a>
                               <span class="text-sm">
                                 View
                               </span>
                             </div>
                           </div>
                           <!-- /Icon Help -->
                          </div>
                        </div>

                        <div class="tab-pane fade" id="permissions-tab-pane" role="tabpanel" aria-labelledby="permissions-tab" tabindex="0">
                          <div class="row mb-4">
                            <div class="col-lg-12">
                              <h3>Permissions</h3>
                              <p>Choose from predefined set of permissions for the user. You can customize permissions
                                as well.</p>
                            </div>
                          </div>
                          <div class="row mb-4">
                            <div class="col-lg-12 gap-3 d-lg-flex">
                              <a href="#" class="btn btn-outline-dark rounded">Super Admin</a>
                              <a href="#" class="btn btn-outline-dark rounded">Provider Manager</a>
                              <a href="#" class="btn btn-outline-dark rounded">Customer Relation</a>
                              <a href="#" class="btn btn-outline-dark rounded">Company Manager</a>
                            </div>
                          </div> 
                          <div class="row mb-4">
                              <div class="col-lg-12 mb-4">
                                <p class="mb-0">Copy permissions from another user</p>
                              </div>
                              <div class="col-lg-12 d-lg-flex gap-3 mb-3">
                                <select class="form-select w-auto">
                                  <option>Select User</option>
                                </select>
                                <a href="#" class="btn btn-primary rounded">Apply</a>
                              </div>
                               <div class="col-lg-12">
                                <div class="table-responsive">
                                  <table class="table table-hover mb-3">
                                    <thead>
                                      <tr>
                                      <th class="w-25">
                                        Section
                                      </th>
                                      <th>
                                        <div class="form-check">
                                        <input class="form-check-input" id="view" name=""
                                          type="checkbox" tabindex="">
                                          <label for="view" class="mt-1">View</label>
                                        </div>
                                      </th>
                                      <th class="">
                                        <div class="form-check">
                                        <input class="form-check-input" id="add" name=""
                                          type="checkbox" tabindex="">
                                          <label for="add" class="mt-1">Add</label>
                                        </div>
                                      </th>
                                      <th>
                                        <div class="form-check">
                                        <input class="form-check-input" id="edit" name=""
                                          type="checkbox" tabindex="">
                                          <label for="edit" class="mt-1">Edit</label>
                                        </div>
                                      </th>
                                      <th>
                                        <div class="form-check">
                                        <input class="form-check-input" id="delete" name=""
                                          type="checkbox" tabindex="">
                                          <label for="delete" class="mt-1">Delete</label>
                                        </div>
                                      </th>
                                      <th>
                                        <div class="form-check">
                                        <input class="form-check-input" id="all" name=""
                                          type="checkbox" tabindex="">
                                          <label for="all" class="mt-1">All</label>
                                        </div>
                                      </th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td data-bs-toggle="collapse" href="#dashboard" role="button" aria-expanded="false" aria-controls="dashboard">
                                          <strong>Dashboard</strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" >
                                          </div>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input"  aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input"  aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse " id="dashboard">
                                        <td class="align-middle">
                                          Dashboard content
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                      <tr>
                                
                                      <tr>
                                        <td data-bs-toggle="collapse" href="#chat" role="button" aria-expanded="false" aria-controls="chat">
                                          <strong>Chat</strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" >
                                          </div>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input"  aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td class="">
                                          <div class="form-check">
                                          <input class="form-check-input"  aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                      <td data-bs-toggle="collapse" href="#assignments" role="button" aria-expanded="false" aria-controls="assignments">
                                        <strong>Assignments</strong>
                                        <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                        </svg>
                                      </td>
                                      <td class="">
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td class="">
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td class="">
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" >
                                        </div>
                                      </td>
                                      <td class="">
                                        <div class="form-check">
                                        <input class="form-check-input"  aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td class="">
                                        <div class="form-check">
                                        <input class="form-check-input"  aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                      <div >
                                      <tr class="collapse " id="assignments">
                                      <td class="align-middle">
                                        Assignments (Today, Upcoming, Past, Pending)
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr class="collapse " id="assignments">
                                      <td class="">
                                        Booking Form
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr class="collapse " id="assignments">
                                      <td class="">
                                        Quotes & Leads Module
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" aria-label="Select Edit" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr>
                                      <td data-bs-toggle="collapse" href="#customers" role="button" aria-expanded="false" aria-controls="customers">
                                        <strong>Customers</strong>
                                
                                        <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                        </svg>
                                
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                      <div >
                                      <tr class="collapse " id="customers">
                                      <td class="align-middle">
                                        Add/Edit/Deactivate Company & Customers
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr class="collapse " id="customers">
                                      <td class="">
                                        Companies (List, Profiles)
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr class="collapse " id="customers">
                                      <td class="">
                                        Customers (List, Profiles)
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr class="collapse " id="customers">
                                      <td class="">
                                        Customer Pricing
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                      <tr class="collapse " id="customers">
                                      <td class="">
                                        Invoice Generator
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                      <tr class="collapse " id="customers">
                                      <td class="">
                                        Customer Invoices
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr>
                                      <td data-bs-toggle="collapse" href="#providers" role="button" aria-expanded="false" aria-controls="providers">
                                        <strong>Providers</strong>
                                        <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                        </svg>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                      <div >
                                      <tr class="collapse " id="providers">
                                      <td class="align-middle">
                                        Add/Edit/Deactivate Provider & Provider Teams
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr class="collapse " id="providers">
                                      <td class="">
                                        Provider Teams (List)
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr class="collapse " id="providers">
                                      <td class="">
                                        Providers (List, Profiles)
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr class="collapse " id="providers">
                                      <td class="">
                                        Provider Rates
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                      <tr class="collapse " id="providers">
                                      <td class="">
                                        Applications & Screenings
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                      <tr class="collapse " id="providers">
                                      <td class="">
                                        Reimbursements
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr class="collapse " id="providers">
                                      <td class="">
                                        Remittance Generator
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                      <tr class="collapse " id="providers">
                                      <td class="">
                                        Payment Manager
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr>
                                      <td >
                                        <strong>Reports</strong>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-check">
                                        <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      </tr>
                                
                                      <tr>
                                        <td >
                                        <strong>System Logs</strong>
                                        </td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                        </div>
                                        </td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                        </div>
                                        </td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                        </div>
                                        </td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                        </div>
                                        </td>
                                        <td>
                                        <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
                                        </div>
                                        </td>
                                        </tr>
                                
                                        <tr>
                                        <td data-bs-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings">
                                          <strong> Settings</strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse active" id="settings">
                                        <td class="align-middle">
                                          Business Profile & Settings
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                  {{-- 
                                        <tr>
                                        <td data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                          <strong>Business Profile & Settings </strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse " id="collapseExample4">
                                        <td class="align-middle">
                                          Account Profile
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr class="collapse " id="collapseExample4">
                                        <td class="align-middle">
                                          Business Setup
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr class="collapse " id="collapseExample4">
                                        <td class="align-middle">
                                          Notification Controls
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <tr class="collapse " id="collapseExample4">
                                        <td class="align-middle">
                                          Email Notifications
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <tr class="collapse " id="collapseExample4">
                                        <td class="align-middle">
                                          SMS Notifications
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <tr class="collapse " id="collapseExample4">
                                        <td class="align-middle">
                                          Password Reset
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr>
                                        <td data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
                                          <strong>Accommodations & Services Setup </strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse " id="collapseExample5">
                                        <td class="align-middle">
                                          View Services & Accommodations
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr class="collapse " id="collapseExample5">
                                        <td class="align-middle">
                                          Add/Edit Services & Accommodations
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr>
                                        <td data-bs-toggle="collapse" href="#specializations" role="button" aria-expanded="false" aria-controls="specializations">
                                          <strong>Specializations</strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse " id="specializations">
                                        <td class="align-middle">
                                          View Specializations
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr class="collapse " id="specializations">
                                        <td class="align-middle">
                                          View/Edit Specializations
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr>
                                        <td data-bs-toggle="collapse" href="#industries" role="button" aria-expanded="false" aria-controls="industries">
                                          <strong>Industries</strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse " id="industries">
                                        <td class="align-middle">
                                          View Industries
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr class="collapse " id="industries">
                                        <td class="align-middle">
                                          View/Edit Industries
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr>
                                        <td data-bs-toggle="collapse" href="#saved-forms" role="button" aria-expanded="false" aria-controls="saved-forms">
                                          <strong>Saved Forms</strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse " id="saved-forms">
                                        <td class="align-middle">
                                          View Customized Forms
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr class="collapse " id="saved-forms">
                                        <td class="align-middle">
                                          View/Edit Customized Forms
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr>
                                        <td data-bs-toggle="collapse" href="#coupons-&-referrals-setup" role="button" aria-expanded="false" aria-controls="coupons-&-referrals-setup">
                                          <strong>Coupons & Referrals Setup </strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse " id="coupons-&-referrals-setup">
                                        <td class="align-middle">
                                          View Coupons
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr class="collapse " id="coupons-&-referrals-setup">
                                        <td class="align-middle">
                                          Add/Edit Coupons
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <tr class="collapse " id="coupons-&-referrals-setup">
                                        <td class="align-middle">
                                          View Referrals
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <tr class="collapse " id="coupons-&-referrals-setup">
                                        <td class="align-middle">
                                          Add/Edit Referrals
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr>
                                        <td data-bs-toggle="collapse" href="#platform-integrations" role="button" aria-expanded="false" aria-controls="platform-integrations">
                                          <strong>Platform Integrations</strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse " id="platform-integrations">
                                        <td class="align-middle">
                                          QuickBooks
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr class="collapse " id="platform-integrations">
                                        <td class="align-middle">
                                          Stripe
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <tr class="collapse " id="platform-integrations">
                                        <td class="align-middle">
                                          Calendar Sync
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <tr class="collapse " id="platform-integrations">
                                        <td class="align-middle">
                                          Drive Sync
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr>
                                        <td data-bs-toggle="collapse" href="#admin-staff" role="button" aria-expanded="false" aria-controls="admin-staff">
                                          <strong>Admin-Staff</strong>
                                          <svg class="ms-2 mb-1" width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.0498 7.5L8.02506 0.5L0.000320435 7.5L16.0498 7.5Z" fill="#6E6B7B"/>
                                          </svg>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <div >
                                        <tr class="collapse " id="admin-staff">
                                        <td class="align-middle">
                                          Add/Edit/Deactivate Admin-Staff
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr class="collapse " id="admin-staff">
                                        <td class="align-middle">
                                          View Admin-Staff
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                        <tr class="collapse " id="admin-staff">
                                        <td class="align-middle">
                                          Add/Edit/Deactivate Admin-Staff Teams
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        </tr>
                                        <tr class="collapse " id="admin-staff">
                                        <td class="align-middle">
                                          View Admin-Staff Teams
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr>
                                
                                        <tr>
                                        <td >
                                          <strong>Support Tickets</strong>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select View" type="checkbox" tabindex="" checked>
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Add" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Edit" type="checkbox" tabindex="" >
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select Delete" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        <td>
                                          <div class="form-check">
                                          <input class="form-check-input" aria-label="Select All" type="checkbox" tabindex="">
                                          </div>
                                        </td>
                                        </tr> --}}
                                    </div>
                                    </tbody>
                                    </table>
                                </div>
                               </div>
                            </div>
                        </div>
                        <!-- Permissions Tab End-->

                        <div class="tab-pane fade" id="management-tab-pane" role="tabpanel" aria-labelledby="management-tab" tabindex="0">
                            
                          <div id="headingIndustryAccess" class="mb-3">
                            <h5>Companies & Customer Access</h5>
                          </div>
                          <div>
                            <table class="table table-hover mb-3">
                              <thead>
                                <tr>
                                  <th>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </th>
                                  <th>
                                    Company
                                  </th>
                                  <th>
                                    Customers
                                  </th>
                                  <th>
                                    Permission
                                  </th>
                                  <th class="text-center">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </td>
                                  <td>
                                    <a>Computer Sciences</a>
                                  </td>
                                  <td>5</td>
                                  <td>
                                    Manage
                                  </td>
                                  <td class="text-center">
                                    <a href="#"
                                      class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                      <x-icon name="view"/>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </td>
                                  <td>
                                    <a>Medical Industry</a>
                                  </td>
                                  <td>3</td>
                                  <td>
                                    Manage
                                  </td>
                                  <td class="text-center">
                                    <a href="#"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                    <x-icon name="view"/>
                                  </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </td>
                                  <td>
                                    <a>Information Technology</a>
                                  </td>
                                  <td>4</td>
                                  <td>
                                    Manage
                                  </td>
                                  <td class="text-center">
                                    <a href="#"
                                      class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                      <x-icon name="view"/>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>        
                          <!-- Companies & Customer Access End-->
                          <div id="headingIndustryAccess" class="mb-3 mt-5">
                            <h5>Teams & Providers Access</h5>
                          </div>
                          <div>
                            <table class="table table-hover mb-3">
                              <thead>
                                <tr>
                                  <th>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </th>
                                  <th>
                                    Teams
                                  </th>
                                  <th>
                                    Providers
                                  </th>
                                  <th>
                                    Permission
                                  </th>
                                  <th class="text-center">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </td>
                                  <td>
                                    <a>Business Preachers</a>
                                  </td>
                                  <td>5</td>
                                  <td>
                                    Manage
                                  </td>
                                  <td class="text-center">
                                    <a href="#"
                                      class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                      <x-icon name="view"/>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </td>
                                  <td>
                                    <a>Fast Talkers</a>
                                  </td>
                                  <td>3</td>
                                  <td>
                                    Manage
                                  </td>
                                  <td class="text-center">
                                    <a href="#"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                    <x-icon name="view"/>
                                  </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </td>
                                  <td>
                                    <a>Information Technology</a>
                                  </td>
                                  <td>4</td>
                                  <td>
                                    Manage
                                  </td>
                                  <td class="text-center">
                                    <a href="#"
                                      class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                      <x-icon name="view"/>
                                    </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>  
                          <!-- Accommodation & Service Access Start-->
                          <div class="mb-2 mt-5">
                            <h5>Accommodation & Service Access</h5>
                          </div>
                          <div>
                            <table class="table table-hover mb-3">
                              <thead>
                                <tr>
                                  <th>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </th>
                                  <th>
                                    Accommodation
                                  </th>
                                  <th>
                                    Permission
                                  </th>
                                  <th class="text-center">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </td>
                                  <td>
                                    <a>Real Time Captioning Services</a>
                                  </td>
    
                                  <td>
                                    Manage
                                  </td>
                                  <td class="text-center">
                                    <a href="#"
                                      class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                      <x-icon name="view"/>
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check">
                                      <input class="form-check-input" id="" name=""
                                        type="checkbox" tabindex="">
                                    </div>
                                  </td>
                                  <td>
                                    <a>Sign Language Interpreting Services</a>
                                  </td>
    
                                  <td>
                                    Manage
                                  </td>
                                  <td class="text-center">
                                    <a href="#"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                    <x-icon name="view"/>
                                  </a>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>   
                          <!-- Accommodation & Service Access End-->
                          <!-- Industry Access start-->
                          <div id="headingIndustryAccess" class="mb-2 mt-5">
                                <h5>Industry Access</h5>
                            </div>
                              <div>
                                <table class="table table-hover mb-3">
                                  <thead>
                                    <tr>
                                      <th>
                                        <div class="form-check">
                                          <input class="form-check-input" id="" name=""
                                            type="checkbox" tabindex="">
                                        </div>
                                      </th>
                                      <th>
                                        Industry
                                      </th>
                                      <th>
                                        Permission
                                      </th>
                                      <th class="text-center">Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" id="" name=""
                                            type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <a>Computer Sciences</a>
                                      </td>
        
                                      <td>
                                        Manage
                                      </td>
                                      <td class="text-center">
                                        <a href="#"
                                          class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                          <x-icon name="view"/>
                                        </a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" id="" name=""
                                            type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <a>Medical Industry</a>
                                      </td>
        
                                      <td>
                                        Manage
                                      </td>
                                      <td class="text-center">
                                        <a href="#"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                        <x-icon name="view"/>
                                      </a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" id="" name=""
                                            type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <a>Information Technology</a>
                                      </td>
        
                                      <td>
                                        Manage
                                      </td>
                                      <td class="text-center">
                                        <a href="#"
                                          class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                          <x-icon name="view"/>
                                        </a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div> 
                              <!-- Industry access End-->
                              
                              <!-- Departments Access Start-->
                              <div class="mb-2 mt-5">
                                <h5>Departments Access</h5>
                               </div>
                              <div>
                                <table class="table table-hover mb-3">
                                  <thead>
                                    <tr>
                                      <th>
                                        <div class="form-check">
                                          <input class="form-check-input" id="" name=""
                                            type="checkbox" tabindex="">
                                        </div>
                                      </th>
                                      <th>
                                        Accommodation
                                      </th>
                                      <th>
                                        Permission
                                      </th>
                                      <th class="text-center">Actions</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" id="" name=""
                                            type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <a>Real Time Captioning Services</a>
                                      </td>
        
                                      <td>
                                        Manage
                                      </td>
                                      <td class="text-center">
                                        <a href="#"
                                          class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                          <x-icon name="view"/>
                                        </a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>
                                        <div class="form-check">
                                          <input class="form-check-input" id="" name=""
                                            type="checkbox" tabindex="">
                                        </div>
                                      </td>
                                      <td>
                                        <a>Sign Language Interpreting Services</a>
                                      </td>
        
                                      <td>
                                        Manage
                                      </td>
                                      <td class="text-center">
                                        <a href="#"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon d-inline-flex">
                                        <x-icon name="view"/>
                                      </a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div> 
                              <!-- Departments Access End-->
                        </div>
                        <!-- Management Tab Ends -->

                        <div class="tab-pane fade" id="notes-tab-pane" role="tabpanel" aria-labelledby="notes-tab" tabindex="0">
                          <div class="row">
                            <h3>Notes</h3>
                            <div class="col-md-6 col-12 mb-4">
                              <label class="form-label" for="notes-column">
                                Add Notes
                              </label>
                              <textarea class="form-control" rows="3" placeholder="" name="notesColumn" id="notes-column"></textarea>
                            </div>
                            <div class="row mb-4">
                              <div class="col-md-6 col-12 d-flex justify-content-end">
                                <button class="btn btn-primary rounded ">Add</button>
                              </div>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-md-8">
                              <div class="d-inline-flex align-items-center">
                                <div class="bg-warning rounded px-2 py-3">
                                  <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                  </p>
                                </div>
                                <div class="d-flex actions mx-2">
                                  <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                    <x-icon name="pencil"/>
                                  </a>
                                  <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                    <x-icon name="recycle-bin"/>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <div class="col-md-8">
                              <div class="d-inline-flex align-items-center">
                                <div class="bg-warning rounded px-2 py-3">
                                  <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    <span class="text-primary">
                                      @Admin @Comapny
                                    </span>
                                  </p>
                                </div>
                                <div class="d-flex actions mx-2">
                                  <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                    <x-icon name="pencil"/>
                                  </a>
                                  <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                    <x-icon name="recycle-bin"/>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="row mb-3">
                            <div class="col-md-8">
                              <div class="d-inline-flex align-items-center">
                                <div class="bg-warning rounded px-2 py-3">
                                  <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    <span class="text-primary">
                                      @Thomas_charles
                                    </span>
                                  </p>
                                </div>
                                <div class="d-flex actions mx-2">
                                  <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                    <x-icon name="pencil"/>
                                  </a>
                                  <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                    <x-icon name="recycle-bin"/>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
        
                          <div class="row mb-3">
                            <div class="col-md-8">
                              <div class="d-inline-flex align-items-center">
                                <div class="bg-warning rounded px-2 py-3">
                                  <p class="mb-0">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    <span class="text-primary">
                                      @Thomas_charles
                                    </span>
                                  </p>
                                </div>
                                <div class="d-flex actions mx-2">
                                  <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon ">
                                    <x-icon name="pencil"/>
                                  </a>
                                  <a href="#" title="Inactive" aria-label="Inactive" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-2">
                                    <x-icon name="recycle-bin"/>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>           
                        </div>
                        <!-- Notes Tab Ends -->

                        <div class="tab-pane fade" id="reports-tab-pane" role="tabpanel" aria-labelledby="reports-tab" tabindex="0">
                                          
                        </div>
                        <!-- Reports Tab Ends -->

                        <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab" tabindex="0">
                          <div class="row">
                            <h3>Notification</h3>
                            <p class="mt-3">
                              Here you can control how you are notified about Profile activity.
                            </p>
                          </div>
                          <div class="row mb-4">
                            <div class="col-md-4 border rounded">
                              <div class="row">
                                <div class="d-flex justify-content-between mb-2 p-2">
                                  <div class="d-inline-flex align-items-center gap-4">
                                    <svg width="47" height="41" class="ms-2" viewBox="0 0 47 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M39.4375 1H7.5625C3.94381 1 1 3.93694 1 7.54647V26.253C1 29.8632 3.94381 32.7994 7.5625 32.7994H9.79402L6.72272 38.9275C6.53873 39.2963 6.61737 39.7436 6.9174 40.0261C7.09528 40.1941 7.32812 40.2819 7.5625 40.2819C7.72206 40.2819 7.88162 40.2429 8.02743 40.159L20.9371 32.7994H39.4375C43.0562 32.7994 46 29.8632 46 26.253V7.54647C46 3.93694 43.0562 1 39.4375 1ZM44.1235 26.2507C44.1235 28.8288 42.0194 30.9275 39.436 30.9275H20.686C20.5226 30.9275 20.363 30.9702 20.2203 31.0504L9.7841 37.0014L12.1508 32.2818C12.2966 31.9932 12.2798 31.6474 12.1095 31.3726C11.9385 31.0977 11.637 30.929 11.3125 30.929H7.5625C4.97903 30.929 2.875 28.8303 2.875 26.253V7.54647C2.875 4.96911 4.97903 2.87042 7.5625 2.87042V2.86889H39.436C42.0194 2.86889 44.1235 4.96758 44.1235 7.54494V26.2507Z" fill="black" stroke="black"/>
                                    </svg>
                                    <span>Text</span>
                                  </div>
                                  <div class="d-inline-flex align-items-center gap-4">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="ToggleText" checked>
                                      <label class="form-check-label" for="ToggleText">OFF</label>
                                      <label class="form-check-label" for="ToggleText">ON</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 border rounded mx-5">
                              <div class="row">
                                <div class="d-flex justify-content-between mb-2 p-2">
                                  <div class="d-inline-flex align-items-center gap-4">
                                    <svg width="52" height="36" viewBox="0 0 52 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M51 5.29326C50.9991 5.15222 50.9915 5.01288 50.9771 4.87269C50.9618 4.73335 50.9405 4.59485 50.9125 4.45721C50.8844 4.31957 50.8505 4.18363 50.8088 4.04938C50.7672 3.91599 50.7196 3.78344 50.6661 3.6543C50.6117 3.52515 50.5514 3.39855 50.4851 3.2745C50.4188 3.1513 50.3458 3.03066 50.2685 2.91425C50.1903 2.79785 50.1062 2.68485 50.017 2.57694C49.9277 2.46819 49.8343 2.36453 49.7349 2.26512C49.6355 2.16571 49.5318 2.07225 49.4231 1.98304C49.3152 1.89383 49.203 1.80971 49.0857 1.73155C48.9693 1.65338 48.8495 1.58116 48.7263 1.51489C48.6023 1.44861 48.4757 1.38829 48.3466 1.33391C48.2174 1.27953 48.0857 1.23195 47.9515 1.19117C47.8172 1.14954 47.6813 1.1147 47.5436 1.08666C47.4068 1.05863 47.2684 1.03738 47.1282 1.02294C46.9888 1.0085 46.8495 1.00085 46.7093 1H5.29072C5.15052 1 5.01033 1.00765 4.87014 1.02124C4.7308 1.03569 4.59231 1.05608 4.45466 1.08412C4.31702 1.1113 4.18108 1.14614 4.04598 1.18692C3.91174 1.22771 3.78004 1.27529 3.65005 1.32966C3.5209 1.38319 3.3943 1.44352 3.27026 1.50979C3.14621 1.57606 3.02641 1.64828 2.90916 1.72645C2.79275 1.80462 2.67975 1.88788 2.57185 1.97709C2.46309 2.06631 2.35943 2.16062 2.26003 2.26003C2.16062 2.35943 2.06631 2.46394 1.97709 2.57185C1.88788 2.6806 1.80462 2.7936 1.72645 2.91001C1.64828 3.02726 1.57606 3.14706 1.50979 3.27111C1.44352 3.39515 1.38319 3.52175 1.32966 3.65175C1.27529 3.78174 1.22855 3.91344 1.18692 4.04768C1.14614 4.18193 1.11215 4.31872 1.08412 4.45636C1.05693 4.594 1.03569 4.7325 1.02209 4.87269C1.00765 5.01203 1 5.15222 1 5.29326V30.9815C1.00085 31.1225 1.0085 31.2619 1.02294 31.4021C1.03823 31.5414 1.05948 31.6799 1.08751 31.8175C1.11555 31.9552 1.14954 32.0911 1.19117 32.2245C1.2328 32.3588 1.28038 32.4913 1.33391 32.6204C1.38829 32.7496 1.44861 32.8762 1.51489 33.0002C1.58116 33.1234 1.65338 33.2441 1.73155 33.3605C1.80971 33.4769 1.89383 33.589 1.98304 33.6978C2.0714 33.8066 2.16572 33.9102 2.26512 34.0096C2.36453 34.1082 2.46819 34.2025 2.57609 34.2917C2.68485 34.3809 2.797 34.465 2.9134 34.5432C3.02981 34.6214 3.15046 34.6936 3.27365 34.7599C3.39685 34.8261 3.52345 34.8865 3.65345 34.9408C3.78259 34.9952 3.91429 35.0428 4.04853 35.0836C4.18278 35.1252 4.31787 35.16 4.45551 35.1881C4.59316 35.2161 4.73165 35.2374 4.87099 35.2518C5.01033 35.2662 5.15052 35.2739 5.29072 35.2747H46.7093C46.8495 35.2747 46.9897 35.2679 47.1299 35.2535C47.2692 35.2391 47.4077 35.2187 47.5453 35.1906C47.683 35.1634 47.8198 35.1286 47.954 35.0878C48.0883 35.047 48.22 34.9995 48.35 34.9459C48.4791 34.8916 48.6065 34.8312 48.7297 34.765C48.8538 34.6987 48.9744 34.6265 49.0908 34.5483C49.2072 34.4701 49.3203 34.3869 49.429 34.2976C49.5369 34.2084 49.6414 34.1141 49.7408 34.0147C49.8394 33.9153 49.9337 33.8116 50.0229 33.7029C50.1121 33.5941 50.1954 33.4811 50.2736 33.3647C50.3517 33.2483 50.4239 33.1277 50.4902 33.0036C50.5565 32.8796 50.6168 32.753 50.6703 32.623C50.7247 32.4938 50.7723 32.3613 50.8131 32.2271C50.8539 32.0928 50.8878 31.9569 50.9159 31.8184C50.9439 31.6807 50.9643 31.5422 50.9788 31.4021C50.9924 31.2627 51 31.1225 51 30.9815V5.29326ZM34.2985 18.1374L49.0951 3.92703C49.3389 4.34931 49.4604 4.80472 49.4596 5.29241V30.9815C49.4596 31.47 49.3381 31.9246 49.0934 32.3469L34.2985 18.1374ZM46.7076 2.54126C47.1596 2.54041 47.5853 2.64577 47.9846 2.85648L26.9898 23.0194C26.9236 23.0832 26.8522 23.1392 26.7757 23.1894C26.6993 23.2395 26.6185 23.2811 26.5336 23.3151C26.4486 23.35 26.3611 23.3754 26.2719 23.3933C26.1818 23.4103 26.0909 23.4188 25.9992 23.4188C25.9082 23.4188 25.8173 23.4103 25.7273 23.3933C25.638 23.3754 25.5505 23.35 25.4656 23.3151C25.3806 23.2811 25.2999 23.2395 25.2234 23.1894C25.147 23.1392 25.0756 23.0832 25.0093 23.0194L4.01455 2.85818C4.41388 2.64661 4.83955 2.54211 5.29072 2.54296L46.7076 2.54126ZM2.90661 32.3469C2.66191 31.9246 2.53956 31.47 2.54041 30.9815V5.29326C2.53956 4.80557 2.66106 4.35016 2.90406 3.92788L17.7024 18.1374L2.90661 32.3469ZM5.29072 33.7335C4.83955 33.7352 4.41388 33.6298 4.01455 33.4183L18.8137 19.2054L23.9447 24.1316C24.0815 24.2633 24.2293 24.3806 24.3891 24.4842C24.548 24.587 24.7162 24.6746 24.8921 24.7451C25.0679 24.8164 25.2498 24.87 25.4358 24.9057C25.6219 24.9422 25.8105 24.96 26 24.96C26.1903 24.96 26.3781 24.9422 26.5642 24.9057C26.7511 24.87 26.9321 24.8164 27.1079 24.7451C27.2847 24.6746 27.452 24.587 27.6118 24.4842C27.7707 24.3806 27.9194 24.2633 28.0561 24.1316L33.1855 19.2054L47.9855 33.4166C47.5861 33.6281 47.1604 33.7326 46.7093 33.7318L5.29072 33.7335Z" fill="black" stroke="black"/>
                                    </svg>
                                    <span>Email</span>
                                  </div>
                                  <div class="d-inline-flex align-items-center gap-4">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="ToggleEmail" checked>
                                      <label class="form-check-label" for="ToggleEmail">
                                        OFF
                                      </label>
                                      <label class="form-check-label" for="ToggleEmail">
                                        ON
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4"></div>
                          </div>
                          <div class="row mb-5">
                            <div class="col-md-4 mt-2 border rounded">
                              <div class="row">
                                <div class="d-flex justify-content-between mb-2 p-2">
                                  <div class="d-inline-flex align-items-center gap-4">
                                    <svg width="57" height="44" viewBox="0 0 57 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M41.3374 29.7475C41.2768 29.6869 41.2768 29.5647 41.2768 29.4424V17.7844C41.2768 11.1315 36.2269 5.69997 29.7167 5.02815V2.22048C29.7167 1.54866 29.17 1 28.5 1C27.831 1 27.2833 1.54866 27.2833 2.22048V5.02815C20.8347 5.63839 15.7241 11.1315 15.7241 17.7844V29.5031C15.7241 29.6253 15.6626 29.6869 15.6019 29.7475L12.56 32.7997C12.0123 33.3483 11.7688 34.0202 11.7688 34.8133V35.7286C11.7688 37.2552 13.0471 38.5363 14.568 38.5363H23.0853C23.5117 41.1004 25.7623 43.114 28.5 43.114C31.2386 43.114 33.4892 41.1611 33.9156 38.5363H42.4329C43.9538 38.5363 45.2312 37.2552 45.2312 35.7286V34.8133C45.2312 34.0808 44.927 33.3483 44.4409 32.7997L41.3374 29.7475ZM28.5 40.6731C27.162 40.6731 26.0059 39.7577 25.641 38.5363H31.4206C30.9951 39.7577 29.839 40.6731 28.5 40.6731ZM42.7977 35.7286C42.7977 35.9125 42.6158 36.0953 42.4329 36.0953H14.568C14.3852 36.0953 14.2032 35.9125 14.2032 35.7286V34.8133C14.2032 34.691 14.2639 34.6304 14.3245 34.5697L17.3664 31.5176C17.9141 30.968 18.1576 30.2971 18.1576 29.5031V17.7844C18.1576 12.1084 22.7811 7.40846 28.5 7.40846C34.2198 7.40846 38.8433 12.0468 38.8433 17.7844V29.5031C38.8433 30.2355 39.1475 30.968 39.6346 31.5176L42.6764 34.5697C42.7371 34.6304 42.7977 34.7526 42.7977 34.8133V35.7286ZM11.8304 28.4655C11.5868 28.7099 11.2826 28.8322 10.9785 28.8322C10.6743 28.8322 10.3701 28.7099 10.1265 28.4655C8.17919 26.5125 7.08467 23.8877 7.08467 21.1417C7.08467 18.3946 8.17919 15.7708 10.1265 13.8169C10.6136 13.3289 11.3433 13.3289 11.8304 13.8169C12.3165 14.3059 12.3165 15.0383 11.8304 15.5263C10.3094 17.0519 9.51817 19.0049 9.51817 21.1417C9.51817 23.2775 10.3701 25.2305 11.8304 26.757C12.3165 27.245 12.3165 27.9775 11.8304 28.4655ZM7.51016 31.0903C7.99723 31.5783 7.99723 32.3107 7.51016 32.7997C7.26663 33.0432 6.96244 33.1654 6.65825 33.1654C6.35406 33.1654 6.04988 33.0432 5.80634 32.7997C2.70382 29.6869 1 25.5356 1 21.1417C1 16.7468 2.70382 12.5964 5.80634 9.48365C6.29341 8.99564 7.02402 8.99564 7.51016 9.48365C7.99723 9.97165 7.99723 10.7041 7.51016 11.1931C4.89378 13.8169 3.43443 17.3571 3.43443 21.1417C3.43443 24.9253 4.89378 28.4048 7.51016 31.0903ZM46.8744 28.4655C46.6309 28.7099 46.3267 28.8322 46.0225 28.8322C45.7183 28.8322 45.4141 28.7099 45.1706 28.4655C44.6844 27.9775 44.6844 27.245 45.1706 26.757C48.274 23.6442 48.274 18.6391 45.1706 15.5263C44.6844 15.0383 44.6844 14.3059 45.1706 13.8169C45.6576 13.3289 46.3873 13.3289 46.8744 13.8169C50.8895 17.846 50.8895 24.4373 46.8744 28.4655ZM56 21.1417C56 25.5356 54.2971 29.6869 51.1937 32.7997C50.9501 33.0432 50.6459 33.1654 50.3418 33.1654C50.0376 33.1654 49.7334 33.0432 49.4908 32.7997C49.0037 32.3107 49.0037 31.5783 49.4908 31.0903C52.1062 28.4655 53.5665 24.9253 53.5665 21.1417C53.5665 17.3571 52.1062 13.8785 49.4908 11.1931C49.0037 10.7041 49.0037 9.97165 49.4908 9.48365C49.9769 8.99564 50.7075 8.99564 51.1937 9.48365C54.2971 12.5964 56 16.7468 56 21.1417Z" fill="black" stroke="black" stroke-width="0.7"/>
                                    </svg>
                                    <span>Notification</span>
                                  </div>
                                  <div class="d-inline-flex align-items-center gap-4">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="NotificationToggle" checked>
                                      <label class="form-check-label" for="NotificationToggle">OFF</label>
                                      <label class="form-check-label" for="NotificationToggle">ON</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                              <div class="table-responsive">
                              <table id="system-logs" class="table table-hover" aria-label="system-logs">
                              <thead>
                                <tr role="row">
                                  <th scope="col">Trigger</th>
                                  <th scope="col">Permission</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr role="row" class="odd">
                                  <td>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    </p>
                                  </td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle" checked>
                                      <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                      </label>
                                      <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="even">
                                  <td>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    </p>
                                  </td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle">
                                      <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                      </label>
                                      <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    </p>
                                  </td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle">
                                      <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                      </label>
                                      <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="even">
                                  <td>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    </p>
                                  </td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle" checked>
                                      <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                      </label>
                                      <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td>
                                    <p>
                                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    </p>
                                  </td>
                                  <td>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" role="switch" id="permissions-toggle" checked>
                                      <label class="form-check-label" for="permissions-toggle">
                                        Disable
                                      </label>
                                      <label class="form-check-label" for="permissions-toggle">
                                        Enable
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                              </table>
                              </div>
                        </div>
                        <!-- Notifications Tab End-->
                        <div class="tab-pane fade" id="log-tab-pane" role="tabpanel" aria-labelledby="log-tab" tabindex="0">
                          <div class="row mb-4">
                            <h3>Logs</h3>
                          </div>
                          <div class="row mb-4">
                            <div class="dropdown">
                              <button class="btn btn-secondary dropdown-toggle btn-outline-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
                                </svg>
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a class="dropdown-item" href="#">
                                    Action
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#">
                                    Another action
                                  </a>
                                </li>
                                <li>
                                  <a class="dropdown-item" href="#">
                                    Something else here
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between mb-2">
                            <div class="d-inline-flex align-items-center gap-4">
                              <label for="show_records_number" class="form-label">
                                Show
                              </label>
                              <select class="form-select" id="show_records_number">
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                              </select>
                            </div>
                            <div class="d-inline-flex align-items-center gap-4">
                              <label for="search" class="form-label fw-semibold">
                                Search
                              </label>
                              <input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                            </div>
                          </div>
                          <div class="table-responsive">
                            <table id="system-logs" class="table table-hover" aria-label="System Logs">
                              <thead>
                                <tr role="row">
                                  <th scope="col">Date & Time</th>
                                  <th scope="col">Activity</th>
                                  <th scope="col">IP Address</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr role="row" class="odd">
                                  <td>11/23/2022 4:18 AM</td>
                                  <td>
                                    Specific schedule added by Alex Wonderland
                                  </td>
                                  <td>39.40.83.18</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td>11/23/2022 4:18 AM</td>
                                  <td>
                                    Document deleted by Alex Wonderland
                                  </td>
                                  <td>39.40.83.18</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td>11/23/2022 4:18 AM</td>
                                  <td>
                                    Specific schedule added by Alex Wonderland
                                  </td>
                                  <td>39.40.83.18</td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td>11/23/2022 4:18 AM</td>
                                  <td>
                                    Specific schedule added by Alex Wonderland
                                  </td>
                                  <td>39.40.83.18</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td>11/23/2022 4:18 AM</td>
                                  <td>
                                    Assignment Running Late by Alex Wonderland
                                  </td>
                                  <td>39.40.83.18</td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td>11/23/2022 4:18 AM</td>
                                  <td>
                                    Specific schedule added by Alex Wonderland
                                  </td>
                                  <td>39.40.83.18</td>
                                </tr>
                                <tr role="row" class="even">
                                  <td>11/23/2022 4:18 AM</td>
                                  <td>
                                    Assignment Checked In by Alex Wonderland
                                  </td>
                                  <td>39.40.83.18</td>
                                </tr>
                                <tr role="row" class="odd">
                                  <td>11/23/2022 4:18 AM</td>
                                  <td>
                                    Specific schedule added by Alex Wonderland
                                  </td>
                                  <td>39.40.83.18</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="d-flex justify-content-between">
                            <div>
                              <p class="fw-semibold">
                                Showing 1 to 5 of 30 entries
                              </p>
                            </div>
                            <nav aria-label="Page Navigation">
                              <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    Previous
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    Next
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                          </div>
                        </div>
                        <!-- Log Tab End-->
                        
                        
        
            </div> <!-- tab-content -->
             <!-- END: Provider Details ................... -->
             </div>
        
        
        
        
                 </div>
                 </div>
               </div>
               @include('panels.common.add-document')
               </section>
            <!-- Basic Floating Label Form section end -->
          </div>
  </div>