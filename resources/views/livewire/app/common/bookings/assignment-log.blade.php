 <!-- Assignment Discussions -->
 <div>
                <div class="between-section-segment-spacing">
                                            <div class="mb-4">
                                                <h2>Assignment Discussions</h2>
                                            </div>
                                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                                <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span>
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label="Export Button" width="23" height="26"
                                                            viewBox="0 0 23 26">
                                                            <use xlink:href="/css/common-icons.svg#document-dropdown">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                    </span>
                                                </button>
                                                <a href="#" class="btn btn-primary btn-has-icon rounded">
                                                    <svg aria-label="Add Date" width="20" height="20"
                                                        viewBox="0 0 20 20">
                                                        <use xlink:href="/css/common-icons.svg#plus">
                                                        </use>
                                                    </svg>
                                                    Add New Comment
                                                </a>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2">
                                                <div class="d-inline-flex align-items-center gap-4">
                                                    <div class="d-inline-flex align-items-center gap-4">
                                                        <label for="show_records_number-coulmn"
                                                            class="form-label-sm mb-0">Show</label>
                                                        <select class="form-select form-select-sm" id="show_records_number-coulmn">
                                                            <option>10</option>
                                                            <option>15</option>
                                                            <option>20</option>
                                                            <option>25</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="d-inline-flex align-items-center gap-4">
                                                    <label for="search-record-column" class="form-label-sm mb-0">Search</label>
                                                    <input type="search" class="form-control form-control-sm"
                                                        id="search-record-column" name="search" placeholder="Search here"
                                                        autocomplete="on" />
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
                                                                        <th scope="col">Name</th>
                                                                        <th scope="col" width="50%">Comment</th>
                                                                        <th scope="col" class="">Date/Time</th>
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
                                                                                        class="rounded-circle"
                                                                                        alt="User Profile Image">
                                                                                </div>
                                                                                <div class="pt-2">
                                                                                    <div class="font-family-secondary leading-none">
                                                                                        Dori
                                                                                        Griffiths (Admin)</div>
                                                                                    <a href="#"
                                                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                                            do eiusmod tempor incididunt @provider @Supervisor
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div>08/21/2022</div>
                                                                            <small>9:45 AM</small>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div class="d-flex actions justify-content-center">
                                                                                <a href="#" title="Revoke"
                                                                                    aria-label="Revoke"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    {{-- update by Shanila to add svg icon --}}
                                                                                    <svg aria-label="Revoke" width="21"
                                                                                        height="21" viewBox="0 0 21 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                                        class="rounded-circle"
                                                                                        alt="User Profile Image">
                                                                                </div>
                                                                                <div class="pt-2">
                                                                                    <div class="font-family-secondary leading-none">
                                                                                        Dori
                                                                                        Griffiths (Admin)</div>
                                                                                    <a href="#"
                                                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                                            do eiusmod tempor incididunt @provider @Supervisor
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div>08/21/2022</div>
                                                                            <small>9:45 AM</small>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div class="d-flex actions justify-content-center">
                                                                                <a href="#" title="Revoke"
                                                                                    aria-label="Revoke"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    {{-- update by Shanila to add svg icon --}}
                                                                                    <svg aria-label="Revoke" width="21"
                                                                                        height="21" viewBox="0 0 21 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                                        class="rounded-circle"
                                                                                        alt="User Profile Image">
                                                                                </div>
                                                                                <div class="pt-2">
                                                                                    <div class="font-family-secondary leading-none">
                                                                                        Dori
                                                                                        Griffiths (Admin)</div>
                                                                                    <a href="#"
                                                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                                            do eiusmod tempor incididunt @provider @Supervisor
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div>08/21/2022</div>
                                                                            <small>9:45 AM</small>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div class="d-flex actions justify-content-center">
                                                                                <a href="#" title="Revoke"
                                                                                    aria-label="Revoke"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    {{-- update by Shanila to add svg icon --}}
                                                                                    <svg aria-label="Revoke" width="21"
                                                                                        height="21" viewBox="0 0 21 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                                        class="rounded-circle"
                                                                                        alt="User Profile Image">
                                                                                </div>
                                                                                <div class="pt-2">
                                                                                    <div class="font-family-secondary leading-none">
                                                                                        Dori
                                                                                        Griffiths (Admin)</div>
                                                                                    <a href="#"
                                                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                                            do eiusmod tempor incididunt @provider @Supervisor
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div>08/21/2022</div>
                                                                            <small>9:45 AM</small>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div class="d-flex actions justify-content-center">
                                                                                <a href="#" title="Revoke"
                                                                                    aria-label="Revoke"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    {{-- update by Shanila to add svg icon --}}
                                                                                    <svg aria-label="Revoke" width="21"
                                                                                        height="21" viewBox="0 0 21 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                                                                                        class="rounded-circle"
                                                                                        alt="User Profile Image">
                                                                                </div>
                                                                                <div class="pt-2">
                                                                                    <div class="font-family-secondary leading-none">
                                                                                        Dori
                                                                                        Griffiths (Admin)</div>
                                                                                    <a href="#"
                                                                                        class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                                                            do eiusmod tempor incididunt @provider @Supervisor
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div>08/21/2022</div>
                                                                            <small>9:45 AM</small>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <div class="d-flex actions justify-content-center">
                                                                                <a href="#" title="Revoke"
                                                                                    aria-label="Revoke"
                                                                                    class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                                    {{-- update by Shanila to add svg icon --}}
                                                                                    <svg aria-label="Revoke" width="21"
                                                                                        height="21" viewBox="0 0 21 21">
                                                                                        <use
                                                                                            xlink:href="/css/common-icons.svg#recycle-bin">
                                                                                        </use>
                                                                                    </svg>
                                                                                    {{-- End of update by Shanila --}}
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
                </div><!-- /Assignment Discussions -->
                        <!-- Assignment Status -->
                <div class="between-section-segment-spacing">
                    <h2>Assignment Status</h2>
                    <div class="mb-4">
                        <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>
                                {{-- Updated by Shanila to Add svg icon --}}
                                <svg aria-label="Export Button" width="23" height="26"
                                    viewBox="0 0 23 26">
                                    <use xlink:href="/css/common-icons.svg#document-dropdown">
                                    </use>
                                </svg>
                                {{-- End of update by Shanila --}}
                            </span>
                        </button>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-inline-flex align-items-center gap-4">
                            <div class="d-inline-flex align-items-center gap-4">
                                <label for="show_records_data" class="form-label-sm mb-0">Show</label>
                                <select class="form-select form-select-sm" id="show_records_data">
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-inline-flex align-items-center gap-4">
                            <label for="search-data" class="form-label-sm mb-0">Search</label>
                            <input type="search" class="form-control form-control-sm" id="search-data"
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
                                                <th scope="col">Interpreter</th>
                                                <th scope="col" class="text-center">Running Late</th>
                                                <th scope="col">Check-in</th>
                                                <th scope="col">Check-out</th>
                                                <th scope="col" class="text-center">Feedback</th>
                                                <th scope="col" class="">Status</th>
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
                                                                class="rounded-circle"
                                                                alt="User Profile Image">
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
                                                <td class="align-middle text-center">
                                                    10
                                                </td>
                                                <td class="align-middle">
                                                    <div>05/25/2022</div>
                                                    <div>7:15 PM</div>
                                                </td>
                                                <td class="align-middle">
                                                    <div>08/21/2022</div>
                                                    <div>9:45 AM</div>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="#">5</a>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center gap-1">
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label="pending" class="fill-warning"
                                                            width="12" height="12"
                                                            viewBox="0 0 512 512">
                                                            <use
                                                                xlink:href="/css/common-icons.svg#yellow-dot">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        Pending
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex actions justify-content-center">
                                                        <a href="#" title="View" aria-label="View"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="View" width="20"
                                                                height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#view">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Chat" aria-label="Chat"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Chat" width="18"
                                                                height="18" viewBox="0 0 18 18"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#chat-icon">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Download PDF"
                                                            aria-label="Download PDF"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Download PDF" width="17"
                                                                height="21" viewBox="0 0 17 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#download-pdf">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Accept"
                                                            aria-label="Accept"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Accept" width="22"
                                                                height="21" viewBox="0 0 22 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#accept">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Decline"
                                                            aria-label="Decline"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Decline" width="21"
                                                                height="21" viewBox="0 0 21 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#decline">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
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
                                                                class="rounded-circle"
                                                                alt="User Profile Image">
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
                                                <td class="align-middle text-center">
                                                    10
                                                </td>
                                                <td class="align-middle">
                                                    <div>05/25/2022</div>
                                                    <div>7:15 PM</div>
                                                </td>
                                                <td class="align-middle">
                                                    <div>08/21/2022</div>
                                                    <div>9:45 AM</div>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="#">5</a>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center gap-1">
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label="Approved" width="12"
                                                            height="12" viewBox="0 0 12 12">
                                                            <use xlink:href="/css/common-icons.svg#green-dot">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        Approved
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex actions justify-content-center">
                                                        <a href="#" title="View" aria-label="View"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="View" width="20"
                                                                height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#view">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Chat" aria-label="Chat"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Chat" width="18"
                                                                height="18" viewBox="0 0 18 18"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#chat-icon">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Download PDF"
                                                            aria-label="Download PDF"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Download PDF" width="17"
                                                                height="21" viewBox="0 0 17 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#download-pdf">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
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
                                                                class="rounded-circle"
                                                                alt="User Profile Image">
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
                                                <td class="align-middle text-center">
                                                    10
                                                </td>
                                                <td class="align-middle">
                                                    <div>05/25/2022</div>
                                                    <div>7:15 PM</div>
                                                </td>
                                                <td class="align-middle">
                                                    <div>08/21/2022</div>
                                                    <div>9:45 AM</div>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="#">5</a>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center gap-1">
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label="pending" class="fill-warning"
                                                            width="12" height="12"
                                                            viewBox="0 0 512 512">
                                                            <use
                                                                xlink:href="/css/common-icons.svg#yellow-dot">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        Pending
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex actions justify-content-center">
                                                        <a href="#" title="View" aria-label="View"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="View" width="20"
                                                                height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#view">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Chat" aria-label="Chat"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Chat" width="18"
                                                                height="18" viewBox="0 0 18 18"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#chat-icon">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Download PDF"
                                                            aria-label="Download PDF"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Download PDF" width="17"
                                                                height="21" viewBox="0 0 17 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#download-pdf">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}

                                                        </a>
                                                        <a href="#" title="Accept"
                                                            aria-label="Accept"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Accept" width="22"
                                                                height="21" viewBox="0 0 22 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#accept">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Decline"
                                                            aria-label="Decline"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Decline" width="21"
                                                                height="21" viewBox="0 0 21 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#decline">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
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
                                                                class="rounded-circle"
                                                                alt="User Profile Image">
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
                                                <td class="align-middle text-center">
                                                    10
                                                </td>
                                                <td class="align-middle">
                                                    <div>05/25/2022</div>
                                                    <div>7:15 PM</div>
                                                </td>
                                                <td class="align-middle">
                                                    <div>08/21/2022</div>
                                                    <div>9:45 AM</div>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="#">5</a>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center gap-1">
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label="Approved" width="12"
                                                            height="12" viewBox="0 0 12 12">
                                                            <use xlink:href="/css/common-icons.svg#green-dot">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        Approved
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex actions justify-content-center">
                                                        <a href="#" title="View" aria-label="View"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="View" width="20"
                                                                height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#view">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Chat" aria-label="Chat"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Chat" width="18"
                                                                height="18" viewBox="0 0 18 18"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#chat-icon">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Download PDF"
                                                            aria-label="Download PDF"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Download PDF" width="17"
                                                                height="21" viewBox="0 0 17 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#download-pdf">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
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
                                                                class="rounded-circle"
                                                                alt="User Profile Image">
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
                                                <td class="align-middle text-center">
                                                    10
                                                </td>
                                                <td class="align-middle">
                                                    <div>05/25/2022</div>
                                                    <div>7:15 PM</div>
                                                </td>
                                                <td class="align-middle">
                                                    <div>08/21/2022</div>
                                                    <div>9:45 AM</div>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <a href="#">5</a>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex align-items-center gap-1">
                                                        {{-- Updated by Shanila to Add svg icon --}}
                                                        <svg aria-label="pending" class="fill-warning"
                                                            width="12" height="12"
                                                            viewBox="0 0 512 512">
                                                            <use
                                                                xlink:href="/css/common-icons.svg#yellow-dot">
                                                            </use>
                                                        </svg>
                                                        {{-- End of update by Shanila --}}
                                                        Pending
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex actions justify-content-center">
                                                        <a href="#" title="View" aria-label="View"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="View" width="20"
                                                                height="20" viewBox="0 0 20 20">
                                                                <use xlink:href="/css/common-icons.svg#view">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Chat" aria-label="Chat"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Chat" width="18"
                                                                height="18" viewBox="0 0 18 18"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#chat-icon">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Download PDF"
                                                            aria-label="Download PDF"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Download PDF" width="17"
                                                                height="21" viewBox="0 0 17 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#download-pdf">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Accept"
                                                            aria-label="Accept"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Accept" width="22"
                                                                height="21" viewBox="0 0 22 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#accept">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
                                                        </a>
                                                        <a href="#" title="Decline"
                                                            aria-label="Decline"
                                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                            {{-- Updated by Shanila to Add svg icon --}}
                                                            <svg aria-label="Decline" width="21"
                                                                height="21" viewBox="0 0 21 21">
                                                                <use
                                                                    xlink:href="/css/common-icons.svg#decline">
                                                                </use>
                                                            </svg>
                                                            {{-- End of update by Shanila --}}
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
                </div><!-- /Assignment Status -->
                        <!-- Assignment Log -->
                <div class="between-section-segment-spacing">
                    <h2>Assignment Log</h2>
                    <div class="mb-4">
                        <button class="btn btn-outline-primary btn-has-icon btn-sm dropdown-toggle h-100"
                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>
                                {{-- Updated by Shanila to Add svg icon --}}
                                <svg aria-label="Export" width="23" height="26"
                                    viewBox="0 0 23 26">
                                    <use xlink:href="/css/common-icons.svg#document-dropdown">
                                    </use>
                                </svg>
                                {{-- End of update by Shanila --}}
                            </span>
                        </button>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="d-inline-flex align-items-center gap-4">
                            <div class="d-inline-flex align-items-center gap-4">
                                <label for="show-record-numbers" class="form-label-sm mb-0">Show</label>
                                <select class="form-select form-select-sm" id="show-record-numbers">
                                    <option>10</option>
                                    <option>15</option>
                                    <option>20</option>
                                    <option>25</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-inline-flex align-items-center gap-4">
                            <label for="search_record" class="form-label-sm mb-0">Search</label>
                            <input type="search" class="form-control form-control-sm" id="search_record"
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
                                                <th scope="col" class="text-center">#</th>
                                                <th scope="col">DATE & Time</th>
                                                <th scope="col">Activity</th>
                                                <th scope="col">IP Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($logs['data'] as $index=>$log)
                                            <tr role="row" class="odd">
                                                <td class="text-center">{{$index}}</td>
                                                <td class="">
                                                    {{$log['created_at']}}
                                                </td>
                                                <td class="">
                                                {{$log['message']}}
                                                </td>
                                                <td class="">
                                                {{$log['ip_address']}}
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
                </div><!-- /Assignment Log -->
 <div>
                     