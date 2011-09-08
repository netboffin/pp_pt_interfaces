<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>GoJect</title>
<!-- needed for tabs -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script> 
<link rel="stylesheet" href="../development-bundle/themes/blitzer/jquery-ui-1.8.15.custom.css" type="text/css" /> 

<script language="javascript">
$(function() {
		$( "#tabs" ).tabs();			
	});
</script>

<style type="text/css">
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
<script type="text/javascript">
$(function(){
	var desktop_position = $('#desktop').position();
	var desktop_width = $('#desktop').width();
	var desktop_bottom = desktop_position.top + $('#desktop').height;
	
	var prince_processes_width = $('#prince_processes').width();
	
	
	
	var prince_processes_left = desktop_width - (prince_processes_width+50);/* Look into the 50 */
	var prince_processes_top = desktop_position.top;
		$('#prince_structure')
    .dialog({ minHeight:'305', minWidth:'375',
	position:[desktop_position.left,desktop_position.top],
	zIndex:3,
	hide:'slide',
	draggable: false })
    .parents('.ui-dialog')
        .draggable({
            handle: '.ui-dialog-titlebar',
            containment: '#desktop'
        }); 
		
		$('#prince_processes')
    .dialog({ minHeight:'450', minWidth:'450',
			autoOpen: false,
			hide:'slide',
			position:[prince_processes_left,prince_processes_top],
			draggable: false })
	.parents('.ui-dialog')
        .draggable({
            handle: '.ui-dialog-titlebar',
            containment: '#desktop'
        }); 
	$('#prince_process_startup')
    .dialog({ minHeight:'450', minWidth:'500',
			autoOpen: false,
			hide:'slide',
			position:[desktop_position.left,desktop_bottom],
			draggable: false })
	.parents('.ui-dialog')
        .draggable({
            handle: '.ui-dialog-titlebar',
            containment: '#desktop'
        }); 
		
	 $('#prince_process_startup_su1')
    .dialog({ minHeight:'450', minWidth:'450',
			autoOpen: false,
			hide:'slide',
			position:[prince_processes_left,prince_processes_top],
			draggable: false })
	.parents('.ui-dialog')
        .draggable({
            handle: '.ui-dialog-titlebar',
            containment: '#desktop'
        }); 
		
/* x1, y1, x2,y2    top left right bottom [8,28,550,230] $('#prince_structure.ui-dialog-titlebar').draggable({containment:'parent'});*/
$('#prince_structure').click(function(){
	
	$('#prince_processes').dialog('open');
}
);
//$('#prince_structure').click($('#prince_processes').show());
$('#prince_processes').click(function(){
	$('#prince_process_startup').dialog('open');
});
$('#prince_process_startup').click(function(){
	$('#prince_process_startup').dialog('open');
});
$('#prince_process_startup').click(function(){
 $('#prince_process_startup_su1').dialog('open');

});
$('#appoint_exec_steps').hide();
$('#prince_process_startup_su1_docs').hide();



});/* End of $( or document ready */

</script>
<script src="../development-bundle/ui/jquery-ui-1.8.15.custom.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://jquery.bassistance.de/treeview/demo/screen.css" type="text/css" />
<link rel="stylesheet" href="http://jquery.bassistance.de/treeview/jquery.treeview.css" type="text/css" />
<style>

#executive_role_table{
	font-family:arial;
	width:100%;
	border-top:1px solid black;
	border-left:1px solid black;
	border-collapse:collapse;
	}
td{
	border-right:1px solid black;
	border-bottom:1px solid black;
	padding:10px;
}
.quarterspace{width:25%}
</style>


<script type="text/javascript" src="http://jquery.bassistance.de/treeview/jquery.treeview.js"></script>
<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js" ></script >
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

</script >

<script>
  $(document).ready(function(){
    $("#example").treeview();
	$("#example2").treeview();
  });
  function get_content(content_to_get){
  	/* 
		ajax send value executive_role to a php file to process
		along with the user_id and the project_id
		and return the 
	*/
	//$('#main_content').load('document_templates/executive_role_template.php');
	ajaxLoad();
  }
  
  function ajaxLoad() {
    var ed = tinyMCE.get('main_content');
	//ed.load('document_templates/executive_role_template.php');
    // Do you ajax call here, window.setTimeout fakes ajax call
   /* ed.setProgressState(1); // Show progress
    window.setTimeout(function() {
        ed.setProgressState(0); // Hide progress
        ed.setContent('HTML content that got passed from server.');
    }, 3000);*/
	$.get("document_templates/executive_role_template.php", function(content) { 
    // if you have one tinyMCE box on the page:
    ed.setContent(content);
});
//$.get("document_templates/executive_role_template.php", tinyMCE.activeEditor.setContent);
}
  
  </script>


<style>
body{background-color:#EEEEEE;text-align:center;margin-top:10px;}
#wrapper{text-align:left;margin:auto;}
#left{top:50px;left:10px;width:200px;background:#EEEEEE;float:left;border:1px solid black;}
#centre{
	width:20cm;
	height:29.7cm;
	background:#EEEEEE;
	border:1px solid #bbb;
	margin:auto;
	text-align:centre;
	float:left;
	margin-left:10px;
	margin-right:10px;
	
	}
/*#right{position:absolute;top:50px;right:10px;width:100px;}*/
#content_holder{width:18.8cm;height:27.7cm;margin:auto;text-align:left;}
textarea{width:100%;}
</style>



</head>

<body>
<div id="tabs" class="widget">
<ul class="tabnav">
		<li><a href="#prince_view">Prince </a></li>
		<li><a href="#document_view">Documents</a></li>
		<li><a href="#people_view">People</a></li>
</ul>
<div id="prince_view" class="tabdiv">
<div id="desktop">
<div id="prince_structure" title="Prince Structure" ></div><!-- end of prince_structure dialog -->
<div id="prince_processes" title="Prince Processes"></div>
<div id="prince_process_startup" title="Starting Up A Project"></div>
<div id="prince_process_startup_su1" title="Appoint an Executive and Project Manager">
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
</div>
<div id="document_view" class="tabdiv">

<header>
</header>
<div id="left">
<h5>Processes</h5>
<ul id="example" class="filetree">
		<li class="closed"><span class="folder">Starting Up a Project</span>
			<ul>
				<li><span class="file">Project Mandate</span></li>
				<li><span class="file">Business Case</span></li>
				<li><span class="file">Project Product Description</span></li>
				<li><span class="file">Daily Log</span></li>
				<li class="closed"><span class="folder">Executive Role and Appointment</span>
				<ul>
					<li><span class="file"><a href="#" onclick="get_content('executive_role');return false;" >Executive Role</a></span></li>
					<li><span class="file">Executive Appointment</span></li>
					<li><span class="file">Executive Checklist</span></li>
				</ul></li>	
			</ul>
		</li>
		<li class="closed"><span class="folder">Directing a Project</span>
			<ul>
				<li><span class="folder">Subfolder 2.1</span>
					<ul>
						<li><span class="file">File 2.1.1</span></li>
						<li><span class="file">File 2.1.2</span></li>
					</ul>
				</li>
				<li><span class="file">File 2.2</span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Directi</span>
			<ul>
				<li><span class="file">File 3.1</span></li>
			</ul>
		</li>
		<li><span class="file">File 4</span></li>
</ul>
<h5>Themes</h5>
<ul id="example2" class="filetree">
		<li class="closed"><span class="folder">Business Case</span>
			<ul>
				<li><span class="file">Project Mandate</span></li>
				<li><span class="file">Business Case</span></li>
				<li><span class="file">Project Product Description</span></li>
				<li><span class="file">Daily Log</span></li>
				<li><span class="folder">Executive Role and Appointment</span>
				<ul>
					<li><span class="file">Executive Role</span></li>
					<li><span class="file">Executive Appointment</span></li>
					<li><span class="file">Executive Checklist</span></li>
				</ul></li>	
			</ul>
		</li>
		<li class="closed"><span class="folder">Organization</span>
			<ul>
				<li><span class="folder">Subfolder 2.1</span>
					<ul>
						<li><span class="file">File 2.1.1</span></li>
						<li><span class="file">File 2.1.2</span></li>
					</ul>
				</li>
				<li><span class="file">File 2.2</span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Quality</span>
			<ul>
				<li><span class="file">File 3.1</span></li>
			</ul>
		</li>
		<li><span class="file">File 4</span></li>
</ul>
</div>
<div id="centre">
<div id="centre_head">Use Template
<button>Preview Document</button>
<button>View Template for this document</button><input type="checkbox" name="save_new_version"/>Minor edit, don't save a new version
</div><!-- centre_head -->
<div id="document_editor">
<form id="content_holder" >
<textarea id="main_content" name="main_content" cols="80" rows="60" >
</textarea>
</form>
</div><!-- end of document editor -->
</div><!-- end of centre -->



</div><!-- end of document_view -->
<div id="people_view" class="tabdiv">
<h2>People</h2>
Shows the people related to the project
</div>
</div><!-- end of tabs -->

</body>
</html>
