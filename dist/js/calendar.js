document.addEventListener('DOMContentLoaded', function () {
  const calendarEl = document.getElementById('calendar');
  if (calendarEl) {
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      datesSet: function (info) {
        if (info.view.type === 'dayGridMonth') {
          fetchReportsForCurrentMonth(info.start, info.end);
        }
      },
      //   eventContent: function (info) {
      //     var icon = '<i class="fa fa-calendar"></i>'; // Use your desired icon class
      //     var title = info.event.title || 'Untitled Event';
      //     var link = info.event.extendedProps.link || '#';

      //     return {
      //       html: '<a href="' + link + '">' + icon + '</a><br>' + title,
      //     };
      //   },
    });

    async function fetchReportsForCurrentMonth(start, end) {
      try {
        const startDate = start.toISOString().split('T')[0];
        const endDate = end.toISOString().split('T')[0];
        const response = await fetch(
          `${homeUrl}/wp-json/wp/v2/reports?after=${startDate}T00:00:00&before=${endDate}T00:00:00`
        );
        if (!response.ok) {
          throw new Error('Failed to fetch reports');
        }
        const reports = await response.json();
        const events = reports.map((report) => ({
          title: 'Daily Report', // replace with 'report.title.rendered' if want the actual post title
          start: report.date,
          className: 'fc-bg-primary',
          allDay: true,
          url: report.link,
        }));
        calendar.removeAllEvents();
        calendar.addEventSource(events);
      } catch (error) {
        alert(
          'There was an error while fetching reports!. Please refresh this page.'
        );
      }
    }
    calendar.render();
  }
});
