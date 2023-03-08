<div x-data="{defaultAvailability: false, specificDateAvailability: false}">
    
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="col-12">
              <h1 class="content-header-title float-start mb-0">Manage Availability</h1>
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
                    <a href="javascript:void(0)">
                        Manage Availability
                    </a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="card">
        <div class="card-body">
    <div class="row mb-4">
        <p>Here you can set your default or custom availability to ensure you only receive service requests for dates and times that match your set availability.</p>
      </div>
       <div class="d-flex justify-content-between mb-4">
        <div class="d-inline-flex align-items-center gap-4">
            <div class="mb-4 mb-lg-0">
                <button @click="defaultAvailability = true" class="btn btn-outline-primary rounded">Change Default Availability</button>
            </div>
            <div class="mb-4 mb-lg-0">
                <button @click="specificDateAvailability = true" class="btn btn-primary rounded">Change Availability For Specific Date</button>
            </div>

            <div class="d-flex justify-content-between ms-5">
                <div class="d-inline-flex">
                    <div>
                        <label class="form-label text-sm" for="service-data-limit">
                            Service Distance Limit
                        </label>
                        <a href="#" class="mx-3">
                            KM <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path> </svg>
                        </a>
                        <input class="form-control form-control-md" type="" id="service-data-limit" placeholder="search here">
                    </div>
                    <div>
                        <button class="btn btn-primary btn-xs rounded mx-3 mt-4">add</button>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div>
        @livewire('app.common.calendar')
      </div>
    </div>
    </div>
      @include('panels.common.default-availability')
      @include('panels.common.specific-date-availibility')
</div>
