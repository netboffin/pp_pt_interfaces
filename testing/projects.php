<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Projects</title>
<style>
dl{
	font-family:Arial, Helvetica, sans-serif;
	width:500px;margin-left:50px;
	border-width:0px 1px 0px 1px;
	border-color:#ccc;
	border-style:dotted;	
	}
dt{padding-left:5px;}
dd{padding-bottom:5px;}
dd{padding-left:10px;font-size:small;border-bottom:1px #CCCCCC dotted;margin:15px 0px 5px 0px;}

/* I want the first dt to have a border on top */
div{clear:both;}
</style>

<script src="../js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="jquery_pagination/src/jquery.pagination.js"></script>
<link href="jquery_pagination/src/pagination.css"  type="text/css" rel="stylesheet" />
<script src="Projects.js" type="text/javascript"></script>

<script type="text/javascript">

  /**
             * Callback function that displays the content.
             *
             * Gets called every time the user clicks on a pagination link.
             *
             * @param {int}page_index New Page index
             * @param {jQuery} jq the container with the pagination links as a jQuery object
             */
		/*	function pageselectCallback(page_index, jq){
                // Get number of elements per pagionation page from form
                var items_per_page = $('#items_per_page').val();
                var max_elem = Math.min((page_index+1) * items_per_page, members.length);
                var newcontent = '';
                
                // Iterate through a selection of the content and build an HTML string
                for(var i=page_index*items_per_page;i<max_elem;i++)
                {
                    newcontent += '<dt>' + members[i][0] + '</dt>';
                    newcontent += '<dd class="state">' + members[i][2] + '</dd>';
                    newcontent += '<dd class="party">' + members[i][3] + '</dd>';
                }
                
                // Replace old content with new content
                $('#Searchresult').html(newcontent);
                
                // Prevent click eventpropagation
                return false;
            }*/

/* function getOptionsFromForm(){
                var opt = {callback: pageselectCallback};
                // Collect options from the text fields - the fields are named like their option counterparts
                $("input:text").each(function(){
                    opt[this.name] = this.className.match(/numeric/) ? parseInt(this.value) : this.value;
                });
                // Avoid html injections in this demo
                var htmlspecialchars ={ "&":"&amp;", "<":"&lt;", ">":"&gt;", '"':"&quot;"}
                $.each(htmlspecialchars, function(k,v){
                    opt.prev_text = opt.prev_text.replace(k,v);
                    opt.next_text = opt.next_text.replace(k,v);
                })
                return opt;
            }*/
function getProjectPage(page_index,jq){

var i = 0;
var num_items = 5;
var content="";
	//console.log(page_index);
/*

page index	0,  1,   2,    3,   4
start_point	0,  6,   12,  18   24

page index	0,  1,   2,    3,   4
start_point 0   5    10  15   20
stop_point  4   9   14  19
So start_point = page_index * 6
0 1 2  3  4 
5 6 7  8  9
*/
//0 * 0 for 0 ; <=0+4 
	var start_point = page_index * num_items; // 0*5,1*5,2*5 
	var stop_point = Math.min((start_point +4),projects.length-1); // 0+4,5+4,10+4

	for( i =start_point;i<=stop_point;i++)
	{
		content += "<tr><td>" + i +"</td><td>" +  projects[i][0] + "</td><td>" + projects[i][1] + "</td><td>" + projects[i][2] + "</td><td>"  + projects[i][3] + "</td><td>"+ projects[i][4] +"</td></tr>";		
	}
		
	$("#SearchResults").empty(); // Clear the searchresults
	$("#SearchResults" ).prepend(content);

return false;
}
 $(document).ready(function(){
				
                $("#Pagination").pagination(projects.length, {items_per_page:5,callback:getProjectPage,load_first_page:true});// members.length, optInit
       });			

</script>

</head>

<body>

<div class="page_explanation">
Once a user has logged in, this is the page they will go to<br />

It will list the projects they have access to: <br />
It will allow the user to filter the projects. for instance by people working on the project. <br />
By date , by budget, by over budget<br />

We need paging for this page
</div><!-- end of page_explanation -->

<!-- <div id="SearchResult">
</div> -->
<style>
#projects_table{width:80%; border-collapse:collapse;font-family:Arial, Helvetica, sans-serif;font-size:small;}
thead{color:white;padding: 5px 0 5px 10px;background-color: #6B6B6B;
    border-bottom: 1px solid #CCCCCC;
    border-collapse: collapse !important;
    border-left: 1px solid #CCCCCC;
    border-right: 1px solid #CCCCCC;
    color: white !important;
   }
	
th{padding: 5px 0 5px 10px;text-align:left;}
tr:nth-child(even){background:#F7F7F7;}
td{padding: 5px 0 5px 10px;font-size:small;}
#second_header{background-color: #E6E6E6;color:black;font-size:x-small;padding:10px 10px 10px 10px ;}
</style>
<table id="project_table"><thead><tr><th colspan="4">Project Profiles</th><th colspan="2">+ Add new project</th></tr>
<tr id="second_header"><th>ID</th><th>Name</th><th>Description</th><th>Budget</th><th>Actual  Expenditure</th><th>Complete Date</th></tr>
</thead><tbody id="SearchResults">
</tbody><!-- End of SearchResults -->
<tfoot><tr id="second_header"><th>ID</th><th>Name</th><th>Description</th><th>Budget</th><th>Actual  Expenditure</th><th>Complete Date</th></tr></tfoot>
</table>
<div id="Pagination" class="pagination">
<!-- Here's where the links go -->



</div><!-- End of Pagination -->


</body>
</html>
