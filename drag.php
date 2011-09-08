<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title><style type="text/css">
nav{height:100%;width:150px;margin-right:10px;}
#desktop{
		height:650px;
		width:1000px;
		border:1px dashed #FF9933;
		}
#prince_structure{height:270px;width:380px;background-color:white;background-image:url(images/PrinceStructure.gif);background-repeat:no-repeat;}
#prince_processes{height:350px;width:400px;background-image:url(images/prince2_processes_small.jpg);background-repeat:no-repeat;}
#prince_process_startup{height:350px;width:400px;background-image:url(images/process_su.gif);background-repeat:no-repeat;}
body{font-size:12px;}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script> 
<link rel="stylesheet" href="../development-bundle/themes/blitzer/jquery-ui-1.8.15.custom.css" type="text/css" /> 

<script language="javascript">
$(function() {
	
		$( ".draggable" ).draggable({
   containment: 'desktop',
   stack: {group: $(".draggable"), min: 1},
   handle: $(".title"),
   opacity: 0.8
 });			
	});
</script>

$(document).ready(function($){
 $("[id^=win]").draggable({
   containment: 'document',
   stack: {group: $("[id^=win]"), min: 1},
   handle: $(".title"),
   opacity: 0.8
 });
});


</head>

<body>
<div id="desktop">


<div id="prince_structure" title="Prince Structure" class="draggable" ></div><!-- end of prince_structure dialog -->
<div id="prince_processes" title="Prince Processes" class="draggable"></div>
<div id="prince_process_startup" title="Starting Up A Project" class="draggable"></div>
<div id="prince_process_startup_su1" title="Appoint an Executive and Project Manager" class="draggable">
<h3>Appointing an Executive and Project Manager</h3>
<div id="steps">
Steps <a href="#" onclick="$('#appoint_exec_steps').toggle();">show steps</a>
<ol id="appoint_exec_steps">
<li>Establish the responsibilities for the Executive</li>
<li>Prepare the role description for the Executive based on the role description in the folder ‘Roles and responsibilities’ as part of the product package</li>
<li> Estimate the time and effort required for the Executive role (this will be refined later)</li>
<li> Identify candidates for the Executive from the project’s stakeholders and select the most appropriate person for the role</li>
<li>Confirm the selected person’s availability, their acceptance of the role, and their commitment to carry it out</li>
<li>Assign the selected person to the role of Executive</li>
</ol>
</div><!-- end of steps -->
<div id="documents">
Documents<a href="#" onclick="$('#prince_process_startup_su1_docs').toggle();">Show Documents</a>
<ul id="prince_process_startup_su1_docs">
<li><a href="protoplan_documents/exec_role_doc.php" target="_blank">Executive Role doc</a></li>
<li>Executive Appointment Checklist</li>
<li>Supporting Files</li>
<li></li>
</ul>
</div><!-- end of documents -->
</div>

</div><!-- end of desktop division -->

<div id="executive_job_description"></div>






</body>
</html>
