<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
<link rel='stylesheet' type='text/css' href='fullcalendar-1.5.2/fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='fullcalendar-1.5.2/fullcalendar/fullcalendar.print.css' media='print' />
<link rel="stylesheet" href="../themes/development-bundle/themes/hot-sneaks/jquery-ui-1.8.16.custom.css" type="text/css" /> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type='text/javascript' src='fullcalendar-1.5.2/fullcalendar/fullcalendar.min.js'></script>

<style type='text/css'>

	body {
		margin-top: 40px;
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}

	#calendar {
		/*width: 1000px;*/
		margin: 0 auto;
		}

</style>
<script type='text/javascript'>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			editable: true,
			events: [
				{
					title: 'All Day Event',
					start: new Date(y, m, 1)
				},
				{
					title: 'Long Event',
					start: new Date(y, m, d-5),
					end: new Date(y, m, d-2)
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d-3, 16, 0),
					allDay: false
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: new Date(y, m, d+4, 16, 0),
					allDay: false
				},
				{
					title: 'Meeting',
					start: new Date(y, m, d, 10, 30),
					allDay: false
				},
				{
					title: 'Lunch',
					start: new Date(y, m, d, 12, 0),
					end: new Date(y, m, d, 14, 0),
					allDay: false
				},
				{
					title: 'Birthday Party',
					start: new Date(y, m, d+1, 19, 0),
					end: new Date(y, m, d+1, 22, 30),
					allDay: false
				},
				{
					title: 'Click for Google',
					start: new Date(y, m, 28),
					end: new Date(y, m, 29),
					url: 'http://google.com/'
				}
			]
		});
		
	});

</script>





<script type="text/javascript">
$(function() {
	var $tabs = $( "#tabs" ).tabs(
					{show: function() {
        					$('#calendar').fullCalendar('render');
						}
    		});
});
</script>


</head>

<body>
<div id="tabs" class="widget">
<ul class="tabnav">
		<!-- <li><a href="#prince_view">Prince </a></li>
		<li><a href="#document_view">Documents</a></li>
		<li><a href="#log_view">Logs</a></li>
		<li><a href="#checklist_view">Checklists</a></li>-->
		<li><a href="#plans_view">Plans</a></li>
		<li><a href="#calendar_tab">Calendar</a></li>
<!--		<li><a href="#people_view">People</a></li> -->
</ul>

<div id="plans_view">Plans</div>
<div id="calendar_tab">
<div id='calendar'></div>
</div>
</div><!-- End of Tabs-->




</body>

	

</html>
