<div>
<div class="content-header row">
  <div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h1 class="content-header-title float-start mb-0">My Profile</h1>
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
              My Profile
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
    {{-- BEGIN: Steps --}}
    <div x-data="{ tab: @entangle('component') }" id="tab_wrapper">
      {{-- Nav tabs --}}
      <ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a href="#" class="nav-link" :class="{ 'active': tab === 'profile' }" @click.prevent="tab = 'profile'" id="user-profile-tab" role="tab" aria-controls="user-profile" aria-selected="true"><span class="number">1</span>Profile</a>
        </li>
        <li class="nav-item" role="presentation">
          <a href="#" class="nav-link" :class="{ 'active': tab === 'service-catalog' }" @click.prevent="tab = 'service-catalog'" id="service-catalog-tab" role="tab" aria-controls="service-catalog" aria-selected="false"><span class="number">2</span>Service Catalog & Rates</a>
        </li>
      </ul>
      {{-- Tab panes --}}
      <div class="tab-content">
        {{-- BEGIN: Profile --}}
        <div class="tab-pane fade" :class="{ 'active show': tab === 'profile' }"  id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab" tabindex="0" x-show="tab === 'profile'">
          {{-- Tab Panes --}}
          <div class="row mb-4">
            <p>
              Here you can view, update, and manage your personal information, service catalog, and rates.
            </p>
          </div>
          <div class="row mt-2 mb-5">
            {{-- BEGIN: Profile --}}
            <div class="col-12 text-center">
              <div class="d-inline-block position-relative mb-3">
                <img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle" alt="Profile Image of Provider"/>
                {{-- 
                <div>
                  <input class="position-absolute form-control" type="file" />
                </div>
                --}}
                <div class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
                  <svg aria-label="Upload Picture" width="57" height="57" viewBox="0 0 57 57" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <use xlink:href="/css/provider.svg#camera"></use>
                  </svg>
                </div>
              </div>
              <div>
                <h3>Referral Code: KYTALB</h3>
              </div>
              <div>
                <svg aria-label="Certified" width="20" height="28" viewBox="0 0 20 28" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <use xlink:href="/css/provider.svg#green-badge"></use>
                </svg>
                <span><strong>Certified</strong></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 mb-4">
              <h2>Profile</h2>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="f-name">
              First Name
              <span class="mandatory" aria-hidden="true">
              *
              </span>
              </label>
              <input type="text" id="f-name" class="form-control" name="f-name" placeholder="Enter First Name" required aria-required="true"/>
            </div>
            <div class="col-lg-6 mb-4 ps-lg-5">
              <label class="form-label" for="l-name">
              Last Name
              <span class="mandatory" aria-hidden="true">
              *
              </span>
              </label>
              <input type="text" id="l-name" class="form-control" name="l-name" placeholder="Enter Last Name" required aria-required="true"/>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="pronouns-column">
              Pronouns
              </label>
              <input type="text" id="pronouns-column" class="form-control" placeholder="Enter Pronouns" name="pronouns"/>
            </div>
            <div class="col-lg-6 ps-lg-5 mb-4">
              <label class="form-label" for="">
              Date of Birth
              </label>
              <div class="d-flex align-items-center w-100">
                <div class="position-relative flex-grow-1">
                  <input type="text" class="form-control js-single-date" placeholder="Select Date of Birth" aria-label="" aria-describedby="">
                  <svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
                  </svg>
                </div>
                <button type="button" class="btn px-2">
                  <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 0C6.54545 0 1.88727 3.52467 0 8.5C1.88727 13.4753 6.54545 17 12 17C17.4545 17 22.1127 13.4753 24 8.5C22.1127 3.52467 17.4545 0 12 0ZM12 14.1667C8.98909 14.1667 6.54545 11.628 6.54545 8.5C6.54545 5.372 8.98909 2.83333 12 2.83333C15.0109 2.83333 17.4545 5.372 17.4545 8.5C17.4545 11.628 15.0109 14.1667 12 14.1667ZM12 5.1C10.1891 5.1 8.72727 6.61867 8.72727 8.5C8.72727 10.3813 10.1891 11.9 12 11.9C13.8109 11.9 15.2727 10.3813 15.2727 8.5C15.2727 6.61867 13.8109 5.1 12 5.1Z" fill="black"/>
                  </svg>
                </button>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <label class="form-label mb-lg-0" for="gender-column">
                Gender
                </label>
                <a href="#" class="fw-bold">
                  <small>
                    <svg class="me-1" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.203125C4.47727 0.203125 0 4.6804 0 10.2031C0 15.7259 4.47727 20.2031 10 20.2031C15.5227 20.2031 20 15.7259 20 10.2031C20 4.6804 15.5227 0.203125 10 0.203125ZM10.9091 13.8395C10.9091 14.0806 10.8133 14.3118 10.6428 14.4823C10.4723 14.6528 10.2411 14.7486 10 14.7486C9.75889 14.7486 9.52766 14.6528 9.35718 14.4823C9.18669 14.3118 9.09091 14.0806 9.09091 13.8395V11.1122H6.36364C6.12253 11.1122 5.8913 11.0164 5.72081 10.8459C5.55032 10.6755 5.45455 10.4442 5.45455 10.2031C5.45455 9.96202 5.55032 9.73079 5.72081 9.5603C5.8913 9.38981 6.12253 9.29403 6.36364 9.29403H9.09091V6.56676C9.09091 6.32566 9.18669 6.09443 9.35718 5.92394C9.52766 5.75345 9.75889 5.65767 10 5.65767C10.2411 5.65767 10.4723 5.75345 10.6428 5.92394C10.8133 6.09443 10.9091 6.32566 10.9091 6.56676V9.29403H13.6364C13.8775 9.29403 14.1087 9.38981 14.2792 9.5603C14.4497 9.73079 14.5455 9.96202 14.5455 10.2031C14.5455 10.4442 14.4497 10.6755 14.2792 10.8459C14.1087 11.0164 13.8775 11.1122 13.6364 11.1122H10.9091V13.8395Z" fill="#0A1E46"/>
                    </svg>
                    Add New
                  </small>
                </a>
              </div>
              <select class="select2 form-select" id="gender-column">
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
              </select>
            </div>
            <div class="col-lg-6 mb-4 ps-lg-5">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <label class="form-label" for="ethnicity-column">
                Ethnicity
                </label>
                <a href="#" class="fw-bold">
                  <small>
                    <svg class="me-1" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.203125C4.47727 0.203125 0 4.6804 0 10.2031C0 15.7259 4.47727 20.2031 10 20.2031C15.5227 20.2031 20 15.7259 20 10.2031C20 4.6804 15.5227 0.203125 10 0.203125ZM10.9091 13.8395C10.9091 14.0806 10.8133 14.3118 10.6428 14.4823C10.4723 14.6528 10.2411 14.7486 10 14.7486C9.75889 14.7486 9.52766 14.6528 9.35718 14.4823C9.18669 14.3118 9.09091 14.0806 9.09091 13.8395V11.1122H6.36364C6.12253 11.1122 5.8913 11.0164 5.72081 10.8459C5.55032 10.6755 5.45455 10.4442 5.45455 10.2031C5.45455 9.96202 5.55032 9.73079 5.72081 9.5603C5.8913 9.38981 6.12253 9.29403 6.36364 9.29403H9.09091V6.56676C9.09091 6.32566 9.18669 6.09443 9.35718 5.92394C9.52766 5.75345 9.75889 5.65767 10 5.65767C10.2411 5.65767 10.4723 5.75345 10.6428 5.92394C10.8133 6.09443 10.9091 6.32566 10.9091 6.56676V9.29403H13.6364C13.8775 9.29403 14.1087 9.38981 14.2792 9.5603C14.4497 9.73079 14.5455 9.96202 14.5455 10.2031C14.5455 10.4442 14.4497 10.6755 14.2792 10.8459C14.1087 11.0164 13.8775 11.1122 13.6364 11.1122H10.9091V13.8395Z" fill="#0A1E46"/>
                    </svg>
                    Add New
                  </small>
                </a>
              </div>
              <select class="select2 form-select" id="ethnicity-column">
                <option>Select Ethnicity</option>
              </select>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="providerID-column">
              Provider ID
              </label>
              <input type="email" id="providerID-column" class="form-control" name="providerID-column" placeholder="Enter Provider ID"/>
            </div>
            <div class="col-lg-6 mb-4 ps-lg-5">
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="email">
              Email
              <span class="mandatory" aria-hidden="true">
              *
              </span>
              </label>
              <input type="text" id="email" class="form-control" name="email" placeholder="Enter Email" required aria-required="true"/>
            </div>
            <div class="col-lg-6 mb-4 ps-lg-5">
              <label class="form-label" for="phone">Phone Number</label>
              <input type="text" id="phone" class="form-control" name="phone" placeholder="Enter Phone Number"/>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="country">
              Country
              </label>
              <select class="select2 form-select" id="country">
                <option value="">Select Country</option>
              </select>
            </div>
            <div class="col-lg-6 mb-4 ps-lg-5">
              <label class="form-label" for="state">
              State / Province
              </label>
              <select class="select2 form-select" id="state">
                <option value="Al">
                  Select State / Province
                </option>
              </select>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="city">
              City
              </label>
              <select class="select2 form-select" id="city">
                <option value="">Select City</option>
              </select>
            </div>
            <div class="col-lg-6 mb-4 ps-lg-5">
              <label class="form-label" for="zip-code">
              Zip Code
              </label>
              <input type="text" id="zip-code" class="form-control" name="zipCode" placeholder="Enter Zip Code"/>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="address-line-1">
              Address Line 1
              </label>
              <input type="text" id="address-line-1" class="form-control" name="address-line-1" placeholder="Enter Address Line 1"/>
            </div>
            <div class="col-lg-6 mb-4 ps-lg-5">
              <label class="form-label" for="address-line-2">
              Address Line 2
              </label>
              <input type="text" id="address-line-2" class="form-control" name="addressLine2" placeholder="Enter Address Line 2"/>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="start-date-column">
              Start Date
              </label>
              <div class="d-flex align-items-center w-100">
                <div class="position-relative flex-grow-1">
                  <input type="text" class="form-control js-single-date" placeholder="Select Date of Birth" aria-label="" aria-describedby="" id="start-date-column">
                  <svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4 ps-lg-5">
              <label class="form-label" for="end-date-column">
              End Date
              </label>
              <div class="d-flex align-items-center w-100">
                <div class="position-relative flex-grow-1">
                  <input type="text" class="form-control js-single-date" placeholder="Select Date of Birth" aria-label="" aria-describedby="" id="end-date-column">
                  <svg class="icon-date" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.75 2.28511L13.7456 2.28513V1.03921C13.7456 0.693815 13.4659 0.414062 13.1206 0.414062C12.7753 0.414062 12.4956 0.693815 12.4956 1.03921V2.28481H7.49563V1.03921C7.49563 0.693815 7.21594 0.414062 6.87063 0.414062C6.52531 0.414062 6.24563 0.693815 6.24563 1.03921V2.28481H1.25C0.559687 2.28481 0 2.84463 0 3.53511V19.1638C0 19.8542 0.559687 20.4141 1.25 20.4141H18.75C19.4403 20.4141 20 19.8542 20 19.1638V3.53511C20 2.84492 19.4403 2.28511 18.75 2.28511ZM18.75 19.1638H1.25V3.53511H6.24563V4.16494C6.24563 4.51032 6.52531 4.79009 6.87063 4.79009C7.21594 4.79009 7.49563 4.51032 7.49563 4.16494V3.53542H12.4956V4.16525C12.4956 4.51065 12.7753 4.7904 13.1206 4.7904C13.4659 4.7904 13.7456 4.51065 13.7456 4.16525V3.53542H18.75V19.1638ZM14.375 10.412H15.625C15.97 10.412 16.25 10.1319 16.25 9.78686V8.53657C16.25 8.19149 15.97 7.91142 15.625 7.91142H14.375C14.03 7.91142 13.75 8.19149 13.75 8.53657V9.78686C13.75 10.1319 14.03 10.412 14.375 10.412ZM14.375 15.4129H15.625C15.97 15.4129 16.25 15.1331 16.25 14.7877V13.5374C16.25 13.1924 15.97 12.9123 15.625 12.9123H14.375C14.03 12.9123 13.75 13.1924 13.75 13.5374V14.7877C13.75 15.1334 14.03 15.4129 14.375 15.4129ZM10.625 12.9123H9.375C9.03 12.9123 8.75 13.1924 8.75 13.5374V14.7877C8.75 15.1331 9.03 15.4129 9.375 15.4129H10.625C10.97 15.4129 11.25 15.1331 11.25 14.7877V13.5374C11.25 13.1927 10.97 12.9123 10.625 12.9123ZM10.625 7.91142H9.375C9.03 7.91142 8.75 8.19149 8.75 8.53657V9.78686C8.75 10.1319 9.03 10.412 9.375 10.412H10.625C10.97 10.412 11.25 10.1319 11.25 9.78686V8.53657C11.25 8.19118 10.97 7.91142 10.625 7.91142ZM5.625 7.91142H4.375C4.03 7.91142 3.75 8.19149 3.75 8.53657V9.78686C3.75 10.1319 4.03 10.412 4.375 10.412H5.625C5.97 10.412 6.25 10.1319 6.25 9.78686V8.53657C6.25 8.19118 5.97 7.91142 5.625 7.91142ZM5.625 12.9123H4.375C4.03 12.9123 3.75 13.1924 3.75 13.5374V14.7877C3.75 15.1331 4.03 15.4129 4.375 15.4129H5.625C5.97 15.4129 6.25 15.1331 6.25 14.7877V13.5374C6.25 13.1927 5.97 12.9123 5.625 12.9123Z" fill="black"/>
                  </svg>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <div class="d-flex justify-content-between align-items-center">
                <label class="form-label" for="education">
                Education
                </label>
                <a href="#" class="fw-bold">
                  <small>
                    <svg class="me-1" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z" fill="#0A1E46"/>
                    </svg>
                    Upload Supporting Documents
                  </small>
                </a>
              </div>
              <input type="text" id="education" class="form-control" name="education-column" placeholder="Enter Education"/>
            </div>
            <div class="col-lg-6 mb-4 ps-lg-5">
              <div class="d-flex justify-content-between align-items-center mb-2">
                <label class="form-label mb-lg-0" for="certification-column">
                Certification(s)
                </label>
                <div class="d-flex align-items-center gap-3">
                  <a href="#" class="fw-bold">
                    <small>
                      <svg class="me-1" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.203125C4.47727 0.203125 0 4.6804 0 10.2031C0 15.7259 4.47727 20.2031 10 20.2031C15.5227 20.2031 20 15.7259 20 10.2031C20 4.6804 15.5227 0.203125 10 0.203125ZM10.9091 13.8395C10.9091 14.0806 10.8133 14.3118 10.6428 14.4823C10.4723 14.6528 10.2411 14.7486 10 14.7486C9.75889 14.7486 9.52766 14.6528 9.35718 14.4823C9.18669 14.3118 9.09091 14.0806 9.09091 13.8395V11.1122H6.36364C6.12253 11.1122 5.8913 11.0164 5.72081 10.8459C5.55032 10.6755 5.45455 10.4442 5.45455 10.2031C5.45455 9.96202 5.55032 9.73079 5.72081 9.5603C5.8913 9.38981 6.12253 9.29403 6.36364 9.29403H9.09091V6.56676C9.09091 6.32566 9.18669 6.09443 9.35718 5.92394C9.52766 5.75345 9.75889 5.65767 10 5.65767C10.2411 5.65767 10.4723 5.75345 10.6428 5.92394C10.8133 6.09443 10.9091 6.32566 10.9091 6.56676V9.29403H13.6364C13.8775 9.29403 14.1087 9.38981 14.2792 9.5603C14.4497 9.73079 14.5455 9.96202 14.5455 10.2031C14.5455 10.4442 14.4497 10.6755 14.2792 10.8459C14.1087 11.0164 13.8775 11.1122 13.6364 11.1122H10.9091V13.8395Z" fill="#0A1E46"/>
                      </svg>
                      Add New
                    </small>
                  </a>
                  <a href="#" class="fw-bold">
                    <small>
                      <svg class="me-1" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z" fill="#0A1E46"/>
                      </svg>
                      Upload Supporting Documents
                    </small>
                  </a>
                </div>
              </div>
              <div>
                <select class="select2 form-select" id="certification-column">
                  <option value="certification-column">
                    Enter Certification(s)
                  </option>
                </select>
              </div>
              <div class="mt-2">
                <input class="form-check-input" type="checkbox" value="display-provider" id="display-provider">
                <label class="form-check-label" for="display-provider">
                Display Provider as Certified
                </label>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <div class="d-flex justify-content-between align-items-center">
                <label class="form-label" for="experience-column">
                Experience
                </label>
                <a href="#" class="fw-bold">
                  <small>
                    <svg class="me-1" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.54545 16H5.25C3.80227 16 2.5655 15.475 1.53968 14.425C0.513227 13.375 0 12.0917 0 10.575C0 9.275 0.373864 8.11667 1.12159 7.1C1.86932 6.08333 2.84773 5.43333 4.05682 5.15C4.45455 3.61667 5.25 2.375 6.44318 1.425C7.63636 0.475 8.98864 0 10.5 0C12.3614 0 13.9402 0.679 15.2365 2.037C16.5334 3.39567 17.1818 5.05 17.1818 7C18.2795 7.13333 19.1905 7.629 19.9147 8.487C20.6382 9.34567 21 10.35 21 11.5C21 12.75 20.5825 13.8127 19.7476 14.688C18.9121 15.5627 17.8977 16 16.7045 16H11.4545V8.85L12.9818 10.4L14.3182 9L10.5 5L6.68182 9L8.01818 10.4L9.54545 8.85V16Z" fill="#0A1E46"/>
                    </svg>
                    Upload Supporting Documents
                  </small>
                </a>
              </div>
              <textarea class="form-control" rows="3" cols="3" placeholder="" name="experienceColumn" id="experience-column"></textarea>
            </div>
            <div class="col-lg-6 ps-lg-5">
              <label class="form-label" for="notes-column">
              Notes
              </label>
              <textarea class="form-control" rows="3" placeholder="" name="notesColumn" id="notes-column"></textarea>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="preferred-language-column">
              Preferred Language
              </label>
              <select class="select2 form-select" id="preferred-language-column">
                <option value="preferred-language-column">
                  Select Preferred Language
                </option>
              </select>
            </div>
            <div class="col-lg-6 ps-lg-5">
              <label class="form-label" for="set-time-zone-column">
              Set Time Zone
              </label>
              <select class="select2 form-select" id="set-time-zone-column">
                <option value="set-time-zone-column">
                  Select Time Zone
                </option>
              </select>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="preferred-colleagues-column">
              Preferred Colleagues
              </label>
              <select class="select2 form-select" id="preferred-colleagues-column">
                <option value="preferred-colleagues-column">
                  Select Preferred Colleagues
                </option>
              </select>
            </div>
            <div class="col-lg-6 ps-lg-5">
              <label class="form-label" for="disfavored-colleagues-column">
              Disfavored Colleagues
              </label>
              <select class="select2 form-select" id="disfavored-colleagues-column">
                <option value="disfavored-colleagues-column">
                  Select Disfavored Colleagues
                </option>
              </select>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="provider-introduction">
              Provider Introduction
              </label>
              <textarea class="form-control" rows="3" cols="3" placeholder="" name="provider- introduction" id="provider-introduction"></textarea>
            </div>
            <div class="col-lg-6 ps-lg-5">
              <label class="form-label" for="provider-introduction-media">
              Provider Introduction Media
              </label>
              <input type="file" id="provider-introduction-media" class="form-control" name="companeyAdmins" placeholder="Add Admins"/>
            </div>
            <div class="col-lg-6 mb-4 pe-lg-5">
              <label class="form-label" for="payment-settings">
              Payment Settings
              </label>
              <select class="select2 form-select" id="payment-settings">
                <option value="Al">
                  Select Payment Settings
                </option>
              </select>
            </div>
            <div class="col-lg-6 ps-lg-5">
              <label class="form-label" for="default-remittance-temp">
              Select Default Remittance Template
              </label>
              <select class="select2 form-select" id="default-remittance-temp">
                <option value="Al">
                  Select Default Remittance Template
                </option>
              </select>
            </div>
            <div class="row">
              <div class="col-lg-12 mb-4">
                <h2>Provider Schedule Configuration</h2>
                <div class="row mt-5">
                  <h3>Provider Type</h3>
                </div>
                <div class="row">
                  <div class="col-12 mb-4">
                    <div class="mb-2">
                      <div class="d-flex align-items-center gap-4">
                        <div class="mb-0">
                          <label class="form-check-label" for="ContractProviderType">
                          Contract Provider
                          </label>
                          <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
                          </svg>
                        </div>
                        <div>
                          <button type="button" class="btn btn-outline-primary px-3 py-1 rounded-lg btn-has-icon px-0 btn-multiselect-popup">
                          Availability Schedule
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <h4 class="mb-2">
                Would you like to set a rate for when this provider works outside their set schedule?
              </h4>
              <div class="d-flex">
                <div class="form-check">
                  <label class="form-check-label" for="provider-rate-schedule-radio-btn">
                  Yes
                  </label>
                </div>
              </div>
            </div>
            {{-- Input Fields End --}}
          </div>
          {{-- Action Buttons - Start --}}
          <div class="col-12 justify-content-center form-actions d-flex gap-3">
            <button type="button" class="btn btn-outline-dark rounded">
            Cancel
            </button>
            <button type="button" class="btn btn-primary rounded" x-on:click="$wire.switch('service-catalog')">
            Next
            </button>
          </div>
        </div>
        {{-- END: Profile --}}
        {{-- BEGIN:Service Catalog --}}
        <div class="tab-pane fade" :class="{ 'active show': tab === 'service-catalog' }" id="service-catalog" role="tabpanel" aria-labelledby="service-catalog-tab" tabindex="0" x-show="tab === 'service-catalog'">
          <section id="multiple-column-form">
          	<!-- END: Sign Language Interpreting Services -->
          	<div class="mb-4">
	            <div class="mb-3 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#accomodation" aria-expanded="true" aria-controls="accomodation">
	              Sign Language Interpreting Services
	              <svg class="icon-arrow-bottom ms-5" width="32" height="15" viewBox="0 0 32 15" fill="none" xmlns="http://www.w3.org/2000/svg">
	                <path d="M30.5957 0.573599C30.1577 0.206324 29.5638 -6.46638e-08 28.9445 -8.80044e-08C28.3252 -1.11345e-07 27.7312 0.206324 27.2933 0.573598L15.7323 10.2711L4.17133 0.573598C3.73084 0.216732 3.14088 0.0192642 2.52851 0.0237278C1.91613 0.0281915 1.33035 0.234228 0.89732 0.597462C0.46429 0.960695 0.218662 1.45206 0.213341 1.96573C0.208019 2.4794 0.443431 2.97427 0.86887 3.34377L14.0811 14.4264C14.519 14.7937 15.113 15 15.7323 15C16.3516 15 16.9455 14.7937 17.3835 14.4264L30.5957 3.34377C31.0336 2.97638 31.2795 2.47817 31.2795 1.95868C31.2795 1.4392 31.0336 0.940984 30.5957 0.573599Z" fill="#575656"/>
	              </svg>
	            </div>
	            {{--  
	            <div class="row collapse show mb-3" id="accomodation">
	              <div class="mb-2 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#accomodation-category-one" aria-expanded="false" aria-controls="accomodation-category">
	                <svg class="mb-1" width="32" height="16" viewBox="0 0 32 16" fill="none" xmlns="http://www.w3.org/2000/svg">
	                  <path d="M0.897074 15.2467C1.33505 15.614 1.929 15.8203 2.54831 15.8203C3.16761 15.8203 3.76156 15.614 4.19954 15.2467L15.7605 5.54916L27.3215 15.2467C27.762 15.6036 28.3519 15.801 28.9643 15.7966C29.5767 15.7921 30.1625 15.5861 30.5955 15.2228C31.0285 14.8596 31.2741 14.3682 31.2795 13.8546C31.2848 13.3409 31.0494 12.846 30.6239 12.4765L17.4117 1.39391C16.9738 1.02663 16.3798 0.820312 15.7605 0.820312C15.1412 0.820312 14.5473 1.02663 14.1093 1.39391L0.897074 12.4765C0.459226 12.8439 0.213257 13.3421 0.213257 13.8616C0.213257 14.3811 0.459226 14.8793 0.897074 15.2467Z" fill="#575656"/>
	                </svg>
	                Construction
	              </div>
	              <div class="collapse" id="accomodation-category-one">
	                <!-- accommodation-category body here -->
	              </div>
	            </div>
	            --}}
	            <div class="collapse show" id="accomodation">
	              <div class="mb-3 fw-semibold" data-bs-toggle="collapse" type="button" data-bs-target="#accomodation-category" aria-expanded="true" aria-controls="accomodation">
	                <svg class="icon-arrow-bottom me-1" width="25" height="13" viewBox="0 0 25 13" fill="none" xmlns="http://www.w3.org/2000/svg">
	                  <path d="M24.306 0.958879C23.9556 0.665059 23.4804 0.5 22.985 0.5C22.4895 0.5 22.0144 0.665059 21.664 0.958879L12.4152 8.71692L3.16646 0.958879C2.81407 0.673386 2.3421 0.515412 1.8522 0.518983C1.3623 0.522554 0.893673 0.687384 0.547249 0.97797C0.200825 1.26856 0.00432384 1.66165 6.67572e-05 2.07259C-0.00419033 2.48352 0.184137 2.87942 0.524488 3.17501L11.0942 12.0411C11.4446 12.3349 11.9198 12.5 12.4152 12.5C12.9107 12.5 13.3858 12.3349 13.7362 12.0411L24.306 3.17501C24.6563 2.8811 24.853 2.48253 24.853 2.06695C24.853 1.65136 24.6563 1.25279 24.306 0.958879Z" fill="#575656"/>
	                </svg>
	                Film Production
	              </div>
	              <div class="collapse show"  id="accomodation-category">
	                <div class="row">
	                  <div class="d-inline-flex mb-4">
	                    <h2>Standard Rates</h2>
	                    <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
	                      <path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
	                    </svg>
	                  </div>
	                  <div class="row mb-4">
	                    <div class="col-md-4">
	                      <div class="d-inline-flex">
	                        <div>
	                          <svg aria-label="In-Person" width="25" height="24" viewBox="0 0 25 24" fill="none"
	                            xmlns="http://www.w3.org/2000/svg">
	                            <use xlink:href="/css/provider.svg#in-person"></use>
	                          </svg>
	                        </div>
	                        <div class="mx-3 fw-semibold">Day Rate In-person:</div>
	                        <div class="mx-3">$101.00</div>
	                      </div>
	                    </div>
	                    <div class="col-md-4">
	                      <div class="d-inline-flex">
	                        <div>
	                          <svg aria-label="Virtual" width="25" height="25" viewBox="0 0 25 25" fill="none"
	                            xmlns="http://www.w3.org/2000/svg">
	                            <use xlink:href="/css/provider.svg#virtual-service"></use>
	                          </svg>
	                        </div>
	                        <div class="mx-3 fw-semibold">Day Rate Virtual:</div>
	                        <div class="mx-3">$101.00</div>
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row mb-4">
	                    <div class="col-md-4">
	                      <div class="d-inline-flex">
	                        <div>
	                          <svg aria-label="Phone" width="30" height="24" viewBox="0 0 30 24" fill="none"
	                            xmlns="http://www.w3.org/2000/svg">
	                            <use xlink:href="/css/provider.svg#phone"></use>
	                          </svg>
	                        </div>
	                        <div class="mx-3 fw-semibold">Day Rate Phone:</div>
	                        <div class="mx-3">$101.00</div>
	                      </div>
	                    </div>
	                    <div class="col-md-4">
	                      <div class="d-inline-flex">
	                        <div>
	                          <svg aria-label="Teleconference" width="30" height="26" viewBox="0 0 30 26" fill="none"
	                            xmlns="http://www.w3.org/2000/svg">
	                            <use xlink:href="/css/provider.svg#teleconference"></use>
	                          </svg>
	                        </div>
	                        <div class="mx-3 fw-semibold">Day Rate Teleconference:</div>
	                        <div class="mx-3">$101.00</div>
	                      </div>
	                    </div>
	                  </div>
	                  <hr>
	                </div>
	                {{-- Standandard Rates -End --}}
	                {{-- InPerson Expedited Service -Start --}}
	                <div class="row">
	                  <div class="d-inline-flex mb-4">
	                    <h2>Expedited Hours </h2>
	                    <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
	                      <path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
	                    </svg>
	                  </div>
	                  <div class="row mb-3">
	                    <div class="d-inline-flex">
	                      <div class="d-inline-flex col-3">
	                        <div >
	                          <svg aria-label="In-Person" width="25" height="24" viewBox="0 0 25 24" fill="none"
	                            xmlns="http://www.w3.org/2000/svg">
	                            <use xlink:href="/css/provider.svg#in-person"></use>
	                          </svg>
	                        </div>
	                        <div class="mx-2 d-inline-flex">
	                          <div class="text-primary fw-semibold">In-person</div>
	                          <div class="mx-2 ">
	                            <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
	                              xmlns="http://www.w3.org/2000/svg">
	                              <use xlink:href="/css/provider.svg#fill-question"></use>
	                            </svg>
	                          </div>
	                        </div>
	                      </div>
	                      <div class="d-inline-flex col-3">
	                        <div class="bg-muted rounded">
	                          <span class="fw-semibold">Parameter 1</span>                                                               
	                        </div>
	                        <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice: </span><span class="mx-1">5</span></div>
	                      </div>
	                      <div class="mx-2 d-inline-flex">
	                        <div class="d-inline-flex">
	                          <span class="fw-semibold">Rate: </span><span class="mx-1">$100.00</span>                                                       
	                        </div>
	                      </div>
	                      <div class="mx-4">
	                        Multiply by service duration
	                      </div>
	                    </div>
	                  </div>
	                  {{-- InPerson Expedited Service -End --}}
	                  <div class="row mb-3">
	                    <div class="d-inline-flex">
	                      <div class="d-inline-flex col-3">
	                        <div >
	                          <svg aria-label="Virtual" width="25" height="25" viewBox="0 0 25 25" fill="none"
	                            xmlns="http://www.w3.org/2000/svg">
	                            <use xlink:href="/css/provider.svg#virtual-service"></use>
	                          </svg>
	                        </div>
	                        <div class="mx-2 d-inline-flex">
	                          <div class="text-primary fw-semibold">Virtual</div>
	                          <div class="mx-2 ">
	                            <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
	                              xmlns="http://www.w3.org/2000/svg">
	                              <use xlink:href="/css/provider.svg#fill-question"></use>
	                            </svg>
	                          </div>
	                        </div>
	                      </div>
	                      <div class="d-inline-flex col-3">
	                        <div class="bg-muted rounded">
	                          <span class="fw-semibold">Parameter 1</span>                                                               
	                        </div>
	                        <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice: </span><span class="mx-1">5</span></div>
	                      </div>
	                      <div class="mx-2 d-inline-flex">
	                        <div class="d-inline-flex">
	                          <span class="fw-semibold">Rate: </span><span class="mx-1">$100.00</span>                                                       
	                        </div>
	                      </div>
	                      <div class="mx-4">
	                        Multiply by service duration
	                      </div>
	                    </div>
	                  </div>
	                  {{-- Virtual Expedited service End --}}
	                  <div class="row mb-3">
	                    <div class="d-inline-flex">
	                      <div class="d-inline-flex col-3">
	                        <div >
	                          <svg aria-label="Phone" width="30" height="24" viewBox="0 0 30 24" fill="none"
	                            xmlns="http://www.w3.org/2000/svg">
	                            <use xlink:href="/css/provider.svg#phone"></use>
	                          </svg>
	                        </div>
	                        <div class="mx-2 d-inline-flex">
	                          <div class="text-primary fw-semibold">Phone</div>
	                          <div class="mx-2 ">
	                            <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
	                              xmlns="http://www.w3.org/2000/svg">
	                              <use xlink:href="/css/provider.svg#fill-question"></use>
	                            </svg>
	                          </div>
	                        </div>
	                      </div>
	                      <div class="d-inline-flex col-3">
	                        <div class="bg-muted rounded">
	                          <span class="fw-semibold">Parameter 1</span>                                                               
	                        </div>
	                        <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice: </span><span class="mx-1">5</span></div>
	                      </div>
	                      <div class="mx-2 d-inline-flex">
	                        <div class="d-inline-flex">
	                          <span class="fw-semibold">Rate: </span><span class="mx-1">$100.00</span>                                                       
	                        </div>
	                      </div>
	                      <div class="mx-4">
	                        Multiply by service duration
	                      </div>
	                    </div>
	                  </div>
	                  {{-- Phone Expedited Service -End --}}
	                  <div class="row mb-4">
	                    <div class="d-inline-flex">
	                      <div class="d-inline-flex col-3">
	                        <div >
	                          <svg aria-label="Teleconference" width="30" height="26" viewBox="0 0 30 26" fill="none"
	                            xmlns="http://www.w3.org/2000/svg">
	                            <use xlink:href="/css/provider.svg#teleconference"></use>
	                          </svg>
	                        </div>
	                        <div class="mx-2 d-inline-flex">
	                          <div class="text-primary fw-semibold">Teleconference</div>
	                          <div class="mx-2 ">
	                            <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
	                              xmlns="http://www.w3.org/2000/svg">
	                              <use xlink:href="/css/provider.svg#fill-question"></use>
	                            </svg>
	                          </div>
	                        </div>
	                      </div>
	                      <div class="d-inline-flex col-3">
	                        <div class="bg-muted rounded">
	                          <span class="fw-semibold">Parameter 1</span>                                                               
	                        </div>
	                        <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice: </span><span class="mx-1">5</span></div>
	                      </div>
	                      <div class="mx-2 d-inline-flex">
	                        <div class="d-inline-flex">
	                          <span class="fw-semibold">Rate: </span><span class="mx-1">$100.00</span>                                                       
	                        </div>
	                      </div>
	                      <div class="mx-4">
	                        Multiply by service duration
	                      </div>
	                    </div>
	                  </div>
	                  {{-- Teleconference Expedited Service End --}}
	                  <div class="row">
	                    <hr>
	                  </div>
	                  <div class="row">
	                    <div class="d-inline-flex mb-3">
	                      <h2>Specialization Rates</h2>
	                      <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
	                        <path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
	                      </svg>
	                    </div>
	                    <div class="bg-muted p-1 col-1 mx-3 mb-2">Medical</div>
	                    <div class="d-inline-flex">
	                      <div class="mx-2">
	                        <div class="d-inline-flex">
	                          <div>
	                            <span class="fw-semibold">Rate Type:</span> <span>%</span>                                                      
	                          </div>
	                        </div>
	                      </div>
	                      <div class="mx-3">
	                        <div class="d-inline-flex">
	                          <div>
	                            <svg aria-label="In-Person" width="25" height="24" viewBox="0 0 25 24" fill="none"
	                              xmlns="http://www.w3.org/2000/svg">
	                              <use xlink:href="/css/provider.svg#in-person"></use>
	                            </svg>
	                          </div>
	                          <div class="mx-1 mt-1"><span class="fw-semibold">In-Person: </span><span class="mx-1">$100.00</span></div>
	                        </div>
	                      </div>
	                      <div class="mx-3">
	                        <div class="d-inline-flex">
	                          <div>
	                            <svg aria-label="Virtual" width="25" height="25" viewBox="0 0 25 25" fill="none"
	                              xmlns="http://www.w3.org/2000/svg">
	                              <use xlink:href="/css/provider.svg#virtual-service"></use>
	                            </svg>
	                          </div>
	                          <div class="mx-1 mt-1"><span class="fw-semibold">Virtual:</span><span class="mx-1">$100.00</span></div>
	                        </div>
	                      </div>
	                      <div class="mx-3">
	                        <div class="d-inline-flex">
	                          <div>
	                            <svg aria-label="Phone" width="30" height="24" viewBox="0 0 30 24" fill="none"
	                              xmlns="http://www.w3.org/2000/svg">
	                              <use xlink:href="/css/provider.svg#phone"></use>
	                            </svg>
	                          </div>
	                          <div class="mx-1 mt-1"><span class="fw-semibold">Phone:</span><span class="mx-1">$100.00</span></div>
	                        </div>
	                      </div>
	                      <div class="mx-3">
	                        <div class="d-inline-flex">
	                          <div>
	                            <svg aria-label="Teleconference" width="30" height="26" viewBox="0 0 30 26" fill="none"
	                              xmlns="http://www.w3.org/2000/svg">
	                              <use xlink:href="/css/provider.svg#teleconference"></use>
	                            </svg>
	                          </div>
	                          <div class="mx-1 mt-1"><span class="fw-semibold">Teleconferencing:</span><span class="mx-1">$100.00</span></div>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="row mt-4 mb-3">
	                      <div class="col-3 mb-2 mx-1"> 
	                        <span class="bg-muted p-1 mb-3"> Projector & Screen Rental</span>
	                      </div>
	                      <div class="d-inline-flex mt-2">
	                        <div class="mx-2">
	                          <div class="d-inline-flex">
	                            <div>
	                              <span class="fw-semibold"> Rate Type:</span><span>%</span>                                                      
	                            </div>
	                          </div>
	                        </div>
	                        <div class="mx-3">
	                          <div class="d-inline-flex">
	                            <div>
	                              <svg aria-label="In-Person" width="25" height="24" viewBox="0 0 25 24" fill="none"
	                                xmlns="http://www.w3.org/2000/svg">
	                                <use xlink:href="/css/provider.svg#in-person"></use>
	                              </svg>
	                            </div>
	                            <div class="mx-1 mt-1"><span class="fw-semibold">In-Person: </span><span class="mx-1">$100.00</span></div>
	                          </div>
	                        </div>
	                        <div class="mx-3">
	                          <div class="d-inline-flex">
	                            <div>
	                              <svg aria-label="Virtual" width="25" height="25" viewBox="0 0 25 25" fill="none"
	                                xmlns="http://www.w3.org/2000/svg">
	                                <use xlink:href="/css/provider.svg#virtual-service"></use>
	                              </svg>
	                            </div>
	                            <div class="mx-1 mt-1"><span class="fw-semibold">Virtual:</span><span class="mx-1">$100.00</span></div>
	                          </div>
	                        </div>
	                        <div class="mx-3">
	                          <div class="d-inline-flex">
	                            <div>
	                              <svg aria-label="Phone" width="30" height="24" viewBox="0 0 30 24" fill="none"
	                                xmlns="http://www.w3.org/2000/svg">
	                                <use xlink:href="/css/provider.svg#phone"></use>
	                              </svg>
	                            </div>
	                            <div class="mx-1 mt-1"><span class="fw-semibold">Phone:</span><span class="mx-1">$100.00</span></div>
	                          </div>
	                        </div>
	                        <div class="mx-3">
	                          <div class="d-inline-flex">
	                            <div>
	                              <svg aria-label="Teleconference" width="30" height="26" viewBox="0 0 30 26" fill="none"
	                                xmlns="http://www.w3.org/2000/svg">
	                                <use xlink:href="/css/provider.svg#teleconference"></use>
	                              </svg>
	                            </div>
	                            <div class="mx-1 mt-1"><span class="fw-semibold">Teleconferencing:</span><span class="mx-1">$100.00</span></div>
	                          </div>
	                        </div>
	                      </div>
	                    </div>
	                    <hr>
	                  </div>
	                  {{-- Specialization Rates -End --}}
	                </div>
	              </div>
	            </div>
            </div>
            <!-- END: Sign Language Interpreting Services -->
              {{-- First accommodation -End --}}
              <div class="row">
                <div class="mb-3 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#accomodation-four" aria-expanded="false" aria-controls="accomodation-four">
                  Spoken Language Interpreting Services
                  <svg class="icon-arrow-bottom ms-5" width="32" height="15" viewBox="0 0 32 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.5957 0.573599C30.1577 0.206324 29.5638 -6.46638e-08 28.9445 -8.80044e-08C28.3252 -1.11345e-07 27.7312 0.206324 27.2933 0.573598L15.7323 10.2711L4.17133 0.573598C3.73084 0.216732 3.14088 0.0192642 2.52851 0.0237278C1.91613 0.0281915 1.33035 0.234228 0.89732 0.597462C0.46429 0.960695 0.218662 1.45206 0.213341 1.96573C0.208019 2.4794 0.443431 2.97427 0.86887 3.34377L14.0811 14.4264C14.519 14.7937 15.113 15 15.7323 15C16.3516 15 16.9455 14.7937 17.3835 14.4264L30.5957 3.34377C31.0336 2.97638 31.2795 2.47817 31.2795 1.95868C31.2795 1.4392 31.0336 0.940984 30.5957 0.573599Z" fill="#575656"/>
                  </svg>
                </div>
                <div class="collapse" id="accomodation-four">
                  <div class="row">
                    <div class="d-inline-flex mb-4">
                      <h2>Standard Rates</h2>
                      <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
                      </svg>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-4">
                        <div class="d-inline-flex">
                          <div>
                            <svg aria-label="In-Person" width="25" height="24" viewBox="0 0 25 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <use xlink:href="/css/provider.svg#in-person"></use>
                            </svg>
                          </div>
                          <div class="mx-3 fw-semibold">Day Rate In-person:</div>
                          <div class="mx-3">$101.00</div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="d-inline-flex">
                          <div>
                            <svg aria-label="Virtual" width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <use xlink:href="/css/provider.svg#virtual-service"></use>
                            </svg>
                          </div>
                          <div class="mx-3 fw-semibold">Day Rate Virtual:</div>
                          <div class="mx-3">$101.00</div>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-4">
                        <div class="d-inline-flex">
                          <div>
                            <svg aria-label="Phone" width="30" height="24" viewBox="0 0 30 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <use xlink:href="/css/provider.svg#phone"></use>
                            </svg>
                          </div>
                          <div class="mx-3 fw-semibold">Day Rate Phone:</div>
                          <div class="mx-3">$101.00</div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="d-inline-flex">
                          <div>
                            <svg aria-label="Teleconference" width="30" height="26" viewBox="0 0 30 26" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <use xlink:href="/css/provider.svg#teleconference"></use>
                            </svg>
                          </div>
                          <div class="mx-3 fw-semibold">Day Rate Teleconference:</div>
                          <div class="mx-3">$101.00</div>
                        </div>
                      </div>
                    </div>
                    <hr>
                  </div>
                  {{-- Standandard Rates -End --}}
                  {{-- InPerson Expedited Service -Start --}}
                  <div class="row">
                    <div class="d-inline-flex mb-4">
                      <h2>Expedited Hours </h2>
                      <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
                      </svg>
                    </div>
                    <div class="row mb-3">
                      <div class="d-inline-flex">
                        <div class="d-inline-flex col-3">
                          <div >
                            <svg aria-label="In-Person" width="25" height="24" viewBox="0 0 25 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <use xlink:href="/css/provider.svg#in-person"></use>
                            </svg>
                          </div>
                          <div class="mx-2 d-inline-flex">
                            <div class="text-primary fw-semibold">In-person</div>
                            <div class="mx-2 ">
                              <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/provider.svg#fill-question"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="d-inline-flex col-3">
                          <div class="bg-muted rounded">
                            <span class="fw-semibold">Parameter 1</span>                                                               
                          </div>
                          <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice: </span><span class="mx-1">5</span></div>
                        </div>
                        <div class="mx-2 d-inline-flex">
                          <div class="d-inline-flex">
                            <span class="fw-semibold">Rate: </span><span class="mx-1">$100.00</span>                                                       
                          </div>
                        </div>
                        <div class="mx-4">
                          Multiply by service duration
                        </div>
                      </div>
                    </div>
                    {{-- InPerson Expedited Service -End --}}
                    <div class="row mb-3">
                      <div class="d-inline-flex">
                        <div class="d-inline-flex col-3">
                          <div >
                            <svg aria-label="Virtual" width="25" height="25" viewBox="0 0 25 25" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <use xlink:href="/css/provider.svg#virtual-service"></use>
                            </svg>
                          </div>
                          <div class="mx-2 d-inline-flex">
                            <div class="text-primary fw-semibold">Virtual</div>
                            <div class="mx-2 ">
                              <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/provider.svg#fill-question"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="d-inline-flex col-3">
                          <div class="bg-muted rounded">
                            <span class="fw-semibold">Parameter 1</span>                                                               
                          </div>
                          <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice: </span><span class="mx-1">5</span></div>
                        </div>
                        <div class="mx-2 d-inline-flex">
                          <div class="d-inline-flex">
                            <span class="fw-semibold">Rate: </span><span class="mx-1">$100.00</span>                                                       
                          </div>
                        </div>
                        <div class="mx-4">
                          Multiply by service duration
                        </div>
                      </div>
                    </div>
                    {{-- Virtual Expedited service End --}}
                    <div class="row mb-3">
                      <div class="d-inline-flex">
                        <div class="d-inline-flex col-3">
                          <div >
                            <svg aria-label="Phone" width="30" height="24" viewBox="0 0 30 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <use xlink:href="/css/provider.svg#phone"></use>
                            </svg>
                          </div>
                          <div class="mx-2 d-inline-flex">
                            <div class="text-primary fw-bold">Phone</div>
                            <div class="mx-2 ">
                              <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/provider.svg#fill-question"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="d-inline-flex col-3">
                          <div class="bg-muted rounded">
                            <span class="fw-semibold">Parameter 1</span>                                                               
                          </div>
                          <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice: </span><span class="mx-1">5</span></div>
                        </div>
                        <div class="mx-2 d-inline-flex">
                          <div class="d-inline-flex">
                            <span class="fw-semibold">Rate: </span><span class="mx-1">$100.00</span>                                                       
                          </div>
                        </div>
                        <div class="mx-4">
                          Multiply by service duration
                        </div>
                      </div>
                    </div>
                    {{-- Phone Expedited Service -End --}}
                    <div class="row mb-4">
                      <div class="d-inline-flex">
                        <div class="d-inline-flex col-3">
                          <div >
                            <svg aria-label="Teleconference" width="30" height="26" viewBox="0 0 30 26" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <use xlink:href="/css/provider.svg#teleconference"></use>
                            </svg>
                          </div>
                          <div class="mx-2 d-inline-flex">
                            <div class="text-primary fw-bold">Teleconference</div>
                            <div class="mx-2 ">
                              <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/provider.svg#fill-question"></use>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div class="d-inline-flex col-3">
                          <div class="bg-muted rounded">
                            <span class="fw-semibold">Parameter 1</span>                                                               
                          </div>
                          <div class="mx-3 mt-1"><span class="fw-semibold">Hours Notice: </span><span class="mx-1">5</span></div>
                        </div>
                        <div class="mx-2 d-inline-flex">
                          <div class="d-inline-flex">
                            <span class="fw-semibold">Rate: </span><span class="mx-1">$100.00</span>                                                       
                          </div>
                        </div>
                        <div class="mx-4">
                          Multiply by service duration
                        </div>
                      </div>
                    </div>
                    {{-- Teleconference Expedited Service End --}}
                    <div class="row">
                      <hr>
                    </div>
                    <div class="row">
                      <div class="d-inline-flex mb-3">
                        <h2>Specialization Rates</h2>
                        <svg class="mx-2 mt-2" width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M7.5 0.792969C3.3645 0.792969 0 4.15747 0 8.29297C0 12.4285 3.3645 15.793 7.5 15.793C11.6355 15.793 15 12.4285 15 8.29297C15 4.15747 11.6355 0.792969 7.5 0.792969ZM8.25 12.793H6.75V11.293H8.25V12.793ZM8.982 9.12922C8.835 9.24772 8.69325 9.36097 8.58075 9.47347C8.27475 9.77872 8.25075 10.0562 8.25 10.0682V10.168H6.75V10.0427C6.75 9.95422 6.77175 9.15997 7.5195 8.41222C7.66575 8.26597 7.84725 8.11747 8.03775 7.96297C8.58825 7.51672 8.94975 7.19122 8.94975 6.74272C8.94104 6.36383 8.78438 6.00341 8.5133 5.73856C8.24222 5.47371 7.87824 5.32547 7.49926 5.32557C7.12027 5.32567 6.75638 5.47409 6.48543 5.73908C6.21449 6.00407 6.05802 6.36458 6.0495 6.74347H4.5495C4.5495 5.11672 5.87325 3.79297 7.5 3.79297C9.12675 3.79297 10.4505 5.11672 10.4505 6.74347C10.4505 7.94122 9.56625 8.65597 8.982 9.12922Z" fill="#888575"/>
                        </svg>
                      </div>
                      <div class="bg-muted p-1 col-1 mx-3 mb-2">Medical</div>
                      <div class="d-inline-flex">
                        <div class="mx-2">
                          <div class="d-inline-flex">
                            <div>
                              <span class="fw-semibold">Rate Type:</span> <span>%</span>                                                      
                            </div>
                          </div>
                        </div>
                        <div class="mx-3">
                          <div class="d-inline-flex">
                            <div>
                              <svg aria-label="In-Person" width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/provider.svg#in-person"></use>
                              </svg>
                            </div>
                            <div class="mx-1 mt-1"><span class="fw-semibold">In-Person: </span><span class="mx-1">$100.00</span></div>
                          </div>
                        </div>
                        <div class="mx-3">
                          <div class="d-inline-flex">
                            <div>
                              <svg aria-label="Virtual" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/provider.svg#virtual-service"></use>
                              </svg>
                            </div>
                            <div class="mx-1 mt-1"><span class="fw-semibold">Virtual:</span><span class="mx-1">$100.00</span></div>
                          </div>
                        </div>
                        <div class="mx-3">
                          <div class="d-inline-flex">
                            <div>
                              <svg aria-label="Phone" width="30" height="24" viewBox="0 0 30 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/provider.svg#phone"></use>
                              </svg>
                            </div>
                            <div class="mx-1 mt-1"><span class="fw-semibold">Phone:</span><span class="mx-1">$100.00</span></div>
                          </div>
                        </div>
                        <div class="mx-3">
                          <div class="d-inline-flex">
                            <div>
                              <svg aria-label="Teleconference" width="30" height="26" viewBox="0 0 30 26" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="/css/provider.svg#teleconference"></use>
                              </svg>
                            </div>
                            <div class="mx-1 mt-1"><span class="fw-semibold">Teleconferencing:</span><span class="mx-1">$100.00</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-4 mb-3">
                        <div class="col-3 mb-2 mx-1"> 
                          <span class="bg-muted p-1 mb-3"> Projector & Screen Rental</span>
                        </div>
                        <div class="d-inline-flex mt-2">
                          <div class="mx-2">
                            <div class="d-inline-flex">
                              <div>
                                <span class="fw-semibold"> Rate Type:</span><span>%</span>                                                      
                              </div>
                            </div>
                          </div>
                          <div class="mx-3">
                            <div class="d-inline-flex">
                              <div>
                                <svg aria-label="In-Person" width="25" height="24" viewBox="0 0 25 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <use xlink:href="/css/provider.svg#in-person"></use>
                                </svg>
                              </div>
                              <div class="mx-1 mt-1"><span class="fw-semibold">In-Person: </span><span class="mx-1">$100.00</span></div>
                            </div>
                          </div>
                          <div class="mx-3">
                            <div class="d-inline-flex">
                              <div>
                                <svg aria-label="Virtual" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <use xlink:href="/css/provider.svg#virtual-service"></use>
                                </svg>
                              </div>
                              <div class="mx-1 mt-1"><span class="fw-semibold">Virtual:</span><span class="mx-1">$100.00</span></div>
                            </div>
                          </div>
                          <div class="mx-3">
                            <div class="d-inline-flex">
                              <div>
                                <svg aria-label="Phone" width="30" height="24" viewBox="0 0 30 24" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <use xlink:href="/css/provider.svg#phone"></use>
                                </svg>
                              </div>
                              <div class="mx-1 mt-1"><span class="fw-semibold">Phone:</span><span class="mx-1">$100.00</span></div>
                            </div>
                          </div>
                          <div class="mx-3">
                            <div class="d-inline-flex">
                              <div>
                                <svg aria-label="Teleconference" width="30" height="26" viewBox="0 0 30 26" fill="none"
                                  xmlns="http://www.w3.org/2000/svg">
                                  <use xlink:href="/css/provider.svg#teleconference"></use>
                                </svg>
                              </div>
                              <div class="mx-1 mt-1"><span class="fw-semibold">Teleconferencing:</span><span class="mx-1">$100.00</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </div>
                    {{-- Specialization Rates -End --}}
                  </div>
                </div>
              </div>
              {{-- Accommodation two -End --}}  
              <div class="col-12 justify-content-center form-actions d-flex gap-3">
                <button type="button" class="btn btn-outline-dark rounded" x-on:click="$wire.switch('profile')">
                Cancel
                </button>
                <button type="button" class="btn btn-primary rounded" x-on:click="$wire.switch('profile')">
                Save
                </button>
              </div>
          </section>
          </div>
          {{-- END: Service Catalog--}}
        </div>
      </div>
    </div>
  </div>
</div>