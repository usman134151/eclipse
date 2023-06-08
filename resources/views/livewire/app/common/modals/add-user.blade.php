<div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title fs-5" id="addModalLabel">ADD USER</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
       
        <div class="col-md-12 mb-md-2">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <p class="fs-5">Filter By Accommodation</p>
                    <div class="content-body">
                        <div class="card">
                            <div class="card-body shadow-sm">
                                <input type="search" class="form-control" aria-label="Search" name="search" placeholder="Search" autocomplete="on"/>
                                <div class="overflow-y-auto max-h-30rem">
                                    <table id="unassigned_data" class="table table-hover" aria-label="Select Accommodation Table">
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td class="text-start">
                                                    <p>Information Technology</p>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="text-start">
                                                    <p>Business Preachers</p>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="text-start">
                                                    <p>Legal</p>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="text-start">
                                                    <p>Medical</p>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="text-start">
                                                    <p>Medical</p>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="text-start">
                                                    <p>Medical</p>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td class="text-start">
                                                    <p>Medical</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="mb-3">
                        <p class="fs-5">Select User</p>
                    </div>
                    <div class="card">
                        <div class="card-body shadow-sm">
                            <input type="search" class="form-control" aria-label="Search"  name="search" placeholder="Search" autocomplete="on"/>
                            <div class="overflow-y-auto max-h-30rem">
                                <table  class="table table-hover" aria-label="Select Service Table">
                                    <tbody>
                                        @foreach($allUsers as $user)
                                        <tr role="row" class="odd">
                                            <td class="text-start">
                                                <p>{{$user->name}}</p>
                                            </td>
                                            <td>
                                                <div class="d-flex action">
                                                    <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 10L8.66667 17L22 2" stroke="#15974F" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
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
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <div class="col-12 form-actions">
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
        </div>
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-primary">Apply</button>
        </div>
      </div>
    </div>
  </div>