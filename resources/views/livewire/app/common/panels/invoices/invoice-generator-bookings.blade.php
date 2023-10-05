    <div>
        <div class="row mb-lg-4">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{ $company->company_logo ? $company->company_logo : '/tenant-resources/images/portrait/small/image.png' }}"
                            width="130" height="130" class="rounded-circle" alt="Company Image">
                    </div>
                    <div class="col-lg-8 align-self-center">
                        <div class="mb-2">
                            <label class="form-label mb-0">Company Name:</label>
                            <div class="text-xs"><small>{{ $company->name }}</small></div>
                        </div>
                        {{-- <div>
                            <label class="form-label mb-0">Email:</label>
                            <div><a class="text-xs text-dark"><small>examplecompany@gmail.com</small></a></div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 align-self-center">
                <div class="mb-2">
                    <label class="form-label mb-0">Phone Number:</label>
                    <div wire:ignore class="text-xs">
                        <small>{{ $company->phones->count() ? $company->phones->first()->phone_number : 'N/A' }}</small>
                    </div>
                </div>
                <div>
                    <label class="form-label mb-0">Address:</label>
                    <div wire:ignore><a class="text-xs text-dark"><small>
                                @if (isset($company->address))
                                    {{ $company->address['address_line1'] . ', ' . $company->address['address_line2'] . ',' . $company->address['city'] . ', ' . $company->address['state'] . ', ' . $company->address['country'] }}
                                @else
                                    N/A
                                @endif
                            </small></a></div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 align-self-center">
                <small>(coming soon)</small>

                <div class="d-grid grid-cols-2 gap-2">
                    <div class="fw-semibold text-sm">Total Paid:</div>
                    <div class="text-sm">$3000</div>
                    <div class="fw-semibold text-sm">Pending Payment:</div>
                    <div class="text-sm">$1500</div>
                    <div class="fw-semibold text-sm">Overdue Payment:</div>
                    <div class="text-sm">$500</div>
                </div>
            </div>
        </div>
        <!-- Hoverable rows start -->
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="table-responsive border mb-4">
                    <table id="" class="table table-fs-md table-hover" aria-label="">
                        <thead>
                            <tr role="row">
                                <th scope="col" class="text-center">
                                    <input class="form-check-input" type="checkbox" wire:model.defer="selectAll"
                                        wire:click="updateSelectAll" aria-label="Select All Booking">
                                </th>
                                <th scope="col" width="12%" class="">Booking ID</th>
                                <th scope="col">Accommodation</th>
                                <th>No. of Providers</th>
                                <th scope="col">Total Additional Charges</th>
                                <th scope="col" class="">Total Service<br>Rate</th>
                                <th scope="col">Booking Total</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- updated by shanila to remove extra rows --}}
                            {{-- <tr role="row" class="odd">
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value=""
                                    aria-label="Select Booking">
                            </td>
                            <td>
                                <div class="fw-semibold" data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="<div><b>Billing Notes</b></div> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet</p>">
                                    100995-6</div>
                                <div>
                                    <div>08/24/2022</div>
                                    <div>9:59 AM to 4:22 PM</div>
                                </div>
                            </td>
                            <td>
                                <div class="text-sm">
                                    Shelby Sign Language
                                </div>
                                <div class="text-sm">
                                    Service: Language interpreting
                                </div>
                                <div class="text-sm">
                                    Specialization: Closed-Captioning
                                </div>
                            </td>
                            <td>10</td>
                            <td class="position-relative">
                                <a href="#" title="Save" aria-label="Save"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon icon-save position-absolute">
                                    <svg aria-label="Save" width="17" height="17" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.6026 3.85262L13.1474 0.397375C12.988 0.238 12.7925 0.121125 12.58 0.0573749V0H0.68C0.303875 0 0 0.303875 0 0.68V16.32C0 16.6961 0.303875 17 0.68 17H16.32C16.6961 17 17 16.6961 17 16.32V4.81313C17 4.45188 16.8576 4.10763 16.6026 3.85262ZM5.78 1.53H11.22V3.74H5.78V1.53ZM15.47 15.47H1.53V1.53H4.42V4.42C4.42 4.79612 4.72388 5.1 5.1 5.1H11.9C12.2761 5.1 12.58 4.79612 12.58 4.42V1.99325L15.47 4.88325V15.47ZM8.5 7.0125C6.81063 7.0125 5.44 8.38313 5.44 10.0725C5.44 11.7619 6.81063 13.1325 8.5 13.1325C10.1894 13.1325 11.56 11.7619 11.56 10.0725C11.56 8.38313 10.1894 7.0125 8.5 7.0125ZM8.5 11.7725C7.56075 11.7725 6.8 11.0118 6.8 10.0725C6.8 9.13325 7.56075 8.3725 8.5 8.3725C9.43925 8.3725 10.2 9.13325 10.2 10.0725C10.2 11.0118 9.43925 11.7725 8.5 11.7725Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <div class="">$20.00</div>
                                <div class="text-primary mb-2"><small>Additional Charges: </small></div>
                                <div class="d-flex flex-column gap-1">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="col-7">Fuel Charges:</div>
                                        <div class="col-2">
                                            <input type="" name=""
                                                class="form-control form-control-xs text-center"
                                                aria-label="Fuel Charges" value="20">
                                        </div>
                                        <div>
                                            <svg aria-label="Delete" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                                    fill="#888575" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="" aria-label="Fuel Charges Checkbox" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="col-7">Food:</div>
                                        <div class="col-2">
                                            <input type="" name=""
                                                class="form-control form-control-xs text-center" aria-label="Food"
                                                value="15">
                                        </div>
                                        <div>
                                            <svg aria-label="Delete" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                                    fill="#888575" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox"
                                                    aria-label="Food checkbox" value="" id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-xxs rounded btn-has-icon">
                                            <svg aria-label="Add New" width="14" height="14"
                                                viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                    fill="white"></path>
                                            </svg>
                                            Add New
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="position-relative">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <label class="form-label-sm mb-0" for="duration">Duration:</label>
                                    <input type="" name=""
                                        class="form-control form-control-xs form-control-max-w-xs text-center"
                                        value="5" aria-label="Duration in hour"> h
                                    <input type="" name=""
                                        class="form-control form-control-xs form-control-max-w-xs text-center"
                                        value="5" aria-label="Duration in minute"> m
                                    <a href="#" title="Save" aria-label="Save"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon icon-save">
                                        <svg aria-label="save" width="12" height="12" viewBox="0 0 17 17"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.6026 3.85262L13.1474 0.397375C12.988 0.238 12.7925 0.121125 12.58 0.0573749V0H0.68C0.303875 0 0 0.303875 0 0.68V16.32C0 16.6961 0.303875 17 0.68 17H16.32C16.6961 17 17 16.6961 17 16.32V4.81313C17 4.45188 16.8576 4.10763 16.6026 3.85262ZM5.78 1.53H11.22V3.74H5.78V1.53ZM15.47 15.47H1.53V1.53H4.42V4.42C4.42 4.79612 4.72388 5.1 5.1 5.1H11.9C12.2761 5.1 12.58 4.79612 12.58 4.42V1.99325L15.47 4.88325V15.47ZM8.5 7.0125C6.81063 7.0125 5.44 8.38313 5.44 10.0725C5.44 11.7619 6.81063 13.1325 8.5 13.1325C10.1894 13.1325 11.56 11.7619 11.56 10.0725C11.56 8.38313 10.1894 7.0125 8.5 7.0125ZM8.5 11.7725C7.56075 11.7725 6.8 11.0118 6.8 10.0725C6.8 9.13325 7.56075 8.3725 8.5 8.3725C9.43925 8.3725 10.2 9.13325 10.2 10.0725C10.2 11.0118 9.43925 11.7725 8.5 11.7725Z"
                                                fill="black" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-4"><label class="form-label-sm mb-0">Avg Rate:</label></div>
                                    <div class="col-8 d-flex align-items-center gap-2"><input
                                            aria-label="Average Rate" type="" name=""
                                            class="form-control form-control-xs form-control-max-w-xs text-center"
                                            value="5"> $</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-4"><label class="form-label-sm mb-0">Total Rate:</label></div>
                                    <div class="col-8 d-flex align-items-center gap-2"><input aria-label="Total Rate"
                                            type="" name=""
                                            class="form-control form-control-xs form-control-max-w-xs text-center"
                                            value="5"> $</div>
                                </div>
                                <div class="text-sm text-primary mb-1">Discount:</div>
                                <div class="d-inline-flex align-items-center mb-1">
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control form-control-xs text-center form-control-max-w-xs"
                                                aria-label="Discount Amount" placeholder="20" aria-label=""
                                                aria-describedby="">
                                            <select class="form-select form-select-sm" aria-label="discount type"
                                                id="">
                                                <option>$</option>
                                                <option>%</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mx-1">
                                        <svg aria-label="Delete" width="16" height="16" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                                fill="#888575" />
                                        </svg>
                                    </div>
                                </div>
                                <hr class="my-2">
                                <div class="grand-total">
                                    Grand Total: $120.00
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-1">
                                    $155.00
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions justify-content-center">
                                    <a href="#" title="View" aria-label="View"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="View" width="20" height="20" viewBox="0 0 20 20">
                                            <use xlink:href="/css/common-icons.svg#view">
                                            </use>
                                        </svg>
                                    </a>
                                    <div class="dropdown ac-cstm">
                                        <a href="javascript:void(0)"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle"
                                            aria-label="Action Dropdown" data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside"
                                            data-bs-popper-config="{&quot;strategy&quot;:&quot;fixed&quot;}">
                                            <svg aria-label="More Options" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 4.0625C10.5178 4.0625 10.9375 3.64277 10.9375 3.125C10.9375 2.60723 10.5178 2.1875 10 2.1875C9.48223 2.1875 9.0625 2.60723 9.0625 3.125C9.0625 3.64277 9.48223 4.0625 10 4.0625Z"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M10 10.9375C10.5178 10.9375 10.9375 10.5178 10.9375 10C10.9375 9.48223 10.5178 9.0625 10 9.0625C9.48223 9.0625 9.0625 9.48223 9.0625 10C9.0625 10.5178 9.48223 10.9375 10 10.9375Z"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M10 17.8125C10.5178 17.8125 10.9375 17.3928 10.9375 16.875C10.9375 16.3572 10.5178 15.9375 10 15.9375C9.48223 15.9375 9.0625 16.3572 9.0625 16.875C9.0625 17.3928 9.48223 17.8125 10 17.8125Z"
                                                    stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
                            {{-- <tr role="row" class="even">
                            <td class="text-center">
                                <input class="form-check-input" type="checkbox" value=""
                                    aria-label="Select Booking">
                            </td>
                            <td>
                                <div class="fw-semibold" data-bs-toggle="tooltip" data-bs-html="true"
                                    data-bs-title="<div><b>Billing Notes</b></div> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet</p>">
                                    100995-6</div>
                                <div>
                                    <div>08/24/2022</div>
                                    <div>9:59 AM to 4:22 PM</div>
                                </div>
                            </td>
                            <td>
                                <div class="text-sm">
                                    Shelby Sign Language
                                </div>
                                <div class="text-sm">
                                    Service: Language interpreting
                                </div>
                                <div class="text-sm">
                                    Specialization: Closed-Captioning
                                </div>
                            </td>
                            <td>4</td>
                            <td class="position-relative">
                                <a href="#" title="Save" aria-label="Save"
                                    class="btn btn-sm btn-secondary rounded btn-hs-icon icon-save position-absolute">
                                    <svg aria-label="Save" width="17" height="17" viewBox="0 0 17 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.6026 3.85262L13.1474 0.397375C12.988 0.238 12.7925 0.121125 12.58 0.0573749V0H0.68C0.303875 0 0 0.303875 0 0.68V16.32C0 16.6961 0.303875 17 0.68 17H16.32C16.6961 17 17 16.6961 17 16.32V4.81313C17 4.45188 16.8576 4.10763 16.6026 3.85262ZM5.78 1.53H11.22V3.74H5.78V1.53ZM15.47 15.47H1.53V1.53H4.42V4.42C4.42 4.79612 4.72388 5.1 5.1 5.1H11.9C12.2761 5.1 12.58 4.79612 12.58 4.42V1.99325L15.47 4.88325V15.47ZM8.5 7.0125C6.81063 7.0125 5.44 8.38313 5.44 10.0725C5.44 11.7619 6.81063 13.1325 8.5 13.1325C10.1894 13.1325 11.56 11.7619 11.56 10.0725C11.56 8.38313 10.1894 7.0125 8.5 7.0125ZM8.5 11.7725C7.56075 11.7725 6.8 11.0118 6.8 10.0725C6.8 9.13325 7.56075 8.3725 8.5 8.3725C9.43925 8.3725 10.2 9.13325 10.2 10.0725C10.2 11.0118 9.43925 11.7725 8.5 11.7725Z"
                                            fill="black" />
                                    </svg>
                                </a>
                                <div class="">$20.00</div>
                                <div class="text-primary mb-2"><small>Additional Charges: </small></div>
                                <div class="d-flex flex-column gap-1">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="col-lg-3">Fuel Charges:</div>
                                        <div class="col-lg-2">
                                            <input type="" name=""
                                                class="form-control form-control-xs text-center" value="20"
                                                aria-label="Fuel charges">
                                        </div>
                                        <div>
                                            <svg aria-label="Delete" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                                    fill="#888575" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="" checked aria-label="Fuel charges chechkbox">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="col-lg-3">Food:</div>
                                        <div class="col-lg-2">
                                            <input aria-label="Food" type="" name=""
                                                class="form-control form-control-xs text-center" value="15">
                                        </div>
                                        <div>
                                            <svg aria-label="Delete" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.4 3.2H9.6C9.6 2.77565 9.43143 2.36869 9.13137 2.06863C8.83131 1.76857 8.42435 1.6 8 1.6C7.57565 1.6 7.16869 1.76857 6.86863 2.06863C6.56857 2.36869 6.4 2.77565 6.4 3.2ZM4.8 3.2C4.8 2.35131 5.13714 1.53737 5.73726 0.937258C6.33737 0.337142 7.15131 0 8 0C8.84869 0 9.66263 0.337142 10.2627 0.937258C10.8629 1.53737 11.2 2.35131 11.2 3.2H15.2C15.4122 3.2 15.6157 3.28429 15.7657 3.43431C15.9157 3.58434 16 3.78783 16 4C16 4.21217 15.9157 4.41566 15.7657 4.56569C15.6157 4.71571 15.4122 4.8 15.2 4.8H14.4944L13.7856 13.072C13.7175 13.8708 13.352 14.6149 12.7615 15.1571C12.171 15.6993 11.3985 16.0001 10.5968 16H5.4032C4.60153 16.0001 3.82902 15.6993 3.23852 15.1571C2.64802 14.6149 2.28254 13.8708 2.2144 13.072L1.5056 4.8H0.8C0.587827 4.8 0.384344 4.71571 0.234315 4.56569C0.0842854 4.41566 0 4.21217 0 4C0 3.78783 0.0842854 3.58434 0.234315 3.43431C0.384344 3.28429 0.587827 3.2 0.8 3.2H4.8ZM10.4 8C10.4 7.78783 10.3157 7.58434 10.1657 7.43432C10.0157 7.28429 9.81217 7.2 9.6 7.2C9.38783 7.2 9.18434 7.28429 9.03432 7.43432C8.88429 7.58434 8.8 7.78783 8.8 8V11.2C8.8 11.4122 8.88429 11.6157 9.03432 11.7657C9.18434 11.9157 9.38783 12 9.6 12C9.81217 12 10.0157 11.9157 10.1657 11.7657C10.3157 11.6157 10.4 11.4122 10.4 11.2V8ZM6.4 7.2C6.61217 7.2 6.81566 7.28429 6.96569 7.43432C7.11571 7.58434 7.2 7.78783 7.2 8V11.2C7.2 11.4122 7.11571 11.6157 6.96569 11.7657C6.81566 11.9157 6.61217 12 6.4 12C6.18783 12 5.98434 11.9157 5.83432 11.7657C5.68429 11.6157 5.6 11.4122 5.6 11.2V8C5.6 7.78783 5.68429 7.58434 5.83432 7.43432C5.98434 7.28429 6.18783 7.2 6.4 7.2ZM3.808 12.936C3.84208 13.3355 4.02493 13.7077 4.32035 13.9788C4.61577 14.2499 5.00223 14.4002 5.4032 14.4H10.5968C10.9975 14.3998 11.3836 14.2494 11.6786 13.9783C11.9737 13.7072 12.1563 13.3352 12.1904 12.936L12.888 4.8H3.112L3.8096 12.936H3.808Z"
                                                    fill="#888575" />
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="" aria-label="Food charges checkbox">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-primary btn-xxs rounded btn-has-icon">
                                            <svg aria-label="Add New" width="14" height="14"
                                                viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                    fill="white"></path>
                                            </svg>
                                            Add New
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="position-relative">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <label class="form-label-sm mb-0">Duration:</label>
                                    <div>5h,</div>
                                    <div>10m</div>
                                    <a href="#" title="Edit" aria-label="Edit"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon icon-edit position-absolute">
                                        <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                fill="black"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-4"><label class="form-label-sm mb-0">Avg Rate:</label></div>
                                    <div class="col-8 d-flex align-items-center gap-2">$10</div>
                                </div>
                                <div class="row g-0 mb-2">
                                    <div class="col-4"><label class="form-label-sm mb-0">Total Rate:</label></div>
                                    <div class="col-8 d-flex align-items-center gap-2">$100</div>
                                </div>
                                <div class="text-sm text-primary mb-1">Discount:</div>
                                <div class="row g-0 mb-2">
                                    <div class="col-4"><label class="form-label-sm mb-0">Total Rate:</label></div>
                                    <div class="col-8 d-flex align-items-center gap-2">$10</div>
                                </div>
                                <hr class="my-2">
                                <div class="grand-total">
                                    Grand Total: $120.00
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-1">
                                    $155.00
                                </div>
                            </td>
                            <td>
                                <div class="d-flex actions justify-content-center">
                                    <a href="#" title="Cancel" aria-label="Cancel"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Cancel" class="fill-stroke" width="17" height="18"
                                            viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125"
                                                stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <a href="#" title="Record Payment" aria-label="Record Payment"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Record Payment" width="19" height="20"
                                            viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 0V18.5714H11.6923V17.1429H1.46154V1.42857H8.76923V5.71429H13.1538V7.14286H14.6154V4.71429L14.3962 4.5L10.0115 0.214286L9.79231 0H0ZM10.2308 2.42857L12.1308 4.28571H10.2308V2.42857ZM2.92308 7.14286V8.57143H11.6923V7.14286H2.92308ZM15.3462 8.57143V10C14.1038 10.2143 13.1538 11.2143 13.1538 12.5C13.1538 13.9286 14.25 15 15.7115 15H16.4423C17.0269 15 17.5385 15.5 17.5385 16.0714C17.5385 16.6429 17.0269 17.1429 16.4423 17.1429H13.8846V18.5714H15.3462V20H16.8077V18.5714C18.05 18.3571 19 17.3571 19 16.0714C19 14.6429 17.9038 13.5714 16.4423 13.5714H15.7115C15.1269 13.5714 14.6154 13.0714 14.6154 12.5C14.6154 11.9286 15.1269 11.4286 15.7115 11.4286H18.2692V10H16.8077V8.57143H15.3462ZM2.92308 10.7143V12.1429H8.03846V10.7143H2.92308ZM9.5 10.7143V12.1429H11.6923V10.7143H9.5ZM2.92308 13.5714V15H8.03846V13.5714H2.92308ZM9.5 13.5714V15H11.6923V13.5714H9.5Z" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr> --}}
                            @foreach ($bookings as $booking)
                                <tr role="row" class="odd">
                                    <td class="text-center">
                                        <input class="form-check-input" type="checkbox" value="{{ $booking->id }}"
                                            wire:key='{{ $loop->index }}' wire:model.defer="selectedBookings"
                                            aria-label="Select Booking">
                                    </td>
                                    <td>
                                        <div class="fw-semibold" data-bs-toggle="tooltip" data-bs-html="true"
                                            data-bs-title="<div><b>Billing Notes</b></div> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum dolor sit amet</p>">
                                            {{ $booking->booking_number }}</div>
                                        <div>
                                            <div>
                                                {{ $booking->booking_start_at ? date_format(date_create($booking->booking_start_at), 'd/m/Y') : '' }}
                                            </div>
                                            <div>
                                                {{ $booking->booking_start_at ? date_format(date_create($booking->booking_start_at), 'h:i A ') : '' }}
                                                to
                                                {{ $booking->booking_start_at ? date_format(date_create($booking->booking_end_at), 'h:i A') : '' }}
                                            </div>

                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-sm">
                                            {{ $booking->services->count() ? $booking->services->first()->accommodation->name ?? '' : '' }}

                                        </div>
                                        <div class="text-sm">
                                            Service:
                                            {{ $booking->services->count() ? $booking->services->first()->name : 'N/A' }}
                                        </div>
                                        <div class="text-sm">
                                            Specialization: Closed-Captioning
                                        </div>
                                    </td>
                                    <td>{{ $booking->booking_provider ? $booking->booking_provider->count() : 'N/A' }}
                                    </td>
                                    <td class="position-relative">
                                        <a href="#" title="Edit" aria-label="Edit"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon icon-edit position-absolute">
                                            <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                    fill="black"></path>
                                            </svg>
                                        </a>
                                        @if ($booking['payment'] && ($booking['payment']->additional_label_provider || $booking['payment']->additional_label))
                                            <div class="">
                                                {{ numberFormat($booking['payment']->additional_charge + $booking['payment']->additional_charge_provider) }}
                                            </div>
                                            <div class="text-primary"><small>Additional Charges:</small></div>
                                            @if ($booking['payment']->additional_label)
                                                <div>{{ $booking['payment']->additional_label }}:
                                                    {{ numberFormat($booking['payment']->additional_charge) }} <i
                                                        class="fa fa-check-circle" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title=""></i></div>
                                            @endif
                                            @if ($booking['payment']->additional_label_provider)
                                                <div>{{ $booking['payment']->additional_label_provider }}:
                                                    {{ numberFormat($booking['payment']->additional_charge_provider) }}
                                                </div>
                                            @endif
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td class="position-relative">
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <label class="form-label-sm mb-0">Duration:</label>
                                            <div>
                                                {{ $booking['duration_hours'] }} h,
                                            </div>
                                            <div>{{ $booking['duration_minute'] }} m</div>
                                            <a href="#" title="Edit" aria-label="Edit"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon icon-edit position-absolute">
                                                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z"
                                                        fill="black"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-6"><label class="form-label-sm mb-0">Avg Rate:
                                                    <small>(coming soon)</small></label>
                                            </div>
                                            <div class="col-6 d-flex align-items-center gap-2">$10</div>
                                        </div>
                                        <div class="row g-0 mb-2">
                                            <div class="col-6"><label class="form-label-sm mb-0">Total Rate:
                                                    <small>(coming soon)</small></label>
                                            </div>
                                            <div class="col-6 d-flex align-items-center gap-2">$100</div>
                                        </div>
                                        @if ($booking['payment'] && $booking['payment']->discounted_amount)
                                            <div class="row g-0 mb-2">
                                                <div class="col-6"><label class="form-label-sm mb-0">Discounted
                                                        Amount:</label>
                                                </div>
                                                <div class="col-6 d-flex align-items-center gap-2">
                                                    {{ numberFormat($booking['payment']->discounted_amount) }}</div>
                                            </div>
                                        @endif
                                        <div>
                                            <a href="#" class="btn btn-primary btn-xxs rounded btn-has-icon">
                                                <svg width="14" height="14" viewBox="0 0 20 20"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z"
                                                        fill="white"></path>
                                                </svg>
                                                Add Discount
                                            </a>
                                        </div>
                                        <hr class="my-2">
                                        <div class="grand-total">
                                            Grand Total: {{ numberFormat($booking->getInvoicePrice()) }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1">
                                            {{ numberFormat($booking->getInvoicePrice()) }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex actions justify-content-center">
                                            <a href="#" title="Cancel Assignment (coming soon)"
                                                aria-label="Cancel Assignment"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg aria-label="Cancel Assignment" class="fill-stroke"
                                                    width="17" height="18" viewBox="0 0 17 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.3125 16.8125H1.4375V1.1875H14.5625V9.3125M15.8125 12.4375L11.4375 16.8125M5.1875 8.6875H10.8125M5.1875 12.4375H7.0625M5.1875 4.9375H10.8125M11.4375 12.4375L15.8125 16.8125"
                                                        stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            {{-- <a href="#" title="Record Payment" aria-label="Record Payment"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg aria-label="Record Payment" width="19" height="20"
                                                    viewBox="0 0 19 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0 0V18.5714H11.6923V17.1429H1.46154V1.42857H8.76923V5.71429H13.1538V7.14286H14.6154V4.71429L14.3962 4.5L10.0115 0.214286L9.79231 0H0ZM10.2308 2.42857L12.1308 4.28571H10.2308V2.42857ZM2.92308 7.14286V8.57143H11.6923V7.14286H2.92308ZM15.3462 8.57143V10C14.1038 10.2143 13.1538 11.2143 13.1538 12.5C13.1538 13.9286 14.25 15 15.7115 15H16.4423C17.0269 15 17.5385 15.5 17.5385 16.0714C17.5385 16.6429 17.0269 17.1429 16.4423 17.1429H13.8846V18.5714H15.3462V20H16.8077V18.5714C18.05 18.3571 19 17.3571 19 16.0714C19 14.6429 17.9038 13.5714 16.4423 13.5714H15.7115C15.1269 13.5714 14.6154 13.0714 14.6154 12.5C14.6154 11.9286 15.1269 11.4286 15.7115 11.4286H18.2692V10H16.8077V8.57143H15.3462ZM2.92308 10.7143V12.1429H8.03846V10.7143H2.92308ZM9.5 10.7143V12.1429H11.6923V10.7143H9.5ZM2.92308 13.5714V15H8.03846V13.5714H2.92308ZM9.5 13.5714V15H11.6923V13.5714H9.5Z" />
                                                </svg>
                                            </a> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- end updated by shanila --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Total -->
        <div class="bg-muted py-2 mb-4">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="d-flex justify-content-between">
                        <div class="fw-bold text-sm">Total</div>
                        <div class="fw-bold text-sm text-lg-end">$675</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <!-- /Total --> --}}

        <div class="text-center">

            @if ($showError)
                <div style="position: fixed;bottom: 48px;right: 44px;text-align: center;z-index:-10000">

                    <span class="d-inline-block invalid-feedback my-1">No Bookings are selected.</span>
                </div>
            @endif
        </div>

    </div>
