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
                                    <svg aria-label="Home" width="22" height="23"viewBox="0 0 22 23" fill="currentColor" stroke="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="/css/sprite.svg#home"></use>
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


    {{-- <div class="bg-muted rounded p-4 mb-5">
        <div class="d-flex gap-5 align-items-center mb-4">
            <div class="mb-4 mb-lg-0">
                <label class="form-label-sm" for="search-column">Search</label>
                <div class="d-flex gap-2 align-items-center">
                    <div class="position-relative">
                        <input type="text" class="form-control form-control-md is-search" id="search-column"
                            aria-describedby="search" placeholder="Customer Name or Email">
                        <svg aria-label="Cancel" class="icon-search position-absolute" viewBox="0 0 1024 1024"
                            version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M290 323.515733a25.6 25.6 0 1 1 36.181334-36.181333l408.234666 408.234667a25.6 25.6 0 1 1-36.181333 36.181333l-408.234667-408.234667z"
                                fill="#ffffff" />
                            <path
                                d="M320.365867 731.7504a25.6 25.6 0 1 1-36.181334-36.181333l408.234667-408.234667a25.6 25.6 0 1 1 36.181333 36.181333l-408.234666 408.234667z"
                                fill="#ffffff" />
                        </svg>
                    </div>
                    <button aria-label="Search" class="btn btn-secondary rounded btn-sm btn-hs-icon">
                        <svg aria-label="Search" width="22" height="20" viewBox="0 0 22 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.0043 14.977C18.5005 14.5284 18.01 14.0669 17.5336 13.593C17.1334 13.215 16.8924 12.94 16.8924 12.94L13.88 11.603C15.086 10.3316 15.7517 8.69499 15.752 7C15.752 3.141 12.3738 0 8.22098 0C4.06815 0 0.689941 3.141 0.689941 7C0.689941 10.859 4.06815 14 8.22098 14C10.1177 14 11.8466 13.34 13.1732 12.261L14.6116 15.061C14.6116 15.061 14.9075 15.285 15.3141 15.657C15.7305 16.02 16.2781 16.511 16.8031 17.024L18.2641 18.416L18.914 19.062L21.1959 16.941L20.5009 16.337C20.0931 15.965 19.5487 15.471 19.0043 14.977V14.977ZM8.22098 12C5.25482 12 2.84167 9.757 2.84167 7C2.84167 4.243 5.25482 2 8.22098 2C11.1871 2 13.6003 4.243 13.6003 7C13.6003 9.757 11.1871 12 8.22098 12Z"
                                fill="black" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="mb-4 mb-lg-0">
                <label class="form-label-sm">Date Range</label>
                <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                    <svg aria-label="Select Date" class="icon-date md left cursor-pointer" width="20" height="20"
                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                            fill="black" />
                    </svg>
                    <input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY"
                        name="selectDate" aria-label="Select Date">
                </div>
            </div>
            <div class="mb-4 mb-lg-0">
                <label class="form-label-sm">Scheduled Payment</label>
                <div class="mb-4 mb-lg-0 position-relative has-date-icon-left-side">
                    <svg aria-label="Start Date" class="icon-date md left cursor-pointer" width="20" height="20"
                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                            fill="black" />
                    </svg>
                    <input type="" class="form-control form-control-md js-single-date" placeholder="MM/DD/YYYY"
                        name="selectDate" aria-label="Select Date">
                </div>
            </div>

        </div>
    </div> --}}
    <!-- Filters -->

    @livewire('app.common.bookings.booking-list', ['bookingType' => $bookingType, 'bookingSection' => 'customer', 'showHeader' => true, 'isCustomer' => true])
    {{-- End: Content --}}
@endsection
