<div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title fs-5" id="adminStaffModalLabel">Admin Staff</h2>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="row">
        <div class="col-lg-12">
          <h3>All Admin Staff</h3>
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
                  <th scope="col" class="text-center align-middle">
                    <input class="form-check-input" type="checkbox" wire:model.defer="selectAll" wire:click="updateSelectAll" aria-label="Select All Teams">
                  </th>
                  <th class="align-middle" scope="col">Admin</th>
                  <th class="align-middle" scope="col">Phone Number</th>
                  <th class="align-middle" width="18%">Status</th>
                  <th class="align-middle">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($adminStaff as $admin)
                <tr role="row" class="odd">
                  <td class="text-center align-middle">
                    <input class="form-check-input" type="checkbox" value="{{$admin->id}}" wire:model.defer="selectedStaff" aria-label="Select Team">
                  </td>
                  <td class="align-middle">
                    <div class="d-flex gap-2 align-items-center">
                      <div>
                        <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
                      </div>
                      <div class="pt-2">
                        <div class="font-family-secondary leading-none">{{$admin->name}}</div>
                        <a href="" class="font-family-secondary"><small>{{$admin->email}}</small></a>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">{{$admin->phone}}</td>
                  <td class="align-middle text-center">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="adminStaff1" checked>
                      <label class="form-check-label" for="adminStaff1">Visible</label>
                      <label class="form-check-label" for="adminStaff1">Manage</label>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <a href="" title="Delete" aria-label="Delete" class="btn btn-sm btn-secondary rounded btn-hs-icon mx-auto">
                      <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.4408 4.2H12.6448C12.6448 3.64305 12.4234 3.1089 12.0292 2.71508C11.635 2.32125 11.1003 2.1 10.5428 2.1C9.98533 2.1 9.45067 2.32125 9.05647 2.71508C8.66226 3.1089 8.4408 3.64305 8.4408 4.2ZM6.33878 4.2C6.33878 3.08609 6.7817 2.0178 7.57011 1.23015C8.35852 0.442499 9.42784 0 10.5428 0C11.6578 0 12.7271 0.442499 13.5155 1.23015C14.3039 2.0178 14.7469 3.08609 14.7469 4.2H20.0019C20.2807 4.2 20.548 4.31062 20.7451 4.50754C20.9422 4.70445 21.0529 4.97152 21.0529 5.25C21.0529 5.52848 20.9422 5.79555 20.7451 5.99246C20.548 6.18937 20.2807 6.3 20.0019 6.3H19.0749L18.1437 17.157C18.0542 18.2054 17.5741 19.182 16.7983 19.8937C16.0225 20.6053 15.0076 21.0001 13.9544 21H7.13124C6.07803 21.0001 5.06314 20.6053 4.28736 19.8937C3.51158 19.182 3.03143 18.2054 2.94191 17.157L2.01072 6.3H1.08373C0.80498 6.3 0.537651 6.18937 0.340549 5.99246C0.143446 5.79555 0.0327148 5.52848 0.0327148 5.25C0.0327148 4.97152 0.143446 4.70445 0.340549 4.50754C0.537651 4.31062 0.80498 4.2 1.08373 4.2H6.33878ZM13.6959 10.5C13.6959 10.2215 13.5851 9.95445 13.388 9.75754C13.1909 9.56062 12.9236 9.45 12.6448 9.45C12.3661 9.45 12.0988 9.56062 11.9017 9.75754C11.7046 9.95445 11.5938 10.2215 11.5938 10.5V14.7C11.5938 14.9785 11.7046 15.2455 11.9017 15.4425C12.0988 15.6394 12.3661 15.75 12.6448 15.75C12.9236 15.75 13.1909 15.6394 13.388 15.4425C13.5851 15.2455 13.6959 14.9785 13.6959 14.7V10.5ZM8.4408 9.45C8.71954 9.45 8.98687 9.56062 9.18398 9.75754C9.38108 9.95445 9.49181 10.2215 9.49181 10.5V14.7C9.49181 14.9785 9.38108 15.2455 9.18398 15.4425C8.98687 15.6394 8.71954 15.75 8.4408 15.75C8.16205 15.75 7.89472 15.6394 7.69762 15.4425C7.50052 15.2455 7.38979 14.9785 7.38979 14.7V10.5C7.38979 10.2215 7.50052 9.95445 7.69762 9.75754C7.89472 9.56062 8.16205 9.45 8.4408 9.45ZM5.03552 16.9785C5.0803 17.5029 5.32053 17.9913 5.70864 18.3472C6.09675 18.703 6.60445 18.9003 7.13124 18.9H13.9544C14.4808 18.8998 14.988 18.7023 15.3757 18.3465C15.7633 17.9907 16.0033 17.5025 16.048 16.9785L16.9645 6.3H4.12115L5.03763 16.9785H5.03552Z" fill="black"></path>
                      </svg>
                    </a>
                  </td>
                </tr>
                @endforeach
                {{-- <tr role="row" class="even">
                  <td class="text-center align-middle">
                    <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
                  </td>
                  <td class="align-middle">
                    <div class="d-flex gap-2 align-items-center">
                      <div>
                        <img width="50" height="50" src="/tenant/images/portrait/small/avatar-s-20.jpg" class="rounded-circle" alt="Image">
                      </div>
                      <div class="pt-2">
                        <div class="font-family-secondary leading-none">Dori Griffiths</div>
                        <a href="" class="font-family-secondary"><small>dorigriffit@gmail.com</small></a>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle">(923) 023-9683</td>
                  <td class="align-middle text-center"></td>
                  <td class="align-middle text-center">
                    <a href="" title="Add" aria-label="Add" class="btn btn-hs-icon p-0 mx-auto">
                      <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.0007 0.332031C6.0052 0.332031 0.333984 6.00324 0.333984 12.9987C0.333984 19.9942 6.0052 25.6654 13.0007 25.6654C19.9961 25.6654 25.6673 19.9942 25.6673 12.9987C25.6673 6.00324 19.9961 0.332031 13.0007 0.332031ZM14.1522 17.6048C14.1522 17.9102 14.0308 18.2031 13.8149 18.419C13.5989 18.635 13.3061 18.7563 13.0007 18.7563C12.6952 18.7563 12.4024 18.635 12.1864 18.419C11.9705 18.2031 11.8491 17.9102 11.8491 17.6048V14.1502H8.39459C8.08919 14.1502 7.7963 14.0289 7.58035 13.8129C7.3644 13.597 7.24308 13.3041 7.24308 12.9987C7.24308 12.6933 7.3644 12.4004 7.58035 12.1845C7.7963 11.9685 8.08919 11.8472 8.39459 11.8472H11.8491V8.39264C11.8491 8.08724 11.9705 7.79434 12.1864 7.57839C12.4024 7.36244 12.6952 7.24112 13.0007 7.24112C13.3061 7.24112 13.5989 7.36244 13.8149 7.57839C14.0308 7.79434 14.1522 8.08724 14.1522 8.39264V11.8472H17.6067C17.9121 11.8472 18.205 11.9685 18.421 12.1845C18.6369 12.4004 18.7582 12.6933 18.7582 12.9987C18.7582 13.3041 18.6369 13.597 18.421 13.8129C18.205 14.0289 17.9121 14.1502 17.6067 14.1502H14.1522V17.6048Z"/>
                      </svg>
                    </a>
                  </td>
                </tr> --}}
                
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