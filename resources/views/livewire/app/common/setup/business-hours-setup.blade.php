<div>
<div id="loader-section" class="loader-section" wire:loading>
          <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
          </div>
</div>
<div>

<div class="row mb-4">
            <div class="col-lg-12">
              <div class="col-lg-12">
                  <h3>Business Hours Setup</h3>
                  <p>Your set hours determine when "Business hours" and "After-hours" rates are in effect for customer billing and Provider payroll and prevents services from being scheduled during your "closed" hours.You can also set the times which you are closed and not providing services; this will restrict customers from scheduling.</p>
              </div>


                <div class="col-lg-12">
                  <h3>Time Configuration</h3>
                  <div class="d-lg-flex gap-3 align-items-center mb-3">
                          <div class="d-flex flex-column justify-content-between">
                              <label class="form-label">Set Business Time Zone</label>
                              <div class="d-flex gap-2">
                              {!! $setupValues['timezones']['rendered'] !!}
                           </div>
                    </div>
                        <div class="d-flex flex-column justify-content-between">
                          <label class="form-label mt-3" for="set_start_time">Set Time Format</label>
                          <div class="d-flex gap-2">
                              <div class="input-group">
                                  <div class="form-check">
                                      <input class="form-check-input" checked style="paddin:0; " type="radio" name="time_format" id="time_format12" value="1" wire:model="schedule.time_format">
                                      <label class="form-check-label"  for="time_format12">
                                          12 Hrs
                                      </label>
                                    </div>
                                </div>
                          </div>
                          <div class="d-flex gap-2 mt-11">
                              <div class="time d-flex align-items-center gap-2">
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" name="time_format" id="time_format24" value="2"  wire:model="schedule.time_format">
                                      <label class="form-check-label" for="time_format24">
                                          24 Hrs
                                      </label>
                                    </div>
                            </div>
                        </div>

                  </div>



              </div>
              <div class="row mb-4"><div class="d-lg-flex gap-3 align-items-center mb-3">            <button type="submit"
            class="btn btn-secondary btn-custom rounded" wire:click="saveSchedule">
            <span class="btn-text">
            Update Settings
            </span>
            </button></div></div>
                <div class="row mb-4">
                  <h3>Add Hours Slot In Schedule</h3>
                  <label class="form-label">Type Of Slot</label>
                    <div class="col-lg-3">

                        <div class="mt-2 " >
                          <div class="input-group  ">
                              <div class="input-group-text">
                                <input class="form-check-input mt-0" checked style="background-color:white;" type="radio" value="1" name="timeslot_type" aria-label="Time slot for business hours"  wire:model.defer="timeslot.timeslot_type">
                              </div>

                              <input disabled placeholder="Business Hours" type="text" class="form-control" aria-label="Text input with radio button" name="timeslot.timeslot_type">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="mt-2" >
                        <div class="input-group">
                            <div class="input-group-text">
                              <input class="form-check-input mt-0" checked style="background-color:white;" type="radio" value="2"  name="timeslot_type"  aria-label="Time slot for after business hours" name="timeslot.timeslot_type" wire:model.defer="timeslot.timeslot_type">
                            </div>
                            <input disabled placeholder="After Business Hours" type="text" class="form-control" aria-label="Text input with radio button">
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-lg-12">
                      <label class="form-label">Select Days & Time</label>
                      <div class="d-inline-block invalid-feedback mt-2 " > {{ $errors->first('timeValidation') }}</div>
                      <div class="d-lg-flex gap-3 align-items-end mb-3">
                        <select name="timeslot_day" aria-label="Select Days" wire:model.defer="timeslot.timeslot_day" class="form-control w-25">
                        @foreach ($days as $day)
                            <option value="{{$day}}">{{$day}}</option>
                        @endforeach
                        </select>
                          <label class="form-label-sm ">Choose Time</label>
                          <div class="d-flex">
                            <div class="d-flex flex-column justify-content-between">
                              <label class="form-label-sm" for="set_start_time">Start Time</label>
                              <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                  <div ><input class="form-control form-control-sm text-center hours" id="Days" aria-label="Starting Hours" name="start_hour" placeholder="" type="" tabindex="" wire:key="duration-0" wire:model.defer="timeslot.timeslot_start_hour" maxlength="2"></div>
                                  <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                  </svg>
                                  <div><input class="form-control form-control-sm text-center  mins" aria-label="Start Minutes" id="Days" name="DisplayToProviders" placeholder="" type="" tabindex="" wire:key="duration-0" wire:model.defer="timeslot.timeslot_start_min" maxlength="2"></div>
                                </div>
                                @if($schedule->time_format==1)
                                <div>
                                    <select class="form-control form-control-sm text-center hours" wire:model.defer="timeslot_start_type" style="padding: 0.4rem 2.2rem" aria-label="AM/PM">
                                        <option value="am">AM</option>
                                        <option value="pm">PM</option>
                                    </select>
                                </div>
                               @endif
                              </div>
                            </div>
                          </div>
                          <div class="d-flex">
                            <div class="d-flex flex-column justify-content-between">
                              <label class="form-label-sm" for="set_start_time">End Time</label>
                              <div class="d-flex gap-2">
                                <div class="time d-flex align-items-center gap-2">
                                  <div><input class="form-control form-control-sm text-center  hours" aria-label="Ending Hours" id="Days" name="DisplayToProviders" placeholder="" type="" tabindex="" wire:key="duration-0" wire:model.defer="timeslot.timeslot_end_hour" maxlength="2"></div>
                                  <svg width="5" height="19" viewBox="0 0 5 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.652588 16.6132C0.652588 16.1098 0.807878 15.6868 1.11846 15.3441C1.43975 14.9907 1.90026 14.814 2.5 14.814C3.09974 14.814 3.5549 14.9907 3.86548 15.3441C4.18677 15.6868 4.34741 16.1098 4.34741 16.6132C4.34741 17.1058 4.18677 17.5235 3.86548 17.8662C3.5549 18.2089 3.09974 18.3803 2.5 18.3803C1.90026 18.3803 1.43975 18.2089 1.11846 17.8662C0.807878 17.5235 0.652588 17.1058 0.652588 16.6132ZM0.668652 2.42827C0.668652 1.92492 0.823942 1.50189 1.13452 1.15918C1.45581 0.805761 1.91632 0.629052 2.51606 0.629052C3.1158 0.629052 3.57096 0.805761 3.88154 1.15918C4.20283 1.50189 4.36348 1.92492 4.36348 2.42827C4.36348 2.92091 4.20283 3.33859 3.88154 3.6813C3.57096 4.02401 3.1158 4.19536 2.51606 4.19536C1.91632 4.19536 1.45581 4.02401 1.13452 3.6813C0.823942 3.33859 0.668652 2.92091 0.668652 2.42827Z" fill="black"/>
                                  </svg>
                                  <div><input class="form-control form-control-sm text-center  mins" aria-label="Ending Minutes" id="Days" name="DisplayToProviders" placeholder="" type="" tabindex="" wire:key="duration-0" wire:model.defer="timeslot.timeslot_end_min" maxlength="2"></div>
                                </div>
                                @if($schedule->time_format==1)
                                <div>
                                    <select class="form-control form-control-sm text-center hours" wire:model.defer="timeslot_end_type" style="padding: 0.4rem 2.2rem" aria-label="Select AM/PM">
                                        <option value="am">AM</option>
                                        <option value="pm">PM</option>
                                    </select>
                                </div>
                                @endif
                              </div>
                            </div>
                          </div>


                      </div>

                      <button class="btn btn-secondary btn-custom btn-sm rounded" wire:click="addSlot">
                        <span class="btn-text">
                            Submit
                        </span></button>
                  </div>
              </div>
                <div class="row mb-4">
                    <div class="col-12">
                        <div class="d-lg-flex  justify-content-between mb-4">
                            <h3 class="mb-lg-0">Business Schedule</h3>
                            <div class="time d-flex align-items-center gap-2">
                              <div class="form-check">
                                  <input class="form-check-input bg-success" type="radio" name="radio" id="Business Hours" value="" disabled>
                                  <label class="form-check-label" for="Business Hours">
                                      Business Hours
                                  </label>
                                </div>
                                <div class="form-check ">
                                  <input class="form-check-input bg-warning" type="radio" name="radio" id="After Business Hours" value="option1" disabled>
                                  <label class="form-check-label" for="After Business Hours">
                                      After Business Hours
                                  </label>
                                </div>
                             </div>
                        </div>

                        </div>
                        <div>
                            <table class="table table-bordered table-schedule">
                            <thead>
                                <tr>
                                    @foreach ($days as $day)
                                        <th>
                                            <div class="day">
                                                {{ $day }}
                                            </div>
                                            <div class="form-check form-switch">
                                                <label class="form-check-label">
                                                    {{ $schedule->working_days[$day] ? 'ON' : 'OFF' }}
                                                </label>
                                                <input
                                                    wire:model="schedule.working_days.{{ $day }}"
                                                    class="form-check-input"
                                                    aria-label="Toggle Business Schedule Status"
                                                    type="checkbox"
                                                    role="switch"
                                                    id="{{ strtolower($day) }}"
                                                >
                                            </div>
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>

                                    @foreach ($days as $day)
                                        <td >
                                            @foreach ($timeslots['business_hours'] as $timeslot)
                                                @if ($timeslot['day'] === $day)
                                                    @if($schedule->working_days[$day])
                                                    <div class="time-slot mb-3 bg-success text-white position-relative">
                                                    @else
                                                    <div class="time-slot mb-3 bg-secondary text-white position-relative">
                                                    @endif
                                                            {{ $timeslot['start_time'] }} - {{ $timeslot['end_time'] }}
                                                            <a href="#" title="Delete" aria-label="Delete" wire:click.prevent="deleteSlot({{ $timeslot['id'] }})" class="btn btn-sm btn-secondary rounded btn-hs-icon position-absolute top-0 end-0"  style="right: 5px;" name="deleteIcon">
                                                                <svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                </svg>
                                                            </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </td>
                                    @endforeach

                                    </tr>
                                    <tr>
                                    @foreach ($days as $day)
                                        <td>
                                            @foreach ($timeslots['after_business_hours'] as $timeslot)
                                                @if ($timeslot['day'] === $day)
                                                    @if($schedule->working_days[$day])
                                                    <div class="time-slot mb-3 bg-warning text-white position-relative">
                                                    @else
                                                    <div class="time-slot mb-3 bg-secondary text-white position-relative">
                                                    @endif
                                                            {{ $timeslot['start_time'] }} - {{ $timeslot['end_time'] }}
                                                            <a href="#" title="Delete" aria-label="Delete" wire:click.prevent="deleteSlot({{ $timeslot['id'] }})" class="btn btn-sm btn-secondary rounded btn-hs-icon position-absolute top-0 end-0"  style="right: 5px;" name="deleteIcon">
                                                                <svg aria-label="Delete" class="delete-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use xlink:href="/css/sprite.svg#delete-icon"></use>
                                                                </svg>
                                                            </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </td>
                                    @endforeach

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row inner-section-segment-spacing">
                                                <div class="col-12">
                                                    <h3>Add Holidays / Days Closed</h3>
                                                    <div class="d-lg-flex gap-3 mb-3">
                                                        <div>
                                                            <label for="select-days" class="form-label">
                                                                Select Days / Holidays
                                                            </label>
                                                            <div class="position-relative">
                                                                <input type="" id="select-days" wire:model="holidayDate"
                                                                    class="form-control w-auto js-single-date "
                                                                    placeholder="MM/DD/YYYY" name="selectHolidays">
                                                                <svg class="icon-date cursor-pointer" width="20" aria-label="Select Days / Holidays"
                                                                    height="20" viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z"
                                                                        fill="black" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label class="form-label">
                                                                Repeat Holiday
                                                            </label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" id="yearly"
                                                                    name="yearly" type="checkbox" tabindex=""  wire:model.defer="repeatYearly" value="1"/>
                                                                <label class="form-check-label" for="yearly">
                                                                    Yearly
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-secondary btn-custom btn-sm rounded" wire:click.prevent="saveHoliday">
                                                <span class="btn-text">

                                                    Submit
                                                </span>        
                                                </button>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-lg-9">
                                                    <h3>Listed Holidays</h3>
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Day</th>
                                                            <th scope="col">Action</th>
                                                        </thead>
                                                        <tbody>
                                                          @foreach($holidays as $holiday)
                                                            <tr class="odd">
                                                                <td>
                                                                    {{$holiday['holiday_date']}}
                                                                </td>
                                                                <td>
                                                                    {{$holiday['holiday_day']}}
                                                                </td>
                                                                <td>
                                                                    <a href="#" aria-label="delete" wire:click.prevent="deleteHoliday({{$holiday['id']}})"
                                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                        {{-- Updated by Shanila to Add svg icon--}}
                                                                <svg aria-label="delete"  width="21" height="21" viewBox="0 0 21 21">
                                                                    <use xlink:href="/css/common-icons.svg#recycle-bin">
                                                                    </use>
                                                                </svg>
                                                                {{-- End of update by Shanila --}}
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                          @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
        @if(!$isForm)
            <div class="col-12 justify-content-center form-actions d-flex gap-3">
            <button type="button"
            class="btn btn-outline-dark rounded">Cancel</button>
            <button type="submit"
            class="btn btn-primary rounded">Submit</button>
            </div>
        @endif
</div>
@push('scripts')
	<script>
	function updateVal(attrName,val){
	if(val!=''){
		Livewire.emit('updateVal', attrName, val);
	}
	}
</script>
@endpush
</div>
