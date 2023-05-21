{{-- BEGIN : Header Section --}}
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">Import Providers</h1>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="http://127.0.0.1:8000" title="Go to Dashboard"
										aria-label="Go to Dashboard">
										{{-- Updated by Shanila to Add svg icon--}}
										<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23">
											<use xlink:href="/css/common-icons.svg#home"></use>
										</svg>
										{{-- End of update by Shanila --}}
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)">
										Providers
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)" class="text-secondary">
										All Providers
									</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
<section id="multiple-column-form">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
                        <div>
    <h2>Upload Excel File</h2>

    <input type="file" wire:model="file">
	@error('file')
	<span class="d-inline-block invalid-feedback mt-2">
		{{ $message }}
	</span>
	@enderror
    @if ($users)
        <h2 class="mt-5">Preview Users</h2>
		<div class="table-responsive">
        <table id="unassigned_data" class="table" aria-label="Admin Staff Teams Table">
          <thead>
            <tr role="row">
              <th scope="col" class="text-center">
                <input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
              </th>
              <th scope="col">Provider</th>
              <th scope="col">Attributes</th>
              <th scope="col">Address</th>
             
            </tr>
          </thead>
          <tbody>
		  @foreach ($users as $user)
            <tr role="row" class="odd">
              <td class="text-center">
                <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
              </td>
              <td width=33%>
                <div class="row g-2">
 
                  <div class="col-md-10">
				  <div>
						<label class="form-label" for="Number">Provider Number</label>
						<input type="text" wire:model.defer="users.{{ $loop->index }}.userDetails.user_number" class="form-control" />
					</div>	
					<div>
						<label class="form-label" for="First Name">First Name</label>	
						<input type="text" wire:model.defer="users.{{ $loop->index }}.first_name" class="form-control" /> 
					</div>
					<div>
						<label class="form-label" for="First Name">Last Name</label>	
						<input type="text" wire:model.defer="users.{{ $loop->index }}.last_name" class="form-control" />
					</div>
					<div>
						<label class="form-label" for="First Name">Email</label>
						<input type="text" wire:model.defer="users.{{ $loop->index }}.email" class="form-control" />
					</div>	
					
                  </div>
                </div>
				<div >
                                            <label class="form-label" for="notes-column">
                                                Add Notes
                                            </label>
                                            <textarea class="form-control" rows="3" cols="30" placeholder="" name="notesColumn"
                                                id="notes-column" wire:model="users.{{ $loop->index }}.userDetails.note"></textarea>
                                        </div>
              </td>
              <td width=33%>

			<div>
			<label class="form-label" for="Language">
				Language
              </label>
			  <select class="form-select" wire:model='users.{{ $loop->index }}.userDetails.language_id'>
			  @foreach($languages as $language)
			    <option value="{{$language->id}}">{{$language->setup_value_label}}</option>
			  @endforeach
			</select>
			</div>
			<div>
			<label class="form-label" for="Ethnicity">
				Ethnicity
            </label>
			  <select class="form-select " wire:model='users.{{ $loop->index }}.userDetails.ethnicity_id'>
			  @foreach($ethnicities as $ethnicity)
			    <option value="{{$ethnicity->id}}">{{$ethnicity->setup_value_label}}</option>
			  @endforeach
			</select>
			</div>
			<div>
			<label class="form-label" for="Language">
				Gender
              </label>
			  <select class="form-select" wire:model='users.{{ $loop->index }}.userDetails.gender_id'>
			  @foreach($genders as $gender)
			    <option value="{{$gender->id}}">{{$gender->setup_value_label}}</option>
			  @endforeach
			</select>
			</div>
			<div>
						<label class="form-label" for="Education">Education</label>
						<input type="text" wire:model.defer="users.{{ $loop->index }}.userDetails.education" class="form-control" />
			</div>	
					
			<div>
						<label class="form-label" for="Experience">Experience</label>
						<input type="text" wire:model.defer="users.{{ $loop->index }}.userDetails.experience" class="form-control" />
					</div>	
			  </td>
			  <td width=33%>
                <div class="row g-2">
 
                  <div class="col-md-10">
                   
					<div>
						<label class="form-label" for="First Name">Address Line 1</label>	
						<input type="text" wire:model.defer="users.{{ $loop->index }}.userDetails.address_line1" class="form-control" /> 
					</div>
					<div>
						<label class="form-label" for="First Name">Address Line 2</label>	
						<input type="text" wire:model.defer="users.{{ $loop->index }}.userDetails.address_line2" class="form-control" />
					</div>
					<div>
						<label class="form-label" for="First Name">City</label>
						<input type="text" wire:model.defer="users.{{ $loop->index }}.userDetails.city" class="form-control" />
					</div>	
					<div>
						<label class="form-label" for="First Name">State</label>
						<input type="text" wire:model.defer="users.{{ $loop->index }}.userDetails.state" class="form-control" />
					</div>	
					<div>
						<label class="form-label" for="First Name">Country</label>
						<input type="text" wire:model.defer="users.{{ $loop->index }}.userDetails.country" class="form-control" />
					</div>	
                  </div>
                </div>
              </td>

            </tr>

			@endforeach
            
            
            
            
            
            
            
            
            
          </tbody>
        </table>
      </div>

	  <button wire:click="save" class="d-inline-flex align-items-center btn btn-primary rounded px-3 py-2 gap-2">Import Data</button>
    @endif
</div>



					</div>
				</div>
			</div>
		</section>

		@push('scripts')

<script>
    
    Livewire.on('updateVal', (attrName, val) => {
	
        // Call the updateVal function with the attribute name and value
       
        @this.call('updateVal', attrName, val);
    });

</script>
@endpush

