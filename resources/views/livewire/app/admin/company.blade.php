<div>
  <div id="loader-section" class="loader-section" wire:loading>
    <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
      <div class="spinner-border" role="status" aria-live="polite">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>
  @if($showForm)
	@livewire('app.admin.forms.add-company') {{-- Show Add / Edit Form --}}
	@else
 <!-- BEGIN: Content-->
    <!-- BEGIN: Header-->
        <div class="content-wrapper container-xxl p-0">
      
            <div class="content-header row">
  <div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h1 class="content-header-title float-start mb-0">All Companies</h1>
        <div class="breadcrumb-wrapper">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
                <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.25009 12.5809H2.33343V20.1643C2.33343 21.3592 3.30518 22.3309 4.50009 22.3309H17.5001C18.695 22.3309 19.6668 21.3592 19.6668 20.1643V12.5809H20.7501C20.9643 12.5809 21.1737 12.5173 21.3518 12.3983C21.53 12.2793 21.6688 12.1101 21.7507 11.9122C21.8327 11.7142 21.8542 11.4964 21.8124 11.2863C21.7706 11.0762 21.6675 10.8832 21.516 10.7317L11.766 0.981697C11.6655 0.881006 11.5461 0.801123 11.4147 0.74662C11.2833 0.692117 11.1424 0.664062 11.0001 0.664062C10.8578 0.664063 10.7169 0.692117 10.5855 0.74662C10.4541 0.801123 10.3347 0.881006 10.2342 0.981697L0.484178 10.7317C0.332718 10.8832 0.229577 11.0762 0.187796 11.2863C0.146014 11.4964 0.167468 11.7142 0.249444 11.9122C0.331419 12.1101 0.470237 12.2793 0.648348 12.3983C0.826459 12.5173 1.03587 12.5809 1.25009 12.5809ZM8.83343 20.1643V14.7476H13.1668V20.1643H8.83343ZM11.0001 3.27945L17.5001 9.77945V14.7476L17.5012 20.1643H15.3334V14.7476C15.3334 13.5527 14.3617 12.5809 13.1668 12.5809H8.83343C7.63851 12.5809 6.66676 13.5527 6.66676 14.7476V20.1643H4.50009V9.77945L11.0001 3.27945Z" fill="#0A1E46"/>
                  </svg>
              </a>
            </li>
            <li class="breadcrumb-item">
            Customers
            </li>
            <li class="breadcrumb-item">
            All Companies         
           </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>

          <!-- Basic multiple Column Form section start -->
          <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-12">
                          <p>Here you can view the companies you service and the users, assignments, and invoices associated with them.</p>
                        </div>
                        <div class="d-flex justify-content-end mt-4 mb-3">
    <button type="button" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2" wire:click="showForm">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
        </svg>
        <span>Add Company</span>
    </button>
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
                            <label for="search" class="form-label fw-semibold">Search</label>
                            <input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                          </div>
                        </div>

      <div class="table-responsive mb-2">
        <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
          <thead>
            <tr role="row">
              <th scope="col" class="text-center">
                <input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
              </th>
              <th scope="col">Name</th>
              <th scope="col">Phone Number</th>
              <th scope="col" class="text-center">Company User</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr role="row" class="odd">
              <td class="text-center">
                <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
              </td>
              <td>
                <div class="row g-2">
                  <div class="col-md-2">
                    <img src="/tenant/images/portrait/small/testing.png" class="img-fluid rounded-circle" alt="Image of Team Profile" style="width:90%;">
                  </div>
                  <div class="col-md-10">
                    <h6 class="fw-semibold">Testing Company</h6>
                    <p>www.software.com</p>
                  </div>
                </div>
              </td>
              <td>
                <p>(923) 023-9683</p>
              </td>
              <td class="text-center">5</td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
                                        <path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
                                        <path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
                                        <path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
                                        <defs>
                                        <linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                        <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                        <stop offset="1" stop-opacity="0.01"/>
                                        </linearGradient>
                                        </defs>
                                        </svg>
                                        <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                              <a title="Duplicate" aria-label="Duplicate" href="department" class="dropdown-item"><i class="fa fa-clone"></i>Departments</a>
                                              <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
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
                <div class="row g-2">
                  <div class="col-md-2">
                    <img src="/tenant/images/portrait/small/testing.png" class="img-fluid rounded-circle" alt="Image of Team Profile" style="width:90%;">
                  </div>
                  <div class="col-md-10">
                    <h6 class="fw-semibold">Testing Company</h6>
                    <p>www.software.com</p>
                  </div>
                </div>
              </td>
              <td>
                <p>(923) 023-9683</p>
              </td>
              <td class="text-center">5</td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
                                        <path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
                                        <path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
                                        <path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
                                        <defs>
                                        <linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                        <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                        <stop offset="1" stop-opacity="0.01"/>
                                        </linearGradient>
                                        </defs>
                                        </svg>
                                        <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                              <a title="Duplicate" aria-label="Duplicate" href="department" class="dropdown-item"><i class="fa fa-clone"></i>Departments</a>
                                              <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
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
                <div class="row g-2">
                  <div class="col-md-2">
                    <img src="/tenant/images/portrait/small/testing.png" class="img-fluid rounded-circle" alt="Image of Team Profile" style="width:90%;">
                  </div>
                  <div class="col-md-10">
                    <h6 class="fw-semibold">Testing Company</h6>
                    <p>www.software.com</p>
                  </div>
                </div>
              </td>
              <td>
                <p>(923) 023-9683</p>
              </td>
              <td class="text-center">5</td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
                                        <path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
                                        <path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
                                        <path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
                                        <defs>
                                        <linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                        <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                        <stop offset="1" stop-opacity="0.01"/>
                                        </linearGradient>
                                        </defs>
                                        </svg>
                                        <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                              <a title="Duplicate" aria-label="Duplicate" href="department" class="dropdown-item"><i class="fa fa-clone"></i>Departments</a>
                                              <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
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
                <div class="row g-2">
                  <div class="col-md-2">
                    <img src="/tenant/images/portrait/small/testing.png" class="img-fluid rounded-circle" alt="Image of Team Profile" style="width:90%;">
                  </div>
                  <div class="col-md-10">
                    <h6 class="fw-semibold">Testing Company</h6>
                    <p>www.software.com</p>
                  </div>
                </div>
              </td>
              <td>
                <p>(923) 023-9683</p>
              </td>
              <td class="text-center">5</td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
                                        <path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
                                        <path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
                                        <path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
                                        <defs>
                                        <linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                        <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                        <stop offset="1" stop-opacity="0.01"/>
                                        </linearGradient>
                                        </defs>
                                        </svg>
                                        <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                              <a title="Duplicate" aria-label="Duplicate" href="department" class="dropdown-item"><i class="fa fa-clone"></i>Departments</a>
                                              <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
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
                <div class="row g-2">
                  <div class="col-md-2">
                    <img src="/tenant/images/portrait/small/testing.png" class="img-fluid rounded-circle" alt="Image of Team Profile" style="width:90%;">
                  </div>
                  <div class="col-md-10">
                    <h6 class="fw-semibold">Testing Company</h6>
                    <p>www.software.com</p>
                  </div>
                </div>
              </td>
              <td>
                <p>(923) 023-9683</p>
              </td>
              <td class="text-center">5</td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint0_linear_0_1)"/>
                                        <circle cx="15.0002" cy="15" r="15" transform="rotate(90 15.0002 15)" fill="url(#paint1_linear_0_1)"/>
                                        <path d="M19.2857 22.1423C20.0747 22.1423 20.7143 21.5027 20.7143 20.7137C20.7143 19.9247 20.0747 19.2852 19.2857 19.2852C18.4968 19.2852 17.8572 19.9247 17.8572 20.7137C17.8572 21.5027 18.4968 22.1423 19.2857 22.1423Z" fill="black"/>
                                        <path d="M24.8406 20.341C24.3992 19.2167 23.6376 18.2465 22.6502 17.5509C21.6628 16.8552 20.4929 16.4646 19.2856 16.4275C18.0783 16.4646 16.9084 16.8552 15.9209 17.5509C14.9335 18.2465 14.1719 19.2167 13.7306 20.341L13.5713 20.7132L13.7306 21.0853C14.1719 22.2097 14.9335 23.1798 15.9209 23.8755C16.9084 24.5711 18.0783 24.9618 19.2856 24.9989C20.4929 24.9618 21.6628 24.5711 22.6502 23.8755C23.6376 23.1798 24.3992 22.2097 24.8406 21.0853L24.9999 20.7132L24.8406 20.341ZM19.2856 23.5703C18.7205 23.5703 18.1681 23.4027 17.6982 23.0888C17.2284 22.7749 16.8622 22.3286 16.6459 21.8066C16.4297 21.2845 16.3731 20.71 16.4833 20.1558C16.5936 19.6015 16.8657 19.0924 17.2653 18.6929C17.6648 18.2933 18.1739 18.0212 18.7282 17.9109C19.2824 17.8007 19.8569 17.8573 20.379 18.0735C20.901 18.2898 21.3473 18.656 21.6612 19.1258C21.9751 19.5957 22.1427 20.1481 22.1427 20.7132C22.1418 21.4706 21.8404 22.1968 21.3048 22.7324C20.7692 23.268 20.043 23.5694 19.2856 23.5703V23.5703ZM8.57129 15.7132H12.1427V17.1417H8.57129V15.7132ZM8.57129 12.1417H17.1427V13.5703H8.57129V12.1417ZM8.57129 8.57031H17.1427V9.99888H8.57129V8.57031Z" fill="black"/>
                                        <path d="M19.2857 5H6.42857C6.05004 5.00113 5.68733 5.152 5.41967 5.41967C5.152 5.68733 5.00113 6.05004 5 6.42857V23.5714C5.00113 23.95 5.152 24.3127 5.41967 24.5803C5.68733 24.848 6.05004 24.9989 6.42857 25H12.1429V23.5714H6.42857V6.42857H19.2857V14.2857H20.7143V6.42857C20.7132 6.05004 20.5623 5.68733 20.2946 5.41967C20.027 5.152 19.6642 5.00113 19.2857 5V5Z" fill="black"/>
                                        <defs>
                                        <linearGradient id="paint0_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0150376" stop-color="#C4C4C4"/>
                                        <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                                        </linearGradient>
                                        <linearGradient id="paint1_linear_0_1" x1="0.000243187" y1="-0.154101" x2="0.000243187" y2="30" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                                        <stop offset="1" stop-opacity="0.01"/>
                                        </linearGradient>
                                        </defs>
                                        </svg>
                                        <div class="d-flex actions">  
                                      <div class="dropdown"> 
                                        <div class="dropdown ac-cstm">
                                          <a href="javascript:void(0)" aria-label="action" class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">                      
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <path d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                              <path d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                          </a>
                                          <div class="tablediv dropdown-menu fadeIn">
                                              <a title="Duplicate" aria-label="Duplicate" href="department" class="dropdown-item"><i class="fa fa-clone"></i>Departments</a>
                                              <a title="Deactivate" aria-label="Deactivate" class="dropdown-item" href="javascript:void(0)"><i class="fa fa-times-circle"></i>Deactivate</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-between">
        <div>
            <p class="fw-semibold">Showing 1 to 10 of 100 entries</p>
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
</div>
</div>

</div>
</div>
</section>
  <!-- End: Content-->
  @endif
</div>
