<div>
     <!-- Add Customized Form section start -->
     <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form">
                                         {{-- updated by shanila to add csrf--}}
                                         @csrf
                                         {{-- update ended by shanila --}}
                                        <div class="row">
                                            <div class="col-md-12 mb-md-2">
                                                <h1>Add Customized Form</h1>
                                            </div>
                                            <div class="col-md-12 mb-md-2">
                                                <p>Add questions to create your form. When you're finished, press "Publish Form"</p>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="form-column"> Form <span class="text-danger" aria-hidden="true">*</span></label>
                                                        <select class="form-select" id="form-column">
                                                            <option selected>Select From Name</option>
                                                            <option value="1">Customer Request Form</option>
                                                            <option value="2">Customer Lead & Quote Form</option>
                                                            <option value="3">New Provider Application</option>
                                                            <option value="3">New Provider Screening</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Begin: This is conditional, link with select "Form" / option "Customer Request Form"   -->
                                            <!-- <div class="col-md-6 col-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="select-industry-column">Select Industry <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Select the industry to which you want to assign this form. When customers with the selected industry request services, they will complete this form as part of step 2."></i></label>
                                                    <select class="form-select" id="select-industry-column">
                                                        <option selected>ICS Admin</option>
                                                        <option value="1">Skillr</option>
                                                        <option value="2">Spoken Language Interpreting</option>
                                                        <option value="3">New Industry</option>
                                                      </select>
                                                </div>
                                            </div> -->
                                            <!-- End: This is conditional, link with select "Form" / option "Customer Request Form"   -->

                                             <!-- Begin: This is conditional, link with select "Form" / option "Customer Lead & Quote Form"   -->
                                             <!-- <div class="col-md-6 col-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="select-industry-column">Select Industry <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Select the industry to which you want to assign this form. When customers with the selected industry request services, they will complete this form as part of step 2."></i></label>
                                                    <select class="form-select" id="select-industry-column">
                                                       <option value="1">General</option>
                                                       <option value="5">Partner General</option>
                                                       <option value="6">Post Production Editing</option>
                                                       <option value="7">Religion</option>
                                                       <option value="8">Education K 12</option>
                                                       <option value="9">Higher Education</option>
                                                       <option value="10">FRBNY Interpreting</option>
                                                       <option value="11">Travel</option>
                                                       <option value="12">Administration</option>
                                                       <option value="14">ICS Administrative</option>
                                                       <option value="15">ICS Admin</option>
                                                       <option value="16">OGS</option>
                                                       <option value="17">FRBNY CART</option>
                                                       <option value="18">Skillr</option>
                                                       <option value="19">Spoken Language Interpreting</option>
                                                       <option value="20">Translation</option>
                                                       <option value="21">New Industry</option>
                                                       <option value="22">Johnn tooth</option>
                                                      </select>
                                                </div>
                                            </div> -->
                                            <!-- End: This is conditional, link with select "Form" / option "Customer Lead & Quote Form"   -->

                                            <!-- Begin: This is conditional, link with select "Form" / option "New Provider Screening"   -->
                                            <!-- <div class="col-md-6 col-12">
                                                <div class="mb-4">
                                                      <div class="form-group">
                                                        <label for="screening-name-column">Screening Name</label>
                                                        <input type="text" id="screening-name-column"
                                                        class="form-control" placeholder="Enter Name"
                                                        name="screening-name-column" />
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- End: This is conditional, link with select "Form" / option "New Provider Screening"   -->

                                            <!-- Begin: This is conditional, link with select "Form" / option "Customer Request Form"   -->
                                            <!-- <div class="col-md-12">
                                                <div class="mb-4">
                                                    <div class="form-group">
                                                        <label for="form-name-column">Form Name</label>
                                                        <input type="text" id="form-name-column"
                                                        class="form-control" placeholder="Enter Request From Name"
                                                        name="form-name-column" />
                                                    </div>
                                                </div>
                                            </div> -->
                                              <!-- End: This is conditional, link with select "Form" / option "Customer Request Form"   -->

                                              <div class="col-md-12">
                                                <div class="mb-4">
                                                        <div class="form-group">
                                                            <label for="field-name-column">Field Name <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Type the question or field name you want customers to respond to."></i></label>
                                                            <input type="text" id="field-name-column"
                                                            class="form-control" placeholder="Enter Name"
                                                            name="field-name-column" />
                                                        </div>
                                                </div>
                                              </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="form-type-column"> Form Type <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Select the format you want this question to display as."></i></label>
                                                    <select class="form-select" id="form-type-column">
                                                        <option selected>Text</option>
                                                        <option value="1">Textarea</option>
                                                        <option value="2">Dropdown</option>
                                                        <option value="3">Checkbox</option>
                                                        <option value="3">Radio button</option>
                                                        <option value="3">File</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                        <div class="form-group">
                                                            <label for="placeholder-column">Placeholder <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="This is the text shown in the response field before anything is typed."></i></label>
                                                            <input type="text" id="placeholder-column"
                                                            class="form-control" placeholder="Placeholder"
                                                            name="field-name-column" />
                                                        </div>
                                                </div>
                                            </div>

                                            <!-- Begin: This is conditional, link with select "Form" / option "Customer Request Form"   -->
                                            <!-- <div class="col-md-12">
                                                <div class="mb-4">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="hide-response-from provider-column"
                                                            class="form-control"
                                                            name="response-column" />
                                                            <label for="hide-response-from provider-column">Hide Response from Provider  <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="When selected, the customers response will not display in the assigned providers 'Assignment Details'. The response will still be visible to you and the customer."></i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- End: This is conditional, link with select "Form" / option "Customer Request Form"   -->

                                            <div class="col-md-12">
                                                    <div class="mb-4">
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="required-column" name="required-column" type="checkbox" tabindex="3" />
                                                            <label class="form-check-label" for="required-column"> Required <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="When selected, the customer will be required to provide a response to the field before continuing to Step 3."></i></label>
                                                         </div>
                                                    </div>
                                            </div>

                                            <!-- Begin: This is conditional, link with select "Form" / option "New Provider Screening"   -->
                                            <!-- <div class="col-md-12">
                                                <div class="mb-4">
                                                        <div class="form-group">
                                                            <label for="title-column">Title</label>
                                                            <input type="text" id="title-column"
                                                            class="form-control" placeholder="Enter Title"
                                                            name="title-column" />
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <div class="form-group">
                                                        <label for="scenario">Scenario</label>
                                                        <textarea class="form-control" id="scenario" rows="4" name="scenario"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label for="formFile"
                                                        class="form-label">Upload File</label>
                                                    <input class="form-control" type="file" id="formFile">
                                                    <p>Maximum file size (25 MB)</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="allow-radio"
                                                            class="form-control"
                                                            name="allow-radio" />
                                                            <label for="required-column">Allow Radio</label>
                                                        </div>
                                                </div>
                                            </div> -->
                                            <!-- End: This is conditional, link with select "Form" / option "New Provider Screening"   -->

                                            <div class="col-md-8 form-actions">
                                                <div class="mb-4">
                                                    <button type="submit"
                                                    class="btn btn-primary rounded">+ Add Question</button>
                                                </div>
                                            </div>
                                             <!-- Begin: This is conditional, link with "+Add Question" button   -->
                                            <!-- <div class="col-md-4 form-actions">
                                                <div class="mb-4">
                                                    <button type="submit"
                                                    class="btn btn-primary rounded">- Remove Question</button>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                        <div class="form-group">
                                                            <label for="field-name-column">Field Name <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Type the question or field name you want customers to respond to."></i></label>
                                                            <input type="text" id="field-name-column"
                                                            class="form-control" placeholder="Enter Name"
                                                            name="field-name-column" />
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <label class="form-label" for="form-type-column"> Form Type <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="Select the format you want this question to display as."></i></label>
                                                    <select class="form-select" id="form-type-column">
                                                        <option selected>Text</option>
                                                        <option value="1">Textarea</option>
                                                        <option value="2">Dropdown</option>
                                                        <option value="3">Checkbox</option>
                                                        <option value="3">Radio button</option>
                                                        <option value="3">File</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                        <div class="form-group">
                                                            <label for="placeholder-column">Placeholder <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="This is the text shown in the response field before anything is typed."></i></label>
                                                            <input type="text" id="placeholder-column"
                                                            class="form-control" placeholder="Placeholder"
                                                            name="field-name-column" />
                                                        </div>
                                                </div>
                                            </div>

                                            Begin: This is conditional, link with select "Form" / option "Customer Request Form"
                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="hide-response-from provider-column"
                                                            class="form-control"
                                                            name="response-column" />
                                                            <label for="hide-response-from provider-column">Hide Response from Provider  <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="When selected, the customers response will not display in the assigned providers 'Assignment Details'. The response will still be visible to you and the customer."></i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            End: This is conditional, link with select "Form" / option "Customer Request Form"

                                            <div class="col-md-12">
                                                <div class="mb-4">
                                                    <div class="mb-4">
                                                        <div class="form-group">
                                                            <input type="checkbox" id="required-column"
                                                            class="form-control"
                                                            name="required-column" />
                                                            <label for="required-column">Required <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="When selected, the customer will be required to provide a response to the field before continuing to Step 3."></i></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->

                                             <!-- End: This is conditional, link with "+Add Question" button   -->

                                                    <div class="col-12 justify-content-center form-actions d-flex">
                                                        <button type="submit"
                                                        class="btn btn-primary rounded">Publish Form</button>
                                                        <button type="button"
                                                            class="btn btn-outline-dark rounded mx-2" wire:click.prevent="showList">Cancel</button>
                                                    </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Add Customized Form section end -->
</div>
