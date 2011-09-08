<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>JQuery Practice</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js" type="text/javascript"></script> 
<link rel="stylesheet" type="text/css" media="all" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/ui-darkness/jquery-ui.css"/>
 
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
.drag-handle{background-color:red;display:block;}
.ui-icon{display:inline;float:right;}
</style>
<script language="javascript" type="text/javascript">
$(function(){
$('p').append("Hello World");

// For each element of class window get its title tag and prepend it to the content of the div
$('.window').each(function(n){
	
$(this).prepend("<span class='drag-handle'>" + $(this).attr("title") +
	 "<a href='#' role='button'>" +
	 "<span class='icontester ui-icon ui-icon-closethick'></span>" +
"</a></span>");

	}); // end of each
	
	$( ".window" ).draggable({
   containment: '#desktop',
   stack:".window",
   handle: $(".drag-handle"),
  
 });		
	
	
	
}); // end of document ready stack: {group: $(".window"), min: 1}, opacity: 0.8

	$(function() {
		$(".icontester")
		.mouseenter(function() {
			$(this).addClass('ui-state-hover');
		})
		.mouseleave(function() {
			$(this).removeClass("ui-state-hover");
		});
	});




</script>
</head>

<body>
<span id="icontest" class="ui-icon ui-icon-closethick"></span>
<div id="desktop">
<div id="princeStructure" class="window" title="Prince Structure">

<img src="images/PrinceStructure.gif" width="350" /></div>
<div id="princeProcesses" class="window" title="Prince Processes"><img src="images/prince2_processes.jpg" width="600"/></div>
<div id="princeStartUp" class="window" title="Starting Up a Project"><img src="images/process_su.gif" width="350"/></div>
</div><!-- end of desktop -->

</body>
</html>
