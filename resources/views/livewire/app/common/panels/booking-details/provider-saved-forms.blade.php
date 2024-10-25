<div x-data="{ step: 1 }">
    <ul class="nav nav-tabs border-0 mt-4" id="provider-saved-form-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active btn rounded p-3" :class="(step == 1) ? 'active' : 'btn-secondary border-0'"
                x-on:click.prevent="step = 1" id="checkin-tab" type="button" role="tab"
                aria-controls="checkin-tab-pane" aria-selected="true">
                Check In
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link btn rounded p-3" :class="(step == 2) ? 'active' : 'btn-secondary border-0'"
                x-on:click.prevent="step = 2" id="close-out-tab" type="button" role="tab"
                aria-controls="close-out-tab-panel" aria-selected="false">
                Close Out
            </button>
        </li>

    </ul>

    <div class="tab-content" id="provider-saved-form-content">
        <div class="tab-pane fade show active" id="checkin-tab-pane" role="tabpanel" aria-labelledby="checkin-tab"
            :class="{ 'active show': step == 1 }" x-show="step == 1">
            <div class="row align-items-center">
                <div class="col-lg-12">

                    <div class="row">
                        @if ($form_id['checkin_form_id'])
                            @livewire('app.common.forms.custom-form-display', ['showForm' => true, 'formId' => $form_id['checkin_form_id'], 'bookingId' => $booking_id, 'lastForm' => false, 'formType' => 2, 'service_id' => $service_id, 'added_by_id' => $provider_id])
                        @else
                            <small>No form available</small>
                        @endif
                    </div>

                </div>


            </div>

        </div>

        <div class="tab-pane fade" id="close-out-tab-pane" role="tabpanel" aria-labelledby="close-out-tab"
            :class="{ 'active show': step == 2 }" x-show="step == 2">
            <div class="row my-4">
                <div class="col-lg-12">
                    {{-- <div class="d-lg-flex justify-content-between align-items-center mb-5">
                        <h2 class="mb-lg-0">Close Out Form
                        </h2>
                    </div> --}}
                    @if ($form_id['checkout_form_id'])
                        @livewire('app.common.forms.custom-form-display', ['showForm' => true, 'formId' => $form_id['checkout_form_id'], 'bookingId' => $booking_id, 'lastForm' => false, 'formType' => 3, 'service_id' => $service_id, 'added_by_id' => $provider_id])
                    @else
                        <small>No form available</small>
                    @endif
                </div>
            </div>

        </div>


    </div>
</div>
