<div>
    <div id="loader-section" class="loader-section" wire:loading>
		<div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
			<div class="spinner-border" role="status" aria-live="polite">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
	</div>
    @if($showForm)
	@livewire('app.admin.accommodation.forms.add-service') {{-- Show Add / Edit Form --}}
	@else
     <!-- BEGIN: Content-->
      <!-- BEGIN: Header-->
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h1 class="content-header-title float-start mb-0">Associate Service</h1>
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
                      Services
                    </li>
                    <li class="breadcrumb-item">
                      Associate Service
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
                      <div class="row">
                        <div class="col-md-12 md-2 mb-5 mt-2">
                          <div class="row">
                            <p>Here you can add, edit, and organize the services you offer for each accommodation.</p>
                            <div class="col-md-3 ms-auto text-end">
							<a href="#" wire:click="showForm" class="btn btn-primary rounded">Create Service</a></div>
                        </div>
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
                            <label for="search" class="form-label fw-semibold">Search</label>
                            <input type="search" class="form-control" id="search" name="search" placeholder="Search here" autocomplete="on"/>
                          </div>
                        </div>
                      <!-- Hoverable rows start -->
<div class="row" id="table-hover-row">
  <div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
          <thead>
            <tr role="row">
              <th scope="col" class="text-center">
                <input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
              </th>
              <th scope="col">Name</th>
              <th scope="col"></th>
              <th scope="col">Status</th>
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
               
                  <div class="col-md-10">
                    <p>Check service duration</p>
                  </div>
                  
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href=""><svg width="60" height="41" viewBox="0 0 60 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <g filter="url(#filter1_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <path d="M27.75 16H32.25M32.25 11.5H33C34.1935 11.5 35.3381 11.9741 36.182 12.818C37.0259 13.6619 37.5 14.8065 37.5 16C37.5 17.1935 37.0259 18.3381 36.182 19.182C35.3381 20.0259 34.1935 20.5 33 20.5H32.25M27.75 20.5H27C25.8065 20.5 24.6619 20.0259 23.818 19.182C22.9741 18.3381 22.5 17.1935 22.5 16C22.5 14.8065 22.9741 13.6619 23.818 12.818C24.6619 11.9741 25.8065 11.5 27 11.5H27.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <filter id="filter0_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    <filter id="filter1_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    </defs>
                    </svg>
                    </a>  
                  </div>
                  <div class="col-md-10">
                    <p>Associate Companies & Customers</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                  <label class="form-check-label">
                    Activated
                  </label>
                </div>
              </td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                 <a href="" title="Duplicate List" aria-label="Duplicate List">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7637_25132)">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25132)"/>
                    </g>
                    <path d="M6.9 25.0008H18.3C19.3479 25.0008 20.2 24.1486 20.2 23.1008V11.7008C20.2 10.6529 19.3479 9.80078 18.3 9.80078H6.9C5.85215 9.80078 5 10.6529 5 11.7008V23.1008C5 24.1486 5.85215 25.0008 6.9 25.0008ZM6.9 11.7008H18.3L18.3019 23.1008H6.9V11.7008Z" fill="black"/>
                    <path d="M22.1002 6H10.7002V7.9H22.1002V19.3H24.0002V7.9C24.0002 6.85215 23.148 6 22.1002 6Z" fill="black"/>
                    <defs>
                    <linearGradient id="paint0_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <clipPath id="clip0_7637_25132">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                 </a>
              <a href="" title="Delete List" aria-label="Delete List">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_7637_25118)">
                  <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"/>
                  </g>
                  <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"/>
                  <defs>
                  <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <clipPath id="clip0_7637_25118">
                  <rect width="30" height="30" fill="white"/>
                  </clipPath>
                  </defs>
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
                <div class="row g-2">
                  <div class="col-md-10">
                    <p>Check service duration</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href=""><svg width="60" height="41" viewBox="0 0 60 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <g filter="url(#filter1_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <path d="M27.75 16H32.25M32.25 11.5H33C34.1935 11.5 35.3381 11.9741 36.182 12.818C37.0259 13.6619 37.5 14.8065 37.5 16C37.5 17.1935 37.0259 18.3381 36.182 19.182C35.3381 20.0259 34.1935 20.5 33 20.5H32.25M27.75 20.5H27C25.8065 20.5 24.6619 20.0259 23.818 19.182C22.9741 18.3381 22.5 17.1935 22.5 16C22.5 14.8065 22.9741 13.6619 23.818 12.818C24.6619 11.9741 25.8065 11.5 27 11.5H27.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <filter id="filter0_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    <filter id="filter1_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    </defs>
                    </svg>
                    </a>  
                  </div>
                  <div class="col-md-10">
                    <p>Associate Companies & Customers</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                  <label class="form-check-label">
                    Activated
                  </label>
                </div>
              </td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                 <a href="" title="Duplicate List" aria-label="Duplicate List">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7637_25132)">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25132)"/>
                    </g>
                    <path d="M6.9 25.0008H18.3C19.3479 25.0008 20.2 24.1486 20.2 23.1008V11.7008C20.2 10.6529 19.3479 9.80078 18.3 9.80078H6.9C5.85215 9.80078 5 10.6529 5 11.7008V23.1008C5 24.1486 5.85215 25.0008 6.9 25.0008ZM6.9 11.7008H18.3L18.3019 23.1008H6.9V11.7008Z" fill="black"/>
                    <path d="M22.1002 6H10.7002V7.9H22.1002V19.3H24.0002V7.9C24.0002 6.85215 23.148 6 22.1002 6Z" fill="black"/>
                    <defs>
                    <linearGradient id="paint0_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <clipPath id="clip0_7637_25132">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                 </a>
              <a href="" title="Delete List" aria-label="Delete List">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_7637_25118)">
                  <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"/>
                  </g>
                  <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"/>
                  <defs>
                  <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <clipPath id="clip0_7637_25118">
                  <rect width="30" height="30" fill="white"/>
                  </clipPath>
                  </defs>
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
                <div class="row g-2">
                  <div class="col-md-10">
                    <p>Check service duration</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href=""><svg width="60" height="41" viewBox="0 0 60 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <g filter="url(#filter1_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <path d="M27.75 16H32.25M32.25 11.5H33C34.1935 11.5 35.3381 11.9741 36.182 12.818C37.0259 13.6619 37.5 14.8065 37.5 16C37.5 17.1935 37.0259 18.3381 36.182 19.182C35.3381 20.0259 34.1935 20.5 33 20.5H32.25M27.75 20.5H27C25.8065 20.5 24.6619 20.0259 23.818 19.182C22.9741 18.3381 22.5 17.1935 22.5 16C22.5 14.8065 22.9741 13.6619 23.818 12.818C24.6619 11.9741 25.8065 11.5 27 11.5H27.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <filter id="filter0_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    <filter id="filter1_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    </defs>
                    </svg>
                    </a>  
                  </div>
                  <div class="col-md-10">
                    <p>Associate Companies & Customers</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                  <label class="form-check-label">
                    Activated
                  </label>
                </div>
              </td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                 <a href="" title="Duplicate List" aria-label="Duplicate List">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7637_25132)">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25132)"/>
                    </g>
                    <path d="M6.9 25.0008H18.3C19.3479 25.0008 20.2 24.1486 20.2 23.1008V11.7008C20.2 10.6529 19.3479 9.80078 18.3 9.80078H6.9C5.85215 9.80078 5 10.6529 5 11.7008V23.1008C5 24.1486 5.85215 25.0008 6.9 25.0008ZM6.9 11.7008H18.3L18.3019 23.1008H6.9V11.7008Z" fill="black"/>
                    <path d="M22.1002 6H10.7002V7.9H22.1002V19.3H24.0002V7.9C24.0002 6.85215 23.148 6 22.1002 6Z" fill="black"/>
                    <defs>
                    <linearGradient id="paint0_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <clipPath id="clip0_7637_25132">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                 </a>
              <a href="" title="Delete List" aria-label="Delete List">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_7637_25118)">
                  <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"/>
                  </g>
                  <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"/>
                  <defs>
                  <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <clipPath id="clip0_7637_25118">
                  <rect width="30" height="30" fill="white"/>
                  </clipPath>
                  </defs>
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
                <div class="row g-2">
                  <div class="col-md-10">
                    <p>Check service duration</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href=""><svg width="60" height="41" viewBox="0 0 60 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <g filter="url(#filter1_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <path d="M27.75 16H32.25M32.25 11.5H33C34.1935 11.5 35.3381 11.9741 36.182 12.818C37.0259 13.6619 37.5 14.8065 37.5 16C37.5 17.1935 37.0259 18.3381 36.182 19.182C35.3381 20.0259 34.1935 20.5 33 20.5H32.25M27.75 20.5H27C25.8065 20.5 24.6619 20.0259 23.818 19.182C22.9741 18.3381 22.5 17.1935 22.5 16C22.5 14.8065 22.9741 13.6619 23.818 12.818C24.6619 11.9741 25.8065 11.5 27 11.5H27.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <filter id="filter0_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    <filter id="filter1_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    </defs>
                    </svg>
                    </a>  
                  </div>
                  <div class="col-md-10">
                    <p>Associate Companies & Customers</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                  <label class="form-check-label">
                    Activated
                  </label>
                </div>
              </td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                 <a href="" title="Duplicate List" aria-label="Duplicate List">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7637_25132)">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25132)"/>
                    </g>
                    <path d="M6.9 25.0008H18.3C19.3479 25.0008 20.2 24.1486 20.2 23.1008V11.7008C20.2 10.6529 19.3479 9.80078 18.3 9.80078H6.9C5.85215 9.80078 5 10.6529 5 11.7008V23.1008C5 24.1486 5.85215 25.0008 6.9 25.0008ZM6.9 11.7008H18.3L18.3019 23.1008H6.9V11.7008Z" fill="black"/>
                    <path d="M22.1002 6H10.7002V7.9H22.1002V19.3H24.0002V7.9C24.0002 6.85215 23.148 6 22.1002 6Z" fill="black"/>
                    <defs>
                    <linearGradient id="paint0_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <clipPath id="clip0_7637_25132">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                 </a>
              <a href="" title="Delete List" aria-label="Delete List">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_7637_25118)">
                  <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"/>
                  </g>
                  <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"/>
                  <defs>
                  <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <clipPath id="clip0_7637_25118">
                  <rect width="30" height="30" fill="white"/>
                  </clipPath>
                  </defs>
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
                <div class="row g-2">
                  <div class="col-md-10">
                    <p>Check service duration</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href=""><svg width="60" height="41" viewBox="0 0 60 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <g filter="url(#filter1_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <path d="M27.75 16H32.25M32.25 11.5H33C34.1935 11.5 35.3381 11.9741 36.182 12.818C37.0259 13.6619 37.5 14.8065 37.5 16C37.5 17.1935 37.0259 18.3381 36.182 19.182C35.3381 20.0259 34.1935 20.5 33 20.5H32.25M27.75 20.5H27C25.8065 20.5 24.6619 20.0259 23.818 19.182C22.9741 18.3381 22.5 17.1935 22.5 16C22.5 14.8065 22.9741 13.6619 23.818 12.818C24.6619 11.9741 25.8065 11.5 27 11.5H27.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <filter id="filter0_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    <filter id="filter1_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    </defs>
                    </svg>
                    </a>  
                  </div>
                  <div class="col-md-10">
                    <p>Associate Companies & Customers</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                  <label class="form-check-label">
                    Activated
                  </label>
                </div>
              </td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                 <a href="" title="Duplicate List" aria-label="Duplicate List">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7637_25132)">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25132)"/>
                    </g>
                    <path d="M6.9 25.0008H18.3C19.3479 25.0008 20.2 24.1486 20.2 23.1008V11.7008C20.2 10.6529 19.3479 9.80078 18.3 9.80078H6.9C5.85215 9.80078 5 10.6529 5 11.7008V23.1008C5 24.1486 5.85215 25.0008 6.9 25.0008ZM6.9 11.7008H18.3L18.3019 23.1008H6.9V11.7008Z" fill="black"/>
                    <path d="M22.1002 6H10.7002V7.9H22.1002V19.3H24.0002V7.9C24.0002 6.85215 23.148 6 22.1002 6Z" fill="black"/>
                    <defs>
                    <linearGradient id="paint0_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <clipPath id="clip0_7637_25132">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                 </a>
              <a href="" title="Delete List" aria-label="Delete List">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_7637_25118)">
                  <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"/>
                  </g>
                  <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"/>
                  <defs>
                  <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <clipPath id="clip0_7637_25118">
                  <rect width="30" height="30" fill="white"/>
                  </clipPath>
                  </defs>
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
                <div class="row g-2">
                  <div class="col-md-10">
                    <p>Check service duration</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href=""><svg width="60" height="41" viewBox="0 0 60 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <g filter="url(#filter1_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <path d="M27.75 16H32.25M32.25 11.5H33C34.1935 11.5 35.3381 11.9741 36.182 12.818C37.0259 13.6619 37.5 14.8065 37.5 16C37.5 17.1935 37.0259 18.3381 36.182 19.182C35.3381 20.0259 34.1935 20.5 33 20.5H32.25M27.75 20.5H27C25.8065 20.5 24.6619 20.0259 23.818 19.182C22.9741 18.3381 22.5 17.1935 22.5 16C22.5 14.8065 22.9741 13.6619 23.818 12.818C24.6619 11.9741 25.8065 11.5 27 11.5H27.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <filter id="filter0_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    <filter id="filter1_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    </defs>
                    </svg>
                    </a>  
                  </div>
                  <div class="col-md-10">
                    <p>Associate Companies & Customers</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                  <label class="form-check-label">
                    Activated
                  </label>
                </div>
              </td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                 <a href="" title="Duplicate List" aria-label="Duplicate List">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7637_25132)">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25132)"/>
                    </g>
                    <path d="M6.9 25.0008H18.3C19.3479 25.0008 20.2 24.1486 20.2 23.1008V11.7008C20.2 10.6529 19.3479 9.80078 18.3 9.80078H6.9C5.85215 9.80078 5 10.6529 5 11.7008V23.1008C5 24.1486 5.85215 25.0008 6.9 25.0008ZM6.9 11.7008H18.3L18.3019 23.1008H6.9V11.7008Z" fill="black"/>
                    <path d="M22.1002 6H10.7002V7.9H22.1002V19.3H24.0002V7.9C24.0002 6.85215 23.148 6 22.1002 6Z" fill="black"/>
                    <defs>
                    <linearGradient id="paint0_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <clipPath id="clip0_7637_25132">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                 </a>
              <a href="" title="Delete List" aria-label="Delete List">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_7637_25118)">
                  <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"/>
                  </g>
                  <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"/>
                  <defs>
                  <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <clipPath id="clip0_7637_25118">
                  <rect width="30" height="30" fill="white"/>
                  </clipPath>
                  </defs>
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
                <div class="row g-2">
                  <div class="col-md-10">
                    <p>Check service duration</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href=""><svg width="60" height="41" viewBox="0 0 60 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <g filter="url(#filter1_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <path d="M27.75 16H32.25M32.25 11.5H33C34.1935 11.5 35.3381 11.9741 36.182 12.818C37.0259 13.6619 37.5 14.8065 37.5 16C37.5 17.1935 37.0259 18.3381 36.182 19.182C35.3381 20.0259 34.1935 20.5 33 20.5H32.25M27.75 20.5H27C25.8065 20.5 24.6619 20.0259 23.818 19.182C22.9741 18.3381 22.5 17.1935 22.5 16C22.5 14.8065 22.9741 13.6619 23.818 12.818C24.6619 11.9741 25.8065 11.5 27 11.5H27.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <filter id="filter0_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    <filter id="filter1_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    </defs>
                    </svg>
                    </a>  
                  </div>
                  <div class="col-md-10">
                    <p>Associate Companies & Customers</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                  <label class="form-check-label">
                    Activated
                  </label>
                </div>
              </td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                 <a href="" title="Duplicate List" aria-label="Duplicate List">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7637_25132)">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25132)"/>
                    </g>
                    <path d="M6.9 25.0008H18.3C19.3479 25.0008 20.2 24.1486 20.2 23.1008V11.7008C20.2 10.6529 19.3479 9.80078 18.3 9.80078H6.9C5.85215 9.80078 5 10.6529 5 11.7008V23.1008C5 24.1486 5.85215 25.0008 6.9 25.0008ZM6.9 11.7008H18.3L18.3019 23.1008H6.9V11.7008Z" fill="black"/>
                    <path d="M22.1002 6H10.7002V7.9H22.1002V19.3H24.0002V7.9C24.0002 6.85215 23.148 6 22.1002 6Z" fill="black"/>
                    <defs>
                    <linearGradient id="paint0_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <clipPath id="clip0_7637_25132">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                 </a>
              <a href="" title="Delete List" aria-label="Delete List">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_7637_25118)">
                  <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"/>
                  </g>
                  <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"/>
                  <defs>
                  <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <clipPath id="clip0_7637_25118">
                  <rect width="30" height="30" fill="white"/>
                  </clipPath>
                  </defs>
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
                <div class="row g-2">
                  <div class="col-md-10">
                    <p>Check service duration</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href=""><svg width="60" height="41" viewBox="0 0 60 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <g filter="url(#filter1_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <path d="M27.75 16H32.25M32.25 11.5H33C34.1935 11.5 35.3381 11.9741 36.182 12.818C37.0259 13.6619 37.5 14.8065 37.5 16C37.5 17.1935 37.0259 18.3381 36.182 19.182C35.3381 20.0259 34.1935 20.5 33 20.5H32.25M27.75 20.5H27C25.8065 20.5 24.6619 20.0259 23.818 19.182C22.9741 18.3381 22.5 17.1935 22.5 16C22.5 14.8065 22.9741 13.6619 23.818 12.818C24.6619 11.9741 25.8065 11.5 27 11.5H27.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <filter id="filter0_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    <filter id="filter1_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    </defs>
                    </svg>
                    </a>  
                  </div>
                  <div class="col-md-10">
                    <p>Associate Companies & Customers</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                  <label class="form-check-label">
                    Activated
                  </label>
                </div>
              </td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                 <a href="" title="Duplicate List" aria-label="Duplicate List">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7637_25132)">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25132)"/>
                    </g>
                    <path d="M6.9 25.0008H18.3C19.3479 25.0008 20.2 24.1486 20.2 23.1008V11.7008C20.2 10.6529 19.3479 9.80078 18.3 9.80078H6.9C5.85215 9.80078 5 10.6529 5 11.7008V23.1008C5 24.1486 5.85215 25.0008 6.9 25.0008ZM6.9 11.7008H18.3L18.3019 23.1008H6.9V11.7008Z" fill="black"/>
                    <path d="M22.1002 6H10.7002V7.9H22.1002V19.3H24.0002V7.9C24.0002 6.85215 23.148 6 22.1002 6Z" fill="black"/>
                    <defs>
                    <linearGradient id="paint0_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <clipPath id="clip0_7637_25132">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                 </a>
              <a href="" title="Delete List" aria-label="Delete List">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_7637_25118)">
                  <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"/>
                  </g>
                  <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"/>
                  <defs>
                  <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <clipPath id="clip0_7637_25118">
                  <rect width="30" height="30" fill="white"/>
                  </clipPath>
                  </defs>
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
                <div class="row g-2">
                  <div class="col-md-10">
                    <p>Check service duration</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                  <a href=""><svg width="60" height="41" viewBox="0 0 60 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <g filter="url(#filter1_d_7637_25142)">
                    <rect x="11" y="7" width="38" height="19" rx="5" fill="#888575"/>
                    </g>
                    <path d="M27.75 16H32.25M32.25 11.5H33C34.1935 11.5 35.3381 11.9741 36.182 12.818C37.0259 13.6619 37.5 14.8065 37.5 16C37.5 17.1935 37.0259 18.3381 36.182 19.182C35.3381 20.0259 34.1935 20.5 33 20.5H32.25M27.75 20.5H27C25.8065 20.5 24.6619 20.0259 23.818 19.182C22.9741 18.3381 22.5 17.1935 22.5 16C22.5 14.8065 22.9741 13.6619 23.818 12.818C24.6619 11.9741 25.8065 11.5 27 11.5H27.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <defs>
                    <filter id="filter0_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    <filter id="filter1_d_7637_25142" x="0" y="0" width="60" height="41" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                    <feOffset dy="4"/>
                    <feGaussianBlur stdDeviation="5.5"/>
                    <feComposite in2="hardAlpha" operator="out"/>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7637_25142"/>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7637_25142" result="shape"/>
                    </filter>
                    </defs>
                    </svg>
                    </a>  
                  </div>
                  <div class="col-md-10">
                    <p>Associate Companies & Customers</p>
                  </div>
                </div>
              </td>
              <td>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" aria-label="Toggle Team Status">
                  <label class="form-check-label">
                    Activated
                  </label>
                </div>
              </td>
              <td>
                <div class="d-flex actions">
                  <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                    </svg>
                  </a>
                 <a href="" title="Duplicate List" aria-label="Duplicate List">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7637_25132)">
                    <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25132)"/>
                    <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25132)"/>
                    </g>
                    <path d="M6.9 25.0008H18.3C19.3479 25.0008 20.2 24.1486 20.2 23.1008V11.7008C20.2 10.6529 19.3479 9.80078 18.3 9.80078H6.9C5.85215 9.80078 5 10.6529 5 11.7008V23.1008C5 24.1486 5.85215 25.0008 6.9 25.0008ZM6.9 11.7008H18.3L18.3019 23.1008H6.9V11.7008Z" fill="black"/>
                    <path d="M22.1002 6H10.7002V7.9H22.1002V19.3H24.0002V7.9C24.0002 6.85215 23.148 6 22.1002 6Z" fill="black"/>
                    <defs>
                    <linearGradient id="paint0_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_7637_25132" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0150376" stop-color="#C4C4C4"/>
                    <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                    </linearGradient>
                    <linearGradient id="paint3_linear_7637_25132" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                    <stop offset="1" stop-opacity="0.01"/>
                    </linearGradient>
                    <clipPath id="clip0_7637_25132">
                    <rect width="30" height="30" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                    
                 </a>
              <a href="" title="Delete List" aria-label="Delete List">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_7637_25118)">
                  <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"/>
                  <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"/>
                  </g>
                  <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"/>
                  <defs>
                  <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0150376" stop-color="#C4C4C4"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  <clipPath id="clip0_7637_25118">
                  <rect width="30" height="30" fill="white"/>
                  </clipPath>
                  </defs>
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
<!-- Hoverable rows end -->
                      <div class="d-flex justify-content-between">
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
                           <!-- ....Back/next (buttons)... -->
                           <div class="col-12 justify-content-center form-actions d-flex">
                            <button type="button"
                                class="btn btn-outline-dark rounded px-4 py-2 mx-2">Back</button>
                            <button type="submit"
                                class="btn btn-primary rounded px-4 py-2">Next</button>
  
                    </div>
                
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Floating Label Form section end -->
        </div>
      </div>
    </div>
    <!-- End: Content-->
    @endif
</div>
