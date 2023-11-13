<div x-data="{ bookingDetails: false, providerSavedForms: false , assignmentDetails:false }">
    @if ($providerProfile && !$providerProfile)
        <div class="" wire:ignore>
            <x-advancefilters type="" :filterProviders="$filterProviders" :hideProvider=$hideProvider />
        </div>
    @endif
    <div wire:ignore id='calendar-container' class="w-100">
        <div id='{{ $providerProfile ? 'avail_calendar' : 'calendar' }}'></div>
    </div>
    @include('panels.booking-details.admin-booking-details')
    @include('panels.common.assignment-details')

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
    <script src="/tenant-resources/js/index.global.min.js"></script>
    <script src="/tenant-resources/js/bs-index.global.min.js"></script>
    @if (!$providerProfile)
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
                    eventClick: function(event, jsEvent, view) {
                        if (event.url) {
                            window.location.href = event.url;
                            return false;
                        }
                    },
                    eventDisplay: 'block',
                    eventDidMount: function(info) {

                        $(info.el).attr('@click', 'assignmentDetails = true');
                        $(info.el).attr('tabindex', '0');
                        // $(info.el).attr('data-id',info.event.id); // When off canvas panel will be dynamic
                        let event = info.event;
                        $(info.el).attr('wire:click', event.extendedProps.panel_call);

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
                    eventClick: function(info) {
                        console.log("should emit = ", info.event.extendedProps.panel_call);
                        Livewire.emit(info.event.extendedProps.panel_call)

                        {{-- Livewire.emit('setAssignmentDetails') --}}

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

                });

                calendar.render();

                setTimeout(() => {

                    window.dispatchEvent(new Event('resize'))
                }, 0)

                window.addEventListener('updateScheduleCalendar', function(event) {
                    calendar.removeAllEvents();
                    calendar.removeAllEventSources();

                    var data = JSON.parse(event.detail.events);
                    calendar.addEventSource(data);

                })




            });
        </script>
    @else
        <script>
            document.addEventListener('livewire:load', function() {
                var avail_Calendar = FullCalendar.Calendar;
                var avail_Draggable = FullCalendar.Draggable;
                var avail_calendarEl = document.getElementById('avail_calendar');
                var avail_checkbox = document.getElementById('avail-drop-remove');
                var avail_data = @this.events;
                var avail_calendar = new avail_Calendar(avail_calendarEl, {
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
                    events: JSON.parse(avail_data),
                    eventDisplay: 'block',
                    eventDidMount: function(info) {

                        //$(info.el).attr('x-on:click', 'bookingDetails = true');
                        $(info.el).attr('tabindex', '0');
                        // $(info.el).attr('data-id',info.event.id); // When off canvas panel will be dynamic
                        let event = info.event;

                        startDate = moment(event.start).format('MMMM DD, YYYY');
                        let curr_date_moment = moment(event.start).format('YYYY-MM-DD');
                        $(info.el).attr('data-date', curr_date_moment);
                    },
                    //editable: true,
                    //selectable: true,
                    displayEventTime: false,
                    //droppable: true, // this allows things to be dropped onto the calendar
                    drop: function(info) {
                        // is the "remove after drop" checkbox checked?
                        if (avail_checkbox.checked) {
                            // if so, remove the element from the "Draggable Events" list
                            info.draggedEl.parentNode.removeChild(info.draggedEl);
                        }
                    },
                });

                avail_calendar.render();

                setTimeout(() => {

                    window.dispatchEvent(new Event('resize'))
                }, 0)

                avail_calendar.on('dateClick', function(info) {
                    // You can handle date clicks here if needed
                });

                avail_calendar.on('datesSet', function(info) {
                    // Refresh events whenever the month changes
                    @this.call('refreshEvents', info.view.currentStart.toISOString().slice(0, 7));

                });

                window.addEventListener('updateCalendar', function(event) {
                    avail_calendar.removeAllEvents();
                    avail_calendar.removeAllEventSources();

                    var data = JSON.parse(event.detail.events);
                    avail_calendar.addEventSource(data);

                })


            });
        </script>
    @endif

</div>
