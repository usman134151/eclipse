<div class="row">
                                    <div class="col-12">
                                        <form class="form">
                                            {{-- updated by shanila to add csrf--}}
                                            @csrf
                                            {{-- update ended by shanila --}}
                                            <div class="col-md-8 mb-md-2">
                                                <h2>Drive Documents</h2>
                                            </div>
                                            <div class="col-md-12 mb-md-2">
                                                <div class="row">
                                                    <div class="col-md-12 mb-md-2">
                                                        <div class="d-flex justify-content-md-center">
                                                            <div>
                                                                <h3 class="text-md-center">
                                                                    Upload Document
                                                                </h3>
                                                                <input class="form-control form-control-sm" type="file"
                                                                    aria-label="Upload File">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-md-flex justify-content-center gap-3 mt-5">
                                                    <div>
                                                        <img src="/tenant/images/img-placeholder-document.jpg"
                                                            alt="Preview File" />
                                                        <p>File Name</p>
                                                    </div>
                                                    <div>
                                                        <img src="/tenant/images/img-placeholder-document.jpg"
                                                            alt="Preview File" />
                                                        <p>File Name</p>
                                                    </div>
                                                    <div>
                                                        <img src="/tenant/images/img-placeholder-document.jpg"
                                                            alt="Preview File" />
                                                        <p>File Name</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 form-actions">
                                                <button type="button"
                                                    class="btn btn-outline-dark rounded px-4 py-2 mx-2"
                                                    x-on:click="$wire.switch('service-catalog')">
                                                    Back
                                                </button>
                                                <button type="submit" class="btn btn-primary rounded px-4 py-2">
                                                    Submit
                                                </button>
                                                {{-- <button type="button" class="btn btn-primary rounded px-4 py-2">
                                                    Next
                                                </button> --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>