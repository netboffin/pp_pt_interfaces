<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JQuery Practice</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script> 
 <link rel="stylesheet" href="../development-bundle/themes/blitzer/jquery-ui-1.8.15.custom.css" type="text/css" /> 
<style>
nav{height:100%;width:150px;margin-right:10px;}
#desktop{
		height:650px;
		width:1000px;
		border:1px dashed #FF9933;
		background:#006666;
		}
#princeStructure{width:350px;height:250px;}		
#princeProcesses{width:450px;height:350px;}
#princeStartUp{width:350px;height:250px;}
		
		
/*windows */
.window{border:1px black solid;background:white;}
.drag-handle{color:green;background-color:white;display:block;}
.ui-icon-closethick{
height:16px;
width:16px;
background-image:url(development-bundle/themes/blitzer/images/ui-icons_cc0000_256x240.png);
 /*your location of the image may differ*/
background-position: -96px -128px;
float:right;
 }






</style>
<script language="javascript" type="text/javascript">
$(function(){
$('p').append("Hello World");

// For each element of class window get its title tag and prepend it to the content of the div
$('.window').each(function(n){
	
$(this).prepend("<span class='drag-handle'>" + $(this).attr("title") +
	 "<a class='ui-dialog-titlebar-close ui-corner-all' href='#' role='button'>" +
	 "<span class='ui-icon ui-icon-closethick'></span>" +
"</a></span>");

	}); // end of each
	
	$( ".window" ).draggable({
   containment: '#desktop',
   stack:".window",
   handle: $(".drag-handle"),
  
 });		
	
	
	
}); // end of document ready stack: {group: $(".window"), min: 1}, opacity: 0.8

	




</script>
</head>

<body>
<div id="desktop">
<div id="princeStructure" class="window" title="Prince Structure">

<img src="images/PrinceStructure.gif" width="350" /></div>
<div id="princeProcesses" class="window" title="Prince Processes"><img src="images/prince2_processes.jpg" width="600"/></div>
<div id="princeStartUp" class="window" title="Starting Up a Project"><img src="images/process_su.gif" width="350"/></div>
</div><!-- end of desktop -->

</body>
</html>
