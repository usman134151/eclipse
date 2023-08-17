 <!-- Assignment Discussions -->
 <div>

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
                                        @foreach($logs as $index=>$log)
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
</div>