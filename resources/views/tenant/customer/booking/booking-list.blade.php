@extends('layouts.tenant')

@section('content')
{{-- BEGIN: Content --}}
<div class="content-header row">
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h1 class="content-header-title float-start mb-0">
                    {{ $bookingType }} Services
                </h1>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg aria-label="Home" width="22" height="23"viewBox="0 0 22 23" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#home"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">
                                Services
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            {{ $bookingType }} Services
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-lg-flex mt-5">
    <div class="col-lg-9 mb-4">
        <p>Here you can see the services you're scheduled for {{ $bookingType }}.</p>
    </div>
    <div class="col-lg-3 mb-4">
        <a href="/customer/booking/booknow" class="btn btn-primary rounded btn-sm">
            Submit Service Request
        </a>
    </div>

</div>
<div class="bg-muted rounded p-4 mb-5">
    <div class="d-flex gap-5 align-items-center">
      <div class="mb-4 mb-lg-0">
        <label class="form-label-sm">Search</label>
        <div class="d-flex gap-2 align-items-center">
          <div class="position-relative">
            <input type="text" class="form-control form-control-md is-search" id="search" aria-describedby="search" placeholder="Customer Name or Email">
            <svg class="icon-search position-absolute" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <path d="M290 323.515733a25.6 25.6 0 1 1 36.181334-36.181333l408.234666 408.234667a25.6 25.6 0 1 1-36.181333 36.181333l-408.234667-408.234667z" fill="#ffffff" />
              <path d="M320.365867 731.7504a25.6 25.6 0 1 1-36.181334-36.181333l408.234667-408.234667a25.6 25.6 0 1 1 36.181333 36.181333l-408.234666 408.234667z" fill="#ffffff" />
            </svg>
          </div>
          <button class="btn btn-secondary rounded btn-sm btn-hs-icon">
            <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.0043 14.977C18.5005 14.5284 18.01 14.0669 17.5336 13.593C17.1334 13.215 16.8924 12.94 16.8924 12.94L13.88 11.603C15.086 10.3316 15.7517 8.69499 15.752 7C15.752 3.141 12.3738 0 8.22098 0C4.06815 0 0.689941 3.141 0.689941 7C0.689941 10.859 4.06815 14 8.22098 14C10.1177 14 11.8466 13.34 13.1732 12.261L14.6116 15.061C14.6116 15.061 14.9075 15.285 15.3141 15.657C15.7305 16.02 16.2781 16.511 16.8031 17.024L18.2641 18.416L18.914 19.062L21.1959 16.941L20.5009 16.337C20.0931 15.965 19.5487 15.471 19.0043 14.977V14.977ZM8.22098 12C5.25482 12 2.84167 9.757 2.84167 7C2.84167 4.243 5.25482 2 8.22098 2C11.1871 2 13.6003 4.243 13.6003 7C13.6003 9.757 11.1871 12 8.22098 12Z" fill="black"/>
            </svg>
          </button>
        </div>
      </div>
      <div class="mb-4 mb-lg-0">
        <label class="form-label-sm">Date Range</label>
        <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
          <svg class="icon-date md left cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
          </svg>
          <input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
        </div>
      </div>
      <div class="mb-4 mb-lg-0">
        <label class="form-label-sm">Scheduled Payment</label>
        <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
          <svg class="icon-date md left cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
          </svg>
          <input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
        </div>
      </div>
      <div class="d-flex gap-3 align-items-center">
        <div class="mb-4 mb-lg-0">
          <select class="form-select form-select-sm rounded bg-secondary text-white rounded" aria-label="Advance Filter" id="show_status">
            <option>Advance Filter</option>
          </select>
        </div>
        <div class="mb-4 mb-lg-0">
          <button type="button" class="btn btn-xs bg-white btn-outline-dark rounded">Clear all</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Filters -->
  <div class="d-flex justify-content-end mb-2">

    <div class="d-inline-flex align-items-end gap-4">
      <a href="" class="btn btn-success btn-has-icon">
        Export
        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.534 1.36L13.309 0H3.662C2.966 0 2.697 0.516 2.697 0.919V4.549H4.05V1.653C4.05 1.499 4.18 1.369 4.33 1.369H11.233C11.385 1.369 11.461 1.396 11.461 1.521V6.341H16.374C16.567 6.341 16.642 6.441 16.642 6.587V18.357C16.642 18.603 16.542 18.64 16.392 18.64H4.33C4.25562 18.6382 4.18485 18.6076 4.13261 18.5546C4.08037 18.5016 4.05076 18.4304 4.05 18.356V17.28H2.706V18.975C2.688 19.575 3.008 20 3.662 20H17.06C17.76 20 17.999 19.493 17.999 19.031V5.187L17.649 4.807L14.533 1.361L14.534 1.36ZM12.836 1.52L13.223 1.954L15.819 4.807L15.962 4.98H13.309C13.109 4.98 12.982 4.947 12.929 4.88C12.876 4.815 12.845 4.71 12.836 4.567V1.52ZM11.746 10.667H16.323V12.001H11.745V10.667H11.746ZM11.746 8.001H16.323V9.334H11.745V8L11.746 8.001ZM11.746 13.334H16.323V14.668H11.745V13.334H11.746ZM0 5.626V16.293H10.465V5.626H0ZM5.233 11.83L4.593 12.808H5.233V14H2.016L4.35 10.49L2.282 7.334H4.01L5.234 9.17L6.457 7.334H8.184L6.112 10.49L8.449 14H6.656L5.233 11.83Z" fill="white"/>
        </svg>
      </a>
      <a href="" class="btn btn-warning btn-has-icon">
        Export
        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18 17.5V5.625L11.25 0H3C2.20435 0 1.44129 0.263392 0.87868 0.732233C0.31607 1.20107 0 1.83696 0 2.5V17.5C0 18.163 0.31607 18.7989 0.87868 19.2678C1.44129 19.7366 2.20435 20 3 20H15C15.7956 20 16.5587 19.7366 17.1213 19.2678C17.6839 18.7989 18 18.163 18 17.5ZM11.25 3.75C11.25 4.24728 11.4871 4.72419 11.909 5.07583C12.331 5.42746 12.9033 5.625 13.5 5.625H16.5V17.5C16.5 17.8315 16.342 18.1495 16.0607 18.3839C15.7794 18.6183 15.3978 18.75 15 18.75H3C2.60218 18.75 2.22064 18.6183 1.93934 18.3839C1.65804 18.1495 1.5 17.8315 1.5 17.5V2.5C1.5 2.16848 1.65804 1.85054 1.93934 1.61612C2.22064 1.3817 2.60218 1.25 3 1.25H11.25V3.75Z" fill="white"/>
          <path d="M3.90426 17.6066C3.6119 17.5092 3.37635 17.321 3.24726 17.0816C2.95476 16.5966 3.05226 16.1116 3.36726 15.7041C3.66426 15.3204 4.15626 14.9941 4.71276 14.7204C5.41767 14.3872 6.16279 14.117 6.93576 13.9141C7.53605 13.0149 8.06809 12.0851 8.52876 11.1304C8.25333 10.6088 8.03738 10.0669 7.88376 9.51162C7.75476 9.01162 7.70526 8.51662 7.81476 8.09162C7.92726 7.64912 8.22576 7.25162 8.78976 7.06287C9.07776 6.96662 9.38976 6.91287 9.69276 6.96662C9.84517 6.99366 9.98846 7.04863 10.1122 7.12755C10.236 7.20646 10.3371 7.30734 10.4083 7.42287C10.5403 7.62787 10.5883 7.86787 10.5988 8.09537C10.6093 8.33037 10.5808 8.59037 10.5283 8.86287C10.4023 9.50037 10.1233 10.2804 9.74826 11.1054C10.1621 11.8429 10.654 12.5482 11.2183 13.2129C11.8859 13.1689 12.5574 13.1899 13.2193 13.2754C13.7653 13.3579 14.3203 13.5191 14.6593 13.8566C14.8393 14.0366 14.9488 14.2566 14.9593 14.5041C14.9698 14.7441 14.8888 14.9816 14.7523 15.2079C14.634 15.4175 14.4507 15.5971 14.2213 15.7279C13.9945 15.8512 13.7267 15.9115 13.4563 15.9004C12.9598 15.8829 12.4753 15.6554 12.0568 15.3791C11.5479 15.0285 11.0893 14.63 10.6903 14.1916C9.67589 14.2876 8.67356 14.4574 7.69476 14.6991C7.24653 15.3616 6.73487 15.9928 6.16476 16.5866C5.72676 17.0241 5.25126 17.4066 4.77426 17.5704C4.50019 17.6737 4.18933 17.6866 3.90426 17.6066ZM5.97276 15.2304C5.72376 15.3254 5.49276 15.4254 5.28426 15.5279C4.79226 15.7704 4.47276 16.0066 4.31376 16.2116C4.17276 16.3929 4.16976 16.5241 4.25376 16.6629C4.26876 16.6904 4.28376 16.7079 4.29276 16.7179C4.31066 16.7139 4.3282 16.7089 4.34526 16.7029C4.55076 16.6329 4.87776 16.4091 5.29776 15.9879C5.53663 15.7442 5.76187 15.4914 5.97276 15.2304ZM8.43276 13.5679C8.93365 13.4705 9.43906 13.39 9.94776 13.3266C9.67464 12.9783 9.4194 12.6205 9.18276 12.2541C8.94749 12.6974 8.69739 13.135 8.43276 13.5666V13.5679ZM12.1018 14.1304C12.3268 14.3341 12.5458 14.5054 12.7543 14.6429C13.1143 14.8804 13.3648 14.9591 13.5013 14.9629C13.5378 14.9669 13.5749 14.9602 13.6063 14.9441C13.6687 14.9031 13.7172 14.8492 13.7473 14.7879C13.8006 14.7117 13.831 14.6259 13.8358 14.5379C13.8349 14.5085 13.821 14.4804 13.7968 14.4591C13.7188 14.3816 13.4968 14.2691 13.0198 14.1979C12.7163 14.1556 12.4094 14.1334 12.1018 14.1316V14.1304ZM9.11676 9.74787C9.243 9.40852 9.3432 9.06282 9.41676 8.71287C9.46326 8.47787 9.48126 8.28412 9.47376 8.13162C9.47417 8.04748 9.45796 7.96387 9.42576 7.88412C9.35072 7.89186 9.27745 7.90871 9.20826 7.93412C9.07776 7.97787 8.97126 8.06662 8.91426 8.28787C8.85426 8.52787 8.86926 8.87412 8.98326 9.31537C9.01926 9.45412 9.06426 9.59912 9.11826 9.74787H9.11676Z" fill="white"/>
        </svg>
      </a>
    </div>
  </div>
@livewire('app.common.bookings.booking-list', ['bookingType'=>$bookingType])
{{-- End: Content --}}
@endsection