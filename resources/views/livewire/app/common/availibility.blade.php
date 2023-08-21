<div>
    <h3>Availability</h3>
    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-lg-3 mb-4 mb-lg-0 position-relative align-self-end">
            <!-- Begin : it will be replaced with livewire module-->
            <svg aria-label="Input Calendar" class="icon-date md cursor-pointer" width="20" height="20" viewBox="0 0 20 20">
            <use  xlink:href="/css/common-icons.svg#input-calender"></use>
             </svg>
            <input type="" class="form-control form-control-md form-control-date"
                placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date"value="{{$currentDate}}">
            <!-- End : it will be replaced with livewire module -->
        </div>
        <div class="col-lg mb-4 mb-lg-0">
            <label class="form-label" for="supervisor">Bookings</label>
            <select class="form-select select2 booking" id="BookingID" name="BookingID"  wire:click="ChangeFilter($event.target.value,'Booking')">
                <option value="0">Select Booking</option>
                @foreach($bookingList as $list)
                    <option value="{{$list->id}}">{{$list->booking_number}}</option>   
                @endforeach
            </select>
        </div>

       <div class="col-lg mb-4 mb-lg-0">
        <label class="form-label" for="ProviderId">Filter By Provider</label>
        <select class="form-select select2 provider" id="ProviderId" name="ProviderId" wire:click="ChangeFilter($event.target.value,'Provider')">
        <option value="0">Select provider</option>
        @foreach($providerList as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>   
                @endforeach
        </select>
       </div>

      <!-- <div class="col-lg mb-4 mb-lg-0">
        <label class="form-label" for="steam">Filter By Provider Team</label>
        <select class="form-select select2 team" id="steam" name="steam" wire:click="ChangeFilter($event.target.value,'Team')" >
        <option value="0">Select Provider Team</option>   
        @foreach($teamList as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>   
                @endforeach 
        </select>
       </div>-->
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
               
            @foreach ($schedule as $index)
            <tr class="even">
                <td>
                    <img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" alt="Image" class="img-user">
                    <div class="mt-2 text-sm">{{ $index['Name'] }}</div>
                </td>

                @for ($hour = 0; $hour < 24; $hour++)
                @php
                    $formattedHour = sprintf('%02d', $hour);
                    $slotKey = "$formattedHour:00";
                    $classKey = "$formattedHour-class";
                    $colKey = "$formattedHour-col";
                    $booking = $index['bookings'][$slotKey];
                @endphp
                <td colspan="{{ $booking['col'] }}">
                    <div class="{{ $index['bookings'][$classKey] }}">
                        {{ $booking['title'] }}
                    </div>
                </td>
            @endfor
            </tr>
            @endforeach


             
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
    });
</script>
@endpush
