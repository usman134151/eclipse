{{-- BEGIN : Header Section --}}
	<div class="content-wrapper container-xxl p-0">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">Import Industries</h1>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="http://127.0.0.1:8000" title="Go to Dashboard"
										aria-label="Go to Dashboard">
										{{-- Updated by Shanila to Add svg icon--}}
										<svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
											<use xlink:href="/css/common-icons.svg#home"></use>
										</svg>
										{{-- End of update by Shanila --}}
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)">
										Industries
									</a>
								</li>
								<li class="breadcrumb-item">
									<a href="javascript:void(0)" class="text-secondary">
										All Industries
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
	@if($warningMessage)
	<h3 class="mt-4"><span class='d-inline-block invalid-feedback mt-2'>{{$warningMessage}}</span></h3>
	@endif
    @if ($industries)
        <h2 class="mt-5">Preview Industries</h2>
		<div class="table-responsive">
        <table id="unassigned_data" class="table" aria-label="Admin Staff Teams Table">
          <thead>
            <tr role="row">

              <th scope="col">Industry</th>
             
             
            </tr>
          </thead>
          <tbody>
		  @foreach ($industries as $company)
            <tr role="row" class="odd">

              <td width=33%>
                <div class="row g-2">
 
                  <div class="col-md-10">
                   
					<div>
						<label class="form-label" for="First Name">Name</label>	
						<input type="text" wire:model.defer="industries.{{ $loop->index }}.name" class="form-control" /> 
						@error('industries.{{ $loop->index }}.name') <span class="d-inline-block invalid-feedback mt-2">{{ $message }}</span> @enderror
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
		<span class="d-inline-block invalid-feedback mt-2">{{ $errorMessage }}</span>
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

