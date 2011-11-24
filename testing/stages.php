<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Project Stages</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="mbraak/tree.jquery.js"></script>
<link rel="stylesheet" href="mbraak/jqtree.css">
<style>
#hidden{display:none}
header h2{text-align:center;}
div#tree1{float:left;border:solid 1px green;width:400px;}
div#stage_plan{float:left;margin-left:30px;border:1px solid black;padding:10px;}
#menu{float:none;clear:both;}
</style>
<script type="text/javascript">
$(function (){var data = [
    {
        label: 'Analysis',
        children: [
			{ label: 'Clarify purpose of system', children:[{label:'Ask Questions about stage'}]},
			{ label: 'Clarify requirements of the system'},	
            { label: 'Build Prototype' },
            { label: 'Investigate Existing Systems' },
			{ label: 'Scenarios Use Cases' }	,
			{ label: 'Process analysis'},
			{ label: 'Data analysis'}	,
			{ label: 'Event analysis'}
        ]
    },
    {
        label: 'Design',
        children: [
            { label: 'Data Design' },	
			{ label: 'Use Cases'},
			{ label: 'User Interface Design'},
			{label: 'OOD'}
			
        ]
    }
];

 $('#tree1').tree({
        data: data,
		selectable: true
    });

});
$(function() {
   
});

</script>
</head>

<body>
<div id="hidden">
<h1>Project Name</h1>
<h2>Start Up</h2>
<h2>Initiation</h2>
<h2>Analysis<br /><h3>Build Prototype</h3></h2>		
<h2>Design</h2>
<h2>Implementation</h2>
<h2>Testing</h2>
<h2>Documentation</h2>
<h2>Maintenance - User Support</h2>
</div>

<header>
<h1>Project : Goject </h1> <h2>Stage Plan</h2>
</header>
<div id="Stages">
</div>
<div id="tree1"></div>
<div id="stage_plan"><h2>This is the plan for the analysis stage</h2>
Show dependencies<br/>
Show Links<br/>
Show Sub stages<br/>
Show Description of stage<br/>
Show documents associated<br/>
Show link to stage plan<br/>
Show people working on this stage<br/>


</div>
<div id="menu">
<a href="#">Add  Stage</a>
<a href="#">Delete Stage</a>
<a href="#">Edit Stage</a>
</div>

</body>
</html>
