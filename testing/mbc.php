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
<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js" ></script >
<!-- End of Document Editor Scripts -->



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
		background:#006666;
		}
		html{height:100%}
		body{height:100%}
		#tabs{height:95%;}
#prince_view{height:100%;}


</style>
	
		


</head>

<body>

<div id="tabs" class="widget">
<ul class="tabnav">
		<li><a href="#prince_view">Prince </a></li>
		<li><a href="#document_view">Documents</a></li>
		<li><a href="#log_view">Logs</a></li>
		<li><a href="#checklist_view">Checklists</a></li>
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
</div>

<div id="people_view" class="tabdiv">
<h2>People</h2>
Shows the people related to the project
</div><!-- end of people_view -->
</div> <!-- end of tabs -->
</body>
</html>
