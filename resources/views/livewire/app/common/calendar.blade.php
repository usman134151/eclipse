<div>
	<div id='calendar-container' wire:ignore>
		<div id='calendar'></div>
	</div>
</div>
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.4/index.global.min.js"></script>

<script>
	document.addEventListener('livewire:load', function() {
		var Calendar = FullCalendar.Calendar;
		var Draggable = FullCalendar.Draggable;
		var calendarEl = document.getElementById('calendar');
		var checkbox = document.getElementById('drop-remove');
		var data =	@this.events;
		var calendar = new Calendar(calendarEl, {
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
			dayMaxEvents: true,	// allow "more" link when too many events
			events: JSON.parse(data), dateClick(info) {
				var title = prompt('Enter Event Title');
				var date = new Date(info.dateStr + 'T00:00:00');
				var date = date;
				if(title != null && title != '') {
					calendar.addEvent({
						title: title,
						start: date,
						allDay: true
					});
					
					var eventAdd = {title: title, start: date};
					@this.addEvent(eventAdd);
				}
				else {
					alert('Event Title Is Required');
				}
			},
			editable: true,
			selectable: true,
			displayEventTime: false,
			droppable: true, // this allows things to be dropped onto the calendar
			drop: function(info) {
				// is the "remove after drop" checkbox checked?
				if (checkbox.checked) {
				// if so, remove the element from the "Draggable Events" list
				info.draggedEl.parentNode.removeChild(info.draggedEl);
				}
			},
			eventDrop: info => @this.eventDrop(info.event, info.oldEvent),
			loading: function(isLoading) {
				if (!isLoading) {
					// Reset custom events
					this.getEvents().forEach(function(e) {
						if (e.source === null) {
							e.remove();
						}
					});
				}
			}
		});
		
		calendar.render();
		@this.on('refreshCalendar', () => {
			calendar.refetchEvents()
		});
	});
</script>
@endpush