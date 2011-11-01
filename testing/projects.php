<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Projects</title>
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
		content += "<tr><td headers='id'>" + i +"</td><td headers='name'><a href='mbc.php?id=" +  i  + "'>"+  projects[i][0] + "</a></td><td headers='description'>" + projects[i][1] + "</td><td headers='budget'>" + projects[i][2] + "</td><td headers='actual_expenditure'>"  + projects[i][3] + "</td><td headers='percentage_complete'>"+ projects[i][4] +"</td></tr>";		
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
#project_table{width:80%;font-family:Arial, Helvetica, sans-serif;font-size:small;

}
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
#second_headers{background-color: #E6E6E6;color:black;font-size:x-small;padding:10px 10px 10px 10px ;}

th,td{
padding:10px;
	border-right:1px solid #999;
	border-bottom:1px solid #999;
}
#project_table{
	border-top:1px solid #999;
	border-left:1px solid #999;
	 border-collapse:collapse
	}
</style>
<table id="project_table" summary="This table shows all the projects for your account and summary information about each project"><thead><tr><th colspan="4">Project Profiles</th><th colspan="2">+ Add new project</th></tr>
<tr id="second_headers"><th id="id">ID</th><th id="name">Name</th><th id="description">Description</th><th id="budget">Budget</th><th id="actual_expenditure">Actual  Expenditure</th><th id="percentage_complete">% complete</th></tr>
</thead><tbody id="SearchResults">
</tbody><!-- End of SearchResults -->
<tfoot><tr id="second_headers"><th>ID</th><th>Name</th><th>Description</th><th>Budget</th><th>Actual  Expenditure</th><th>Complete Date</th></tr></tfoot>
</table>
<div id="Pagination" class="pagination">
<!-- Here's where the links go -->
<div id="filter">


Client : <select id="select_client"><option>A Love Supreme</option><option>Ahmad Khoshnoudi</option><option>Life Media</option><option>Shaun Brogan</option></select>

Workers<
</div>


</div><!-- End of Pagination -->
<div id="improvements">


No basis for comparison between projects so that we can 
OK so there is no support for selecting projects.
No basis for allocation of people and resources.
No categorization of projects. <h2>Have we looked into the categorization of projects</h2>
No companies as an account might be owned by someone working for more than one company.
No way of departmentalizing projects.
No way of <h2><a href="#prioritize">prioritizing projects</a></h2>

 
</div>
<div id="selection"><a name="selection"></a></div>
<div id="categorization"><a name="categorization"></a></div>
<div id="prioritizing projects"><a name="prioritize"></a></div>
</body>
</html>
