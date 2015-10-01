// JavaScript Document
$(function () {
            $(".player").mb_YTPlayer(); 
			// .player - class to add for playing video 
        });
		
// Kalender		
(function($) {

  $.fn.gCalReader = function(options) {
    var $div = $(this);

    var defaults = $.extend({
        calendarId: 'b3t0ogimlgca5h3qa8f2a1jj1g@group.calendar.google.com',
        apiKey: 'Public_API_Key',
        dateFormat: 'LongDate',
        errorMsg: 'No events in calendar',
        maxEvents: 1,
        futureEventsOnly: true,
        sortDescending: true
      },
      options);

    var s = '';
    var feedUrl = 'https://www.googleapis.com/calendar/v3/calendars/' +
      encodeURIComponent(defaults.calendarId.trim()) +'/events?key=' + defaults.apiKey +
      '&orderBy=startTime&singleEvents=true';
      if(defaults.futureEventsOnly) {
        feedUrl+='&timeMin='+ new Date().toISOString();
      }

    $.ajax({
      url: feedUrl,
      dataType: 'json',
      success: function(data) {
        if(defaults.sortDescending){
          data.items = data.items.reverse();
        }
        data.items = data.items.slice(0, defaults.maxEvents);

        $.each(data.items, function(e, item) {
          var eventdate = item.start.dateTime || item.start.date ||'';
          var summary = item.summary || '';
					var description = item.description;
					var location = item.location;
					s ='<div class="eventtitle"></br>' + summary + '</div>';
					s +='<div class="eventdate"> Hvornår: </br>'+ formatDate(eventdate, defaults.dateFormat.trim()) +'</div>';
					if(location) {
						s +='<div class="location">Hvor: </br>' + location + '</div>';
					}
					if(description) {
						s +='<div class="description">'+ description +'</div>';
					}
					$($div).append('<li>' + s + '</li>');
        });
      },
      error: function(error) {
        $($div).append('<p>' + defaults.errorMsg + ' | ' + error + '</p>');
      }
    });

    function formatDate(strDate, strFormat) {
      var fd, arrDate, am, time;
      var calendar = {
        months: {
          full: ['', 'Januar', 'Februar', 'Marts', 'April', 'Maj',
            'Juni', 'Juli', 'August', 'September', 'Oktober',
            'November', 'December'
          ],
          short: ['', 'Jan', 'Feb', 'Mar', 'Apr', 'Maj', 'Jun', 'Jul',
            'Aug', 'Sep', 'Okt', 'Nov', 'Dec'
          ]
        },
        days: {
          full: ['Søndag', 'Mandag', 'Tirsdag', 'Onsdag', 'Torsdag',
            'Fredag', 'Lørdag', 'Sunday'
          ],
          short: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat',
            'Sun'
          ]
        }
      };

      if (strDate.length > 10) {
        arrDate = /(\d+)\-(\d+)\-(\d+)T(\d+)\:(\d+)/.exec(strDate);

        am = (arrDate[4] < 12);
        time = am ? (parseInt(arrDate[4]) + ':' + arrDate[5] + ' AM') : (
          arrDate[4] - 12 + ':' + arrDate[5] + ' PM');

        if (time.indexOf('0') === 0) {
          if (time.indexOf(':00') === 1) {
            if (time.indexOf('AM') === 5) {
              time = 'MIDNIGHT';
            } else {
              time = 'NOON';
            }
          } else {
            time = time.replace('0:', '12:');
          }
        }

      } else {
        arrDate = /(\d+)\-(\d+)\-(\d+)/.exec(strDate);
        time = 'Time not present in feed.';
      }

      var year = parseInt(arrDate[1]);
      var month = parseInt(arrDate[2]);
      var dayNum = parseInt(arrDate[3]);

      var d = new Date(year, month - 1, dayNum);

      switch (strFormat) {
        case 'ShortTime':
          fd = time;
          break;
        case 'ShortDate':
          fd = month + '/' + dayNum + '/' + year;
          break;
        case 'LongDate':
          fd = calendar.days.full[d.getDay()] + ' d. ' + dayNum + '. ' + calendar.months.full[
            month] + ', ' + year;
          break;
        case 'LongDate+ShortTime':
          fd = calendar.days.full[d.getDay()] + ' ' + calendar.months.full[
            month] + ' ' + dayNum + ', ' + year + ' ' + time;
          break;
        case 'ShortDate+ShortTime':
          fd = month + '/' + dayNum + '/' + year + ' ' + time;
          break;
        case 'DayMonth':
          fd = calendar.days.short[d.getDay()] + ', ' + calendar.months.full[
            month] + ' ' + dayNum;
          break;
        case 'MonthDay':
          fd = calendar.months.full[month] + ' ' + dayNum;
          break;
        case 'YearMonth':
          fd = calendar.months.full[month] + ' ' + year;
          break;
        default:
          fd = calendar.days.full[d.getDay()] + ' ' + calendar.months.short[
            month] + ' ' + dayNum + ', ' + year + ' ' + time;
      }

      return fd;
    }
  };

}(jQuery));



/*Her starter hover/caption effekten*/
$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.thumbnail').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});