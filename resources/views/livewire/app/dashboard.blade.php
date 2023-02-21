<div>
  <div id="loader-section" class="loader-section" wire:loading>
    <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
      <div class="spinner-border" role="status" aria-live="polite">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>
  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h1 class="content-header-title float-start mb-0">Dashboard</h1>
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
                Dashboard
                </a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-5">
    <ul class="d-grid grid-cols-6 gap-4 list-unstyled mb-5" id="myTab" role="tablist">
      <li class="" role="presentation">
        <a class="dashborad-block active" id="calendar-tab" data-bs-toggle="tab" data-bs-target="#calendar-tab-pane" type="button" role="tab" aria-controls="calendar-tab-pane" aria-selected="true">
          <div class="text-center block-text">Calendar</div>
          <div class="text-center block-icon">
            <svg class="fill" width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M51.958 6.5897L38.4462 6.58975V3.22656C38.4462 2.29422 37.691 1.53906 36.7587 1.53906C35.8264 1.53906 35.0712 2.29422 35.0712 3.22656V6.58891H21.5712V3.22656C21.5712 2.29422 20.816 1.53906 19.8837 1.53906C18.9514 1.53906 18.1962 2.29422 18.1962 3.22656V6.58891H4.70801C2.84416 6.58891 1.33301 8.10006 1.33301 9.96391V52.1514C1.33301 54.0152 2.84416 55.5264 4.70801 55.5264H51.958C53.8218 55.5264 55.333 54.0152 55.333 52.1514V9.96391C55.333 8.10085 53.8218 6.5897 51.958 6.5897ZM51.958 52.1514H4.70801V9.96391H18.1962V11.6641C18.1962 12.5964 18.9514 13.3516 19.8837 13.3516C20.816 13.3516 21.5712 12.5964 21.5712 11.6641V9.96475H35.0712V11.6649C35.0712 12.5972 35.8264 13.3524 36.7587 13.3524C37.691 13.3524 38.4462 12.5972 38.4462 11.6649V9.96475H51.958V52.1514ZM40.1455 28.5272H43.5205C44.452 28.5272 45.208 27.7712 45.208 26.8397V23.4647C45.208 22.5332 44.452 21.7772 43.5205 21.7772H40.1455C39.214 21.7772 38.458 22.5332 38.458 23.4647V26.8397C38.458 27.7712 39.214 28.5272 40.1455 28.5272ZM40.1455 42.0264H43.5205C44.452 42.0264 45.208 41.2712 45.208 40.3389V36.9639C45.208 36.0324 44.452 35.2764 43.5205 35.2764H40.1455C39.214 35.2764 38.458 36.0324 38.458 36.9639V40.3389C38.458 41.272 39.214 42.0264 40.1455 42.0264ZM30.0205 35.2764H26.6455C25.714 35.2764 24.958 36.0324 24.958 36.9639V40.3389C24.958 41.2712 25.714 42.0264 26.6455 42.0264H30.0205C30.952 42.0264 31.708 41.2712 31.708 40.3389V36.9639C31.708 36.0332 30.952 35.2764 30.0205 35.2764ZM30.0205 21.7772H26.6455C25.714 21.7772 24.958 22.5332 24.958 23.4647V26.8397C24.958 27.7712 25.714 28.5272 26.6455 28.5272H30.0205C30.952 28.5272 31.708 27.7712 31.708 26.8397V23.4647C31.708 22.5324 30.952 21.7772 30.0205 21.7772ZM16.5205 21.7772H13.1455C12.214 21.7772 11.458 22.5332 11.458 23.4647V26.8397C11.458 27.7712 12.214 28.5272 13.1455 28.5272H16.5205C17.452 28.5272 18.208 27.7712 18.208 26.8397V23.4647C18.208 22.5324 17.452 21.7772 16.5205 21.7772ZM16.5205 35.2764H13.1455C12.214 35.2764 11.458 36.0324 11.458 36.9639V40.3389C11.458 41.2712 12.214 42.0264 13.1455 42.0264H16.5205C17.452 42.0264 18.208 41.2712 18.208 40.3389V36.9639C18.208 36.0332 17.452 35.2764 16.5205 35.2764Z" stroke-width="1.77469"/>
            </svg>
          </div>
          <div>
            <div class="text-center block-number">50</div>
          </div>
        </a>
      </li>
      <li class="" role="presentation">
        <a class="dashborad-block" id="assignments-tab" data-bs-toggle="tab" data-bs-target="#assignments-tab-pane" type="button" role="tab" aria-controls="assignments-tab-pane" aria-selected="false">
          <div class="text-center block-text">Assignments</div>
          <div class="text-center block-icon">
            <svg class="fill" width="54" height="61" viewBox="0 0 54 61" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.1215 48.3232H32.7326V42.4049H12.1215V48.3232ZM12.1215 36.4866H41.566V30.5682H12.1215V36.4866ZM12.1215 24.6499H41.566V18.7316H12.1215V24.6499ZM6.23264 54.2416H47.4549V12.8132H6.23264V54.2416ZM0.34375 60.1599V6.8949H18.5993C19.2373 5.1194 20.3051 3.68913 21.8029 2.6041C23.2986 1.51908 24.9789 0.976562 26.8438 0.976562C28.7086 0.976562 30.3898 1.51908 31.8876 2.6041C33.3834 3.68913 34.4502 5.1194 35.0882 6.8949H53.3438V60.1599H0.34375ZM26.8438 10.5939C27.4817 10.5939 28.0098 10.3838 28.4279 9.96355C28.844 9.54532 29.0521 9.01563 29.0521 8.37448C29.0521 7.73333 28.844 7.20265 28.4279 6.78245C28.0098 6.36422 27.4817 6.1551 26.8438 6.1551C26.2058 6.1551 25.6787 6.36422 25.2626 6.78245C24.8445 7.20265 24.6354 7.73333 24.6354 8.37448C24.6354 9.01563 24.8445 9.54532 25.2626 9.96355C25.6787 10.3838 26.2058 10.5939 26.8438 10.5939Z"/>
            </svg>
          </div>
          <div>
            <div class="text-center block-number">200</div>
          </div>
        </a>
      </li>
      <li class="" role="presentation">
        <a class="dashborad-block" id="availability-tab" data-bs-toggle="tab" data-bs-target="#availability-tab-pane" type="button" role="tab" aria-controls="availability-tab-pane" aria-selected="false">
          <div class="text-center block-text">Availability</div>
          <div class="text-center block-icon">
            <svg class="fill icon-availability" viewBox="0 0 1440 809.999993" height="" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="3b00f15639"><path d="M 610.59375 289.5 L 829.300781 289.5 L 829.300781 520.5 L 610.59375 520.5 Z M 610.59375 289.5 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#3b00f15639)"><path fill="" d="M 647.039062 319.894531 L 634.902344 319.894531 C 628.488281 319.894531 623.242188 324.855469 622.789062 331.152344 L 622.75 332.054688 L 622.75 350.285156 L 817.164062 350.285156 L 817.164062 332.054688 C 817.164062 325.636719 812.203125 320.386719 805.933594 319.933594 L 805.011719 319.894531 L 792.855469 319.894531 L 792.875 332.054688 C 792.875 335.398438 790.148438 338.125 786.789062 338.125 C 783.449219 338.125 780.722656 335.398438 780.722656 332.054688 L 780.699219 319.894531 L 659.191406 319.894531 L 659.191406 332.054688 C 659.191406 335.398438 656.488281 338.125 653.125 338.125 C 649.765625 338.125 647.058594 335.398438 647.058594 332.054688 Z M 744.871094 407.667969 L 745.445312 408.179688 C 747.636719 410.375 747.800781 413.820312 745.9375 416.199219 L 745.445312 416.773438 L 714.332031 447.902344 C 713.265625 448.949219 711.625 449.070312 710.457031 448.25 L 710.027344 447.902344 L 703.589844 441.464844 L 692.582031 430.472656 C 690.207031 428.113281 690.207031 424.257812 692.582031 421.878906 C 694.941406 419.5 698.792969 419.5 701.171875 421.878906 L 712.179688 432.851562 L 736.855469 408.179688 C 739.03125 405.984375 742.492188 405.820312 744.871094 407.667969 Z M 811.324219 465.785156 L 786.789062 465.785156 L 785.886719 465.824219 C 779.921875 466.257812 775.125 471.015625 774.675781 476.980469 L 774.632812 477.945312 L 774.632812 502.492188 C 781.847656 497.816406 788.59375 492.34375 794.882812 486.046875 C 801.175781 479.75 806.648438 473.003906 811.324219 465.785156 Z M 817.164062 362.445312 L 622.75 362.445312 L 622.75 496.175781 C 622.75 502.574219 627.707031 507.847656 633.980469 508.296875 L 634.902344 508.339844 L 746 508.339844 L 746 508.316406 L 756.410156 508.316406 L 757.109375 508.277344 C 759.917969 507.949219 762.128906 505.734375 762.457031 502.945312 L 762.5 502.226562 L 762.5 477.945312 L 762.519531 476.734375 C 763.132812 464.265625 773.097656 454.300781 785.539062 453.664062 L 786.789062 453.625 L 811.097656 453.625 L 811.796875 453.582031 C 814.601562 453.273438 816.796875 451.058594 817.125 448.25 L 817.164062 447.554688 Z M 786.789062 289.5 C 790.148438 289.5 792.855469 292.226562 792.855469 295.570312 L 792.855469 307.730469 L 805.011719 307.730469 C 818.4375 307.730469 829.320312 318.621094 829.320312 332.054688 L 829.320312 452.640625 C 829.320312 456.71875 828.296875 460.738281 826.328125 464.328125 C 820.28125 475.363281 812.65625 485.472656 803.492188 494.640625 C 794.3125 503.828125 784.207031 511.457031 773.179688 517.503906 C 769.589844 519.472656 765.574219 520.5 761.496094 520.5 L 634.902344 520.5 C 621.476562 520.5 610.59375 509.609375 610.59375 496.175781 L 610.59375 332.054688 C 610.59375 318.621094 621.476562 307.730469 634.902344 307.730469 L 647.039062 307.730469 L 647.058594 295.570312 C 647.058594 292.226562 649.765625 289.5 653.125 289.5 C 656.488281 289.5 659.191406 292.226562 659.191406 295.570312 L 659.191406 307.730469 L 780.699219 307.730469 L 780.722656 295.570312 C 780.722656 292.226562 783.449219 289.5 786.789062 289.5 "/></g></svg>
          </div>
          <div>
            <div class="text-center block-number">50</div>
          </div>
        </a>
      </li>
      <li class="" role="presentation">
        <a class="dashborad-block" id="map-tab" data-bs-toggle="tab" data-bs-target="#map-tab-pane" type="button" role="tab" aria-controls="map-tab-pane" aria-selected="false">
          <div class="text-center block-text">Map</div>
          <div class="text-center block-icon">
            <svg class="stroke" width="55" height="55" viewBox="0 0 60 68" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M50.0555 47.6875C54.2067 49.4729 56.7241 51.8151 56.7241 54.3835C56.7241 59.9759 44.7806 64.5085 30.0495 64.5085C15.3185 64.5085 3.375 59.9759 3.375 54.3835C3.375 51.8185 5.89241 49.4695 10.0436 47.6875" stroke-width="6.2114" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M46.7211 22.1313C46.7211 32.5702 30.0495 51.0078 30.0495 51.0078C30.0495 51.0078 13.3779 32.5702 13.3779 22.1313C13.3779 11.6958 20.8435 3.75781 30.0495 3.75781C39.2556 3.75781 46.7211 11.6958 46.7211 22.1313V22.1313Z" stroke-width="6.2114" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M30.0496 24C31.8911 24 33.384 22.489 33.384 20.625C33.384 18.761 31.8911 17.25 30.0496 17.25C28.2082 17.25 26.7153 18.761 26.7153 20.625C26.7153 22.489 28.2082 24 30.0496 24Z" stroke-width="6.2114" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div>
            <div class="text-center block-number">15</div>
          </div>
        </a>
      </li>
      <li class="" role="presentation">
        <a class="dashborad-block" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab" aria-controls="notifications-tab-pane" aria-selected="false">
          <div class="text-center block-text">Notifications</div>
          <div class="text-center block-icon">
            <svg class="fill" width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M27.3652 54.5313C30.3442 54.5313 32.7815 52.0389 32.7815 48.9928H21.949C21.949 52.0389 24.3863 54.5313 27.3652 54.5313ZM43.614 37.9159V24.0697C43.614 15.5682 39.1997 8.45125 31.4274 6.56817V4.6851C31.4274 2.38663 29.613 0.53125 27.3652 0.53125C25.1175 0.53125 23.3031 2.38663 23.3031 4.6851V6.56817C15.5578 8.45125 11.1165 15.5405 11.1165 24.0697V37.9159L5.70024 43.4543V46.2236H49.0302V43.4543L43.614 37.9159ZM38.1977 40.6851H16.5327V24.0697C16.5327 17.202 20.622 11.6082 27.3652 11.6082C34.1085 11.6082 38.1977 17.202 38.1977 24.0697V40.6851ZM15.3953 4.90663L11.5227 0.946635C5.02321 6.01433 0.744372 13.8236 0.365234 22.6851H5.78148C5.97332 19.1732 6.93739 15.7508 8.60191 12.6726C10.2664 9.5945 12.5885 6.93995 15.3953 4.90663V4.90663ZM48.949 22.6851H54.3652C53.959 13.8236 49.6802 6.01433 43.2078 0.946635L39.3622 4.90663C42.157 6.94996 44.4687 9.60743 46.1277 12.6839C47.7866 15.7604 48.7507 19.1778 48.949 22.6851Z"/>
            </svg>
          </div>
          <div>
            <div class="text-center block-text">50</div>
          </div>
        </a>
      </li>
      <li class="" role="presentation">
        <a class="dashborad-block" id="navigator-tab" data-bs-toggle="tab" data-bs-target="#navigator-tab-pane" type="button" role="tab" aria-controls="navigator-tab-pane" aria-selected="false">
          <div class="text-center block-text">Navigator</div>
          <div class="text-center block-icon">
            <svg class="stroke" width="55" height="55" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M29.3335 56.5312C44.2452 56.5312 56.3335 44.4429 56.3335 29.5312C56.3335 14.6196 44.2452 2.53125 29.3335 2.53125C14.4218 2.53125 2.3335 14.6196 2.3335 29.5312C2.3335 44.4429 14.4218 56.5312 29.3335 56.5312Z" stroke-width="4.43671"/>
              <path d="M44.3252 36.9779C45.464 39.1316 43.2434 41.5107 41.0178 40.5229L29.7836 35.5296L18.5518 40.5229C16.3238 41.5132 14.1032 39.1316 15.2419 36.9779L27.5184 13.7939C27.7366 13.3821 28.0628 13.0374 28.4622 12.7971C28.8615 12.5567 29.3187 12.4297 29.7848 12.4297C30.2509 12.4297 30.7082 12.5567 31.1075 12.7971C31.5068 13.0374 31.8331 13.3821 32.0512 13.7939L44.3252 36.9779V36.9779Z" stroke-width="4.43671"/>
            </svg>
          </div>
          <div>
            <div class="text-center block-number">50</div>
          </div>
        </a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="calendar-tab-pane" role="tabpanel" aria-labelledby="calendar-tab" tabindex="0">
        <h3>Calender</h3>
        <!-- Filters -->
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
            <div class="mb-4 mb-lg-0">
              <select class="form-select form-select-sm rounded bg-secondary text-white rounded" aria-label="Advance Filter" id="show_status">
                <option>Advance Filter</option>
              </select>
            </div>
            <div class="mb-4 mb-lg-0">
              <button type="button" class="btn btn-xs btn-outline-dark rounded">Clear all</button>
            </div>
          </div>
        
        </div>
        <!-- /Filters -->
        <div>
          <img src="/html-prototype/images/temp/img-placeholder-calendar.png" class="img-fluid" alt="Dashboard Calender"/>
        </div>
      </div>
      <div class="tab-pane fade" id="assignments-tab-pane" role="tabpanel" aria-labelledby="assignments-tab" tabindex="0">
        <!-- Filters -->
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
            <div class="mb-4 mb-lg-0">
              <select class="form-select form-select-sm rounded bg-secondary text-white rounded" aria-label="Advance Filter" id="show_status">
                <option>Advance Filter</option>
              </select>
            </div>
            <div class="mb-4 mb-lg-0">
              <button type="button" class="btn btn-xs btn-outline-dark rounded">Clear all</button>
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
              <button type="button" class="btn btn-xs btn-inactive rounded">Unassigned</button>
            </div>
            <div class="mb-4 mb-lg-0">
              <button type="button" class="btn btn-xs btn-inactive rounded">Previous</button>
            </div>
            <div class="mb-4 mb-lg-0">
              <button type="button" class="btn btn-xs btn-inactive rounded">Cancelled</button>
            </div>
          </div>
          
          <!-- Begin : show button on conditional basis -->
          <!-- <div class="d-inline-flex align-items-center ms-auto text-end gap-4">
            <button type="button" class="btn btn btn-primary rounded">Calendar Sync</button>
            </div> -->
          <!-- End : show button on conditional basis -->
        
        </div>
        <!-- /Filters -->
        <!-- Today's Assignment -->
        <div>
          <div class="d-lg-flex justify-content-between mb-2">
            <h2 class="mb-lg-0 text-dark">Today’s Assignment</h2>
            <a href="" class="btn btn-primary rounded btn-sm">Create Assignment</a>
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
                          <a href="">100995-6</a>
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
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                              </svg>
                            </a>
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr role="row" class="even">
                        <td class="text-center">
                          <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                        </td>
                        <td>
                          <a href="">100995-6</a>
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
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                              </svg>
                            </a>
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="text-center">
                          <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                        </td>
                        <td>
                          <a href="">100995-6</a>
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
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                              </svg>
                            </a>
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr role="row" class="even">
                        <td class="text-center">
                          <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                        </td>
                        <td>
                          <a href="">100995-6</a>
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
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                              </svg>
                            </a>
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="text-center">
                          <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                        </td>
                        <td>
                          <a href="">100995-6</a>
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
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                              </svg>
                            </a>
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr role="row" class="even">
                        <td class="text-center">
                          <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                        </td>
                        <td>
                          <a href="">100995-6</a>
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
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                              </svg>
                            </a>
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="text-center">
                          <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                        </td>
                        <td>
                          <a href="">100995-6</a>
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
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
                              </svg>
                            </a>
                            <a href="" title="Edit Team" aria-label="Edit Team" class="btn btn-sm btn-secondary rounded btn-hs-icon">
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
      <div class="tab-pane fade" id="availability-tab-pane" role="tabpanel" aria-labelledby="availability-tab" tabindex="0">
        <h3>Availability</h3>
        <!-- Filters -->
        <div class="row mb-4">
          <div class="col-lg-3 mb-4 mb-lg-0 position-relative align-self-end">
            <!-- Begin : it will be replaced with livewire module-->
            <svg class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
            </svg>
            <input type="" class="form-control form-control-md form-control-date js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
            <!-- End : it will be replaced with livewire module -->
          </div>
          <div class="col-lg mb-4 mb-lg-0">
            <label class="form-label-sm">Booking No</label>
            <input type="" name="" class="form-control form-control-md" placeholder="Search">
          </div>
          <div class="col-lg mb-4 mb-lg-0">
            <label class="form-label-sm">Filter By Provider</label>
            <select class="form-select form-select-md" aria-label="Select Provider" id="show_status">
              <option>Select Provider</option>
            </select>
          </div>
          <div class="col-lg mb-4 mb-lg-0">
            <label class="form-label-sm">Filter By Provider Team</label>
            <select class="form-select form-select-md" aria-label="Select Provider" id="show_status">
              <option>Select Provider Team</option>
            </select>
          </div>
        </div>
        <!-- /Filters -->
        <div>
          <img src="/html-prototype/images/temp/img-placeholder-availability.jpg" class="img-fluid" alt="Dashboard Calender"/>
        </div>
      </div>
      <div class="tab-pane fade" id="map-tab-pane" role="tabpanel" aria-labelledby="map-tab" tabindex="0">
        <h3>Map</h3>
        <!-- Filters -->
        <div class="row mb-4">
          <div class="col-lg-3 mb-4 mb-lg-0 position-relative align-self-end">
            <!-- Begin : it will be replaced with livewire module-->
            <svg class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
            </svg>
            <input type="" class="form-control form-control-md form-control-date js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
            <!-- End : it will be replaced with livewire module -->
          </div>
          <div class="col-lg mb-4 mb-lg-0">
            <label class="form-label-sm">Address</label>
            <input type="" name="" class="form-control form-control-md" placeholder="Search">
          </div>
          <div class="col-lg mb-4 mb-lg-0">
            <label class="form-label-sm">Booking No</label>
            <input type="" name="" class="form-control form-control-md" placeholder="Search">
          </div>
          <div class="col-lg mb-4 mb-lg-0">
            <div class="d-flex flex-column -mt-5">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="MapView" id="LiveView">
                <label class="form-check-label" for="LiveView">
                  Live View
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="MapView" id="TodayView">
                <label class="form-check-label" for="TodayView">
                  Today View
                </label>
              </div>
              <div class="form-check mb-0">
                <input class="form-check-input" type="radio" name="MapView" id="TomorrowView">
                <label class="form-check-label" for="TomorrowView">
                  Tomorrow View
                </label>
              </div>
            </div>
          </div>
        </div>
        <!-- /Filters -->
        <!-- Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96779.59535015929!2d-74.00126600000002!3d40.710039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1676478925644!5m2!1sen!2sus" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        <!-- /Map -->
      </div>
      <div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab" tabindex="0">
        <h3>Notifications</h3>
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
          </div>
          <div class="d-inline-flex align-items-center gap-4">
            <label for="search" class="form-label-sm mb-0">Search</label>
            <input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on">
          </div>
        </div>
        <!-- Notifications Table -->
        <div class="table-responsive">
          <table class="table table-hover table-fs-md">
            <thead>
              <tr>
                <th class="align-middle">
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="" id="">
                  </div>
                </th>
                <th class="align-middle">
                  Date &amp; Time
                </th>
                <th class="align-middle">
                  Notifications
                </th>
                <th class="text-center align-middle">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="odd">
                <td>
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="" id="">
                  </div>
                </td>
                <td>
                  <div>08/24/2022</div>
                  <div>9:59 AM</div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/html-prototype/images/temp/portrait/small/avatar-s-1.jpg" alt="Image" class="w-100 rounded-circle">
                    </div>
                    <div class="col-lg-11 align-self-center ps-0">
                      Akmal Shah Consumer has cancelled their upcoming services
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="d-flex actions justify-content-center">
                    <a href="" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                        <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                        <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                      </svg>
                    </a>
                    <a href="" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.4408 4.2H12.6448C12.6448 3.64305 12.4234 3.1089 12.0292 2.71508C11.635 2.32125 11.1003 2.1 10.5428 2.1C9.98533 2.1 9.45067 2.32125 9.05647 2.71508C8.66226 3.1089 8.4408 3.64305 8.4408 4.2ZM6.33878 4.2C6.33878 3.08609 6.7817 2.0178 7.57011 1.23015C8.35852 0.442499 9.42784 0 10.5428 0C11.6578 0 12.7271 0.442499 13.5155 1.23015C14.3039 2.0178 14.7469 3.08609 14.7469 4.2H20.0019C20.2807 4.2 20.548 4.31062 20.7451 4.50754C20.9422 4.70445 21.0529 4.97152 21.0529 5.25C21.0529 5.52848 20.9422 5.79555 20.7451 5.99246C20.548 6.18937 20.2807 6.3 20.0019 6.3H19.0749L18.1437 17.157C18.0542 18.2054 17.5741 19.182 16.7983 19.8937C16.0225 20.6053 15.0076 21.0001 13.9544 21H7.13124C6.07803 21.0001 5.06314 20.6053 4.28736 19.8937C3.51158 19.182 3.03143 18.2054 2.94191 17.157L2.01072 6.3H1.08373C0.80498 6.3 0.537651 6.18937 0.340549 5.99246C0.143446 5.79555 0.0327148 5.52848 0.0327148 5.25C0.0327148 4.97152 0.143446 4.70445 0.340549 4.50754C0.537651 4.31062 0.80498 4.2 1.08373 4.2H6.33878ZM13.6959 10.5C13.6959 10.2215 13.5851 9.95445 13.388 9.75754C13.1909 9.56062 12.9236 9.45 12.6448 9.45C12.3661 9.45 12.0988 9.56062 11.9017 9.75754C11.7046 9.95445 11.5938 10.2215 11.5938 10.5V14.7C11.5938 14.9785 11.7046 15.2455 11.9017 15.4425C12.0988 15.6394 12.3661 15.75 12.6448 15.75C12.9236 15.75 13.1909 15.6394 13.388 15.4425C13.5851 15.2455 13.6959 14.9785 13.6959 14.7V10.5ZM8.4408 9.45C8.71954 9.45 8.98687 9.56062 9.18398 9.75754C9.38108 9.95445 9.49181 10.2215 9.49181 10.5V14.7C9.49181 14.9785 9.38108 15.2455 9.18398 15.4425C8.98687 15.6394 8.71954 15.75 8.4408 15.75C8.16205 15.75 7.89472 15.6394 7.69762 15.4425C7.50052 15.2455 7.38979 14.9785 7.38979 14.7V10.5C7.38979 10.2215 7.50052 9.95445 7.69762 9.75754C7.89472 9.56062 8.16205 9.45 8.4408 9.45ZM5.03552 16.9785C5.0803 17.5029 5.32053 17.9913 5.70864 18.3472C6.09675 18.703 6.60445 18.9003 7.13124 18.9H13.9544C14.4808 18.8998 14.988 18.7023 15.3757 18.3465C15.7633 17.9907 16.0033 17.5025 16.048 16.9785L16.9645 6.3H4.12115L5.03763 16.9785H5.03552Z" fill="black"/>
                        </svg>
                    </a>
                    
                  </div>
                </td>
              </tr>
              <tr class="even">
                <td>
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="" id="">
                  </div>
                </td>
                <td>
                  <div>08/24/2022</div>
                  <div>9:59 AM</div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/html-prototype/images/temp/portrait/small/avatar-s-1.jpg" alt="Image" class="w-100 rounded-circle">
                    </div>
                    <div class="col-lg-11 align-self-center ps-0">
                      Akmal Shah Consumer has cancelled their upcoming services
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="d-flex actions justify-content-center">
                    <a href="" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                        <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                        <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                      </svg>
                    </a>
                    <a href="" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.4408 4.2H12.6448C12.6448 3.64305 12.4234 3.1089 12.0292 2.71508C11.635 2.32125 11.1003 2.1 10.5428 2.1C9.98533 2.1 9.45067 2.32125 9.05647 2.71508C8.66226 3.1089 8.4408 3.64305 8.4408 4.2ZM6.33878 4.2C6.33878 3.08609 6.7817 2.0178 7.57011 1.23015C8.35852 0.442499 9.42784 0 10.5428 0C11.6578 0 12.7271 0.442499 13.5155 1.23015C14.3039 2.0178 14.7469 3.08609 14.7469 4.2H20.0019C20.2807 4.2 20.548 4.31062 20.7451 4.50754C20.9422 4.70445 21.0529 4.97152 21.0529 5.25C21.0529 5.52848 20.9422 5.79555 20.7451 5.99246C20.548 6.18937 20.2807 6.3 20.0019 6.3H19.0749L18.1437 17.157C18.0542 18.2054 17.5741 19.182 16.7983 19.8937C16.0225 20.6053 15.0076 21.0001 13.9544 21H7.13124C6.07803 21.0001 5.06314 20.6053 4.28736 19.8937C3.51158 19.182 3.03143 18.2054 2.94191 17.157L2.01072 6.3H1.08373C0.80498 6.3 0.537651 6.18937 0.340549 5.99246C0.143446 5.79555 0.0327148 5.52848 0.0327148 5.25C0.0327148 4.97152 0.143446 4.70445 0.340549 4.50754C0.537651 4.31062 0.80498 4.2 1.08373 4.2H6.33878ZM13.6959 10.5C13.6959 10.2215 13.5851 9.95445 13.388 9.75754C13.1909 9.56062 12.9236 9.45 12.6448 9.45C12.3661 9.45 12.0988 9.56062 11.9017 9.75754C11.7046 9.95445 11.5938 10.2215 11.5938 10.5V14.7C11.5938 14.9785 11.7046 15.2455 11.9017 15.4425C12.0988 15.6394 12.3661 15.75 12.6448 15.75C12.9236 15.75 13.1909 15.6394 13.388 15.4425C13.5851 15.2455 13.6959 14.9785 13.6959 14.7V10.5ZM8.4408 9.45C8.71954 9.45 8.98687 9.56062 9.18398 9.75754C9.38108 9.95445 9.49181 10.2215 9.49181 10.5V14.7C9.49181 14.9785 9.38108 15.2455 9.18398 15.4425C8.98687 15.6394 8.71954 15.75 8.4408 15.75C8.16205 15.75 7.89472 15.6394 7.69762 15.4425C7.50052 15.2455 7.38979 14.9785 7.38979 14.7V10.5C7.38979 10.2215 7.50052 9.95445 7.69762 9.75754C7.89472 9.56062 8.16205 9.45 8.4408 9.45ZM5.03552 16.9785C5.0803 17.5029 5.32053 17.9913 5.70864 18.3472C6.09675 18.703 6.60445 18.9003 7.13124 18.9H13.9544C14.4808 18.8998 14.988 18.7023 15.3757 18.3465C15.7633 17.9907 16.0033 17.5025 16.048 16.9785L16.9645 6.3H4.12115L5.03763 16.9785H5.03552Z" fill="black"/>
                        </svg>
                    </a>
                    
                  </div>
                </td>
              </tr>
              <tr class="odd">
                <td>
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="" id="">
                  </div>
                </td>
                <td>
                  <div>08/24/2022</div>
                  <div>9:59 AM</div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/html-prototype/images/temp/portrait/small/avatar-s-1.jpg" alt="Image" class="w-100 rounded-circle">
                    </div>
                    <div class="col-lg-11 align-self-center ps-0">
                      Akmal Shah Consumer has cancelled their upcoming services
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="d-flex actions justify-content-center">
                    <a href="" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                        <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                        <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                      </svg>
                    </a>
                    <a href="" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.4408 4.2H12.6448C12.6448 3.64305 12.4234 3.1089 12.0292 2.71508C11.635 2.32125 11.1003 2.1 10.5428 2.1C9.98533 2.1 9.45067 2.32125 9.05647 2.71508C8.66226 3.1089 8.4408 3.64305 8.4408 4.2ZM6.33878 4.2C6.33878 3.08609 6.7817 2.0178 7.57011 1.23015C8.35852 0.442499 9.42784 0 10.5428 0C11.6578 0 12.7271 0.442499 13.5155 1.23015C14.3039 2.0178 14.7469 3.08609 14.7469 4.2H20.0019C20.2807 4.2 20.548 4.31062 20.7451 4.50754C20.9422 4.70445 21.0529 4.97152 21.0529 5.25C21.0529 5.52848 20.9422 5.79555 20.7451 5.99246C20.548 6.18937 20.2807 6.3 20.0019 6.3H19.0749L18.1437 17.157C18.0542 18.2054 17.5741 19.182 16.7983 19.8937C16.0225 20.6053 15.0076 21.0001 13.9544 21H7.13124C6.07803 21.0001 5.06314 20.6053 4.28736 19.8937C3.51158 19.182 3.03143 18.2054 2.94191 17.157L2.01072 6.3H1.08373C0.80498 6.3 0.537651 6.18937 0.340549 5.99246C0.143446 5.79555 0.0327148 5.52848 0.0327148 5.25C0.0327148 4.97152 0.143446 4.70445 0.340549 4.50754C0.537651 4.31062 0.80498 4.2 1.08373 4.2H6.33878ZM13.6959 10.5C13.6959 10.2215 13.5851 9.95445 13.388 9.75754C13.1909 9.56062 12.9236 9.45 12.6448 9.45C12.3661 9.45 12.0988 9.56062 11.9017 9.75754C11.7046 9.95445 11.5938 10.2215 11.5938 10.5V14.7C11.5938 14.9785 11.7046 15.2455 11.9017 15.4425C12.0988 15.6394 12.3661 15.75 12.6448 15.75C12.9236 15.75 13.1909 15.6394 13.388 15.4425C13.5851 15.2455 13.6959 14.9785 13.6959 14.7V10.5ZM8.4408 9.45C8.71954 9.45 8.98687 9.56062 9.18398 9.75754C9.38108 9.95445 9.49181 10.2215 9.49181 10.5V14.7C9.49181 14.9785 9.38108 15.2455 9.18398 15.4425C8.98687 15.6394 8.71954 15.75 8.4408 15.75C8.16205 15.75 7.89472 15.6394 7.69762 15.4425C7.50052 15.2455 7.38979 14.9785 7.38979 14.7V10.5C7.38979 10.2215 7.50052 9.95445 7.69762 9.75754C7.89472 9.56062 8.16205 9.45 8.4408 9.45ZM5.03552 16.9785C5.0803 17.5029 5.32053 17.9913 5.70864 18.3472C6.09675 18.703 6.60445 18.9003 7.13124 18.9H13.9544C14.4808 18.8998 14.988 18.7023 15.3757 18.3465C15.7633 17.9907 16.0033 17.5025 16.048 16.9785L16.9645 6.3H4.12115L5.03763 16.9785H5.03552Z" fill="black"/>
                        </svg>
                    </a>
                    
                  </div>
                </td>
              </tr>
              <tr class="even">
                <td>
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="" id="">
                  </div>
                </td>
                <td>
                  <div>08/24/2022</div>
                  <div>9:59 AM</div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/html-prototype/images/temp/portrait/small/avatar-s-1.jpg" alt="Image" class="w-100 rounded-circle">
                    </div>
                    <div class="col-lg-11 align-self-center ps-0">
                      Akmal Shah Consumer has cancelled their upcoming services
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="d-flex actions justify-content-center">
                    <a href="" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                        <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                        <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                      </svg>
                    </a>
                    <a href="" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.4408 4.2H12.6448C12.6448 3.64305 12.4234 3.1089 12.0292 2.71508C11.635 2.32125 11.1003 2.1 10.5428 2.1C9.98533 2.1 9.45067 2.32125 9.05647 2.71508C8.66226 3.1089 8.4408 3.64305 8.4408 4.2ZM6.33878 4.2C6.33878 3.08609 6.7817 2.0178 7.57011 1.23015C8.35852 0.442499 9.42784 0 10.5428 0C11.6578 0 12.7271 0.442499 13.5155 1.23015C14.3039 2.0178 14.7469 3.08609 14.7469 4.2H20.0019C20.2807 4.2 20.548 4.31062 20.7451 4.50754C20.9422 4.70445 21.0529 4.97152 21.0529 5.25C21.0529 5.52848 20.9422 5.79555 20.7451 5.99246C20.548 6.18937 20.2807 6.3 20.0019 6.3H19.0749L18.1437 17.157C18.0542 18.2054 17.5741 19.182 16.7983 19.8937C16.0225 20.6053 15.0076 21.0001 13.9544 21H7.13124C6.07803 21.0001 5.06314 20.6053 4.28736 19.8937C3.51158 19.182 3.03143 18.2054 2.94191 17.157L2.01072 6.3H1.08373C0.80498 6.3 0.537651 6.18937 0.340549 5.99246C0.143446 5.79555 0.0327148 5.52848 0.0327148 5.25C0.0327148 4.97152 0.143446 4.70445 0.340549 4.50754C0.537651 4.31062 0.80498 4.2 1.08373 4.2H6.33878ZM13.6959 10.5C13.6959 10.2215 13.5851 9.95445 13.388 9.75754C13.1909 9.56062 12.9236 9.45 12.6448 9.45C12.3661 9.45 12.0988 9.56062 11.9017 9.75754C11.7046 9.95445 11.5938 10.2215 11.5938 10.5V14.7C11.5938 14.9785 11.7046 15.2455 11.9017 15.4425C12.0988 15.6394 12.3661 15.75 12.6448 15.75C12.9236 15.75 13.1909 15.6394 13.388 15.4425C13.5851 15.2455 13.6959 14.9785 13.6959 14.7V10.5ZM8.4408 9.45C8.71954 9.45 8.98687 9.56062 9.18398 9.75754C9.38108 9.95445 9.49181 10.2215 9.49181 10.5V14.7C9.49181 14.9785 9.38108 15.2455 9.18398 15.4425C8.98687 15.6394 8.71954 15.75 8.4408 15.75C8.16205 15.75 7.89472 15.6394 7.69762 15.4425C7.50052 15.2455 7.38979 14.9785 7.38979 14.7V10.5C7.38979 10.2215 7.50052 9.95445 7.69762 9.75754C7.89472 9.56062 8.16205 9.45 8.4408 9.45ZM5.03552 16.9785C5.0803 17.5029 5.32053 17.9913 5.70864 18.3472C6.09675 18.703 6.60445 18.9003 7.13124 18.9H13.9544C14.4808 18.8998 14.988 18.7023 15.3757 18.3465C15.7633 17.9907 16.0033 17.5025 16.048 16.9785L16.9645 6.3H4.12115L5.03763 16.9785H5.03552Z" fill="black"/>
                        </svg>
                    </a>
                    
                  </div>
                </td>
              </tr>
              <tr class="odd">
                <td>
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="" id="">
                  </div>
                </td>
                <td>
                  <div>08/24/2022</div>
                  <div>9:59 AM</div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/html-prototype/images/temp/portrait/small/avatar-s-1.jpg" alt="Image" class="w-100 rounded-circle">
                    </div>
                    <div class="col-lg-11 align-self-center ps-0">
                      Akmal Shah Consumer has cancelled their upcoming services
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="d-flex actions justify-content-center">
                    <a href="" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                        <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                        <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                      </svg>
                    </a>
                    <a href="" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.4408 4.2H12.6448C12.6448 3.64305 12.4234 3.1089 12.0292 2.71508C11.635 2.32125 11.1003 2.1 10.5428 2.1C9.98533 2.1 9.45067 2.32125 9.05647 2.71508C8.66226 3.1089 8.4408 3.64305 8.4408 4.2ZM6.33878 4.2C6.33878 3.08609 6.7817 2.0178 7.57011 1.23015C8.35852 0.442499 9.42784 0 10.5428 0C11.6578 0 12.7271 0.442499 13.5155 1.23015C14.3039 2.0178 14.7469 3.08609 14.7469 4.2H20.0019C20.2807 4.2 20.548 4.31062 20.7451 4.50754C20.9422 4.70445 21.0529 4.97152 21.0529 5.25C21.0529 5.52848 20.9422 5.79555 20.7451 5.99246C20.548 6.18937 20.2807 6.3 20.0019 6.3H19.0749L18.1437 17.157C18.0542 18.2054 17.5741 19.182 16.7983 19.8937C16.0225 20.6053 15.0076 21.0001 13.9544 21H7.13124C6.07803 21.0001 5.06314 20.6053 4.28736 19.8937C3.51158 19.182 3.03143 18.2054 2.94191 17.157L2.01072 6.3H1.08373C0.80498 6.3 0.537651 6.18937 0.340549 5.99246C0.143446 5.79555 0.0327148 5.52848 0.0327148 5.25C0.0327148 4.97152 0.143446 4.70445 0.340549 4.50754C0.537651 4.31062 0.80498 4.2 1.08373 4.2H6.33878ZM13.6959 10.5C13.6959 10.2215 13.5851 9.95445 13.388 9.75754C13.1909 9.56062 12.9236 9.45 12.6448 9.45C12.3661 9.45 12.0988 9.56062 11.9017 9.75754C11.7046 9.95445 11.5938 10.2215 11.5938 10.5V14.7C11.5938 14.9785 11.7046 15.2455 11.9017 15.4425C12.0988 15.6394 12.3661 15.75 12.6448 15.75C12.9236 15.75 13.1909 15.6394 13.388 15.4425C13.5851 15.2455 13.6959 14.9785 13.6959 14.7V10.5ZM8.4408 9.45C8.71954 9.45 8.98687 9.56062 9.18398 9.75754C9.38108 9.95445 9.49181 10.2215 9.49181 10.5V14.7C9.49181 14.9785 9.38108 15.2455 9.18398 15.4425C8.98687 15.6394 8.71954 15.75 8.4408 15.75C8.16205 15.75 7.89472 15.6394 7.69762 15.4425C7.50052 15.2455 7.38979 14.9785 7.38979 14.7V10.5C7.38979 10.2215 7.50052 9.95445 7.69762 9.75754C7.89472 9.56062 8.16205 9.45 8.4408 9.45ZM5.03552 16.9785C5.0803 17.5029 5.32053 17.9913 5.70864 18.3472C6.09675 18.703 6.60445 18.9003 7.13124 18.9H13.9544C14.4808 18.8998 14.988 18.7023 15.3757 18.3465C15.7633 17.9907 16.0033 17.5025 16.048 16.9785L16.9645 6.3H4.12115L5.03763 16.9785H5.03552Z" fill="black"/>
                        </svg>
                    </a>
                    
                  </div>
                </td>
              </tr>
              <tr class="even">
                <td>
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="" id="">
                  </div>
                </td>
                <td>
                  <div>08/24/2022</div>
                  <div>9:59 AM</div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/html-prototype/images/temp/portrait/small/avatar-s-1.jpg" alt="Image" class="w-100 rounded-circle">
                    </div>
                    <div class="col-lg-11 align-self-center ps-0">
                      Akmal Shah Consumer has cancelled their upcoming services
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="d-flex actions justify-content-center">
                    <a href="" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                        <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                        <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                      </svg>
                    </a>
                    <a href="" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.4408 4.2H12.6448C12.6448 3.64305 12.4234 3.1089 12.0292 2.71508C11.635 2.32125 11.1003 2.1 10.5428 2.1C9.98533 2.1 9.45067 2.32125 9.05647 2.71508C8.66226 3.1089 8.4408 3.64305 8.4408 4.2ZM6.33878 4.2C6.33878 3.08609 6.7817 2.0178 7.57011 1.23015C8.35852 0.442499 9.42784 0 10.5428 0C11.6578 0 12.7271 0.442499 13.5155 1.23015C14.3039 2.0178 14.7469 3.08609 14.7469 4.2H20.0019C20.2807 4.2 20.548 4.31062 20.7451 4.50754C20.9422 4.70445 21.0529 4.97152 21.0529 5.25C21.0529 5.52848 20.9422 5.79555 20.7451 5.99246C20.548 6.18937 20.2807 6.3 20.0019 6.3H19.0749L18.1437 17.157C18.0542 18.2054 17.5741 19.182 16.7983 19.8937C16.0225 20.6053 15.0076 21.0001 13.9544 21H7.13124C6.07803 21.0001 5.06314 20.6053 4.28736 19.8937C3.51158 19.182 3.03143 18.2054 2.94191 17.157L2.01072 6.3H1.08373C0.80498 6.3 0.537651 6.18937 0.340549 5.99246C0.143446 5.79555 0.0327148 5.52848 0.0327148 5.25C0.0327148 4.97152 0.143446 4.70445 0.340549 4.50754C0.537651 4.31062 0.80498 4.2 1.08373 4.2H6.33878ZM13.6959 10.5C13.6959 10.2215 13.5851 9.95445 13.388 9.75754C13.1909 9.56062 12.9236 9.45 12.6448 9.45C12.3661 9.45 12.0988 9.56062 11.9017 9.75754C11.7046 9.95445 11.5938 10.2215 11.5938 10.5V14.7C11.5938 14.9785 11.7046 15.2455 11.9017 15.4425C12.0988 15.6394 12.3661 15.75 12.6448 15.75C12.9236 15.75 13.1909 15.6394 13.388 15.4425C13.5851 15.2455 13.6959 14.9785 13.6959 14.7V10.5ZM8.4408 9.45C8.71954 9.45 8.98687 9.56062 9.18398 9.75754C9.38108 9.95445 9.49181 10.2215 9.49181 10.5V14.7C9.49181 14.9785 9.38108 15.2455 9.18398 15.4425C8.98687 15.6394 8.71954 15.75 8.4408 15.75C8.16205 15.75 7.89472 15.6394 7.69762 15.4425C7.50052 15.2455 7.38979 14.9785 7.38979 14.7V10.5C7.38979 10.2215 7.50052 9.95445 7.69762 9.75754C7.89472 9.56062 8.16205 9.45 8.4408 9.45ZM5.03552 16.9785C5.0803 17.5029 5.32053 17.9913 5.70864 18.3472C6.09675 18.703 6.60445 18.9003 7.13124 18.9H13.9544C14.4808 18.8998 14.988 18.7023 15.3757 18.3465C15.7633 17.9907 16.0033 17.5025 16.048 16.9785L16.9645 6.3H4.12115L5.03763 16.9785H5.03552Z" fill="black"/>
                        </svg>
                    </a>
                    
                  </div>
                </td>
              </tr>
              <tr class="odd">
                <td>
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="" id="">
                  </div>
                </td>
                <td>
                  <div>08/24/2022</div>
                  <div>9:59 AM</div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/html-prototype/images/temp/portrait/small/avatar-s-1.jpg" alt="Image" class="w-100 rounded-circle">
                    </div>
                    <div class="col-lg-11 align-self-center ps-0">
                      Akmal Shah Consumer has cancelled their upcoming services
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="d-flex actions justify-content-center">
                    <a href="" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                        <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                        <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                      </svg>
                    </a>
                    <a href="" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.4408 4.2H12.6448C12.6448 3.64305 12.4234 3.1089 12.0292 2.71508C11.635 2.32125 11.1003 2.1 10.5428 2.1C9.98533 2.1 9.45067 2.32125 9.05647 2.71508C8.66226 3.1089 8.4408 3.64305 8.4408 4.2ZM6.33878 4.2C6.33878 3.08609 6.7817 2.0178 7.57011 1.23015C8.35852 0.442499 9.42784 0 10.5428 0C11.6578 0 12.7271 0.442499 13.5155 1.23015C14.3039 2.0178 14.7469 3.08609 14.7469 4.2H20.0019C20.2807 4.2 20.548 4.31062 20.7451 4.50754C20.9422 4.70445 21.0529 4.97152 21.0529 5.25C21.0529 5.52848 20.9422 5.79555 20.7451 5.99246C20.548 6.18937 20.2807 6.3 20.0019 6.3H19.0749L18.1437 17.157C18.0542 18.2054 17.5741 19.182 16.7983 19.8937C16.0225 20.6053 15.0076 21.0001 13.9544 21H7.13124C6.07803 21.0001 5.06314 20.6053 4.28736 19.8937C3.51158 19.182 3.03143 18.2054 2.94191 17.157L2.01072 6.3H1.08373C0.80498 6.3 0.537651 6.18937 0.340549 5.99246C0.143446 5.79555 0.0327148 5.52848 0.0327148 5.25C0.0327148 4.97152 0.143446 4.70445 0.340549 4.50754C0.537651 4.31062 0.80498 4.2 1.08373 4.2H6.33878ZM13.6959 10.5C13.6959 10.2215 13.5851 9.95445 13.388 9.75754C13.1909 9.56062 12.9236 9.45 12.6448 9.45C12.3661 9.45 12.0988 9.56062 11.9017 9.75754C11.7046 9.95445 11.5938 10.2215 11.5938 10.5V14.7C11.5938 14.9785 11.7046 15.2455 11.9017 15.4425C12.0988 15.6394 12.3661 15.75 12.6448 15.75C12.9236 15.75 13.1909 15.6394 13.388 15.4425C13.5851 15.2455 13.6959 14.9785 13.6959 14.7V10.5ZM8.4408 9.45C8.71954 9.45 8.98687 9.56062 9.18398 9.75754C9.38108 9.95445 9.49181 10.2215 9.49181 10.5V14.7C9.49181 14.9785 9.38108 15.2455 9.18398 15.4425C8.98687 15.6394 8.71954 15.75 8.4408 15.75C8.16205 15.75 7.89472 15.6394 7.69762 15.4425C7.50052 15.2455 7.38979 14.9785 7.38979 14.7V10.5C7.38979 10.2215 7.50052 9.95445 7.69762 9.75754C7.89472 9.56062 8.16205 9.45 8.4408 9.45ZM5.03552 16.9785C5.0803 17.5029 5.32053 17.9913 5.70864 18.3472C6.09675 18.703 6.60445 18.9003 7.13124 18.9H13.9544C14.4808 18.8998 14.988 18.7023 15.3757 18.3465C15.7633 17.9907 16.0033 17.5025 16.048 16.9785L16.9645 6.3H4.12115L5.03763 16.9785H5.03552Z" fill="black"/>
                        </svg>
                    </a>
                    
                  </div>
                </td>
              </tr>
              <tr class="even">
                <td>
                  <div class="form-check mb-0">
                    <input class="form-check-input" type="checkbox" name="" id="">
                  </div>
                </td>
                <td>
                  <div>08/24/2022</div>
                  <div>9:59 AM</div>
                </td>
                <td>
                  <div class="row">
                    <div class="col-lg-1">
                      <img src="/html-prototype/images/temp/portrait/small/avatar-s-1.jpg" alt="Image" class="w-100 rounded-circle">
                    </div>
                    <div class="col-lg-11 align-self-center ps-0">
                      Akmal Shah Consumer has cancelled their upcoming services
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="d-flex actions justify-content-center">
                    <a href="" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.2857 17.1428C15.0747 17.1428 15.7143 16.5032 15.7143 15.7142C15.7143 14.9252 15.0747 14.2856 14.2857 14.2856C13.4967 14.2856 12.8571 14.9252 12.8571 15.7142C12.8571 16.5032 13.4967 17.1428 14.2857 17.1428Z" fill="black"></path>
                        <path d="M19.8407 15.342C19.3994 14.2176 18.6378 13.2475 17.6503 12.5518C16.6629 11.8562 15.493 11.4656 14.2857 11.4284C13.0784 11.4656 11.9085 11.8562 10.9211 12.5518C9.93363 13.2475 9.17204 14.2176 8.7307 15.342L8.57141 15.7141L8.7307 16.0863C9.17204 17.2107 9.93363 18.1808 10.9211 18.8765C11.9085 19.5721 13.0784 19.9627 14.2857 19.9999C15.493 19.9627 16.6629 19.5721 17.6503 18.8765C18.6378 18.1808 19.3994 17.2107 19.8407 16.0863L20 15.7141L19.8407 15.342ZM14.2857 18.5713C13.7206 18.5713 13.1682 18.4037 12.6984 18.0898C12.2285 17.7758 11.8623 17.3296 11.646 16.8075C11.4298 16.2855 11.3732 15.711 11.4835 15.1567C11.5937 14.6025 11.8658 14.0934 12.2654 13.6938C12.665 13.2943 13.1741 13.0221 13.7283 12.9119C14.2825 12.8017 14.857 12.8582 15.3791 13.0745C15.9012 13.2907 16.3474 13.6569 16.6613 14.1268C16.9753 14.5967 17.1428 15.1491 17.1428 15.7141C17.1419 16.4716 16.8406 17.1978 16.305 17.7334C15.7693 18.269 15.0432 18.5703 14.2857 18.5713ZM3.57141 10.7141H7.14284V12.1427H3.57141V10.7141ZM3.57141 7.14272H12.1428V8.57129H3.57141V7.14272ZM3.57141 3.57129H12.1428V4.99986H3.57141V3.57129Z" fill="black"></path>
                        <path d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0Z" fill="black"></path>
                      </svg>
                    </a>
                    <a href="" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                      <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.4408 4.2H12.6448C12.6448 3.64305 12.4234 3.1089 12.0292 2.71508C11.635 2.32125 11.1003 2.1 10.5428 2.1C9.98533 2.1 9.45067 2.32125 9.05647 2.71508C8.66226 3.1089 8.4408 3.64305 8.4408 4.2ZM6.33878 4.2C6.33878 3.08609 6.7817 2.0178 7.57011 1.23015C8.35852 0.442499 9.42784 0 10.5428 0C11.6578 0 12.7271 0.442499 13.5155 1.23015C14.3039 2.0178 14.7469 3.08609 14.7469 4.2H20.0019C20.2807 4.2 20.548 4.31062 20.7451 4.50754C20.9422 4.70445 21.0529 4.97152 21.0529 5.25C21.0529 5.52848 20.9422 5.79555 20.7451 5.99246C20.548 6.18937 20.2807 6.3 20.0019 6.3H19.0749L18.1437 17.157C18.0542 18.2054 17.5741 19.182 16.7983 19.8937C16.0225 20.6053 15.0076 21.0001 13.9544 21H7.13124C6.07803 21.0001 5.06314 20.6053 4.28736 19.8937C3.51158 19.182 3.03143 18.2054 2.94191 17.157L2.01072 6.3H1.08373C0.80498 6.3 0.537651 6.18937 0.340549 5.99246C0.143446 5.79555 0.0327148 5.52848 0.0327148 5.25C0.0327148 4.97152 0.143446 4.70445 0.340549 4.50754C0.537651 4.31062 0.80498 4.2 1.08373 4.2H6.33878ZM13.6959 10.5C13.6959 10.2215 13.5851 9.95445 13.388 9.75754C13.1909 9.56062 12.9236 9.45 12.6448 9.45C12.3661 9.45 12.0988 9.56062 11.9017 9.75754C11.7046 9.95445 11.5938 10.2215 11.5938 10.5V14.7C11.5938 14.9785 11.7046 15.2455 11.9017 15.4425C12.0988 15.6394 12.3661 15.75 12.6448 15.75C12.9236 15.75 13.1909 15.6394 13.388 15.4425C13.5851 15.2455 13.6959 14.9785 13.6959 14.7V10.5ZM8.4408 9.45C8.71954 9.45 8.98687 9.56062 9.18398 9.75754C9.38108 9.95445 9.49181 10.2215 9.49181 10.5V14.7C9.49181 14.9785 9.38108 15.2455 9.18398 15.4425C8.98687 15.6394 8.71954 15.75 8.4408 15.75C8.16205 15.75 7.89472 15.6394 7.69762 15.4425C7.50052 15.2455 7.38979 14.9785 7.38979 14.7V10.5C7.38979 10.2215 7.50052 9.95445 7.69762 9.75754C7.89472 9.56062 8.16205 9.45 8.4408 9.45ZM5.03552 16.9785C5.0803 17.5029 5.32053 17.9913 5.70864 18.3472C6.09675 18.703 6.60445 18.9003 7.13124 18.9H13.9544C14.4808 18.8998 14.988 18.7023 15.3757 18.3465C15.7633 17.9907 16.0033 17.5025 16.048 16.9785L16.9645 6.3H4.12115L5.03763 16.9785H5.03552Z" fill="black"/>
                        </svg>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="d-flex justify-content-between">
            <div>
              <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100 entries</p>
            </div>
            <nav aria-label="Page Navigation">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /Notifications Table -->
      </div>
      <div class="tab-pane fade" id="navigator-tab-pane" role="tabpanel" aria-labelledby="navigator-tab" tabindex="0">
        <h3>Navigator</h3>
        <ul class="d-grid grid-cols-6 gap-4 list-unstyled">
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Invoice Generator</div>
              <div class="text-center block-icon">
                <svg class="fill" width="72" height="64" viewBox="0 0 72 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.9194 2V50.544H3.1721C2.15902 50.544 1.33333 51.3697 1.33333 52.3828C1.33333 57.922 5.8384 62.4228 11.3791 62.4228H55.9314H56.5981V62.4091C56.765 62.4179 56.9338 62.4228 57.1035 62.4228C62.6442 62.4228 67.1492 57.922 67.1492 52.3828V42.9498C69.3095 40.9058 70.6667 38.0172 70.6667 34.8071C70.6667 31.5971 69.3095 28.7084 67.1492 26.6645V17.5683V17.3163L66.9825 17.1273L53.2508 1.55901L53.0517 1.33333H52.7508H19.586H18.9194V2ZM57.3472 12.044C58.7317 13.6422 60.1258 15.2485 61.2689 16.5648H56.0341C54.9504 16.5648 54.0624 15.6768 54.0624 14.5954V8.22076C54.4709 8.69618 54.9165 9.21487 55.3983 9.77571C55.9927 10.4677 56.6423 11.2238 57.3454 12.042L57.3472 12.044ZM11.3791 58.7464C8.51259 58.7464 6.07515 56.839 5.2858 54.2216H47.2266C47.543 55.9215 48.2861 57.4651 49.3383 58.7464H11.3791ZM63.4717 52.3828C63.4717 55.895 60.6189 58.7464 57.1035 58.7464C53.5881 58.7464 50.7353 55.895 50.7353 52.3828C50.7353 51.3697 49.9096 50.544 48.8965 50.544H22.5981V5.0097H50.3837V14.5954C50.3837 17.719 52.9265 20.2423 56.0341 20.2423H63.4717V24.3385C62.2237 23.8582 60.8643 23.5951 59.4488 23.5951C53.2621 23.5951 48.2298 28.6242 48.2298 34.8071C48.2298 40.99 53.2621 46.0192 59.4488 46.0192C60.8643 46.0192 62.2237 45.7561 63.4717 45.2758V52.3828ZM59.4488 42.3428C55.2875 42.3428 51.9085 38.9644 51.9085 34.8071C51.9085 30.65 55.2874 27.2726 59.4488 27.2726C63.609 27.2726 66.988 30.65 66.988 34.8071C66.988 38.9644 63.6089 42.3428 59.4488 42.3428Z"/>
                  <path d="M26.6206 16.0625H48.8962V18.4055H26.6206V16.0625Z"/>
                  <path d="M26.6206 24.2578H48.8962V26.602H26.6206V24.2578Z"/>
                  <path d="M26.6206 32.4688H45.3787V34.8118H26.6206V32.4688Z"/>
                  <path d="M26.6206 40.6641H48.8962V43.0083H26.6206V40.6641Z"/>
                  <path d="M60.7674 29.561V28.6093C60.7674 28.1548 60.4005 27.7891 59.946 27.7891C59.4926 27.7891 59.1257 28.1548 59.1257 28.6093V29.561C57.9386 29.9268 57.1184 31.0112 57.1184 32.2709C57.1184 33.4719 57.7921 34.5551 58.8616 35.0974L60.0048 35.6684C60.6935 36.0203 61.1331 36.709 61.1331 37.4842C61.1331 37.9388 60.8839 38.3345 60.4882 38.5398C60.1663 38.7002 59.7706 38.7002 59.4338 38.5398C59.0381 38.3345 58.7889 37.9388 58.7889 37.4842C58.7889 37.0309 58.422 36.6651 57.9675 36.6651C57.5141 36.6651 57.1472 37.0309 57.1472 37.4842V37.7196C57.1472 37.8073 57.1622 37.8949 57.1911 37.9826C57.3376 38.8617 57.8948 39.6231 58.715 40.0188C58.8616 40.0915 59.0081 40.1503 59.1546 40.1941V41.0144C59.1546 41.4689 59.5214 41.8346 59.976 41.8346C60.4305 41.8346 60.7962 41.4689 60.7962 41.0144V40.1941C60.9427 40.1503 61.0892 40.0915 61.2357 40.0188C62.2036 39.5354 62.8047 38.5687 62.8047 37.4842C62.8047 36.0791 62.0271 34.8193 60.7674 34.1894L59.6241 33.6184C59.1107 33.3542 58.7889 32.842 58.7889 32.2709C58.7889 31.7287 59.1546 31.2604 59.6829 31.1288C59.8733 31.0839 60.0636 31.0839 60.254 31.1288C60.7824 31.2604 61.1481 31.7287 61.1481 32.2709V32.7543C61.1481 33.2077 61.5149 33.5746 61.9695 33.5746C62.4228 33.5746 62.7897 33.2077 62.7897 32.7543V32.2709C62.7747 31.0112 61.9545 29.9129 60.7674 29.561Z"/>
                  </svg>
              </div>
              <div>
                <div class="text-center block-number">50</div>
              </div>
            </a>
          </li>
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Invoice Manager</div>
              <div class="text-center block-icon">
                <svg width="60" height="71" viewBox="0 0 60 71" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill">
                  <path d="M47.5236 57.0383C45.8908 56.5577 45.7119 56.1509 45.7119 55.3995C45.7119 54.5121 46.4311 53.7905 47.3137 53.7905C47.9578 53.7905 48.5375 54.1769 48.788 54.7733C48.949 55.155 49.3867 55.3339 49.766 55.1717C50.1465 55.0107 50.323 54.5706 50.1632 54.1889C49.7767 53.2728 48.9907 52.6156 48.0592 52.3831V51.7581C48.0592 51.3442 47.7252 51.0078 47.3137 51.0078C46.901 51.0078 46.5671 51.3442 46.5671 51.7581V52.3866C45.2216 52.723 44.2197 53.9444 44.2197 55.3995C44.2197 57.2495 45.3719 57.9675 47.1026 58.478C48.6174 58.9253 48.9144 59.4179 48.9144 60.118C48.9144 61.0042 48.1952 61.7258 47.3125 61.7258C46.6684 61.7258 46.0888 61.3406 45.8383 60.743C45.6773 60.3613 45.2395 60.1836 44.8602 60.3446C44.4797 60.5069 44.3032 60.947 44.463 61.3275C44.8483 62.2447 45.6355 62.9019 46.5671 63.1333V63.7595C46.5671 64.1734 46.901 64.5097 47.3125 64.5097C47.7252 64.5097 48.0592 64.1734 48.0592 63.7595V63.1309C49.4046 62.7945 50.4065 61.5732 50.4065 60.1168C50.4065 59.1614 50.1071 57.8005 47.5236 57.0383Z" />
                  <path d="M12.0588 16.7703C14.5934 16.7703 16.6556 14.6985 16.6556 12.1508C16.6556 9.60305 14.5934 7.53125 12.0588 7.53125C9.5242 7.53125 7.46313 9.60305 7.46313 12.1508C7.46313 14.6985 9.5242 16.7703 12.0588 16.7703ZM12.0588 9.03173C13.7704 9.03173 15.1635 10.4308 15.1635 12.1508C15.1635 13.8707 13.7704 15.271 12.0588 15.271C10.3472 15.271 8.95526 13.8707 8.95526 12.1508C8.95526 10.4308 10.3472 9.03173 12.0588 9.03173Z" />
                  <path d="M19.7804 10.9067H34.2818C34.6945 10.9067 35.0284 10.5704 35.0284 10.1565C35.0284 9.7426 34.6945 9.40625 34.2818 9.40625H19.7804C19.3677 9.40625 19.0337 9.7426 19.0337 10.1565C19.0337 10.5704 19.3677 10.9067 19.7804 10.9067Z" />
                  <path d="M19.7804 14.7817H45.5222C45.9349 14.7817 46.2689 14.4454 46.2689 14.0315C46.2689 13.6176 45.9349 13.2812 45.5222 13.2812H19.7804C19.3677 13.2812 19.0337 13.6176 19.0337 14.0315C19.0337 14.4454 19.3677 14.7817 19.7804 14.7817Z" />
                  <path d="M8.2296 21.3599H45.4899C45.9025 21.3599 46.2365 21.0235 46.2365 20.6096C46.2365 20.1957 45.9025 19.8594 45.4899 19.8594H8.2296C7.8181 19.8594 7.48413 20.1957 7.48413 20.6096C7.48413 21.0235 7.8181 21.3599 8.2296 21.3599Z" />
                  <path d="M29.0553 35.2557C29.0553 29.2908 24.2258 24.4375 18.2907 24.4375C12.3556 24.4375 7.52734 29.2908 7.52734 35.2557C7.52734 41.2207 12.3556 46.074 18.2907 46.074C24.2258 46.074 29.0553 41.2207 29.0553 35.2557ZM12.6979 34.7297L16.3131 38.2042L23.2883 30.7901C23.5722 30.4895 24.0433 30.4764 24.3439 30.7603C24.6433 31.0453 24.6564 31.52 24.3725 31.8206L16.8809 39.7834C16.7449 39.9277 16.5564 40.0124 16.3585 40.0172C16.3513 40.0172 16.3453 40.0184 16.3394 40.0184C16.1473 40.0184 15.9625 39.9432 15.8229 39.8096L11.6662 35.8139C11.368 35.5277 11.3573 35.053 11.6423 34.7536C11.9274 34.4542 12.3997 34.4435 12.6979 34.7297Z" />
                  <path d="M45.5226 28.875H32.0398C31.6283 28.875 31.2943 29.2102 31.2943 29.6252C31.2943 30.0391 31.6283 30.3743 32.0398 30.3743H45.5226C45.9353 30.3743 46.2693 30.0391 46.2693 29.6252C46.2693 29.2102 45.9353 28.875 45.5226 28.875Z" />
                  <path d="M45.5226 32.625H32.0398C31.6283 32.625 31.2943 32.9614 31.2943 33.3752C31.2943 33.7891 31.6283 34.1255 32.0398 34.1255H45.5226C45.9353 34.1255 46.2693 33.7891 46.2693 33.3752C46.2693 32.9614 45.9353 32.625 45.5226 32.625Z" />
                  <path d="M45.5226 36.375H32.0398C31.6283 36.375 31.2943 36.7114 31.2943 37.1252C31.2943 37.5403 31.6283 37.8755 32.0398 37.8755H45.5226C45.9353 37.8755 46.2693 37.5403 46.2693 37.1252C46.2693 36.7114 45.9353 36.375 45.5226 36.375Z" />
                  <path d="M45.5226 40.125H32.0398C31.6283 40.125 31.2943 40.4602 31.2943 40.874C31.2943 41.2891 31.6283 41.6243 32.0398 41.6243H45.5226C45.9353 41.6243 46.2693 41.2891 46.2693 40.874C46.2693 40.4602 45.9353 40.125 45.5226 40.125Z" />
                  <path d="M53.7309 46.7605V3.86093C53.7309 1.73187 52.0074 0 49.8891 0H3.84184C1.72352 0 0 1.73187 0 3.86093V53.6546C0 53.6796 0.00119282 53.7035 0.0023855 53.7285C0.00596382 53.7524 0.00834924 53.7762 0.0131202 53.8001C0.0417462 53.9432 0.110925 54.0768 0.218273 54.1842L16.2393 70.2875C16.3442 70.3936 16.479 70.464 16.6209 70.4926C16.6448 70.4974 16.6687 70.4998 16.6925 70.5033C16.7176 70.5045 16.7414 70.5057 16.7653 70.5057H49.8891C50.9745 70.5057 51.9561 70.0501 52.6562 69.3201C56.9895 67.2889 60 62.8686 60 57.7552C60 53.0761 57.4785 48.9778 53.7309 46.7605ZM52.9854 65.2445C52.9031 65.3065 52.8197 65.3674 52.735 65.4282C52.7099 65.4461 52.6837 65.4652 52.6574 65.4831C52.5787 65.5391 52.4976 65.5928 52.4165 65.6465C52.3855 65.6667 52.3545 65.687 52.3235 65.7061C52.2424 65.7586 52.1601 65.8099 52.0778 65.8588C52.0491 65.8755 52.0217 65.8922 51.9931 65.9089C51.7259 66.0639 51.4492 66.2071 51.1653 66.3359C51.1212 66.3562 51.0771 66.3776 51.0329 66.3967C50.959 66.4289 50.8838 66.4587 50.8099 66.4897C50.7538 66.5124 50.6978 66.5351 50.6417 66.5565C50.5701 66.5828 50.4998 66.6102 50.4282 66.6353C50.3638 66.6579 50.2994 66.6794 50.235 66.7009C50.1682 66.7223 50.1014 66.745 50.0346 66.7653C49.9547 66.7903 49.8736 66.813 49.7925 66.8344C49.7388 66.85 49.6851 66.8667 49.6302 66.8798C49.499 66.9144 49.3666 66.9442 49.2331 66.9728C49.1818 66.9835 49.1293 66.9919 49.078 67.0026C48.9874 67.0193 48.8967 67.0372 48.8049 67.0515C48.7476 67.0611 48.6916 67.0682 48.6355 67.0766C48.5448 67.0897 48.4542 67.1016 48.3647 67.1112C48.3087 67.1171 48.2538 67.1231 48.1978 67.1291C48.0988 67.1386 47.9998 67.1458 47.9008 67.1517C47.8531 67.1541 47.8053 67.1589 47.7576 67.1601C47.6097 67.1672 47.4618 67.172 47.3139 67.172C47.1863 67.172 47.0599 67.1684 46.9346 67.1636C46.8989 67.1625 46.8631 67.1601 46.8261 67.1577C46.7283 67.1529 46.6305 67.1469 46.5339 67.1386C46.5029 67.1362 46.4719 67.1338 46.4408 67.1314C46.3204 67.1195 46.1987 67.1064 46.0782 67.0897C46.0484 67.0861 46.0174 67.0813 45.9864 67.0766C45.8946 67.0635 45.8027 67.0491 45.7097 67.0324C45.6703 67.0253 45.631 67.0181 45.5916 67.011C45.4914 66.9931 45.3924 66.9728 45.2946 66.9501C45.2719 66.9454 45.2481 66.9406 45.2254 66.9358C45.1145 66.9108 45.0048 66.8822 44.8962 66.8523C44.8533 66.8416 44.8115 66.8297 44.7686 66.8166C44.6923 66.7951 44.6159 66.7724 44.5396 66.7486C44.499 66.7355 44.4573 66.7235 44.4156 66.7104C44.3106 66.6758 44.2056 66.6388 44.1019 66.6007C44.0625 66.5864 44.0231 66.5708 43.9838 66.5553C43.9122 66.5279 43.8406 66.4993 43.7703 66.4707C43.725 66.4516 43.6796 66.4325 43.6343 66.4134C43.5604 66.3812 43.4888 66.349 43.416 66.3156C43.3767 66.2977 43.3361 66.2798 43.2968 66.2607C43.2037 66.2154 43.1119 66.1701 43.02 66.1212C42.9783 66.1009 42.9377 66.0782 42.896 66.0556C42.5596 65.8743 42.2352 65.6727 41.9251 65.4532C42.1243 65.0859 42.2388 64.6648 42.2388 64.2188V64.1424C42.2388 63.4351 41.9549 62.797 41.4981 62.3294C41.9549 61.8631 42.2388 61.225 42.2388 60.5177V60.4413C42.2388 59.7364 41.9549 59.0959 41.4981 58.6295C41.9549 58.1632 42.2388 57.5215 42.2388 56.8166V56.7414C42.2388 55.3149 41.083 54.1543 39.6636 54.1543H38.6582C40.068 50.7431 43.416 48.3373 47.3127 48.3373C47.9783 48.3373 48.6271 48.4089 49.2533 48.5425C49.4179 48.577 49.5813 48.6164 49.7436 48.6605C49.7698 48.6677 49.7948 48.676 49.8211 48.6832C49.9571 48.7214 50.0918 48.7619 50.2266 48.8061C50.2588 48.8168 50.291 48.8275 50.3244 48.8395C50.452 48.8824 50.5785 48.9289 50.7037 48.9778C50.7359 48.9909 50.7681 49.0041 50.8003 49.016C50.928 49.0685 51.0556 49.1233 51.182 49.1806C51.2071 49.1925 51.2321 49.2032 51.2572 49.2152C51.3967 49.2808 51.5363 49.35 51.6722 49.4227C51.6806 49.4275 51.6889 49.4311 51.6973 49.4358C52.1493 49.678 52.5799 49.9559 52.9854 50.266C55.2302 51.9883 56.683 54.703 56.683 57.7552C56.683 60.8063 55.2302 63.5222 52.9854 65.2445ZM39.6636 55.6548C40.2612 55.6548 40.7467 56.1427 40.7467 56.7426V56.8177C40.7467 57.3247 40.3996 57.7517 39.9308 57.8686C39.8461 57.8936 39.7567 57.9055 39.6636 57.9055H26.9024C26.8106 57.9055 26.7211 57.8936 26.6353 57.8686C26.1677 57.7517 25.8206 57.3247 25.8206 56.8177V56.7426C25.8206 56.1427 26.3061 55.6548 26.9024 55.6548H39.6636ZM26.6353 59.3917C26.7211 59.3678 26.8106 59.3559 26.9024 59.3559H39.6636C39.7567 59.3559 39.8461 59.3678 39.9308 59.3917C40.3996 59.5086 40.7467 59.9368 40.7467 60.4413V60.5188C40.7467 61.0234 40.4008 61.4504 39.9356 61.5697C39.8497 61.5935 39.7579 61.6054 39.6636 61.6054H26.9024C26.8094 61.6054 26.7176 61.5935 26.6317 61.5697C26.1653 61.4504 25.8206 61.0234 25.8206 60.5188V60.4413C25.8206 59.9368 26.1677 59.5086 26.6353 59.3917ZM12.667 52.9055H5.26479L4.47758 52.1135V4.50024H49.2533V45.1527C48.6212 45.0549 47.9735 45.0036 47.3139 45.0036C41.5613 45.0036 36.6913 48.8705 35.1431 54.1543H26.9024C25.4831 54.1543 24.3285 55.3161 24.3285 56.7426V56.8177C24.3285 57.5227 24.6124 58.1632 25.0692 58.6295C24.6124 59.0959 24.3285 59.7364 24.3285 60.4413V60.5188C24.3285 61.225 24.6124 61.8643 25.0692 62.3306C24.6124 62.797 24.3285 63.4363 24.3285 64.1424V64.2188C24.3285 64.9117 24.6028 65.5415 25.0465 66.0055H18.2991L17.5119 65.2147V57.7743C17.5119 55.0895 15.3387 52.9055 12.667 52.9055ZM25.8206 64.2188V64.1424C25.8206 63.6367 26.1653 63.2109 26.6317 63.0916C26.7176 63.0666 26.8094 63.0546 26.9024 63.0546H39.6636C39.7579 63.0546 39.8497 63.0666 39.9356 63.0916C40.4008 63.2109 40.7467 63.6367 40.7467 64.1424V64.2188C40.7467 64.7245 40.3996 65.1527 39.9308 65.2696C39.8461 65.2934 39.7567 65.3053 39.6636 65.3053H26.9024C26.8106 65.3053 26.7211 65.2934 26.6353 65.2696C26.1677 65.1527 25.8206 64.7245 25.8206 64.2188ZM26.9024 69.0064C26.3061 69.0064 25.8206 68.5186 25.8206 67.9187V67.8435C25.8206 67.3366 26.1677 66.9084 26.6353 66.7915C26.7211 66.7677 26.8106 66.7557 26.9024 66.7557H39.6636C39.7567 66.7557 39.8461 66.7677 39.9308 66.7915C40.3996 66.9084 40.7467 67.3366 40.7467 67.8435V67.9187C40.7467 68.15 40.6751 68.3624 40.5522 68.5401C40.3566 68.8216 40.031 69.0064 39.6636 69.0064H26.9024Z" fill=""/>
                  </svg>
              </div>
              <div>
                <div class="text-center block-number">10</div>
              </div>
            </a>
          </li>
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Remittance Generator</div>
              <div class="text-center block-icon">
                <svg class="fill" width="60" height="62" viewBox="0 0 60 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 0V57.5714H36.9231V53.1429H4.61538V4.42857H27.6923V17.7143H41.5385V22.1429H46.1538V14.6143L45.4615 13.95L31.6154 0.664286L30.9231 0H0ZM32.3077 7.52857L38.3077 13.2857H32.3077V7.52857ZM9.23077 22.1429V26.5714H36.9231V22.1429H9.23077ZM48.4615 26.5714V31C44.5385 31.6643 41.5385 34.7643 41.5385 38.75C41.5385 43.1786 45 46.5 49.6154 46.5H51.9231C53.7692 46.5 55.3846 48.05 55.3846 49.8214C55.3846 51.5929 53.7692 53.1429 51.9231 53.1429H43.8462V57.5714H48.4615V62H53.0769V57.5714C57 56.9071 60 53.8071 60 49.8214C60 45.3929 56.5385 42.0714 51.9231 42.0714H49.6154C47.7692 42.0714 46.1538 40.5214 46.1538 38.75C46.1538 36.9786 47.7692 35.4286 49.6154 35.4286H57.6923V31H53.0769V26.5714H48.4615ZM9.23077 33.2143V37.6429H25.3846V33.2143H9.23077ZM30 33.2143V37.6429H36.9231V33.2143H30ZM9.23077 42.0714V46.5H25.3846V42.0714H9.23077ZM30 42.0714V46.5H36.9231V42.0714H30Z"/>
                </svg>
              </div>
              <div>
                <div class="text-center block-number">50</div>
              </div>
            </a>
          </li>
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Payment Manager</div>
              <div class="text-center block-icon">
                <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill">
                  <path d="M60.6796 32.0695C59.9784 30.2272 58.2421 29.0391 56.2732 29.0391C55.2045 29.0391 54.1563 29.4055 53.3213 30.073L40.3951 40.4158C40.3951 40.4097 40.3951 40.3964 40.3951 40.3893C40.3951 37.812 38.2986 35.7155 35.7213 35.7155H28.1089C22.641 32.19 14.1079 32.1971 8.63181 35.7155H5.67381C3.09653 35.7155 1 37.812 1 40.3893V56.4144C1 58.9916 3.09653 61.0882 5.67381 61.0882C8.25211 61.0882 10.3486 58.9916 10.3486 56.4144V55.7468H38.3915C38.7191 55.7468 39.0396 55.6264 39.2866 55.4059L59.4313 37.271C60.9001 35.9564 61.3879 33.9129 60.6796 32.0695ZM7.67745 56.4144C7.67745 57.5157 6.77617 58.418 5.67381 58.418C4.57247 58.418 3.67118 57.5157 3.67118 56.4144V40.3893C3.67118 39.288 4.57247 38.3867 5.67381 38.3867H7.67745V56.4144ZM57.6481 35.2878L37.8781 53.0756H10.3486V37.7783C15.1153 34.8938 22.4001 35.0143 26.9473 38.1529C27.1678 38.306 27.4352 38.3867 27.7088 38.3867H35.7213C36.8227 38.3867 37.7239 39.288 37.7239 40.3893C37.7239 41.4917 36.8227 42.3929 35.7213 42.3929H27.7088C26.9739 42.3929 26.3727 42.9931 26.3727 43.728C26.3727 44.4629 26.9739 45.0631 27.7088 45.0631H38.3915C38.6926 45.0631 38.9855 44.9631 39.2264 44.7702L54.9912 32.1563C55.3515 31.8695 55.8057 31.7092 56.2732 31.7092C57.5817 31.7092 58.0686 32.7177 58.1891 33.0249C58.3095 33.3321 58.6167 34.4141 57.6481 35.2878Z"/>
                  <path d="M31.0006 30.3789C39.0998 30.3789 45.6895 23.7883 45.6895 15.689C45.6895 7.58967 39.0998 1 31.0006 1C22.9013 1 16.3106 7.58967 16.3106 15.689C16.3106 23.7883 22.9013 30.3789 31.0006 30.3789ZM31.0006 3.67016C37.631 3.67016 43.0193 9.05948 43.0193 15.689C43.0193 22.3195 37.631 27.7078 31.0006 27.7078C24.3701 27.7078 18.9818 22.3195 18.9818 15.689C18.9818 9.05948 24.3762 3.67016 31.0006 3.67016Z"/>
                  <path d="M29.6645 17.0275H32.3357C33.0706 17.0275 33.6707 17.6276 33.6707 18.3625C33.6707 19.0975 33.0706 19.6976 32.3357 19.6976H28.3294C27.5955 19.6976 26.9943 20.2988 26.9943 21.0337C26.9943 21.7676 27.5955 22.3688 28.3294 22.3688H29.6645V23.7039C29.6645 24.4388 30.2657 25.04 31.0006 25.04C31.7345 25.04 32.3357 24.4388 32.3357 23.7039V22.3688C34.5455 22.3688 36.3419 20.5724 36.3419 18.3625C36.3419 16.1527 34.5455 14.3563 32.3357 14.3563H29.6645C28.9306 14.3563 28.3294 13.7551 28.3294 13.0212C28.3294 12.2863 28.9306 11.6851 29.6645 11.6851H33.6707C34.4056 11.6851 35.0068 11.0849 35.0068 10.35C35.0068 9.61511 34.4056 9.01493 33.6707 9.01493H32.3357V7.67883C32.3357 6.94494 31.7345 6.34375 31.0006 6.34375C30.2657 6.34375 29.6645 6.94494 29.6645 7.67883V9.01493C27.4546 9.01493 25.6582 10.8104 25.6582 13.0212C25.6582 15.231 27.4546 17.0275 29.6645 17.0275Z"/>
                </svg>
              </div>
              <div>
                <div class="text-center block-number">15</div>
              </div>
            </a>
          </li>
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Quotes & Leads</div>
              <div class="text-center block-icon">
                <svg class="fill" width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M27.3652 54.5313C30.3442 54.5313 32.7815 52.0389 32.7815 48.9928H21.949C21.949 52.0389 24.3863 54.5313 27.3652 54.5313ZM43.614 37.9159V24.0697C43.614 15.5682 39.1997 8.45125 31.4274 6.56817V4.6851C31.4274 2.38663 29.613 0.53125 27.3652 0.53125C25.1175 0.53125 23.3031 2.38663 23.3031 4.6851V6.56817C15.5578 8.45125 11.1165 15.5405 11.1165 24.0697V37.9159L5.70024 43.4543V46.2236H49.0302V43.4543L43.614 37.9159ZM38.1977 40.6851H16.5327V24.0697C16.5327 17.202 20.622 11.6082 27.3652 11.6082C34.1085 11.6082 38.1977 17.202 38.1977 24.0697V40.6851ZM15.3953 4.90663L11.5227 0.946635C5.02321 6.01433 0.744372 13.8236 0.365234 22.6851H5.78148C5.97332 19.1732 6.93739 15.7508 8.60191 12.6726C10.2664 9.5945 12.5885 6.93995 15.3953 4.90663V4.90663ZM48.949 22.6851H54.3652C53.959 13.8236 49.6802 6.01433 43.2078 0.946635L39.3622 4.90663C42.157 6.94996 44.4687 9.60743 46.1277 12.6839C47.7866 15.7604 48.7507 19.1778 48.949 22.6851Z"/>
                </svg>
              </div>
              <div>
                <div class="text-center block-text">50</div>
              </div>
            </a>
          </li>
        </ul>
        <ul class="d-grid grid-cols-6 gap-4 list-unstyled">
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Chat</div>
              <div class="text-center block-icon">
                <svg class="fill" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M30.0032 8.64748e-08C24.7929 -0.000395461 19.6723 1.35618 15.1455 3.93616C10.6188 6.51614 6.842 10.2306 4.18703 14.7137C1.53206 19.1969 0.0904465 24.2942 0.00411907 29.5039C-0.0822083 34.7135 1.18973 39.8558 3.6947 44.4245L1.2427 53.0786C1.01396 53.8672 1.0011 54.7027 1.20547 55.498C1.40984 56.2932 1.82394 57.019 2.40454 57.5996C2.98514 58.1802 3.71095 58.5943 4.5062 58.7987C5.30145 59.0031 6.13698 58.9902 6.92557 58.7615L15.5797 56.3095C19.5903 58.5076 24.0503 59.7597 28.6189 59.9701C33.1875 60.1805 37.7437 59.3436 41.9394 57.5234C46.135 55.7032 49.8589 52.9478 52.8265 49.4679C55.7942 45.988 57.9269 41.8757 59.0617 37.4453C60.1966 33.0149 60.3035 28.3836 59.3743 23.9056C58.4451 19.4275 56.5044 15.2212 53.7005 11.608C50.8966 7.99489 47.3038 5.07063 43.1966 3.05875C39.0894 1.04687 34.5767 0.000633505 30.0032 8.64748e-08ZM30.0032 55.3863C25.4463 55.3821 20.9738 54.1569 17.0509 51.8382C16.6889 51.6364 16.2826 51.5273 15.8682 51.5208C15.6537 51.5211 15.4402 51.5502 15.2335 51.6074L5.6563 54.3479L8.39677 44.7706C8.48107 44.4676 8.50409 44.1508 8.46446 43.8387C8.42483 43.5266 8.32337 43.2256 8.166 42.9533C5.30828 38.1363 4.12383 32.5095 4.79714 26.9492C5.47046 21.389 7.96373 16.2075 11.8886 12.2118C15.8135 8.2162 20.9496 5.63074 26.4969 4.85818C32.0442 4.08562 37.6913 5.16934 42.5586 7.94053C47.4259 10.7117 51.24 15.0148 53.407 20.1795C55.5739 25.3442 55.972 31.0805 54.5392 36.495C53.1063 41.9095 49.9231 46.6982 45.4852 50.1151C41.0474 53.532 35.6041 55.3853 30.0032 55.3863ZM33.4649 30.0009C33.4649 30.6856 33.2618 31.3549 32.8815 31.9241C32.5011 32.4934 31.9605 32.9371 31.3279 33.1991C30.6954 33.4611 29.9994 33.5296 29.3279 33.3961C28.6564 33.2625 28.0396 32.9328 27.5555 32.4487C27.0713 31.9646 26.7417 31.3478 26.6081 30.6763C26.4745 30.0048 26.5431 29.3088 26.8051 28.6762C27.0671 28.0437 27.5108 27.5031 28.08 27.1227C28.6493 26.7423 29.3186 26.5393 30.0032 26.5393C30.9213 26.5393 31.8018 26.904 32.451 27.5532C33.1002 28.2024 33.4649 29.0829 33.4649 30.0009ZM19.6183 30.0009C19.6183 30.6856 19.4153 31.3549 19.0349 31.9241C18.6545 32.4934 18.1139 32.9371 17.4813 33.1991C16.8488 33.4611 16.1528 33.5296 15.4813 33.3961C14.8098 33.2625 14.193 32.9328 13.7089 32.4487C13.2248 31.9646 12.8951 31.3478 12.7615 30.6763C12.6279 30.0048 12.6965 29.3088 12.9585 28.6762C13.2205 28.0437 13.6642 27.5031 14.2334 27.1227C14.8027 26.7423 15.472 26.5393 16.1566 26.5393C17.0747 26.5393 17.9552 26.904 18.6044 27.5532C19.2536 28.2024 19.6183 29.0829 19.6183 30.0009ZM47.3115 30.0009C47.3115 30.6856 47.1084 31.3549 46.7281 31.9241C46.3477 32.4934 45.8071 32.9371 45.1745 33.1991C44.542 33.4611 43.846 33.5296 43.1745 33.3961C42.503 33.2625 41.8862 32.9328 41.4021 32.4487C40.9179 31.9646 40.5882 31.3478 40.4547 30.6763C40.3211 30.0048 40.3897 29.3088 40.6517 28.6762C40.9137 28.0437 41.3574 27.5031 41.9266 27.1227C42.4959 26.7423 43.1652 26.5393 43.8498 26.5393C44.7679 26.5393 45.6484 26.904 46.2976 27.5532C46.9467 28.2024 47.3115 29.0829 47.3115 30.0009Z"/>
                  </svg>
              </div>
              <div>
                <div class="text-center block-number">50</div>
              </div>
            </a>
          </li>
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Providers</div>
              <div class="text-center block-icon">
                <svg class="fill" width="61" height="58" viewBox="0 0 61 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M38.8661 21.3315C41.8098 21.3315 44.199 23.7207 44.199 26.6644V36.5684H44.1868V37.3302C44.1868 37.9364 43.946 38.5177 43.5174 38.9463C43.0887 39.3749 42.5074 39.6157 41.9012 39.6157C41.2951 39.6157 40.7138 39.3749 40.2851 38.9463C39.8565 38.5177 39.6157 37.9364 39.6157 37.3302V30.4736H39.6279V26.6644C39.6279 26.4624 39.5476 26.2686 39.4048 26.1257C39.2619 25.9829 39.0681 25.9026 38.8661 25.9026H22.0995C21.8974 25.9026 21.7036 25.9829 21.5608 26.1257C21.4179 26.2686 21.3376 26.4624 21.3376 26.6644V36.5684H21.3315V37.3302C21.3315 37.9364 21.0907 38.5177 20.6621 38.9463C20.2335 39.3749 19.6522 39.6157 19.046 39.6157C18.4399 39.6157 17.8585 39.3749 17.4299 38.9463C17.0013 38.5177 16.7605 37.9364 16.7605 37.3302V30.4736H16.7666V26.6644C16.7666 23.7207 19.1527 21.3315 22.0995 21.3315H38.8661ZM56.3762 26.6644V37.3302C56.3762 37.9364 56.617 38.5177 57.0456 38.9463C57.4743 39.3749 58.0556 39.6157 58.6617 39.6157C59.2679 39.6157 59.8492 39.3749 60.2779 38.9463C60.7065 38.5177 60.9473 37.9364 60.9473 37.3302V26.6644C60.9473 25.2501 60.3854 23.8936 59.3853 22.8935C58.3852 21.8934 57.0287 21.3315 55.6144 21.3315H45.3295C46.3748 22.5962 47.0574 24.1717 47.2128 25.9026H55.6144C55.8164 25.9026 56.0102 25.9829 56.1531 26.1257C56.296 26.2686 56.3762 26.4624 56.3762 26.6644ZM0 37.3302C1.27738e-08 37.9364 0.240795 38.5177 0.669414 38.9463C1.09803 39.3749 1.67936 39.6157 2.28552 39.6157C2.89168 39.6157 3.47301 39.3749 3.90163 38.9463C4.33025 38.5177 4.57104 37.9364 4.57104 37.3302V26.6644C4.57104 26.4624 4.65131 26.2686 4.79418 26.1257C4.93706 25.9829 5.13083 25.9026 5.33289 25.9026H13.7528C13.9043 24.2236 14.5609 22.63 15.636 21.3315H5.33289C3.91852 21.3315 2.56208 21.8934 1.56197 22.8935C0.561856 23.8936 0 25.2501 0 26.6644V37.3302ZM30.4736 0C32.8983 0 35.2236 0.963182 36.9381 2.67766C38.6525 4.39213 39.6157 6.71746 39.6157 9.14209C39.6157 11.5667 38.6525 13.892 36.9381 15.6065C35.2236 17.321 32.8983 18.2842 30.4736 18.2842C28.049 18.2842 25.7237 17.321 24.0092 15.6065C22.2947 13.892 21.3315 11.5667 21.3315 9.14209C21.3315 6.71746 22.2947 4.39213 24.0092 2.67766C25.7237 0.963182 28.049 0 30.4736 0ZM30.4736 4.57104C29.2613 4.57104 28.0987 5.05264 27.2414 5.90987C26.3842 6.76711 25.9026 7.92977 25.9026 9.14209C25.9026 10.3544 26.3842 11.5171 27.2414 12.3743C28.0987 13.2315 29.2613 13.7131 30.4736 13.7131C31.6859 13.7131 32.8486 13.2315 33.7058 12.3743C34.5631 11.5171 35.0447 10.3544 35.0447 9.14209C35.0447 7.92977 34.5631 6.76711 33.7058 5.90987C32.8486 5.05264 31.6859 4.57104 30.4736 4.57104ZM50.2815 3.04736C52.302 3.04736 54.2398 3.85001 55.6685 5.27874C57.0973 6.70747 57.8999 8.64524 57.8999 10.6658C57.8999 12.6863 57.0973 14.6241 55.6685 16.0528C54.2398 17.4815 52.302 18.2842 50.2815 18.2842C48.261 18.2842 46.3232 17.4815 44.8945 16.0528C43.4657 14.6241 42.6631 12.6863 42.6631 10.6658C42.6631 8.64524 43.4657 6.70747 44.8945 5.27874C46.3232 3.85001 48.261 3.04736 50.2815 3.04736ZM50.2815 7.61841C49.4733 7.61841 48.6982 7.93947 48.1267 8.51096C47.5552 9.08245 47.2341 9.85756 47.2341 10.6658C47.2341 11.474 47.5552 12.2491 48.1267 12.8206C48.6982 13.3921 49.4733 13.7131 50.2815 13.7131C51.0897 13.7131 51.8648 13.3921 52.4363 12.8206C53.0078 12.2491 53.3289 11.474 53.3289 10.6658C53.3289 9.85756 53.0078 9.08245 52.4363 8.51096C51.8648 7.93947 51.0897 7.61841 50.2815 7.61841ZM10.6658 3.04736C12.6863 3.04736 14.6241 3.85001 16.0528 5.27874C17.4815 6.70747 18.2842 8.64524 18.2842 10.6658C18.2842 12.6863 17.4815 14.6241 16.0528 16.0528C14.6241 17.4815 12.6863 18.2842 10.6658 18.2842C8.64524 18.2842 6.70747 17.4815 5.27874 16.0528C3.85001 14.6241 3.04736 12.6863 3.04736 10.6658C3.04736 8.64524 3.85001 6.70747 5.27874 5.27874C6.70747 3.85001 8.64524 3.04736 10.6658 3.04736ZM10.6658 7.61841C9.85756 7.61841 9.08245 7.93947 8.51096 8.51096C7.93947 9.08245 7.61841 9.85756 7.61841 10.6658C7.61841 11.474 7.93947 12.2491 8.51096 12.8206C9.08245 13.3921 9.85756 13.7131 10.6658 13.7131C11.474 13.7131 12.2491 13.3921 12.8206 12.8206C13.3921 12.2491 13.7131 11.474 13.7131 10.6658C13.7131 9.85756 13.3921 9.08245 12.8206 8.51096C12.2491 7.93947 11.474 7.61841 10.6658 7.61841ZM2.28552 42.6631C1.67936 42.6631 1.09803 42.9039 0.669414 43.3325C0.240795 43.7611 0 44.3424 0 44.9486V46.4723C0 49.5031 1.20398 52.4097 3.34707 54.5528C5.49016 56.6959 8.39682 57.8999 11.4276 57.8999H49.5197C52.5504 57.8999 55.4571 56.6959 57.6002 54.5528C59.7433 52.4097 60.9473 49.5031 60.9473 46.4723V44.9486C60.9473 44.3424 60.7065 43.7611 60.2779 43.3325C59.8492 42.9039 59.2679 42.6631 58.6617 42.6631H2.28552ZM11.4276 53.3289C9.74109 53.3288 8.11374 52.7072 6.8567 51.5828C5.59965 50.4584 4.8011 48.9102 4.61371 47.2341H56.3336C56.1462 48.9102 55.3476 50.4584 54.0906 51.5828C52.8335 52.7072 51.2062 53.3288 49.5197 53.3289H11.4276Z"/>
                  </svg>
              </div>
              <div>
                <div class="text-center block-number">300</div>
              </div>
            </a>
          </li>
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Companies</div>
              <div class="text-center block-icon">
                <svg class="fill" width="58" height="62" viewBox="0 0 58 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M56.0039 58.4998H51.0035V54.7491H54.7533C55.4442 54.7491 56.0039 54.1894 56.0039 53.4995V19.7496C56.0039 19.3101 55.7739 18.903 55.3964 18.6771C48.7699 14.7035 49.0722 14.8612 48.8381 14.7951C48.7903 14.7819 48.7415 14.7717 48.6926 14.7646C48.6763 14.7615 48.66 14.7605 48.6438 14.7595C48.5349 14.7473 48.428 14.7493 48.3304 14.7625C48.195 14.7819 44.2061 15.4494 41.0028 15.9826V7.24978C41.0028 6.86921 40.8298 6.51001 40.5337 6.27291C33.72 0.826866 34.2614 1.24102 34.0945 1.15147C33.891 1.04157 33.6682 0.99273 33.4545 1.00087C33.4178 1.00291 33.3812 1.00698 33.3446 1.01105C33.3303 1.01308 33.254 1.01715 33.1288 1.05582C33.0139 1.09245 27.5953 3.56821 17.9823 7.94479C17.5366 8.1483 17.2506 8.59298 17.2506 9.08243V17.9455C8.50256 14.6659 8.91264 14.8103 8.75797 14.7778C8.59821 14.7442 8.42523 14.7422 8.25835 14.7747C8.24308 14.7778 8.2268 14.7798 8.21052 14.7839C8.10266 14.8093 8.01209 14.8429 7.90728 14.8989C7.89202 14.908 7.87676 14.9182 7.86149 14.9274C7.83707 14.9416 7.81163 14.9548 7.78823 14.9711C7.7811 14.9762 7.775 14.9823 7.76788 14.9874C7.67731 15.0525 3.99573 17.8152 2.74921 18.7494C2.43478 18.9854 2.24958 19.3558 2.24958 19.7496V53.4995C2.24958 54.1894 2.80924 54.7491 3.50018 54.7491H4.74975V58.4998H2.24958C1.55966 58.4998 1 59.0595 1 59.7494C1 60.4393 1.55966 61 2.24958 61C2.97206 61 55.2661 61 56.0039 61C56.6938 61 57.2534 60.4393 57.2534 59.7494C57.2534 59.0595 56.6938 58.4998 56.0039 58.4998ZM48.5033 58.4998H44.7526V54.7491H48.5033V58.4998ZM53.5037 52.2499H49.7529V18.207L53.5037 20.4569V52.2499ZM47.2527 52.2499H44.7526V47.2495C44.7526 46.5596 44.1929 46 43.503 46H34.7519V19.5583L47.2527 17.4754V52.2499ZM38.5026 16.3988L34.7519 17.0236V4.85035L38.5026 7.85015V16.3988ZM19.7508 9.88733L32.2517 4.19198C32.2517 5.83943 32.2517 44.034 32.2517 46H23.5016C22.8107 46 22.251 46.5596 22.251 47.2495V52.2499H19.7508C19.7508 50.2219 19.7508 11.8889 19.7508 9.88733ZM17.2506 52.2499H9.75011V17.803L17.2506 20.6156V52.2499ZM4.74975 20.3744L7.24993 18.499V52.2499C6.37584 52.2499 5.62385 52.2499 4.74975 52.2499V20.3744ZM7.24993 54.7491C10.2853 54.7491 19.2064 54.7491 22.251 54.7491V58.4998H7.24993V54.7491ZM24.7512 58.4998C24.7512 57.2899 24.7512 49.7172 24.7512 48.4991C26.8687 48.4991 40.1216 48.4991 42.2524 48.4991C42.2524 49.709 42.2524 57.2818 42.2524 58.4998H24.7512Z"/>
                  <path d="M22.2402 11.3125H24.7404V16.3118H22.2402V11.3125Z"/>
                  <path d="M25.9902 11.3125H28.4904V16.3118H25.9902V11.3125Z"/>
                  <path d="M22.2402 17.4062H24.7404V22.4066H22.2402V17.4062Z"/>
                  <path d="M25.9902 17.4062H28.4904V22.4066H25.9902V17.4062Z"/>
                  <path d="M22.2402 23.5H24.7404V28.5004H22.2402V23.5Z"/>
                  <path d="M25.9902 23.5H28.4904V28.5004H25.9902V23.5Z"/>
                  <path d="M22.2402 29.5938H24.7404V34.5941H22.2402V29.5938Z"/>
                  <path d="M12.25 23.5H14.7502V28.5004H12.25V23.5Z"/>
                  <path d="M12.25 29.5938H14.7502V34.5941H12.25V29.5938Z"/>
                  <path d="M12.25 36.1562H14.7502V41.1566H12.25V36.1562Z"/>
                  <path d="M12.25 42.25H14.7502V47.2504H12.25V42.25Z"/>
                  <path d="M25.9902 29.5938H28.4904V34.5941H25.9902V29.5938Z"/>
                  <path d="M36.0098 21.1562H38.5099V24.906H36.0098V21.1562Z"/>
                  <path d="M39.7598 21.1562H42.2599V24.906H39.7598V21.1562Z"/>
                  <path d="M43.5098 21.1562H46.0099V24.906H43.5098V21.1562Z"/>
                  <path d="M36.0098 25.8438H38.5099V29.5935H36.0098V25.8438Z"/>
                  <path d="M39.7598 25.8438H42.2599V29.5935H39.7598V25.8438Z"/>
                  <path d="M43.5098 25.8438H46.0099V29.5935H43.5098V25.8438Z"/>
                  <path d="M36.0098 31H38.5099V34.7508H36.0098V31Z"/>
                  <path d="M39.7598 31H42.2599V34.7508H39.7598V31Z"/>
                  <path d="M43.5098 31H46.0099V34.7508H43.5098V31Z"/>
                  <path d="M36.0098 36.1562H38.5099V39.906H36.0098V36.1562Z"/>
                  <path d="M39.7598 36.1562H42.2599V39.906H39.7598V36.1562Z"/>
                  <path d="M36.0098 40.8438H38.5099V44.5935H36.0098V40.8438Z"/>
                  <path d="M22.2402 36.1562H24.7404V41.1566H22.2402V36.1562Z"/>
                  <path d="M27.25 49.75H39.7509V52.2502H27.25V49.75Z"/>
                  <path d="M27.25 53.5H39.7509V56.0002H27.25V53.5Z"/>
                </svg>
              </div>
              <div>
                <div class="text-center block-number">78</div>
              </div>
            </a>
          </li>
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Reports</div>
              <div class="text-center block-icon">
                <svg width="186" height="70" viewBox="0 0 186 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g opacity="0.6">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1 54.1774C1 54.1774 8.90445 51.7117 14.7489 44.6681C20.5933 37.6244 27.4089 31.0293 39.6134 34.6351C51.818 38.2409 55.0576 39.3045 55.0576 39.3045C55.0576 39.3045 66.5412 43.7866 74.3395 31.2744C82.5605 19.0994 89.3573 15.0598 89.3573 15.0598C89.3573 15.0598 96.2516 11.6293 102.782 19.0781C109.312 26.5269 115.8 33.25 115.8 33.25C115.8 33.25 125.266 41.2892 131.171 31.2744C137.077 21.2597 144.018 9.81427 144.018 9.81427C144.018 9.81427 150.985 -3.40714 165.015 3.20357C179.045 9.81427 185 9.81427 185 9.81427V65.8881C185 68.159 183.159 70 180.888 70H5.11194C2.84098 70 1 68.159 1 65.8881V54.1774Z" fill="url(#paint0_linear_4514_139735)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1 54.1774C1 54.1774 8.90445 51.7117 14.7489 44.6681C20.5933 37.6244 27.4089 31.0293 39.6134 34.6351C51.818 38.2409 55.0576 39.3045 55.0576 39.3045C55.0576 39.3045 66.5412 43.7866 74.3395 31.2744C82.5605 19.0994 89.3573 15.0598 89.3573 15.0598C89.3573 15.0598 96.2516 11.6293 102.782 19.0781C109.312 26.5269 115.8 33.25 115.8 33.25C115.8 33.25 125.266 41.2892 131.171 31.2744C137.077 21.2597 144.018 9.81427 144.018 9.81427C144.018 9.81427 150.985 -3.40714 165.015 3.20357C179.045 9.81427 185 9.81427 185 9.81427V65.8881C185 68.159 183.159 70 180.888 70H5.11194C2.84098 70 1 68.159 1 65.8881V54.1774Z" fill="url(#paint1_linear_4514_139735)"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M1 54.1774C1 54.1774 8.90445 51.7117 14.7489 44.6681C20.5933 37.6244 27.4089 31.0293 39.6134 34.6351C51.818 38.2409 55.0576 39.3045 55.0576 39.3045C55.0576 39.3045 66.5412 43.7866 74.3395 31.2744C82.5605 19.0994 89.3573 15.0598 89.3573 15.0598C89.3573 15.0598 96.2516 11.6293 102.782 19.0781C109.312 26.5269 115.8 33.25 115.8 33.25C115.8 33.25 125.266 41.2892 131.171 31.2744C137.077 21.2597 144.018 9.81427 144.018 9.81427C144.018 9.81427 150.985 -3.40714 165.015 3.20357C179.045 9.81427 185 9.81427 185 9.81427V65.8881C185 68.159 183.159 70 180.888 70H5.11194C2.84098 70 1 68.159 1 65.8881V54.1774Z" stroke="white"/>
                  </g>
                  <path d="M1 54.1774C1 54.1774 8.90445 51.7117 14.7489 44.6681C20.5933 37.6244 27.4089 31.0294 39.6134 34.6351C51.818 38.2409 55.0576 39.3046 55.0576 39.3046C55.0576 39.3046 66.5412 43.7866 74.3395 31.2744C82.5605 19.0994 89.3573 15.0598 89.3573 15.0598C89.3573 15.0598 96.2516 11.6293 102.782 19.0781C109.312 26.5269 115.8 33.25 115.8 33.25C115.8 33.25 125.266 41.2892 131.171 31.2744C137.077 21.2597 144.018 9.81427 144.018 9.81427C144.018 9.81427 150.985 -3.40714 165.015 3.20357C179.045 9.81427 185 9.81427 185 9.81427" stroke="white" stroke-width="1.37065"/>
                  <defs>
                  <linearGradient id="paint0_linear_4514_139735" x1="1" y1="1" x2="1" y2="70" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#9892CB"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.01"/>
                  </linearGradient>
                  <linearGradient id="paint1_linear_4514_139735" x1="1" y1="1" x2="1" y2="70" gradientUnits="userSpaceOnUse">
                  <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"/>
                  <stop offset="1" stop-opacity="0.01"/>
                  </linearGradient>
                  </defs>
                </svg>
              </div>
              <div>
                <div class="text-center block-number">8</div>
              </div>
            </a>
          </li>
          <li role="presentation">
            <a class="dashborad-navigator-block" href="#" type="button">
              <div class="text-center block-text">Applications</div>
              <div class="text-center block-icon">
                <svg class="fill" width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.0649 12.6147H44.5479V28.0987H43.4333L42.9376 25.1275C42.6811 23.5773 41.7813 22.1858 40.4733 21.3165C40.2392 21.1618 39.997 21.0254 39.7476 20.9043C40.3217 20.2315 40.6769 19.3704 40.6769 18.4207C40.6769 16.2852 38.9424 14.5507 36.8059 14.5507C34.6704 14.5507 32.9349 16.2852 32.9349 18.4207C32.9349 19.3704 33.2912 20.2315 33.8652 20.9043C33.6159 21.0254 33.3736 21.1618 33.1395 21.3165C31.8315 22.1858 30.9317 23.5773 30.6752 25.1275L30.1795 28.0987H29.0649V12.6147ZM34.2134 22.9268C34.8373 22.5115 35.559 22.2917 36.3071 22.2917H37.3057C38.0538 22.2917 38.7755 22.5115 39.3995 22.9268C40.2657 23.5019 40.855 24.4201 41.0291 25.4451L41.4708 28.0987H32.142L32.5837 25.4451C32.7578 24.4201 33.3471 23.5019 34.2134 22.9268ZM36.8059 20.3567C35.7402 20.3567 34.8709 19.4874 34.8709 18.4207C34.8709 17.3549 35.7402 16.4857 36.8059 16.4857C37.8726 16.4857 38.7419 17.3549 38.7419 18.4207C38.7419 19.4874 37.8726 20.3567 36.8059 20.3567ZM46.4839 30.0337V10.6797H27.1289V30.0337H46.4839Z"/>
                <path d="M25.1941 16.4844H13.5811V18.4194H25.1941V16.4844Z"/>
                <path d="M25.1941 20.3594H13.5811V22.2944H25.1941V20.3594Z"/>
                <path d="M25.1941 24.2266H13.5811V26.1616H25.1941V24.2266Z"/>
                <path d="M25.1941 28.1016H13.5811V30.0366H25.1941V28.1016Z"/>
                <path d="M13.581 33.9037H46.484V31.9688H13.581V33.9037Z"/>
                <path d="M34.8711 51.3266H44.5481V55.1976H34.8711V51.3266ZM32.9351 57.1326H46.4841V49.3906H32.9351V57.1326Z"/>
                <path d="M23.2578 57.1303H30.9998V55.1953H23.2578V57.1303Z"/>
                <path d="M23.2578 53.2553H30.9998V51.3203H23.2578V53.2553Z"/>
                <path d="M58.0777 52.6327L50.355 54.0343V8.74373C50.355 7.678 49.4857 6.80873 48.419 6.80873H25.194V6.68353L52.2869 2.94893C52.8681 2.87259 53.4015 3.2889 53.4656 3.87113L59.0569 51.3166C59.0609 51.3624 59.064 51.4072 59.064 51.453C59.064 52.0311 58.6528 52.5268 58.0777 52.6327ZM48.419 59.0667H11.645V57.5318L23.1369 46.0399L25.8892 37.7757H46.484V35.8407H25.0383L15.9618 38.8649L11.645 43.1817V8.74373H15.516V11.6467C15.516 13.2499 16.8168 14.5507 18.419 14.5507C20.0222 14.5507 21.323 13.2499 21.323 11.6467V8.74373H23.258V12.6147H25.194V8.74373H48.419V59.0667ZM6.07312 59.0667C4.3417 59.0667 2.93601 57.66 2.93601 55.9286C2.93601 55.0899 3.26071 54.3031 3.85414 53.7096L4.871 52.6928L9.30896 57.1307L8.2921 58.1476C7.69867 58.741 6.91185 59.0667 6.07312 59.0667ZM16.484 41.0798L20.922 45.5177L10.677 55.7627L6.23903 51.3247L16.484 41.0798ZM19.8522 39.6089L22.3928 42.1496L21.8666 43.7263L18.2755 40.1352L19.8522 39.6089ZM23.0768 40.0975L21.9052 38.9249L23.6621 38.3396L23.0768 40.0975ZM17.452 8.74373H19.387V11.6467C19.387 12.1801 18.9524 12.6147 18.419 12.6147C17.8866 12.6147 17.452 12.1801 17.452 11.6467V8.74373ZM17.452 4.87272C17.452 3.807 18.3213 2.93773 19.387 2.93773H21.323C22.3887 2.93773 23.258 3.807 23.258 4.87272V6.80873H21.323V4.87272H19.387V6.80873H17.452V4.87272ZM60.9776 51.0865L55.3905 3.64821C55.2052 2.00332 53.6621 0.798148 52.0223 1.02819L25.1787 4.73327C25.1024 2.66494 23.4097 1.00172 21.323 1.00172H19.387C17.2515 1.00172 15.516 2.73721 15.516 4.87272V6.80873H11.645C10.5793 6.80873 9.71001 7.678 9.71001 8.74373V45.1177L2.48611 52.3416C1.5293 53.3015 1 54.5748 1 55.9286C1 58.7257 3.27598 61.0017 6.07312 61.0017C7.42995 61.0017 8.70434 60.4724 9.66013 59.5156L9.74767 59.4291C9.91765 60.3248 10.7035 61.0017 11.645 61.0017H48.419C49.4857 61.0017 50.355 60.1325 50.355 59.0667V56.0039L58.4258 54.5372C59.919 54.2654 61 52.9686 61 51.453C61 51.3278 60.9919 51.2036 60.9776 51.0865Z"/>
                </svg>
              </div>
              <div>
                <div class="text-center block-number">15</div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
</div>