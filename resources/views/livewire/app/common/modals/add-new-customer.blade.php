<div class="modal-content">
    <div class="modal-header justify-center">
        <h2 class="modal-title fs-5 text-center" id="addNewCustomerLabel">ADD NEW CUSTOMER</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="row">

            <div class="col-lg-12 d-flex gap-2">

                <div class="col-md-6 col-12">
                    <div class="mb-4">
                      <label class="form-label" for="first-name-column">First
                      Name</label>
                      <input type="text" id="first-name-column"
                        class="form-control" placeholder="First Name"
                        name="fname-column" />
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                      <label class="form-label" for="first-name-column">Last Name</label>
                      <input type="text" id="first-name-column"
                        class="form-control" placeholder="Last Name"
                        name="lname-column" />
                    </div>
                  </div>
            </div>
            <div class="col-lg-12 d-flex gap-2">

                <div class="col-md-6 col-12">
                    <div class="mb-4">
                      <label class="form-label" for="first-name-column">Role</label>
                      <select class="form-select" id="severity-column">
                        <option selected>Select Role</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                      <label class="form-label" for="first-name-column">Email Address</label>
                      <input type="text" id="first-name-column"
                        class="form-control" placeholder="Email Address"
                        name="email-column" />
                    </div>
                  </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="mb-4">
                  <label class="form-label" for="first-name-column">Phone Number</label>
                  <input type="number" id="first-name-column"
                    class="form-control" placeholder="Enter Phone Number"
                    name="phone-column" />
                </div>
              </div>

        </div>
    </div>
    <div class="modal-footer">
        <div class="row justify-content-center w-100 mb-2">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark"
                    data-bs-dismiss="modal">Cancel</button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-primary">Add</button>
            </div>
        </div>
    </div>
</div>