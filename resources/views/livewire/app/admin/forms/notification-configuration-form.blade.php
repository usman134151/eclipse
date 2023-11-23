<div>


    <section id="multiple-column-form">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form class="form">
                <div class="row">
                  <div class="col-lg-12">
                    <!-- .... section 1..(start).. -->
                    <div class="row">
                      <div class="col-lg-10 pe-lg-4 mb-4">
                        
                        @if($notification->trigger_type)
                          <label class="form-label" for="trigger_type">Trigger Type: {{$notification->trigger_type->name}}</label>
                        @endif
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-5 pe-lg-4 mb-4" wire:ignore>
                          <label class="form-label" for="trigger">Select Trigger</label>
                          <select class="select2 form-select trigger" id="trigger">
                            <option>Select Trigger</option>
                            @foreach($triggers as $trigger)
                              <option value="{{$trigger->id}}">{{$trigger->trigger}}</option>
                            @endforeach
                          </select>
                      </div>
                      @if($notification->trigger)
                      <div class="col-lg-5 pe-lg-4 mb-4">
                          <label class="form-label" for="trigger-name">Name</label>
                          <input disabled type="text" id="trigger-name" class="form-control" name="trigger-name"
                            placeholder="Enter Name" wire:model.defer="notification.name" />
                            @error('notification.name')
                              <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                              </span>
                            @enderror
                      </div>
                      <div class="col-lg-5 pe-lg-4 mb-4">
                          <label class="form-label" for="trigger-description">
                            Trigger Description
                          </label>
                          <textarea class="form-control" rows="2" cols="3" placeholder="" name="trigger-description"
                            id="trigger-description" wire:model.defer="notification.slug"></textarea>
                            
                            @error('notification.slug')
                              <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                              </span>
                            @enderror
                      </div>
                      <div class="col-lg-5 col-12 mb-4">
                        <label class="form-label" for="selectedTypesData">Select User Type</label>
                        <select class="form-control select2 form-select select2-hidden-accessible selectedTypesData" wire:model.defer="selectedUserTypes" data-placeholder="Please Choose Accommodation" aria-label="Please Select User Type" multiple="true" tabindex="" id="selectedTypesData" wire:ignore>
                          @foreach($userTypes as $type)
                            <option value="{{$type->id}}">{{$type->display_name}}</option>
                          @endforeach
                        </select>
                        @error('selectedTypesData')
                            <span class="d-inline-block invalid-feedback mt-2">
                              {{ $message }}
                            </span>
                        @enderror
                      </div>
                      @endif
                    </div>
                      @foreach($selectedTypesData as $key=>$selectedType)
                    <div class="row">
                        @if($notification_type==1)
                        <div class="col-lg-5 col-12 mb-4">
                            <label class="form-label" for="subject-column-{{$selectedType['role_id']}}">Subject {{$selectedType['display_name']}}</label>
                            <input type="text" wire:model.defer="selectedTypesData.{{$key}}.notification_subject" id="subject-column-{{$selectedType['role_id']}}" class="form-control" name="subject-column-{{$selectedType['role_id']}}"
                              placeholder="Enter Subject" />
                            @error('selectedTypesData.'.$key.'.notification_subject')
                                <span class="d-inline-block invalid-feedback mt-2">
                                  {{ $message }}
                                </span>
                            @enderror
                        </div>
                        @else
                        <div class="col-lg-5 col-12 mb-4">
                            <label class="form-label" for="subject-column-{{$selectedType['role_id']}}">Role: {{$selectedType['display_name']}}</label>
                        </div>
                        @endif
                      @if($selectedType['name']=='admin')
                        <div class="col-lg-5 pe-lg-4 mb-4">
                          <label class="form-label" for="admin_roles">Select Role</label>
                          <select wire:key="item-{{$key}}-{{$selectedType['role_id']}}" class="form-control select2 form-select select2-hidden-accessible select-event" data-key="{{$key}}" wire:model.defer="selectedTypesData.{{$key}}.admin_roles" id="admin_roles" name="admin_roles" data-placeholder="Please Choose Role" aria-label="Please Select Role" multiple="true" tabindex="">
                            @foreach($adminRoles as $role)
                              <option value="{{$role->id}}">{{$role->system_role_name}}</option>
                            @endforeach
                          </select>
                          @error('selectedTypesData.'.$key.'.admin_roles')
                              <span class="d-inline-block invalid-feedback mt-2">
                                {{ $message }}
                              </span>
                          @enderror
                        </div>
                      @else
                        @if($notification_type==1)
                        <div class="col-lg-4 pe-lg-5 col-12 mb-4">
                            <label class="form-label" for="send-from-column-{{$selectedType['role_id']}}">Send From:</label>
                            <input type="text" wire:model.defer="selectedTypesData.{{$key}}.notification_email" id="send-from-column-{{$selectedType['role_id']}}" class="form-control" name="send-from-column-{{$selectedType['role_id']}}"
                              placeholder="Enter Notification Email Address" />
                            @error('selectedTypesData.'.$key.'.notification_email')
                                <span class="d-inline-block invalid-feedback mt-2">
                                  {{ $message }}
                                </span>
                            @enderror
                        </div>
                          @endif
                        <div class="col-lg-3 col-12 mb-4">
                          <label class="form-label" for="send-from-column">Reply to:</label>
                          <div class="d-flex flex-column gap-2">
                            <div class="form-check mb-0">
                              <input class="form-check-input" wire:model.defer="selectedTypesData.{{$key}}.notification_reply_to" type="radio" name="exampleRadios-{{$selectedType['role_id']}}" id="AssignedAdminStaff-selectedTypesData.{{$key}}.notification_reply_to"
                                value="option1">
                              <label class="form-check-label" for="AssignedAdminStaff-selectedTypesData.{{$key}}.notification_reply_to">
                              Assigned Admin-staff
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input class="form-check-input" wire:model.defer="selectedTypesData.{{$key}}.notification_reply_to" type="radio" name="exampleRadios-{{$selectedType['role_id']}}" id="SelectAdminStaff-selectedTypesData.{{$key}}.notification_reply_to"
                                value="option2">
                              <label class="form-check-label" for="SelectAdminStaff-selectedTypesData.{{$key}}.notification_reply_to">
                              Select Admin-staff
                              </label>
                            </div>
                            <div class="form-check mb-0">
                              <input class="form-check-input" wire:model.defer="selectedTypesData.{{$key}}.notification_reply_to" type="radio" name="exampleRadios-{{$selectedType['role_id']}}" id="Custom-Email-selectedTypesData.{{$key}}.notification_reply_to"
                                value="option3">
                              <label class="form-check-label" for="Custom-Email-selectedTypesData.{{$key}}.notification_reply_to">
                              Custom Email
                              </label>
                            </div>
                            @error('selectedTypesData.'.$key.'.notification_reply_to')
                                <span class="d-inline-block invalid-feedback mt-2">
                                  {{ $message }}
                                </span>
                            @enderror
                          </div>
                        </div>
                      @endif
                    </div>
                    
                    {{--@if($selectedType['name']=='customer')
                      <!-- ...... Select Apply to ....  -->
                      <div class="col-lg-12 col-12">
                        <div class="row">
                          <div class="col-lg-5 col-12 mb-4">
                              <label class="form-label" for="ApplyTo">Apply to:</label>
                              <select class="form-control select2 form-select select2-hidden-accessible select-event" data-key="{{$key}}" wire:model.defer="selectedTypesData.{{$key}}.customer_roles" id="customer_roles" name="customer_roles" data-placeholder="Please Choose" aria-label="Please Choose Accommodation" multiple="true" tabindex="" wire:ignore>
                                @foreach($customerApplyRoles as $role)
                                  <option value="{{$role->id}}">{{$role->display_name}}</option>
                                @endforeach
                              </select>
                              @error('selectedTypesData.'.$key.'.customer_roles')
                                  <span class="d-inline-block invalid-feedback mt-2">
                                    {{ $message }}
                                  </span>
                              @enderror
                          </div>
                        </div>
                      </div>
                    @endif--}}
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-7">
                          @foreach($selectedType['frequencies'] as $fkey=> $frequency)
                          <div class="row border-dashed rounded p-3 mb-3 mx-1">
                            <div class="d-flex justify-content-end">
                              <a  href="javascript:void(0)" wire:click="removeFrequency({{$key}},{{$fkey}})" title="Delete" aria-label="Delete"
                                  class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                  <svg class="delete-icon" width="20" height="20"
                                      viewBox="0 0 20 20" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                      <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                  </svg>
                              </a>
                            </div>
                            <div class="col-lg-4 align-self-end mb-4">
                              <div class="d-inline-flex gap-2 align-items-center">
                                <label for="Frequency" class="form-label text-primary mb-lg-0">
                                  Frequency
                                </label>
                                <input type="text" class="form-control form-control-md form-control-max-w-xs text-center" id="frequency-{{$selectedType['role_id']}}" name="frequency-{{$selectedType['role_id']}}" placeholder="2" autocomplete="on"/>
                              </div>
                            </div>
                            <div class="col-lg-4 text-center align-self-end mb-4">
                              <div class="row g-0" wire:ignore wire:key="{{$key}}frequency{{$fkey}}">
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="Days-{{$selectedType['role_id']}}-{{$fkey}}"> Days</label>
                                  <input wire:model.defer="selectedTypesData.{{$key}}.frequencies.{{$fkey}}.frequency_days" class="form-control form-control-md text-center" id="Days-{{$selectedType['role_id']}}-{{$fkey}}" name="Days-{{$selectedType['role_id']}}-{{$fkey}}" value="00" type="" tabindex="" />
                                </div>
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="Hours-{{$selectedType['role_id']}}-{{$fkey}}"> Hours</label>
                                  <input wire:model.defer="selectedTypesData.{{$key}}.frequencies.{{$fkey}}.frequency_hour" class="form-control form-control-md text-center" id="Hours-{{$selectedType['role_id']}}-{{$fkey}}" name="Hours-{{$selectedType['role_id']}}-{{$fkey}}" value="00" type="" tabindex="" />
                                </div>
                                <div class="col-4 text-center justify-content-center d-flex flex-column align-items-center">
                                  <label class="form-label-sm" for="Minutes-{{$selectedType['role_id']}}-{{$fkey}}"> Minutes</label>
                                  <input wire:model.defer="selectedTypesData.{{$key}}.frequencies.{{$fkey}}.frequency_min" class="form-control form-control-md text-center" id="Minutes-{{$selectedType['role_id']}}-{{$fkey}}" name="Minutes-{{$selectedType['role_id']}}-{{$fkey}}" value="00" type="" tabindex="" />
                                </div>
                              </div>
                              @if($errors->has('selectedTypesData.'.$key.'.frequencies.'.$fkey.'.frequency_days') &&
                                  $errors->has('selectedTypesData.'.$key.'.frequencies.'.$fkey.'.frequency_hour') &&
                                  $errors->has('selectedTypesData.'.$key.'.frequencies.'.$fkey.'.frequency_min'))
                                  
                                    <span class="d-inline-block invalid-feedback mt-2">
                                      Duration is required
                                    </span>
                              @else
                                @error('selectedTypesData.'.$key.'.frequencies.'.$fkey.'.frequency_days')
                                    <span class="d-inline-block invalid-feedback mt-2">
                                      {{ $message }}
                                    </span>
                                @enderror
                                @error('selectedTypesData.'.$key.'.frequencies.'.$fkey.'.frequency_hour')
                                    <span class="d-inline-block invalid-feedback mt-2">
                                      {{ $message }}
                                    </span>
                                @enderror
                                @error('selectedTypesData.'.$key.'.frequencies.'.$fkey.'.frequency_min')
                                    <span class="d-inline-block invalid-feedback mt-2">
                                      {{ $message }}
                                    </span>
                                @enderror
                              @endif
                            </div>
                            <div class="col-lg-4 mb-4">
                              <div class="d-flex flex-column gap-2">
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" wire:model.defer="selectedTypesData.{{$key}}.frequencies.{{$fkey}}.frequency_type" name="frequency_type-{{$selectedType['role_id']}}-{{$fkey}}" id="frequency_type-{{$selectedType['role_id']}}-{{$fkey}}-Before-Booking" value="1">
                                  <label class="form-check-label" for="Before-Booking">
                                  Before Booking
                                  </label>
                                </div>
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" wire:model.defer="selectedTypesData.{{$key}}.frequencies.{{$fkey}}.frequency_type" name="frequency_type-{{$selectedType['role_id']}}-{{$fkey}}" id="frequency_type-{{$selectedType['role_id']}}-{{$fkey}}-After-Booking" value="2">
                                  <label class="form-check-label" for="After-Booking">
                                  After Booking
                                  </label>
                                </div>
                                <div class="form-check mb-0">
                                  <input class="form-check-input" type="radio" wire:model.defer="selectedTypesData.{{$key}}.frequencies.{{$fkey}}.frequency_type" name="frequency_type-{{$selectedType['role_id']}}-{{$fkey}}" id="frequency_type-{{$selectedType['role_id']}}-{{$fkey}}-After-Trigger" value="3">
                                  <label class="form-check-label" for="After-Trigger">
                                  After Trigger
                                  </label>
                                </div>
                                @error('selectedTypesData.'.$key.'.frequencies.'.$fkey.'.frequency_type')
                                    <span class="d-inline-block invalid-feedback mt-2">
                                      {{ $message }}
                                    </span>
                                @enderror
                              </div>
                            </div>
                          </div>
                          @endforeach
                          <div class="row">
                            <div class="col-lg-12 text-end mb-4">
                              <div class="btn btn-secondary rounded btn-custom">
                                {{-- Updated by Shanila to Add svg icon--}}
                                <svg aria-label="Add New" class="me-1" width="15" height="15"
                                    viewBox="0 0 20 21" fill="currentColor" stroke="currentColor">
                                    <use xlink:href="/css/common-icons.svg#blueplus"></use>
                                </svg>
                                {{-- End of update by Shanila --}}
                                <span class="btn-text" wire:click="addFrequency({{$key}})">
                                  Add Frequency
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ....   section 2 ends.... -->
                    <!-- ..... section 3 start.... -->
                    <div class="row">
                      {{-- added by shanila to add text-editor --}}
                      <div class="col-lg-8 col-12 mb-4" style="height: 340px">
                        <textarea class="form-control" rows="11" cols="11" placeholder="Normal text"
                        name="SubjectColumn-{{$selectedType['role_id']}}" id="SubjectColumn-{{$selectedType['role_id']}}" wire:model.defer="selectedTypesData.{{$key}}.notification_text"></textarea>
                        @error('selectedTypesData.'.$key.'.notification_text')
                            <span class="d-inline-block invalid-feedback mt-2">
                              {{ $message }}
                            </span>
                        @enderror
                      </div>
                      {{-- ended updated by shanila --}}
                      <div class="col-lg-4 col-12 mb-4">
                        <div class="p-3 border rounded">
                          <label class="form-label">Tag Key</label>
                          <div class="d-lg-flex flex-wrap gap-3 " style="max-height:300px; overflow-y:auto; overflow-x:hidden;">
                            @foreach($tagValues as $tag)
                              <div class="tag" onclick="appendTagInnerText(this,'SubjectColumn-{{$selectedType['role_id']}}')">{{$tag}}</div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                      @endforeach
                  </div>
                </div>
                <!-- ....cancel/next (buttons)... -->
                <div class="col-12 justify-content-center form-actions d-flex gap-2">
                  <a href="javascript:void(0);" class="btn btn-outline-dark rounded" role="button" wire:click.prevent="showList">
                  Cancel
                  </a>
                  <button type="submit" class="btn btn-primary rounded" wire:click.prevent="save">Save</button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
  {{-- added by shanila to add js and css files for editor--}}
  <link rel="stylesheet" href='/css/quill.imageUploader.min.css'/>
  <link rel="stylesheet" href='/css/quill.snow.css'/>
  <script src="/js/quill.js"></script>
  <script src="/js/quill.htmlEditButton.min.js"></script>
  <script src="/js/quill.imageUploader.min.js"></script>
  {{-- added by shanila to add link of js editor js --}}
  <script src="/tenant-resources/js/editor.js"></script>
</div>
{{-- ended updated by shanila --}}
@push('scripts')
<script>
    function appendTagInnerText(tag,id) {
        var tagInnerText = tag.innerText;
        var textarea = document.getElementById(id);
        textarea.value += tagInnerText + " ";
        const inputEvent = new Event('input', {
        bubbles: true,
        cancelable: true,
        });
        textarea.dispatchEvent(inputEvent);

      }
	  document.addEventListener('refreshSelectsOnly', function(event) {
			$('.select2').select2();
		});
	  document.addEventListener('refreshSelects2', function(event) {
			$('.select2').select2();
			$('.selectedTypesData').off('change').on('change', function (e) {
				let attrName = $(this).attr('id');
				updateVal(attrName,  $(this).select2("val"));
			});
			$('.select-event').off('change').on('change',function(){
				let attrName = $(this).attr('id');
				let key = $(this).data('key');
				Livewire.emit('updateValArray', attrName, key, $(this).select2("val"));
			});
		});
</script>
@endpush
