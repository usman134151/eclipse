{{-- BEGIN : Header Section --}}
	<div class="content-wrapper container-xxl p-0">
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
    @if ($notifications)
        <h2 class="mt-5">Preview Notifications</h2>
		<div class="table-responsive">
        <table id="unassigned_data" class="table" aria-label="Admin Staff Teams Table">
          <thead>
            <tr role="row">

              <th scope="col">Trigger</th>
              <th scope="col">Attributes</th>
             
            </tr>
          </thead>
          <tbody>
			<tr><td><h3>{{$warningMessage}}</h3></td></tr>
		  @foreach ($notifications as $parentKey=>$notification)
            <tr role="row" class="odd">

				<td width=50%>
					<div class="row g-2">
						<div class="col-md-10">
							<label class="form-label mt-3" for="Trigger Type">
								Trigger Type
							</label>
							<select class="form-select" wire:model='notifications.{{ $parentKey }}.trigger_type_id' disabled>
								@foreach($triggerTypes as $triggerType)
									<option value="{{$triggerType->id}}">{{$triggerType->name}}</option>
								@endforeach
							</select>
							
							@error('notifications.'.$parentKey.'.trigger_type_id')
								<span class="d-inline-block invalid-feedback mt-2">
								{{ $message }}
								</span>
							@enderror
						</div>
						<div class="col-md-10">
							<div>
								<label class="form-label mt-3" for="Trigger">Trigger</label>
								<input type="text" wire:model.defer="notifications.{{ $parentKey }}.trigger" class="form-control" />
								@error('notifications.'.$parentKey.'.trigger')
									<span class="d-inline-block invalid-feedback mt-2">
									{{ $message }}
									</span>
								@enderror
							</div>	
							
						</div>
						<div class="col-md-10">
							<div>
								<label class="form-label mt-3" for="Name">Name</label>
								<input type="text" wire:model.defer="notifications.{{ $parentKey }}.name" class="form-control" />
								@error('notifications.'.$parentKey.'.name')
									<span class="d-inline-block invalid-feedback mt-2">
									{{ $message }}
									</span>
								@enderror
							</div>	
						</div>
						<div class="col-md-10">
							<div>
								<label class="form-label mt-3" for="Slug">Trigger Description</label>
								<textarea rows="2" placeholder="Trigger Description" wire:model.defer="notifications.{{ $parentKey }}.slug" class="form-control" ></textarea>
								@error('notifications.'.$parentKey.'.slug')
									<span class="d-inline-block invalid-feedback mt-2">
									{{ $message }}
									</span>
								@enderror
							</div>	
						</div>
					</div>
              </td>
              <td width=50%>
                <div class="row g-2">
					<div class="row g-2">
						@foreach($notification['notificationTemplateRoles'] as $key=>$notificationTemplateRole)
							<div class="col-md-10">
								<label class="form-label" for="selectedTypesData">User Type</label>
								<select class="form-control select2 form-select select2-hidden-accessible selectedTypesData" wire:model.defer="notifications.{{ $parentKey }}.notificationTemplateRoles.{{$key}}.role_id" id="notifications.{{ $parentKey }}.notificationTemplateRoles.{{$key}}.role_id" wire:ignore disabled>
								@foreach($userTypes as $type)
									<option value="{{$type->id}}">{{$type->display_name}}</option>
								@endforeach
								</select>
								@error('notifications.'.$parentKey.'.notificationTemplateRoles.'.$key.'.role_id')
									<span class="d-inline-block invalid-feedback mt-2">
									{{ $message }}
									</span>
								@enderror
							</div>
							<div class="col-md-10">
								@if($notification_type==1)
									<label class="form-label" for="notifications.{{ $parentKey }}.notificationTemplateRoles.{{$key}}.notification_subject}">Subject</label>
									<input type="text" wire:model.defer="notifications.{{ $parentKey }}.notificationTemplateRoles.{{$key}}.notification_subject" id="notifications.{{ $parentKey }}.notificationTemplateRoles.{{$key}}.notification_subject}" class="form-control"
									placeholder="Enter Subject" />
									@error('notifications.'.$parentKey.'.notificationTemplateRoles.'.$key.'.notification_subject')
										<span class="d-inline-block invalid-feedback mt-2">
										{{ $message }}
										</span>
									@enderror
								@endif
							</div>
							<div class="col-md-10" style="height: 340px">
								<textarea class="form-control" rows="11" cols="11" placeholder="Normal text"
								id="notifications.{{ $parentKey }}.notificationTemplateRoles.{{$key}}.notification_text" wire:model.defer="notifications.{{ $parentKey }}.notificationTemplateRoles.{{$key}}.notification_text"></textarea>
								@error('notifications.'.$parentKey.'.notificationTemplateRoles.'.$key.'.notification_text')
									<span class="d-inline-block invalid-feedback mt-2">
									{{ $message }}
									</span>
								@enderror
							</div>
						@endforeach
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

