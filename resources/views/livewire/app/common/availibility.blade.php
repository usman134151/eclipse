<div>
    <h3>Availability</h3>
    <!-- Filters -->

    <div class="row mb-1">
        
    <div class="col-lg-3 mb-4 mb-lg-1 ">
            <div><label class="form-label" for="supervisor">Filter by Date</label></div>
            <div class="position-relative align-self-end">
                    <!-- Begin : it will be replaced with livewire module-->
                    <svg aria-label="Date" class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#date-field" style="padding:0.6rem"></use>
                    </svg>
                    <input type="" style="padding:0.6rem 0.75rem;min-height:3.125rem" class="form-control form-control-md form-control-date js-single-date" placeholder="" name="selectDate" aria-label="Select Date" id="selecteddate">
                    <!-- End : it will be replaced with livewire module -->

                    <!-- End : it will be replaced with livewire module -->
            </div>
		  </div>
        <div class="col-lg mb-4 mb-lg-0">
            <label class="form-label" for="supervisor">Filter by Booking</label>
            {{-- <select class="form-select select2 booking" id="BookingID" name="BookingID"  wire:click="ChangeFilter($event.target.value,'Booking')">
            @if(!empty($selectedBookingNumber))
            <option>{{$selectedBookingNumber}}</option>
            @else
            <option value="0">Select Booking</option>
            @endif
              
                @foreach($bookingList as $list)
                    <option value="{{$list->id}}">{{$list->booking_number}}</option>   
                @endforeach
            </select> --}}
            <input type="text" class="form-control" id="BookingID" name="BookingID"  wire:model="bookingFilter" placeholder="Search Bookings">
        </div>

       <div class="col-lg mb-1 mb-lg-0">
        <label class="form-label" for="ProviderId">Filter By Provider</label>
        {{-- <select class="form-select select2 provider" id="ProviderId" name="ProviderId" wire:click="ChangeFilter($event.target.value,'Provider')">
        @if(!empty($selectedProvider))
            <option>{{$selectedProvider}}</option>
            @else
            <option value="0">Select provider</option>
            @endif
      
        @foreach($providerList as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>   
                @endforeach
        </select> --}}
        <input type="text" class="form-control" id="ProviderId" name="ProviderId"  wire:model="providerFilter" placeholder="Search Providers">
       </div>

       {{-- <div class="col-lg mb-4 mb-lg-0">
        <label class="form-label" for="steam">Filter By Provider Team</label>
        <select class="form-select select2 team" id="steam" name="steam" wire:click="ChangeFilter($event.target.value,'Team')" >
        @if(!empty($selectedTeam))
            <option>{{$selectedTeam}}</option>
            @else
            <option value="0">Select Provider Team</option> 
            @endif
          
        @foreach($teamList as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>   
                @endforeach 
        </select>
       </div> --}}
    </div>
    <div class="col-sm mb-4">
    <a href="#" wire:click.prevent="resetDate">Reset Filters</a>
    <a href="#" wire:click.prevent="applyFilter">Apply Filters</a>
    </div>
    <!-- /Filters -->
    <!-- BEGIN: Availability -->
    
    <div class="availability card border-0 table-responsive">
    
        <table class="table-availability">
            <thead>
                <tr class="row-day-time">
                    <th class="day">
                   {{ $dayPlusDate}}
                    </th>
                    @foreach($tableHeaders as $index)
                    <th class="time">
                        {{$index}}
                    </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
               
            @if (count($schedule) > 0)
                @foreach ($schedule as $index)
                    <tr class="even">
                        <td>
                            <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" alt="Image" class="img-user">
                            <div class="mt-2 text-sm">{{ $index['Name'] }}</div>
                        </td>

                        @for ($hour = 0; $hour < 24; $hour += 2)
                            @php
                                $formattedHour = sprintf('%02d', $hour);
                                $slotKey = "$formattedHour:00";
                                $classKey = "$formattedHour-class";
                                $colKey = "$formattedHour-col";
                                $booking = $index['bookings'][$slotKey];
                            @endphp
                            <td colspan="">
                                @foreach($booking as $book)
                                <div class="{{$book['class'] }}">
                                    <a href="/admin/bookings/view-booking/{{ encrypt($index['booking_id']) }}">
                                        {{ $book['title'] }}
                                    </a>
                                </div>
                                @endforeach
                            </td>
                        @endfor
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="13">No records available</td>
                </tr>
            @endif


             
            </tbody>
        </table>
    </div>
    
    <!-- EMD: Availability -->
</div>
@push('scripts')
<script>
    $(document).ready(function () {
        // Initialize Select2 on the select element
        $('.booking').select2();

        // Listen for changes in the Select2 element
        $('.booking').on('change', function (e) {
            @this.ChangeFilter(e.target.value,'Booking'); // Trigger the Livewire method
        });
        $('.provider').select2();

        // Listen for changes in the Select2 element
        $('.provider').on('change', function (e) {
            @this.ChangeFilter(e.target.value,'Provider'); // Trigger the Livewire method
        });

        $('.team').select2();

        // Listen for changes in the Select2 element
        $('.team').on('change', function (e) {
            @this.ChangeFilter(e.target.value,'Team'); // Trigger the Livewire method
        });
        $('.js-single-date').on('apply.daterangepicker', function(ev, picker) {
            @this.updateVa('changedate',  $(this).val());
        

        });

   
       
        
    });
</script>
@endpush
