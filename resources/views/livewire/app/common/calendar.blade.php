<div x-data="{ bookingDetails: false, providerSavedForms: false, assignmentDetails: false, addReimbursement: false, step: 1 }">
    @if (!$providerProfile)
        <div class="" wire:ignore>
            {{-- <x-advancefilters type="" :filterProviders="$filterProviders" :hideProvider=$hideProvider /> --}}
            <x-advancefilters type="" :filterProviders="$filterProviders" :hideProvider="false"
            :filterUsers="$filterUsers" :setupValues="$setupValues" :tags="$tags" />
        </div>
    @endif
    <div wire:ignore id='calendar-container' class="w-100">
        <div id='{{ $providerProfile ? 'avail_calendar' : 'calendar' }}'></div>
    </div>
    @include('panels.booking-details.admin-booking-details')
    {{-- update by Maarooshaa to include panel only if provider is logged in --}}
    @if (session()->get('isProvider'))
        @include('panels.common.assignment-details')
        @include('modals.common.running-late')
        @include('modals.return-assignment')
        {{-- @include('panels.provider.check-in') --}}
    @endif
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
            document.addEventListener('DOMContentLoaded', function() {
                document.addEventListener('click', function(event) {
                    if (event.target.classList.contains('fc-more-link')) {
                        setTimeout(function() {
                            var moreBtn = event.target;
                            var btnRect = moreBtn.getBoundingClientRect();
                        
                            var calendar = document.querySelector('.fc-scrollgrid-liquid');
                            var calendarRect = calendar.getBoundingClientRect();
                        
                            // Get the coordinates of the .fc-more-link element relative to the viewport
                            var posX = btnRect.left;
                            var posY = btnRect.bottom;
                        
                            // Find or create the element with the class .fc-popover
                            var element = document.querySelector('.fc-popover');
                            if (!element) {
                                // Create the element if it doesn't exist
                                element = document.createElement('div');
                                element.className = 'fc-popover';
                                document.body.appendChild(element);
                            }
                        
                            // Set the position of the .fc-popover element
                            element.style.position = 'absolute';
                            element.style.top = posY - calendarRect.top + 'px';
                            element.style.left = posX - calendarRect.left + 'px';
                        
                        }, 0); // Adjust the delay as needed
                    }
                });
            });

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
                    dayMaxEvents: 10, // allow "more" link when too many events will show 10 events then more option will appear
                    events: JSON.parse(data),
                    eventClick: function(event, jsEvent, view) {
                        if (event.url) {
                            window.location.href = event.url;
                            return false;
                        } else {
                            //added by Amna Bilal to trigger livewire on click
                            var eventData = JSON.stringify(event);
                            eventData = JSON.parse(eventData)
                            var bookingId = eventData.event.extendedProps.bookingId;
                            var bookingNumber = eventData.event.extendedProps.bookingNumber;


                            Livewire.emit('openBookingDetails', bookingId, bookingNumber);
                            //end of updates by Amna Bilal to trigger livewire on click
                        }
                    },
                    eventDisplay: 'block',
                    eventDidMount: function(info) {

                        var eventData = info.event.extendedProps;

                        if (eventData.eventColor != "") {
                            info.event.setProp('backgroundColor', eventData.eventColor);
                            if(eventData.darkText)
                                $(info.el).attr('id', 'dark-color-text-event');
                        }


                        $(info.el).attr('tabindex', '0');
                        // $(info.el).attr('data-id',info.event.id); // When off canvas panel will be dynamic
                        let event = info.event;
                        startDate = moment(event.start).format('MMMM DD, YYYY');
                        let curr_date_moment = moment(event.start).format('YYYY-MM-DD');
                        $(info.el).attr('data-date', curr_date_moment);

                        if (eventData.isProvider)
                            $(info.el).attr('@click',
                                'assignmentDetails = true'
                                ); //update to open assignment-details panel in provider-dashboard -- Maarooshaa Asim

                        var tooltip = new bootstrap.Popover(info.el, {
                            title: eventData.timeSlot,
                            content: eventData.description,
                            placement: 'right',
                            trigger: 'hover',
                            container: 'body',
                            html: true,
                            delay: {
                                "show": 100,
                                "hide": 750
                            }
                        });
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
<style>#dark-color-text-event .fc-event-main{color:#000 !important}</style>
</div>
