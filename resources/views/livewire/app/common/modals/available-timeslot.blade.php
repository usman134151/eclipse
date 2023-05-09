<div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title fs-5" id="availableTimeslotLabel">
            Available Timeslot
        </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <h5 class="font-family-tertiary text-center mb-4">
            Available Timeslot in Booking
        </h5>
        <div class="row">
            <div class="col-12">
                @for ($i = 1; $i <= 3; $i++)
                <div class="d-flex flex-column flex-lg-row gap-3 align-items-lg-center justify-content-center mb-4">
                    <div class="d-flex">
                        <div class="d-flex flex-column justify-content-between">
                            <span class="form-label-sm fw-semibold">
                                Start Time
                            </span>
                            <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                    <div class="hours">12</div>
                                    <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                    </svg>
                                    <div class="mins">59</div>
                                </div>
                                <div class="form-check form-switch form-switch-column mb-0">
                                    <input checked class="form-check-input" type="checkbox" role="switch" id="pm" aria-label="PM">
                                    <label class="form-check-label" for="pm">AM</label>
                                    <label class="form-check-label" for="pm">PM</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="d-flex flex-column justify-content-between">
                            <span class="form-label-sm">
                                End Time
                            </span>
                            <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                    <div class="hours">12</div>
                                    <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                    </svg>
                                    <div class="mins">59</div>
                                </div>
                                <div class="form-check form-switch form-switch-column mb-0">
                                    <input class="form-check-input" type="checkbox" role="switch" id="am" aria-label="AM">
                                    <label class="form-check-label" for="am">AM</label>
                                    <label class="form-check-label" for="am">PM</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-12 form-actions">
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-outline-dark" data-bs-dismiss="modal">
                    Cancel
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn rounded w-100 btn-primary">
                    Add
                </button>
            </div>
        </div>
    </div>
</div>