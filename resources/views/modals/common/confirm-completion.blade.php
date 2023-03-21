<div class="modal fade" id="confirmCompletion" tabindex="-1" aria-labelledby="confirmCompletionLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title fs-5 text-center" id="confirmCompletion">Confirm Completion</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-lg-0  gap-2">
                        <div class="d-flex justify-between">
                            <div class="col-8 ">
                                <label class="form-label">Mark Booking as:</label>
                            </div>
                            <div class="col-4 d-flex gap-1">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/customer.svg#customer-signature"></use>
                                </svg>
                                <h6>Customer Signature</h6>
                            </div>
                        </div>
                        <div class="mb-2 d-flex gap-2 ">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="completed" id="completed" checked>
                                <label class="form-check-label" for="completed">
                                    Completed
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="no-show" id="no-show">
                                <label class="form-check-label" for="no-show">
                                    No Show
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="cancellation" id="cancellation">
                                <label class="form-check-label" for="cancellation">
                                    Cancellation
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <label class="form-label" for="notes-column">
                                Notes
                                <svg aria-label="" width="15" height="16" viewBox="0 0 15 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="/css/provider.svg#fill-question"></use>
                                </svg>
                            </label>
                            <textarea class="form-control" rows="3" placeholder="" name="notesColumn"
                                id="notes-column"></textarea>
                        </div>
                    </div>


                </div>
                <div class="table-responsive">
                    <table id="remittances" class="table table-hover" aria-label="Remittance">
                        <thead>
                            <tr role="row">

                                <th scope="col">Provider</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Feedback</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $status = ['1', '2', '3'];
                            $statusCode = ['bg-success', 'bg-gray', 'bg-warning'];
                            @endphp
                            @for ($i = 1; $i <= 5; $i++) <tr role="row"
                                class="{{ ($i % 2 == 0) ? 'even' : 'odd' }} {{ $statusCode[array_rand($status)] }}">
                                <tr role="row" class="odd">

                                    <td>
                                        <div class="row g-2">
                                            <div class="col-md-2">
                                                <img src="/tenant/images/portrait/small/avatar-s-20.jpg"
                                                    class="img-fluid rounded-circle" alt="Image of Team Profile">
                                            </div>
                                            <div class="col-md-10">
                                                <h6 class="fw-semibold">
                                                    Dori Griffiths
                                                </h6>
                                                <p>dorigriffit@gmail.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="row g-2">
                                            <div class="col-md-2">
                                                <div class="uploaded-data d-flex">
                                                    <div class="font-family-secondary d-flex">
                                                        <x-icon name="filled-star" />
                                                        <x-icon name="filled-star" />
                                                        <x-icon name="filled-star" />
                                                        <x-icon name='star' />
                                                        <x-icon name='star' />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><textarea class="form-control" name="" id="" cols="30" rows="1"
                                            placeholder="Enter Feedback"></textarea></td>

                                </tr>

                                @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row justify-content-center w-100 mb-2">
                    <div class="col-lg-3">
                        <button type="button" class="btn rounded w-100 btn-outline-dark"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                    <div class="col-lg-3">
                        <button type="button" class="btn rounded w-100 btn-primary"
                            data-bs-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
