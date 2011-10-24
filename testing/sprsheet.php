<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>jQuery Sheet Tests</title>


 <!--Required-->
  <script type="text/javascript" src="../spreadsheet/jquery-1.5.2.js"></script>
  <script type="text/javascript" src="../spreadsheet/jquery-ui/ui/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="../spreadsheet/SlickGrid/slick.grid.css" type="text/css" media="screen" charset="utf-8" /> 
        <link rel="stylesheet" href="../spreadsheet/SlickGrid/css/smoothness/jquery-ui-1.8.5.custom.css" type="text/css" media="screen" charset="utf-8" /> 
  <link rel="stylesheet" href="../spreadsheet/SlickGrid/examples/examples.css" type="text/css" media="screen" charset="utf-8" /> 
  
<script type="text/javascript">
</script>




</head>

<body>
<table width="100%"> 
		<tr> 
			<td valign="top" width="50%"> 
				<div id="myGrid" style="width:600px;height:500px;display:none;"></div> 
			</td> 
			<td valign="top"> 
				<h2>Demonstrates:</h2> 
				<ul> 
					<li>basic grid with minimal configuration</li> 
				</ul> 
			</td> 
		</tr> 
		</table> 
<script src="../spreadsheet/SlickGrid/lib/jquery-1.4.3.min.js"></script> 
		<script src="../spreadsheet/SlickGrid/lib/jquery.event.drag-2.0.min.js"></script> 
 
        <script src="../spreadsheet/SlickGrid/slick.core.js"></script> 
        <script src="../spreadsheet/SlickGrid/slick.grid.js"></script> 
<script> 
 
		var grid;
 
		var columns = [
			{id:"title", name:"Title", field:"title"},
			{id:"duration", name:"Duration", field:"duration"},
			{id:"%", name:"% Complete", field:"percentComplete"},
			{id:"start", name:"Start", field:"start"},
			{id:"finish", name:"Finish", field:"finish"},
			{id:"effort-driven", name:"Effort Driven", field:"effortDriven"}
		];
 
		var options = {
			enableCellNavigation: true,
            enableColumnReorder: false
		};
 
		$(function() {
            var data = [];
			for (var i = 0; i < 500; i++) {
				data[i] = {
                    title: "Task " + i,
                    duration: "5 days",
                    percentComplete: Math.round(Math.random() * 100),
                    start: "01/01/2009",
                    finish: "01/05/2009",
                    effortDriven: (i % 5 == 0)
                };
			}
 
			grid = new Slick.Grid("#myGrid", data, columns, options);
 
            $("#myGrid").show();
		})
 
		</script> 
</body>
</html>
