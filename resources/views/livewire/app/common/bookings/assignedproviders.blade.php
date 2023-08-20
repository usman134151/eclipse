  
<div>
        <div class="between-section-segment-spacing">
                <div class="d-lg-flex align-items-center justify-content-between header-row">
                    <h2 class="mb-lg-0">Service {{$index}} Assigned Providers </h2>
                    <div class="d-flex flex-md-row flex-column gap-3">
                        <a class="btn btn-has-icon btn-outline-dark rounded" wire:click="openAssignProvidersPanel"
                            @click="assignProvider = true" href="javascript:refreshSelectsEvent()">
                            {{-- Updated by Shanila to Add
                            svg icon --}}
                            <svg aria-label="Assign Providers" vwidth="20" height="20"
                                viewBox="0 0 20 20">
                                <use xlink:href="/css/common-icons.svg#assign-providers">
                                </use>
                            </svg>
                            {{-- End of update by Shanila
                            --}}
                            Assign Providers 
                        </a>
                        <a href="#" class="btn btn-has-icon btn-primary rounded">
                            {{-- Updated by Shanila to Add
                            svg icon --}}
                            <svg aria-label="Team Chat" width="20" height="20"
                                viewBox="0 0 20 20" fill="none">
                                <use xlink:href="/css/common-icons.svg#message-icon">
                                </use>
                            </svg>
                            {{-- End of update by Shanila
                            --}}
                            Team Chat
                        </a>
                    </div>
                </div>
                <div class="mb-4">
                    <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span>
                             
                            <svg aria-label="Export " width="23" height="26" viewBox="0 0 23 26">
                                <use xlink:href="/css/common-icons.svg#document-dropdown">
                                </use>
                            </svg>
                             
                        </span>
                    </button>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <div class="d-inline-flex align-items-center gap-4">
                        <div class="d-inline-flex align-items-center gap-4">
                            <label for="show_records" class="form-label-sm mb-0">Show</label>
                            <select class="form-select form-select-sm" id="show_records">
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                            </select>
                        </div>
                        <div class="d-flex gap-4 align-items-center">
                            <div class="form-check form-switch mb-lg-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="autoNotify" checked aria-label="Auto-notify Toggle">
                                <label class="form-check-label" for="autoNotify">Auto-notify</label>
                            </div>
                            <div class="form-check form-switch mb-lg-0">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="autoNotify" aria-label="Auto-notify Toggle">
                                <label class="form-check-label" for="autoNotify">Auto-Assign</label>
                            </div>
                        </div>
                    </div>
                    <div class="d-inline-flex align-items-center gap-4">
                        <label for="search-coulmn" class="form-label-sm mb-0">Search</label>
                        <input type="search" class="form-control form-control-sm" id="search-coulmn"
                            name="search" placeholder="Search here" autocomplete="on" />
                    </div>
                </div>
                <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table id="unassigned_data" class="table table-fs-md table-hover"
                                    aria-label="">
                                    <thead>
                                        <tr role="row">
                                            <th scope="col" class="text-center">
                                                <input class="form-check-input" type="checkbox"
                                                    value="" aria-label="Select All Teams">
                                            </th>
                                            <th scope="col">Provider</th>
                                            <th scope="col">Additional Pay</th>
                                            <th scope="col" class="text-center">Additional Pay</th>
                                            <th scope="col" class="text-center">Time Paid</th>
                                            <th scope="col" class="text-center">Total Payment</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($assignedProviders as $index => $provider)
                                        <tr role="row" class="odd">
                                            <td class="text-center align-middle">
                                                <input class="form-check-input" type="checkbox"
                                                    value="" aria-label="Select Team">
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div>
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                                            class="rounded-circle"
                                                            alt="Provider Profile Image">
                                                    </div>
                                                    <div class="pt-2">
                                                        <div class="font-family-secondary leading-none">
                                                        {{$provider['name']}}</div>
                                                        <a href="#"
                                                            class="font-family-secondary"><small>  {{$provider['email']}}</small></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                Additional Pay Label
                                            </td>
                                            <td class="text-center align-middle">
                                                $00:00
                                            </td>
                                            <td class="text-center align-middle">
                                            {{$provider['paid_at']}}
                                            </td>
                                            <td class="text-center align-middle">{{$provider['paid_amount']}}</td>
                                            <td class="align-middle">
                                                <div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Revoke" aria-label="Revoke"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        {{-- Updated by Shanila to Add
                                                        svg icon --}}
                                                        <svg aria-label="Revoke" width="19"
                                                            height="20" viewBox="0 0 19 20">
                                                            <use
                                                                xlink:href="/css/common-icons.svg#unassign">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila
                                                        --}}
                                                    </a>
                                                    <a href="#" title="View" aria-label="View"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                         
                                                        <svg aria-label="View" width="20"
                                                            height="20" viewBox="0 0 20 20">
                                                            <use xlink:href="/css/common-icons.svg#view">
                                                            </use>
                                                        </svg>
                                                         
                                                    </a>
                                                    <a href="#" title="Chat" aria-label="Chat"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                         
                                                        <svg aria-label="Chat" width="18"
                                                            height="18" viewBox="0 0 18 18"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use
                                                                xlink:href="/css/common-icons.svg#chat-icon">
                                                            </use>
                                                        </svg>
                                                         
                                                    </a>
                                                    <a href="#" title="Feedback"
                                                        aria-label="Feedback"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                         
                                                        <svg aria-label="Rating" width="22"
                                                            height="22" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <use
                                                                xlink:href="/css/common-icons.svg#rating-icon">
                                                            </use>
                                                        </svg>
                                                         
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hoverable rows end -->
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100
                            entries</p>
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
                            <li class="page-item active"><a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </div><!-- /Service 1 Assigned Providers -->
        <!-- Service 2 Assigned Providers -->
        {{-- <div class="between-section-segment-spacing">
                                <div class="d-lg-flex align-items-center justify-content-between mb-4">
                                    <h2 class="mb-lg-0">Service 2 Assigned Providers</h2>
                                    <div class="d-flex flex-md-row flex-column gap-3">
                                        <a class="btn btn-has-icon btn-outline-dark rounded"
                                            @click="assignProvider = true" href="javascript:refreshSelectsEvent()">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.99995 9.64514C10.8594 9.64629 11.7 9.39247 12.4152 8.9158C13.1304 8.43913 13.6881 7.76102 14.0178 6.96728C14.3476 6.17354 14.4344 5.29983 14.2674 4.45671C14.1005 3.61359 13.6872 2.83894 13.0798 2.23077C12.4725 1.62261 11.6984 1.20826 10.8555 1.04016C10.0126 0.872052 9.13876 0.957746 8.34457 1.28639C7.55039 1.61504 6.87154 2.17188 6.39391 2.88644C5.91627 3.60101 5.66133 4.44119 5.66133 5.30069C5.66133 6.4519 6.11824 7.55605 6.93173 8.37062C7.74521 9.18519 8.84874 9.64359 9.99995 9.64514ZM10.0006 2.4618C10.5614 2.46078 11.1099 2.62621 11.5766 2.93714C12.0434 3.24808 12.4073 3.69053 12.6224 4.20847C12.8375 4.7264 12.8941 5.29652 12.7849 5.84662C12.6758 6.39671 12.4058 6.90204 12.0092 7.2986C11.6127 7.69516 11.1073 7.96512 10.5573 8.07428C10.0072 8.18343 9.43704 8.12689 8.9191 7.9118C8.40117 7.69671 7.95871 7.33275 7.64778 6.86601C7.33684 6.39928 7.17141 5.85077 7.17244 5.28995C7.17381 4.5403 7.47222 3.82175 8.0023 3.29166C8.53238 2.76158 9.25093 2.46318 10.0006 2.4618Z"
                                                    fill="#4b4b4b" stroke="#4b4b4b" stroke-width="0.4" />
                                                <path
                                                    d="M15.6953 11.8235C13.9915 10.7504 12.0149 10.1901 10.0014 10.2094C8.52715 10.1724 7.06288 10.4608 5.71279 11.0541C4.36161 11.6478 3.15807 12.5324 2.18797 13.6446L2.18772 13.6444L2.18071 13.6535C2.07992 13.7833 2.02422 13.9424 2.02205 14.1068L2.02203 14.1068V14.1094V17.7126C2.01395 18.0672 2.14632 18.4107 2.39036 18.6681L2.53552 18.5306L2.39036 18.6681C2.635 18.9262 2.97192 19.0769 3.32738 19.0871L3.32737 19.0872H3.33314H10.2165H10.6823L10.3615 18.7495L9.30592 17.6384L9.24763 17.577L9.16301 17.5761L3.53314 17.5171V14.3955C4.36079 13.5426 5.35356 12.8667 6.45116 12.4094C7.57328 11.9418 8.78042 11.7129 9.99581 11.7372L9.99581 11.7373L10.0025 11.7372C11.6671 11.7148 13.3055 12.1531 14.7365 13.0036L14.8781 13.0877L14.9878 12.965L15.7378 12.1261L15.8955 11.9497L15.6953 11.8235Z"
                                                    fill="#4b4b4b" stroke="#4b4b4b" stroke-width="0.4" />
                                                <path
                                                    d="M16.667 18.2769H16.9961C16.897 18.3444 16.7802 18.3833 16.6587 18.388H15.0397L15.1397 18.2769H16.667ZM17.2781 17.7407C17.2788 17.8717 17.2396 17.9988 17.167 18.1058V17.7769V17.7158V15.9849L17.2781 15.8611V17.738H17.2781L17.2781 17.7407Z"
                                                    fill="#4b4b4b" stroke="#4b4b4b" />
                                                <path
                                                    d="M19.4479 10.1973L19.4479 10.1973L19.4445 10.1943C19.2951 10.0613 19.0991 9.99301 18.8994 10.0043C18.6997 10.0157 18.5126 10.1057 18.3792 10.2548L18.3791 10.2549L12.0697 17.3136L9.33285 14.3714C9.26891 14.2976 9.19124 14.2368 9.10414 14.1925C9.0157 14.1475 8.91926 14.1203 8.82033 14.1126C8.72141 14.1049 8.62193 14.1168 8.52758 14.1475C8.43323 14.1782 8.34586 14.2272 8.27045 14.2917L8.27039 14.2917L8.26587 14.2958C8.192 14.363 8.13219 14.4441 8.08989 14.5346C8.04759 14.6251 8.02364 14.723 8.01942 14.8228C8.01521 14.9225 8.03081 15.0221 8.06533 15.1158C8.09985 15.2095 8.1526 15.2955 8.22053 15.3687L8.2206 15.3687L11.9373 19.3687L12.0865 19.5294L12.2328 19.366L19.505 11.2438L19.5051 11.2438L19.5083 11.24C19.6344 11.0919 19.6985 10.9008 19.6872 10.7066C19.676 10.5123 19.5902 10.3299 19.4479 10.1973Z"
                                                    fill="#4b4b4b" stroke="#4b4b4b" stroke-width="0.4" />
                                            </svg>

                                            Assign Providers
                                        </a>
                                        <a href="#" class="btn btn-has-icon btn-primary rounded">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z"
                                                    fill="white" />
                                                <path
                                                    d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z"
                                                    fill="white" />
                                            </svg>
                                            Team Chat
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>
                                            <svg width="23" height="26" viewBox="0 0 23 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.001 0.5V8.625C10.001 9.12228 10.1985 9.5992 10.5501 9.95083C10.9018 10.3025 11.3787 10.5 11.876 10.5H20.001V17.6963L18.3847 16.08C18.2686 15.9639 18.1307 15.8719 17.979 15.8091C17.8273 15.7463 17.6647 15.7141 17.5005 15.7141C17.3363 15.7142 17.1738 15.7466 17.0221 15.8095C16.8705 15.8723 16.7327 15.9645 16.6166 16.0806C16.5005 16.1968 16.4085 16.3346 16.3457 16.4863C16.2829 16.638 16.2507 16.8006 16.2507 16.9648C16.2508 17.129 16.2832 17.2916 16.3461 17.4432C16.4089 17.5949 16.5011 17.7327 16.6172 17.8488L18.0185 19.25H12.501C12.1695 19.25 11.8515 19.3817 11.6171 19.6161C11.3827 19.8505 11.251 20.1685 11.251 20.5C11.251 20.8315 11.3827 21.1495 11.6171 21.3839C11.8515 21.6183 12.1695 21.75 12.501 21.75H18.0185L16.6172 23.1513C16.3827 23.3856 16.2508 23.7036 16.2507 24.0352C16.2506 24.3668 16.3822 24.6848 16.6166 24.9194C16.851 25.1539 17.1689 25.2858 17.5005 25.2859C17.8321 25.286 18.1502 25.1544 18.3847 24.92L19.9797 23.3238C19.9011 23.9256 19.6063 24.4783 19.1502 24.8787C18.6941 25.2791 18.1079 25.5 17.501 25.5H2.50098C1.83794 25.5 1.20205 25.2366 0.733209 24.7678C0.264369 24.2989 0.000976563 23.663 0.000976562 23V3C0.000976562 2.33696 0.264369 1.70107 0.733209 1.23223C1.20205 0.763392 1.83794 0.5 2.50098 0.5H10.001ZM20.001 17.6963L21.9197 19.6163C22.1541 19.8507 22.2857 20.1685 22.2857 20.5C22.2857 20.8315 22.1541 21.1493 21.9197 21.3838L20.001 23.3038V17.6963ZM12.501 0.55375C12.9746 0.654194 13.4088 0.889989 13.751 1.2325L19.2685 6.75C19.611 7.09216 19.8468 7.5264 19.9472 8H12.501V0.55375Z">
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
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
                                        <div class="d-flex gap-4 align-items-center">
                                            <div class="form-check form-switch mb-lg-0">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="autoNotify" checked>
                                                <label class="form-check-label" for="autoNotify">Auto-notify</label>
                                            </div>
                                            <div class="form-check form-switch mb-lg-0">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="autoNotify">
                                                <label class="form-check-label" for="autoNotify">Auto-Assign</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-inline-flex align-items-center gap-4">
                                        <label for="search" class="form-label-sm mb-0">Search</label>
                                        <input type="search" class="form-control form-control-sm" id="search"
                                            name="search" placeholder="Search here" autocomplete="on" />
                                    </div>
                                </div>
                                <!-- Hoverable rows start -->
                                <div class="row" id="table-hover-row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table id="unassigned_data" class="table table-fs-md table-hover"
                                                    aria-label="">
                                                    <thead>
                                                        <tr role="row">
                                                            <th scope="col" class="text-center">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" aria-label="Select All Teams">
                                                            </th>
                                                            <th scope="col">Provider</th>
                                                            <th scope="col">Additional Pay</th>
                                                            <th scope="col" class="text-center">Additional Pay</th>
                                                            <th scope="col" class="text-center">Time Paid</th>
                                                            <th scope="col" class="text-center">Total Payment</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td class="text-center align-middle">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" aria-label="Select Team">
                                                            </td>
                                                            <td class="align-middle">
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div>
                                                                        <img width="50" height="50"
                                                                            src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                                                            class="rounded-circle" alt="Image">
                                                                    </div>
                                                                    <div class="pt-2">
                                                                        <div class="font-family-secondary leading-none">
                                                                            Dori
                                                                            Griffiths</div>
                                                                        <a href="#"
                                                                            class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle">
                                                                Additional Pay Label
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                $00:00
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                08/21/2022 9:45 AM
                                                            </td>
                                                            <td class="text-center align-middle">$00:00</td>
                                                            <td class="align-middle">
                                                                <div class="d-flex actions justify-content-center">
                                                                    <a href="#" title="Revoke"
                                                                        aria-label="Revoke"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {
                                                                        <svg aria-label="Revoke" width="19"
                                                                            height="20" viewBox="0 0 19 20">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#unassign">
                                                                            </use>
                                                                        </svg>
                                                                      
                                                                    </a>
                                                                    <a href="#" title="View" aria-label="View"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg aria-label="View" width="20"
                                                                            height="20" viewBox="0 0 20 20">
                                                                            <use xlink:href="/css/common-icons.svg#view">
                                                                            </use>
                                                                        </svg>
                                                                    </a>
                                                                    <a href="#" title="Chat" aria-label="Chat"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg aria-label="Chat" width="18"
                                                                            height="18" viewBox="0 0 18 18"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#chat-icon">
                                                                            </use>
                                                                        </svg>
                                                                    </a>
                                                                    <a href="#" title="Feedback"
                                                                        aria-label="Feedback"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="Rating" width="22"
                                                                            height="22" viewBox="0 0 22 22"
                                                                            fill="none">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#rating-icon">
                                                                            </use>
                                                                        </svg>
                                                                         
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="text-center align-middle">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" aria-label="Select Team">
                                                            </td>
                                                            <td class="align-middle">
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div>
                                                                        <img width="50" height="50"
                                                                            src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                                                            class="rounded-circle" alt="Image">
                                                                    </div>
                                                                    <div class="pt-2">
                                                                        <div class="font-family-secondary leading-none">
                                                                            Dori
                                                                            Griffiths</div>
                                                                        <a href="#"
                                                                            class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle">
                                                                Additional Pay Label
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                $00:00
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                08/21/2022 9:45 AM
                                                            </td>
                                                            <td class="text-center align-middle">$00:00</td>
                                                            <td class="align-middle">
                                                                <div class="d-flex actions justify-content-center">
                                                                    <a href="#" title="Revoke"
                                                                        aria-label="Revoke"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg width="19" height="20"
                                                                            viewBox="0 0 19 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.00065 9.9974C11.3018 9.9974 13.1673 8.13192 13.1673 5.83073C13.1673 3.52954 11.3018 1.66406 9.00065 1.66406C6.69946 1.66406 4.83398 3.52954 4.83398 5.83073C4.83398 8.13192 6.69946 9.9974 9.00065 9.9974Z"
                                                                                stroke="black" stroke-width="2" />
                                                                            <path
                                                                                d="M13.167 18.3307H3.38871C3.15236 18.3308 2.9187 18.2806 2.70325 18.1834C2.48779 18.0863 2.29546 17.9444 2.13902 17.7672C1.98258 17.5901 1.86562 17.3816 1.79588 17.1558C1.72614 16.93 1.70524 16.6919 1.73454 16.4574L2.05954 13.8541C2.13512 13.2492 2.42906 12.6929 2.88607 12.2896C3.34308 11.8863 3.93169 11.6638 4.54121 11.6641H4.83371"
                                                                                stroke="black" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                            <path
                                                                                d="M17.3337 15.8307L13.167 11.6641M17.3337 11.6641L13.167 15.8307"
                                                                                stroke="black" stroke-width="2"
                                                                                stroke-linecap="round" />
                                                                        </svg>
                                                                    </a>
                                                                    <a href="#" title="View" aria-label="View"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.286 17.1462C15.075 17.1462 15.7146 16.5066 15.7146 15.7176C15.7146 14.9287 15.075 14.2891 14.286 14.2891C13.497 14.2891 12.8574 14.9287 12.8574 15.7176C12.8574 16.5066 13.497 17.1462 14.286 17.1462Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M19.8406 15.341C19.3992 14.2167 18.6376 13.2465 17.6502 12.5509C16.6628 11.8552 15.4929 11.4646 14.2856 11.4275C13.0783 11.4646 11.9084 11.8552 10.9209 12.5509C9.9335 13.2465 9.17192 14.2167 8.73057 15.341L8.57129 15.7132L8.73057 16.0853C9.17192 17.2097 9.9335 18.1798 10.9209 18.8755C11.9084 19.5711 13.0783 19.9618 14.2856 19.9989C15.4929 19.9618 16.6628 19.5711 17.6502 18.8755C18.6376 18.1798 19.3992 17.2097 19.8406 16.0853L19.9999 15.7132L19.8406 15.341ZM14.2856 18.5703C13.7205 18.5703 13.1681 18.4027 12.6982 18.0888C12.2284 17.7749 11.8622 17.3286 11.6459 16.8066C11.4297 16.2845 11.3731 15.71 11.4833 15.1558C11.5936 14.6015 11.8657 14.0924 12.2653 13.6929C12.6648 13.2933 13.1739 13.0212 13.7282 12.9109C14.2824 12.8007 14.8569 12.8573 15.379 13.0735C15.901 13.2898 16.3473 13.656 16.6612 14.1258C16.9751 14.5957 17.1427 15.1481 17.1427 15.7132C17.1418 16.4706 16.8404 17.1968 16.3048 17.7324C15.7692 18.268 15.043 18.5694 14.2856 18.5703V18.5703ZM3.57129 10.7132H7.14272V12.1417H3.57129V10.7132ZM3.57129 7.14174H12.1427V8.57031H3.57129V7.14174ZM3.57129 3.57031H12.1427V4.99888H3.57129V3.57031Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M14.2857 0H1.42857C1.05004 0.00113052 0.687332 0.152003 0.419668 0.419668C0.152003 0.687332 0.00113052 1.05004 0 1.42857V18.5714C0.00113052 18.95 0.152003 19.3127 0.419668 19.5803C0.687332 19.848 1.05004 19.9989 1.42857 20H7.14286V18.5714H1.42857V1.42857H14.2857V9.28571H15.7143V1.42857C15.7132 1.05004 15.5623 0.687332 15.2946 0.419668C15.027 0.152003 14.6642 0.00113052 14.2857 0V0Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </a>
                                                                    <a href="#" title="Chat" aria-label="Chat"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M3 16V19.766L4.515 18.857L9.277 16H14C15.103 16 16 15.103 16 14V6C16 4.897 15.103 4 14 4H2C0.897 4 0 4.897 0 6V14C0 15.103 0.897 16 2 16H3ZM2 6H14V14H8.723L5 16.234V14H2V6Z"
                                                                                fill="black" />
                                                                            <path
                                                                                d="M18 0H6C4.897 0 4 0.897 4 2H16C17.103 2 18 2.897 18 4V12C19.103 12 20 11.103 20 10V2C20 0.897 19.103 0 18 0Z"
                                                                                fill="black" />
                                                                        </svg>
                                                                    </a>
                                                                    <a href="#" title="Feedback"
                                                                        aria-label="Feedback"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg width="22" height="22"
                                                                            viewBox="0 0 22 22" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <mask id="mask0_8558_148040"
                                                                                style="mask-type:luminance"
                                                                                maskUnits="userSpaceOnUse"
                                                                                x="0" y="0"
                                                                                width="22" height="21">
                                                                                <path d="M1 1H21V20.2377H1V1Z"
                                                                                    fill="white" stroke="white"
                                                                                    stroke-width="0.5" />
                                                                            </mask>
                                                                            <g mask="url(#mask0_8558_148040)">
                                                                                <path
                                                                                    d="M8.85115 17.6655L6.68187 18.8041C6.60059 18.8468 6.51476 18.8777 6.42472 18.8966C6.33469 18.9155 6.24395 18.9215 6.15216 18.9148C6.06037 18.9081 5.97139 18.8892 5.88485 18.8577C5.79867 18.8262 5.71809 18.7834 5.64382 18.7295C5.56955 18.6755 5.50404 18.6125 5.44728 18.5399C5.39053 18.4678 5.34499 18.3889 5.31065 18.3038C5.27597 18.219 5.2539 18.1307 5.24409 18.0397C5.23463 17.9482 5.23743 17.8575 5.25355 17.7671L6.02464 13.2782C6.04216 13.177 6.0348 13.0778 6.00292 12.9805C5.97139 12.8831 5.91849 12.7986 5.84492 12.7272L2.57558 9.54821C2.50971 9.48409 2.45401 9.41228 2.40847 9.33275C2.36292 9.25322 2.32894 9.16914 2.30687 9.08016C2.28515 8.99117 2.27569 8.90078 2.27884 8.80935C2.28235 8.71756 2.29811 8.62822 2.32649 8.54134C2.35487 8.45411 2.3948 8.37248 2.4463 8.29645C2.49745 8.22043 2.55806 8.15282 2.62848 8.09396C2.69855 8.03475 2.77562 7.98641 2.85935 7.94892C2.94308 7.91143 3.03066 7.88621 3.1214 7.8729L7.64004 7.21742C7.74164 7.2027 7.83378 7.16522 7.91716 7.10496C8.00019 7.0447 8.0643 6.96868 8.10984 6.87689L10.1299 2.79302C10.1709 2.71104 10.222 2.63607 10.2837 2.56811C10.3453 2.50014 10.4154 2.44233 10.4935 2.39364C10.5717 2.34529 10.6547 2.30886 10.743 2.28363C10.8316 2.25841 10.9216 2.2458 11.0134 2.2458C11.1052 2.2458 11.1956 2.25841 11.2839 2.28363C11.3722 2.30886 11.4552 2.34529 11.5333 2.39364C11.6115 2.44198 11.6815 2.50014 11.7432 2.56811C11.8048 2.63607 11.856 2.71104 11.897 2.79302L13.9177 6.87759C13.9633 6.96938 14.0274 7.0454 14.1104 7.10566C14.1934 7.16592 14.2859 7.2034 14.3875 7.21812L18.9062 7.8736C18.9969 7.88656 19.0841 7.91214 19.1682 7.94962C19.2519 7.98711 19.3287 8.03545 19.3991 8.09466C19.4691 8.15352 19.5301 8.22113 19.5813 8.29715C19.6328 8.37318 19.6723 8.45481 19.7007 8.54169C19.7294 8.62892 19.7452 8.71826 19.7484 8.81005C19.7519 8.90148 19.7424 8.99187 19.7207 9.08051C19.6986 9.16949 19.6646 9.25392 19.6191 9.33345C19.5735 9.41298 19.5178 9.48479 19.452 9.54856L18.4581 10.5155C18.4272 10.5435 18.3996 10.5747 18.375 10.6083C18.3505 10.642 18.3295 10.6777 18.3123 10.7155C18.2952 10.7534 18.2819 10.7926 18.2724 10.8332C18.2629 10.8739 18.2577 10.9149 18.2563 10.9566C18.2552 10.9982 18.2584 11.0396 18.2654 11.0806C18.2727 11.1216 18.2836 11.1615 18.299 11.2C18.3141 11.2389 18.333 11.2757 18.3558 11.3107C18.3782 11.3458 18.4041 11.3784 18.4332 11.4081C18.4623 11.4379 18.4942 11.4645 18.5285 11.488C18.5632 11.5115 18.5996 11.5311 18.6381 11.5476C18.6767 11.5637 18.7163 11.576 18.7573 11.584C18.7983 11.5921 18.8392 11.5963 18.8813 11.5963C18.923 11.5963 18.9643 11.5921 19.0049 11.5837C19.0459 11.5753 19.0855 11.563 19.1241 11.5469C19.1626 11.5304 19.199 11.5104 19.2334 11.487C19.2677 11.4635 19.2996 11.4369 19.3287 11.4067L20.3233 10.4402C20.3975 10.368 20.4662 10.2909 20.5296 10.2093C20.593 10.1273 20.6501 10.0418 20.7016 9.95214C20.7531 9.86246 20.798 9.76962 20.8365 9.67363C20.875 9.57763 20.9066 9.47954 20.9311 9.37934C20.956 9.2788 20.9738 9.17755 20.9844 9.07455C20.9949 8.9719 20.9984 8.8689 20.9945 8.76555C20.9907 8.66221 20.9798 8.55991 20.9619 8.45796C20.9437 8.35636 20.9185 8.25652 20.8866 8.15807C20.8547 8.05998 20.8158 7.96434 20.7706 7.8715C20.7251 7.77866 20.6736 7.68932 20.6158 7.60349C20.558 7.51766 20.4946 7.43638 20.4252 7.35965C20.3562 7.28258 20.2819 7.21076 20.2027 7.1442C20.1236 7.07763 20.0402 7.01668 19.9526 6.96167C19.865 6.90667 19.7739 6.85797 19.6793 6.81558C19.5851 6.77319 19.4881 6.73746 19.3886 6.70873C19.2891 6.67965 19.1882 6.65758 19.0859 6.64287L14.892 6.03468L13.016 2.24159C12.9701 2.14875 12.9179 2.05977 12.8597 1.97429C12.8012 1.8888 12.7371 1.80788 12.6677 1.73115C12.598 1.65478 12.5234 1.58331 12.4439 1.5171C12.3643 1.45088 12.2802 1.39027 12.1923 1.33562C12.1044 1.28132 12.0129 1.23297 11.918 1.19093C11.8234 1.14924 11.726 1.11386 11.6265 1.08548C11.5267 1.0571 11.4254 1.03573 11.3228 1.02172C11.2201 1.00736 11.1171 1 11.0134 1C10.9097 1 10.8067 1.00736 10.7041 1.02172C10.6014 1.03573 10.5002 1.0571 10.4003 1.08548C10.3008 1.11386 10.2035 1.14924 10.1089 1.19093C10.0139 1.23297 9.92248 1.28132 9.83455 1.33562C9.74661 1.39027 9.66288 1.45088 9.583 1.5171C9.50348 1.58331 9.42886 1.65478 9.35914 1.73115C9.28977 1.80788 9.22566 1.8888 9.16751 1.97429C9.109 2.05977 9.0568 2.14875 9.01091 2.24159L7.13555 6.03223L2.94168 6.64041C2.83938 6.65513 2.73848 6.6772 2.63899 6.70628C2.53949 6.73536 2.4428 6.77109 2.34821 6.81348C2.25397 6.85587 2.16288 6.90457 2.0753 6.95957C1.98771 7.01457 1.90433 7.07553 1.82516 7.1421C1.74598 7.20866 1.67171 7.28048 1.60269 7.35755C1.53368 7.43428 1.47027 7.51555 1.41246 7.60139C1.35465 7.68722 1.30316 7.77656 1.25761 7.86939C1.21242 7.96223 1.17353 8.05753 1.14165 8.15597C1.10977 8.25406 1.08455 8.35426 1.06633 8.45586C1.04846 8.55746 1.0376 8.6601 1.03375 8.7631C1.02989 8.86645 1.0334 8.96945 1.04391 9.0721C1.05442 9.17475 1.07193 9.27635 1.09681 9.37689C1.12168 9.47709 1.15321 9.57518 1.1914 9.67117C1.22994 9.76717 1.27478 9.85966 1.32628 9.94934C1.37743 10.0394 1.43488 10.1249 1.49829 10.2068C1.56135 10.2885 1.63002 10.3655 1.70429 10.4377L4.73925 13.3882L4.02387 17.559C4.006 17.6609 3.99549 17.7639 3.99199 17.8673C3.98848 17.9706 3.99234 18.074 4.00355 18.177C4.01441 18.2796 4.03263 18.3816 4.05785 18.4818C4.08307 18.5823 4.11496 18.6804 4.15419 18.7764C4.19308 18.8724 4.23862 18.9652 4.29047 19.0546C4.34232 19.1443 4.40048 19.2297 4.46424 19.3114C4.52835 19.393 4.59772 19.4697 4.67234 19.5415C4.74696 19.6134 4.82649 19.6799 4.91022 19.7405C4.9943 19.8015 5.08188 19.8562 5.17367 19.9048C5.26546 19.9532 5.3597 19.9952 5.45744 20.031C5.55484 20.0664 5.65433 20.0947 5.75593 20.1165C5.85753 20.1378 5.95983 20.1522 6.06353 20.1595C6.16687 20.1669 6.27057 20.1669 6.37392 20.1599C6.47762 20.1529 6.57992 20.1385 6.68152 20.1172C6.78312 20.0958 6.88261 20.0674 6.98036 20.032C7.07775 19.997 7.17234 19.9549 7.26413 19.9066L9.43306 18.7694C9.4709 18.7512 9.50663 18.7295 9.53991 18.7042C9.57355 18.679 9.60402 18.6506 9.6317 18.6195C9.65973 18.5879 9.6839 18.554 9.70492 18.5179C9.72559 18.4814 9.74276 18.4436 9.75607 18.4037C9.76938 18.3641 9.77849 18.3234 9.7834 18.2817C9.7883 18.24 9.789 18.1987 9.7855 18.1567C9.78235 18.115 9.77464 18.074 9.76308 18.0341C9.75117 17.9938 9.73575 17.9552 9.71613 17.9181C9.69651 17.881 9.67339 17.8463 9.64677 17.8137C9.62049 17.7815 9.59071 17.752 9.55848 17.7254C9.5259 17.6991 9.49087 17.676 9.45373 17.6567C9.41659 17.6371 9.37806 17.6217 9.33742 17.6098C9.29713 17.5982 9.25614 17.5905 9.21445 17.5874C9.17241 17.5839 9.13072 17.5846 9.08903 17.5898C9.04734 17.5947 9.0067 17.6038 8.96676 17.6168C8.92718 17.6301 8.88899 17.6473 8.85255 17.668L8.85115 17.6655Z"
                                                                                    fill="black" stroke="black"
                                                                                    stroke-width="0.5" />
                                                                            </g>
                                                                            <path
                                                                                d="M20.9214 13.4954C20.8762 13.356 20.8128 13.2253 20.7312 13.1034C20.6492 12.9815 20.5522 12.8735 20.4397 12.779C20.3272 12.6844 20.2039 12.6073 20.0697 12.5477C19.9356 12.4878 19.7958 12.4475 19.65 12.4272L17.3066 12.0877L16.2581 9.97136C16.2262 9.90585 16.1894 9.84279 16.1488 9.78218C16.1078 9.72157 16.0629 9.66412 16.0139 9.60981C15.9649 9.55586 15.9123 9.50506 15.8562 9.45812C15.8002 9.41117 15.741 9.36843 15.679 9.3299C15.6166 9.29136 15.5522 9.25738 15.4852 9.2276C15.4183 9.19817 15.3497 9.1733 15.2792 9.15333C15.2088 9.13336 15.1374 9.11829 15.0648 9.10848C14.9923 9.09832 14.9194 9.09342 14.8466 9.09377C14.7734 9.09342 14.7005 9.09797 14.628 9.10813C14.5554 9.11794 14.484 9.13266 14.4139 9.15263C14.3435 9.17259 14.2748 9.19712 14.2079 9.22655C14.141 9.25632 14.0765 9.29031 14.0142 9.32884C13.9522 9.36738 13.893 9.40977 13.8369 9.45672C13.7809 9.50331 13.7283 9.55376 13.6793 9.60806C13.6302 9.66201 13.5854 9.71947 13.5444 9.78008C13.5034 9.84034 13.467 9.9034 13.4347 9.96891L12.3862 12.0853L10.0421 12.4248C9.89703 12.4458 9.75724 12.4861 9.62341 12.5463C9.48958 12.6062 9.36627 12.6833 9.25416 12.7776C9.14205 12.8721 9.04466 12.98 8.96268 13.1013C8.8807 13.2228 8.81694 13.3532 8.77175 13.4922C8.7262 13.6317 8.70063 13.7743 8.69537 13.9207C8.69012 14.0671 8.70483 14.2111 8.73987 14.3534C8.7749 14.4956 8.82885 14.6301 8.90172 14.7573C8.97459 14.8845 9.06358 14.999 9.16833 15.1013L10.864 16.7511L10.4642 19.0794C10.4386 19.2237 10.4337 19.3691 10.4495 19.5149C10.4649 19.6606 10.5003 19.8018 10.5557 19.9377C10.6107 20.0737 10.6835 20.1994 10.7743 20.3147C10.865 20.4303 10.9698 20.5312 11.0885 20.6174C11.2076 20.7036 11.3362 20.7719 11.4742 20.822C11.6126 20.8721 11.7549 20.9026 11.9017 20.9127C12.0484 20.9229 12.1938 20.9131 12.3375 20.8826C12.4815 20.8521 12.6184 20.8027 12.7481 20.734L14.8445 19.6354L16.9426 20.7382C17.0726 20.8066 17.2096 20.8556 17.3532 20.8854C17.4972 20.9155 17.6423 20.9253 17.7887 20.9148C17.9351 20.904 18.0774 20.8738 18.2154 20.8234C18.3534 20.7733 18.4817 20.705 18.6004 20.6191C18.7192 20.5329 18.8239 20.4324 18.9147 20.3171C19.0054 20.2019 19.0783 20.0765 19.1336 19.9405C19.189 19.8049 19.2247 19.6645 19.2408 19.5187C19.2566 19.373 19.2524 19.2279 19.2275 19.0836L18.8267 16.7556L20.5231 15.1059C20.6289 15.0039 20.7182 14.889 20.7914 14.7619C20.8647 14.635 20.919 14.5002 20.954 14.3576C20.9894 14.2153 21.0041 14.0706 20.9985 13.9242C20.9929 13.7778 20.9673 13.6348 20.9214 13.4954ZM19.6518 14.215L17.7211 16.0917C17.6472 16.1632 17.5946 16.2476 17.5627 16.345C17.5309 16.4424 17.5235 16.5419 17.5407 16.6428L17.9968 19.2942C18.0087 19.3551 18.0028 19.4143 17.9793 19.4721C17.9555 19.5296 17.9183 19.5762 17.8672 19.6116C17.8171 19.6487 17.761 19.6697 17.699 19.6743C17.637 19.6788 17.5785 19.6666 17.5238 19.6371L15.1367 18.3857C15.0459 18.3377 14.9492 18.3136 14.8466 18.3136C14.7436 18.3136 14.6469 18.3377 14.5561 18.3857L12.169 19.6371C12.114 19.6659 12.0558 19.6778 11.9938 19.6732C11.9321 19.6687 11.8761 19.6483 11.826 19.6119C11.7759 19.5755 11.7391 19.5289 11.7156 19.4714C11.6921 19.4143 11.6855 19.3551 11.696 19.2942L12.1521 16.6428C12.1697 16.5419 12.1623 16.4428 12.1304 16.3454C12.0989 16.248 12.046 16.1632 11.9724 16.0917L10.0414 14.215C9.99687 14.1719 9.96709 14.12 9.95203 14.0598C9.93696 13.9999 9.93907 13.94 9.95833 13.8811C9.97725 13.8219 10.0109 13.7725 10.0582 13.7326C10.1058 13.6926 10.1605 13.6681 10.2218 13.659L12.8906 13.2726C12.9922 13.2579 13.0844 13.2204 13.1678 13.1601C13.2508 13.0999 13.3149 13.0238 13.3605 12.9321L14.5544 10.5196C14.5817 10.4643 14.6217 10.4201 14.6746 10.3872C14.7271 10.3546 14.7846 10.3382 14.8466 10.3382C14.9089 10.3382 14.9664 10.3546 15.0189 10.3872C15.0718 10.4201 15.1118 10.4643 15.1391 10.5196L16.3317 12.9314C16.3772 13.0235 16.4417 13.0995 16.5247 13.1598C16.6081 13.22 16.7006 13.2572 16.8022 13.2719L19.471 13.6587C19.5323 13.6674 19.587 13.6919 19.6343 13.7322C19.6819 13.7722 19.7152 13.8216 19.7341 13.8804C19.7534 13.9393 19.7555 13.9988 19.7408 14.0591C19.7261 14.1193 19.6963 14.1712 19.6518 14.2143V14.215Z"
                                                                                fill="black" stroke="black"
                                                                                stroke-width="0.5" />
                                                                        </svg>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="text-center align-middle">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" aria-label="Select Team">
                                                            </td>
                                                            <td class="align-middle">
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div>
                                                                        <img width="50" height="50"
                                                                            src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                                                            class="rounded-circle" alt="Image">
                                                                    </div>
                                                                    <div class="pt-2">
                                                                        <div class="font-family-secondary leading-none">
                                                                            Dori
                                                                            Griffiths</div>
                                                                        <a href="#"
                                                                            class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle">
                                                                Additional Pay Label
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                $00:00
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                08/21/2022 9:45 AM
                                                            </td>
                                                            <td class="text-center align-middle">$00:00</td>
                                                            <td class="align-middle">
                                                                <div class="d-flex actions justify-content-center">
                                                                    <a href="#" title="Revoke"
                                                                        aria-label="Revoke"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg aria-label="Revoke" width="19"
                                                                            height="20" viewBox="0 0 19 20">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#unassign">
                                                                            </use>
                                                                        </svg>
                                                                    </a>
                                                                    <a href="#" title="View" aria-label="View"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="View" width="20"
                                                                            height="20" viewBox="0 0 20 20">
                                                                            <use xlink:href="/css/common-icons.svg#view">
                                                                            </use>
                                                                        </svg>
                                                                         
                                                                    </a>
                                                                    <a href="#" title="Chat" aria-label="Chat"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="Chat" width="18"
                                                                            height="18" viewBox="0 0 18 18"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#chat-icon">
                                                                            </use>
                                                                        </svg>
                                                                         
                                                                    </a>
                                                                    <a href="#" title="Feedback"
                                                                        aria-label="Feedback"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="Rating" width="22"
                                                                            height="22" viewBox="0 0 22 22"
                                                                            fill="none">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#rating-icon">
                                                                            </use>
                                                                        </svg>
                                                                         
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td class="text-center align-middle">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" aria-label="Select Team">
                                                            </td>
                                                            <td class="align-middle">
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div>
                                                                        <img width="50" height="50"
                                                                            src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                                                            class="rounded-circle" alt="Image">
                                                                    </div>
                                                                    <div class="pt-2">
                                                                        <div class="font-family-secondary leading-none">
                                                                            Dori
                                                                            Griffiths</div>
                                                                        <a href="#"
                                                                            class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle">
                                                                Additional Pay Label
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                $00:00
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                08/21/2022 9:45 AM
                                                            </td>
                                                            <td class="text-center align-middle">$00:00</td>
                                                            <td class="align-middle">
                                                                <div class="d-flex actions justify-content-center">
                                                                    <a href="#" title="Revoke"
                                                                        aria-label="Revoke"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg aria-label="Revoke" width="19"
                                                                            height="20" viewBox="0 0 19 20">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#unassign">
                                                                            </use>
                                                                        </svg>
                                                                    </a>
                                                                    <a href="#" title="View" aria-label="View"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="View" width="20"
                                                                            height="20" viewBox="0 0 20 20">
                                                                            <use xlink:href="/css/common-icons.svg#view">
                                                                            </use>
                                                                        </svg>
                                                                         
                                                                    </a>
                                                                    <a href="#" title="Chat" aria-label="Chat"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="Chat" width="18"
                                                                            height="18" viewBox="0 0 18 18"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#chat-icon">
                                                                            </use>
                                                                        </svg>
                                                                         
                                                                    </a>
                                                                    <a href="#" title="Feedback"
                                                                        aria-label="Feedback"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="Rating" width="22"
                                                                            height="22" viewBox="0 0 22 22"
                                                                            fill="none">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#rating-icon">
                                                                            </use>
                                                                        </svg>
                                                                         
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td class="text-center align-middle">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" aria-label="Select Team">
                                                            </td>
                                                            <td class="align-middle">
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div>
                                                                        <img width="50" height="50"
                                                                            src="/tenant-resources/images/portrait/small/avatar-s-20.jpg"
                                                                            class="rounded-circle" alt="Image">
                                                                    </div>
                                                                    <div class="pt-2">
                                                                        <div class="font-family-secondary leading-none">
                                                                            Dori
                                                                            Griffiths</div>
                                                                        <a href="#"
                                                                            class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="align-middle">
                                                                Additional Pay Label
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                $00:00
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                08/21/2022 9:45 AM
                                                            </td>
                                                            <td class="text-center align-middle">$00:00</td>
                                                            <td class="align-middle">
                                                                <div class="d-flex actions justify-content-center">
                                                                    <a href="#" title="Revoke"
                                                                        aria-label="Revoke"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        <svg aria-label="Revoke" width="19"
                                                                            height="20" viewBox="0 0 19 20">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#unassign">
                                                                            </use>
                                                                        </svg>
                                                                    </a>
                                                                    <a href="#" title="View" aria-label="View"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="View" width="20"
                                                                            height="20" viewBox="0 0 20 20">
                                                                            <use xlink:href="/css/common-icons.svg#view">
                                                                            </use>
                                                                        </svg>
                                                                         
                                                                    </a>
                                                                    <a href="#" title="Chat" aria-label="Chat"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="Chat" width="18"
                                                                            height="18" viewBox="0 0 18 18"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#chat-icon">
                                                                            </use>
                                                                        </svg>
                                                                         
                                                                    </a>
                                                                    <a href="#" title="Feedback"
                                                                        aria-label="Feedback"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                         
                                                                        <svg aria-label="Rating" width="22"
                                                                            height="22" viewBox="0 0 22 22"
                                                                            fill="none">
                                                                            <use
                                                                                xlink:href="/css/common-icons.svg#rating-icon">
                                                                            </use>
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
                                        <p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100
                                            entries</p>
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
                                            <li class="page-item active"><a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
        </div><!-- /Service 2 Assigned Providers --> --}}
        
</div>
              