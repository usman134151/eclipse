<div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                        Add Provider Team
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="home" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                     {{-- End of update by Shanila --}}
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Providers
                            </li>
                            <li class="breadcrumb-item">
                                Provider Teams
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="card">
    <div class="card-body">
        <form class="form">
            @csrf
            <div class="row between-section-segment-spacing">
              <div class="col-md-12">
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
                        placeholder="Enter Team Name"
                        required
                        aria-required="true"
                        />
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                        <label class="form-label" for="provider">Providers
                            <span class="mandatory" aria-hidden="true">*</span>
                        </label>
                        <div class="mb-1">
                            <button type="button"
                                class="btn btn-has-icon px-0 btn-multiselect-popup"
                                data-bs-toggle="modal"
                                data-bs-target="#">
                                {{-- Updated by Shanila to Add svg icon--}}
                                <svg aria-label="Select Providers" width="25"
                                    height="18" viewBox="0 0 25 18">
                                    <use
                                        xlink:href="/css/common-icons.svg#right-color-arrow">
                                    </use>
                                </svg>
                                Select Providers
                            </button>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                                <label class="form-label">Accommodation</label>
                                {!! App\Helpers\SetupHelper::createDropDown('Accommodation', 'id',
        'name', 'status', 1, 'name', true, '',
        '','accommodation_filter') !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                        <label class="form-label">Service</label>
                        <select data-placeholder="" multiple
                            class="form-select chosen-select" tabindex="">
                            <option value=""></option>
                            <option selected>Language Translation</option>
                            <option selected>Real Time Captioning</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                        <label class="form-label">Specialization</label>
                      {{-- updated by shanila to add multiselectdropdown --}}
                {!! App\Helpers\SetupHelper::createDropDown('Specialization', 'id',
                'name', 'status', 1, 'name', true, '',
                '','specialization_filter') !!}
                 {{--ended updated--}}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                        <label class="form-label">Team Tags</label>
                        <select data-placeholder="" multiple
                            class="form-select chosen-select" tabindex="">
                            <option value=""></option>
                            <option selected>@admin_company</option>
                            <option selected>@booking_start_at</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <label class="form-label" for="team_notes">
                        Team Description
                    </label>
                    <textarea
                    class="form-control"
                    placeholder="Add Team Description"
                    name="team_notes"
                    id="team_notes"
                    ></textarea>
                </div>
                  <div class="col-md-6 col-12">
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
            <div class="row">
              <div class="d-flex justify-content-center gap-2 col-12 form-actions">
                <a
                    type="button" class="btn btn-outline-dark rounded mx-2"
                    wire:click.prevent="showList"
                >
                Cancel</a>
                <button type="submit" class="btn btn-primary rounded px-4">Add</button>
              </div>
            </div>
          </form>
    </div>
   </div>
</div>


@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script>
    document.addEventListener("livewire:load", () => {
		let el = $('.select2')
		initSelect()

		Livewire.hook('message.processed', (message, component) => {
			initSelect()
		})

		// Only needed if doing save without redirect
		/* Livewire.on('setCategoriesSelect', values => {
		  el.val(values).trigger('change.select2')
		})*/

		// Will come into play if and when wire:model is applied
		// el.on('change', function (e) {
		// 	@this.set('productCategories', el.select2("val"))
		// })

		function initSelect () {
			el.select2({
				placeholder: '{{__('Select your option')}}',
				allowClear: !el.attr('required'),
			})
		}
	})

	new Pikaday({
		field: document.getElementById('service_start_date'),
		format: 'MM/DD/YYYY'
	})
</script>
@endpush