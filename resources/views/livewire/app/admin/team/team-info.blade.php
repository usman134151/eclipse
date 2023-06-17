<div>
	<form class="form">
        {{-- updated by shanila to add csrf--}}
        @csrf
        {{-- update ended by shanila --}}
		<div class="row mt-2 between-section-segment-spacing">
			<div class="provider_image_panel">
				<div class="provider_image">
					@if ($image)
						<img class="user_img cropfile" src="{{ $image->temporaryUrl() }}">
					@else
						<img class="user_img cropfile" src="/tenant/images/img-placeholder-document.jpg">
					@endif
					<div class="input--file">
						<span>
							<img src="https://production-qa.eclipsescheduling.com/images/camera_icon.png" alt="">
						</span>
						<label for="cropfile" class="form-label visually-hidden">Input File</label>
						<input wire:model="image" wire:change="saveImage" class="form-control inputFile" accept="image/*" id="cropfile" name="image" type="file" aria-invalid="false" wire:model="image">
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
					wire:model.defer="team.team_name"/>
                    @error('team.team_name')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                    @enderror
				</div>
			  </div>
			  <div class="col-md-6 col-12">
				<div class="mb-4">
				  <label class="form-label">
					Lead Admin(s) <span class="mandatory" aria-hidden="true">*</span>
				  </label>
                  <select wire:model="team.admin_id" name="admin_id" id="admin_id" class="select2 form-select">
					<option value=0></option>
					@foreach($teamAdmin as $admin)
					  <option value="{{$admin['id']}}" />{{$admin['name']}} ({{$admin['email']}})</option>
					@endforeach
				  </select>
                  @error('team.admin_id')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                    @enderror
				</div>
			  </div>
			  <div class="col-md-6 col-12">
				<div class="mb-4">
				  <label class="form-label" for="team_lead_email">
					Team Email
				  </label>
				  <input
					type="email"
					id="team_lead_email"
					name="team_lead_email"
					class="form-control"
					placeholder="Enter Team Lead Email"
					wire:model.defer="team.team_email"/>
                    @error('team.team_email')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                    @enderror
				</div>
			  </div>
			  <div class="col-md-6 col-12">
				<div class="mb-4">
				  <label class="form-label" for="team_lead_phone_number">
					Team Phone Number
				  </label>
				  <input
					type="text"
					id="team_lead_phone_number"
					class="form-control"
					placeholder="Enter Team Lead Phone Number"
					name="team_lead_phone_number"
                    wire:model.defer="team.team_phone"
					/>
                    @error('team.team_phone')
                    <span class="d-inline-block invalid-feedback mt-2">
                        {{ $message }}
                    </span>
                    @enderror
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
				  wire:model.defer="team.team_description"
                  ></textarea>
                  @error('team.team_description')
                  <span class="d-inline-block invalid-feedback mt-2">
                      {{ $message }}
                  </span>
                  @enderror
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
				  wire:model.defer="team.team_notes">
                </textarea>
                @error('team.team_notes')
                  <span class="d-inline-block invalid-feedback mt-2">
                      {{ $message }}
                  </span>
                  @enderror
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
			<button type="submit" class="btn btn-primary rounded px-4" wire:click.prevent="save">Save & Exit</button>
			<button type="submit" class="btn btn-primary rounded px-4" wire:click.prevent="save(0)" x-on:click=" window.scrollTo({ top: 0, behavior: 'smooth' });$wire.switch('team-members')">Next</button>
		  </div>
		</div>
	  </form>
</div>
@push('scripts')
<script>
	function updateVal(attrName,val){

		Livewire.emit('updateVal', attrName, val);

	}
	document.addEventListener("livewire:load", () => {
		let el = $('.select2')
		
        el.on('change', function (e) {
			@this.set('team.admin_id', el.select2("val"))
        })
		
	})
</script>
@endpush
