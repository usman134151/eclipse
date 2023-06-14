<div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title fs-5" id="billManagingModalLabel">Bill Managing</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-lg-12">
          <h3>All User</h3>
          {{-- <div class="d-flex justify-content-between mb-2">
            <div class="d-inline-flex align-items-center gap-4">
              <label for="show_records_number" class="form-label-sm mb-0">Show</label>
              <select class="form-select form-select-sm" id="show_records_number">
                <option>10</option>
                <option>15</option>
                <option>20</option>
                <option>25</option>
              </select>
            </div>
            <div class="d-inline-flex align-items-center gap-4">
              <label for="search" class="form-label-sm mb-0">Search</label>
              <input type="search" class="form-control form-control-sm" id="search" name="search" placeholder="Search here" autocomplete="on"/>
            </div>
          </div> --}}
          <div class="table-responsive">
            <table id="" class="table table-fs-md table-hover border" aria-label="">
              <thead>
                <tr role="row">
                  <th scope="col" class="text-center">
                    <input class="form-check-input" type="checkbox" wire:click="updateSelectAll"  wire:model.defer="selectAll" aria-label="Select All Teams">
                  </th>
                  <th scope="col">User</th>
                  <th scope="col">Phone Number</th>
                </tr>
              </thead>
              <tbody>
              @foreach($allUsers as $user)
                <tr role="row" class="odd">
                  <td class="text-center align-middle">
                    <input class="form-check-input" type="checkbox" value="{{$user->id}}" wire:model.defer="selectedUsersToManage" aria-label="Select Team">
                  </td>
                  <td class="align-middle">
                    <div class="d-flex gap-2 align-items-center">
                      <div>
                        <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
                      </div>
                      <div class="pt-2">
                        <div class="font-family-secondary leading-none">{{$user->name}}</div>
                        <p class="font-family-secondary"><small>{{$user->email}}</small></p>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">{{$user->phone}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {{-- <div class="d-flex justify-content-between">
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
          </div> --}}
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="col-12 form-actions">
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
        </div>
        <div class="col-lg-3">
          <button type="button" class="btn rounded w-100 btn-primary" data-bs-dismiss="modal" wire:click="updateData">Add</button>
        </div>
      </div>
    </div>
  </div>