<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Protoplan main user interface</title>
<!-- Links to jQuery ui theme -->
<script src="development-bundle/jquery-1.6.2.js" type="text/javascript"></script>
<script src="development-bundle/ui/jquery-ui-1.8.15.custom.js" type="text/javascript"></script>


<!--<script src="development-bundle/ui/jquery.ui.mouse.js" type="text/javascript"></script>
<script src="development-bundle/ui/jquery.ui.position.js" type="text/javascript"></script>
<script src="development-bundle/ui/jquery.ui.draggable.js" type="text/javascript">
'top'r
.ui-dialog

</script>-->
<link href="css/blitzer/jquery-ui-1.8.15.custom.css" type="text/css" rel="stylesheet" media="all" />



<style type="text/css">
nav{height:100%;width:150px;margin-right:10px;}
#desktop{
		height:650px;
		width:1000px;
		border:1px dashed #FF9933;
		}
#prince_structure{height:270px;width:380px;background-color:white;background-image:url(images/PrinceStructure.gif);background-repeat:no-repeat;}
#prince_processes{height:350px;width:400px;background-image:url(images/prince2_processes_small.jpg);background-repeat:no-repeat;}

</style>
<script type="text/javascript">
$(function(){
	var desktop_position = $('#desktop').position();
	var desktop_width = $('#desktop').width();
	var prince_processes_width = $('#prince_processes').width();
	var prince_processes_left = desktop_width - (prince_processes_width+50);/* Look into the 50 */
	var prince_processes_top = desktop_position.top;
		$('#prince_structure')
    .dialog({ minHeight:'305', minWidth:'375',
	position:[desktop_position.left,desktop_position.top],
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

/* x1, y1, x2,y2    top left right bottom [8,28,550,230] $('#prince_structure.ui-dialog-titlebar').draggable({containment:'parent'});*/
$('#prince_structure').click(function(){
	
	$('#prince_processes').dialog('open');
}
);
//$('#prince_structure').click($('#prince_processes').show());

$("#executive_job_description").markItUp(mySettings);

});/* End of $( or document ready */

</script>


</head>

<body>
<div id="head">Protoplan - Mick Brogan</div>
<!--<nav id="main_menu"> 
<a href="#">Prince Structure</a>
</nav>-->
<div id="desktop">


<div id="prince_structure" title="Prince Structure" ></div><!-- end of prince_structure dialog -->
<div id="prince_processes" title="Prince Processes"></div><!--
<div id="prince_process_startup" title="Starting Up A Project"></div>-->


</div><!-- end of desktop division -->

<div id="executive_job_description"></div>

</body>
</html>
