<div x-data="{ bookingDetails: false }"> {{-- Updated by Sohail Asghar to link bookings detail panel --}}
    <div wire:ignore id='calendar-container' class="w-100">
        <div id='calendar'></div>
    </div>
    {{-- Updated by Sohail Asghar to link bookings detail panel --}}
    @include('panels.booking-details.admin-booking-details')
    <template x-if="bookingDetails">
        <div>
            @include('modals.admin-staff')
            @include('modals.assign-provider-team')
            @include('modals.meeting-links')
            @include('modals.provider-message')
            @include('modals.unassign')
            @include('modals.common.review-feedback')
            @include('modals.common.available-timeslot')
        </div>
    </template>
    {{-- End of update by Sohail Asghar --}}
</div>
@push('scripts')
    <script src="/tenant-resources/js/index.global.min.js"></script>
    <script src="/tenant-resources/js/bs-index.global.min.js"></script>

    <script>
        document.addEventListener('livewire:load', function() {
            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;
            var calendarEl = document.getElementById('calendar');
            var checkbox = document.getElementById('drop-remove');
            var data = @this.events;
            var calendar = new Calendar(calendarEl, {
				//showNonCurrentDates: false ,
                themeSystem: 'bootstrap5',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                buttonText: {
                    today: 'Today',
                    month: 'Month',
                    week: 'Week',
                    day: 'Day',
                    list: 'List'
                },
                // weekNumbers: true, // shows weeknumber
                dayMaxEvents: true, // allow "more" link when too many events
                events: JSON.parse(data),
                eventDisplay: 'block',
                eventDidMount: function(info) {

                    //$(info.el).attr('x-on:click', 'bookingDetails = true');
                    $(info.el).attr('tabindex', '0');
                    // $(info.el).attr('data-id',info.event.id); // When off canvas panel will be dynamic
                    let event = info.event;

                    startDate = moment(event.start).format('MMMM DD, YYYY');
                    let curr_date_moment = moment(event.start).format('YYYY-MM-DD');
                    $(info.el).attr('data-date', curr_date_moment);
                    // var tooltip = new bootstrap.Popover(info.el, {
                    // 	title: startDate,
                    // 	content: info.event.extendedProps.description,
                    // 	placement: 'right',
                    // 	trigger: 'hover',
                    // 	container: 'body',
                    // 	html: true,
                    // 	// delay: {"show":0, "hide":1000}
                    // });
                },
                //editable: true,
                //selectable: true,
                displayEventTime: false,
                //droppable: true, // this allows things to be dropped onto the calendar
                drop: function(info) {
                    // is the "remove after drop" checkbox checked?
                    if (checkbox.checked) {
                        // if so, remove the element from the "Draggable Events" list
                        info.draggedEl.parentNode.removeChild(info.draggedEl);
                    }
                },
                // eventDrop: info => @this.eventDrop(info.event, info.oldEvent),
                loading: function(isLoading) {
                    //	if (!isLoading) {
                    // 	// Reset custom events
                    // 	this.getEvents().forEach(function(e) {
                    // 		if (e.source === null) {
                    // 			e.remove();
                    // 		}
                    // 	});
                    // }
                },

            });

            calendar.render();

            setTimeout(() => {
                window.dispatchEvent(new Event('resize'))
            }, 500)
            @this.on('refreshCalendar', () => {
                //calendar.refetchEvents()
            });
            calendar.on('dateClick', function(info) {
                // You can handle date clicks here if needed
            });

            calendar.on('datesSet', function(info) {
                // Refresh events whenever the month changes
                @this.call('refreshEvents', info.view.currentStart.toISOString().slice(0, 7));
                
            });

            window.addEventListener('updateCalendar', function(event) {
				  calendar.removeAllEvents();
    				calendar.removeAllEventSources();
				
                var data = JSON.parse(event.detail.events);
                calendar.addEventSource(data);
                window.dispatchEvent(new Event('resize'));

			})


        });
    </script>
@endpush
