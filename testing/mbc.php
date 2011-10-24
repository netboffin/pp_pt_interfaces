<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Goject</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="inc/jquery.metadata.js"></script>
<!-- 
<script type="text/javascript" src="inc/jquery/jquery-ui-1.8.16.custom.js"></script>
<script type="text/javascript" src="inc/jquery.metadata.js"></script>

-->
<script type="text/javascript" src="inc/mbContainer.js"></script>

<link rel="stylesheet" href="../themes/development-bundle/themes/hot-sneaks/jquery-ui-1.8.16.custom.css" type="text/css" /> 


<link type="text/css" href="inc/mbContainer.css" rel="stylesheet"/>

<!-- Document Editor Scripts -->
<script type="text/javascript" src="http://jquery.bassistance.de/treeview/jquery.treeview.js"></script>
<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js" ></script>
<!-- End of Document Editor Scripts -->
<!-- Checklists -->
<script type="text/javascript" src="../spreadsheet/jquery.sheet.js"></script>

 <!--Required-->
        <link rel="stylesheet" type="text/css" href="../spreadsheet/jquery.sheet.css" />
        <script type="text/javascript" src="../spreadsheet/jquery.sheet.js">
        </script>
		<script type="text/javascript" src="../spreadsheet/parser.js"></script>
       
<!--/Required-->



<script type="text/javascript">
 $('#jQuerySheet0').sheet({
                    title: 'Spreadsheet Playground',
                    /*inlineMenu: inlineMenu($.sheet.instance),*/
                    urlGet: '../spreadsheet/sheets/numberstesting.html',
					/*autoFiller: true*/
                });
</script>

<!-- End of Checklists -->
<!-- set up tinyMCE -->
<script type="text/javascript" >
tinyMCE.init({
        mode : "textareas",
        theme : "advanced",
        plugins : "emotions,spellchecker,advhr,insertdatetime,preview", 
        content_css : "document_templates/css/custom_content.css",     
        // Theme options - button# indicated the row# only
        theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,fontselect,fontsizeselect,formatselect",
        theme_advanced_buttons2 : "cut,copy,paste,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,|,code,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "insertdate,inserttime,|,spellchecker,advhr,,removeformat,|,sub,sup,|,charmap,emotions",      
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true
});

</script>






<script type="text/javascript">
$(function(){
    $(".containerPlus").buildContainers({
        containment:"#desktop",
        elementsPath:"inc/elements/",
        onResize:function(o){},
        onClose:function(o){},
        onCollapse:function(o){},
        onIconize:function(o){},
        onDrag:function(o){},
        onLoad:function(o){}
    });
});


	$(function() {
		var $tabs = $( "#tabs" ).tabs();
		
		$('#document_view_link').click(function() { // bind click event to link
	
    $tabs.tabs('select', 1); // switch to third tab
    return false;
});

		
	});
	
$('#document_view_link').click(function() { // bind click event to link
	alert("document view link clicked");
    $tabs.tabs('select', 2); // switch to third tab
    return false;
});

</script>
<style>
#desktop{
		min-height:85%;
		width:100%;
		border:1px dashed #FF9933;
		background:#2C4359;
		background: url("images/ui-bg_dots-small_35_35414f_2x2.png") repeat scroll 50% 50% #35414F;
}
html{
			height:100%
		}
body{
			height:100%
		}
#tabs{
			height:95%;
		}
#prince_view{
			height:100%;
			}
</style>

<link rel='stylesheet' type='text/css' href='fullcalendar-1.5.2/fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='fullcalendar-1.5.2/fullcalendar/fullcalendar.print.css' media='print' />

<style type='text/css'>

	body {
		margin-top: 2px;
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}

	#calendar {
		/*width: 1000px;*/
		margin: 0 auto;
		}

</style>
		


</head>

<body>

<div id="tabs" class="widget">
<ul class="tabnav">
		<li><a href="#prince_view">Prince </a></li>
		<li><a href="#document_view">Documents</a></li>
		<li><a href="#log_view">Logs</a></li>
		<li><a href="#checklist_view">Checklists</a></li>
		<li><a href="#plans_view">Plans</a></li>
		<li><a href="#calendar_tab">Calendar</a></li>
		<li><a href="#people_view">People</a></li>
</ul>


<div id="prince_view" class="tabdiv">
<div id="desktop">

 
 <div class="containerPlus draggable resizable {buttons:'m,c,i', icon:'browser.png', skin:'stiky', width:'300',grid:100, rememberMe:true}" >
<div id="documents">
Documents<a href="#" onclick="$('#prince_process_startup_su1_docs').toggle();">Show Documents</a>
<ul id="prince_process_startup_su1_docs">
<li><a href="../protoplan_documents/index.php?doc_id=exec_role" target="_blank">Executive Role Document</a></li>
<li><a id="document_view_link" href="#">Project Manager Role Document</a></li>
<li>Executive Appointment Checklist</li>
<li>Supporting Files</li>
<li></li>
</ul>
</div><!-- end of documents -->
</div>
 <div class="containerPlus draggable resizable {buttons:'m', skin:'default', width:'500',title:'Dock' }" style="top:300px; left:30%">
    <div id="dock"> </div><div style="clear:both;"></div>

    <hr><br>
    <b>this container is always on top!</b>
    <p>by setting the metatag: alwaysOnTop:true, this container stay over the others.</p>
    <b>You can choose where the iconized containers are stored!</b>
    <p>this is an example, but you can define whatever DOM element you want as your dock; and each iconizable container can have its one or none (in that case it's iconized at left:0 of its parent)!</p>
    <b>preminimize a container</b>

    <p>to preminimize containers just add the param <span style="font-weight: bold;">collapsed:'true'</span></p>
    <p>You can verify the state of this container by pressing the button at the end of this page.</p>
    <p>to verify the state of a container you have a metod <span style="font-weight: bold;">$.fn.mb_getState(attr)</span>; you can pass the attribute to verify (ex: collapsed or iconized) and it returns
      <span style="font-weight: bold;">true</span> or <span style="font-weight: bold;">false</span></p>
  </div>





</div><!-- end of desktop -->
</div><!-- end of prince_view -->
<div id="document_view" class="tabdiv" name="document_view">
<h1>This will be the document view</h1>
<!-- tinymce goes here -->
<form id="content_holder" >
<textarea id="main_content" name="main_content" cols="80" rows="60" >

</textarea>
</form>



</div><!-- end of document_view -->
<div id="log_view">
	<h1>Logs View</h1>
</div>
<div id="checklist_view">

<div id="jQuerySheet0" class="jQuerySheet" style="height:450px;">
 </div>

</div>
<div id="plans_view">
<h1>Plans Tab</h1>
<q>"A goal without a plan is just a wish." - Antoine de Saint-Exupery</q>
<p>
What we'll have here are:
<ul><li>A way to view all the plans of a project</li>
<li>A way of viewing an individual plan</li>
<li>The Prince page will link directly to individual plans</li> 
</ul>
<p>Firstly, PRINCE2 defines three levels of plan: Project, Stage and Team.</p>
<p>PRINCE2 prescribes the technique of Product Based Planning, which the manual describes in some detail. This does not mean, however, that the Product Breakdown Structure, Product Flow Diagrams and Product Descriptions resulting from that activity are the only constituents of the plan. Rather, it moves the emphasis of planning away from conventional tasks and towards Products (i.e. deliverable things). </p>
</p>
<p>Exception Plans

An Exception Plan is required whenever part of the project is predicted to go outside it's tolerances. People encountering the concept of Exception Plan for the first time sometimes think that it's a different type of plan from a Project or Stage Plan. In fact it's just a potential replacement for the plan that covers that part of the project that is in exception. So if a Stage is going to exceed its tolerances, your Exception Plan will replace the Stage Plan and be of the same design. It's intended to cover a different time period however: from "now" to the end of the orginal planning period. </p>
</div>
<div id="calendar_tab">
<div id='calendar'></div>
</div>
<div id="people_view" class="tabdiv">
<h2>People</h2>
Shows the people related to the project
</div><!-- end of people_view -->
</div> <!-- end of tabs -->
<script type='text/javascript' src='fullcalendar-1.5.2/fullcalendar/fullcalendar.min.js'></script>
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
</body>
</html>
