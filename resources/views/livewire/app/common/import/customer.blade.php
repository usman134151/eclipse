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
        <h2>Preview Users</h2>
		<div class="table-responsive">
        <table id="unassigned_data" class="table table-hover" aria-label="Admin Staff Teams Table">
          <thead>
            <tr role="row">
              <th scope="col" class="text-center">
                <input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
              </th>
              <th scope="col">Customer</th>
              <th scope="col">Attributes</th>
              <th scope="col">Address</th>
              <th scope="col">Roles</th>
            </tr>
          </thead>
          <tbody>
		  @foreach ($users as $user)
            <tr role="row" class="odd">
              <td class="text-center">
                <input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
              </td>
              <td width=25%>
                <div class="row g-2">
 
                  <div class="col-md-10">
                    <h6 class="fw-semibold">
					<input type="text" wire:model.defer="users.{{ $loop->index }}.first_name" class="form-control" /> 
					<input type="text" wire:model.defer="users.{{ $loop->index }}.last_name" class="form-control" /></h6>
                    <p><input type="text" wire:model.defer="users.{{ $loop->index }}.email" class="form-control" /></p>
                  </div>
                </div>
              </td>
              <td>
                <p></p>
              </td>
              <td class="text-center">Example Company</td> 
              <td>
                Supervisor
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



