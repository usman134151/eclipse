<div>
	<form class="form">
		<div class="row mt-2 between-section-segment-spacing">
		  <div class="col-12 text-center">
			<div class="d-inline-block position-relative">
			  <img src="/tenant/images/portrait/small/avatar-s-9.jpg" class="img-fluid rounded-circle" alt="Profile Image of Admin Staff Team"/>
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
				  <select class="form-select select2" aria-label="Select Lead Admin" name="lead-admin" id="lead-admin" required aria-required="true">
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
			  <div class="col-md-6 col-12">
				  <label class="form-label" for="tags">
					Tags
				  </label>
				  <textarea
				  class="form-control"
				  placeholder="Enter Tags"
				  name="tags"
				  id="tags"
				  ></textarea>
			  </div>
			</div>
		  </div>
		</div>
		<div class="row">
		  <div class="d-flex justify-content-center gap-2 col-12 form-actions">
			<a
				href="javascript:void(0);"
				class="btn btn-outline-dark rounded px-4"
				role="button"
				wire:click.prevent="showList"
			>
			Back</a>
			<button type="submit" class="btn btn-primary rounded px-4">Save & Exit</button>
			<button type="submit" class="btn btn-primary rounded px-4">Next</button>
		  </div>
		</div>
	  </form>
</div>
@push('scripts')
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
</script>
@endpush