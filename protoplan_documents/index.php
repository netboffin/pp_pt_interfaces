<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Protoplan Document Editor</title>
<script src="../development-bundle/jquery-1.6.2.js" type="text/javascript"></script>
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

</body>
</html>
