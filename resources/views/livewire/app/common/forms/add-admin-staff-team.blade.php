<div>
          <!-- Basic multiple Column Form section start -->
          <section id="multiple-column-form">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <form class="form">
                      <div class="row mt-2 mb-5">
                        <div class="col-12 text-center">
                          <div class="d-inline-block position-relative profile-pic-div">
                            <img src="/tenant-resources/images/portrait/small/avatar-s-9.jpg" class="img-fluid" alt="Profile Image of Admin Staff Team"/>
                            <!-- <div>
                              <input class="position-absolute form-control" type="file" />
                            </div> -->
                            <div class="position-absolute end-0 bottom-0 p-0 d-flex justify-content-center align-items-center">
                              <svg aria-label="Upload Picture" width="57" height="57" viewBox="0 0 57 57"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/provider.svg#camera"></use>
                                        </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-md-2">
                          <h2 class="mb-5">Team Info</h2>
                          <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="team_name">
                                  Team Name <span class="mandatory" aria-hidden="true">*</span>
                                </label>
                                <input
                                  type="text"
                                  id="team_name"
                                  class="form-control"
                                  name="team_name"
                                  placeholder="Enter First Name"
                                  required
                                  aria-required="true"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label">
                                  Lead Admin(s) <span class="mandatory" aria-hidden="true">*</span>
                                </label>
                                <select class="select2 form-select" aria-label="Select Lead Admin" name="lead-admin" required aria-required="true">
                                  <option>Enter Lead Admin</option>
                                  <option>Wade Dave</option>
                                  <option>Dori Griffiths</option>
                                  <option>Gilbert Dan</option>
                                  <option>Ramon Miles</option>
                                  <option>Alexis Griffiths</option>
                                  <option>Tessa Leo</option>
                                  <option>John Cris</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="team_lead_email">
                                  Team Lead Email
                                </label>
                                <input
                                  type="email"
                                  id="team_lead_email"
                                  name="team_lead_email"
                                  class="form-control"
                                  placeholder="Enter Team Lead Email"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="team_lead_phone_number">
                                  Team Lead Phone Number
                                </label>
                                <input
                                  type="text"
                                  id="team_lead_phone_number"
                                  class="form-control"
                                  placeholder="Enter Team Lead Phone Number"
                                  name="team_lead_phone_number"
                                  />
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="team_description">
                                  Team Description
                                </label>
                                <textarea
                                class="form-control"
                                placeholder="Add Team Description"
                                name="team_description"
                                id="team_description"
                                ></textarea>
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-4">
                                <label class="form-label" for="team_notes">
                                  Team Notes
                                </label>
                                <textarea
                                class="form-control"
                                placeholder="Add Team Notes"
                                name="team_notes"
                                id="team_notes"
                                ></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 justify-content-center gap-2 d-flex mt-5">
                          <a
                            href="javascript:void(0);"
                            class="btn btn-secondary rounded px-4"
                            role="button" wire:click.prevent="showList"
                          >
                            Back</a>
                          <button type="submit" class="btn btn-primary rounded px-4">Next</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
</div>
