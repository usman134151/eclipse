<div>
  <!-- BEGIN: Content-->
  <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h1 class="content-header-title float-start mb-0">{{ $bookingType }} Assignments</h1>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">
                  Home
                  </a>
                </li>
                <li class="breadcrumb-item">
                  <a href="javascript:void(0)">
                  Assignments
                  </a>
                </li>
                <li class="breadcrumb-item">
                  Past Assignments
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
                <div class="row">
                  <div>
                    <div class="d-lg-flex justify-content-end mb-4">
                      <a href="#" class="btn btn-primary rounded btn-sm">Create Assignment</a>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
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
                        <div>
                          <div class="form-check form-switch mb-lg-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="ManagePermissions">
                            <label class="form-check-label" for="ManagePermissions">Manage Permissions</label>
                          </div>
                        </div>
                      </div>
                      <div class="d-inline-flex align-items-center gap-4">
                        <label for="search" class="form-label-sm mb-0">Search</label>
                        <input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                      </div>
                    </div>
                    <!-- Hoverable rows start -->
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
                                  <th scope="col" class="text-center">Address</th>
                                  <th scope="col">Company</th>
                                  <th scope="col">Billing</th>
                                  <th>Status</th>
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
                                    <div class="d-flex align-items-center gap-1">
                                      <svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
                                      Unassigned
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex actions">
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                        </svg>
                                      </a>
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0002 9.44514C10.8201 9.44624 11.622 9.2041 12.3043 8.74937C12.9865 8.29464 13.5186 7.64776 13.8331 6.89056C14.1477 6.13335 14.2305 5.29987 14.0713 4.49556C13.912 3.69125 13.5177 2.95226 12.9383 2.3721C12.3589 1.79193 11.6205 1.39666 10.8164 1.23629C10.0123 1.07593 9.17867 1.15768 8.42105 1.4712C7.66343 1.78472 7.01582 2.31592 6.56018 2.99759C6.10454 3.67926 5.86133 4.48076 5.86133 5.30069C5.86133 6.39891 6.29721 7.45222 7.07324 8.22929C7.84928 9.00637 8.902 9.44366 10.0002 9.44514ZM10.0002 2.2618C10.6006 2.26071 11.1879 2.43781 11.6875 2.7707C12.1872 3.10358 12.5769 3.57727 12.8071 4.13176C13.0374 4.68626 13.098 5.29662 12.9811 5.88554C12.8642 6.47447 12.5752 7.01547 12.1507 7.44002C11.7261 7.86458 11.1851 8.15359 10.5962 8.27045C10.0073 8.38731 9.39689 8.32678 8.8424 8.0965C8.2879 7.86623 7.81422 7.47658 7.48133 6.9769C7.14845 6.47722 6.97134 5.88999 6.97244 5.28958C6.97391 4.48702 7.29338 3.71774 7.86088 3.15024C8.42838 2.58274 9.19765 2.26327 10.0002 2.2618Z" fill="black"/>
                                          <path d="M3.33314 17.715V14.315C4.19085 13.4148 5.2265 12.703 6.37424 12.2247C7.52198 11.7465 8.75667 11.5124 9.99981 11.5372C11.7013 11.5143 13.3759 11.9623 14.8387 12.8317L15.5887 11.9928C13.9164 10.9394 11.9761 10.3898 9.99981 10.4094C8.55381 10.3726 7.11749 10.6552 5.79325 11.2372C4.46901 11.8191 3.28946 12.686 2.3387 13.7761C2.26459 13.8716 2.22363 13.9886 2.22203 14.1094V17.715C2.21456 18.0176 2.32728 18.3109 2.53552 18.5306C2.74376 18.7502 3.03056 18.8785 3.33314 18.8872H10.2165L9.16092 17.7761L3.33314 17.715Z" fill="black"/>
                                          <path d="M16.6665 17.7158V17.7769H14.9165L13.9165 18.888H16.6665C16.9652 18.8793 17.2486 18.7542 17.4562 18.5393C17.6638 18.3244 17.7792 18.0368 17.7776 17.738V14.5547L16.6665 15.7936V17.7158Z" fill="black"/>
                                          <path d="M19.3111 10.3437C19.2012 10.2459 19.0571 10.1957 18.9102 10.204C18.7634 10.2123 18.6258 10.2786 18.5277 10.3882L12.0722 17.6104L9.1833 14.5048C9.13588 14.4494 9.078 14.4038 9.01297 14.3707C8.94794 14.3376 8.87703 14.3177 8.80429 14.312C8.73155 14.3063 8.6584 14.3151 8.58903 14.3377C8.51965 14.3602 8.45541 14.3963 8.39996 14.4437C8.34565 14.4931 8.30167 14.5528 8.27057 14.6193C8.23947 14.6858 8.22186 14.7578 8.21876 14.8312C8.21566 14.9046 8.22713 14.9778 8.25251 15.0467C8.27789 15.1156 8.31668 15.1788 8.36663 15.2326L12.0833 19.2326L19.3555 11.1104C19.4482 11.0014 19.4954 10.8609 19.4871 10.7181C19.4788 10.5753 19.4158 10.4412 19.3111 10.3437Z" fill="black"/>
                                        </svg>
                                      </a>
                                      <div class="dropdown ac-cstm">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                        </a>
                                        <div class="tablediv dropdown-menu fadeIn">
                                          <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
                                          <a title="Assign" aria-label="Assign" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Assign Provider</a>
                                          <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
                                          <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Cancel
                                          </a>
                                        </div>
                                      </div>
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
                                    <div class="d-flex align-items-center gap-1">
                                      <svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
                                      Unassigned
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex actions">
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                        </svg>
                                      </a>
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0002 9.44514C10.8201 9.44624 11.622 9.2041 12.3043 8.74937C12.9865 8.29464 13.5186 7.64776 13.8331 6.89056C14.1477 6.13335 14.2305 5.29987 14.0713 4.49556C13.912 3.69125 13.5177 2.95226 12.9383 2.3721C12.3589 1.79193 11.6205 1.39666 10.8164 1.23629C10.0123 1.07593 9.17867 1.15768 8.42105 1.4712C7.66343 1.78472 7.01582 2.31592 6.56018 2.99759C6.10454 3.67926 5.86133 4.48076 5.86133 5.30069C5.86133 6.39891 6.29721 7.45222 7.07324 8.22929C7.84928 9.00637 8.902 9.44366 10.0002 9.44514ZM10.0002 2.2618C10.6006 2.26071 11.1879 2.43781 11.6875 2.7707C12.1872 3.10358 12.5769 3.57727 12.8071 4.13176C13.0374 4.68626 13.098 5.29662 12.9811 5.88554C12.8642 6.47447 12.5752 7.01547 12.1507 7.44002C11.7261 7.86458 11.1851 8.15359 10.5962 8.27045C10.0073 8.38731 9.39689 8.32678 8.8424 8.0965C8.2879 7.86623 7.81422 7.47658 7.48133 6.9769C7.14845 6.47722 6.97134 5.88999 6.97244 5.28958C6.97391 4.48702 7.29338 3.71774 7.86088 3.15024C8.42838 2.58274 9.19765 2.26327 10.0002 2.2618Z" fill="black"/>
                                          <path d="M3.33314 17.715V14.315C4.19085 13.4148 5.2265 12.703 6.37424 12.2247C7.52198 11.7465 8.75667 11.5124 9.99981 11.5372C11.7013 11.5143 13.3759 11.9623 14.8387 12.8317L15.5887 11.9928C13.9164 10.9394 11.9761 10.3898 9.99981 10.4094C8.55381 10.3726 7.11749 10.6552 5.79325 11.2372C4.46901 11.8191 3.28946 12.686 2.3387 13.7761C2.26459 13.8716 2.22363 13.9886 2.22203 14.1094V17.715C2.21456 18.0176 2.32728 18.3109 2.53552 18.5306C2.74376 18.7502 3.03056 18.8785 3.33314 18.8872H10.2165L9.16092 17.7761L3.33314 17.715Z" fill="black"/>
                                          <path d="M16.6665 17.7158V17.7769H14.9165L13.9165 18.888H16.6665C16.9652 18.8793 17.2486 18.7542 17.4562 18.5393C17.6638 18.3244 17.7792 18.0368 17.7776 17.738V14.5547L16.6665 15.7936V17.7158Z" fill="black"/>
                                          <path d="M19.3111 10.3437C19.2012 10.2459 19.0571 10.1957 18.9102 10.204C18.7634 10.2123 18.6258 10.2786 18.5277 10.3882L12.0722 17.6104L9.1833 14.5048C9.13588 14.4494 9.078 14.4038 9.01297 14.3707C8.94794 14.3376 8.87703 14.3177 8.80429 14.312C8.73155 14.3063 8.6584 14.3151 8.58903 14.3377C8.51965 14.3602 8.45541 14.3963 8.39996 14.4437C8.34565 14.4931 8.30167 14.5528 8.27057 14.6193C8.23947 14.6858 8.22186 14.7578 8.21876 14.8312C8.21566 14.9046 8.22713 14.9778 8.25251 15.0467C8.27789 15.1156 8.31668 15.1788 8.36663 15.2326L12.0833 19.2326L19.3555 11.1104C19.4482 11.0014 19.4954 10.8609 19.4871 10.7181C19.4788 10.5753 19.4158 10.4412 19.3111 10.3437Z" fill="black"/>
                                        </svg>
                                      </a>
                                      <div class="dropdown ac-cstm">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                        </a>
                                        <div class="tablediv dropdown-menu fadeIn">
                                          <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
                                          <a title="Manage Assign Providers" aria-label="Manage Assign Providers" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Manage Assigned Providers</a>
                                          <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
                                          <a title="Message Provider Team" aria-label="Message Provider Team" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Provider Team</a> 
                                          <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Cancel
                                          </a>
                                        </div>
                                      </div>
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
                                    <div class="d-flex align-items-center gap-1">
                                      <svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
                                      Unassigned
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex actions">
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                        </svg>
                                      </a>
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0002 9.44514C10.8201 9.44624 11.622 9.2041 12.3043 8.74937C12.9865 8.29464 13.5186 7.64776 13.8331 6.89056C14.1477 6.13335 14.2305 5.29987 14.0713 4.49556C13.912 3.69125 13.5177 2.95226 12.9383 2.3721C12.3589 1.79193 11.6205 1.39666 10.8164 1.23629C10.0123 1.07593 9.17867 1.15768 8.42105 1.4712C7.66343 1.78472 7.01582 2.31592 6.56018 2.99759C6.10454 3.67926 5.86133 4.48076 5.86133 5.30069C5.86133 6.39891 6.29721 7.45222 7.07324 8.22929C7.84928 9.00637 8.902 9.44366 10.0002 9.44514ZM10.0002 2.2618C10.6006 2.26071 11.1879 2.43781 11.6875 2.7707C12.1872 3.10358 12.5769 3.57727 12.8071 4.13176C13.0374 4.68626 13.098 5.29662 12.9811 5.88554C12.8642 6.47447 12.5752 7.01547 12.1507 7.44002C11.7261 7.86458 11.1851 8.15359 10.5962 8.27045C10.0073 8.38731 9.39689 8.32678 8.8424 8.0965C8.2879 7.86623 7.81422 7.47658 7.48133 6.9769C7.14845 6.47722 6.97134 5.88999 6.97244 5.28958C6.97391 4.48702 7.29338 3.71774 7.86088 3.15024C8.42838 2.58274 9.19765 2.26327 10.0002 2.2618Z" fill="black"/>
                                          <path d="M3.33314 17.715V14.315C4.19085 13.4148 5.2265 12.703 6.37424 12.2247C7.52198 11.7465 8.75667 11.5124 9.99981 11.5372C11.7013 11.5143 13.3759 11.9623 14.8387 12.8317L15.5887 11.9928C13.9164 10.9394 11.9761 10.3898 9.99981 10.4094C8.55381 10.3726 7.11749 10.6552 5.79325 11.2372C4.46901 11.8191 3.28946 12.686 2.3387 13.7761C2.26459 13.8716 2.22363 13.9886 2.22203 14.1094V17.715C2.21456 18.0176 2.32728 18.3109 2.53552 18.5306C2.74376 18.7502 3.03056 18.8785 3.33314 18.8872H10.2165L9.16092 17.7761L3.33314 17.715Z" fill="black"/>
                                          <path d="M16.6665 17.7158V17.7769H14.9165L13.9165 18.888H16.6665C16.9652 18.8793 17.2486 18.7542 17.4562 18.5393C17.6638 18.3244 17.7792 18.0368 17.7776 17.738V14.5547L16.6665 15.7936V17.7158Z" fill="black"/>
                                          <path d="M19.3111 10.3437C19.2012 10.2459 19.0571 10.1957 18.9102 10.204C18.7634 10.2123 18.6258 10.2786 18.5277 10.3882L12.0722 17.6104L9.1833 14.5048C9.13588 14.4494 9.078 14.4038 9.01297 14.3707C8.94794 14.3376 8.87703 14.3177 8.80429 14.312C8.73155 14.3063 8.6584 14.3151 8.58903 14.3377C8.51965 14.3602 8.45541 14.3963 8.39996 14.4437C8.34565 14.4931 8.30167 14.5528 8.27057 14.6193C8.23947 14.6858 8.22186 14.7578 8.21876 14.8312C8.21566 14.9046 8.22713 14.9778 8.25251 15.0467C8.27789 15.1156 8.31668 15.1788 8.36663 15.2326L12.0833 19.2326L19.3555 11.1104C19.4482 11.0014 19.4954 10.8609 19.4871 10.7181C19.4788 10.5753 19.4158 10.4412 19.3111 10.3437Z" fill="black"/>
                                        </svg>
                                      </a>
                                      <div class="dropdown ac-cstm">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                        </a>
                                        <div class="tablediv dropdown-menu fadeIn">
                                          <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
                                          <a title="Assign" aria-label="Assign" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Assign Provider</a>
                                          <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
                                          <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Cancel
                                          </a>
                                        </div>
                                      </div>
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
                                    <div class="d-flex align-items-center gap-1">
                                      <svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
                                      Unassigned
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex actions">
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                        </svg>
                                      </a>
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0002 9.44514C10.8201 9.44624 11.622 9.2041 12.3043 8.74937C12.9865 8.29464 13.5186 7.64776 13.8331 6.89056C14.1477 6.13335 14.2305 5.29987 14.0713 4.49556C13.912 3.69125 13.5177 2.95226 12.9383 2.3721C12.3589 1.79193 11.6205 1.39666 10.8164 1.23629C10.0123 1.07593 9.17867 1.15768 8.42105 1.4712C7.66343 1.78472 7.01582 2.31592 6.56018 2.99759C6.10454 3.67926 5.86133 4.48076 5.86133 5.30069C5.86133 6.39891 6.29721 7.45222 7.07324 8.22929C7.84928 9.00637 8.902 9.44366 10.0002 9.44514ZM10.0002 2.2618C10.6006 2.26071 11.1879 2.43781 11.6875 2.7707C12.1872 3.10358 12.5769 3.57727 12.8071 4.13176C13.0374 4.68626 13.098 5.29662 12.9811 5.88554C12.8642 6.47447 12.5752 7.01547 12.1507 7.44002C11.7261 7.86458 11.1851 8.15359 10.5962 8.27045C10.0073 8.38731 9.39689 8.32678 8.8424 8.0965C8.2879 7.86623 7.81422 7.47658 7.48133 6.9769C7.14845 6.47722 6.97134 5.88999 6.97244 5.28958C6.97391 4.48702 7.29338 3.71774 7.86088 3.15024C8.42838 2.58274 9.19765 2.26327 10.0002 2.2618Z" fill="black"/>
                                          <path d="M3.33314 17.715V14.315C4.19085 13.4148 5.2265 12.703 6.37424 12.2247C7.52198 11.7465 8.75667 11.5124 9.99981 11.5372C11.7013 11.5143 13.3759 11.9623 14.8387 12.8317L15.5887 11.9928C13.9164 10.9394 11.9761 10.3898 9.99981 10.4094C8.55381 10.3726 7.11749 10.6552 5.79325 11.2372C4.46901 11.8191 3.28946 12.686 2.3387 13.7761C2.26459 13.8716 2.22363 13.9886 2.22203 14.1094V17.715C2.21456 18.0176 2.32728 18.3109 2.53552 18.5306C2.74376 18.7502 3.03056 18.8785 3.33314 18.8872H10.2165L9.16092 17.7761L3.33314 17.715Z" fill="black"/>
                                          <path d="M16.6665 17.7158V17.7769H14.9165L13.9165 18.888H16.6665C16.9652 18.8793 17.2486 18.7542 17.4562 18.5393C17.6638 18.3244 17.7792 18.0368 17.7776 17.738V14.5547L16.6665 15.7936V17.7158Z" fill="black"/>
                                          <path d="M19.3111 10.3437C19.2012 10.2459 19.0571 10.1957 18.9102 10.204C18.7634 10.2123 18.6258 10.2786 18.5277 10.3882L12.0722 17.6104L9.1833 14.5048C9.13588 14.4494 9.078 14.4038 9.01297 14.3707C8.94794 14.3376 8.87703 14.3177 8.80429 14.312C8.73155 14.3063 8.6584 14.3151 8.58903 14.3377C8.51965 14.3602 8.45541 14.3963 8.39996 14.4437C8.34565 14.4931 8.30167 14.5528 8.27057 14.6193C8.23947 14.6858 8.22186 14.7578 8.21876 14.8312C8.21566 14.9046 8.22713 14.9778 8.25251 15.0467C8.27789 15.1156 8.31668 15.1788 8.36663 15.2326L12.0833 19.2326L19.3555 11.1104C19.4482 11.0014 19.4954 10.8609 19.4871 10.7181C19.4788 10.5753 19.4158 10.4412 19.3111 10.3437Z" fill="black"/>
                                        </svg>
                                      </a>
                                      <div class="dropdown ac-cstm">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                        </a>
                                        <div class="tablediv dropdown-menu fadeIn">
                                          <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
                                          <a title="Assign" aria-label="Assign" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Assign Provider</a>
                                          <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
                                          <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Cancel
                                          </a>
                                        </div>
                                      </div>
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
                                    <div class="d-flex align-items-center gap-1">
                                      <svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
                                      Unassigned
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex actions">
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                        </svg>
                                      </a>
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0002 9.44514C10.8201 9.44624 11.622 9.2041 12.3043 8.74937C12.9865 8.29464 13.5186 7.64776 13.8331 6.89056C14.1477 6.13335 14.2305 5.29987 14.0713 4.49556C13.912 3.69125 13.5177 2.95226 12.9383 2.3721C12.3589 1.79193 11.6205 1.39666 10.8164 1.23629C10.0123 1.07593 9.17867 1.15768 8.42105 1.4712C7.66343 1.78472 7.01582 2.31592 6.56018 2.99759C6.10454 3.67926 5.86133 4.48076 5.86133 5.30069C5.86133 6.39891 6.29721 7.45222 7.07324 8.22929C7.84928 9.00637 8.902 9.44366 10.0002 9.44514ZM10.0002 2.2618C10.6006 2.26071 11.1879 2.43781 11.6875 2.7707C12.1872 3.10358 12.5769 3.57727 12.8071 4.13176C13.0374 4.68626 13.098 5.29662 12.9811 5.88554C12.8642 6.47447 12.5752 7.01547 12.1507 7.44002C11.7261 7.86458 11.1851 8.15359 10.5962 8.27045C10.0073 8.38731 9.39689 8.32678 8.8424 8.0965C8.2879 7.86623 7.81422 7.47658 7.48133 6.9769C7.14845 6.47722 6.97134 5.88999 6.97244 5.28958C6.97391 4.48702 7.29338 3.71774 7.86088 3.15024C8.42838 2.58274 9.19765 2.26327 10.0002 2.2618Z" fill="black"/>
                                          <path d="M3.33314 17.715V14.315C4.19085 13.4148 5.2265 12.703 6.37424 12.2247C7.52198 11.7465 8.75667 11.5124 9.99981 11.5372C11.7013 11.5143 13.3759 11.9623 14.8387 12.8317L15.5887 11.9928C13.9164 10.9394 11.9761 10.3898 9.99981 10.4094C8.55381 10.3726 7.11749 10.6552 5.79325 11.2372C4.46901 11.8191 3.28946 12.686 2.3387 13.7761C2.26459 13.8716 2.22363 13.9886 2.22203 14.1094V17.715C2.21456 18.0176 2.32728 18.3109 2.53552 18.5306C2.74376 18.7502 3.03056 18.8785 3.33314 18.8872H10.2165L9.16092 17.7761L3.33314 17.715Z" fill="black"/>
                                          <path d="M16.6665 17.7158V17.7769H14.9165L13.9165 18.888H16.6665C16.9652 18.8793 17.2486 18.7542 17.4562 18.5393C17.6638 18.3244 17.7792 18.0368 17.7776 17.738V14.5547L16.6665 15.7936V17.7158Z" fill="black"/>
                                          <path d="M19.3111 10.3437C19.2012 10.2459 19.0571 10.1957 18.9102 10.204C18.7634 10.2123 18.6258 10.2786 18.5277 10.3882L12.0722 17.6104L9.1833 14.5048C9.13588 14.4494 9.078 14.4038 9.01297 14.3707C8.94794 14.3376 8.87703 14.3177 8.80429 14.312C8.73155 14.3063 8.6584 14.3151 8.58903 14.3377C8.51965 14.3602 8.45541 14.3963 8.39996 14.4437C8.34565 14.4931 8.30167 14.5528 8.27057 14.6193C8.23947 14.6858 8.22186 14.7578 8.21876 14.8312C8.21566 14.9046 8.22713 14.9778 8.25251 15.0467C8.27789 15.1156 8.31668 15.1788 8.36663 15.2326L12.0833 19.2326L19.3555 11.1104C19.4482 11.0014 19.4954 10.8609 19.4871 10.7181C19.4788 10.5753 19.4158 10.4412 19.3111 10.3437Z" fill="black"/>
                                        </svg>
                                      </a>
                                      <div class="dropdown ac-cstm">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                        </a>
                                        <div class="tablediv dropdown-menu fadeIn">
                                          <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
                                          <a title="Assign" aria-label="Assign" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Assign Provider</a>
                                          <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
                                          <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Cancel
                                          </a>
                                        </div>
                                      </div>
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
                                    <div class="d-flex align-items-center gap-1">
                                      <svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
                                      Unassigned
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex actions">
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                        </svg>
                                      </a>
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0002 9.44514C10.8201 9.44624 11.622 9.2041 12.3043 8.74937C12.9865 8.29464 13.5186 7.64776 13.8331 6.89056C14.1477 6.13335 14.2305 5.29987 14.0713 4.49556C13.912 3.69125 13.5177 2.95226 12.9383 2.3721C12.3589 1.79193 11.6205 1.39666 10.8164 1.23629C10.0123 1.07593 9.17867 1.15768 8.42105 1.4712C7.66343 1.78472 7.01582 2.31592 6.56018 2.99759C6.10454 3.67926 5.86133 4.48076 5.86133 5.30069C5.86133 6.39891 6.29721 7.45222 7.07324 8.22929C7.84928 9.00637 8.902 9.44366 10.0002 9.44514ZM10.0002 2.2618C10.6006 2.26071 11.1879 2.43781 11.6875 2.7707C12.1872 3.10358 12.5769 3.57727 12.8071 4.13176C13.0374 4.68626 13.098 5.29662 12.9811 5.88554C12.8642 6.47447 12.5752 7.01547 12.1507 7.44002C11.7261 7.86458 11.1851 8.15359 10.5962 8.27045C10.0073 8.38731 9.39689 8.32678 8.8424 8.0965C8.2879 7.86623 7.81422 7.47658 7.48133 6.9769C7.14845 6.47722 6.97134 5.88999 6.97244 5.28958C6.97391 4.48702 7.29338 3.71774 7.86088 3.15024C8.42838 2.58274 9.19765 2.26327 10.0002 2.2618Z" fill="black"/>
                                          <path d="M3.33314 17.715V14.315C4.19085 13.4148 5.2265 12.703 6.37424 12.2247C7.52198 11.7465 8.75667 11.5124 9.99981 11.5372C11.7013 11.5143 13.3759 11.9623 14.8387 12.8317L15.5887 11.9928C13.9164 10.9394 11.9761 10.3898 9.99981 10.4094C8.55381 10.3726 7.11749 10.6552 5.79325 11.2372C4.46901 11.8191 3.28946 12.686 2.3387 13.7761C2.26459 13.8716 2.22363 13.9886 2.22203 14.1094V17.715C2.21456 18.0176 2.32728 18.3109 2.53552 18.5306C2.74376 18.7502 3.03056 18.8785 3.33314 18.8872H10.2165L9.16092 17.7761L3.33314 17.715Z" fill="black"/>
                                          <path d="M16.6665 17.7158V17.7769H14.9165L13.9165 18.888H16.6665C16.9652 18.8793 17.2486 18.7542 17.4562 18.5393C17.6638 18.3244 17.7792 18.0368 17.7776 17.738V14.5547L16.6665 15.7936V17.7158Z" fill="black"/>
                                          <path d="M19.3111 10.3437C19.2012 10.2459 19.0571 10.1957 18.9102 10.204C18.7634 10.2123 18.6258 10.2786 18.5277 10.3882L12.0722 17.6104L9.1833 14.5048C9.13588 14.4494 9.078 14.4038 9.01297 14.3707C8.94794 14.3376 8.87703 14.3177 8.80429 14.312C8.73155 14.3063 8.6584 14.3151 8.58903 14.3377C8.51965 14.3602 8.45541 14.3963 8.39996 14.4437C8.34565 14.4931 8.30167 14.5528 8.27057 14.6193C8.23947 14.6858 8.22186 14.7578 8.21876 14.8312C8.21566 14.9046 8.22713 14.9778 8.25251 15.0467C8.27789 15.1156 8.31668 15.1788 8.36663 15.2326L12.0833 19.2326L19.3555 11.1104C19.4482 11.0014 19.4954 10.8609 19.4871 10.7181C19.4788 10.5753 19.4158 10.4412 19.3111 10.3437Z" fill="black"/>
                                        </svg>
                                      </a>
                                      <div class="dropdown ac-cstm">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                        </a>
                                        <div class="tablediv dropdown-menu fadeIn">
                                          <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
                                          <a title="Assign" aria-label="Assign" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Assign Provider</a>
                                          <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
                                          <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Cancel
                                          </a>
                                        </div>
                                      </div>
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
                                    <div class="d-flex align-items-center gap-1">
                                      <svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
                                      Unassigned
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex actions">
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                                        </svg>
                                      </a>
                                      <a href="#" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M10.0002 9.44514C10.8201 9.44624 11.622 9.2041 12.3043 8.74937C12.9865 8.29464 13.5186 7.64776 13.8331 6.89056C14.1477 6.13335 14.2305 5.29987 14.0713 4.49556C13.912 3.69125 13.5177 2.95226 12.9383 2.3721C12.3589 1.79193 11.6205 1.39666 10.8164 1.23629C10.0123 1.07593 9.17867 1.15768 8.42105 1.4712C7.66343 1.78472 7.01582 2.31592 6.56018 2.99759C6.10454 3.67926 5.86133 4.48076 5.86133 5.30069C5.86133 6.39891 6.29721 7.45222 7.07324 8.22929C7.84928 9.00637 8.902 9.44366 10.0002 9.44514ZM10.0002 2.2618C10.6006 2.26071 11.1879 2.43781 11.6875 2.7707C12.1872 3.10358 12.5769 3.57727 12.8071 4.13176C13.0374 4.68626 13.098 5.29662 12.9811 5.88554C12.8642 6.47447 12.5752 7.01547 12.1507 7.44002C11.7261 7.86458 11.1851 8.15359 10.5962 8.27045C10.0073 8.38731 9.39689 8.32678 8.8424 8.0965C8.2879 7.86623 7.81422 7.47658 7.48133 6.9769C7.14845 6.47722 6.97134 5.88999 6.97244 5.28958C6.97391 4.48702 7.29338 3.71774 7.86088 3.15024C8.42838 2.58274 9.19765 2.26327 10.0002 2.2618Z" fill="black"/>
                                          <path d="M3.33314 17.715V14.315C4.19085 13.4148 5.2265 12.703 6.37424 12.2247C7.52198 11.7465 8.75667 11.5124 9.99981 11.5372C11.7013 11.5143 13.3759 11.9623 14.8387 12.8317L15.5887 11.9928C13.9164 10.9394 11.9761 10.3898 9.99981 10.4094C8.55381 10.3726 7.11749 10.6552 5.79325 11.2372C4.46901 11.8191 3.28946 12.686 2.3387 13.7761C2.26459 13.8716 2.22363 13.9886 2.22203 14.1094V17.715C2.21456 18.0176 2.32728 18.3109 2.53552 18.5306C2.74376 18.7502 3.03056 18.8785 3.33314 18.8872H10.2165L9.16092 17.7761L3.33314 17.715Z" fill="black"/>
                                          <path d="M16.6665 17.7158V17.7769H14.9165L13.9165 18.888H16.6665C16.9652 18.8793 17.2486 18.7542 17.4562 18.5393C17.6638 18.3244 17.7792 18.0368 17.7776 17.738V14.5547L16.6665 15.7936V17.7158Z" fill="black"/>
                                          <path d="M19.3111 10.3437C19.2012 10.2459 19.0571 10.1957 18.9102 10.204C18.7634 10.2123 18.6258 10.2786 18.5277 10.3882L12.0722 17.6104L9.1833 14.5048C9.13588 14.4494 9.078 14.4038 9.01297 14.3707C8.94794 14.3376 8.87703 14.3177 8.80429 14.312C8.73155 14.3063 8.6584 14.3151 8.58903 14.3377C8.51965 14.3602 8.45541 14.3963 8.39996 14.4437C8.34565 14.4931 8.30167 14.5528 8.27057 14.6193C8.23947 14.6858 8.22186 14.7578 8.21876 14.8312C8.21566 14.9046 8.22713 14.9778 8.25251 15.0467C8.27789 15.1156 8.31668 15.1788 8.36663 15.2326L12.0833 19.2326L19.3555 11.1104C19.4482 11.0014 19.4954 10.8609 19.4871 10.7181C19.4788 10.5753 19.4158 10.4412 19.3111 10.3437Z" fill="black"/>
                                        </svg>
                                      </a>
                                      <div class="dropdown ac-cstm">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                          </svg>
                                        </a>
                                        <div class="tablediv dropdown-menu fadeIn">
                                          <a title="Duplicate" aria-label="Duplicate" href="" class="dropdown-item"><i class="fa fa-clone"></i>Duplicate</a>
                                          <a href="javascript:void(0)" aria-label="Reschedule" title="Reschedule" class="dropdown-item"><i class="fa fa-calendar"></i>Reschedule</a>
                                          <a title="Assign" aria-label="Assign" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-user-plus"></i>Assign Provider</a>
                                          <a title="Message Customer" aria-label="Message Customer" class="dropdown-item" href=""><i class="fa fa-comment"></i>Message Customer</a> 
                                          <a href="javascript:void(0)" title="Cancel" aria-label="Cancel" class="dropdown-item">
                                            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            Cancel
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Hoverable rows end -->
                    <div class="d-flex justify-content-between">
                      <div>
                        <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100 entries</p>
                      </div>
                      <nav aria-label="Page Navigation">
                        <ul class="pagination">
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
                  </div>
                  <!-- /Today's Assignment -->
                </div>
          </div>
      </div>
    </div>
  </div>
  <!-- End: Content-->
</div>
