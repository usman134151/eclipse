{{-- BEGIN : Header Section --}}
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">Import Customers</h1>
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
										Customers
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)" class="text-secondary">
										All Customers
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

    @if ($users)
        <h2 class="mt-5">Preview Users</h2>
		<div class="table-responsive">
        <table id="unassigned_data" class="table" aria-label="Admin Staff Teams Table">
          <thead>
            <tr role="row">
              <th scope="col" class="text-center">
                <input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
              </th>
              <th scope="col">Customer</th>
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
						<label class="form-label" for="First Name">First Name</label>	
						<input type="text" wire:model.defer="users.{{ $loop->index }}.first_name" class="form-control" /> 
					</div>
					<div>
						<label class="form-label" for="First Name">Last Name</label>	
						<input type="text" wire:model.defer="users.{{ $loop->index }}.last_name" class="form-control" />
					</div>
					<div>
						<label class="form-label" for="First Name">Last Name</label>
						<input type="text" wire:model.defer="users.{{ $loop->index }}.email" class="form-control" />
					</div>	
                  </div>
                </div>
              </td>
              <td width=33%>
				<div>
			  <label class="form-label" for="company">
				Company
              </label>
			  <select  class="select2 form-select select2-hidden-accessible" wire:model='users.{{ $loop->index }}.userDetails.company_id'>
			  @foreach($companies as $company)
			    <option value="{{$company->id}}">{{$company->name}}</option>
			  @endforeach
			</select></div>
			<div>
			<label class="form-label" for="Language">
				Language
              </label>
			  <select class="select2 form-select select2-hidden-accessible" wire:model='users.{{ $loop->index }}.userDetails.language_id'>
			  @foreach($languages as $language)
			    <option value="{{$language->id}}">{{$language->setup_value_label}}</option>
			  @endforeach
			</select>
			</div>
			<div>
			<label class="form-label" for="Ethnicity">
				Ethnicity
            </label>
			  <select class="select2 form-select select2-hidden-accessible" wire:model='users.{{ $loop->index }}.userDetails.ethnicity_id'>
			  @foreach($ethnicities as $ethnicity)
			    <option value="{{$ethnicity->id}}">{{$ethnicity->setup_value_label}}</option>
			  @endforeach
			</select>
			</div>
			<div>
			<label class="form-label" for="Language">
				Gender
              </label>
			  <select class="select2 form-select select2-hidden-accessible" wire:model='users.{{ $loop->index }}.userDetails.gender_id'>
			  @foreach($genders as $gender)
			    <option value="{{$gender->id}}">{{$gender->setup_value_label}}</option>
			  @endforeach
			</select>
			</div>
			<div>
			<label class="form-label" for="Language">
				Roles
              </label>
			  <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" value="" id="CompanyAdmin">
                <label class="form-check-label" for="CompanyAdmin">
                    Company Admin
                </label>
              </div>
			  <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" value="" id="CompanyAdmin">
                <label class="form-check-label" for="CompanyAdmin">
					Supervisor
                </label>
              </div>
			  <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" value="" id="CompanyAdmin">
                <label class="form-check-label" for="CompanyAdmin">
					Requester
                </label>
              </div>
			  <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" value="" id="CompanyAdmin">
                <label class="form-check-label" for="CompanyAdmin">
					Service Consumer
                </label>
              </div>
			  <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" value="" id="CompanyAdmin">
                <label class="form-check-label" for="CompanyAdmin">
					Participant
                </label>
              </div>			  			  			  			  
			  <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" value="" id="CompanyAdmin">
                <label class="form-check-label" for="CompanyAdmin">
					Billing Manager
                </label>
              </div>	
			</select>
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

        <button wire:click="save">Save</button>
    @endif
</div>



					</div>
				</div>
			</div>
		</section>



