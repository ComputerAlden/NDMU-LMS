$(document).ready(function() {
  // Initialize FullCalendar
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    defaultView: 'month',
    editable: false,
    eventLimit: true,
    events: [
      // Specify available dates and appointment times
      {
        title: 'Consultation',
        start: '2023-04-11T08:30:00',
        end: '2023-04-11T09:00:00'
      },
      {
        title: 'Annual Medical Check-up',
        start: '2023-04-11T09:00:00',
        end: '2023-04-11T09:30:00'
      },
      {
        title: 'Dental Check-up',
        start: '2023-04-11T09:30:00',
        end: '2023-04-11T10:00:00'
      },
      // Add more events for other dates and times
    ]
  });
});
