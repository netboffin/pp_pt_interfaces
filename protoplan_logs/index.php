<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>lessons learned tests</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script type="text/javascript" src="DataTables-1.8.2/media/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="../themes/development-bundle/themes/hot-sneaks/jquery-ui-1.8.16.custom.css" type="text/css" /> 

<link type="text/css" href="DataTables-1.8.2/media/css/demo_table_jui.css" rel="stylesheet"/>

<script type="text/javascript">
$(function(){
	
$("#accordion").accordion({ "autoHeight": false});
$('#example').dataTable({
						  "aoColumns": [
                                        null,
                                        null, //put as many null values as your columns
										null,
										null,
										null
										
                    ]
});
$('#new_lesson_learnt').hide();
$('#add_new_lesson').click(	function(){
		$('#new_lesson_learnt').toggle();
		});




});


</script>
<style>
/*#example_filter{float:right;}*/
table{width:100%;float:left;padding-bottom:0px;}
</style>


</head>

<body>
Questions we want the lessons learned log to answer :
<ul>
<li>What worked well—or didn’t work well—either for this project or for the project team?</li>
<li>What needs to be done over or differently?</li>
<li>What surprises did the team have to deal with?</li>
<li>What project circumstances were not anticipated?</li>
<li>Were the project goals attained? If not, what changes need to be made to meet goals in the future?</li>
</ul>
 
In order to create a list of lessons learned on a project that is going to be useful, we will need each lesson to have a title and category.

Quick Requirements analysis then work on the GUI. Gets something done and helps gather more specific requirements.

<div id="accordion">
    <h3><a href="#">Lessons Learned Log</a></h3>
    <div >
		<table id="example">
		<thead>
		<tr><th>Title</th><th>Priority</th><th>Category</th>
		<th>Date</th><th>Author</th></tr>
		</thead>
		<tbody>
		<tr><td>Quick Requirements then GUI prototype</td><td>Imp and Urg</td><td>Requirements</td>
		<td>24/12/ 2001</td><td>Author</td></tr>	
		<tr><td>Record Work Each Day in RedNotebook</td><td>Imp and Urg</td><td>Best Practice</td>
		<td>Date</td><td>Author</td></tr>
		</tbody>	
		</table>
		<a href="#" id="add_new_lesson">Add New Lesson Learnt</a>
		<div id="new_lesson_learnt">
		<form>
<label>Lesson Type : </label><input  type="text" name="lesson_type"/>
<label>Event : </label><input type="text" name="event"/>
<label>Effect : </label><textarea id="effect" name="effect"></textarea>
<label>Causes/Trigger : </label><textarea id="causes_trigger" name="causes_trigger"></textarea>
<label>Early Warnings :  </label><textarea id="early_warnings" name="early_warnings"></textarea>
<label>Recommendations : </label><textarea id="recommendations" name="recommendations"></textarea>
<label>Previously identified : </label><input type="checkbox" />
<label>Date Logged : </label><input type="text" name="date_logged"/>
<label>Logged By : </label><input type="text" name="logged_by"/>
<label>Priority : </label>
<select id="priority" name="priority">
  <option value="1">Urgent and Important</option>
  <option value="2">Urgent but not important</option>
  <option value="3">Important but not Urgent</option>
  <option value="4">Not Urgent and not Important</option>
</select>

</form>

		
		</div><!-- end of new lesson learnt -->
			
	</div>
    <h3><a href="#">Daily Log</a></h3>
    <div>Second content</div>
</div>



</body>
</html>
