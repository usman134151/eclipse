<div >
  <div id="loader-section" class="loader-section" wire:loading>
    <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
        <div class="spinner-border" role="status" aria-live="polite">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
  </div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">
                       {{$label}} Provider Team
                    </h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    {{-- Updated by Shanila to Add svg icon--}}
                                    <svg aria-label="home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
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
                        wire:model.defer="team.name"
                        />
                        @error('team.name') <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                        <label class="form-label" for="provider">Providers
                            <span class="mandatory" aria-hidden="true">*</span>
                        </label>
                             <select name="selected_providers" id="selected_providers" class=" select2 form-select " wire:model.defer="selected_providers" tabindex="1" multiple  aria-label="Select Team Providers">
                                  <option>Select an option</option>
                                  @foreach($providers as $p)
                                    <option value="{{$p->id}}" >{{$p->name}}</option>
                                  @endforeach
                              </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                            <label class="form-label">Accommodation</label>
                                {!! $setupValues['accommodations']['rendered'] !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                        <label class="form-label">Service</label>
                        {!! $setupValues['services']['rendered'] !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="mb-4">
                        <label class="form-label">Specialization</label>
                          {!! $setupValues['specializations']['rendered'] !!}
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                   <div class="mb-4">
                      <label class="form-label" for="tags">Team Tags</label>
                      <select data-placeholder="" multiple class="form-select  select2 form-select select2-hidden-accessible" tabindex=""
                        id="tags" aria-label="Select Tags">
                        @foreach ($allTags as $tag)
                        <option {{ in_array($tag, $tags) ? 'selected' : '' }} value="{{ $tag }}">{{ $tag }}</option>
                        @endforeach
                      </select>
                      <input type="hidden" name="tags-holder" id="tags-holder" wire:model="tags">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <label class="form-label" for="team_description">
                        Team Description
                    </label>
                    <textarea
                    class="form-control"
                    placeholder="Add Team Description"
                    name="team_description"
                    id="team_description"
                    wire:model.defer="team.description"
                    ></textarea>
                    @error('team.description') <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span> @enderror

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
                      wire:model.defer="team.team_notes"
                      ></textarea>
                    @error('team.team_notes') <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span> @enderror

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
                <button type="submit" class="btn btn-primary rounded px-4"
                wire:click.prevent="save"> {{$label}} Team</button>
              </div>
            </div>
          </form>
    </div>
   </div>
   @include('modals.provider-team-modal')
</div>


@push('scripts')
<script>
	document.addEventListener("livewire:load", () => {
        
        $('.select2').on('change', function (e) {
         
            let attrName=$(this).attr('id');
            @this.set(attrName, $(this).select2("val"))
        })
	})
</script>
@endpush
